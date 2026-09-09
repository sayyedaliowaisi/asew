@extends('layouts.app')

@section('title', 'Request a Quote | ASEW')

@section('content')

<section class="bg-[#F5F7F9]">


    {{-- =========================================================
         HERO
    ========================================================== --}}

    <section class="relative overflow-hidden bg-[#032B55]">

        <div
            class="absolute inset-0 opacity-[0.05]"
            style="
                background-image:
                    linear-gradient(rgba(255,255,255,.3) 1px, transparent 1px),
                    linear-gradient(90deg, rgba(255,255,255,.3) 1px, transparent 1px);
                background-size: 45px 45px;
            "
        ></div>


        <div
            class="relative z-10
                   max-w-[1500px]
                   mx-auto
                   px-4 sm:px-6 lg:px-8
                   py-10 lg:py-14"
        >

            <div
                class="text-[10px]
                       uppercase
                       tracking-wide
                       font-semibold"
            >

                <a
                    href="{{ route('home') }}"
                    class="text-white/50 hover:text-white"
                >
                    Home
                </a>

                <span class="mx-2 text-white/30">/</span>

                <span class="text-[#D7A93A]">
                    Request Quote
                </span>

            </div>


            <div class="mt-7 flex items-center gap-3">

                <span class="w-10 h-[2px] bg-[#D71920]"></span>

                <span
                    class="text-[#D7A93A]
                           text-[10px]
                           font-bold
                           uppercase
                           tracking-[0.2em]"
                >
                    Product Enquiry
                </span>

            </div>


            <h1
                class="mt-4
                       text-white
                       text-[32px]
                       sm:text-[42px]
                       lg:text-[50px]
                       font-extrabold
                       leading-tight"
            >
                Request a
                <span class="text-[#D7A93A]">
                    Product Quote
                </span>
            </h1>


            <p
                class="mt-4
                       max-w-[700px]
                       text-[13px]
                       sm:text-[14px]
                       leading-7
                       text-white/60"
            >
                Share your product requirement with our team.
                We will assist you with equipment selection,
                configuration and commercial information.
            </p>

        </div>

    </section>



    {{-- =========================================================
         FORM
    ========================================================== --}}

    <section class="py-10 sm:py-12 lg:py-16">

        <div
            class="max-w-[1300px]
                   mx-auto
                   px-4 sm:px-6 lg:px-8"
        >


            {{-- SUCCESS --}}
            @if(session('success'))

                <div
                    class="mb-6
                           border
                           border-green-200
                           bg-green-50
                           px-5
                           py-4
                           text-[13px]
                           font-semibold
                           text-green-700"
                >
                    {{ session('success') }}
                </div>

            @endif



            {{-- VALIDATION --}}
            @if($errors->any())

                <div
                    class="mb-6
                           border
                           border-red-200
                           bg-red-50
                           px-5
                           py-4"
                >

                    <p
                        class="text-[13px]
                               font-bold
                               text-red-700"
                    >
                        Please correct the following:
                    </p>


                    <ul
                        class="mt-2
                               list-disc
                               pl-5
                               text-[12px]
                               leading-6
                               text-red-600"
                    >

                        @foreach($errors->all() as $error)

                            <li>{{ $error }}</li>

                        @endforeach

                    </ul>

                </div>

            @endif



            <div
                class="grid
                       grid-cols-1
                       lg:grid-cols-12
                       gap-7"
            >


                {{-- =================================================
                     FORM LEFT
                ================================================== --}}

                <div class="lg:col-span-8">

                    <div
                        class="bg-white
                               border
                               border-slate-200
                               shadow-[0_8px_30px_rgba(3,43,85,.05)]"
                    >

                        <div
                            class="border-b
                                   border-slate-200
                                   px-5 sm:px-7
                                   py-5"
                        >

                            <p
                                class="text-[10px]
                                       uppercase
                                       tracking-[0.17em]
                                       font-bold
                                       text-[#D71920]"
                            >
                                Enquiry Details
                            </p>


                            <h2
                                class="mt-1
                                       text-xl
                                       sm:text-2xl
                                       font-extrabold
                                       text-[#073B66]"
                            >
                                Tell Us Your Requirement
                            </h2>

                        </div>



                        <form
                            action="{{ route('quote.store') }}"
                            method="POST"
                            class="p-5 sm:p-7"
                        >

                            @csrf


                            {{-- PRODUCT --}}
                            <div>

                                <label
                                    for="product_id"
                                    class="block
                                           mb-2
                                           text-[11px]
                                           font-bold
                                           uppercase
                                           tracking-wide
                                           text-[#073B66]"
                                >
                                    Product
                                </label>


                                <select
                                    id="product_id"
                                    name="product_id"
                                    class="w-full
                                           h-[48px]
                                           border
                                           border-slate-200
                                           px-4
                                           bg-white
                                           text-[13px]
                                           text-slate-600
                                           outline-none
                                           focus:border-[#073B66]"
                                >

                                    <option value="">
                                        General Product Enquiry
                                    </option>


                                    @foreach($products as $product)

                                        <option
                                            value="{{ $product->id }}"

                                            @selected(
                                                old(
                                                    'product_id',
                                                    $selectedProduct?->id
                                                ) == $product->id
                                            )
                                        >

                                            {{ $product->name }}

                                            @if($product->code)
                                                — {{ $product->code }}
                                            @endif

                                        </option>

                                    @endforeach

                                </select>

                            </div>



                            {{-- NAME + COMPANY --}}
                            <div
                                class="grid
                                       grid-cols-1
                                       sm:grid-cols-2
                                       gap-5
                                       mt-5"
                            >

                                <div>

                                    <label
                                        for="name"
                                        class="block
                                               mb-2
                                               text-[11px]
                                               font-bold
                                               uppercase
                                               tracking-wide
                                               text-[#073B66]"
                                    >
                                        Full Name *
                                    </label>


                                    <input
                                        id="name"
                                        type="text"
                                        name="name"
                                        value="{{ old('name') }}"
                                        required
                                        placeholder="Enter your name"
                                        class="w-full
                                               h-[48px]
                                               border
                                               border-slate-200
                                               px-4
                                               text-[13px]
                                               outline-none
                                               focus:border-[#073B66]"
                                    >

                                </div>


                                <div>

                                    <label
                                        for="company"
                                        class="block
                                               mb-2
                                               text-[11px]
                                               font-bold
                                               uppercase
                                               tracking-wide
                                               text-[#073B66]"
                                    >
                                        Company / Institute
                                    </label>


                                    <input
                                        id="company"
                                        type="text"
                                        name="company"
                                        value="{{ old('company') }}"
                                        placeholder="Company name"
                                        class="w-full
                                               h-[48px]
                                               border
                                               border-slate-200
                                               px-4
                                               text-[13px]
                                               outline-none
                                               focus:border-[#073B66]"
                                    >

                                </div>

                            </div>



                            {{-- EMAIL + PHONE --}}
                            <div
                                class="grid
                                       grid-cols-1
                                       sm:grid-cols-2
                                       gap-5
                                       mt-5"
                            >

                                <div>

                                    <label
                                        for="email"
                                        class="block
                                               mb-2
                                               text-[11px]
                                               font-bold
                                               uppercase
                                               tracking-wide
                                               text-[#073B66]"
                                    >
                                        Email Address *
                                    </label>


                                    <input
                                        id="email"
                                        type="email"
                                        name="email"
                                        value="{{ old('email') }}"
                                        required
                                        placeholder="name@company.com"
                                        class="w-full
                                               h-[48px]
                                               border
                                               border-slate-200
                                               px-4
                                               text-[13px]
                                               outline-none
                                               focus:border-[#073B66]"
                                    >

                                </div>


                                <div>

                                    <label
                                        for="phone"
                                        class="block
                                               mb-2
                                               text-[11px]
                                               font-bold
                                               uppercase
                                               tracking-wide
                                               text-[#073B66]"
                                    >
                                        Phone Number *
                                    </label>


                                    <input
                                        id="phone"
                                        type="tel"
                                        name="phone"
                                        value="{{ old('phone') }}"
                                        required
                                        placeholder="+91"
                                        class="w-full
                                               h-[48px]
                                               border
                                               border-slate-200
                                               px-4
                                               text-[13px]
                                               outline-none
                                               focus:border-[#073B66]"
                                    >

                                </div>

                            </div>



                            {{-- CITY + QUANTITY --}}
                            <div
                                class="grid
                                       grid-cols-1
                                       sm:grid-cols-2
                                       gap-5
                                       mt-5"
                            >

                                <div>

                                    <label
                                        for="city"
                                        class="block
                                               mb-2
                                               text-[11px]
                                               font-bold
                                               uppercase
                                               tracking-wide
                                               text-[#073B66]"
                                    >
                                        City
                                    </label>


                                    <input
                                        id="city"
                                        type="text"
                                        name="city"
                                        value="{{ old('city') }}"
                                        placeholder="Your city"
                                        class="w-full
                                               h-[48px]
                                               border
                                               border-slate-200
                                               px-4
                                               text-[13px]
                                               outline-none
                                               focus:border-[#073B66]"
                                    >

                                </div>


                                <div>

                                    <label
                                        for="quantity"
                                        class="block
                                               mb-2
                                               text-[11px]
                                               font-bold
                                               uppercase
                                               tracking-wide
                                               text-[#073B66]"
                                    >
                                        Quantity *
                                    </label>


                                    <input
                                        id="quantity"
                                        type="number"
                                        name="quantity"
                                        value="{{ old('quantity', 1) }}"
                                        min="1"
                                        required
                                        class="w-full
                                               h-[48px]
                                               border
                                               border-slate-200
                                               px-4
                                               text-[13px]
                                               outline-none
                                               focus:border-[#073B66]"
                                    >

                                </div>

                            </div>



                            {{-- MESSAGE --}}
                            <div class="mt-5">

                                <label
                                    for="message"
                                    class="block
                                           mb-2
                                           text-[11px]
                                           font-bold
                                           uppercase
                                           tracking-wide
                                           text-[#073B66]"
                                >
                                    Requirement / Message
                                </label>


                                <textarea
                                    id="message"
                                    name="message"
                                    rows="6"
                                    placeholder="Tell us about specifications, quantity, application or other requirements..."
                                    class="w-full
                                           border
                                           border-slate-200
                                           px-4
                                           py-3
                                           text-[13px]
                                           leading-6
                                           outline-none
                                           resize-none
                                           focus:border-[#073B66]"
                                >{{ old('message') }}</textarea>

                            </div>



                            {{-- SUBMIT --}}
                            <div class="mt-6">

                                <button
                                    type="submit"
                                    class="group
                                           min-h-[48px]
                                           px-7
                                           inline-flex
                                           items-center
                                           justify-center
                                           gap-3
                                           bg-[#D71920]
                                           hover:bg-[#032B55]
                                           text-white
                                           text-[11px]
                                           uppercase
                                           tracking-wide
                                           font-bold
                                           transition"
                                >
                                    Submit Enquiry

                                    <span
                                        class="transition-transform
                                               group-hover:translate-x-1"
                                    >
                                        →
                                    </span>

                                </button>

                            </div>

                        </form>

                    </div>

                </div>



                {{-- =================================================
                     RIGHT SIDEBAR
                ================================================== --}}

                <aside class="lg:col-span-4">

                    <div class="lg:sticky lg:top-[100px]">

                        @if($selectedProduct)

                            <div
                                class="bg-white
                                       border
                                       border-slate-200"
                            >

                                <div
                                    class="h-[220px]
                                           flex
                                           items-center
                                           justify-center
                                           border-b
                                           border-slate-100"
                                >

                                    @if($selectedProduct->image)

                                        <img
                                            src="{{ asset($selectedProduct->image) }}"
                                            alt="{{ $selectedProduct->name }}"
                                            class="max-h-full
                                                   max-w-full
                                                   object-contain
                                                   p-6"
                                        >

                                    @endif

                                </div>


                                <div class="p-5">

                                    <p
                                        class="text-[9px]
                                               uppercase
                                               tracking-[0.14em]
                                               font-bold
                                               text-[#D71920]"
                                    >
                                        Selected Product
                                    </p>


                                    <h3
                                        class="mt-2
                                               text-lg
                                               font-extrabold
                                               text-[#073B66]"
                                    >
                                        {{ $selectedProduct->name }}
                                    </h3>


                                    @if($selectedProduct->code)

                                        <p
                                            class="mt-1
                                                   text-[11px]
                                                   font-semibold
                                                   text-slate-400"
                                        >
                                            {{ $selectedProduct->code }}
                                        </p>

                                    @endif


                                    <p
                                        class="mt-4
                                               text-[12px]
                                               leading-6
                                               text-slate-500"
                                    >
                                        {{ $selectedProduct->short_description }}
                                    </p>

                                </div>

                            </div>

                        @endif



                        <div
                            class="mt-5
                                   bg-[#032B55]
                                   p-6"
                        >

                            <p
                                class="text-[#D7A93A]
                                       text-[10px]
                                       uppercase
                                       tracking-[0.17em]
                                       font-bold"
                            >
                                Need Assistance?
                            </p>


                            <h3
                                class="mt-2
                                       text-xl
                                       font-extrabold
                                       text-white"
                            >
                                Talk To Our Team
                            </h3>


                            <p
                                class="mt-3
                                       text-[12px]
                                       leading-6
                                       text-white/60"
                            >
                                Our technical team can assist with
                                product selection and application
                                requirements.
                            </p>


                            <a
                                href="tel:+911204566201"
                                class="mt-5
                                       inline-flex
                                       text-[12px]
                                       font-bold
                                       text-white
                                       hover:text-[#D7A93A]
                                       transition"
                            >
                                +91 120 456 6201
                            </a>

                        </div>

                    </div>

                </aside>

            </div>

        </div>

    </section>

</section>

@endsection