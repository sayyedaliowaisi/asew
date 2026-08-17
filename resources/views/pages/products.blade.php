@extends('layouts.app')

@section('title', 'Products | Associated Scientific & Engineering')

@section('content')

{{-- =========================================================
     PRODUCTS HERO
========================================================= --}}

<section class="relative bg-[#073B66] overflow-hidden">

    {{-- Decorative elements --}}
    <div
        class="absolute right-0 top-0
               w-[500px] h-[500px]
               rounded-full
               border border-white/[0.06]
               translate-x-1/3 -translate-y-1/3"
    ></div>

    <div
        class="absolute right-32 bottom-0
               w-40 h-40
               border border-[#E31E24]/30
               translate-y-1/2"
    ></div>


    <div
        class="relative z-10
               max-w-7xl mx-auto
               px-5 sm:px-8 lg:px-10
               py-20 lg:py-28"
    >

        <div class="max-w-3xl">

            <div class="flex items-center gap-3 mb-5">

                <span
                    class="w-10 h-[2px]
                           bg-[#E31E24]"
                ></span>

                <span
                    class="text-[#E31E24]
                           text-xs font-bold
                           uppercase
                           tracking-[0.22em]"
                >
                    Our Products
                </span>

            </div>

            <h1
                class="text-white
                       text-4xl sm:text-5xl
                       lg:text-7xl
                       font-bold
                       leading-tight"
            >
                Testing & measurement
                <span class="text-[#E31E24]">
                    equipment.
                </span>
            </h1>

            <p
                class="mt-6
                       text-blue-100/70
                       text-base lg:text-lg
                       leading-8
                       max-w-2xl"
            >
                Explore professional testing and measurement
                equipment designed for scientific, engineering,
                laboratory and industrial applications.
            </p>

        </div>

    </div>

</section>


{{-- =========================================================
     PRODUCT CATALOGUE
========================================================= --}}

<section class="bg-[#F6F8FA] py-16 lg:py-24">

    <div class="max-w-7xl mx-auto px-5 sm:px-8 lg:px-10">

        {{-- Section heading --}}
        <div
            class="flex flex-col
                   lg:flex-row
                   lg:items-end
                   lg:justify-between
                   gap-6 mb-12"
        >

            <div>

                <p
                    class="text-[#E31E24]
                           text-xs font-bold
                           uppercase
                           tracking-[0.2em]"
                >
                    Product Catalogue
                </p>

                <h2
                    class="mt-3
                           text-[#073B66]
                           text-3xl sm:text-4xl
                           font-bold"
                >
                    Explore our equipment
                </h2>

            </div>

            <p
                class="text-gray-500
                       text-sm leading-6
                       max-w-md"
            >
                Browse our range of testing equipment and
                find the right solution for your application.
            </p>

        </div>


        {{-- Categories --}}
        <div
            class="flex flex-wrap
                   gap-3 mb-10"
        >

            <button
                type="button"
                class="px-5 py-3
                       bg-[#073B66]
                       text-white
                       text-sm
                       font-semibold"
            >
                All Products
            </button>

            <button
                type="button"
                class="px-5 py-3
                       bg-white
                       border border-gray-200
                       text-[#073B66]
                       text-sm
                       font-semibold
                       hover:border-[#073B66]
                       transition"
            >
                Material Testing
            </button>

            <button
                type="button"
                class="px-5 py-3
                       bg-white
                       border border-gray-200
                       text-[#073B66]
                       text-sm
                       font-semibold
                       hover:border-[#073B66]
                       transition"
            >
                Civil Engineering
            </button>

            <button
                type="button"
                class="px-5 py-3
                       bg-white
                       border border-gray-200
                       text-[#073B66]
                       text-sm
                       font-semibold
                       hover:border-[#073B66]
                       transition"
            >
                Laboratory
            </button>

            <button
                type="button"
                class="px-5 py-3
                       bg-white
                       border border-gray-200
                       text-[#073B66]
                       text-sm
                       font-semibold
                       hover:border-[#073B66]
                       transition"
            >
                Industrial Testing
            </button>

        </div>


        {{-- Products --}}
        <div
            class="grid grid-cols-1
                   sm:grid-cols-2
                   lg:grid-cols-3
                   gap-6"
        >

            {{-- Product 1 --}}
            <article
                class="group bg-white
                       border border-gray-200
                       hover:border-[#073B66]
                       hover:shadow-xl
                       transition-all duration-500"
            >

                <div
                    class="relative
                           h-[300px]
                           bg-white
                           overflow-hidden"
                >

                    <img
                        src="{{ asset('images/products/product-1.jpg') }}"
                        alt="Testing Equipment"
                        class="w-full h-full
                               object-contain
                               p-8
                               group-hover:scale-105
                               transition-transform duration-500"
                    >

                    <span
                        class="absolute
                               top-4 left-4
                               bg-[#073B66]
                               text-white
                               px-3 py-1.5
                               text-[10px]
                               font-bold
                               tracking-widest"
                    >
                        TESTING
                    </span>

                </div>

                <div
                    class="p-6
                           border-t border-gray-100"
                >

                    <h3
                        class="text-xl
                               font-bold
                               text-[#073B66]
                               group-hover:text-[#E31E24]
                               transition"
                    >
                        Product Name One
                    </h3>

                    <p
                        class="mt-3
                               text-sm
                               text-gray-500
                               leading-6"
                    >
                        Professional testing equipment
                        for engineering applications.
                    </p>

                    <a
                        href="#"
                        class="inline-flex
                               mt-5
                               text-sm
                               font-semibold
                               text-[#073B66]
                               hover:text-[#E31E24]
                               transition"
                    >
                        View Details
                        <span class="ml-2">→</span>
                    </a>

                </div>

            </article>


            {{-- Product 2 --}}
            <article
                class="group bg-white
                       border border-gray-200
                       hover:border-[#073B66]
                       hover:shadow-xl
                       transition-all duration-500"
            >

                <div
                    class="relative
                           h-[300px]
                           bg-white
                           overflow-hidden"
                >

                    <img
                        src="{{ asset('images/products/product-2.jpg') }}"
                        alt="Engineering Testing Equipment"
                        class="w-full h-full
                               object-contain
                               p-8
                               group-hover:scale-105
                               transition-transform duration-500"
                    >

                    <span
                        class="absolute
                               top-4 left-4
                               bg-[#073B66]
                               text-white
                               px-3 py-1.5
                               text-[10px]
                               font-bold
                               tracking-widest"
                    >
                        ENGINEERING
                    </span>

                </div>

                <div
                    class="p-6
                           border-t border-gray-100"
                >

                    <h3
                        class="text-xl
                               font-bold
                               text-[#073B66]
                               group-hover:text-[#E31E24]
                               transition"
                    >
                        Product Name Two
                    </h3>

                    <p
                        class="mt-3
                               text-sm
                               text-gray-500
                               leading-6"
                    >
                        Reliable equipment for demanding
                        engineering requirements.
                    </p>

                    <a
                        href="#"
                        class="inline-flex
                               mt-5
                               text-sm
                               font-semibold
                               text-[#073B66]
                               hover:text-[#E31E24]
                               transition"
                    >
                        View Details
                        <span class="ml-2">→</span>
                    </a>

                </div>

            </article>


            {{-- Product 3 --}}
            <article
                class="group bg-white
                       border border-gray-200
                       hover:border-[#073B66]
                       hover:shadow-xl
                       transition-all duration-500"
            >

                <div
                    class="relative
                           h-[300px]
                           bg-white
                           overflow-hidden"
                >

                    <img
                        src="{{ asset('images/products/product-3.jpg') }}"
                        alt="Laboratory Equipment"
                        class="w-full h-full
                               object-contain
                               p-8
                               group-hover:scale-105
                               transition-transform duration-500"
                    >

                    <span
                        class="absolute
                               top-4 left-4
                               bg-[#073B66]
                               text-white
                               px-3 py-1.5
                               text-[10px]
                               font-bold
                               tracking-widest"
                    >
                        LABORATORY
                    </span>

                </div>

                <div
                    class="p-6
                           border-t border-gray-100"
                >

                    <h3
                        class="text-xl
                               font-bold
                               text-[#073B66]
                               group-hover:text-[#E31E24]
                               transition"
                    >
                        Product Name Three
                    </h3>

                    <p
                        class="mt-3
                               text-sm
                               text-gray-500
                               leading-6"
                    >
                        Precision equipment for laboratory
                        and research applications.
                    </p>

                    <a
                        href="#"
                        class="inline-flex
                               mt-5
                               text-sm
                               font-semibold
                               text-[#073B66]
                               hover:text-[#E31E24]
                               transition"
                    >
                        View Details
                        <span class="ml-2">→</span>
                    </a>

                </div>

            </article>

        </div>

    </div>

</section>


{{-- =========================================================
     QUOTE CTA
========================================================= --}}

<section class="bg-[#E31E24]">

    <div
        class="max-w-7xl mx-auto
               px-5 sm:px-8 lg:px-10
               py-12"
    >

        <div
            class="flex flex-col
                   md:flex-row
                   md:items-center
                   md:justify-between
                   gap-6"
        >

            <div>

                <h2
                    class="text-white
                           text-2xl sm:text-3xl
                           font-bold"
                >
                    Looking for a specific testing solution?
                </h2>

                <p
                    class="mt-2
                           text-white/75"
                >
                    Talk to our team about your requirement.
                </p>

            </div>

            <a
                href="{{ route('home') }}#contact"
                class="shrink-0
                       inline-flex
                       items-center
                       justify-center
                       bg-white
                       text-[#073B66]
                       px-7 py-3.5
                       font-bold
                       text-sm
                       hover:bg-[#073B66]
                       hover:text-white
                       transition"
            >
                Request a Quote
                <span class="ml-3">→</span>
            </a>

        </div>

    </div>

</section>

@endsection