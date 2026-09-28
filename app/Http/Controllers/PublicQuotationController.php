<?php

namespace App\Http\Controllers;

use App\Mail\QuotationResponseMail;
use App\Models\Quotation;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Mail;

class PublicQuotationController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Show Public Quotation
    |--------------------------------------------------------------------------
    */

    public function show(
        string $quotationNumber,
        string $token
    ) {
        $quotation = Quotation::query()
            ->where(
                'quotation_number',
                $quotationNumber
            )
            ->where(
                'public_token',
                $token
            )
            ->with([
                'items.product',
                'enquiry',
            ])
            ->firstOrFail();

        return view(
            'quotation-public',
            compact('quotation')
        );
    }


    /*
    |--------------------------------------------------------------------------
    | Customer Accept / Reject Quotation
    |--------------------------------------------------------------------------
    */

    public function respond(
        Request $request,
        string $quotationNumber,
        string $token
    ) {
        $validated = $request->validate([
            'decision' => [
                'required',
                'in:accepted,rejected',
            ],
        ]);

        /*
        |--------------------------------------------------------------------------
        | Transaction + Row Lock
        |--------------------------------------------------------------------------
        |
        | Only one customer response can modify this quotation at a time.
        |
        */

        $result = DB::transaction(
            function () use (
                $quotationNumber,
                $token,
                $validated
            ) {
                $quotation = Quotation::query()
                    ->where(
                        'quotation_number',
                        $quotationNumber
                    )
                    ->where(
                        'public_token',
                        $token
                    )
                    ->lockForUpdate()
                    ->firstOrFail();

                /*
                |--------------------------------------------------------------------------
                | Already Responded
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
                    return [
                        'type' =>
                            'info',

                        'message' =>
                            'This quotation has already been responded to.',

                        'quotation' =>
                            $quotation,
                    ];
                }

                /*
                |--------------------------------------------------------------------------
                | Only Sent Quotations Can Be Responded To
                |--------------------------------------------------------------------------
                */

                if (
                    $quotation->status !==
                    'sent'
                ) {
                    return [
                        'type' =>
                            'error',

                        'message' =>
                            'This quotation is not currently available for customer response.',

                        'quotation' =>
                            $quotation,
                    ];
                }

                /*
                |--------------------------------------------------------------------------
                | Expiry Check
                |--------------------------------------------------------------------------
                */

                if (
                    $quotation->valid_until &&
                    $quotation->valid_until
                        ->isBefore(
                            now()->startOfDay()
                        )
                ) {
                    return [
                        'type' =>
                            'error',

                        'message' =>
                            'This quotation has expired and can no longer be accepted or rejected.',

                        'quotation' =>
                            $quotation,
                    ];
                }

                /*
                |--------------------------------------------------------------------------
                | Save Customer Decision
                |--------------------------------------------------------------------------
                */

                $quotation->update([
                    'status' =>
                        $validated['decision'],

                    'responded_at' =>
                        now(),
                ]);

                /*
                |--------------------------------------------------------------------------
                | Keep Enquiry In Quoted Stage
                |--------------------------------------------------------------------------
                */

                if ($quotation->enquiry) {
                    $quotation->enquiry->update([
                        'status' =>
                            'quoted',
                    ]);
                }

                /*
                |--------------------------------------------------------------------------
                | Reload Latest Data
                |--------------------------------------------------------------------------
                */

                $quotation->refresh();

                $quotation->load([
                    'items.product',
                    'enquiry',
                ]);

                return [
                    'type' =>
                        'success',

                    'message' =>
                        $quotation->status ===
                        'accepted'

                            ? 'Thank you. The quotation has been accepted successfully.'

                            : 'Your response has been recorded. The quotation has been rejected.',

                    'quotation' =>
                        $quotation,
                ];
            }
        );

        /*
        |--------------------------------------------------------------------------
        | Stop Here If No New Response Was Recorded
        |--------------------------------------------------------------------------
        */

        if (
            $result['type'] !==
            'success'
        ) {
            return back()->with(
                $result['type'],
                $result['message']
            );
        }

        /** @var Quotation $quotation */
        $quotation =
            $result['quotation'];

        /*
        |--------------------------------------------------------------------------
        | Send Response Notification To ASEW
        |--------------------------------------------------------------------------
        |
        | Mail is intentionally outside the database transaction.
        | Slow SMTP should never keep the quotation row locked.
        |
        */

        try {
            $salesEmail =
                config(
                    'mail.sales_address'
                );

            if ($salesEmail) {
                Mail::to(
                    $salesEmail
                )->send(
                    new QuotationResponseMail(
                        $quotation
                    )
                );
            }

        } catch (\Throwable $exception) {

            /*
             * Customer decision remains saved even if email fails.
             */
            Log::error(
                'Quotation response email failed.',
                [
                    'quotation_id' =>
                        $quotation->id,

                    'quotation_number' =>
                        $quotation->quotation_number,

                    'status' =>
                        $quotation->status,

                    'exception_class' =>
                        get_class($exception),

                    'error' =>
                        $exception->getMessage(),
                ]
            );
        }

        return back()->with(
            'success',
            $result['message']
        );
    }
}