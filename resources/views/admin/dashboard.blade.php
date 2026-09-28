@extends('layouts.admin')

@section('title', 'Dashboard | ASEW Admin')
@section('page-title', 'Dashboard')

@section('content')

<div class="p-4 sm:p-6 lg:p-8">

    <div class="max-w-[1500px] mx-auto">

        {{-- =====================================================
             PAGE INTRO
        ====================================================== --}}

        <div class="flex flex-col lg:flex-row lg:items-center lg:justify-between gap-5">

            <div>

                <p class="text-[9px] uppercase tracking-[0.18em] font-bold text-[#D71920]">
                    Administration
                </p>

                <h1 class="mt-1 text-2xl sm:text-3xl font-extrabold text-[#073B66]">
                    ASEW Business Dashboard
                </h1>

                <p class="mt-2 max-w-3xl text-[11px] sm:text-[12px] leading-6 text-slate-400">
                    Monitor products, customer enquiries, quotations,
                    sales orders, deliveries and payment activity
                    from one central dashboard.
                </p>

            </div>


            <div class="flex flex-wrap gap-3">

                <a
                    href="{{ route('admin.products.create') }}"
                    class="min-h-[44px] px-5 inline-flex items-center justify-center
                           bg-[#032B55] hover:bg-[#073B66] text-white
                           text-[9px] uppercase tracking-wide font-bold transition"
                >
                    + Add Product
                </a>

                <a
                    href="{{ route('admin.enquiries.index') }}"
                    class="min-h-[44px] px-5 inline-flex items-center justify-center
                           bg-[#D71920] hover:bg-[#032B55] text-white
                           text-[9px] uppercase tracking-wide font-bold transition"
                >
                    View Enquiries
                </a>

            </div>

        </div>


        {{-- =====================================================
             PRIMARY BUSINESS STATS
        ====================================================== --}}

        <div class="grid grid-cols-1 sm:grid-cols-2 xl:grid-cols-4 gap-4 mt-7">

            {{-- PRODUCTS --}}

            <a
                href="{{ route('admin.products.index') }}"
                class="bg-white border border-slate-200 p-5
                       hover:border-[#073B66]/40 transition"
            >

                <div class="flex items-start justify-between gap-4">

                    <div>

                        <p class="text-[9px] uppercase tracking-wide font-bold text-slate-400">
                            Total Products
                        </p>

                        <p class="mt-3 text-3xl font-extrabold text-[#073B66]">
                            {{ number_format($stats['total_products']) }}
                        </p>

                        <p class="mt-2 text-[10px] text-slate-400">
                            {{ number_format($stats['active_products']) }}
                            active products
                        </p>

                    </div>

                    <div class="w-11 h-11 flex items-center justify-center
                                bg-[#032B55]/5 text-[#032B55]">

                        <svg
                            xmlns="http://www.w3.org/2000/svg"
                            width="19"
                            height="19"
                            viewBox="0 0 24 24"
                            fill="none"
                            stroke="currentColor"
                            stroke-width="2"
                        >
                            <path d="m7.5 4.27 9 5.15"/>
                            <path d="M21 8a2 2 0 0 0-1-1.73l-7-4a2 2 0 0 0-2 0l-7 4A2 2 0 0 0 3 8v8a2 2 0 0 0 1 1.73l7 4a2 2 0 0 0 2 0l7-4A2 2 0 0 0 21 16Z"/>
                            <path d="m3.3 7 8.7 5 8.7-5"/>
                            <path d="M12 22V12"/>
                        </svg>

                    </div>

                </div>

            </a>


            {{-- ENQUIRIES --}}

            <a
                href="{{ route('admin.enquiries.index') }}"
                class="bg-white border border-slate-200 p-5
                       hover:border-blue-300 transition"
            >

                <div class="flex items-start justify-between gap-4">

                    <div>

                        <p class="text-[9px] uppercase tracking-wide font-bold text-slate-400">
                            Total Enquiries
                        </p>

                        <p class="mt-3 text-3xl font-extrabold text-[#073B66]">
                            {{ number_format($stats['total_enquiries']) }}
                        </p>

                        <p class="mt-2 text-[10px] text-slate-400">
                            {{ number_format($stats['new_enquiries']) }}
                            awaiting review
                        </p>

                    </div>

                    <div class="w-11 h-11 flex items-center justify-center
                                bg-blue-50 text-blue-600">

                        <svg
                            xmlns="http://www.w3.org/2000/svg"
                            width="19"
                            height="19"
                            viewBox="0 0 24 24"
                            fill="none"
                            stroke="currentColor"
                            stroke-width="2"
                        >
                            <path d="M21 15a4 4 0 0 1-4 4H8l-5 3V7a4 4 0 0 1 4-4h10a4 4 0 0 1 4 4z"/>
                        </svg>

                    </div>

                </div>

            </a>


            {{-- QUOTATIONS --}}

            <a
                href="{{ route('admin.quotations.index') }}"
                class="bg-white border border-slate-200 p-5
                       hover:border-purple-300 transition"
            >

                <div class="flex items-start justify-between gap-4">

                    <div>

                        <p class="text-[9px] uppercase tracking-wide font-bold text-slate-400">
                            Quotations
                        </p>

                        <p class="mt-3 text-3xl font-extrabold text-purple-600">
                            {{ number_format($stats['total_quotations']) }}
                        </p>

                        <p class="mt-2 text-[10px] text-slate-400">
                            {{ number_format($stats['accepted_quotations']) }}
                            accepted
                        </p>

                    </div>

                    <div class="w-11 h-11 flex items-center justify-center
                                bg-purple-50 text-purple-600">

                        <svg
                            xmlns="http://www.w3.org/2000/svg"
                            width="19"
                            height="19"
                            viewBox="0 0 24 24"
                            fill="none"
                            stroke="currentColor"
                            stroke-width="2"
                        >
                            <path d="M14 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V8z"/>
                            <path d="M14 2v6h6"/>
                            <path d="M8 13h8"/>
                            <path d="M8 17h8"/>
                        </svg>

                    </div>

                </div>

            </a>


            {{-- SALES ORDERS --}}

            <a
                href="{{ route('admin.sales-orders.index') }}"
                class="relative overflow-hidden bg-[#032B55] p-5 text-white"
            >

                <div class="absolute -right-8 -top-8 w-28 h-28
                            rounded-full bg-white/5"></div>

                <div class="relative z-10">

                    <p class="text-[9px] uppercase tracking-wide font-bold text-white/60">
                        Sales Orders
                    </p>

                    <p class="mt-3 text-3xl font-extrabold">
                        {{ number_format($stats['total_orders']) }}
                    </p>

                    <p class="mt-2 text-[10px] text-white/50">
                        {{ number_format($stats['delivered_orders']) }}
                        delivered
                    </p>

                    <span class="inline-flex mt-3 text-[9px] uppercase tracking-wide
                                 font-bold text-[#D7A93A]">
                        Manage Orders →
                    </span>

                </div>

            </a>

        </div>


        {{-- =====================================================
             FINANCIAL SUMMARY
        ====================================================== --}}

        <div class="grid grid-cols-1 md:grid-cols-3 gap-4 mt-5">

            <div class="bg-white border border-slate-200 p-5">

                <p class="text-[9px] uppercase tracking-wide font-bold text-slate-400">
                    Accepted Quote Value
                </p>

                <p class="mt-3 text-2xl font-extrabold text-[#073B66]">
                    ₹{{ number_format($stats['accepted_quotation_value'], 2) }}
                </p>

                <p class="mt-2 text-[9px] text-slate-400">
                    Value of accepted quotations
                </p>

            </div>


            <div class="bg-white border border-slate-200 p-5">

                <p class="text-[9px] uppercase tracking-wide font-bold text-slate-400">
                    Sales Order Value
                </p>

                <p class="mt-3 text-2xl font-extrabold text-emerald-600">
                    ₹{{ number_format($stats['total_order_value'], 2) }}
                </p>

                <p class="mt-2 text-[9px] text-slate-400">
                    Excluding cancelled orders
                </p>

            </div>


            <div class="bg-white border border-slate-200 p-5">

                <p class="text-[9px] uppercase tracking-wide font-bold text-slate-400">
                    Orders Awaiting Full Payment
                </p>

                <p class="mt-3 text-2xl font-extrabold text-amber-500">
                    {{ number_format(
                        $stats['pending_payments'] +
                        $stats['partial_payments']
                    ) }}
                </p>

                <p class="mt-2 text-[9px] text-slate-400">
                    Pending / partial payment status
                </p>

            </div>

        </div>


        {{-- =====================================================
             PIPELINES
        ====================================================== --}}

        <div class="grid grid-cols-1 xl:grid-cols-2 gap-5 mt-5">

            {{-- ENQUIRY PIPELINE --}}

            <div class="bg-white border border-slate-200">

                <div class="px-5 sm:px-6 py-5 border-b border-slate-200
                            flex items-center justify-between gap-3">

                    <div>

                        <p class="text-[9px] uppercase tracking-[0.15em]
                                  font-bold text-[#D71920]">
                            Enquiry Analytics
                        </p>

                        <h2 class="mt-1 text-lg font-extrabold text-[#073B66]">
                            Sales Enquiry Pipeline
                        </h2>

                    </div>

                    <a
                        href="{{ route('admin.enquiries.index') }}"
                        class="text-[9px] uppercase font-bold text-[#073B66]
                               hover:text-[#D71920]"
                    >
                        View All
                    </a>

                </div>


                <div class="p-5 sm:p-6 space-y-6">

                    @php
                        $enquiryBars = [
                            [
                                'label' => 'New',
                                'value' => $enquiryAnalytics['new'],
                                'bar' => 'bg-blue-500',
                                'dot' => 'bg-blue-500',
                            ],
                            [
                                'label' => 'Contacted',
                                'value' => $enquiryAnalytics['contacted'],
                                'bar' => 'bg-amber-500',
                                'dot' => 'bg-amber-500',
                            ],
                            [
                                'label' => 'Quoted',
                                'value' => $enquiryAnalytics['quoted'],
                                'bar' => 'bg-purple-500',
                                'dot' => 'bg-purple-500',
                            ],
                            [
                                'label' => 'Closed',
                                'value' => $enquiryAnalytics['closed'],
                                'bar' => 'bg-emerald-500',
                                'dot' => 'bg-emerald-500',
                            ],
                        ];
                    @endphp

                    @foreach($enquiryBars as $item)

                        <div>

                            <div class="flex items-center justify-between gap-3">

                                <div class="flex items-center gap-2">

                                    <span class="w-2.5 h-2.5 rounded-full {{ $item['dot'] }}"></span>

                                    <span class="text-[10px] uppercase tracking-wide
                                                 font-bold text-slate-500">
                                        {{ $item['label'] }}
                                    </span>

                                </div>

                                <span class="text-sm font-extrabold text-[#073B66]">
                                    {{ number_format($item['value']) }}
                                </span>

                            </div>

                            <div class="mt-3 h-2 bg-slate-100 overflow-hidden">

                                <div
                                    class="h-full {{ $item['bar'] }}"
                                    style="width: {{
                                        min(
                                            100,
                                            ($item['value'] / $maxEnquiryValue) * 100
                                        )
                                    }}%"
                                ></div>

                            </div>

                        </div>

                    @endforeach

                </div>

            </div>


            {{-- QUOTATION PIPELINE --}}

            <div class="bg-white border border-slate-200">

                <div class="px-5 sm:px-6 py-5 border-b border-slate-200
                            flex items-center justify-between gap-3">

                    <div>

                        <p class="text-[9px] uppercase tracking-[0.15em]
                                  font-bold text-[#D71920]">
                            Quotation Analytics
                        </p>

                        <h2 class="mt-1 text-lg font-extrabold text-[#073B66]">
                            Quotation Pipeline
                        </h2>

                    </div>

                    <a
                        href="{{ route('admin.quotations.index') }}"
                        class="text-[9px] uppercase font-bold text-[#073B66]
                               hover:text-[#D71920]"
                    >
                        View All
                    </a>

                </div>


                <div class="p-5 sm:p-6 space-y-6">

                    @php
                        $quotationBars = [
                            [
                                'label' => 'Draft',
                                'value' => $quotationAnalytics['draft'],
                                'bar' => 'bg-slate-400',
                                'dot' => 'bg-slate-400',
                            ],
                            [
                                'label' => 'Sent',
                                'value' => $quotationAnalytics['sent'],
                                'bar' => 'bg-blue-500',
                                'dot' => 'bg-blue-500',
                            ],
                            [
                                'label' => 'Accepted',
                                'value' => $quotationAnalytics['accepted'],
                                'bar' => 'bg-emerald-500',
                                'dot' => 'bg-emerald-500',
                            ],
                            [
                                'label' => 'Rejected',
                                'value' => $quotationAnalytics['rejected'],
                                'bar' => 'bg-red-500',
                                'dot' => 'bg-red-500',
                            ],
                        ];
                    @endphp

                    @foreach($quotationBars as $item)

                        <div>

                            <div class="flex items-center justify-between gap-3">

                                <div class="flex items-center gap-2">

                                    <span class="w-2.5 h-2.5 rounded-full {{ $item['dot'] }}"></span>

                                    <span class="text-[10px] uppercase tracking-wide
                                                 font-bold text-slate-500">
                                        {{ $item['label'] }}
                                    </span>

                                </div>

                                <span class="text-sm font-extrabold text-[#073B66]">
                                    {{ number_format($item['value']) }}
                                </span>

                            </div>

                            <div class="mt-3 h-2 bg-slate-100 overflow-hidden">

                                <div
                                    class="h-full {{ $item['bar'] }}"
                                    style="width: {{
                                        min(
                                            100,
                                            ($item['value'] / $maxQuotationValue) * 100
                                        )
                                    }}%"
                                ></div>

                            </div>

                        </div>

                    @endforeach

                </div>

            </div>

        </div>


        {{-- =====================================================
             ORDER STATUS + PAYMENT STATUS
        ====================================================== --}}

        <div class="grid grid-cols-1 xl:grid-cols-2 gap-5 mt-5">

            {{-- ORDER STATUS --}}

            <div class="bg-white border border-slate-200">

                <div class="px-5 py-5 border-b border-slate-200">

                    <p class="text-[9px] uppercase tracking-[0.15em]
                              font-bold text-[#D71920]">
                        Fulfilment
                    </p>

                    <h2 class="mt-1 text-lg font-extrabold text-[#073B66]">
                        Sales Order Status
                    </h2>

                </div>


                <div class="p-5 grid grid-cols-2 sm:grid-cols-3 gap-3">

                    @php
                        $orderStatuses = [
                            [
                                'label' => 'Confirmed',
                                'value' => $stats['confirmed_orders'],
                                'class' => 'text-blue-600',
                            ],
                            [
                                'label' => 'Processing',
                                'value' => $stats['processing_orders'],
                                'class' => 'text-amber-500',
                            ],
                            [
                                'label' => 'Ready',
                                'value' => $stats['ready_orders'],
                                'class' => 'text-purple-600',
                            ],
                            [
                                'label' => 'Dispatched',
                                'value' => $stats['dispatched_orders'],
                                'class' => 'text-indigo-600',
                            ],
                            [
                                'label' => 'Delivered',
                                'value' => $stats['delivered_orders'],
                                'class' => 'text-emerald-600',
                            ],
                            [
                                'label' => 'Cancelled',
                                'value' => $stats['cancelled_orders'],
                                'class' => 'text-red-500',
                            ],
                        ];
                    @endphp

                    @foreach($orderStatuses as $status)

                        <div class="border border-slate-200 p-4">

                            <p class="text-2xl font-extrabold {{ $status['class'] }}">
                                {{ number_format($status['value']) }}
                            </p>

                            <p class="mt-1 text-[8px] uppercase tracking-wide
                                      font-bold text-slate-400">
                                {{ $status['label'] }}
                            </p>

                        </div>

                    @endforeach

                </div>

            </div>


            {{-- PAYMENT STATUS --}}

            <div class="bg-white border border-slate-200">

                <div class="px-5 py-5 border-b border-slate-200">

                    <p class="text-[9px] uppercase tracking-[0.15em]
                              font-bold text-[#D71920]">
                        Payments
                    </p>

                    <h2 class="mt-1 text-lg font-extrabold text-[#073B66]">
                        Payment Overview
                    </h2>

                </div>


                <div class="p-5">

                    <div class="grid grid-cols-3 gap-3">

                        <div class="border border-slate-200 p-4">

                            <p class="text-2xl font-extrabold text-red-500">
                                {{ number_format($stats['pending_payments']) }}
                            </p>

                            <p class="mt-1 text-[8px] uppercase font-bold text-slate-400">
                                Pending
                            </p>

                        </div>


                        <div class="border border-slate-200 p-4">

                            <p class="text-2xl font-extrabold text-amber-500">
                                {{ number_format($stats['partial_payments']) }}
                            </p>

                            <p class="mt-1 text-[8px] uppercase font-bold text-slate-400">
                                Partial
                            </p>

                        </div>


                        <div class="border border-slate-200 p-4">

                            <p class="text-2xl font-extrabold text-emerald-600">
                                {{ number_format($stats['paid_orders']) }}
                            </p>

                            <p class="mt-1 text-[8px] uppercase font-bold text-slate-400">
                                Paid
                            </p>

                        </div>

                    </div>


                    <div class="mt-4 bg-[#032B55] p-5 text-white">

                        <p class="text-[9px] uppercase tracking-wide
                                  font-bold text-white/50">
                            Order Value Awaiting Full Payment
                        </p>

                        <p class="mt-2 text-2xl font-extrabold">
                            ₹{{ number_format($stats['pending_payment_value'], 2) }}
                        </p>

                        <a
                            href="{{ route(
                                'admin.sales-orders.index',
                                ['payment_status' => 'pending']
                            ) }}"
                            class="inline-flex mt-3 text-[9px] uppercase
                                   font-bold text-[#D7A93A]
                                   hover:text-white transition"
                        >
                            Review Payments →
                        </a>

                    </div>

                </div>

            </div>

        </div>


        {{-- =====================================================
             RECENT ENQUIRIES
        ====================================================== --}}

        <div class="bg-white border border-slate-200 mt-5">

            <div class="px-5 sm:px-6 py-5 border-b border-slate-200
                        flex items-center justify-between gap-3">

                <div>

                    <p class="text-[9px] uppercase tracking-[0.15em]
                              font-bold text-[#D71920]">
                        Recent Activity
                    </p>

                    <h2 class="mt-1 text-lg font-extrabold text-[#073B66]">
                        Latest Product Enquiries
                    </h2>

                </div>

                <a
                    href="{{ route('admin.enquiries.index') }}"
                    class="text-[9px] uppercase font-bold text-[#073B66]
                           hover:text-[#D71920]"
                >
                    View All
                </a>

            </div>


            <div class="overflow-x-auto">

                <table class="w-full min-w-[900px] text-left">

                    <thead class="bg-slate-50 border-b border-slate-200">

                        <tr>

                            <th class="px-5 py-3 text-[9px] uppercase text-slate-400">
                                ID
                            </th>

                            <th class="px-5 py-3 text-[9px] uppercase text-slate-400">
                                Customer
                            </th>

                            <th class="px-5 py-3 text-[9px] uppercase text-slate-400">
                                Product
                            </th>

                            <th class="px-5 py-3 text-[9px] uppercase text-slate-400">
                                Status
                            </th>

                            <th class="px-5 py-3 text-[9px] uppercase text-slate-400">
                                Date
                            </th>

                            <th class="px-5 py-3 text-[9px] uppercase text-slate-400 text-right">
                                Action
                            </th>

                        </tr>

                    </thead>


                    <tbody class="divide-y divide-slate-100">

                        @forelse($recentEnquiries as $enquiry)

                            @php
                                $statusClass = match($enquiry->status) {
                                    'new' =>
                                        'bg-blue-50 text-blue-600',

                                    'contacted' =>
                                        'bg-amber-50 text-amber-600',

                                    'quoted' =>
                                        'bg-purple-50 text-purple-600',

                                    'closed' =>
                                        'bg-emerald-50 text-emerald-600',

                                    default =>
                                        'bg-slate-100 text-slate-500',
                                };
                            @endphp

                            <tr class="hover:bg-slate-50 transition">

                                <td class="px-5 py-4 text-[10px] font-bold text-slate-400">
                                    #{{ str_pad(
                                        (string) $enquiry->id,
                                        5,
                                        '0',
                                        STR_PAD_LEFT
                                    ) }}
                                </td>


                                <td class="px-5 py-4">

                                    <p class="text-[11px] font-bold text-[#073B66]">
                                        {{ $enquiry->name }}
                                    </p>

                                    <p class="mt-1 text-[9px] text-slate-400">
                                        {{ $enquiry->company ?: $enquiry->email }}
                                    </p>

                                </td>


                                <td class="px-5 py-4">

                                    <p class="max-w-[260px] truncate text-[10px]
                                              font-semibold text-slate-600">
                                        {{ $enquiry->product_name ?: 'General Enquiry' }}
                                    </p>

                                    @if($enquiry->product_code)

                                        <p class="mt-1 text-[8px] font-bold text-[#D71920]">
                                            {{ $enquiry->product_code }}
                                        </p>

                                    @endif

                                </td>


                                <td class="px-5 py-4">

                                    <span class="inline-flex px-2.5 py-1.5 text-[8px]
                                                 uppercase tracking-wide font-bold
                                                 {{ $statusClass }}">
                                        {{ ucfirst($enquiry->status) }}
                                    </span>

                                </td>


                                <td class="px-5 py-4">

                                    <p class="text-[9px] text-slate-500">
                                        {{ $enquiry->created_at->format('d M Y') }}
                                    </p>

                                    <p class="mt-1 text-[8px] text-slate-400">
                                        {{ $enquiry->created_at->format('h:i A') }}
                                    </p>

                                </td>


                                <td class="px-5 py-4 text-right">

                                    <a
                                        href="{{ route(
                                            'admin.enquiries.show',
                                            $enquiry
                                        ) }}"
                                        class="inline-flex min-h-[34px] px-4
                                               items-center justify-center border
                                               border-slate-200 text-[8px] uppercase
                                               font-bold text-[#073B66]
                                               hover:border-[#D71920]
                                               hover:text-[#D71920] transition"
                                    >
                                        View
                                    </a>

                                </td>

                            </tr>

                        @empty

                            <tr>

                                <td
                                    colspan="6"
                                    class="px-6 py-12 text-center
                                           text-[11px] text-slate-400"
                                >
                                    No customer enquiries available yet.
                                </td>

                            </tr>

                        @endforelse

                    </tbody>

                </table>

            </div>

        </div>


        {{-- =====================================================
             RECENT QUOTATIONS + SALES ORDERS
        ====================================================== --}}

        <div class="grid grid-cols-1 xl:grid-cols-2 gap-5 mt-5">

            {{-- RECENT QUOTATIONS --}}

            <div class="bg-white border border-slate-200">

                <div class="px-5 py-5 border-b border-slate-200
                            flex items-center justify-between">

                    <div>

                        <p class="text-[9px] uppercase tracking-[0.15em]
                                  font-bold text-[#D71920]">
                            Quotations
                        </p>

                        <h2 class="mt-1 text-lg font-extrabold text-[#073B66]">
                            Recent Quotations
                        </h2>

                    </div>

                    <a
                        href="{{ route('admin.quotations.index') }}"
                        class="text-[9px] uppercase font-bold text-[#073B66]"
                    >
                        View All
                    </a>

                </div>


                <div class="divide-y divide-slate-100">

                    @forelse($recentQuotations as $quotation)

                        @php
                            $quoteClass = match($quotation->status) {
                                'draft' =>
                                    'bg-slate-100 text-slate-500',

                                'sent' =>
                                    'bg-blue-50 text-blue-600',

                                'accepted' =>
                                    'bg-emerald-50 text-emerald-600',

                                'rejected' =>
                                    'bg-red-50 text-red-600',

                                default =>
                                    'bg-slate-100 text-slate-500',
                            };
                        @endphp

                        <a
                            href="{{ route(
                                'admin.quotations.show',
                                $quotation
                            ) }}"
                            class="block p-5 hover:bg-slate-50 transition"
                        >

                            <div class="flex items-start justify-between gap-4">

                                <div class="min-w-0">

                                    <p class="text-[10px] font-extrabold text-[#073B66]">
                                        {{ $quotation->quotation_number }}
                                    </p>

                                    <p class="mt-1 truncate text-[10px] text-slate-500">
                                        {{ $quotation->customer_name }}
                                    </p>

                                    <p class="mt-2 text-[9px] font-bold text-slate-400">
                                        ₹{{ number_format($quotation->grand_total, 2) }}
                                    </p>

                                </div>

                                <span class="shrink-0 px-2.5 py-1.5
                                             text-[8px] uppercase font-bold
                                             {{ $quoteClass }}">
                                    {{ ucfirst($quotation->status) }}
                                </span>

                            </div>

                        </a>

                    @empty

                        <div class="p-10 text-center text-[10px] text-slate-400">
                            No quotations available.
                        </div>

                    @endforelse

                </div>

            </div>


            {{-- RECENT SALES ORDERS --}}

            <div class="bg-white border border-slate-200">

                <div class="px-5 py-5 border-b border-slate-200
                            flex items-center justify-between">

                    <div>

                        <p class="text-[9px] uppercase tracking-[0.15em]
                                  font-bold text-[#D71920]">
                            Orders
                        </p>

                        <h2 class="mt-1 text-lg font-extrabold text-[#073B66]">
                            Recent Sales Orders
                        </h2>

                    </div>

                    <a
                        href="{{ route('admin.sales-orders.index') }}"
                        class="text-[9px] uppercase font-bold text-[#073B66]"
                    >
                        View All
                    </a>

                </div>


                <div class="divide-y divide-slate-100">

                    @forelse($recentOrders as $order)

                        @php
                            $orderClass = match($order->order_status) {
                                'confirmed' =>
                                    'bg-blue-50 text-blue-600',

                                'processing' =>
                                    'bg-amber-50 text-amber-600',

                                'ready' =>
                                    'bg-purple-50 text-purple-600',

                                'dispatched' =>
                                    'bg-indigo-50 text-indigo-600',

                                'delivered' =>
                                    'bg-emerald-50 text-emerald-600',

                                'cancelled' =>
                                    'bg-red-50 text-red-600',

                                default =>
                                    'bg-slate-100 text-slate-500',
                            };
                        @endphp

                        <a
                            href="{{ route(
                                'admin.sales-orders.show',
                                $order
                            ) }}"
                            class="block p-5 hover:bg-slate-50 transition"
                        >

                            <div class="flex items-start justify-between gap-4">

                                <div class="min-w-0">

                                    <p class="text-[10px] font-extrabold text-[#073B66]">
                                        {{ $order->order_number }}
                                    </p>

                                    <p class="mt-1 truncate text-[10px] text-slate-500">
                                        {{ $order->customer_name }}
                                    </p>

                                    <p class="mt-2 text-[9px] font-bold text-slate-400">
                                        ₹{{ number_format($order->grand_total, 2) }}
                                    </p>

                                </div>

                                <span class="shrink-0 px-2.5 py-1.5
                                             text-[8px] uppercase font-bold
                                             {{ $orderClass }}">
                                    {{ ucfirst($order->order_status) }}
                                </span>

                            </div>

                        </a>

                    @empty

                        <div class="p-10 text-center text-[10px] text-slate-400">
                            No sales orders available.
                        </div>

                    @endforelse

                </div>

            </div>

        </div>


        {{-- =====================================================
             RECENT PRODUCTS
        ====================================================== --}}

        <div class="mt-5 bg-white border border-slate-200">

            <div class="px-5 sm:px-6 py-5 border-b border-slate-200
                        flex items-center justify-between gap-3">

                <div>

                    <p class="text-[9px] uppercase tracking-[0.15em]
                              font-bold text-[#D71920]">
                        Product Catalogue
                    </p>

                    <h2 class="mt-1 text-lg font-extrabold text-[#073B66]">
                        Recently Added Products
                    </h2>

                </div>

                <a
                    href="{{ route('admin.products.index') }}"
                    class="text-[9px] uppercase font-bold text-[#073B66]
                           hover:text-[#D71920]"
                >
                    Manage Products
                </a>

            </div>


            <div class="grid grid-cols-1 sm:grid-cols-2 xl:grid-cols-3
                        gap-px bg-slate-200">

                @forelse($recentProducts as $product)

                    <div class="bg-white p-5 flex items-center gap-4">

                        <div class="w-[70px] h-[65px] shrink-0 border
                                    border-slate-200 bg-slate-50 flex
                                    items-center justify-center">

                            @if($product->image)

                                <img
                                    src="{{ asset($product->image) }}"
                                    alt="{{ $product->name }}"
                                    class="max-w-full max-h-full object-contain p-2"
                                >

                            @else

                                <span class="text-[8px] text-slate-300">
                                    No Image
                                </span>

                            @endif

                        </div>


                        <div class="min-w-0 flex-1">

                            <p class="truncate text-[11px] font-bold text-[#073B66]">
                                {{ $product->name }}
                            </p>

                            <p class="mt-1 text-[9px] text-slate-400">
                                {{ $product->category }}
                            </p>

                            <div class="mt-2 flex items-center justify-between gap-2">

                                <span
                                    class="text-[8px] uppercase font-bold
                                           {{
                                               $product->is_active
                                                   ? 'text-emerald-600'
                                                   : 'text-slate-400'
                                           }}"
                                >
                                    {{
                                        $product->is_active
                                            ? 'Active'
                                            : 'Inactive'
                                    }}
                                </span>

                                <a
                                    href="{{ route(
                                        'admin.products.edit',
                                        $product
                                    ) }}"
                                    class="text-[8px] uppercase font-bold text-[#D71920]"
                                >
                                    Edit →
                                </a>

                            </div>

                        </div>

                    </div>

                @empty

                    <div class="col-span-full bg-white px-6 py-12
                                text-center text-[11px] text-slate-400">
                        No products available.
                    </div>

                @endforelse

            </div>

        </div>

    </div>

</div>

@endsection