@extends('layouts.app')

@section('title', 'Technical Support | Associated Scientific & Engineering Works')

@section('content')

{{-- =========================================================
    HERO
========================================================= --}}
<section class="relative overflow-hidden bg-[#032B55]">

    <div class="absolute inset-0">
        <img
            src="{{ asset('images/st85.jpg') }}"
            alt="ASEW Technical Support"
            class="h-full w-full object-cover opacity-20"
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
                Technical
                <span class="text-[#D71920]">Support</span>
                for Testing Equipment
            </h1>

            <p class="mt-6 max-w-2xl text-lg leading-8 text-slate-200">
                Practical technical assistance for material testing
                instruments and laboratory equipment used across engineering,
                construction and QA/QC applications.
            </p>

            <div class="mt-8 flex flex-wrap gap-4">

                <a
                    href="{{ route('contact') }}"
                    class="inline-flex items-center gap-2 rounded-md bg-[#D71920] px-6 py-3.5 text-sm font-bold text-white transition hover:bg-[#b9151b]"
                >
                    Get Technical Support

                    <svg
                        class="h-4 w-4"
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
                    href="{{ route('services.calibration') }}"
                    class="inline-flex items-center rounded-md border border-white/30 bg-white/5 px-6 py-3.5 text-sm font-semibold text-white backdrop-blur-sm transition hover:bg-white hover:text-[#032B55]"
                >
                    Calibration Support
                </a>

            </div>

        </div>

    </div>

</section>


{{-- =========================================================
    INTRO
========================================================= --}}
<section class="bg-white py-20 lg:py-24">

    <div class="mx-auto max-w-7xl px-6 lg:px-8">

        <div class="grid items-center gap-14 lg:grid-cols-2">

            {{-- LEFT --}}
            <div>

                <p class="text-sm font-bold uppercase tracking-[0.2em] text-[#D71920]">
                    Technical Assistance
                </p>

                <h2 class="mt-4 text-3xl font-bold leading-tight text-[#032B55] sm:text-4xl">
                    Support That Helps Keep Your
                    <span class="text-[#D71920]">
                        Laboratory Equipment
                    </span>
                    Operational
                </h2>

                <p class="mt-6 leading-8 text-slate-600">
                    Material testing equipment forms an important part of
                    engineering and quality-control environments. When
                    technical questions arise, appropriate support can help
                    users understand the equipment and its operation.
                </p>

                <p class="mt-4 leading-8 text-slate-600">
                    ASEW supports customers dealing with material testing
                    instruments, concrete testing machines, soil testing
                    equipment, aggregate testing machines and other
                    laboratory equipment within its product portfolio.
                </p>

                <div class="mt-8 flex flex-wrap gap-3">

                    <span class="rounded-full bg-slate-100 px-4 py-2 text-sm font-semibold text-[#032B55]">
                        Equipment Guidance
                    </span>

                    <span class="rounded-full bg-slate-100 px-4 py-2 text-sm font-semibold text-[#032B55]">
                        Technical Assistance
                    </span>

                    <span class="rounded-full bg-slate-100 px-4 py-2 text-sm font-semibold text-[#032B55]">
                        Product Support
                    </span>

                </div>

            </div>


            {{-- RIGHT --}}
            <div class="relative">

                <div class="absolute -inset-4 rounded-2xl bg-[#032B55]/5"></div>

                <div class="relative overflow-hidden rounded-2xl border border-slate-200 bg-slate-50 shadow-xl">

                    <img
                        src="{{ asset('images/st85.jpg') }}"
                        alt="Material Testing Equipment"
                        class="h-[420px] w-full object-cover"
                    >

                </div>

                <div class="absolute -bottom-6 -left-5 rounded-xl bg-white p-5 shadow-xl ring-1 ring-slate-200">

                    <div class="flex items-center gap-4">

                        <div class="flex h-12 w-12 items-center justify-center rounded-lg bg-[#032B55]">

                            <svg
                                class="h-6 w-6 text-white"
                                fill="none"
                                stroke="currentColor"
                                viewBox="0 0 24 24"
                            >
                                <path
                                    stroke-linecap="round"
                                    stroke-linejoin="round"
                                    stroke-width="1.8"
                                    d="M18 10a6 6 0 10-12 0v2a6 6 0 0012 0v-2zM6 12H4a2 2 0 000 4h2m12-4h2a2 2 0 010 4h-2"
                                />
                            </svg>

                        </div>

                        <div>

                            <p class="text-xs font-semibold uppercase tracking-wider text-slate-500">
                                ASEW
                            </p>

                            <p class="font-bold text-[#032B55]">
                                Technical Assistance
                            </p>

                        </div>

                    </div>

                </div>

            </div>

        </div>

    </div>

</section>


{{-- =========================================================
    SUPPORT AREAS
========================================================= --}}
<section class="bg-slate-50 py-20 lg:py-24">

    <div class="mx-auto max-w-7xl px-6 lg:px-8">

        <div class="mx-auto max-w-3xl text-center">

            <p class="text-sm font-bold uppercase tracking-[0.2em] text-[#D71920]">
                Support Areas
            </p>

            <h2 class="mt-4 text-3xl font-bold text-[#032B55] sm:text-4xl">
                Technical Support Across the Equipment Lifecycle
            </h2>

            <p class="mt-5 leading-7 text-slate-600">
                Support requirements can differ depending on the equipment,
                application and operating environment. Our approach focuses
                on understanding the requirement before providing assistance.
            </p>

        </div>


        <div class="mt-14 grid gap-6 md:grid-cols-2 lg:grid-cols-4">

            {{-- CARD 1 --}}
            <div class="group rounded-2xl border border-slate-200 bg-white p-7 shadow-sm transition duration-300 hover:-translate-y-1 hover:shadow-xl">

                <div class="flex h-12 w-12 items-center justify-center rounded-xl bg-[#032B55]">

                    <svg
                        class="h-6 w-6 text-white"
                        fill="none"
                        stroke="currentColor"
                        viewBox="0 0 24 24"
                    >
                        <path
                            stroke-linecap="round"
                            stroke-linejoin="round"
                            stroke-width="1.8"
                            d="M9.75 17L4 12.25 9.75 7.5M14.25 7.5L20 12.25 14.25 17"
                        />
                    </svg>

                </div>

                <h3 class="mt-6 text-xl font-bold text-[#032B55]">
                    Equipment Guidance
                </h3>

                <p class="mt-3 text-sm leading-7 text-slate-600">
                    Assistance related to equipment operation and its intended
                    testing application.
                </p>

            </div>


            {{-- CARD 2 --}}
            <div class="group rounded-2xl border border-slate-200 bg-white p-7 shadow-sm transition duration-300 hover:-translate-y-1 hover:shadow-xl">

                <div class="flex h-12 w-12 items-center justify-center rounded-xl bg-[#D71920]">

                    <svg
                        class="h-6 w-6 text-white"
                        fill="none"
                        stroke="currentColor"
                        viewBox="0 0 24 24"
                    >
                        <path
                            stroke-linecap="round"
                            stroke-linejoin="round"
                            stroke-width="1.8"
                            d="M11 4H6a2 2 0 00-2 2v12a2 2 0 002 2h12a2 2 0 002-2v-5M15 4h5m0 0v5m0-5l-8 8"
                        />
                    </svg>

                </div>

                <h3 class="mt-6 text-xl font-bold text-[#032B55]">
                    Operational Assistance
                </h3>

                <p class="mt-3 text-sm leading-7 text-slate-600">
                    Guidance when users require assistance with the practical
                    operation of their equipment.
                </p>

            </div>


            {{-- CARD 3 --}}
            <div class="group rounded-2xl border border-slate-200 bg-white p-7 shadow-sm transition duration-300 hover:-translate-y-1 hover:shadow-xl">

                <div class="flex h-12 w-12 items-center justify-center rounded-xl bg-[#073B66]">

                    <svg
                        class="h-6 w-6 text-white"
                        fill="none"
                        stroke="currentColor"
                        viewBox="0 0 24 24"
                    >
                        <path
                            stroke-linecap="round"
                            stroke-linejoin="round"
                            stroke-width="1.8"
                            d="M12 6v6l4 2M21 12a9 9 0 11-18 0 9 9 0 0118 0z"
                        />
                    </svg>

                </div>

                <h3 class="mt-6 text-xl font-bold text-[#032B55]">
                    Troubleshooting Support
                </h3>

                <p class="mt-3 text-sm leading-7 text-slate-600">
                    Assistance in understanding equipment-related issues and
                    identifying the appropriate next step.
                </p>

            </div>


            {{-- CARD 4 --}}
            <div class="group rounded-2xl border border-slate-200 bg-white p-7 shadow-sm transition duration-300 hover:-translate-y-1 hover:shadow-xl">

                <div class="flex h-12 w-12 items-center justify-center rounded-xl bg-[#D7A93A]">

                    <svg
                        class="h-6 w-6 text-white"
                        fill="none"
                        stroke="currentColor"
                        viewBox="0 0 24 24"
                    >
                        <path
                            stroke-linecap="round"
                            stroke-linejoin="round"
                            stroke-width="1.8"
                            d="M12 20h9M3 20h3m6-16v16m0-16l3 3m-3-3L9 7"
                        />
                    </svg>

                </div>

                <h3 class="mt-6 text-xl font-bold text-[#032B55]">
                    Product Assistance
                </h3>

                <p class="mt-3 text-sm leading-7 text-slate-600">
                    Support related to products supplied for material testing
                    and laboratory applications.
                </p>

            </div>

        </div>

    </div>

</section>


{{-- =========================================================
    EQUIPMENT CATEGORIES
========================================================= --}}
<section class="bg-white py-20 lg:py-24">

    <div class="mx-auto max-w-7xl px-6 lg:px-8">

        <div class="grid gap-14 lg:grid-cols-[1.05fr_0.95fr] lg:items-center">

            {{-- EQUIPMENT LIST --}}
            <div>

                <p class="text-sm font-bold uppercase tracking-[0.2em] text-[#D71920]">
                    Product Support
                </p>

                <h2 class="mt-4 text-3xl font-bold leading-tight text-[#032B55] sm:text-4xl">
                    Support for a Wide Range of
                    <span class="text-[#D71920]">
                        Testing Equipment
                    </span>
                </h2>

                <p class="mt-5 leading-8 text-slate-600">
                    ASEW's product portfolio includes equipment used for
                    different material testing applications in engineering
                    and laboratory environments.
                </p>

                <div class="mt-8 space-y-3">

                    @php
                        $equipment = [
                            'Compression Testing Machines',
                            'Soil Testing Instruments',
                            'Concrete Testing Machines',
                            'Aggregate Testing Machines',
                            'Asphalt / Bitumen Testing Equipment',
                            'Pan Mixers',
                            'Cube Moulds',
                            'Material Testing Instruments',
                        ];
                    @endphp

                    @foreach ($equipment as $item)

                        <div class="flex items-center gap-4 rounded-xl border border-slate-200 bg-slate-50 p-4 transition hover:border-[#D71920]/30 hover:bg-white hover:shadow-sm">

                            <div class="flex h-9 w-9 shrink-0 items-center justify-center rounded-lg bg-[#032B55]">

                                <svg
                                    class="h-4 w-4 text-white"
                                    fill="none"
                                    stroke="currentColor"
                                    viewBox="0 0 24 24"
                                >
                                    <path
                                        stroke-linecap="round"
                                        stroke-linejoin="round"
                                        stroke-width="2"
                                        d="M5 13l4 4L19 7"
                                    />
                                </svg>

                            </div>

                            <span class="text-sm font-semibold text-[#032B55]">
                                {{ $item }}
                            </span>

                        </div>

                    @endforeach

                </div>

            </div>


            {{-- INFO PANEL --}}
            <div>

                <div class="rounded-3xl bg-[#032B55] p-8 shadow-xl lg:p-10">

                    <div class="flex h-14 w-14 items-center justify-center rounded-xl bg-[#D71920]">

                        <svg
                            class="h-7 w-7 text-white"
                            fill="none"
                            stroke="currentColor"
                            viewBox="0 0 24 24"
                        >
                            <path
                                stroke-linecap="round"
                                stroke-linejoin="round"
                                stroke-width="1.8"
                                d="M12 8v4l3 2m6-2a9 9 0 11-18 0 9 9 0 0118 0z"
                            />
                        </svg>

                    </div>

                    <h3 class="mt-7 text-2xl font-bold text-white">
                        Need Help With Your Equipment?
                    </h3>

                    <p class="mt-4 leading-8 text-slate-300">
                        When contacting ASEW for technical support, sharing
                        relevant equipment information can help us understand
                        your requirement more effectively.
                    </p>

                    <div class="mt-7 space-y-4">

                        <div class="flex gap-3">

                            <span class="mt-2 h-2 w-2 shrink-0 rounded-full bg-[#D7A93A]"></span>

                            <p class="text-sm leading-6 text-slate-300">
                                Equipment name or category
                            </p>

                        </div>

                        <div class="flex gap-3">

                            <span class="mt-2 h-2 w-2 shrink-0 rounded-full bg-[#D7A93A]"></span>

                            <p class="text-sm leading-6 text-slate-300">
                                Description of the requirement
                            </p>

                        </div>

                        <div class="flex gap-3">

                            <span class="mt-2 h-2 w-2 shrink-0 rounded-full bg-[#D7A93A]"></span>

                            <p class="text-sm leading-6 text-slate-300">
                                Relevant application or testing activity
                            </p>

                        </div>

                    </div>

                    <a
                        href="{{ route('contact') }}"
                        class="mt-8 inline-flex items-center gap-2 rounded-md bg-white px-6 py-3.5 text-sm font-bold text-[#032B55] transition hover:bg-[#D7A93A]"
                    >
                        Contact Technical Team

                        <span>→</span>
                    </a>

                </div>

            </div>

        </div>

    </div>

</section>


{{-- =========================================================
    SUPPORT PROCESS
========================================================= --}}
<section class="bg-slate-50 py-20 lg:py-24">

    <div class="mx-auto max-w-7xl px-6 lg:px-8">

        <div class="mx-auto max-w-3xl text-center">

            <p class="text-sm font-bold uppercase tracking-[0.2em] text-[#D71920]">
                Our Approach
            </p>

            <h2 class="mt-4 text-3xl font-bold text-[#032B55] sm:text-4xl">
                A Clear Technical Support Process
            </h2>

        </div>


        <div class="relative mt-14">

            {{-- DESKTOP LINE --}}
            <div class="absolute left-[12.5%] right-[12.5%] top-7 hidden h-px bg-slate-300 lg:block"></div>


            <div class="relative grid gap-8 md:grid-cols-2 lg:grid-cols-4">

                {{-- STEP 1 --}}
                <div class="text-center">

                    <div class="mx-auto flex h-14 w-14 items-center justify-center rounded-full bg-[#032B55] text-lg font-bold text-white shadow-lg">
                        01
                    </div>

                    <h3 class="mt-6 font-bold text-[#032B55]">
                        Understand
                    </h3>

                    <p class="mt-2 text-sm leading-6 text-slate-600">
                        Understand the equipment and support requirement.
                    </p>

                </div>


                {{-- STEP 2 --}}
                <div class="text-center">

                    <div class="mx-auto flex h-14 w-14 items-center justify-center rounded-full bg-[#D71920] text-lg font-bold text-white shadow-lg">
                        02
                    </div>

                    <h3 class="mt-6 font-bold text-[#032B55]">
                        Assess
                    </h3>

                    <p class="mt-2 text-sm leading-6 text-slate-600">
                        Review the issue or technical requirement.
                    </p>

                </div>


                {{-- STEP 3 --}}
                <div class="text-center">

                    <div class="mx-auto flex h-14 w-14 items-center justify-center rounded-full bg-[#073B66] text-lg font-bold text-white shadow-lg">
                        03
                    </div>

                    <h3 class="mt-6 font-bold text-[#032B55]">
                        Assist
                    </h3>

                    <p class="mt-2 text-sm leading-6 text-slate-600">
                        Provide appropriate technical assistance.
                    </p>

                </div>


                {{-- STEP 4 --}}
                <div class="text-center">

                    <div class="mx-auto flex h-14 w-14 items-center justify-center rounded-full bg-[#D7A93A] text-lg font-bold text-white shadow-lg">
                        04
                    </div>

                    <h3 class="mt-6 font-bold text-[#032B55]">
                        Follow Through
                    </h3>

                    <p class="mt-2 text-sm leading-6 text-slate-600">
                        Help identify the appropriate next step.
                    </p>

                </div>

            </div>

        </div>

    </div>

</section>


{{-- =========================================================
    CTA
========================================================= --}}
<section class="bg-[#032B55] py-20 lg:py-24">

    <div class="mx-auto max-w-5xl px-6 lg:px-8">

        <div class="relative overflow-hidden rounded-3xl bg-[#073B66] px-8 py-12 text-center shadow-2xl sm:px-12 lg:py-16">

            <div class="absolute -right-20 -top-20 h-56 w-56 rounded-full bg-[#D71920]/20 blur-3xl"></div>

            <div class="absolute -bottom-20 -left-20 h-56 w-56 rounded-full bg-[#D7A93A]/10 blur-3xl"></div>

            <div class="relative">

                <p class="text-sm font-bold uppercase tracking-[0.2em] text-[#D7A93A]">
                    Technical Support
                </p>

                <h2 class="mt-4 text-3xl font-bold text-white sm:text-4xl">
                    Need Assistance With Your
                    <span class="text-[#D7A93A]">
                        Testing Equipment?
                    </span>
                </h2>

                <p class="mx-auto mt-5 max-w-2xl leading-7 text-slate-300">
                    Share your requirement with ASEW and get in touch regarding
                    your material testing or laboratory equipment.
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
                        href="{{ route('services.after-sales') }}"
                        class="inline-flex items-center rounded-md border border-white/25 px-7 py-3.5 text-sm font-semibold text-white transition hover:bg-white hover:text-[#032B55]"
                    >
                        After-Sales Service
                    </a>

                </div>

            </div>

        </div>

    </div>

</section>

@endsection