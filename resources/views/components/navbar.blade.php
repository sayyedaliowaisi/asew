<header class="w-full">

    {{-- Top Information Bar --}}
    <div class="bg-[#073B66] text-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">

            <div class="min-h-[44px] flex flex-col sm:flex-row items-center justify-center lg:justify-between gap-2 py-2 text-sm">

                <div class="flex flex-wrap items-center justify-center gap-4 sm:gap-6">
                    <a href="tel:+919999999999"
                       class="flex items-center gap-2 hover:text-[#E31E24] transition">
                        <span>☎</span>
                        <span>+91 99999 99999</span>
                    </a>

                    <a href="mailto:info@asew.in"
                       class="flex items-center gap-2 hover:text-[#E31E24] transition">
                        <span>✉</span>
                        <span>info@asew.in</span>
                    </a>
                </div>

                <div class="hidden md:flex items-center gap-2">
                    <span>◷</span>
                    <span>Mon - Sat: 9:00 AM - 6:00 PM</span>
                </div>

            </div>

        </div>
    </div>


    {{-- Main Navigation --}}
    <nav
        x-data="{ open: false }"
        class="bg-white border-b border-gray-200 shadow-sm relative z-50"
    >

        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">

            <div class="h-[82px] flex items-center justify-between">

                {{-- Logo --}}
                <a href="{{ route('home') }}"
                   class="flex items-center shrink-0">

                    <img
                        src="{{ asset('images/asew-logo.jpg') }}"
                        alt="Associated Scientific & Engineering"
                        class="h-16 sm:h-[70px] w-auto object-contain"
                    >

                </a>


                {{-- Desktop Navigation --}}
                <div class="hidden lg:flex items-center gap-7">

                    <a href="{{ route('home') }}"
                       class="text-[15px] font-medium text-gray-800 hover:text-[#073B66] transition">
                        Home
                    </a>

                    <a href="#about"
                       class="text-[15px] font-medium text-gray-800 hover:text-[#073B66] transition">
                        About Us
                    </a>

                    <a href="#products"
                       class="text-[15px] font-medium text-gray-800 hover:text-[#073B66] transition">
                        Products
                    </a>

                    <a href="#categories"
                       class="text-[15px] font-medium text-gray-800 hover:text-[#073B66] transition">
                        Categories
                    </a>

                    <a href="#applications"
                       class="text-[15px] font-medium text-gray-800 hover:text-[#073B66] transition">
                        Applications
                    </a>

                    <a href="#gallery"
                       class="text-[15px] font-medium text-gray-800 hover:text-[#073B66] transition">
                        Gallery
                    </a>

                    <a href="#contact"
                       class="text-[15px] font-medium text-gray-800 hover:text-[#073B66] transition">
                        Contact
                    </a>

                </div>


                {{-- Right Side --}}
                <div class="hidden lg:flex items-center gap-4">

                    {{-- Search --}}
                    <button
                        type="button"
                        class="w-10 h-10 rounded-full flex items-center justify-center
                               text-gray-700 hover:text-[#073B66]
                               hover:bg-gray-100 transition"
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


                    {{-- Quote Button --}}
                    <a
                        href="#contact"
                        class="bg-[#E31E24] hover:bg-[#C8181D]
                               text-white px-5 py-3
                               font-semibold text-sm
                               transition duration-300
                               shadow-sm"
                    >
                        Request a Quote
                    </a>

                </div>


                {{-- Mobile Menu Button --}}
                <button
                    @click="open = !open"
                    class="lg:hidden w-11 h-11 flex items-center justify-center
                           border border-gray-200 text-gray-800
                           hover:border-[#073B66] hover:text-[#073B66]
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


            {{-- Mobile Menu --}}
            <div
                x-show="open"
                x-transition
                @click.outside="open = false"
                class="lg:hidden border-t border-gray-200 py-4"
            >

                <div class="flex flex-col">

                    <a
                        href="{{ route('home') }}"
                        @click="open = false"
                        class="px-3 py-3 font-medium text-gray-800
                               hover:bg-gray-50 hover:text-[#073B66]"
                    >
                        Home
                    </a>

                    <a
                        href="#about"
                        @click="open = false"
                        class="px-3 py-3 font-medium text-gray-800
                               hover:bg-gray-50 hover:text-[#073B66]"
                    >
                        About Us
                    </a>

                    <a
                        href="#products"
                        @click="open = false"
                        class="px-3 py-3 font-medium text-gray-800
                               hover:bg-gray-50 hover:text-[#073B66]"
                    >
                        Products
                    </a>

                    <a
                        href="#categories"
                        @click="open = false"
                        class="px-3 py-3 font-medium text-gray-800
                               hover:bg-gray-50 hover:text-[#073B66]"
                    >
                        Categories
                    </a>

                    <a
                        href="#applications"
                        @click="open = false"
                        class="px-3 py-3 font-medium text-gray-800
                               hover:bg-gray-50 hover:text-[#073B66]"
                    >
                        Applications
                    </a>

                    <a
                        href="#gallery"
                        @click="open = false"
                        class="px-3 py-3 font-medium text-gray-800
                               hover:bg-gray-50 hover:text-[#073B66]"
                    >
                        Gallery
                    </a>

                    <a
                        href="#contact"
                        @click="open = false"
                        class="px-3 py-3 font-medium text-gray-800
                               hover:bg-gray-50 hover:text-[#073B66]"
                    >
                        Contact
                    </a>


                    <a
                        href="#contact"
                        @click="open = false"
                        class="mt-3 bg-[#E31E24] text-white
                               text-center font-semibold
                               px-5 py-3"
                    >
                        Request a Quote
                    </a>

                </div>

            </div>

        </div>

    </nav>

</header>