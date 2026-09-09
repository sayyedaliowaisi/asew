@extends('layouts.app')

@section('title', 'Products | Associated Scientific & Engineering Works')

@section('content')

<section class="w-full bg-white">

    {{-- =========================================================
         PRODUCTS HERO
    ========================================================== --}}

    <section class="relative overflow-hidden bg-[#032B55]">

        {{-- Technical Grid --}}
        <div
            class="absolute inset-0 opacity-[0.05] pointer-events-none"
            style="
                background-image:
                    linear-gradient(rgba(255,255,255,.3) 1px, transparent 1px),
                    linear-gradient(90deg, rgba(255,255,255,.3) 1px, transparent 1px);
                background-size: 44px 44px;
            "
        ></div>


        {{-- Decorative Shape --}}
        <div
            class="absolute
                   -right-[160px]
                   -top-[230px]
                   w-[500px]
                   h-[500px]
                   rounded-full
                   border
                   border-white/[0.07]"
        ></div>

        <div
            class="absolute
                   right-[40px]
                   -bottom-[220px]
                   w-[400px]
                   h-[400px]
                   rounded-full
                   border
                   border-white/[0.05]"
        ></div>


        <div
            class="relative z-10
                   max-w-[1500px]
                   mx-auto
                   px-4 sm:px-6 lg:px-8
                   py-10 sm:py-12 lg:py-14"
        >

            <div
                class="grid
                       grid-cols-1
                       lg:grid-cols-12
                       gap-8
                       lg:items-end"
            >

                {{-- LEFT --}}
                <div class="lg:col-span-8">

                    {{-- Breadcrumb --}}
                    <div
                        class="flex
                               items-center
                               gap-2
                               text-[10px]
                               sm:text-[11px]
                               uppercase
                               tracking-wide
                               font-semibold"
                    >

                        <a
                            href="{{ route('home') }}"
                            class="text-white/50
                                   hover:text-white
                                   transition"
                        >
                            Home
                        </a>

                        <span class="text-white/30">/</span>

                        <span class="text-[#D7A93A]">
                            Products
                        </span>

                    </div>


                    {{-- Label --}}
                    <div
                        class="mt-7
                               flex
                               items-center
                               gap-3"
                    >

                        <span
                            class="w-10
                                   h-[2px]
                                   bg-[#D71920]"
                        ></span>

                        <span
                            class="text-[#D7A93A]
                                   text-[10px]
                                   sm:text-[11px]
                                   font-bold
                                   uppercase
                                   tracking-[0.2em]"
                        >
                            Product Catalogue
                        </span>

                    </div>


                    {{-- Heading --}}
                    <h1
                        class="mt-4
                               max-w-[900px]
                               text-white
                               text-[30px]
                               sm:text-[40px]
                               lg:text-[48px]
                               xl:text-[54px]
                               leading-[1.08]
                               tracking-[-0.025em]
                               font-extrabold"
                    >
                        Scientific, Engineering &
                        <span class="text-[#D7A93A]">
                            Testing Equipment
                        </span>
                    </h1>


                    <p
                        class="mt-5
                               max-w-[760px]
                               text-[13px]
                               sm:text-[14px]
                               lg:text-[15px]
                               leading-7
                               text-white/65"
                    >
                        Explore our comprehensive range of testing,
                        scientific and laboratory equipment engineered
                        for research, education, quality control and
                        engineering applications.
                    </p>

                </div>



                {{-- RIGHT STATS --}}
                <div
                    class="hidden
                           lg:grid
                           lg:col-span-4
                           grid-cols-2
                           border
                           border-white/10
                           bg-white/[0.03]"
                >

                    <div
                        class="p-5
                               border-r
                               border-white/10"
                    >

                        <div
                            class="text-[#D7A93A]
                                   text-2xl
                                   xl:text-3xl
                                   font-extrabold"
                        >
                            50+
                        </div>

                        <div
                            class="mt-1
                                   text-[9px]
                                   xl:text-[10px]
                                   uppercase
                                   tracking-[0.12em]
                                   font-semibold
                                   text-white/50"
                        >
                            Years Experience
                        </div>

                    </div>


                    <div class="p-5">

                        <div
                            class="text-[#D7A93A]
                                   text-2xl
                                   xl:text-3xl
                                   font-extrabold"
                        >
                            5000+
                        </div>

                        <div
                            class="mt-1
                                   text-[9px]
                                   xl:text-[10px]
                                   uppercase
                                   tracking-[0.12em]
                                   font-semibold
                                   text-white/50"
                        >
                            Products Supplied
                        </div>

                    </div>

                </div>

            </div>

        </div>

    </section>



    {{-- =========================================================
         INTRO
    ========================================================== --}}

    <section class="bg-white py-10 sm:py-12">

        <div
            class="max-w-[1500px]
                   mx-auto
                   px-4 sm:px-6 lg:px-8"
        >

            <div class="max-w-[850px]">

                <p
                    class="text-[#D71920]
                           text-[10px]
                           sm:text-[11px]
                           uppercase
                           tracking-[0.2em]
                           font-bold"
                >
                    Our Equipment Range
                </p>


                <h2
                    class="mt-3
                           text-[#073B66]
                           text-[26px]
                           sm:text-[32px]
                           lg:text-[38px]
                           leading-tight
                           font-extrabold"
                >
                    Find The Right Testing Solution
                </h2>


                <div
                    class="mt-4
                           w-14
                           h-[3px]
                           bg-[#D71920]"
                ></div>


                <p
                    class="mt-5
                           text-[13px]
                           sm:text-[14px]
                           leading-7
                           text-slate-500"
                >
                    Browse products by application or use the search
                    facility to find equipment by product name, category
                    or product code.
                </p>

            </div>

        </div>

    </section>



    {{-- =========================================================
         PRODUCT CATALOGUE
    ========================================================== --}}

    <section
        id="products"
        class="bg-[#F5F7F9]
               border-y
               border-slate-200
               py-10
               sm:py-12
               lg:py-14"
    >

        <div
            class="max-w-[1500px]
                   mx-auto
                   px-4 sm:px-6 lg:px-8"
        >


            {{-- =====================================================
                 SEARCH
            ====================================================== --}}

            <form
                action="{{ route('products') }}#products"
                method="GET"
                class="bg-white
                       border
                       border-slate-200
                       p-4 sm:p-5
                       shadow-[0_5px_20px_rgba(3,43,85,0.04)]"
            >

                <div
                    class="flex
                           flex-col
                           md:flex-row
                           gap-3"
                >

                    {{-- Preserve Category --}}
                    @if(request('category'))

                        <input
                            type="hidden"
                            name="category"
                            value="{{ request('category') }}"
                        >

                    @endif


                    {{-- Search Input --}}
                    <div class="relative flex-1">

                        <div
                            class="absolute
                                   left-4
                                   top-1/2
                                   -translate-y-1/2
                                   text-slate-400"
                        >

                            <svg
                                xmlns="http://www.w3.org/2000/svg"
                                class="w-[18px] h-[18px]"
                                fill="none"
                                viewBox="0 0 24 24"
                                stroke="currentColor"
                                stroke-width="1.8"
                            >
                                <path
                                    stroke-linecap="round"
                                    stroke-linejoin="round"
                                    d="m21 21-4.35-4.35m2.1-5.4a7.5 7.5 0 1 1-15 0 7.5 7.5 0 0 1 15 0Z"
                                />
                            </svg>

                        </div>


                        <input
                            type="search"
                            name="search"
                            value="{{ request('search') }}"
                            placeholder="Search equipment, category or product code..."
                            class="w-full
                                   h-[48px]
                                   pl-12
                                   pr-4
                                   border
                                   border-slate-200
                                   bg-white
                                   text-[12px]
                                   sm:text-[13px]
                                   text-slate-700
                                   placeholder:text-slate-400
                                   outline-none
                                   focus:border-[#073B66]
                                   focus:ring-1
                                   focus:ring-[#073B66]/10
                                   transition"
                        >

                    </div>



                    {{-- Search Button --}}
                    <button
                        type="submit"
                        class="h-[48px]
                               px-6
                               flex
                               items-center
                               justify-center
                               gap-2
                               bg-[#032B55]
                               text-white
                               hover:bg-[#D71920]
                               text-[10px]
                               sm:text-[11px]
                               font-bold
                               uppercase
                               tracking-wide
                               transition"
                    >

                        <svg
                            xmlns="http://www.w3.org/2000/svg"
                            class="w-4 h-4"
                            fill="none"
                            viewBox="0 0 24 24"
                            stroke="currentColor"
                            stroke-width="2"
                        >
                            <path
                                stroke-linecap="round"
                                stroke-linejoin="round"
                                d="m21 21-4.35-4.35m2.1-5.4a7.5 7.5 0 1 1-15 0 7.5 7.5 0 0 1 15 0Z"
                            />
                        </svg>

                        Search Products

                    </button>



                    {{-- Reset --}}
                    @if(request('search') || request('category'))

                        <a
                            href="{{ route('products') }}#products"
                            class="h-[48px]
                                   px-5
                                   flex
                                   items-center
                                   justify-center
                                   border
                                   border-slate-200
                                   bg-white
                                   text-[10px]
                                   sm:text-[11px]
                                   font-bold
                                   uppercase
                                   tracking-wide
                                   text-slate-500
                                   hover:text-[#D71920]
                                   hover:border-[#D71920]
                                   transition"
                        >
                            Reset
                        </a>

                    @endif

                </div>

            </form>



            {{-- =====================================================
                 CATEGORY FILTERS
            ====================================================== --}}

            @php
                $categories = [
                    'all' => 'All Products',
                    'soil' => 'Soil Testing',
                    'concrete' => 'Concrete Testing',
                    'cement' => 'Cement Testing',
                    'aggregate' => 'Aggregate Testing',
                    'bitumen' => 'Bitumen / Asphalt',
                    'rock' => 'Rock Testing',
                    'material' => 'Material Testing',
                    'survey' => 'Survey Instruments',
                    'laboratory' => 'Laboratory Equipment',
                ];

                $activeCategory = request('category', 'all');
            @endphp


            <div
                class="mt-6
                       flex
                       gap-2
                       overflow-x-auto
                       pb-2
                       scrollbar-hide"
            >

                @foreach($categories as $slug => $label)

                    @php
                        $params = [];

                        if ($slug !== 'all') {
                            $params['category'] = $slug;
                        }

                        if (request('search')) {
                            $params['search'] = request('search');
                        }

                        $categoryUrl = route('products', $params) . '#products';

                        $isActive =
                            $slug === 'all'
                                ? !request('category')
                                : request('category') === $slug;
                    @endphp


                    <a
                        href="{{ $categoryUrl }}"
                        class="shrink-0
                               min-h-[39px]
                               px-4
                               inline-flex
                               items-center
                               justify-center
                               border
                               text-[10px]
                               sm:text-[11px]
                               font-bold
                               uppercase
                               tracking-wide
                               transition-all

                               {{ $isActive
                                    ? 'bg-[#032B55] border-[#032B55] text-white'
                                    : 'bg-white border-slate-200 text-slate-500 hover:border-[#073B66] hover:text-[#073B66]' }}"
                    >
                        {{ $label }}
                    </a>

                @endforeach

            </div>



            {{-- =====================================================
                 RESULTS BAR
            ====================================================== --}}

            <div
                class="mt-8
                       flex
                       flex-col
                       sm:flex-row
                       sm:items-center
                       sm:justify-between
                       gap-3
                       border-b
                       border-slate-200
                       pb-4"
            >

                <div>

                    <p
                        class="text-[13px]
                               font-bold
                               text-[#073B66]"
                    >
                        {{ $products->count() }}

                        {{ $products->count() === 1 ? 'Product' : 'Products' }}
                        Found
                    </p>


                    <p
                        class="mt-1
                               text-[10px]
                               sm:text-[11px]
                               text-slate-400"
                    >

                        @if(request('category') && isset($categories[request('category')]))

                            Category:
                            <span class="font-semibold text-slate-600">
                                {{ $categories[request('category')] }}
                            </span>

                        @else

                            Browse complete ASEW equipment catalogue

                        @endif


                        @if(request('search'))

                            <span class="mx-1">•</span>

                            Search:
                            <span class="font-semibold text-slate-600">
                                "{{ request('search') }}"
                            </span>

                        @endif

                    </p>

                </div>



                @if(request('search') || request('category'))

                    <a
                        href="{{ route('products') }}#products"
                        class="inline-flex
                               items-center
                               gap-2
                               text-[10px]
                               font-bold
                               uppercase
                               tracking-wide
                               text-[#D71920]
                               hover:text-[#073B66]
                               transition"
                    >
                        Clear All Filters

                        <span>×</span>
                    </a>

                @endif

            </div>



            {{-- =====================================================
                 PRODUCT GRID
            ====================================================== --}}

            @if($products->count())

                <div
                    class="grid
                           grid-cols-1
                           sm:grid-cols-2
                           lg:grid-cols-3
                           xl:grid-cols-4
                           gap-5
                           mt-7"
                >

                    @foreach($products as $product)

                        <article
                            class="group
                                   flex
                                   flex-col
                                   bg-white
                                   border
                                   border-slate-200
                                   hover:border-[#073B66]/40
                                   hover:shadow-[0_14px_34px_rgba(3,43,85,0.10)]
                                   transition-all
                                   duration-300"
                        >

                            {{-- =========================================
                                 IMAGE
                            ========================================== --}}

                            <a
                                href="{{ route('products.show', $product->slug) }}"
                                class="relative
                                       h-[240px]
                                       sm:h-[250px]
                                       bg-white
                                       flex
                                       items-center
                                       justify-center
                                       overflow-hidden
                                       border-b
                                       border-slate-100"
                            >

                                {{-- Red Accent --}}
                                <span
                                    class="absolute
                                           top-0
                                           left-0
                                           w-0
                                           group-hover:w-full
                                           h-[3px]
                                           bg-[#D71920]
                                           transition-all
                                           duration-500"
                                ></span>


                                {{-- Category --}}
                                <span
                                    class="absolute
                                           top-4
                                           left-4
                                           z-10
                                           bg-[#032B55]
                                           px-2.5
                                           py-1.5
                                           text-[8px]
                                           sm:text-[9px]
                                           uppercase
                                           tracking-[0.12em]
                                           font-bold
                                           text-white"
                                >
                                    {{ $product->category }}
                                </span>


                                @if($product->image)

                                    <img
                                        src="{{ asset($product->image) }}"
                                        alt="{{ $product->name }}"
                                        loading="lazy"
                                        class="max-w-full
                                               max-h-full
                                               object-contain
                                               p-7
                                               transition-transform
                                               duration-500
                                               group-hover:scale-[1.05]"
                                    >

                                @else

                                    <div
                                        class="flex
                                               flex-col
                                               items-center
                                               justify-center
                                               text-slate-300"
                                    >

                                        <svg
                                            xmlns="http://www.w3.org/2000/svg"
                                            class="w-12 h-12"
                                            fill="none"
                                            viewBox="0 0 24 24"
                                            stroke="currentColor"
                                            stroke-width="1"
                                        >
                                            <path
                                                stroke-linecap="round"
                                                stroke-linejoin="round"
                                                d="M3 16.5 8.5 11l4 4L15 12.5l6 6"
                                            />

                                            <rect
                                                x="3"
                                                y="4"
                                                width="18"
                                                height="16"
                                                rx="2"
                                            />
                                        </svg>


                                        <span
                                            class="mt-2
                                                   text-[10px]
                                                   uppercase
                                                   tracking-wide"
                                        >
                                            Product Image
                                        </span>

                                    </div>

                                @endif

                            </a>



                            {{-- =========================================
                                 PRODUCT INFORMATION
                            ========================================== --}}

                            <div
                                class="p-5
                                       flex
                                       flex-col
                                       flex-1"
                            >

                                {{-- Code --}}
                                @if($product->code)

                                    <p
                                        class="text-[9px]
                                               uppercase
                                               tracking-[0.13em]
                                               font-bold
                                               text-[#D71920]"
                                    >
                                        {{ $product->code }}
                                    </p>

                                @endif


                                {{-- Name --}}
                                <h3
                                    class="mt-2
                                           text-[16px]
                                           sm:text-[17px]
                                           leading-[1.35]
                                           font-extrabold
                                           text-[#073B66]
                                           group-hover:text-[#D71920]
                                           transition-colors"
                                >

                                    <a
                                        href="{{ route('products.show', $product->slug) }}"
                                    >
                                        {{ $product->name }}
                                    </a>

                                </h3>


                                {{-- Description --}}
                                @if($product->short_description)

                                    <p
                                        class="mt-3
                                               text-[11px]
                                               sm:text-[12px]
                                               leading-[1.75]
                                               text-slate-500"
                                    >
                                        {{ \Illuminate\Support\Str::limit(
                                            $product->short_description,
                                            125
                                        ) }}
                                    </p>

                                @endif



                                {{-- Spacer --}}
                                <div class="flex-1"></div>



                                {{-- Bottom --}}
                                <div
                                    class="mt-5
                                           pt-4
                                           border-t
                                           border-slate-100
                                           flex
                                           items-center
                                           justify-between
                                           gap-3"
                                >

                                    <a
                                        href="{{ route('products.show', $product->slug) }}"
                                        class="group/link
                                               inline-flex
                                               items-center
                                               gap-2
                                               text-[10px]
                                               uppercase
                                               tracking-wide
                                               font-bold
                                               text-[#073B66]
                                               hover:text-[#D71920]
                                               transition"
                                    >
                                        View Details

                                        <span
                                            class="transition-transform
                                                   group-hover/link:translate-x-1"
                                        >
                                            →
                                        </span>

                                    </a>


                                    <a
                                        href="{{ route('home') }}#contact"
                                        class="inline-flex
                                               items-center
                                               justify-center
                                               min-h-[34px]
                                               px-3
                                               border
                                               border-slate-200
                                               text-[9px]
                                               uppercase
                                               tracking-wide
                                               font-bold
                                               text-slate-500
                                               hover:border-[#D71920]
                                               hover:text-[#D71920]
                                               transition"
                                    >
                                        Get Quote
                                    </a>

                                </div>

                            </div>

                        </article>

                    @endforeach

                </div>


            @else

                {{-- =================================================
                     NO RESULTS
                ================================================== --}}

                <div
                    class="mt-7
                           bg-white
                           border
                           border-slate-200
                           px-5
                           py-14
                           sm:py-16
                           text-center"
                >

                    <div
                        class="mx-auto
                               w-14
                               h-14
                               flex
                               items-center
                               justify-center
                               bg-[#F5F7F9]
                               text-[#073B66]"
                    >

                        <svg
                            xmlns="http://www.w3.org/2000/svg"
                            class="w-7 h-7"
                            fill="none"
                            viewBox="0 0 24 24"
                            stroke="currentColor"
                            stroke-width="1.5"
                        >
                            <path
                                stroke-linecap="round"
                                stroke-linejoin="round"
                                d="m21 21-4.35-4.35m2.1-5.4a7.5 7.5 0 1 1-15 0 7.5 7.5 0 0 1 15 0Z"
                            />
                        </svg>

                    </div>


                    <h3
                        class="mt-5
                               text-xl
                               font-extrabold
                               text-[#073B66]"
                    >
                        No Products Found
                    </h3>


                    <p
                        class="mt-2
                               max-w-[500px]
                               mx-auto
                               text-[12px]
                               sm:text-[13px]
                               leading-6
                               text-slate-500"
                    >
                        We couldn't find products matching your current
                        category or search criteria.
                    </p>


                    <a
                        href="{{ route('products') }}#products"
                        class="inline-flex
                               items-center
                               justify-center
                               mt-6
                               min-h-[44px]
                               px-6
                               bg-[#032B55]
                               hover:bg-[#D71920]
                               text-white
                               text-[10px]
                               font-bold
                               uppercase
                               tracking-wide
                               transition"
                    >
                        View All Products
                    </a>

                </div>

            @endif

        </div>

    </section>



    {{-- =========================================================
         WHY CHOOSE ASEW
    ========================================================== --}}

    <section class="bg-white py-10 sm:py-12">

        <div
            class="max-w-[1500px]
                   mx-auto
                   px-4 sm:px-6 lg:px-8"
        >

            <div
                class="grid
                       grid-cols-1
                       sm:grid-cols-2
                       lg:grid-cols-4
                       border
                       border-slate-200"
            >


                {{-- 01 --}}
                <div
                    class="p-6
                           border-b
                           sm:border-r
                           lg:border-b-0
                           border-slate-200"
                >

                    <div
                        class="w-10 h-10
                               flex
                               items-center
                               justify-center
                               bg-[#032B55]
                               text-white"
                    >

                        <svg
                            xmlns="http://www.w3.org/2000/svg"
                            class="w-5 h-5"
                            fill="none"
                            viewBox="0 0 24 24"
                            stroke="currentColor"
                            stroke-width="1.7"
                        >
                            <path
                                stroke-linecap="round"
                                stroke-linejoin="round"
                                d="M12 3 4.5 7v5c0 4.8 3.1 7.9 7.5 9 4.4-1.1 7.5-4.2 7.5-9V7L12 3Z"
                            />

                            <path
                                stroke-linecap="round"
                                stroke-linejoin="round"
                                d="m9 12 2 2 4-4"
                            />
                        </svg>

                    </div>


                    <h3
                        class="mt-4
                               text-[14px]
                               font-extrabold
                               text-[#073B66]"
                    >
                        Quality Manufacturing
                    </h3>


                    <p
                        class="mt-2
                               text-[11px]
                               leading-5
                               text-slate-500"
                    >
                        Equipment engineered for professional laboratory
                        and testing applications.
                    </p>

                </div>



                {{-- 02 --}}
                <div
                    class="p-6
                           border-b
                           lg:border-b-0
                           lg:border-r
                           border-slate-200"
                >

                    <div
                        class="w-10 h-10
                               flex
                               items-center
                               justify-center
                               bg-[#032B55]
                               text-white"
                    >

                        <svg
                            xmlns="http://www.w3.org/2000/svg"
                            class="w-5 h-5"
                            fill="none"
                            viewBox="0 0 24 24"
                            stroke="currentColor"
                            stroke-width="1.7"
                        >
                            <path
                                stroke-linecap="round"
                                stroke-linejoin="round"
                                d="M4 15v-3a8 8 0 0 1 16 0v3"
                            />

                            <path
                                stroke-linecap="round"
                                stroke-linejoin="round"
                                d="M4 14h3v5H5a1 1 0 0 1-1-1v-4ZM20 14h-3v5h2a1 1 0 0 0 1-1v-4Z"
                            />
                        </svg>

                    </div>


                    <h3
                        class="mt-4
                               text-[14px]
                               font-extrabold
                               text-[#073B66]"
                    >
                        Technical Support
                    </h3>


                    <p
                        class="mt-2
                               text-[11px]
                               leading-5
                               text-slate-500"
                    >
                        Technical guidance for product selection,
                        installation and operation.
                    </p>

                </div>



                {{-- 03 --}}
                <div
                    class="p-6
                           border-b
                           sm:border-b-0
                           sm:border-r
                           border-slate-200"
                >

                    <div
                        class="w-10 h-10
                               flex
                               items-center
                               justify-center
                               bg-[#032B55]
                               text-white"
                    >

                        <svg
                            xmlns="http://www.w3.org/2000/svg"
                            class="w-5 h-5"
                            fill="none"
                            viewBox="0 0 24 24"
                            stroke="currentColor"
                            stroke-width="1.7"
                        >
                            <circle
                                cx="12"
                                cy="12"
                                r="8"
                            />

                            <path
                                stroke-linecap="round"
                                d="M12 8v4l2.5 2"
                            />
                        </svg>

                    </div>


                    <h3
                        class="mt-4
                               text-[14px]
                               font-extrabold
                               text-[#073B66]"
                    >
                        Calibration Support
                    </h3>


                    <p
                        class="mt-2
                               text-[11px]
                               leading-5
                               text-slate-500"
                    >
                        Support for calibration and continued equipment
                        performance.
                    </p>

                </div>



                {{-- 04 --}}
                <div class="p-6">

                    <div
                        class="w-10 h-10
                               flex
                               items-center
                               justify-center
                               bg-[#032B55]
                               text-white"
                    >

                        <svg
                            xmlns="http://www.w3.org/2000/svg"
                            class="w-5 h-5"
                            fill="none"
                            viewBox="0 0 24 24"
                            stroke="currentColor"
                            stroke-width="1.7"
                        >
                            <circle
                                cx="12"
                                cy="12"
                                r="9"
                            />

                            <path
                                stroke-linecap="round"
                                d="M3 12h18M12 3c2.3 2.5 3.5 5.5 3.5 9s-1.2 6.5-3.5 9c-2.3-2.5-3.5-5.5-3.5-9S9.7 5.5 12 3Z"
                            />
                        </svg>

                    </div>


                    <h3
                        class="mt-4
                               text-[14px]
                               font-extrabold
                               text-[#073B66]"
                    >
                        Global Supply
                    </h3>


                    <p
                        class="mt-2
                               text-[11px]
                               leading-5
                               text-slate-500"
                    >
                        Equipment solutions for laboratories,
                        institutions and engineering organizations.
                    </p>

                </div>

            </div>

        </div>

    </section>



    {{-- =========================================================
         PRODUCT ASSISTANCE CTA
    ========================================================== --}}

    <section class="relative overflow-hidden bg-[#032B55]">

        <div
            class="absolute
                   -right-[100px]
                   -top-[170px]
                   w-[400px]
                   h-[400px]
                   rounded-full
                   border
                   border-white/[0.06]"
        ></div>


        <div
            class="relative z-10
                   max-w-[1500px]
                   mx-auto
                   px-4 sm:px-6 lg:px-8
                   py-10 lg:py-12"
        >

            <div
                class="flex
                       flex-col
                       lg:flex-row
                       lg:items-center
                       lg:justify-between
                       gap-6"
            >

                <div>

                    <p
                        class="text-[#D7A93A]
                               text-[10px]
                               font-bold
                               uppercase
                               tracking-[0.18em]"
                    >
                        Product Assistance
                    </p>


                    <h2
                        class="mt-2
                               text-white
                               text-[22px]
                               sm:text-[26px]
                               lg:text-[30px]
                               font-extrabold"
                    >
                        Need Help Selecting The Right Equipment?
                    </h2>


                    <p
                        class="mt-2
                               max-w-[760px]
                               text-[12px]
                               sm:text-[13px]
                               leading-6
                               text-white/60"
                    >
                        Share your testing requirement with our team
                        for product selection, configuration and
                        quotation assistance.
                    </p>

                </div>



                <div
                    class="flex
                           flex-col
                           sm:flex-row
                           gap-3
                           shrink-0"
                >

                    <a
                       href="{{ route('quote.create') }}"
                        class="min-h-[46px]
                               px-6
                               flex
                               items-center
                               justify-center
                               border
                               border-white/30
                               text-white
                               hover:bg-white
                               hover:text-[#032B55]
                               text-[10px]
                               font-bold
                               uppercase
                               tracking-wide
                               transition"
                    >
                        Contact Our Team
                    </a>


                    <a
                        href="{{ route('quote.create') }}"
                        class="group
                               min-h-[46px]
                               px-6
                               flex
                               items-center
                               justify-center
                               gap-3
                               bg-[#D71920]
                               text-white
                               hover:bg-white
                               hover:text-[#D71920]
                               text-[10px]
                               font-bold
                               uppercase
                               tracking-wide
                               transition"
                    >
                        Request a Quote

                        <span
                            class="transition-transform
                                   group-hover:translate-x-1"
                        >
                            →
                        </span>
                    </a>

                </div>

            </div>

        </div>

    </section>

</section>

@endsection