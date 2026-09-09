<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Product;
use App\Models\ProductEnquiry;

class DashboardController extends Controller
{
    public function index()
    {
        /*
        |--------------------------------------------------------------------------
        | Dashboard Statistics
        |--------------------------------------------------------------------------
        */

        $stats = [

            'total_products' =>
                Product::count(),

            'active_products' =>
                Product::where('is_active', true)->count(),

            'inactive_products' =>
                Product::where('is_active', false)->count(),

            'total_enquiries' =>
                ProductEnquiry::count(),

            'new_enquiries' =>
                ProductEnquiry::where('status', 'new')->count(),

            'contacted_enquiries' =>
                ProductEnquiry::where('status', 'contacted')->count(),

            'quoted_enquiries' =>
                ProductEnquiry::where('status', 'quoted')->count(),

            'closed_enquiries' =>
                ProductEnquiry::where('status', 'closed')->count(),

        ];



        /*
        |--------------------------------------------------------------------------
        | Enquiry Analytics
        |--------------------------------------------------------------------------
        */

        $enquiryAnalytics = [

            'new' =>
                $stats['new_enquiries'],

            'contacted' =>
                $stats['contacted_enquiries'],

            'quoted' =>
                $stats['quoted_enquiries'],

            'closed' =>
                $stats['closed_enquiries'],

        ];



        /*
        |--------------------------------------------------------------------------
        | Maximum Analytics Value
        |--------------------------------------------------------------------------
        |
        | Used for calculating percentage bar widths.
        |
        */

        $maxEnquiryValue =
            max(
                1,
                ...array_values($enquiryAnalytics)
            );



        /*
        |--------------------------------------------------------------------------
        | Recent Enquiries
        |--------------------------------------------------------------------------
        */

        $recentEnquiries = ProductEnquiry::query()
            ->with('product')
            ->latest()
            ->take(8)
            ->get();



        /*
        |--------------------------------------------------------------------------
        | Recent Products
        |--------------------------------------------------------------------------
        */

        $recentProducts = Product::query()
            ->latest()
            ->take(6)
            ->get();



        /*
        |--------------------------------------------------------------------------
        | Latest Enquiry
        |--------------------------------------------------------------------------
        */

        $latestEnquiry =
            ProductEnquiry::latest()->first();



        return view(
            'admin.dashboard',
            compact(
                'stats',
                'enquiryAnalytics',
                'maxEnquiryValue',
                'recentEnquiries',
                'recentProducts',
                'latestEnquiry'
            )
        );
    }
}
