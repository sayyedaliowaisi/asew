@extends('layouts.app')

@section('title', 'Associated Scientific & Engineering | Testing Equipment')

@section('content')


<section
    x-data="{
        current: 0,
        total: 4,
        timer: null,
        startX: 0,
        isDragging: false,

        slides: [
            '{{ asset('images/hero (1).png') }}',
            '{{ asset('images/hero (1).png') }}',
            '{{ asset('images/hero (1).png') }}',
            '{{ asset('images/hero (1).png') }}'
        ],

        start() {
            this.timer = setInterval(() => {
                this.next();
            }, 5000);
        },

        stop() {
            clearInterval(this.timer);
        },

        next() {
            this.current = (this.current + 1) % this.total;
        },

        goTo(index) {
            this.current = index;
            this.restart();
        },

        restart() {
            this.stop();
            this.start();
        },

        touchStart(e) {
            this.stop();
            this.startX = e.touches[0].clientX;
            this.isDragging = true;
        },

        touchEnd(e) {
            if (!this.isDragging) return;

            const endX = e.changedTouches[0].clientX;
            const distance = this.startX - endX;

            this.isDragging = false;

            if (Math.abs(distance) > 50) {

                if (distance > 0) {
                    this.current =
                        (this.current + 1) % this.total;
                } else {
                    this.current =
                        (this.current - 1 + this.total)
                        % this.total;
                }
            }

            this.start();
        }
    }"

    x-init="start()"

    @mouseenter="stop()"
    @mouseleave="start()"

    @touchstart.passive="touchStart($event)"
    @touchend.passive="touchEnd($event)"

    class="relative w-full overflow-hidden bg-white"
>

    {{-- =====================================================
         SLIDER TRACK
    ====================================================== --}}

    <div
        class="relative w-full overflow-hidden"
    >

        <div
            class="flex w-full"
            :style="`transform: translateX(-${current * 100}%);`"
            style="transition: transform 700ms ease-in-out;"
        >

            <template
                x-for="(slide, index) in slides"
                :key="index"
            >

                <div
                    class="min-w-full w-full flex-shrink-0"
                >

                    <img
                        :src="slide"
                        alt="Associated Scientific & Engineering Works"

                        class="
                            block
                            w-full
                            h-auto
                            object-contain

                            select-none
                            pointer-events-none
                        "

                        draggable="false"
                    >

                </div>

            </template>

        </div>

    </div>


    {{-- =====================================================
         DOTS
    ====================================================== --}}

    <div
        class="
            absolute
            bottom-4
            sm:bottom-5

            left-1/2
            -translate-x-1/2

            z-30

            flex
            items-center
            gap-2
        "
    >

        <template
            x-for="index in total"
            :key="index"
        >

            <button
                type="button"
                @click="goTo(index - 1)"

                :class="
                    current === index - 1
                        ? 'w-8 bg-[#E31E24]'
                        : 'w-2.5 bg-white/80 hover:bg-[#073B66]'
                "

                class="
                    h-2.5
                    rounded-full
                    shadow
                    transition-all
                    duration-300
                "

                :aria-label="'Go to slide ' + index"
            ></button>

        </template>

    </div>

</section>


{{-- =========================================================
     ASEW — OUR PRODUCTS
     WIDE RANGE OF TESTING EQUIPMENT
========================================================= --}}

<section
    id="products"
    class="relative w-full bg-white py-16 sm:py-20 lg:py-24 overflow-hidden"
>

    {{-- =====================================================
         BACKGROUND
    ====================================================== --}}

    <div class="absolute inset-0 pointer-events-none">

        {{-- Very subtle technical grid --}}
        <div
            class="absolute inset-0 opacity-[0.025]"
            style="
                background-image:
                    linear-gradient(#073B66 1px, transparent 1px),
                    linear-gradient(90deg, #073B66 1px, transparent 1px);
                background-size: 40px 40px;
            "
        ></div>

        {{-- Soft top glow --}}
        <div
            class="absolute top-0 left-1/2 -translate-x-1/2
                   w-[500px] h-[180px]
                   bg-[#073B66]/[0.025]
                   blur-3xl rounded-full"
        ></div>

    </div>


    {{-- =====================================================
         CONTAINER
    ====================================================== --}}

    <div
        class="relative z-10
               max-w-[1440px]
               mx-auto
               px-4 sm:px-6 lg:px-10 xl:px-14"
    >


        {{-- =================================================
             SECTION HEADING
        ================================================== --}}

        <div class="text-center mb-9 sm:mb-11">

            {{-- Small Red Label --}}
            <div class="flex items-center justify-center gap-3 mb-3">

                <span
                    class="w-7 sm:w-9 h-[2px] bg-[#E31E24]"
                ></span>

                <span
                    class="text-[11px] sm:text-[12px]
                           font-bold
                           tracking-[0.15em]
                           text-[#E31E24]"
                >
                    OUR PRODUCTS
                </span>

                <span
                    class="w-7 sm:w-9 h-[2px] bg-[#E31E24]"
                ></span>

            </div>


            {{-- Main Heading --}}
            <h2
                class="text-[27px]
                       sm:text-[34px]
                       lg:text-[40px]
                       leading-tight
                       font-extrabold
                       tracking-[-0.025em]
                       text-[#073B66]"
            >
                WIDE RANGE OF
                <span class="text-[#073B66]">
                    TESTING EQUIPMENT
                </span>
            </h2>


            {{-- Small Description --}}
            <p
                class="max-w-[650px]
                       mx-auto
                       mt-3
                       text-[13px]
                       sm:text-[14px]
                       leading-6
                       text-slate-500"
            >
                Precision-engineered testing instruments and laboratory
                equipment for reliable results across diverse applications.
            </p>

        </div>


        {{-- =================================================
             PRODUCT GRID
        ================================================== --}}

        <div
            class="grid
                   grid-cols-2
                   sm:grid-cols-3
                   md:grid-cols-3
                   lg:grid-cols-9
                   gap-2.5
                   sm:gap-3
                   lg:gap-2"
        >


            {{-- =================================================
                 01 — SOIL TESTING
            ================================================== --}}

            <a
                href="#"
                class="group relative
                       min-h-[225px]
                       sm:min-h-[245px]
                       lg:min-h-[255px]
                       bg-white
                       border border-slate-200
                       rounded-[5px]
                       overflow-hidden
                       shadow-[0_3px_14px_rgba(7,59,102,0.06)]
                       hover:border-[#073B66]/25
                       hover:shadow-[0_12px_30px_rgba(7,59,102,0.12)]
                       hover:-translate-y-1
                       transition-all duration-300"
            >

                {{-- Image --}}
                <div
                    class="h-[130px]
                           sm:h-[140px]
                           lg:h-[145px]
                           flex items-center justify-center
                           p-3
                           bg-gradient-to-b from-white to-slate-50"
                >

                    <img
                        src="{{ asset('images/products/soil-testing.png') }}"
                        alt="Soil Testing Equipment"
                        class="max-h-full max-w-full object-contain
                               transition-transform duration-500
                               group-hover:scale-105"
                    >

                </div>


                {{-- Content --}}
                <div class="px-3 pb-3">

                    <h3
                        class="text-[11px]
                               sm:text-[12px]
                               font-extrabold
                               leading-[1.25]
                               uppercase
                               text-[#073B66]"
                    >
                        SOIL
                        <br>
                        TESTING
                    </h3>

                    <span
                        class="mt-4
                               inline-flex
                               items-center
                               gap-1
                               text-[9px]
                               sm:text-[10px]
                               font-semibold
                               text-slate-600
                               group-hover:text-[#E31E24]
                               transition-colors"
                    >
                        View Products

                        <span
                            class="text-[#E31E24]
                                   transition-transform
                                   duration-300
                                   group-hover:translate-x-1"
                        >
                            →
                        </span>
                    </span>

                </div>

            </a>


            {{-- =================================================
                 02 — CONCRETE TESTING
            ================================================== --}}

            <a
                href="#"
                class="group relative
                       min-h-[225px]
                       sm:min-h-[245px]
                       lg:min-h-[255px]
                       bg-white
                       border border-slate-200
                       rounded-[5px]
                       overflow-hidden
                       shadow-[0_3px_14px_rgba(7,59,102,0.06)]
                       hover:border-[#073B66]/25
                       hover:shadow-[0_12px_30px_rgba(7,59,102,0.12)]
                       hover:-translate-y-1
                       transition-all duration-300"
            >

                <div
                    class="h-[130px]
                           sm:h-[140px]
                           lg:h-[145px]
                           flex items-center justify-center
                           p-3
                           bg-gradient-to-b from-white to-slate-50"
                >

                    <img
                        src="{{ asset('images/products/concrete-testing.png') }}"
                        alt="Concrete Testing Equipment"
                        class="max-h-full max-w-full object-contain
                               transition-transform duration-500
                               group-hover:scale-105"
                    >

                </div>

                <div class="px-3 pb-3">

                    <h3
                        class="text-[11px] sm:text-[12px]
                               font-extrabold
                               leading-[1.25]
                               uppercase
                               text-[#073B66]"
                    >
                        CONCRETE
                        <br>
                        TESTING
                    </h3>

                    <span
                        class="mt-4 inline-flex items-center gap-1
                               text-[9px] sm:text-[10px]
                               font-semibold text-slate-600
                               group-hover:text-[#E31E24]"
                    >
                        View Products
                        <span class="text-[#E31E24] group-hover:translate-x-1 transition-transform">
                            →
                        </span>
                    </span>

                </div>

            </a>


            {{-- =================================================
                 03 — CEMENT TESTING
            ================================================== --}}

            <a
                href="#"
                class="group relative
                       min-h-[225px] sm:min-h-[245px] lg:min-h-[255px]
                       bg-white border border-slate-200 rounded-[5px]
                       overflow-hidden
                       shadow-[0_3px_14px_rgba(7,59,102,0.06)]
                       hover:border-[#073B66]/25
                       hover:shadow-[0_12px_30px_rgba(7,59,102,0.12)]
                       hover:-translate-y-1
                       transition-all duration-300"
            >

                <div
                    class="h-[130px] sm:h-[140px] lg:h-[145px]
                           flex items-center justify-center p-3
                           bg-gradient-to-b from-white to-slate-50"
                >

                    <img
                        src="{{ asset('images/products/cement-testing.png') }}"
                        alt="Cement Testing Equipment"
                        class="max-h-full max-w-full object-contain
                               transition-transform duration-500
                               group-hover:scale-105"
                    >

                </div>

                <div class="px-3 pb-3">

                    <h3
                        class="text-[11px] sm:text-[12px]
                               font-extrabold leading-[1.25]
                               uppercase text-[#073B66]"
                    >
                        CEMENT
                        <br>
                        TESTING
                    </h3>

                    <span
                        class="mt-4 inline-flex items-center gap-1
                               text-[9px] sm:text-[10px]
                               font-semibold text-slate-600
                               group-hover:text-[#E31E24]"
                    >
                        View Products
                        <span class="text-[#E31E24] group-hover:translate-x-1 transition-transform">
                            →
                        </span>
                    </span>

                </div>

            </a>


            {{-- =================================================
                 04 — AGGREGATE TESTING
            ================================================== --}}

            <a
                href="#"
                class="group relative
                       min-h-[225px] sm:min-h-[245px] lg:min-h-[255px]
                       bg-white border border-slate-200 rounded-[5px]
                       overflow-hidden
                       shadow-[0_3px_14px_rgba(7,59,102,0.06)]
                       hover:border-[#073B66]/25
                       hover:shadow-[0_12px_30px_rgba(7,59,102,0.12)]
                       hover:-translate-y-1
                       transition-all duration-300"
            >

                <div
                    class="h-[130px] sm:h-[140px] lg:h-[145px]
                           flex items-center justify-center p-3
                           bg-gradient-to-b from-white to-slate-50"
                >

                    <img
                        src="{{ asset('images/products/aggregate-testing.png') }}"
                        alt="Aggregate Testing Equipment"
                        class="max-h-full max-w-full object-contain
                               transition-transform duration-500
                               group-hover:scale-105"
                    >

                </div>

                <div class="px-3 pb-3">

                    <h3
                        class="text-[11px] sm:text-[12px]
                               font-extrabold leading-[1.25]
                               uppercase text-[#073B66]"
                    >
                        AGGREGATE
                        <br>
                        TESTING
                    </h3>

                    <span
                        class="mt-4 inline-flex items-center gap-1
                               text-[9px] sm:text-[10px]
                               font-semibold text-slate-600
                               group-hover:text-[#E31E24]"
                    >
                        View Products
                        <span class="text-[#E31E24] group-hover:translate-x-1 transition-transform">
                            →
                        </span>
                    </span>

                </div>

            </a>


            {{-- =================================================
                 05 — BITUMEN / ASPHALT
            ================================================== --}}

            <a
                href="#"
                class="group relative
                       min-h-[225px] sm:min-h-[245px] lg:min-h-[255px]
                       bg-white border border-slate-200 rounded-[5px]
                       overflow-hidden
                       shadow-[0_3px_14px_rgba(7,59,102,0.06)]
                       hover:border-[#073B66]/25
                       hover:shadow-[0_12px_30px_rgba(7,59,102,0.12)]
                       hover:-translate-y-1
                       transition-all duration-300"
            >

                <div
                    class="h-[130px] sm:h-[140px] lg:h-[145px]
                           flex items-center justify-center p-3
                           bg-gradient-to-b from-white to-slate-50"
                >

                    <img
                        src="{{ asset('images/products/bitumen-testing.png') }}"
                        alt="Bitumen Asphalt Testing Equipment"
                        class="max-h-full max-w-full object-contain
                               transition-transform duration-500
                               group-hover:scale-105"
                    >

                </div>

                <div class="px-3 pb-3">

                    <h3
                        class="text-[10px] sm:text-[11px]
                               font-extrabold leading-[1.25]
                               uppercase text-[#073B66]"
                    >
                        BITUMEN /
                        <br>
                        ASPHALT TESTING
                    </h3>

                    <span
                        class="mt-4 inline-flex items-center gap-1
                               text-[9px] sm:text-[10px]
                               font-semibold text-slate-600
                               group-hover:text-[#E31E24]"
                    >
                        View Products
                        <span class="text-[#E31E24] group-hover:translate-x-1 transition-transform">
                            →
                        </span>
                    </span>

                </div>

            </a>


            {{-- =================================================
                 06 — ROCK TESTING
            ================================================== --}}

            <a
                href="#"
                class="group relative
                       min-h-[225px] sm:min-h-[245px] lg:min-h-[255px]
                       bg-white border border-slate-200 rounded-[5px]
                       overflow-hidden
                       shadow-[0_3px_14px_rgba(7,59,102,0.06)]
                       hover:border-[#073B66]/25
                       hover:shadow-[0_12px_30px_rgba(7,59,102,0.12)]
                       hover:-translate-y-1
                       transition-all duration-300"
            >

                <div
                    class="h-[130px] sm:h-[140px] lg:h-[145px]
                           flex items-center justify-center p-3
                           bg-gradient-to-b from-white to-slate-50"
                >

                    <img
                        src="{{ asset('images/products/rock-testing.png') }}"
                        alt="Rock Testing Equipment"
                        class="max-h-full max-w-full object-contain
                               transition-transform duration-500
                               group-hover:scale-105"
                    >

                </div>

                <div class="px-3 pb-3">

                    <h3
                        class="text-[11px] sm:text-[12px]
                               font-extrabold leading-[1.25]
                               uppercase text-[#073B66]"
                    >
                        ROCK
                        <br>
                        TESTING
                    </h3>

                    <span
                        class="mt-4 inline-flex items-center gap-1
                               text-[9px] sm:text-[10px]
                               font-semibold text-slate-600
                               group-hover:text-[#E31E24]"
                    >
                        View Products
                        <span class="text-[#E31E24] group-hover:translate-x-1 transition-transform">
                            →
                        </span>
                    </span>

                </div>

            </a>


            {{-- =================================================
                 07 — MATERIAL TESTING
            ================================================== --}}

            <a
                href="#"
                class="group relative
                       min-h-[225px] sm:min-h-[245px] lg:min-h-[255px]
                       bg-white border border-slate-200 rounded-[5px]
                       overflow-hidden
                       shadow-[0_3px_14px_rgba(7,59,102,0.06)]
                       hover:border-[#073B66]/25
                       hover:shadow-[0_12px_30px_rgba(7,59,102,0.12)]
                       hover:-translate-y-1
                       transition-all duration-300"
            >

                <div
                    class="h-[130px] sm:h-[140px] lg:h-[145px]
                           flex items-center justify-center p-3
                           bg-gradient-to-b from-white to-slate-50"
                >

                    <img
                        src="{{ asset('images/products/material-testing.png') }}"
                        alt="Material Testing Equipment"
                        class="max-h-full max-w-full object-contain
                               transition-transform duration-500
                               group-hover:scale-105"
                    >

                </div>

                <div class="px-3 pb-3">

                    <h3
                        class="text-[11px] sm:text-[12px]
                               font-extrabold leading-[1.25]
                               uppercase text-[#073B66]"
                    >
                        MATERIAL
                        <br>
                        TESTING
                    </h3>

                    <span
                        class="mt-4 inline-flex items-center gap-1
                               text-[9px] sm:text-[10px]
                               font-semibold text-slate-600
                               group-hover:text-[#E31E24]"
                    >
                        View Products
                        <span class="text-[#E31E24] group-hover:translate-x-1 transition-transform">
                            →
                        </span>
                    </span>

                </div>

            </a>


            {{-- =================================================
                 08 — SURVEY INSTRUMENTS
            ================================================== --}}

            <a
                href="#"
                class="group relative
                       min-h-[225px] sm:min-h-[245px] lg:min-h-[255px]
                       bg-white border border-slate-200 rounded-[5px]
                       overflow-hidden
                       shadow-[0_3px_14px_rgba(7,59,102,0.06)]
                       hover:border-[#073B66]/25
                       hover:shadow-[0_12px_30px_rgba(7,59,102,0.12)]
                       hover:-translate-y-1
                       transition-all duration-300"
            >

                <div
                    class="h-[130px] sm:h-[140px] lg:h-[145px]
                           flex items-center justify-center p-3
                           bg-gradient-to-b from-white to-slate-50"
                >

                    <img
                        src="{{ asset('images/products/survey-instruments.png') }}"
                        alt="Survey Instruments"
                        class="max-h-full max-w-full object-contain
                               transition-transform duration-500
                               group-hover:scale-105"
                    >

                </div>

                <div class="px-3 pb-3">

                    <h3
                        class="text-[10px] sm:text-[11px]
                               font-extrabold leading-[1.25]
                               uppercase text-[#073B66]"
                    >
                        SURVEY
                        <br>
                        INSTRUMENTS
                    </h3>

                    <span
                        class="mt-4 inline-flex items-center gap-1
                               text-[9px] sm:text-[10px]
                               font-semibold text-slate-600
                               group-hover:text-[#E31E24]"
                    >
                        View Products
                        <span class="text-[#E31E24] group-hover:translate-x-1 transition-transform">
                            →
                        </span>
                    </span>

                </div>

            </a>


            {{-- =================================================
                 09 — LABORATORY EQUIPMENT
            ================================================== --}}

            <a
                href="#"
                class="group relative
                       min-h-[225px] sm:min-h-[245px] lg:min-h-[255px]
                       bg-white border border-slate-200 rounded-[5px]
                       overflow-hidden
                       shadow-[0_3px_14px_rgba(7,59,102,0.06)]
                       hover:border-[#073B66]/25
                       hover:shadow-[0_12px_30px_rgba(7,59,102,0.12)]
                       hover:-translate-y-1
                       transition-all duration-300"
            >

                <div
                    class="h-[130px] sm:h-[140px] lg:h-[145px]
                           flex items-center justify-center p-3
                           bg-gradient-to-b from-white to-slate-50"
                >

                    <img
                        src="{{ asset('images/products/laboratory-equipment.png') }}"
                        alt="Laboratory Equipment"
                        class="max-h-full max-w-full object-contain
                               transition-transform duration-500
                               group-hover:scale-105"
                    >

                </div>

                <div class="px-3 pb-3">

                    <h3
                        class="text-[10px] sm:text-[11px]
                               font-extrabold leading-[1.25]
                               uppercase text-[#073B66]"
                    >
                        LABORATORY
                        <br>
                        EQUIPMENT
                    </h3>

                    <span
                        class="mt-4 inline-flex items-center gap-1
                               text-[9px] sm:text-[10px]
                               font-semibold text-slate-600
                               group-hover:text-[#E31E24]"
                    >
                        View Products
                        <span class="text-[#E31E24] group-hover:translate-x-1 transition-transform">
                            →
                        </span>
                    </span>

                </div>

            </a>

        </div>


        {{-- =================================================
             VIEW ALL PRODUCTS BUTTON
        ================================================== --}}

        <div class="flex justify-center mt-8 sm:mt-10">

            <a
                href="#"
                class="group
                       inline-flex
                       items-center
                       justify-center
                       gap-3
                       bg-[#073B66]
                       hover:bg-[#E31E24]
                       text-white
                       min-w-[165px]
                       sm:min-w-[185px]
                       h-11
                       px-6
                       text-[10px]
                       sm:text-[11px]
                       font-bold
                       tracking-wide
                       shadow-lg
                       shadow-[#073B66]/10
                       transition-all
                       duration-300"
            >

                <span>
                    VIEW ALL PRODUCTS
                </span>

                <svg
                    xmlns="http://www.w3.org/2000/svg"
                    class="w-4 h-4 transition-transform duration-300 group-hover:translate-x-1"
                    fill="none"
                    viewBox="0 0 24 24"
                    stroke="currentColor"
                    stroke-width="2"
                >
                    <path
                        stroke-linecap="round"
                        stroke-linejoin="round"
                        d="M5 12h14m-6-6 6 6-6 6"
                    />
                </svg>

            </a>

        </div>

    </div>

</section>


{{-- =========================================================
     LABORATORY SOLUTIONS + MANUFACTURING EXCELLENCE
========================================================= --}}

<section class="bg-white">

    {{-- =====================================================
         PART 1 — COMPLETE LAB SOLUTIONS
    ====================================================== --}}

    <div class="bg-[#F4F7FA] py-10 lg:py-12">

        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">

            <div class="grid grid-cols-1 lg:grid-cols-12 gap-8 lg:gap-10 items-center">

                {{-- LEFT CONTENT --}}
                <div class="lg:col-span-4">

                    <span
                        class="block text-[#E31E24]
                               text-xs sm:text-sm
                               font-bold uppercase
                               tracking-wide mb-3"
                    >
                        Complete Lab Solutions
                    </span>

                    <h2
                        class="text-2xl sm:text-3xl lg:text-[32px]
                               leading-tight
                               font-bold
                               text-[#073B66]
                               uppercase"
                    >
                        From Individual Instruments
                        <br class="hidden sm:block">
                        to Complete Laboratory Setups
                    </h2>

                    <p
                        class="mt-4
                               text-sm
                               leading-6
                               text-gray-600
                               max-w-md"
                    >
                        We provide complete scientific and engineering
                        testing solutions including equipment supply,
                        installation, calibration, training and
                        after-sales support.
                    </p>

                    <a
                        href="{{ route('home') }}#products"
                        class="inline-flex items-center gap-3
                               mt-5
                               border border-[#073B66]
                               text-[#073B66]
                               px-5 py-2.5
                               text-xs font-bold uppercase
                               hover:bg-[#073B66]
                               hover:text-white
                               transition duration-300"
                    >
                        Explore Solutions

                        <span class="text-base">→</span>
                    </a>

                </div>


                {{-- RIGHT CATEGORY CARDS --}}
                <div class="lg:col-span-8">

                    <div class="grid grid-cols-2 sm:grid-cols-3 lg:grid-cols-5 gap-2.5">

                        {{-- Soil --}}
                        <a
                            href="#products"
                            class="group relative h-[145px] sm:h-[160px]
                                   overflow-hidden rounded-md
                                   shadow-sm"
                        >

                            <img
                                src="{{ asset('images/soil-laboratory.jpg') }}"
                                alt="Soil Laboratory"
                                class="absolute inset-0
                                       w-full h-full
                                       object-cover
                                       transition duration-500
                                       group-hover:scale-110"
                            >

                            <div
                                class="absolute inset-0
                                       bg-gradient-to-t
                                       from-[#073B66]
                                       via-[#073B66]/40
                                       to-transparent"
                            ></div>

                            <div class="absolute bottom-0 left-0 right-0 p-3">

                                <h3 class="text-white text-[11px] sm:text-xs font-bold uppercase">
                                    Soil
                                    <span class="block text-[#F2B84B]">
                                        Laboratory
                                    </span>
                                </h3>

                            </div>

                        </a>


                        {{-- Concrete --}}
                        <a
                            href="#products"
                            class="group relative h-[145px] sm:h-[160px]
                                   overflow-hidden rounded-md
                                   shadow-sm"
                        >

                            <img
                                src="{{ asset('images/concrete-laboratory.jpg') }}"
                                alt="Concrete Laboratory"
                                class="absolute inset-0
                                       w-full h-full
                                       object-cover
                                       transition duration-500
                                       group-hover:scale-110"
                            >

                            <div
                                class="absolute inset-0
                                       bg-gradient-to-t
                                       from-[#073B66]
                                       via-[#073B66]/40
                                       to-transparent"
                            ></div>

                            <div class="absolute bottom-0 left-0 right-0 p-3">

                                <h3 class="text-white text-[11px] sm:text-xs font-bold uppercase">
                                    Concrete
                                    <span class="block text-[#F2B84B]">
                                        Laboratory
                                    </span>
                                </h3>

                            </div>

                        </a>


                        {{-- Cement --}}
                        <a
                            href="#products"
                            class="group relative h-[145px] sm:h-[160px]
                                   overflow-hidden rounded-md
                                   shadow-sm"
                        >

                            <img
                                src="{{ asset('images/cement-laboratory.jpg') }}"
                                alt="Cement Laboratory"
                                class="absolute inset-0
                                       w-full h-full
                                       object-cover
                                       transition duration-500
                                       group-hover:scale-110"
                            >

                            <div
                                class="absolute inset-0
                                       bg-gradient-to-t
                                       from-[#073B66]
                                       via-[#073B66]/40
                                       to-transparent"
                            ></div>

                            <div class="absolute bottom-0 left-0 right-0 p-3">

                                <h3 class="text-white text-[11px] sm:text-xs font-bold uppercase">
                                    Cement
                                    <span class="block text-[#F2B84B]">
                                        Laboratory
                                    </span>
                                </h3>

                            </div>

                        </a>


                        {{-- Bitumen --}}
                        <a
                            href="#products"
                            class="group relative h-[145px] sm:h-[160px]
                                   overflow-hidden rounded-md
                                   shadow-sm"
                        >

                            <img
                                src="{{ asset('images/bitumen-laboratory.jpg') }}"
                                alt="Bitumen Laboratory"
                                class="absolute inset-0
                                       w-full h-full
                                       object-cover
                                       transition duration-500
                                       group-hover:scale-110"
                            >

                            <div
                                class="absolute inset-0
                                       bg-gradient-to-t
                                       from-[#073B66]
                                       via-[#073B66]/40
                                       to-transparent"
                            ></div>

                            <div class="absolute bottom-0 left-0 right-0 p-3">

                                <h3 class="text-white text-[11px] sm:text-xs font-bold uppercase">
                                    Bitumen / Asphalt
                                    <span class="block text-[#F2B84B]">
                                        Laboratory
                                    </span>
                                </h3>

                            </div>

                        </a>


                      
                    </div>

                </div>

            </div>

        </div>

    </div>


    {{-- =====================================================
         PART 2 — MANUFACTURING EXCELLENCE
    ====================================================== --}}

    <div class="py-12 lg:py-14">

        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">

            <div class="grid grid-cols-1 lg:grid-cols-12 gap-8 lg:gap-10 items-center">

                {{-- IMAGE COLLAGE --}}
                <div class="lg:col-span-6">

                    <div class="grid grid-cols-2 gap-2.5">

                        {{-- Image 1 --}}
                        <div class="h-[150px] sm:h-[190px] overflow-hidden rounded-md">
                            <img
                                src="{{ asset('images/manufacturing-1.jpg') }}"
                                alt="ASEW Manufacturing"
                                class="w-full h-full object-cover
                                       hover:scale-105
                                       transition duration-500"
                            >
                        </div>

                        {{-- Image 2 --}}
                        <div class="h-[150px] sm:h-[190px] overflow-hidden rounded-md">
                            <img
                                src="{{ asset('images/manufacturing-2.jpg') }}"
                                alt="Testing Equipment Manufacturing"
                                class="w-full h-full object-cover
                                       hover:scale-105
                                       transition duration-500"
                            >
                        </div>

                        {{-- Image 3 --}}
                        <div class="h-[150px] sm:h-[190px] overflow-hidden rounded-md">
                            <img
                                src="{{ asset('images/manufacturing-3.jpg') }}"
                                alt="Engineering Manufacturing"
                                class="w-full h-full object-cover
                                       hover:scale-105
                                       transition duration-500"
                            >
                        </div>

                        {{-- Image 4 --}}
                        <div class="h-[150px] sm:h-[190px] overflow-hidden rounded-md">
                            <img
                                src="{{ asset('images/manufacturing-4.jpg') }}"
                                alt="Scientific Equipment"
                                class="w-full h-full object-cover
                                       hover:scale-105
                                       transition duration-500"
                            >
                        </div>

                    </div>

                </div>


                {{-- RIGHT CONTENT --}}
                <div class="lg:col-span-6">

                    <span
                        class="block text-[#E31E24]
                               text-xs sm:text-sm
                               font-bold uppercase
                               tracking-wide mb-3"
                    >
                        Manufacturing Excellence
                    </span>


                    <h2
                        class="text-2xl sm:text-3xl
                               lg:text-[32px]
                               leading-tight
                               font-bold
                               text-[#073B66]
                               uppercase"
                    >
                        Engineered With Precision.
                        <br>
                        Built For Performance.
                    </h2>


                    <p
                        class="mt-4
                               text-sm
                               leading-6
                               text-gray-600
                               max-w-xl"
                    >
                        Associated Scientific & Engineering combines
                        advanced manufacturing technology with skilled
                        engineering to deliver reliable, accurate and
                        durable testing equipment.
                    </p>


                    {{-- Features --}}
                    <div class="mt-5 space-y-2.5">

                        <div class="flex items-start gap-2 text-sm text-gray-700">
                            <span class="text-[#E31E24] font-bold">●</span>
                            <span>State-of-the-art manufacturing quality</span>
                        </div>

                        <div class="flex items-start gap-2 text-sm text-gray-700">
                            <span class="text-[#E31E24] font-bold">●</span>
                            <span>Precision engineering & rigorous quality control</span>
                        </div>

                        <div class="flex items-start gap-2 text-sm text-gray-700">
                            <span class="text-[#E31E24] font-bold">●</span>
                            <span>Modern machinery & technology</span>
                        </div>

                        <div class="flex items-start gap-2 text-sm text-gray-700">
                            <span class="text-[#E31E24] font-bold">●</span>
                            <span>Experienced & skilled workforce</span>
                        </div>

                    </div>


                    {{-- CTA --}}
                    <a
                        href="{{ route('home') }}#contact"
                        class="inline-flex items-center gap-3
                               mt-6
                               bg-[#073B66]
                               hover:bg-[#E31E24]
                               text-white
                               px-5 py-3
                               text-xs font-bold uppercase
                               transition duration-300"
                    >
                        Our Manufacturing

                        <span class="text-base">→</span>
                    </a>

                </div>

            </div>

        </div>

    </div>

</section>


{{-- =========================================================
     TRUSTED WORLDWIDE / COMPANY STATS
========================================================= --}}

<section
    class="relative overflow-hidden bg-[#062653] text-white"
>

    {{-- Subtle background pattern --}}
    <div
        class="absolute inset-0 opacity-[0.08]"
        style="
            background-image:
                radial-gradient(circle at 1px 1px, #ffffff 1px, transparent 1px);
            background-size: 22px 22px;
        "
    ></div>


    <div class="relative max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">

        {{-- =================================================
             HEADING
        ================================================== --}}

        <div class="text-center pt-7 pb-5">

            <p
                class="text-[#E31E24]
                       text-[11px] sm:text-xs
                       font-bold
                       uppercase
                       tracking-wider
                       mb-1"
            >
                Trusted Worldwide
            </p>

            <h2
                class="text-white
                       text-sm sm:text-base
                       md:text-lg
                       font-semibold"
            >
                Delivering Quality Testing Solutions Across The Globe
            </h2>

        </div>


        {{-- =================================================
             STATISTICS
        ================================================== --}}

        <div
            class="grid grid-cols-2
                   md:grid-cols-5
                   pb-7"
        >


            {{-- =================================================
                 50+ YEARS
            ================================================== --}}

            <div
                class="group flex items-center
                       justify-center
                       gap-3
                       px-3 py-4
                       border-r border-white/15
                       md:border-r"
            >

                <div
                    class="shrink-0
                           w-11 h-11
                           sm:w-12 sm:h-12
                           rounded-full
                           border border-[#D9A441]
                           flex items-center justify-center"
                >

                    <svg
                        class="w-6 h-6 text-[#D9A441]"
                        fill="none"
                        viewBox="0 0 24 24"
                        stroke="currentColor"
                        stroke-width="1.5"
                    >
                        <circle cx="12" cy="12" r="9"/>
                        <path
                            stroke-linecap="round"
                            stroke-linejoin="round"
                            d="M12 7v5l3 2"
                        />
                    </svg>

                </div>

                <div>
                    <div
                        class="text-[#D9A441]
                               text-xl sm:text-2xl
                               font-bold leading-none"
                    >
                        50+
                    </div>

                    <div
                        class="text-gray-200
                               text-[10px] sm:text-xs
                               leading-4 mt-1"
                    >
                        Years of<br>
                        Experience
                    </div>
                </div>

            </div>


            {{-- =================================================
                 5000+ PRODUCTS
            ================================================== --}}

            <div
                class="group flex items-center
                       justify-center
                       gap-3
                       px-3 py-4
                       md:border-r border-white/15"
            >

                <div
                    class="shrink-0
                           w-11 h-11
                           sm:w-12 sm:h-12
                           rounded-full
                           border border-[#D9A441]
                           flex items-center justify-center"
                >

                    <svg
                        class="w-6 h-6 text-[#D9A441]"
                        fill="none"
                        viewBox="0 0 24 24"
                        stroke="currentColor"
                        stroke-width="1.5"
                    >
                        <path
                            stroke-linecap="round"
                            stroke-linejoin="round"
                            d="M3 7.5 12 3l9 4.5-9 4.5-9-4.5Z"
                        />

                        <path
                            stroke-linecap="round"
                            stroke-linejoin="round"
                            d="M3 12.5 12 17l9-4.5"
                        />

                        <path
                            stroke-linecap="round"
                            stroke-linejoin="round"
                            d="M3 17 12 21l9-4"
                        />
                    </svg>

                </div>

                <div>
                    <div
                        class="text-[#D9A441]
                               text-xl sm:text-2xl
                               font-bold leading-none"
                    >
                        5000+
                    </div>

                    <div
                        class="text-gray-200
                               text-[10px] sm:text-xs
                               leading-4 mt-1"
                    >
                        Products<br>
                        Supplied
                    </div>
                </div>

            </div>


            {{-- =================================================
                 100+ COUNTRIES
            ================================================== --}}

            <div
                class="group flex items-center
                       justify-center
                       gap-3
                       px-3 py-4
                       border-r border-white/15"
            >

                <div
                    class="shrink-0
                           w-11 h-11
                           sm:w-12 sm:h-12
                           rounded-full
                           border border-[#D9A441]
                           flex items-center justify-center"
                >

                    <svg
                        class="w-6 h-6 text-[#D9A441]"
                        fill="none"
                        viewBox="0 0 24 24"
                        stroke="currentColor"
                        stroke-width="1.5"
                    >
                        <circle cx="12" cy="12" r="9"/>
                        <path
                            stroke-linecap="round"
                            stroke-linejoin="round"
                            d="M3 12h18"
                        />
                        <path
                            stroke-linecap="round"
                            stroke-linejoin="round"
                            d="M12 3c2.5 2.5 3.5 5.5 3.5 9s-1 6.5-3.5 9c-2.5-2.5-3.5-5.5-3.5-9S9.5 5.5 12 3Z"
                        />
                    </svg>

                </div>

                <div>
                    <div
                        class="text-[#D9A441]
                               text-xl sm:text-2xl
                               font-bold leading-none"
                    >
                        100+
                    </div>

                    <div
                        class="text-gray-200
                               text-[10px] sm:text-xs
                               leading-4 mt-1"
                    >
                        Countries<br>
                        Served
                    </div>
                </div>

            </div>


            {{-- =================================================
                 10000+ LABORATORIES
            ================================================== --}}

            <div
                class="group flex items-center
                       justify-center
                       gap-3
                       px-3 py-4
                       md:border-r border-white/15"
            >

                <div
                    class="shrink-0
                           w-11 h-11
                           sm:w-12 sm:h-12
                           rounded-full
                           border border-[#D9A441]
                           flex items-center justify-center"
                >

                    <svg
                        class="w-6 h-6 text-[#D9A441]"
                        fill="none"
                        viewBox="0 0 24 24"
                        stroke="currentColor"
                        stroke-width="1.5"
                    >
                        <path
                            stroke-linecap="round"
                            stroke-linejoin="round"
                            d="M9 3h6"
                        />

                        <path
                            stroke-linecap="round"
                            stroke-linejoin="round"
                            d="M10 3v6.5L5 18a2 2 0 0 0 1.8 3h10.4A2 2 0 0 0 19 18l-5-8.5V3"
                        />

                        <path
                            stroke-linecap="round"
                            stroke-linejoin="round"
                            d="M7.5 16h9"
                        />
                    </svg>

                </div>

                <div>
                    <div
                        class="text-[#D9A441]
                               text-xl sm:text-2xl
                               font-bold leading-none"
                    >
                        10000+
                    </div>

                    <div
                        class="text-gray-200
                               text-[10px] sm:text-xs
                               leading-4 mt-1"
                    >
                        Laboratories<br>
                        Equipped
                    </div>
                </div>

            </div>


            {{-- =================================================
                 24/7 SUPPORT
            ================================================== --}}

            <div
                class="group col-span-2
                       md:col-span-1
                       flex items-center
                       justify-center
                       gap-3
                       px-3 py-4"
            >

                <div
                    class="shrink-0
                           w-11 h-11
                           sm:w-12 sm:h-12
                           rounded-full
                           border border-[#D9A441]
                           flex items-center justify-center"
                >

                    <svg
                        class="w-6 h-6 text-[#D9A441]"
                        fill="none"
                        viewBox="0 0 24 24"
                        stroke="currentColor"
                        stroke-width="1.5"
                    >
                        <circle cx="12" cy="12" r="9"/>

                        <path
                            stroke-linecap="round"
                            stroke-linejoin="round"
                            d="M12 7v5l3 2"
                        />

                        <path
                            stroke-linecap="round"
                            stroke-linejoin="round"
                            d="M5 5l-1.5-1.5M19 5l1.5-1.5"
                        />
                    </svg>

                </div>

                <div>
                    <div
                        class="text-[#D9A441]
                               text-xl sm:text-2xl
                               font-bold leading-none"
                    >
                        24/7
                    </div>

                    <div
                        class="text-gray-200
                               text-[10px] sm:text-xs
                               leading-4 mt-1"
                    >
                        Support &<br>
                        Service
                    </div>
                </div>

            </div>

        </div>

    </div>

</section>


{{-- =========================================================
     WHY ASEW SECTION
========================================================= --}}

<section
    id="why-asew"
    class="relative bg-white py-12 sm:py-14 lg:py-16"
>

    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">

        {{-- =================================================
             SECTION HEADING
        ================================================== --}}

        <div class="text-center mb-8 sm:mb-10">

            <p
                class="text-[#E31E24]
                       text-[11px] sm:text-xs
                       font-bold
                       uppercase
                       tracking-wide
                       mb-2"
            >
                Why ASEW
            </p>

            <h2
                class="text-[#062653]
                       text-2xl sm:text-3xl lg:text-[32px]
                       font-bold
                       uppercase
                       leading-tight"
            >
                The Reasons Industries Choose ASEW
            </h2>

        </div>


        {{-- =================================================
             REASONS CARDS
        ================================================== --}}

        <div
            class="grid
                   grid-cols-1
                   sm:grid-cols-2
                   lg:grid-cols-3
                   xl:grid-cols-6
                   gap-4"
        >


            {{-- =================================================
                 CARD 1
            ================================================== --}}

            <div
                class="group
                       bg-white
                       border border-gray-200
                       rounded-lg
                       p-5
                       text-center
                       shadow-sm
                       hover:shadow-lg
                       hover:-translate-y-1
                       transition-all duration-300"
            >

                <div
                    class="mx-auto mb-4
                           w-12 h-12
                           flex items-center justify-center
                           text-[#062653]
                           border border-[#062653]/20
                           rounded-full
                           group-hover:bg-[#062653]
                           group-hover:text-white
                           transition duration-300"
                >

                    <svg
                        class="w-6 h-6"
                        fill="none"
                        viewBox="0 0 24 24"
                        stroke="currentColor"
                        stroke-width="1.6"
                    >
                        <path
                            stroke-linecap="round"
                            stroke-linejoin="round"
                            d="M4 19h16M6 17V7l6-4 6 4v10"
                        />
                        <path
                            stroke-linecap="round"
                            stroke-linejoin="round"
                            d="M9 12h6M9 15h6"
                        />
                    </svg>

                </div>

                <h3
                    class="text-[#111827]
                           font-bold
                           text-sm
                           leading-5
                           min-h-[40px]"
                >
                    50+ Years<br>
                    of Expertise
                </h3>

                <p
                    class="mt-3
                           text-gray-600
                           text-[11px]
                           leading-5"
                >
                    Decades of experience in
                    manufacturing testing
                    instruments and
                    laboratory solutions.
                </p>

            </div>


            {{-- =================================================
                 CARD 2
            ================================================== --}}

            <div
                class="group
                       bg-white
                       border border-gray-200
                       rounded-lg
                       p-5
                       text-center
                       shadow-sm
                       hover:shadow-lg
                       hover:-translate-y-1
                       transition-all duration-300"
            >

                <div
                    class="mx-auto mb-4
                           w-12 h-12
                           flex items-center justify-center
                           text-[#062653]
                           border border-[#062653]/20
                           rounded-full
                           group-hover:bg-[#062653]
                           group-hover:text-white
                           transition duration-300"
                >

                    <svg
                        class="w-6 h-6"
                        fill="none"
                        viewBox="0 0 24 24"
                        stroke="currentColor"
                        stroke-width="1.6"
                    >
                        <path
                            stroke-linecap="round"
                            stroke-linejoin="round"
                            d="M12 3a5 5 0 0 0-5 5v2a5 5 0 0 0 10 0V8a5 5 0 0 0-5-5Z"
                        />

                        <path
                            stroke-linecap="round"
                            stroke-linejoin="round"
                            d="M4 21a8 8 0 0 1 16 0"
                        />

                        <path
                            stroke-linecap="round"
                            stroke-linejoin="round"
                            d="M8 9h.01M16 9h.01"
                        />
                    </svg>

                </div>

                <h3
                    class="text-[#111827]
                           font-bold
                           text-sm
                           leading-5
                           min-h-[40px]"
                >
                    Complete<br>
                    Lab Solutions
                </h3>

                <p
                    class="mt-3
                           text-gray-600
                           text-[11px]
                           leading-5"
                >
                    From single instruments
                    to turnkey laboratory
                    setup and training.
                </p>

            </div>


            {{-- =================================================
                 CARD 3
            ================================================== --}}

            <div
                class="group
                       bg-white
                       border border-gray-200
                       rounded-lg
                       p-5
                       text-center
                       shadow-sm
                       hover:shadow-lg
                       hover:-translate-y-1
                       transition-all duration-300"
            >

                <div
                    class="mx-auto mb-4
                           w-12 h-12
                           flex items-center justify-center
                           text-[#062653]
                           border border-[#062653]/20
                           rounded-full
                           group-hover:bg-[#062653]
                           group-hover:text-white
                           transition duration-300"
                >

                    <svg
                        class="w-6 h-6"
                        fill="none"
                        viewBox="0 0 24 24"
                        stroke="currentColor"
                        stroke-width="1.6"
                    >
                        <circle cx="12" cy="12" r="9"/>

                        <path
                            stroke-linecap="round"
                            stroke-linejoin="round"
                            d="M3 12h18"
                        />

                        <path
                            stroke-linecap="round"
                            stroke-linejoin="round"
                            d="M12 3c2.5 2.5 3.5 5.5 3.5 9s-1 6.5-3.5 9c-2.5-2.5-3.5-5.5-3.5-9S9.5 5.5 12 3Z"
                        />
                    </svg>

                </div>

                <h3
                    class="text-[#111827]
                           font-bold
                           text-sm
                           leading-5
                           min-h-[40px]"
                >
                    Standards<br>
                    Compliance
                </h3>

                <p
                    class="mt-3
                           text-gray-600
                           text-[11px]
                           leading-5"
                >
                    Products conform to
                    IS, ASTM, BS, EN &
                    other international
                    standards.
                </p>

            </div>


            {{-- =================================================
                 CARD 4
            ================================================== --}}

            <div
                class="group
                       bg-white
                       border border-gray-200
                       rounded-lg
                       p-5
                       text-center
                       shadow-sm
                       hover:shadow-lg
                       hover:-translate-y-1
                       transition-all duration-300"
            >

                <div
                    class="mx-auto mb-4
                           w-12 h-12
                           flex items-center justify-center
                           text-[#062653]
                           border border-[#062653]/20
                           rounded-full
                           group-hover:bg-[#062653]
                           group-hover:text-white
                           transition duration-300"
                >

                    <svg
                        class="w-6 h-6"
                        fill="none"
                        viewBox="0 0 24 24"
                        stroke="currentColor"
                        stroke-width="1.6"
                    >
                        <path
                            stroke-linecap="round"
                            stroke-linejoin="round"
                            d="M7 3h10v18H7z"
                        />

                        <path
                            stroke-linecap="round"
                            stroke-linejoin="round"
                            d="M10 7h4M10 11h4"
                        />

                        <path
                            stroke-linecap="round"
                            stroke-linejoin="round"
                            d="M5 6h2M17 6h2"
                        />
                    </svg>

                </div>

                <h3
                    class="text-[#111827]
                           font-bold
                           text-sm
                           leading-5
                           min-h-[40px]"
                >
                    Installation &<br>
                    Calibration
                </h3>

                <p
                    class="mt-3
                           text-gray-600
                           text-[11px]
                           leading-5"
                >
                    Professional installation,
                    calibration and
                    after-sales support.
                </p>

            </div>


            {{-- =================================================
                 CARD 5
            ================================================== --}}

            <div
                class="group
                       bg-white
                       border border-gray-200
                       rounded-lg
                       p-5
                       text-center
                       shadow-sm
                       hover:shadow-lg
                       hover:-translate-y-1
                       transition-all duration-300"
            >

                <div
                    class="mx-auto mb-4
                           w-12 h-12
                           flex items-center justify-center
                           text-[#062653]
                           border border-[#062653]/20
                           rounded-full
                           group-hover:bg-[#062653]
                           group-hover:text-white
                           transition duration-300"
                >

                    <svg
                        class="w-6 h-6"
                        fill="none"
                        viewBox="0 0 24 24"
                        stroke="currentColor"
                        stroke-width="1.6"
                    >
                        <path
                            stroke-linecap="round"
                            stroke-linejoin="round"
                            d="M12 3l2.2 2.2 3.1-.3.8 3 2.5 1.8-1.5 2.7 1.5 2.7-2.5 1.8-.8 3-3.1-.3L12 21l-2.2-2.2-3.1.3-.8-3-2.5-1.8 1.5-2.7-1.5-2.7L5.9 7.9l.8-3 3.1.3L12 3Z"
                        />

                        <path
                            stroke-linecap="round"
                            stroke-linejoin="round"
                            d="m9 12 2 2 4-4"
                        />
                    </svg>

                </div>

                <h3
                    class="text-[#111827]
                           font-bold
                           text-sm
                           leading-5
                           min-h-[40px]"
                >
                    Quality<br>
                    Assurance
                </h3>

                <p
                    class="mt-3
                           text-gray-600
                           text-[11px]
                           leading-5"
                >
                    Every product is tested
                    for precision, accuracy
                    and long life.
                </p>

            </div>


            {{-- =================================================
                 CARD 6
            ================================================== --}}

            <div
                class="group
                       bg-white
                       border border-gray-200
                       rounded-lg
                       p-5
                       text-center
                       shadow-sm
                       hover:shadow-lg
                       hover:-translate-y-1
                       transition-all duration-300"
            >

                <div
                    class="mx-auto mb-4
                           w-12 h-12
                           flex items-center justify-center
                           text-[#062653]
                           border border-[#062653]/20
                           rounded-full
                           group-hover:bg-[#062653]
                           group-hover:text-white
                           transition duration-300"
                >

                    <svg
                        class="w-6 h-6"
                        fill="none"
                        viewBox="0 0 24 24"
                        stroke="currentColor"
                        stroke-width="1.6"
                    >
                        <circle cx="12" cy="12" r="9"/>

                        <path
                            stroke-linecap="round"
                            stroke-linejoin="round"
                            d="M3 12h18M12 3c2 2.5 3 5.5 3 9s-1 6.5-3 9c-2-3.5-3-6.5-3-9s1-6.5 3-9Z"
                        />

                        <path
                            stroke-linecap="round"
                            stroke-linejoin="round"
                            d="M5 7h14M5 17h14"
                        />
                    </svg>

                </div>

                <h3
                    class="text-[#111827]
                           font-bold
                           text-sm
                           leading-5
                           min-h-[40px]"
                >
                    Global<br>
                    Presence
                </h3>

                <p
                    class="mt-3
                           text-gray-600
                           text-[11px]
                           leading-5"
                >
                    Serving customers
                    worldwide with trust
                    and reliability.
                </p>

            </div>

        </div>


        {{-- =================================================
             CTA BANNER
        ================================================== --}}

        <div
            class="mt-6
                   relative
                   overflow-hidden
                   rounded-lg
                   bg-[#062653]
                   border border-[#12396c]
                   px-5 sm:px-8
                   py-5 sm:py-6"
        >

            {{-- Background dots --}}
            <div
                class="absolute inset-0 opacity-[0.08]"
                style="
                    background-image:
                        radial-gradient(circle at 1px 1px, #ffffff 1px, transparent 1px);
                    background-size: 18px 18px;
                "
            ></div>


            <div
                class="relative
                       flex flex-col
                       sm:flex-row
                       items-center
                       justify-between
                       gap-5"
            >

                {{-- Left --}}
                <div
                    class="flex items-center
                           gap-4
                           text-center sm:text-left"
                >

                    <div
                        class="hidden sm:flex
                               shrink-0
                               w-11 h-11
                               rounded-full
                               border border-white/30
                               items-center justify-center"
                    >

                        <svg
                            class="w-6 h-6 text-white"
                            fill="none"
                            viewBox="0 0 24 24"
                            stroke="currentColor"
                            stroke-width="1.5"
                        >
                            <path
                                stroke-linecap="round"
                                stroke-linejoin="round"
                                d="M4 4h16v12H4z"
                            />

                            <path
                                stroke-linecap="round"
                                stroke-linejoin="round"
                                d="M8 20h8M12 16v4"
                            />
                        </svg>

                    </div>


                    <div>

                        <h3
                            class="text-white
                                   font-bold
                                   text-base sm:text-lg
                                   uppercase"
                        >
                            Looking for the Right Testing Solution?
                        </h3>

                        <p
                            class="text-gray-300
                                   text-xs sm:text-sm
                                   mt-1"
                        >
                            Our experts are ready to help you choose
                            the right equipment for your needs.
                        </p>

                    </div>

                </div>


                {{-- Button --}}
                <a
                    href="{{ route('home') }}#contact"
                    class="shrink-0
                           inline-flex
                           items-center
                           justify-center
                           gap-2
                           bg-[#E31E24]
                           hover:bg-[#C8181D]
                           text-white
                           px-6 py-3
                           rounded-sm
                           text-xs
                           font-bold
                           uppercase
                           transition duration-300
                           shadow-md"
                >
                    Request a Quote

                    <svg
                        class="w-4 h-4"
                        fill="none"
                        viewBox="0 0 24 24"
                        stroke="currentColor"
                        stroke-width="2"
                    >
                        <path
                            stroke-linecap="round"
                            stroke-linejoin="round"
                            d="M5 12h14M13 6l6 6-6 6"
                        />
                    </svg>

                </a>

            </div>

        </div>

    </div>

</section>


@endsection