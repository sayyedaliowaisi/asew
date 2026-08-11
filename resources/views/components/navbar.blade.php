<header class="w-full">

    {{-- =====================================================
         TOP INFORMATION BAR
    ====================================================== --}}
    <div class="bg-[#073B66] text-white">

        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">

            <div
                class="min-h-[44px] flex flex-col sm:flex-row
                       items-center justify-center lg:justify-between
                       gap-2 py-2 text-sm"
            >

                {{-- Contact Information --}}
                <div class="flex flex-wrap items-center justify-center gap-4 sm:gap-6">

                    <a
                        href="tel:+919899211119"
                        class="flex items-center gap-2
                               hover:text-[#E31E24] transition"
                    >
                        <span>☎</span>
                        <span>+91 98992 11119</span>
                    </a>

                    <a
                        href="mailto:jatin@asewindia.com"
                        class="flex items-center gap-2
                               hover:text-[#E31E24] transition"
                    >
                        <span>✉</span>
                        <span>jatin@asewindia.com</span>
                    </a>

                </div>


                {{-- Business Hours --}}
                <div class="hidden md:flex items-center gap-2">
                    <span>◷</span>
                    <span>Mon - Sat: 9:00 AM - 6:00 PM</span>
                </div>

            </div>

        </div>

    </div>


    {{-- =====================================================
         MAIN NAVIGATION
    ====================================================== --}}
    <nav
        x-data="{ open: false }"
        class="bg-white border-b border-gray-200
               shadow-sm relative z-50"
    >

        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">

            <div class="h-[82px] flex items-center justify-between">


                {{-- =================================================
                     LOGO
                ================================================== --}}
                <a
                    href="{{ route('home') }}"
                    class="flex items-center shrink-0"
                >

                    <img
                        src="{{ asset('images/asew-logo.jpg') }}"
                        alt="Associated Scientific & Engineering Works"
                        class="h-16 sm:h-[70px] w-auto object-contain"
                    >

                </a>


                {{-- =================================================
                     DESKTOP NAVIGATION
                ================================================== --}}
                <div class="hidden lg:flex items-center gap-7">

                    {{-- Home --}}
                    <a
                        href="{{ route('home') }}"
                        class="text-[15px] font-medium text-gray-800
                               hover:text-[#073B66] transition"
                    >
                        Home
                    </a>


                    {{-- About --}}
                    <a
                        href="#about"
                        class="text-[15px] font-medium text-gray-800
                               hover:text-[#073B66] transition"
                    >
                        About Us
                    </a>


                    {{-- Products --}}
                    <a
                        href="#products"
                        class="text-[15px] font-medium text-gray-800
                               hover:text-[#073B66] transition"
                    >
                        Products
                    </a>


                    {{-- Applications --}}
                    <a
                        href="#applications"
                        class="text-[15px] font-medium text-gray-800
                               hover:text-[#073B66] transition"
                    >
                        Applications
                    </a>


                    {{-- Gallery --}}
                    <a
                        href="#gallery"
                        class="text-[15px] font-medium text-gray-800
                               hover:text-[#073B66] transition"
                    >
                        Gallery
                    </a>


                    {{-- Contact --}}
                    <a
                        href="#contact"
                        class="text-[15px] font-medium text-gray-800
                               hover:text-[#073B66] transition"
                    >
                        Contact Us
                    </a>

                </div>


                {{-- =================================================
                     RIGHT SIDE
                ================================================== --}}
                <div class="hidden lg:flex items-center gap-4">

                    {{-- Search --}}
                    <button
                        type="button"
                        class="w-10 h-10 rounded-full
                               flex items-center justify-center
                               text-gray-700
                               hover:text-[#073B66]
                               hover:bg-gray-100
                               transition"
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


                    {{-- Request a Quote --}}
                    <a
                        href="#contact"
                        class="bg-[#E31E24]
                               hover:bg-[#C8181D]
                               text-white
                               px-5 py-3
                               font-semibold text-sm
                               transition duration-300
                               shadow-sm"
                    >
                        Request a Quote
                    </a>

                </div>


                {{-- =================================================
                     MOBILE MENU BUTTON
                ================================================== --}}
                <button
                    @click="open = !open"
                    class="lg:hidden w-11 h-11
                           flex items-center justify-center
                           border border-gray-200
                           text-gray-800
                           hover:border-[#073B66]
                           hover:text-[#073B66]
                           transition"
                    aria-label="Toggle menu"
                >

                    {{-- Hamburger --}}
                    <svg
                        x-show="!open"
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
                x-transition
                @click.outside="open = false"
                class="lg:hidden border-t border-gray-200 py-4"
            >

                <div class="flex flex-col">

                    {{-- Home --}}
                    <a
                        href="{{ route('home') }}"
                        @click="open = false"
                        class="px-3 py-3 font-medium text-gray-800
                               hover:bg-gray-50
                               hover:text-[#073B66]"
                    >
                        Home
                    </a>


                    {{-- About --}}
                    <a
                        href="#about"
                        @click="open = false"
                        class="px-3 py-3 font-medium text-gray-800
                               hover:bg-gray-50
                               hover:text-[#073B66]"
                    >
                        About Us
                    </a>


                    {{-- Products --}}
                    <a
                        href="#products"
                        @click="open = false"
                        class="px-3 py-3 font-medium text-gray-800
                               hover:bg-gray-50
                               hover:text-[#073B66]"
                    >
                        Products
                    </a>


                    {{-- Applications --}}
                    <a
                        href="#applications"
                        @click="open = false"
                        class="px-3 py-3 font-medium text-gray-800
                               hover:bg-gray-50
                               hover:text-[#073B66]"
                    >
                        Applications
                    </a>


                    {{-- Gallery --}}
                    <a
                        href="#gallery"
                        @click="open = false"
                        class="px-3 py-3 font-medium text-gray-800
                               hover:bg-gray-50
                               hover:text-[#073B66]"
                    >
                        Gallery
                    </a>


                    {{-- Contact --}}
                    <a
                        href="#contact"
                        @click="open = false"
                        class="px-3 py-3 font-medium text-gray-800
                               hover:bg-gray-50
                               hover:text-[#073B66]"
                    >
                        Contact Us
                    </a>


                    {{-- Request Quote --}}
                    <a
                        href="#contact"
                        @click="open = false"
                        class="mt-3
                               bg-[#E31E24]
                               hover:bg-[#C8181D]
                               text-white
                               text-center
                               font-semibold
                               px-5 py-3
                               transition"
                    >
                        Request a Quote
                    </a>

                </div>

            </div>

        </div>

    </nav>

</header>