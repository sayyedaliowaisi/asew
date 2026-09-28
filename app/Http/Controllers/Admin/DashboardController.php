<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Product;
use App\Models\ProductEnquiry;
use App\Models\Quotation;
use App\Models\SalesOrder;

class DashboardController extends Controller
{
    public function index()
    {
        /*
        |--------------------------------------------------------------------------
        | Product Statistics
        |--------------------------------------------------------------------------
        */

        $productCounts = Product::query()
            ->selectRaw('COUNT(*) as total')
            ->selectRaw(
                'SUM(CASE WHEN is_active = 1 THEN 1 ELSE 0 END) as active'
            )
            ->selectRaw(
                'SUM(CASE WHEN is_active = 0 THEN 1 ELSE 0 END) as inactive'
            )
            ->first();


        /*
        |--------------------------------------------------------------------------
        | Enquiry Statistics
        |--------------------------------------------------------------------------
        */

        $enquiryCounts = ProductEnquiry::query()
            ->selectRaw('COUNT(*) as total')
            ->selectRaw(
                "SUM(CASE WHEN status = 'new' THEN 1 ELSE 0 END) as new_count"
            )
            ->selectRaw(
                "SUM(CASE WHEN status = 'contacted' THEN 1 ELSE 0 END) as contacted_count"
            )
            ->selectRaw(
                "SUM(CASE WHEN status = 'quoted' THEN 1 ELSE 0 END) as quoted_count"
            )
            ->selectRaw(
                "SUM(CASE WHEN status = 'closed' THEN 1 ELSE 0 END) as closed_count"
            )
            ->first();


        /*
        |--------------------------------------------------------------------------
        | Quotation Statistics
        |--------------------------------------------------------------------------
        */

        $quotationCounts = Quotation::query()
            ->selectRaw('COUNT(*) as total')
            ->selectRaw(
                "SUM(CASE WHEN status = 'draft' THEN 1 ELSE 0 END) as draft_count"
            )
            ->selectRaw(
                "SUM(CASE WHEN status = 'sent' THEN 1 ELSE 0 END) as sent_count"
            )
            ->selectRaw(
                "SUM(CASE WHEN status = 'accepted' THEN 1 ELSE 0 END) as accepted_count"
            )
            ->selectRaw(
                "SUM(CASE WHEN status = 'rejected' THEN 1 ELSE 0 END) as rejected_count"
            )
            ->first();

        $acceptedQuotationValue = (float) Quotation::query()
            ->where('status', 'accepted')
            ->sum('grand_total');


        /*
        |--------------------------------------------------------------------------
        | Sales Order Statistics
        |--------------------------------------------------------------------------
        */

        $salesOrderCounts = SalesOrder::query()
            ->selectRaw('COUNT(*) as total')
            ->selectRaw(
                "SUM(CASE WHEN order_status = 'confirmed' THEN 1 ELSE 0 END) as confirmed_count"
            )
            ->selectRaw(
                "SUM(CASE WHEN order_status = 'processing' THEN 1 ELSE 0 END) as processing_count"
            )
            ->selectRaw(
                "SUM(CASE WHEN order_status = 'ready' THEN 1 ELSE 0 END) as ready_count"
            )
            ->selectRaw(
                "SUM(CASE WHEN order_status = 'dispatched' THEN 1 ELSE 0 END) as dispatched_count"
            )
            ->selectRaw(
                "SUM(CASE WHEN order_status = 'delivered' THEN 1 ELSE 0 END) as delivered_count"
            )
            ->selectRaw(
                "SUM(CASE WHEN order_status = 'cancelled' THEN 1 ELSE 0 END) as cancelled_count"
            )
            ->selectRaw(
                "SUM(CASE WHEN payment_status = 'pending' THEN 1 ELSE 0 END) as payment_pending_count"
            )
            ->selectRaw(
                "SUM(CASE WHEN payment_status = 'partial' THEN 1 ELSE 0 END) as payment_partial_count"
            )
            ->selectRaw(
                "SUM(CASE WHEN payment_status = 'paid' THEN 1 ELSE 0 END) as payment_paid_count"
            )
            ->first();

        $totalOrderValue = (float) SalesOrder::query()
            ->where('order_status', '!=', 'cancelled')
            ->sum('grand_total');

        $pendingPaymentValue = (float) SalesOrder::query()
            ->whereIn(
                'payment_status',
                ['pending', 'partial']
            )
            ->where(
                'order_status',
                '!=',
                'cancelled'
            )
            ->sum('grand_total');


        /*
        |--------------------------------------------------------------------------
        | Main Dashboard Statistics
        |--------------------------------------------------------------------------
        */

        $stats = [
            /*
             * Products
             */
            'total_products' =>
                (int) ($productCounts->total ?? 0),

            'active_products' =>
                (int) ($productCounts->active ?? 0),

            'inactive_products' =>
                (int) ($productCounts->inactive ?? 0),

            /*
             * Enquiries
             */
            'total_enquiries' =>
                (int) ($enquiryCounts->total ?? 0),

            'new_enquiries' =>
                (int) ($enquiryCounts->new_count ?? 0),

            'contacted_enquiries' =>
                (int) ($enquiryCounts->contacted_count ?? 0),

            'quoted_enquiries' =>
                (int) ($enquiryCounts->quoted_count ?? 0),

            'closed_enquiries' =>
                (int) ($enquiryCounts->closed_count ?? 0),

            /*
             * Quotations
             */
            'total_quotations' =>
                (int) ($quotationCounts->total ?? 0),

            'draft_quotations' =>
                (int) ($quotationCounts->draft_count ?? 0),

            'sent_quotations' =>
                (int) ($quotationCounts->sent_count ?? 0),

            'accepted_quotations' =>
                (int) ($quotationCounts->accepted_count ?? 0),

            'rejected_quotations' =>
                (int) ($quotationCounts->rejected_count ?? 0),

            'accepted_quotation_value' =>
                $acceptedQuotationValue,

            /*
             * Sales Orders
             */
            'total_orders' =>
                (int) ($salesOrderCounts->total ?? 0),

            'confirmed_orders' =>
                (int) ($salesOrderCounts->confirmed_count ?? 0),

            'processing_orders' =>
                (int) ($salesOrderCounts->processing_count ?? 0),

            'ready_orders' =>
                (int) ($salesOrderCounts->ready_count ?? 0),

            'dispatched_orders' =>
                (int) ($salesOrderCounts->dispatched_count ?? 0),

            'delivered_orders' =>
                (int) ($salesOrderCounts->delivered_count ?? 0),

            'cancelled_orders' =>
                (int) ($salesOrderCounts->cancelled_count ?? 0),

            /*
             * Payments
             */
            'pending_payments' =>
                (int) ($salesOrderCounts->payment_pending_count ?? 0),

            'partial_payments' =>
                (int) ($salesOrderCounts->payment_partial_count ?? 0),

            'paid_orders' =>
                (int) ($salesOrderCounts->payment_paid_count ?? 0),

            'total_order_value' =>
                $totalOrderValue,

            'pending_payment_value' =>
                $pendingPaymentValue,
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

        $maxEnquiryValue = max(
            1,
            ...array_values(
                $enquiryAnalytics
            )
        );


        /*
        |--------------------------------------------------------------------------
        | Quotation Analytics
        |--------------------------------------------------------------------------
        */

        $quotationAnalytics = [
            'draft' =>
                $stats['draft_quotations'],

            'sent' =>
                $stats['sent_quotations'],

            'accepted' =>
                $stats['accepted_quotations'],

            'rejected' =>
                $stats['rejected_quotations'],
        ];

        $maxQuotationValue = max(
            1,
            ...array_values(
                $quotationAnalytics
            )
        );


        /*
        |--------------------------------------------------------------------------
        | Recent Activity
        |--------------------------------------------------------------------------
        */

        $recentEnquiries = ProductEnquiry::query()
            ->with('product')
            ->latest('id')
            ->take(6)
            ->get();

        $recentQuotations = Quotation::query()
            ->with('enquiry')
            ->latest('quotation_date')
            ->latest('id')
            ->take(6)
            ->get();

        $recentOrders = SalesOrder::query()
            ->with('quotation')
            ->latest('order_date')
            ->latest('id')
            ->take(6)
            ->get();

        $recentProducts = Product::query()
            ->latest('id')
            ->take(6)
            ->get();


        /*
        |--------------------------------------------------------------------------
        | Latest Enquiry
        |--------------------------------------------------------------------------
        */

        $latestEnquiry = ProductEnquiry::query()
            ->latest('id')
            ->first();


        return view(
            'admin.dashboard',
            compact(
                'stats',
                'enquiryAnalytics',
                'maxEnquiryValue',
                'quotationAnalytics',
                'maxQuotationValue',
                'recentEnquiries',
                'recentQuotations',
                'recentOrders',
                'recentProducts',
                'latestEnquiry'
            )
        );
    }
}