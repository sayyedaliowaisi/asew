@extends('layouts.app')

@section('title', 'Downloads | Associated Scientific & Engineering Works')

@section('content')

{{-- HERO --}}
<section class="relative overflow-hidden bg-[#032B55]">
    <div class="absolute inset-0 bg-[radial-gradient(circle_at_80%_20%,rgba(215,169,58,0.14),transparent_35%)]"></div>

    <div class="relative max-w-7xl mx-auto px-6 lg:px-8 py-24 lg:py-32">
        <div class="max-w-3xl">

            <span class="inline-flex items-center gap-2 px-4 py-2 rounded-full
                         bg-white/10 border border-white/20 text-[#D7A93A]
                         text-sm font-semibold tracking-wide">
                ASEW RESOURCES
            </span>

            <h1 class="mt-6 text-4xl sm:text-5xl lg:text-6xl
                       font-bold tracking-tight text-white">
                Downloads & Resources
            </h1>

            <p class="mt-6 text-lg lg:text-xl text-white/75 leading-relaxed">
                Access company information, product literature and technical
                resources from Associated Scientific and Engineering Works.
            </p>

        </div>
    </div>
</section>


{{-- INTRO --}}
<section class="bg-white py-20 lg:py-24">
    <div class="max-w-7xl mx-auto px-6 lg:px-8">

        <div class="max-w-3xl">
            <span class="text-sm font-bold tracking-[0.2em] text-[#D71920] uppercase">
                Resource Centre
            </span>

            <h2 class="mt-4 text-3xl lg:text-4xl font-bold text-[#032B55]">
                Information You Can Access
            </h2>

            <p class="mt-5 text-slate-600 text-lg leading-relaxed">
                Explore ASEW resources to understand our company, products and
                material testing equipment requirements.
            </p>
        </div>


        {{-- DOWNLOAD CARDS --}}
        <div class="mt-12 grid md:grid-cols-2 lg:grid-cols-3 gap-6">

            {{-- Company Profile --}}
            <div class="group rounded-2xl border border-slate-200 bg-white
                        p-7 shadow-sm hover:shadow-xl hover:-translate-y-1
                        transition-all duration-300">

                <div class="w-14 h-14 rounded-xl bg-red-50 flex items-center
                            justify-center text-[#D71920]">

                    <svg class="w-7 h-7" fill="none" stroke="currentColor"
                         viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round"
                              stroke-width="1.8"
                              d="M7 3h8l4 4v14H7a2 2 0 01-2-2V5a2 2 0 012-2z"/>
                        <path stroke-linecap="round" stroke-linejoin="round"
                              stroke-width="1.8"
                              d="M15 3v5h5M9 13h6M9 17h6"/>
                    </svg>
                </div>

                <h3 class="mt-6 text-xl font-bold text-[#032B55]">
                    Company Profile
                </h3>

                <p class="mt-3 text-slate-600 leading-relaxed">
                    Learn about Associated Scientific and Engineering Works,
                    our background and material testing equipment business.
                </p>

                <div class="mt-6">
                    <a href="#"
                       class="inline-flex items-center gap-2 text-[#D71920]
                              font-semibold hover:gap-3 transition-all">
                        Download PDF
                        <span>→</span>
                    </a>
                </div>
            </div>


            {{-- Product Catalogue --}}
            <div class="group rounded-2xl border border-slate-200 bg-white
                        p-7 shadow-sm hover:shadow-xl hover:-translate-y-1
                        transition-all duration-300">

                <div class="w-14 h-14 rounded-xl bg-blue-50 flex items-center
                            justify-center text-[#073B66]">

                    <svg class="w-7 h-7" fill="none" stroke="currentColor"
                         viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round"
                              stroke-width="1.8"
                              d="M4 5a2 2 0 012-2h5v18H6a2 2 0 01-2-2V5z"/>
                        <path stroke-linecap="round" stroke-linejoin="round"
                              stroke-width="1.8"
                              d="M20 5a2 2 0 00-2-2h-5v18h5a2 2 0 002-2V5z"/>
                    </svg>
                </div>

                <h3 class="mt-6 text-xl font-bold text-[#032B55]">
                    Product Catalogue
                </h3>

                <p class="mt-3 text-slate-600 leading-relaxed">
                    Browse information covering ASEW's material testing
                    instruments and equipment categories.
                </p>

                <div class="mt-6">
                    <a href="#"
                       class="inline-flex items-center gap-2 text-[#D71920]
                              font-semibold hover:gap-3 transition-all">
                        Download PDF
                        <span>→</span>
                    </a>
                </div>
            </div>


            {{-- Product Brochures --}}
            <div class="group rounded-2xl border border-slate-200 bg-white
                        p-7 shadow-sm hover:shadow-xl hover:-translate-y-1
                        transition-all duration-300">

                <div class="w-14 h-14 rounded-xl bg-amber-50 flex items-center
                            justify-center text-[#D7A93A]">

                    <svg class="w-7 h-7" fill="none" stroke="currentColor"
                         viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round"
                              stroke-width="1.8"
                              d="M6 3h9l4 4v14H6a2 2 0 01-2-2V5a2 2 0 012-2z"/>
                        <path stroke-linecap="round" stroke-linejoin="round"
                              stroke-width="1.8"
                              d="M15 3v5h5M8 13h8M8 17h6"/>
                    </svg>
                </div>

                <h3 class="mt-6 text-xl font-bold text-[#032B55]">
                    Product Brochures
                </h3>

                <p class="mt-3 text-slate-600 leading-relaxed">
                    Product-specific literature can be made available for
                    equipment selection and technical reference.
                </p>

                <div class="mt-6">
                    <a href="#"
                       class="inline-flex items-center gap-2 text-[#D71920]
                              font-semibold hover:gap-3 transition-all">
                        View Brochures
                        <span>→</span>
                    </a>
                </div>
            </div>


            {{-- Technical Documents --}}
            <div class="group rounded-2xl border border-slate-200 bg-white
                        p-7 shadow-sm hover:shadow-xl hover:-translate-y-1
                        transition-all duration-300">

                <div class="w-14 h-14 rounded-xl bg-slate-100 flex items-center
                            justify-center text-[#032B55]">

                    <svg class="w-7 h-7" fill="none" stroke="currentColor"
                         viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round"
                              stroke-width="1.8"
                              d="M12 3v12"/>
                        <path stroke-linecap="round" stroke-linejoin="round"
                              stroke-width="1.8"
                              d="M8 11l4 4 4-4M5 21h14"/>
                    </svg>
                </div>

                <h3 class="mt-6 text-xl font-bold text-[#032B55]">
                    Technical Documents
                </h3>

                <p class="mt-3 text-slate-600 leading-relaxed">
                    Technical documentation and supporting information can be
                    provided for relevant testing equipment.
                </p>

                <div class="mt-6">
                    <a href="#"
                       class="inline-flex items-center gap-2 text-[#D71920]
                              font-semibold hover:gap-3 transition-all">
                        View Documents
                        <span>→</span>
                    </a>
                </div>
            </div>


            {{-- Enquiry --}}
            <div class="group rounded-2xl border border-slate-200 bg-white
                        p-7 shadow-sm hover:shadow-xl hover:-translate-y-1
                        transition-all duration-300">

                <div class="w-14 h-14 rounded-xl bg-red-50 flex items-center
                            justify-center text-[#D71920]">

                    <svg class="w-7 h-7" fill="none" stroke="currentColor"
                         viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round"
                              stroke-width="1.8"
                              d="M4 6h16v12H4z"/>
                        <path stroke-linecap="round" stroke-linejoin="round"
                              stroke-width="1.8"
                              d="M4 7l8 6 8-6"/>
                    </svg>
                </div>

                <h3 class="mt-6 text-xl font-bold text-[#032B55]">
                    Request Information
                </h3>

                <p class="mt-3 text-slate-600 leading-relaxed">
                    Need information about a particular testing instrument?
                    Contact ASEW for product and technical enquiries.
                </p>

                <div class="mt-6">
                    <a href="{{ route('contact') }}"
                       class="inline-flex items-center gap-2 text-[#D71920]
                              font-semibold hover:gap-3 transition-all">
                        Contact Us
                        <span>→</span>
                    </a>
                </div>
            </div>


            {{-- Request Quote --}}
            <div class="group rounded-2xl bg-[#032B55] p-7
                        shadow-sm hover:shadow-xl hover:-translate-y-1
                        transition-all duration-300">

                <div class="w-14 h-14 rounded-xl bg-white/10 flex items-center
                            justify-center text-[#D7A93A]">

                    <svg class="w-7 h-7" fill="none" stroke="currentColor"
                         viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round"
                              stroke-width="1.8"
                              d="M12 3v12"/>
                        <path stroke-linecap="round" stroke-linejoin="round"
                              stroke-width="1.8"
                              d="M8 11l4 4 4-4M5 21h14"/>
                    </svg>
                </div>

                <h3 class="mt-6 text-xl font-bold text-white">
                    Product Enquiry
                </h3>

                <p class="mt-3 text-white/70 leading-relaxed">
                    Discuss your testing equipment requirements directly
                    with the ASEW team.
                </p>

                <div class="mt-6">
                    <a href="{{ route('contact') }}"
                       class="inline-flex items-center gap-2 text-[#D7A93A]
                              font-semibold hover:gap-3 transition-all">
                        Request a Quote
                        <span>→</span>
                    </a>
                </div>
            </div>

        </div>
    </div>
</section>


{{-- CTA --}}
<section class="bg-slate-50 border-t border-slate-200 py-20">
    <div class="max-w-5xl mx-auto px-6 lg:px-8 text-center">

        <span class="text-sm font-bold tracking-[0.2em] text-[#D71920] uppercase">
            Need Assistance?
        </span>

        <h2 class="mt-4 text-3xl lg:text-4xl font-bold text-[#032B55]">
            Looking for a Specific Product or Document?
        </h2>

        <p class="mt-5 text-slate-600 text-lg max-w-2xl mx-auto leading-relaxed">
            Contact Associated Scientific and Engineering Works for product
            information, technical details or enquiry assistance.
        </p>

        <div class="mt-8 flex flex-col sm:flex-row justify-center gap-4">

            <a href="{{ route('contact') }}"
               class="inline-flex justify-center items-center px-7 py-3.5
                      rounded-lg bg-[#D71920] text-white font-semibold
                      hover:bg-[#b9151b] transition">
                Contact Us
            </a>

            <a href="{{ route('products') }}"
               class="inline-flex justify-center items-center px-7 py-3.5
                      rounded-lg border border-[#032B55] text-[#032B55]
                      font-semibold hover:bg-[#032B55] hover:text-white
                      transition">
                Explore Products
            </a>

        </div>

    </div>
</section>

@endsection