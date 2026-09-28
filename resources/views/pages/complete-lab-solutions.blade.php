@extends('layouts.app')

@section('title', 'Complete Lab Solutions | Associated Scientific & Engineering Works')

@section('content')

<div class="bg-white text-slate-900">

    {{-- =========================================================
         HERO SECTION
    ========================================================== --}}
    <section class="relative min-h-[620px] lg:min-h-[700px] overflow-hidden flex items-center">

        {{-- Background --}}
        <div class="absolute inset-0">
            <img
                src="{{ asset('images/st4.jpg') }}"
                alt="Complete Laboratory Solutions"
                class="w-full h-full object-cover"
            >

            <div class="absolute inset-0 bg-[#061B2D]/65"></div>

            <div class="absolute inset-0 bg-gradient-to-r from-[#061B2D]/95 via-[#061B2D]/65 to-[#061B2D]/20"></div>
        </div>

        {{-- Decorative rings --}}
        <div class="absolute -right-32 -top-32 w-[520px] h-[520px] rounded-full border border-white/10"></div>
        <div class="absolute -right-10 -bottom-40 w-[380px] h-[380px] rounded-full border border-[#D7A93A]/20"></div>

        <div class="relative z-10 max-w-7xl mx-auto px-6 lg:px-8 w-full">

            <div class="max-w-4xl">

                {{-- Label --}}
                <div
                    data-aos="fade-up"
                    class="flex items-center gap-3 mb-7"
                >
                    <span class="w-10 h-[2px] bg-[#D71920]"></span>

                    <span class="text-white/80 uppercase tracking-[0.28em] text-xs sm:text-sm font-semibold">
                        Laboratory Solutions
                    </span>
                </div>

                {{-- Heading --}}
                <h1
                    data-aos="fade-up"
                    data-aos-delay="100"
                    class="text-4xl sm:text-5xl lg:text-7xl font-bold text-white leading-[1.05] tracking-tight"
                >
                    Complete Lab
                    <span class="block text-[#D7A93A]">
                        Solutions.
                    </span>
                </h1>

                <p
                    data-aos="fade-up"
                    data-aos-delay="200"
                    class="mt-7 max-w-2xl text-base sm:text-lg lg:text-xl text-white/80 leading-relaxed"
                >
                    Material testing and QA/QC equipment for laboratories,
                    construction, infrastructure and civil engineering
                    applications.
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
                        Explore Equipment

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
                        Discuss Your Requirement
                    </a>

                </div>

            </div>

        </div>

        {{-- Scroll indicator --}}
        <div class="absolute bottom-8 left-1/2 -translate-x-1/2 hidden md:flex flex-col items-center gap-2 text-white/50">
            <span class="text-[10px] uppercase tracking-[0.3em]">
                Explore
            </span>

            <div class="w-px h-10 bg-white/30"></div>
        </div>

    </section>


    {{-- =========================================================
         INTRODUCTION
    ========================================================== --}}
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
                            alt="ASEW Laboratory Testing Equipment"
                            class="w-full h-[420px] lg:h-[530px] object-cover"
                        >

                        <div class="absolute inset-0 bg-gradient-to-t from-[#061B2D]/65 via-transparent to-transparent"></div>

                    </div>

                    {{-- Floating information box --}}
                    <div class="absolute left-5 sm:left-8 bottom-6 bg-white shadow-2xl px-6 py-5">

                        <p class="text-3xl font-bold text-[#073B66]">
                            1975
                        </p>

                        <p class="mt-1 text-xs uppercase tracking-[0.2em] text-slate-500">
                            Established
                        </p>

                    </div>

                </div>


                {{-- Content --}}
                <div data-aos="fade-left">

                    <div class="flex items-center gap-3 mb-5">
                        <span class="w-9 h-[2px] bg-[#D71920]"></span>

                        <span class="text-[#D71920] text-xs font-bold uppercase tracking-[0.25em]">
                            Complete Laboratory Solutions
                        </span>
                    </div>

                    <h2 class="text-3xl sm:text-4xl lg:text-5xl font-bold text-[#061B2D] leading-tight">
                        Equipment for
                        <span class="block text-[#073B66]">
                            Testing & Quality Control
                        </span>
                    </h2>

                    <p class="mt-7 text-slate-600 leading-8 text-base lg:text-lg">
                        Associated Scientific and Engineering Works
                        manufactures and exports material testing
                        instruments and QA/QC equipment.
                    </p>

                    <p class="mt-5 text-slate-600 leading-8">
                        Our equipment range covers important testing areas
                        including soil, concrete, cement, aggregates,
                        asphalt/bitumen, rock and other material testing
                        requirements.
                    </p>

                    {{-- Highlights --}}
                    <div class="mt-8 space-y-4">

                        <div class="flex items-start gap-4">

                            <span class="flex-shrink-0 w-7 h-7 bg-[#073B66] text-white flex items-center justify-center text-sm">
                                ✓
                            </span>

                            <div>
                                <h3 class="font-bold text-[#061B2D]">
                                    Material Testing
                                </h3>

                                <p class="mt-1 text-sm text-slate-500">
                                    Equipment covering major material
                                    testing applications.
                                </p>
                            </div>

                        </div>


                        <div class="flex items-start gap-4">

                            <span class="flex-shrink-0 w-7 h-7 bg-[#073B66] text-white flex items-center justify-center text-sm">
                                ✓
                            </span>

                            <div>
                                <h3 class="font-bold text-[#061B2D]">
                                    QA / QC Applications
                                </h3>

                                <p class="mt-1 text-sm text-slate-500">
                                    Solutions intended for quality assurance
                                    and quality control environments.
                                </p>
                            </div>

                        </div>


                        <div class="flex items-start gap-4">

                            <span class="flex-shrink-0 w-7 h-7 bg-[#D71920] text-white flex items-center justify-center text-sm">
                                ✓
                            </span>

                            <div>
                                <h3 class="font-bold text-[#061B2D]">
                                    Laboratory & Field Requirements
                                </h3>

                                <p class="mt-1 text-sm text-slate-500">
                                    Product categories suited to laboratory
                                    and testing applications.
                                </p>
                            </div>

                        </div>

                    </div>

                </div>

            </div>

        </div>

    </section>


    {{-- =========================================================
         SOLUTION AREAS
    ========================================================== --}}
    <section class="py-20 lg:py-28 bg-slate-50 border-y border-slate-200">

        <div class="max-w-7xl mx-auto px-6 lg:px-8">

            {{-- Heading --}}
            <div
                data-aos="fade-up"
                class="max-w-3xl"
            >

                <div class="flex items-center gap-3 mb-5">
                    <span class="w-9 h-[2px] bg-[#D71920]"></span>

                    <span class="text-[#D71920] text-xs font-bold uppercase tracking-[0.25em]">
                        Solution Areas
                    </span>
                </div>

                <h2 class="text-3xl sm:text-4xl lg:text-5xl font-bold text-[#061B2D] leading-tight">
                    Testing Solutions
                    <span class="text-[#073B66]">
                        Across Key Materials
                    </span>
                </h2>

                <p class="mt-5 text-slate-600 leading-8">
                    Explore our core testing categories for construction,
                    infrastructure and civil engineering applications.
                </p>

            </div>


            {{-- Categories --}}
            @php
                $labSolutions = [
                    [
                        'number' => '01',
                        'title' => 'Soil Testing',
                        'description' => 'Equipment for soil testing and related geotechnical laboratory requirements.',
                        'image' => 'st4.jpg',
                    ],
                    [
                        'number' => '02',
                        'title' => 'Concrete Testing',
                        'description' => 'Testing equipment for concrete and construction material applications.',
                        'image' => 'st83.jpg',
                    ],
                    [
                        'number' => '03',
                        'title' => 'Cement Testing',
                        'description' => 'Equipment for testing cement and associated construction materials.',
                        'image' => 'st85.jpg',
                    ],
                    [
                        'number' => '04',
                        'title' => 'Aggregate Testing',
                        'description' => 'Testing machines and equipment for aggregate evaluation.',
                        'image' => 'asew product.jpg',
                    ],
                    [
                        'number' => '05',
                        'title' => 'Asphalt / Bitumen',
                        'description' => 'Equipment for asphalt and bitumen testing applications.',
                        'image' => 'st4.jpg',
                    ],
                    [
                        'number' => '06',
                        'title' => 'Rock Testing',
                        'description' => 'Testing equipment for rock and related material applications.',
                        'image' => 'st83.jpg',
                    ],
                    [
                        'number' => '07',
                        'title' => 'Material Testing',
                        'description' => 'Material testing instruments for scientific and engineering applications.',
                        'image' => 'st85.jpg',
                    ],
                    [
                        'number' => '08',
                        'title' => 'Survey Equipment',
                        'description' => 'Equipment category supporting survey and engineering requirements.',
                        'image' => 'asew product.jpg',
                    ],
                    [
                        'number' => '09',
                        'title' => 'Laboratory Equipment',
                        'description' => 'Laboratory-oriented equipment for testing and measurement requirements.',
                        'image' => 'st4.jpg',
                    ],
                ];
            @endphp


            <div class="mt-14 grid sm:grid-cols-2 lg:grid-cols-3 gap-5">

                @foreach ($labSolutions as $solution)

                    <article
                        data-aos="fade-up"
                        data-aos-delay="{{ ($loop->index % 3) * 100 }}"
                        class="group relative bg-white border border-slate-200 overflow-hidden min-h-[390px] hover:shadow-2xl transition-all duration-500"
                    >

                        {{-- Image --}}
                        <div class="absolute inset-0">

                            <img
                                src="{{ asset('images/' . $solution['image']) }}"
                                alt="{{ $solution['title'] }}"
                                class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-700"
                            >

                            <div class="absolute inset-0 bg-gradient-to-t from-[#061B2D]/95 via-[#061B2D]/45 to-[#061B2D]/5"></div>

                        </div>


                        {{-- Number --}}
                        <div class="absolute top-5 left-5 z-10">

                            <span class="inline-flex items-center justify-center w-11 h-11 bg-white/95 text-[#073B66] text-sm font-bold">
                                {{ $solution['number'] }}
                            </span>

                        </div>


                        {{-- Content --}}
                        <div class="relative z-10 min-h-[390px] flex items-end p-7">

                            <div class="w-full">

                                <div class="w-9 h-[2px] bg-[#D71920] mb-4"></div>

                                <h3 class="text-2xl font-bold text-white">
                                    {{ $solution['title'] }}
                                </h3>

                                <p class="mt-3 text-sm text-white/70 leading-6 max-w-sm">
                                    {{ $solution['description'] }}
                                </p>

                                <a
                                    href="{{ route('products') }}"
                                    class="mt-5 inline-flex items-center gap-2 text-sm font-semibold text-white hover:text-[#D7A93A] transition"
                                >
                                    Explore Equipment

                                    <svg
                                        class="w-4 h-4 group-hover:translate-x-1 transition-transform"
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

                    </article>

                @endforeach

            </div>

        </div>

    </section>


    {{-- =========================================================
         CORE EQUIPMENT
    ========================================================== --}}
    <section class="py-20 lg:py-28 bg-[#061B2D]">

        <div class="max-w-7xl mx-auto px-6 lg:px-8">

            <div class="grid lg:grid-cols-2 gap-14 lg:gap-20 items-center">

                {{-- Content --}}
                <div data-aos="fade-right">

                    <div class="flex items-center gap-3 mb-5">
                        <span class="w-9 h-[2px] bg-[#D7A93A]"></span>

                        <span class="text-[#D7A93A] text-xs font-bold uppercase tracking-[0.25em]">
                            Core Equipment
                        </span>
                    </div>

                    <h2 class="text-3xl sm:text-4xl lg:text-5xl font-bold text-white leading-tight">
                        From Machines
                        <span class="block text-[#D7A93A]">
                            to Testing Instruments
                        </span>
                    </h2>

                    <p class="mt-6 text-white/70 leading-8">
                        ASEW's product range includes key material testing
                        equipment used for construction and engineering
                        applications.
                    </p>


                    {{-- Equipment list --}}
                    <div class="mt-9 grid sm:grid-cols-2 gap-x-8 gap-y-4">

                        @php
                            $equipment = [
                                'Compression Testing Machines',
                                'Pan Mixers',
                                'Cube Moulds',
                                'Soil Testing Instruments',
                                'Concrete Testing Machines',
                                'Asphalt / Bitumen Testing Equipment',
                                'Aggregate Testing Machines',
                                'Material Testing Instruments',
                            ];
                        @endphp

                        @foreach ($equipment as $item)

                            <div class="flex items-center gap-3">

                                <span class="w-6 h-6 flex-shrink-0 border border-[#D7A93A]/50 text-[#D7A93A] flex items-center justify-center text-xs">
                                    ✓
                                </span>

                                <span class="text-sm text-white/80">
                                    {{ $item }}
                                </span>

                            </div>

                        @endforeach

                    </div>


                    <a
                        href="{{ route('products') }}"
                        class="mt-10 inline-flex items-center gap-3 px-7 py-4 bg-[#D71920] hover:bg-[#b9151b] text-white font-semibold transition duration-300"
                    >
                        View Product Range

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


                {{-- Image --}}
                <div
                    data-aos="fade-left"
                    class="relative"
                >

                    <div class="relative overflow-hidden">

                        <img
                            src="{{ asset('images/st83.jpg') }}"
                            alt="ASEW Testing Equipment"
                            class="w-full h-[450px] lg:h-[580px] object-cover"
                        >

                        <div class="absolute inset-0 bg-gradient-to-t from-[#061B2D]/60 to-transparent"></div>

                    </div>


                    {{-- Overlay card --}}
                    <div class="absolute bottom-6 left-6 right-6 sm:left-8 sm:right-8 bg-white/95 backdrop-blur-sm p-6">

                        <p class="text-xs uppercase tracking-[0.2em] text-[#D71920] font-bold">
                            ASEW
                        </p>

                        <p class="mt-2 text-lg font-bold text-[#061B2D]">
                            Material Testing & QA/QC Equipment
                        </p>

                    </div>

                </div>

            </div>

        </div>

    </section>


    {{-- =========================================================
         WHY ASEW
    ========================================================== --}}
    <section class="py-20 lg:py-28 bg-white">

        <div class="max-w-7xl mx-auto px-6 lg:px-8">

            <div class="text-center max-w-3xl mx-auto">

                <div
                    data-aos="fade-up"
                    class="flex justify-center items-center gap-3 mb-5"
                >
                    <span class="w-9 h-[2px] bg-[#D71920]"></span>

                    <span class="text-[#D71920] text-xs font-bold uppercase tracking-[0.25em]">
                        Why ASEW
                    </span>

                    <span class="w-9 h-[2px] bg-[#D71920]"></span>
                </div>

                <h2
                    data-aos="fade-up"
                    data-aos-delay="100"
                    class="text-3xl sm:text-4xl lg:text-5xl font-bold text-[#061B2D]"
                >
                    A Focus on
                    <span class="text-[#073B66]">
                        Testing Requirements
                    </span>
                </h2>

                <p
                    data-aos="fade-up"
                    data-aos-delay="200"
                    class="mt-5 text-slate-600 leading-8"
                >
                    Our product categories are focused on the needs of
                    scientific, material testing and QA/QC applications.
                </p>

            </div>


            {{-- Feature cards --}}
            <div class="mt-14 grid sm:grid-cols-2 lg:grid-cols-4 gap-5">

                {{-- 01 --}}
                <div
                    data-aos="fade-up"
                    class="group p-7 border border-slate-200 hover:border-[#073B66] hover:shadow-xl transition-all duration-300"
                >

                    <span class="text-4xl font-bold text-slate-100 group-hover:text-[#D71920] transition">
                        01
                    </span>

                    <h3 class="mt-5 text-xl font-bold text-[#061B2D]">
                        Scientific
                    </h3>

                    <p class="mt-3 text-sm text-slate-500 leading-7">
                        Equipment positioned for scientific and material
                        testing applications.
                    </p>

                </div>


                {{-- 02 --}}
                <div
                    data-aos="fade-up"
                    data-aos-delay="100"
                    class="group p-7 border border-slate-200 hover:border-[#073B66] hover:shadow-xl transition-all duration-300"
                >

                    <span class="text-4xl font-bold text-slate-100 group-hover:text-[#D71920] transition">
                        02
                    </span>

                    <h3 class="mt-5 text-xl font-bold text-[#061B2D]">
                        Engineering
                    </h3>

                    <p class="mt-3 text-sm text-slate-500 leading-7">
                        Product categories serving civil engineering and
                        construction testing requirements.
                    </p>

                </div>


                {{-- 03 --}}
                <div
                    data-aos="fade-up"
                    data-aos-delay="200"
                    class="group p-7 border border-slate-200 hover:border-[#073B66] hover:shadow-xl transition-all duration-300"
                >

                    <span class="text-4xl font-bold text-slate-100 group-hover:text-[#D71920] transition">
                        03
                    </span>

                    <h3 class="mt-5 text-xl font-bold text-[#061B2D]">
                        QA / QC
                    </h3>

                    <p class="mt-3 text-sm text-slate-500 leading-7">
                        Equipment categories aligned with quality assurance
                        and quality control activities.
                    </p>

                </div>


                {{-- 04 --}}
                <div
                    data-aos="fade-up"
                    data-aos-delay="300"
                    class="group p-7 border border-slate-200 hover:border-[#073B66] hover:shadow-xl transition-all duration-300"
                >

                    <span class="text-4xl font-bold text-slate-100 group-hover:text-[#D71920] transition">
                        04
                    </span>

                    <h3 class="mt-5 text-xl font-bold text-[#061B2D]">
                        Export Markets
                    </h3>

                    <p class="mt-3 text-sm text-slate-500 leading-7">
                        Business dealings extending across international
                        markets.
                    </p>

                </div>

            </div>

        </div>

    </section>


    {{-- =========================================================
         APPLICATIONS
    ========================================================== --}}
    <section class="py-20 lg:py-28 bg-slate-50 border-y border-slate-200">

        <div class="max-w-7xl mx-auto px-6 lg:px-8">

            <div class="grid lg:grid-cols-[0.75fr_1.25fr] gap-14 lg:gap-20">

                {{-- Heading --}}
                <div data-aos="fade-right">

                    <div class="flex items-center gap-3 mb-5">
                        <span class="w-9 h-[2px] bg-[#D71920]"></span>

                        <span class="text-[#D71920] text-xs font-bold uppercase tracking-[0.25em]">
                            Applications
                        </span>
                    </div>

                    <h2 class="text-3xl sm:text-4xl lg:text-5xl font-bold text-[#061B2D] leading-tight">
                        Solutions for
                        <span class="text-[#073B66]">
                            Real-World Projects
                        </span>
                    </h2>

                    <p class="mt-6 text-slate-600 leading-8">
                        Our testing equipment is positioned for applications
                        across construction, infrastructure and civil
                        engineering.
                    </p>

                </div>


                {{-- Application list --}}
                <div
                    data-aos="fade-left"
                    class="space-y-3"
                >

                    @php
                        $applications = [
                            [
                                'title' => 'Construction Industries',
                                'text' => 'Testing requirements associated with construction materials and projects.',
                            ],
                            [
                                'title' => 'Infrastructure',
                                'text' => 'Material testing applications supporting infrastructure-related work.',
                            ],
                            [
                                'title' => 'Civil Engineering Colleges',
                                'text' => 'Equipment categories suitable for civil engineering laboratory applications.',
                            ],
                            [
                                'title' => 'NHAI Projects',
                                'text' => 'Testing equipment for highway and infrastructure project requirements.',
                            ],
                            [
                                'title' => 'Metro Projects',
                                'text' => 'Material testing applications associated with metro infrastructure.',
                            ],
                        ];
                    @endphp

                    @foreach ($applications as $index => $application)

                        <div class="group bg-white border border-slate-200 p-6 sm:p-7 hover:border-[#073B66] hover:shadow-lg transition-all duration-300">

                            <div class="flex items-start gap-5">

                                <span class="text-xl font-bold text-slate-200 group-hover:text-[#D71920] transition">
                                    {{ str_pad($index + 1, 2, '0', STR_PAD_LEFT) }}
                                </span>

                                <div class="h-8 w-px bg-slate-200"></div>

                                <div class="flex-1">

                                    <h3 class="text-lg sm:text-xl font-bold text-[#061B2D]">
                                        {{ $application['title'] }}
                                    </h3>

                                    <p class="mt-2 text-sm text-slate-500 leading-6">
                                        {{ $application['text'] }}
                                    </p>

                                </div>

                                <svg
                                    class="hidden sm:block w-5 h-5 text-slate-300 group-hover:text-[#D71920] group-hover:translate-x-1 transition"
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

                        </div>

                    @endforeach

                </div>

            </div>

        </div>

    </section>


    {{-- =========================================================
         GLOBAL REACH
    ========================================================== --}}
    <section class="py-20 lg:py-24 bg-white">

        <div class="max-w-7xl mx-auto px-6 lg:px-8">

            <div
                data-aos="fade-up"
                class="relative overflow-hidden bg-[#073B66] px-7 sm:px-10 lg:px-14 py-12 lg:py-16"
            >

                {{-- Decorative elements --}}
                <div class="absolute -right-24 -top-32 w-96 h-96 rounded-full border border-white/10"></div>

                <div class="relative z-10">

                    <div class="grid lg:grid-cols-2 gap-10 items-center">

                        <div>

                            <div class="flex items-center gap-3 mb-5">

                                <span class="w-9 h-[2px] bg-[#D7A93A]"></span>

                                <span class="text-[#D7A93A] text-xs font-bold uppercase tracking-[0.25em]">
                                    Global Presence
                                </span>

                            </div>

                            <h2 class="text-3xl sm:text-4xl font-bold text-white">
                                Serving Requirements
                                <span class="text-[#D7A93A]">
                                    Beyond India
                                </span>
                            </h2>

                            <p class="mt-5 text-white/70 leading-8">
                                ASEW deals with markets including Nigeria,
                                Ethiopia, Latin America, Dubai and Europe.
                            </p>

                        </div>


                        <div class="grid grid-cols-2 sm:grid-cols-3 gap-4">

                            @foreach (['Nigeria', 'Ethiopia', 'Latin America', 'Dubai', 'Europe'] as $market)

                                <div class="flex items-center gap-3 text-white/80">

                                    <span class="w-2 h-2 rounded-full bg-[#D7A93A]"></span>

                                    <span class="text-sm">
                                        {{ $market }}
                                    </span>

                                </div>

                            @endforeach

                        </div>

                    </div>

                </div>

            </div>

        </div>

    </section>


    {{-- =========================================================
         FINAL CTA
    ========================================================== --}}
    <section class="relative py-20 lg:py-28 bg-[#061B2D] overflow-hidden">

        {{-- Background decoration --}}
        <div class="absolute -left-40 -bottom-40 w-[500px] h-[500px] rounded-full border border-white/5"></div>

        <div class="relative z-10 max-w-5xl mx-auto px-6 lg:px-8 text-center">

            <div
                data-aos="fade-up"
                class="flex justify-center"
            >
                <span class="inline-flex items-center gap-3 px-4 py-2 bg-white/5 border border-white/10 text-[#D7A93A] text-xs font-bold uppercase tracking-[0.2em]">
                    Laboratory & Testing Equipment
                </span>
            </div>

            <h2
                data-aos="fade-up"
                data-aos-delay="100"
                class="mt-7 text-3xl sm:text-4xl lg:text-6xl font-bold text-white leading-tight"
            >
                Build Your Testing
                <span class="block text-[#D7A93A]">
                    Requirement With ASEW
                </span>
            </h2>

            <p
                data-aos="fade-up"
                data-aos-delay="200"
                class="mt-6 max-w-2xl mx-auto text-white/65 text-base lg:text-lg leading-8"
            >
                Explore our material testing equipment or contact us to
                discuss your laboratory and QA/QC requirements.
            </p>

            <div
                data-aos="fade-up"
                data-aos-delay="300"
                class="mt-9 flex flex-col sm:flex-row justify-center gap-4"
            >

                <a
                    href="{{ route('products') }}"
                    class="inline-flex items-center justify-center gap-3 px-8 py-4 bg-[#D71920] hover:bg-[#b9151b] text-white font-semibold transition duration-300"
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
                    class="inline-flex items-center justify-center px-8 py-4 border border-white/30 hover:border-white text-white font-semibold transition duration-300"
                >
                    Request a Quote
                </a>

            </div>

        </div>

    </section>

</div>

@endsection