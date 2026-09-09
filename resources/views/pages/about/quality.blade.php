@extends('layouts.app')

@section('title', 'Quality & Precision | Associated Scientific & Engineering')

@section('content')

<!-- Hero -->
<section class="relative overflow-hidden bg-[#073B66]">

    <div class="absolute inset-0 bg-gradient-to-r
                from-[#032B55] via-[#073B66] to-[#073B66]/80">
    </div>

    <div class="relative max-w-7xl mx-auto px-6 lg:px-8 py-20 lg:py-28">

        <span class="text-[#D7A93A] text-sm font-semibold tracking-[0.25em] uppercase">
            Quality • Precision • Testing
        </span>

        <h1 class="mt-5 text-4xl md:text-5xl lg:text-6xl font-bold text-white">
            Quality & Precision
        </h1>

        <div class="w-20 h-1 bg-[#D71920] mt-7 mb-7"></div>

        <p class="max-w-3xl text-lg md:text-xl text-white/80 leading-relaxed">
            Reliable material testing equipment designed around the needs of
            scientific testing and QA/QC applications.
        </p>

    </div>

</section>


<!-- Quality -->
<section class="py-20 lg:py-28 bg-white">

    <div class="max-w-7xl mx-auto px-6 lg:px-8">

        <div class="grid lg:grid-cols-2 gap-14 lg:gap-20">

            <div>

                <span class="text-[#D71920] font-semibold tracking-[0.2em] uppercase text-sm">
                    Our Approach
                </span>

                <h2 class="mt-4 text-3xl md:text-4xl font-bold text-[#073B66]">
                    Focused on Testing Accuracy
                </h2>

                <div class="w-16 h-1 bg-[#D7A93A] mt-6 mb-7"></div>

                <p class="text-slate-600 text-lg leading-8">
                    Material testing requires dependable equipment and
                    consistent performance. Our focus is on providing
                    scientific and material testing equipment for QA/QC
                    applications.
                </p>

                <p class="mt-5 text-slate-600 leading-8">
                    The product portfolio covers key areas including soil,
                    concrete, aggregate and asphalt/bitumen testing.
                </p>

            </div>


            <div class="grid sm:grid-cols-2 gap-5">

                @foreach([
                    [
                        'title' => 'Quality',
                        'text' => 'Equipment focused on material testing and QA/QC requirements.'
                    ],
                    [
                        'title' => 'Precision',
                        'text' => 'Testing equipment designed for scientific and engineering applications.'
                    ],
                    [
                        'title' => 'Reliability',
                        'text' => 'Solutions intended for demanding construction and infrastructure environments.'
                    ],
                    [
                        'title' => 'Experience',
                        'text' => 'A company established in 1975 with decades of industry presence.'
                    ],
                ] as $item)

                    <div class="bg-slate-50 border border-slate-200 p-7
                                hover:border-[#D71920]
                                transition duration-300">

                        <div class="w-11 h-11 flex items-center justify-center
                                    bg-[#073B66] text-white font-bold mb-5">
                            ✓
                        </div>

                        <h3 class="text-xl font-bold text-[#073B66]">
                            {{ $item['title'] }}
                        </h3>

                        <p class="mt-3 text-slate-600 leading-7 text-sm">
                            {{ $item['text'] }}
                        </p>

                    </div>

                @endforeach

            </div>

        </div>

    </div>

</section>


<!-- Testing Areas -->
<section class="py-20 lg:py-24 bg-slate-50">

    <div class="max-w-7xl mx-auto px-6 lg:px-8">

        <div class="text-center max-w-3xl mx-auto mb-14">

            <span class="text-[#D71920] font-semibold tracking-[0.2em] uppercase text-sm">
                Testing Areas
            </span>

            <h2 class="mt-4 text-3xl md:text-4xl font-bold text-[#073B66]">
                Equipment Across Key Testing Categories
            </h2>

        </div>


        <div class="grid sm:grid-cols-2 lg:grid-cols-4 gap-5">

            @foreach([
                'Soil Testing',
                'Concrete Testing',
                'Aggregate Testing',
                'Asphalt / Bitumen Testing'
            ] as $category)

                <div class="group bg-white border border-slate-200
                            p-7 hover:-translate-y-1
                            hover:border-[#D71920]
                            transition duration-300">

                    <div class="flex items-center justify-between">

                        <span class="text-3xl font-black text-slate-200
                                     group-hover:text-[#D71920]
                                     transition">
                            {{ sprintf('%02d', $loop->iteration) }}
                        </span>

                        <span class="text-[#073B66] text-xl">
                            →
                        </span>

                    </div>

                    <h3 class="mt-7 text-lg font-bold text-[#073B66]">
                        {{ $category }}
                    </h3>

                </div>

            @endforeach

        </div>

    </div>

</section>


<!-- Products -->
<section class="py-20 lg:py-28 bg-white">

    <div class="max-w-7xl mx-auto px-6 lg:px-8">

        <div class="grid lg:grid-cols-2 gap-14 items-center">

            <div>

                <span class="text-[#D71920] font-semibold tracking-[0.2em] uppercase text-sm">
                    Material Testing
                </span>

                <h2 class="mt-4 text-3xl md:text-4xl font-bold text-[#073B66]">
                    Equipment for QA/QC Applications
                </h2>

                <div class="w-16 h-1 bg-[#D7A93A] mt-6 mb-7"></div>

                <p class="text-slate-600 leading-8">
                    Our product range includes compression testing machines,
                    pan mixers, cube moulds, soil testing instruments,
                    concrete testing machines, asphalt/bitumen testing
                    equipment and aggregate testing machines.
                </p>

            </div>


            <div class="bg-[#073B66] p-8 lg:p-12">

                <div class="text-[#D7A93A] text-sm font-bold tracking-widest uppercase">
                    Associated Scientific & Engineering
                </div>

                <div class="mt-5 text-3xl font-bold text-white">
                    Scientific.
                    <br>
                    Precise.
                    <br>
                    Reliable.
                </div>

                <div class="w-12 h-1 bg-[#D71920] mt-7"></div>

            </div>

        </div>

    </div>

</section>


<!-- CTA -->
<section class="bg-[#032B55] py-16">

    <div class="max-w-7xl mx-auto px-6 lg:px-8
                flex flex-col md:flex-row
                items-center justify-between gap-7">

        <div>

            <h2 class="text-2xl md:text-3xl font-bold text-white">
                Looking for Material Testing Equipment?
            </h2>

            <p class="mt-2 text-white/70">
                Explore our testing equipment and product categories.
            </p>

        </div>

        <a href="{{ route('products') }}"
           class="bg-[#D71920] hover:bg-[#b9151b]
                  text-white font-semibold px-7 py-4
                  transition duration-300">

            View Products

        </a>

    </div>

</section>

@endsection