@extends('layouts.admin')

@section('title', 'Sales Orders')
@section('page-title', 'Sales Orders')

@section('content')

<div class="space-y-6">

    {{-- =========================================================
         PAGE HEADER
    ========================================================== --}}

    <div
        class="flex flex-col lg:flex-row
               lg:items-center
               lg:justify-between
               gap-4"
    >
        <div>
            <h1
                class="text-2xl sm:text-3xl
                       font-bold
                       text-slate-900"
            >
                Sales Orders
            </h1>

            <p
                class="mt-1
                       text-sm
                       text-slate-500"
            >
                Manage confirmed customer orders, payments and delivery progress.
            </p>
        </div>
    </div>


    {{-- =========================================================
         SUCCESS / INFO / ERROR
    ========================================================== --}}

    @if(session('success'))
        <div
            class="rounded-2xl
                   border border-green-200
                   bg-green-50
                   px-5 py-4
                   text-sm font-medium
                   text-green-800"
        >
            {{ session('success') }}
        </div>
    @endif

    @if(session('info'))
        <div
            class="rounded-2xl
                   border border-blue-200
                   bg-blue-50
                   px-5 py-4
                   text-sm font-medium
                   text-blue-800"
        >
            {{ session('info') }}
        </div>
    @endif

    @if(session('error'))
        <div
            class="rounded-2xl
                   border border-red-200
                   bg-red-50
                   px-5 py-4
                   text-sm font-medium
                   text-red-800"
        >
            {{ session('error') }}
        </div>
    @endif


    {{-- =========================================================
         STATS
    ========================================================== --}}

    <div
        class="grid
               sm:grid-cols-2
               xl:grid-cols-5
               gap-4"
    >

        {{-- TOTAL --}}

        <div
            class="rounded-2xl
                   border border-slate-200
                   bg-white
                   p-5
                   shadow-sm"
        >
            <div class="flex items-center justify-between">

                <div>
                    <p
                        class="text-xs
                               font-semibold
                               uppercase
                               tracking-wider
                               text-slate-500"
                    >
                        Total Orders
                    </p>

                    <h3
                        class="mt-2
                               text-3xl
                               font-bold
                               text-slate-900"
                    >
                        {{ $stats['total'] }}
                    </h3>
                </div>

                <div
                    class="flex
                           h-11 w-11
                           items-center justify-center
                           rounded-xl
                           bg-slate-100
                           text-slate-700"
                >
                    <svg
                        class="w-5 h-5"
                        fill="none"
                        stroke="currentColor"
                        viewBox="0 0 24 24"
                    >
                        <path
                            stroke-linecap="round"
                            stroke-linejoin="round"
                            stroke-width="2"
                            d="M9 12h6m-6 4h6M7 3h10a2 2 0 012 2v14a2 2 0 01-2 2H7a2 2 0 01-2-2V5a2 2 0 012-2z"
                        />
                    </svg>
                </div>

            </div>
        </div>


        {{-- CONFIRMED --}}

        <div
            class="rounded-2xl
                   border border-blue-200
                   bg-white
                   p-5
                   shadow-sm"
        >
            <p
                class="text-xs
                       font-semibold
                       uppercase
                       tracking-wider
                       text-blue-600"
            >
                Confirmed
            </p>

            <h3
                class="mt-2
                       text-3xl
                       font-bold
                       text-blue-700"
            >
                {{ $stats['confirmed'] }}
            </h3>
        </div>


        {{-- PROCESSING --}}

        <div
            class="rounded-2xl
                   border border-amber-200
                   bg-white
                   p-5
                   shadow-sm"
        >
            <p
                class="text-xs
                       font-semibold
                       uppercase
                       tracking-wider
                       text-amber-600"
            >
                Processing
            </p>

            <h3
                class="mt-2
                       text-3xl
                       font-bold
                       text-amber-700"
            >
                {{ $stats['processing'] }}
            </h3>
        </div>


        {{-- DISPATCHED --}}

        <div
            class="rounded-2xl
                   border border-purple-200
                   bg-white
                   p-5
                   shadow-sm"
        >
            <p
                class="text-xs
                       font-semibold
                       uppercase
                       tracking-wider
                       text-purple-600"
            >
                Dispatched
            </p>

            <h3
                class="mt-2
                       text-3xl
                       font-bold
                       text-purple-700"
            >
                {{ $stats['dispatched'] }}
            </h3>
        </div>


        {{-- DELIVERED --}}

        <div
            class="rounded-2xl
                   border border-green-200
                   bg-white
                   p-5
                   shadow-sm"
        >
            <p
                class="text-xs
                       font-semibold
                       uppercase
                       tracking-wider
                       text-green-600"
            >
                Delivered
            </p>

            <h3
                class="mt-2
                       text-3xl
                       font-bold
                       text-green-700"
            >
                {{ $stats['delivered'] }}
            </h3>
        </div>

    </div>


    {{-- =========================================================
         FILTERS
    ========================================================== --}}

    <div
        class="rounded-2xl
               border border-slate-200
               bg-white
               p-5
               shadow-sm"
    >

        <form
            method="GET"
            action="{{ route('admin.sales-orders.index') }}"
            class="grid
                   lg:grid-cols-[1fr_220px_220px_auto]
                   gap-3"
        >

            {{-- SEARCH --}}

            <div class="relative">

                <svg
                    class="absolute
                           left-4 top-1/2
                           -translate-y-1/2
                           w-5 h-5
                           text-slate-400"
                    fill="none"
                    stroke="currentColor"
                    viewBox="0 0 24 24"
                >
                    <path
                        stroke-linecap="round"
                        stroke-linejoin="round"
                        stroke-width="2"
                        d="m21 21-4.35-4.35M11 18a7 7 0 110-14 7 7 0 010 14z"
                    />
                </svg>

                <input
                    type="text"
                    name="search"
                    value="{{ request('search') }}"
                    placeholder="Search order, customer, company or email..."
                    class="w-full
                           rounded-xl
                           border border-slate-200
                           bg-white
                           py-3
                           pl-12 pr-4
                           text-sm
                           outline-none
                           transition
                           focus:border-[#073B66]
                           focus:ring-2
                           focus:ring-[#073B66]/10"
                >

            </div>


            {{-- ORDER STATUS --}}

            <select
                name="status"
                class="rounded-xl
                       border border-slate-200
                       bg-white
                       px-4 py-3
                       text-sm
                       outline-none
                       focus:border-[#073B66]"
            >

                <option value="">
                    All Order Status
                </option>

                <option
                    value="confirmed"
                    @selected(request('status') === 'confirmed')
                >
                    Confirmed
                </option>

                <option
                    value="processing"
                    @selected(request('status') === 'processing')
                >
                    Processing
                </option>

                <option
                    value="ready"
                    @selected(request('status') === 'ready')
                >
                    Ready
                </option>

                <option
                    value="dispatched"
                    @selected(request('status') === 'dispatched')
                >
                    Dispatched
                </option>

                <option
                    value="delivered"
                    @selected(request('status') === 'delivered')
                >
                    Delivered
                </option>

                <option
                    value="cancelled"
                    @selected(request('status') === 'cancelled')
                >
                    Cancelled
                </option>

            </select>


            {{-- PAYMENT STATUS --}}

            <select
                name="payment_status"
                class="rounded-xl
                       border border-slate-200
                       bg-white
                       px-4 py-3
                       text-sm
                       outline-none
                       focus:border-[#073B66]"
            >

                <option value="">
                    All Payments
                </option>

                <option
                    value="pending"
                    @selected(request('payment_status') === 'pending')
                >
                    Pending
                </option>

                <option
                    value="partial"
                    @selected(request('payment_status') === 'partial')
                >
                    Partial
                </option>

                <option
                    value="paid"
                    @selected(request('payment_status') === 'paid')
                >
                    Paid
                </option>

                <option
                    value="refunded"
                    @selected(request('payment_status') === 'refunded')
                >
                    Refunded
                </option>

            </select>

            <select
    name="delivery_status"
    class="
        rounded-xl
        border
        border-slate-200
        px-4
        py-2.5
        text-sm
    "
>

    <option value="">
        All Delivery Status
    </option>

    <option
        value="pending"
        @selected(request('delivery_status') === 'pending')
    >
        Pending
    </option>

    <option
        value="preparing"
        @selected(request('delivery_status') === 'preparing')
    >
        Preparing
    </option>

    <option
        value="dispatched"
        @selected(request('delivery_status') === 'dispatched')
    >
        Dispatched
    </option>

    <option
        value="in_transit"
        @selected(request('delivery_status') === 'in_transit')
    >
        In Transit
    </option>

    <option
        value="delivered"
        @selected(request('delivery_status') === 'delivered')
    >
        Delivered
    </option>

</select>


            {{-- BUTTONS --}}

            <div class="flex gap-2">

                <button
                    type="submit"
                    class="rounded-xl
                           bg-[#073B66]
                           px-5 py-3
                           text-sm font-bold
                           text-white
                           transition
                           hover:bg-[#032B55]"
                >
                    Filter
                </button>

                @if(
                    request('search') ||
                    request('status') ||
                    request('payment_status')
                )

                    <a
                        href="{{ route('admin.sales-orders.index') }}"
                        class="rounded-xl
                               border border-slate-200
                               bg-white
                               px-4 py-3
                               text-sm font-semibold
                               text-slate-600
                               hover:bg-slate-50"
                    >
                        Reset
                    </a>

                @endif

            </div>

        </form>

    </div>


    {{-- =========================================================
         TABLE
    ========================================================== --}}

    <div
        class="overflow-hidden
               rounded-2xl
               border border-slate-200
               bg-white
               shadow-sm"
    >

        <div class="overflow-x-auto">

            <table class="w-full min-w-[1050px]">

                <thead class="bg-slate-50">

                    <tr
                        class="border-b
                               border-slate-200
                               text-left
                               text-xs
                               font-bold
                               uppercase
                               tracking-wider
                               text-slate-500"
                    >

                        <th class="px-5 py-4">
                            Order
                        </th>

                        <th class="px-5 py-4">
                            Customer
                        </th>

                        <th class="px-5 py-4">
                            Products
                        </th>

                        <th class="px-5 py-4">
                            Amount
                        </th>

                        <th class="px-5 py-4">
                            Payment
                        </th>

                        <th class="px-5 py-4">
                            Order Status
                        </th>

                        <th class="px-5 py-4">
                            Delivery
                        </th>

                        <th class="px-5 py-4 text-right">
                            Action
                        </th>

                    </tr>

                </thead>


                <tbody
                    class="divide-y
                           divide-slate-100"
                >

                    @forelse($orders as $order)

                        @php
                            $orderStatusClasses = match($order->order_status) {
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

                            $paymentClasses = match($order->payment_status) {
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


                        <tr
                            class="transition
                                   hover:bg-slate-50/70"
                        >

                            {{-- ORDER --}}

                            <td class="px-5 py-5">

                                <a
                                    href="{{ route(
                                        'admin.sales-orders.show',
                                        $order
                                    ) }}"
                                    class="font-bold
                                           text-[#073B66]
                                           hover:text-[#D71920]"
                                >
                                    {{ $order->order_number }}
                                </a>

                                <p
                                    class="mt-1
                                           text-xs
                                           text-slate-500"
                                >
                                    {{ $order->order_date?->format('d M Y') }}
                                </p>

                            </td>


                            {{-- CUSTOMER --}}

                            <td class="px-5 py-5">

                                <p
                                    class="font-semibold
                                           text-slate-900"
                                >
                                    {{ $order->customer_name }}
                                </p>

                                @if($order->company)

                                    <p
                                        class="mt-1
                                               text-xs
                                               text-slate-500"
                                    >
                                        {{ $order->company }}
                                    </p>

                                @endif

                                <p
                                    class="mt-1
                                           text-xs
                                           text-slate-400"
                                >
                                    {{ $order->email }}
                                </p>

                            </td>


                            {{-- PRODUCTS --}}

                            <td class="px-5 py-5">

                                @if($order->items->isNotEmpty())

                                    <p
                                        class="max-w-[220px]
                                               truncate
                                               text-sm
                                               font-semibold
                                               text-slate-700"
                                    >
                                        {{ $order->items->first()->product_name }}
                                    </p>

                                    @if($order->items->count() > 1)

                                        <p
                                            class="mt-1
                                                   text-xs
                                                   text-slate-500"
                                        >
                                            +{{ $order->items->count() - 1 }}
                                            more item(s)
                                        </p>

                                    @endif

                                @else

                                    <span class="text-sm text-slate-400">
                                        No items
                                    </span>

                                @endif

                            </td>


                            {{-- AMOUNT --}}

                            <td class="px-5 py-5">

                                <p
                                    class="font-bold
                                           text-slate-900"
                                >
                                    ₹{{ number_format($order->grand_total, 2) }}
                                </p>

                            </td>


                            {{-- PAYMENT --}}

                            <td class="px-5 py-5">

                                <span
                                    class="inline-flex
                                           rounded-full
                                           border
                                           px-3 py-1
                                           text-xs font-bold
                                           capitalize
                                           {{ $paymentClasses }}"
                                >
                                    {{ $order->payment_status }}
                                </span>

                            </td>


                            {{-- STATUS --}}

                            <td class="px-5 py-5">

                                <span
                                    class="inline-flex
                                           rounded-full
                                           border
                                           px-3 py-1
                                           text-xs font-bold
                                           capitalize
                                           {{ $orderStatusClasses }}"
                                >
                                    {{ $order->order_status }}
                                </span>

                            </td>


                            {{-- DELIVERY --}}

                            <td class="px-5 py-5">

                                @if($order->expected_delivery_date)

                                    <p
                                        class="text-sm
                                               font-medium
                                               text-slate-700"
                                    >
                                        {{ $order->expected_delivery_date->format('d M Y') }}
                                    </p>

                                @else

                                    <span
                                        class="text-sm
                                               text-slate-400"
                                    >
                                        Not set
                                    </span>

                                @endif

                            </td>


                            {{-- ACTION --}}

                            <td class="px-5 py-5 text-right">

                                <a
                                    href="{{ route(
                                        'admin.sales-orders.show',
                                        $order
                                    ) }}"
                                    class="inline-flex
                                           items-center
                                           gap-2
                                           rounded-lg
                                           border border-slate-200
                                           bg-white
                                           px-4 py-2
                                           text-xs font-bold
                                           text-slate-700
                                           transition
                                           hover:border-[#073B66]
                                           hover:text-[#073B66]"
                                >
                                    View
                                </a>

                            </td>

                        </tr>

                    @empty

                        <tr>

                            <td
                                colspan="8"
                                class="px-6 py-16
                                       text-center"
                            >

                                <div
                                    class="mx-auto
                                           flex
                                           h-14 w-14
                                           items-center
                                           justify-center
                                           rounded-full
                                           bg-slate-100"
                                >
                                    <svg
                                        class="w-6 h-6
                                               text-slate-400"
                                        fill="none"
                                        stroke="currentColor"
                                        viewBox="0 0 24 24"
                                    >
                                        <path
                                            stroke-linecap="round"
                                            stroke-linejoin="round"
                                            stroke-width="2"
                                            d="M9 12h6m-6 4h6M7 3h10a2 2 0 012 2v14a2 2 0 01-2 2H7a2 2 0 01-2-2V5a2 2 0 012-2z"
                                        />
                                    </svg>
                                </div>

                                <h3
                                    class="mt-4
                                           font-bold
                                           text-slate-800"
                                >
                                    No Sales Orders Found
                                </h3>

                                <p
                                    class="mt-1
                                           text-sm
                                           text-slate-500"
                                >
                                    Accepted quotations converted into orders
                                    will appear here.
                                </p>

                            </td>

                        </tr>

                    @endforelse

                </tbody>

            </table>

        </div>


        @if($orders->hasPages())

            <div
                class="border-t
                       border-slate-200
                       px-5 py-4"
            >
                {{ $orders->links() }}
            </div>

        @endif

    </div>

</div>

@endsection