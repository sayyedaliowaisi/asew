<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="UTF-8">

    <meta
        name="viewport"
        content="width=device-width, initial-scale=1.0"
    >

    <title>
        {{ $quotation->quotation_number }} | ASEW
    </title>

    @vite([
        'resources/css/app.css',
        'resources/js/app.js'
    ])


    <style>

        @media print {

            @page {
                size: A4;
                margin: 8mm;
            }

            body {
                background: #ffffff !important;

                -webkit-print-color-adjust: exact !important;
                print-color-adjust: exact !important;
            }

            .no-print {
                display: none !important;
            }

            #quotationDocument {
                box-shadow: none !important;
                border: none !important;
                margin: 0 !important;
            }

            table {
                page-break-inside: auto;
            }

            tr {
                page-break-inside: avoid;
            }

            thead {
                display: table-header-group;
            }

            .customer-response-section {
                 display: none !important;
            }
        }

    </style>

</head>


<body class="bg-[#F4F6F8] text-slate-700">

@php

    $statusClass = match($quotation->status) {

        'draft' =>
            'bg-slate-100 text-slate-600',

        'sent' =>
            'bg-blue-50 text-blue-600',

        'accepted' =>
            'bg-emerald-50 text-emerald-600',

        'rejected' =>
            'bg-red-50 text-red-600',

        default =>
            'bg-slate-100 text-slate-500',
    };


    $taxableAmount =
        max(
            0,
            (float) $quotation->subtotal -
            (float) $quotation->discount
        );


    $isExpired =
        $quotation->valid_until
        &&
        $quotation->valid_until->isPast()
        &&
        !in_array(
            $quotation->status,
            [
                'accepted',
                'rejected',
            ],
            true
        );

@endphp



{{-- =========================================================
     PUBLIC HEADER
========================================================= --}}

<header
    class="no-print
           bg-[#032B55]
           text-white"
>

    <div
        class="max-w-[1200px]
               mx-auto
               px-4
               sm:px-6
               py-4
               flex
               items-center
               justify-between
               gap-5"
    >

        <div class="flex items-center gap-3">

            <div
                class="w-11
                       h-11
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
                    class="text-[12px]
                           font-extrabold"
                >
                    Associated Scientific &
                    Engineering Works
                </p>

                <p
                    class="mt-1
                           text-[8px]
                           uppercase
                           tracking-[0.15em]
                           text-white/50"
                >
                    Since 1975
                </p>

            </div>

        </div>


        <button
            type="button"
            onclick="window.print()"
            class="min-h-[40px]
                   px-5
                   bg-[#D71920]
                   hover:bg-white
                   hover:text-[#032B55]
                   text-white
                   text-[9px]
                   uppercase
                   tracking-wide
                   font-bold
                   transition"
        >
            Print / Save PDF
        </button>

    </div>

</header>


@if(session('success'))
    <div class="max-w-6xl mx-auto px-4 sm:px-6 lg:px-8 mt-6">
        <div class="rounded-xl border border-green-200 bg-green-50 px-5 py-4 text-green-800">
            <div class="flex items-start gap-3">
                <div class="text-xl">✓</div>

                <div>
                    <p class="font-bold">
                        Success
                    </p>

                    <p class="text-sm mt-1">
                        {{ session('success') }}
                    </p>
                </div>
            </div>
        </div>
    </div>
@endif


@if(session('info'))
    <div class="max-w-6xl mx-auto px-4 sm:px-6 lg:px-8 mt-6">
        <div class="rounded-xl border border-blue-200 bg-blue-50 px-5 py-4 text-blue-800">
            <p class="font-semibold">
                {{ session('info') }}
            </p>
        </div>
    </div>
@endif


@if(session('error'))
    <div class="max-w-6xl mx-auto px-4 sm:px-6 lg:px-8 mt-6">
        <div class="rounded-xl border border-red-200 bg-red-50 px-5 py-4 text-red-800">
            <p class="font-semibold">
                {{ session('error') }}
            </p>
        </div>
    </div>
@endif



<main
    class="px-3
           sm:px-6
           py-7
           sm:py-10"
>

    <div class="max-w-[1100px] mx-auto">


        @if($isExpired)

            <div
                class="no-print
                       mb-5
                       border
                       border-amber-200
                       bg-amber-50
                       px-5
                       py-4"
            >

                <p
                    class="text-[11px]
                           font-bold
                           text-amber-700"
                >
                    This quotation has passed its validity date.
                </p>

                <p
                    class="mt-1
                           text-[9px]
                           text-amber-600"
                >
                    Please contact the ASEW sales team
                    for a revised quotation.
                </p>

            </div>

        @endif



        <div
            id="quotationDocument"
            class="bg-white
                   border
                   border-slate-200
                   shadow-sm"
        >

            {{-- RED TOP STRIP --}}

            <div class="h-[5px] bg-[#D71920]"></div>



            {{-- COMPANY HEADER --}}

            <div
                class="px-5
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
                           gap-7"
                >

                    <div class="flex gap-4">

                        <div
                            class="w-[70px]
                                   h-[70px]
                                   shrink-0
                                   border
                                   border-slate-200
                                   flex
                                   items-center
                                   justify-center"
                        >

                            <img
                                src="{{ asset(
                                    'images/asew-logo.jpg'
                                ) }}"
                                alt="ASEW"
                                class="max-w-full
                                       max-h-full
                                       object-contain"
                            >

                        </div>


                        <div>

                            <p
                                class="text-[8px]
                                       uppercase
                                       tracking-[0.18em]
                                       font-bold
                                       text-[#D71920]"
                            >
                                Since 1975
                            </p>


                            <h1
                                class="mt-1
                                       text-lg
                                       sm:text-xl
                                       font-extrabold
                                       text-[#073B66]"
                            >
                                Associated Scientific &
                                Engineering Works
                            </h1>


                            <p
                                class="mt-2
                                       max-w-[520px]
                                       text-[9px]
                                       leading-5
                                       text-slate-500"
                            >
                                Manufacturer & Supplier of Scientific,
                                Civil Engineering and Material Testing
                                Laboratory Equipment.
                            </p>

                        </div>

                    </div>



                    <div class="md:text-right">

                        <p
                            class="text-3xl
                                   font-extrabold
                                   uppercase
                                   text-[#073B66]"
                        >
                            Quotation
                        </p>


                        <p
                            class="mt-3
                                   text-[10px]
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
                                   font-bold
                                   {{ $statusClass }}"
                        >
                            {{ ucfirst($quotation->status) }}
                        </span>

                    </div>

                </div>

            </div>



            {{-- CUSTOMER + QUOTE DETAILS --}}

            <div
                class="grid
                       md:grid-cols-2
                       border-b
                       border-slate-200"
            >

                <div
                    class="px-5
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


                    <p
                        class="mt-3
                               text-[14px]
                               font-extrabold
                               text-[#073B66]"
                    >
                        {{ $quotation->customer_name }}
                    </p>


                    @if($quotation->company)

                        <p
                            class="mt-1
                                   text-[10px]
                                   font-semibold"
                        >
                            {{ $quotation->company }}
                        </p>

                    @endif


                    <div
                        class="mt-4
                               space-y-1
                               text-[9px]
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



                <div
                    class="px-5
                           sm:px-8
                           lg:px-10
                           py-7"
                >

                    <div
                        class="grid
                               grid-cols-2
                               gap-5"
                    >

                        <div>

                            <p class="text-[8px] uppercase font-bold text-slate-400">
                                Quotation Date
                            </p>

                            <p class="mt-1 text-[10px] font-bold text-[#073B66]">
                                {{ $quotation->quotation_date->format('d M Y') }}
                            </p>

                        </div>


                        <div>

                            <p class="text-[8px] uppercase font-bold text-slate-400">
                                Valid Until
                            </p>

                            <p
                                class="mt-1
                                       text-[10px]
                                       font-bold
                                       {{ $isExpired
                                            ? 'text-red-600'
                                            : 'text-[#073B66]' }}"
                            >
                                {{ $quotation->valid_until
                                    ? $quotation->valid_until->format('d M Y')
                                    : '—' }}
                            </p>

                        </div>


                        <div>

                            <p class="text-[8px] uppercase font-bold text-slate-400">
                                Validity
                            </p>

                            <p class="mt-1 text-[10px] font-bold text-[#073B66]">
                                {{ $quotation->validity_days }} Days
                            </p>

                        </div>


                        <div>

                            <p class="text-[8px] uppercase font-bold text-slate-400">
                                Status
                            </p>

                            <p class="mt-1 text-[10px] font-bold text-[#073B66]">
                                {{ ucfirst($quotation->status) }}
                            </p>

                        </div>

                    </div>

                </div>

            </div>



            {{-- PRODUCTS --}}

            <div class="px-5 sm:px-8 lg:px-10 py-8">

                <h2
                    class="text-[15px]
                           font-extrabold
                           text-[#073B66]"
                >
                    Product Details
                </h2>


                <div class="mt-5 overflow-x-auto">

                    <table
                        class="w-full
                               min-w-[650px]
                               border-collapse"
                    >

                        <thead>

                            <tr class="bg-[#032B55] text-white">

                                <th class="px-4 py-3 text-left text-[8px] uppercase">
                                    #
                                </th>

                                <th class="px-4 py-3 text-left text-[8px] uppercase">
                                    Product
                                </th>

                                <th class="px-4 py-3 text-center text-[8px] uppercase">
                                    Qty
                                </th>

                                <th class="px-4 py-3 text-right text-[8px] uppercase">
                                    Unit Price
                                </th>

                                <th class="px-4 py-3 text-right text-[8px] uppercase">
                                    Total
                                </th>

                            </tr>

                        </thead>


                        <tbody>

                            @foreach($quotation->items as $item)

                                <tr class="border-b border-slate-200">

                                    <td class="px-4 py-5 text-[9px] text-slate-400">
                                        {{ $loop->iteration }}
                                    </td>


                                    <td class="px-4 py-5">

                                        <p class="text-[10px] font-bold text-[#073B66]">
                                            {{ $item->product_name }}
                                        </p>

                                        @if($item->product_code)

                                            <p class="mt-1 text-[8px] font-bold text-[#D71920]">
                                                {{ $item->product_code }}
                                            </p>

                                        @endif

                                    </td>


                                    <td class="px-4 py-5 text-center text-[10px]">
                                        {{ $item->quantity }}
                                    </td>


                                    <td class="px-4 py-5 text-right text-[10px]">
                                        ₹{{ number_format(
                                            (float) $item->unit_price,
                                            2
                                        ) }}
                                    </td>


                                    <td class="px-4 py-5 text-right text-[10px] font-bold text-[#073B66]">
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



            {{-- TOTAL SECTION --}}

            <div
                class="px-5
                       sm:px-8
                       lg:px-10
                       pb-8
                       grid
                       md:grid-cols-[1fr_380px]
                       gap-8"
            >

                <div>

                    @if($quotation->notes)

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
                                   bg-slate-50
                                   border-l-[3px]
                                   border-[#073B66]
                                   p-4
                                   text-[9px]
                                   leading-5
                                   text-slate-500"
                        >
                            {!! nl2br(
                                e($quotation->notes)
                            ) !!}
                        </div>

                    @endif

                </div>



                <div class="border border-slate-200">

                    <div class="flex justify-between px-5 py-3 border-b">

                        <span class="text-[9px] text-slate-400">
                            Subtotal
                        </span>

                        <span class="text-[10px] font-bold">
                            ₹{{ number_format(
                                (float) $quotation->subtotal,
                                2
                            ) }}
                        </span>

                    </div>


                    <div class="flex justify-between px-5 py-3 border-b">

                        <span class="text-[9px] text-slate-400">
                            Discount
                        </span>

                        <span class="text-[10px] font-bold text-[#D71920]">
                            − ₹{{ number_format(
                                (float) $quotation->discount,
                                2
                            ) }}
                        </span>

                    </div>


                    <div class="flex justify-between px-5 py-3 border-b">

                        <span class="text-[9px] text-slate-400">
                            Taxable Amount
                        </span>

                        <span class="text-[10px] font-bold">
                            ₹{{ number_format(
                                $taxableAmount,
                                2
                            ) }}
                        </span>

                    </div>


                    <div class="flex justify-between px-5 py-3 border-b">

                        <span class="text-[9px] text-slate-400">
                            GST
                            ({{ number_format(
                                (float) $quotation->gst_percent,
                                2
                            ) }}%)
                        </span>

                        <span class="text-[10px] font-bold">
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
                                   text-white/50"
                        >
                            Grand Total
                        </p>

                        <p
                            class="mt-2
                                   text-[22px]
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



            @if($quotation->terms)

                <div
                    class="px-5
                           sm:px-8
                           lg:px-10
                           py-7
                           border-t
                           bg-slate-50"
                >

                    <p class="text-[8px] uppercase tracking-wide font-bold text-[#D71920]">
                        Terms & Conditions
                    </p>

                    <div
                        class="mt-3
                               text-[9px]
                               leading-5
                               text-slate-500"
                    >
                        {!! nl2br(
                            e($quotation->terms)
                        ) !!}
                    </div>

                </div>

            @endif


            @php
    $quotationExpired =
        $quotation->valid_until &&
        $quotation->valid_until->isBefore(now()->startOfDay());
@endphp


<div class="customer-response-section mt-10">

    @if($quotation->status === 'sent' && !$quotationExpired)

        <div
            class="rounded-2xl
                   border border-slate-200
                   bg-slate-50
                   p-6 sm:p-8"
        >

            <div class="text-center max-w-2xl mx-auto">

                <div
                    class="inline-flex
                           items-center
                           justify-center
                           w-12 h-12
                           rounded-full
                           bg-[#073B66]
                           text-white
                           mb-4"
                >
                    ✓
                </div>

                <h3
                    class="text-xl sm:text-2xl
                           font-bold
                           text-[#032B55]"
                >
                    Respond to this Quotation
                </h3>

                <p class="text-slate-600 mt-2">
                    Please review the quotation details carefully and
                    confirm whether you would like to proceed.
                </p>


                <div
                    class="flex flex-col sm:flex-row
                           justify-center
                           gap-3
                           mt-7"
                >

                    {{-- ACCEPT --}}

                    <form
                        method="POST"
                        action="{{ route('quotation.respond', [
                            'quotationNumber' => $quotation->quotation_number,
                            'token' => $quotation->public_token,
                        ]) }}"
                        onsubmit="return confirm(
                            'Are you sure you want to accept this quotation?'
                        );"
                    >
                        @csrf

                        <input
                            type="hidden"
                            name="decision"
                            value="accepted"
                        >

                        <button
                            type="submit"
                            class="w-full sm:w-auto
                                   min-w-[190px]
                                   inline-flex
                                   items-center
                                   justify-center
                                   gap-2
                                   rounded-xl
                                   bg-green-600
                                   px-6 py-3.5
                                   font-bold
                                   text-white
                                   shadow-sm
                                   transition
                                   hover:bg-green-700"
                        >
                            <span>✓</span>

                            Accept Quotation
                        </button>

                    </form>


                    {{-- REJECT --}}

                    <form
                        method="POST"
                        action="{{ route('quotation.respond', [
                            'quotationNumber' => $quotation->quotation_number,
                            'token' => $quotation->public_token,
                        ]) }}"
                        onsubmit="return confirm(
                            'Are you sure you want to reject this quotation?'
                        );"
                    >
                        @csrf

                        <input
                            type="hidden"
                            name="decision"
                            value="rejected"
                        >

                        <button
                            type="submit"
                            class="w-full sm:w-auto
                                   min-w-[190px]
                                   inline-flex
                                   items-center
                                   justify-center
                                   gap-2
                                   rounded-xl
                                   border border-red-200
                                   bg-white
                                   px-6 py-3.5
                                   font-bold
                                   text-red-600
                                   transition
                                   hover:bg-red-50"
                        >
                            <span>✕</span>

                            Reject Quotation
                        </button>

                    </form>

                </div>

            </div>

        </div>


    @elseif($quotation->status === 'accepted')

        <div
            class="rounded-2xl
                   border border-green-200
                   bg-green-50
                   p-7
                   text-center"
        >

            <div
                class="mx-auto
                       flex
                       h-14 w-14
                       items-center
                       justify-center
                       rounded-full
                       bg-green-600
                       text-2xl
                       text-white"
            >
                ✓
            </div>

            <h3
                class="mt-4
                       text-2xl
                       font-bold
                       text-green-800"
            >
                Quotation Accepted
            </h3>

            <p class="mt-2 text-green-700">
                Thank you for accepting our quotation.
                Our team will contact you regarding the next steps.
            </p>

            @if($quotation->responded_at)

                <p class="mt-3 text-sm text-green-700">
                    Responded on
                    {{ $quotation->responded_at->format('d M Y, h:i A') }}
                </p>

            @endif

        </div>


    @elseif($quotation->status === 'rejected')

        <div
            class="rounded-2xl
                   border border-red-200
                   bg-red-50
                   p-7
                   text-center"
        >

            <div
                class="mx-auto
                       flex
                       h-14 w-14
                       items-center
                       justify-center
                       rounded-full
                       bg-red-600
                       text-2xl
                       text-white"
            >
                ✕
            </div>

            <h3
                class="mt-4
                       text-2xl
                       font-bold
                       text-red-800"
            >
                Quotation Rejected
            </h3>

            <p class="mt-2 text-red-700">
                Your response has been recorded successfully.
            </p>

            @if($quotation->responded_at)

                <p class="mt-3 text-sm text-red-700">
                    Responded on
                    {{ $quotation->responded_at->format('d M Y, h:i A') }}
                </p>

            @endif

        </div>


    @elseif($quotationExpired)

        <div
            class="rounded-2xl
                   border border-amber-200
                   bg-amber-50
                   p-6
                   text-center"
        >

            <h3 class="font-bold text-amber-800 text-xl">
                Quotation Expired
            </h3>

            <p class="text-amber-700 mt-2">
                This quotation has passed its validity date.
                Please contact ASEW for a revised quotation.
            </p>

        </div>

    @endif

</div>



            {{-- SIGNATURE --}}

            <div
                class="px-5
                       sm:px-8
                       lg:px-10
                       py-9
                       text-right
                       border-t"
            >

                <p
                    class="text-[8px]
                           uppercase
                           text-slate-400"
                >
                    For
                </p>

                <p
                    class="mt-2
                           text-[10px]
                           font-extrabold
                           text-[#073B66]"
                >
                    Associated Scientific &
                    Engineering Works
                </p>


                <div
                    class="mt-12
                           ml-auto
                           w-[210px]
                           pt-2
                           border-t
                           text-[8px]
                           text-slate-400"
                >
                    Authorized Signatory
                </div>

            </div>



            {{-- FOOTER --}}

            <div
                class="px-5
                       sm:px-8
                       lg:px-10
                       py-5
                       bg-[#032B55]
                       text-white
                       text-center"
            >

                <p class="text-[9px] font-bold">
                    Associated Scientific & Engineering Works
                </p>

                <p class="mt-1 text-[8px] text-white/50">
                    sales@asew.in
                    •
                    +91 120 456 6201
                    •
                    Since 1975
                </p>

            </div>

        </div>

    </div>

</main>

</body>
</html>