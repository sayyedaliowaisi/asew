@extends('layouts.app')

@section('title', $product->name . ' | ASEW')

@section('content')

{{-- =========================================================
     ASEW PRODUCT DETAILS
========================================================= --}}

<section class="bg-white">


    {{-- =====================================================
         HERO / BREADCRUMB
    ====================================================== --}}

    <section
        class="relative
               overflow-hidden
               bg-[#032B55]"
    >

        {{-- Background Grid --}}
        <div
            class="absolute
                   inset-0
                   opacity-[0.05]
                   pointer-events-none"
            style="
                background-image:
                    linear-gradient(rgba(255,255,255,.25) 1px, transparent 1px),
                    linear-gradient(90deg, rgba(255,255,255,.25) 1px, transparent 1px);
                background-size: 42px 42px;
            "
        ></div>


        <div
            class="absolute
                   -right-[170px]
                   -top-[220px]
                   w-[500px]
                   h-[500px]
                   border
                   border-white/[0.07]
                   rounded-full"
        ></div>


        <div
            class="relative
                   z-10
                   max-w-[1500px]
                   mx-auto
                   px-4 sm:px-6 lg:px-8
                   py-8 lg:py-10"
        >

            {{-- Breadcrumb --}}
            <div
                class="flex
                       items-center
                       flex-wrap
                       gap-2
                       text-[10px]
                       sm:text-[11px]
                       font-semibold"
            >

                <a
                    href="{{ route('home') }}"
                    class="text-white/50
                           hover:text-white
                           transition"
                >
                    HOME
                </a>

                <span class="text-white/30">/</span>

                <a
                    href="{{ route('products') }}"
                    class="text-white/50
                           hover:text-white
                           transition"
                >
                    PRODUCTS
                </a>

                <span class="text-white/30">/</span>

                <a
                    href="{{ route('products', ['category' => $product->category_slug]) }}"
                    class="text-white/50
                           hover:text-white
                           transition"
                >
                    {{ strtoupper($product->category) }}
                </a>

                <span class="text-white/30">/</span>

                <span class="text-[#D7A93A]">
                    {{ strtoupper($product->name) }}
                </span>

            </div>

        </div>

    </section>



    {{-- =====================================================
         MAIN PRODUCT AREA
    ====================================================== --}}

    <section
        class="bg-[#F5F7F9]
               py-10
               sm:py-12
               lg:py-16"
    >

        <div
            class="max-w-[1500px]
                   mx-auto
                   px-4 sm:px-6 lg:px-8"
        >

            <div
                class="grid
                       grid-cols-1
                       lg:grid-cols-12
                       gap-6
                       lg:gap-10"
            >


                {{-- =================================================
                     PRODUCT IMAGE
                ================================================== --}}

                <div class="lg:col-span-5">

                    <div
                        class="relative
                               bg-white
                               border
                               border-slate-200
                               min-h-[370px]
                               sm:min-h-[440px]
                               lg:min-h-[500px]
                               flex
                               items-center
                               justify-center
                               overflow-hidden
                               shadow-[0_8px_30px_rgba(3,43,85,0.06)]"
                    >

                        {{-- Red top line --}}
                        <div
                            class="absolute
                                   top-0
                                   left-0
                                   w-full
                                   h-[4px]
                                   bg-[#D71920]"
                        ></div>


                        {{-- Category --}}
                        <span
                            class="absolute
                                   top-5
                                   left-5
                                   bg-[#032B55]
                                   px-3
                                   py-1.5
                                   text-[9px]
                                   font-bold
                                   uppercase
                                   tracking-[0.12em]
                                   text-white"
                        >
                            {{ $product->category }}
                        </span>


                        <img
                            src="{{ asset($product->image) }}"
                            alt="{{ $product->name }}"
                            class="max-w-[90%]
                                   max-h-[420px]
                                   object-contain
                                   p-7
                                   sm:p-10"
                        >

                    </div>

                </div>



                {{-- =================================================
                     PRODUCT INFO
                ================================================== --}}

                <div
                    class="lg:col-span-7
                           flex
                           flex-col
                           justify-center"
                >

                    {{-- Product code --}}
                    <div
                        class="flex
                               items-center
                               gap-3"
                    >

                        <span
                            class="w-9
                                   h-[2px]
                                   bg-[#D71920]"
                        ></span>

                        <span
                            class="text-[10px]
                                   sm:text-[11px]
                                   font-bold
                                   uppercase
                                   tracking-[0.18em]
                                   text-[#D71920]"
                        >
                            {{ $product->code }}
                        </span>

                    </div>


                    {{-- Heading --}}
                    <h1
                        class="mt-4
                               max-w-[850px]
                               text-[#073B66]
                               text-[30px]
                               sm:text-[38px]
                               lg:text-[46px]
                               leading-[1.08]
                               tracking-[-0.025em]
                               font-extrabold"
                    >
                        {{ $product->name }}
                    </h1>


                    {{-- Category --}}
                    <p
                        class="mt-3
                               text-[11px]
                               uppercase
                               tracking-[0.12em]
                               font-bold
                               text-slate-400"
                    >
                        {{ $product->category }}
                    </p>


                    {{-- Short Description --}}
                    <p
                        class="mt-6
                               max-w-[760px]
                               text-[14px]
                               sm:text-[15px]
                               leading-7
                               text-slate-600"
                    >
                        {{ $product->short_description }}
                    </p>


                    {{-- Divider --}}
                    <div
                        class="my-7
                               h-px
                               bg-slate-200"
                    ></div>


                    {{-- Quick Benefits --}}
                    <div
                        class="grid
                               grid-cols-1
                               sm:grid-cols-3
                               gap-3"
                    >

                        <div
                            class="bg-white
                                   border
                                   border-slate-200
                                   px-4
                                   py-4"
                        >

                            <p
                                class="text-[9px]
                                       uppercase
                                       tracking-wide
                                       font-bold
                                       text-slate-400"
                            >
                                Manufacturer
                            </p>

                            <p
                                class="mt-1
                                       text-[12px]
                                       font-bold
                                       text-[#073B66]"
                            >
                                ASEW
                            </p>

                        </div>


                        <div
                            class="bg-white
                                   border
                                   border-slate-200
                                   px-4
                                   py-4"
                        >

                            <p
                                class="text-[9px]
                                       uppercase
                                       tracking-wide
                                       font-bold
                                       text-slate-400"
                            >
                                Product Category
                            </p>

                            <p
                                class="mt-1
                                       text-[12px]
                                       font-bold
                                       text-[#073B66]"
                            >
                                {{ $product->category }}
                            </p>

                        </div>


                        <div
                            class="bg-white
                                   border
                                   border-slate-200
                                   px-4
                                   py-4"
                        >

                            <p
                                class="text-[9px]
                                       uppercase
                                       tracking-wide
                                       font-bold
                                       text-slate-400"
                            >
                                Support
                            </p>

                            <p
                                class="mt-1
                                       text-[12px]
                                       font-bold
                                       text-[#073B66]"
                            >
                                Technical Assistance
                            </p>

                        </div>

                    </div>



                    {{-- CTA --}}
                    <div
                        class="mt-7
                               flex
                               flex-col
                               sm:flex-row
                               gap-3"
                    >

                        <a
                            href="{{ route('quote.create', ['product' => $product->slug]) }}"
                            class="group
                                   min-h-[48px]
                                   px-7
                                   flex
                                   items-center
                                   justify-center
                                   gap-3
                                   bg-[#D71920]
                                   hover:bg-[#032B55]
                                   text-white
                                   text-[11px]
                                   font-bold
                                   tracking-wide
                                   uppercase
                                   transition-all"
                        >
                            Request a Quote

                            <span
                                class="transition-transform
                                       group-hover:translate-x-1"
                            >
                                →
                            </span>

                        </a>


                        <a
                            href="tel:+911204566201"
                            class="min-h-[48px]
                                   px-7
                                   flex
                                   items-center
                                   justify-center
                                   gap-2
                                   bg-white
                                   border
                                   border-[#073B66]
                                   text-[#073B66]
                                   hover:bg-[#073B66]
                                   hover:text-white
                                   text-[11px]
                                   font-bold
                                   tracking-wide
                                   uppercase
                                   transition-all"
                        >
                            Call Sales Team
                        </a>

                    </div>

                </div>

            </div>

        </div>

    </section>



    {{-- =====================================================
         PRODUCT OVERVIEW
    ====================================================== --}}

    <section class="bg-white py-12 lg:py-16">

        <div
            class="max-w-[1500px]
                   mx-auto
                   px-4 sm:px-6 lg:px-8"
        >

            <div
                class="grid
                       grid-cols-1
                       lg:grid-cols-12
                       gap-8
                       lg:gap-14"
            >

                {{-- Description --}}
                <div class="lg:col-span-7">

                    <p
                        class="text-[#D71920]
                               text-[10px]
                               font-bold
                               uppercase
                               tracking-[0.18em]"
                    >
                        Product Overview
                    </p>


                    <h2
                        class="mt-3
                               text-[#073B66]
                               text-2xl
                               sm:text-3xl
                               font-extrabold
                               uppercase"
                    >
                        About This Equipment
                    </h2>


                    <div
                        class="mt-5
                               w-14
                               h-[3px]
                               bg-[#D71920]"
                    ></div>


                    <p
                        class="mt-6
                               max-w-[850px]
                               text-[14px]
                               sm:text-[15px]
                               leading-7
                               text-slate-600"
                    >
                        {{ $product->description }}
                    </p>


                    <p
                        class="mt-4
                               max-w-[850px]
                               text-[14px]
                               leading-7
                               text-slate-500"
                    >
                        For model configuration, technical specifications,
                        accessories and application-specific requirements,
                        please contact the ASEW technical team.
                    </p>

                </div>



                {{-- Features --}}
                <div class="lg:col-span-5">

                    <div
                        class="bg-[#F5F7F9]
                               border
                               border-slate-200
                               p-6
                               sm:p-7"
                    >

                        <h3
                            class="text-[#073B66]
                                   text-lg
                                   font-extrabold
                                   uppercase"
                        >
                            Key Features
                        </h3>


                        <div class="mt-5 space-y-3">

                            @if(!empty($product->features))

    @foreach($product->features as $feature)

        <div
            class="flex
                   items-start
                   gap-3
                   bg-white
                   border
                   border-slate-200
                   px-4
                   py-3"
        >

            <div
                class="mt-[2px]
                       w-5
                       h-5
                       shrink-0
                       flex
                       items-center
                       justify-center
                       bg-[#032B55]
                       text-white
                       text-[10px]"
            >
                ✓
            </div>

            <p
                class="text-[12px]
                       sm:text-[13px]
                       leading-5
                       text-slate-600"
            >
                {{ $feature }}
            </p>

        </div>

    @endforeach

@endif

                        </div>

                    </div>

                </div>

            </div>

        </div>

    </section>



    {{-- =====================================================
         PRODUCT INFORMATION BAR
    ====================================================== --}}

    <section
        class="bg-[#F5F7F9]
               border-y
               border-slate-200
               py-10"
    >

        <div
            class="max-w-[1500px]
                   mx-auto
                   px-4 sm:px-6 lg:px-8"
        >

            <div
                class="grid
                       grid-cols-1
                       sm:grid-cols-2
                       lg:grid-cols-4
                       bg-white
                       border
                       border-slate-200"
            >

                <div
                    class="p-5
                           border-b
                           sm:border-r
                           lg:border-b-0
                           border-slate-200"
                >

                    <p
                        class="text-[9px]
                               uppercase
                               tracking-[0.15em]
                               font-bold
                               text-slate-400"
                    >
                        Product Code
                    </p>

                    <p
                        class="mt-2
                               text-[13px]
                               font-extrabold
                               text-[#073B66]"
                    >
                        {{ $product->code }}
                    </p>

                </div>


                <div
                    class="p-5
                           border-b
                           lg:border-b-0
                           lg:border-r
                           border-slate-200"
                >

                    <p
                        class="text-[9px]
                               uppercase
                               tracking-[0.15em]
                               font-bold
                               text-slate-400"
                    >
                        Category
                    </p>

                    <p
                        class="mt-2
                               text-[13px]
                               font-extrabold
                               text-[#073B66]"
                    >
                        {{ $product->category }}
                    </p>

                </div>


                <div
                    class="p-5
                           border-b
                           sm:border-b-0
                           sm:border-r
                           border-slate-200"
                >

                    <p
                        class="text-[9px]
                               uppercase
                               tracking-[0.15em]
                               font-bold
                               text-slate-400"
                    >
                        Application
                    </p>

                    <p
                        class="mt-2
                               text-[13px]
                               font-extrabold
                               text-[#073B66]"
                    >
                        Testing Laboratory
                    </p>

                </div>


                <div class="p-5">

                    <p
                        class="text-[9px]
                               uppercase
                               tracking-[0.15em]
                               font-bold
                               text-slate-400"
                    >
                        Enquiry
                    </p>

                    <a
                        href="{{ route('home') }}#contact"
                        class="mt-2
                               inline-flex
                               items-center
                               gap-2
                               text-[13px]
                               font-extrabold
                               text-[#D71920]
                               hover:text-[#073B66]
                               transition"
                    >
                        Contact ASEW
                        <span>→</span>
                    </a>

                </div>

            </div>

        </div>

    </section>



    {{-- =====================================================
     RELATED PRODUCTS
====================================================== --}}

@if($relatedProducts->count() > 0)

    <section class="bg-white py-12 lg:py-16">

        <div
            class="max-w-[1500px]
                   mx-auto
                   px-4 sm:px-6 lg:px-8"
        >

            {{-- SECTION HEADER --}}
            <div
                class="flex
                       flex-col
                       sm:flex-row
                       sm:items-end
                       sm:justify-between
                       gap-4"
            >

                <div>

                    <p
                        class="text-[#D71920]
                               text-[10px]
                               font-bold
                               uppercase
                               tracking-[0.18em]"
                    >
                        Explore More
                    </p>

                    <h2
                        class="mt-2
                               text-[#073B66]
                               text-2xl
                               sm:text-3xl
                               font-extrabold
                               uppercase"
                    >
                        Related Products
                    </h2>

                    <div
                        class="mt-4
                               w-14
                               h-[3px]
                               bg-[#D71920]"
                    ></div>

                </div>


                <a
                    href="{{ route('products', ['category' => $product->category_slug]) }}"
                    class="inline-flex
                           items-center
                           gap-2
                           text-[11px]
                           font-bold
                           uppercase
                           tracking-wide
                           text-[#073B66]
                           hover:text-[#D71920]
                           transition"
                >
                    View Category

                    <span>→</span>
                </a>

            </div>



            {{-- PRODUCT GRID --}}
            <div
                class="grid
                       grid-cols-1
                       sm:grid-cols-2
                       lg:grid-cols-3
                       gap-5
                       mt-8"
            >

                @foreach($relatedProducts as $related)

                    <article
                        class="group
                               flex
                               flex-col
                               bg-white
                               border
                               border-slate-200
                               hover:border-[#073B66]/40
                               hover:shadow-[0_12px_30px_rgba(3,43,85,0.10)]
                               transition-all
                               duration-300"
                    >

                        {{-- IMAGE --}}
                        <a
                            href="{{ route('products.show', $related->slug) }}"
                            class="relative
                                   h-[240px]
                                   bg-white
                                   flex
                                   items-center
                                   justify-center
                                   border-b
                                   border-slate-100
                                   overflow-hidden"
                        >

                            <span
                                class="absolute
                                       top-0
                                       left-0
                                       w-0
                                       h-[3px]
                                       bg-[#D71920]
                                       group-hover:w-full
                                       transition-all
                                       duration-500"
                            ></span>


                            <span
                                class="absolute
                                       top-4
                                       left-4
                                       z-10
                                       px-3
                                       py-1.5
                                       bg-[#032B55]
                                       text-white
                                       text-[8px]
                                       font-bold
                                       uppercase
                                       tracking-[0.12em]"
                            >
                                {{ $related->category }}
                            </span>


                            @if($related->image)

                                <img
                                    src="{{ asset($related->image) }}"
                                    alt="{{ $related->name }}"
                                    loading="lazy"
                                    class="max-w-full
                                           max-h-full
                                           object-contain
                                           p-7
                                           transition-transform
                                           duration-500
                                           group-hover:scale-105"
                                >

                            @else

                                <div
                                    class="flex
                                           flex-col
                                           items-center
                                           justify-center
                                           text-slate-300"
                                >

                                    <svg
                                        xmlns="http://www.w3.org/2000/svg"
                                        class="w-12 h-12"
                                        fill="none"
                                        viewBox="0 0 24 24"
                                        stroke="currentColor"
                                        stroke-width="1.2"
                                    >
                                        <path
                                            stroke-linecap="round"
                                            stroke-linejoin="round"
                                            d="M3 16.5 8.5 11l4 4L15 12.5l6 6"
                                        />

                                        <rect
                                            x="3"
                                            y="4"
                                            width="18"
                                            height="16"
                                            rx="2"
                                        />
                                    </svg>

                                    <span
                                        class="mt-2
                                               text-[9px]
                                               uppercase
                                               tracking-wide"
                                    >
                                        Product Image
                                    </span>

                                </div>

                            @endif

                        </a>



                        {{-- CONTENT --}}
                        <div
                            class="p-5
                                   flex
                                   flex-col
                                   flex-1"
                        >

                            @if($related->code)

                                <p
                                    class="text-[9px]
                                           uppercase
                                           tracking-[0.13em]
                                           font-bold
                                           text-[#D71920]"
                                >
                                    {{ $related->code }}
                                </p>

                            @endif


                            <h3
                                class="mt-2
                                       text-[16px]
                                       leading-6
                                       font-extrabold
                                       text-[#073B66]"
                            >

                                <a
                                    href="{{ route('products.show', $related->slug) }}"
                                    class="hover:text-[#D71920] transition"
                                >
                                    {{ $related->name }}
                                </a>

                            </h3>


                            @if($related->short_description)

                                <p
                                    class="mt-3
                                           text-[12px]
                                           leading-5
                                           text-slate-500"
                                >
                                    {{ \Illuminate\Support\Str::limit(
                                        $related->short_description,
                                        120
                                    ) }}
                                </p>

                            @endif


                            <div class="flex-1"></div>


                            <div
                                class="mt-5
                                       pt-4
                                       border-t
                                       border-slate-100"
                            >

                                <a
                                    href="{{ route('products.show', $related->slug) }}"
                                    class="group/link
                                           inline-flex
                                           items-center
                                           gap-2
                                           text-[10px]
                                           uppercase
                                           tracking-wide
                                           font-bold
                                           text-[#073B66]
                                           hover:text-[#D71920]
                                           transition"
                                >
                                    View Details

                                    <span
                                        class="transition-transform
                                               group-hover/link:translate-x-1"
                                    >
                                        →
                                    </span>
                                </a>

                            </div>

                        </div>

                    </article>

                @endforeach

            </div>

        </div>

    </section>

@endif



    {{-- =====================================================
         FINAL CTA
    ====================================================== --}}

    <section
        class="relative
               overflow-hidden
               bg-[#032B55]"
    >

        <div
            class="absolute
                   right-[-120px]
                   top-[-170px]
                   w-[380px]
                   h-[380px]
                   rounded-full
                   border
                   border-white/[0.07]"
        ></div>

 
        <div
            class="relative
                   max-w-[1500px]
                   mx-auto
                   px-4 sm:px-6 lg:px-8
                   py-10 lg:py-12"
        >

            <div
                class="flex
                       flex-col
                       lg:flex-row
                       lg:items-center
                       lg:justify-between
                       gap-6"
            >

                <div>

                    <p
                        class="text-[#D7A93A]
                               text-[10px]
                               font-bold
                               uppercase
                               tracking-[0.18em]"
                    >
                        Need More Information?
                    </p>


                    <h2
                        class="mt-2
                               text-white
                               text-xl
                               sm:text-2xl
                               lg:text-[28px]
                               font-extrabold"
                    >
                        Request Product Details & Quotation
                    </h2>


                    <p
                        class="mt-2
                               max-w-2xl
                               text-[12px]
                               sm:text-[13px]
                               leading-6
                               text-white/60"
                    >
                        Contact our team for product specifications,
                        configuration options and commercial information.
                    </p>

                </div>


                <a
    href="{{ route('quote.create', ['product' => $product->slug]) }}"
    class="group
           min-h-[48px]
           px-7
           flex
           items-center
           justify-center
           gap-3
           bg-[#D71920]
           hover:bg-[#032B55]
           text-white
           text-[11px]
           font-bold
           tracking-wide
           uppercase
           transition-all"
>
    Request a Quote

    <span class="transition-transform group-hover:translate-x-1">
        →
    </span>
</a>

            </div>

        </div>

    </section>

</section>

@endsection