<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Mail\QuotationMail;
use App\Models\ProductEnquiry;
use App\Models\Quotation;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Str;

class QuotationController extends Controller
{
    /**
     * Maximum value supported by DECIMAL(12,2).
     */
    private const MAX_DATABASE_AMOUNT = 9999999999.99;


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

        $allowedStatuses = [
            'draft',
            'sent',
            'accepted',
            'rejected',
        ];

        if (
            $request->filled('status') &&
            in_array(
                $request->status,
                $allowedStatuses,
                true
            )
        ) {
            $query->where(
                'status',
                $request->status
            );
        }

        /*
        |--------------------------------------------------------------------------
        | Search
        |--------------------------------------------------------------------------
        */

        $search = trim(
            (string) $request->input(
                'search',
                ''
            )
        );

        if ($search !== '') {
            $query->where(
                function ($q) use ($search) {
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
                }
            );
        }

        $quotations = $query
            ->latest('quotation_date')
            ->latest('id')
            ->paginate(20)
            ->withQueryString();

        /*
        |--------------------------------------------------------------------------
        | Statistics
        |--------------------------------------------------------------------------
        */

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
        /*
        |--------------------------------------------------------------------------
        | Validation
        |--------------------------------------------------------------------------
        */

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
                'max:' . self::MAX_DATABASE_AMOUNT,
            ],

            'discount' => [
                'nullable',
                'numeric',
                'min:0',
                'max:' . self::MAX_DATABASE_AMOUNT,
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


        /*
        |--------------------------------------------------------------------------
        | Calculate Quotation Amount
        |--------------------------------------------------------------------------
        |
        | Calculations are done before opening the transaction so invalid
        | oversized amounts never reach the database.
        |
        */

        $quantity =
            (int) $validated['quantity'];

        $unitPrice =
            (float) $validated['unit_price'];

        $subtotal = round(
            $quantity * $unitPrice,
            2
        );

        $discount = round(
            min(
                (float) (
                    $validated['discount']
                    ?? 0
                ),
                $subtotal
            ),
            2
        );

        $taxableAmount = round(
            $subtotal - $discount,
            2
        );

        $gstPercent =
            (float) $validated['gst_percent'];

        $gstAmount = round(
            $taxableAmount *
            ($gstPercent / 100),
            2
        );

        $grandTotal = round(
            $taxableAmount +
            $gstAmount,
            2
        );

        $validityDays =
            (int) $validated['validity_days'];


        /*
        |--------------------------------------------------------------------------
        | Monetary Overflow Protection
        |--------------------------------------------------------------------------
        |
        | subtotal, discount, gst_amount and grand_total are DECIMAL(12,2).
        | Prevent values larger than the database can store.
        |
        */

        if (
            !is_finite($subtotal) ||
            !is_finite($discount) ||
            !is_finite($gstAmount) ||
            !is_finite($grandTotal) ||
            $subtotal > self::MAX_DATABASE_AMOUNT ||
            $discount > self::MAX_DATABASE_AMOUNT ||
            $gstAmount > self::MAX_DATABASE_AMOUNT ||
            $grandTotal > self::MAX_DATABASE_AMOUNT
        ) {
            return back()
                ->withInput()
                ->withErrors([
                    'unit_price' =>
                        'The quotation amount is too large. Please reduce the quantity or unit price.',
                ]);
        }


        /*
        |--------------------------------------------------------------------------
        | Create Quotation
        |--------------------------------------------------------------------------
        */

        $quotation = DB::transaction(
            function () use (
                $validated,
                $enquiry,
                $quantity,
                $unitPrice,
                $subtotal,
                $discount,
                $gstPercent,
                $gstAmount,
                $grandTotal,
                $validityDays
            ) {
                /*
                |--------------------------------------------------------------------------
                | Create Quotation First
                |--------------------------------------------------------------------------
                |
                | A temporary unique quotation number is used until the database
                | generates the actual quotation ID.
                |
                */

                $quotation = Quotation::create([
                    'product_enquiry_id' =>
                        $enquiry->id,

                    'quotation_number' =>
                        'TEMP-' .
                        Str::uuid()->toString(),

                    'public_token' =>
                        $this->generatePublicToken(),

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
                        $validityDays,

                    'notes' =>
                        $validated['notes']
                        ?? null,

                    'terms' =>
                        $validated['terms']
                        ?? null,

                    'status' =>
                        'draft',

                    'quotation_date' =>
                        now()->toDateString(),

                    'valid_until' =>
                        now()
                            ->addDays(
                                $validityDays
                            )
                            ->toDateString(),
                ]);


                /*
                |--------------------------------------------------------------------------
                | Final Quotation Number
                |--------------------------------------------------------------------------
                */

                $quotationNumber =
                    'ASEW-Q-' .
                    now()->format('Y') .
                    '-' .
                    str_pad(
                        (string) $quotation->id,
                        5,
                        '0',
                        STR_PAD_LEFT
                    );

                $quotation->update([
                    'quotation_number' =>
                        $quotationNumber,
                ]);


                /*
                |--------------------------------------------------------------------------
                | Create Quotation Item
                |--------------------------------------------------------------------------
                */

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


                /*
                |--------------------------------------------------------------------------
                | Keep Enquiry Workflow Aligned
                |--------------------------------------------------------------------------
                */

                $enquiry->update([
                    'status' =>
                        'quoted',
                ]);

                return $quotation;
            }
        );


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
    public function show(
        Quotation $quotation
    ) {
        $this->ensurePublicToken(
            $quotation
        );

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
        $validated = $request->validate([
            'status' => [
                'required',
                'in:draft,sent,accepted,rejected',
            ],
        ]);

        $newStatus =
            $validated['status'];


        /*
        |--------------------------------------------------------------------------
        | Sales Order Protection
        |--------------------------------------------------------------------------
        */

        if (
            $quotation
                ->salesOrder()
                ->exists()
        ) {
            return back()->with(
                'error',
                'Quotation status cannot be changed because a sales order has already been created.'
            );
        }


        /*
        |--------------------------------------------------------------------------
        | Terminal Status Protection
        |--------------------------------------------------------------------------
        */

        if (
            in_array(
                $quotation->status,
                [
                    'accepted',
                    'rejected',
                ],
                true
            )
        ) {
            return back()->with(
                'error',
                'Accepted or rejected quotations cannot be changed.'
            );
        }


        /*
        |--------------------------------------------------------------------------
        | Same Status
        |--------------------------------------------------------------------------
        */

        if (
            $quotation->status ===
            $newStatus
        ) {
            return back()->with(
                'info',
                'Quotation status is already ' .
                ucfirst($newStatus) .
                '.'
            );
        }


        /*
        |--------------------------------------------------------------------------
        | Allowed Workflow
        |--------------------------------------------------------------------------
        */

        $allowedTransitions = [
            'draft' => [
                'sent',
                'accepted',
                'rejected',
            ],

            'sent' => [
                'accepted',
                'rejected',
            ],
        ];

        if (
            !in_array(
                $newStatus,
                $allowedTransitions[
                    $quotation->status
                ] ?? [],
                true
            )
        ) {
            return back()->with(
                'error',
                'This quotation status change is not allowed.'
            );
        }


        /*
        |--------------------------------------------------------------------------
        | Update Status
        |--------------------------------------------------------------------------
        */

        $quotation->update([
            'status' =>
                $newStatus,

            'responded_at' =>
                in_array(
                    $newStatus,
                    [
                        'accepted',
                        'rejected',
                    ],
                    true
                )
                    ? now()
                    : $quotation->responded_at,
        ]);


        /*
        |--------------------------------------------------------------------------
        | Keep Enquiry Workflow Aligned
        |--------------------------------------------------------------------------
        */

        if ($quotation->enquiry) {
            $quotation->enquiry->update([
                'status' =>
                    'quoted',
            ]);
        }

        return back()->with(
            'success',
            'Quotation status updated successfully.'
        );
    }


    /**
     * Send quotation to customer.
     */
    public function send(
        Quotation $quotation
    ) {
        /*
        |--------------------------------------------------------------------------
        | Terminal Status Protection
        |--------------------------------------------------------------------------
        */

        if (
            in_array(
                $quotation->status,
                [
                    'accepted',
                    'rejected',
                ],
                true
            )
        ) {
            return back()->with(
                'error',
                'Accepted or rejected quotations cannot be sent again.'
            );
        }


        /*
        |--------------------------------------------------------------------------
        | Converted Quotation Protection
        |--------------------------------------------------------------------------
        */

        if (
            $quotation
                ->salesOrder()
                ->exists()
        ) {
            return back()->with(
                'error',
                'This quotation has already been converted into a sales order.'
            );
        }


        /*
        |--------------------------------------------------------------------------
        | Ensure Public Token
        |--------------------------------------------------------------------------
        */

        $this->ensurePublicToken(
            $quotation
        );

        $quotation->load([
            'items',
            'enquiry',
        ]);


        /*
        |--------------------------------------------------------------------------
        | Send Email
        |--------------------------------------------------------------------------
        */

        try {
            Mail::to(
                $quotation->email
            )->send(
                new QuotationMail(
                    $quotation
                )
            );

            $quotation->update([
                'status' =>
                    'sent',
            ]);

            if ($quotation->enquiry) {
                $quotation->enquiry->update([
                    'status' =>
                        'quoted',
                ]);
            }

            return back()->with(
                'success',
                'Quotation sent successfully to ' .
                $quotation->email .
                '.'
            );

        } catch (\Throwable $exception) {

            /*
            |--------------------------------------------------------------------------
            | Internal Logging
            |--------------------------------------------------------------------------
            |
            | Technical exception details are logged but are not exposed
            | to the admin interface.
            |
            */

            Log::error(
                'Quotation email failed.',
                [
                    'quotation_id' =>
                        $quotation->id,

                    'quotation_number' =>
                        $quotation->quotation_number,

                    'customer_email' =>
                        $quotation->email,

                    'exception_class' =>
                        get_class(
                            $exception
                        ),

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


    /**
     * Make sure older quotations have public tokens.
     */
    private function ensurePublicToken(
        Quotation $quotation
    ): void {
        if (!$quotation->public_token) {
            $quotation->update([
                'public_token' =>
                    $this->generatePublicToken(),
            ]);
        }
    }


    /**
     * Generate collision-safe public token.
     */
    private function generatePublicToken(): string
    {
        do {
            $token =
                Str::random(64);

        } while (
            Quotation::where(
                'public_token',
                $token
            )->exists()
        );

        return $token;
    }
}