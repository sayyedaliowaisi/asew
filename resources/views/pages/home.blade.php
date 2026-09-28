@extends('layouts.app')

@section('title', 'Associated Scientific & Engineering | Testing Equipment')

@section('content')


{{-- =========================================================
     ASEW HERO SLIDER — ADMIN CONTROLLED
========================================================= --}}

@php
    $homeSettings = $homepageSettings ?? null;
    $heroEnabled = $homeSettings ? (bool) $homeSettings->hero_enabled : true;
    $sliderInterval = (int) ($homeSettings?->slider_interval ?? 5000);
    if ($sliderInterval < 2000 || $sliderInterval > 20000) { $sliderInterval = 5000; }
    $heroSlides = collect($homepageSlides ?? [])->map(function ($slide) {
        return ['image' => $slide->image, 'alt' => $slide->alt_text ?: 'ASEW Homepage Slide'];
    })->values();
@endphp




@if($heroEnabled && $heroSlides->isNotEmpty())

<section
    class="asew-hero-slider relative w-full overflow-hidden bg-[#062653]"
    data-interval="{{ $sliderInterval }}"
>
    <div class="asew-hero-track relative w-full aspect-[16/6] sm:aspect-[16/5.8] lg:aspect-[16/5.3] xl:aspect-[16/5]">
        @foreach($heroSlides as $index => $slide)
            <div
                class="asew-hero-slide absolute inset-0 transition-opacity duration-700 {{ $index === 0 ? 'opacity-100 z-10' : 'opacity-0 z-0' }}"
                data-slide="{{ $index }}"
            >
                <img
                    src="{{ asset($slide['image']) }}"
                    alt="{{ $slide['alt'] }}"
                    class="block w-full h-full object-cover object-center"
                    @if($index === 0) fetchpriority="high" @else loading="lazy" @endif
                >
            </div>
        @endforeach
    </div>

    @if($heroSlides->count() > 1)
        <button type="button" class="asew-hero-prev absolute z-30 left-2 sm:left-4 top-1/2 -translate-y-1/2 w-9 h-9 sm:w-11 sm:h-11 flex items-center justify-center rounded-full bg-black/30 hover:bg-[#E31E24] border border-white/30 text-white backdrop-blur-sm transition duration-300" aria-label="Previous slide">
            <svg class="w-4 h-4 sm:w-5 sm:h-5" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M15 18l-6-6 6-6"/></svg>
        </button>

        <button type="button" class="asew-hero-next absolute z-30 right-2 sm:right-4 top-1/2 -translate-y-1/2 w-9 h-9 sm:w-11 sm:h-11 flex items-center justify-center rounded-full bg-black/30 hover:bg-[#E31E24] border border-white/30 text-white backdrop-blur-sm transition duration-300" aria-label="Next slide">
            <svg class="w-4 h-4 sm:w-5 sm:h-5" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M9 6l6 6-6 6"/></svg>
        </button>

        <div class="absolute z-30 bottom-3 sm:bottom-4 left-1/2 -translate-x-1/2 flex items-center gap-2 px-3 py-2 rounded-full bg-black/20 backdrop-blur-sm">
            @foreach($heroSlides as $index => $slide)
                <button type="button" class="asew-hero-dot h-2 rounded-full transition-all duration-300 {{ $index === 0 ? 'w-7 bg-[#E31E24]' : 'w-2 bg-white/80' }}" data-index="{{ $index }}" aria-label="Go to slide {{ $index + 1 }}"></button>
            @endforeach
        </div>

        <div class="hidden sm:flex absolute z-30 right-5 bottom-4 items-center gap-1 text-[10px] font-bold tracking-wider text-white bg-black/25 backdrop-blur-sm px-2.5 py-1.5 rounded-full">
            <span class="asew-hero-current">01</span>
            <span class="text-white/50">/</span>
            <span>{{ str_pad((string) $heroSlides->count(), 2, '0', STR_PAD_LEFT) }}</span>
        </div>
    @endif
</section>

<script>
document.addEventListener('DOMContentLoaded', function () {
    const slider = document.querySelector('.asew-hero-slider');
    if (!slider) return;

    const slides = Array.from(slider.querySelectorAll('.asew-hero-slide'));
    if (!slides.length) return;

    const dots = Array.from(slider.querySelectorAll('.asew-hero-dot'));
    const previousButton = slider.querySelector('.asew-hero-prev');
    const nextButton = slider.querySelector('.asew-hero-next');
    const currentCounter = slider.querySelector('.asew-hero-current');

    let activeIndex = 0;
    let interval = parseInt(slider.dataset.interval || '5000', 10);
    if (Number.isNaN(interval) || interval < 2000 || interval > 20000) interval = 5000;
    let timer = null;

    function showSlide(index) {
        if (index < 0) index = slides.length - 1;
        if (index >= slides.length) index = 0;
        activeIndex = index;

        slides.forEach((slide, slideIndex) => {
            const active = slideIndex === activeIndex;
            slide.classList.toggle('opacity-100', active);
            slide.classList.toggle('z-10', active);
            slide.classList.toggle('opacity-0', !active);
            slide.classList.toggle('z-0', !active);
        });

        dots.forEach((dot, dotIndex) => {
            const active = dotIndex === activeIndex;
            dot.classList.toggle('w-7', active);
            dot.classList.toggle('bg-[#E31E24]', active);
            dot.classList.toggle('w-2', !active);
            dot.classList.toggle('bg-white/80', !active);
        });

        if (currentCounter) currentCounter.textContent = String(activeIndex + 1).padStart(2, '0');
    }

    function nextSlide() { showSlide(activeIndex + 1); }
    function previousSlide() { showSlide(activeIndex - 1); }
    function stopAutoplay() { if (timer) { clearInterval(timer); timer = null; } }
    function startAutoplay() {
        stopAutoplay();
        if (slides.length > 1) timer = setInterval(nextSlide, interval);
    }

    previousButton?.addEventListener('click', () => { previousSlide(); startAutoplay(); });
    nextButton?.addEventListener('click', () => { nextSlide(); startAutoplay(); });
    dots.forEach(dot => dot.addEventListener('click', () => { showSlide(parseInt(dot.dataset.index, 10)); startAutoplay(); }));
    slider.addEventListener('mouseenter', stopAutoplay);
    slider.addEventListener('mouseleave', startAutoplay);

    let touchStartX = 0;
    slider.addEventListener('touchstart', event => { touchStartX = event.changedTouches[0].screenX; }, { passive: true });
    slider.addEventListener('touchend', event => {
        const distance = touchStartX - event.changedTouches[0].screenX;
        if (Math.abs(distance) < 50) return;
        distance > 0 ? nextSlide() : previousSlide();
        startAutoplay();
    }, { passive: true });

    showSlide(0);
    startAutoplay();
});
</script>

@endif


@if($homeSettings?->products_enabled ?? true)

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
                    {{ $homeSettings?->products_badge ?: 'OUR PRODUCTS' }}
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
                {{ $homeSettings?->products_heading ?: 'WIDE RANGE OF TESTING EQUIPMENT' }}
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
                {{ $homeSettings?->products_description ?: 'Precision-engineered testing instruments and laboratory equipment for reliable results across diverse applications.' }}
            </p>

        </div>


{{-- =================================================
     DYNAMIC PRODUCT CATEGORY GRID
================================================== --}}

@php
    $dynamicProductCategories =
        collect($homepageProductCategories ?? []);
@endphp


@if($dynamicProductCategories->isNotEmpty())

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

        @foreach($dynamicProductCategories as $productCategory)

            <a
                href="{{ route(
                    'products',
                    ['category' => $productCategory->category_slug]
                ) }}"
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

                {{-- IMAGE --}}
                <div
                    class="relative
                           h-[130px]
                           sm:h-[140px]
                           lg:h-[145px]
                           overflow-hidden
                           bg-slate-100"
                >

                    @if($productCategory->image)

                        <img
                            src="{{ asset($productCategory->image) }}"
                            alt="{{ $productCategory->title }}"
                            class="absolute inset-0
                                   w-full h-full
                                   object-cover
                                   object-center
                                   transition-transform
                                   duration-500
                                   group-hover:scale-105"
                            loading="lazy"
                        >

                    @else

                        <div
                            class="absolute inset-0
                                   flex
                                   items-center
                                   justify-center
                                   bg-slate-100
                                   text-[10px]
                                   font-bold
                                   uppercase
                                   tracking-wide
                                   text-slate-400"
                        >
                            No Image
                        </div>

                    @endif

                </div>


                {{-- CONTENT --}}
                <div class="px-3 pb-3">

                    <h3
                        class="text-[11px]
                               sm:text-[12px]
                               font-extrabold
                               leading-[1.25]
                               uppercase
                               text-[#073B66]"
                    >
                        {{ $productCategory->title }}
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

                        {{
                            $productCategory->button_text
                                ?: 'View Products'
                        }}

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

        @endforeach

    </div>


@else

    {{-- =================================================
         EMPTY STATE
    ================================================== --}}

    <div
        class="border
               border-dashed
               border-slate-300
               bg-slate-50
               px-6
               py-12
               text-center"
    >

        <p
            class="text-sm
                   font-semibold
                   text-slate-500"
        >
            Product categories are being updated.
        </p>

    </div>

@endif


        {{-- =================================================
             VIEW ALL PRODUCTS BUTTON
        ================================================== --}}

        <div class="flex justify-center mt-8 sm:mt-10">

            <a
                href="{{ route('products') }}"
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



@endif

{{-- =========================================================
     LABORATORY SOLUTIONS + MANUFACTURING EXCELLENCE
========================================================= --}}

<section class="bg-white">

    {{-- =====================================================
         PART 1 — COMPLETE LAB SOLUTIONS
         ADMIN CONTROLLED CONTENT + DYNAMIC CARDS
    ====================================================== --}}

    @if($homeSettings?->lab_enabled ?? true)

        @php
            $dynamicLabCards = collect($homepageLabCards ?? []);
        @endphp

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
                            {{ $homeSettings?->lab_badge ?: 'Complete Lab Solutions' }}
                        </span>

                        <h2
                            class="text-2xl sm:text-3xl lg:text-[32px]
                                   leading-tight
                                   font-bold
                                   text-[#073B66]
                                   uppercase"
                        >
                            {{ $homeSettings?->lab_heading ?: 'From Individual Instruments to Complete Laboratory Setups' }}
                        </h2>

                        <p
                            class="mt-4
                                   text-sm
                                   leading-6
                                   text-gray-600
                                   max-w-md"
                        >
                            {{ $homeSettings?->lab_description ?: 'We provide complete scientific and engineering testing solutions including equipment supply, installation, calibration, training and after-sales support.' }}
                        </p>

                        <a
                            href="{{ filled($homeSettings?->lab_button_url) ? url($homeSettings->lab_button_url) : route('home') . '#products' }}"
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
                            {{ $homeSettings?->lab_button_text ?: 'Explore Solutions' }}

                            <span class="text-base">→</span>
                        </a>

                    </div>


                    {{-- RIGHT DYNAMIC LABORATORY CARDS --}}
                    <div class="lg:col-span-8">

                        @if($dynamicLabCards->isNotEmpty())

                            <div
                                class="grid
                                       grid-cols-2
                                       sm:grid-cols-3
                                       lg:grid-cols-4
                                       gap-2.5"
                            >

                                @foreach($dynamicLabCards as $labCard)

                                    @php
                                        $labUrl = filled($labCard->button_url)
                                            ? url($labCard->button_url)
                                            : route('home') . '#products';
                                    @endphp

                                    <a
                                        href="{{ $labUrl }}"
                                        class="group relative
                                               h-[145px] sm:h-[160px]
                                               overflow-hidden
                                               rounded-md
                                               bg-[#073B66]
                                               shadow-sm
                                               hover:shadow-lg
                                               transition-all duration-300"
                                    >

                                        @if($labCard->image)

                                            <img
                                                src="{{ asset($labCard->image) }}"
                                                alt="{{ trim($labCard->title . ' ' . ($labCard->subtitle ?? '')) }}"
                                                class="absolute inset-0
                                                       w-full h-full
                                                       object-cover
                                                       transition duration-500
                                                       group-hover:scale-110"
                                                loading="lazy"
                                            >

                                        @else

                                            <div
                                                class="absolute inset-0
                                                       flex items-center justify-center
                                                       bg-slate-200
                                                       text-[10px]
                                                       font-bold uppercase
                                                       text-slate-500"
                                            >
                                                No Image
                                            </div>

                                        @endif


                                        <div
                                            class="absolute inset-0
                                                   bg-gradient-to-t
                                                   from-[#073B66]
                                                   via-[#073B66]/40
                                                   to-transparent"
                                        ></div>


                                        <div class="absolute bottom-0 left-0 right-0 p-3">

                                            <h3
                                                class="text-white
                                                       text-[11px] sm:text-xs
                                                       font-bold uppercase
                                                       leading-4"
                                            >
                                                {{ $labCard->title }}

                                                @if($labCard->subtitle)
                                                    <span class="block text-[#F2B84B]">
                                                        {{ $labCard->subtitle }}
                                                    </span>
                                                @endif
                                            </h3>

                                        </div>

                                    </a>

                                @endforeach

                            </div>

                        @else

                            <div
                                class="min-h-[160px]
                                       flex items-center justify-center
                                       rounded-md
                                       border border-dashed border-slate-300
                                       bg-white
                                       px-6 py-8
                                       text-center"
                            >
                                <p class="text-sm text-slate-500">
                                    Laboratory solutions are being updated.
                                </p>
                            </div>

                        @endif

                    </div>

                </div>

            </div>

        </div>

    @endif

    {{-- =====================================================
         PART 2 — MANUFACTURING EXCELLENCE
         DYNAMIC ADMIN-CONTROLLED GALLERY
    ====================================================== --}}

    @php
        $dynamicManufacturingImages = collect($homepageManufacturingImages ?? []);
    @endphp

    @if($homeSettings?->manufacturing_enabled ?? true)

    <div class="py-12 lg:py-14">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid grid-cols-1 lg:grid-cols-12 gap-8 lg:gap-10 items-center">

                {{-- DYNAMIC IMAGE COLLAGE --}}
                <div class="lg:col-span-6">
                    @if($dynamicManufacturingImages->isNotEmpty())
                        <div class="grid grid-cols-2 gap-2.5">
                            @foreach($dynamicManufacturingImages as $index => $manufacturingImage)
                                <div class="overflow-hidden rounded-md bg-slate-100 {{ $dynamicManufacturingImages->count() === 1 ? 'col-span-2 h-[300px] sm:h-[390px]' : 'h-[150px] sm:h-[190px]' }}">
                                    <img src="{{ asset($manufacturingImage->image) }}" alt="{{ $manufacturingImage->alt_text ?: 'ASEW Manufacturing Facility' }}" class="w-full h-full object-cover hover:scale-105 transition duration-500" @if($index > 1) loading="lazy" @endif>
                                </div>
                            @endforeach
                        </div>
                    @else
                        {{-- Safe legacy fallback until gallery has records --}}
                        <div class="grid grid-cols-2 gap-2.5">
                            @for($i = 1; $i <= 4; $i++)
                                @php
                                    $legacyField = "manufacturing_image_{$i}";
                                    $legacyImage = !empty($homeSettings?->{$legacyField}) ? $homeSettings->{$legacyField} : "images/manufacturing-{$i}.jpg";
                                @endphp
                                <div class="h-[150px] sm:h-[190px] overflow-hidden rounded-md bg-slate-100">
                                    <img src="{{ asset($legacyImage) }}" alt="ASEW Manufacturing Facility {{ $i }}" class="w-full h-full object-cover hover:scale-105 transition duration-500" @if($i > 2) loading="lazy" @endif>
                                </div>
                            @endfor
                        </div>
                    @endif
                </div>

                {{-- RIGHT CONTENT --}}
                <div class="lg:col-span-6">
                    <span class="block text-[#E31E24] text-xs sm:text-sm font-bold uppercase tracking-wide mb-3">{{ $homeSettings?->manufacturing_badge ?: 'Manufacturing Excellence' }}</span>
                    <h2 class="text-2xl sm:text-3xl lg:text-[32px] leading-tight font-bold text-[#073B66] uppercase">{{ $homeSettings?->manufacturing_heading ?: 'Engineered With Precision. Built For Performance.' }}</h2>
                    <p class="mt-4 text-sm leading-6 text-gray-600 max-w-xl">{{ $homeSettings?->manufacturing_description ?: 'Associated Scientific & Engineering combines advanced manufacturing technology with skilled engineering to deliver reliable, accurate and durable testing equipment.' }}</p>

                    @php
                        $manufacturingFeatureFallbacks = [
                            1 => 'State-of-the-art manufacturing quality',
                            2 => 'Precision engineering & rigorous quality control',
                            3 => 'Modern machinery & technology',
                            4 => 'Experienced & skilled workforce',
                        ];
                    @endphp
                    <div class="mt-5 space-y-2.5">
                        @for($i = 1; $i <= 4; $i++)
                            @php
                                $featureField = "manufacturing_feature_{$i}";
                                $featureText = $homeSettings?->{$featureField} ?: $manufacturingFeatureFallbacks[$i];
                            @endphp
                            @if($featureText)
                                <div class="flex items-start gap-2 text-sm text-gray-700"><span class="text-[#E31E24] font-bold">●</span><span>{{ $featureText }}</span></div>
                            @endif
                        @endfor
                    </div>

                    <a href="{{ $homeSettings?->manufacturing_button_url ? url($homeSettings->manufacturing_button_url) : url('/manufacturing') }}" class="inline-flex items-center gap-3 mt-6 bg-[#073B66] hover:bg-[#E31E24] text-white px-5 py-3 text-xs font-bold uppercase transition duration-300">
                        {{ $homeSettings?->manufacturing_button_text ?: 'Our Manufacturing' }} <span class="text-base">→</span>
                    </a>
                </div>
            </div>
        </div>
    </div>

    @endif


</section>


@php
    $dynamicStats = collect($homepageStats ?? []);
@endphp

@if(($homeSettings?->stats_enabled ?? true) && $dynamicStats->isNotEmpty())

{{-- =========================================================
     TRUSTED WORLDWIDE / COMPANY STATS — ADMIN CONTROLLED
========================================================= --}}

<section class="relative overflow-hidden bg-[#062653] text-white">
    <div class="absolute inset-0 opacity-[0.08]" style="background-image: radial-gradient(circle at 1px 1px, #ffffff 1px, transparent 1px); background-size: 22px 22px;"></div>

    <div class="relative max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center pt-7 pb-5">
            <p class="text-[#E31E24] text-[11px] sm:text-xs font-bold uppercase tracking-wider mb-1">
                {{ $homeSettings?->stats_badge ?: 'Trusted Worldwide' }}
            </p>
            <h2 class="text-white text-sm sm:text-base md:text-lg font-semibold">
                {{ $homeSettings?->stats_heading ?: 'Delivering Quality Testing Solutions Across The Globe' }}
            </h2>
        </div>

        <div class="grid grid-cols-2 sm:grid-cols-3 lg:grid-cols-5 pb-7">
            @foreach($dynamicStats as $index => $stat)
                <div class="group flex items-center justify-center gap-3 px-3 py-4 {{ !$loop->last ? 'lg:border-r lg:border-white/15' : '' }}">
                    <div class="shrink-0 w-11 h-11 sm:w-12 sm:h-12 rounded-full border border-[#D9A441] flex items-center justify-center">
                        @switch($index % 5)
                            @case(0)
                                <svg class="w-6 h-6 text-[#D9A441]" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.5"><circle cx="12" cy="12" r="9"/><path stroke-linecap="round" stroke-linejoin="round" d="M12 7v5l3 2"/></svg>
                                @break
                            @case(1)
                                <svg class="w-6 h-6 text-[#D9A441]" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.5"><path stroke-linecap="round" stroke-linejoin="round" d="M3 7.5 12 3l9 4.5-9 4.5-9-4.5ZM3 12.5 12 17l9-4.5M3 17 12 21l9-4"/></svg>
                                @break
                            @case(2)
                                <svg class="w-6 h-6 text-[#D9A441]" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.5"><circle cx="12" cy="12" r="9"/><path stroke-linecap="round" stroke-linejoin="round" d="M3 12h18M12 3c2.5 2.5 3.5 5.5 3.5 9s-1 6.5-3.5 9c-2.5-2.5-3.5-5.5-3.5-9S9.5 5.5 12 3Z"/></svg>
                                @break
                            @case(3)
                                <svg class="w-6 h-6 text-[#D9A441]" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.5"><path stroke-linecap="round" stroke-linejoin="round" d="M9 3h6M10 3v6.5L5 18a2 2 0 0 0 1.8 3h10.4A2 2 0 0 0 19 18l-5-8.5V3M7.5 16h9"/></svg>
                                @break
                            @default
                                <svg class="w-6 h-6 text-[#D9A441]" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.5"><circle cx="12" cy="12" r="9"/><path stroke-linecap="round" stroke-linejoin="round" d="M12 7v5l3 2M5 5l3 3M19 5l-3 3"/></svg>
                        @endswitch
                    </div>
                    <div>
                        <div class="text-[#D9A441] text-xl sm:text-2xl font-bold leading-none">{{ $stat->value }}</div>
                        <div class="text-gray-200 text-[10px] sm:text-xs leading-4 mt-1">{{ $stat->label }}</div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</section>

@endif

{{-- =========================================================
     WHY ASEW SECTION — ADMIN CONTROLLED
========================================================= --}}

@php
    $dynamicReasons = collect($homepageReasons ?? []);
@endphp

@if(
    ($homeSettings?->why_enabled ?? true)
    && $dynamicReasons->isNotEmpty()
)

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
                {{ $homeSettings?->why_badge ?: 'Why ASEW' }}
            </p>

            <h2
                class="text-[#062653]
                       text-2xl sm:text-3xl lg:text-[32px]
                       font-bold
                       uppercase
                       leading-tight"
            >
                {{ $homeSettings?->why_heading ?: 'The Reasons Industries Choose ASEW' }}
            </h2>

        </div>


        {{-- =================================================
             DYNAMIC REASONS
        ================================================== --}}

        <div
            class="grid
                   grid-cols-1
                   sm:grid-cols-2
                   lg:grid-cols-3
                   xl:grid-cols-6
                   gap-4"
        >

            @foreach($dynamicReasons as $index => $reason)

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

                    {{-- ICON --}}
                    <div
                        class="mx-auto mb-4
                               w-12 h-12
                               flex items-center
                               justify-center
                               text-[#062653]
                               border border-[#062653]/20
                               rounded-full
                               group-hover:bg-[#062653]
                               group-hover:text-white
                               transition duration-300"
                    >

                        @switch($index % 6)

                            {{-- 01 --}}
                            @case(0)

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

                                @break


                            {{-- 02 --}}
                            @case(1)

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

                                @break


                            {{-- 03 --}}
                            @case(2)

                                <svg
                                    class="w-6 h-6"
                                    fill="none"
                                    viewBox="0 0 24 24"
                                    stroke="currentColor"
                                    stroke-width="1.6"
                                >
                                    <circle
                                        cx="12"
                                        cy="12"
                                        r="9"
                                    />

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

                                @break


                            {{-- 04 --}}
                            @case(3)

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

                                @break


                            {{-- 05 --}}
                            @case(4)

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

                                @break


                            {{-- 06 --}}
                            @default

                                <svg
                                    class="w-6 h-6"
                                    fill="none"
                                    viewBox="0 0 24 24"
                                    stroke="currentColor"
                                    stroke-width="1.6"
                                >
                                    <circle
                                        cx="12"
                                        cy="12"
                                        r="9"
                                    />

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

                        @endswitch

                    </div>


                    {{-- TITLE --}}
                    <h3
                        class="text-[#111827]
                               font-bold
                               text-sm
                               leading-5
                               min-h-[40px]"
                    >
                        {{ $reason->title }}
                    </h3>


                    {{-- DESCRIPTION --}}
                    <p
                        class="mt-3
                               text-gray-600
                               text-[11px]
                               leading-5"
                    >
                        {{ $reason->description }}
                    </p>

                </div>

            @endforeach

        </div>

    </div>

</section>

@endif


{{-- =========================================================
     CTA SECTION
========================================================= --}}

@if($homeSettings?->cta_enabled ?? true)

<section class="bg-white pb-12 sm:pb-14 lg:pb-16">

    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">

        <div
            class="relative
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
                        radial-gradient(
                            circle at 1px 1px,
                            #ffffff 1px,
                            transparent 1px
                        );
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

                {{-- LEFT --}}
                <div
                    class="flex items-center
                           gap-4
                           text-center
                           sm:text-left"
                >

                    <div
                        class="hidden sm:flex
                               shrink-0
                               w-11 h-11
                               rounded-full
                               border border-white/30
                               items-center
                               justify-center"
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
                            {{
                                $homeSettings?->cta_heading
                                ?: 'Looking for the Right Testing Solution?'
                            }}
                        </h3>


                        <p
                            class="text-gray-300
                                   text-xs sm:text-sm
                                   mt-1"
                        >
                            {{
                                $homeSettings?->cta_description
                                ?: 'Our experts are ready to help you choose the right equipment for your needs.'
                            }}
                        </p>

                    </div>

                </div>


                {{-- BUTTON --}}
                <a
                    href="{{
                        $homeSettings?->cta_button_url
                            ? url($homeSettings->cta_button_url)
                            : url('/request-quote')
                    }}"
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

                    {{
                        $homeSettings?->cta_button_text
                        ?: 'Request a Quote'
                    }}

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

@endif


</section>


@endsection