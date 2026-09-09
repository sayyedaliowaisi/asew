
@php

    $isEdit = isset($product);

    $categoryOptions = [
        'soil' => 'Soil Testing',
        'concrete' => 'Concrete Testing',
        'cement' => 'Cement Testing',
        'aggregate' => 'Aggregate Testing',
        'bitumen' => 'Bitumen / Asphalt',
        'rock' => 'Rock Testing',
        'material' => 'Material Testing',
        'survey' => 'Survey Instruments',
        'laboratory' => 'Laboratory Equipment',
    ];

    $currentFeatures = old(
        'features',
        $isEdit
            ? implode("\n", $product->features ?? [])
            : ''
    );

@endphp


{{-- =========================================================
     BASIC INFORMATION
========================================================= --}}

<div>

    <div
        class="flex
               items-center
               gap-3
               pb-4
               border-b
               border-slate-100"
    >

        <div
            class="w-8
                   h-8
                   flex
                   items-center
                   justify-center
                   bg-[#032B55]
                   text-white
                   text-[10px]
                   font-bold"
        >
            01
        </div>

        <div>

            <p
                class="text-[9px]
                       uppercase
                       tracking-[0.15em]
                       font-bold
                       text-[#D71920]"
            >
                Basic Information
            </p>

            <p
                class="mt-1
                       text-[10px]
                       text-slate-400"
            >
                Product identity and catalogue category.
            </p>

        </div>

    </div>



    {{-- NAME + CODE --}}

    <div
        class="grid
               grid-cols-1
               md:grid-cols-2
               gap-5
               mt-5"
    >

        <div>

            <label
                for="product_name"
                class="block
                       mb-2
                       text-[9px]
                       uppercase
                       tracking-wide
                       font-bold
                       text-[#073B66]"
            >
                Product Name
                <span class="text-[#D71920]">*</span>
            </label>


            <input
                id="product_name"
                type="text"
                name="name"
                value="{{ old(
                    'name',
                    $product->name ?? ''
                ) }}"
                required
                placeholder="Example: Compression Testing Machine"
                class="w-full
                       h-[48px]
                       px-4
                       border
                       border-slate-200
                       bg-white
                       text-[12px]
                       text-slate-700
                       placeholder:text-slate-300
                       outline-none
                       focus:border-[#073B66]
                       focus:ring-1
                       focus:ring-[#073B66]/10
                       transition"
            >

            @error('name')
                <p class="mt-1.5 text-[9px] text-red-600">
                    {{ $message }}
                </p>
            @enderror

        </div>



        <div>

            <label
                for="product_code"
                class="block
                       mb-2
                       text-[9px]
                       uppercase
                       tracking-wide
                       font-bold
                       text-[#073B66]"
            >
                Product Code
            </label>


            <input
                id="product_code"
                type="text"
                name="code"
                value="{{ old(
                    'code',
                    $product->code ?? ''
                ) }}"
                placeholder="Example: ASEW-CT-201"
                class="w-full
                       h-[48px]
                       px-4
                       border
                       border-slate-200
                       bg-white
                       text-[12px]
                       text-slate-700
                       placeholder:text-slate-300
                       outline-none
                       focus:border-[#073B66]
                       focus:ring-1
                       focus:ring-[#073B66]/10
                       transition"
            >

            @error('code')
                <p class="mt-1.5 text-[9px] text-red-600">
                    {{ $message }}
                </p>
            @enderror

        </div>

    </div>



    {{-- CATEGORY + CATEGORY SLUG --}}

    <div
        class="grid
               grid-cols-1
               md:grid-cols-2
               gap-5
               mt-5"
    >

        <div>

            <label
                for="product_category"
                class="block
                       mb-2
                       text-[9px]
                       uppercase
                       tracking-wide
                       font-bold
                       text-[#073B66]"
            >
                Category
                <span class="text-[#D71920]">*</span>
            </label>


            <select
                id="product_category"
                name="category"
                required
                class="w-full
                       h-[48px]
                       px-4
                       border
                       border-slate-200
                       bg-white
                       text-[12px]
                       text-slate-600
                       outline-none
                       focus:border-[#073B66]
                       focus:ring-1
                       focus:ring-[#073B66]/10
                       transition"
            >

                <option value="">
                    Select Product Category
                </option>


                @foreach($categoryOptions as $slug => $label)

                    <option
                        value="{{ $label }}"
                        data-slug="{{ $slug }}"
                        @selected(
                            old(
                                'category',
                                $product->category ?? ''
                            ) === $label
                        )
                    >
                        {{ $label }}
                    </option>

                @endforeach

            </select>

            @error('category')
                <p class="mt-1.5 text-[9px] text-red-600">
                    {{ $message }}
                </p>
            @enderror

        </div>



        <div>

            <label
                for="category_slug"
                class="block
                       mb-2
                       text-[9px]
                       uppercase
                       tracking-wide
                       font-bold
                       text-[#073B66]"
            >
                Category Slug
                <span class="text-[#D71920]">*</span>
            </label>


            <input
                id="category_slug"
                type="text"
                name="category_slug"
                value="{{ old(
                    'category_slug',
                    $product->category_slug ?? ''
                ) }}"
                required
                readonly
                placeholder="Automatically generated"
                class="w-full
                       h-[48px]
                       px-4
                       border
                       border-slate-200
                       bg-slate-50
                       text-[12px]
                       text-slate-500
                       cursor-not-allowed
                       outline-none"
            >

            <p
                class="mt-1.5
                       text-[9px]
                       text-slate-400"
            >
                Automatically generated from the selected category.
            </p>

            @error('category_slug')
                <p class="mt-1.5 text-[9px] text-red-600">
                    {{ $message }}
                </p>
            @enderror

        </div>

    </div>

</div>



{{-- =========================================================
     IMAGE & DISPLAY SETTINGS
========================================================= --}}

<div
    class="mt-8
           pt-7
           border-t
           border-slate-200"
>

    <div
        class="flex
               items-center
               gap-3
               pb-4
               border-b
               border-slate-100"
    >

        <div
            class="w-8
                   h-8
                   flex
                   items-center
                   justify-center
                   bg-[#032B55]
                   text-white
                   text-[10px]
                   font-bold"
        >
            02
        </div>


        <div>

            <p
                class="text-[9px]
                       uppercase
                       tracking-[0.15em]
                       font-bold
                       text-[#D71920]"
            >
                Image & Display
            </p>

            <p
                class="mt-1
                       text-[10px]
                       text-slate-400"
            >
                Product image and catalogue display order.
            </p>

        </div>

    </div>



    <div
        class="grid
               grid-cols-1
               md:grid-cols-2
               gap-5
               mt-5"
    >

        {{-- IMAGE --}}

        <div>

            <label
                for="product_image"
                class="block
                       mb-2
                       text-[9px]
                       uppercase
                       tracking-wide
                       font-bold
                       text-[#073B66]"
            >
                Product Image
            </label>


            <div
                class="border
                       border-dashed
                       border-slate-300
                       bg-slate-50
                       p-4"
            >

                <input
                    id="product_image"
                    type="file"
                    name="image"
                    accept=".jpg,.jpeg,.png,.webp"
                    class="block
                           w-full
                           text-[10px]
                           text-slate-500
                           file:mr-4
                           file:min-h-[40px]
                           file:px-4
                           file:border-0
                           file:bg-[#032B55]
                           file:text-white
                           file:text-[9px]
                           file:uppercase
                           file:tracking-wide
                           file:font-bold
                           file:cursor-pointer
                           hover:file:bg-[#D71920]
                           file:transition"
                >

                <p
                    class="mt-3
                           text-[9px]
                           leading-5
                           text-slate-400"
                >
                    JPG, JPEG, PNG or WEBP.
                    Maximum file size: 4MB.
                </p>

            </div>

            @error('image')
                <p class="mt-1.5 text-[9px] text-red-600">
                    {{ $message }}
                </p>
            @enderror

        </div>



        {{-- SORT ORDER --}}

        <div>

            <label
                for="sort_order"
                class="block
                       mb-2
                       text-[9px]
                       uppercase
                       tracking-wide
                       font-bold
                       text-[#073B66]"
            >
                Sort Order
            </label>


            <input
                id="sort_order"
                type="number"
                name="sort_order"
                min="0"
                value="{{ old(
                    'sort_order',
                    $product->sort_order ?? 0
                ) }}"
                class="w-full
                       h-[48px]
                       px-4
                       border
                       border-slate-200
                       bg-white
                       text-[12px]
                       text-slate-700
                       outline-none
                       focus:border-[#073B66]
                       focus:ring-1
                       focus:ring-[#073B66]/10
                       transition"
            >


            <p
                class="mt-1.5
                       text-[9px]
                       leading-5
                       text-slate-400"
            >
                Lower numbers appear first in the product catalogue.
            </p>

            @error('sort_order')
                <p class="mt-1.5 text-[9px] text-red-600">
                    {{ $message }}
                </p>
            @enderror

        </div>

    </div>



    {{-- CURRENT IMAGE --}}

    @if($isEdit && $product->image)

        <div class="mt-6">

            <p
                class="mb-3
                       text-[9px]
                       uppercase
                       tracking-wide
                       font-bold
                       text-[#073B66]"
            >
                Current Product Image
            </p>


            <div
                class="w-[180px]
                       h-[150px]
                       border
                       border-slate-200
                       bg-white
                       flex
                       items-center
                       justify-center"
            >

                <img
                    src="{{ asset($product->image) }}"
                    alt="{{ $product->name }}"
                    class="max-w-full
                           max-h-full
                           object-contain
                           p-4"
                >

            </div>


            <p
                class="mt-2
                       text-[9px]
                       text-slate-400"
            >
                Upload a new image above only if you want
                to replace the current image.
            </p>

        </div>

    @endif

</div>



{{-- =========================================================
     PRODUCT CONTENT
========================================================= --}}

<div
    class="mt-8
           pt-7
           border-t
           border-slate-200"
>

    <div
        class="flex
               items-center
               gap-3
               pb-4
               border-b
               border-slate-100"
    >

        <div
            class="w-8
                   h-8
                   flex
                   items-center
                   justify-center
                   bg-[#032B55]
                   text-white
                   text-[10px]
                   font-bold"
        >
            03
        </div>


        <div>

            <p
                class="text-[9px]
                       uppercase
                       tracking-[0.15em]
                       font-bold
                       text-[#D71920]"
            >
                Product Content
            </p>

            <p
                class="mt-1
                       text-[10px]
                       text-slate-400"
            >
                Information displayed on the public product page.
            </p>

        </div>

    </div>



    {{-- SHORT DESCRIPTION --}}

    <div class="mt-5">

        <label
            for="short_description"
            class="block
                   mb-2
                   text-[9px]
                   uppercase
                   tracking-wide
                   font-bold
                   text-[#073B66]"
        >
            Short Description
        </label>


        <textarea
            id="short_description"
            name="short_description"
            rows="3"
            maxlength="500"
            placeholder="Write a short catalogue description..."
            class="w-full
                   px-4
                   py-3
                   border
                   border-slate-200
                   bg-white
                   text-[12px]
                   leading-6
                   text-slate-700
                   placeholder:text-slate-300
                   resize-none
                   outline-none
                   focus:border-[#073B66]
                   focus:ring-1
                   focus:ring-[#073B66]/10
                   transition"
        >{{ old(
            'short_description',
            $product->short_description ?? ''
        ) }}</textarea>

        <p
            class="mt-1.5
                   text-[9px]
                   text-slate-400"
        >
            Recommended for product cards and catalogue previews.
            Maximum 500 characters.
        </p>

        @error('short_description')
            <p class="mt-1.5 text-[9px] text-red-600">
                {{ $message }}
            </p>
        @enderror

    </div>



    {{-- FULL DESCRIPTION --}}

    <div class="mt-5">

        <label
            for="description"
            class="block
                   mb-2
                   text-[9px]
                   uppercase
                   tracking-wide
                   font-bold
                   text-[#073B66]"
        >
            Full Description
        </label>


        <textarea
            id="description"
            name="description"
            rows="7"
            placeholder="Enter complete product description..."
            class="w-full
                   px-4
                   py-3
                   border
                   border-slate-200
                   bg-white
                   text-[12px]
                   leading-6
                   text-slate-700
                   placeholder:text-slate-300
                   outline-none
                   focus:border-[#073B66]
                   focus:ring-1
                   focus:ring-[#073B66]/10
                   transition"
        >{{ old(
            'description',
            $product->description ?? ''
        ) }}</textarea>

        @error('description')
            <p class="mt-1.5 text-[9px] text-red-600">
                {{ $message }}
            </p>
        @enderror

    </div>



    {{-- FEATURES --}}

    <div class="mt-5">

        <label
            for="features"
            class="block
                   mb-2
                   text-[9px]
                   uppercase
                   tracking-wide
                   font-bold
                   text-[#073B66]"
        >
            Key Features
        </label>


        <textarea
            id="features"
            name="features"
            rows="7"
            placeholder="High accuracy testing&#10;Heavy-duty construction&#10;Easy operation&#10;Low maintenance"
            class="w-full
                   px-4
                   py-3
                   border
                   border-slate-200
                   bg-white
                   text-[12px]
                   leading-7
                   text-slate-700
                   placeholder:text-slate-300
                   outline-none
                   focus:border-[#073B66]
                   focus:ring-1
                   focus:ring-[#073B66]/10
                   transition"
        >{{ $currentFeatures }}</textarea>


        <p
            class="mt-1.5
                   text-[9px]
                   leading-5
                   text-slate-400"
        >
            Enter one product feature on each new line.
        </p>

        @error('features')
            <p class="mt-1.5 text-[9px] text-red-600">
                {{ $message }}
            </p>
        @enderror

    </div>

</div>



{{-- =========================================================
     PUBLISHING STATUS
========================================================= --}}

<div
    class="mt-8
           pt-7
           border-t
           border-slate-200"
>

    <div
        class="flex
               items-center
               gap-3
               pb-4
               border-b
               border-slate-100"
    >

        <div
            class="w-8
                   h-8
                   flex
                   items-center
                   justify-center
                   bg-[#032B55]
                   text-white
                   text-[10px]
                   font-bold"
        >
            04
        </div>


        <div>

            <p
                class="text-[9px]
                       uppercase
                       tracking-[0.15em]
                       font-bold
                       text-[#D71920]"
            >
                Publishing
            </p>

            <p
                class="mt-1
                       text-[10px]
                       text-slate-400"
            >
                Control public catalogue visibility.
            </p>

        </div>

    </div>



    <div
        class="mt-5
               border
               border-slate-200
               bg-slate-50
               p-5"
    >

        <label
            class="flex
                   items-start
                   gap-4
                   cursor-pointer"
        >

            <input
                type="checkbox"
                name="is_active"
                value="1"
                @checked(
                    old(
                        'is_active',
                        $product->is_active ?? true
                    )
                )
                class="mt-1
                       rounded
                       border-slate-300
                       text-[#032B55]
                       focus:ring-[#032B55]"
            >


            <span>

                <span
                    class="block
                           text-[11px]
                           font-bold
                           text-[#073B66]"
                >
                    Active Product
                </span>


                <span
                    class="block
                           mt-1
                           text-[10px]
                           leading-5
                           text-slate-400"
                >
                    When enabled, this product can appear
                    on the public ASEW product catalogue.
                </span>

            </span>

        </label>

    </div>

</div>



{{-- =========================================================
     FORM ACTIONS
========================================================= --}}

<div
    class="mt-8
           pt-6
           border-t
           border-slate-200
           flex
           flex-col-reverse
           sm:flex-row
           sm:items-center
           sm:justify-between
           gap-3"
>

    <a
        href="{{ route('admin.products.index') }}"
        class="inline-flex
               items-center
               justify-center
               min-h-[46px]
               px-6
               border
               border-slate-200
               text-[9px]
               uppercase
               tracking-wide
               font-bold
               text-slate-500
               hover:border-[#D71920]
               hover:text-[#D71920]
               transition"
    >
        Cancel
    </a>


    <button
        type="submit"
        class="inline-flex
               items-center
               justify-center
               min-h-[46px]
               px-8
               bg-[#D71920]
               hover:bg-[#032B55]
               text-white
               text-[9px]
               uppercase
               tracking-[0.12em]
               font-bold
               transition"
    >
        {{ $isEdit
            ? 'Update Product'
            : 'Create Product' }}
    </button>

</div>



{{-- =========================================================
     CATEGORY SLUG SCRIPT
========================================================= --}}

<script>

document.addEventListener('DOMContentLoaded', function () {

    const category =
        document.getElementById('product_category');

    const categorySlug =
        document.getElementById('category_slug');


    if (!category || !categorySlug) {
        return;
    }


    function updateCategorySlug() {

        const selected =
            category.options[category.selectedIndex];

        categorySlug.value =
            selected?.dataset?.slug || '';

    }


    category.addEventListener(
        'change',
        updateCategorySlug
    );


    /*
     * Useful when validation redirects back to
     * the create/edit form.
     */
    if (
        category.value &&
        !categorySlug.value
    ) {
        updateCategorySlug();
    }

});

</script>

