@extends('layouts.app')

@section('title', '50+ Years of Excellence | Associated Scientific & Engineering')

@section('content')

<!-- Hero -->
<section class="bg-[#073B66]">

    <div class="max-w-7xl mx-auto px-6 lg:px-8 py-20 lg:py-28">

        <span class="text-[#D7A93A] text-sm font-semibold tracking-[0.25em] uppercase">
            Since 1975
        </span>

        <h1 class="mt-5 text-4xl md:text-5xl lg:text-6xl font-bold text-white">
            50+ Years of Excellence
        </h1>

        <div class="w-20 h-1 bg-[#D71920] mt-7 mb-7"></div>

        <p class="max-w-3xl text-lg md:text-xl text-white/80 leading-relaxed">
            Decades of experience in scientific and material testing equipment,
            with a focus on testing requirements across construction,
            infrastructure and civil engineering.
        </p>

    </div>

</section>


<!-- Main -->
<section class="py-20 lg:py-28 bg-white">

    <div class="max-w-7xl mx-auto px-6 lg:px-8">

        <div class="grid lg:grid-cols-3 gap-8">

            <!-- 1975 -->
            <div class="border border-slate-200 p-8 lg:p-10">

                <span class="text-5xl font-black text-[#073B66]">
                    1975
                </span>

                <div class="w-12 h-1 bg-[#D71920] my-6"></div>

                <h3 class="text-xl font-bold text-[#073B66]">
                    Foundation
                </h3>

                <p class="mt-4 text-slate-600 leading-7">
                    Associated Scientific and Engineering Works was established
                    in 1975.
                </p>

            </div>


            <!-- Expertise -->
            <div class="border border-slate-200 p-8 lg:p-10">

                <span class="text-5xl font-black text-[#073B66]">
                    50+
                </span>

                <div class="w-12 h-1 bg-[#D71920] my-6"></div>

                <h3 class="text-xl font-bold text-[#073B66]">
                    Years of Experience
                </h3>

                <p class="mt-4 text-slate-600 leading-7">
                    More than five decades of presence in the scientific and
                    material testing equipment field.
                </p>

            </div>


            <!-- Global -->
            <div class="border border-slate-200 p-8 lg:p-10">

                <span class="text-5xl font-black text-[#073B66]">
                    Global
                </span>

                <div class="w-12 h-1 bg-[#D71920] my-6"></div>

                <h3 class="text-xl font-bold text-[#073B66]">
                    Markets
                </h3>

                <p class="mt-4 text-slate-600 leading-7">
                    The company deals in markets including Nigeria, Ethiopia,
                    Latin America, Dubai and Europe.
                </p>

            </div>

        </div>

    </div>

</section>


<!-- Experience -->
<section class="py-20 lg:py-28 bg-slate-50">

    <div class="max-w-7xl mx-auto px-6 lg:px-8">

        <div class="max-w-3xl">

            <span class="text-[#D71920] font-semibold tracking-[0.2em] uppercase text-sm">
                Our Experience
            </span>

            <h2 class="mt-4 text-3xl md:text-4xl font-bold text-[#073B66]">
                Built Around Material Testing
            </h2>

            <div class="w-16 h-1 bg-[#D7A93A] mt-6 mb-7"></div>

            <p class="text-slate-600 text-lg leading-8">
                Associated Scientific and Engineering Works focuses on
                scientific and material testing equipment for applications
                related to construction and infrastructure.
            </p>

            <p class="mt-5 text-slate-600 leading-8">
                Its product portfolio covers compression testing machines,
                pan mixers, cube moulds, soil testing instruments, concrete
                testing machines, asphalt/bitumen testing equipment and
                aggregate testing machines.
            </p>

        </div>


        <div class="mt-14 grid md:grid-cols-2 gap-5">

            @foreach([
                'Construction Industries',
                'Infrastructure',
                'Civil Engineering Colleges',
                'NHAI Projects',
                'Metro Projects'
            ] as $industry)

                <div class="flex items-center gap-4 bg-white border border-slate-200 p-5">

                    <div class="w-2 h-10 bg-[#D71920] shrink-0"></div>

                    <span class="font-semibold text-[#073B66]">
                        {{ $industry }}
                    </span>

                </div>

            @endforeach

        </div>

    </div>

</section>


<!-- Closing -->
<section class="py-20 bg-[#073B66]">

    <div class="max-w-4xl mx-auto px-6 text-center">

        <h2 class="text-3xl md:text-4xl font-bold text-white">
            Experience That Supports Testing
        </h2>

        <p class="mt-5 text-white/75 leading-8">
            With its foundation dating back to 1975, Associated Scientific and
            Engineering Works continues to operate in the material testing
            equipment sector.
        </p>

    </div>

</section>

@endsection