@extends('layouts.app')

@section('title', 'After-Sales Service | Associated Scientific & Engineering Works')

@section('content')

{{-- =========================================================
    HERO
========================================================= --}}
<section class="relative overflow-hidden bg-[#032B55]">

    <div class="absolute inset-0">
        <img
            src="{{ asset('images/asew product.jpg') }}"
            alt="ASEW After-Sales Service"
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
                Reliable
                <span class="text-[#D71920]">After-Sales</span>
                Support
            </h1>

            <p class="mt-6 max-w-2xl text-lg leading-8 text-slate-200">
                Continuing support for customers using material testing
                instruments and laboratory equipment supplied by ASEW.
            </p>

            <div class="mt-8 flex flex-wrap gap-4">

                <a
                    href="{{ route('contact') }}"
                    class="inline-flex items-center gap-2 rounded-md bg-[#D71920] px-6 py-3.5 text-sm font-bold text-white transition hover:bg-[#b9151b]"
                >
                    Contact Support

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
                    href="{{ route('services.technical-support') }}"
                    class="inline-flex items-center rounded-md border border-white/30 bg-white/5 px-6 py-3.5 text-sm font-semibold text-white backdrop-blur-sm transition hover:bg-white hover:text-[#032B55]"
                >
                    Technical Support
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

            {{-- CONTENT --}}
            <div>

                <p class="text-sm font-bold uppercase tracking-[0.2em] text-[#D71920]">
                    Customer Support
                </p>

                <h2 class="mt-4 text-3xl font-bold leading-tight text-[#032B55] sm:text-4xl">
                    Support Beyond the
                    <span class="text-[#D71920]">
                        Equipment Purchase
                    </span>
                </h2>

                <p class="mt-6 leading-8 text-slate-600">
                    The relationship with a testing equipment supplier does not
                    end with delivery. Customers may require assistance with
                    equipment operation, technical questions and service-related
                    requirements during the equipment's working life.
                </p>

                <p class="mt-4 leading-8 text-slate-600">
                    ASEW provides after-sales support for customers using its
                    range of material testing instruments, concrete testing
                    machines, soil testing equipment, aggregate testing
                    machines and other laboratory equipment.
                </p>

                <div class="mt-8 flex flex-wrap gap-3">

                    <span class="rounded-full bg-slate-100 px-4 py-2 text-sm font-semibold text-[#032B55]">
                        Customer Assistance
                    </span>

                    <span class="rounded-full bg-slate-100 px-4 py-2 text-sm font-semibold text-[#032B55]">
                        Technical Support
                    </span>

                    <span class="rounded-full bg-slate-100 px-4 py-2 text-sm font-semibold text-[#032B55]">
                        Equipment Support
                    </span>

                </div>

            </div>


            {{-- IMAGE --}}
            <div class="relative">

                <div class="absolute -inset-4 rounded-2xl bg-[#D71920]/5"></div>

                <div class="relative overflow-hidden rounded-2xl border border-slate-200 bg-slate-50 shadow-xl">

                    <img
                        src="{{ asset('images/st4.jpg') }}"
                        alt="ASEW Testing Equipment"
                        class="h-[420px] w-full object-cover"
                    >

                </div>

                <div class="absolute -bottom-6 -right-5 rounded-xl bg-white p-5 shadow-xl ring-1 ring-slate-200">

                    <div class="flex items-center gap-4">

                        <div class="flex h-12 w-12 items-center justify-center rounded-lg bg-[#D71920]">

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
                                    d="M18 8a6 6 0 00-12 0v4a6 6 0 0012 0V8zM8 19h8"
                                />
                            </svg>

                        </div>

                        <div>

                            <p class="text-xs font-semibold uppercase tracking-wider text-slate-500">
                                ASEW
                            </p>

                            <p class="font-bold text-[#032B55]">
                                Customer Support
                            </p>

                        </div>

                    </div>

                </div>

            </div>

        </div>

    </div>

</section>


{{-- =========================================================
    SERVICE AREAS
========================================================= --}}
<section class="bg-slate-50 py-20 lg:py-24">

    <div class="mx-auto max-w-7xl px-6 lg:px-8">

        <div class="mx-auto max-w-3xl text-center">

            <p class="text-sm font-bold uppercase tracking-[0.2em] text-[#D71920]">
                After-Sales Support
            </p>

            <h2 class="mt-4 text-3xl font-bold text-[#032B55] sm:text-4xl">
                How We Can Assist
            </h2>

            <p class="mt-5 leading-7 text-slate-600">
                Support requirements can vary according to the equipment and
                application. Our team can understand the requirement and guide
                customers towards the appropriate support.
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
                            d="M8 10h8M8 14h5M5 4h14a2 2 0 012 2v12a2 2 0 01-2 2H5a2 2 0 01-2-2V6a2 2 0 012-2z"
                        />
                    </svg>

                </div>

                <h3 class="mt-6 text-xl font-bold text-[#032B55]">
                    Product Assistance
                </h3>

                <p class="mt-3 text-sm leading-7 text-slate-600">
                    Assistance related to equipment supplied by ASEW and its
                    intended application.
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
                            d="M12 6v6l4 2M21 12a9 9 0 11-18 0 9 9 0 0118 0z"
                        />
                    </svg>

                </div>

                <h3 class="mt-6 text-xl font-bold text-[#032B55]">
                    Service Assistance
                </h3>

                <p class="mt-3 text-sm leading-7 text-slate-600">
                    Support for customers who require assistance regarding
                    service or equipment-related requirements.
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
                            d="M9 12h6m-3-3v6m8-3a8 8 0 11-16 0 8 8 0 0116 0z"
                        />
                    </svg>

                </div>

                <h3 class="mt-6 text-xl font-bold text-[#032B55]">
                    Technical Guidance
                </h3>

                <p class="mt-3 text-sm leading-7 text-slate-600">
                    Guidance for technical questions associated with testing
                    instruments and laboratory equipment.
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
                            stroke="currentColor"
                            stroke-linecap="round"
                            stroke-linejoin="round"
                            stroke-width="1.8"
                            d="M12 3v18m9-9H3"
                        />
                    </svg>

                </div>

                <h3 class="mt-6 text-xl font-bold text-[#032B55]">
                    Follow-Up Support
                </h3>

                <p class="mt-3 text-sm leading-7 text-slate-600">
                    Continued communication regarding customer equipment and
                    support requirements.
                </p>

            </div>

        </div>

    </div>

</section>


{{-- =========================================================
    EQUIPMENT COVERAGE
========================================================= --}}
<section class="bg-white py-20 lg:py-24">

    <div class="mx-auto max-w-7xl px-6 lg:px-8">

        <div class="grid gap-14 lg:grid-cols-[0.9fr_1.1fr] lg:items-center">

            {{-- LEFT INFO --}}
            <div>

                <p class="text-sm font-bold uppercase tracking-[0.2em] text-[#D71920]">
                    Product Portfolio
                </p>

                <h2 class="mt-4 text-3xl font-bold leading-tight text-[#032B55] sm:text-4xl">
                    Support Across Our
                    <span class="text-[#D71920]">
                        Testing Equipment
                    </span>
                </h2>

                <p class="mt-5 leading-8 text-slate-600">
                    ASEW's portfolio includes equipment for material testing,
                    concrete testing, soil testing, aggregate testing and
                    related laboratory applications.
                </p>

                <a
                    href="{{ route('products') }}"
                    class="mt-7 inline-flex items-center gap-2 font-bold text-[#032B55] transition hover:text-[#D71920]"
                >
                    Explore Products
                    <span>→</span>
                </a>

            </div>


            {{-- RIGHT LIST --}}
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

    </div>

</section>


{{-- =========================================================
    SUPPORT FLOW
========================================================= --}}
<section class="bg-[#032B55] py-20 lg:py-24">

    <div class="mx-auto max-w-7xl px-6 lg:px-8">

        <div class="mx-auto max-w-3xl text-center">

            <p class="text-sm font-bold uppercase tracking-[0.2em] text-[#D7A93A]">
                Customer Support Process
            </p>

            <h2 class="mt-4 text-3xl font-bold text-white sm:text-4xl">
                Simple. Direct. Customer-Focused.
            </h2>

            <p class="mt-5 leading-7 text-slate-300">
                Tell us what you need and provide the relevant equipment
                details so that your requirement can be understood clearly.
            </p>

        </div>


        <div class="mt-14 grid gap-6 md:grid-cols-3">

            {{-- STEP 1 --}}
            <div class="rounded-2xl border border-white/10 bg-white/5 p-8 backdrop-blur-sm">

                <div class="flex items-center justify-between">

                    <span class="text-5xl font-black text-white/10">
                        01
                    </span>

                    <div class="flex h-11 w-11 items-center justify-center rounded-full bg-[#D71920] text-sm font-bold text-white">
                        01
                    </div>

                </div>

                <h3 class="mt-5 text-xl font-bold text-white">
                    Contact Us
                </h3>

                <p class="mt-3 text-sm leading-7 text-slate-300">
                    Share your after-sales or equipment-related requirement
                    with the ASEW team.
                </p>

            </div>


            {{-- STEP 2 --}}
            <div class="rounded-2xl border border-white/10 bg-white/5 p-8 backdrop-blur-sm">

                <div class="flex items-center justify-between">

                    <span class="text-5xl font-black text-white/10">
                        02
                    </span>

                    <div class="flex h-11 w-11 items-center justify-center rounded-full bg-[#D7A93A] text-sm font-bold text-white">
                        02
                    </div>

                </div>

                <h3 class="mt-5 text-xl font-bold text-white">
                    Discuss the Requirement
                </h3>

                <p class="mt-3 text-sm leading-7 text-slate-300">
                    Provide relevant equipment information and explain the
                    assistance required.
                </p>

            </div>


            {{-- STEP 3 --}}
            <div class="rounded-2xl border border-white/10 bg-white/5 p-8 backdrop-blur-sm">

                <div class="flex items-center justify-between">

                    <span class="text-5xl font-black text-white/10">
                        03
                    </span>

                    <div class="flex h-11 w-11 items-center justify-center rounded-full bg-white text-sm font-bold text-[#032B55]">
                        03
                    </div>

                </div>

                <h3 class="mt-5 text-xl font-bold text-white">
                    Receive Assistance
                </h3>

                <p class="mt-3 text-sm leading-7 text-slate-300">
                    Proceed with the appropriate support based on the
                    requirement and equipment.
                </p>

            </div>

        </div>

    </div>

</section>


{{-- =========================================================
    RELATED SERVICES
========================================================= --}}
<section class="bg-slate-50 py-20 lg:py-24">

    <div class="mx-auto max-w-7xl px-6 lg:px-8">

        <div class="mx-auto max-w-3xl text-center">

            <p class="text-sm font-bold uppercase tracking-[0.2em] text-[#D71920]">
                Services & Support
            </p>

            <h2 class="mt-4 text-3xl font-bold text-[#032B55] sm:text-4xl">
                Explore Our Other Support Services
            </h2>

        </div>


        <div class="mt-12 grid gap-6 md:grid-cols-3">

            {{-- INSTALLATION --}}
            <a
                href="{{ route('services.installation') }}"
                class="group rounded-2xl border border-slate-200 bg-white p-7 shadow-sm transition duration-300 hover:-translate-y-1 hover:shadow-xl"
            >

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
                            d="M12 3v18M3 12h18"
                        />
                    </svg>

                </div>

                <h3 class="mt-6 text-xl font-bold text-[#032B55]">
                    Installation
                </h3>

                <p class="mt-3 text-sm leading-7 text-slate-600">
                    Assistance with equipment setup and preparation.
                </p>

                <span class="mt-5 inline-flex items-center gap-2 text-sm font-bold text-[#D71920]">
                    View Service
                    <span class="transition group-hover:translate-x-1">→</span>
                </span>

            </a>


            {{-- CALIBRATION --}}
            <a
                href="{{ route('services.calibration') }}"
                class="group rounded-2xl border border-slate-200 bg-white p-7 shadow-sm transition duration-300 hover:-translate-y-1 hover:shadow-xl"
            >

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
                            d="M9 12h6m-3-3v6m8-3a8 8 0 11-16 0 8 8 0 0116 0z"
                        />
                    </svg>

                </div>

                <h3 class="mt-6 text-xl font-bold text-[#032B55]">
                    Calibration
                </h3>

                <p class="mt-3 text-sm leading-7 text-slate-600">
                    Support related to calibration and measurement
                    requirements.
                </p>

                <span class="mt-5 inline-flex items-center gap-2 text-sm font-bold text-[#D71920]">
                    View Service
                    <span class="transition group-hover:translate-x-1">→</span>
                </span>

            </a>


            {{-- TECHNICAL --}}
            <a
                href="{{ route('services.technical-support') }}"
                class="group rounded-2xl border border-slate-200 bg-white p-7 shadow-sm transition duration-300 hover:-translate-y-1 hover:shadow-xl"
            >

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
                            d="M9.75 17L4 12.25 9.75 7.5M14.25 7.5L20 12.25 14.25 17"
                        />
                    </svg>

                </div>

                <h3 class="mt-6 text-xl font-bold text-[#032B55]">
                    Technical Support
                </h3>

                <p class="mt-3 text-sm leading-7 text-slate-600">
                    Technical assistance for testing instruments and
                    laboratory equipment.
                </p>

                <span class="mt-5 inline-flex items-center gap-2 text-sm font-bold text-[#D71920]">
                    View Service
                    <span class="transition group-hover:translate-x-1">→</span>
                </span>

            </a>

        </div>

    </div>

</section>


{{-- =========================================================
    FINAL CTA
========================================================= --}}
<section class="bg-white py-20">

    <div class="mx-auto max-w-5xl px-6 lg:px-8">

        <div class="relative overflow-hidden rounded-3xl bg-[#073B66] px-8 py-12 text-center shadow-2xl sm:px-12 lg:py-16">

            <div class="absolute -right-20 -top-20 h-56 w-56 rounded-full bg-[#D71920]/20 blur-3xl"></div>

            <div class="absolute -bottom-20 -left-20 h-56 w-56 rounded-full bg-[#D7A93A]/10 blur-3xl"></div>

            <div class="relative">

                <p class="text-sm font-bold uppercase tracking-[0.2em] text-[#D7A93A]">
                    ASEW Support
                </p>

                <h2 class="mt-4 text-3xl font-bold text-white sm:text-4xl">
                    We're Here to Support Your
                    <span class="text-[#D7A93A]">
                        Testing Requirements
                    </span>
                </h2>

                <p class="mx-auto mt-5 max-w-2xl leading-7 text-slate-300">
                    Whether you need technical assistance, calibration
                    support or help with your equipment, contact ASEW with
                    your requirement.
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
                        href="{{ route('products') }}"
                        class="inline-flex items-center rounded-md border border-white/25 px-7 py-3.5 text-sm font-semibold text-white transition hover:bg-white hover:text-[#032B55]"
                    >
                        View Products
                    </a>

                </div>

            </div>

        </div>

    </div>

</section>

@endsection