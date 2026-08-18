{{-- =========================================================
     TOP INFORMATION BAR
========================================================= --}}

<header class="w-full">

    <div class="bg-[#073B66] text-white">

        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">

            <div
                class="min-h-[44px]
                       flex flex-col sm:flex-row
                       items-center justify-center lg:justify-between
                       gap-2 py-2
                       text-sm"
            >

                {{-- Contact Information --}}
                <div class="flex flex-wrap items-center justify-center gap-4 sm:gap-6">

                    {{-- Phone --}}
                    <a
                        href="tel:+919899211119"
                        class="flex items-center gap-2
                               hover:text-[#E31E24]
                               transition duration-300"
                    >
                        <span class="text-base">☎</span>
                        <span>+91 98992 11119</span>
                    </a>


                    {{-- Email --}}
                    <a
                        href="mailto:jatin@asewindia.com"
                        class="flex items-center gap-2
                               hover:text-[#E31E24]
                               transition duration-300"
                    >
                        <span class="text-base">✉</span>
                        <span>jatin@asewindia.com</span>
                    </a>

                </div>


                {{-- Business Hours --}}
                <div class="hidden md:flex items-center gap-2">

                    <span class="text-base">◷</span>

                    <span>
                        Mon - Sat: 9:00 AM - 6:00 PM
                    </span>

                </div>

            </div>

        </div>

    </div>

</header>


{{-- =========================================================
     MAIN STICKY NAVIGATION
========================================================= --}}

<nav
    x-data="{ open: false }"
    class="sticky top-0 z-[9999]
           w-full
           bg-white
           border-b border-gray-200
           shadow-md"
>

    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">

        {{-- =================================================
             NAVBAR MAIN ROW
        ================================================== --}}

        <div class="h-[82px] flex items-center justify-between">


            {{-- =================================================
                 LOGO
            ================================================== --}}

            <a
                href="{{ route('home') }}"
                class="flex items-center shrink-0
                       focus:outline-none"
            >

                <img
                    src="{{ asset('images/asew-logo.jpg') }}"
                    alt="Associated Scientific & Engineering Works"
                    class="h-16 sm:h-[70px]
                           w-auto
                           object-contain"
                >

            </a>


            {{-- =================================================
                 DESKTOP NAVIGATION
            ================================================== --}}

            <div class="hidden lg:flex items-center gap-6 xl:gap-7">


                {{-- Home --}}
                <a
                    href="{{ route('home') }}"
                    class="relative
                           text-[15px]
                           font-medium
                           text-gray-800
                           hover:text-[#073B66]
                           transition duration-300
                           group"
                >
                    Home

                    <span
                        class="absolute
                               left-0 -bottom-2
                               w-0 h-[2px]
                               bg-[#E31E24]
                               transition-all duration-300
                               group-hover:w-full"
                    ></span>
                </a>


                {{-- About --}}
                <a
                    href="{{ route('home') }}#about"
                    class="relative
                           text-[15px]
                           font-medium
                           text-gray-800
                           hover:text-[#073B66]
                           transition duration-300
                           group"
                >
                    About Us

                    <span
                        class="absolute
                               left-0 -bottom-2
                               w-0 h-[2px]
                               bg-[#E31E24]
                               transition-all duration-300
                               group-hover:w-full"
                    ></span>
                </a>


                {{-- Products --}}
                <a
                    href="{{ route('home') }}#products"
                    class="relative
                           text-[15px]
                           font-medium
                           text-gray-800
                           hover:text-[#073B66]
                           transition duration-300
                           group"
                >
                    Products

                    <span
                        class="absolute
                               left-0 -bottom-2
                               w-0 h-[2px]
                               bg-[#E31E24]
                               transition-all duration-300
                               group-hover:w-full"
                    ></span>
                </a>


                {{-- Applications --}}
                <a
                    href="{{ route('home') }}#applications"
                    class="relative
                           text-[15px]
                           font-medium
                           text-gray-800
                           hover:text-[#073B66]
                           transition duration-300
                           group"
                >
                    Applications

                    <span
                        class="absolute
                               left-0 -bottom-2
                               w-0 h-[2px]
                               bg-[#E31E24]
                               transition-all duration-300
                               group-hover:w-full"
                    ></span>
                </a>


                {{-- Gallery --}}
                <a
                    href="{{ route('home') }}#gallery"
                    class="relative
                           text-[15px]
                           font-medium
                           text-gray-800
                           hover:text-[#073B66]
                           transition duration-300
                           group"
                >
                    Gallery

                    <span
                        class="absolute
                               left-0 -bottom-2
                               w-0 h-[2px]
                               bg-[#E31E24]
                               transition-all duration-300
                               group-hover:w-full"
                    ></span>
                </a>


                {{-- Contact --}}
                <a
                    href="{{ route('home') }}#contact"
                    class="relative
                           text-[15px]
                           font-medium
                           text-gray-800
                           hover:text-[#073B66]
                           transition duration-300
                           group"
                >
                    Contact Us

                    <span
                        class="absolute
                               left-0 -bottom-2
                               w-0 h-[2px]
                               bg-[#E31E24]
                               transition-all duration-300
                               group-hover:w-full"
                    ></span>
                </a>

            </div>


            {{-- =================================================
                 RIGHT SIDE
            ================================================== --}}

            <div class="hidden lg:flex items-center gap-3">


                {{-- =================================================
                     STANDARD / 3D SWITCH
                ================================================== --}}

                <div
                    class="flex items-center
                           border border-gray-200
                           bg-gray-50
                           p-1"
                >

                    {{-- Standard --}}
                    <a
                        href="{{ route('home') }}"
                        class="px-3 xl:px-4
                               py-2
                               text-sm
                               font-semibold
                               transition duration-300
                               {{ request()->routeIs('home')
                                   ? 'bg-[#073B66] text-white shadow-sm'
                                   : 'text-[#073B66] hover:bg-white' }}"
                    >
                        Standard
                    </a>


                    {{-- 3D --}}
                    <a
                        href="{{ route('home.3d') }}"
                        class="px-3 xl:px-4
                               py-2
                               text-sm
                               font-semibold
                               transition duration-300
                               {{ request()->routeIs('home.3d')
                                   ? 'bg-[#E31E24] text-white shadow-sm'
                                   : 'text-[#073B66] hover:bg-white' }}"
                    >
                        3D
                    </a>

                </div>


                {{-- =================================================
                     SEARCH
                ================================================== --}}

                <button
                    type="button"
                    class="w-10 h-10
                           rounded-full
                           flex items-center justify-center
                           text-gray-700
                           hover:text-[#073B66]
                           hover:bg-gray-100
                           transition duration-300"
                    aria-label="Search"
                >

                    <svg
                        xmlns="http://www.w3.org/2000/svg"
                        class="w-5 h-5"
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

                </button>


                {{-- =================================================
                     REQUEST A QUOTE
                ================================================== --}}

                <a
                    href="{{ route('home') }}#contact"
                    class="bg-[#E31E24]
                           hover:bg-[#C8181D]
                           text-white
                           px-4 xl:px-5
                           py-3
                           font-semibold
                           text-sm
                           transition duration-300
                           shadow-sm
                           whitespace-nowrap"
                >
                    Request a Quote
                </a>

            </div>


            {{-- =================================================
                 MOBILE MENU BUTTON
            ================================================== --}}

            <button
                type="button"
                @click="open = !open"
                class="lg:hidden
                       w-11 h-11
                       flex items-center justify-center
                       border border-gray-200
                       bg-white
                       text-gray-800
                       hover:border-[#073B66]
                       hover:text-[#073B66]
                       transition duration-300"
                aria-label="Toggle menu"
                :aria-expanded="open.toString()"
            >

                {{-- Hamburger --}}
                <svg
                    x-show="!open"
                    x-cloak
                    xmlns="http://www.w3.org/2000/svg"
                    class="w-6 h-6"
                    fill="none"
                    viewBox="0 0 24 24"
                    stroke="currentColor"
                    stroke-width="2"
                >

                    <path
                        stroke-linecap="round"
                        stroke-linejoin="round"
                        d="M4 6h16M4 12h16M4 18h16"
                    />

                </svg>


                {{-- Close --}}
                <svg
                    x-show="open"
                    x-cloak
                    xmlns="http://www.w3.org/2000/svg"
                    class="w-6 h-6"
                    fill="none"
                    viewBox="0 0 24 24"
                    stroke="currentColor"
                    stroke-width="2"
                >

                    <path
                        stroke-linecap="round"
                        stroke-linejoin="round"
                        d="M6 18 18 6M6 6l12 12"
                    />

                </svg>

            </button>

        </div>


        {{-- =================================================
             MOBILE MENU
        ================================================== --}}

        <div
            x-show="open"
            x-cloak
            x-transition:enter="transition ease-out duration-200"
            x-transition:enter-start="opacity-0 -translate-y-2"
            x-transition:enter-end="opacity-100 translate-y-0"
            x-transition:leave="transition ease-in duration-150"
            x-transition:leave-start="opacity-100 translate-y-0"
            x-transition:leave-end="opacity-0 -translate-y-2"
            @click.outside="open = false"
            class="lg:hidden
                   border-t border-gray-200
                   bg-white
                   py-4"
        >

            <div class="flex flex-col">


                {{-- =================================================
                     STANDARD / 3D SWITCH MOBILE
                ================================================== --}}

                <div class="grid grid-cols-2 gap-2 px-3 pb-3">

                    {{-- Standard --}}
                    <a
                        href="{{ route('home') }}"
                        @click="open = false"
                        class="text-center
                               px-4 py-3
                               font-semibold
                               border
                               transition duration-300
                               {{ request()->routeIs('home')
                                   ? 'bg-[#073B66] text-white border-[#073B66]'
                                   : 'border-gray-200 text-[#073B66] hover:bg-gray-50' }}"
                    >
                        Standard
                    </a>


                    {{-- 3D --}}
                    <a
                        href="{{ route('home.3d') }}"
                        @click="open = false"
                        class="text-center
                               px-4 py-3
                               font-semibold
                               border
                               transition duration-300
                               {{ request()->routeIs('home.3d')
                                   ? 'bg-[#E31E24] text-white border-[#E31E24]'
                                   : 'border-gray-200 text-[#073B66] hover:bg-gray-50' }}"
                    >
                        3D
                    </a>

                </div>


                {{-- Home --}}
                <a
                    href="{{ route('home') }}"
                    @click="open = false"
                    class="px-3 py-3
                           font-medium
                           text-gray-800
                           hover:bg-gray-50
                           hover:text-[#073B66]
                           transition"
                >
                    Home
                </a>


                {{-- About --}}
                <a
                    href="{{ route('home') }}#about"
                    @click="open = false"
                    class="px-3 py-3
                           font-medium
                           text-gray-800
                           hover:bg-gray-50
                           hover:text-[#073B66]
                           transition"
                >
                    About Us
                </a>


                {{-- Products --}}
                <a
                    href="{{ route('home') }}#products"
                    @click="open = false"
                    class="px-3 py-3
                           font-medium
                           text-gray-800
                           hover:bg-gray-50
                           hover:text-[#073B66]
                           transition"
                >
                    Products
                </a>


                {{-- Applications --}}
                <a
                    href="{{ route('home') }}#applications"
                    @click="open = false"
                    class="px-3 py-3
                           font-medium
                           text-gray-800
                           hover:bg-gray-50
                           hover:text-[#073B66]
                           transition"
                >
                    Applications
                </a>


                {{-- Gallery --}}
                <a
                    href="{{ route('home') }}#gallery"
                    @click="open = false"
                    class="px-3 py-3
                           font-medium
                           text-gray-800
                           hover:bg-gray-50
                           hover:text-[#073B66]
                           transition"
                >
                    Gallery
                </a>


                {{-- Contact --}}
                <a
                    href="{{ route('home') }}#contact"
                    @click="open = false"
                    class="px-3 py-3
                           font-medium
                           text-gray-800
                           hover:bg-gray-50
                           hover:text-[#073B66]
                           transition"
                >
                    Contact Us
                </a>


                {{-- Request Quote --}}
                <a
                    href="{{ route('home') }}#contact"
                    @click="open = false"
                    class="mx-3 mt-3
                           bg-[#E31E24]
                           hover:bg-[#C8181D]
                           text-white
                           text-center
                           font-semibold
                           px-5 py-3
                           transition duration-300"
                >
                    Request a Quote
                </a>

            </div>

        </div>

    </div>

</nav>

{{-- =========================================================
     BACK TO TOP BUTTON
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
    x-transition:enter="transition ease-out duration-300"
    x-transition:enter-start="opacity-0 translate-y-3 scale-90"
    x-transition:enter-end="opacity-100 translate-y-0 scale-100"
    x-transition:leave="transition ease-in duration-200"
    x-transition:leave-start="opacity-100 translate-y-0 scale-100"
    x-transition:leave-end="opacity-0 translate-y-3 scale-90"
    class="fixed bottom-6 right-6 z-[9998]"
>

    <button
        type="button"
        @click="window.scrollTo({
            top: 0,
            behavior: 'smooth'
        })"
        class="group
               w-12 h-12
               sm:w-14 sm:h-14
               flex items-center justify-center
               bg-[#073B66]
               hover:bg-[#E31E24]
               text-white
               shadow-xl
               border border-white/10
               transition-all duration-300
               hover:-translate-y-1"
        aria-label="Back to top"
        title="Back to top"
    >

        <svg
            xmlns="http://www.w3.org/2000/svg"
            class="w-5 h-5 sm:w-6 sm:h-6
                   transition-transform duration-300
                   group-hover:-translate-y-1"
            fill="none"
            viewBox="0 0 24 24"
            stroke="currentColor"
            stroke-width="2"
        >

            <path
                stroke-linecap="round"
                stroke-linejoin="round"
                d="M5 15l7-7 7 7"
            />

        </svg>

    </button>

</div>