<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Mail\SalesOrderDispatchMail;
use App\Mail\SalesOrderMail;
use App\Models\Quotation;
use App\Models\SalesOrder;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Str;

class SalesOrderController extends Controller
{
    /**
     * List sales orders.
     */
    public function index(Request $request)
    {
        $query = SalesOrder::query()
            ->with([
                'quotation',
                'items',
            ]);

        /*
        |--------------------------------------------------------------------------
        | Order Status Filter
        |--------------------------------------------------------------------------
        */

        $allowedOrderStatuses = [
            'confirmed',
            'processing',
            'ready',
            'dispatched',
            'delivered',
            'cancelled',
        ];

        if (
            $request->filled('status') &&
            in_array(
                $request->status,
                $allowedOrderStatuses,
                true
            )
        ) {
            $query->where(
                'order_status',
                $request->status
            );
        }

        /*
        |--------------------------------------------------------------------------
        | Payment Status Filter
        |--------------------------------------------------------------------------
        */

        $allowedPaymentStatuses = [
            'pending',
            'partial',
            'paid',
            'refunded',
        ];

        if (
            $request->filled('payment_status') &&
            in_array(
                $request->payment_status,
                $allowedPaymentStatuses,
                true
            )
        ) {
            $query->where(
                'payment_status',
                $request->payment_status
            );
        }

        /*
        |--------------------------------------------------------------------------
        | Search
        |--------------------------------------------------------------------------
        */

        if ($request->filled('search')) {
            $search = trim($request->search);

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

        /*
        |--------------------------------------------------------------------------
        | Delivery Status Filter
        |--------------------------------------------------------------------------
        */

        $allowedDeliveryStatuses = [
            'pending',
            'preparing',
            'dispatched',
            'in_transit',
            'delivered',
        ];

        if (
            $request->filled('delivery_status') &&
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

        /*
        |--------------------------------------------------------------------------
        | Orders
        |--------------------------------------------------------------------------
        */

        $orders = $query
            ->latest('order_date')
            ->latest('id')
            ->paginate(20)
            ->withQueryString();

        /*
        |--------------------------------------------------------------------------
        | Dashboard Stats
        |--------------------------------------------------------------------------
        */

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
            compact(
                'orders',
                'stats'
            )
        );
    }


    /**
     * Convert accepted quotation into sales order.
     */
    public function convert(Quotation $quotation)
    {
        /*
        |--------------------------------------------------------------------------
        | Fast Pre-check
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
        | Existing Sales Order Check
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

        try {
            $salesOrder = DB::transaction(function () use ($quotation) {

                /*
                |--------------------------------------------------------------------------
                | Lock Quotation Row
                |--------------------------------------------------------------------------
                |
                | Re-fetch and lock the quotation inside the transaction.
                | This prevents two requests from converting the same quotation
                | at exactly the same time.
                |
                */

                $lockedQuotation = Quotation::query()
                    ->whereKey($quotation->id)
                    ->lockForUpdate()
                    ->firstOrFail();

                /*
                |--------------------------------------------------------------------------
                | Status Must Still Be Accepted
                |--------------------------------------------------------------------------
                */

                if ($lockedQuotation->status !== 'accepted') {
                    throw new \RuntimeException(
                        'QUOTATION_NOT_ACCEPTED'
                    );
                }

                /*
                |--------------------------------------------------------------------------
                | Check Again While Locked
                |--------------------------------------------------------------------------
                */

                $existingOrder = SalesOrder::query()
                    ->where(
                        'quotation_id',
                        $lockedQuotation->id
                    )
                    ->first();

                if ($existingOrder) {
                    return $existingOrder;
                }

                $lockedQuotation->load('items');

                /*
                |--------------------------------------------------------------------------
                | Create Sales Order
                |--------------------------------------------------------------------------
                */

                $salesOrder = SalesOrder::create([
                    'quotation_id' =>
                        $lockedQuotation->id,

                    /*
                     * Temporary unique value.
                     * Final number is generated using actual database ID.
                     */
                    'order_number' =>
                        'TEMP-' . Str::uuid()->toString(),

                    'customer_name' =>
                        $lockedQuotation->customer_name,

                    'company' =>
                        $lockedQuotation->company,

                    'email' =>
                        $lockedQuotation->email,

                    'phone' =>
                        $lockedQuotation->phone,

                    'city' =>
                        $lockedQuotation->city,

                    'subtotal' =>
                        $lockedQuotation->subtotal,

                    'discount' =>
                        $lockedQuotation->discount,

                    'gst_amount' =>
                        $lockedQuotation->gst_amount,

                    'grand_total' =>
                        $lockedQuotation->grand_total,

                    'payment_status' =>
                        'pending',

                    'order_status' =>
                        'confirmed',

                    'order_date' =>
                        now()->toDateString(),
                ]);

                /*
                |--------------------------------------------------------------------------
                | Final Sales Order Number
                |--------------------------------------------------------------------------
                */

                $salesOrder->update([
                    'order_number' =>
                        'ASEW-SO-' .
                        now()->format('Y') .
                        '-' .
                        str_pad(
                            (string) $salesOrder->id,
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

                foreach ($lockedQuotation->items as $item) {
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
            });

        } catch (\RuntimeException $exception) {

            if (
                $exception->getMessage() ===
                'QUOTATION_NOT_ACCEPTED'
            ) {
                return back()->with(
                    'error',
                    'Only accepted quotations can be converted into a sales order.'
                );
            }

            Log::error(
                'Sales order conversion failed.',
                [
                    'quotation_id' =>
                        $quotation->id,

                    'error' =>
                        $exception->getMessage(),
                ]
            );

            return back()->with(
                'error',
                'Sales order could not be created. Please try again.'
            );

        } catch (\Throwable $exception) {

            Log::error(
                'Sales order conversion failed.',
                [
                    'quotation_id' =>
                        $quotation->id,

                    'exception_class' =>
                        get_class($exception),

                    'error' =>
                        $exception->getMessage(),
                ]
            );

            return back()->with(
                'error',
                'Sales order could not be created. Please try again.'
            );
        }

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


    /**
     * Show sales order.
     */
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


    /**
     * Update sales order and delivery information.
     */
    public function update(
        Request $request,
        SalesOrder $salesOrder
    ) {
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
        | Cancelled Order Protection
        |--------------------------------------------------------------------------
        |
        | If admin explicitly selects Cancelled, delivery status must not
        | automatically turn the order back into Delivered/Dispatched.
        |
        */

        $isCancelled =
            $validated['order_status'] === 'cancelled';

        /*
        |--------------------------------------------------------------------------
        | Sync Order Status With Delivery
        |--------------------------------------------------------------------------
        */

        if (!$isCancelled) {

            if (
                in_array(
                    $validated['delivery_status'],
                    [
                        'dispatched',
                        'in_transit',
                    ],
                    true
                )
            ) {
                $validated['order_status'] =
                    'dispatched';
            }

            if (
                $validated['delivery_status'] ===
                'delivered'
            ) {
                $validated['order_status'] =
                    'delivered';

                if (!$salesOrder->delivered_at) {
                    $validated['delivered_at'] =
                        now();
                }
            }
        }

        /*
        |--------------------------------------------------------------------------
        | Delivered Timestamp
        |--------------------------------------------------------------------------
        |
        | Do not blindly erase historical delivered_at.
        |
        */

        if (
            !$isCancelled &&
            $validated['delivery_status'] !== 'delivered'
        ) {
            /*
             * Only keep null if this order has never been delivered.
             * Existing historical delivered_at is preserved.
             */
            if (!$salesOrder->delivered_at) {
                $validated['delivered_at'] = null;
            }
        }

        /*
        |--------------------------------------------------------------------------
        | Auto-set Dispatch Date
        |--------------------------------------------------------------------------
        */

        if (
            !$isCancelled &&
            in_array(
                $validated['delivery_status'],
                [
                    'dispatched',
                    'in_transit',
                    'delivered',
                ],
                true
            ) &&
            empty($validated['dispatch_date'])
        ) {
            $validated['dispatch_date'] =
                $salesOrder->dispatch_date
                ?? now()->toDateString();
        }

        $salesOrder->update($validated);

        return back()->with(
            'success',
            'Sales order and delivery information updated successfully.'
        );
    }


    /**
     * Printable sales order document.
     */
    public function document(
        SalesOrder $salesOrder
    ) {
        $salesOrder->load([
            'quotation',
            'items.product',
        ]);

        return view(
            'admin.sales-orders.document',
            compact('salesOrder')
        );
    }


    /**
     * Send sales order confirmation email.
     */
    public function send(
        SalesOrder $salesOrder
    ) {
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
                ->send(
                    new SalesOrderMail($salesOrder)
                );

            return back()->with(
                'success',
                'Order confirmation has been emailed successfully to ' .
                $salesOrder->email .
                '.'
            );

        } catch (\Throwable $exception) {

            /*
             * Full error stays in Laravel log.
             * It is NOT exposed in the admin UI.
             */
            Log::error(
                'Sales order email failed.',
                [
                    'sales_order_id' =>
                        $salesOrder->id,

                    'order_number' =>
                        $salesOrder->order_number,

                    'customer_email' =>
                        $salesOrder->email,

                    'delivery_status' =>
                        $salesOrder->delivery_status,

                    'exception_class' =>
                        get_class($exception),

                    'error' =>
                        $exception->getMessage(),
                ]
            );

            return back()->with(
                'error',
                'Order confirmation email could not be sent. Please check the mail configuration and try again.'
            );
        }
    }


    /**
     * Send dispatch/delivery notification.
     */
    public function sendDispatchEmail(
        SalesOrder $salesOrder
    ) {
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
                [
                    'dispatched',
                    'in_transit',
                    'delivered',
                ],
                true
            )
        ) {
            return back()->with(
                'error',
                'Set the delivery status to Dispatched, In Transit or Delivered before sending a delivery notification.'
            );
        }

        /*
         * Cancelled orders must not send dispatch notifications.
         */
        if (
            $salesOrder->order_status ===
            'cancelled'
        ) {
            return back()->with(
                'error',
                'Delivery notification cannot be sent for a cancelled sales order.'
            );
        }

        try {
            Mail::to($salesOrder->email)
                ->send(
                    new SalesOrderDispatchMail(
                        $salesOrder
                    )
                );

            return back()->with(
                'success',
                'Delivery notification has been sent successfully to ' .
                $salesOrder->email .
                '.'
            );

        } catch (\Throwable $exception) {

            Log::error(
                'Sales order dispatch email failed.',
                [
                    'sales_order_id' =>
                        $salesOrder->id,

                    'order_number' =>
                        $salesOrder->order_number,

                    'customer_email' =>
                        $salesOrder->email,

                    'delivery_status' =>
                        $salesOrder->delivery_status,

                    'exception_class' =>
                        get_class($exception),

                    'error' =>
                        $exception->getMessage(),
                ]
            );

            return back()->with(
                'error',
                'Delivery notification could not be sent. Please check the mail configuration and try again.'
            );
        }
    }
}