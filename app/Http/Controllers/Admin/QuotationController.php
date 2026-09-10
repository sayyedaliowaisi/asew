<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\ProductEnquiry;
use App\Models\Quotation;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Mail\QuotationMail;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Str;

class QuotationController extends Controller
{
    /**
     * List quotations.
     */
    public function index(Request $request)
    {
        $query = Quotation::query()
            ->with([
                'enquiry',
                'items',
            ]);


        if ($request->filled('status')) {

            $query->where(
                'status',
                $request->status
            );

        }


        if ($request->filled('search')) {

            $search =
                trim($request->search);


            $query->where(function ($q) use ($search) {

                $q->where(
                    'quotation_number',
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
                )
                ->orWhere(
                    'phone',
                    'like',
                    "%{$search}%"
                );

            });

        }


        $quotations = $query
            ->latest('quotation_date')
            ->latest('id')
            ->paginate(20)
            ->withQueryString();


        $stats = [

            'total' =>
                Quotation::count(),

            'draft' =>
                Quotation::where(
                    'status',
                    'draft'
                )->count(),

            'sent' =>
                Quotation::where(
                    'status',
                    'sent'
                )->count(),

            'accepted' =>
                Quotation::where(
                    'status',
                    'accepted'
                )->count(),

            'rejected' =>
                Quotation::where(
                    'status',
                    'rejected'
                )->count(),

        ];


        return view(
            'admin.quotations.index',
            compact(
                'quotations',
                'stats'
            )
        );
    }



    /**
     * Show quotation creation form.
     */
    public function create(ProductEnquiry $enquiry)
    {
        $enquiry->load('product');

        return view(
            'admin.quotations.create',
            compact('enquiry')
        );
    }



    /**
     * Save quotation.
     */
    public function store(
        Request $request,
        ProductEnquiry $enquiry
    ) {
        $validated = $request->validate([

            'quantity' => [
                'required',
                'integer',
                'min:1',
                'max:10000',
            ],

            'unit_price' => [
                'required',
                'numeric',
                'min:0',
            ],

            'discount' => [
                'nullable',
                'numeric',
                'min:0',
            ],

            'gst_percent' => [
                'required',
                'numeric',
                'min:0',
                'max:100',
            ],

            'validity_days' => [
                'required',
                'integer',
                'min:1',
                'max:365',
            ],

            'notes' => [
                'nullable',
                'string',
                'max:3000',
            ],

            'terms' => [
                'nullable',
                'string',
                'max:5000',
            ],

        ]);


        $quotation = DB::transaction(function () use (
            $validated,
            $enquiry
        ) {

            $quantity =
                (int) $validated['quantity'];

            $unitPrice =
                (float) $validated['unit_price'];

            $subtotal =
                $quantity * $unitPrice;

            $discount =
                min(
                    (float) ($validated['discount'] ?? 0),
                    $subtotal
                );

            $taxableAmount =
                $subtotal - $discount;

            $gstPercent =
                (float) $validated['gst_percent'];

            $gstAmount =
                $taxableAmount *
                ($gstPercent / 100);

            $grandTotal =
                $taxableAmount +
                $gstAmount;

                $validityDays = (int) $validated['validity_days'];


            $nextId =
                (Quotation::max('id') ?? 0)
                + 1;


            $quotationNumber =
                'ASEW-Q-' .
                now()->format('Y') .
                '-' .
                str_pad(
                    $nextId,
                    5,
                    '0',
                    STR_PAD_LEFT
                );


            $quotation = Quotation::create([

                'product_enquiry_id' =>
                    $enquiry->id,

                'quotation_number' =>
                    $quotationNumber,

                'public_token' => Str::random(64),

                'customer_name' =>
                    $enquiry->name,

                'company' =>
                    $enquiry->company,

                'email' =>
                    $enquiry->email,

                'phone' =>
                    $enquiry->phone,

                'city' =>
                    $enquiry->city,

                'subtotal' =>
                    $subtotal,

                'discount' =>
                    $discount,

                'gst_percent' =>
                    $gstPercent,

                'gst_amount' =>
                    $gstAmount,

                'grand_total' =>
                    $grandTotal,

                'validity_days' =>
                    $validated['validity_days'],

                'notes' =>
                    $validated['notes'] ?? null,

                'terms' =>
                    $validated['terms'] ?? null,

                'status' =>
                    'draft',

                'quotation_date' =>
                    now()->toDateString(),

                'valid_until' =>
                    now()
                        ->addDays($validityDays)

                        ->toDateString(),

            ]);


            $quotation->items()->create([

                'product_id' =>
                    $enquiry->product_id,

                'product_name' =>
                    $enquiry->product_name
                    ?: 'Product Enquiry',

                'product_code' =>
                    $enquiry->product_code,

                'quantity' =>
                    $quantity,

                'unit_price' =>
                    $unitPrice,

                'total' =>
                    $subtotal,

            ]);


            $enquiry->update([
                'status' => 'quoted',
            ]);


            return $quotation;
        });


        return redirect()
            ->route(
                'admin.quotations.show',
                $quotation
            )
            ->with(
                'success',
                'Quotation created successfully.'
            );
    }



    /**
     * Display quotation.
     */
    public function show(Quotation $quotation)
{
    $this->ensurePublicToken($quotation);

    $quotation->load([
        'items.product',
        'enquiry',
        'salesOrder',
    ]);

    return view(
        'admin.quotations.show',
        compact('quotation')
    );
}



    /**
     * Update quotation status.
     */
    public function updateStatus(
        Request $request,
        Quotation $quotation
    ) {
        $validated =
            $request->validate([

                'status' => [
                    'required',
                    'in:draft,sent,accepted,rejected',
                ],

            ]);


        $quotation->update([
            'status' =>
                $validated['status'],
        ]);


        /*
         * Keep enquiry workflow aligned.
         */

        if ($quotation->enquiry) {

            if (
                in_array(
                    $validated['status'],
                    [
                        'sent',
                        'accepted',
                        'rejected',
                    ],
                    true
                )
            ) {

                $quotation->enquiry->update([
                    'status' => 'quoted',
                ]);

            }

        }


        return back()
            ->with(
                'success',
                'Quotation status updated successfully.'
            );
    }

    private function ensurePublicToken(Quotation $quotation): void
{
    if (!$quotation->public_token) {

        do {
            $token = \Illuminate\Support\Str::random(64);
        } while (
            Quotation::where('public_token', $token)->exists()
        );

        $quotation->update([
            'public_token' => $token,
        ]);
    }
}

    /**
 * Send quotation to customer.
 */
public function send(Quotation $quotation)
{
    $this->ensurePublicToken($quotation);
    
    $quotation->load([
        'items',
        'enquiry',
    ]);


    try {

        Mail::to($quotation->email)
            ->send(
                new QuotationMail($quotation)
            );


        $quotation->update([
            'status' => 'sent',
        ]);


        if ($quotation->enquiry) {

            $quotation->enquiry->update([
                'status' => 'quoted',
            ]);

        }


        return back()
            ->with(
                'success',
                'Quotation sent successfully to ' .
                $quotation->email .
                '.'
            );

    } catch (\Throwable $exception) {

        Log::error(
            'Quotation email failed.',
            [
                'quotation_id' =>
                    $quotation->id,

                'quotation_number' =>
                    $quotation->quotation_number,

                'customer_email' =>
                    $quotation->email,

                'error' =>
                    $exception->getMessage(),
            ]
        );


        return back()
            ->withErrors([
                'email' =>
                    'Quotation could not be sent. Please check your mail configuration.',
            ]);
    }

}
}
