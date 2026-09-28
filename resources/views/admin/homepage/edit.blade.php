@extends('layouts.admin')

@section('title', 'Homepage Manager | ASEW Admin')
@section('page-title', 'Homepage Manager')

@section('content')

<section
    class="p-4 sm:p-6 lg:p-8"
    x-data="{
        activeSection: '{{ session('active_section', old('section', 'hero')) }}'
    }"
>
    <div class="max-w-[1500px] mx-auto">

        {{-- =========================================================
             HEADER
        ========================================================== --}}

        <div class="flex flex-col lg:flex-row lg:items-center lg:justify-between gap-4 mb-6">

            <div>
                <p class="text-[10px] uppercase tracking-[0.18em] font-bold text-[#D71920]">
                    Website Content
                </p>

                <h1 class="mt-1 text-2xl sm:text-3xl font-extrabold text-[#032B55]">
                    Homepage Manager
                </h1>

                <p class="mt-2 text-sm text-slate-500 max-w-2xl">
                    Manage homepage content, slider, images, statistics
                    and call-to-action sections from one place.
                </p>
            </div>

            <a
                href="{{ route('home') }}"
                target="_blank"
                rel="noopener noreferrer"
                class="inline-flex items-center justify-center gap-2
                       h-10 px-5
                       bg-[#032B55]
                       hover:bg-[#D71920]
                       text-white text-xs font-bold
                       transition"
            >
                View Homepage
                <span>↗</span>
            </a>

        </div>


        {{-- =========================================================
             SUCCESS MESSAGE
        ========================================================== --}}

        @if(session('success'))

            <div
                class="mb-6
                       border border-emerald-200
                       bg-emerald-50
                       px-4 py-3
                       text-sm
                       text-emerald-700"
            >
                {{ session('success') }}
            </div>

        @endif


        {{-- =========================================================
             VALIDATION ERRORS
        ========================================================== --}}

        @if($errors->any())

            <div
                class="mb-6
                       border border-red-200
                       bg-red-50
                       px-4 py-4"
            >

                <p class="font-bold text-sm text-red-700 mb-2">
                    Please correct the following:
                </p>

                <ul class="list-disc pl-5 space-y-1 text-xs text-red-600">

                    @foreach($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach

                </ul>

            </div>

        @endif


        {{-- =========================================================
             SECTION NAVIGATION
        ========================================================== --}}

        <div
            class="bg-white
                   border border-slate-200
                   shadow-sm
                   mb-6
                   overflow-x-auto"
        >

            <div class="flex min-w-max">

                @foreach([
                    'hero' => 'Hero Slider',
                    'products' => 'Products',
                    'lab' => 'Lab Solutions',
                    'manufacturing' => 'Manufacturing',
                    'stats' => 'Statistics',
                    'why' => 'Why ASEW',
                    'cta' => 'Final CTA',
                ] as $key => $label)

                    <button
                        type="button"
                        @click="activeSection = '{{ $key }}'"
                        class="px-5 h-12
                               text-[11px]
                               font-bold
                               uppercase
                               tracking-wide
                               border-r border-slate-200
                               transition"
                        :class="
                            activeSection === '{{ $key }}'
                                ? 'bg-[#032B55] text-white'
                                : 'bg-white text-slate-600 hover:bg-slate-50'
                        "
                    >
                        {{ $label }}
                    </button>

                @endforeach

            </div>

        </div>


        {{-- =========================================================
             01 — HERO SLIDER
        ========================================================== --}}

        <div
            x-show="activeSection === 'hero'"
            x-cloak
            class="space-y-6"
        >

            {{-- HERO GENERAL SETTINGS --}}

            <form
                action="{{ route('admin.homepage.update') }}"
                method="POST"
            >

                @csrf
                @method('PUT')

                <input
                    type="hidden"
                    name="section"
                    value="hero"
                >

                <x-homepage-admin-card
                    title="Hero Slider Settings"
                    description="Control slider visibility and automatic slide timing."
                >

                    <div
                        class="flex flex-col sm:flex-row
                               sm:items-center
                               sm:justify-between
                               gap-4"
                    >

                        <div>

                            <p class="font-bold text-sm text-[#032B55]">
                                Hero Slider Visibility
                            </p>

                            <p class="text-xs text-slate-500 mt-1">
                                Show or hide the complete homepage slider.
                            </p>

                        </div>

                        <label class="flex items-center gap-2 cursor-pointer">

                            <input
                                type="checkbox"
                                name="hero_enabled"
                                value="1"
                                @checked(
                                    old(
                                        'hero_enabled',
                                        $homepage->hero_enabled
                                    )
                                )
                                class="w-4 h-4 accent-[#D71920]"
                            >

                            <span class="text-xs font-bold text-slate-600">
                                Enabled
                            </span>

                        </label>

                    </div>


                    <div class="mt-6 pt-6 border-t border-slate-200">

                        <label class="homepage-label">
                            Slider Interval
                        </label>

                        <div class="flex flex-wrap items-center gap-3">

                            <input
                                type="number"
                                name="slider_interval"
                                value="{{ old(
                                    'slider_interval',
                                    $homepage->slider_interval ?? 5000
                                ) }}"
                                min="2000"
                                max="20000"
                                step="500"
                                required
                                class="homepage-input max-w-[180px]"
                            >

                            <span class="text-xs text-slate-500">
                                milliseconds
                            </span>

                        </div>

                        <p class="mt-2 text-[10px] text-slate-400">
                            Example: 5000 milliseconds = 5 seconds.
                        </p>

                    </div>


                    <div class="homepage-save-area">

                        <button
                            type="submit"
                            class="homepage-save-button"
                        >
                            Save Hero Settings
                        </button>

                    </div>

                </x-homepage-admin-card>

            </form>


            {{-- =====================================================
                 CURRENT DYNAMIC SLIDES
            ====================================================== --}}

            <div class="bg-white border border-slate-200 shadow-sm">

                <div
                    class="px-5 sm:px-6 py-4
                           border-b border-slate-200
                           flex flex-col sm:flex-row
                           sm:items-center
                           sm:justify-between
                           gap-3"
                >

                    <div>

                        <h2 class="text-sm sm:text-base font-bold text-[#032B55]">
                            Current Slides
                        </h2>

                        <p class="mt-1 text-[11px] text-slate-500">
                            Add, edit, enable, disable, reorder or delete slider images.
                        </p>

                    </div>


                    <div class="flex items-center gap-2">

                        <span
                            class="px-3 py-1.5
                                   bg-slate-100
                                   text-slate-600
                                   text-[10px]
                                   font-bold
                                   uppercase"
                        >
                            {{ $slides->count() }} Total
                        </span>

                        <span
                            class="px-3 py-1.5
                                   bg-emerald-50
                                   text-emerald-700
                                   text-[10px]
                                   font-bold
                                   uppercase"
                        >
                            {{ $slides->where('is_active', true)->count() }}
                            Active
                        </span>

                    </div>

                </div>


                <div class="p-5 sm:p-6">

                    @forelse($slides as $index => $slide)

                        <div
                            class="border border-slate-200
                                   bg-white
                                   {{ !$loop->last ? 'mb-5' : '' }}"
                        >

                            <div class="grid lg:grid-cols-[300px_1fr]">

                                {{-- SLIDE IMAGE --}}

                                <div
                                    class="relative
                                           min-h-[180px]
                                           lg:min-h-[210px]
                                           bg-slate-100
                                           overflow-hidden"
                                >

                                    <img
                                        src="{{ asset($slide->image) }}"
                                        alt="{{ $slide->alt_text ?: 'ASEW Homepage Slide' }}"
                                        class="absolute inset-0
                                               w-full h-full
                                               object-cover"
                                    >


                                    <div
                                        class="absolute top-3 left-3
                                               w-9 h-9
                                               bg-[#032B55]
                                               text-white
                                               flex items-center
                                               justify-center
                                               text-xs
                                               font-extrabold
                                               shadow-lg"
                                    >
                                        {{ str_pad(
                                            $index + 1,
                                            2,
                                            '0',
                                            STR_PAD_LEFT
                                        ) }}
                                    </div>


                                    <div class="absolute top-3 right-3">

                                        @if($slide->is_active)

                                            <span
                                                class="inline-flex
                                                       bg-emerald-500
                                                       text-white
                                                       px-2.5 py-1
                                                       text-[9px]
                                                       uppercase
                                                       tracking-wide
                                                       font-bold"
                                            >
                                                Active
                                            </span>

                                        @else

                                            <span
                                                class="inline-flex
                                                       bg-slate-700
                                                       text-white
                                                       px-2.5 py-1
                                                       text-[9px]
                                                       uppercase
                                                       tracking-wide
                                                       font-bold"
                                            >
                                                Disabled
                                            </span>

                                        @endif

                                    </div>


                                    @if(!$slide->is_active)

                                        <div
                                            class="absolute inset-0
                                                   bg-slate-950/30
                                                   pointer-events-none"
                                        ></div>

                                    @endif

                                </div>


                                {{-- SLIDE EDIT AREA --}}

                                <div class="p-4 sm:p-5">

                                    <form
                                        action="{{ route(
                                            'admin.homepage.slides.update',
                                            $slide
                                        ) }}"
                                        method="POST"
                                        enctype="multipart/form-data"
                                    >

                                        @csrf
                                        @method('PUT')


                                        <div class="grid md:grid-cols-2 gap-4">

                                            <div>

                                                <label class="homepage-label">
                                                    Alt Text
                                                </label>

                                                <input
                                                    type="text"
                                                    name="alt_text"
                                                    value="{{ $slide->alt_text }}"
                                                    maxlength="255"
                                                    placeholder="Example: ASEW Testing Equipment"
                                                    class="homepage-input"
                                                >

                                            </div>


                                            <div>

                                                <label class="homepage-label">
                                                    Replace Image
                                                </label>

                                                <input
                                                    type="file"
                                                    name="image"
                                                    accept=".jpg,.jpeg,.png,.webp"
                                                    class="homepage-file"
                                                >

                                            </div>

                                        </div>


                                        <button
                                            type="submit"
                                            class="mt-4
                                                   h-9 px-4
                                                   bg-[#032B55]
                                                   hover:bg-[#D71920]
                                                   text-white
                                                   text-[10px]
                                                   uppercase
                                                   tracking-wide
                                                   font-bold
                                                   transition"
                                        >
                                            Save Slide
                                        </button>

                                    </form>


                                    {{-- SLIDE ACTIONS --}}

                                    <div
                                        class="mt-4 pt-4
                                               border-t border-slate-200
                                               flex flex-wrap
                                               items-center
                                               gap-2"
                                    >

                                        {{-- MOVE UP --}}

                                        <form
                                            action="{{ route(
                                                'admin.homepage.slides.move-up',
                                                $slide
                                            ) }}"
                                            method="POST"
                                        >
                                            @csrf
                                            @method('PATCH')

                                            <button
                                                type="submit"
                                                @disabled($loop->first)
                                                class="slide-action-button
                                                       disabled:opacity-30
                                                       disabled:cursor-not-allowed"
                                            >
                                                ↑ Move Up
                                            </button>

                                        </form>


                                        {{-- MOVE DOWN --}}

                                        <form
                                            action="{{ route(
                                                'admin.homepage.slides.move-down',
                                                $slide
                                            ) }}"
                                            method="POST"
                                        >
                                            @csrf
                                            @method('PATCH')

                                            <button
                                                type="submit"
                                                @disabled($loop->last)
                                                class="slide-action-button
                                                       disabled:opacity-30
                                                       disabled:cursor-not-allowed"
                                            >
                                                ↓ Move Down
                                            </button>

                                        </form>


                                        {{-- TOGGLE --}}

                                        <form
                                            action="{{ route(
                                                'admin.homepage.slides.toggle',
                                                $slide
                                            ) }}"
                                            method="POST"
                                        >
                                            @csrf
                                            @method('PATCH')

                                            <button
                                                type="submit"
                                                class="
                                                    h-8 px-3
                                                    border
                                                    text-[10px]
                                                    uppercase
                                                    font-bold
                                                    transition

                                                    {{ $slide->is_active
                                                        ? 'border-amber-200 bg-amber-50 text-amber-700 hover:bg-amber-100'
                                                        : 'border-emerald-200 bg-emerald-50 text-emerald-700 hover:bg-emerald-100'
                                                    }}
                                                "
                                            >
                                                {{ $slide->is_active
                                                    ? 'Disable'
                                                    : 'Enable'
                                                }}
                                            </button>

                                        </form>


                                        {{-- DELETE --}}

                                        <form
                                            action="{{ route(
                                                'admin.homepage.slides.destroy',
                                                $slide
                                            ) }}"
                                            method="POST"
                                            class="sm:ml-auto"
                                            onsubmit="
                                                return confirm(
                                                    'Are you sure you want to delete this slide?'
                                                );
                                            "
                                        >
                                            @csrf
                                            @method('DELETE')

                                            <button
                                                type="submit"
                                                class="h-8 px-3
                                                       border border-red-200
                                                       bg-red-50
                                                       hover:bg-red-600
                                                       text-red-600
                                                       hover:text-white
                                                       text-[10px]
                                                       uppercase
                                                       font-bold
                                                       transition"
                                            >
                                                Delete
                                            </button>

                                        </form>

                                    </div>

                                </div>

                            </div>

                        </div>

                    @empty

                        <div
                            class="border-2 border-dashed
                                   border-slate-200
                                   py-12
                                   px-5
                                   text-center"
                        >

                            <div
                                class="w-12 h-12
                                       mx-auto
                                       bg-slate-100
                                       flex items-center
                                       justify-center
                                       text-[#032B55]
                                       text-2xl
                                       font-light"
                            >
                                +
                            </div>

                            <h3 class="mt-4 text-sm font-bold text-[#032B55]">
                                No Dynamic Slides Added
                            </h3>

                            <p class="mt-2 text-xs text-slate-500">
                                Use the form below to add your first homepage slide.
                            </p>

                        </div>

                    @endforelse

                </div>

            </div>


            {{-- =====================================================
                 ADD NEW SLIDE
            ====================================================== --}}

            <div class="bg-white border border-slate-200 shadow-sm">

                <div class="px-5 sm:px-6 py-4 border-b border-slate-200">

                    <h2 class="text-sm sm:text-base font-bold text-[#032B55]">
                        Add New Slide
                    </h2>

                    <p class="mt-1 text-[11px] text-slate-500">
                        Add as many homepage banner slides as required.
                    </p>

                </div>


                <form
                    action="{{ route('admin.homepage.slides.store') }}"
                    method="POST"
                    enctype="multipart/form-data"
                >

                    @csrf

                    <div class="p-5 sm:p-6">

                        <div class="grid md:grid-cols-2 gap-5">

                            <div>

                                <label class="homepage-label">
                                    Slide Image *
                                </label>

                                <input
                                    type="file"
                                    name="image"
                                    accept=".jpg,.jpeg,.png,.webp"
                                    required
                                    class="homepage-file"
                                >

                                <p class="mt-2 text-[10px] text-slate-400">
                                    JPG, JPEG, PNG or WEBP. Maximum size 6 MB.
                                </p>

                            </div>


                            <div>

                                <label class="homepage-label">
                                    Alt Text
                                </label>

                                <input
                                    type="text"
                                    name="alt_text"
                                    maxlength="255"
                                    placeholder="Example: ASEW Scientific Testing Equipment"
                                    class="homepage-input"
                                >

                                <p class="mt-2 text-[10px] text-slate-400">
                                    Helpful for accessibility and image SEO.
                                </p>

                            </div>

                        </div>


                        <button
                            type="submit"
                            class="mt-5
                                   inline-flex
                                   items-center
                                   justify-center
                                   gap-2
                                   h-11
                                   px-6
                                   bg-[#D71920]
                                   hover:bg-[#032B55]
                                   text-white
                                   text-xs
                                   font-bold
                                   uppercase
                                   tracking-wide
                                   transition"
                        >
                            <span class="text-lg leading-none">
                                +
                            </span>

                            Add New Slide
                        </button>

                    </div>

                </form>

            </div>

        </div>


{{-- =========================================================
     02 — PRODUCTS
========================================================== --}}

<div
    x-show="activeSection === 'products'"
    x-cloak
    class="space-y-6"
>

    {{-- =====================================================
         PRODUCTS GENERAL SETTINGS
    ====================================================== --}}

    <form
        action="{{ route('admin.homepage.update') }}"
        method="POST"
    >
        @csrf
        @method('PUT')

        <input
            type="hidden"
            name="section"
            value="products"
        >

        <x-homepage-admin-card
            title="Products Section"
            description="Manage the heading, description and visibility of the homepage products section."
        >

            <x-homepage-toggle
                name="products_enabled"
                :checked="old(
                    'products_enabled',
                    $homepage->products_enabled
                )"
                title="Show Products Section"
            />

            <div class="grid md:grid-cols-2 gap-5 mt-6">

                {{-- BADGE --}}
                <div>
                    <label class="homepage-label">
                        Badge
                    </label>

                    <input
                        type="text"
                        name="products_badge"
                        value="{{ old(
                            'products_badge',
                            $homepage->products_badge
                        ) }}"
                        maxlength="120"
                        placeholder="Our Products"
                        class="homepage-input"
                    >
                </div>


                {{-- HEADING --}}
                <div>
                    <label class="homepage-label">
                        Heading
                    </label>

                    <input
                        type="text"
                        name="products_heading"
                        value="{{ old(
                            'products_heading',
                            $homepage->products_heading
                        ) }}"
                        maxlength="255"
                        placeholder="Testing Equipment & Solutions"
                        class="homepage-input"
                    >
                </div>


                {{-- DESCRIPTION --}}
                <div class="md:col-span-2">
                    <label class="homepage-label">
                        Description
                    </label>

                    <textarea
                        name="products_description"
                        rows="4"
                        maxlength="1500"
                        placeholder="Enter products section description..."
                        class="homepage-textarea"
                    >{{ old(
                        'products_description',
                        $homepage->products_description
                    ) }}</textarea>
                </div>

            </div>


            <div class="homepage-save-area">
                <button
                    type="submit"
                    class="homepage-save-button"
                >
                    Save Products Section
                </button>
            </div>

        </x-homepage-admin-card>

    </form>


    {{-- =====================================================
         DYNAMIC PRODUCT CATEGORY CARDS
    ====================================================== --}}

    <div class="bg-white border border-slate-200 shadow-sm">

        {{-- HEADER --}}
        <div
            class="px-5 sm:px-6 py-4
                   border-b border-slate-200
                   flex flex-col sm:flex-row
                   sm:items-center
                   sm:justify-between
                   gap-3"
        >

            <div>
                <h2 class="text-sm sm:text-base font-bold text-[#032B55]">
                    Homepage Product Categories
                </h2>

                <p class="mt-1 text-[11px] text-slate-500">
                    Add, edit, reorder, enable, disable or delete product category cards.
                </p>
            </div>


            <div class="flex flex-wrap items-center gap-2">

                <span
                    class="px-3 py-1.5
                           bg-slate-100
                           text-slate-600
                           text-[10px]
                           font-bold
                           uppercase"
                >
                    {{ $productCategories->count() }} Total
                </span>

                <span
                    class="px-3 py-1.5
                           bg-emerald-50
                           text-emerald-700
                           text-[10px]
                           font-bold
                           uppercase"
                >
                    {{ $productCategories->where('is_active', true)->count() }}
                    Active
                </span>

            </div>

        </div>


        {{-- =================================================
             CURRENT CATEGORIES
        ================================================== --}}

        <div class="p-5 sm:p-6">

            @if($productCategories->isEmpty())

                <div
                    class="border-2
                           border-dashed
                           border-slate-200
                           px-6 py-12
                           text-center"
                >

                    <div
                        class="w-14 h-14
                               mx-auto
                               flex items-center
                               justify-center
                               bg-slate-100
                               text-[#032B55]"
                    >
                        <i class="fa-solid fa-layer-group text-xl"></i>
                    </div>

                    <h3 class="mt-4 text-sm font-bold text-[#032B55]">
                        No Product Categories Added
                    </h3>

                    <p class="mt-2 text-xs text-slate-500">
                        Add your first homepage product category using the form below.
                    </p>

                </div>

            @else

                <div
                    class="grid
                           grid-cols-1
                           md:grid-cols-2
                           xl:grid-cols-3
                           gap-5"
                >

                    @foreach($productCategories as $index => $productCategory)

                        <div
                            class="border
                                   border-slate-200
                                   bg-white
                                   shadow-sm"
                        >

                            {{-- =====================================
                                 IMAGE
                            ====================================== --}}

                            <div
                                class="relative
                                       aspect-[4/3]
                                       bg-slate-100
                                       overflow-hidden"
                            >

                                @if($productCategory->image)

                                    <img
                                        id="product-category-preview-{{ $productCategory->id }}"
                                        src="{{ asset($productCategory->image) }}"
                                        alt="{{ $productCategory->title }}"
                                        class="w-full h-full object-contain p-3"
                                    >

                                @else

                                    <div
                                        id="product-category-preview-{{ $productCategory->id }}-placeholder"
                                        class="absolute inset-0
                                               flex items-center
                                               justify-center
                                               text-xs
                                               text-slate-400"
                                    >
                                        No Image
                                    </div>

                                    <img
                                        id="product-category-preview-{{ $productCategory->id }}"
                                        src=""
                                        alt=""
                                        class="hidden
                                               w-full
                                               h-full
                                               object-contain
                                               p-3"
                                    >

                                @endif


                                {{-- ORDER --}}
                                <div
                                    class="absolute
                                           top-3 left-3
                                           min-w-9 h-9
                                           px-2
                                           bg-[#032B55]
                                           text-white
                                           flex items-center
                                           justify-center
                                           text-[10px]
                                           font-extrabold"
                                >
                                    {{ str_pad(
                                        $index + 1,
                                        2,
                                        '0',
                                        STR_PAD_LEFT
                                    ) }}
                                </div>


                                {{-- STATUS --}}
                                <div
                                    class="absolute
                                           top-3 right-3
                                           px-2.5 py-1.5
                                           text-[9px]
                                           uppercase
                                           tracking-wide
                                           font-bold
                                           {{ $productCategory->is_active
                                                ? 'bg-emerald-600 text-white'
                                                : 'bg-slate-700 text-white'
                                           }}"
                                >
                                    {{ $productCategory->is_active
                                        ? 'Active'
                                        : 'Hidden'
                                    }}
                                </div>


                                @if(!$productCategory->is_active)

                                    <div
                                        class="absolute inset-0
                                               bg-slate-950/20
                                               pointer-events-none"
                                    ></div>

                                @endif

                            </div>


                            {{-- =====================================
                                 EDIT CATEGORY
                            ====================================== --}}

                            <form
                                action="{{ route(
                                    'admin.homepage.product-categories.update',
                                    $productCategory
                                ) }}"
                                method="POST"
                                enctype="multipart/form-data"
                                class="p-4"
                            >
                                @csrf
                                @method('PUT')


                                {{-- CATEGORY --}}
                                <div>

                                    <label class="homepage-label">
                                        Product Category
                                    </label>

                                    <select
                                        name="category_slug"
                                        class="homepage-input"
                                        required
                                    >

                                        @foreach(
                                            $availableProductCategories
                                            as $availableCategory
                                        )

                                            <option
                                                value="{{ $availableCategory->category_slug }}"
                                                @selected(
                                                    $productCategory->category_slug
                                                    ===
                                                    $availableCategory->category_slug
                                                )
                                            >
                                                {{ $availableCategory->category
                                                    ?: $availableCategory->category_slug }}

                                                ({{ $availableCategory->category_slug }})
                                            </option>

                                        @endforeach

                                    </select>

                                </div>


                                {{-- TITLE --}}
                                <div class="mt-4">

                                    <label class="homepage-label">
                                        Card Title
                                    </label>

                                    <input
                                        type="text"
                                        name="title"
                                        value="{{ $productCategory->title }}"
                                        maxlength="180"
                                        required
                                        class="homepage-input"
                                    >

                                </div>


                                {{-- BUTTON TEXT --}}
                                <div class="mt-4">

                                    <label class="homepage-label">
                                        Button Text
                                    </label>

                                    <input
                                        type="text"
                                        name="button_text"
                                        value="{{ $productCategory->button_text }}"
                                        maxlength="80"
                                        placeholder="View Products"
                                        class="homepage-input"
                                    >

                                </div>


                                {{-- GENERATED URL --}}
                                <div class="mt-4">

                                    <label class="homepage-label">
                                        Destination
                                    </label>

                                    <div
                                        class="homepage-input
                                               flex items-center
                                               bg-slate-50
                                               text-xs
                                               text-slate-500"
                                    >
                                        /products?category={{ $productCategory->category_slug }}
                                    </div>

                                    <p class="mt-1.5 text-[10px] text-slate-400">
                                        URL is generated automatically from the selected category.
                                    </p>

                                </div>


                                {{-- IMAGE --}}
                                <div class="mt-4">

                                    <label class="homepage-label">
                                        Replace Image
                                    </label>

                                    <input
                                        type="file"
                                        name="image"
                                        accept=".jpg,.jpeg,.png,.webp"
                                        onchange="
                                            previewHomepageImage(
                                                event,
                                                'product-category-preview-{{ $productCategory->id }}'
                                            )
                                        "
                                        class="homepage-file"
                                    >

                                    <p class="mt-1.5 text-[10px] text-slate-400">
                                        Leave empty to keep the current image.
                                    </p>

                                </div>


                                <button
                                    type="submit"
                                    class="mt-5
                                           w-full
                                           h-10
                                           px-4
                                           bg-[#032B55]
                                           hover:bg-[#D71920]
                                           text-white
                                           text-[10px]
                                           uppercase
                                           tracking-wide
                                           font-bold
                                           transition"
                                >
                                    Save Product Category
                                </button>

                            </form>


                            {{-- =====================================
                                 ACTIONS
                            ====================================== --}}

                            <div
                                class="px-4 pb-4
                                       grid grid-cols-2
                                       gap-2"
                            >

                                {{-- MOVE UP --}}
                                <form
                                    action="{{ route(
                                        'admin.homepage.product-categories.move-up',
                                        $productCategory
                                    ) }}"
                                    method="POST"
                                >
                                    @csrf
                                    @method('PATCH')

                                    <button
                                        type="submit"
                                        @disabled($loop->first)
                                        class="w-full h-9
                                               border border-slate-200
                                               bg-white
                                               text-slate-600
                                               text-[10px]
                                               uppercase
                                               font-bold
                                               hover:border-[#032B55]
                                               hover:text-[#032B55]
                                               transition
                                               disabled:opacity-30
                                               disabled:cursor-not-allowed"
                                    >
                                        ↑ Move Up
                                    </button>
                                </form>


                                {{-- MOVE DOWN --}}
                                <form
                                    action="{{ route(
                                        'admin.homepage.product-categories.move-down',
                                        $productCategory
                                    ) }}"
                                    method="POST"
                                >
                                    @csrf
                                    @method('PATCH')

                                    <button
                                        type="submit"
                                        @disabled($loop->last)
                                        class="w-full h-9
                                               border border-slate-200
                                               bg-white
                                               text-slate-600
                                               text-[10px]
                                               uppercase
                                               font-bold
                                               hover:border-[#032B55]
                                               hover:text-[#032B55]
                                               transition
                                               disabled:opacity-30
                                               disabled:cursor-not-allowed"
                                    >
                                        ↓ Move Down
                                    </button>
                                </form>


                                {{-- ENABLE / DISABLE --}}
                                <form
                                    action="{{ route(
                                        'admin.homepage.product-categories.toggle',
                                        $productCategory
                                    ) }}"
                                    method="POST"
                                >
                                    @csrf
                                    @method('PATCH')

                                    <button
                                        type="submit"
                                        class="w-full h-9
                                               border
                                               text-[10px]
                                               uppercase
                                               font-bold
                                               transition
                                               {{ $productCategory->is_active
                                                    ? 'border-amber-200 bg-amber-50 text-amber-700 hover:bg-amber-100'
                                                    : 'border-emerald-200 bg-emerald-50 text-emerald-700 hover:bg-emerald-100'
                                               }}"
                                    >
                                        {{ $productCategory->is_active
                                            ? 'Disable'
                                            : 'Enable'
                                        }}
                                    </button>
                                </form>


                                {{-- DELETE --}}
                                <form
                                    action="{{ route(
                                        'admin.homepage.product-categories.destroy',
                                        $productCategory
                                    ) }}"
                                    method="POST"
                                    onsubmit="
                                        return confirm(
                                            'Are you sure you want to delete this homepage product category?'
                                        );
                                    "
                                >
                                    @csrf
                                    @method('DELETE')

                                    <button
                                        type="submit"
                                        class="w-full h-9
                                               border border-red-200
                                               bg-red-50
                                               text-red-600
                                               text-[10px]
                                               uppercase
                                               font-bold
                                               hover:bg-red-600
                                               hover:text-white
                                               transition"
                                    >
                                        Delete
                                    </button>

                                </form>

                            </div>

                        </div>

                    @endforeach

                </div>

            @endif

        </div>

    </div>


    {{-- =====================================================
         ADD NEW PRODUCT CATEGORY
    ====================================================== --}}

    <div class="bg-white border border-slate-200 shadow-sm">

        <div class="px-5 sm:px-6 py-4 border-b border-slate-200">

            <h2 class="text-sm sm:text-base font-bold text-[#032B55]">
                Add New Product Category
            </h2>

            <p class="mt-1 text-[11px] text-slate-500">
                Select an existing Product Management category and display it on the homepage.
            </p>

        </div>


        <form
            action="{{ route(
                'admin.homepage.product-categories.store'
            ) }}"
            method="POST"
            enctype="multipart/form-data"
        >
            @csrf


            <div class="p-5 sm:p-6">

                <div class="grid md:grid-cols-2 gap-5">


                    {{-- PRODUCT CATEGORY --}}
                    <div>

                        <label class="homepage-label">
                            Product Category *
                        </label>

                        <select
                            name="category_slug"
                            class="homepage-input"
                            required
                        >

                            <option value="">
                                Select Product Category
                            </option>

                            @foreach(
                                $availableProductCategories
                                as $availableCategory
                            )

                                <option
                                    value="{{ $availableCategory->category_slug }}"
                                    @selected(
                                        old('category_slug')
                                        ===
                                        $availableCategory->category_slug
                                    )
                                >
                                    {{ $availableCategory->category
                                        ?: $availableCategory->category_slug }}

                                    ({{ $availableCategory->category_slug }})
                                </option>

                            @endforeach

                        </select>

                        <p class="mt-1.5 text-[10px] text-slate-400">
                            Categories are loaded from Product Management.
                        </p>

                    </div>


                    {{-- TITLE --}}
                    <div>

                        <label class="homepage-label">
                            Card Title *
                        </label>

                        <input
                            type="text"
                            name="title"
                            value="{{ old('title') }}"
                            maxlength="180"
                            required
                            placeholder="Example: Soil Testing"
                            class="homepage-input"
                        >

                    </div>


                    {{-- BUTTON TEXT --}}
                    <div>

                        <label class="homepage-label">
                            Button Text
                        </label>

                        <input
                            type="text"
                            name="button_text"
                            value="{{ old(
                                'button_text',
                                'View Products'
                            ) }}"
                            maxlength="80"
                            placeholder="View Products"
                            class="homepage-input"
                        >

                    </div>


                    {{-- IMAGE --}}
                    <div>

                        <label class="homepage-label">
                            Category Image *
                        </label>

                        <input
                            type="file"
                            name="image"
                            accept=".jpg,.jpeg,.png,.webp"
                            required
                            onchange="
                                previewHomepageImage(
                                    event,
                                    'new-product-category-preview'
                                )
                            "
                            class="homepage-file"
                        >

                        <p class="mt-1.5 text-[10px] text-slate-400">
                            JPG, JPEG, PNG or WEBP. Maximum 6 MB.
                        </p>

                    </div>

                </div>


                {{-- IMAGE PREVIEW --}}
                <div class="mt-6 max-w-sm">

                    <label class="homepage-label">
                        Image Preview
                    </label>

                    <div
                        class="aspect-[4/3]
                               relative
                               overflow-hidden
                               bg-slate-100
                               border
                               border-dashed
                               border-slate-300"
                    >

                        <img
                            id="new-product-category-preview"
                            src=""
                            alt=""
                            class="hidden
                                   absolute inset-0
                                   w-full h-full
                                   object-contain
                                   p-3"
                        >

                        <div
                            id="new-product-category-preview-placeholder"
                            class="absolute inset-0
                                   flex items-center
                                   justify-center
                                   text-xs
                                   text-slate-400"
                        >
                            Image Preview
                        </div>

                    </div>

                </div>


                <div class="homepage-save-area">

                    <button
                        type="submit"
                        class="homepage-save-button"
                    >
                        + Add Product Category
                    </button>

                </div>

            </div>

        </form>

    </div>

</div>

        {{-- =========================================================
     COMPLETE LAB SOLUTIONS
========================================================= --}}
<div
    x-show="activeSection === 'lab'"
    x-cloak
    class="space-y-6"
>

    {{-- =====================================================
         GENERAL SETTINGS
    ====================================================== --}}
    <x-homepage-admin-card>

        <div class="flex flex-col gap-2 sm:flex-row sm:items-start sm:justify-between mb-6">

            <div>
                <h2 class="text-lg font-bold text-slate-900">
                    Complete Lab Solutions
                </h2>

                <p class="mt-1 text-sm text-slate-500">
                    Manage the heading, description and visibility of the
                    Complete Lab Solutions section.
                </p>
            </div>

            <span
                class="inline-flex w-fit items-center rounded-full
                       bg-blue-50 px-3 py-1 text-xs font-bold text-blue-700"
            >
                General Settings
            </span>

        </div>


        <form
            action="{{ route('admin.homepage.update') }}"
            method="POST"
        >
            @csrf
            @method('PUT')

            <input
                type="hidden"
                name="section"
                value="lab"
            >


            {{-- ENABLE --}}
            <div class="mb-6">

                <x-homepage-toggle
                    name="lab_enabled"
                    :checked="old(
                        'lab_enabled',
                        $homepage->lab_enabled
                    )"
                    label="Show Complete Lab Solutions section"
                    description="Enable or disable this entire section on the homepage."
                />

            </div>


            <div class="grid grid-cols-1 gap-5 lg:grid-cols-2">

                {{-- BADGE --}}
                <div>
                    <label class="homepage-label">
                        Badge Text
                    </label>

                    <input
                        type="text"
                        name="lab_badge"
                        value="{{ old(
                            'lab_badge',
                            $homepage->lab_badge
                        ) }}"
                        class="homepage-input"
                        placeholder="COMPLETE LAB SOLUTIONS"
                    >
                </div>


                {{-- HEADING --}}
                <div>
                    <label class="homepage-label">
                        Main Heading
                    </label>

                    <input
                        type="text"
                        name="lab_heading"
                        value="{{ old(
                            'lab_heading',
                            $homepage->lab_heading
                        ) }}"
                        class="homepage-input"
                        placeholder="Everything You Need For Your Laboratory"
                    >
                </div>

            </div>


            {{-- DESCRIPTION --}}
            <div class="mt-5">

                <label class="homepage-label">
                    Description
                </label>

                <textarea
                    name="lab_description"
                    rows="4"
                    class="homepage-textarea"
                    placeholder="Enter section description..."
                >{{ old(
                    'lab_description',
                    $homepage->lab_description
                ) }}</textarea>

            </div>


            <div class="grid grid-cols-1 gap-5 mt-5 lg:grid-cols-2">

                {{-- BUTTON TEXT --}}
                <div>
                    <label class="homepage-label">
                        Main Button Text
                    </label>

                    <input
                        type="text"
                        name="lab_button_text"
                        value="{{ old(
                            'lab_button_text',
                            $homepage->lab_button_text
                        ) }}"
                        class="homepage-input"
                        placeholder="Explore Complete Lab Solutions"
                    >
                </div>


                {{-- BUTTON URL --}}
                <div>
                    <label class="homepage-label">
                        Main Button URL
                    </label>

                    <input
                        type="text"
                        name="lab_button_url"
                        value="{{ old(
                            'lab_button_url',
                            $homepage->lab_button_url
                        ) }}"
                        class="homepage-input"
                        placeholder="/complete-lab-solutions"
                    >
                </div>

            </div>


            <div class="homepage-save-area">

                <button
                    type="submit"
                    class="homepage-save-button"
                >
                    <i class="fa-solid fa-floppy-disk"></i>

                    Save Lab Settings
                </button>

            </div>

        </form>

    </x-homepage-admin-card>



    {{-- =====================================================
         LABORATORY CARDS
    ====================================================== --}}
    <x-homepage-admin-card>

        <div
            class="flex flex-col gap-4
                   sm:flex-row sm:items-center sm:justify-between
                   mb-6"
        >

            <div>

                <h2 class="text-lg font-bold text-slate-900">
                    Laboratory Cards
                </h2>

                <p class="mt-1 text-sm text-slate-500">
                    Add, edit, reorder and control laboratory cards
                    displayed on the homepage.
                </p>

            </div>


            <span
                class="inline-flex w-fit items-center rounded-full
                       bg-slate-100 px-3 py-1
                       text-xs font-bold text-slate-600"
            >
                {{ $labCards->count() }}
                {{ $labCards->count() === 1 ? 'Card' : 'Cards' }}
            </span>

        </div>



        {{-- =================================================
             EXISTING CARDS
        ================================================== --}}
        @if($labCards->isNotEmpty())

            <div class="space-y-4">

                @foreach($labCards as $index => $labCard)

                    <div
                        class="rounded-2xl border border-slate-200
                               bg-white p-4 sm:p-5"
                    >

                        <div
                            class="flex flex-col gap-5
                                   xl:flex-row xl:items-start"
                        >

                            {{-- IMAGE --}}
                            <div
                                class="w-full overflow-hidden
                                       rounded-xl border border-slate-200
                                       bg-slate-50
                                       xl:w-[180px] xl:flex-shrink-0"
                            >

                                <div class="aspect-[4/3]">

                                    @if($labCard->image)

                                        <img
                                            src="{{ asset($labCard->image) }}"
                                            alt="{{ $labCard->title }}"
                                            class="h-full w-full object-cover"
                                        >

                                    @else

                                        <div
                                            class="flex h-full w-full
                                                   items-center justify-center
                                                   text-slate-400"
                                        >
                                            <i
                                                class="fa-regular fa-image
                                                       text-3xl"
                                            ></i>
                                        </div>

                                    @endif

                                </div>

                            </div>


                            {{-- DETAILS --}}
                            <div class="min-w-0 flex-1">

                                <div
                                    class="flex flex-col gap-3
                                           lg:flex-row
                                           lg:items-start
                                           lg:justify-between"
                                >

                                    <div>

                                        <div
                                            class="flex flex-wrap
                                                   items-center gap-2"
                                        >

                                            <h3
                                                class="text-base font-bold
                                                       text-slate-900"
                                            >
                                                {{ $labCard->title }}

                                                @if($labCard->subtitle)
                                                    {{ $labCard->subtitle }}
                                                @endif
                                            </h3>


                                            @if($labCard->is_active)

                                                <span
                                                    class="rounded-full
                                                           bg-emerald-50
                                                           px-2.5 py-1
                                                           text-[11px]
                                                           font-bold
                                                           text-emerald-700"
                                                >
                                                    Active
                                                </span>

                                            @else

                                                <span
                                                    class="rounded-full
                                                           bg-slate-100
                                                           px-2.5 py-1
                                                           text-[11px]
                                                           font-bold
                                                           text-slate-500"
                                                >
                                                    Hidden
                                                </span>

                                            @endif

                                        </div>


                                        @if($labCard->button_url)

                                            <p
                                                class="mt-2 break-all
                                                       text-xs text-slate-500"
                                            >
                                                <i
                                                    class="fa-solid fa-link
                                                           mr-1"
                                                ></i>

                                                {{ $labCard->button_url }}
                                            </p>

                                        @endif

                                    </div>


                                    {{-- ACTIONS --}}
                                    <div
                                        class="flex flex-wrap
                                               items-center gap-2"
                                    >

                                        {{-- MOVE UP --}}
                                        <form
                                            action="{{ route(
                                                'admin.homepage.lab-cards.move-up',
                                                $labCard
                                            ) }}"
                                            method="POST"
                                        >
                                            @csrf
                                            @method('PATCH')

                                            <button
                                                type="submit"
                                                class="slide-action-button"
                                                title="Move Up"
                                                @disabled($loop->first)
                                            >
                                                <i
                                                    class="fa-solid
                                                           fa-arrow-up"
                                                ></i>
                                            </button>

                                        </form>


                                        {{-- MOVE DOWN --}}
                                        <form
                                            action="{{ route(
                                                'admin.homepage.lab-cards.move-down',
                                                $labCard
                                            ) }}"
                                            method="POST"
                                        >
                                            @csrf
                                            @method('PATCH')

                                            <button
                                                type="submit"
                                                class="slide-action-button"
                                                title="Move Down"
                                                @disabled($loop->last)
                                            >
                                                <i
                                                    class="fa-solid
                                                           fa-arrow-down"
                                                ></i>
                                            </button>

                                        </form>


                                        {{-- TOGGLE --}}
                                        <form
                                            action="{{ route(
                                                'admin.homepage.lab-cards.toggle',
                                                $labCard
                                            ) }}"
                                            method="POST"
                                        >
                                            @csrf
                                            @method('PATCH')

                                            <button
                                                type="submit"
                                                class="slide-action-button"
                                                title="{{ $labCard->is_active
                                                    ? 'Hide Card'
                                                    : 'Show Card'
                                                }}"
                                            >
                                                @if($labCard->is_active)

                                                    <i
                                                        class="fa-solid
                                                               fa-eye"
                                                    ></i>

                                                @else

                                                    <i
                                                        class="fa-solid
                                                               fa-eye-slash"
                                                    ></i>

                                                @endif
                                            </button>

                                        </form>


                                        {{-- EDIT BUTTON --}}
                                        <button
                                            type="button"
                                            class="slide-action-button"
                                            title="Edit Card"
                                            x-data
                                            x-on:click="
                                                document
                                                    .getElementById(
                                                        'lab-edit-{{ $labCard->id }}'
                                                    )
                                                    .classList
                                                    .toggle('hidden')
                                            "
                                        >
                                            <i
                                                class="fa-solid
                                                       fa-pen-to-square"
                                            ></i>
                                        </button>


                                        {{-- DELETE --}}
                                        <form
                                            action="{{ route(
                                                'admin.homepage.lab-cards.destroy',
                                                $labCard
                                            ) }}"
                                            method="POST"
                                            onsubmit="
                                                return confirm(
                                                    'Delete this laboratory card?'
                                                )
                                            "
                                        >
                                            @csrf
                                            @method('DELETE')

                                            <button
                                                type="submit"
                                                class="slide-action-button
                                                       !text-red-600"
                                                title="Delete Card"
                                            >
                                                <i
                                                    class="fa-solid
                                                           fa-trash"
                                                ></i>
                                            </button>

                                        </form>

                                    </div>

                                </div>

                            </div>

                        </div>



                        {{-- =============================================
                             EDIT FORM
                        ============================================== --}}
                        <div
                            id="lab-edit-{{ $labCard->id }}"
                            class="hidden mt-5 border-t
                                   border-slate-200 pt-5"
                        >

                            <form
                                action="{{ route(
                                    'admin.homepage.lab-cards.update',
                                    $labCard
                                ) }}"
                                method="POST"
                                enctype="multipart/form-data"
                            >
                                @csrf
                                @method('PUT')


                                <div
                                    class="grid grid-cols-1
                                           gap-5 md:grid-cols-2"
                                >

                                    {{-- TITLE --}}
                                    <div>

                                        <label class="homepage-label">
                                            Title
                                        </label>

                                        <input
                                            type="text"
                                            name="title"
                                            value="{{ $labCard->title }}"
                                            class="homepage-input"
                                            required
                                        >

                                    </div>


                                    {{-- SUBTITLE --}}
                                    <div>

                                        <label class="homepage-label">
                                            Subtitle
                                        </label>

                                        <input
                                            type="text"
                                            name="subtitle"
                                            value="{{ $labCard->subtitle }}"
                                            class="homepage-input"
                                            placeholder="Laboratory"
                                        >

                                    </div>


                                    {{-- URL --}}
                                    <div>

                                        <label class="homepage-label">
                                            Card URL
                                        </label>

                                        <input
                                            type="text"
                                            name="button_url"
                                            value="{{ $labCard->button_url }}"
                                            class="homepage-input"
                                            placeholder="/products?category=soil"
                                        >

                                    </div>


                                    {{-- IMAGE --}}
                                    <div>

                                        <label class="homepage-label">
                                            Replace Image
                                        </label>

                                        <input
                                            type="file"
                                            name="image"
                                            accept=".jpg,.jpeg,.png,.webp"
                                            class="homepage-file"
                                        >

                                        <p
                                            class="mt-1 text-xs
                                                   text-slate-400"
                                        >
                                            Leave empty to keep current image.
                                        </p>

                                    </div>

                                </div>


                                <div
                                    class="mt-5 flex
                                           justify-end"
                                >

                                    <button
                                        type="submit"
                                        class="homepage-save-button"
                                    >
                                        <i
                                            class="fa-solid
                                                   fa-floppy-disk"
                                        ></i>

                                        Update Card
                                    </button>

                                </div>

                            </form>

                        </div>

                    </div>

                @endforeach

            </div>

        @else

            <div
                class="rounded-2xl border-2
                       border-dashed border-slate-200
                       px-6 py-12 text-center"
            >

                <div
                    class="mx-auto flex h-14 w-14
                           items-center justify-center
                           rounded-full bg-slate-100
                           text-slate-400"
                >
                    <i
                        class="fa-solid fa-flask
                               text-xl"
                    ></i>
                </div>

                <h3
                    class="mt-4 font-bold
                           text-slate-800"
                >
                    No laboratory cards
                </h3>

                <p
                    class="mt-1 text-sm
                           text-slate-500"
                >
                    Add your first laboratory card below.
                </p>

            </div>

        @endif

    </x-homepage-admin-card>



    {{-- =====================================================
         ADD NEW LAB CARD
    ====================================================== --}}
    <x-homepage-admin-card>

        <div class="mb-6">

            <h2 class="text-lg font-bold text-slate-900">
                Add New Laboratory Card
            </h2>

            <p class="mt-1 text-sm text-slate-500">
                Create another laboratory solution card for
                the homepage.
            </p>

        </div>


        <form
            action="{{ route(
                'admin.homepage.lab-cards.store'
            ) }}"
            method="POST"
            enctype="multipart/form-data"
        >
            @csrf


            <div
                class="grid grid-cols-1
                       gap-5 md:grid-cols-2"
            >

                {{-- TITLE --}}
                <div>

                    <label class="homepage-label">
                        Title
                        <span class="text-red-500">*</span>
                    </label>

                    <input
                        type="text"
                        name="title"
                        value="{{ old('title') }}"
                        class="homepage-input"
                        placeholder="Soil"
                        required
                    >

                </div>


                {{-- SUBTITLE --}}
                <div>

                    <label class="homepage-label">
                        Subtitle
                    </label>

                    <input
                        type="text"
                        name="subtitle"
                        value="{{ old('subtitle') }}"
                        class="homepage-input"
                        placeholder="Laboratory"
                    >

                </div>


                {{-- URL --}}
                <div>

                    <label class="homepage-label">
                        Card URL
                    </label>

                    <input
                        type="text"
                        name="button_url"
                        value="{{ old('button_url') }}"
                        class="homepage-input"
                        placeholder="/products?category=soil"
                    >

                </div>


                {{-- IMAGE --}}
                <div>

                    <label class="homepage-label">
                        Card Image
                        <span class="text-red-500">*</span>
                    </label>

                    <input
                        type="file"
                        name="image"
                        accept=".jpg,.jpeg,.png,.webp"
                        class="homepage-file"
                        required
                    >

                    <p
                        class="mt-1 text-xs
                               text-slate-400"
                    >
                        JPG, PNG or WEBP. Maximum 6 MB.
                    </p>

                </div>

            </div>


            <div class="homepage-save-area">

                <button
                    type="submit"
                    class="homepage-save-button"
                >
                    <i class="fa-solid fa-plus"></i>

                    Add Laboratory Card
                </button>

            </div>

        </form>

    </x-homepage-admin-card>

</div>


        {{-- =========================================================
     04 — MANUFACTURING
========================================================== --}}

<div
    x-show="activeSection === 'manufacturing'"
    x-cloak
>

    {{-- =====================================================
         MANUFACTURING GENERAL SETTINGS
    ====================================================== --}}

    <form
        action="{{ route('admin.homepage.update') }}"
        method="POST"
    >

        @csrf
        @method('PUT')

        <input
            type="hidden"
            name="section"
            value="manufacturing"
        >

        <x-homepage-admin-card
            title="Manufacturing Excellence"
            description="Manage manufacturing content, features and section settings."
        >

            <x-homepage-toggle
                name="manufacturing_enabled"
                :checked="old(
                    'manufacturing_enabled',
                    $homepage->manufacturing_enabled
                )"
                title="Show Manufacturing Section"
            />


            {{-- CONTENT --}}

            <div class="grid md:grid-cols-2 gap-5 mt-6">

                <div>

                    <label class="homepage-label">
                        Badge
                    </label>

                    <input
                        type="text"
                        name="manufacturing_badge"
                        value="{{ old(
                            'manufacturing_badge',
                            $homepage->manufacturing_badge
                        ) }}"
                        maxlength="120"
                        class="homepage-input"
                    >

                </div>


                <div>

                    <label class="homepage-label">
                        Heading
                    </label>

                    <input
                        type="text"
                        name="manufacturing_heading"
                        value="{{ old(
                            'manufacturing_heading',
                            $homepage->manufacturing_heading
                        ) }}"
                        maxlength="255"
                        class="homepage-input"
                    >

                </div>


                <div class="md:col-span-2">

                    <label class="homepage-label">
                        Description
                    </label>

                    <textarea
                        name="manufacturing_description"
                        rows="5"
                        maxlength="2000"
                        class="homepage-textarea"
                    >{{ old(
                        'manufacturing_description',
                        $homepage->manufacturing_description
                    ) }}</textarea>

                </div>

            </div>


            {{-- =================================================
                 MANUFACTURING FEATURES
            ================================================== --}}

            <div class="mt-7 pt-6 border-t border-slate-200">

                <div class="mb-5">

                    <h3 class="text-sm font-bold text-[#032B55]">
                        Manufacturing Features
                    </h3>

                    <p class="mt-1 text-[11px] text-slate-500">
                        Manage the key manufacturing capabilities displayed on the homepage.
                    </p>

                </div>


                <div class="grid md:grid-cols-2 gap-4">

                    @for($i = 1; $i <= 4; $i++)

                        @php
                            $feature =
                                "manufacturing_feature_{$i}";
                        @endphp

                        <div>

                            <label class="homepage-label">
                                Feature {{ $i }}
                            </label>

                            <input
                                type="text"
                                name="{{ $feature }}"
                                value="{{ old(
                                    $feature,
                                    $homepage->{$feature}
                                ) }}"
                                maxlength="255"
                                class="homepage-input"
                            >

                        </div>

                    @endfor

                </div>

            </div>


            {{-- =================================================
                 BUTTON
            ================================================== --}}

            <div
                class="grid md:grid-cols-2
                       gap-5
                       mt-7 pt-6
                       border-t border-slate-200"
            >

                <div>

                    <label class="homepage-label">
                        Button Text
                    </label>

                    <input
                        type="text"
                        name="manufacturing_button_text"
                        value="{{ old(
                            'manufacturing_button_text',
                            $homepage->manufacturing_button_text
                        ) }}"
                        maxlength="100"
                        class="homepage-input"
                    >

                </div>


                <div>

                    <label class="homepage-label">
                        Button URL
                    </label>

                    <input
                        type="text"
                        name="manufacturing_button_url"
                        value="{{ old(
                            'manufacturing_button_url',
                            $homepage->manufacturing_button_url
                        ) }}"
                        maxlength="500"
                        placeholder="/manufacturing"
                        class="homepage-input"
                    >

                </div>

            </div>


            <div class="homepage-save-area">

                <button
                    type="submit"
                    class="homepage-save-button"
                >
                    Save Manufacturing
                </button>

            </div>

        </x-homepage-admin-card>

    </form>



    {{-- =====================================================
         DYNAMIC MANUFACTURING GALLERY
    ====================================================== --}}

    <div class="mt-6">

        <x-homepage-admin-card
            title="Manufacturing Gallery"
            description="Add, replace, reorder, enable, disable or delete manufacturing images."
        >

            {{-- =============================================
                 CURRENT IMAGES
            ============================================== --}}

            <div>

                <div
                    class="flex flex-col
                           sm:flex-row
                           sm:items-center
                           sm:justify-between
                           gap-3
                           mb-5"
                >

                    <div>

                        <h3 class="text-sm font-bold text-[#032B55]">
                            Current Images
                        </h3>

                        <p class="mt-1 text-[11px] text-slate-500">
                            Images are displayed according to their current order.
                        </p>

                    </div>


                    <div
                        class="inline-flex
                               items-center
                               justify-center
                               px-3 py-1.5
                               bg-slate-100
                               border border-slate-200
                               text-[10px]
                               font-bold
                               uppercase
                               tracking-[0.12em]
                               text-slate-600"
                    >
                        {{ $manufacturingImages->count() }}
                        {{ $manufacturingImages->count() === 1 ? 'Image' : 'Images' }}
                    </div>

                </div>


                @if($manufacturingImages->isEmpty())

                    <div
                        class="border
                               border-dashed
                               border-slate-300
                               bg-slate-50
                               px-6 py-10
                               text-center"
                    >

                        <div
                            class="mx-auto
                                   w-12 h-12
                                   flex items-center justify-center
                                   bg-white
                                   border border-slate-200
                                   text-[#032B55]"
                        >

                            <svg
                                class="w-6 h-6"
                                fill="none"
                                stroke="currentColor"
                                viewBox="0 0 24 24"
                            >
                                <path
                                    stroke-linecap="round"
                                    stroke-linejoin="round"
                                    stroke-width="1.7"
                                    d="M3 16.5V6.75A1.75 1.75 0 014.75 5h14.5A1.75 1.75 0 0121 6.75v10.5A1.75 1.75 0 0119.25 19H4.75A1.75 1.75 0 013 17.25v-.75zm0 0l4.5-4.5a2 2 0 012.828 0L13 14.672l1.5-1.5a2 2 0 012.828 0L21 16.844M8.5 9.5h.01"
                                />
                            </svg>

                        </div>

                        <h4
                            class="mt-4
                                   text-sm
                                   font-bold
                                   text-[#032B55]"
                        >
                            No Manufacturing Images
                        </h4>

                        <p
                            class="mt-1
                                   text-xs
                                   text-slate-500"
                        >
                            Add your first manufacturing image below.
                        </p>

                    </div>

                @else

                    <div
                        class="grid
                               grid-cols-1
                               md:grid-cols-2
                               xl:grid-cols-3
                               gap-5"
                    >

                        @foreach($manufacturingImages as $index => $manufacturingImage)

                            <div
                                class="border
                                       border-slate-200
                                       bg-white
                                       shadow-sm"
                            >

                                {{-- IMAGE --}}

                                <div
                                    class="relative
                                           aspect-[4/3]
                                           bg-slate-100
                                           overflow-hidden"
                                >

                                    <img
                                        id="manufacturing-gallery-preview-{{ $manufacturingImage->id }}"
                                        src="{{ asset($manufacturingImage->image) }}"
                                        alt="{{ $manufacturingImage->alt_text ?: 'ASEW Manufacturing' }}"
                                        class="w-full
                                               h-full
                                               object-cover"
                                    >


                                    {{-- ORDER --}}

                                    <div
                                        class="absolute
                                               top-3 left-3
                                               px-2.5 py-1.5
                                               bg-[#032B55]
                                               text-white
                                               text-[10px]
                                               font-bold
                                               uppercase
                                               tracking-wider"
                                    >
                                        #{{ $index + 1 }}
                                    </div>


                                    {{-- STATUS --}}

                                    <div
                                        class="absolute
                                               top-3 right-3
                                               px-2.5 py-1.5
                                               text-[10px]
                                               font-bold
                                               uppercase
                                               tracking-wider
                                               {{ $manufacturingImage->is_active
                                                    ? 'bg-emerald-600 text-white'
                                                    : 'bg-slate-700 text-white' }}"
                                    >
                                        {{ $manufacturingImage->is_active
                                            ? 'Active'
                                            : 'Hidden' }}
                                    </div>

                                </div>


                                {{-- EDIT IMAGE --}}

                                <form
                                    action="{{ route(
                                        'admin.homepage.manufacturing-images.update',
                                        $manufacturingImage
                                    ) }}"
                                    method="POST"
                                    enctype="multipart/form-data"
                                    class="p-4"
                                >

                                    @csrf
                                    @method('PUT')


                                    <div>

                                        <label class="homepage-label">
                                            Alt Text
                                        </label>

                                        <input
                                            type="text"
                                            name="alt_text"
                                            value="{{ $manufacturingImage->alt_text }}"
                                            maxlength="255"
                                            placeholder="ASEW manufacturing facility"
                                            class="homepage-input"
                                        >

                                    </div>


                                    <div class="mt-4">

                                        <label class="homepage-label">
                                            Replace Image
                                        </label>

                                        <input
                                            type="file"
                                            name="image"
                                            accept=".jpg,.jpeg,.png,.webp"
                                            onchange="
                                                previewHomepageImage(
                                                    event,
                                                    'manufacturing-gallery-preview-{{ $manufacturingImage->id }}'
                                                )
                                            "
                                            class="homepage-file"
                                        >

                                        <p
                                            class="mt-1.5
                                                   text-[10px]
                                                   text-slate-400"
                                        >
                                            JPG, JPEG, PNG or WEBP. Maximum 6 MB.
                                        </p>

                                    </div>


                                    <button
                                        type="submit"
                                        class="mt-4
                                               w-full
                                               px-4 py-2.5
                                               bg-[#032B55]
                                               hover:bg-[#073B66]
                                               text-white
                                               text-[11px]
                                               font-bold
                                               uppercase
                                               tracking-[0.08em]
                                               transition"
                                    >
                                        Update Image
                                    </button>

                                </form>


                                {{-- ACTIONS --}}

                                <div
                                    class="px-4 pb-4
                                           grid
                                           grid-cols-2
                                           gap-2"
                                >

                                    {{-- MOVE UP --}}

                                    <form
                                        action="{{ route(
                                            'admin.homepage.manufacturing-images.move-up',
                                            $manufacturingImage
                                        ) }}"
                                        method="POST"
                                    >

                                        @csrf
                                        @method('PATCH')

                                        <button
                                            type="submit"
                                            @disabled($loop->first)
                                            class="w-full
                                                   px-3 py-2
                                                   border
                                                   border-slate-200
                                                   text-[10px]
                                                   font-bold
                                                   uppercase
                                                   tracking-wider
                                                   text-slate-600
                                                   hover:border-[#032B55]
                                                   hover:text-[#032B55]
                                                   transition
                                                   disabled:opacity-40
                                                   disabled:cursor-not-allowed"
                                        >
                                            ↑ Move Up
                                        </button>

                                    </form>


                                    {{-- MOVE DOWN --}}

                                    <form
                                        action="{{ route(
                                            'admin.homepage.manufacturing-images.move-down',
                                            $manufacturingImage
                                        ) }}"
                                        method="POST"
                                    >

                                        @csrf
                                        @method('PATCH')

                                        <button
                                            type="submit"
                                            @disabled($loop->last)
                                            class="w-full
                                                   px-3 py-2
                                                   border
                                                   border-slate-200
                                                   text-[10px]
                                                   font-bold
                                                   uppercase
                                                   tracking-wider
                                                   text-slate-600
                                                   hover:border-[#032B55]
                                                   hover:text-[#032B55]
                                                   transition
                                                   disabled:opacity-40
                                                   disabled:cursor-not-allowed"
                                        >
                                            ↓ Move Down
                                        </button>

                                    </form>


                                    {{-- ENABLE / DISABLE --}}

                                    <form
                                        action="{{ route(
                                            'admin.homepage.manufacturing-images.toggle',
                                            $manufacturingImage
                                        ) }}"
                                        method="POST"
                                    >

                                        @csrf
                                        @method('PATCH')

                                        <button
                                            type="submit"
                                            class="w-full
                                                   px-3 py-2
                                                   border
                                                   text-[10px]
                                                   font-bold
                                                   uppercase
                                                   tracking-wider
                                                   transition
                                                   {{ $manufacturingImage->is_active
                                                        ? 'border-amber-300 bg-amber-50 text-amber-700 hover:bg-amber-100'
                                                        : 'border-emerald-300 bg-emerald-50 text-emerald-700 hover:bg-emerald-100' }}"
                                        >
                                            {{ $manufacturingImage->is_active
                                                ? 'Disable'
                                                : 'Enable' }}
                                        </button>

                                    </form>


                                    {{-- DELETE --}}

                                    <form
                                        action="{{ route(
                                            'admin.homepage.manufacturing-images.destroy',
                                            $manufacturingImage
                                        ) }}"
                                        method="POST"
                                        onsubmit="
                                            return confirm(
                                                'Delete this manufacturing image?'
                                            );
                                        "
                                    >

                                        @csrf
                                        @method('DELETE')

                                        <button
                                            type="submit"
                                            class="w-full
                                                   px-3 py-2
                                                   border
                                                   border-red-200
                                                   bg-red-50
                                                   text-red-600
                                                   text-[10px]
                                                   font-bold
                                                   uppercase
                                                   tracking-wider
                                                   hover:bg-red-100
                                                   transition"
                                        >
                                            Delete
                                        </button>

                                    </form>

                                </div>

                            </div>

                        @endforeach

                    </div>

                @endif

            </div>


            {{-- =============================================
                 ADD NEW IMAGE
            ============================================== --}}

            <div
                class="mt-8
                       pt-7
                       border-t
                       border-slate-200"
            >

                <div class="mb-5">

                    <h3
                        class="text-sm
                               font-bold
                               text-[#032B55]"
                    >
                        Add New Manufacturing Image
                    </h3>

                    <p
                        class="mt-1
                               text-[11px]
                               text-slate-500"
                    >
                        The new image will automatically be added at the end of the gallery.
                    </p>

                </div>


                <form
                    action="{{ route(
                        'admin.homepage.manufacturing-images.store'
                    ) }}"
                    method="POST"
                    enctype="multipart/form-data"
                >

                    @csrf


                    <div
                        class="grid
                               md:grid-cols-2
                               gap-5"
                    >

                        <div>

                            <label class="homepage-label">
                                Image
                            </label>

                            <input
                                type="file"
                                name="image"
                                accept=".jpg,.jpeg,.png,.webp"
                                required
                                onchange="
                                    previewHomepageImage(
                                        event,
                                        'new-manufacturing-image-preview'
                                    )
                                "
                                class="homepage-file"
                            >

                            <p
                                class="mt-1.5
                                       text-[10px]
                                       text-slate-400"
                            >
                                JPG, JPEG, PNG or WEBP. Maximum 6 MB.
                            </p>

                        </div>


                        <div>

                            <label class="homepage-label">
                                Alt Text
                            </label>

                            <input
                                type="text"
                                name="alt_text"
                                value="{{ old('alt_text') }}"
                                maxlength="255"
                                placeholder="Example: ASEW manufacturing facility"
                                class="homepage-input"
                            >

                            <p
                                class="mt-1.5
                                       text-[10px]
                                       text-slate-400"
                            >
                                Describe the image for accessibility and SEO.
                            </p>

                        </div>

                    </div>


                    {{-- PREVIEW --}}

                    <div
                        class="mt-5
                               max-w-sm"
                    >

                        <p class="homepage-label">
                            Preview
                        </p>

                        <div
                            class="aspect-[4/3]
                                   bg-slate-100
                                   border
                                   border-dashed
                                   border-slate-300
                                   overflow-hidden"
                        >

                            <img
                                id="new-manufacturing-image-preview"
                                src=""
                                alt=""
                                class="hidden
                                       w-full
                                       h-full
                                       object-cover"
                            >

                            <div
                                id="new-manufacturing-image-preview-placeholder"
                                class="w-full
                                       h-full
                                       flex
                                       items-center
                                       justify-center
                                       text-xs
                                       text-slate-400"
                            >
                                Image Preview
                            </div>

                        </div>

                    </div>


                    <div class="homepage-save-area">

                        <button
                            type="submit"
                            class="homepage-save-button"
                        >
                            Add Manufacturing Image
                        </button>

                    </div>

                </form>

            </div>

        </x-homepage-admin-card>

    </div>

</div>
       {{-- =========================================================
     05 — STATISTICS
========================================================== --}}

<div
    x-show="activeSection === 'stats'"
    x-cloak
    class="space-y-6"
>

    {{-- SECTION SETTINGS --}}

    <form
        action="{{ route('admin.homepage.update') }}"
        method="POST"
    >
        @csrf
        @method('PUT')

        <input
            type="hidden"
            name="section"
            value="stats"
        >

        <x-homepage-admin-card
            title="Statistics Section"
            description="Manage the statistics section heading and visibility."
        >

            <x-homepage-toggle
                name="stats_enabled"
                :checked="old(
                    'stats_enabled',
                    $homepage->stats_enabled
                )"
                title="Show Statistics Section"
            />


            <div class="grid md:grid-cols-2 gap-5 mt-6">

                <div>
                    <label class="homepage-label">
                        Badge
                    </label>

                    <input
                        type="text"
                        name="stats_badge"
                        value="{{ old(
                            'stats_badge',
                            $homepage->stats_badge
                        ) }}"
                        maxlength="120"
                        class="homepage-input"
                    >
                </div>


                <div>
                    <label class="homepage-label">
                        Heading
                    </label>

                    <input
                        type="text"
                        name="stats_heading"
                        value="{{ old(
                            'stats_heading',
                            $homepage->stats_heading
                        ) }}"
                        maxlength="255"
                        class="homepage-input"
                    >
                </div>

            </div>


            <div class="homepage-save-area">

                <button
                    type="submit"
                    class="homepage-save-button"
                >
                    Save Statistics Settings
                </button>

            </div>

        </x-homepage-admin-card>
    </form>


    {{-- CURRENT STATISTICS --}}

    <div class="bg-white border border-slate-200 shadow-sm">

        <div
            class="px-5 sm:px-6 py-4
                   border-b border-slate-200
                   flex flex-col sm:flex-row
                   sm:items-center
                   sm:justify-between
                   gap-3"
        >

            <div>
                <h2 class="text-sm sm:text-base font-bold text-[#032B55]">
                    Statistics
                </h2>

                <p class="mt-1 text-[11px] text-slate-500">
                    Add, edit, reorder, enable or remove homepage statistics.
                </p>
            </div>


            <div class="flex gap-2">

                <span
                    class="px-3 py-1.5
                           bg-slate-100
                           text-slate-600
                           text-[10px]
                           uppercase
                           font-bold"
                >
                    {{ $stats->count() }} Total
                </span>

                <span
                    class="px-3 py-1.5
                           bg-emerald-50
                           text-emerald-700
                           text-[10px]
                           uppercase
                           font-bold"
                >
                    {{ $stats->where('is_active', true)->count() }}
                    Active
                </span>

            </div>

        </div>


        <div class="p-5 sm:p-6">

            <div class="grid md:grid-cols-2 xl:grid-cols-3 gap-5">

                @forelse($stats as $index => $stat)

                    <div
                        class="border border-slate-200
                               bg-white
                               p-5
                               relative"
                    >

                        <div
                            class="flex items-center
                                   justify-between
                                   gap-3
                                   mb-5"
                        >

                            <div class="flex items-center gap-3">

                                <span
                                    class="w-8 h-8
                                           bg-[#032B55]
                                           text-white
                                           flex items-center
                                           justify-center
                                           text-xs
                                           font-bold"
                                >
                                    {{ $index + 1 }}
                                </span>

                                <span
                                    class="text-[10px]
                                           font-bold
                                           uppercase
                                           tracking-wide
                                           text-slate-500"
                                >
                                    Statistic
                                </span>

                            </div>


                            @if($stat->is_active)

                                <span
                                    class="px-2 py-1
                                           bg-emerald-50
                                           text-emerald-700
                                           text-[9px]
                                           uppercase
                                           font-bold"
                                >
                                    Active
                                </span>

                            @else

                                <span
                                    class="px-2 py-1
                                           bg-slate-100
                                           text-slate-600
                                           text-[9px]
                                           uppercase
                                           font-bold"
                                >
                                    Disabled
                                </span>

                            @endif

                        </div>


                        {{-- EDIT --}}

                        <form
                            action="{{ route(
                                'admin.homepage.stats.update',
                                $stat
                            ) }}"
                            method="POST"
                        >
                            @csrf
                            @method('PUT')


                            <label class="homepage-label">
                                Value
                            </label>

                            <input
                                type="text"
                                name="value"
                                value="{{ $stat->value }}"
                                maxlength="50"
                                required
                                class="homepage-input"
                            >


                            <label class="homepage-label mt-4">
                                Label
                            </label>

                            <input
                                type="text"
                                name="label"
                                value="{{ $stat->label }}"
                                maxlength="120"
                                required
                                class="homepage-input"
                            >


                            <button
                                type="submit"
                                class="mt-4
                                       h-9 px-4
                                       bg-[#032B55]
                                       hover:bg-[#D71920]
                                       text-white
                                       text-[10px]
                                       uppercase
                                       font-bold
                                       transition"
                            >
                                Save
                            </button>

                        </form>


                        {{-- ACTIONS --}}

                        <div
                            class="mt-4 pt-4
                                   border-t border-slate-200
                                   flex flex-wrap
                                   gap-2"
                        >

                            <form
                                action="{{ route(
                                    'admin.homepage.stats.move-up',
                                    $stat
                                ) }}"
                                method="POST"
                            >
                                @csrf
                                @method('PATCH')

                                <button
                                    type="submit"
                                    @disabled($loop->first)
                                    class="slide-action-button
                                           disabled:opacity-30"
                                >
                                    ↑ Up
                                </button>
                            </form>


                            <form
                                action="{{ route(
                                    'admin.homepage.stats.move-down',
                                    $stat
                                ) }}"
                                method="POST"
                            >
                                @csrf
                                @method('PATCH')

                                <button
                                    type="submit"
                                    @disabled($loop->last)
                                    class="slide-action-button
                                           disabled:opacity-30"
                                >
                                    ↓ Down
                                </button>
                            </form>


                            <form
                                action="{{ route(
                                    'admin.homepage.stats.toggle',
                                    $stat
                                ) }}"
                                method="POST"
                            >
                                @csrf
                                @method('PATCH')

                                <button
                                    type="submit"
                                    class="slide-action-button"
                                >
                                    {{ $stat->is_active
                                        ? 'Disable'
                                        : 'Enable'
                                    }}
                                </button>
                            </form>


                            <form
                                action="{{ route(
                                    'admin.homepage.stats.destroy',
                                    $stat
                                ) }}"
                                method="POST"
                                onsubmit="
                                    return confirm(
                                        'Delete this statistic?'
                                    );
                                "
                            >
                                @csrf
                                @method('DELETE')

                                <button
                                    type="submit"
                                    class="h-8 px-3
                                           border border-red-200
                                           bg-red-50
                                           hover:bg-red-600
                                           text-red-600
                                           hover:text-white
                                           text-[10px]
                                           uppercase
                                           font-bold
                                           transition"
                                >
                                    Delete
                                </button>
                            </form>

                        </div>

                    </div>

                @empty

                    <div
                        class="md:col-span-2
                               xl:col-span-3
                               border-2
                               border-dashed
                               border-slate-200
                               p-10
                               text-center"
                    >
                        <p class="font-bold text-[#032B55]">
                            No statistics added.
                        </p>

                        <p class="mt-1 text-xs text-slate-500">
                            Add your first statistic below.
                        </p>
                    </div>

                @endforelse

            </div>

        </div>

    </div>


    {{-- ADD NEW --}}

    <div class="bg-white border border-slate-200 shadow-sm">

        <div class="px-5 sm:px-6 py-4 border-b border-slate-200">

            <h2 class="text-sm sm:text-base font-bold text-[#032B55]">
                Add New Statistic
            </h2>

            <p class="mt-1 text-[11px] text-slate-500">
                Example: 50+ / Years of Experience
            </p>

        </div>


        <form
            action="{{ route('admin.homepage.stats.store') }}"
            method="POST"
        >
            @csrf

            <div class="p-5 sm:p-6">

                <div class="grid md:grid-cols-2 gap-5">

                    <div>
                        <label class="homepage-label">
                            Value *
                        </label>

                        <input
                            type="text"
                            name="value"
                            maxlength="50"
                            required
                            placeholder="50+"
                            class="homepage-input"
                        >
                    </div>


                    <div>
                        <label class="homepage-label">
                            Label *
                        </label>

                        <input
                            type="text"
                            name="label"
                            maxlength="120"
                            required
                            placeholder="Years of Experience"
                            class="homepage-input"
                        >
                    </div>

                </div>


                <button
                    type="submit"
                    class="mt-5
                           h-11 px-6
                           bg-[#D71920]
                           hover:bg-[#032B55]
                           text-white
                           text-xs
                           uppercase
                           font-bold
                           transition"
                >
                    + Add Statistic
                </button>

            </div>

        </form>

    </div>

</div>


        {{-- =========================================================
     06 — WHY ASEW
========================================================== --}}

<div
    x-show="activeSection === 'why'"
    x-cloak
    class="space-y-6"
>

    {{-- GENERAL SETTINGS --}}
    <form
        action="{{ route('admin.homepage.update') }}"
        method="POST"
    >
        @csrf
        @method('PUT')

        <input
            type="hidden"
            name="section"
            value="why"
        >

        <x-homepage-admin-card
            title="Why ASEW Section"
            description="Manage the heading and visibility of this section."
        >

            <x-homepage-toggle
                name="why_enabled"
                :checked="old(
                    'why_enabled',
                    $homepage->why_enabled
                )"
                title="Show Why ASEW Section"
            />

            <div class="grid md:grid-cols-2 gap-5 mt-6">

                <div>
                    <label class="homepage-label">
                        Badge
                    </label>

                    <input
                        type="text"
                        name="why_badge"
                        value="{{ old(
                            'why_badge',
                            $homepage->why_badge
                        ) }}"
                        maxlength="120"
                        class="homepage-input"
                    >
                </div>

                <div>
                    <label class="homepage-label">
                        Heading
                    </label>

                    <input
                        type="text"
                        name="why_heading"
                        value="{{ old(
                            'why_heading',
                            $homepage->why_heading
                        ) }}"
                        maxlength="255"
                        class="homepage-input"
                    >
                </div>

            </div>

            <div class="homepage-save-area">

                <button
                    type="submit"
                    class="homepage-save-button"
                >
                    Save Why ASEW Settings
                </button>

            </div>

        </x-homepage-admin-card>
    </form>


    {{-- CURRENT REASONS --}}
    <div class="bg-white border border-slate-200 shadow-sm">

        <div
            class="px-5 sm:px-6 py-4
                   border-b border-slate-200
                   flex flex-col sm:flex-row
                   sm:items-center
                   sm:justify-between gap-3"
        >

            <div>
                <h2 class="text-sm sm:text-base font-bold text-[#032B55]">
                    Why Choose ASEW
                </h2>

                <p class="mt-1 text-[11px] text-slate-500">
                    Add, edit, reorder, disable or remove reasons.
                </p>
            </div>

            <div class="flex gap-2">

                <span
                    class="px-3 py-1.5
                           bg-slate-100
                           text-slate-600
                           text-[10px]
                           uppercase font-bold"
                >
                    {{ $reasons->count() }} Total
                </span>

                <span
                    class="px-3 py-1.5
                           bg-emerald-50
                           text-emerald-700
                           text-[10px]
                           uppercase font-bold"
                >
                    {{ $reasons->where('is_active', true)->count() }}
                    Active
                </span>

            </div>

        </div>


        <div class="p-5 sm:p-6">

            <div class="grid md:grid-cols-2 xl:grid-cols-3 gap-5">

                @forelse($reasons as $index => $reason)

                    <div class="border border-slate-200 bg-white p-5">

                        <div
                            class="flex items-center
                                   justify-between
                                   gap-3 mb-5"
                        >

                            <div class="flex items-center gap-3">

                                <span
                                    class="w-8 h-8
                                           flex items-center
                                           justify-center
                                           bg-[#032B55]
                                           text-white
                                           text-xs font-bold"
                                >
                                    {{ $index + 1 }}
                                </span>

                                <span
                                    class="text-[10px]
                                           uppercase
                                           font-bold
                                           text-slate-500"
                                >
                                    Reason
                                </span>

                            </div>

                            <span
                                class="px-2 py-1
                                       text-[9px]
                                       uppercase font-bold
                                       {{ $reason->is_active
                                            ? 'bg-emerald-50 text-emerald-700'
                                            : 'bg-slate-100 text-slate-600'
                                       }}"
                            >
                                {{ $reason->is_active
                                    ? 'Active'
                                    : 'Disabled'
                                }}
                            </span>

                        </div>


                        {{-- EDIT --}}
                        <form
                            action="{{ route(
                                'admin.homepage.reasons.update',
                                $reason
                            ) }}"
                            method="POST"
                        >
                            @csrf
                            @method('PUT')

                            <label class="homepage-label">
                                Title
                            </label>

                            <input
                                type="text"
                                name="title"
                                value="{{ $reason->title }}"
                                maxlength="180"
                                required
                                class="homepage-input"
                            >

                            <label class="homepage-label mt-4">
                                Description
                            </label>

                            <textarea
                                name="description"
                                rows="4"
                                maxlength="1000"
                                required
                                class="homepage-input"
                            >{{ $reason->description }}</textarea>

                            <button
                                type="submit"
                                class="mt-4 h-9 px-4
                                       bg-[#032B55]
                                       hover:bg-[#D71920]
                                       text-white
                                       text-[10px]
                                       uppercase font-bold
                                       transition"
                            >
                                Save
                            </button>

                        </form>


                        {{-- ACTIONS --}}
                        <div
                            class="mt-4 pt-4
                                   border-t border-slate-200
                                   flex flex-wrap gap-2"
                        >

                            <form
                                action="{{ route(
                                    'admin.homepage.reasons.move-up',
                                    $reason
                                ) }}"
                                method="POST"
                            >
                                @csrf
                                @method('PATCH')

                                <button
                                    @disabled($loop->first)
                                    class="slide-action-button
                                           disabled:opacity-30"
                                >
                                    ↑ Up
                                </button>
                            </form>


                            <form
                                action="{{ route(
                                    'admin.homepage.reasons.move-down',
                                    $reason
                                ) }}"
                                method="POST"
                            >
                                @csrf
                                @method('PATCH')

                                <button
                                    @disabled($loop->last)
                                    class="slide-action-button
                                           disabled:opacity-30"
                                >
                                    ↓ Down
                                </button>
                            </form>


                            <form
                                action="{{ route(
                                    'admin.homepage.reasons.toggle',
                                    $reason
                                ) }}"
                                method="POST"
                            >
                                @csrf
                                @method('PATCH')

                                <button class="slide-action-button">
                                    {{ $reason->is_active
                                        ? 'Disable'
                                        : 'Enable'
                                    }}
                                </button>
                            </form>


                            <form
                                action="{{ route(
                                    'admin.homepage.reasons.destroy',
                                    $reason
                                ) }}"
                                method="POST"
                                onsubmit="
                                    return confirm(
                                        'Delete this reason?'
                                    );
                                "
                            >
                                @csrf
                                @method('DELETE')

                                <button
                                    class="h-8 px-3
                                           border border-red-200
                                           bg-red-50
                                           hover:bg-red-600
                                           text-red-600
                                           hover:text-white
                                           text-[10px]
                                           uppercase font-bold
                                           transition"
                                >
                                    Delete
                                </button>

                            </form>

                        </div>

                    </div>

                @empty

                    <div
                        class="md:col-span-2 xl:col-span-3
                               border-2 border-dashed
                               border-slate-200
                               p-10 text-center"
                    >
                        <p class="font-bold text-[#032B55]">
                            No reasons added yet.
                        </p>

                        <p class="mt-1 text-xs text-slate-500">
                            Add your first reason below.
                        </p>
                    </div>

                @endforelse

            </div>

        </div>

    </div>


    {{-- ADD NEW REASON --}}
    <div class="bg-white border border-slate-200 shadow-sm">

        <div class="px-5 sm:px-6 py-4 border-b border-slate-200">

            <h2 class="text-sm sm:text-base font-bold text-[#032B55]">
                Add New Reason
            </h2>

            <p class="mt-1 text-[11px] text-slate-500">
                Add another reason customers should choose ASEW.
            </p>

        </div>

        <form
            action="{{ route('admin.homepage.reasons.store') }}"
            method="POST"
        >
            @csrf

            <div class="p-5 sm:p-6">

                <div class="grid md:grid-cols-2 gap-5">

                    <div>
                        <label class="homepage-label">
                            Title *
                        </label>

                        <input
                            type="text"
                            name="title"
                            maxlength="180"
                            required
                            placeholder="Precision Engineering"
                            class="homepage-input"
                        >
                    </div>

                    <div>
                        <label class="homepage-label">
                            Description *
                        </label>

                        <textarea
                            name="description"
                            rows="4"
                            maxlength="1000"
                            required
                            placeholder="Enter reason description..."
                            class="homepage-input"
                        ></textarea>
                    </div>

                </div>

                <button
                    type="submit"
                    class="mt-5 h-11 px-6
                           bg-[#D71920]
                           hover:bg-[#032B55]
                           text-white
                           text-xs uppercase
                           font-bold transition"
                >
                    + Add Reason
                </button>

            </div>

        </form>

    </div>

</div>


        {{-- =========================================================
             07 — FINAL CTA
        ========================================================== --}}

        <div
            x-show="activeSection === 'cta'"
            x-cloak
        >

            <form
                action="{{ route('admin.homepage.update') }}"
                method="POST"
            >

                @csrf
                @method('PUT')

                <input
                    type="hidden"
                    name="section"
                    value="cta"
                >

                <x-homepage-admin-card
                    title="Final Call To Action"
                    description="Manage the enquiry banner displayed near the bottom of the homepage."
                >

                    <x-homepage-toggle
                        name="cta_enabled"
                        :checked="old(
                            'cta_enabled',
                            $homepage->cta_enabled
                        )"
                        title="Show Final CTA"
                    />


                    <div class="grid md:grid-cols-2 gap-5 mt-6">

                        <div class="md:col-span-2">

                            <label class="homepage-label">
                                CTA Heading
                            </label>

                            <input
                                type="text"
                                name="cta_heading"
                                value="{{ old(
                                    'cta_heading',
                                    $homepage->cta_heading
                                ) }}"
                                maxlength="255"
                                class="homepage-input"
                            >

                        </div>


                        <div class="md:col-span-2">

                            <label class="homepage-label">
                                Description
                            </label>

                            <textarea
                                name="cta_description"
                                rows="4"
                                maxlength="1500"
                                class="homepage-textarea"
                            >{{ old(
                                'cta_description',
                                $homepage->cta_description
                            ) }}</textarea>

                        </div>


                        <div>

                            <label class="homepage-label">
                                Button Text
                            </label>

                            <input
                                type="text"
                                name="cta_button_text"
                                value="{{ old(
                                    'cta_button_text',
                                    $homepage->cta_button_text
                                ) }}"
                                maxlength="100"
                                class="homepage-input"
                            >

                        </div>


                        <div>

                            <label class="homepage-label">
                                Button URL
                            </label>

                            <input
                                type="text"
                                name="cta_button_url"
                                value="{{ old(
                                    'cta_button_url',
                                    $homepage->cta_button_url
                                ) }}"
                                maxlength="500"
                                placeholder="/request-quote"
                                class="homepage-input"
                            >

                        </div>

                    </div>


                    <div class="homepage-save-area">

                        <button
                            type="submit"
                            class="homepage-save-button"
                        >
                            Save Final CTA
                        </button>

                    </div>

                </x-homepage-admin-card>

            </form>

        </div>

    </div>
</section>


{{-- =========================================================
     LOCAL ADMIN FORM STYLES
========================================================= --}}

<style>

[x-cloak] {
    display: none !important;
}


.homepage-label {
    display: block;
    margin-bottom: 0.5rem;

    font-size: 10px;
    line-height: 1rem;
    font-weight: 700;

    text-transform: uppercase;
    letter-spacing: .06em;

    color: #64748b;
}


.homepage-input {
    width: 100%;
    height: 44px;

    border: 1px solid #cbd5e1;
    background: #ffffff;

    padding: 0 12px;

    font-size: 13px;
    color: #334155;

    outline: none;

    transition:
        border-color .2s ease,
        box-shadow .2s ease;
}


.homepage-input:focus {
    border-color: #073B66;
    box-shadow: 0 0 0 1px #073B66;
}


.homepage-textarea {
    width: 100%;

    border: 1px solid #cbd5e1;
    background: #ffffff;

    padding: 12px;

    font-size: 13px;
    line-height: 1.6;
    color: #334155;

    resize: vertical;
    outline: none;

    transition:
        border-color .2s ease,
        box-shadow .2s ease;
}


.homepage-textarea:focus {
    border-color: #073B66;
    box-shadow: 0 0 0 1px #073B66;
}


.homepage-file {
    display: block;
    width: 100%;

    border: 1px solid #e2e8f0;
    background: #ffffff;

    padding: 8px;

    font-size: 11px;
    color: #64748b;
}


.homepage-file::file-selector-button {
    border: 0;
    margin-right: 10px;

    padding: 7px 10px;

    background: #f1f5f9;
    color: #032B55;

    font-size: 10px;
    font-weight: 700;

    cursor: pointer;
}


.homepage-save-area {
    display: flex;
    justify-content: flex-end;

    margin-top: 28px;
    padding-top: 20px;

    border-top: 1px solid #e2e8f0;
}


.homepage-save-button {
    display: inline-flex;
    align-items: center;
    justify-content: center;

    min-width: 190px;
    height: 44px;

    padding: 0 24px;

    background: #D71920;
    color: #ffffff;

    font-size: 11px;
    font-weight: 700;

    text-transform: uppercase;
    letter-spacing: .05em;

    transition:
        background-color .25s ease,
        transform .25s ease;
}


.homepage-save-button:hover {
    background: #032B55;
}


.slide-action-button {
    height: 32px;
    padding: 0 12px;

    border: 1px solid #e2e8f0;
    background: #ffffff;

    color: #475569;

    font-size: 10px;
    font-weight: 700;

    text-transform: uppercase;

    transition:
        background-color .2s ease,
        border-color .2s ease,
        color .2s ease;
}


.slide-action-button:hover {
    background: #f8fafc;
    border-color: #cbd5e1;
    color: #032B55;
}

</style>


{{-- =========================================================
     IMAGE PREVIEW
========================================================= --}}

<script>
function previewHomepageImage(event, previewId) {

    const input = event.target;
    const preview = document.getElementById(previewId);

    if (
        !input.files ||
        !input.files[0] ||
        !preview
    ) {
        return;
    }

    const reader = new FileReader();

    reader.onload = function (e) {

        preview.src = e.target.result;

        preview.classList.remove('hidden');

        const placeholder =
            document.getElementById(
                previewId + '-placeholder'
            );

        if (placeholder) {
            placeholder.classList.add('hidden');
        }
    };

    reader.readAsDataURL(input.files[0]);
}
</script>

@endsection