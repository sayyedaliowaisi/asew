@extends('layouts.app')

@section('title', 'Installation Services | Associated Scientific & Engineering Works')

@section('content')

{{-- HERO --}}
<section class="relative overflow-hidden bg-[#032B55]">
    <div class="absolute inset-0">
        <img
            src="{{ asset('images/asew product.jpg') }}"
            alt="Testing Equipment Installation"
            class="h-full w-full object-cover opacity-25"
        >
        <div class="absolute inset-0 bg-gradient-to-r from-[#032B55] via-[#073B66]/95 to-[#073B66]/70"></div>
    </div>

    <div class="relative mx-auto max-w-7xl px-6 py-24 lg:px-8 lg:py-32">

        <div class="max-w-3xl">

            <div class="mb-6 inline-flex items-center gap-3 rounded-full border border-white/20 bg-white/10 px-4 py-2 backdrop-blur-sm">
                <span class="h-2 w-2 rounded-full bg-[#D71920]"></span>
                <span class="text-sm font-semibold tracking-wide text-white">
                    SERVICES & SUPPORT
                </span>
            </div>

            <h1 class="text-4xl font-bold leading-tight text-white sm:text-5xl lg:text-6xl">
                Professional
                <span class="text-[#D71920]">Installation</span>
                Support
            </h1>

            <p class="mt-6 max-w-2xl text-lg leading-8 text-slate-200">
                Supporting the proper installation and setup of material testing
                and scientific equipment for reliable laboratory operations.
            </p>

            <div class="mt-8 flex flex-wrap gap-4">
                <a
                    href="{{ route('contact') }}"
                    class="inline-flex items-center gap-2 rounded-md bg-[#D71920] px-6 py-3.5 text-sm font-bold text-white transition hover:bg-[#b9151b]"
                >
                    Request Installation Support
                    <svg class="h-4 w-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                              d="M17 8l4 4m0 0l-4 4m4-4H3"/>
                    </svg>
                </a>

                <a
                    href="{{ route('services.technical-support') }}"
                    class="inline-flex items-center rounded-md border border-white/30 bg-white/5 px-6 py-3.5 text-sm font-semibold text-white backdrop-blur-sm transition hover:bg-white hover:text-[#032B55]"
                >
                    Technical Support
                </a>
            </div>

        </div>
    </div>
</section>


{{-- INTRO --}}
<section class="bg-white py-20 lg:py-24">
    <div class="mx-auto max-w-7xl px-6 lg:px-8">

        <div class="grid items-center gap-14 lg:grid-cols-2">

            <div>
                <p class="text-sm font-bold uppercase tracking-[0.2em] text-[#D71920]">
                    Installation Assistance
                </p>

                <h2 class="mt-4 text-3xl font-bold leading-tight text-[#032B55] sm:text-4xl">
                    Equipment Setup With a
                    <span class="text-[#D71920]">Professional Approach</span>
                </h2>

                <p class="mt-6 leading-8 text-slate-600">
                    Associated Scientific and Engineering Works manufactures and
                    exports material testing instruments and QA/QC equipment.
                    Proper installation and setup are an important part of
                    getting testing equipment ready for laboratory use.
                </p>

                <p class="mt-4 leading-8 text-slate-600">
                    Our installation support is intended to help customers
                    establish their equipment correctly and prepare it for
                    testing applications across construction, infrastructure,
                    civil engineering and laboratory environments.
                </p>
            </div>


            <div class="relative">
                <div class="absolute -inset-4 rounded-2xl bg-[#D71920]/5"></div>

                <div class="relative overflow-hidden rounded-2xl border border-slate-200 bg-slate-50 shadow-xl">
                    <img
                        src="{{ asset('images/st4.jpg') }}"
                        alt="ASEW Testing Equipment"
                        class="h-[380px] w-full object-cover"
                    >
                </div>

                <div class="absolute -bottom-6 -left-5 rounded-xl bg-white p-5 shadow-xl ring-1 ring-slate-200">
                    <div class="flex items-center gap-4">
                        <div class="flex h-12 w-12 items-center justify-center rounded-lg bg-[#032B55]">
                            <svg class="h-6 w-6 text-white" fill="none" stroke="currentColor"
                                 viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.8"
                                      d="M10.5 6h3M7 10h10M7 14h10M7 18h6M5 3h14a2 2 0 012 2v14a2 2 0 01-2 2H5a2 2 0 01-2-2V5a2 2 0 012-2z"/>
                            </svg>
                        </div>

                        <div>
                            <p class="text-xs font-semibold uppercase tracking-wider text-slate-500">
                                ASEW
                            </p>
                            <p class="font-bold text-[#032B55]">
                                Testing Equipment
                            </p>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
</section>


{{-- PROCESS --}}
<section class="bg-slate-50 py-20 lg:py-24">
    <div class="mx-auto max-w-7xl px-6 lg:px-8">

        <div class="mx-auto max-w-3xl text-center">
            <p class="text-sm font-bold uppercase tracking-[0.2em] text-[#D71920]">
                Our Approach
            </p>

            <h2 class="mt-4 text-3xl font-bold text-[#032B55] sm:text-4xl">
                Installation Support Process
            </h2>

            <p class="mt-5 leading-7 text-slate-600">
                A structured approach helps customers move from equipment
                delivery towards practical laboratory use.
            </p>
        </div>


        <div class="mt-14 grid gap-6 md:grid-cols-2 lg:grid-cols-4">

            {{-- STEP 1 --}}
            <div class="group rounded-2xl border border-slate-200 bg-white p-7 shadow-sm transition duration-300 hover:-translate-y-1 hover:shadow-xl">
                <div class="flex items-center justify-between">
                    <div class="flex h-12 w-12 items-center justify-center rounded-xl bg-[#032B55] text-lg font-bold text-white">
                        01
                    </div>

                    <span class="text-3xl font-black text-slate-100 group-hover:text-[#D71920]/10">
                        01
                    </span>
                </div>

                <h3 class="mt-7 text-xl font-bold text-[#032B55]">
                    Equipment Preparation
                </h3>

                <p class="mt-3 text-sm leading-7 text-slate-600">
                    Understanding the equipment and its intended laboratory
                    application before setup.
                </p>
            </div>


            {{-- STEP 2 --}}
            <div class="group rounded-2xl border border-slate-200 bg-white p-7 shadow-sm transition duration-300 hover:-translate-y-1 hover:shadow-xl">
                <div class="flex items-center justify-between">
                    <div class="flex h-12 w-12 items-center justify-center rounded-xl bg-[#032B55] text-lg font-bold text-white">
                        02
                    </div>

                    <span class="text-3xl font-black text-slate-100 group-hover:text-[#D71920]/10">
                        02
                    </span>
                </div>

                <h3 class="mt-7 text-xl font-bold text-[#032B55]">
                    Equipment Setup
                </h3>

                <p class="mt-3 text-sm leading-7 text-slate-600">
                    Assistance with positioning and setting up the equipment
                    for its intended use.
                </p>
            </div>


            {{-- STEP 3 --}}
            <div class="group rounded-2xl border border-slate-200 bg-white p-7 shadow-sm transition duration-300 hover:-translate-y-1 hover:shadow-xl">
                <div class="flex items-center justify-between">
                    <div class="flex h-12 w-12 items-center justify-center rounded-xl bg-[#032B55] text-lg font-bold text-white">
                        03
                    </div>

                    <span class="text-3xl font-black text-slate-100 group-hover:text-[#D71920]/10">
                        03
                    </span>
                </div>

                <h3 class="mt-7 text-xl font-bold text-[#032B55]">
                    Initial Checks
                </h3>

                <p class="mt-3 text-sm leading-7 text-slate-600">
                    Basic checks to help ensure that the equipment is ready
                    for operation.
                </p>
            </div>


            {{-- STEP 4 --}}
            <div class="group rounded-2xl border border-slate-200 bg-white p-7 shadow-sm transition duration-300 hover:-translate-y-1 hover:shadow-xl">
                <div class="flex items-center justify-between">
                    <div class="flex h-12 w-12 items-center justify-center rounded-xl bg-[#D71920] text-lg font-bold text-white">
                        04
                    </div>

                    <span class="text-3xl font-black text-slate-100 group-hover:text-[#D71920]/10">
                        04
                    </span>
                </div>

                <h3 class="mt-7 text-xl font-bold text-[#032B55]">
                    Customer Assistance
                </h3>

                <p class="mt-3 text-sm leading-7 text-slate-600">
                    Guidance related to the equipment and the next stage of
                    laboratory operation.
                </p>
            </div>

        </div>
    </div>
</section>


{{-- EQUIPMENT CATEGORIES --}}
<section class="bg-white py-20 lg:py-24">
    <div class="mx-auto max-w-7xl px-6 lg:px-8">

        <div class="grid gap-14 lg:grid-cols-[0.85fr_1.15fr] lg:items-center">

            <div>
                <p class="text-sm font-bold uppercase tracking-[0.2em] text-[#D71920]">
                    Equipment Coverage
                </p>

                <h2 class="mt-4 text-3xl font-bold leading-tight text-[#032B55] sm:text-4xl">
                    Installation Support Across
                    <span class="text-[#D71920]">Testing Equipment</span>
                </h2>

                <p class="mt-5 leading-8 text-slate-600">
                    ASEW's product portfolio covers material testing and
                    laboratory equipment used in civil engineering and
                    construction-related applications.
                </p>

                <a
                    href="{{ route('products') }}"
                    class="mt-7 inline-flex items-center gap-2 font-bold text-[#032B55] transition hover:text-[#D71920]"
                >
                    Explore Products
                    <span>→</span>
                </a>
            </div>


            <div class="grid gap-4 sm:grid-cols-2">

                @php
                    $equipment = [
                        'Compression Testing Machines',
                        'Pan Mixers',
                        'Cube Moulds',
                        'Soil Testing Instruments',
                        'Concrete Testing Machines',
                        'Asphalt / Bitumen Equipment',
                        'Aggregate Testing Machines',
                        'Material Testing Instruments',
                    ];
                @endphp

                @foreach ($equipment as $item)
                    <div class="flex items-center gap-4 rounded-xl border border-slate-200 bg-slate-50 p-5 transition hover:border-[#D71920]/30 hover:bg-white hover:shadow-md">
                        <div class="flex h-9 w-9 shrink-0 items-center justify-center rounded-lg bg-[#032B55]">
                            <svg class="h-4 w-4 text-white" fill="none" stroke="currentColor"
                                 viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                      d="M5 13l4 4L19 7"/>
                            </svg>
                        </div>

                        <span class="text-sm font-semibold text-[#032B55]">
                            {{ $item }}
                        </span>
                    </div>
                @endforeach

            </div>

        </div>
    </div>
</section>


{{-- INDUSTRIES --}}
<section class="bg-[#032B55] py-20 lg:py-24">
    <div class="mx-auto max-w-7xl px-6 lg:px-8">

        <div class="grid gap-12 lg:grid-cols-2 lg:items-center">

            <div>
                <p class="text-sm font-bold uppercase tracking-[0.2em] text-[#D7A93A]">
                    Applications
                </p>

                <h2 class="mt-4 text-3xl font-bold text-white sm:text-4xl">
                    Supporting Diverse
                    <span class="text-[#D7A93A]">Laboratory Environments</span>
                </h2>

                <p class="mt-5 max-w-xl leading-8 text-slate-300">
                    Our equipment is intended for applications associated with
                    construction industries, infrastructure, civil engineering
                    colleges and major project environments.
                </p>
            </div>


            <div class="grid gap-4 sm:grid-cols-2">

                @foreach ([
                    'Construction Industries',
                    'Infrastructure Projects',
                    'Civil Engineering Colleges',
                    'NHAI Projects',
                    'Metro Projects',
                    'Material Testing Laboratories'
                ] as $industry)

                    <div class="rounded-xl border border-white/10 bg-white/5 px-5 py-4 backdrop-blur-sm">
                        <div class="flex items-center gap-3">
                            <span class="h-2 w-2 rounded-full bg-[#D7A93A]"></span>

                            <span class="text-sm font-semibold text-white">
                                {{ $industry }}
                            </span>
                        </div>
                    </div>

                @endforeach

            </div>

        </div>
    </div>
</section>


{{-- CTA --}}
<section class="bg-slate-50 py-20">
    <div class="mx-auto max-w-5xl px-6 lg:px-8">

        <div class="relative overflow-hidden rounded-3xl bg-[#073B66] px-8 py-12 text-center shadow-2xl sm:px-12 lg:py-16">

            <div class="absolute -right-20 -top-20 h-56 w-56 rounded-full bg-[#D71920]/20 blur-3xl"></div>
            <div class="absolute -bottom-20 -left-20 h-56 w-56 rounded-full bg-[#D7A93A]/10 blur-3xl"></div>

            <div class="relative">
                <p class="text-sm font-bold uppercase tracking-[0.2em] text-[#D7A93A]">
                    Need Assistance?
                </p>

                <h2 class="mt-4 text-3xl font-bold text-white sm:text-4xl">
                    Talk to ASEW About Your
                    <span class="text-[#D7A93A]">Equipment Requirements</span>
                </h2>

                <p class="mx-auto mt-5 max-w-2xl leading-7 text-slate-300">
                    Contact our team for information regarding material testing
                    instruments, laboratory equipment and installation support.
                </p>

                <div class="mt-8 flex flex-wrap justify-center gap-4">

                    <a
                        href="{{ route('contact') }}"
                        class="inline-flex items-center gap-2 rounded-md bg-[#D71920] px-7 py-3.5 text-sm font-bold text-white transition hover:bg-[#b9151b]"
                    >
                        Contact Us
                        <span>→</span>
                    </a>

                    <a
                        href="tel:+919899211119"
                        class="inline-flex items-center rounded-md border border-white/25 px-7 py-3.5 text-sm font-semibold text-white transition hover:bg-white hover:text-[#032B55]"
                    >
                        Call ASEW
                    </a>

                </div>
            </div>

        </div>
    </div>
</section>

@endsection