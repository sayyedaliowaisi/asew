<footer class="bg-[#062653] text-white">

    {{-- =========================================================
         MAIN FOOTER
    ========================================================== --}}
    <div class="max-w-7xl mx-auto px-5 sm:px-6 lg:px-8 py-10">

        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-5 gap-8 lg:gap-6">


            {{-- =================================================
                 COMPANY
            ================================================== --}}
            <div class="lg:pr-5">

                <div class="flex items-start gap-3 mb-4">

                    <img
                        src="{{ asset('images/asew-logo.jpg') }}"
                        alt="Associated Scientific & Engineering Works"
                        class="w-11 h-11 object-contain rounded-full bg-white"
                    >

                    <div>
                        <h3 class="text-sm font-bold uppercase leading-5">
                            Associated Scientific &
                            <br>
                            Engineering Works
                        </h3>
                    </div>

                </div>


                <p class="text-[12px] leading-5 text-blue-100/80">
                    Since 1975, ASEW has been a trusted name in manufacturing
                    precision testing instruments and complete laboratory
                    solutions for global industries.
                </p>


                {{-- Social Icons --}}
                <div class="flex items-center gap-2 mt-5">

                    <a
                        href="#"
                        aria-label="LinkedIn"
                        class="w-7 h-7 border border-blue-200/40
                               rounded-full flex items-center justify-center
                               text-xs font-semibold
                               hover:bg-[#E31E24]
                               hover:border-[#E31E24]
                               transition"
                    >
                        in
                    </a>

                    <a
                        href="#"
                        aria-label="Instagram"
                        class="w-7 h-7 border border-blue-200/40
                               rounded-full flex items-center justify-center
                               text-xs font-semibold
                               hover:bg-[#E31E24]
                               hover:border-[#E31E24]
                               transition"
                    >
                        ◎
                    </a>

                    <a
                        href="#"
                        aria-label="Facebook"
                        class="w-7 h-7 border border-blue-200/40
                               rounded-full flex items-center justify-center
                               text-xs font-semibold
                               hover:bg-[#E31E24]
                               hover:border-[#E31E24]
                               transition"
                    >
                        f
                    </a>

                </div>

            </div>



            {{-- =================================================
                 PRODUCT CATEGORIES
            ================================================== --}}
            <div class="lg:border-l lg:border-white/15 lg:pl-6">

                <h4 class="text-[11px] font-bold uppercase tracking-wide
                           text-white mb-5">
                    Product Categories
                </h4>


                <div class="space-y-1.5 text-[11px] text-blue-100/80">

                    <a href="#products"
                       class="block hover:text-white transition">
                        Soil Testing
                    </a>

                    <a href="#products"
                       class="block hover:text-white transition">
                        Concrete Testing
                    </a>

                    <a href="#products"
                       class="block hover:text-white transition">
                        Cement Testing
                    </a>

                    <a href="#products"
                       class="block hover:text-white transition">
                        Aggregate Testing
                    </a>

                    <a href="#products"
                       class="block hover:text-white transition">
                        Bitumen / Asphalt Testing
                    </a>

                    <a href="#products"
                       class="block hover:text-white transition">
                        Rock Testing
                    </a>

                    <a href="#products"
                       class="block hover:text-white transition">
                        Material Testing
                    </a>

                    <a href="#products"
                       class="block hover:text-white transition">
                        Survey Instruments
                    </a>

                    <a href="#products"
                       class="block hover:text-white transition">
                        Laboratory Equipment
                    </a>

                </div>

            </div>



            {{-- =================================================
                 QUICK LINKS
            ================================================== --}}
            <div class="lg:border-l lg:border-white/15 lg:pl-6">

                <h4 class="text-[11px] font-bold uppercase tracking-wide
                           text-white mb-5">
                    Quick Links
                </h4>


                <div class="space-y-1.5 text-[11px] text-blue-100/80">

                    <a href="{{ route('home') }}"
                       class="block hover:text-white transition">
                        Home
                    </a>

                    <a href="{{ route('home') }}#about"
                       class="block hover:text-white transition">
                        About Us
                    </a>

                    <a href="{{ route('home') }}#products"
                       class="block hover:text-white transition">
                        Products
                    </a>

                    <a href="{{ route('home') }}#manufacturing"
                       class="block hover:text-white transition">
                        Manufacturing
                    </a>

                    <a href="{{ route('home') }}#applications"
                       class="block hover:text-white transition">
                        Complete Lab Solutions
                    </a>

                    <a href="{{ route('home') }}#services"
                       class="block hover:text-white transition">
                        Services & Support
                    </a>

                    <a href="#"
                       class="block hover:text-white transition">
                        Downloads
                    </a>

                    <a href="{{ route('home') }}#contact"
                       class="block hover:text-white transition">
                        Contact Us
                    </a>

                </div>

            </div>



            {{-- =================================================
                 SERVICES & SUPPORT
            ================================================== --}}
            <div class="lg:border-l lg:border-white/15 lg:pl-6">

                <h4 class="text-[11px] font-bold uppercase tracking-wide
                           text-white mb-5">
                    Services & Support
                </h4>


                <div class="space-y-1.5 text-[11px] text-blue-100/80">

                    <a href="#services"
                       class="block hover:text-white transition">
                        Installation
                    </a>

                    <a href="#services"
                       class="block hover:text-white transition">
                        Calibration
                    </a>

                    <a href="#services"
                       class="block hover:text-white transition">
                        Training
                    </a>

                    <a href="#services"
                       class="block hover:text-white transition">
                        Maintenance
                    </a>

                    <a href="#services"
                       class="block hover:text-white transition">
                        Annual Maintenance
                    </a>

                    <a href="#services"
                       class="block hover:text-white transition">
                        Contracts
                    </a>

                    <a href="#services"
                       class="block hover:text-white transition">
                        Spare Parts Supply
                    </a>

                </div>

            </div>



            {{-- =================================================
                 CONTACT US
            ================================================== --}}
            <div class="lg:border-l lg:border-white/15 lg:pl-6">

                <h4 class="text-[11px] font-bold uppercase tracking-wide
                           text-white mb-5">
                    Contact Us
                </h4>


                <div class="space-y-4 text-[11px] text-blue-100/80">


                    {{-- Address --}}
                    <div class="flex items-start gap-3">

                        <span class="text-[#E31E24] text-base mt-[-2px]">
                            ◉
                        </span>

                        <p class="leading-5">
                            C-40, Sector-10,
                            <br>
                            Noida-201301, India
                        </p>

                    </div>


                    {{-- Phone --}}
                    <a
                        href="tel:+919899211119"
                        class="flex items-center gap-3
                               hover:text-white transition"
                    >

                        <span class="text-[#E31E24] text-base">
                            ☎
                        </span>

                        <span>
                            +91 120 456 6201
                        </span>

                    </a>


                    {{-- Email --}}
                    <a
                        href="mailto:sales@asew.in"
                        class="flex items-center gap-3
                               hover:text-white transition"
                    >

                        <span class="text-[#E31E24] text-base">
                            ✉
                        </span>

                        <span>
                            sales@asew.in
                        </span>

                    </a>


                    {{-- Website --}}
                    <a
                        href="{{ route('home') }}"
                        class="flex items-center gap-3
                               hover:text-white transition"
                    >

                        <span class="text-[#E31E24] text-base">
                            ◎
                        </span>

                        <span>
                            www.asew.in
                        </span>

                    </a>

                </div>

            </div>

        </div>

    </div>



    {{-- =========================================================
         BOTTOM BAR
    ========================================================== --}}
    <div class="border-t border-white/10">

        <div
            class="max-w-7xl mx-auto
                   px-5 sm:px-6 lg:px-8
                   py-3
                   flex flex-col md:flex-row
                   items-center
                   justify-between
                   gap-3
                   text-[10px]
                   text-blue-100/70"
        >

            {{-- Copyright --}}
            <p class="text-center md:text-left">
                © {{ date('Y') }} ASEW - Associated Scientific &
                Engineering Works. All Rights Reserved.
            </p>


            {{-- Legal Links --}}
            <div class="flex items-center gap-4">

                <a
                    href="#"
                    class="hover:text-white transition"
                >
                    Privacy Policy
                </a>

                <span class="text-white/20">|</span>

                <a
                    href="#"
                    class="hover:text-white transition"
                >
                    Terms & Conditions
                </a>

            </div>

        </div>

    </div>

</footer>