@extends('layouts.app')

@section('title', 'Manufacturing | Associated Scientific & Engineering Works')

@section('content')

{{-- =========================================================
     MANUFACTURING PAGE
========================================================= --}}

<div class="bg-white text-slate-900">

    {{-- =====================================================
         HERO SECTION
    ====================================================== --}}
    <section
        class="relative min-h-[620px] lg:min-h-[700px] overflow-hidden flex items-center"
    >

        {{-- Background Image --}}
        <div class="absolute inset-0">
            <img
                src="{{ asset('images/st4.jpg') }}"
                alt="ASEW Manufacturing"
                class="w-full h-full object-cover"
            >

            {{-- Dark premium overlay --}}
            <div class="absolute inset-0 bg-[#061B2D]/70"></div>

            {{-- Gradient --}}
            <div class="absolute inset-0 bg-gradient-to-r from-[#061B2D]/95 via-[#061B2D]/70 to-[#061B2D]/25"></div>
        </div>

        {{-- Decorative elements --}}
        <div class="absolute top-0 right-0 w-[420px] h-[420px] border border-white/10 rounded-full translate-x-1/3 -translate-y-1/3"></div>
        <div class="absolute bottom-0 right-20 w-[280px] h-[280px] border border-[#D7A93A]/20 rounded-full translate-y-1/2"></div>

        <div class="relative z-10 max-w-7xl mx-auto px-6 lg:px-8 w-full">

            <div class="max-w-4xl">

                {{-- Eyebrow --}}
                <div
                    data-aos="fade-up"
                    class="inline-flex items-center gap-3 mb-7"
                >
                    <span class="w-10 h-[2px] bg-[#D71920]"></span>

                    <span class="text-white/80 uppercase tracking-[0.28em] text-xs sm:text-sm font-semibold">
                        Manufacturing
                    </span>
                </div>

                {{-- Heading --}}
                <h1
                    data-aos="fade-up"
                    data-aos-delay="100"
                    class="text-4xl sm:text-5xl lg:text-7xl font-bold text-white leading-[1.05] tracking-tight"
                >
                    Precision Built.
                    <span class="block text-[#D7A93A]">
                        Quality Driven.
                    </span>
                </h1>

                {{-- Description --}}
                <p
                    data-aos="fade-up"
                    data-aos-delay="200"
                    class="mt-7 max-w-2xl text-base sm:text-lg lg:text-xl text-white/80 leading-relaxed"
                >
                    Associated Scientific & Engineering Works manufactures
                    material testing and QA/QC equipment for construction,
                    infrastructure and civil engineering applications.
                </p>

                {{-- Buttons --}}
                <div
                    data-aos="fade-up"
                    data-aos-delay="300"
                    class="mt-9 flex flex-col sm:flex-row gap-4"
                >

                    <a
                        href="{{ route('products') }}"
                        class="inline-flex items-center justify-center gap-3 px-7 py-4 bg-[#D71920] hover:bg-[#b9151b] text-white font-semibold transition duration-300"
                    >
                        Explore Our Products

                        <svg
                            class="w-5 h-5"
                            fill="none"
                            stroke="currentColor"
                            viewBox="0 0 24 24"
                        >
                            <path
                                stroke-linecap="round"
                                stroke-linejoin="round"
                                stroke-width="2"
                                d="M17 8l4 4m0 0l-4 4m4-4H3"
                            />
                        </svg>
                    </a>

                    <a
                        href="{{ route('contact') }}"
                        class="inline-flex items-center justify-center px-7 py-4 border border-white/40 hover:border-white text-white font-semibold transition duration-300"
                    >
                        Request a Quote
                    </a>

                </div>

            </div>

        </div>

        {{-- Bottom scroll indicator --}}
        <div class="absolute bottom-8 left-1/2 -translate-x-1/2 hidden md:flex flex-col items-center gap-2 text-white/50">
            <span class="text-[10px] uppercase tracking-[0.3em]">
                Discover
            </span>

            <div class="w-px h-10 bg-white/30"></div>
        </div>

    </section>


    {{-- =====================================================
         INTRODUCTION
    ====================================================== --}}
    <section class="py-20 lg:py-28 bg-white">

        <div class="max-w-7xl mx-auto px-6 lg:px-8">

            <div class="grid lg:grid-cols-2 gap-14 lg:gap-20 items-center">

                {{-- Image --}}
                <div
                    data-aos="fade-right"
                    class="relative"
                >

                    <div class="relative overflow-hidden">
                        <img
                            src="{{ asset('images/asew product.jpg') }}"
                            alt="ASEW Material Testing Equipment"
                            class="w-full h-[420px] lg:h-[540px] object-cover"
                        >

                        <div class="absolute inset-0 bg-gradient-to-t from-[#061B2D]/60 via-transparent to-transparent"></div>
                    </div>

                    {{-- Experience card --}}
                    <div
                        class="absolute -bottom-7 right-5 sm:right-8 bg-[#073B66] text-white px-7 py-6 shadow-xl"
                    >
                        <p class="text-3xl font-bold">
                            1975
                        </p>

                        <p class="mt-1 text-xs uppercase tracking-[0.2em] text-white/70">
                            Established
                        </p>
                    </div>

                </div>


                {{-- Content --}}
                <div data-aos="fade-left">

                    <div class="flex items-center gap-3 mb-5">
                        <span class="w-9 h-[2px] bg-[#D71920]"></span>

                        <span class="text-[#D71920] text-xs font-bold uppercase tracking-[0.25em]">
                            Our Manufacturing
                        </span>
                    </div>

                    <h2 class="text-3xl sm:text-4xl lg:text-5xl font-bold text-[#061B2D] leading-tight">
                        Engineering Equipment
                        <span class="block text-[#073B66]">
                            Built for Testing.
                        </span>
                    </h2>

                    <p class="mt-7 text-slate-600 leading-8 text-base lg:text-lg">
                        Associated Scientific and Engineering Works is a
                        manufacturer and exporter of material testing
                        instruments and QA/QC equipment.
                    </p>

                    <p class="mt-5 text-slate-600 leading-8">
                        Our product range is focused on equipment used across
                        construction, infrastructure and civil engineering
                        applications, supporting laboratories and field
                        testing requirements.
                    </p>

                    {{-- Feature list --}}
                    <div class="mt-8 grid sm:grid-cols-2 gap-4">

                        <div class="flex items-start gap-3">
                            <span class="mt-1 flex-shrink-0 w-6 h-6 bg-[#073B66] text-white flex items-center justify-center">
                                ✓
                            </span>

                            <span class="text-sm font-semibold text-slate-700">
                                Material Testing Equipment
                            </span>
                        </div>

                        <div class="flex items-start gap-3">
                            <span class="mt-1 flex-shrink-0 w-6 h-6 bg-[#073B66] text-white flex items-center justify-center">
                                ✓
                            </span>

                            <span class="text-sm font-semibold text-slate-700">
                                QA / QC Equipment
                            </span>
                        </div>

                        <div class="flex items-start gap-3">
                            <span class="mt-1 flex-shrink-0 w-6 h-6 bg-[#073B66] text-white flex items-center justify-center">
                                ✓
                            </span>

                            <span class="text-sm font-semibold text-slate-700">
                                Construction Testing Solutions
                            </span>
                        </div>

                        <div class="flex items-start gap-3">
                            <span class="mt-1 flex-shrink-0 w-6 h-6 bg-[#073B66] text-white flex items-center justify-center">
                                ✓
                            </span>

                            <span class="text-sm font-semibold text-slate-700">
                                Export-Oriented Business
                            </span>
                        </div>

                    </div>

                </div>

            </div>

        </div>

    </section>


    {{-- =====================================================
         MANUFACTURING CAPABILITIES / FOCUS
    ====================================================== --}}
    <section class="py-20 lg:py-24 bg-slate-50 border-y border-slate-200">

        <div class="max-w-7xl mx-auto px-6 lg:px-8">

            {{-- Heading --}}
            <div
                data-aos="fade-up"
                class="max-w-3xl"
            >

                <div class="flex items-center gap-3 mb-5">
                    <span class="w-9 h-[2px] bg-[#D71920]"></span>

                    <span class="text-[#D71920] text-xs font-bold uppercase tracking-[0.25em]">
                        Manufacturing Focus
                    </span>
                </div>

                <h2 class="text-3xl sm:text-4xl lg:text-5xl font-bold text-[#061B2D]">
                    Built Around
                    <span class="text-[#073B66]">
                        Precision & Reliability
                    </span>
                </h2>

                <p class="mt-5 text-slate-600 leading-8">
                    Our manufacturing approach is centred around equipment
                    designed for material testing and quality-control
                    applications.
                </p>

            </div>


            {{-- Focus cards --}}
            <div class="mt-14 grid sm:grid-cols-2 lg:grid-cols-4 gap-5">

                {{-- Card 1 --}}
                <div
                    data-aos="fade-up"
                    data-aos-delay="0"
                    class="group bg-white border border-slate-200 p-7 hover:-translate-y-1 hover:shadow-xl transition-all duration-300"
                >

                    <div class="w-14 h-14 bg-[#073B66] text-white flex items-center justify-center mb-7">

                        <svg
                            class="w-7 h-7"
                            fill="none"
                            stroke="currentColor"
                            viewBox="0 0 24 24"
                        >
                            <path
                                stroke-linecap="round"
                                stroke-linejoin="round"
                                stroke-width="1.7"
                                d="M10.5 6h3m-7 4h11m-10 4h8m-8 4h5M5 3h14a2 2 0 012 2v14a2 2 0 01-2 2H5a2 2 0 01-2-2V5a2 2 0 012-2z"
                            />
                        </svg>

                    </div>

                    <h3 class="text-xl font-bold text-[#061B2D]">
                        Precision
                    </h3>

                    <p class="mt-3 text-sm text-slate-600 leading-7">
                        Equipment designed around the requirements of
                        material testing and measurement.
                    </p>

                </div>


                {{-- Card 2 --}}
                <div
                    data-aos="fade-up"
                    data-aos-delay="100"
                    class="group bg-white border border-slate-200 p-7 hover:-translate-y-1 hover:shadow-xl transition-all duration-300"
                >

                    <div class="w-14 h-14 bg-[#073B66] text-white flex items-center justify-center mb-7">

                        <svg
                            class="w-7 h-7"
                            fill="none"
                            stroke="currentColor"
                            viewBox="0 0 24 24"
                        >
                            <path
                                stroke-linecap="round"
                                stroke-linejoin="round"
                                stroke-width="1.7"
                                d="M12 3l7 4v5c0 4.5-3 7.5-7 9-4-1.5-7-4.5-7-9V7l7-4z"
                            />

                            <path
                                stroke-linecap="round"
                                stroke-linejoin="round"
                                stroke-width="1.7"
                                d="M9 12l2 2 4-4"
                            />
                        </svg>

                    </div>

                    <h3 class="text-xl font-bold text-[#061B2D]">
                        Reliability
                    </h3>

                    <p class="mt-3 text-sm text-slate-600 leading-7">
                        Products intended for dependable use in laboratory
                        and testing environments.
                    </p>

                </div>


                {{-- Card 3 --}}
                <div
                    data-aos="fade-up"
                    data-aos-delay="200"
                    class="group bg-white border border-slate-200 p-7 hover:-translate-y-1 hover:shadow-xl transition-all duration-300"
                >

                    <div class="w-14 h-14 bg-[#073B66] text-white flex items-center justify-center mb-7">

                        <svg
                            class="w-7 h-7"
                            fill="none"
                            stroke="currentColor"
                            viewBox="0 0 24 24"
                        >
                            <path
                                stroke-linecap="round"
                                stroke-linejoin="round"
                                stroke-width="1.7"
                                d="M4 19V5m0 14h16M8 16V9m4 7V6m4 10v-4"
                            />
                        </svg>

                    </div>

                    <h3 class="text-xl font-bold text-[#061B2D]">
                        Quality
                    </h3>

                    <p class="mt-3 text-sm text-slate-600 leading-7">
                        A manufacturing focus aligned with QA/QC and
                        material testing applications.
                    </p>

                </div>


                {{-- Card 4 --}}
                <div
                    data-aos="fade-up"
                    data-aos-delay="300"
                    class="group bg-white border border-slate-200 p-7 hover:-translate-y-1 hover:shadow-xl transition-all duration-300"
                >

                    <div class="w-14 h-14 bg-[#D71920] text-white flex items-center justify-center mb-7">

                        <svg
                            class="w-7 h-7"
                            fill="none"
                            stroke="currentColor"
                            viewBox="0 0 24 24"
                        >
                            <path
                                stroke-linecap="round"
                                stroke-linejoin="round"
                                stroke-width="1.7"
                                d="M3 12h18M12 3v18M5.5 5.5l13 13M18.5 5.5l-13 13"
                            />
                        </svg>

                    </div>

                    <h3 class="text-xl font-bold text-[#061B2D]">
                        Application Focus
                    </h3>

                    <p class="mt-3 text-sm text-slate-600 leading-7">
                        Solutions developed for construction and civil
                        engineering testing requirements.
                    </p>

                </div>

            </div>

        </div>

    </section>


    {{-- =====================================================
         PRODUCT RANGE
    ====================================================== --}}
    <section class="py-20 lg:py-28 bg-[#061B2D]">

        <div class="max-w-7xl mx-auto px-6 lg:px-8">

            <div
                data-aos="fade-up"
                class="flex flex-col lg:flex-row lg:items-end lg:justify-between gap-7"
            >

                <div>

                    <div class="flex items-center gap-3 mb-5">
                        <span class="w-9 h-[2px] bg-[#D7A93A]"></span>

                        <span class="text-[#D7A93A] text-xs font-bold uppercase tracking-[0.25em]">
                            What We Manufacture
                        </span>
                    </div>

                    <h2 class="text-3xl sm:text-4xl lg:text-5xl font-bold text-white">
                        Our Core
                        <span class="text-[#D7A93A]">
                            Product Range
                        </span>
                    </h2>

                </div>

                <a
                    href="{{ route('products') }}"
                    class="inline-flex items-center gap-3 text-white font-semibold hover:text-[#D7A93A] transition"
                >
                    View All Products

                    <svg
                        class="w-5 h-5"
                        fill="none"
                        stroke="currentColor"
                        viewBox="0 0 24 24"
                    >
                        <path
                            stroke-linecap="round"
                            stroke-linejoin="round"
                            stroke-width="2"
                            d="M17 8l4 4m0 0l-4 4m4-4H3"
                        />
                    </svg>
                </a>

            </div>


            {{-- Product grid --}}
            <div class="mt-14 grid sm:grid-cols-2 lg:grid-cols-4 gap-5">

                @php
                    $manufacturingProducts = [
                        [
                            'title' => 'Compression Testing Machines',
                            'image' => 'st4.jpg',
                        ],
                        [
                            'title' => 'Pan Mixers',
                            'image' => 'st83.jpg',
                        ],
                        [
                            'title' => 'Cube Moulds',
                            'image' => 'st85.jpg',
                        ],
                        [
                            'title' => 'Soil Testing Instruments',
                            'image' => 'asew product.jpg',
                        ],
                        [
                            'title' => 'Concrete Testing Machines',
                            'image' => 'st4.jpg',
                        ],
                        [
                            'title' => 'Asphalt / Bitumen Testing Equipment',
                            'image' => 'st83.jpg',
                        ],
                        [
                            'title' => 'Aggregate Testing Machines',
                            'image' => 'st85.jpg',
                        ],
                    ];
                @endphp


                @foreach ($manufacturingProducts as $product)

                    <div
                        data-aos="fade-up"
                        class="group relative overflow-hidden bg-white min-h-[300px]"
                    >

                        <img
                            src="{{ asset('images/' . $product['image']) }}"
                            alt="{{ $product['title'] }}"
                            class="absolute inset-0 w-full h-full object-cover group-hover:scale-105 transition-transform duration-700"
                        >

                        <div class="absolute inset-0 bg-gradient-to-t from-black/90 via-black/30 to-transparent"></div>

                        <div class="relative z-10 h-full min-h-[300px] flex items-end p-6">

                            <div>

                                <div class="w-8 h-[2px] bg-[#D71920] mb-4"></div>

                                <h3 class="text-xl font-bold text-white leading-snug">
                                    {{ $product['title'] }}
                                </h3>

                                <a
                                    href="{{ route('products') }}"
                                    class="mt-4 inline-flex items-center gap-2 text-xs uppercase tracking-wider font-semibold text-white/80 hover:text-white transition"
                                >
                                    Explore

                                    <svg
                                        class="w-4 h-4"
                                        fill="none"
                                        stroke="currentColor"
                                        viewBox="0 0 24 24"
                                    >
                                        <path
                                            stroke-linecap="round"
                                            stroke-linejoin="round"
                                            stroke-width="2"
                                            d="M17 8l4 4m0 0l-4 4m4-4H3"
                                        />
                                    </svg>

                                </a>

                            </div>

                        </div>

                    </div>

                @endforeach

            </div>

        </div>

    </section>


    {{-- =====================================================
         INDUSTRIES
    ====================================================== --}}
    <section class="py-20 lg:py-28 bg-white">

        <div class="max-w-7xl mx-auto px-6 lg:px-8">

            <div class="grid lg:grid-cols-[0.8fr_1.2fr] gap-14 lg:gap-20">

                {{-- Left --}}
                <div data-aos="fade-right">

                    <div class="flex items-center gap-3 mb-5">
                        <span class="w-9 h-[2px] bg-[#D71920]"></span>

                        <span class="text-[#D71920] text-xs font-bold uppercase tracking-[0.25em]">
                            Industries
                        </span>
                    </div>

                    <h2 class="text-3xl sm:text-4xl lg:text-5xl font-bold text-[#061B2D] leading-tight">
                        Supporting
                        <span class="text-[#073B66]">
                            Critical Testing
                        </span>
                        Applications
                    </h2>

                    <p class="mt-6 text-slate-600 leading-8">
                        ASEW products are intended for use across construction,
                        infrastructure and civil engineering related
                        applications.
                    </p>

                </div>


                {{-- Right --}}
                <div
                    data-aos="fade-left"
                    class="grid sm:grid-cols-2 gap-4"
                >

                    @php
                        $industries = [
                            'Construction Industries',
                            'Infrastructure',
                            'Civil Engineering Colleges',
                            'NHAI Projects',
                            'Metro Projects',
                        ];
                    @endphp

                    @foreach ($industries as $index => $industry)

                        <div
                            class="group flex items-center gap-5 p-6 border border-slate-200 hover:border-[#073B66] hover:shadow-lg transition-all duration-300
                            {{ $index === 4 ? 'sm:col-span-2' : '' }}"
                        >

                            <span class="text-2xl font-bold text-slate-200 group-hover:text-[#D71920] transition">
                                {{ str_pad($index + 1, 2, '0', STR_PAD_LEFT) }}
                            </span>

                            <div class="h-10 w-px bg-slate-200"></div>

                            <h3 class="font-bold text-[#061B2D]">
                                {{ $industry }}
                            </h3>

                            <svg
                                class="ml-auto w-5 h-5 text-slate-300 group-hover:text-[#D71920] group-hover:translate-x-1 transition"
                                fill="none"
                                stroke="currentColor"
                                viewBox="0 0 24 24"
                            >
                                <path
                                    stroke-linecap="round"
                                    stroke-linejoin="round"
                                    stroke-width="2"
                                    d="M17 8l4 4m0 0l-4 4m4-4H3"
                                />
                            </svg>

                        </div>

                    @endforeach

                </div>

            </div>

        </div>

    </section>


    {{-- =====================================================
         GLOBAL REACH
    ====================================================== --}}
    <section class="relative py-20 lg:py-24 overflow-hidden bg-slate-50">

        <div class="max-w-7xl mx-auto px-6 lg:px-8">

            <div
                data-aos="fade-up"
                class="relative overflow-hidden bg-[#073B66] px-7 sm:px-10 lg:px-14 py-12 lg:py-16"
            >

                {{-- Decorative circle --}}
                <div class="absolute -right-20 -top-28 w-80 h-80 rounded-full border border-white/10"></div>

                <div class="relative z-10 grid lg:grid-cols-[1fr_auto] gap-10 items-center">

                    <div>

                        <div class="flex items-center gap-3 mb-5">
                            <span class="w-9 h-[2px] bg-[#D7A93A]"></span>

                            <span class="text-[#D7A93A] text-xs font-bold uppercase tracking-[0.25em]">
                                Global Reach
                            </span>
                        </div>

                        <h2 class="text-3xl sm:text-4xl font-bold text-white">
                            Manufacturing for
                            <span class="text-[#D7A93A]">
                                International Markets
                            </span>
                        </h2>

                        <p class="mt-5 max-w-2xl text-white/70 leading-8">
                            ASEW deals with markets including Nigeria,
                            Ethiopia, Latin America, Dubai and Europe.
                        </p>

                    </div>


                    {{-- Markets --}}
                    <div class="grid grid-cols-2 sm:grid-cols-3 lg:grid-cols-5 gap-x-7 gap-y-5">

                        @php
                            $markets = [
                                'Nigeria',
                                'Ethiopia',
                                'Latin America',
                                'Dubai',
                                'Europe',
                            ];
                        @endphp

                        @foreach ($markets as $market)

                            <div class="flex items-center gap-2 text-white/80 text-sm">
                                <span class="w-1.5 h-1.5 bg-[#D7A93A] rounded-full"></span>
                                {{ $market }}
                            </div>

                        @endforeach

                    </div>

                </div>

            </div>

        </div>

    </section>


    {{-- =====================================================
         CTA
    ====================================================== --}}
    <section class="relative py-20 lg:py-28 bg-white overflow-hidden">

        {{-- Background decoration --}}
        <div class="absolute -left-32 top-1/2 -translate-y-1/2 w-80 h-80 rounded-full bg-slate-50"></div>

        <div class="relative max-w-5xl mx-auto px-6 lg:px-8 text-center">

            <div
                data-aos="fade-up"
                class="flex justify-center"
            >
                <span class="inline-flex items-center gap-3 px-4 py-2 bg-slate-100 text-[#073B66] text-xs font-bold uppercase tracking-[0.2em]">
                    <span class="w-2 h-2 bg-[#D71920] rounded-full"></span>
                    Material Testing Equipment
                </span>
            </div>

            <h2
                data-aos="fade-up"
                data-aos-delay="100"
                class="mt-7 text-3xl sm:text-4xl lg:text-6xl font-bold text-[#061B2D] leading-tight"
            >
                Looking for Reliable
                <span class="text-[#D71920]">
                    Testing Equipment?
                </span>
            </h2>

            <p
                data-aos="fade-up"
                data-aos-delay="200"
                class="mt-6 max-w-2xl mx-auto text-slate-600 text-base lg:text-lg leading-8"
            >
                Explore our range of material testing and QA/QC equipment
                or get in touch with our team for your requirements.
            </p>

            <div
                data-aos="fade-up"
                data-aos-delay="300"
                class="mt-9 flex flex-col sm:flex-row justify-center gap-4"
            >

                <a
                    href="{{ route('products') }}"
                    class="inline-flex items-center justify-center gap-3 px-8 py-4 bg-[#073B66] hover:bg-[#05294C] text-white font-semibold transition duration-300"
                >
                    Explore Products

                    <svg
                        class="w-5 h-5"
                        fill="none"
                        stroke="currentColor"
                        viewBox="0 0 24 24"
                    >
                        <path
                            stroke-linecap="round"
                            stroke-linejoin="round"
                            stroke-width="2"
                            d="M17 8l4 4m0 0l-4 4m4-4H3"
                        />
                    </svg>
                </a>

                <a
                    href="{{ route('contact') }}"
                    class="inline-flex items-center justify-center px-8 py-4 border-2 border-[#D71920] text-[#D71920] hover:bg-[#D71920] hover:text-white font-semibold transition duration-300"
                >
                    Contact Us
                </a>

            </div>

        </div>

    </section>

</div>

@endsection