@extends('layouts.app')

@section('title', 'Contact Us | Associated Scientific & Engineering')

@section('content')

<!-- Contact Hero -->
<section class="bg-[#073B66]">
    <div class="max-w-7xl mx-auto px-6 lg:px-8 py-20 lg:py-28">

        <span class="text-[#D7A93A] text-sm font-semibold tracking-[0.25em] uppercase">
            Get In Touch
        </span>

        <h1 class="mt-5 text-4xl md:text-5xl lg:text-6xl font-bold text-white">
            Contact Us
        </h1>

        <div class="w-20 h-1 bg-[#D71920] mt-7 mb-7"></div>

        <p class="max-w-3xl text-lg text-white/80 leading-relaxed">
            Get in touch with Associated Scientific & Engineering Works
            for material testing instruments and QA/QC equipment.
        </p>

    </div>
</section>


<!-- Contact Section -->
<section class="py-20 lg:py-28 bg-white">

    <div class="max-w-7xl mx-auto px-6 lg:px-8">

        <div class="grid lg:grid-cols-2 gap-14 lg:gap-20">

            <!-- Contact Information -->
            <div>

                <span class="text-[#D71920] font-semibold tracking-[0.2em] uppercase text-sm">
                    Contact Information
                </span>

                <h2 class="mt-4 text-3xl md:text-4xl font-bold text-[#073B66]">
                    Let's Talk About Your Testing Requirements
                </h2>

                <div class="w-16 h-1 bg-[#D7A93A] mt-6 mb-8"></div>

                <p class="text-slate-600 leading-8 mb-10">
                    Whether you are looking for material testing instruments,
                    concrete testing machines, soil testing equipment or
                    asphalt/bitumen testing equipment, get in touch with us.
                </p>


                <!-- Address -->
                <div class="flex gap-5 mb-7">

                    <div class="w-12 h-12 shrink-0 bg-[#073B66]
                                text-white flex items-center justify-center">
                        📍
                    </div>

                    <div>
                        <h3 class="font-bold text-[#073B66]">
                            Office Address
                        </h3>

                        <p class="mt-2 text-slate-600 leading-7">
                            6 Rani Jhansi Road,<br>
                            New Delhi – 110055,<br>
                            India
                        </p>
                    </div>

                </div>


                <!-- Phone -->
                <div class="flex gap-5 mb-7">

                    <div class="w-12 h-12 shrink-0 bg-[#073B66]
                                text-white flex items-center justify-center">
                        ☎
                    </div>

                    <div>
                        <h3 class="font-bold text-[#073B66]">
                            Phone
                        </h3>

                        <a href="tel:+919899211119"
                           class="mt-2 block text-slate-600 hover:text-[#D71920] transition">
                            +91 98992 11119
                        </a>

                        <p class="mt-1 text-slate-500 text-sm">
                            Landline: 011-23521188
                        </p>
                    </div>

                </div>


                <!-- Email -->
                <div class="flex gap-5">

                    <div class="w-12 h-12 shrink-0 bg-[#073B66]
                                text-white flex items-center justify-center">
                        ✉
                    </div>

                    <div>
                        <h3 class="font-bold text-[#073B66]">
                            Email
                        </h3>

                        <a href="mailto:jatin@asewindia.com"
                           class="mt-2 block text-slate-600 hover:text-[#D71920] transition">
                            jatin@asewindia.com
                        </a>
                    </div>

                </div>

            </div>


            <!-- Enquiry Form -->
            <div class="bg-slate-50 border border-slate-200 p-7 md:p-10">

                <span class="text-[#D71920] font-semibold tracking-[0.2em] uppercase text-sm">
                    Send An Enquiry
                </span>

                <h2 class="mt-3 text-2xl md:text-3xl font-bold text-[#073B66]">
                    Request Information
                </h2>

                @if (session('success'))
    <div class="mb-6 bg-green-50 border border-green-200 p-5">

        <div class="flex items-start gap-3">

            <div class="w-7 h-7 shrink-0 bg-green-600 text-white
                        flex items-center justify-center font-bold">
                ✓
            </div>

            <div>
                <h3 class="font-bold text-green-800">
                    Enquiry Submitted
                </h3>

                <p class="mt-1 text-sm text-green-700">
                    {{ session('success') }}
                </p>
            </div>

        </div>

    </div>
@endif

                @if ($errors->any())
    <div class="mb-6 bg-red-50 border border-red-200 p-5">

        <div class="flex gap-3">

            <div class="text-red-600 font-bold">
                !
            </div>

            <div>
                <h3 class="font-semibold text-red-700">
                    Please check the following:
                </h3>

                <ul class="mt-2 space-y-1 text-sm text-red-600">
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>

        </div>

    </div>
@endif



                <form
    action="{{ route('contact.submit') }}"
    method="POST"
    class="mt-8 space-y-5"
>
    @csrf

                    <div class="grid md:grid-cols-2 gap-5">

                        <div>
                            <label class="block text-sm font-semibold text-[#073B66] mb-2">
                                Your Name
                            </label>

                            <input type="text"
       name="name"
       value="{{ old('name') }}"
       placeholder="Enter your name"
                                   class="w-full px-4 py-3.5 bg-white border border-slate-300
                                          focus:border-[#073B66] focus:ring-1 focus:ring-[#073B66]
                                          outline-none transition">
                        </div>

                        <div>
                            <label class="block text-sm font-semibold text-[#073B66] mb-2">
                                Phone Number
                            </label>

                           <input type="tel"
       name="phone"
       value="{{ old('phone') }}"
       placeholder="Enter phone number"
                                   class="w-full px-4 py-3.5 bg-white border border-slate-300
                                          focus:border-[#073B66] focus:ring-1 focus:ring-[#073B66]
                                          outline-none transition">
                        </div>

                    </div>


                    <div>
                        <label class="block text-sm font-semibold text-[#073B66] mb-2">
                            Email Address
                        </label>

                       <input type="email"
       name="email"
       value="{{ old('email') }}"
       placeholder="Enter email address"
                               class="w-full px-4 py-3.5 bg-white border border-slate-300
                                      focus:border-[#073B66] focus:ring-1 focus:ring-[#073B66]
                                      outline-none transition">
                    </div>


                    <div>
                        <label class="block text-sm font-semibold text-[#073B66] mb-2">
                            Subject
                        </label>

                        <input type="text"
       name="subject"
       value="{{ old('subject') }}"
       placeholder="What can we help you with?"
                               class="w-full px-4 py-3.5 bg-white border border-slate-300
                                      focus:border-[#073B66] focus:ring-1 focus:ring-[#073B66]
                                      outline-none transition">
                    </div>


                    <div>
                        <label class="block text-sm font-semibold text-[#073B66] mb-2">
                            Message
                        </label>

                       <textarea
                       name="message"
                             rows="5"
                             required
                               placeholder="Tell us about your requirement..."
                             class="w-full px-4 py-3.5 bg-white border border-slate-300
                   focus:border-[#073B66] focus:ring-1 focus:ring-[#073B66]
                   outline-none focus:ring-1 transition resize-none"
        >{{ old('message') }}</textarea>
                    </div>


                    <button type="submit"
                            class="w-full bg-[#D71920] hover:bg-[#b9151b]
                                   text-white font-semibold py-4
                                   transition duration-300">

                        Send Enquiry

                    </button>

                </form>

            </div>

        </div>

    </div>

</section>


<!-- Business Areas -->
<section class="py-20 bg-slate-50">

    <div class="max-w-7xl mx-auto px-6 lg:px-8 text-center">

        <span class="text-[#D71920] font-semibold tracking-[0.2em] uppercase text-sm">
            Our Expertise
        </span>

        <h2 class="mt-4 text-3xl md:text-4xl font-bold text-[#073B66]">
            Material Testing Equipment
        </h2>

        <div class="w-16 h-1 bg-[#D7A93A] mx-auto mt-6 mb-10"></div>

        <div class="grid sm:grid-cols-2 lg:grid-cols-4 gap-5 text-left">

            @foreach([
                'Compression Testing Machines',
                'Soil Testing Instruments',
                'Concrete Testing Machines',
                'Asphalt / Bitumen Testing Equipment'
            ] as $item)

                <div class="bg-white border border-slate-200 p-6
                            hover:border-[#D71920] hover:-translate-y-1
                            transition duration-300">

                    <div class="text-[#D71920] font-bold text-sm mb-4">
                        {{ sprintf('%02d', $loop->iteration) }}
                    </div>

                    <h3 class="font-bold text-[#073B66]">
                        {{ $item }}
                    </h3>

                </div>

            @endforeach

        </div>

    </div>

</section>


<!-- CTA -->
<section class="bg-[#073B66]">

    <div class="max-w-7xl mx-auto px-6 lg:px-8 py-16
                flex flex-col md:flex-row md:items-center
                justify-between gap-7">

        <div>

            <span class="text-[#D7A93A] text-sm font-semibold tracking-widest uppercase">
                Associated Scientific & Engineering Works
            </span>

            <h2 class="mt-3 text-2xl md:text-3xl font-bold text-white">
                Have a Testing Equipment Requirement?
            </h2>

        </div>

        <a href="tel:+919899211119"
           class="inline-flex items-center justify-center
                  bg-[#D71920] hover:bg-[#b9151b]
                  text-white font-semibold px-7 py-4
                  transition duration-300">

            Call Us

        </a>

    </div>

</section>

@endsection