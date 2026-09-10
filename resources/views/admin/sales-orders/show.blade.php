@extends('layouts.admin')

@section('title', $salesOrder->order_number)
@section('page-title', 'Sales Order Details')

@section('content')

@php

    $statusClasses = match($salesOrder->order_status) {

        'confirmed' =>
            'bg-blue-50 text-blue-700 border-blue-200',

        'processing' =>
            'bg-amber-50 text-amber-700 border-amber-200',

        'ready' =>
            'bg-indigo-50 text-indigo-700 border-indigo-200',

        'dispatched' =>
            'bg-purple-50 text-purple-700 border-purple-200',

        'delivered' =>
            'bg-green-50 text-green-700 border-green-200',

        'cancelled' =>
            'bg-red-50 text-red-700 border-red-200',

        default =>
            'bg-slate-50 text-slate-700 border-slate-200',
    };


    $paymentClasses = match($salesOrder->payment_status) {

        'paid' =>
            'bg-green-50 text-green-700 border-green-200',

        'partial' =>
            'bg-amber-50 text-amber-700 border-amber-200',

        'refunded' =>
            'bg-purple-50 text-purple-700 border-purple-200',

        default =>
            'bg-red-50 text-red-700 border-red-200',
    };

@endphp


<div class="space-y-6">

    {{-- =========================================================
         HEADER
    ========================================================== --}}

    <div
        class="flex flex-col
               lg:flex-row
               lg:items-center
               lg:justify-between
               gap-4"
    >

        <div>

            <a
                href="{{ route('admin.sales-orders.index') }}"
                class="inline-flex
                       items-center
                       gap-2
                       text-sm
                       font-semibold
                       text-slate-500
                       hover:text-[#073B66]"
            >
                ← Back to Sales Orders
            </a>

            <div
                class="mt-3
                       flex flex-wrap
                       items-center
                       gap-3"
            >

                <h1
                    class="text-2xl sm:text-3xl
                           font-bold
                           text-slate-900"
                >
                    {{ $salesOrder->order_number }}
                </h1>

                <span
                    class="inline-flex
                           rounded-full
                           border
                           px-3 py-1
                           text-xs
                           font-bold
                           capitalize
                           {{ $statusClasses }}"
                >
                    {{ $salesOrder->order_status }}
                </span>

            </div>

            <div class="flex flex-wrap items-center gap-3">

    {{-- PRINT / DOCUMENT --}}
    <a
        href="{{ route('admin.sales-orders.document', $salesOrder) }}"
        target="_blank"
        class="
            inline-flex items-center gap-2
            rounded-xl
            border border-slate-200
            bg-white
            px-4 py-2.5
            text-sm font-semibold
            text-slate-700
            shadow-sm
            transition
            hover:border-[#073B66]
            hover:text-[#073B66]
        "
    >

        <svg
            xmlns="http://www.w3.org/2000/svg"
            width="18"
            height="18"
            viewBox="0 0 24 24"
            fill="none"
            stroke="currentColor"
            stroke-width="2"
            stroke-linecap="round"
            stroke-linejoin="round"
        >
            <polyline points="6 9 6 2 18 2 18 9"></polyline>
            <path d="M6 18H4a2 2 0 0 1-2-2v-5a2 2 0 0 1 2-2h16a2 2 0 0 1 2 2v5a2 2 0 0 1-2 2h-2"></path>
            <rect x="6" y="14" width="12" height="8"></rect>
        </svg>

        Print Order

    </a>


    {{-- EMAIL CUSTOMER --}}
    <form
        method="POST"
        action="{{ route('admin.sales-orders.send', $salesOrder) }}"
        onsubmit="return confirm('Send this order confirmation to {{ addslashes($salesOrder->email) }}?')"
    >

        @csrf

        <button
            type="submit"
            class="
                inline-flex items-center gap-2
                rounded-xl
                bg-[#073B66]
                px-4 py-2.5
                text-sm font-semibold
                text-white
                shadow-sm
                transition
                hover:bg-[#032B55]
            "
        >

            <svg
                xmlns="http://www.w3.org/2000/svg"
                width="18"
                height="18"
                viewBox="0 0 24 24"
                fill="none"
                stroke="currentColor"
                stroke-width="2"
            >
                <path d="m22 2-7 20-4-9-9-4Z"></path>
                <path d="M22 2 11 13"></path>
            </svg>

            Email Customer

        </button>

    </form>

</div>

            <p
                class="mt-2
                       text-sm
                       text-slate-500"
            >
                Created on
                {{ $salesOrder->order_date?->format('d M Y') }}
            </p>

        </div>


        @if($salesOrder->quotation)

            <a
                href="{{ route(
                    'admin.quotations.show',
                    $salesOrder->quotation
                ) }}"
                class="inline-flex
                       items-center
                       justify-center
                       gap-2
                       rounded-xl
                       border border-slate-200
                       bg-white
                       px-5 py-3
                       text-sm font-bold
                       text-slate-700
                       shadow-sm
                       transition
                       hover:border-[#073B66]
                       hover:text-[#073B66]"
            >
                View Original Quotation
            </a>

        @endif

    </div>


    {{-- =========================================================
         FLASH MESSAGES
    ========================================================== --}}

    @if(session('success'))

        <div
            class="rounded-2xl
                   border border-green-200
                   bg-green-50
                   px-5 py-4
                   text-sm font-semibold
                   text-green-800"
        >
            {{ session('success') }}
        </div>

    @endif
    @if(session('error'))

    <div
        class="
            mb-6
            rounded-xl
            border border-red-200
            bg-red-50
            px-5 py-4
            text-sm font-medium
            text-red-700
        "
    >
        {{ session('error') }}
    </div>

@endif


    {{-- =========================================================
         TOP SUMMARY
    ========================================================== --}}

    <div
        class="grid
               sm:grid-cols-2
               xl:grid-cols-4
               gap-4"
    >

        <div
            class="rounded-2xl
                   border border-slate-200
                   bg-white
                   p-5
                   shadow-sm"
        >
            <p
                class="text-xs
                       font-bold
                       uppercase
                       tracking-wider
                       text-slate-500"
            >
                Grand Total
            </p>

            <h3
                class="mt-2
                       text-2xl
                       font-bold
                       text-[#032B55]"
            >
                ₹{{ number_format($salesOrder->grand_total, 2) }}
            </h3>
        </div>


        <div
            class="rounded-2xl
                   border border-slate-200
                   bg-white
                   p-5
                   shadow-sm"
        >
            <p
                class="text-xs
                       font-bold
                       uppercase
                       tracking-wider
                       text-slate-500"
            >
                Payment
            </p>

            <span
                class="mt-3
                       inline-flex
                       rounded-full
                       border
                       px-3 py-1
                       text-xs font-bold
                       capitalize
                       {{ $paymentClasses }}"
            >
                {{ $salesOrder->payment_status }}
            </span>
        </div>


        <div
            class="rounded-2xl
                   border border-slate-200
                   bg-white
                   p-5
                   shadow-sm"
        >
            <p
                class="text-xs
                       font-bold
                       uppercase
                       tracking-wider
                       text-slate-500"
            >
                Products
            </p>

            <h3
                class="mt-2
                       text-2xl
                       font-bold
                       text-slate-900"
            >
                {{ $salesOrder->items->count() }}
            </h3>
        </div>


        <div
            class="rounded-2xl
                   border border-slate-200
                   bg-white
                   p-5
                   shadow-sm"
        >
            <p
                class="text-xs
                       font-bold
                       uppercase
                       tracking-wider
                       text-slate-500"
            >
                Expected Delivery
            </p>

            <h3
                class="mt-2
                       text-base
                       font-bold
                       text-slate-900"
            >
                {{ $salesOrder->expected_delivery_date
                    ? $salesOrder->expected_delivery_date->format('d M Y')
                    : 'Not Set'
                }}
            </h3>
        </div>

        <div
    class="
        rounded-2xl
        border
        border-slate-200
        bg-white
        p-5
        shadow-sm
    "
>

    <div
        class="
            text-xs
            font-semibold
            uppercase
            tracking-wider
            text-slate-400
        "
    >
        Delivery Status
    </div>


    @php

        $deliveryClass = match(
            $salesOrder->delivery_status
        ) {

            'preparing'
                => 'bg-amber-50 text-amber-700 border-amber-200',

            'dispatched'
                => 'bg-blue-50 text-blue-700 border-blue-200',

            'in_transit'
                => 'bg-purple-50 text-purple-700 border-purple-200',

            'delivered'
                => 'bg-emerald-50 text-emerald-700 border-emerald-200',

            default
                => 'bg-slate-50 text-slate-600 border-slate-200',
        };

    @endphp


    <div class="mt-3">

        <span
            class="
                inline-flex
                rounded-full
                border
                px-3
                py-1.5
                text-xs
                font-bold
                {{ $deliveryClass }}
            "
        >
            {{
                ucwords(
                    str_replace(
                        '_',
                        ' ',
                        $salesOrder->delivery_status
                    )
                )
            }}
        </span>

    </div>


    @if($salesOrder->tracking_number)

        <div
            class="
                mt-3
                text-xs
                text-slate-500
            "
        >
            Tracking:
            <span
                class="
                    font-semibold
                    text-slate-700
                "
            >
                {{ $salesOrder->tracking_number }}
            </span>
        </div>

    @endif

</div>

    </div>


    {{-- =========================================================
         MAIN GRID
    ========================================================== --}}

    <div
        class="grid
               xl:grid-cols-[1.6fr_.8fr]
               gap-6"
    >

        {{-- =====================================================
             LEFT
        ====================================================== --}}

        <div class="space-y-6">


            {{-- CUSTOMER --}}

            <div
                class="rounded-2xl
                       border border-slate-200
                       bg-white
                       shadow-sm"
            >

                <div
                    class="border-b
                           border-slate-200
                           px-6 py-5"
                >
                    <h2
                        class="text-lg
                               font-bold
                               text-slate-900"
                    >
                        Customer Information
                    </h2>
                </div>


                <div
                    class="grid
                           sm:grid-cols-2
                           gap-5
                           p-6"
                >

                    <div>
                        <p class="text-xs font-bold uppercase text-slate-400">
                            Customer
                        </p>

                        <p class="mt-1 font-semibold text-slate-900">
                            {{ $salesOrder->customer_name }}
                        </p>
                    </div>


                    <div>
                        <p class="text-xs font-bold uppercase text-slate-400">
                            Company
                        </p>

                        <p class="mt-1 font-semibold text-slate-900">
                            {{ $salesOrder->company ?: '—' }}
                        </p>
                    </div>


                    <div>
                        <p class="text-xs font-bold uppercase text-slate-400">
                            Email
                        </p>

                        <p class="mt-1 text-sm font-medium text-slate-700">
                            {{ $salesOrder->email }}
                        </p>
                    </div>


                    <div>
                        <p class="text-xs font-bold uppercase text-slate-400">
                            Phone
                        </p>

                        <p class="mt-1 text-sm font-medium text-slate-700">
                            {{ $salesOrder->phone ?: '—' }}
                        </p>
                    </div>


                    <div>
                        <p class="text-xs font-bold uppercase text-slate-400">
                            City
                        </p>

                        <p class="mt-1 text-sm font-medium text-slate-700">
                            {{ $salesOrder->city ?: '—' }}
                        </p>
                    </div>


                    @if($salesOrder->quotation)

                        <div>
                            <p class="text-xs font-bold uppercase text-slate-400">
                                Quotation
                            </p>

                            <a
                                href="{{ route(
                                    'admin.quotations.show',
                                    $salesOrder->quotation
                                ) }}"
                                class="mt-1
                                       inline-block
                                       font-bold
                                       text-[#073B66]
                                       hover:text-[#D71920]"
                            >
                                {{ $salesOrder->quotation->quotation_number }}
                            </a>
                        </div>

                    @endif

                </div>

            </div>


            {{-- PRODUCTS --}}

            <div
                class="overflow-hidden
                       rounded-2xl
                       border border-slate-200
                       bg-white
                       shadow-sm"
            >

                <div
                    class="border-b
                           border-slate-200
                           px-6 py-5"
                >
                    <h2
                        class="text-lg
                               font-bold
                               text-slate-900"
                    >
                        Order Items
                    </h2>
                </div>


                <div class="overflow-x-auto">

                    <table class="w-full min-w-[700px]">

                        <thead class="bg-slate-50">

                            <tr
                                class="text-left
                                       text-xs
                                       font-bold
                                       uppercase
                                       tracking-wider
                                       text-slate-500"
                            >

                                <th class="px-6 py-4">
                                    Product
                                </th>

                                <th class="px-6 py-4">
                                    Code
                                </th>

                                <th class="px-6 py-4 text-center">
                                    Qty
                                </th>

                                <th class="px-6 py-4 text-right">
                                    Unit Price
                                </th>

                                <th class="px-6 py-4 text-right">
                                    Total
                                </th>

                            </tr>

                        </thead>


                        <tbody class="divide-y divide-slate-100">

                            @foreach($salesOrder->items as $item)

                                <tr>

                                    <td class="px-6 py-5">

                                        <p
                                            class="font-semibold
                                                   text-slate-900"
                                        >
                                            {{ $item->product_name }}
                                        </p>

                                    </td>


                                    <td class="px-6 py-5">

                                        <span
                                            class="text-sm
                                                   text-slate-600"
                                        >
                                            {{ $item->product_code ?: '—' }}
                                        </span>

                                    </td>


                                    <td
                                        class="px-6 py-5
                                               text-center
                                               font-semibold
                                               text-slate-700"
                                    >
                                        {{ $item->quantity }}
                                    </td>


                                    <td
                                        class="px-6 py-5
                                               text-right
                                               text-sm
                                               text-slate-700"
                                    >
                                        ₹{{ number_format($item->unit_price, 2) }}
                                    </td>


                                    <td
                                        class="px-6 py-5
                                               text-right
                                               font-bold
                                               text-slate-900"
                                    >
                                        ₹{{ number_format($item->total, 2) }}
                                    </td>

                                </tr>

                            @endforeach

                        </tbody>

                    </table>

                </div>

            </div>


            {{-- TOTALS --}}

            <div
                class="rounded-2xl
                       border border-slate-200
                       bg-white
                       p-6
                       shadow-sm"
            >

                <div class="ml-auto max-w-md space-y-3">

                    <div
                        class="flex
                               items-center
                               justify-between
                               text-sm"
                    >
                        <span class="text-slate-500">
                            Subtotal
                        </span>

                        <span class="font-semibold text-slate-800">
                            ₹{{ number_format($salesOrder->subtotal, 2) }}
                        </span>
                    </div>


                    @if($salesOrder->discount > 0)

                        <div
                            class="flex
                                   items-center
                                   justify-between
                                   text-sm"
                        >
                            <span class="text-slate-500">
                                Discount
                            </span>

                            <span class="font-semibold text-red-600">
                                - ₹{{ number_format($salesOrder->discount, 2) }}
                            </span>
                        </div>

                    @endif


                    <div
                        class="flex
                               items-center
                               justify-between
                               text-sm"
                    >
                        <span class="text-slate-500">
                            GST
                        </span>

                        <span class="font-semibold text-slate-800">
                            ₹{{ number_format($salesOrder->gst_amount, 2) }}
                        </span>
                    </div>


                    <div
                        class="border-t
                               border-slate-200
                               pt-4"
                    >

                        <div
                            class="flex
                                   items-center
                                   justify-between"
                        >

                            <span
                                class="font-bold
                                       text-slate-900"
                            >
                                Grand Total
                            </span>

                            <span
                                class="text-2xl
                                       font-bold
                                       text-[#032B55]"
                            >
                                ₹{{ number_format($salesOrder->grand_total, 2) }}
                            </span>

                        </div>

                    </div>

                </div>

            </div>

        </div>


        {{-- =====================================================
             RIGHT SIDEBAR
        ====================================================== --}}

        <div>

            <div
                class="xl:sticky
                       xl:top-24
                       rounded-2xl
                       border border-slate-200
                       bg-white
                       shadow-sm"
            >

                <div
                    class="border-b
                           border-slate-200
                           px-6 py-5"
                >

                    <h2
                        class="text-lg
                               font-bold
                               text-slate-900"
                    >
                        Manage Order
                    </h2>

                    <p
                        class="mt-1
                               text-xs
                               text-slate-500"
                    >
                        Update payment, progress and delivery information.
                    </p>

                </div>


                <form
                    method="POST"
                    action="{{ route(
                        'admin.sales-orders.update',
                        $salesOrder
                    ) }}"
                    class="space-y-5 p-6"
                >

                    @csrf
                    @method('PUT')


                    {{-- ORDER STATUS --}}

                    <div>

                        <label
                            class="mb-2
                                   block
                                   text-sm
                                   font-bold
                                   text-slate-700"
                        >
                            Order Status
                        </label>

                        <select
                            name="order_status"
                            required
                            class="w-full
                                   rounded-xl
                                   border border-slate-200
                                   bg-white
                                   px-4 py-3
                                   text-sm
                                   outline-none
                                   focus:border-[#073B66]
                                   focus:ring-2
                                   focus:ring-[#073B66]/10"
                        >

                            @foreach([
                                'confirmed' => 'Confirmed',
                                'processing' => 'Processing',
                                'ready' => 'Ready for Dispatch',
                                'dispatched' => 'Dispatched',
                                'delivered' => 'Delivered',
                                'cancelled' => 'Cancelled',
                            ] as $value => $label)

                                <option
                                    value="{{ $value }}"
                                    @selected(
                                        old(
                                            'order_status',
                                            $salesOrder->order_status
                                        ) === $value
                                    )
                                >
                                    {{ $label }}
                                </option>

                            @endforeach

                        </select>

                    </div>


                    {{-- PAYMENT --}}

                    <div>

                        <label
                            class="mb-2
                                   block
                                   text-sm
                                   font-bold
                                   text-slate-700"
                        >
                            Payment Status
                        </label>

                        <select
                            name="payment_status"
                            required
                            class="w-full
                                   rounded-xl
                                   border border-slate-200
                                   bg-white
                                   px-4 py-3
                                   text-sm
                                   outline-none
                                   focus:border-[#073B66]"
                        >

                            @foreach([
                                'pending' => 'Pending',
                                'partial' => 'Partially Paid',
                                'paid' => 'Paid',
                                'refunded' => 'Refunded',
                            ] as $value => $label)

                                <option
                                    value="{{ $value }}"
                                    @selected(
                                        old(
                                            'payment_status',
                                            $salesOrder->payment_status
                                        ) === $value
                                    )
                                >
                                    {{ $label }}
                                </option>

                            @endforeach

                        </select>

                    </div>

                    {{-- ============================================================
     DISPATCH & DELIVERY
============================================================ --}}

<div
    class="
        mt-7
        border-t
        border-slate-200
        pt-7
    "
>

    <div class="mb-5">

        <h3
            class="
                text-base
                font-bold
                text-[#032B55]
            "
        >
            Dispatch & Delivery
        </h3>

        <p
            class="
                mt-1
                text-xs
                leading-5
                text-slate-500
            "
        >
            Manage courier, tracking and delivery progress.
        </p>

    </div>


    <div class="space-y-5">


        {{-- DELIVERY STATUS --}}
        <div>

            <label
                class="
                    mb-2
                    block
                    text-sm
                    font-semibold
                    text-slate-700
                "
            >
                Delivery Status
            </label>


            <select
                name="delivery_status"
                class="
                    w-full
                    rounded-xl
                    border
                    border-slate-200
                    bg-white
                    px-4
                    py-3
                    text-sm
                    text-slate-700
                    outline-none
                    transition
                    focus:border-[#073B66]
                    focus:ring-4
                    focus:ring-blue-100
                "
            >

                <option
                    value="pending"
                    @selected(
                        old(
                            'delivery_status',
                            $salesOrder->delivery_status
                        ) === 'pending'
                    )
                >
                    Pending
                </option>


                <option
                    value="preparing"
                    @selected(
                        old(
                            'delivery_status',
                            $salesOrder->delivery_status
                        ) === 'preparing'
                    )
                >
                    Preparing
                </option>


                <option
                    value="dispatched"
                    @selected(
                        old(
                            'delivery_status',
                            $salesOrder->delivery_status
                        ) === 'dispatched'
                    )
                >
                    Dispatched
                </option>


                <option
                    value="in_transit"
                    @selected(
                        old(
                            'delivery_status',
                            $salesOrder->delivery_status
                        ) === 'in_transit'
                    )
                >
                    In Transit
                </option>


                <option
                    value="delivered"
                    @selected(
                        old(
                            'delivery_status',
                            $salesOrder->delivery_status
                        ) === 'delivered'
                    )
                >
                    Delivered
                </option>

            </select>

        </div>


        {{-- COURIER --}}
        <div>

            <label
                class="
                    mb-2
                    block
                    text-sm
                    font-semibold
                    text-slate-700
                "
            >
                Courier / Transport Name
            </label>


            <input
                type="text"
                name="courier_name"
                value="{{ old('courier_name', $salesOrder->courier_name) }}"
                placeholder="e.g. Blue Dart / Delhivery / Transport Company"
                class="
                    w-full
                    rounded-xl
                    border
                    border-slate-200
                    bg-white
                    px-4
                    py-3
                    text-sm
                    text-slate-700
                    outline-none
                    transition
                    focus:border-[#073B66]
                    focus:ring-4
                    focus:ring-blue-100
                "
            >

        </div>


        {{-- TRACKING --}}
        <div>

            <label
                class="
                    mb-2
                    block
                    text-sm
                    font-semibold
                    text-slate-700
                "
            >
                Tracking / LR Number
            </label>


            <input
                type="text"
                name="tracking_number"
                value="{{ old('tracking_number', $salesOrder->tracking_number) }}"
                placeholder="Enter tracking or LR number"
                class="
                    w-full
                    rounded-xl
                    border
                    border-slate-200
                    bg-white
                    px-4
                    py-3
                    text-sm
                    text-slate-700
                    outline-none
                    transition
                    focus:border-[#073B66]
                    focus:ring-4
                    focus:ring-blue-100
                "
            >

        </div>


        {{-- DISPATCH DATE --}}
        <div>

            <label
                class="
                    mb-2
                    block
                    text-sm
                    font-semibold
                    text-slate-700
                "
            >
                Dispatch Date
            </label>


            <input
                type="date"
                name="dispatch_date"
                value="{{
                    old(
                        'dispatch_date',
                        $salesOrder->dispatch_date?->format('Y-m-d')
                    )
                }}"
                class="
                    w-full
                    rounded-xl
                    border
                    border-slate-200
                    bg-white
                    px-4
                    py-3
                    text-sm
                    text-slate-700
                    outline-none
                    focus:border-[#073B66]
                    focus:ring-4
                    focus:ring-blue-100
                "
            >

        </div>

    </div>

</div>


                    {{-- DELIVERY DATE --}}

                    <div>

                        <label
                            class="mb-2
                                   block
                                   text-sm
                                   font-bold
                                   text-slate-700"
                        >
                            Expected Delivery
                        </label>

                        <input
                            type="date"
                            name="expected_delivery_date"
                            value="{{ old(
                                'expected_delivery_date',
                                $salesOrder->expected_delivery_date?->format('Y-m-d')
                            ) }}"
                            class="w-full
                                   rounded-xl
                                   border border-slate-200
                                   px-4 py-3
                                   text-sm
                                   outline-none
                                   focus:border-[#073B66]"
                        >

                    </div>


                    {{-- ADDRESS --}}

                    <div>

                        <label
                            class="mb-2
                                   block
                                   text-sm
                                   font-bold
                                   text-slate-700"
                        >
                            Delivery Address
                        </label>

                        <textarea
                            name="delivery_address"
                            rows="4"
                            placeholder="Enter complete delivery address..."
                            class="w-full
                                   resize-none
                                   rounded-xl
                                   border border-slate-200
                                   px-4 py-3
                                   text-sm
                                   outline-none
                                   focus:border-[#073B66]"
                        >{{ old(
                            'delivery_address',
                            $salesOrder->delivery_address
                        ) }}</textarea>

                    </div>


                    {{-- NOTES --}}

                    <div>

                        <label
                            class="mb-2
                                   block
                                   text-sm
                                   font-bold
                                   text-slate-700"
                        >
                            Internal Notes
                        </label>

                        <textarea
                            name="notes"
                            rows="4"
                            placeholder="Production or dispatch notes..."
                            class="w-full
                                   resize-none
                                   rounded-xl
                                   border border-slate-200
                                   px-4 py-3
                                   text-sm
                                   outline-none
                                   focus:border-[#073B66]"
                        >{{ old(
                            'notes',
                            $salesOrder->notes
                        ) }}</textarea>

                    </div>


                    {{-- VALIDATION --}}

                    @if($errors->any())

                        <div
                            class="rounded-xl
                                   border border-red-200
                                   bg-red-50
                                   p-4"
                        >

                            <ul
                                class="list-disc
                                       space-y-1
                                       pl-5
                                       text-xs
                                       text-red-700"
                            >
                                @foreach($errors->all() as $error)

                                    <li>
                                        {{ $error }}
                                    </li>

                                @endforeach
                            </ul>

                        </div>

                    @endif


                    <button
                        type="submit"
                        class="w-full
                               rounded-xl
                               bg-[#D71920]
                               px-5 py-3.5
                               text-sm
                               font-bold
                               text-white
                               shadow-sm
                               transition
                               hover:bg-[#b9151b]"
                    >
                        Save Order Changes
                    </button>

                </form>

                {{-- ============================================================
     CUSTOMER DELIVERY NOTIFICATION
============================================================ --}}

<div
    class="
        mt-5
        rounded-2xl
        border
        border-slate-200
        bg-white
        p-5
        shadow-sm
    "
>

    <div
        class="
            flex
            flex-col
            gap-4
            sm:flex-row
            sm:items-center
            sm:justify-between
        "
    >

        <div>

            <h3
                class="
                    text-sm
                    font-bold
                    text-[#032B55]
                "
            >
                Customer Delivery Notification
            </h3>

            <p
                class="
                    mt-1
                    text-xs
                    text-slate-500
                "
            >
                Send current courier and tracking information
                to {{ $salesOrder->email }}.
            </p>

        </div>


        <form
            method="POST"
            action="{{
                route(
                    'admin.sales-orders.dispatch-email',
                    $salesOrder
                )
            }}"
            onsubmit="
                return confirm(
                    'Send delivery update to {{ addslashes($salesOrder->email) }}?'
                )
            "
        >

            @csrf


            <button
                type="submit"
                class="
                    inline-flex
                    items-center
                    justify-center
                    gap-2
                    rounded-xl
                    bg-[#D71920]
                    px-5
                    py-3
                    text-sm
                    font-semibold
                    text-white
                    shadow-sm
                    transition
                    hover:bg-[#B9151B]
                "
            >

                <svg
                    xmlns="http://www.w3.org/2000/svg"
                    width="18"
                    height="18"
                    viewBox="0 0 24 24"
                    fill="none"
                    stroke="currentColor"
                    stroke-width="2"
                    stroke-linecap="round"
                    stroke-linejoin="round"
                >
                    <path d="M10 17h4V5H2v12h3"></path>
                    <path d="M14 8h4l4 4v5h-3"></path>
                    <circle cx="7.5" cy="17.5" r="2.5"></circle>
                    <circle cx="16.5" cy="17.5" r="2.5"></circle>
                </svg>

                Send Delivery Update

            </button>

        </form>

    </div>

</div>

            </div>

        </div>

    </div>

</div>

@endsection