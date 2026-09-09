
@extends('layouts.admin')


@section('title', 'Dashboard | ASEW Admin')

@section('page-title', 'Dashboard')


@section('content')

<div
    class="p-4
           sm:p-6
           lg:p-8"
>

    <div
        class="max-w-[1500px]
               mx-auto"
    >

        {{-- =====================================================
             PAGE INTRO
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
                    Administration
                </p>


                <h1
                    class="mt-1
                           text-2xl
                           sm:text-3xl
                           font-extrabold
                           text-[#073B66]"
                >
                    ASEW Dashboard
                </h1>


                <p
                    class="mt-2
                           max-w-2xl
                           text-[11px]
                           sm:text-[12px]
                           leading-6
                           text-slate-400"
                >
                    Monitor products, customer enquiries,
                    quotations and catalogue activity from
                    one central dashboard.
                </p>

            </div>



            <div
                class="flex
                       flex-wrap
                       gap-3"
            >

                <a
                    href="{{ route('admin.products.create') }}"
                    class="min-h-[44px]
                           px-5
                           inline-flex
                           items-center
                           justify-center
                           bg-[#032B55]
                           hover:bg-[#073B66]
                           text-white
                           text-[9px]
                           uppercase
                           tracking-wide
                           font-bold
                           transition"
                >
                    + Add Product
                </a>


                <a
                    href="{{ route('admin.enquiries.index') }}"
                    class="min-h-[44px]
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
                    View Enquiries
                </a>

            </div>

        </div>



        {{-- =====================================================
             STAT CARDS
        ====================================================== --}}

        <div
            class="grid
                   grid-cols-1
                   sm:grid-cols-2
                   xl:grid-cols-4
                   gap-4
                   mt-7"
        >

            {{-- TOTAL PRODUCTS --}}

            <div
                class="bg-white
                       border
                       border-slate-200
                       p-5"
            >

                <div
                    class="flex
                           items-start
                           justify-between
                           gap-4"
                >

                    <div>

                        <p
                            class="text-[9px]
                                   uppercase
                                   tracking-wide
                                   font-bold
                                   text-slate-400"
                        >
                            Total Products
                        </p>


                        <p
                            class="mt-3
                                   text-3xl
                                   font-extrabold
                                   text-[#073B66]"
                        >
                            {{ $stats['total_products'] }}
                        </p>


                        <p
                            class="mt-2
                                   text-[10px]
                                   text-slate-400"
                        >
                            Complete catalogue
                        </p>

                    </div>


                    <div
                        class="w-11
                               h-11
                               flex
                               items-center
                               justify-center
                               bg-[#032B55]/5
                               text-[#032B55]"
                    >
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

            </div>



            {{-- ACTIVE PRODUCTS --}}

            <div
                class="bg-white
                       border
                       border-slate-200
                       p-5"
            >

                <div
                    class="flex
                           items-start
                           justify-between
                           gap-4"
                >

                    <div>

                        <p
                            class="text-[9px]
                                   uppercase
                                   tracking-wide
                                   font-bold
                                   text-slate-400"
                        >
                            Active Products
                        </p>


                        <p
                            class="mt-3
                                   text-3xl
                                   font-extrabold
                                   text-emerald-600"
                        >
                            {{ $stats['active_products'] }}
                        </p>


                        <p
                            class="mt-2
                                   text-[10px]
                                   text-slate-400"
                        >
                            Visible publicly
                        </p>

                    </div>


                    <div
                        class="w-11
                               h-11
                               flex
                               items-center
                               justify-center
                               bg-emerald-50
                               text-emerald-600"
                    >
                        <svg
                            xmlns="http://www.w3.org/2000/svg"
                            width="19"
                            height="19"
                            viewBox="0 0 24 24"
                            fill="none"
                            stroke="currentColor"
                            stroke-width="2"
                        >
                            <path d="M20 6 9 17l-5-5"/>
                        </svg>
                    </div>

                </div>

            </div>



            {{-- TOTAL ENQUIRIES --}}

            <div
                class="bg-white
                       border
                       border-slate-200
                       p-5"
            >

                <div
                    class="flex
                           items-start
                           justify-between
                           gap-4"
                >

                    <div>

                        <p
                            class="text-[9px]
                                   uppercase
                                   tracking-wide
                                   font-bold
                                   text-slate-400"
                        >
                            Total Enquiries
                        </p>


                        <p
                            class="mt-3
                                   text-3xl
                                   font-extrabold
                                   text-[#073B66]"
                        >
                            {{ $stats['total_enquiries'] }}
                        </p>


                        <p
                            class="mt-2
                                   text-[10px]
                                   text-slate-400"
                        >
                            Customer requests
                        </p>

                    </div>


                    <div
                        class="w-11
                               h-11
                               flex
                               items-center
                               justify-center
                               bg-blue-50
                               text-blue-600"
                    >
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

            </div>



            {{-- NEW ENQUIRIES --}}

            <div
                class="relative
                       overflow-hidden
                       bg-[#032B55]
                       p-5
                       text-white"
            >

                <div
                    class="absolute
                           -right-8
                           -top-8
                           w-28
                           h-28
                           rounded-full
                           bg-white/5"
                ></div>


                <div class="relative z-10">

                    <p
                        class="text-[9px]
                               uppercase
                               tracking-wide
                               font-bold
                               text-white/60"
                    >
                        New Enquiries
                    </p>


                    <p
                        class="mt-3
                               text-3xl
                               font-extrabold"
                    >
                        {{ $stats['new_enquiries'] }}
                    </p>


                    <a
                        href="{{ route(
                            'admin.enquiries.index',
                            ['status' => 'new']
                        ) }}"
                        class="inline-flex
                               mt-3
                               text-[9px]
                               uppercase
                               tracking-wide
                               font-bold
                               text-[#D7A93A]
                               hover:text-white
                               transition"
                    >
                        Review New Enquiries →
                    </a>

                </div>

            </div>

        </div>



        {{-- =====================================================
             ANALYTICS + STATUS
        ====================================================== --}}

        <div
            class="grid
                   grid-cols-1
                   xl:grid-cols-[1.55fr_.75fr]
                   gap-5
                   mt-5"
        >

            {{-- ENQUIRY PIPELINE --}}

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
                           border-slate-200
                           flex
                           items-center
                           justify-between
                           gap-3"
                >

                    <div>

                        <p
                            class="text-[9px]
                                   uppercase
                                   tracking-[0.15em]
                                   font-bold
                                   text-[#D71920]"
                        >
                            Enquiry Analytics
                        </p>

                        <h2
                            class="mt-1
                                   text-lg
                                   font-extrabold
                                   text-[#073B66]"
                        >
                            Sales Enquiry Pipeline
                        </h2>

                    </div>


                    <a
                        href="{{ route('admin.enquiries.index') }}"
                        class="text-[9px]
                               uppercase
                               font-bold
                               text-[#073B66]
                               hover:text-[#D71920]"
                    >
                        View All
                    </a>

                </div>



                <div class="p-5 sm:p-6">

                    {{-- NEW --}}

                    <div>

                        <div
                            class="flex
                                   items-center
                                   justify-between
                                   gap-3"
                        >

                            <div
                                class="flex
                                       items-center
                                       gap-2"
                            >

                                <span
                                    class="w-2.5
                                           h-2.5
                                           rounded-full
                                           bg-blue-500"
                                ></span>

                                <span
                                    class="text-[10px]
                                           uppercase
                                           tracking-wide
                                           font-bold
                                           text-slate-500"
                                >
                                    New
                                </span>

                            </div>


                            <span
                                class="text-sm
                                       font-extrabold
                                       text-[#073B66]"
                            >
                                {{ $enquiryAnalytics['new'] }}
                            </span>

                        </div>


                        <div
                            class="mt-3
                                   h-2
                                   bg-slate-100
                                   overflow-hidden"
                        >

                            <div
                                class="h-full
                                       bg-blue-500"
                                style="
                                    width:
                                    {{
                                        ($enquiryAnalytics['new'] /
                                        $maxEnquiryValue) * 100
                                    }}%
                                "
                            ></div>

                        </div>

                    </div>



                    {{-- CONTACTED --}}

                    <div class="mt-6">

                        <div
                            class="flex
                                   items-center
                                   justify-between
                                   gap-3"
                        >

                            <div
                                class="flex
                                       items-center
                                       gap-2"
                            >

                                <span
                                    class="w-2.5
                                           h-2.5
                                           rounded-full
                                           bg-amber-500"
                                ></span>

                                <span
                                    class="text-[10px]
                                           uppercase
                                           tracking-wide
                                           font-bold
                                           text-slate-500"
                                >
                                    Contacted
                                </span>

                            </div>


                            <span
                                class="text-sm
                                       font-extrabold
                                       text-[#073B66]"
                            >
                                {{ $enquiryAnalytics['contacted'] }}
                            </span>

                        </div>


                        <div
                            class="mt-3
                                   h-2
                                   bg-slate-100
                                   overflow-hidden"
                        >

                            <div
                                class="h-full
                                       bg-amber-500"
                                style="
                                    width:
                                    {{
                                        ($enquiryAnalytics['contacted'] /
                                        $maxEnquiryValue) * 100
                                    }}%
                                "
                            ></div>

                        </div>

                    </div>



                    {{-- QUOTED --}}

                    <div class="mt-6">

                        <div
                            class="flex
                                   items-center
                                   justify-between
                                   gap-3"
                        >

                            <div
                                class="flex
                                       items-center
                                       gap-2"
                            >

                                <span
                                    class="w-2.5
                                           h-2.5
                                           rounded-full
                                           bg-purple-500"
                                ></span>

                                <span
                                    class="text-[10px]
                                           uppercase
                                           tracking-wide
                                           font-bold
                                           text-slate-500"
                                >
                                    Quoted
                                </span>

                            </div>


                            <span
                                class="text-sm
                                       font-extrabold
                                       text-[#073B66]"
                            >
                                {{ $enquiryAnalytics['quoted'] }}
                            </span>

                        </div>


                        <div
                            class="mt-3
                                   h-2
                                   bg-slate-100
                                   overflow-hidden"
                        >

                            <div
                                class="h-full
                                       bg-purple-500"
                                style="
                                    width:
                                    {{
                                        ($enquiryAnalytics['quoted'] /
                                        $maxEnquiryValue) * 100
                                    }}%
                                "
                            ></div>

                        </div>

                    </div>



                    {{-- CLOSED --}}

                    <div class="mt-6">

                        <div
                            class="flex
                                   items-center
                                   justify-between
                                   gap-3"
                        >

                            <div
                                class="flex
                                       items-center
                                       gap-2"
                            >

                                <span
                                    class="w-2.5
                                           h-2.5
                                           rounded-full
                                           bg-emerald-500"
                                ></span>

                                <span
                                    class="text-[10px]
                                           uppercase
                                           tracking-wide
                                           font-bold
                                           text-slate-500"
                                >
                                    Closed
                                </span>

                            </div>


                            <span
                                class="text-sm
                                       font-extrabold
                                       text-[#073B66]"
                            >
                                {{ $enquiryAnalytics['closed'] }}
                            </span>

                        </div>


                        <div
                            class="mt-3
                                   h-2
                                   bg-slate-100
                                   overflow-hidden"
                        >

                            <div
                                class="h-full
                                       bg-emerald-500"
                                style="
                                    width:
                                    {{
                                        ($enquiryAnalytics['closed'] /
                                        $maxEnquiryValue) * 100
                                    }}%
                                "
                            ></div>

                        </div>

                    </div>

                </div>

            </div>



            {{-- STATUS SUMMARY --}}

            <div
                class="bg-white
                       border
                       border-slate-200"
            >

                <div
                    class="px-5
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
                        Quick Summary
                    </p>

                    <h2
                        class="mt-1
                               text-lg
                               font-extrabold
                               text-[#073B66]"
                    >
                        Current Status
                    </h2>

                </div>


                <div class="p-5">

                    <div
                        class="grid
                               grid-cols-2
                               gap-3"
                    >

                        <a
                            href="{{ route(
                                'admin.enquiries.index',
                                ['status' => 'new']
                            ) }}"
                            class="border
                                   border-slate-200
                                   p-4
                                   hover:border-blue-400
                                   transition"
                        >

                            <p
                                class="text-2xl
                                       font-extrabold
                                       text-blue-600"
                            >
                                {{ $stats['new_enquiries'] }}
                            </p>

                            <p
                                class="mt-1
                                       text-[9px]
                                       uppercase
                                       font-bold
                                       text-slate-400"
                            >
                                New
                            </p>

                        </a>


                        <a
                            href="{{ route(
                                'admin.enquiries.index',
                                ['status' => 'contacted']
                            ) }}"
                            class="border
                                   border-slate-200
                                   p-4
                                   hover:border-amber-400
                                   transition"
                        >

                            <p
                                class="text-2xl
                                       font-extrabold
                                       text-amber-500"
                            >
                                {{ $stats['contacted_enquiries'] }}
                            </p>

                            <p
                                class="mt-1
                                       text-[9px]
                                       uppercase
                                       font-bold
                                       text-slate-400"
                            >
                                Contacted
                            </p>

                        </a>


                        <a
                            href="{{ route(
                                'admin.enquiries.index',
                                ['status' => 'quoted']
                            ) }}"
                            class="border
                                   border-slate-200
                                   p-4
                                   hover:border-purple-400
                                   transition"
                        >

                            <p
                                class="text-2xl
                                       font-extrabold
                                       text-purple-600"
                            >
                                {{ $stats['quoted_enquiries'] }}
                            </p>

                            <p
                                class="mt-1
                                       text-[9px]
                                       uppercase
                                       font-bold
                                       text-slate-400"
                            >
                                Quoted
                            </p>

                        </a>


                        <a
                            href="{{ route(
                                'admin.enquiries.index',
                                ['status' => 'closed']
                            ) }}"
                            class="border
                                   border-slate-200
                                   p-4
                                   hover:border-emerald-400
                                   transition"
                        >

                            <p
                                class="text-2xl
                                       font-extrabold
                                       text-emerald-600"
                            >
                                {{ $stats['closed_enquiries'] }}
                            </p>

                            <p
                                class="mt-1
                                       text-[9px]
                                       uppercase
                                       font-bold
                                       text-slate-400"
                            >
                                Closed
                            </p>

                        </a>

                    </div>



                    <div
                        class="mt-4
                               p-4
                               bg-[#032B55]
                               text-white"
                    >

                        <p
                            class="text-[9px]
                                   uppercase
                                   tracking-wide
                                   font-bold
                                   text-white/50"
                        >
                            Inactive Products
                        </p>

                        <div
                            class="mt-2
                                   flex
                                   items-center
                                   justify-between"
                        >

                            <span
                                class="text-2xl
                                       font-extrabold"
                            >
                                {{ $stats['inactive_products'] }}
                            </span>


                            <a
                                href="{{ route(
                                    'admin.products.index',
                                    ['status' => 'inactive']
                                ) }}"
                                class="text-[9px]
                                       uppercase
                                       font-bold
                                       text-[#D7A93A]"
                            >
                                Manage →
                            </a>

                        </div>

                    </div>

                </div>

            </div>

        </div>



        {{-- =====================================================
             RECENT ENQUIRIES
        ====================================================== --}}

        <div
            class="bg-white
                   border
                   border-slate-200
                   mt-5"
        >

            <div
                class="px-5
                       sm:px-6
                       py-5
                       border-b
                       border-slate-200
                       flex
                       items-center
                       justify-between
                       gap-3"
            >

                <div>

                    <p
                        class="text-[9px]
                               uppercase
                               tracking-[0.15em]
                               font-bold
                               text-[#D71920]"
                    >
                        Recent Activity
                    </p>

                    <h2
                        class="mt-1
                               text-lg
                               font-extrabold
                               text-[#073B66]"
                    >
                        Latest Product Enquiries
                    </h2>

                </div>


                <a
                    href="{{ route('admin.enquiries.index') }}"
                    class="text-[9px]
                           uppercase
                           font-bold
                           text-[#073B66]
                           hover:text-[#D71920]"
                >
                    View All
                </a>

            </div>



            <div class="overflow-x-auto">

                <table
                    class="w-full
                           min-w-[950px]
                           text-left"
                >

                    <thead
                        class="bg-slate-50
                               border-b
                               border-slate-200"
                    >

                        <tr>

                            <th class="px-5 py-3 text-[9px] uppercase tracking-wide text-slate-400">
                                ID
                            </th>

                            <th class="px-5 py-3 text-[9px] uppercase tracking-wide text-slate-400">
                                Customer
                            </th>

                            <th class="px-5 py-3 text-[9px] uppercase tracking-wide text-slate-400">
                                Product
                            </th>

                            <th class="px-5 py-3 text-[9px] uppercase tracking-wide text-slate-400">
                                Status
                            </th>

                            <th class="px-5 py-3 text-[9px] uppercase tracking-wide text-slate-400">
                                Date
                            </th>

                            <th class="px-5 py-3 text-[9px] uppercase tracking-wide text-slate-400 text-right">
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


                            <tr
                                class="hover:bg-slate-50
                                       transition"
                            >

                                <td class="px-5 py-4">

                                    <span
                                        class="text-[10px]
                                               font-bold
                                               text-slate-400"
                                    >
                                        #{{ str_pad(
                                            $enquiry->id,
                                            5,
                                            '0',
                                            STR_PAD_LEFT
                                        ) }}
                                    </span>

                                </td>


                                <td class="px-5 py-4">

                                    <p
                                        class="text-[11px]
                                               font-bold
                                               text-[#073B66]"
                                    >
                                        {{ $enquiry->name }}
                                    </p>

                                    <p
                                        class="mt-1
                                               text-[9px]
                                               text-slate-400"
                                    >
                                        {{ $enquiry->company ?: $enquiry->email }}
                                    </p>

                                </td>


                                <td class="px-5 py-4">

                                    <p
                                        class="max-w-[260px]
                                               truncate
                                               text-[10px]
                                               font-semibold
                                               text-slate-600"
                                    >
                                        {{ $enquiry->product_name
                                            ?: 'General Enquiry' }}
                                    </p>

                                    @if($enquiry->product_code)

                                        <p
                                            class="mt-1
                                                   text-[8px]
                                                   font-bold
                                                   text-[#D71920]"
                                        >
                                            {{ $enquiry->product_code }}
                                        </p>

                                    @endif

                                </td>


                                <td class="px-5 py-4">

                                    <span
                                        class="inline-flex
                                               px-2.5
                                               py-1.5
                                               text-[8px]
                                               uppercase
                                               tracking-wide
                                               font-bold
                                               {{ $statusClass }}"
                                    >
                                        {{ ucfirst($enquiry->status) }}
                                    </span>

                                </td>


                                <td class="px-5 py-4">

                                    <p
                                        class="text-[9px]
                                               text-slate-500"
                                    >
                                        {{ $enquiry->created_at->format('d M Y') }}
                                    </p>

                                    <p
                                        class="mt-1
                                               text-[8px]
                                               text-slate-400"
                                    >
                                        {{ $enquiry->created_at->format('h:i A') }}
                                    </p>

                                </td>


                                <td
                                    class="px-5
                                           py-4
                                           text-right"
                                >

                                    <a
                                        href="{{ route(
                                            'admin.enquiries.show',
                                            $enquiry
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
                                    colspan="6"
                                    class="px-6
                                           py-12
                                           text-center
                                           text-[11px]
                                           text-slate-400"
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
             RECENT PRODUCTS
        ====================================================== --}}

        <div
            class="mt-5
                   bg-white
                   border
                   border-slate-200"
        >

            <div
                class="px-5
                       sm:px-6
                       py-5
                       border-b
                       border-slate-200
                       flex
                       items-center
                       justify-between
                       gap-3"
            >

                <div>

                    <p
                        class="text-[9px]
                               uppercase
                               tracking-[0.15em]
                               font-bold
                               text-[#D71920]"
                    >
                        Product Catalogue
                    </p>

                    <h2
                        class="mt-1
                               text-lg
                               font-extrabold
                               text-[#073B66]"
                    >
                        Recently Added Products
                    </h2>

                </div>


                <a
                    href="{{ route('admin.products.index') }}"
                    class="text-[9px]
                           uppercase
                           font-bold
                           text-[#073B66]
                           hover:text-[#D71920]"
                >
                    Manage Products
                </a>

            </div>



            <div
                class="grid
                       grid-cols-1
                       sm:grid-cols-2
                       xl:grid-cols-3
                       gap-px
                       bg-slate-200"
            >

                @forelse($recentProducts as $product)

                    <div
                        class="bg-white
                               p-5
                               flex
                               items-center
                               gap-4"
                    >

                        <div
                            class="w-[70px]
                                   h-[65px]
                                   shrink-0
                                   border
                                   border-slate-200
                                   bg-slate-50
                                   flex
                                   items-center
                                   justify-center"
                        >

                            @if($product->image)

                                <img
                                    src="{{ asset($product->image) }}"
                                    alt="{{ $product->name }}"
                                    class="max-w-full
                                           max-h-full
                                           object-contain
                                           p-2"
                                >

                            @else

                                <span
                                    class="text-[8px]
                                           text-slate-300"
                                >
                                    No Image
                                </span>

                            @endif

                        </div>



                        <div class="min-w-0 flex-1">

                            <p
                                class="truncate
                                       text-[11px]
                                       font-bold
                                       text-[#073B66]"
                            >
                                {{ $product->name }}
                            </p>


                            <p
                                class="mt-1
                                       text-[9px]
                                       text-slate-400"
                            >
                                {{ $product->category }}
                            </p>


                            <div
                                class="mt-2
                                       flex
                                       items-center
                                       justify-between
                                       gap-2"
                            >

                                <span
                                    class="text-[8px]
                                           uppercase
                                           font-bold
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
                                    class="text-[8px]
                                           uppercase
                                           font-bold
                                           text-[#D71920]"
                                >
                                    Edit →
                                </a>

                            </div>

                        </div>

                    </div>

                @empty

                    <div
                        class="col-span-full
                               bg-white
                               px-6
                               py-12
                               text-center
                               text-[11px]
                               text-slate-400"
                    >
                        No products available.
                    </div>

                @endforelse

            </div>

        </div>

    </div>

</div>

@endsection

