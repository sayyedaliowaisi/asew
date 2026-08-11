@extends('layouts.app')

@section('title', 'Associated Scientific & Engineering | Testing Equipment')

@section('content')

{{-- =========================================================
     HERO SECTION
========================================================= --}}
<section class="relative min-h-[620px] lg:min-h-[680px] overflow-hidden">

    {{-- Background Image --}}
    <img
        src="{{ asset('images/hero-testing.jpg') }}"
        alt="Testing and Engineering Equipment"
        class="absolute inset-0 w-full h-full object-cover"
    >

    {{-- Dark Blue Overlay --}}
    <div class="absolute inset-0 bg-[#061B2D]/65"></div>

    {{-- Blue Gradient --}}
    <div class="absolute inset-0 bg-gradient-to-r from-[#061B2D]/90 via-[#073B66]/60 to-transparent"></div>


    {{-- Hero Content --}}
    <div class="relative z-10 min-h-[620px] lg:min-h-[680px]">

        <div class="max-w-7xl mx-auto px-5 sm:px-8 lg:px-10 h-full">

            <div class="flex items-center min-h-[620px] lg:min-h-[680px]">

                <div class="max-w-4xl text-white py-20">

                    {{-- Small Heading --}}
                    <div class="flex items-center gap-3 mb-5">

                        <span class="block w-10 h-[2px] bg-[#E31E24]"></span>

                        <p class="text-sm sm:text-base font-semibold
                                  uppercase tracking-[0.18em] text-gray-200">
                            Testing & Measurement Equipment
                        </p>

                    </div>


                    {{-- Main Heading --}}
                    <h1
                        class="text-4xl sm:text-5xl md:text-6xl lg:text-7xl
                               font-bold leading-[1.05] tracking-tight"
                    >
                        Precision Testing
                        <br>

                        <span class="text-white">
                            Solutions for
                        </span>

                        <span class="text-[#E31E24]">
                            Modern Engineering
                        </span>
                    </h1>


                    {{-- Description --}}
                    <p
                        class="mt-6 max-w-2xl text-base sm:text-lg
                               leading-7 sm:leading-8 text-gray-200"
                    >
                        Reliable scientific and engineering testing equipment
                        designed to deliver accurate results, dependable
                        performance and professional testing solutions.
                    </p>


                    {{-- Buttons --}}
                    <div class="mt-9 flex flex-col sm:flex-row gap-4">

                        <a
                            href="#products"
                            class="inline-flex items-center justify-center
                                   bg-[#E31E24]
                                   hover:bg-[#C8181D]
                                   text-white
                                   px-7 py-3.5
                                   font-semibold
                                   transition duration-300
                                   shadow-lg shadow-black/20"
                        >
                            Explore Products

                            <svg
                                xmlns="http://www.w3.org/2000/svg"
                                class="w-5 h-5 ml-2"
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
                            class="inline-flex items-center justify-center
                                   border-2 border-white
                                   hover:bg-white
                                   hover:text-[#073B66]
                                   text-white
                                   px-7 py-3.5
                                   font-semibold
                                   transition duration-300"
                        >
                            Request a Quote
                        </a>

                    </div>


                    {{-- Trust Points --}}
                    <div
                        class="mt-10 pt-6
                               border-t border-white/20
                               flex flex-wrap gap-x-8 gap-y-3
                               text-sm text-gray-200"
                    >

                        <div class="flex items-center gap-2">
                            <span class="text-[#E31E24]">✓</span>
                            Quality Equipment
                        </div>

                        <div class="flex items-center gap-2">
                            <span class="text-[#E31E24]">✓</span>
                            Accurate Testing
                        </div>

                        <div class="flex items-center gap-2">
                            <span class="text-[#E31E24]">✓</span>
                            Engineering Solutions
                        </div>

                    </div>

                </div>

            </div>

        </div>

    </div>


    {{-- Left Arrow --}}
    <button
        type="button"
        class="hidden xl:flex absolute left-5 top-1/2 -translate-y-1/2
               w-12 h-12
               items-center justify-center
               bg-white/95
               text-[#073B66]
               hover:bg-[#E31E24]
               hover:text-white
               transition duration-300
               z-20"
        aria-label="Previous slide"
    >
        <svg
            xmlns="http://www.w3.org/2000/svg"
            class="w-5 h-5"
            fill="none"
            viewBox="0 0 24 24"
            stroke="currentColor"
            stroke-width="2"
        >
            <path
                stroke-linecap="round"
                stroke-linejoin="round"
                d="m15 19-7-7 7-7"
            />
        </svg>
    </button>


    {{-- Right Arrow --}}
    <button
        type="button"
        class="hidden xl:flex absolute right-5 top-1/2 -translate-y-1/2
               w-12 h-12
               items-center justify-center
               bg-white/95
               text-[#073B66]
               hover:bg-[#E31E24]
               hover:text-white
               transition duration-300
               z-20"
        aria-label="Next slide"
    >
        <svg
            xmlns="http://www.w3.org/2000/svg"
            class="w-5 h-5"
            fill="none"
            viewBox="0 0 24 24"
            stroke="currentColor"
            stroke-width="2"
        >
            <path
                stroke-linecap="round"
                stroke-linejoin="round"
                d="m9 5 7 7-7 7"
            />
        </svg>
    </button>


    {{-- Bottom Scroll Indicator --}}
    <div
        class="absolute bottom-6 left-1/2 -translate-x-1/2
               z-20 hidden sm:flex flex-col items-center
               text-white/80"
    >
        <span class="text-[10px] uppercase tracking-[0.3em] mb-2">
            Scroll
        </span>

        <span class="w-[1px] h-8 bg-white/60"></span>
    </div>

</section>






        {{-- =========================================================
     COMPANY INTRODUCTION VIDEO
========================================================= --}}

{{-- Video Heading --}}
<section class="bg-white py-16 lg:py-20">

    <div class="max-w-7xl mx-auto px-5 sm:px-8 lg:px-10 text-center">

        <div class="flex items-center justify-center gap-3 mb-4">

            <span class="w-10 h-[2px] bg-[#E31E24]"></span>

            <span
                class="text-[#E31E24] text-sm font-semibold
                       uppercase tracking-[0.18em]"
            >
                Discover ASEW
            </span>

            <span class="w-10 h-[2px] bg-[#E31E24]"></span>

        </div>

        <h2
            class="text-3xl sm:text-4xl lg:text-5xl
                   font-bold text-[#073B66]"
        >
            Associated Scientific
            <span class="text-[#E31E24]">
                & Engineering
            </span>
        </h2>

        <p class="mt-5 max-w-3xl mx-auto text-gray-600 leading-7">
            Discover our company, capabilities and scientific
            and engineering solutions for modern testing requirements.
        </p>

    </div>

</section>


{{-- =========================================================
     FULL WIDTH VIDEO
========================================================= --}}

<section
    class="relative w-full m-0 p-0
           overflow-hidden bg-black"
>

    <video
        class="w-full h-auto block"
               object-cover"
        autoplay
        muted
        loop
        playsinline
        preload="auto"
    >

        <source
            src="{{ asset('videos/asew-company-intro.mp4') }}"
            type="video/mp4"
        >

        Your browser does not support the video tag.

    </video>

</section>


{{-- =========================================================
     VIDEO INFORMATION CARDS
========================================================= --}}

<section class="bg-white py-10 lg:py-12">

    <div class="max-w-4xl mx-auto px-5 sm:px-8">

        <div
            class="grid grid-cols-1
                   sm:grid-cols-3
                   gap-4"
        >

            {{-- Card 1 --}}
            <div
                class="border border-gray-200
                       px-5 py-5
                       text-center
                       bg-white
                       hover:border-[#073B66]
                       hover:shadow-md
                       transition duration-300"
            >

                <p class="font-semibold text-[#073B66]">
                    Scientific Solutions
                </p>

                <p class="text-sm text-gray-500 mt-1">
                    Professional equipment
                </p>

            </div>


            {{-- Card 2 --}}
            <div
                class="border border-gray-200
                       px-5 py-5
                       text-center
                       bg-white
                       hover:border-[#073B66]
                       hover:shadow-md
                       transition duration-300"
            >

                <p class="font-semibold text-[#073B66]">
                    Engineering Equipment
                </p>

                <p class="text-sm text-gray-500 mt-1">
                    Reliable testing solutions
                </p>

            </div>


            {{-- Card 3 --}}
            <div
                class="border border-gray-200
                       px-5 py-5
                       text-center
                       bg-white
                       hover:border-[#E31E24]
                       hover:shadow-md
                       transition duration-300"
            >

                <p class="font-semibold text-[#073B66]">
                    Testing Excellence
                </p>

                <p class="text-sm text-gray-500 mt-1">
                    Accuracy & performance
                </p>

            </div>

        </div>

    </div>

</section>


{{-- =========================================================
     ABOUT ASSOCIATED SCIENTIFIC & ENGINEERING
========================================================= --}}
<section id="about" class="relative py-20 lg:py-28 bg-gray-50 overflow-hidden">

    {{-- Decorative Background --}}
    <div
        class="absolute -top-32 -right-32
               w-72 h-72
               rounded-full
               bg-[#073B66]/5"
    ></div>

    <div
        class="absolute -bottom-40 -left-40
               w-96 h-96
               rounded-full
               bg-[#E31E24]/5"
    ></div>


    <div class="relative max-w-7xl mx-auto px-5 sm:px-8 lg:px-10">

        <div class="grid lg:grid-cols-2 gap-12 xl:gap-20 items-center">

            {{-- =================================================
                 IMAGE SIDE
            ================================================== --}}
            <div class="relative">

                <div
                    class="relative
                           h-[380px]
                           sm:h-[480px]
                           lg:h-[560px]
                           overflow-hidden"
                >

                    <img
                        src="{{ asset('images/about-testing.jpg') }}"
                        alt="Associated Scientific & Engineering"
                        class="w-full h-full object-cover"
                    >

                    {{-- Image Overlay --}}
                    <div
                        class="absolute inset-0
                               bg-gradient-to-t
                               from-[#061B2D]/50
                               via-transparent
                               to-transparent"
                    ></div>

                </div>


                {{-- Red Accent --}}
                <div
                    class="absolute
                           -left-3 sm:-left-5
                           top-10
                           w-1 h-28
                           bg-[#E31E24]"
                ></div>


                {{-- ASEW Badge --}}
                <div
                    class="absolute
                           left-5 sm:left-8
                           bottom-5 sm:bottom-8
                           bg-[#073B66]
                           text-white
                           px-6 sm:px-8
                           py-5 sm:py-6
                           shadow-2xl"
                >

                    <p
                        class="text-2xl sm:text-3xl
                               font-bold tracking-wide"
                    >
                        ASEW
                    </p>

                    <div class="w-10 h-[2px] bg-[#E31E24] my-2"></div>

                    <p
                        class="text-xs sm:text-sm
                               text-gray-200"
                    >
                        Scientific & Engineering
                    </p>

                </div>

            </div>


            {{-- =================================================
                 CONTENT SIDE
            ================================================== --}}
            <div>

                {{-- Eyebrow --}}
                <div class="flex items-center gap-3 mb-5">

                    <span class="w-10 h-[2px] bg-[#E31E24]"></span>

                    <span
                        class="text-[#E31E24]
                               text-sm font-semibold
                               uppercase
                               tracking-[0.18em]"
                    >
                        About Us
                    </span>

                </div>


                {{-- Heading --}}
                <h2
                    class="text-3xl
                           sm:text-4xl
                           lg:text-5xl
                           font-bold
                           text-[#073B66]
                           leading-[1.1]"
                >
                    Engineering
                    <br class="hidden sm:block">

                    <span class="text-[#E31E24]">
                        Precision
                    </span>
                    Through
                    <br class="hidden sm:block">

                    Reliable Testing
                </h2>


                {{-- Description --}}
                <p
                    class="mt-6
                           text-gray-600
                           leading-7
                           text-base"
                >
                    Associated Scientific & Engineering is committed
                    to providing dependable scientific and engineering
                    solutions for professional testing and measurement
                    requirements.
                </p>

                <p
                    class="mt-4
                           text-gray-600
                           leading-7
                           text-base"
                >
                    We aim to support laboratories, industries,
                    educational institutions and engineering
                    professionals with quality equipment and practical
                    solutions designed around accuracy, reliability
                    and performance.
                </p>


                {{-- Key Features --}}
                <div
                    class="mt-8
                           grid sm:grid-cols-2
                           gap-x-8 gap-y-6"
                >

                    {{-- Feature 1 --}}
                    <div class="flex items-start gap-3">

                        <div
                            class="flex-shrink-0
                                   w-10 h-10
                                   bg-[#073B66]/10
                                   flex items-center
                                   justify-center
                                   text-[#073B66]"
                        >

                            <svg
                                xmlns="http://www.w3.org/2000/svg"
                                class="w-5 h-5"
                                fill="none"
                                viewBox="0 0 24 24"
                                stroke="currentColor"
                                stroke-width="1.8"
                            >
                                <path
                                    stroke-linecap="round"
                                    stroke-linejoin="round"
                                    d="M9 12.75 11.25 15 15 9.75M21 12c0 4.97-4.03 9-9 9s-9-4.03-9-9 4.03-9 9-9 9 4.03 9 9Z"
                                />
                            </svg>

                        </div>

                        <div>
                            <h3 class="font-semibold text-gray-900">
                                Quality Equipment
                            </h3>

                            <p class="text-sm text-gray-500 mt-1">
                                Reliable equipment for professional
                                testing requirements.
                            </p>
                        </div>

                    </div>


                    {{-- Feature 2 --}}
                    <div class="flex items-start gap-3">

                        <div
                            class="flex-shrink-0
                                   w-10 h-10
                                   bg-[#073B66]/10
                                   flex items-center
                                   justify-center
                                   text-[#073B66]"
                        >

                            <svg
                                xmlns="http://www.w3.org/2000/svg"
                                class="w-5 h-5"
                                fill="none"
                                viewBox="0 0 24 24"
                                stroke="currentColor"
                                stroke-width="1.8"
                            >
                                <path
                                    stroke-linecap="round"
                                    stroke-linejoin="round"
                                    d="M12 6v6l4 2M21 12a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z"
                                />
                            </svg>

                        </div>

                        <div>
                            <h3 class="font-semibold text-gray-900">
                                Reliable Solutions
                            </h3>

                            <p class="text-sm text-gray-500 mt-1">
                                Practical solutions for diverse
                                testing applications.
                            </p>
                        </div>

                    </div>


                    {{-- Feature 3 --}}
                    <div class="flex items-start gap-3">

                        <div
                            class="flex-shrink-0
                                   w-10 h-10
                                   bg-[#073B66]/10
                                   flex items-center
                                   justify-center
                                   text-[#073B66]"
                        >

                            <svg
                                xmlns="http://www.w3.org/2000/svg"
                                class="w-5 h-5"
                                fill="none"
                                viewBox="0 0 24 24"
                                stroke="currentColor"
                                stroke-width="1.8"
                            >
                                <path
                                    stroke-linecap="round"
                                    stroke-linejoin="round"
                                    d="M12 3v18M3 12h18M5.636 5.636l12.728 12.728M18.364 5.636 5.636 18.364"
                                />
                            </svg>

                        </div>

                        <div>
                            <h3 class="font-semibold text-gray-900">
                                Precision Focused
                            </h3>

                            <p class="text-sm text-gray-500 mt-1">
                                Supporting accurate and dependable
                                testing results.
                            </p>
                        </div>

                    </div>


                    {{-- Feature 4 --}}
                    <div class="flex items-start gap-3">

                        <div
                            class="flex-shrink-0
                                   w-10 h-10
                                   bg-[#E31E24]/10
                                   flex items-center
                                   justify-center
                                   text-[#E31E24]"
                        >

                            <svg
                                xmlns="http://www.w3.org/2000/svg"
                                class="w-5 h-5"
                                fill="none"
                                viewBox="0 0 24 24"
                                stroke="currentColor"
                                stroke-width="1.8"
                            >
                                <path
                                    stroke-linecap="round"
                                    stroke-linejoin="round"
                                    d="M18 18.72a9.094 9.094 0 0 0 3.75-1.48M18 18.72v-.75a6 6 0 0 0-6-6h-1.5a6 6 0 0 0-6 6v.75M18 18.72a9.094 9.094 0 0 1-12 0M15.75 6a3.75 3.75 0 1 1-7.5 0 3.75 3.75 0 0 1 7.5 0Z"
                                />
                            </svg>

                        </div>

                        <div>
                            <h3 class="font-semibold text-gray-900">
                                Customer Support
                            </h3>

                            <p class="text-sm text-gray-500 mt-1">
                                Assistance for product selection
                                and testing needs.
                            </p>
                        </div>

                    </div>

                </div>


                {{-- CTA --}}
                <div class="mt-9 flex flex-wrap items-center gap-5">

                    <a
                        href="#contact"
                        class="inline-flex items-center
                               bg-[#073B66]
                               hover:bg-[#052D4E]
                               text-white
                               px-7 py-3.5
                               font-semibold
                               transition duration-300"
                    >
                        Talk To Us

                        <svg
                            xmlns="http://www.w3.org/2000/svg"
                            class="w-5 h-5 ml-2"
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
                        href="#"
                        class="text-[#073B66]
                               font-semibold
                               hover:text-[#E31E24]
                               transition"
                    >
                        Learn More →
                    </a>

                </div>

            </div>

        </div>

    </div>

</section>

{{-- =========================================================
     PRODUCTS SECTION
========================================================= --}}
<section id="products" class="py-20 lg:py-24 bg-gray-50">

    <div class="max-w-7xl mx-auto px-5 sm:px-8 lg:px-10">

        {{-- Section Heading --}}
        <div class="text-center max-w-3xl mx-auto">

            <div class="flex items-center justify-center gap-3 mb-4">
                <span class="w-10 h-[2px] bg-[#E31E24]"></span>

                <span
                    class="text-[#E31E24] text-sm font-semibold
                           uppercase tracking-[0.18em]"
                >
                    Our Products
                </span>

                <span class="w-10 h-[2px] bg-[#E31E24]"></span>
            </div>

            <h2
                class="text-3xl sm:text-4xl lg:text-5xl
                       font-bold text-[#073B66]"
            >
                Testing & Measurement
                <span class="text-[#E31E24]">
                    Equipment
                </span>
            </h2>

            <p class="mt-4 text-gray-600 leading-7">
                Explore our range of reliable scientific and
                engineering testing equipment.
            </p>

        </div>


        {{-- Four Products --}}
        <div
            class="mt-12 grid grid-cols-1
                   sm:grid-cols-2
                   lg:grid-cols-4
                   gap-6"
        >

            {{-- Product 1 --}}
            <div
                class="group bg-white border border-gray-200
                       overflow-hidden
                       hover:shadow-xl
                       hover:-translate-y-1
                       transition-all duration-300"
            >

                <div class="h-64 bg-white overflow-hidden">

                    <img
                        src="{{ asset('images/products/product-1.jpg') }}"
                        alt="Testing Equipment"
                        class="w-full h-full object-contain p-5
                               group-hover:scale-105
                               transition duration-500"
                    >

                </div>

                <div class="p-5">

                    <h3
                        class="text-lg font-bold text-[#073B66]"
                    >
                        Testing Equipment
                    </h3>

                    <p class="mt-2 text-sm text-gray-600 leading-6">
                        Reliable equipment for professional
                        testing and measurement applications.
                    </p>

                    <a
                        href="#contact"
                        class="inline-flex items-center mt-4
                               text-sm font-semibold
                               text-[#E31E24]
                               hover:text-[#073B66]
                               transition"
                    >
                        Enquire Now
                        <span class="ml-2">→</span>
                    </a>

                </div>

            </div>


            {{-- Product 2 --}}
            <div
                class="group bg-white border border-gray-200
                       overflow-hidden
                       hover:shadow-xl
                       hover:-translate-y-1
                       transition-all duration-300"
            >

                <div class="h-64 bg-white overflow-hidden">

                    <img
                        src="{{ asset('images/products/product-2.jpg') }}"
                        alt="Material Testing Equipment"
                        class="w-full h-full object-contain p-5
                               group-hover:scale-105
                               transition duration-500"
                    >

                </div>

                <div class="p-5">

                    <h3
                        class="text-lg font-bold text-[#073B66]"
                    >
                        Material Testing Equipment
                    </h3>

                    <p class="mt-2 text-sm text-gray-600 leading-6">
                        Precision equipment for material testing
                        and quality control.
                    </p>

                    <a
                        href="#contact"
                        class="inline-flex items-center mt-4
                               text-sm font-semibold
                               text-[#E31E24]
                               hover:text-[#073B66]
                               transition"
                    >
                        Enquire Now
                        <span class="ml-2">→</span>
                    </a>

                </div>

            </div>


            {{-- Product 3 --}}
            <div
                class="group bg-white border border-gray-200
                       overflow-hidden
                       hover:shadow-xl
                       hover:-translate-y-1
                       transition-all duration-300"
            >

                <div class="h-64 bg-white overflow-hidden">

                    <img
                        src="{{ asset('images/products/product-3.jpg') }}"
                        alt="Concrete Testing Machine"
                        class="w-full h-full object-contain p-5
                               group-hover:scale-105
                               transition duration-500"
                    >

                </div>

                <div class="p-5">

                    <h3
                        class="text-lg font-bold text-[#073B66]"
                    >
                        Concrete Testing Machine
                    </h3>

                    <p class="mt-2 text-sm text-gray-600 leading-6">
                        Dependable equipment designed for
                        concrete testing applications.
                    </p>

                    <a
                        href="#contact"
                        class="inline-flex items-center mt-4
                               text-sm font-semibold
                               text-[#E31E24]
                               hover:text-[#073B66]
                               transition"
                    >
                        Enquire Now
                        <span class="ml-2">→</span>
                    </a>

                </div>

            </div>


            {{-- Product 4 --}}
            <div
                class="group bg-white border border-gray-200
                       overflow-hidden
                       hover:shadow-xl
                       hover:-translate-y-1
                       transition-all duration-300"
            >

                <div class="h-64 bg-white overflow-hidden">

                    <img
                        src="{{ asset('images/products/product-4.jpg') }}"
                        alt="Scientific Testing Equipment"
                        class="w-full h-full object-contain p-5
                               group-hover:scale-105
                               transition duration-500"
                    >

                </div>

                <div class="p-5">

                    <h3
                        class="text-lg font-bold text-[#073B66]"
                    >
                        Scientific Testing Equipment
                    </h3>

                    <p class="mt-2 text-sm text-gray-600 leading-6">
                        Professional testing equipment for
                        accurate and dependable results.
                    </p>

                    <a
                        href="#contact"
                        class="inline-flex items-center mt-4
                               text-sm font-semibold
                               text-[#E31E24]
                               hover:text-[#073B66]
                               transition"
                    >
                        Enquire Now
                        <span class="ml-2">→</span>
                    </a>

                </div>

            </div>

        </div>

    </div>

</section>



<section id="products" class="py-20 bg-white">
    <div class="max-w-7xl mx-auto px-5 text-center">
        <h2 class="text-3xl font-bold text-[#073B66]">
            Featured Products
        </h2>
    </div>
</section>


<section id="applications" class="py-20 bg-gray-50">
    <div class="max-w-7xl mx-auto px-5 text-center">
        <h2 class="text-3xl font-bold text-[#073B66]">
            Applications
        </h2>
    </div>
</section>


<section id="gallery" class="py-20 bg-white">
    <div class="max-w-7xl mx-auto px-5 text-center">
        <h2 class="text-3xl font-bold text-[#073B66]">
            Gallery
        </h2>
    </div>
</section>


<section id="contact" class="py-20 bg-[#073B66] text-white">
    <div class="max-w-7xl mx-auto px-5 text-center">

        <h2 class="text-3xl md:text-4xl font-bold">
            Need Testing Equipment?
        </h2>

        <p class="mt-4 text-gray-200">
            Contact Associated Scientific & Engineering for
            product information and quotations.
        </p>

        <a
            href="mailto:info@asew.in"
            class="inline-block mt-7 bg-[#E31E24]
                   hover:bg-[#C8181D]
                   px-7 py-3.5
                   font-semibold transition"
        >
            Contact Us
        </a>

    </div>
</section>

@endsection