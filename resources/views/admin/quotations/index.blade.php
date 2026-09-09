
@extends('layouts.admin')


@section('title', 'Quotations | ASEW Admin')

@section('page-title', 'Quotations')


@section('content')

<div class="p-4 sm:p-6 lg:p-8">

    <div class="max-w-[1500px] mx-auto">

        {{-- =====================================================
             HEADER
        ====================================================== --}}

        <div
            class="flex
                   flex-col
                   lg:flex-row
                   lg:items-center
                   lg:justify-between
                   gap-5"
        >

            <div>

                <p
                    class="text-[9px]
                           uppercase
                           tracking-[0.18em]
                           font-bold
                           text-[#D71920]"
                >
                    Sales Management
                </p>


                <h1
                    class="mt-1
                           text-2xl
                           sm:text-3xl
                           font-extrabold
                           text-[#073B66]"
                >
                    Quotations
                </h1>


                <p
                    class="mt-2
                           text-[11px]
                           leading-6
                           text-slate-400"
                >
                    Manage customer quotations,
                    commercial offers and quotation status.
                </p>

            </div>


            <a
                href="{{ route('admin.enquiries.index') }}"
                class="min-h-[44px]
                       px-5
                       inline-flex
                       items-center
                       justify-center
                       bg-[#032B55]
                       hover:bg-[#D71920]
                       text-white
                       text-[9px]
                       uppercase
                       tracking-wide
                       font-bold
                       transition"
            >
                View Enquiries
            </a>

        </div>



        {{-- =====================================================
             SUCCESS MESSAGE
        ====================================================== --}}

        @if(session('success'))

            <div
                class="mt-6
                       border
                       border-emerald-200
                       bg-emerald-50
                       px-5
                       py-4
                       text-[11px]
                       font-semibold
                       text-emerald-700"
            >
                {{ session('success') }}
            </div>

        @endif



        {{-- =====================================================
             STATS
        ====================================================== --}}

        <div
            class="grid
                   grid-cols-2
                   md:grid-cols-3
                   xl:grid-cols-5
                   gap-4
                   mt-7"
        >

            @php

                $cards = [

                    [
                        'label' => 'Total',
                        'value' => $stats['total'],
                        'class' => 'text-[#073B66]',
                        'status' => null,
                    ],

                    [
                        'label' => 'Draft',
                        'value' => $stats['draft'],
                        'class' => 'text-amber-500',
                        'status' => 'draft',
                    ],

                    [
                        'label' => 'Sent',
                        'value' => $stats['sent'],
                        'class' => 'text-blue-600',
                        'status' => 'sent',
                    ],

                    [
                        'label' => 'Accepted',
                        'value' => $stats['accepted'],
                        'class' => 'text-emerald-600',
                        'status' => 'accepted',
                    ],

                    [
                        'label' => 'Rejected',
                        'value' => $stats['rejected'],
                        'class' => 'text-red-600',
                        'status' => 'rejected',
                    ],

                ];

            @endphp


            @foreach($cards as $card)

                <a
                    href="{{ route(
                        'admin.quotations.index',
                        $card['status']
                            ? ['status' => $card['status']]
                            : []
                    ) }}"
                    class="bg-white
                           border
                           border-slate-200
                           p-5
                           hover:border-[#073B66]
                           transition"
                >

                    <p
                        class="text-2xl
                               font-extrabold
                               {{ $card['class'] }}"
                    >
                        {{ $card['value'] }}
                    </p>


                    <p
                        class="mt-2
                               text-[9px]
                               uppercase
                               tracking-wide
                               font-bold
                               text-slate-400"
                    >
                        {{ $card['label'] }}
                    </p>

                </a>

            @endforeach

        </div>



        {{-- =====================================================
             FILTERS
        ====================================================== --}}

        <form
            method="GET"
            action="{{ route('admin.quotations.index') }}"
            class="mt-5
                   bg-white
                   border
                   border-slate-200
                   p-4
                   sm:p-5"
        >

            <div
                class="grid
                       grid-cols-1
                       md:grid-cols-[1fr_220px_auto]
                       gap-3"
            >

                <div>

                    <input
                        type="search"
                        name="search"
                        value="{{ request('search') }}"
                        placeholder="Search quotation, customer, company, email..."
                        class="w-full
                               h-[44px]
                               px-4
                               border
                               border-slate-200
                               text-[11px]
                               outline-none
                               focus:border-[#073B66]"
                    >

                </div>


                <div>

                    <select
                        name="status"
                        class="w-full
                               h-[44px]
                               px-4
                               border
                               border-slate-200
                               bg-white
                               text-[11px]
                               text-slate-600
                               outline-none
                               focus:border-[#073B66]"
                    >

                        <option value="">
                            All Status
                        </option>

                        @foreach([
                            'draft' => 'Draft',
                            'sent' => 'Sent',
                            'accepted' => 'Accepted',
                            'rejected' => 'Rejected',
                        ] as $value => $label)

                            <option
                                value="{{ $value }}"
                                @selected(
                                    request('status') === $value
                                )
                            >
                                {{ $label }}
                            </option>

                        @endforeach

                    </select>

                </div>


                <div class="flex gap-2">

                    <button
                        type="submit"
                        class="h-[44px]
                               px-5
                               bg-[#032B55]
                               text-white
                               text-[9px]
                               uppercase
                               tracking-wide
                               font-bold
                               hover:bg-[#D71920]
                               transition"
                    >
                        Filter
                    </button>


                    @if(
                        request()->filled('search') ||
                        request()->filled('status')
                    )

                        <a
                            href="{{ route(
                                'admin.quotations.index'
                            ) }}"
                            class="h-[44px]
                                   px-4
                                   inline-flex
                                   items-center
                                   justify-center
                                   border
                                   border-slate-200
                                   text-[9px]
                                   uppercase
                                   font-bold
                                   text-slate-500
                                   hover:border-[#D71920]
                                   hover:text-[#D71920]"
                        >
                            Reset
                        </a>

                    @endif

                </div>

            </div>

        </form>



        {{-- =====================================================
             TABLE
        ====================================================== --}}

        <div
            class="mt-5
                   bg-white
                   border
                   border-slate-200
                   overflow-hidden"
        >

            <div class="overflow-x-auto">

                <table
                    class="w-full
                           min-w-[1100px]
                           text-left"
                >

                    <thead
                        class="bg-slate-50
                               border-b
                               border-slate-200"
                    >

                        <tr>

                            <th
                                class="px-5
                                       py-3
                                       text-[8px]
                                       uppercase
                                       tracking-wide
                                       font-bold
                                       text-slate-400"
                            >
                                Quotation
                            </th>

                            <th class="px-5 py-3 text-[8px] uppercase tracking-wide font-bold text-slate-400">
                                Customer
                            </th>

                            <th class="px-5 py-3 text-[8px] uppercase tracking-wide font-bold text-slate-400">
                                Product
                            </th>

                            <th class="px-5 py-3 text-[8px] uppercase tracking-wide font-bold text-slate-400 text-right">
                                Amount
                            </th>

                            <th class="px-5 py-3 text-[8px] uppercase tracking-wide font-bold text-slate-400">
                                Status
                            </th>

                            <th class="px-5 py-3 text-[8px] uppercase tracking-wide font-bold text-slate-400">
                                Valid Until
                            </th>

                            <th class="px-5 py-3 text-[8px] uppercase tracking-wide font-bold text-slate-400 text-right">
                                Action
                            </th>

                        </tr>

                    </thead>


                    <tbody class="divide-y divide-slate-100">

                        @forelse($quotations as $quotation)

                            @php

                                $statusClass = match(
                                    $quotation->status
                                ) {

                                    'draft' =>
                                        'bg-amber-50 text-amber-600',

                                    'sent' =>
                                        'bg-blue-50 text-blue-600',

                                    'accepted' =>
                                        'bg-emerald-50 text-emerald-600',

                                    'rejected' =>
                                        'bg-red-50 text-red-600',

                                    default =>
                                        'bg-slate-100 text-slate-500',

                                };


                                $firstItem =
                                    $quotation->items->first();

                            @endphp


                            <tr
                                class="hover:bg-slate-50
                                       transition"
                            >

                                {{-- QUOTATION --}}

                                <td class="px-5 py-4">

                                    <a
                                        href="{{ route(
                                            'admin.quotations.show',
                                            $quotation
                                        ) }}"
                                        class="text-[10px]
                                               font-bold
                                               text-[#073B66]
                                               hover:text-[#D71920]"
                                    >
                                        {{ $quotation->quotation_number }}
                                    </a>


                                    <p
                                        class="mt-1
                                               text-[8px]
                                               text-slate-400"
                                    >
                                        {{ $quotation
                                            ->quotation_date
                                            ->format('d M Y') }}
                                    </p>

                                </td>



                                {{-- CUSTOMER --}}

                                <td class="px-5 py-4">

                                    <p
                                        class="text-[10px]
                                               font-bold
                                               text-[#073B66]"
                                    >
                                        {{ $quotation->customer_name }}
                                    </p>


                                    <p
                                        class="mt-1
                                               max-w-[190px]
                                               truncate
                                               text-[8px]
                                               text-slate-400"
                                    >
                                        {{ $quotation->company
                                            ?: $quotation->email }}
                                    </p>

                                </td>



                                {{-- PRODUCT --}}

                                <td class="px-5 py-4">

                                    <p
                                        class="max-w-[230px]
                                               truncate
                                               text-[10px]
                                               font-semibold
                                               text-slate-600"
                                    >
                                        {{ $firstItem?->product_name
                                            ?: '—' }}
                                    </p>


                                    @if($firstItem?->product_code)

                                        <p
                                            class="mt-1
                                                   text-[8px]
                                                   font-bold
                                                   text-[#D71920]"
                                        >
                                            {{ $firstItem->product_code }}
                                        </p>

                                    @endif

                                </td>



                                {{-- TOTAL --}}

                                <td
                                    class="px-5
                                           py-4
                                           text-right"
                                >

                                    <p
                                        class="text-[11px]
                                               font-extrabold
                                               text-[#073B66]"
                                    >
                                        ₹{{ number_format(
                                            (float)
                                            $quotation->grand_total,
                                            2
                                        ) }}
                                    </p>

                                </td>



                                {{-- STATUS --}}

                                <td class="px-5 py-4">

                                    <form
                                        action="{{ route(
                                            'admin.quotations.status',
                                            $quotation
                                        ) }}"
                                        method="POST"
                                    >

                                        @csrf
                                        @method('PATCH')


                                        <select
                                            name="status"
                                            onchange="this.form.submit()"
                                            class="h-[34px]
                                                   px-3
                                                   border-0
                                                   outline-none
                                                   text-[8px]
                                                   uppercase
                                                   font-bold
                                                   cursor-pointer
                                                   {{ $statusClass }}"
                                        >

                                            @foreach([
                                                'draft',
                                                'sent',
                                                'accepted',
                                                'rejected'
                                            ] as $status)

                                                <option
                                                    value="{{ $status }}"
                                                    @selected(
                                                        $quotation->status
                                                        === $status
                                                    )
                                                >
                                                    {{ ucfirst($status) }}
                                                </option>

                                            @endforeach

                                        </select>

                                    </form>

                                </td>



                                {{-- VALIDITY --}}

                                <td class="px-5 py-4">

                                    @if($quotation->valid_until)

                                        <p
                                            class="text-[9px]
                                                   font-semibold
                                                   {{
                                                       $quotation
                                                           ->valid_until
                                                           ->isPast()
                                                           &&
                                                       !in_array(
                                                           $quotation->status,
                                                           [
                                                               'accepted',
                                                               'rejected'
                                                           ],
                                                           true
                                                       )
                                                           ? 'text-red-600'
                                                           : 'text-slate-500'
                                                   }}"
                                        >
                                            {{ $quotation
                                                ->valid_until
                                                ->format('d M Y') }}
                                        </p>


                                        @if(
                                            $quotation
                                                ->valid_until
                                                ->isPast()
                                            &&
                                            !in_array(
                                                $quotation->status,
                                                [
                                                    'accepted',
                                                    'rejected'
                                                ],
                                                true
                                            )
                                        )

                                            <p
                                                class="mt-1
                                                       text-[7px]
                                                       uppercase
                                                       font-bold
                                                       text-red-500"
                                            >
                                                Expired
                                            </p>

                                        @endif

                                    @else

                                        —

                                    @endif

                                </td>



                                {{-- ACTION --}}

                                <td
                                    class="px-5
                                           py-4
                                           text-right"
                                >

                                    <a
                                        href="{{ route(
                                            'admin.quotations.show',
                                            $quotation
                                        ) }}"
                                        class="inline-flex
                                               min-h-[34px]
                                               px-4
                                               items-center
                                               justify-center
                                               border
                                               border-slate-200
                                               text-[8px]
                                               uppercase
                                               font-bold
                                               text-[#073B66]
                                               hover:border-[#D71920]
                                               hover:text-[#D71920]
                                               transition"
                                    >
                                        View
                                    </a>

                                </td>

                            </tr>

                        @empty

                            <tr>

                                <td
                                    colspan="7"
                                    class="px-6
                                           py-14
                                           text-center"
                                >

                                    <p
                                        class="text-[12px]
                                               font-bold
                                               text-[#073B66]"
                                    >
                                        No Quotations Found
                                    </p>


                                    <p
                                        class="mt-2
                                               text-[10px]
                                               text-slate-400"
                                    >
                                        Create a quotation from a
                                        customer enquiry.
                                    </p>


                                    <a
                                        href="{{ route(
                                            'admin.enquiries.index'
                                        ) }}"
                                        class="inline-flex
                                               mt-5
                                               min-h-[40px]
                                               px-5
                                               items-center
                                               justify-center
                                               bg-[#D71920]
                                               text-white
                                               text-[8px]
                                               uppercase
                                               font-bold"
                                    >
                                        View Enquiries
                                    </a>

                                </td>

                            </tr>

                        @endforelse

                    </tbody>

                </table>

            </div>



            @if($quotations->hasPages())

                <div
                    class="px-5
                           py-4
                           border-t
                           border-slate-200"
                >
                    {{ $quotations->links() }}
                </div>

            @endif

        </div>

    </div>

</div>

@endsection

