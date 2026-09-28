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

                    <a href="{{ route('home') }}">

                        @if(!empty($siteSettings?->logo))

                            <img
                                src="{{ asset($siteSettings->logo) }}"
                                alt="{{ $siteSettings->company_name ?? 'ASEW' }}"
                                class="w-11 h-11 object-contain rounded-full bg-white"
                            >

                        @else

                            <img
                                src="{{ asset('images/asew-logo.jpg') }}"
                                alt="ASEW"
                                class="w-11 h-11 object-contain rounded-full bg-white"
                            >

                        @endif

                    </a>


                    <div>

                        <h3 class="text-sm font-bold uppercase leading-5">

                            {{ $siteSettings->company_name
                                ?? 'Associated Scientific & Engineering Works' }}

                        </h3>

                    </div>

                </div>


                <p class="text-[12px] leading-5 text-blue-100/80">

                    @if(!empty($siteSettings?->tagline))

                        {{ $siteSettings->tagline }}

                    @else

                        Since 1975, ASEW has been a trusted name in manufacturing
                        precision testing instruments and complete laboratory
                        solutions for global industries.

                    @endif

                </p>


                {{-- SOCIAL ICONS --}}

                @if(
                    !empty($siteSettings?->linkedin) ||
                    !empty($siteSettings?->instagram) ||
                    !empty($siteSettings?->facebook) ||
                    !empty($siteSettings?->youtube)
                )

                    <div class="flex items-center gap-2 mt-5">

                        @if(!empty($siteSettings?->linkedin))

                            <a
                                href="{{ $siteSettings->linkedin }}"
                                target="_blank"
                                rel="noopener noreferrer"
                                aria-label="LinkedIn"
                                class="w-7 h-7
                                       border border-blue-200/40
                                       rounded-full
                                       flex items-center justify-center
                                       text-xs font-semibold
                                       hover:bg-[#E31E24]
                                       hover:border-[#E31E24]
                                       transition"
                            >
                                in
                            </a>

                        @endif


                        @if(!empty($siteSettings?->instagram))

                            <a
                                href="{{ $siteSettings->instagram }}"
                                target="_blank"
                                rel="noopener noreferrer"
                                aria-label="Instagram"
                                class="w-7 h-7
                                       border border-blue-200/40
                                       rounded-full
                                       flex items-center justify-center
                                       text-xs font-semibold
                                       hover:bg-[#E31E24]
                                       hover:border-[#E31E24]
                                       transition"
                            >
                                ◎
                            </a>

                        @endif


                        @if(!empty($siteSettings?->facebook))

                            <a
                                href="{{ $siteSettings->facebook }}"
                                target="_blank"
                                rel="noopener noreferrer"
                                aria-label="Facebook"
                                class="w-7 h-7
                                       border border-blue-200/40
                                       rounded-full
                                       flex items-center justify-center
                                       text-xs font-semibold
                                       hover:bg-[#E31E24]
                                       hover:border-[#E31E24]
                                       transition"
                            >
                                f
                            </a>

                        @endif


                        @if(!empty($siteSettings?->youtube))

                            <a
                                href="{{ $siteSettings->youtube }}"
                                target="_blank"
                                rel="noopener noreferrer"
                                aria-label="YouTube"
                                class="w-7 h-7
                                       border border-blue-200/40
                                       rounded-full
                                       flex items-center justify-center
                                       text-[9px] font-bold
                                       hover:bg-[#E31E24]
                                       hover:border-[#E31E24]
                                       transition"
                            >
                                ▶
                            </a>

                        @endif

                    </div>

                @endif

            </div>



            {{-- =================================================
                 PRODUCT CATEGORIES
            ================================================== --}}

            <div class="lg:border-l lg:border-white/15 lg:pl-6">

                <h4
                    class="text-[11px]
                           font-bold
                           uppercase
                           tracking-wide
                           text-white
                           mb-5"
                >
                    Product Categories
                </h4>


                <div class="space-y-1.5 text-[11px] text-blue-100/80">

                    <a
                        href="{{ route('products', ['category' => 'soil']) }}"
                        class="block hover:text-white transition"
                    >
                        Soil Testing
                    </a>

                    <a
                        href="{{ route('products', ['category' => 'concrete']) }}"
                        class="block hover:text-white transition"
                    >
                        Concrete Testing
                    </a>

                    <a
                        href="{{ route('products', ['category' => 'cement']) }}"
                        class="block hover:text-white transition"
                    >
                        Cement Testing
                    </a>

                    <a
                        href="{{ route('products', ['category' => 'aggregate']) }}"
                        class="block hover:text-white transition"
                    >
                        Aggregate Testing
                    </a>

                    <a
                        href="{{ route('products', ['category' => 'bitumen']) }}"
                        class="block hover:text-white transition"
                    >
                        Bitumen / Asphalt Testing
                    </a>

                    <a
                        href="{{ route('products', ['category' => 'rock']) }}"
                        class="block hover:text-white transition"
                    >
                        Rock Testing
                    </a>

                    <a
                        href="{{ route('products', ['category' => 'material']) }}"
                        class="block hover:text-white transition"
                    >
                        Material Testing
                    </a>

                    <a
                        href="{{ route('products', ['category' => 'survey']) }}"
                        class="block hover:text-white transition"
                    >
                        Survey Instruments
                    </a>

                    <a
                        href="{{ route('products', ['category' => 'laboratory']) }}"
                        class="block hover:text-white transition"
                    >
                        Laboratory Equipment
                    </a>

                </div>

            </div>



            {{-- =================================================
                 QUICK LINKS
            ================================================== --}}

            <div class="lg:border-l lg:border-white/15 lg:pl-6">

                <h4
                    class="text-[11px]
                           font-bold
                           uppercase
                           tracking-wide
                           text-white
                           mb-5"
                >
                    Quick Links
                </h4>


                <div class="space-y-1.5 text-[11px] text-blue-100/80">

                    <a
                        href="{{ route('home') }}"
                        class="block hover:text-white transition"
                    >
                        Home
                    </a>

                    <a
                        href="{{ route('about.company') }}"
                        class="block hover:text-white transition"
                    >
                        About Us
                    </a>

                    <a
                        href="{{ route('products') }}"
                        class="block hover:text-white transition"
                    >
                        Products
                    </a>

                    <a
                        href="{{ route('manufacturing') }}"
                        class="block hover:text-white transition"
                    >
                        Manufacturing
                    </a>

                    <a
                        href="{{ route('lab-solutions') }}"
                        class="block hover:text-white transition"
                    >
                        Complete Lab Solutions
                    </a>

                    <a
                        href="{{ route('services.installation') }}"
                        class="block hover:text-white transition"
                    >
                        Services & Support
                    </a>

                    <a
                        href="{{ route('downloads') }}"
                        class="block hover:text-white transition"
                    >
                        Downloads
                    </a>

                    <a
                        href="{{ route('contact') }}"
                        class="block hover:text-white transition"
                    >
                        Contact Us
                    </a>

                </div>

            </div>



            {{-- =================================================
                 SERVICES & SUPPORT
            ================================================== --}}

            <div class="lg:border-l lg:border-white/15 lg:pl-6">

                <h4
                    class="text-[11px]
                           font-bold
                           uppercase
                           tracking-wide
                           text-white
                           mb-5"
                >
                    Services & Support
                </h4>


                <div class="space-y-1.5 text-[11px] text-blue-100/80">

                    <a
                        href="{{ route('services.installation') }}"
                        class="block hover:text-white transition"
                    >
                        Installation
                    </a>

                    <a
                        href="{{ route('services.calibration') }}"
                        class="block hover:text-white transition"
                    >
                        Calibration
                    </a>

                    <a
                        href="{{ route('services.technical-support') }}"
                        class="block hover:text-white transition"
                    >
                        Technical Support
                    </a>

                    <a
                        href="{{ route('services.after-sales') }}"
                        class="block hover:text-white transition"
                    >
                        After-Sales Service
                    </a>

                </div>


                {{-- SERVICE CTA --}}

                <div class="mt-5 pt-4 border-t border-white/10">

                    <a
                        href="{{ route('contact') }}"
                        class="inline-flex
                               items-center
                               gap-2
                               text-[11px]
                               font-semibold
                               text-[#D7A93A]
                               hover:text-white
                               transition"
                    >
                        Need Technical Assistance?
                        <span>→</span>
                    </a>

                </div>

            </div>



            {{-- =================================================
                 CONTACT US
            ================================================== --}}

            <div class="lg:border-l lg:border-white/15 lg:pl-6">

                <h4
                    class="text-[11px]
                           font-bold
                           uppercase
                           tracking-wide
                           text-white
                           mb-5"
                >
                    Contact Us
                </h4>


                <div class="space-y-4 text-[11px] text-blue-100/80">


                    {{-- ADDRESS --}}

                    @if(!empty($siteSettings?->address))

                        <div class="flex items-start gap-3">

                            <span class="text-[#E31E24] text-base mt-[-2px]">
                                ◉
                            </span>

                            <p class="leading-5">
                                {!! nl2br(e($siteSettings->address)) !!}
                            </p>

                        </div>

                    @endif


                    {{-- PHONE --}}

                    @if(!empty($siteSettings?->phone))

                        <a
                            href="tel:{{ preg_replace('/[^0-9+]/', '', $siteSettings->phone) }}"
                            class="flex
                                   items-center
                                   gap-3
                                   hover:text-white
                                   transition"
                        >

                            <span class="text-[#E31E24] text-base">
                                ☎
                            </span>

                            <span>
                                {{ $siteSettings->phone }}
                            </span>

                        </a>

                    @endif


                    {{-- ALTERNATE PHONE --}}

                    @if(!empty($siteSettings?->alternate_phone))

                        <a
                            href="tel:{{ preg_replace('/[^0-9+]/', '', $siteSettings->alternate_phone) }}"
                            class="flex
                                   items-center
                                   gap-3
                                   hover:text-white
                                   transition"
                        >

                            <span class="text-[#E31E24] text-base">
                                ☎
                            </span>

                            <span>
                                {{ $siteSettings->alternate_phone }}
                            </span>

                        </a>

                    @endif


                    {{-- EMAIL --}}

                    @php
                        $footerEmail =
                            $siteSettings?->sales_email
                            ?: $siteSettings?->email;
                    @endphp

                    @if($footerEmail)

                        <a
                            href="mailto:{{ $footerEmail }}"
                            class="flex
                                   items-center
                                   gap-3
                                   hover:text-white
                                   transition"
                        >

                            <span class="text-[#E31E24] text-base">
                                ✉
                            </span>

                            <span class="break-all">
                                {{ $footerEmail }}
                            </span>

                        </a>

                    @endif


                    {{-- WEBSITE --}}

                    <a
                        href="{{ route('home') }}"
                        class="flex
                               items-center
                               gap-3
                               hover:text-white
                               transition"
                    >

                        <span class="text-[#E31E24] text-base">
                            ◎
                        </span>

                        <span>
                            {{ request()->getHost() }}
                        </span>

                    </a>

                </div>


                {{-- REQUEST QUOTE --}}

                <div class="mt-6">

                    <a
                        href="{{ route('quote.create') }}"
                        class="inline-flex
                               items-center
                               justify-center
                               w-full
                               px-4
                               py-3
                               bg-[#D71920]
                               text-white
                               text-[11px]
                               font-bold
                               uppercase
                               tracking-wide
                               hover:bg-white
                               hover:text-[#073B66]
                               transition-all
                               duration-300"
                    >
                        Request a Quote
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
            class="max-w-7xl
                   mx-auto
                   px-5 sm:px-6 lg:px-8
                   py-3
                   flex
                   flex-col
                   md:flex-row
                   items-center
                   justify-between
                   gap-3
                   text-[10px]
                   text-blue-100/70"
        >

            {{-- COPYRIGHT --}}

            <p class="text-center md:text-left">

                © {{ date('Y') }}

                {{ $siteSettings->short_name ?? 'ASEW' }}

                -

                {{ $siteSettings->company_name
                    ?? 'Associated Scientific & Engineering Works' }}.

                All Rights Reserved.

            </p>


            {{-- LEGAL LINKS --}}

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