
@extends('layouts.admin')


@section('title', 'Create Quotation | ASEW Admin')

@section('page-title', 'Create Quotation')


@section('content')

<div class="p-4 sm:p-6 lg:p-8">

    <div class="max-w-[1450px] mx-auto">

        {{-- =====================================================
             HEADER
        ====================================================== --}}

        <div
            class="flex flex-col
                   lg:flex-row
                   lg:items-center
                   lg:justify-between
                   gap-5"
        >

            <div>

                <a
                    href="{{ route('admin.enquiries.show', $enquiry) }}"
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
                    Create Quotation
                </h1>


                <p
                    class="mt-2
                           text-[11px]
                           leading-6
                           text-slate-400"
                >
                    Prepare a commercial quotation for enquiry
                    #{{ str_pad($enquiry->id, 5, '0', STR_PAD_LEFT) }}.
                </p>

            </div>


            <div
                class="px-5
                       py-4
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
                    Enquiry Reference
                </p>

                <p
                    class="mt-1
                           text-lg
                           font-extrabold"
                >
                    #{{ str_pad($enquiry->id, 5, '0', STR_PAD_LEFT) }}
                </p>

            </div>

        </div>



        {{-- =====================================================
             VALIDATION ERRORS
        ====================================================== --}}

        @if($errors->any())

            <div
                class="mt-6
                       border
                       border-red-200
                       bg-red-50
                       p-5"
            >

                <p
                    class="text-[10px]
                           uppercase
                           font-bold
                           text-red-700"
                >
                    Please correct the following errors
                </p>


                <ul
                    class="mt-3
                           space-y-1
                           text-[11px]
                           text-red-600"
                >

                    @foreach($errors->all() as $error)

                        <li>
                            • {{ $error }}
                        </li>

                    @endforeach

                </ul>

            </div>

        @endif



        {{-- =====================================================
             FORM
        ====================================================== --}}

        <form
            action="{{ route('admin.quotations.store', $enquiry) }}"
            method="POST"
            class="mt-6"
        >

            @csrf


            <div
                class="grid
                       grid-cols-1
                       xl:grid-cols-[1.45fr_.75fr]
                       gap-6"
            >

                {{-- =================================================
                     LEFT SIDE
                ================================================== --}}

                <div class="space-y-6">


                    {{-- CUSTOMER DETAILS --}}

                    <div
                        class="bg-white
                               border
                               border-slate-200"
                    >

                        <div
                            class="px-5
                                   sm:px-6
                                   py-5
                                   border-b
                                   border-slate-200"
                        >

                            <p
                                class="text-[9px]
                                       uppercase
                                       tracking-[0.16em]
                                       font-bold
                                       text-[#D71920]"
                            >
                                Customer
                            </p>

                            <h2
                                class="mt-1
                                       text-lg
                                       font-extrabold
                                       text-[#073B66]"
                            >
                                Customer Information
                            </h2>

                        </div>


                        <div
                            class="p-5
                                   sm:p-6
                                   grid
                                   grid-cols-1
                                   sm:grid-cols-2
                                   lg:grid-cols-3
                                   gap-5"
                        >

                            <div>

                                <p class="text-[8px] uppercase font-bold text-slate-400">
                                    Customer Name
                                </p>

                                <p class="mt-1 text-[11px] font-bold text-[#073B66]">
                                    {{ $enquiry->name }}
                                </p>

                            </div>


                            <div>

                                <p class="text-[8px] uppercase font-bold text-slate-400">
                                    Company
                                </p>

                                <p class="mt-1 text-[11px] text-slate-600">
                                    {{ $enquiry->company ?: '—' }}
                                </p>

                            </div>


                            <div>

                                <p class="text-[8px] uppercase font-bold text-slate-400">
                                    City
                                </p>

                                <p class="mt-1 text-[11px] text-slate-600">
                                    {{ $enquiry->city ?: '—' }}
                                </p>

                            </div>


                            <div>

                                <p class="text-[8px] uppercase font-bold text-slate-400">
                                    Email
                                </p>

                                <p class="mt-1 text-[11px] text-slate-600 break-all">
                                    {{ $enquiry->email }}
                                </p>

                            </div>


                            <div>

                                <p class="text-[8px] uppercase font-bold text-slate-400">
                                    Phone
                                </p>

                                <p class="mt-1 text-[11px] text-slate-600">
                                    {{ $enquiry->phone }}
                                </p>

                            </div>

                        </div>

                    </div>



                    {{-- PRODUCT INFORMATION --}}

                    <div
                        class="bg-white
                               border
                               border-slate-200"
                    >

                        <div
                            class="px-5
                                   sm:px-6
                                   py-5
                                   border-b
                                   border-slate-200"
                        >

                            <p
                                class="text-[9px]
                                       uppercase
                                       tracking-[0.16em]
                                       font-bold
                                       text-[#D71920]"
                            >
                                Quotation Item
                            </p>

                            <h2
                                class="mt-1
                                       text-lg
                                       font-extrabold
                                       text-[#073B66]"
                            >
                                Product & Pricing
                            </h2>

                        </div>


                        <div class="p-5 sm:p-6">

                            {{-- PRODUCT SNAPSHOT --}}

                            <div
                                class="flex
                                       flex-col
                                       sm:flex-row
                                       sm:items-center
                                       gap-4
                                       pb-6
                                       border-b
                                       border-slate-100"
                            >

                                @if($enquiry->product?->image)

                                    <div
                                        class="w-[100px]
                                               h-[90px]
                                               shrink-0
                                               bg-slate-50
                                               border
                                               border-slate-200
                                               flex
                                               items-center
                                               justify-center"
                                    >

                                        <img
                                            src="{{ asset($enquiry->product->image) }}"
                                            alt="{{ $enquiry->product_name }}"
                                            class="max-w-full
                                                   max-h-full
                                                   object-contain
                                                   p-3"
                                        >

                                    </div>

                                @endif


                                <div>

                                    <p
                                        class="text-[9px]
                                               uppercase
                                               font-bold
                                               text-slate-400"
                                    >
                                        Requested Product
                                    </p>


                                    <h3
                                        class="mt-1
                                               text-base
                                               font-extrabold
                                               text-[#073B66]"
                                    >
                                        {{ $enquiry->product_name ?: 'Product Enquiry' }}
                                    </h3>


                                    @if($enquiry->product_code)

                                        <p
                                            class="mt-1
                                                   text-[10px]
                                                   font-bold
                                                   text-[#D71920]"
                                        >
                                            {{ $enquiry->product_code }}
                                        </p>

                                    @endif

                                </div>

                            </div>



                            {{-- PRICE FIELDS --}}

                            <div
                                class="grid
                                       grid-cols-1
                                       md:grid-cols-2
                                       gap-5
                                       mt-6"
                            >

                                <div>

                                    <label
                                        for="quantity"
                                        class="block
                                               mb-2
                                               text-[9px]
                                               uppercase
                                               tracking-wide
                                               font-bold
                                               text-[#073B66]"
                                    >
                                        Quantity *
                                    </label>


                                    <input
                                        id="quantity"
                                        type="number"
                                        name="quantity"
                                        min="1"
                                        max="10000"
                                        value="{{ old(
                                            'quantity',
                                            $enquiry->quantity ?: 1
                                        ) }}"
                                        required
                                        class="w-full
                                               h-[48px]
                                               px-4
                                               border
                                               border-slate-200
                                               text-[12px]
                                               outline-none
                                               focus:border-[#073B66]"
                                    >

                                </div>



                                <div>

                                    <label
                                        for="unit_price"
                                        class="block
                                               mb-2
                                               text-[9px]
                                               uppercase
                                               tracking-wide
                                               font-bold
                                               text-[#073B66]"
                                    >
                                        Unit Price (₹) *
                                    </label>


                                    <input
                                        id="unit_price"
                                        type="number"
                                        name="unit_price"
                                        min="0"
                                        step="0.01"
                                        value="{{ old('unit_price', '') }}"
                                        required
                                        placeholder="0.00"
                                        class="w-full
                                               h-[48px]
                                               px-4
                                               border
                                               border-slate-200
                                               text-[12px]
                                               outline-none
                                               focus:border-[#073B66]"
                                    >

                                </div>



                                <div>

                                    <label
                                        for="discount"
                                        class="block
                                               mb-2
                                               text-[9px]
                                               uppercase
                                               tracking-wide
                                               font-bold
                                               text-[#073B66]"
                                    >
                                        Discount (₹)
                                    </label>


                                    <input
                                        id="discount"
                                        type="number"
                                        name="discount"
                                        min="0"
                                        step="0.01"
                                        value="{{ old('discount', 0) }}"
                                        class="w-full
                                               h-[48px]
                                               px-4
                                               border
                                               border-slate-200
                                               text-[12px]
                                               outline-none
                                               focus:border-[#073B66]"
                                    >

                                </div>



                                <div>

                                    <label
                                        for="gst_percent"
                                        class="block
                                               mb-2
                                               text-[9px]
                                               uppercase
                                               tracking-wide
                                               font-bold
                                               text-[#073B66]"
                                    >
                                        GST (%)
                                    </label>


                                    <input
                                        id="gst_percent"
                                        type="number"
                                        name="gst_percent"
                                        min="0"
                                        max="100"
                                        step="0.01"
                                        value="{{ old('gst_percent', 18) }}"
                                        required
                                        class="w-full
                                               h-[48px]
                                               px-4
                                               border
                                               border-slate-200
                                               text-[12px]
                                               outline-none
                                               focus:border-[#073B66]"
                                    >

                                </div>

                            </div>

                        </div>

                    </div>



                    {{-- TERMS --}}

                    <div
                        class="bg-white
                               border
                               border-slate-200"
                    >

                        <div
                            class="px-5
                                   sm:px-6
                                   py-5
                                   border-b
                                   border-slate-200"
                        >

                            <p
                                class="text-[9px]
                                       uppercase
                                       tracking-[0.16em]
                                       font-bold
                                       text-[#D71920]"
                            >
                                Commercial Terms
                            </p>

                            <h2
                                class="mt-1
                                       text-lg
                                       font-extrabold
                                       text-[#073B66]"
                            >
                                Validity, Notes & Terms
                            </h2>

                        </div>


                        <div class="p-5 sm:p-6">

                            <div>

                                <label
                                    for="validity_days"
                                    class="block
                                           mb-2
                                           text-[9px]
                                           uppercase
                                           font-bold
                                           text-[#073B66]"
                                >
                                    Quotation Validity *
                                </label>


                                <select
                                    id="validity_days"
                                    name="validity_days"
                                    required
                                    class="w-full
                                           h-[48px]
                                           px-4
                                           border
                                           border-slate-200
                                           bg-white
                                           text-[12px]
                                           text-slate-600
                                           outline-none
                                           focus:border-[#073B66]"
                                >

                                    @foreach([7, 15, 30, 45, 60, 90] as $days)

                                        <option
                                            value="{{ $days }}"
                                            @selected(
                                                (int) old('validity_days', 15) === $days
                                            )
                                        >
                                            {{ $days }} Days
                                        </option>

                                    @endforeach

                                </select>

                            </div>



                            <div class="mt-5">

                                <label
                                    for="notes"
                                    class="block
                                           mb-2
                                           text-[9px]
                                           uppercase
                                           font-bold
                                           text-[#073B66]"
                                >
                                    Additional Notes
                                </label>


                                <textarea
                                    id="notes"
                                    name="notes"
                                    rows="4"
                                    placeholder="Optional customer-specific notes..."
                                    class="w-full
                                           px-4
                                           py-3
                                           border
                                           border-slate-200
                                           text-[12px]
                                           leading-6
                                           outline-none
                                           focus:border-[#073B66]"
                                >{{ old('notes') }}</textarea>

                            </div>



                            <div class="mt-5">

                                <label
                                    for="terms"
                                    class="block
                                           mb-2
                                           text-[9px]
                                           uppercase
                                           font-bold
                                           text-[#073B66]"
                                >
                                    Terms & Conditions
                                </label>


                                <textarea
                                    id="terms"
                                    name="terms"
                                    rows="7"
                                    class="w-full
                                           px-4
                                           py-3
                                           border
                                           border-slate-200
                                           text-[12px]
                                           leading-6
                                           outline-none
                                           focus:border-[#073B66]"
                                >{{ old(
                                    'terms',
                                    "Prices are subject to the terms mentioned in this quotation.\nDelivery schedule will be confirmed at the time of order.\nPayment terms shall be mutually agreed before dispatch.\nApplicable taxes shall be charged as per government regulations."
                                ) }}</textarea>

                                <p
                                    class="mt-2
                                           text-[9px]
                                           text-slate-400"
                                >
                                    You can modify these terms for each quotation.
                                </p>

                            </div>

                        </div>

                    </div>

                </div>



                {{-- =================================================
                     RIGHT SIDE SUMMARY
                ================================================== --}}

                <div>

                    <div
                        class="xl:sticky
                               xl:top-[90px]
                               space-y-5"
                    >

                        {{-- CALCULATION CARD --}}

                        <div
                            class="bg-white
                                   border
                                   border-slate-200"
                        >

                            <div
                                class="px-5
                                       py-5
                                       bg-[#032B55]
                                       text-white"
                            >

                                <p
                                    class="text-[9px]
                                           uppercase
                                           tracking-[0.15em]
                                           font-bold
                                           text-[#D7A93A]"
                                >
                                    Live Calculation
                                </p>

                                <h2
                                    class="mt-1
                                           text-lg
                                           font-extrabold"
                                >
                                    Quotation Summary
                                </h2>

                            </div>


                            <div class="p-5">

                                <div
                                    class="flex
                                           items-center
                                           justify-between
                                           gap-4
                                           py-3
                                           border-b
                                           border-slate-100"
                                >

                                    <span class="text-[10px] text-slate-400">
                                        Quantity
                                    </span>

                                    <span
                                        id="summary_quantity"
                                        class="text-[11px]
                                               font-bold
                                               text-[#073B66]"
                                    >
                                        1
                                    </span>

                                </div>



                                <div
                                    class="flex
                                           items-center
                                           justify-between
                                           gap-4
                                           py-3
                                           border-b
                                           border-slate-100"
                                >

                                    <span class="text-[10px] text-slate-400">
                                        Unit Price
                                    </span>

                                    <span
                                        id="summary_unit_price"
                                        class="text-[11px]
                                               font-bold
                                               text-[#073B66]"
                                    >
                                        ₹0.00
                                    </span>

                                </div>



                                <div
                                    class="flex
                                           items-center
                                           justify-between
                                           gap-4
                                           py-3
                                           border-b
                                           border-slate-100"
                                >

                                    <span class="text-[10px] text-slate-400">
                                        Subtotal
                                    </span>

                                    <span
                                        id="summary_subtotal"
                                        class="text-[11px]
                                               font-bold
                                               text-[#073B66]"
                                    >
                                        ₹0.00
                                    </span>

                                </div>



                                <div
                                    class="flex
                                           items-center
                                           justify-between
                                           gap-4
                                           py-3
                                           border-b
                                           border-slate-100"
                                >

                                    <span class="text-[10px] text-slate-400">
                                        Discount
                                    </span>

                                    <span
                                        id="summary_discount"
                                        class="text-[11px]
                                               font-bold
                                               text-[#D71920]"
                                    >
                                        − ₹0.00
                                    </span>

                                </div>



                                <div
                                    class="flex
                                           items-center
                                           justify-between
                                           gap-4
                                           py-3
                                           border-b
                                           border-slate-100"
                                >

                                    <span
                                        id="gst_label"
                                        class="text-[10px]
                                               text-slate-400"
                                    >
                                        GST (18%)
                                    </span>

                                    <span
                                        id="summary_gst"
                                        class="text-[11px]
                                               font-bold
                                               text-[#073B66]"
                                    >
                                        ₹0.00
                                    </span>

                                </div>



                                <div
                                    class="mt-5
                                           p-5
                                           bg-slate-50
                                           border
                                           border-slate-200"
                                >

                                    <p
                                        class="text-[8px]
                                               uppercase
                                               tracking-wide
                                               font-bold
                                               text-slate-400"
                                    >
                                        Grand Total
                                    </p>


                                    <p
                                        id="summary_grand_total"
                                        class="mt-2
                                               text-2xl
                                               sm:text-3xl
                                               font-extrabold
                                               text-[#073B66]"
                                    >
                                        ₹0.00
                                    </p>

                                </div>

                            </div>

                        </div>



                        {{-- PRODUCT SUMMARY --}}

                        <div
                            class="bg-white
                                   border
                                   border-slate-200
                                   p-5"
                        >

                            <p
                                class="text-[9px]
                                       uppercase
                                       tracking-wide
                                       font-bold
                                       text-[#D71920]"
                            >
                                Product
                            </p>


                            <p
                                class="mt-2
                                       text-[12px]
                                       leading-5
                                       font-bold
                                       text-[#073B66]"
                            >
                                {{ $enquiry->product_name ?: 'Product Enquiry' }}
                            </p>


                            @if($enquiry->product_code)

                                <p
                                    class="mt-1
                                           text-[9px]
                                           font-bold
                                           text-slate-400"
                                >
                                    {{ $enquiry->product_code }}
                                </p>

                            @endif


                            <div
                                class="mt-4
                                       pt-4
                                       border-t
                                       border-slate-100"
                            >

                                <p
                                    class="text-[9px]
                                           text-slate-400"
                                >
                                    Customer
                                </p>

                                <p
                                    class="mt-1
                                           text-[11px]
                                           font-bold
                                           text-[#073B66]"
                                >
                                    {{ $enquiry->name }}
                                </p>

                            </div>

                        </div>



                        {{-- ACTIONS --}}

                        <div
                            class="bg-white
                                   border
                                   border-slate-200
                                   p-5"
                        >

                            <button
                                type="submit"
                                class="w-full
                                       min-h-[48px]
                                       px-6
                                       flex
                                       items-center
                                       justify-center
                                       bg-[#D71920]
                                       hover:bg-[#032B55]
                                       text-white
                                       text-[9px]
                                       uppercase
                                       tracking-[0.12em]
                                       font-bold
                                       transition"
                            >
                                Create Quotation
                            </button>


                            <a
                                href="{{ route(
                                    'admin.enquiries.show',
                                    $enquiry
                                ) }}"
                                class="mt-3
                                       w-full
                                       min-h-[44px]
                                       px-6
                                       flex
                                       items-center
                                       justify-center
                                       border
                                       border-slate-200
                                       text-[9px]
                                       uppercase
                                       tracking-wide
                                       font-bold
                                       text-slate-500
                                       hover:border-[#D71920]
                                       hover:text-[#D71920]
                                       transition"
                            >
                                Cancel
                            </a>

                        </div>

                    </div>

                </div>

            </div>

        </form>

    </div>

</div>


{{-- =========================================================
     LIVE QUOTATION CALCULATOR
========================================================= --}}

<script>

document.addEventListener('DOMContentLoaded', function () {

    const quantity =
        document.getElementById('quantity');

    const unitPrice =
        document.getElementById('unit_price');

    const discount =
        document.getElementById('discount');

    const gstPercent =
        document.getElementById('gst_percent');


    const summaryQuantity =
        document.getElementById('summary_quantity');

    const summaryUnitPrice =
        document.getElementById('summary_unit_price');

    const summarySubtotal =
        document.getElementById('summary_subtotal');

    const summaryDiscount =
        document.getElementById('summary_discount');

    const summaryGst =
        document.getElementById('summary_gst');

    const summaryGrandTotal =
        document.getElementById('summary_grand_total');

    const gstLabel =
        document.getElementById('gst_label');



    function numberValue(element) {

        const value =
            parseFloat(element?.value ?? 0);

        return Number.isFinite(value)
            ? value
            : 0;

    }



    function money(value) {

        return new Intl.NumberFormat(
            'en-IN',
            {
                style: 'currency',
                currency: 'INR',
                minimumFractionDigits: 2,
                maximumFractionDigits: 2,
            }
        ).format(value);

    }



    function calculateQuotation() {

        let qty =
            Math.max(
                1,
                Math.floor(
                    numberValue(quantity)
                )
            );


        let price =
            Math.max(
                0,
                numberValue(unitPrice)
            );


        const subtotal =
            qty * price;


        let discountAmount =
            Math.max(
                0,
                numberValue(discount)
            );


        /*
         * Discount cannot exceed subtotal.
         */

        discountAmount =
            Math.min(
                discountAmount,
                subtotal
            );


        const taxable =
            Math.max(
                0,
                subtotal - discountAmount
            );


        const gst =
            Math.max(
                0,
                numberValue(gstPercent)
            );


        const gstAmount =
            taxable * (gst / 100);


        const grandTotal =
            taxable + gstAmount;



        summaryQuantity.textContent =
            qty;


        summaryUnitPrice.textContent =
            money(price);


        summarySubtotal.textContent =
            money(subtotal);


        summaryDiscount.textContent =
            '− ' + money(discountAmount);


        gstLabel.textContent =
            'GST (' +
            parseFloat(gst.toFixed(2)) +
            '%)';


        summaryGst.textContent =
            money(gstAmount);


        summaryGrandTotal.textContent =
            money(grandTotal);

    }



    [
        quantity,
        unitPrice,
        discount,
        gstPercent
    ].forEach(function (field) {

        if (!field) {
            return;
        }

        field.addEventListener(
            'input',
            calculateQuotation
        );

        field.addEventListener(
            'change',
            calculateQuotation
        );

    });


    calculateQuotation();

});

</script>

@endsection

