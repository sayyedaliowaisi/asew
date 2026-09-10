
@extends('layouts.admin')


@section('title', $quotation->quotation_number . ' | ASEW Admin')

@section('page-title', 'Quotation Details')


@section('content')

<div class="p-4 sm:p-6 lg:p-8 print:p-0">

    <div class="max-w-[1250px] mx-auto">

        {{-- =====================================================
             ADMIN ACTION BAR
        ====================================================== --}}

        <div
            class="print:hidden
                   mb-6
                   flex
                   flex-col
                   lg:flex-row
                   lg:items-center
                   lg:justify-between
                   gap-4"
        >

            <div>

                <a
                    href="{{ route(
                        'admin.enquiries.show',
                        $quotation->enquiry
                    ) }}"
                    class="inline-flex
                           items-center
                           gap-2
                           text-[9px]
                           uppercase
                           tracking-wide
                           font-bold
                           text-slate-400
                           hover:text-[#D71920]
                           transition"
                >
                    ← Back to Enquiry
                </a>


                <p
                    class="mt-4
                           text-[9px]
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
                    {{ $quotation->quotation_number }}
                </h1>

            </div>


            <div class="flex flex-wrap gap-3">

                <button
                    type="button"
                    onclick="window.print()"
                    class="min-h-[44px]
                           px-5
                           inline-flex
                           items-center
                           justify-center
                           gap-2
                           bg-[#032B55]
                           hover:bg-[#073B66]
                           text-white
                           text-[9px]
                           uppercase
                           tracking-wide
                           font-bold
                           transition"
                >
                    <svg
                        xmlns="http://www.w3.org/2000/svg"
                        width="15"
                        height="15"
                        viewBox="0 0 24 24"
                        fill="none"
                        stroke="currentColor"
                        stroke-width="2"
                    >
                        <path d="M6 9V2h12v7"/>
                        <path d="M6 18H4a2 2 0 0 1-2-2v-5a2 2 0 0 1 2-2h16a2 2 0 0 1 2 2v5a2 2 0 0 1-2 2h-2"/>
                        <rect width="12" height="8" x="6" y="14"/>
                    </svg>

                    Print Quotation
                </button>


                <form
    action="{{ route(
        'admin.quotations.send',
        $quotation
    ) }}"
    method="POST"
    onsubmit="
        return confirm(
            'Send this quotation to {{ addslashes($quotation->email) }}?'
        );
    "
>

    @csrf


    <button
        type="submit"
        class="min-h-[44px]
               px-5
               inline-flex
               items-center
               justify-center
               gap-2
               bg-[#D71920]
               hover:bg-[#032B55]
               text-white
               text-[9px]
               uppercase
               tracking-wide
               font-bold
               transition"
    >

        <svg
            xmlns="http://www.w3.org/2000/svg"
            width="15"
            height="15"
            viewBox="0 0 24 24"
            fill="none"
            stroke="currentColor"
            stroke-width="2"
        >
            <rect
                width="20"
                height="16"
                x="2"
                y="4"
                rx="2"
            />

            <path d="m22 7-10 5L2 7"/>
        </svg>


        @if($quotation->status === 'sent')

            Send Again

        @else

            Send to Customer

        @endif

    </button>

</form>

{{-- =========================================================
     SALES ORDER ACTION
========================================================= --}}

@if($quotation->status === 'accepted' && !$quotation->salesOrder)

    {{-- Accepted hai, lekin Sales Order abhi nahi bana --}}
    <form
        method="POST"
        action="{{ route('admin.sales-orders.convert', $quotation) }}"
        onsubmit="return confirm('Convert this accepted quotation into a sales order?')"
    >
        @csrf

        <button
            type="submit"
            class="inline-flex items-center gap-2
                   rounded-xl
                   bg-green-600
                   px-5 py-3
                   text-sm font-bold
                   text-white
                   transition
                   hover:bg-green-700"
        >
            Create Sales Order
        </button>

    </form>

@elseif($quotation->salesOrder)

    {{-- Sales Order already ban chuka hai --}}
    <a
        href="{{ route(
            'admin.sales-orders.show',
            $quotation->salesOrder
        ) }}"
        class="inline-flex items-center gap-2
               rounded-xl
               bg-[#073B66]
               px-5 py-3
               text-sm font-bold
               text-white
               transition
               hover:bg-[#032B55]"
    >
        View Sales Order
    </a>

@endif

            </div>

        </div>



        @if(session('success'))

            <div
                class="print:hidden
                       mb-5
                       border
                       border-emerald-200
                       bg-emerald-50
                       p-4
                       text-[11px]
                       font-semibold
                       text-emerald-700"
            >
                {{ session('success') }}
            </div>

        @endif


        @if($errors->has('email'))

    <div
        class="print:hidden
               mb-5
               border
               border-red-200
               bg-red-50
               p-4
               text-[11px]
               font-semibold
               text-red-700"
    >
        {{ $errors->first('email') }}
    </div>

@endif



        {{-- =====================================================
             QUOTATION DOCUMENT
        ====================================================== --}}

        <div
            id="quotation-document"
            class="bg-white
                   border
                   border-slate-200
                   shadow-sm
                   print:border-0
                   print:shadow-none"
        >

            {{-- =================================================
                 TOP STRIP
            ================================================== --}}

            <div class="h-[5px] bg-[#D71920]"></div>



            {{-- =================================================
                 COMPANY HEADER
            ================================================== --}}

            <div
                class="px-6
                       sm:px-8
                       lg:px-10
                       py-7
                       border-b
                       border-slate-200"
            >

                <div
                    class="flex
                           flex-col
                           md:flex-row
                           md:items-start
                           md:justify-between
                           gap-6"
                >

                    {{-- COMPANY --}}

                    <div class="flex items-start gap-4">

                        <div
                            class="w-[72px]
                                   h-[72px]
                                   border
                                   border-slate-200
                                   bg-white
                                   flex
                                   items-center
                                   justify-center
                                   overflow-hidden"
                        >

                            <img
                                src="{{ asset('images/asew-logo.jpg') }}"
                                alt="ASEW"
                                class="max-w-full
                                       max-h-full
                                       object-contain"
                            >

                        </div>


                        <div>

                            <p
                                class="text-[9px]
                                       uppercase
                                       tracking-[0.18em]
                                       font-bold
                                       text-[#D71920]"
                            >
                                Since 1975
                            </p>


                            <h2
                                class="mt-1
                                       text-xl
                                       sm:text-2xl
                                       font-extrabold
                                       text-[#073B66]"
                            >
                                Associated Scientific &
                                Engineering Works
                            </h2>


                            <p
                                class="mt-2
                                       max-w-xl
                                       text-[10px]
                                       leading-5
                                       text-slate-500"
                            >
                                Manufacturer & Supplier of Scientific,
                                Civil Engineering and Material Testing
                                Laboratory Equipment.
                            </p>

                        </div>

                    </div>



                    {{-- QUOTATION TITLE --}}

                    <div class="md:text-right">

                        <p
                            class="text-[26px]
                                   sm:text-[32px]
                                   leading-none
                                   font-extrabold
                                   uppercase
                                   tracking-tight
                                   text-[#073B66]"
                        >
                            Quotation
                        </p>


                        <p
                            class="mt-3
                                   text-[11px]
                                   font-bold
                                   text-[#D71920]"
                        >
                            {{ $quotation->quotation_number }}
                        </p>


                        <span
                            class="inline-flex
                                   mt-3
                                   px-3
                                   py-1.5
                                   text-[8px]
                                   uppercase
                                   tracking-wide
                                   font-bold
                                   {{
                                        $quotation->status === 'draft'
                                            ? 'bg-amber-50 text-amber-600'
                                            : 'bg-emerald-50 text-emerald-600'
                                   }}"
                        >
                            {{ ucfirst($quotation->status) }}
                        </span>

                    </div>

                </div>

            </div>



            {{-- =================================================
                 CUSTOMER + QUOTATION DETAILS
            ================================================== --}}

            <div
                class="grid
                       grid-cols-1
                       md:grid-cols-2
                       border-b
                       border-slate-200"
            >

                {{-- CUSTOMER --}}

                <div
                    class="px-6
                           sm:px-8
                           lg:px-10
                           py-7
                           md:border-r
                           border-slate-200"
                >

                    <p
                        class="text-[8px]
                               uppercase
                               tracking-[0.15em]
                               font-bold
                               text-[#D71920]"
                    >
                        Quotation To
                    </p>


                    <h3
                        class="mt-3
                               text-base
                               font-extrabold
                               text-[#073B66]"
                    >
                        {{ $quotation->customer_name }}
                    </h3>


                    @if($quotation->company)

                        <p
                            class="mt-1
                                   text-[11px]
                                   font-semibold
                                   text-slate-600"
                        >
                            {{ $quotation->company }}
                        </p>

                    @endif


                    <div
                        class="mt-4
                               space-y-1.5
                               text-[10px]
                               leading-5
                               text-slate-500"
                    >

                        @if($quotation->city)
                            <p>
                                {{ $quotation->city }}
                            </p>
                        @endif

                        <p>
                            {{ $quotation->email }}
                        </p>

                        @if($quotation->phone)
                            <p>
                                {{ $quotation->phone }}
                            </p>
                        @endif

                    </div>

                </div>



                {{-- QUOTATION INFO --}}

                <div
                    class="px-6
                           sm:px-8
                           lg:px-10
                           py-7"
                >

                    <div
                        class="grid
                               grid-cols-2
                               gap-x-6
                               gap-y-5"
                    >

                        <div>

                            <p
                                class="text-[8px]
                                       uppercase
                                       font-bold
                                       text-slate-400"
                            >
                                Quotation Date
                            </p>

                            <p
                                class="mt-1
                                       text-[11px]
                                       font-bold
                                       text-[#073B66]"
                            >
                                {{ $quotation->quotation_date->format('d M Y') }}
                            </p>

                        </div>


                        <div>

                            <p
                                class="text-[8px]
                                       uppercase
                                       font-bold
                                       text-slate-400"
                            >
                                Valid Until
                            </p>

                            <p
                                class="mt-1
                                       text-[11px]
                                       font-bold
                                       text-[#073B66]"
                            >
                                {{ $quotation->valid_until
                                    ? $quotation->valid_until->format('d M Y')
                                    : '—' }}
                            </p>

                        </div>


                        <div>

                            <p
                                class="text-[8px]
                                       uppercase
                                       font-bold
                                       text-slate-400"
                            >
                                Validity
                            </p>

                            <p
                                class="mt-1
                                       text-[11px]
                                       font-bold
                                       text-[#073B66]"
                            >
                                {{ $quotation->validity_days }} Days
                            </p>

                        </div>


                        <div>

                            <p
                                class="text-[8px]
                                       uppercase
                                       font-bold
                                       text-slate-400"
                            >
                                Enquiry Ref.
                            </p>

                            <p
                                class="mt-1
                                       text-[11px]
                                       font-bold
                                       text-[#073B66]"
                            >
                                @if($quotation->product_enquiry_id)
                                    #{{ str_pad(
                                        $quotation->product_enquiry_id,
                                        5,
                                        '0',
                                        STR_PAD_LEFT
                                    ) }}
                                @else
                                    —
                                @endif
                            </p>

                        </div>

                    </div>

                </div>

            </div>



            {{-- =================================================
                 ITEMS
            ================================================== --}}

            <div class="px-6 sm:px-8 lg:px-10 py-8">

                <p
                    class="text-[8px]
                           uppercase
                           tracking-[0.16em]
                           font-bold
                           text-[#D71920]"
                >
                    Commercial Offer
                </p>


                <h3
                    class="mt-1
                           text-lg
                           font-extrabold
                           text-[#073B66]"
                >
                    Product Details
                </h3>


                <div
                    class="mt-5
                           overflow-x-auto"
                >

                    <table
                        class="w-full
                               min-w-[760px]
                               border-collapse"
                    >

                        <thead>

                            <tr class="bg-[#032B55] text-white">

                                <th
                                    class="px-4
                                           py-3
                                           text-left
                                           text-[8px]
                                           uppercase
                                           tracking-wide
                                           font-bold"
                                >
                                    #
                                </th>

                                <th
                                    class="px-4
                                           py-3
                                           text-left
                                           text-[8px]
                                           uppercase
                                           tracking-wide
                                           font-bold"
                                >
                                    Product
                                </th>

                                <th
                                    class="px-4
                                           py-3
                                           text-center
                                           text-[8px]
                                           uppercase
                                           tracking-wide
                                           font-bold"
                                >
                                    Qty
                                </th>

                                <th
                                    class="px-4
                                           py-3
                                           text-right
                                           text-[8px]
                                           uppercase
                                           tracking-wide
                                           font-bold"
                                >
                                    Unit Price
                                </th>

                                <th
                                    class="px-4
                                           py-3
                                           text-right
                                           text-[8px]
                                           uppercase
                                           tracking-wide
                                           font-bold"
                                >
                                    Amount
                                </th>

                            </tr>

                        </thead>


                        <tbody>

                            @foreach($quotation->items as $item)

                                <tr class="border-b border-slate-200">

                                    <td
                                        class="px-4
                                               py-5
                                               align-top
                                               text-[10px]
                                               text-slate-400"
                                    >
                                        {{ $loop->iteration }}
                                    </td>


                                    <td
                                        class="px-4
                                               py-5
                                               align-top"
                                    >

                                        <p
                                            class="text-[11px]
                                                   font-bold
                                                   text-[#073B66]"
                                        >
                                            {{ $item->product_name }}
                                        </p>


                                        @if($item->product_code)

                                            <p
                                                class="mt-1
                                                       text-[8px]
                                                       font-bold
                                                       text-[#D71920]"
                                            >
                                                {{ $item->product_code }}
                                            </p>

                                        @endif

                                    </td>


                                    <td
                                        class="px-4
                                               py-5
                                               text-center
                                               align-top
                                               text-[11px]
                                               font-bold
                                               text-slate-600"
                                    >
                                        {{ $item->quantity }}
                                    </td>


                                    <td
                                        class="px-4
                                               py-5
                                               text-right
                                               align-top
                                               text-[11px]
                                               text-slate-600"
                                    >
                                        ₹{{ number_format(
                                            (float) $item->unit_price,
                                            2
                                        ) }}
                                    </td>


                                    <td
                                        class="px-4
                                               py-5
                                               text-right
                                               align-top
                                               text-[11px]
                                               font-bold
                                               text-[#073B66]"
                                    >
                                        ₹{{ number_format(
                                            (float) $item->total,
                                            2
                                        ) }}
                                    </td>

                                </tr>

                            @endforeach

                        </tbody>

                    </table>

                </div>

            </div>



            {{-- =================================================
                 NOTES + TOTALS
            ================================================== --}}

            <div
                class="px-6
                       sm:px-8
                       lg:px-10
                       pb-8
                       grid
                       grid-cols-1
                       lg:grid-cols-[1.25fr_.75fr]
                       gap-8"
            >

                {{-- NOTES --}}

                <div>

                    @if($quotation->notes)

                        <div>

                            <p
                                class="text-[8px]
                                       uppercase
                                       tracking-wide
                                       font-bold
                                       text-[#D71920]"
                            >
                                Notes
                            </p>


                            <div
                                class="mt-3
                                       p-4
                                       bg-slate-50
                                       border-l-[3px]
                                       border-[#073B66]
                                       text-[10px]
                                       leading-5
                                       text-slate-500"
                            >
                                {!! nl2br(e($quotation->notes)) !!}
                            </div>

                        </div>

                    @endif

                </div>



                {{-- TOTALS --}}

                <div>

                    <div
                        class="border
                               border-slate-200"
                    >

                        <div
                            class="flex
                                   justify-between
                                   gap-4
                                   px-5
                                   py-3
                                   border-b
                                   border-slate-100"
                        >

                            <span class="text-[10px] text-slate-400">
                                Subtotal
                            </span>

                            <span
                                class="text-[11px]
                                       font-bold
                                       text-[#073B66]"
                            >
                                ₹{{ number_format(
                                    (float) $quotation->subtotal,
                                    2
                                ) }}
                            </span>

                        </div>


                        <div
                            class="flex
                                   justify-between
                                   gap-4
                                   px-5
                                   py-3
                                   border-b
                                   border-slate-100"
                        >

                            <span class="text-[10px] text-slate-400">
                                Discount
                            </span>

                            <span
                                class="text-[11px]
                                       font-bold
                                       text-[#D71920]"
                            >
                                − ₹{{ number_format(
                                    (float) $quotation->discount,
                                    2
                                ) }}
                            </span>

                        </div>


                        <div
                            class="flex
                                   justify-between
                                   gap-4
                                   px-5
                                   py-3
                                   border-b
                                   border-slate-100"
                        >

                            <span class="text-[10px] text-slate-400">
                                GST
                                ({{ number_format(
                                    (float) $quotation->gst_percent,
                                    2
                                ) }}%)
                            </span>

                            <span
                                class="text-[11px]
                                       font-bold
                                       text-[#073B66]"
                            >
                                ₹{{ number_format(
                                    (float) $quotation->gst_amount,
                                    2
                                ) }}
                            </span>

                        </div>


                        <div
                            class="px-5
                                   py-5
                                   bg-[#032B55]
                                   text-white"
                        >

                            <p
                                class="text-[8px]
                                       uppercase
                                       tracking-wide
                                       font-bold
                                       text-white/50"
                            >
                                Grand Total
                            </p>


                            <p
                                class="mt-2
                                       text-2xl
                                       font-extrabold"
                            >
                                ₹{{ number_format(
                                    (float) $quotation->grand_total,
                                    2
                                ) }}
                            </p>

                        </div>

                    </div>

                </div>

            </div>



            {{-- =================================================
                 TERMS
            ================================================== --}}

            @if($quotation->terms)

                <div
                    class="px-6
                           sm:px-8
                           lg:px-10
                           py-7
                           bg-slate-50
                           border-t
                           border-slate-200"
                >

                    <p
                        class="text-[8px]
                               uppercase
                               tracking-[0.15em]
                               font-bold
                               text-[#D71920]"
                    >
                        Terms & Conditions
                    </p>


                    <div
                        class="mt-3
                               text-[9px]
                               leading-5
                               text-slate-500"
                    >
                        {!! nl2br(e($quotation->terms)) !!}
                    </div>

                </div>

            @endif



            {{-- =================================================
                 SIGNATURE / ACCEPTANCE
            ================================================== --}}

            <div
                class="px-6
                       sm:px-8
                       lg:px-10
                       py-8
                       grid
                       grid-cols-1
                       sm:grid-cols-2
                       gap-10
                       border-t
                       border-slate-200"
            >

                <div>

                    <p
                        class="text-[8px]
                               uppercase
                               tracking-wide
                               font-bold
                               text-slate-400"
                    >
                        Customer Acceptance
                    </p>


                    <div
                        class="mt-10
                               w-[220px]
                               border-t
                               border-slate-300
                               pt-2
                               text-[8px]
                               text-slate-400"
                    >
                        Authorized Signature
                    </div>

                </div>


                <div class="sm:text-right">

                    <p
                        class="text-[8px]
                               uppercase
                               tracking-wide
                               font-bold
                               text-slate-400"
                    >
                        For
                    </p>


                    <p
                        class="mt-2
                               text-[11px]
                               font-extrabold
                               text-[#073B66]"
                    >
                        Associated Scientific &
                        Engineering Works
                    </p>


                    <div
                        class="mt-10
                               sm:ml-auto
                               w-[220px]
                               border-t
                               border-slate-300
                               pt-2
                               text-[8px]
                               text-slate-400"
                    >
                        Authorized Signatory
                    </div>

                </div>

            </div>



            {{-- =================================================
                 FOOTER
            ================================================== --}}

            <div
                class="px-6
                       sm:px-8
                       lg:px-10
                       py-5
                       bg-[#032B55]
                       text-white"
            >

                <div
                    class="flex
                           flex-col
                           sm:flex-row
                           sm:items-center
                           sm:justify-between
                           gap-3"
                >

                    <div>

                        <p
                            class="text-[9px]
                                   font-bold"
                        >
                            Associated Scientific & Engineering Works
                        </p>


                        <p
                            class="mt-1
                                   text-[8px]
                                   text-white/50"
                        >
                            Scientific & Engineering Testing Equipment
                            • Since 1975
                        </p>

                    </div>


                    <div
                        class="sm:text-right
                               text-[8px]
                               leading-5
                               text-white/60"
                    >
                        sales@asew.in
                        <br>
                        +91 120 456 6201
                    </div>

                </div>

            </div>

        </div>

    </div>

</div>



{{-- =========================================================
     PRINT STYLES
========================================================= --}}

<style>

@media print {

    @page {
        size: A4;
        margin: 8mm;
    }

    html,
    body {
        background: #ffffff !important;
    }

    body {
        -webkit-print-color-adjust: exact !important;
        print-color-adjust: exact !important;
    }

    #quotation-document {
        width: 100% !important;
        max-width: none !important;
        margin: 0 !important;
        box-shadow: none !important;
    }

    table {
        page-break-inside: auto;
    }

    tr {
        page-break-inside: avoid;
        page-break-after: auto;
    }

    thead {
        display: table-header-group;
    }

    footer {
        page-break-inside: avoid;
    }

}

</style>

@endsection

