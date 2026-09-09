@extends('layouts.app')

@section('title', 'Company Profile | Associated Scientific & Engineering')

@section('content')

<!-- Hero -->
<section class="relative bg-[#073B66] overflow-hidden">
    <div class="absolute inset-0 bg-gradient-to-r from-[#032B55] via-[#073B66]/95 to-[#073B66]/70"></div>

    <div class="relative max-w-7xl mx-auto px-6 lg:px-8 py-20 lg:py-28">

        <div class="max-w-3xl">

            <span class="inline-block text-[#D7A93A] text-sm font-semibold tracking-[0.25em] uppercase mb-5">
                About Associated Scientific & Engineering
            </span>

            <h1 class="text-4xl md:text-5xl lg:text-6xl font-bold text-white leading-tight">
                Company Profile
            </h1>

            <div class="w-20 h-1 bg-[#D71920] mt-7 mb-7"></div>

            <p class="text-lg md:text-xl text-white/80 leading-relaxed">
                Manufacturers and Exporters of Material Testing Instruments
                and QA/QC Equipment.
            </p>

        </div>

    </div>
</section>


<!-- Introduction -->
<section class="py-20 lg:py-28 bg-white">

    <div class="max-w-7xl mx-auto px-6 lg:px-8">

        <div class="grid lg:grid-cols-2 gap-14 lg:gap-20 items-center">

            <div>

                <span class="text-[#D71920] font-semibold tracking-[0.2em] uppercase text-sm">
                    Who We Are
                </span>

                <h2 class="mt-4 text-3xl md:text-4xl font-bold text-[#073B66] leading-tight">
                    Scientific & Material Testing Equipment
                </h2>

                <div class="w-16 h-1 bg-[#D7A93A] mt-6 mb-7"></div>

                <p class="text-slate-600 leading-8 text-lg">
                    Associated Scientific and Engineering Works is a manufacturer
                    and exporter of material testing instruments and QA/QC
                    equipment.
                </p>

                <p class="mt-5 text-slate-600 leading-8">
                    Established in <strong class="text-[#073B66]">1975</strong>,
                    the company operates in the field of scientific and material
                    testing equipment, serving applications across construction,
                    infrastructure and civil engineering.
                </p>

            </div>


            <!-- 1975 Card -->
            <div class="relative">

                <div class="bg-slate-50 border border-slate-200 p-10 lg:p-14">

                    <div class="text-6xl lg:text-7xl font-black text-[#073B66]">
                        1975
                    </div>

                    <div class="w-16 h-1 bg-[#D71920] my-6"></div>

                    <h3 class="text-2xl font-bold text-[#073B66]">
                        Established
                    </h3>

                    <p class="mt-4 text-slate-600 leading-7">
                        A long-standing presence in scientific and material
                        testing equipment.
                    </p>

                </div>

            </div>

        </div>

    </div>

</section>


<!-- Products -->
<section class="py-20 lg:py-24 bg-slate-50">

    <div class="max-w-7xl mx-auto px-6 lg:px-8">

        <div class="text-center max-w-3xl mx-auto mb-14">

            <span class="text-[#D71920] font-semibold tracking-[0.2em] uppercase text-sm">
                Our Product Portfolio
            </span>

            <h2 class="mt-4 text-3xl md:text-4xl font-bold text-[#073B66]">
                Material Testing Solutions
            </h2>

            <p class="mt-5 text-slate-600 leading-7">
                Our product portfolio includes equipment for material testing,
                concrete testing, soil testing and asphalt/bitumen testing.
            </p>

        </div>


        <div class="grid sm:grid-cols-2 lg:grid-cols-4 gap-5">

            @php
                $products = [
                    'Compression Testing Machines',
                    'Pan Mixers',
                    'Cube Moulds',
                    'Soil Testing Instruments',
                    'Material Testing Instruments',
                    'Concrete Testing Machines',
                    'Asphalt / Bitumen Testing Equipment',
                    'Aggregate Testing Machines',
                ];
            @endphp

            @foreach($products as $product)

                <div class="bg-white border border-slate-200 p-6
                            hover:border-[#D71920] hover:-translate-y-1
                            transition duration-300">

                    <div class="w-10 h-10 flex items-center justify-center
                                bg-[#073B66] text-white mb-5">

                        <span class="text-sm font-bold">
                            {{ sprintf('%02d', $loop->iteration) }}
                        </span>

                    </div>

                    <h3 class="text-lg font-bold text-[#073B66] leading-snug">
                        {{ $product }}
                    </h3>

                </div>

            @endforeach

        </div>

    </div>

</section>


<!-- Industries -->
<section class="py-20 lg:py-28 bg-white">

    <div class="max-w-7xl mx-auto px-6 lg:px-8">

        <div class="grid lg:grid-cols-2 gap-14">

            <div>

                <span class="text-[#D71920] font-semibold tracking-[0.2em] uppercase text-sm">
                    Applications
                </span>

                <h2 class="mt-4 text-3xl md:text-4xl font-bold text-[#073B66]">
                    Industries We Serve
                </h2>

                <div class="w-16 h-1 bg-[#D7A93A] mt-6 mb-8"></div>

            </div>


            <div class="grid sm:grid-cols-2 gap-4">

                @foreach([
                    'Construction Industries',
                    'Infrastructure',
                    'Civil Engineering Colleges',
                    'NHAI Projects',
                    'Metro Projects'
                ] as $industry)

                    <div class="border-l-4 border-[#D71920] bg-slate-50 px-5 py-4">
                        <span class="font-semibold text-[#073B66]">
                            {{ $industry }}
                        </span>
                    </div>

                @endforeach

            </div>

        </div>

    </div>

</section>


<!-- CTA -->
<section class="bg-[#073B66]">

    <div class="max-w-7xl mx-auto px-6 lg:px-8 py-16">

        <div class="flex flex-col md:flex-row md:items-center
                    justify-between gap-8">

            <div>

                <span class="text-[#D7A93A] uppercase tracking-widest text-sm font-semibold">
                    Associated Scientific & Engineering
                </span>

                <h2 class="mt-3 text-2xl md:text-3xl font-bold text-white">
                    Material Testing & QA/QC Equipment
                </h2>

            </div>

            <a href="#"
               class="inline-flex items-center justify-center
                      bg-[#D71920] hover:bg-[#b9151b]
                      text-white font-semibold px-7 py-4
                      transition duration-300">

                Contact Us

            </a>

        </div>

    </div>

</section>

@endsection