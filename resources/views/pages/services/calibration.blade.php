@extends('layouts.app')

@section('title', 'Calibration Services | Associated Scientific & Engineering Works')

@section('content')

{{-- HERO --}}
<section class="relative overflow-hidden bg-[#032B55]">
    <div class="absolute inset-0">
        <img
            src="{{ asset('images/asew product.jpg') }}"
            alt="Calibration Services"
            class="h-full w-full object-cover opacity-20"
        >

        <div class="absolute inset-0 bg-gradient-to-r from-[#032B55] via-[#073B66]/95 to-[#073B66]/75"></div>
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
                Calibration &
                <span class="text-[#D71920]">Measurement</span>
                Support
            </h1>

            <p class="mt-6 max-w-2xl text-lg leading-8 text-slate-200">
                Supporting the accuracy and dependable operation of material
                testing and laboratory equipment through appropriate
                calibration support.
            </p>

            <div class="mt-8 flex flex-wrap gap-4">

                <a
                    href="{{ route('contact') }}"
                    class="inline-flex items-center gap-2 rounded-md bg-[#D71920] px-6 py-3.5 text-sm font-bold text-white transition hover:bg-[#b9151b]"
                >
                    Request Calibration Support

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
                    href="{{ route('services.installation') }}"
                    class="inline-flex items-center rounded-md border border-white/30 bg-white/5 px-6 py-3.5 text-sm font-semibold text-white backdrop-blur-sm transition hover:bg-white hover:text-[#032B55]"
                >
                    Installation Support
                </a>

            </div>

        </div>
    </div>
</section>


{{-- INTRO --}}
<section class="bg-white py-20 lg:py-24">

    <div class="mx-auto max-w-7xl px-6 lg:px-8">

        <div class="grid items-center gap-14 lg:grid-cols-2">

            {{-- TEXT --}}
            <div>

                <p class="text-sm font-bold uppercase tracking-[0.2em] text-[#D71920]">
                    Calibration Support
                </p>

                <h2 class="mt-4 text-3xl font-bold leading-tight text-[#032B55] sm:text-4xl">
                    Supporting
                    <span class="text-[#D71920]">
                        Reliable Measurements
                    </span>
                </h2>

                <p class="mt-6 leading-8 text-slate-600">
                    Material testing and laboratory equipment is used for
                    measurements that support engineering and quality-control
                    activities. Appropriate calibration helps users maintain
                    confidence in the measurements produced by their equipment.
                </p>

                <p class="mt-4 leading-8 text-slate-600">
                    ASEW provides support related to calibration requirements
                    for its range of material testing instruments and
                    laboratory equipment.
                </p>

                <div class="mt-8 grid gap-4 sm:grid-cols-2">

                    <div class="rounded-xl border border-slate-200 bg-slate-50 p-5">
                        <div class="mb-3 flex h-10 w-10 items-center justify-center rounded-lg bg-[#032B55]">
                            <svg
                                class="h-5 w-5 text-white"
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

                        <h3 class="font-bold text-[#032B55]">
                            Measurement Focus
                        </h3>

                        <p class="mt-2 text-sm leading-6 text-slate-600">
                            Support focused on equipment used for testing and
                            measurement applications.
                        </p>
                    </div>


                    <div class="rounded-xl border border-slate-200 bg-slate-50 p-5">
                        <div class="mb-3 flex h-10 w-10 items-center justify-center rounded-lg bg-[#D71920]">
                            <svg
                                class="h-5 w-5 text-white"
                                fill="none"
                                stroke="currentColor"
                                viewBox="0 0 24 24"
                            >
                                <path
                                    stroke-linecap="round"
                                    stroke-linejoin="round"
                                    stroke-width="1.8"
                                    d="M9 12l2 2 4-4m5 2a8 8 0 11-16 0 8 8 0 0116 0z"
                                />
                            </svg>
                        </div>

                        <h3 class="font-bold text-[#032B55]">
                            Equipment Support
                        </h3>

                        <p class="mt-2 text-sm leading-6 text-slate-600">
                            Assistance based on the equipment and its intended
                            testing application.
                        </p>
                    </div>

                </div>

            </div>


            {{-- IMAGE --}}
            <div class="relative">

                <div class="absolute -inset-4 rounded-2xl bg-[#D71920]/5"></div>

                <div class="relative overflow-hidden rounded-2xl border border-slate-200 bg-slate-50 shadow-xl">

                    <img
                        src="{{ asset('images/st83.jpg') }}"
                        alt="ASEW Material Testing Equipment"
                        class="h-[400px] w-full object-cover"
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
                                    d="M9 12h6m-3-3v6m8-3a8 8 0 11-16 0 8 8 0 0116 0z"
                                />
                            </svg>

                        </div>

                        <div>
                            <p class="text-xs font-semibold uppercase tracking-wider text-slate-500">
                                ASEW
                            </p>

                            <p class="font-bold text-[#032B55]">
                                Measurement Support
                            </p>
                        </div>

                    </div>

                </div>

            </div>

        </div>

    </div>

</section>


{{-- WHY CALIBRATION --}}
<section class="bg-slate-50 py-20 lg:py-24">

    <div class="mx-auto max-w-7xl px-6 lg:px-8">

        <div class="mx-auto max-w-3xl text-center">

            <p class="text-sm font-bold uppercase tracking-[0.2em] text-[#D71920]">
                Why It Matters
            </p>

            <h2 class="mt-4 text-3xl font-bold text-[#032B55] sm:text-4xl">
                Calibration in Testing Environments
            </h2>

            <p class="mt-5 leading-7 text-slate-600">
                Testing equipment needs to perform appropriately for the
                measurements and quality-control activities for which it is
                intended.
            </p>

        </div>


        <div class="mt-14 grid gap-6 md:grid-cols-3">

            {{-- CARD 1 --}}
            <div class="rounded-2xl border border-slate-200 bg-white p-7 shadow-sm transition duration-300 hover:-translate-y-1 hover:shadow-xl">

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
                            d="M12 6v6l4 2"
                        />
                    </svg>

                </div>

                <h3 class="mt-6 text-xl font-bold text-[#032B55]">
                    Measurement Confidence
                </h3>

                <p class="mt-3 text-sm leading-7 text-slate-600">
                    Proper calibration support can help users maintain
                    confidence in measurements generated during testing.
                </p>

            </div>


            {{-- CARD 2 --}}
            <div class="rounded-2xl border border-slate-200 bg-white p-7 shadow-sm transition duration-300 hover:-translate-y-1 hover:shadow-xl">

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
                            d="M5 12l4 4L19 6"
                        />
                    </svg>

                </div>

                <h3 class="mt-6 text-xl font-bold text-[#032B55]">
                    Equipment Performance
                </h3>

                <p class="mt-3 text-sm leading-7 text-slate-600">
                    Regular attention to equipment condition and measurement
                    requirements supports dependable laboratory operations.
                </p>

            </div>


            {{-- CARD 3 --}}
            <div class="rounded-2xl border border-slate-200 bg-white p-7 shadow-sm transition duration-300 hover:-translate-y-1 hover:shadow-xl">

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
                            d="M4 6h16M4 12h16M4 18h10"
                        />
                    </svg>

                </div>

                <h3 class="mt-6 text-xl font-bold text-[#032B55]">
                    Quality Control
                </h3>

                <p class="mt-3 text-sm leading-7 text-slate-600">
                    Reliable measurement practices are an important part of
                    testing and QA/QC activities.
                </p>

            </div>

        </div>

    </div>

</section>


{{-- EQUIPMENT --}}
<section class="bg-white py-20 lg:py-24">

    <div class="mx-auto max-w-7xl px-6 lg:px-8">

        <div class="grid gap-14 lg:grid-cols-[0.8fr_1.2fr] lg:items-center">

            <div>

                <p class="text-sm font-bold uppercase tracking-[0.2em] text-[#D71920]">
                    Equipment Categories
                </p>

                <h2 class="mt-4 text-3xl font-bold leading-tight text-[#032B55] sm:text-4xl">
                    Calibration Support for
                    <span class="text-[#D71920]">
                        Testing Equipment
                    </span>
                </h2>

                <p class="mt-5 leading-8 text-slate-600">
                    Calibration requirements can vary according to equipment
                    type, application and testing environment. Contact ASEW
                    with your equipment details to discuss the appropriate
                    support.
                </p>

                <a
                    href="{{ route('contact') }}"
                    class="mt-7 inline-flex items-center gap-2 font-bold text-[#032B55] transition hover:text-[#D71920]"
                >
                    Discuss Your Requirement
                    <span>→</span>
                </a>

            </div>


            <div class="grid gap-4 sm:grid-cols-2">

                @php
                    $equipment = [
                        'Compression Testing Machines',
                        'Concrete Testing Machines',
                        'Soil Testing Instruments',
                        'Aggregate Testing Machines',
                        'Asphalt / Bitumen Equipment',
                        'Material Testing Instruments',
                        'Laboratory Testing Equipment',
                        'Other Testing Instruments',
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


{{-- SUPPORT FLOW --}}
<section class="bg-[#032B55] py-20 lg:py-24">

    <div class="mx-auto max-w-7xl px-6 lg:px-8">

        <div class="mx-auto max-w-3xl text-center">

            <p class="text-sm font-bold uppercase tracking-[0.2em] text-[#D7A93A]">
                Simple Process
            </p>

            <h2 class="mt-4 text-3xl font-bold text-white sm:text-4xl">
                How to Request Calibration Support
            </h2>

        </div>


        <div class="mt-14 grid gap-6 md:grid-cols-3">

            <div class="relative rounded-2xl border border-white/10 bg-white/5 p-7 backdrop-blur-sm">

                <span class="text-5xl font-black text-white/10">
                    01
                </span>

                <h3 class="mt-3 text-xl font-bold text-white">
                    Share Equipment Details
                </h3>

                <p class="mt-3 text-sm leading-7 text-slate-300">
                    Provide the equipment name and relevant details about your
                    testing application.
                </p>

            </div>


            <div class="relative rounded-2xl border border-white/10 bg-white/5 p-7 backdrop-blur-sm">

                <span class="text-5xl font-black text-white/10">
                    02
                </span>

                <h3 class="mt-3 text-xl font-bold text-white">
                    Discuss Requirements
                </h3>

                <p class="mt-3 text-sm leading-7 text-slate-300">
                    Our team can discuss the calibration-related requirement
                    associated with the equipment.
                </p>

            </div>


            <div class="relative rounded-2xl border border-white/10 bg-white/5 p-7 backdrop-blur-sm">

                <span class="text-5xl font-black text-white/10">
                    03
                </span>

                <h3 class="mt-3 text-xl font-bold text-white">
                    Plan the Support
                </h3>

                <p class="mt-3 text-sm leading-7 text-slate-300">
                    Proceed with the appropriate support based on the
                    equipment and requirement.
                </p>

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
                    Calibration Support
                </p>

                <h2 class="mt-4 text-3xl font-bold text-white sm:text-4xl">
                    Have a Calibration
                    <span class="text-[#D7A93A]">
                        Requirement?
                    </span>
                </h2>

                <p class="mx-auto mt-5 max-w-2xl leading-7 text-slate-300">
                    Share your equipment details with ASEW and discuss the
                    calibration support required for your testing environment.
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
                        href="{{ route('services.technical-support') }}"
                        class="inline-flex items-center rounded-md border border-white/25 px-7 py-3.5 text-sm font-semibold text-white transition hover:bg-white hover:text-[#032B55]"
                    >
                        Technical Support
                    </a>

                </div>

            </div>

        </div>

    </div>

</section>

@endsection