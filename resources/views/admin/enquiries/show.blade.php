
@extends('layouts.admin')

@section('title', 'Enquiry Details | ASEW Admin')

@section('page-title', 'Enquiry Details')

@section('content')

<section class="p-4 sm:p-6 lg:p-8">

    <div class="max-w-[1400px] mx-auto">

        {{-- =====================================================
             PAGE HEADER
        ====================================================== --}}

        <div
            class="flex
                   flex-col
                   md:flex-row
                   md:items-center
                   md:justify-between
                   gap-5"
        >

            <div>

                <a
                    href="{{ route('admin.enquiries.index') }}"
                    class="inline-flex
                           items-center
                           gap-2
                           text-[9px]
                           uppercase
                           tracking-[0.15em]
                           font-bold
                           text-slate-400
                           hover:text-[#D71920]
                           transition"
                >
                    ← Back to Enquiries
                </a>


                <p
                    class="mt-5
                           text-[9px]
                           uppercase
                           tracking-[0.18em]
                           font-bold
                           text-[#D71920]"
                >
                    Customer Request
                </p>


                <h1
                    class="mt-2
                           text-2xl
                           sm:text-3xl
                           font-extrabold
                           text-[#073B66]"
                >
                    Enquiry
                    #{{ str_pad(
                        $enquiry->id,
                        5,
                        '0',
                        STR_PAD_LEFT
                    ) }}
                </h1>


                <p
                    class="mt-2
                           text-[11px]
                           text-slate-400"
                >
                    Submitted on
                    {{ $enquiry->created_at->format('d M Y') }}
                    at
                    {{ $enquiry->created_at->format('h:i A') }}
                </p>

            </div>



            {{-- STATUS BADGE --}}

            <div>

                @php

                    $statusClass = match(
                        $enquiry->status
                    ) {

                        'new' =>
                            'bg-blue-50 text-blue-700 border-blue-200',

                        'contacted' =>
                            'bg-amber-50 text-amber-700 border-amber-200',

                        'quoted' =>
                            'bg-purple-50 text-purple-700 border-purple-200',

                        'closed' =>
                            'bg-green-50 text-green-700 border-green-200',

                        default =>
                            'bg-slate-50 text-slate-600 border-slate-200',

                    };

                    $statusDot = match(
                        $enquiry->status
                    ) {

                        'new' => 'bg-blue-500',

                        'contacted' => 'bg-amber-500',

                        'quoted' => 'bg-purple-500',

                        'closed' => 'bg-green-500',

                        default => 'bg-slate-400',

                    };

                @endphp


                <span
                    class="inline-flex
                           items-center
                           gap-2
                           border
                           px-4
                           py-2
                           text-[9px]
                           uppercase
                           tracking-wide
                           font-bold
                           {{ $statusClass }}"
                >

                    <span
                        class="w-2
                               h-2
                               rounded-full
                               {{ $statusDot }}"
                    ></span>

                    {{ ucfirst($enquiry->status) }}

                </span>

            </div>

        </div>



        {{-- =====================================================
             SUCCESS MESSAGE
        ====================================================== --}}

        @if(session('success'))

            <div
                class="mt-6
                       border
                       border-green-200
                       bg-green-50
                       px-5
                       py-4
                       text-[11px]
                       sm:text-[12px]
                       font-semibold
                       text-green-700"
            >
                {{ session('success') }}
            </div>

        @endif



        {{-- =====================================================
             MAIN GRID
        ====================================================== --}}

        <div
            class="grid
                   grid-cols-1
                   lg:grid-cols-12
                   gap-6
                   mt-6"
        >

            {{-- =================================================
                 LEFT CONTENT
            ================================================== --}}

            <div class="lg:col-span-8">

                {{-- =============================================
                     CUSTOMER INFORMATION
                ============================================== --}}

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
                                   tracking-[0.15em]
                                   font-bold
                                   text-[#D71920]"
                        >
                            Customer Information
                        </p>


                        <h2
                            class="mt-1
                                   text-lg
                                   font-extrabold
                                   text-[#073B66]"
                        >
                            Contact Details
                        </h2>

                    </div>



                    @php

                        $details = [

                            [
                                'label' => 'Customer Name',
                                'value' => $enquiry->name,
                            ],

                            [
                                'label' => 'Company / Institute',
                                'value' => $enquiry->company ?: '—',
                            ],

                            [
                                'label' => 'Email Address',
                                'value' => $enquiry->email,
                            ],

                            [
                                'label' => 'Phone Number',
                                'value' => $enquiry->phone,
                            ],

                            [
                                'label' => 'City',
                                'value' => $enquiry->city ?: '—',
                            ],

                            [
                                'label' => 'Quantity',
                                'value' => $enquiry->quantity,
                            ],

                        ];

                    @endphp



                    <div
                        class="grid
                               grid-cols-1
                               sm:grid-cols-2"
                    >

                        @foreach($details as $detail)

                            <div
                                class="p-5
                                       sm:p-6
                                       border-b
                                       border-slate-100"
                            >

                                <p
                                    class="text-[8px]
                                           sm:text-[9px]
                                           uppercase
                                           tracking-[0.12em]
                                           font-bold
                                           text-slate-400"
                                >
                                    {{ $detail['label'] }}
                                </p>


                                <p
                                    class="mt-2
                                           break-words
                                           text-[12px]
                                           sm:text-[13px]
                                           font-semibold
                                           text-slate-700"
                                >
                                    {{ $detail['value'] }}
                                </p>

                            </div>

                        @endforeach

                    </div>

                </div>



                {{-- =============================================
                     REQUESTED PRODUCT
                ============================================== --}}

                <div
                    class="mt-6
                           bg-white
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
                                   tracking-[0.15em]
                                   font-bold
                                   text-[#D71920]"
                        >
                            Requested Product
                        </p>


                        <h2
                            class="mt-1
                                   text-lg
                                   font-extrabold
                                   text-[#073B66]"
                        >
                            Product Information
                        </h2>

                    </div>



                    <div class="p-5 sm:p-6">

                        <div
                            class="flex
                                   flex-col
                                   sm:flex-row
                                   sm:items-center
                                   sm:justify-between
                                   gap-5"
                        >

                            <div>

                                <h3
                                    class="text-lg
                                           sm:text-xl
                                           font-extrabold
                                           text-[#073B66]"
                                >
                                    {{ $enquiry->product_name ?? 'General Product Enquiry' }}
                                </h3>


                                @if($enquiry->product_code)

                                    <span
                                        class="inline-flex
                                               mt-3
                                               px-2.5
                                               py-1
                                               border
                                               border-red-100
                                               bg-red-50
                                               text-[9px]
                                               uppercase
                                               tracking-wide
                                               font-bold
                                               text-[#D71920]"
                                    >
                                        {{ $enquiry->product_code }}
                                    </span>

                                @endif

                            </div>



                            @if($enquiry->product)

                                <a
                                    href="{{ route(
                                        'products.show',
                                        $enquiry->product->slug
                                    ) }}"
                                    target="_blank"
                                    class="inline-flex
                                           min-h-[40px]
                                           px-4
                                           items-center
                                           justify-center
                                           border
                                           border-slate-200
                                           text-[9px]
                                           uppercase
                                           tracking-wide
                                           font-bold
                                           text-[#073B66]
                                           hover:border-[#D71920]
                                           hover:text-[#D71920]
                                           transition"
                                >
                                    View Product ↗
                                </a>

                            @endif

                        </div>



                        {{-- PRODUCT IMAGE --}}

                        @if($enquiry->product && $enquiry->product->image)

                            <div
                                class="mt-6
                                       w-full
                                       max-w-[300px]
                                       h-[200px]
                                       flex
                                       items-center
                                       justify-center
                                       border
                                       border-slate-200
                                       bg-white"
                            >

                                <img
                                    src="{{ asset(
                                        $enquiry->product->image
                                    ) }}"
                                    alt="{{ $enquiry->product->name }}"
                                    class="max-w-full
                                           max-h-full
                                           object-contain
                                           p-5"
                                >

                            </div>

                        @endif

                    </div>

                </div>



                {{-- =============================================
                     CUSTOMER MESSAGE
                ============================================== --}}

                <div
                    class="mt-6
                           bg-white
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
                                   tracking-[0.15em]
                                   font-bold
                                   text-[#D71920]"
                        >
                            Customer Requirement
                        </p>


                        <h2
                            class="mt-1
                                   text-lg
                                   font-extrabold
                                   text-[#073B66]"
                        >
                            Message
                        </h2>

                    </div>



                    <div class="p-5 sm:p-6">

                        @if($enquiry->message)

                            <p
                                class="whitespace-pre-line
                                       text-[12px]
                                       sm:text-[13px]
                                       leading-7
                                       text-slate-600"
                            >
                                {{ $enquiry->message }}
                            </p>

                        @else

                            <div
                                class="border
                                       border-dashed
                                       border-slate-200
                                       bg-slate-50
                                       px-5
                                       py-8
                                       text-center"
                            >

                                <p
                                    class="text-[11px]
                                           text-slate-400"
                                >
                                    No additional message was provided
                                    by the customer.
                                </p>

                            </div>

                        @endif

                    </div>

                </div>

            </div>



            {{-- =================================================
                 RIGHT SIDEBAR
            ================================================== --}}

            <aside class="lg:col-span-4">

                <div class="lg:sticky lg:top-[94px]">

                    {{-- =========================================
                         STATUS
                    ========================================== --}}

                    <div
                        class="bg-white
                               border
                               border-slate-200
                               p-5
                               sm:p-6"
                    >

                        <p
                            class="text-[9px]
                                   uppercase
                                   tracking-[0.15em]
                                   font-bold
                                   text-[#D71920]"
                        >
                            Enquiry Status
                        </p>


                        <h3
                            class="mt-2
                                   text-lg
                                   font-extrabold
                                   text-[#073B66]"
                        >
                            Update Progress
                        </h3>


                        <p
                            class="mt-2
                                   text-[10px]
                                   leading-5
                                   text-slate-400"
                        >
                            Update the current stage of this
                            customer enquiry.
                        </p>



                        <form
                            action="{{ route(
                                'admin.enquiries.status',
                                $enquiry
                            ) }}"
                            method="POST"
                            class="mt-5"
                        >

                            @csrf
                            @method('PATCH')


                            <label
                                for="status"
                                class="block
                                       mb-2
                                       text-[9px]
                                       uppercase
                                       tracking-wide
                                       font-bold
                                       text-slate-400"
                            >
                                Current Status
                            </label>


                            <select
                                id="status"
                                name="status"
                                class="w-full
                                       h-[46px]
                                       px-3
                                       border
                                       border-slate-200
                                       bg-white
                                       text-[12px]
                                       text-slate-600
                                       outline-none
                                       focus:border-[#073B66]"
                            >

                                @foreach([
                                    'new' => 'New',
                                    'contacted' => 'Contacted',
                                    'quoted' => 'Quoted',
                                    'closed' => 'Closed',
                                ] as $value => $label)

                                    <option
                                        value="{{ $value }}"
                                        @selected(
                                            $enquiry->status === $value
                                        )
                                    >
                                        {{ $label }}
                                    </option>

                                @endforeach

                            </select>


                            <button
                                type="submit"
                                class="mt-3
                                       w-full
                                       min-h-[44px]
                                       bg-[#032B55]
                                       hover:bg-[#D71920]
                                       text-white
                                       text-[9px]
                                       uppercase
                                       tracking-wide
                                       font-bold
                                       transition"
                            >
                                Update Status
                            </button>

                        </form>

                    </div>


                    @if($enquiry->status !== 'closed')

    <a
        href="{{ route(
            'admin.quotations.create',
            $enquiry
        ) }}"
        class="w-full
               min-h-[46px]
               px-5
               flex
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
            width="16"
            height="16"
            viewBox="0 0 24 24"
            fill="none"
            stroke="currentColor"
            stroke-width="2"
        >
            <path d="M12 2v20"/>
            <path d="M17 5H9.5a3.5 3.5 0 0 0 0 7h5a3.5 3.5 0 0 1 0 7H6"/>
        </svg>

        Create Quotation

    </a>

@endif



                    {{-- =========================================
                         CUSTOMER CONTACT
                    ========================================== --}}

                    <div
                        class="mt-5
                               bg-[#032B55]
                               p-5
                               sm:p-6"
                    >

                        <p
                            class="text-[#D7A93A]
                                   text-[9px]
                                   uppercase
                                   tracking-[0.15em]
                                   font-bold"
                        >
                            Customer Contact
                        </p>


                        <h3
                            class="mt-2
                                   text-lg
                                   font-extrabold
                                   text-white"
                        >
                            Contact Customer
                        </h3>


                        <p
                            class="mt-2
                                   text-[10px]
                                   leading-5
                                   text-white/50"
                        >
                            Respond to the customer directly
                            by email or phone.
                        </p>



                        <a
                            href="mailto:{{ $enquiry->email }}"
                            class="mt-5
                                   w-full
                                   min-h-[42px]
                                   flex
                                   items-center
                                   justify-center
                                   bg-white
                                   hover:bg-[#D71920]
                                   text-[#032B55]
                                   hover:text-white
                                   text-[9px]
                                   uppercase
                                   tracking-wide
                                   font-bold
                                   transition"
                        >
                            Send Email
                        </a>



                        <a
                            href="tel:{{ $enquiry->phone }}"
                            class="mt-3
                                   w-full
                                   min-h-[42px]
                                   flex
                                   items-center
                                   justify-center
                                   border
                                   border-white/25
                                   text-white
                                   hover:bg-white
                                   hover:text-[#032B55]
                                   text-[9px]
                                   uppercase
                                   tracking-wide
                                   font-bold
                                   transition"
                        >
                            Call Customer
                        </a>

                    </div>



                    {{-- =========================================
                         ENQUIRY INFORMATION
                    ========================================== --}}

                    <div
                        class="mt-5
                               bg-white
                               border
                               border-slate-200
                               p-5
                               sm:p-6"
                    >

                        <p
                            class="text-[9px]
                                   uppercase
                                   tracking-[0.15em]
                                   font-bold
                                   text-[#D71920]"
                        >
                            Record Information
                        </p>


                        <div class="mt-4 space-y-4">

                            <div
                                class="flex
                                       items-center
                                       justify-between
                                       gap-4"
                            >

                                <span
                                    class="text-[9px]
                                           uppercase
                                           tracking-wide
                                           text-slate-400"
                                >
                                    Enquiry ID
                                </span>

                                <span
                                    class="text-[10px]
                                           font-bold
                                           text-[#073B66]"
                                >
                                    #{{ str_pad(
                                        $enquiry->id,
                                        5,
                                        '0',
                                        STR_PAD_LEFT
                                    ) }}
                                </span>

                            </div>


                            <div
                                class="flex
                                       items-center
                                       justify-between
                                       gap-4"
                            >

                                <span
                                    class="text-[9px]
                                           uppercase
                                           tracking-wide
                                           text-slate-400"
                                >
                                    Submitted
                                </span>

                                <span
                                    class="text-[10px]
                                           font-semibold
                                           text-slate-600"
                                >
                                    {{ $enquiry->created_at->format('d M Y') }}
                                </span>

                            </div>


                            <div
                                class="flex
                                       items-center
                                       justify-between
                                       gap-4"
                            >

                                <span
                                    class="text-[9px]
                                           uppercase
                                           tracking-wide
                                           text-slate-400"
                                >
                                    Quantity
                                </span>

                                <span
                                    class="text-[10px]
                                           font-semibold
                                           text-slate-600"
                                >
                                    {{ $enquiry->quantity }}
                                </span>

                            </div>

                        </div>

                    </div>



                    {{-- =========================================
                         DELETE
                    ========================================== --}}

                    <div
                        class="mt-5
                               bg-white
                               border
                               border-red-100
                               p-5
                               sm:p-6"
                    >

                        <p
                            class="text-[9px]
                                   uppercase
                                   tracking-[0.15em]
                                   font-bold
                                   text-red-500"
                        >
                            Danger Zone
                        </p>


                        <p
                            class="mt-2
                                   text-[10px]
                                   leading-5
                                   text-slate-400"
                        >
                            Permanently remove this enquiry
                            from the admin system.
                        </p>


                        <form
                            action="{{ route(
                                'admin.enquiries.destroy',
                                $enquiry
                            ) }}"
                            method="POST"
                            class="mt-4"
                            onsubmit="return confirm(
                                'Are you sure you want to permanently delete this enquiry?'
                            )"
                        >

                            @csrf
                            @method('DELETE')


                            <button
                                type="submit"
                                class="w-full
                                       min-h-[42px]
                                       border
                                       border-red-200
                                       text-red-600
                                       hover:bg-red-600
                                       hover:border-red-600
                                       hover:text-white
                                       text-[9px]
                                       uppercase
                                       tracking-wide
                                       font-bold
                                       transition"
                            >
                                Delete Enquiry
                            </button>

                        </form>

                    </div>

                </div>

            </aside>

        </div>

    </div>

</section>

@endsection

