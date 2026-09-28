<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\ProductEnquiry;
use App\Models\Quotation;
use Illuminate\Http\Request;

class ProductEnquiryController extends Controller
{
    /**
     * List enquiries.
     */
    public function index(Request $request)
    {
        $query = ProductEnquiry::query()
            ->with('product');

        /*
        |--------------------------------------------------------------------------
        | Status Filter
        |--------------------------------------------------------------------------
        */

        $allowedStatuses = [
            'new',
            'contacted',
            'quoted',
            'closed',
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

        if ($request->filled('search')) {
            $search = trim(
                (string) $request->search
            );

            if ($search !== '') {
                $query->where(
                    function ($q) use ($search) {
                        $q->where(
                            'name',
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
                            )
                            ->orWhere(
                                'product_name',
                                'like',
                                "%{$search}%"
                            )
                            ->orWhere(
                                'product_code',
                                'like',
                                "%{$search}%"
                            );
                    }
                );
            }
        }

        /*
        |--------------------------------------------------------------------------
        | Paginated Enquiries
        |--------------------------------------------------------------------------
        */

        $enquiries = $query
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
                ProductEnquiry::count(),

            'new' =>
                ProductEnquiry::where(
                    'status',
                    'new'
                )->count(),

            'contacted' =>
                ProductEnquiry::where(
                    'status',
                    'contacted'
                )->count(),

            'quoted' =>
                ProductEnquiry::where(
                    'status',
                    'quoted'
                )->count(),

            'closed' =>
                ProductEnquiry::where(
                    'status',
                    'closed'
                )->count(),
        ];

        return view(
            'admin.enquiries.index',
            compact(
                'enquiries',
                'stats'
            )
        );
    }


    /**
     * Show enquiry.
     */
    public function show(
        ProductEnquiry $enquiry
    ) {
        $enquiry->load('product');

        return view(
            'admin.enquiries.show',
            compact('enquiry')
        );
    }


    /**
     * Update enquiry status.
     */
    public function updateStatus(
        Request $request,
        ProductEnquiry $enquiry
    ) {
        $validated = $request->validate([
            'status' => [
                'required',
                'in:new,contacted,quoted,closed',
            ],
        ]);

        $newStatus =
            $validated['status'];

        /*
        |--------------------------------------------------------------------------
        | Same Status
        |--------------------------------------------------------------------------
        */

        if ($enquiry->status === $newStatus) {
            return back()->with(
                'info',
                'Enquiry status is already ' .
                ucfirst($newStatus) .
                '.'
            );
        }

        /*
        |--------------------------------------------------------------------------
        | Quotation Workflow Protection
        |--------------------------------------------------------------------------
        |
        | Once a quotation exists, enquiry should not move backwards to
        | New or Contacted.
        |
        */

        $hasQuotation = Quotation::query()
            ->where(
                'product_enquiry_id',
                $enquiry->id
            )
            ->exists();

        if (
            $hasQuotation &&
            in_array(
                $newStatus,
                [
                    'new',
                    'contacted',
                ],
                true
            )
        ) {
            return back()->with(
                'error',
                'This enquiry already has a quotation and cannot be moved back to New or Contacted.'
            );
        }

        /*
        |--------------------------------------------------------------------------
        | Allowed Manual Transitions
        |--------------------------------------------------------------------------
        */

        $allowedTransitions = [
            'new' => [
                'contacted',
                'quoted',
                'closed',
            ],

            'contacted' => [
                'quoted',
                'closed',
            ],

            'quoted' => [
                'closed',
            ],

            /*
             * Closed is treated as terminal.
             */
            'closed' => [],
        ];

        if (
            !in_array(
                $newStatus,
                $allowedTransitions[
                    $enquiry->status
                ] ?? [],
                true
            )
        ) {
            return back()->with(
                'error',
                'This enquiry status change is not allowed.'
            );
        }

        $enquiry->update([
            'status' =>
                $newStatus,
        ]);

        return back()->with(
            'success',
            'Enquiry status updated successfully.'
        );
    }


    /**
     * Delete enquiry.
     */
    public function destroy(
        ProductEnquiry $enquiry
    ) {
        /*
        |--------------------------------------------------------------------------
        | Protect Commercial History
        |--------------------------------------------------------------------------
        |
        | Do not delete an enquiry once quotation history exists.
        |
        */

        $hasQuotation = Quotation::query()
            ->where(
                'product_enquiry_id',
                $enquiry->id
            )
            ->exists();

        if ($hasQuotation) {
            return back()->with(
                'error',
                'This enquiry cannot be deleted because quotation history exists.'
            );
        }

        $enquiry->delete();

        return redirect()
            ->route(
                'admin.enquiries.index'
            )
            ->with(
                'success',
                'Enquiry deleted successfully.'
            );
    }
}