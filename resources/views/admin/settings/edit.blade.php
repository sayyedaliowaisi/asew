@extends('layouts.admin')

@section('title', 'Site Settings | ASEW Admin')

@section('page-title', 'Site Settings')

@section('content')

<section class="p-4 sm:p-6 lg:p-8">

    <div class="max-w-[1500px] mx-auto">

        {{-- =====================================================
             PAGE HEADING
        ====================================================== --}}

        <div class="flex flex-col lg:flex-row lg:items-end lg:justify-between gap-4">

            <div>

                <p class="text-[9px]
                          uppercase
                          tracking-[0.18em]
                          font-bold
                          text-[#D71920]">
                    Website Configuration
                </p>

                <h1 class="mt-2
                           text-2xl
                           sm:text-3xl
                           font-extrabold
                           text-[#073B66]">
                    Site Settings
                </h1>

                <p class="mt-2
                          max-w-2xl
                          text-[11px]
                          sm:text-[12px]
                          leading-5
                          text-slate-400">
                    Manage the company identity, contact information,
                    branding and social links displayed across the ASEW website.
                </p>

            </div>

            <a
                href="{{ route('home') }}"
                target="_blank"
                class="inline-flex
                       items-center
                       justify-center
                       min-h-[42px]
                       px-5
                       border
                       border-slate-200
                       bg-white
                       text-[9px]
                       uppercase
                       tracking-wide
                       font-bold
                       text-[#073B66]
                       hover:border-[#D71920]
                       hover:text-[#D71920]
                       transition"
            >
                View Website ↗
            </a>

        </div>


        {{-- =====================================================
             SUCCESS
        ====================================================== --}}

        @if(session('success'))

            <div class="mt-6
                        border
                        border-green-200
                        bg-green-50
                        px-5
                        py-4
                        text-[11px]
                        font-semibold
                        text-green-700">

                {{ session('success') }}

            </div>

        @endif


        {{-- =====================================================
             VALIDATION ERRORS
        ====================================================== --}}

        @if($errors->any())

            <div class="mt-6
                        border
                        border-red-200
                        bg-red-50
                        px-5
                        py-4">

                <p class="text-[10px]
                          uppercase
                          tracking-wide
                          font-extrabold
                          text-red-700">
                    Please correct the following errors
                </p>

                <ul class="mt-3 space-y-1">

                    @foreach($errors->all() as $error)

                        <li class="text-[11px] text-red-600">
                            • {{ $error }}
                        </li>

                    @endforeach

                </ul>

            </div>

        @endif


        {{-- =====================================================
             SETTINGS FORM
        ====================================================== --}}

        <form
            action="{{ route('admin.settings.update') }}"
            method="POST"
            enctype="multipart/form-data"
            class="mt-7"
        >

            @csrf
            @method('PUT')


            <div class="grid grid-cols-1 xl:grid-cols-[1fr_360px] gap-6">


                {{-- =================================================
                     LEFT COLUMN
                ================================================== --}}

                <div class="space-y-6">


                    {{-- =============================================
                         COMPANY IDENTITY
                    ============================================== --}}

                    <div class="bg-white border border-slate-200">

                        <div class="px-5 sm:px-6 py-5 border-b border-slate-100">

                            <p class="text-[8px]
                                      uppercase
                                      tracking-[0.18em]
                                      font-bold
                                      text-[#D71920]">
                                01 / Identity
                            </p>

                            <h2 class="mt-1
                                       text-[16px]
                                       font-extrabold
                                       text-[#073B66]">
                                Company Identity
                            </h2>

                            <p class="mt-1 text-[10px] text-slate-400">
                                Main company information displayed across the website.
                            </p>

                        </div>


                        <div class="p-5 sm:p-6">

                            <div class="grid grid-cols-1 md:grid-cols-2 gap-5">

                                {{-- COMPANY NAME --}}

                                <div class="md:col-span-2">

                                    <label class="block
                                                  mb-2
                                                  text-[9px]
                                                  uppercase
                                                  tracking-wide
                                                  font-bold
                                                  text-slate-500">
                                        Company Name *
                                    </label>

                                    <input
                                        type="text"
                                        name="company_name"
                                        value="{{ old('company_name', $settings->company_name) }}"
                                        required
                                        class="w-full
                                               h-[46px]
                                               px-4
                                               border
                                               border-slate-200
                                               bg-white
                                               text-[12px]
                                               text-slate-700
                                               outline-none
                                               focus:border-[#073B66]
                                               transition"
                                    >

                                </div>


                                {{-- SHORT NAME --}}

                                <div>

                                    <label class="block
                                                  mb-2
                                                  text-[9px]
                                                  uppercase
                                                  tracking-wide
                                                  font-bold
                                                  text-slate-500">
                                        Short Name *
                                    </label>

                                    <input
                                        type="text"
                                        name="short_name"
                                        value="{{ old('short_name', $settings->short_name) }}"
                                        required
                                        class="w-full
                                               h-[46px]
                                               px-4
                                               border
                                               border-slate-200
                                               text-[12px]
                                               text-slate-700
                                               outline-none
                                               focus:border-[#073B66]"
                                    >

                                </div>


                                {{-- TAGLINE --}}

                                <div>

                                    <label class="block
                                                  mb-2
                                                  text-[9px]
                                                  uppercase
                                                  tracking-wide
                                                  font-bold
                                                  text-slate-500">
                                        Tagline
                                    </label>

                                    <input
                                        type="text"
                                        name="tagline"
                                        value="{{ old('tagline', $settings->tagline) }}"
                                        placeholder="Precision. Quality. Reliability."
                                        class="w-full
                                               h-[46px]
                                               px-4
                                               border
                                               border-slate-200
                                               text-[12px]
                                               text-slate-700
                                               outline-none
                                               focus:border-[#073B66]"
                                    >

                                </div>

                            </div>

                        </div>

                    </div>


                    {{-- =============================================
                         CONTACT DETAILS
                    ============================================== --}}

                    <div class="bg-white border border-slate-200">

                        <div class="px-5 sm:px-6 py-5 border-b border-slate-100">

                            <p class="text-[8px]
                                      uppercase
                                      tracking-[0.18em]
                                      font-bold
                                      text-[#D71920]">
                                02 / Contact
                            </p>

                            <h2 class="mt-1
                                       text-[16px]
                                       font-extrabold
                                       text-[#073B66]">
                                Contact Information
                            </h2>

                            <p class="mt-1 text-[10px] text-slate-400">
                                Phone numbers, email addresses and company location.
                            </p>

                        </div>


                        <div class="p-5 sm:p-6">

                            <div class="grid grid-cols-1 md:grid-cols-2 gap-5">


                                {{-- PHONE --}}

                                <div>

                                    <label class="block mb-2 text-[9px] uppercase tracking-wide font-bold text-slate-500">
                                        Primary Phone
                                    </label>

                                    <input
                                        type="text"
                                        name="phone"
                                        value="{{ old('phone', $settings->phone) }}"
                                        placeholder="+91 98992 11119"
                                        class="w-full h-[46px] px-4 border border-slate-200 text-[12px] text-slate-700 outline-none focus:border-[#073B66]"
                                    >

                                </div>


                                {{-- ALTERNATE PHONE --}}

                                <div>

                                    <label class="block mb-2 text-[9px] uppercase tracking-wide font-bold text-slate-500">
                                        Alternate Phone
                                    </label>

                                    <input
                                        type="text"
                                        name="alternate_phone"
                                        value="{{ old('alternate_phone', $settings->alternate_phone) }}"
                                        class="w-full h-[46px] px-4 border border-slate-200 text-[12px] text-slate-700 outline-none focus:border-[#073B66]"
                                    >

                                </div>


                                {{-- EMAIL --}}

                                <div>

                                    <label class="block mb-2 text-[9px] uppercase tracking-wide font-bold text-slate-500">
                                        Primary Email
                                    </label>

                                    <input
                                        type="email"
                                        name="email"
                                        value="{{ old('email', $settings->email) }}"
                                        placeholder="info@example.com"
                                        class="w-full h-[46px] px-4 border border-slate-200 text-[12px] text-slate-700 outline-none focus:border-[#073B66]"
                                    >

                                </div>


                                {{-- SALES EMAIL --}}

                                <div>

                                    <label class="block mb-2 text-[9px] uppercase tracking-wide font-bold text-slate-500">
                                        Sales Email
                                    </label>

                                    <input
                                        type="email"
                                        name="sales_email"
                                        value="{{ old('sales_email', $settings->sales_email) }}"
                                        placeholder="sales@example.com"
                                        class="w-full h-[46px] px-4 border border-slate-200 text-[12px] text-slate-700 outline-none focus:border-[#073B66]"
                                    >

                                </div>


                                {{-- ADDRESS --}}

                                <div class="md:col-span-2">

                                    <label class="block mb-2 text-[9px] uppercase tracking-wide font-bold text-slate-500">
                                        Company Address
                                    </label>

                                    <textarea
                                        name="address"
                                        rows="4"
                                        placeholder="Enter complete company address..."
                                        class="w-full
                                               px-4
                                               py-3
                                               border
                                               border-slate-200
                                               text-[12px]
                                               leading-5
                                               text-slate-700
                                               outline-none
                                               resize-y
                                               focus:border-[#073B66]"
                                    >{{ old('address', $settings->address) }}</textarea>

                                </div>

                            </div>

                        </div>

                    </div>


                    {{-- =============================================
                         SOCIAL LINKS
                    ============================================== --}}

                    <div class="bg-white border border-slate-200">

                        <div class="px-5 sm:px-6 py-5 border-b border-slate-100">

                            <p class="text-[8px]
                                      uppercase
                                      tracking-[0.18em]
                                      font-bold
                                      text-[#D71920]">
                                03 / Social
                            </p>

                            <h2 class="mt-1
                                       text-[16px]
                                       font-extrabold
                                       text-[#073B66]">
                                Social Media
                            </h2>

                            <p class="mt-1 text-[10px] text-slate-400">
                                Leave any field empty to hide that social link.
                            </p>

                        </div>


                        <div class="p-5 sm:p-6">

                            <div class="grid grid-cols-1 md:grid-cols-2 gap-5">

                                @foreach([
                                    'facebook' => 'Facebook URL',
                                    'instagram' => 'Instagram URL',
                                    'linkedin' => 'LinkedIn URL',
                                    'youtube' => 'YouTube URL',
                                ] as $field => $label)

                                    <div>

                                        <label class="block mb-2 text-[9px] uppercase tracking-wide font-bold text-slate-500">
                                            {{ $label }}
                                        </label>

                                        <input
                                            type="url"
                                            name="{{ $field }}"
                                            value="{{ old($field, $settings->{$field}) }}"
                                            placeholder="https://..."
                                            class="w-full
                                                   h-[46px]
                                                   px-4
                                                   border
                                                   border-slate-200
                                                   text-[12px]
                                                   text-slate-700
                                                   outline-none
                                                   focus:border-[#073B66]"
                                        >

                                    </div>

                                @endforeach

                            </div>

                        </div>

                    </div>

                </div>


                {{-- =================================================
                     RIGHT COLUMN
                ================================================== --}}

                <div class="space-y-6">


                    {{-- =============================================
                         BRAND ASSETS
                    ============================================== --}}

                    <div class="bg-white border border-slate-200">

                        <div class="px-5 py-5 border-b border-slate-100">

                            <p class="text-[8px]
                                      uppercase
                                      tracking-[0.18em]
                                      font-bold
                                      text-[#D71920]">
                                04 / Branding
                            </p>

                            <h2 class="mt-1
                                       text-[15px]
                                       font-extrabold
                                       text-[#073B66]">
                                Brand Assets
                            </h2>

                        </div>


                        <div class="p-5">


                            {{-- LOGO PREVIEW --}}

                            <label class="block mb-2 text-[9px] uppercase tracking-wide font-bold text-slate-500">
                                Website Logo
                            </label>


                            <div class="min-h-[130px]
                                        border
                                        border-dashed
                                        border-slate-200
                                        bg-slate-50
                                        flex
                                        items-center
                                        justify-center
                                        p-5">

                                @if($settings->logo)

                                    <img
                                        id="logoPreview"
                                        src="{{ asset($settings->logo) }}"
                                        alt="ASEW Logo"
                                        class="max-w-full max-h-[90px] object-contain"
                                    >

                                @else

                                    <div
                                        id="logoPlaceholder"
                                        class="text-center"
                                    >

                                        <p class="text-xl font-black text-[#073B66]">
                                            {{ $settings->short_name }}
                                        </p>

                                        <p class="mt-1 text-[8px] uppercase tracking-widest text-slate-400">
                                            No logo uploaded
                                        </p>

                                    </div>

                                    <img
                                        id="logoPreview"
                                        src=""
                                        alt=""
                                        class="hidden max-w-full max-h-[90px] object-contain"
                                    >

                                @endif

                            </div>


                            <input
                                id="logoInput"
                                type="file"
                                name="logo"
                                accept=".jpg,.jpeg,.png,.webp"
                                class="mt-3
                                       block
                                       w-full
                                       text-[10px]
                                       text-slate-500
                                       file:mr-3
                                       file:border-0
                                       file:bg-[#032B55]
                                       file:px-3
                                       file:py-2
                                       file:text-[8px]
                                       file:uppercase
                                       file:font-bold
                                       file:text-white
                                       hover:file:bg-[#D71920]"
                            >

                            <p class="mt-2 text-[9px] leading-4 text-slate-400">
                                JPG, PNG or WEBP. Maximum 4 MB.
                            </p>


                            {{-- FAVICON --}}

                            <div class="mt-7 pt-6 border-t border-slate-100">

                                <label class="block mb-2 text-[9px] uppercase tracking-wide font-bold text-slate-500">
                                    Favicon
                                </label>


                                @if($settings->favicon)

                                    <div class="mb-3
                                                w-14
                                                h-14
                                                flex
                                                items-center
                                                justify-center
                                                border
                                                border-slate-200
                                                bg-white">

                                        <img
                                            src="{{ asset($settings->favicon) }}"
                                            alt="Favicon"
                                            class="max-w-[36px] max-h-[36px]"
                                        >

                                    </div>

                                @endif


                                <input
                                    type="file"
                                    name="favicon"
                                    accept=".jpg,.jpeg,.png,.webp,.ico"
                                    class="block
                                           w-full
                                           text-[10px]
                                           text-slate-500
                                           file:mr-3
                                           file:border-0
                                           file:bg-slate-100
                                           file:px-3
                                           file:py-2
                                           file:text-[8px]
                                           file:uppercase
                                           file:font-bold
                                           file:text-[#073B66]"
                                >

                                <p class="mt-2 text-[9px] leading-4 text-slate-400">
                                    Recommended square icon.
                                </p>

                            </div>

                        </div>

                    </div>


                    {{-- =============================================
                         SAVE PANEL
                    ============================================== --}}

                    <div class="bg-[#032B55] p-5">

                        <p class="text-[8px]
                                  uppercase
                                  tracking-[0.18em]
                                  font-bold
                                  text-[#D7A93A]">
                            Website Control
                        </p>

                        <h3 class="mt-2
                                   text-[15px]
                                   font-extrabold
                                   text-white">
                            Save Site Settings
                        </h3>

                        <p class="mt-2
                                  text-[10px]
                                  leading-5
                                  text-white/60">
                            Saved information will be used across the
                            public ASEW website after frontend integration.
                        </p>

                        <button
                            type="submit"
                            class="mt-5
                                   w-full
                                   min-h-[46px]
                                   px-5
                                   bg-[#D71920]
                                   hover:bg-white
                                   text-white
                                   hover:text-[#032B55]
                                   text-[9px]
                                   uppercase
                                   tracking-[0.12em]
                                   font-extrabold
                                   transition"
                        >
                            Save Changes
                        </button>

                    </div>


                    {{-- =============================================
                         CURRENT STATUS
                    ============================================== --}}

                    <div class="border border-slate-200 bg-white p-5">

                        <p class="text-[8px]
                                  uppercase
                                  tracking-[0.16em]
                                  font-bold
                                  text-slate-400">
                            Current Website Identity
                        </p>

                        <p class="mt-3
                                  text-[13px]
                                  leading-5
                                  font-extrabold
                                  text-[#073B66]">
                            {{ $settings->company_name }}
                        </p>

                        @if($settings->tagline)

                            <p class="mt-1
                                      text-[10px]
                                      leading-4
                                      text-slate-400">
                                {{ $settings->tagline }}
                            </p>

                        @endif

                        <div class="mt-4 pt-4 border-t border-slate-100 space-y-2">

                            @if($settings->phone)

                                <p class="text-[9px] text-slate-500">
                                    Phone:
                                    <span class="font-bold text-slate-700">
                                        {{ $settings->phone }}
                                    </span>
                                </p>

                            @endif


                            @if($settings->email)

                                <p class="text-[9px] text-slate-500 break-all">
                                    Email:
                                    <span class="font-bold text-slate-700">
                                        {{ $settings->email }}
                                    </span>
                                </p>

                            @endif

                        </div>

                    </div>

                </div>

            </div>

        </form>

    </div>

</section>


{{-- =========================================================
     LOGO LIVE PREVIEW
========================================================= --}}

<script>
document.addEventListener('DOMContentLoaded', function () {

    const input = document.getElementById('logoInput');
    const preview = document.getElementById('logoPreview');
    const placeholder = document.getElementById('logoPlaceholder');

    if (!input || !preview) {
        return;
    }

    input.addEventListener('change', function (event) {

        const file = event.target.files?.[0];

        if (!file) {
            return;
        }

        const reader = new FileReader();

        reader.onload = function (e) {

            preview.src = e.target.result;
            preview.classList.remove('hidden');

            if (placeholder) {
                placeholder.classList.add('hidden');
            }

        };

        reader.readAsDataURL(file);

    });

});
</script>

@endsection