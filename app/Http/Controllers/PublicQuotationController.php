<?php

namespace App\Http\Controllers;

use App\Mail\QuotationResponseMail;
use App\Models\Quotation;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Mail;

class PublicQuotationController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Show Public Quotation
    |--------------------------------------------------------------------------
    */

    public function show(string $quotationNumber, string $token)
    {
        $quotation = Quotation::query()
            ->where('quotation_number', $quotationNumber)
            ->where('public_token', $token)
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
        $request->validate([
            'decision' => [
                'required',
                'in:accepted,rejected',
            ],
        ]);


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


        /*
        |--------------------------------------------------------------------------
        | Already Responded
        |--------------------------------------------------------------------------
        */

        if (
            in_array(
                $quotation->status,
                ['accepted', 'rejected'],
                true
            )
        ) {
            return back()->with(
                'info',
                'This quotation has already been responded to.'
            );
        }


        /*
        |--------------------------------------------------------------------------
        | Only Sent Quotations Can Be Responded To
        |--------------------------------------------------------------------------
        */

        if ($quotation->status !== 'sent') {
            return back()->with(
                'error',
                'This quotation is not currently available for customer response.'
            );
        }


        /*
        |--------------------------------------------------------------------------
        | Expiry Check
        |--------------------------------------------------------------------------
        */

        if (
            $quotation->valid_until &&
            $quotation->valid_until
                ->isBefore(now()->startOfDay())
        ) {
            return back()->with(
                'error',
                'This quotation has expired and can no longer be accepted or rejected.'
            );
        }


        /*
        |--------------------------------------------------------------------------
        | Save Customer Decision
        |--------------------------------------------------------------------------
        */

        $quotation->update([
            'status' => $request->decision,
            'responded_at' => now(),
        ]);


        /*
        |--------------------------------------------------------------------------
        | Keep Enquiry In Quoted Stage
        |--------------------------------------------------------------------------
        */

        if ($quotation->enquiry) {
            $quotation->enquiry->update([
                'status' => 'quoted',
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


        /*
        |--------------------------------------------------------------------------
        | Send Response Notification To ASEW
        |--------------------------------------------------------------------------
        */

        try {

            $salesEmail =
                config('mail.sales_address');

            if ($salesEmail) {

                Mail::to($salesEmail)
                    ->send(
                        new QuotationResponseMail(
                            $quotation
                        )
                    );

            }

        } catch (\Throwable $e) {

            Log::error(
                'Quotation response email failed.',
                [
                    'quotation_id' =>
                        $quotation->id,

                    'quotation_number' =>
                        $quotation->quotation_number,

                    'status' =>
                        $quotation->status,

                    'error' =>
                        $e->getMessage(),
                ]
            );

        }


        /*
        |--------------------------------------------------------------------------
        | Success Message
        |--------------------------------------------------------------------------
        */

        $message =
            $quotation->status === 'accepted'

                ? 'Thank you. The quotation has been accepted successfully.'

                : 'Your response has been recorded. The quotation has been rejected.';


        return back()->with(
            'success',
            $message
        );
    }
}