<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\ProductEnquiry;
use Illuminate\Http\Request;

class ProductEnquiryController extends Controller
{
    public function index(Request $request)
    {
        $query = ProductEnquiry::query()
            ->with('product');


        if ($request->filled('status')) {
            $query->where('status', $request->status);
        }


        if ($request->filled('search')) {

            $search = trim($request->search);

            $query->where(function ($q) use ($search) {
                $q->where('name', 'like', "%{$search}%")
                    ->orWhere('company', 'like', "%{$search}%")
                    ->orWhere('email', 'like', "%{$search}%")
                    ->orWhere('phone', 'like', "%{$search}%")
                    ->orWhere('product_name', 'like', "%{$search}%")
                    ->orWhere('product_code', 'like', "%{$search}%");
            });
        }


        $enquiries = $query
            ->latest()
            ->paginate(20)
            ->withQueryString();


        $stats = [
            'total' => ProductEnquiry::count(),

            'new' => ProductEnquiry::where(
                'status',
                'new'
            )->count(),

            'contacted' => ProductEnquiry::where(
                'status',
                'contacted'
            )->count(),

            'quoted' => ProductEnquiry::where(
                'status',
                'quoted'
            )->count(),

            'closed' => ProductEnquiry::where(
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


    public function show(ProductEnquiry $enquiry)
    {
        $enquiry->load('product');

        return view(
            'admin.enquiries.show',
            compact('enquiry')
        );
    }


    public function updateStatus(
        Request $request,
        ProductEnquiry $enquiry
    ) {
        $validated = $request->validate([
            'status' => [
                'required',
                'in:new,contacted,quoted,closed'
            ],
        ]);


        $enquiry->update([
            'status' => $validated['status'],
        ]);


        return back()->with(
            'success',
            'Enquiry status updated successfully.'
        );
    }


    public function destroy(ProductEnquiry $enquiry)
    {
        $enquiry->delete();

        return redirect()
            ->route('admin.enquiries.index')
            ->with(
                'success',
                'Enquiry deleted successfully.'
            );
    }
}