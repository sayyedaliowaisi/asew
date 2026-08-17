@extends('layouts.app')

@section('title', 'ASEW | 3D Experience')

@section('content')

<section
    class="relative min-h-screen overflow-hidden
           bg-[#020B14] text-white"
>

    {{-- 3D Canvas --}}
    <div
        id="asew-3d-scene"
        class="absolute inset-0"
    ></div>

    {{-- Dark gradient for readable content --}}
    <div
        class="absolute inset-0 pointer-events-none
               bg-gradient-to-r
               from-[#020B14]
               via-[#020B14]/80
               to-transparent"
    ></div>

    {{-- Technical grid --}}
    <div
        class="absolute inset-0 pointer-events-none opacity-[0.06]"
        style="
            background-image:
            linear-gradient(rgba(255,255,255,.5) 1px, transparent 1px),
            linear-gradient(90deg, rgba(255,255,255,.5) 1px, transparent 1px);
            background-size: 70px 70px;
        "
    ></div>


    {{-- Hero Content --}}
    <div
        class="relative z-10 min-h-screen
               max-w-7xl mx-auto
               px-5 sm:px-8 lg:px-10
               flex items-center"
    >

        <div class="max-w-2xl py-32">

            {{-- Eyebrow --}}
            <div class="flex items-center gap-4 mb-7">

                <span class="w-12 h-[2px] bg-[#E31E24]"></span>

                <span
                    class="text-[#E31E24]
                           text-xs sm:text-sm
                           font-bold
                           uppercase
                           tracking-[0.22em]"
                >
                    ASEW • 3D Experience
                </span>

            </div>


            {{-- Heading --}}
            <h1
                class="text-5xl sm:text-6xl lg:text-7xl
                       font-bold leading-[0.95]
                       tracking-tight"
            >
                Scientific &
                <span class="block text-[#E31E24]">
                    Material Testing
                </span>
                Instruments
            </h1>


            <p
                class="mt-7
                       text-gray-300
                       text-base sm:text-lg
                       leading-8
                       max-w-xl"
            >
                Explore precision testing and quality control
                equipment for construction, infrastructure,
                civil engineering and laboratory applications.
            </p>


            {{-- CTA --}}
            <div class="mt-9 flex flex-col sm:flex-row gap-4">

                <a
                    href="#products"
                    class="inline-flex items-center justify-center
                           bg-[#E31E24]
                           hover:bg-[#C8181D]
                           px-7 py-4
                           font-semibold
                           transition"
                >
                    Explore Equipment

                    <span class="ml-3">→</span>
                </a>

                <a
                    href="{{ route('home') }}"
                    class="inline-flex items-center justify-center
                           border border-white/30
                           hover:bg-white
                           hover:text-[#073B66]
                           px-7 py-4
                           font-semibold
                           transition"
                >
                    Standard Experience
                </a>

            </div>


            {{-- Credibility --}}
            <div
                class="mt-10
                       flex flex-wrap
                       gap-6
                       text-sm text-gray-300"
            >

                <div>
                    <span class="text-[#E31E24] font-bold">
                        1975
                    </span>
                    <span class="ml-2">
                        Established
                    </span>
                </div>

                <div>
                    <span class="text-[#E31E24] font-bold">
                        QA / QC
                    </span>
                    <span class="ml-2">
                        Solutions
                    </span>
                </div>

                <div>
                    <span class="text-[#E31E24] font-bold">
                        Global
                    </span>
                    <span class="ml-2">
                        Reach
                    </span>
                </div>

            </div>

        </div>

    </div>


    {{-- 3D Interaction hint --}}
    <div
        class="absolute
               right-8 bottom-8
               hidden md:flex
               items-center gap-3
               text-xs text-gray-400
               z-20"
    >

        <span
            class="w-8 h-8
                   rounded-full
                   border border-white/20
                   flex items-center justify-center"
        >
            ↻
        </span>

        Drag to explore

    </div>

</section>


{{-- =========================================================
     TESTING SOLUTIONS
========================================================= --}}

<section
    id="solutions"
    class="relative bg-[#F6F8FA] py-24 lg:py-32 overflow-hidden"
>

    {{-- Background technical grid --}}
    <div
        class="absolute inset-0 opacity-[0.035]"
        style="
            background-image:
            linear-gradient(#073B66 1px, transparent 1px),
            linear-gradient(90deg, #073B66 1px, transparent 1px);
            background-size: 60px 60px;
        "
    ></div>


    <div
        class="relative max-w-7xl mx-auto
               px-5 sm:px-8 lg:px-10"
    >

        {{-- Section Heading --}}
        <div
            class="max-w-3xl mb-14"
        >

            <div class="flex items-center gap-3 mb-5">

                <span
                    class="w-10 h-[2px]
                           bg-[#E31E24]"
                ></span>

                <span
                    class="text-[#E31E24]
                           text-xs font-bold
                           uppercase tracking-[0.22em]"
                >
                    Our Testing Solutions
                </span>

            </div>


            <h2
                class="text-[#073B66]
                       text-4xl sm:text-5xl lg:text-6xl
                       font-bold
                       leading-tight"
            >
                Equipment engineered for
                <span class="text-[#E31E24]">
                    precise testing.
                </span>
            </h2>


            <p
                class="mt-6
                       text-gray-600
                       text-base lg:text-lg
                       leading-8"
            >
                Explore testing and measurement solutions
                designed for construction, infrastructure,
                engineering and laboratory applications.
            </p>

        </div>


        {{-- Category Grid --}}
        <div
            class="grid grid-cols-1
                   sm:grid-cols-2
                   lg:grid-cols-3
                   gap-5"
        >


            {{-- Soil --}}
            <a
                href="{{ route('home') }}#products"
                class="group relative
                       min-h-[250px]
                       bg-white
                       border border-gray-200
                       p-7
                       overflow-hidden
                       transition-all duration-500
                       hover:-translate-y-2
                       hover:shadow-2xl
                       hover:border-[#073B66]/30"
            >

                <div
                    class="absolute
                           -right-10 -top-10
                           w-32 h-32
                           rounded-full
                           bg-[#073B66]/5
                           group-hover:scale-[2]
                           transition-transform duration-700"
                ></div>


                <div
                    class="relative z-10
                           h-full
                           flex flex-col
                           justify-between"
                >

                    <div>

                        <span
                            class="text-[#E31E24]
                                   text-xs font-bold
                                   tracking-widest"
                        >
                            01
                        </span>

                        <h3
                            class="mt-4
                                   text-2xl
                                   font-bold
                                   text-[#073B66]
                                   group-hover:text-[#E31E24]
                                   transition"
                        >
                            Soil Testing
                        </h3>

                        <p
                            class="mt-3
                                   text-gray-500
                                   text-sm
                                   leading-6"
                        >
                            Equipment for testing and evaluating
                            soil properties and performance.
                        </p>

                    </div>


                    <div
                        class="mt-8
                               flex items-center
                               justify-between"
                    >

                        <span
                            class="text-sm
                                   font-semibold
                                   text-[#073B66]"
                        >
                            Explore Equipment
                        </span>

                        <span
                            class="w-9 h-9
                                   border border-gray-200
                                   flex items-center justify-center
                                   group-hover:bg-[#E31E24]
                                   group-hover:text-white
                                   group-hover:border-[#E31E24]
                                   transition"
                        >
                            →
                        </span>

                    </div>

                </div>

            </a>


            {{-- Cement --}}
            <a
                href="{{ route('home') }}#products"
                class="group relative
                       min-h-[250px]
                       bg-white
                       border border-gray-200
                       p-7
                       overflow-hidden
                       transition-all duration-500
                       hover:-translate-y-2
                       hover:shadow-2xl
                       hover:border-[#073B66]/30"
            >

                <div
                    class="relative z-10 h-full
                           flex flex-col
                           justify-between"
                >

                    <div>

                        <span
                            class="text-[#E31E24]
                                   text-xs font-bold
                                   tracking-widest"
                        >
                            02
                        </span>

                        <h3
                            class="mt-4
                                   text-2xl font-bold
                                   text-[#073B66]
                                   group-hover:text-[#E31E24]
                                   transition"
                        >
                            Cement Testing
                        </h3>

                        <p
                            class="mt-3 text-gray-500
                                   text-sm leading-6"
                        >
                            Testing solutions for cement quality,
                            strength and performance evaluation.
                        </p>

                    </div>


                    <div
                        class="mt-8 flex items-center
                               justify-between"
                    >

                        <span
                            class="text-sm font-semibold
                                   text-[#073B66]"
                        >
                            Explore Equipment
                        </span>

                        <span
                            class="w-9 h-9 border border-gray-200
                                   flex items-center justify-center
                                   group-hover:bg-[#E31E24]
                                   group-hover:text-white
                                   group-hover:border-[#E31E24]
                                   transition"
                        >
                            →
                        </span>

                    </div>

                </div>

            </a>


            {{-- Concrete --}}
            <a
                href="{{ route('home') }}#products"
                class="group relative
                       min-h-[250px]
                       bg-white
                       border border-gray-200
                       p-7
                       overflow-hidden
                       transition-all duration-500
                       hover:-translate-y-2
                       hover:shadow-2xl"
            >

                <div class="relative z-10 h-full
                            flex flex-col justify-between">

                    <div>

                        <span
                            class="text-[#E31E24]
                                   text-xs font-bold
                                   tracking-widest"
                        >
                            03
                        </span>

                        <h3
                            class="mt-4 text-2xl font-bold
                                   text-[#073B66]
                                   group-hover:text-[#E31E24]
                                   transition"
                        >
                            Concrete Testing
                        </h3>

                        <p
                            class="mt-3 text-gray-500
                                   text-sm leading-6"
                        >
                            Equipment for evaluating concrete
                            strength, quality and performance.
                        </p>

                    </div>


                    <div class="mt-8 flex items-center
                                justify-between">

                        <span
                            class="text-sm font-semibold
                                   text-[#073B66]"
                        >
                            Explore Equipment
                        </span>

                        <span
                            class="w-9 h-9 border border-gray-200
                                   flex items-center justify-center
                                   group-hover:bg-[#E31E24]
                                   group-hover:text-white
                                   group-hover:border-[#E31E24]
                                   transition"
                        >
                            →
                        </span>

                    </div>

                </div>

            </a>


            {{-- Aggregate --}}
            <a
                href="{{ route('home') }}#products"
                class="group relative
                       min-h-[250px]
                       bg-white
                       border border-gray-200
                       p-7
                       overflow-hidden
                       transition-all duration-500
                       hover:-translate-y-2
                       hover:shadow-2xl"
            >

                <div class="relative z-10 h-full
                            flex flex-col justify-between">

                    <div>

                        <span
                            class="text-[#E31E24]
                                   text-xs font-bold
                                   tracking-widest"
                        >
                            04
                        </span>

                        <h3
                            class="mt-4 text-2xl font-bold
                                   text-[#073B66]
                                   group-hover:text-[#E31E24]
                                   transition"
                        >
                            Aggregate Testing
                        </h3>

                        <p
                            class="mt-3 text-gray-500
                                   text-sm leading-6"
                        >
                            Testing equipment for aggregate
                            quality and material characterization.
                        </p>

                    </div>


                    <div class="mt-8 flex items-center
                                justify-between">

                        <span
                            class="text-sm font-semibold
                                   text-[#073B66]"
                        >
                            Explore Equipment
                        </span>

                        <span
                            class="w-9 h-9 border border-gray-200
                                   flex items-center justify-center
                                   group-hover:bg-[#E31E24]
                                   group-hover:text-white
                                   group-hover:border-[#E31E24]
                                   transition"
                        >
                            →
                        </span>

                    </div>

                </div>

            </a>


            {{-- Bitumen --}}
            <a
                href="{{ route('home') }}#products"
                class="group relative
                       min-h-[250px]
                       bg-white
                       border border-gray-200
                       p-7
                       overflow-hidden
                       transition-all duration-500
                       hover:-translate-y-2
                       hover:shadow-2xl"
            >

                <div class="relative z-10 h-full
                            flex flex-col justify-between">

                    <div>

                        <span
                            class="text-[#E31E24]
                                   text-xs font-bold
                                   tracking-widest"
                        >
                            05
                        </span>

                        <h3
                            class="mt-4 text-2xl font-bold
                                   text-[#073B66]
                                   group-hover:text-[#E31E24]
                                   transition"
                        >
                            Bitumen & Asphalt
                        </h3>

                        <p
                            class="mt-3 text-gray-500
                                   text-sm leading-6"
                        >
                            Solutions for asphalt and bituminous
                            material testing applications.
                        </p>

                    </div>


                    <div class="mt-8 flex items-center
                                justify-between">

                        <span
                            class="text-sm font-semibold
                                   text-[#073B66]"
                        >
                            Explore Equipment
                        </span>

                        <span
                            class="w-9 h-9 border border-gray-200
                                   flex items-center justify-center
                                   group-hover:bg-[#E31E24]
                                   group-hover:text-white
                                   group-hover:border-[#E31E24]
                                   transition"
                        >
                            →
                        </span>

                    </div>

                </div>

            </a>


            {{-- Laboratory --}}
            <a
                href="{{ route('home') }}#products"
                class="group relative
                       min-h-[250px]
                       bg-[#073B66]
                       p-7
                       overflow-hidden
                       transition-all duration-500
                       hover:-translate-y-2
                       hover:shadow-2xl"
            >

                <div
                    class="absolute
                           -right-20 -bottom-20
                           w-56 h-56
                           rounded-full
                           border border-white/10"
                ></div>

                <div class="relative z-10 h-full
                            flex flex-col justify-between">

                    <div>

                        <span
                            class="text-[#E31E24]
                                   text-xs font-bold
                                   tracking-widest"
                        >
                            06
                        </span>

                        <h3
                            class="mt-4 text-2xl font-bold
                                   text-white"
                        >
                            Laboratory Equipment
                        </h3>

                        <p
                            class="mt-3 text-blue-100/70
                                   text-sm leading-6"
                        >
                            Professional laboratory and
                            measurement equipment for testing
                            environments.
                        </p>

                    </div>


                    <div class="mt-8 flex items-center
                                justify-between">

                        <span
                            class="text-sm font-semibold
                                   text-white"
                        >
                            Explore Equipment
                        </span>

                        <span
                            class="w-9 h-9
                                   border border-white/20
                                   text-white
                                   flex items-center justify-center
                                   group-hover:bg-[#E31E24]
                                   group-hover:border-[#E31E24]
                                   transition"
                        >
                            →
                        </span>

                    </div>

                </div>

            </a>

        </div>


        {{-- Bottom CTA --}}
        <div
            class="mt-12
                   flex flex-col sm:flex-row
                   sm:items-center
                   justify-between
                   gap-6
                   border-t border-gray-200
                   pt-8"
        >

            <p class="text-gray-600">
                Looking for a specific testing instrument?
            </p>

            <a
                href="#contact"
                class="inline-flex items-center
                       justify-center
                       bg-[#073B66]
                       hover:bg-[#E31E24]
                       text-white
                       px-6 py-3
                       font-semibold
                       transition"
            >
                Talk to Our Team
                <span class="ml-3">→</span>
            </a>

        </div>

    </div>

</section>


{{-- =========================================================
     FEATURED PRODUCTS
========================================================= --}}

<section
    id="products"
    class="relative bg-white py-24 lg:py-32 overflow-hidden"
>

    <div class="max-w-7xl mx-auto px-5 sm:px-8 lg:px-10">

        {{-- Heading --}}
        <div
            class="flex flex-col lg:flex-row
                   lg:items-end lg:justify-between
                   gap-8 mb-14"
        >

            <div class="max-w-3xl">

                <div class="flex items-center gap-3 mb-5">

                    <span class="w-10 h-[2px] bg-[#E31E24]"></span>

                    <span
                        class="text-[#E31E24]
                               text-xs font-bold
                               uppercase tracking-[0.22em]"
                    >
                        Featured Equipment
                    </span>

                </div>

                <h2
                    class="text-[#073B66]
                           text-4xl sm:text-5xl lg:text-6xl
                           font-bold leading-tight"
                >
                    Precision equipment for
                    <span class="text-[#E31E24]">
                        professional testing.
                    </span>
                </h2>

                <p
                    class="mt-5
                           text-gray-600
                           text-base lg:text-lg
                           leading-8
                           max-w-2xl"
                >
                    Discover selected testing and measurement
                    instruments designed for reliable results
                    across demanding engineering applications.
                </p>

            </div>


            {{-- Desktop View All --}}
            <a
                href="{ '#' }"
                class="hidden lg:inline-flex
                       items-center
                       text-[#073B66]
                       font-semibold
                       border-b-2 border-[#E31E24]
                       pb-2
                       hover:text-[#E31E24]
                       transition"
            >
                View All Products

                <span class="ml-3">
                    →
                </span>
            </a>

        </div>


        {{-- Products Grid --}}
        <div
            class="grid grid-cols-1
                   sm:grid-cols-2
                   lg:grid-cols-4
                   gap-6"
        >


            {{-- PRODUCT 01 --}}
            <article
                class="group
                       bg-white
                       border border-gray-200
                       overflow-hidden
                       transition-all duration-500
                       hover:-translate-y-2
                       hover:shadow-2xl"
            >

                {{-- Image --}}
                <div
                    class="relative
                           h-[280px]
                           bg-[#F3F5F7]
                           overflow-hidden"
                >

                    <div
                        class="absolute top-4 left-4 z-10
                               px-3 py-1
                               bg-[#073B66]
                               text-white
                               text-[10px]
                               font-bold
                               uppercase
                               tracking-widest"
                    >
                        Featured
                    </div>


                    {{-- Replace with actual product image --}}
                    <img
                        src="{{ asset('images/products/product-1.jpg') }}"
                        alt="Testing Equipment"
                        class="w-full h-full
                               object-contain
                               p-8
                               group-hover:scale-105
                               transition-transform duration-700"
                    />


                    {{-- Hover CTA --}}
                    <div
                        class="absolute inset-x-0 bottom-0
                               translate-y-full
                               group-hover:translate-y-0
                               transition-transform duration-500"
                    >

                        <a
                            href="#"
                            class="block
                                   bg-[#E31E24]
                                   text-white
                                   text-center
                                   py-3
                                   font-semibold
                                   text-sm"
                        >
                            View Product
                        </a>

                    </div>

                </div>


                {{-- Product Info --}}
                <div class="p-6">

                    <p
                        class="text-[#E31E24]
                               text-[10px]
                               font-bold
                               uppercase
                               tracking-[0.18em]"
                    >
                        Testing Instrument
                    </p>

                    <h3
                        class="mt-2
                               text-xl
                               font-bold
                               text-[#073B66]
                               group-hover:text-[#E31E24]
                               transition"
                    >
                        Product Name One
                    </h3>

                    <p
                        class="mt-3
                               text-sm
                               text-gray-500
                               leading-6"
                    >
                        Precision equipment for professional
                        testing and quality control applications.
                    </p>

                </div>

            </article>


            {{-- PRODUCT 02 --}}
            <article
                class="group
                       bg-white
                       border border-gray-200
                       overflow-hidden
                       transition-all duration-500
                       hover:-translate-y-2
                       hover:shadow-2xl"
            >

                <div
                    class="relative
                           h-[280px]
                           bg-[#F3F5F7]
                           overflow-hidden"
                >

                    <div
                        class="absolute top-4 left-4 z-10
                               px-3 py-1
                               bg-[#073B66]
                               text-white
                               text-[10px]
                               font-bold
                               uppercase
                               tracking-widest"
                    >
                        Featured
                    </div>

                    <img
                        src="{{ asset('images/products/product-2.jpg') }}"
                        alt="Testing Equipment"
                        class="w-full h-full
                               object-contain
                               p-8
                               group-hover:scale-105
                               transition-transform duration-700"
                    />

                    <div
                        class="absolute inset-x-0 bottom-0
                               translate-y-full
                               group-hover:translate-y-0
                               transition-transform duration-500"
                    >

                        <a
                            href="#"
                            class="block
                                   bg-[#E31E24]
                                   text-white
                                   text-center
                                   py-3
                                   font-semibold
                                   text-sm"
                        >
                            View Product
                        </a>

                    </div>

                </div>

                <div class="p-6">

                    <p
                        class="text-[#E31E24]
                               text-[10px]
                               font-bold
                               uppercase
                               tracking-[0.18em]"
                    >
                        Testing Instrument
                    </p>

                    <h3
                        class="mt-2 text-xl font-bold
                               text-[#073B66]
                               group-hover:text-[#E31E24]
                               transition"
                    >
                        Product Name Two
                    </h3>

                    <p
                        class="mt-3 text-sm
                               text-gray-500
                               leading-6"
                    >
                        Reliable testing equipment engineered
                        for demanding applications.
                    </p>

                </div>

            </article>


            {{-- PRODUCT 03 --}}
            <article
                class="group
                       bg-white
                       border border-gray-200
                       overflow-hidden
                       transition-all duration-500
                       hover:-translate-y-2
                       hover:shadow-2xl"
            >

                <div
                    class="relative
                           h-[280px]
                           bg-[#F3F5F7]
                           overflow-hidden"
                >

                    <div
                        class="absolute top-4 left-4 z-10
                               px-3 py-1
                               bg-[#073B66]
                               text-white
                               text-[10px]
                               font-bold
                               uppercase
                               tracking-widest"
                    >
                        Featured
                    </div>

                    <img
                        src="{{ asset('images/products/product-3.jpg') }}"
                        alt="Testing Equipment"
                        class="w-full h-full
                               object-contain
                               p-8
                               group-hover:scale-105
                               transition-transform duration-700"
                    />

                    <div
                        class="absolute inset-x-0 bottom-0
                               translate-y-full
                               group-hover:translate-y-0
                               transition-transform duration-500"
                    >

                        <a
                            href="#"
                            class="block
                                   bg-[#E31E24]
                                   text-white
                                   text-center
                                   py-3
                                   font-semibold
                                   text-sm"
                        >
                            View Product
                        </a>

                    </div>

                </div>

                <div class="p-6">

                    <p
                        class="text-[#E31E24]
                               text-[10px]
                               font-bold
                               uppercase
                               tracking-[0.18em]"
                    >
                        Testing Instrument
                    </p>

                    <h3
                        class="mt-2 text-xl font-bold
                               text-[#073B66]
                               group-hover:text-[#E31E24]
                               transition"
                    >
                        Product Name Three
                    </h3>

                    <p
                        class="mt-3 text-sm
                               text-gray-500
                               leading-6"
                    >
                        Engineered for accurate measurement
                        and dependable testing performance.
                    </p>

                </div>

            </article>


            {{-- PRODUCT 04 --}}
            <article
                class="group
                       bg-white
                       border border-gray-200
                       overflow-hidden
                       transition-all duration-500
                       hover:-translate-y-2
                       hover:shadow-2xl"
            >

                <div
                    class="relative
                           h-[280px]
                           bg-[#F3F5F7]
                           overflow-hidden"
                >

                    <div
                        class="absolute top-4 left-4 z-10
                               px-3 py-1
                               bg-[#073B66]
                               text-white
                               text-[10px]
                               font-bold
                               uppercase
                               tracking-widest"
                    >
                        Featured
                    </div>

                    <img
                        src="{{ asset('images/products/product-4.jpg') }}"
                        alt="Testing Equipment"
                        class="w-full h-full
                               object-contain
                               p-8
                               group-hover:scale-105
                               transition-transform duration-700"
                    />

                    <div
                        class="absolute inset-x-0 bottom-0
                               translate-y-full
                               group-hover:translate-y-0
                               transition-transform duration-500"
                    >

                        <a
                            href="#"
                            class="block
                                   bg-[#E31E24]
                                   text-white
                                   text-center
                                   py-3
                                   font-semibold
                                   text-sm"
                        >
                            View Product
                        </a>

                    </div>

                </div>

                <div class="p-6">

                    <p
                        class="text-[#E31E24]
                               text-[10px]
                               font-bold
                               uppercase
                               tracking-[0.18em]"
                    >
                        Testing Instrument
                    </p>

                    <h3
                        class="mt-2 text-xl font-bold
                               text-[#073B66]
                               group-hover:text-[#E31E24]
                               transition"
                    >
                        Product Name Four
                    </h3>

                    <p
                        class="mt-3 text-sm
                               text-gray-500
                               leading-6"
                    >
                        Professional equipment for consistent
                        testing and quality assurance.
                    </p>

                </div>

            </article>

        </div>


        {{-- Mobile View All --}}
        <div class="mt-10 lg:hidden">

            <a
                href="{ '#' }"
                class="inline-flex items-center
                       text-[#073B66]
                       font-semibold
                       border-b-2 border-[#E31E24]
                       pb-2"
            >
                View All Products

                <span class="ml-3">
                    →
                </span>
            </a>

        </div>

    </div>

</section>


{{-- =========================================================
     APPLICATIONS / INDUSTRIES
========================================================= --}}

<section
    id="applications"
    class="relative bg-[#061B2D] text-white
           py-24 lg:py-32 overflow-hidden"
>

    {{-- Decorative background --}}
    <div
        class="absolute inset-0 opacity-[0.05]"
        style="
            background-image:
            linear-gradient(rgba(255,255,255,.5) 1px, transparent 1px),
            linear-gradient(90deg, rgba(255,255,255,.5) 1px, transparent 1px);
            background-size: 70px 70px;
        "
    ></div>


    {{-- Red glow --}}
    <div
        class="absolute
               -right-40 top-20
               w-[500px] h-[500px]
               rounded-full
               bg-[#E31E24]/10
               blur-3xl"
    ></div>


    <div
        class="relative z-10
               max-w-7xl mx-auto
               px-5 sm:px-8 lg:px-10"
    >

        {{-- Heading --}}
        <div
            class="max-w-3xl mb-16"
        >

            <div class="flex items-center gap-3 mb-5">

                <span
                    class="w-10 h-[2px]
                           bg-[#E31E24]"
                ></span>

                <span
                    class="text-[#E31E24]
                           text-xs font-bold
                           uppercase
                           tracking-[0.22em]"
                >
                    Applications
                </span>

            </div>


            <h2
                class="text-4xl sm:text-5xl lg:text-6xl
                       font-bold
                       leading-tight"
            >
                Testing solutions built for
                <span class="text-[#E31E24]">
                    real-world applications.
                </span>
            </h2>


            <p
                class="mt-6
                       text-gray-300
                       text-base lg:text-lg
                       leading-8"
            >
                From construction sites to professional
                laboratories, our testing equipment supports
                engineers, quality-control teams and technical
                professionals across demanding environments.
            </p>

        </div>


        {{-- Applications --}}
        <div
            class="grid grid-cols-1
                   md:grid-cols-2
                   lg:grid-cols-4
                   gap-px
                   bg-white/10"
        >


            {{-- Construction --}}
            <div
                class="group relative
                       min-h-[310px]
                       bg-[#061B2D]
                       p-7
                       overflow-hidden
                       transition-all duration-500
                       hover:bg-[#073B66]"
            >

                <div
                    class="absolute
                           -right-10 -bottom-10
                           w-40 h-40
                           rounded-full
                           border border-white/10
                           group-hover:scale-150
                           transition-transform duration-700"
                ></div>


                <div class="relative z-10 h-full
                            flex flex-col justify-between">

                    <div>

                        <span
                            class="text-[#E31E24]
                                   text-xs font-bold
                                   tracking-widest"
                        >
                            01
                        </span>


                        {{-- Icon --}}
                        <div
                            class="mt-7
                                   w-12 h-12
                                   border border-white/20
                                   flex items-center justify-center
                                   group-hover:border-[#E31E24]
                                   transition"
                        >

                            <svg
                                xmlns="http://www.w3.org/2000/svg"
                                class="w-6 h-6"
                                fill="none"
                                viewBox="0 0 24 24"
                                stroke="currentColor"
                                stroke-width="1.5"
                            >
                                <path
                                    stroke-linecap="round"
                                    stroke-linejoin="round"
                                    d="M3 21h18M5 21V8l7-5 7 5v13M9 21v-5h6v5"
                                />
                            </svg>

                        </div>


                        <h3
                            class="mt-6
                                   text-2xl
                                   font-bold"
                        >
                            Construction
                        </h3>


                        <p
                            class="mt-3
                                   text-sm
                                   text-gray-400
                                   leading-6"
                        >
                            Quality testing for construction
                            materials, structures and projects.
                        </p>

                    </div>


                    <span
                        class="text-xs
                               uppercase
                               tracking-widest
                               text-gray-500
                               group-hover:text-white
                               transition"
                    >
                        Explore Application →
                    </span>

                </div>

            </div>


            {{-- Civil Engineering --}}
            <div
                class="group relative
                       min-h-[310px]
                       bg-[#061B2D]
                       p-7
                       overflow-hidden
                       transition-all duration-500
                       hover:bg-[#073B66]"
            >

                <div
                    class="absolute
                           -right-10 -bottom-10
                           w-40 h-40
                           rounded-full
                           border border-white/10
                           group-hover:scale-150
                           transition-transform duration-700"
                ></div>


                <div class="relative z-10 h-full
                            flex flex-col justify-between">

                    <div>

                        <span
                            class="text-[#E31E24]
                                   text-xs font-bold
                                   tracking-widest"
                        >
                            02
                        </span>


                        <div
                            class="mt-7
                                   w-12 h-12
                                   border border-white/20
                                   flex items-center justify-center
                                   group-hover:border-[#E31E24]
                                   transition"
                        >

                            <svg
                                xmlns="http://www.w3.org/2000/svg"
                                class="w-6 h-6"
                                fill="none"
                                viewBox="0 0 24 24"
                                stroke="currentColor"
                                stroke-width="1.5"
                            >
                                <path
                                    stroke-linecap="round"
                                    stroke-linejoin="round"
                                    d="M4 20h16M6 20V9m6 11V4m6 16v-8M4 9l8-5 8 5"
                                />
                            </svg>

                        </div>


                        <h3
                            class="mt-6 text-2xl font-bold"
                        >
                            Civil Engineering
                        </h3>


                        <p
                            class="mt-3 text-sm
                                   text-gray-400
                                   leading-6"
                        >
                            Reliable instruments for civil
                            engineering testing and research.
                        </p>

                    </div>


                    <span
                        class="text-xs uppercase
                               tracking-widest
                               text-gray-500
                               group-hover:text-white
                               transition"
                    >
                        Explore Application →
                    </span>

                </div>

            </div>


            {{-- Infrastructure --}}
            <div
                class="group relative
                       min-h-[310px]
                       bg-[#061B2D]
                       p-7
                       overflow-hidden
                       transition-all duration-500
                       hover:bg-[#073B66]"
            >

                <div
                    class="absolute
                           -right-10 -bottom-10
                           w-40 h-40
                           rounded-full
                           border border-white/10
                           group-hover:scale-150
                           transition-transform duration-700"
                ></div>


                <div class="relative z-10 h-full
                            flex flex-col justify-between">

                    <div>

                        <span
                            class="text-[#E31E24]
                                   text-xs font-bold
                                   tracking-widest"
                        >
                            03
                        </span>


                        <div
                            class="mt-7
                                   w-12 h-12
                                   border border-white/20
                                   flex items-center justify-center
                                   group-hover:border-[#E31E24]
                                   transition"
                        >

                            <svg
                                xmlns="http://www.w3.org/2000/svg"
                                class="w-6 h-6"
                                fill="none"
                                viewBox="0 0 24 24"
                                stroke="currentColor"
                                stroke-width="1.5"
                            >
                                <path
                                    stroke-linecap="round"
                                    stroke-linejoin="round"
                                    d="M4 19h16M5 19V9h4v10m3 0V5h4v14m3 0v-7h3v7"
                                />
                            </svg>

                        </div>


                        <h3
                            class="mt-6 text-2xl font-bold"
                        >
                            Infrastructure
                        </h3>


                        <p
                            class="mt-3 text-sm
                                   text-gray-400
                                   leading-6"
                        >
                            Testing solutions supporting roads,
                            bridges and infrastructure projects.
                        </p>

                    </div>


                    <span
                        class="text-xs uppercase
                               tracking-widest
                               text-gray-500
                               group-hover:text-white
                               transition"
                    >
                        Explore Application →
                    </span>

                </div>

            </div>


            {{-- Laboratories --}}
            <div
                class="group relative
                       min-h-[310px]
                       bg-[#061B2D]
                       p-7
                       overflow-hidden
                       transition-all duration-500
                       hover:bg-[#073B66]"
            >

                <div
                    class="absolute
                           -right-10 -bottom-10
                           w-40 h-40
                           rounded-full
                           border border-white/10
                           group-hover:scale-150
                           transition-transform duration-700"
                ></div>


                <div class="relative z-10 h-full
                            flex flex-col justify-between">

                    <div>

                        <span
                            class="text-[#E31E24]
                                   text-xs font-bold
                                   tracking-widest"
                        >
                            04
                        </span>


                        <div
                            class="mt-7
                                   w-12 h-12
                                   border border-white/20
                                   flex items-center justify-center
                                   group-hover:border-[#E31E24]
                                   transition"
                        >

                            <svg
                                xmlns="http://www.w3.org/2000/svg"
                                class="w-6 h-6"
                                fill="none"
                                viewBox="0 0 24 24"
                                stroke="currentColor"
                                stroke-width="1.5"
                            >
                                <path
                                    stroke-linecap="round"
                                    stroke-linejoin="round"
                                    d="M9 3h6M10 3v6.5L5.5 18a2 2 0 001.7 3h9.6a2 2 0 001.7-3L14 9.5V3M8 16h8"
                                />
                            </svg>

                        </div>


                        <h3
                            class="mt-6 text-2xl font-bold"
                        >
                            Laboratories
                        </h3>


                        <p
                            class="mt-3 text-sm
                                   text-gray-400
                                   leading-6"
                        >
                            Professional laboratory testing,
                            measurement and research applications.
                        </p>

                    </div>


                    <span
                        class="text-xs uppercase
                               tracking-widest
                               text-gray-500
                               group-hover:text-white
                               transition"
                    >
                        Explore Application →
                    </span>

                </div>

            </div>

        </div>


        {{-- Bottom Statement --}}
        <div
            class="mt-14
                   flex flex-col md:flex-row
                   md:items-center
                   md:justify-between
                   gap-6"
        >

            <p
                class="text-gray-400
                       text-sm
                       max-w-2xl
                       leading-6"
            >
                From material characterization to quality
                assurance, ASEW equipment is designed to support
                accurate and dependable testing.
            </p>


            <a
                href="#contact"
                class="inline-flex items-center
                       justify-center
                       border border-white/20
                       bg-white/5
                       hover:bg-[#E31E24]
                       hover:border-[#E31E24]
                       px-6 py-3
                       text-sm font-semibold
                       transition"
            >
                Discuss Your Requirement
                <span class="ml-3">→</span>
            </a>

        </div>

    </div>

</section>

{{-- =========================================================
     WHY CHOOSE ASEW
========================================================= --}}

<section
    id="why-asew"
    class="relative bg-white py-24 lg:py-32 overflow-hidden"
>

    {{-- Decorative element --}}
    <div
        class="absolute right-0 top-0
               w-[420px] h-[420px]
               rounded-full
               border-[60px]
               border-[#073B66]/[0.025]
               translate-x-1/3 -translate-y-1/3"
    ></div>


    <div
        class="max-w-7xl mx-auto
               px-5 sm:px-8 lg:px-10"
    >

        {{-- Top heading --}}
        <div
            class="grid lg:grid-cols-2
                   gap-12 lg:gap-20
                   items-end mb-16"
        >

            <div>

                <div
                    class="flex items-center gap-3 mb-5"
                >

                    <span
                        class="w-10 h-[2px]
                               bg-[#E31E24]"
                    ></span>

                    <span
                        class="text-[#E31E24]
                               text-xs font-bold
                               uppercase
                               tracking-[0.22em]"
                    >
                        Why ASEW
                    </span>

                </div>


                <h2
                    class="text-[#073B66]
                           text-4xl sm:text-5xl lg:text-6xl
                           font-bold
                           leading-tight"
                >
                    Built around
                    <span class="text-[#E31E24]">
                        precision.
                    </span>
                    Trusted for
                    <span class="text-[#073B66]">
                        performance.
                    </span>
                </h2>

            </div>


            <div>

                <p
                    class="text-gray-600
                           text-base lg:text-lg
                           leading-8"
                >
                    We combine engineering expertise,
                    dependable testing equipment and
                    application-focused support to help
                    professionals achieve accurate and
                    repeatable results.
                </p>

            </div>

        </div>


        {{-- Main Feature Layout --}}
        <div
            class="grid lg:grid-cols-12
                   gap-6"
        >

            {{-- Large experience block --}}
            <div
                class="lg:col-span-5
                       relative
                       min-h-[430px]
                       bg-[#073B66]
                       p-8 sm:p-10
                       overflow-hidden"
            >

                {{-- Large number --}}
                <div
                    class="absolute
                           -right-8 -top-12
                           text-[190px]
                           lg:text-[220px]
                           font-black
                           leading-none
                           text-white/[0.04]"
                >
                    50+
                </div>


                <div
                    class="relative z-10
                           h-full
                           flex flex-col
                           justify-between"
                >

                    <div>

                        <span
                            class="text-[#E31E24]
                                   text-xs
                                   font-bold
                                   uppercase
                                   tracking-[0.2em]"
                        >
                            Experience
                        </span>


                        <div
                            class="mt-10
                                   text-7xl sm:text-8xl
                                   font-bold
                                   tracking-tight"
                        >
                            50+
                        </div>


                        <h3
                            class="mt-3
                                   text-2xl
                                   font-bold"
                        >
                            Years of Engineering Experience
                        </h3>


                        <p
                            class="mt-5
                                   text-blue-100/70
                                   leading-7
                                   max-w-md"
                        >
                            Decades of experience in scientific,
                            engineering and testing solutions.
                        </p>

                    </div>


                    <div
                        class="mt-10
                               pt-6
                               border-t border-white/10"
                    >

                        <span
                            class="text-xs
                                   text-blue-100/60
                                   uppercase
                                   tracking-widest"
                        >
                            Since 1975
                        </span>

                    </div>

                </div>

            </div>


            {{-- Right features --}}
            <div
                class="lg:col-span-7
                       grid sm:grid-cols-2
                       gap-6"
            >

                {{-- Precision --}}
                <div
                    class="group
                           border border-gray-200
                           p-7 sm:p-8
                           bg-white
                           hover:border-[#073B66]
                           hover:shadow-xl
                           transition-all duration-500"
                >

                    <div
                        class="flex items-start
                               justify-between"
                    >

                        <span
                            class="text-[#E31E24]
                                   text-xs
                                   font-bold
                                   tracking-widest"
                        >
                            01
                        </span>


                        <div
                            class="w-11 h-11
                                   border border-gray-200
                                   flex items-center
                                   justify-center
                                   text-[#073B66]
                                   group-hover:bg-[#E31E24]
                                   group-hover:text-white
                                   group-hover:border-[#E31E24]
                                   transition"
                        >

                            <svg
                                xmlns="http://www.w3.org/2000/svg"
                                class="w-5 h-5"
                                fill="none"
                                viewBox="0 0 24 24"
                                stroke="currentColor"
                                stroke-width="1.6"
                            >
                                <path
                                    stroke-linecap="round"
                                    stroke-linejoin="round"
                                    d="M12 3v18M3 12h18M5.5 5.5l13 13M18.5 5.5l-13 13"
                                />
                            </svg>

                        </div>

                    </div>


                    <h3
                        class="mt-8
                               text-xl
                               font-bold
                               text-[#073B66]"
                    >
                        Precision Engineering
                    </h3>


                    <p
                        class="mt-3
                               text-sm
                               text-gray-500
                               leading-6"
                    >
                        Equipment designed to deliver
                        dependable and repeatable testing
                        performance.
                    </p>

                </div>


                {{-- Product Range --}}
                <div
                    class="group
                           border border-gray-200
                           p-7 sm:p-8
                           bg-white
                           hover:border-[#073B66]
                           hover:shadow-xl
                           transition-all duration-500"
                >

                    <div
                        class="flex items-start
                               justify-between"
                    >

                        <span
                            class="text-[#E31E24]
                                   text-xs
                                   font-bold
                                   tracking-widest"
                        >
                            02
                        </span>


                        <div
                            class="w-11 h-11
                                   border border-gray-200
                                   flex items-center
                                   justify-center
                                   text-[#073B66]
                                   group-hover:bg-[#E31E24]
                                   group-hover:text-white
                                   group-hover:border-[#E31E24]
                                   transition"
                        >

                            <svg
                                xmlns="http://www.w3.org/2000/svg"
                                class="w-5 h-5"
                                fill="none"
                                viewBox="0 0 24 24"
                                stroke="currentColor"
                                stroke-width="1.6"
                            >
                                <path
                                    stroke-linecap="round"
                                    stroke-linejoin="round"
                                    d="M4 6h16M4 12h16M4 18h16"
                                />
                            </svg>

                        </div>

                    </div>


                    <h3
                        class="mt-8
                               text-xl
                               font-bold
                               text-[#073B66]"
                    >
                        Comprehensive Equipment
                    </h3>


                    <p
                        class="mt-3
                               text-sm
                               text-gray-500
                               leading-6"
                    >
                        A wide range of testing and measurement
                        solutions for professional applications.
                    </p>

                </div>


                {{-- Quality --}}
                <div
                    class="group
                           border border-gray-200
                           p-7 sm:p-8
                           bg-white
                           hover:border-[#073B66]
                           hover:shadow-xl
                           transition-all duration-500"
                >

                    <div
                        class="flex items-start
                               justify-between"
                    >

                        <span
                            class="text-[#E31E24]
                                   text-xs
                                   font-bold
                                   tracking-widest"
                        >
                            03
                        </span>


                        <div
                            class="w-11 h-11
                                   border border-gray-200
                                   flex items-center
                                   justify-center
                                   text-[#073B66]
                                   group-hover:bg-[#E31E24]
                                   group-hover:text-white
                                   group-hover:border-[#E31E24]
                                   transition"
                        >

                            <svg
                                xmlns="http://www.w3.org/2000/svg"
                                class="w-5 h-5"
                                fill="none"
                                viewBox="0 0 24 24"
                                stroke="currentColor"
                                stroke-width="1.6"
                            >
                                <path
                                    stroke-linecap="round"
                                    stroke-linejoin="round"
                                    d="M9 12l2 2 4-4m5.5 2a8.5 8.5 0 11-17 0 8.5 8.5 0 0117 0z"
                                />
                            </svg>

                        </div>

                    </div>


                    <h3
                        class="mt-8
                               text-xl
                               font-bold
                               text-[#073B66]"
                    >
                        Quality Focused
                    </h3>


                    <p
                        class="mt-3
                               text-sm
                               text-gray-500
                               leading-6"
                    >
                        Solutions focused on accuracy, durability
                        and dependable testing results.
                    </p>

                </div>


                {{-- Support --}}
                <div
                    class="group
                           border border-gray-200
                           p-7 sm:p-8
                           bg-white
                           hover:border-[#073B66]
                           hover:shadow-xl
                           transition-all duration-500"
                >

                    <div
                        class="flex items-start
                               justify-between"
                    >

                        <span
                            class="text-[#E31E24]
                                   text-xs
                                   font-bold
                                   tracking-widest"
                        >
                            04
                        </span>


                        <div
                            class="w-11 h-11
                                   border border-gray-200
                                   flex items-center
                                   justify-center
                                   text-[#073B66]
                                   group-hover:bg-[#E31E24]
                                   group-hover:text-white
                                   group-hover:border-[#E31E24]
                                   transition"
                        >

                            <svg
                                xmlns="http://www.w3.org/2000/svg"
                                class="w-5 h-5"
                                fill="none"
                                viewBox="0 0 24 24"
                                stroke="currentColor"
                                stroke-width="1.6"
                            >
                                <path
                                    stroke-linecap="round"
                                    stroke-linejoin="round"
                                    d="M18 10a6 6 0 00-12 0v3a2 2 0 002 2h1v-5H8a4 4 0 018 0h-1v5h1a2 2 0 002-2v-3zM12 21a4 4 0 004-4"
                                />
                            </svg>

                        </div>

                    </div>


                    <h3
                        class="mt-8
                               text-xl
                               font-bold
                               text-[#073B66]"
                    >
                        Application Support
                    </h3>


                    <p
                        class="mt-3
                               text-sm
                               text-gray-500
                               leading-6"
                    >
                        Helping customers identify suitable
                        equipment for their testing requirements.
                    </p>

                </div>

            </div>

        </div>


        {{-- Bottom CTA --}}
        <div
            class="mt-10
                   bg-[#F4F6F8]
                   border border-gray-200
                   p-7 sm:p-9
                   flex flex-col
                   md:flex-row
                   md:items-center
                   md:justify-between
                   gap-6"
        >

            <div>

                <p
                    class="text-[#073B66]
                           font-bold text-lg"
                >
                    Need help selecting the right equipment?
                </p>

                <p
                    class="mt-1
                           text-sm text-gray-500"
                >
                    Tell us your testing requirement and
                    our team can help you find the right solution.
                </p>

            </div>


            <a
                href="#contact"
                class="shrink-0
                       inline-flex items-center
                       justify-center
                       bg-[#E31E24]
                       hover:bg-[#C8181D]
                       text-white
                       px-7 py-3.5
                       font-semibold
                       transition"
            >
                Request a Quote

                <span class="ml-3">
                    →
                </span>
            </a>

        </div>

    </div>

</section>


{{-- =========================================================
     ABOUT ASEW / COMPANY STORY
========================================================= --}}

<section
    id="about"
    class="relative bg-[#F6F8FA] py-24 lg:py-32 overflow-hidden"
>

    <div class="max-w-7xl mx-auto px-5 sm:px-8 lg:px-10">

        <div class="grid lg:grid-cols-2 gap-14 lg:gap-20 items-center">

            {{-- LEFT: IMAGE / VISUAL --}}
            <div class="relative">

                {{-- Main image --}}
                <div
                    class="relative
                           h-[480px] sm:h-[560px]
                           overflow-hidden
                           bg-[#073B66]"
                >

                    <img
                        src="{{ asset('images/about-asew.jpg') }}"
                        alt="Associated Scientific & Engineering"
                        class="w-full h-full
                               object-cover
                               hover:scale-105
                               transition-transform duration-700"
                    >

                    {{-- Overlay --}}
                    <div
                        class="absolute inset-0
                               bg-gradient-to-t
                               from-[#061B2D]/80
                               via-transparent
                               to-transparent"
                    ></div>


                    {{-- Image label --}}
                    <div
                        class="absolute
                               left-6 bottom-6
                               right-6
                               flex items-end
                               justify-between"
                    >

                        <div>

                            <p
                                class="text-white/60
                                       text-[10px]
                                       uppercase
                                       tracking-[0.2em]"
                            >
                                Associated Scientific
                                & Engineering
                            </p>

                            <p
                                class="mt-1
                                       text-white
                                       text-xl
                                       font-bold"
                            >
                                Engineering Testing Solutions
                            </p>

                        </div>

                    </div>

                </div>


                {{-- Floating experience card --}}
                <div
                    class="absolute
                           -bottom-8
                           right-5 sm:-right-8
                           w-[190px]
                           bg-[#E31E24]
                           text-white
                           p-6
                           shadow-2xl"
                >

                    <span
                        class="text-5xl
                               font-bold
                               leading-none"
                    >
                        50+
                    </span>

                    <p
                        class="mt-2
                               text-sm
                               font-semibold
                               leading-5"
                    >
                        Years of Engineering
                        Experience
                    </p>

                    <div
                        class="mt-4
                               w-10 h-[2px]
                               bg-white/50"
                    ></div>

                    <p
                        class="mt-3
                               text-[10px]
                               uppercase
                               tracking-widest
                               text-white/70"
                    >
                        Since 1975
                    </p>

                </div>


                {{-- Decorative square --}}
                <div
                    class="absolute
                           -left-4 -top-4
                           w-20 h-20
                           border-2
                           border-[#E31E24]"
                ></div>

            </div>


            {{-- RIGHT: CONTENT --}}
            <div class="lg:py-8">

                {{-- Eyebrow --}}
                <div
                    class="flex items-center gap-3 mb-5"
                >

                    <span
                        class="w-10 h-[2px]
                               bg-[#E31E24]"
                    ></span>

                    <span
                        class="text-[#E31E24]
                               text-xs
                               font-bold
                               uppercase
                               tracking-[0.22em]"
                    >
                        About ASEW
                    </span>

                </div>


                <h2
                    class="text-[#073B66]
                           text-4xl sm:text-5xl
                           lg:text-6xl
                           font-bold
                           leading-tight"
                >
                    Engineering
                    <span class="text-[#E31E24]">
                        confidence
                    </span>
                    through testing.
                </h2>


                <p
                    class="mt-7
                           text-gray-600
                           text-base lg:text-lg
                           leading-8"
                >
                    Associated Scientific & Engineering provides
                    testing and measurement solutions for
                    scientific, engineering and industrial
                    applications.
                </p>


                <p
                    class="mt-5
                           text-gray-500
                           leading-7"
                >
                    Our focus is to provide dependable equipment
                    that helps professionals measure, evaluate
                    and maintain the quality of materials and
                    engineering projects.
                </p>


                {{-- Key points --}}
                <div
                    class="mt-9
                           grid sm:grid-cols-2
                           gap-x-8 gap-y-6"
                >

                    <div class="flex gap-4">

                        <span
                            class="shrink-0
                                   w-9 h-9
                                   bg-[#073B66]
                                   text-white
                                   flex items-center
                                   justify-center
                                   text-sm
                                   font-bold"
                        >
                            01
                        </span>

                        <div>

                            <h3
                                class="font-bold
                                       text-[#073B66]"
                            >
                                Testing Expertise
                            </h3>

                            <p
                                class="mt-1
                                       text-sm
                                       text-gray-500
                                       leading-6"
                            >
                                Solutions designed around
                                professional testing needs.
                            </p>

                        </div>

                    </div>


                    <div class="flex gap-4">

                        <span
                            class="shrink-0
                                   w-9 h-9
                                   bg-[#073B66]
                                   text-white
                                   flex items-center
                                   justify-center
                                   text-sm
                                   font-bold"
                        >
                            02
                        </span>

                        <div>

                            <h3
                                class="font-bold
                                       text-[#073B66]"
                            >
                                Reliable Equipment
                            </h3>

                            <p
                                class="mt-1
                                       text-sm
                                       text-gray-500
                                       leading-6"
                            >
                                Equipment focused on
                                dependable performance.
                            </p>

                        </div>

                    </div>


                    <div class="flex gap-4">

                        <span
                            class="shrink-0
                                   w-9 h-9
                                   bg-[#073B66]
                                   text-white
                                   flex items-center
                                   justify-center
                                   text-sm
                                   font-bold"
                        >
                            03
                        </span>

                        <div>

                            <h3
                                class="font-bold
                                       text-[#073B66]"
                            >
                                Industrial Applications
                            </h3>

                            <p
                                class="mt-1
                                       text-sm
                                       text-gray-500
                                       leading-6"
                            >
                                Built for demanding engineering
                                environments.
                            </p>

                        </div>

                    </div>


                    <div class="flex gap-4">

                        <span
                            class="shrink-0
                                   w-9 h-9
                                   bg-[#073B66]
                                   text-white
                                   flex items-center
                                   justify-center
                                   text-sm
                                   font-bold"
                        >
                            04
                        </span>

                        <div>

                            <h3
                                class="font-bold
                                       text-[#073B66]"
                            >
                                Customer Support
                            </h3>

                            <p
                                class="mt-1
                                       text-sm
                                       text-gray-500
                                       leading-6"
                            >
                                Support to help identify
                                suitable solutions.
                            </p>

                        </div>

                    </div>

                </div>


                {{-- CTA --}}
                <div
                    class="mt-10
                           flex flex-col sm:flex-row
                           gap-4"
                >

                    <a
                        href="#contact"
                        class="inline-flex
                               items-center
                               justify-center
                               bg-[#073B66]
                               hover:bg-[#E31E24]
                               text-white
                               px-7 py-3.5
                               font-semibold
                               transition"
                    >
                        Talk to Our Team

                        <span class="ml-3">
                            →
                        </span>
                    </a>


                    <a
                        href="#products"
                        class="inline-flex
                               items-center
                               justify-center
                               border border-[#073B66]/20
                               text-[#073B66]
                               hover:border-[#E31E24]
                               hover:text-[#E31E24]
                               px-7 py-3.5
                               font-semibold
                               transition"
                    >
                        Explore Equipment
                    </a>

                </div>

            </div>

        </div>

    </div>

</section>


{{-- =========================================================
     COMPANY VIDEO SHOWCASE
========================================================= --}}

<section
    id="company-video"
    class="relative w-full min-h-[600px] lg:min-h-[720px]
           overflow-hidden bg-[#061B2D]"
>

    {{-- Background Video --}}
    <video
        class="absolute inset-0
               w-full h-full
               object-cover"
        autoplay
        muted
        loop
        playsinline
        preload="metadata"
    >
        <source
            src="{{ asset('videos/asew-company-intro.mp4') }}"
            type="video/mp4"
        >
    </video>


    {{-- Dark overlay --}}
    <div
        class="absolute inset-0
               bg-[#061B2D]/65"
    ></div>


    {{-- Left cinematic gradient --}}
    <div
        class="absolute inset-0
               bg-gradient-to-r
               from-[#061B2D]/95
               via-[#061B2D]/65
               to-transparent"
    ></div>


    {{-- Bottom gradient --}}
    <div
        class="absolute inset-x-0 bottom-0
               h-48
               bg-gradient-to-t
               from-[#061B2D]
               to-transparent"
    ></div>


    {{-- Content --}}
    <div
        class="relative z-10
               min-h-[600px] lg:min-h-[720px]
               max-w-7xl mx-auto
               px-5 sm:px-8 lg:px-10
               flex items-center"
    >

        <div class="max-w-3xl">

            {{-- Label --}}
            <div
                class="flex items-center gap-3 mb-6"
            >

                <span
                    class="w-10 h-[2px]
                           bg-[#E31E24]"
                ></span>

                <span
                    class="text-white
                           text-xs font-bold
                           uppercase
                           tracking-[0.25em]"
                >
                    Inside ASEW
                </span>

            </div>


            {{-- Heading --}}
            <h2
                class="text-white
                       text-4xl sm:text-5xl
                       lg:text-7xl
                       font-bold
                       leading-[1.05]"
            >
                Engineering
                <span class="text-[#E31E24]">
                    solutions.
                </span>

                <br>

                Built for
                <span class="text-white/90">
                    accuracy.
                </span>
            </h2>


            {{-- Description --}}
            <p
                class="mt-7
                       max-w-2xl
                       text-white/70
                       text-base lg:text-lg
                       leading-8"
            >
                Explore Associated Scientific & Engineering
                and discover our approach to testing,
                measurement and engineering solutions.
            </p>


            {{-- Buttons --}}
            <div
                class="mt-9
                       flex flex-col sm:flex-row
                       gap-4"
            >

                <a
                    href="#products"
                    class="inline-flex
                           items-center
                           justify-center
                           bg-[#E31E24]
                           hover:bg-[#C8181D]
                           text-white
                           px-7 py-3.5
                           font-semibold
                           transition"
                >
                    Explore Our Equipment

                    <span class="ml-3">
                        →
                    </span>
                </a>


                <a
                    href="#contact"
                    class="inline-flex
                           items-center
                           justify-center
                           border border-white/30
                           bg-white/5
                           hover:bg-white
                           hover:text-[#073B66]
                           text-white
                           px-7 py-3.5
                           font-semibold
                           transition"
                >
                    Request a Quote
                </a>

            </div>

        </div>

    </div>


    {{-- Bottom information strip --}}
    <div
        class="absolute
               bottom-0 left-0 right-0
               z-20"
    >

        <div
            class="max-w-7xl mx-auto
                   px-5 sm:px-8 lg:px-10
                   pb-7"
        >

            <div
                class="flex flex-wrap
                       items-center
                       gap-x-8 gap-y-3
                       text-white/60
                       text-xs
                       uppercase
                       tracking-widest"
            >

                <span>
                    Scientific Testing
                </span>

                <span class="text-[#E31E24]">
                    •
                </span>

                <span>
                    Engineering Equipment
                </span>

                <span class="text-[#E31E24]">
                    •
                </span>

                <span>
                    Industrial Applications
                </span>

            </div>

        </div>

    </div>

</section>

{{-- =========================================================
     REQUEST A QUOTE / CONTACT
========================================================= --}}

<section
    id="contact"
    class="relative bg-white py-24 lg:py-32 overflow-hidden"
>

    <div class="max-w-7xl mx-auto px-5 sm:px-8 lg:px-10">

        {{-- Heading --}}
        <div class="max-w-3xl mb-14">

            <div class="flex items-center gap-3 mb-5">

                <span
                    class="w-10 h-[2px] bg-[#E31E24]"
                ></span>

                <span
                    class="text-[#E31E24]
                           text-xs font-bold
                           uppercase
                           tracking-[0.22em]"
                >
                    Request a Quote
                </span>

            </div>

            <h2
                class="text-[#073B66]
                       text-4xl sm:text-5xl lg:text-6xl
                       font-bold leading-tight"
            >
                Tell us what you need
                <span class="text-[#E31E24]">
                    to test.
                </span>
            </h2>

            <p
                class="mt-5
                       text-gray-600
                       text-base lg:text-lg
                       leading-8"
            >
                Share your testing requirement with our team.
                We will help you identify the right equipment
                for your application.
            </p>

        </div>


        {{-- Main Contact Area --}}
        <div
            class="grid lg:grid-cols-12
                   border border-gray-200"
        >

            {{-- LEFT INFORMATION --}}
            <div
                class="lg:col-span-5
                       bg-[#073B66]
                       text-white
                       p-8 sm:p-10 lg:p-12
                       relative overflow-hidden"
            >

                {{-- Decorative circle --}}
                <div
                    class="absolute
                           -right-24 -top-24
                           w-72 h-72
                           rounded-full
                           border-[40px]
                           border-white/[0.04]"
                ></div>

                <div
                    class="relative z-10"
                >

                    <p
                        class="text-[#E31E24]
                               text-xs font-bold
                               uppercase
                               tracking-[0.2em]"
                    >
                        Associated Scientific & Engineering
                    </p>

                    <h3
                        class="mt-5
                               text-3xl
                               font-bold
                               leading-tight"
                    >
                        Let's discuss your
                        testing requirement.
                    </h3>

                    <p
                        class="mt-5
                               text-blue-100/70
                               leading-7"
                    >
                        Whether you need a specific testing
                        instrument or are looking for a complete
                        testing solution, our team is ready to
                        assist.
                    </p>


                    {{-- Contact details --}}
                    <div class="mt-10 space-y-6">

                        {{-- Phone --}}
                        <a
                            href="tel:+919999999999"
                            class="flex gap-4
                                   group"
                        >

                            <div
                                class="shrink-0
                                       w-11 h-11
                                       border border-white/20
                                       flex items-center justify-center
                                       group-hover:bg-[#E31E24]
                                       group-hover:border-[#E31E24]
                                       transition"
                            >

                                <svg
                                    xmlns="http://www.w3.org/2000/svg"
                                    class="w-5 h-5"
                                    fill="none"
                                    viewBox="0 0 24 24"
                                    stroke="currentColor"
                                    stroke-width="1.6"
                                >
                                    <path
                                        stroke-linecap="round"
                                        stroke-linejoin="round"
                                        d="M2.5 5.5A2.5 2.5 0 015 3h2l2 5-2 1.5a16 16 0 007.5 7.5L16 15l5 2v2a2.5 2.5 0 01-2.5 2.5C10.5 21.5 2.5 13.5 2.5 5.5Z"
                                    />
                                </svg>

                            </div>

                            <div>

                                <p
                                    class="text-xs
                                           text-blue-100/50
                                           uppercase
                                           tracking-widest"
                                >
                                    Call us
                                </p>

                                <p
                                    class="mt-1
                                           font-semibold"
                                >
                                    +91 99999 99999
                                </p>

                            </div>

                        </a>


                        {{-- Email --}}
                        <a
                            href="mailto:info@asew.in"
                            class="flex gap-4
                                   group"
                        >

                            <div
                                class="shrink-0
                                       w-11 h-11
                                       border border-white/20
                                       flex items-center justify-center
                                       group-hover:bg-[#E31E24]
                                       group-hover:border-[#E31E24]
                                       transition"
                            >

                                <svg
                                    xmlns="http://www.w3.org/2000/svg"
                                    class="w-5 h-5"
                                    fill="none"
                                    viewBox="0 0 24 24"
                                    stroke="currentColor"
                                    stroke-width="1.6"
                                >
                                    <path
                                        stroke-linecap="round"
                                        stroke-linejoin="round"
                                        d="M3 6.5h18v11H3v-11Zm0 0 9 7 9-7"
                                    />
                                </svg>

                            </div>

                            <div>

                                <p
                                    class="text-xs
                                           text-blue-100/50
                                           uppercase
                                           tracking-widest"
                                >
                                    Email us
                                </p>

                                <p
                                    class="mt-1
                                           font-semibold"
                                >
                                    info@asew.in
                                </p>

                            </div>

                        </a>


                        {{-- Working hours --}}
                        <div
                            class="flex gap-4"
                        >

                            <div
                                class="shrink-0
                                       w-11 h-11
                                       border border-white/20
                                       flex items-center justify-center"
                            >

                                <svg
                                    xmlns="http://www.w3.org/2000/svg"
                                    class="w-5 h-5"
                                    fill="none"
                                    viewBox="0 0 24 24"
                                    stroke="currentColor"
                                    stroke-width="1.6"
                                >
                                    <circle
                                        cx="12"
                                        cy="12"
                                        r="8.5"
                                    />

                                    <path
                                        stroke-linecap="round"
                                        d="M12 7v5l3 2"
                                    />
                                </svg>

                            </div>

                            <div>

                                <p
                                    class="text-xs
                                           text-blue-100/50
                                           uppercase
                                           tracking-widest"
                                >
                                    Working Hours
                                </p>

                                <p
                                    class="mt-1
                                           font-semibold"
                                >
                                    Mon – Sat: 9:00 AM – 6:00 PM
                                </p>

                            </div>

                        </div>

                    </div>


                    {{-- Bottom note --}}
                    <div
                        class="mt-12
                               pt-6
                               border-t border-white/10"
                    >

                        <p
                            class="text-sm
                                   text-blue-100/60
                                   leading-6"
                        >
                            Looking for a specific instrument?
                            Mention the product name or testing
                            application in your enquiry.
                        </p>

                    </div>

                </div>

            </div>


            {{-- RIGHT FORM --}}
            <div
                class="lg:col-span-7
                       p-8 sm:p-10 lg:p-12
                       bg-white"
            >

                <form
                    action="#"
                    method="POST"
                    class="space-y-6"
                >

                    @csrf

                    {{-- Name + Company --}}
                    <div
                        class="grid sm:grid-cols-2
                               gap-5"
                    >

                        <div>

                            <label
                                for="name"
                                class="block
                                       text-sm
                                       font-semibold
                                       text-[#073B66]
                                       mb-2"
                            >
                                Your Name
                            </label>

                            <input
                                id="name"
                                name="name"
                                type="text"
                                placeholder="Enter your name"
                                required
                                class="w-full
                                       border border-gray-200
                                       px-4 py-3.5
                                       text-sm
                                       outline-none
                                       focus:border-[#073B66]
                                       focus:ring-1
                                       focus:ring-[#073B66]
                                       transition"
                            >

                        </div>


                        <div>

                            <label
                                for="company"
                                class="block
                                       text-sm
                                       font-semibold
                                       text-[#073B66]
                                       mb-2"
                            >
                                Company
                            </label>

                            <input
                                id="company"
                                name="company"
                                type="text"
                                placeholder="Company name"
                                class="w-full
                                       border border-gray-200
                                       px-4 py-3.5
                                       text-sm
                                       outline-none
                                       focus:border-[#073B66]
                                       focus:ring-1
                                       focus:ring-[#073B66]
                                       transition"
                            >

                        </div>

                    </div>


                    {{-- Email + Phone --}}
                    <div
                        class="grid sm:grid-cols-2
                               gap-5"
                    >

                        <div>

                            <label
                                for="email"
                                class="block
                                       text-sm
                                       font-semibold
                                       text-[#073B66]
                                       mb-2"
                            >
                                Email Address
                            </label>

                            <input
                                id="email"
                                name="email"
                                type="email"
                                placeholder="you@company.com"
                                required
                                class="w-full
                                       border border-gray-200
                                       px-4 py-3.5
                                       text-sm
                                       outline-none
                                       focus:border-[#073B66]
                                       focus:ring-1
                                       focus:ring-[#073B66]
                                       transition"
                            >

                        </div>


                        <div>

                            <label
                                for="phone"
                                class="block
                                       text-sm
                                       font-semibold
                                       text-[#073B66]
                                       mb-2"
                            >
                                Phone Number
                            </label>

                            <input
                                id="phone"
                                name="phone"
                                type="tel"
                                placeholder="+91"
                                class="w-full
                                       border border-gray-200
                                       px-4 py-3.5
                                       text-sm
                                       outline-none
                                       focus:border-[#073B66]
                                       focus:ring-1
                                       focus:ring-[#073B66]
                                       transition"
                            >

                        </div>

                    </div>


                    {{-- Requirement --}}
                    <div>

                        <label
                            for="requirement"
                            class="block
                                   text-sm
                                   font-semibold
                                   text-[#073B66]
                                   mb-2"
                        >
                            Testing Requirement
                        </label>

                        <select
                            id="requirement"
                            name="requirement"
                            class="w-full
                                   border border-gray-200
                                   px-4 py-3.5
                                   text-sm
                                   text-gray-600
                                   outline-none
                                   focus:border-[#073B66]
                                   focus:ring-1
                                   focus:ring-[#073B66]
                                   transition"
                        >

                            <option value="">
                                Select an application
                            </option>

                            <option value="soil">
                                Soil Testing
                            </option>

                            <option value="concrete">
                                Concrete Testing
                            </option>

                            <option value="cement">
                                Cement Testing
                            </option>

                            <option value="aggregate">
                                Aggregate Testing
                            </option>

                            <option value="bitumen">
                                Bitumen / Asphalt Testing
                            </option>

                            <option value="laboratory">
                                Laboratory Equipment
                            </option>

                            <option value="other">
                                Other Requirement
                            </option>

                        </select>

                    </div>


                    {{-- Message --}}
                    <div>

                        <label
                            for="message"
                            class="block
                                   text-sm
                                   font-semibold
                                   text-[#073B66]
                                   mb-2"
                        >
                            Tell us about your requirement
                        </label>

                        <textarea
                            id="message"
                            name="message"
                            rows="5"
                            placeholder="Tell us what equipment or testing solution you are looking for..."
                            required
                            class="w-full
                                   border border-gray-200
                                   px-4 py-3.5
                                   text-sm
                                   outline-none
                                   resize-none
                                   focus:border-[#073B66]
                                   focus:ring-1
                                   focus:ring-[#073B66]
                                   transition"
                        ></textarea>

                    </div>


                    {{-- Submit --}}
                    <button
                        type="submit"
                        class="w-full
                               bg-[#E31E24]
                               hover:bg-[#C8181D]
                               text-white
                               py-4
                               font-bold
                               text-sm
                               uppercase
                               tracking-wider
                               transition
                               duration-300"
                    >
                        Send Enquiry
                        <span class="ml-2">→</span>
                    </button>


                    <p
                        class="text-xs
                               text-gray-400
                               text-center"
                    >
                        Our team will get back to you regarding
                        your testing requirement.
                    </p>

                </form>

            </div>

        </div>

    </div>

</section>

{{-- Product section will come here next --}}

@endsection