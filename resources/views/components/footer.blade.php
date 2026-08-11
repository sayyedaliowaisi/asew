<footer class="bg-[#073B66] text-white">

    {{-- =====================================================
         MAIN FOOTER
    ====================================================== --}}
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-14">

        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-10 lg:gap-12">


            {{-- =================================================
                 COMPANY
            ================================================== --}}
            <div class="lg:col-span-1">

                <a
                    href="{{ route('home') }}"
                    class="inline-block mb-5"
                >
                    <img
                        src="{{ asset('images/asew-logo.jpg') }}"
                        alt="Associated Scientific & Engineering Works"
                        class="h-16 w-auto object-contain bg-white"
                    >
                </a>

                <p class="text-gray-300 leading-7 text-sm">
                    Associated Scientific & Engineering Works is engaged
                    in scientific and material testing instruments and
                    quality control equipment for construction,
                    infrastructure and engineering applications.
                </p>

                <div class="mt-5">

                    <span
                        class="inline-flex items-center
                               bg-[#E31E24]
                               px-4 py-2
                               text-sm font-semibold"
                    >
                        Established in 1975
                    </span>

                </div>

            </div>


            {{-- =================================================
                 QUICK LINKS
            ================================================== --}}
            <div>

                <h3 class="text-lg font-semibold mb-5">
                    Quick Links
                </h3>

                <div class="space-y-3 text-gray-300 text-sm">

                    <a
                        href="{{ route('home') }}"
                        class="block hover:text-white
                               hover:translate-x-1
                               transition"
                    >
                        Home
                    </a>

                    <a
                        href="#about"
                        class="block hover:text-white
                               hover:translate-x-1
                               transition"
                    >
                        About Us
                    </a>

                    <a
                        href="#products"
                        class="block hover:text-white
                               hover:translate-x-1
                               transition"
                    >
                        Products
                    </a>

                    <a
                        href="#applications"
                        class="block hover:text-white
                               hover:translate-x-1
                               transition"
                    >
                        Applications
                    </a>

                    <a
                        href="#gallery"
                        class="block hover:text-white
                               hover:translate-x-1
                               transition"
                    >
                        Gallery
                    </a>

                    <a
                        href="#contact"
                        class="block hover:text-white
                               hover:translate-x-1
                               transition"
                    >
                        Contact Us
                    </a>

                </div>

            </div>


            {{-- =================================================
                 PRODUCTS / EXPERTISE
            ================================================== --}}
            <div>

                <h3 class="text-lg font-semibold mb-5">
                    Our Expertise
                </h3>

                <div class="space-y-3 text-gray-300 text-sm">

                    <p>
                        Scientific Testing Instruments
                    </p>

                    <p>
                        Material Testing Instruments
                    </p>

                    <p>
                        QA / QC Equipment
                    </p>

                    <p>
                        Construction Testing Equipment
                    </p>

                    <p>
                        Engineering Testing Solutions
                    </p>

                </div>

            </div>


            {{-- =================================================
                 CONTACT
            ================================================== --}}
            <div>

                <h3 class="text-lg font-semibold mb-5">
                    Contact Us
                </h3>

                <div class="space-y-4 text-sm">

                    {{-- Phone --}}
                    <a
                        href="tel:+919899211119"
                        class="flex items-start gap-3
                               text-gray-300
                               hover:text-white
                               transition"
                    >

                        <span class="text-[#E31E24] text-lg">
                            ☎
                        </span>

                        <span>
                            +91 98992 11119
                        </span>

                    </a>


                    {{-- Email --}}
                    <a
                        href="mailto:jatin@asewindia.com"
                        class="flex items-start gap-3
                               text-gray-300
                               hover:text-white
                               transition"
                    >

                        <span class="text-[#E31E24] text-lg">
                            ✉
                        </span>

                        <span>
                            jatin@asewindia.com
                        </span>

                    </a>


                    {{-- Business --}}
                    <div class="flex items-start gap-3 text-gray-300">

                        <span class="text-[#E31E24] text-lg">
                            ◷
                        </span>

                        <span>
                            Mon - Sat<br>
                            9:00 AM - 6:00 PM
                        </span>

                    </div>

                </div>


                {{-- Quote Button --}}
                <a
                    href="#contact"
                    class="inline-flex items-center
                           mt-6
                           bg-[#E31E24]
                           hover:bg-[#C8181D]
                           text-white
                           px-5 py-3
                           text-sm font-semibold
                           transition duration-300"
                >
                    Request a Quote

                    <span class="ml-2">
                        →
                    </span>

                </a>

            </div>

        </div>

    </div>


    {{-- =====================================================
         GLOBAL REACH
    ====================================================== --}}
    <div class="border-t border-white/10">

        <div
            class="max-w-7xl mx-auto
                   px-4 sm:px-6 lg:px-8
                   py-5
                   flex flex-col md:flex-row
                   items-center
                   justify-between
                   gap-3
                   text-sm"
        >

            <p class="text-gray-400 text-center md:text-left">
                Serving scientific, construction and engineering
                testing requirements.
            </p>

            <p class="text-gray-400 text-center md:text-right">
                Nigeria · Ethiopia · Latin America · Dubai · Europe
            </p>

        </div>

    </div>


    {{-- =====================================================
         COPYRIGHT
    ====================================================== --}}
    <div class="border-t border-white/10">

        <div
            class="max-w-7xl mx-auto
                   px-4 py-5
                   text-center
                   text-sm text-gray-400"
        >

            © {{ date('Y') }}
            <span class="text-gray-300">
                Associated Scientific & Engineering Works
            </span>.
            All Rights Reserved.

        </div>

    </div>

</footer>