<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Quotation;
use App\Models\SalesOrder;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Mail\SalesOrderMail;
use App\Mail\SalesOrderDispatchMail;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Mail;

class SalesOrderController extends Controller
{
    public function index(Request $request)
    {
        $query = SalesOrder::query()
            ->with(['quotation', 'items']);

        if ($request->filled('status')) {
            $query->where(
                'order_status',
                $request->status
            );
        }

        if ($request->filled('payment_status')) {
            $query->where(
                'payment_status',
                $request->payment_status
            );
        }

        if ($request->filled('search')) {

            $search = $request->search;

            $query->where(function ($q) use ($search) {

                $q->where(
                    'order_number',
                    'like',
                    "%{$search}%"
                )
                ->orWhere(
                    'customer_name',
                    'like',
                    "%{$search}%"
                )
                ->orWhere(
                    'company',
                    'like',
                    "%{$search}%"
                )
                ->orWhere(
                    'email',
                    'like',
                    "%{$search}%"
                );

            });
        }

        

        $allowedDeliveryStatuses = [
    'pending',
    'preparing',
    'dispatched',
    'in_transit',
    'delivered',
];

if (
    $request->filled('delivery_status')
    &&
    in_array(
        $request->delivery_status,
        $allowedDeliveryStatuses,
        true
    )
) {

    $query->where(
        'delivery_status',
        $request->delivery_status
    );
}

        $orders = $query
            ->latest('order_date')
            ->latest('id')
            ->paginate(20)
            ->withQueryString();

        $stats = [
    'total' =>
        SalesOrder::count(),

    'confirmed' =>
        SalesOrder::where(
            'order_status',
            'confirmed'
        )->count(),

    'processing' =>
        SalesOrder::where(
            'order_status',
            'processing'
        )->count(),

    'ready' =>
        SalesOrder::where(
            'order_status',
            'ready'
        )->count(),

    'dispatched' =>
        SalesOrder::where(
            'order_status',
            'dispatched'
        )->count(),

    'delivered' =>
        SalesOrder::where(
            'order_status',
            'delivered'
        )->count(),
];

        return view(
            'admin.sales-orders.index',
            compact('orders', 'stats')
        );
    }


    public function convert(Quotation $quotation)
    {
        /*
        |--------------------------------------------------------------------------
        | Only Accepted Quotations
        |--------------------------------------------------------------------------
        */

        if ($quotation->status !== 'accepted') {
            return back()->with(
                'error',
                'Only accepted quotations can be converted into a sales order.'
            );
        }

        /*
        |--------------------------------------------------------------------------
        | Prevent Duplicate Order
        |--------------------------------------------------------------------------
        */

        if ($quotation->salesOrder) {
            return redirect()
                ->route(
                    'admin.sales-orders.show',
                    $quotation->salesOrder
                )
                ->with(
                    'info',
                    'This quotation has already been converted into a sales order.'
                );
        }

        $quotation->load('items');

        $salesOrder = DB::transaction(
            function () use ($quotation) {

                /*
                |--------------------------------------------------------------------------
                | Create Temporary Order First
                |--------------------------------------------------------------------------
                */

                $salesOrder = SalesOrder::create([
                    'quotation_id' =>
                        $quotation->id,

                    'order_number' =>
                        'TEMP-' . uniqid(),

                    'customer_name' =>
                        $quotation->customer_name,

                    'company' =>
                        $quotation->company,

                    'email' =>
                        $quotation->email,

                    'phone' =>
                        $quotation->phone,

                    'city' =>
                        $quotation->city,

                    'subtotal' =>
                        $quotation->subtotal,

                    'discount' =>
                        $quotation->discount,

                    'gst_amount' =>
                        $quotation->gst_amount,

                    'grand_total' =>
                        $quotation->grand_total,

                    'payment_status' =>
                        'pending',

                    'order_status' =>
                        'confirmed',

                    'order_date' =>
                        now()->toDateString(),
                ]);

                /*
                |--------------------------------------------------------------------------
                | Safe Order Number From Actual Database ID
                |--------------------------------------------------------------------------
                */

                $salesOrder->update([
                    'order_number' =>
                        'ASEW-SO-' .
                        now()->format('Y') .
                        '-' .
                        str_pad(
                            $salesOrder->id,
                            5,
                            '0',
                            STR_PAD_LEFT
                        ),
                ]);

                /*
                |--------------------------------------------------------------------------
                | Copy Quotation Items
                |--------------------------------------------------------------------------
                */

                foreach ($quotation->items as $item) {

                    $salesOrder->items()->create([
                        'product_id' =>
                            $item->product_id,

                        'product_name' =>
                            $item->product_name,

                        'product_code' =>
                            $item->product_code,

                        'quantity' =>
                            $item->quantity,

                        'unit_price' =>
                            $item->unit_price,

                        'total' =>
                            $item->total,
                    ]);

                }

                return $salesOrder;
            }
        );

        return redirect()
            ->route(
                'admin.sales-orders.show',
                $salesOrder
            )
            ->with(
                'success',
                'Sales order created successfully.'
            );
    }


    public function show(SalesOrder $salesOrder)
    {
        $salesOrder->load([
            'quotation',
            'items.product',
        ]);

        return view(
            'admin.sales-orders.show',
            compact('salesOrder')
        );
    }


    public function update(Request $request, SalesOrder $salesOrder)
{
    $validated = $request->validate([

        'order_status' => [
            'required',
            'in:confirmed,processing,ready,dispatched,delivered,cancelled',
        ],

        'payment_status' => [
            'required',
            'in:pending,partial,paid,refunded',
        ],

        'delivery_status' => [
            'required',
            'in:pending,preparing,dispatched,in_transit,delivered',
        ],

        'courier_name' => [
            'nullable',
            'string',
            'max:255',
        ],

        'tracking_number' => [
            'nullable',
            'string',
            'max:255',
        ],

        'dispatch_date' => [
            'nullable',
            'date',
        ],

        'expected_delivery_date' => [
            'nullable',
            'date',
        ],

        'delivery_address' => [
            'nullable',
            'string',
            'max:2000',
        ],

        'notes' => [
            'nullable',
            'string',
            'max:3000',
        ],
    ]);


    /*
    |--------------------------------------------------------------------------
    | Automatically sync Sales Order status with delivery
    |--------------------------------------------------------------------------
    */

    if (
        in_array(
            $validated['delivery_status'],
            ['dispatched', 'in_transit']
        )
        &&
        $validated['order_status'] !== 'cancelled'
    ) {
        $validated['order_status'] = 'dispatched';
    }


    if ($validated['delivery_status'] === 'delivered') {

        $validated['order_status'] = 'delivered';

        if (!$salesOrder->delivered_at) {
            $validated['delivered_at'] = now();
        }

    } else {

        $validated['delivered_at'] = null;
    }


    /*
    |--------------------------------------------------------------------------
    | Auto-set dispatch date
    |--------------------------------------------------------------------------
    */

    if (
        in_array(
            $validated['delivery_status'],
            ['dispatched', 'in_transit', 'delivered']
        )
        &&
        empty($validated['dispatch_date'])
    ) {

        $validated['dispatch_date'] =
            $salesOrder->dispatch_date ?? now()->toDateString();
    }


    $salesOrder->update($validated);


    return back()->with(
        'success',
        'Sales order and delivery information updated successfully.'
    );
}
    
    public function document(SalesOrder $salesOrder)
{
    $salesOrder->load([
        'quotation',
        'items.product',
    ]);

    return view('admin.sales-orders.document', compact('salesOrder'));
}

     public function send(SalesOrder $salesOrder)
{
    $salesOrder->load([
        'quotation',
        'items.product',
    ]);

    if (!$salesOrder->email) {
        return back()->with(
            'error',
            'Customer email address is not available.'
        );
    }

    try {

        Mail::to($salesOrder->email)
            ->send(new SalesOrderMail($salesOrder));

        return back()->with(
            'success',
            'Order confirmation has been emailed successfully to '
            . $salesOrder->email . '.'
        );

    } catch (\Throwable $e) {

        Log::error('Sales order email failed.', [
            'sales_order_id' => $salesOrder->id,
            'order_number' => $salesOrder->order_number,
            'customer_email' => $salesOrder->email,
            'delivery_status' => $salesOrder->delivery_status,
            'error' => $e->getMessage(),
        ]);

        return back()->with(
            'error',
            'Mail Error: ' . $e->getMessage()
        );
    }
}
public function sendDispatchEmail(SalesOrder $salesOrder)
{
    $salesOrder->load([
        'quotation',
        'items.product',
    ]);

    if (!$salesOrder->email) {

        return back()->with(
            'error',
            'Customer email address is not available.'
        );
    }

    if (
        !in_array(
            $salesOrder->delivery_status,
            ['dispatched', 'in_transit', 'delivered'],
            true
        )
    ) {

        return back()->with(
            'error',
            'Set the delivery status to Dispatched, In Transit or Delivered before sending a delivery notification.'
        );
    }

    try {

        Mail::to($salesOrder->email)
            ->send(
                new SalesOrderDispatchMail($salesOrder)
            );

        return back()->with(
            'success',
            'Delivery notification has been sent successfully to '
            . $salesOrder->email . '.'
        );

    } catch (\Throwable $e) {

        Log::error('Sales order dispatch email failed.', [
            'sales_order_id' => $salesOrder->id,
            'order_number' => $salesOrder->order_number,
            'customer_email' => $salesOrder->email,
            'delivery_status' => $salesOrder->delivery_status,

            // Full debugging information
            'exception_class' => get_class($e),
            'message' => $e->getMessage(),
            'file' => $e->getFile(),
            'line' => $e->getLine(),
        ]);

        return back()->with(
            'error',
            'Mail Error: ' . $e->getMessage()
        );
    }
}

}