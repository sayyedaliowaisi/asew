@extends('layouts.app')

@section('title', 'Associated Scientific & Engineering | Testing Equipment')

@section('content')

{{-- =========================================================
     ASEW PREMIUM HERO
     FULL IMAGE - NO CROPPING
========================================================= --}}

<section
    class="relative w-full overflow-hidden bg-[#061B2D]"
>

    {{-- =====================================================
         FULL BACKGROUND IMAGE
         IMPORTANT: NO object-cover
    ====================================================== --}}
    <img
        src="{{ asset('images/hero-testing.jpg') }}"
        alt="Associated Scientific & Engineering Testing Equipment"
        class="absolute inset-0
               w-full h-full
               object-fill"
    >


    {{-- =====================================================
         LIGHT OVERLAY
    ====================================================== --}}
    <div
        class="absolute inset-0
               bg-black/10
               pointer-events-none"
    ></div>


    {{-- =====================================================
         LEFT TEXT READABILITY
    ====================================================== --}}
    <div
        class="absolute inset-0
               bg-gradient-to-r
               from-[#061B2D]/70
               via-[#061B2D]/30
               to-transparent
               pointer-events-none"
    ></div>


    {{-- =====================================================
         CONTENT
    ====================================================== --}}
    <div
        class="relative z-10
               w-full
               min-h-[520px]
               sm:min-h-[580px]
               lg:min-h-0
               aspect-[2.04/1]
               flex items-center"
    >

        <div
            class="w-full
                   max-w-7xl
                   mx-auto
                   px-5
                   sm:px-8
                   lg:px-10"
        >

            <div
                class="max-w-[620px]
                       py-10
                       sm:py-14
                       lg:py-16"
            >

                {{-- EYEBROW --}}
                <div
                    class="flex items-center gap-3
                           mb-4
                           sm:mb-5
                           lg:mb-6"
                >

                    <span
                        class="w-10
                               sm:w-12
                               h-[2px]
                               bg-[#E31E24]"
                    ></span>

                    <span
                        class="text-white
                               text-[10px]
                               sm:text-xs
                               lg:text-sm
                               font-semibold
                               tracking-[0.18em]
                               sm:tracking-[0.22em]
                               uppercase"
                    >
                        Scientific & Material Testing
                    </span>

                </div>


                {{-- HEADING --}}
                <h1
                    class="text-white
                           text-3xl
                           sm:text-4xl
                           md:text-5xl
                           lg:text-6xl
                           xl:text-7xl
                           font-bold
                           leading-[1.02]
                           tracking-tight"
                >

                    Precision Testing

                    <span class="block text-[#E31E24]">
                        Instruments
                    </span>

                    <span class="block">
                        for Modern Engineering
                    </span>

                </h1>


                {{-- DESCRIPTION --}}
                <p
                    class="mt-4
                           sm:mt-5
                           lg:mt-6
                           max-w-xl
                           text-sm
                           sm:text-base
                           lg:text-lg
                           leading-6
                           sm:leading-7
                           text-white/90"
                >
                    Reliable scientific and engineering testing
                    equipment for construction, infrastructure,
                    laboratories and material testing applications.
                </p>


                {{-- TRUST ITEMS --}}
                <div
                    class="mt-5
                           sm:mt-6
                           flex flex-wrap
                           gap-x-6
                           gap-y-3"
                >

                    <div
                        class="flex items-center gap-2"
                    >

                        <div
                            class="flex items-center justify-center
                                   w-8 h-8
                                   border border-white/30
                                   text-[#E31E24]
                                   text-xs
                                   font-bold"
                        >
                            50+
                        </div>

                        <div>

                            <p
                                class="text-white
                                       font-semibold
                                       text-xs
                                       sm:text-sm"
                            >
                                Years of Experience
                            </p>

                            <p
                                class="text-white/60
                                       text-[10px]
                                       sm:text-xs"
                            >
                                Since 1975
                            </p>

                        </div>

                    </div>


                    <div
                        class="flex items-center gap-2"
                    >

                        <div
                            class="flex items-center justify-center
                                   w-8 h-8
                                   border border-white/30
                                   text-[#E31E24]
                                   text-sm
                                   font-bold"
                        >
                            ✓
                        </div>

                        <div>

                            <p
                                class="text-white
                                       font-semibold
                                       text-xs
                                       sm:text-sm"
                            >
                                Precision Equipment
                            </p>

                            <p
                                class="text-white/60
                                       text-[10px]
                                       sm:text-xs"
                            >
                                Professional Solutions
                            </p>

                        </div>

                    </div>

                </div>


                {{-- BUTTONS --}}
                <div
                    class="mt-6
                           sm:mt-7
                           flex flex-col
                           sm:flex-row
                           gap-3"
                >

                    <a
                        href="#products"
                        class="inline-flex
                               items-center
                               justify-center
                               bg-[#E31E24]
                               hover:bg-[#C8181D]
                               text-white
                               px-6
                               sm:px-7
                               py-3
                               sm:py-3.5
                               font-semibold
                               text-xs
                               sm:text-sm
                               transition-all
                               duration-300
                               shadow-lg
                               shadow-black/20"
                    >
                        Explore Our Products

                        <svg
                            xmlns="http://www.w3.org/2000/svg"
                            class="w-4 h-4
                                   ml-2
                                   transition-transform
                                   group-hover:translate-x-1"
                            fill="none"
                            viewBox="0 0 24 24"
                            stroke="currentColor"
                            stroke-width="2"
                        >
                            <path
                                stroke-linecap="round"
                                stroke-linejoin="round"
                                d="M17 8l4 4m0 0-4 4m4-4H3"
                            />
                        </svg>

                    </a>


                    <a
                        href="#contact"
                        class="inline-flex
                               items-center
                               justify-center
                               border
                               border-white/60
                               hover:border-white
                               hover:bg-white
                               hover:text-[#073B66]
                               text-white
                               px-6
                               sm:px-7
                               py-3
                               sm:py-3.5
                               font-semibold
                               text-xs
                               sm:text-sm
                               transition-all
                               duration-300"
                    >
                        Request a Quote
                    </a>

                </div>


                {{-- TESTING AREAS --}}
                <div
                    class="mt-6
                           pt-4
                           border-t
                           border-white/20"
                >

                    <p
                        class="text-[9px]
                               sm:text-[10px]
                               uppercase
                               tracking-[0.2em]
                               text-white/50
                               mb-2"
                    >
                        Testing Solutions
                    </p>

                    <div
                        class="flex flex-wrap
                               items-center
                               gap-x-3
                               gap-y-1
                               text-[10px]
                               sm:text-xs
                               text-white/85"
                    >

                        <span>Soil Testing</span>

                        <span class="text-[#E31E24]">•</span>

                        <span>Concrete Testing</span>

                        <span class="text-[#E31E24]">•</span>

                        <span>Cement Testing</span>

                        <span class="text-[#E31E24]">•</span>

                        <span>Material Testing</span>

                    </div>

                </div>

            </div>

        </div>

    </div>

</section>




{{-- =========================================================
     TESTING SOLUTIONS - STANDARD HOMEPAGE
========================================================= --}}

<section
    id="solutions"
    class="relative bg-white py-20 lg:py-28 overflow-hidden"
>

    <div class="max-w-7xl mx-auto px-5 sm:px-8 lg:px-10">

        {{-- Section Header --}}
        <div
            class="max-w-3xl mb-14"
        >

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
                    Our Testing Solutions
                </span>

            </div>


            <h2
                class="text-[#073B66]
                       text-4xl sm:text-5xl lg:text-6xl
                       font-bold
                       leading-tight"
            >
                Complete testing solutions
                <span class="text-[#E31E24]">
                    for engineering.
                </span>
            </h2>


            <p
                class="mt-5
                       text-gray-600
                       text-base lg:text-lg
                       leading-8
                       max-w-2xl"
            >
                Associated Scientific & Engineering provides
                professional testing and measurement equipment
                for laboratories, construction, civil engineering
                and industrial applications.
            </p>

        </div>


        {{-- Solutions Grid --}}
        <div
            class="grid grid-cols-1
                   md:grid-cols-2
                   lg:grid-cols-3
                   gap-6"
        >

            {{-- Soil --}}
            <a
                href="#products"
                class="group relative
                       min-h-[260px]
                       border border-gray-200
                       bg-white
                       p-7
                       overflow-hidden
                       hover:border-[#073B66]
                       hover:shadow-xl
                       transition-all duration-500"
            >

                <div
                    class="absolute
                           right-0 top-0
                           w-28 h-28
                           bg-[#073B66]/[0.04]
                           rounded-bl-full
                           group-hover:bg-[#E31E24]/[0.08]
                           transition"
                ></div>


                <div class="relative z-10">

                    <span
                        class="text-[#E31E24]
                               text-xs font-bold
                               tracking-widest"
                    >
                        01
                    </span>


                    <div
                        class="mt-6
                               w-12 h-12
                               bg-[#F1F5F8]
                               text-[#073B66]
                               flex items-center justify-center
                               group-hover:bg-[#073B66]
                               group-hover:text-white
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
                                d="M4 19h16M5 19c0-5 3-9 7-12 4 3 7 7 7 12M8 19v-4m4 4v-7m4 7v-4"
                            />
                        </svg>
                    </div>


                    <h3
                        class="mt-6
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
                               text-sm
                               text-gray-500
                               leading-6
                               max-w-sm"
                    >
                        Equipment for evaluation and testing
                        of soil properties and performance.
                    </p>


                    <span
                        class="inline-flex
                               mt-6
                               text-sm
                               font-semibold
                               text-[#073B66]
                               group-hover:text-[#E31E24]"
                    >
                        Explore →
                    </span>

                </div>

            </a>


            {{-- Cement --}}
            <a
                href="#products"
                class="group relative
                       min-h-[260px]
                       border border-gray-200
                       bg-white
                       p-7
                       overflow-hidden
                       hover:border-[#073B66]
                       hover:shadow-xl
                       transition-all duration-500"
            >

                <div
                    class="absolute
                           right-0 top-0
                           w-28 h-28
                           bg-[#073B66]/[0.04]
                           rounded-bl-full
                           group-hover:bg-[#E31E24]/[0.08]
                           transition"
                ></div>


                <div class="relative z-10">

                    <span
                        class="text-[#E31E24]
                               text-xs font-bold
                               tracking-widest"
                    >
                        02
                    </span>


                    <div
                        class="mt-6
                               w-12 h-12
                               bg-[#F1F5F8]
                               text-[#073B66]
                               flex items-center justify-center
                               group-hover:bg-[#073B66]
                               group-hover:text-white
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
                                d="M6 20h12M7 20V8h10v12M9 8V4h6v4M10 12h4M10 15h4"
                            />
                        </svg>
                    </div>


                    <h3
                        class="mt-6
                               text-2xl
                               font-bold
                               text-[#073B66]
                               group-hover:text-[#E31E24]
                               transition"
                    >
                        Cement Testing
                    </h3>


                    <p
                        class="mt-3
                               text-sm
                               text-gray-500
                               leading-6
                               max-w-sm"
                    >
                        Professional instruments for cement
                        quality and performance testing.
                    </p>


                    <span
                        class="inline-flex
                               mt-6
                               text-sm
                               font-semibold
                               text-[#073B66]
                               group-hover:text-[#E31E24]"
                    >
                        Explore →
                    </span>

                </div>

            </a>


            {{-- Concrete --}}
            <a
                href="#products"
                class="group relative
                       min-h-[260px]
                       border border-gray-200
                       bg-white
                       p-7
                       overflow-hidden
                       hover:border-[#073B66]
                       hover:shadow-xl
                       transition-all duration-500"
            >

                <div
                    class="absolute
                           right-0 top-0
                           w-28 h-28
                           bg-[#073B66]/[0.04]
                           rounded-bl-full
                           group-hover:bg-[#E31E24]/[0.08]
                           transition"
                ></div>


                <div class="relative z-10">

                    <span
                        class="text-[#E31E24]
                               text-xs font-bold
                               tracking-widest"
                    >
                        03
                    </span>


                    <div
                        class="mt-6
                               w-12 h-12
                               bg-[#F1F5F8]
                               text-[#073B66]
                               flex items-center justify-center
                               group-hover:bg-[#073B66]
                               group-hover:text-white
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
                                d="M5 20h14M7 20V9h10v11M9 9V5h6v4M9 13h6M9 16h6"
                            />
                        </svg>
                    </div>


                    <h3
                        class="mt-6
                               text-2xl
                               font-bold
                               text-[#073B66]
                               group-hover:text-[#E31E24]
                               transition"
                    >
                        Concrete Testing
                    </h3>


                    <p
                        class="mt-3
                               text-sm
                               text-gray-500
                               leading-6
                               max-w-sm"
                    >
                        Testing equipment for concrete strength,
                        quality and material evaluation.
                    </p>


                    <span
                        class="inline-flex
                               mt-6
                               text-sm
                               font-semibold
                               text-[#073B66]
                               group-hover:text-[#E31E24]"
                    >
                        Explore →
                    </span>

                </div>

            </a>


            {{-- Aggregate --}}
            <a
                href="#products"
                class="group relative
                       min-h-[260px]
                       border border-gray-200
                       bg-white
                       p-7
                       overflow-hidden
                       hover:border-[#073B66]
                       hover:shadow-xl
                       transition-all duration-500"
            >

                <div
                    class="absolute
                           right-0 top-0
                           w-28 h-28
                           bg-[#073B66]/[0.04]
                           rounded-bl-full
                           group-hover:bg-[#E31E24]/[0.08]
                           transition"
                ></div>


                <div class="relative z-10">

                    <span
                        class="text-[#E31E24]
                               text-xs font-bold
                               tracking-widest"
                    >
                        04
                    </span>


                    <div
                        class="mt-6
                               w-12 h-12
                               bg-[#F1F5F8]
                               text-[#073B66]
                               flex items-center justify-center
                               group-hover:bg-[#073B66]
                               group-hover:text-white
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
                            <circle cx="8" cy="9" r="2.5"/>
                            <circle cx="16" cy="7" r="2"/>
                            <circle cx="15" cy="16" r="3"/>
                            <circle cx="7" cy="17" r="2"/>
                        </svg>
                    </div>


                    <h3
                        class="mt-6
                               text-2xl
                               font-bold
                               text-[#073B66]
                               group-hover:text-[#E31E24]
                               transition"
                    >
                        Aggregate Testing
                    </h3>


                    <p
                        class="mt-3
                               text-sm
                               text-gray-500
                               leading-6
                               max-w-sm"
                    >
                        Instruments for aggregate grading,
                        quality and material characterization.
                    </p>


                    <span
                        class="inline-flex
                               mt-6
                               text-sm
                               font-semibold
                               text-[#073B66]
                               group-hover:text-[#E31E24]"
                    >
                        Explore →
                    </span>

                </div>

            </a>


            {{-- Bitumen --}}
            <a
                href="#products"
                class="group relative
                       min-h-[260px]
                       border border-gray-200
                       bg-white
                       p-7
                       overflow-hidden
                       hover:border-[#073B66]
                       hover:shadow-xl
                       transition-all duration-500"
            >

                <div
                    class="absolute
                           right-0 top-0
                           w-28 h-28
                           bg-[#073B66]/[0.04]
                           rounded-bl-full
                           group-hover:bg-[#E31E24]/[0.08]
                           transition"
                ></div>


                <div class="relative z-10">

                    <span
                        class="text-[#E31E24]
                               text-xs font-bold
                               tracking-widest"
                    >
                        05
                    </span>


                    <div
                        class="mt-6
                               w-12 h-12
                               bg-[#F1F5F8]
                               text-[#073B66]
                               flex items-center justify-center
                               group-hover:bg-[#073B66]
                               group-hover:text-white
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
                                d="M12 3c3 4 6 7 6 11a6 6 0 11-12 0c0-4 3-7 6-11Z"
                            />
                        </svg>
                    </div>


                    <h3
                        class="mt-6
                               text-2xl
                               font-bold
                               text-[#073B66]
                               group-hover:text-[#E31E24]
                               transition"
                    >
                        Bitumen & Asphalt
                    </h3>


                    <p
                        class="mt-3
                               text-sm
                               text-gray-500
                               leading-6
                               max-w-sm"
                    >
                        Testing solutions for bitumen and
                        asphalt material performance.
                    </p>


                    <span
                        class="inline-flex
                               mt-6
                               text-sm
                               font-semibold
                               text-[#073B66]
                               group-hover:text-[#E31E24]"
                    >
                        Explore →
                    </span>

                </div>

            </a>


            {{-- Laboratory --}}
            <a
                href="#products"
                class="group relative
                       min-h-[260px]
                       border border-gray-200
                       bg-white
                       p-7
                       overflow-hidden
                       hover:border-[#073B66]
                       hover:shadow-xl
                       transition-all duration-500"
            >

                <div
                    class="absolute
                           right-0 top-0
                           w-28 h-28
                           bg-[#073B66]/[0.04]
                           rounded-bl-full
                           group-hover:bg-[#E31E24]/[0.08]
                           transition"
                ></div>


                <div class="relative z-10">

                    <span
                        class="text-[#E31E24]
                               text-xs font-bold
                               tracking-widest"
                    >
                        06
                    </span>


                    <div
                        class="mt-6
                               w-12 h-12
                               bg-[#F1F5F8]
                               text-[#073B66]
                               flex items-center justify-center
                               group-hover:bg-[#073B66]
                               group-hover:text-white
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
                                d="M9 3h6M10 3v6l-4.5 8.5A2 2 0 007.2 21h9.6a2 2 0 001.7-3.5L14 9V3M8 16h8"
                            />
                        </svg>
                    </div>


                    <h3
                        class="mt-6
                               text-2xl
                               font-bold
                               text-[#073B66]
                               group-hover:text-[#E31E24]
                               transition"
                    >
                        Laboratory Equipment
                    </h3>


                    <p
                        class="mt-3
                               text-sm
                               text-gray-500
                               leading-6
                               max-w-sm"
                    >
                        Professional laboratory instruments
                        for testing, research and measurement.
                    </p>


                    <span
                        class="inline-flex
                               mt-6
                               text-sm
                               font-semibold
                               text-[#073B66]
                               group-hover:text-[#E31E24]"
                    >
                        Explore →
                    </span>

                </div>

            </a>

        </div>


        {{-- Bottom CTA --}}
        <div
            class="mt-10
                   flex flex-col sm:flex-row
                   items-start sm:items-center
                   justify-between
                   gap-6
                   bg-[#F4F6F8]
                   border border-gray-200
                   px-7 py-6"
        >

            <div>

                <h3
                    class="text-[#073B66]
                           font-bold text-lg"
                >
                    Looking for a specific testing instrument?
                </h3>

                <p
                    class="mt-1
                           text-sm text-gray-500"
                >
                    Explore our complete range of products.
                </p>

            </div>


            <a
                href="#products"
                class="shrink-0
                       inline-flex
                       items-center
                       bg-[#E31E24]
                       hover:bg-[#C8181D]
                       text-white
                       px-6 py-3
                       text-sm
                       font-semibold
                       transition"
            >
                View Products

                <span class="ml-3">
                    →
                </span>
            </a>

        </div>

    </div>

</section>

{{-- =========================================================
     FEATURED PRODUCTS - 4 PRODUCTS ONLY
========================================================= --}}

<section
    id="products"
    class="relative bg-[#F6F8FA] py-20 lg:py-28 overflow-hidden"
>

    <div class="max-w-7xl mx-auto px-5 sm:px-8 lg:px-10">

        {{-- Section Header --}}
        <div class="flex flex-col lg:flex-row lg:items-end lg:justify-between gap-6 mb-12">

            <div class="max-w-3xl">

                <div class="flex items-center gap-3 mb-5">

                    <span class="w-10 h-[2px] bg-[#E31E24]"></span>

                    <span
                        class="text-[#E31E24]
                               text-xs font-bold
                               uppercase
                               tracking-[0.22em]"
                    >
                        Featured Equipment
                    </span>

                </div>

                <h2
                    class="text-[#073B66]
                           text-4xl sm:text-5xl
                           lg:text-6xl
                           font-bold
                           leading-tight"
                >
                    Testing equipment
                    <span class="text-[#E31E24]">
                        you can rely on.
                    </span>
                </h2>

                <p
                    class="mt-5
                           text-gray-600
                           text-base lg:text-lg
                           leading-8
                           max-w-2xl"
                >
                    Explore a selection of our testing and
                    measurement equipment for professional
                    engineering and laboratory applications.
                </p>

            </div>


            {{-- View All --}}
            <a
                href="{{ route('products') }}"
                class="shrink-0
                       inline-flex
                       items-center
                       text-[#073B66]
                       font-semibold
                       border-b-2
                       border-[#073B66]
                       pb-1
                       hover:text-[#E31E24]
                       hover:border-[#E31E24]
                       transition"
            >
                View All Products
                <span class="ml-3">→</span>
            </a>

        </div>


        {{-- 4 Products --}}
        <div
            class="grid grid-cols-1
                   sm:grid-cols-2
                   lg:grid-cols-4
                   gap-6"
        >

            {{-- PRODUCT 01 --}}
            <article
                class="group bg-white
                       border border-gray-200
                       hover:border-[#073B66]
                       hover:shadow-xl
                       transition-all duration-500"
            >

                {{-- Image --}}
                <div
                    class="relative
                           h-[270px]
                           bg-white
                           overflow-hidden"
                >

                    <img
                        src="{{ asset('images/products/product-1.jpg') }}"
                        alt="Testing Equipment"
                        class="w-full h-full
                               object-contain
                               p-7
                               group-hover:scale-105
                               transition-transform duration-500"
                    >

                    {{-- Product number --}}
                    <span
                        class="absolute
                               top-4 left-4
                               bg-[#073B66]
                               text-white
                               text-[10px]
                               font-bold
                               px-3 py-1.5
                               tracking-widest"
                    >
                        01
                    </span>

                </div>


                {{-- Content --}}
                <div class="p-6 border-t border-gray-100">

                    <p
                        class="text-[#E31E24]
                               text-[10px]
                               font-bold
                               uppercase
                               tracking-widest"
                    >
                        Featured Equipment
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
                        Professional testing equipment
                        designed for accurate measurement.
                    </p>

                    <a
                        href="{{ route('products') }}"
                        class="inline-flex
                               mt-5
                               text-sm
                               font-semibold
                               text-[#073B66]
                               group-hover:text-[#E31E24]
                               transition"
                    >
                        View Product
                        <span class="ml-2">→</span>
                    </a>

                </div>

            </article>


            {{-- PRODUCT 02 --}}
            <article
                class="group bg-white
                       border border-gray-200
                       hover:border-[#073B66]
                       hover:shadow-xl
                       transition-all duration-500"
            >

                <div
                    class="relative
                           h-[270px]
                           bg-white
                           overflow-hidden"
                >

                    <img
                        src="{{ asset('images/products/product-2.jpg') }}"
                        alt="Engineering Testing Equipment"
                        class="w-full h-full
                               object-contain
                               p-7
                               group-hover:scale-105
                               transition-transform duration-500"
                    >

                    <span
                        class="absolute
                               top-4 left-4
                               bg-[#073B66]
                               text-white
                               text-[10px]
                               font-bold
                               px-3 py-1.5
                               tracking-widest"
                    >
                        02
                    </span>

                </div>


                <div class="p-6 border-t border-gray-100">

                    <p
                        class="text-[#E31E24]
                               text-[10px]
                               font-bold
                               uppercase
                               tracking-widest"
                    >
                        Featured Equipment
                    </p>

                    <h3
                        class="mt-2
                               text-xl
                               font-bold
                               text-[#073B66]
                               group-hover:text-[#E31E24]
                               transition"
                    >
                        Product Name Two
                    </h3>

                    <p
                        class="mt-3
                               text-sm
                               text-gray-500
                               leading-6"
                    >
                        Reliable equipment for demanding
                        testing applications.
                    </p>

                    <a
                        href="{{ route('products') }}"
                        class="inline-flex
                               mt-5
                               text-sm
                               font-semibold
                               text-[#073B66]
                               group-hover:text-[#E31E24]
                               transition"
                    >
                        View Product
                        <span class="ml-2">→</span>
                    </a>

                </div>

            </article>


            {{-- PRODUCT 03 --}}
            <article
                class="group bg-white
                       border border-gray-200
                       hover:border-[#073B66]
                       hover:shadow-xl
                       transition-all duration-500"
            >

                <div
                    class="relative
                           h-[270px]
                           bg-white
                           overflow-hidden"
                >

                    <img
                        src="{{ asset('images/products/product-3.jpg') }}"
                        alt="Laboratory Testing Equipment"
                        class="w-full h-full
                               object-contain
                               p-7
                               group-hover:scale-105
                               transition-transform duration-500"
                    >

                    <span
                        class="absolute
                               top-4 left-4
                               bg-[#073B66]
                               text-white
                               text-[10px]
                               font-bold
                               px-3 py-1.5
                               tracking-widest"
                    >
                        03
                    </span>

                </div>


                <div class="p-6 border-t border-gray-100">

                    <p
                        class="text-[#E31E24]
                               text-[10px]
                               font-bold
                               uppercase
                               tracking-widest"
                    >
                        Featured Equipment
                    </p>

                    <h3
                        class="mt-2
                               text-xl
                               font-bold
                               text-[#073B66]
                               group-hover:text-[#E31E24]
                               transition"
                    >
                        Product Name Three
                    </h3>

                    <p
                        class="mt-3
                               text-sm
                               text-gray-500
                               leading-6"
                    >
                        Precision-focused equipment for
                        laboratory testing.
                    </p>

                    <a
                        href="{{ route('products') }}"
                        class="inline-flex
                               mt-5
                               text-sm
                               font-semibold
                               text-[#073B66]
                               group-hover:text-[#E31E24]
                               transition"
                    >
                        View Product
                        <span class="ml-2">→</span>
                    </a>

                </div>

            </article>


            {{-- PRODUCT 04 --}}
            <article
                class="group bg-white
                       border border-gray-200
                       hover:border-[#073B66]
                       hover:shadow-xl
                       transition-all duration-500"
            >

                <div
                    class="relative
                           h-[270px]
                           bg-white
                           overflow-hidden"
                >

                    <img
                        src="{{ asset('images/products/product-4.jpg') }}"
                        alt="Scientific Testing Equipment"
                        class="w-full h-full
                               object-contain
                               p-7
                               group-hover:scale-105
                               transition-transform duration-500"
                    >

                    <span
                        class="absolute
                               top-4 left-4
                               bg-[#073B66]
                               text-white
                               text-[10px]
                               font-bold
                               px-3 py-1.5
                               tracking-widest"
                    >
                        04
                    </span>

                </div>


                <div class="p-6 border-t border-gray-100">

                    <p
                        class="text-[#E31E24]
                               text-[10px]
                               font-bold
                               uppercase
                               tracking-widest"
                    >
                        Featured Equipment
                    </p>

                    <h3
                        class="mt-2
                               text-xl
                               font-bold
                               text-[#073B66]
                               group-hover:text-[#E31E24]
                               transition"
                    >
                        Product Name Four
                    </h3>

                    <p
                        class="mt-3
                               text-sm
                               text-gray-500
                               leading-6"
                    >
                        Engineering instruments built for
                        dependable testing results.
                    </p>

                    <a
                        href="{{ route('products') }}"
                        class="inline-flex
                               mt-5
                               text-sm
                               font-semibold
                               text-[#073B66]
                               group-hover:text-[#E31E24]
                               transition"
                    >
                        View Product
                        <span class="ml-2">→</span>
                    </a>

                </div>

            </article>

        </div>


        {{-- Bottom CTA --}}
        <div
            class="mt-10
                   flex flex-col md:flex-row
                   items-start md:items-center
                   justify-between
                   gap-5
                   bg-[#073B66]
                   px-7 sm:px-9
                   py-7"
        >

            <div>

                <p
                    class="text-white
                           text-lg
                           font-bold"
                >
                    Can't find the equipment you need?
                </p>

                <p
                    class="mt-1
                           text-blue-100/60
                           text-sm"
                >
                    Contact our team for the right testing solution.
                </p>

            </div>


            <a
                href="#contact"
                class="shrink-0
                       inline-flex
                       items-center
                       bg-[#E31E24]
                       hover:bg-[#C8181D]
                       text-white
                       px-6 py-3
                       text-sm
                       font-semibold
                       transition"
            >
                Request a Quote
                <span class="ml-3">→</span>
            </a>

        </div>

    </div>

</section>

{{-- =========================================================
     APPLICATIONS / INDUSTRIES
========================================================= --}}

<section
    id="applications"
    class="relative bg-white py-20 lg:py-28 overflow-hidden"
>

    <div class="max-w-7xl mx-auto px-5 sm:px-8 lg:px-10">

        {{-- Header --}}
        <div
            class="grid lg:grid-cols-2 gap-8
                   items-end mb-14"
        >

            <div>

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
                    class="text-[#073B66]
                           text-4xl sm:text-5xl
                           lg:text-6xl
                           font-bold
                           leading-tight"
                >
                    Solutions across
                    <span class="text-[#E31E24]">
                        industries.
                    </span>
                </h2>

            </div>


            <p
                class="text-gray-600
                       text-base lg:text-lg
                       leading-8
                       max-w-xl
                       lg:ml-auto"
            >
                From construction materials to laboratory
                testing, our equipment supports professionals
                across a wide range of engineering and
                scientific applications.
            </p>

        </div>


        {{-- Application Grid --}}
        <div
            class="grid grid-cols-1
                   md:grid-cols-2
                   lg:grid-cols-4
                   gap-5"
        >

            {{-- Construction --}}
            <div
                class="group relative
                       min-h-[330px]
                       overflow-hidden
                       bg-[#073B66]"
            >

                <img
                    src="{{ asset('images/applications/construction.jpg') }}"
                    alt="Construction Testing"
                    class="absolute inset-0
                           w-full h-full
                           object-cover
                           opacity-45
                           group-hover:scale-105
                           group-hover:opacity-55
                           transition-all duration-700"
                >

                <div
                    class="absolute inset-0
                           bg-gradient-to-t
                           from-[#061B2D]
                           via-[#073B66]/60
                           to-transparent"
                ></div>


                <div
                    class="relative z-10
                           h-full min-h-[330px]
                           p-7
                           flex flex-col
                           justify-end"
                >

                    <span
                        class="text-[#E31E24]
                               text-xs font-bold
                               tracking-widest"
                    >
                        01
                    </span>

                    <h3
                        class="mt-3
                               text-white
                               text-2xl
                               font-bold"
                    >
                        Construction
                    </h3>

                    <p
                        class="mt-2
                               text-white/65
                               text-sm
                               leading-6"
                    >
                        Testing solutions for construction
                        materials and engineering projects.
                    </p>

                </div>

            </div>


            {{-- Civil Engineering --}}
            <div
                class="group relative
                       min-h-[330px]
                       overflow-hidden
                       bg-[#073B66]"
            >

                <img
                    src="{{ asset('images/applications/civil-engineering.jpg') }}"
                    alt="Civil Engineering Testing"
                    class="absolute inset-0
                           w-full h-full
                           object-cover
                           opacity-45
                           group-hover:scale-105
                           group-hover:opacity-55
                           transition-all duration-700"
                >

                <div
                    class="absolute inset-0
                           bg-gradient-to-t
                           from-[#061B2D]
                           via-[#073B66]/60
                           to-transparent"
                ></div>


                <div
                    class="relative z-10
                           h-full min-h-[330px]
                           p-7
                           flex flex-col
                           justify-end"
                >

                    <span
                        class="text-[#E31E24]
                               text-xs font-bold
                               tracking-widest"
                    >
                        02
                    </span>

                    <h3
                        class="mt-3
                               text-white
                               text-2xl
                               font-bold"
                    >
                        Civil Engineering
                    </h3>

                    <p
                        class="mt-2
                               text-white/65
                               text-sm
                               leading-6"
                    >
                        Equipment for material testing,
                        evaluation and quality control.
                    </p>

                </div>

            </div>


            {{-- Research & Laboratory --}}
            <div
                class="group relative
                       min-h-[330px]
                       overflow-hidden
                       bg-[#073B66]"
            >

                <img
                    src="{{ asset('images/applications/laboratory.jpg') }}"
                    alt="Laboratory Testing"
                    class="absolute inset-0
                           w-full h-full
                           object-cover
                           opacity-45
                           group-hover:scale-105
                           group-hover:opacity-55
                           transition-all duration-700"
                >

                <div
                    class="absolute inset-0
                           bg-gradient-to-t
                           from-[#061B2D]
                           via-[#073B66]/60
                           to-transparent"
                ></div>


                <div
                    class="relative z-10
                           h-full min-h-[330px]
                           p-7
                           flex flex-col
                           justify-end"
                >

                    <span
                        class="text-[#E31E24]
                               text-xs font-bold
                               tracking-widest"
                    >
                        03
                    </span>

                    <h3
                        class="mt-3
                               text-white
                               text-2xl
                               font-bold"
                    >
                        Laboratories
                    </h3>

                    <p
                        class="mt-2
                               text-white/65
                               text-sm
                               leading-6"
                    >
                        Precision instruments for laboratory,
                        research and quality testing.
                    </p>

                </div>

            </div>


            {{-- Industrial --}}
            <div
                class="group relative
                       min-h-[330px]
                       overflow-hidden
                       bg-[#073B66]"
            >

                <img
                    src="{{ asset('images/applications/industrial.jpg') }}"
                    alt="Industrial Testing"
                    class="absolute inset-0
                           w-full h-full
                           object-cover
                           opacity-45
                           group-hover:scale-105
                           group-hover:opacity-55
                           transition-all duration-700"
                >

                <div
                    class="absolute inset-0
                           bg-gradient-to-t
                           from-[#061B2D]
                           via-[#073B66]/60
                           to-transparent"
                ></div>


                <div
                    class="relative z-10
                           h-full min-h-[330px]
                           p-7
                           flex flex-col
                           justify-end"
                >

                    <span
                        class="text-[#E31E24]
                               text-xs font-bold
                               tracking-widest"
                    >
                        04
                    </span>

                    <h3
                        class="mt-3
                               text-white
                               text-2xl
                               font-bold"
                    >
                        Industrial
                    </h3>

                    <p
                        class="mt-2
                               text-white/65
                               text-sm
                               leading-6"
                    >
                        Reliable testing and measurement
                        solutions for industrial applications.
                    </p>

                </div>

            </div>

        </div>


        {{-- Bottom Statement --}}
        <div
            class="mt-10
                   border-l-4
                   border-[#E31E24]
                   bg-[#F6F8FA]
                   px-6 sm:px-8
                   py-6"
        >

            <p
                class="text-[#073B66]
                       text-lg
                       font-semibold"
            >
                One partner for your testing and measurement needs.
            </p>

            <p
                class="mt-2
                       text-gray-500
                       text-sm
                       leading-6"
            >
                Speak with our team to find the right equipment
                for your specific application.
            </p>

        </div>

    </div>

</section>

{{-- =========================================================
     WHY CHOOSE ASEW
========================================================= --}}

<section
    id="why-asew"
    class="relative bg-[#073B66] py-20 lg:py-28 overflow-hidden"
>

    {{-- Decorative background --}}
    <div
        class="absolute right-0 top-0
               w-[420px] h-[420px]
               border border-white/[0.06]
               rounded-full
               translate-x-1/3 -translate-y-1/3"
    ></div>

    <div
        class="absolute right-20 top-20
               w-[260px] h-[260px]
               border border-white/[0.05]
               rounded-full"
    ></div>


    <div class="relative z-10 max-w-7xl mx-auto px-5 sm:px-8 lg:px-10">

        {{-- Header --}}
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
                    Why ASEW
                </span>

            </div>

            <h2
                class="text-white
                       text-4xl sm:text-5xl lg:text-6xl
                       font-bold
                       leading-tight"
            >
                Built around
                <span class="text-[#E31E24]">
                    precision.
                </span>
                <br>
                Trusted for performance.
            </h2>

            <p
                class="mt-5
                       text-blue-100/65
                       text-base lg:text-lg
                       leading-8
                       max-w-2xl"
            >
                We combine testing expertise, dependable
                equipment and application-focused support to
                help professionals make confident decisions.
            </p>

        </div>


        {{-- Trust Metrics --}}
        <div
            class="grid grid-cols-2
                   lg:grid-cols-4
                   border-y border-white/10"
        >

            <div
                class="px-5 sm:px-8
                       py-8 sm:py-10
                       border-r border-white/10"
            >

                <span
                    class="block
                           text-4xl sm:text-5xl
                           font-bold
                           text-white"
                >
                    01
                </span>

                <p
                    class="mt-3
                           text-[#E31E24]
                           text-xs
                           font-bold
                           uppercase
                           tracking-widest"
                >
                    Expertise
                </p>

                <p
                    class="mt-2
                           text-sm
                           text-blue-100/50
                           leading-6"
                >
                    Application-focused
                    testing solutions.
                </p>

            </div>


            <div
                class="px-5 sm:px-8
                       py-8 sm:py-10
                       lg:border-r
                       border-white/10"
            >

                <span
                    class="block
                           text-4xl sm:text-5xl
                           font-bold
                           text-white"
                >
                    02
                </span>

                <p
                    class="mt-3
                           text-[#E31E24]
                           text-xs
                           font-bold
                           uppercase
                           tracking-widest"
                >
                    Reliability
                </p>

                <p
                    class="mt-2
                           text-sm
                           text-blue-100/50
                           leading-6"
                >
                    Equipment selected for
                    dependable performance.
                </p>

            </div>


            <div
                class="px-5 sm:px-8
                       py-8 sm:py-10
                       border-r border-white/10"
            >

                <span
                    class="block
                           text-4xl sm:text-5xl
                           font-bold
                           text-white"
                >
                    03
                </span>

                <p
                    class="mt-3
                           text-[#E31E24]
                           text-xs
                           font-bold
                           uppercase
                           tracking-widest"
                >
                    Applications
                </p>

                <p
                    class="mt-2
                           text-sm
                           text-blue-100/50
                           leading-6"
                >
                    Solutions across engineering
                    and laboratory environments.
                </p>

            </div>


            <div
                class="px-5 sm:px-8
                       py-8 sm:py-10"
            >

                <span
                    class="block
                           text-4xl sm:text-5xl
                           font-bold
                           text-white"
                >
                    04
                </span>

                <p
                    class="mt-3
                           text-[#E31E24]
                           text-xs
                           font-bold
                           uppercase
                           tracking-widest"
                >
                    Support
                </p>

                <p
                    class="mt-2
                           text-sm
                           text-blue-100/50
                           leading-6"
                >
                    Assistance from product selection
                    to enquiry.
                </p>

            </div>

        </div>


        {{-- Capabilities --}}
        <div
            class="grid lg:grid-cols-2
                   gap-12 lg:gap-20
                   mt-16
                   items-center"
        >

            <div>

                <h3
                    class="text-2xl sm:text-3xl
                           font-bold
                           text-white"
                >
                    More than equipment.
                    <span class="text-[#E31E24]">
                        A testing partner.
                    </span>
                </h3>

                <p
                    class="mt-5
                           text-blue-100/60
                           leading-7"
                >
                    The right testing equipment depends on
                    the material, application and required
                    testing method. Our approach starts with
                    understanding that requirement.
                </p>

                <a
                    href="#contact"
                    class="inline-flex
                           items-center
                           mt-8
                           bg-[#E31E24]
                           hover:bg-[#C8181D]
                           text-white
                           px-6 py-3.5
                           text-sm
                           font-semibold
                           transition"
                >
                    Discuss Your Requirement

                    <span class="ml-3">→</span>
                </a>

            </div>


            {{-- Capability List --}}
            <div class="space-y-4">

                <div
                    class="flex items-center
                           gap-5
                           bg-white/[0.06]
                           border border-white/10
                           px-5 py-5
                           hover:bg-white/[0.1]
                           transition"
                >

                    <span
                        class="shrink-0
                               w-10 h-10
                               bg-[#E31E24]
                               text-white
                               flex items-center
                               justify-center
                               font-bold"
                    >
                        01
                    </span>

                    <div>

                        <h4
                            class="font-bold text-white"
                        >
                            Testing & Measurement
                        </h4>

                        <p
                            class="mt-1
                                   text-sm
                                   text-blue-100/50"
                        >
                            Equipment for professional
                            testing requirements.
                        </p>

                    </div>

                </div>


                <div
                    class="flex items-center
                           gap-5
                           bg-white/[0.06]
                           border border-white/10
                           px-5 py-5
                           hover:bg-white/[0.1]
                           transition"
                >

                    <span
                        class="shrink-0
                               w-10 h-10
                               bg-[#E31E24]
                               text-white
                               flex items-center
                               justify-center
                               font-bold"
                    >
                        02
                    </span>

                    <div>

                        <h4
                            class="font-bold text-white"
                        >
                            Engineering Applications
                        </h4>

                        <p
                            class="mt-1
                                   text-sm
                                   text-blue-100/50"
                        >
                            Solutions for construction,
                            civil and industrial applications.
                        </p>

                    </div>

                </div>


                <div
                    class="flex items-center
                           gap-5
                           bg-white/[0.06]
                           border border-white/10
                           px-5 py-5
                           hover:bg-white/[0.1]
                           transition"
                >

                    <span
                        class="shrink-0
                               w-10 h-10
                               bg-[#E31E24]
                               text-white
                               flex items-center
                               justify-center
                               font-bold"
                    >
                        03
                    </span>

                    <div>

                        <h4
                            class="font-bold text-white"
                        >
                            Professional Support
                        </h4>

                        <p
                            class="mt-1
                                   text-sm
                                   text-blue-100/50"
                        >
                            Helping customers identify
                            suitable testing solutions.
                        </p>

                    </div>

                </div>

            </div>

        </div>

    </div>

</section>

{{-- =========================================================
     ABOUT ASEW
========================================================= --}}

<section
    id="about"
    class="relative bg-[#F6F8FA] py-20 lg:py-28 overflow-hidden"
>

    <div class="max-w-7xl mx-auto px-5 sm:px-8 lg:px-10">

        <div
            class="grid lg:grid-cols-2
                   gap-12 lg:gap-20
                   items-center"
        >

            {{-- LEFT: IMAGE --}}
            <div class="relative">

                <div
                    class="relative
                           h-[430px] sm:h-[520px]
                           overflow-hidden
                           bg-[#073B66]"
                >

                    <img
                        src="{{ asset('images/about-asew.jpg') }}"
                        alt="Associated Scientific & Engineering"
                        class="w-full h-full
                               object-cover
                               hover:scale-105
                               transition-transform
                               duration-700"
                    >

                    {{-- Image Overlay --}}
                    <div
                        class="absolute inset-0
                               bg-gradient-to-t
                               from-[#061B2D]/75
                               via-transparent
                               to-transparent"
                    ></div>


                    {{-- Image caption --}}
                    <div
                        class="absolute
                               left-6 bottom-6
                               right-6"
                    >

                        <p
                            class="text-white/60
                                   text-[10px]
                                   uppercase
                                   tracking-[0.2em]"
                        >
                            Associated Scientific & Engineering
                        </p>

                        <p
                            class="mt-2
                                   text-white
                                   text-xl
                                   font-bold"
                        >
                            Testing & Measurement Solutions
                        </p>

                    </div>

                </div>


                {{-- Decorative block --}}
                <div
                    class="absolute
                           -left-4 -top-4
                           w-20 h-20
                           border-2
                           border-[#E31E24]"
                ></div>


                {{-- Floating card --}}
                <div
                    class="absolute
                           -bottom-7
                           right-5 sm:-right-7
                           bg-[#E31E24]
                           text-white
                           px-6 py-5
                           shadow-xl"
                >

                    <p
                        class="text-2xl
                               font-bold"
                    >
                        ASEW
                    </p>

                    <p
                        class="mt-1
                               text-xs
                               uppercase
                               tracking-widest
                               text-white/70"
                    >
                        Engineering Solutions
                    </p>

                </div>

            </div>


            {{-- RIGHT: CONTENT --}}
            <div>

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
                               text-xs font-bold
                               uppercase
                               tracking-[0.22em]"
                    >
                        About ASEW
                    </span>

                </div>


                {{-- Heading --}}
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


                {{-- Main paragraph --}}
                <p
                    class="mt-7
                           text-gray-600
                           text-base lg:text-lg
                           leading-8"
                >
                    Associated Scientific & Engineering provides
                    testing and measurement equipment for
                    scientific, engineering and industrial
                    applications.
                </p>


                <p
                    class="mt-5
                           text-gray-500
                           leading-7"
                >
                    Our solutions are designed to help
                    laboratories, engineers and industry
                    professionals evaluate materials, verify
                    performance and make reliable decisions
                    based on accurate testing.
                </p>


                {{-- Capability points --}}
                <div
                    class="mt-8
                           grid sm:grid-cols-2
                           gap-x-8 gap-y-5"
                >

                    <div class="flex gap-3">

                        <span
                            class="shrink-0
                                   w-7 h-7
                                   bg-[#073B66]
                                   text-white
                                   flex items-center
                                   justify-center
                                   text-xs
                                   font-bold"
                        >
                            ✓
                        </span>

                        <div>

                            <h3
                                class="font-bold
                                       text-[#073B66]"
                            >
                                Testing Equipment
                            </h3>

                            <p
                                class="mt-1
                                       text-sm
                                       text-gray-500"
                            >
                                Professional instruments
                                for testing applications.
                            </p>

                        </div>

                    </div>


                    <div class="flex gap-3">

                        <span
                            class="shrink-0
                                   w-7 h-7
                                   bg-[#073B66]
                                   text-white
                                   flex items-center
                                   justify-center
                                   text-xs
                                   font-bold"
                        >
                            ✓
                        </span>

                        <div>

                            <h3
                                class="font-bold
                                       text-[#073B66]"
                            >
                                Engineering Solutions
                            </h3>

                            <p
                                class="mt-1
                                       text-sm
                                       text-gray-500"
                            >
                                Solutions for demanding
                                engineering environments.
                            </p>

                        </div>

                    </div>


                    <div class="flex gap-3">

                        <span
                            class="shrink-0
                                   w-7 h-7
                                   bg-[#073B66]
                                   text-white
                                   flex items-center
                                   justify-center
                                   text-xs
                                   font-bold"
                        >
                            ✓
                        </span>

                        <div>

                            <h3
                                class="font-bold
                                       text-[#073B66]"
                            >
                                Laboratory Applications
                            </h3>

                            <p
                                class="mt-1
                                       text-sm
                                       text-gray-500"
                            >
                                Equipment for professional
                                laboratory testing.
                            </p>

                        </div>

                    </div>


                    <div class="flex gap-3">

                        <span
                            class="shrink-0
                                   w-7 h-7
                                   bg-[#073B66]
                                   text-white
                                   flex items-center
                                   justify-center
                                   text-xs
                                   font-bold"
                        >
                            ✓
                        </span>

                        <div>

                            <h3
                                class="font-bold
                                       text-[#073B66]"
                            >
                                Application Support
                            </h3>

                            <p
                                class="mt-1
                                       text-sm
                                       text-gray-500"
                            >
                                Helping identify suitable
                                testing solutions.
                            </p>

                        </div>

                    </div>

                </div>


                {{-- CTA --}}
                <div
                    class="mt-9
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

                        <span class="ml-3">→</span>
                    </a>


                    <a
                        href="{{ route('products') }}"
                        class="inline-flex
                               items-center
                               justify-center
                               border border-gray-300
                               text-[#073B66]
                               hover:border-[#E31E24]
                               hover:text-[#E31E24]
                               px-7 py-3.5
                               font-semibold
                               transition"
                    >
                        Explore Products
                    </a>

                </div>

            </div>

        </div>

    </div>

</section>

{{-- =========================================================
     INSIDE ASEW / CLIENT VIDEO
========================================================= --}}

<section
    id="company-video"
    class="relative bg-[#061B2D] py-20 lg:py-24 overflow-hidden"
>

    <div class="max-w-7xl mx-auto px-5 sm:px-8 lg:px-10">

        {{-- Header --}}
        <div
            class="flex flex-col lg:flex-row
                   lg:items-end
                   lg:justify-between
                   gap-6 mb-10"
        >

            <div>

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
                        Inside ASEW
                    </span>

                </div>

                <h2
                    class="text-white
                           text-4xl sm:text-5xl
                           lg:text-6xl
                           font-bold
                           leading-tight"
                >
                    See our world of
                    <span class="text-[#E31E24]">
                        testing.
                    </span>
                </h2>

            </div>


            <p
                class="max-w-xl
                       text-blue-100/60
                       leading-7"
            >
                Take a closer look at our equipment,
                engineering environment and approach to
                testing and measurement.
            </p>

        </div>


        {{-- Video --}}
        <div
            class="relative
                   w-full
                   aspect-video
                   lg:aspect-[21/9]
                   overflow-hidden
                   bg-black
                   border border-white/10"
        >

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

                Your browser does not support the video tag.

            </video>


            {{-- Overlay --}}
            <div
                class="absolute inset-0
                       bg-gradient-to-r
                       from-[#061B2D]/60
                       via-transparent
                       to-transparent
                       pointer-events-none"
            ></div>


            {{-- Video Label --}}
            <div
                class="absolute
                       left-5 sm:left-8
                       bottom-5 sm:bottom-8
                       pointer-events-none"
            >

                <div
                    class="flex items-center gap-3"
                >

                    <span
                        class="w-9 h-9
                               rounded-full
                               bg-[#E31E24]
                               text-white
                               flex items-center
                               justify-center
                               text-xs"
                    >
                        ▶
                    </span>

                    <span
                        class="text-white
                               text-sm
                               font-semibold
                               tracking-wide"
                    >
                        Associated Scientific & Engineering
                    </span>

                </div>

            </div>

        </div>


        {{-- Bottom Information --}}
        <div
            class="grid grid-cols-1
                   md:grid-cols-3
                   gap-px
                   bg-white/10
                   mt-8"
        >

            <div
                class="bg-[#061B2D]
                       p-6"
            >

                <p
                    class="text-[#E31E24]
                           text-xs
                           font-bold
                           uppercase
                           tracking-widest"
                >
                    Testing
                </p>

                <p
                    class="mt-2
                           text-white/60
                           text-sm
                           leading-6"
                >
                    Equipment designed for
                    professional testing requirements.
                </p>

            </div>


            <div
                class="bg-[#061B2D]
                       p-6"
            >

                <p
                    class="text-[#E31E24]
                           text-xs
                           font-bold
                           uppercase
                           tracking-widest"
                >
                    Engineering
                </p>

                <p
                    class="mt-2
                           text-white/60
                           text-sm
                           leading-6"
                >
                    Supporting engineering and
                    industrial applications.
                </p>

            </div>


            <div
                class="bg-[#061B2D]
                       p-6"
            >

                <p
                    class="text-[#E31E24]
                           text-xs
                           font-bold
                           uppercase
                           tracking-widest"
                >
                    Precision
                </p>

                <p
                    class="mt-2
                           text-white/60
                           text-sm
                           leading-6"
                >
                    Reliable measurement for
                    confident testing decisions.
                </p>

            </div>

        </div>

    </div>

</section>

{{-- =========================================================
     REQUEST A QUOTE / CONTACT
========================================================= --}}

<section
    id="contact"
    class="relative bg-[#F6F8FA] py-20 lg:py-28 overflow-hidden"
>

    <div class="max-w-7xl mx-auto px-5 sm:px-8 lg:px-10">

        <div
            class="grid lg:grid-cols-2
                   gap-12 lg:gap-20
                   items-start"
        >

            {{-- LEFT CONTENT --}}
            <div>

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
                        Get In Touch
                    </span>

                </div>


                <h2
                    class="text-[#073B66]
                           text-4xl sm:text-5xl
                           lg:text-6xl
                           font-bold
                           leading-tight"
                >
                    Need the right
                    <span class="text-[#E31E24]">
                        testing solution?
                    </span>
                </h2>


                <p
                    class="mt-6
                           text-gray-600
                           text-base lg:text-lg
                           leading-8
                           max-w-xl"
                >
                    Tell us what you need to test, measure or
                    evaluate. Our team can help you identify
                    the right equipment for your application.
                </p>


                {{-- Contact Details --}}
                <div class="mt-10 space-y-5">

                    {{-- Phone --}}
                    <a
                        href="tel:+919999999999"
                        class="flex items-start gap-4
                               group"
                    >

                        <span
                            class="w-12 h-12
                                   shrink-0
                                   bg-[#073B66]
                                   text-white
                                   flex items-center
                                   justify-center
                                   group-hover:bg-[#E31E24]
                                   transition"
                        >
                            ☎
                        </span>

                        <div>

                            <p
                                class="text-xs
                                       text-gray-400
                                       uppercase
                                       tracking-widest
                                       font-semibold"
                            >
                                Call Us
                            </p>

                            <p
                                class="mt-1
                                       text-[#073B66]
                                       font-semibold"
                            >
                                +91 99999 99999
                            </p>

                        </div>

                    </a>


                    {{-- Email --}}
                    <a
                        href="mailto:info@asew.in"
                        class="flex items-start gap-4
                               group"
                    >

                        <span
                            class="w-12 h-12
                                   shrink-0
                                   bg-[#073B66]
                                   text-white
                                   flex items-center
                                   justify-center
                                   group-hover:bg-[#E31E24]
                                   transition"
                        >
                            ✉
                        </span>

                        <div>

                            <p
                                class="text-xs
                                       text-gray-400
                                       uppercase
                                       tracking-widest
                                       font-semibold"
                            >
                                Email Us
                            </p>

                            <p
                                class="mt-1
                                       text-[#073B66]
                                       font-semibold"
                            >
                                info@asew.in
                            </p>

                        </div>

                    </a>


                    {{-- Timing --}}
                    <div
                        class="flex items-start gap-4"
                    >

                        <span
                            class="w-12 h-12
                                   shrink-0
                                   bg-[#073B66]
                                   text-white
                                   flex items-center
                                   justify-center"
                        >
                            ◷
                        </span>

                        <div>

                            <p
                                class="text-xs
                                       text-gray-400
                                       uppercase
                                       tracking-widest
                                       font-semibold"
                            >
                                Business Hours
                            </p>

                            <p
                                class="mt-1
                                       text-[#073B66]
                                       font-semibold"
                            >
                                Monday – Saturday
                            </p>

                            <p
                                class="text-sm
                                       text-gray-500"
                            >
                                9:00 AM – 6:00 PM
                            </p>

                        </div>

                    </div>

                </div>

            </div>


            {{-- RIGHT: QUOTE FORM --}}
            <div
                class="bg-white
                       border border-gray-200
                       shadow-xl
                       p-6 sm:p-8 lg:p-10"
            >

                <div class="mb-7">

                    <p
                        class="text-[#E31E24]
                               text-xs
                               font-bold
                               uppercase
                               tracking-[0.18em]"
                    >
                        Request a Quote
                    </p>

                    <h3
                        class="mt-2
                               text-2xl sm:text-3xl
                               font-bold
                               text-[#073B66]"
                    >
                        Tell us about your requirement
                    </h3>

                </div>


                <form
                    action="#"
                    method="POST"
                    class="space-y-5"
                >

                    @csrf

                    {{-- Name --}}
                    <div>

                        <label
                            for="name"
                            class="block
                                   text-sm
                                   font-semibold
                                   text-gray-700
                                   mb-2"
                        >
                            Full Name
                        </label>

                        <input
                            type="text"
                            id="name"
                            name="name"
                            placeholder="Enter your name"
                            required
                            class="w-full
                                   border border-gray-200
                                   px-4 py-3
                                   text-sm
                                   text-gray-800
                                   outline-none
                                   focus:border-[#073B66]
                                   focus:ring-1
                                   focus:ring-[#073B66]
                                   transition"
                        >

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
                                       text-gray-700
                                       mb-2"
                            >
                                Email Address
                            </label>

                            <input
                                type="email"
                                id="email"
                                name="email"
                                placeholder="you@example.com"
                                required
                                class="w-full
                                       border border-gray-200
                                       px-4 py-3
                                       text-sm
                                       text-gray-800
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
                                       text-gray-700
                                       mb-2"
                            >
                                Phone Number
                            </label>

                            <input
                                type="tel"
                                id="phone"
                                name="phone"
                                placeholder="+91"
                                class="w-full
                                       border border-gray-200
                                       px-4 py-3
                                       text-sm
                                       text-gray-800
                                       outline-none
                                       focus:border-[#073B66]
                                       focus:ring-1
                                       focus:ring-[#073B66]
                                       transition"
                            >

                        </div>

                    </div>


                    {{-- Company --}}
                    <div>

                        <label
                            for="company"
                            class="block
                                   text-sm
                                   font-semibold
                                   text-gray-700
                                   mb-2"
                        >
                            Company / Organisation
                        </label>

                        <input
                            type="text"
                            id="company"
                            name="company"
                            placeholder="Company name"
                            class="w-full
                                   border border-gray-200
                                   px-4 py-3
                                   text-sm
                                   text-gray-800
                                   outline-none
                                   focus:border-[#073B66]
                                   focus:ring-1
                                   focus:ring-[#073B66]
                                   transition"
                        >

                    </div>


                    {{-- Requirement --}}
                    <div>

                        <label
                            for="message"
                            class="block
                                   text-sm
                                   font-semibold
                                   text-gray-700
                                   mb-2"
                        >
                            Your Requirement
                        </label>

                        <textarea
                            id="message"
                            name="message"
                            rows="4"
                            placeholder="Tell us about the equipment or testing requirement..."
                            required
                            class="w-full
                                   border border-gray-200
                                   px-4 py-3
                                   text-sm
                                   text-gray-800
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
                               px-6 py-4
                               font-bold
                               text-sm
                               transition
                               duration-300"
                    >
                        Send Enquiry
                        <span class="ml-2">→</span>
                    </button>


                    <p
                        class="text-center
                               text-xs
                               text-gray-400"
                    >
                        Our team will get back to you regarding
                        your requirement.
                    </p>

                </form>

            </div>

        </div>

    </div>

</section>




@endsection