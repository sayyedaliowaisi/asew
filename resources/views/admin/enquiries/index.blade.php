
@extends('layouts.admin')

@section('title', 'Enquiries | ASEW Admin')

@section('page-title', 'Product Enquiries')

@section('content')

<section class="p-4 sm:p-6 lg:p-8">

    <div class="max-w-[1500px] mx-auto">

        {{-- =====================================================
             PAGE HEADING
        ====================================================== --}}

        <div
            class="flex
                   flex-col
                   md:flex-row
                   md:items-center
                   md:justify-between
                   gap-4"
        >

            <div>

                <p
                    class="text-[9px]
                           uppercase
                           tracking-[0.18em]
                           font-bold
                           text-[#D71920]"
                >
                    Customer Requests
                </p>

                <h1
                    class="mt-2
                           text-2xl
                           sm:text-3xl
                           font-extrabold
                           text-[#073B66]"
                >
                    Product Enquiries
                </h1>

                <p
                    class="mt-2
                           max-w-[650px]
                           text-[11px]
                           sm:text-[12px]
                           leading-5
                           text-slate-400"
                >
                    Manage customer product enquiries,
                    quotation requests and follow-up status.
                </p>

            </div>


            <div class="flex flex-wrap gap-3">

                <a
                    href="{{ route('admin.products.index') }}"
                    class="min-h-[42px]
                           px-5
                           inline-flex
                           items-center
                           justify-center
                           border
                           border-slate-200
                           text-[#073B66]
                           hover:border-[#D71920]
                           hover:text-[#D71920]
                           text-[9px]
                           uppercase
                           tracking-wide
                           font-bold
                           transition"
                >
                    Manage Products
                </a>

                <a
                    href="{{ route('quote.create') }}"
                    target="_blank"
                    class="min-h-[42px]
                           px-5
                           inline-flex
                           items-center
                           justify-center
                           bg-[#D71920]
                           hover:bg-[#032B55]
                           text-white
                           text-[9px]
                           uppercase
                           tracking-wide
                           font-bold
                           transition"
                >
                    View Quote Form ↗
                </a>

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
             STATISTICS
        ====================================================== --}}

        <div
            class="grid
                   grid-cols-2
                   md:grid-cols-3
                   xl:grid-cols-5
                   gap-4
                   mt-6"
        >

            @php

                $cards = [

                    [
                        'label' => 'Total Enquiries',
                        'count' => $stats['total'],
                        'status' => null,
                    ],

                    [
                        'label' => 'New',
                        'count' => $stats['new'],
                        'status' => 'new',
                    ],

                    [
                        'label' => 'Contacted',
                        'count' => $stats['contacted'],
                        'status' => 'contacted',
                    ],

                    [
                        'label' => 'Quoted',
                        'count' => $stats['quoted'],
                        'status' => 'quoted',
                    ],

                    [
                        'label' => 'Closed',
                        'count' => $stats['closed'],
                        'status' => 'closed',
                    ],

                ];

            @endphp


            @foreach($cards as $card)

                <a
                    href="{{ route(
                        'admin.enquiries.index',
                        $card['status']
                            ? ['status' => $card['status']]
                            : []
                    ) }}"
                    class="group
                           bg-white
                           border
                           border-slate-200
                           p-5
                           hover:border-[#073B66]
                           hover:shadow-[0_8px_25px_rgba(3,43,85,.06)]
                           transition"
                >

                    <p
                        class="text-[9px]
                               sm:text-[10px]
                               uppercase
                               tracking-[0.14em]
                               font-bold
                               text-slate-400"
                    >
                        {{ $card['label'] }}
                    </p>


                    <div
                        class="mt-3
                               flex
                               items-end
                               justify-between
                               gap-3"
                    >

                        <p
                            class="text-[27px]
                                   sm:text-[30px]
                                   leading-none
                                   font-extrabold
                                   text-[#073B66]"
                        >
                            {{ $card['count'] }}
                        </p>


                        <span
                            class="w-7
                                   h-[2px]
                                   bg-[#D71920]
                                   transition-all
                                   group-hover:w-10"
                        ></span>

                    </div>

                </a>

            @endforeach

        </div>



        {{-- =====================================================
             FILTERS
        ====================================================== --}}

        <form
            method="GET"
            action="{{ route('admin.enquiries.index') }}"
            class="mt-6
                   bg-white
                   border
                   border-slate-200
                   p-4
                   sm:p-5"
        >

            <div
                class="grid
                       grid-cols-1
                       md:grid-cols-2
                       xl:grid-cols-[1fr_200px_auto_auto]
                       gap-3"
            >

                {{-- SEARCH --}}

                <input
                    type="search"
                    name="search"
                    value="{{ request('search') }}"
                    placeholder="Search customer, company, email, phone or product..."
                    class="w-full
                           h-[44px]
                           px-4
                           border
                           border-slate-200
                           bg-white
                           text-[12px]
                           text-slate-700
                           outline-none
                           focus:border-[#073B66]
                           transition"
                >



                {{-- STATUS --}}

                <select
                    name="status"
                    class="w-full
                           h-[44px]
                           px-3
                           border
                           border-slate-200
                           bg-white
                           text-[12px]
                           text-slate-600
                           outline-none
                           focus:border-[#073B66]"
                >

                    <option value="">
                        All Status
                    </option>

                    <option
                        value="new"
                        @selected(request('status') === 'new')
                    >
                        New
                    </option>

                    <option
                        value="contacted"
                        @selected(request('status') === 'contacted')
                    >
                        Contacted
                    </option>

                    <option
                        value="quoted"
                        @selected(request('status') === 'quoted')
                    >
                        Quoted
                    </option>

                    <option
                        value="closed"
                        @selected(request('status') === 'closed')
                    >
                        Closed
                    </option>

                </select>



                {{-- FILTER --}}

                <button
                    type="submit"
                    class="h-[44px]
                           px-5
                           bg-[#032B55]
                           hover:bg-[#D71920]
                           text-white
                           text-[10px]
                           uppercase
                           tracking-wide
                           font-bold
                           transition"
                >
                    Filter
                </button>



                {{-- RESET --}}

                <a
                    href="{{ route('admin.enquiries.index') }}"
                    class="h-[44px]
                           px-5
                           flex
                           items-center
                           justify-center
                           border
                           border-slate-200
                           text-[10px]
                           uppercase
                           tracking-wide
                           font-bold
                           text-slate-500
                           hover:border-[#D71920]
                           hover:text-[#D71920]
                           transition"
                >
                    Reset
                </a>

            </div>

        </form>



        {{-- =====================================================
             RESULTS SUMMARY
        ====================================================== --}}

        <div
            class="mt-4
                   flex
                   flex-col
                   sm:flex-row
                   sm:items-center
                   sm:justify-between
                   gap-2"
        >

            <p
                class="text-[10px]
                       text-slate-400"
            >
                Showing

                <span
                    class="font-bold
                           text-[#073B66]"
                >
                    {{ $enquiries->count() }}
                </span>

                enquiries on this page.
            </p>


            @if(request('search') || request('status'))

                <p
                    class="text-[9px]
                           uppercase
                           tracking-wide
                           font-bold
                           text-[#D71920]"
                >
                    Filtered Results
                </p>

            @endif

        </div>



        {{-- =====================================================
             ENQUIRIES TABLE
        ====================================================== --}}

        <div
            class="mt-4
                   bg-white
                   border
                   border-slate-200
                   overflow-hidden"
        >

            <div class="overflow-x-auto">

                <table class="w-full min-w-[1050px]">

                    {{-- HEADER --}}

                    <thead class="bg-[#032B55]">

                        <tr>

                            <th
                                class="px-5
                                       py-4
                                       text-left
                                       text-[9px]
                                       uppercase
                                       tracking-wider
                                       font-bold
                                       text-white/70"
                            >
                                Enquiry
                            </th>


                            <th
                                class="px-5
                                       py-4
                                       text-left
                                       text-[9px]
                                       uppercase
                                       tracking-wider
                                       font-bold
                                       text-white/70"
                            >
                                Customer
                            </th>


                            <th
                                class="px-5
                                       py-4
                                       text-left
                                       text-[9px]
                                       uppercase
                                       tracking-wider
                                       font-bold
                                       text-white/70"
                            >
                                Product
                            </th>


                            <th
                                class="px-5
                                       py-4
                                       text-left
                                       text-[9px]
                                       uppercase
                                       tracking-wider
                                       font-bold
                                       text-white/70"
                            >
                                Contact
                            </th>


                            <th
                                class="px-5
                                       py-4
                                       text-left
                                       text-[9px]
                                       uppercase
                                       tracking-wider
                                       font-bold
                                       text-white/70"
                            >
                                Status
                            </th>


                            <th
                                class="px-5
                                       py-4
                                       text-left
                                       text-[9px]
                                       uppercase
                                       tracking-wider
                                       font-bold
                                       text-white/70"
                            >
                                Date
                            </th>


                            <th
                                class="px-5
                                       py-4
                                       text-right
                                       text-[9px]
                                       uppercase
                                       tracking-wider
                                       font-bold
                                       text-white/70"
                            >
                                Action
                            </th>

                        </tr>

                    </thead>



                    {{-- BODY --}}

                    <tbody class="divide-y divide-slate-100">

                        @forelse($enquiries as $enquiry)

                            <tr
                                class="hover:bg-slate-50
                                       transition"
                            >

                                {{-- ID --}}

                                <td class="px-5 py-4">

                                    <span
                                        class="inline-flex
                                               px-2.5
                                               py-1
                                               bg-slate-50
                                               border
                                               border-slate-200
                                               text-[9px]
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

                                </td>



                                {{-- CUSTOMER --}}

                                <td class="px-5 py-4">

                                    <p
                                        class="text-[12px]
                                               font-bold
                                               text-slate-700"
                                    >
                                        {{ $enquiry->name }}
                                    </p>


                                    @if($enquiry->company)

                                        <p
                                            class="mt-1
                                                   max-w-[180px]
                                                   text-[10px]
                                                   text-slate-400"
                                        >
                                            {{ $enquiry->company }}
                                        </p>

                                    @endif

                                </td>



                                {{-- PRODUCT --}}

                                <td class="px-5 py-4">

                                    <p
                                        class="max-w-[230px]
                                               text-[11px]
                                               font-semibold
                                               text-[#073B66]"
                                    >
                                        {{ $enquiry->product_name ?? 'General Enquiry' }}
                                    </p>


                                    @if($enquiry->product_code)

                                        <p
                                            class="mt-1
                                                   text-[9px]
                                                   font-semibold
                                                   text-[#D71920]"
                                        >
                                            {{ $enquiry->product_code }}
                                        </p>

                                    @endif


                                    @if($enquiry->product)

                                        <a
                                            href="{{ route(
                                                'products.show',
                                                $enquiry->product->slug
                                            ) }}"
                                            target="_blank"
                                            class="inline-flex
                                                   mt-2
                                                   text-[8px]
                                                   uppercase
                                                   tracking-wide
                                                   font-bold
                                                   text-slate-400
                                                   hover:text-[#D71920]
                                                   transition"
                                        >
                                            View Product ↗
                                        </a>

                                    @endif

                                </td>



                                {{-- CONTACT --}}

                                <td class="px-5 py-4">

                                    <a
                                        href="mailto:{{ $enquiry->email }}"
                                        class="block
                                               max-w-[220px]
                                               truncate
                                               text-[10px]
                                               text-slate-600
                                               hover:text-[#D71920]
                                               transition"
                                    >
                                        {{ $enquiry->email }}
                                    </a>


                                    <a
                                        href="tel:{{ $enquiry->phone }}"
                                        class="block
                                               mt-1
                                               text-[10px]
                                               text-slate-500
                                               hover:text-[#D71920]
                                               transition"
                                    >
                                        {{ $enquiry->phone }}
                                    </a>

                                </td>



                                {{-- STATUS --}}

                                <td class="px-5 py-4">

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
                                               gap-1.5
                                               px-2.5
                                               py-1
                                               border
                                               text-[8px]
                                               uppercase
                                               tracking-wide
                                               font-bold
                                               {{ $statusClass }}"
                                    >

                                        <span
                                            class="w-1.5
                                                   h-1.5
                                                   rounded-full
                                                   {{ $statusDot }}"
                                        ></span>

                                        {{ ucfirst($enquiry->status) }}

                                    </span>

                                </td>



                                {{-- DATE --}}

                                <td class="px-5 py-4">

                                    <p
                                        class="text-[10px]
                                               font-semibold
                                               text-slate-600"
                                    >
                                        {{ $enquiry->created_at->format('d M Y') }}
                                    </p>


                                    <p
                                        class="mt-1
                                               text-[9px]
                                               text-slate-400"
                                    >
                                        {{ $enquiry->created_at->format('h:i A') }}
                                    </p>

                                </td>



                                {{-- ACTION --}}

                                <td class="px-5 py-4 text-right">

                                    <a
                                        href="{{ route(
                                            'admin.enquiries.show',
                                            $enquiry
                                        ) }}"
                                        class="inline-flex
                                               items-center
                                               justify-center
                                               min-h-[34px]
                                               px-4
                                               bg-[#032B55]
                                               hover:bg-[#D71920]
                                               text-white
                                               text-[8px]
                                               uppercase
                                               tracking-wide
                                               font-bold
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
                                    class="px-5
                                           py-20
                                           text-center"
                                >

                                    <div
                                        class="mx-auto
                                               w-14
                                               h-14
                                               flex
                                               items-center
                                               justify-center
                                               border
                                               border-slate-200
                                               bg-slate-50
                                               text-xl
                                               text-slate-300"
                                    >
                                        ✉
                                    </div>


                                    <h3
                                        class="mt-4
                                               text-[15px]
                                               font-extrabold
                                               text-[#073B66]"
                                    >
                                        No Enquiries Found
                                    </h3>


                                    <p
                                        class="mt-2
                                               text-[10px]
                                               text-slate-400"
                                    >
                                        Customer product enquiries
                                        will appear here.
                                    </p>


                                    @if(request('search') || request('status'))

                                        <a
                                            href="{{ route('admin.enquiries.index') }}"
                                            class="inline-flex
                                                   mt-5
                                                   min-h-[40px]
                                                   px-5
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
                                            Clear Filters
                                        </a>

                                    @endif

                                </td>

                            </tr>

                        @endforelse

                    </tbody>

                </table>

            </div>



            {{-- =================================================
                 PAGINATION
            ================================================== --}}

            @if($enquiries->hasPages())

                <div
                    class="border-t
                           border-slate-200
                           p-4
                           sm:p-5"
                >
                    {{ $enquiries->links() }}
                </div>

            @endif

        </div>

    </div>

</section>

@endsection

