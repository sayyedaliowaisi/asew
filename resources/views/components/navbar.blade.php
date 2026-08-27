{{-- =========================================================
     ASEW PREMIUM HEADER
     3-LAYER NAVIGATION
========================================================= --}}

<header
    x-data="{ mobileMenu: false, productsOpen: false, aboutOpen: false, servicesOpen: false }"
    class="relative z-[100] w-full bg-white"
>

    {{-- =====================================================
         1. TOP INFORMATION BAR
    ====================================================== --}}

    <div class="w-full bg-[#032B55] text-white">

        <div class="max-w-[1500px] mx-auto px-4 sm:px-6 lg:px-8">

            <div class="min-h-[30px] lg:h-[30px] flex items-center justify-between">

                {{-- LEFT INFORMATION --}}
                <div class="flex items-center gap-5 lg:gap-9 text-[10px] sm:text-[11px]">

                    {{-- Since 1975 --}}
                    <div class="flex items-center gap-1.5 whitespace-nowrap">

                        <svg
                            xmlns="http://www.w3.org/2000/svg"
                            class="w-3.5 h-3.5 text-[#D7A93A]"
                            fill="none"
                            viewBox="0 0 24 24"
                            stroke="currentColor"
                            stroke-width="1.7"
                        >
                            <path
                                stroke-linecap="round"
                                stroke-linejoin="round"
                                d="M6 3h12v18l-6-3-6 3V3Z"
                            />

                            <path
                                stroke-linecap="round"
                                d="M9 7h6M9 10h6"
                            />
                        </svg>

                        <span>Since 1975</span>

                    </div>


                    {{-- 50+ Years --}}
                    <div class="hidden sm:flex items-center gap-1.5 whitespace-nowrap">

                        <svg
                            xmlns="http://www.w3.org/2000/svg"
                            class="w-3.5 h-3.5 text-[#D7A93A]"
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

                        <span>50+ Years of Excellence</span>

                    </div>


                    {{-- Made in India --}}
                    <div class="hidden md:flex items-center gap-1.5 whitespace-nowrap">

                        <span class="text-[12px]">🇮🇳</span>

                        <span>Made in India</span>

                    </div>


                    {{-- Global Presence --}}
                    <div class="hidden lg:flex items-center gap-1.5 whitespace-nowrap">

                        <svg
                            xmlns="http://www.w3.org/2000/svg"
                            class="w-3.5 h-3.5 text-[#D7A93A]"
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

                        <span>Global Presence</span>

                    </div>

                </div>


                {{-- RIGHT INFORMATION --}}
                <div class="flex items-center gap-4 lg:gap-7 text-[10px] sm:text-[11px]">

                    {{-- Email --}}
                    <a
                        href="mailto:sales@asew.in"
                        class="hidden sm:flex items-center gap-1.5 hover:text-[#D7A93A] transition-colors duration-300 whitespace-nowrap"
                    >

                        <svg
                            xmlns="http://www.w3.org/2000/svg"
                            class="w-3.5 h-3.5 text-[#D7A93A]"
                            fill="none"
                            viewBox="0 0 24 24"
                            stroke="currentColor"
                            stroke-width="1.7"
                        >
                            <path
                                stroke-linecap="round"
                                stroke-linejoin="round"
                                d="M3.5 6.5h17v11h-17v-11Z"
                            />

                            <path
                                stroke-linecap="round"
                                stroke-linejoin="round"
                                d="m4 7 8 6 8-6"
                            />
                        </svg>

                        <span>sales@asew.in</span>

                    </a>


                    {{-- Phone --}}
                    <a
                        href="tel:+911204566201"
                        class="flex items-center gap-1.5 hover:text-[#D7A93A] transition-colors duration-300 whitespace-nowrap"
                    >

                        <svg
                            xmlns="http://www.w3.org/2000/svg"
                            class="w-3.5 h-3.5 text-[#D7A93A]"
                            fill="none"
                            viewBox="0 0 24 24"
                            stroke="currentColor"
                            stroke-width="1.7"
                        >
                            <path
                                stroke-linecap="round"
                                stroke-linejoin="round"
                                d="M6.5 3.5h3l1.5 4-2 1.5a13 13 0 0 0 6 6l1.5-2 4 1.5v3a2 2 0 0 1-2 2C10.5 19.5 4.5 13.5 4.5 6.5a2 2 0 0 1 2-3Z"
                            />
                        </svg>

                        <span>+91 120 456 6201</span>

                    </a>

                </div>

            </div>

        </div>

    </div>


    {{-- =====================================================
         2. BRAND / SEARCH / CTA AREA
    ====================================================== --}}

    <div class="w-full bg-white border-b border-slate-100">

        <div class="max-w-[1500px] mx-auto px-4 sm:px-6 lg:px-8">

            <div
                class="min-h-[88px] lg:min-h-[104px]
                       flex items-center justify-between gap-5 lg:gap-8"
            >

                {{-- =========================================================
     LOGO + COMPANY BRANDING
========================================================= --}}

<a
    href="{{ route('home') }}"
    class="flex items-center shrink-0 group"
>

    {{-- ASEW LOGO --}}
    <div class="flex items-center">

        <img
            src="{{ asset('images/asew-logo.jpg') }}"
            alt="ASEW Logo"
            class="h-[64px] sm:h-[70px] lg:h-[78px] w-auto object-contain"
        >

    </div>


    {{-- COMPANY NAME + TAGLINE --}}
    <div
        class="ml-3 sm:ml-4
               pl-3 sm:pl-4
               border-l border-slate-200"
    >

        {{-- Company Name --}}
        <div
            class="text-[#073B66]
                   font-extrabold
                   text-[13px] sm:text-[15px] lg:text-[17px]
                   leading-[1.05]
                   tracking-tight
                   uppercase
                   whitespace-nowrap"
        >
            <span class="block">
                Associated Scientific &
            </span>

            <span class="block">
                Engineering Works
            </span>
        </div>


        {{-- Tagline --}}
        <p
            class="mt-1.5
                   text-[8px] sm:text-[9px] lg:text-[10px]
                   leading-[1.35]
                   text-slate-500
                   font-medium
                   whitespace-nowrap"
        >
            Manufacturers of Scientific, Engineering &<br>
            Laboratory Equipment Since 1975
        </p>

    </div>

</a>

                {{-- =================================================
                     SEARCH
                ================================================== --}}

                <div class="hidden md:block flex-1 max-w-[430px] lg:max-w-[500px]">

                    <div class="relative">

                        <input
                            type="search"
                            placeholder="Search for products, categories..."
                            class="w-full h-[42px] lg:h-[46px]
                                   border border-slate-200
                                   bg-white
                                   px-4 pr-12
                                   text-[12px] lg:text-[13px]
                                   text-slate-700
                                   placeholder:text-slate-400
                                   outline-none
                                   focus:border-[#073B66]
                                   focus:ring-1 focus:ring-[#073B66]/10
                                   transition-all duration-300"
                        >

                        <button
                            type="button"
                            aria-label="Search"
                            class="absolute right-0 top-0
                                   w-[46px] h-full
                                   flex items-center justify-center
                                   text-[#073B66]
                                   hover:text-[#E31E24]
                                   transition-colors duration-300"
                        >

                            <svg
                                xmlns="http://www.w3.org/2000/svg"
                                class="w-[19px] h-[19px]"
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

                        </button>

                    </div>

                </div>


                {{-- =================================================
                     ACTION BUTTONS
                ================================================== --}}

                <div class="hidden sm:flex items-center gap-2.5 lg:gap-3 shrink-0">

                    {{-- Request Quote --}}
                    <a
                        href="{{ route('home') }}#contact"
                        class="h-[42px] lg:h-[46px]
                               px-4 lg:px-6
                               flex items-center justify-center
                               border border-[#073B66]
                               text-[#073B66]
                               text-[11px] lg:text-[12px]
                               font-bold
                               tracking-wide
                               uppercase
                               hover:bg-[#073B66]
                               hover:text-white
                               transition-all duration-300
                               whitespace-nowrap"
                    >
                        Request a Quote
                    </a>


                    {{-- Get In Touch --}}
                    <a
                        href="{{ route('home') }}#contact"
                        class="h-[42px] lg:h-[46px]
                               px-4 lg:px-6
                               flex items-center justify-center
                               bg-[#D71920]
                               text-white
                               text-[11px] lg:text-[12px]
                               font-bold
                               tracking-wide
                               uppercase
                               hover:bg-[#073B66]
                               transition-all duration-300
                               whitespace-nowrap
                               shadow-sm"
                    >
                        Get In Touch
                    </a>

                </div>


                {{-- =================================================
                     MOBILE MENU BUTTON
                ================================================== --}}

                <button
                    type="button"
                    @click="mobileMenu = !mobileMenu"
                    class="lg:hidden
                           w-11 h-11
                           flex items-center justify-center
                           border border-slate-200
                           text-[#073B66]
                           hover:border-[#073B66]
                           transition-all duration-300"
                    :aria-expanded="mobileMenu.toString()"
                    aria-label="Toggle navigation"
                >

                    {{-- Hamburger --}}
                    <svg
                        x-show="!mobileMenu"
                        xmlns="http://www.w3.org/2000/svg"
                        class="w-6 h-6"
                        fill="none"
                        viewBox="0 0 24 24"
                        stroke="currentColor"
                        stroke-width="1.8"
                    >
                        <path
                            stroke-linecap="round"
                            stroke-linejoin="round"
                            d="M4 6h16M4 12h16M4 18h16"
                        />
                    </svg>


                    {{-- Close --}}
                    <svg
                        x-show="mobileMenu"
                        x-cloak
                        xmlns="http://www.w3.org/2000/svg"
                        class="w-6 h-6"
                        fill="none"
                        viewBox="0 0 24 24"
                        stroke="currentColor"
                        stroke-width="1.8"
                    >
                        <path
                            stroke-linecap="round"
                            stroke-linejoin="round"
                            d="M6 18 18 6M6 6l12 12"
                        />
                    </svg>

                </button>

            </div>

        </div>

    </div>


    {{-- =====================================================
         3. MAIN NAVIGATION
    ====================================================== --}}

    <div class="w-full bg-[#032B55]">

        <div class="max-w-[1500px] mx-auto px-0 sm:px-6 lg:px-8">

            <nav class="hidden lg:flex items-stretch h-[48px]">

                {{-- =================================================
                     HOME
                ================================================== --}}

                <a
                    href="{{ route('home') }}"
                    class="relative min-w-[90px]
                           flex items-center justify-center
                           bg-white
                           text-[#D71920]
                           text-[12px]
                           font-bold
                           uppercase
                           tracking-wide
                           group"
                >

                    <span>Home</span>

                    <span
                        class="absolute bottom-0 left-0 right-0 h-[3px] bg-[#D71920]"
                    ></span>

                </a>


                {{-- =================================================
                     PRODUCTS
                ================================================== --}}

                <div
                    class="relative h-full"
                    @mouseenter="productsOpen = true"
                    @mouseleave="productsOpen = false"
                >

                    <button
                        type="button"
                        class="h-full px-5 xl:px-7
                               flex items-center gap-2
                               text-white
                               text-[12px]
                               font-semibold
                               uppercase
                               tracking-wide
                               hover:bg-[#073B66]
                               transition-colors duration-300"
                    >

                        <span>Products</span>

                        <svg
                            xmlns="http://www.w3.org/2000/svg"
                            class="w-3.5 h-3.5"
                            fill="none"
                            viewBox="0 0 24 24"
                            stroke="currentColor"
                            stroke-width="2"
                        >
                            <path
                                stroke-linecap="round"
                                stroke-linejoin="round"
                                d="m6 9 6 6 6-6"
                            />
                        </svg>

                    </button>


                    {{-- Products Mega Menu --}}
                    <div
                        x-show="productsOpen"
                        x-cloak
                        x-transition:enter="transition ease-out duration-200"
                        x-transition:enter-start="opacity-0 -translate-y-2"
                        x-transition:enter-end="opacity-100 translate-y-0"
                        x-transition:leave="transition ease-in duration-150"
                        x-transition:leave-start="opacity-100 translate-y-0"
                        x-transition:leave-end="opacity-0 -translate-y-2"
                        class="absolute top-full left-0 w-[760px] bg-white shadow-[0_18px_50px_rgba(0,0,0,0.18)] border border-slate-200"
                    >

                        <div class="grid grid-cols-3">

                            <div class="p-6 border-r border-slate-100">

                                <p class="text-[10px] uppercase tracking-[0.18em] font-bold text-[#D71920] mb-4">
                                    Civil Testing
                                </p>

                                <a href="#products" class="block py-2 text-sm text-slate-600 hover:text-[#073B66]">
                                    Soil Testing
                                </a>

                                <a href="#products" class="block py-2 text-sm text-slate-600 hover:text-[#073B66]">
                                    Concrete Testing
                                </a>

                                <a href="#products" class="block py-2 text-sm text-slate-600 hover:text-[#073B66]">
                                    Cement Testing
                                </a>

                                <a href="#products" class="block py-2 text-sm text-slate-600 hover:text-[#073B66]">
                                    Aggregate Testing
                                </a>

                            </div>


                            <div class="p-6 border-r border-slate-100">

                                <p class="text-[10px] uppercase tracking-[0.18em] font-bold text-[#D71920] mb-4">
                                    Material Testing
                                </p>

                                <a href="#products" class="block py-2 text-sm text-slate-600 hover:text-[#073B66]">
                                    Bitumen / Asphalt
                                </a>

                                <a href="#products" class="block py-2 text-sm text-slate-600 hover:text-[#073B66]">
                                    Rock Testing
                                </a>

                                <a href="#products" class="block py-2 text-sm text-slate-600 hover:text-[#073B66]">
                                    Material Testing
                                </a>

                                <a href="#products" class="block py-2 text-sm text-slate-600 hover:text-[#073B66]">
                                    Survey Instruments
                                </a>

                            </div>


                            <div class="bg-[#073B66] p-6 text-white">

                                <p class="text-[10px] uppercase tracking-[0.18em] text-white/60 font-bold mb-4">
                                    Laboratory
                                </p>

                                <h3 class="text-lg font-bold mb-2">
                                    Complete Lab Equipment
                                </h3>

                                <p class="text-xs leading-5 text-white/70 mb-5">
                                    Explore precision testing instruments and complete laboratory solutions.
                                </p>

                                <a
                                    href="#products"
                                    class="inline-flex items-center gap-2 text-xs font-bold uppercase tracking-wide hover:text-[#E31E24] transition"
                                >
                                    View Catalogue

                                    <span>→</span>
                                </a>

                            </div>

                        </div>

                    </div>

                </div>


                {{-- =================================================
                     ABOUT US
                ================================================== --}}

                <div
                    class="relative h-full"
                    @mouseenter="aboutOpen = true"
                    @mouseleave="aboutOpen = false"
                >

                    <button
                        type="button"
                        class="h-full px-5 xl:px-7
                               flex items-center gap-2
                               text-white
                               text-[12px]
                               font-semibold
                               uppercase
                               tracking-wide
                               hover:bg-[#073B66]
                               transition-colors duration-300"
                    >

                        <span>About Us</span>

                        <svg
                            xmlns="http://www.w3.org/2000/svg"
                            class="w-3.5 h-3.5"
                            fill="none"
                            viewBox="0 0 24 24"
                            stroke="currentColor"
                            stroke-width="2"
                        >
                            <path
                                stroke-linecap="round"
                                stroke-linejoin="round"
                                d="m6 9 6 6 6-6"
                            />
                        </svg>

                    </button>


                    <div
                        x-show="aboutOpen"
                        x-cloak
                        x-transition
                        class="absolute top-full left-0 w-[220px] bg-white border border-slate-200 shadow-xl"
                    >

                        <a
                            href="{{ route('home') }}#about"
                            class="block px-5 py-3 text-sm text-slate-600 hover:bg-slate-50 hover:text-[#073B66]"
                        >
                            Company Profile
                        </a>

                        <a
                            href="{{ route('home') }}#about"
                            class="block px-5 py-3 text-sm text-slate-600 hover:bg-slate-50 hover:text-[#073B66]"
                        >
                            50+ Years of Excellence
                        </a>

                        <a
                            href="{{ route('home') }}#about"
                            class="block px-5 py-3 text-sm text-slate-600 hover:bg-slate-50 hover:text-[#073B66]"
                        >
                            Quality & Precision
                        </a>

                    </div>

                </div>


                {{-- =================================================
                     MANUFACTURING
                ================================================== --}}

                <a
                    href="{{ route('home') }}#manufacturing"
                    class="h-full px-5 xl:px-7
                           flex items-center
                           text-white
                           text-[12px]
                           font-semibold
                           uppercase
                           tracking-wide
                           hover:bg-[#073B66]
                           transition-colors duration-300
                           whitespace-nowrap"
                >
                    Manufacturing
                </a>


                {{-- =================================================
                     COMPLETE LAB SOLUTIONS
                ================================================== --}}

                <a
                    href="{{ route('home') }}#solutions"
                    class="h-full px-5 xl:px-7
                           flex items-center
                           text-white
                           text-[12px]
                           font-semibold
                           uppercase
                           tracking-wide
                           hover:bg-[#073B66]
                           transition-colors duration-300
                           whitespace-nowrap"
                >
                    Complete Lab Solutions
                </a>


                {{-- =================================================
                     SERVICES & SUPPORT
                ================================================== --}}

                <div
                    class="relative h-full"
                    @mouseenter="servicesOpen = true"
                    @mouseleave="servicesOpen = false"
                >

                    <button
                        type="button"
                        class="h-full px-5 xl:px-7
                               flex items-center gap-2
                               text-white
                               text-[12px]
                               font-semibold
                               uppercase
                               tracking-wide
                               hover:bg-[#073B66]
                               transition-colors duration-300
                               whitespace-nowrap"
                    >

                        <span>Services & Support</span>

                        <svg
                            xmlns="http://www.w3.org/2000/svg"
                            class="w-3.5 h-3.5"
                            fill="none"
                            viewBox="0 0 24 24"
                            stroke="currentColor"
                            stroke-width="2"
                        >
                            <path
                                stroke-linecap="round"
                                stroke-linejoin="round"
                                d="m6 9 6 6 6-6"
                            />
                        </svg>

                    </button>


                    <div
                        x-show="servicesOpen"
                        x-cloak
                        x-transition
                        class="absolute top-full right-0 w-[250px] bg-white border border-slate-200 shadow-xl"
                    >

                        <a
                            href="{{ route('home') }}#services"
                            class="block px-5 py-3 text-sm text-slate-600 hover:bg-slate-50 hover:text-[#073B66]"
                        >
                            Installation
                        </a>

                        <a
                            href="{{ route('home') }}#services"
                            class="block px-5 py-3 text-sm text-slate-600 hover:bg-slate-50 hover:text-[#073B66]"
                        >
                            Calibration
                        </a>

                        <a
                            href="{{ route('home') }}#services"
                            class="block px-5 py-3 text-sm text-slate-600 hover:bg-slate-50 hover:text-[#073B66]"
                        >
                            Technical Support
                        </a>

                        <a
                            href="{{ route('home') }}#services"
                            class="block px-5 py-3 text-sm text-slate-600 hover:bg-slate-50 hover:text-[#073B66]"
                        >
                            After-Sales Service
                        </a>

                    </div>

                </div>


                {{-- =================================================
                     DOWNLOADS
                ================================================== --}}

                <a
                    href="{{ route('home') }}#downloads"
                    class="h-full px-5 xl:px-7
                           flex items-center
                           text-white
                           text-[12px]
                           font-semibold
                           uppercase
                           tracking-wide
                           hover:bg-[#073B66]
                           transition-colors duration-300
                           whitespace-nowrap"
                >
                    Downloads
                </a>


                {{-- =================================================
                     CONTACT US
                ================================================== --}}

                <a
                    href="{{ route('home') }}#contact"
                    class="h-full px-5 xl:px-7
                           flex items-center
                           text-white
                           text-[12px]
                           font-semibold
                           uppercase
                           tracking-wide
                           hover:bg-[#073B66]
                           transition-colors duration-300
                           whitespace-nowrap"
                >
                    Contact Us
                </a>

            </nav>

        </div>

    </div>


    {{-- =====================================================
         MOBILE NAVIGATION
    ====================================================== --}}

    <div
        x-show="mobileMenu"
        x-cloak
        x-transition:enter="transition ease-out duration-200"
        x-transition:enter-start="opacity-0 -translate-y-2"
        x-transition:enter-end="opacity-100 translate-y-0"
        x-transition:leave="transition ease-in duration-150"
        x-transition:leave-start="opacity-100 translate-y-0"
        x-transition:leave-end="opacity-0 -translate-y-2"
        class="lg:hidden bg-white border-t border-slate-200 shadow-xl"
    >

        <div class="max-h-[calc(100vh-130px)] overflow-y-auto py-3">

            <a
                href="{{ route('home') }}"
                @click="mobileMenu = false"
                class="block px-5 py-3.5 text-sm font-bold text-[#D71920] bg-slate-50"
            >
                Home
            </a>


            {{-- Mobile Products --}}
            <div>

                <button
                    type="button"
                    @click="productsOpen = !productsOpen"
                    class="w-full flex items-center justify-between px-5 py-3.5 text-sm font-semibold text-slate-700"
                >

                    Products

                    <svg
                        xmlns="http://www.w3.org/2000/svg"
                        class="w-4 h-4 transition-transform"
                        :class="{ 'rotate-180': productsOpen }"
                        fill="none"
                        viewBox="0 0 24 24"
                        stroke="currentColor"
                        stroke-width="2"
                    >
                        <path
                            stroke-linecap="round"
                            stroke-linejoin="round"
                            d="m6 9 6 6 6-6"
                        />
                    </svg>

                </button>


                <div
                    x-show="productsOpen"
                    x-collapse
                    class="bg-slate-50 border-y border-slate-100"
                >

                    <a href="#products" @click="mobileMenu = false" class="block px-8 py-2.5 text-sm text-slate-600">
                        Soil Testing
                    </a>

                    <a href="#products" @click="mobileMenu = false" class="block px-8 py-2.5 text-sm text-slate-600">
                        Concrete Testing
                    </a>

                    <a href="#products" @click="mobileMenu = false" class="block px-8 py-2.5 text-sm text-slate-600">
                        Cement Testing
                    </a>

                    <a href="#products" @click="mobileMenu = false" class="block px-8 py-2.5 text-sm text-slate-600">
                        Aggregate Testing
                    </a>

                    <a href="#products" @click="mobileMenu = false" class="block px-8 py-2.5 text-sm text-slate-600">
                        Bitumen / Asphalt
                    </a>

                    <a href="#products" @click="mobileMenu = false" class="block px-8 py-2.5 text-sm text-slate-600">
                        Rock Testing
                    </a>

                    <a href="#products" @click="mobileMenu = false" class="block px-8 py-2.5 text-sm text-slate-600">
                        Laboratory Equipment
                    </a>

                </div>

            </div>


            <a
                href="{{ route('home') }}#about"
                @click="mobileMenu = false"
                class="block px-5 py-3.5 text-sm font-semibold text-slate-700 hover:bg-slate-50"
            >
                About Us
            </a>


            <a
                href="{{ route('home') }}#manufacturing"
                @click="mobileMenu = false"
                class="block px-5 py-3.5 text-sm font-semibold text-slate-700 hover:bg-slate-50"
            >
                Manufacturing
            </a>


            <a
                href="{{ route('home') }}#solutions"
                @click="mobileMenu = false"
                class="block px-5 py-3.5 text-sm font-semibold text-slate-700 hover:bg-slate-50"
            >
                Complete Lab Solutions
            </a>


            <a
                href="{{ route('home') }}#services"
                @click="mobileMenu = false"
                class="block px-5 py-3.5 text-sm font-semibold text-slate-700 hover:bg-slate-50"
            >
                Services & Support
            </a>


            <a
                href="{{ route('home') }}#downloads"
                @click="mobileMenu = false"
                class="block px-5 py-3.5 text-sm font-semibold text-slate-700 hover:bg-slate-50"
            >
                Downloads
            </a>


            <a
                href="{{ route('home') }}#contact"
                @click="mobileMenu = false"
                class="block px-5 py-3.5 text-sm font-semibold text-slate-700 hover:bg-slate-50"
            >
                Contact Us
            </a>


            {{-- Mobile CTA --}}
            <div class="px-5 pt-3 pb-2">

                <a
                    href="{{ route('home') }}#contact"
                    @click="mobileMenu = false"
                    class="flex items-center justify-center w-full bg-[#D71920] text-white py-3.5 text-sm font-bold uppercase tracking-wide hover:bg-[#073B66] transition"
                >
                    Request a Quote
                </a>

            </div>


            {{-- Mobile Search --}}
            <div class="px-5 pt-3 pb-4">

                <div class="relative">

                    <input
                        type="search"
                        placeholder="Search products..."
                        class="w-full h-11 border border-slate-200 px-4 pr-11 text-sm outline-none focus:border-[#073B66]"
                    >

                    <button
                        type="button"
                        class="absolute right-0 top-0 w-11 h-11 flex items-center justify-center text-[#073B66]"
                    >

                        <svg
                            xmlns="http://www.w3.org/2000/svg"
                            class="w-5 h-5"
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

                    </button>

                </div>

            </div>

        </div>

    </div>

</header>


{{-- =========================================================
     BACK TO TOP
========================================================= --}}

<div
    x-data="{ show: false }"
    x-init="
        window.addEventListener('scroll', () => {
            show = window.scrollY > 500
        })
    "
    x-show="show"
    x-cloak
    x-transition
    class="fixed bottom-6 right-5 sm:right-7 z-[9999]"
>

    <button
        type="button"
        @click="window.scrollTo({ top: 0, behavior: 'smooth' })"
        class="group w-11 h-11 sm:w-12 sm:h-12
               flex items-center justify-center
               bg-[#032B55]
               hover:bg-[#D71920]
               text-white
               shadow-xl
               transition-all duration-300
               hover:-translate-y-1"
        aria-label="Back to top"
    >

        <svg
            xmlns="http://www.w3.org/2000/svg"
            class="w-5 h-5 transition-transform duration-300 group-hover:-translate-y-1"
            fill="none"
            viewBox="0 0 24 24"
            stroke="currentColor"
            stroke-width="1.8"
        >
            <path
                stroke-linecap="round"
                stroke-linejoin="round"
                d="M5 15l7-7 7 7"
            />
        </svg>

    </button>

</div>