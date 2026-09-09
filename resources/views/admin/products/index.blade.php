
@extends('layouts.admin')

@section('title', 'Products | ASEW Admin')

@section('page-title', 'Product Management')

@section('content')

<section class="p-4 sm:p-6 lg:p-8">

    <div class="max-w-[1500px] mx-auto">

        {{-- =====================================================
             PAGE HEADING
        ====================================================== --}}

        <div
            class="flex
                   flex-col
                   md:flex-row
                   md:items-center
                   md:justify-between
                   gap-4"
        >

            <div>

                <p
                    class="text-[9px]
                           uppercase
                           tracking-[0.18em]
                           font-bold
                           text-[#D71920]"
                >
                    Product Catalogue
                </p>

                <h1
                    class="mt-2
                           text-2xl
                           sm:text-3xl
                           font-extrabold
                           text-[#073B66]"
                >
                    Product Management
                </h1>

                <p
                    class="mt-2
                           text-[11px]
                           sm:text-[12px]
                           leading-5
                           text-slate-400"
                >
                    Manage products displayed on the ASEW website catalogue.
                </p>

            </div>



            <a
                href="{{ route('admin.products.create') }}"
                class="inline-flex
                       items-center
                       justify-center
                       gap-2
                       min-h-[44px]
                       px-5
                       bg-[#D71920]
                       hover:bg-[#032B55]
                       text-white
                       text-[10px]
                       uppercase
                       tracking-wide
                       font-bold
                       transition"
            >
                + Add Product
            </a>

        </div>



        {{-- =====================================================
             SUCCESS MESSAGE
        ====================================================== --}}

        @if(session('success'))

            <div
                class="mt-6
                       border
                       border-green-200
                       bg-green-50
                       px-5
                       py-4
                       text-[11px]
                       sm:text-[12px]
                       font-semibold
                       text-green-700"
            >
                {{ session('success') }}
            </div>

        @endif



        {{-- =====================================================
             FILTERS
        ====================================================== --}}

        <form
            method="GET"
            action="{{ route('admin.products.index') }}"
            class="mt-6
                   bg-white
                   border
                   border-slate-200
                   p-4
                   sm:p-5"
        >

            <div
                class="grid
                       grid-cols-1
                       md:grid-cols-2
                       xl:grid-cols-[1fr_180px_220px_auto_auto]
                       gap-3"
            >

                {{-- SEARCH --}}

                <div class="relative">

                    <input
                        type="search"
                        name="search"
                        value="{{ request('search') }}"
                        placeholder="Search product name, code or category..."
                        class="w-full
                               h-[44px]
                               pl-4
                               pr-4
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



                {{-- STATUS FILTER --}}

                <select
                    name="status"
                    class="w-full
                           h-[44px]
                           px-3
                           bg-white
                           border
                           border-slate-200
                           text-[12px]
                           text-slate-600
                           outline-none
                           focus:border-[#073B66]"
                >

                    <option value="">
                        All Status
                    </option>

                    <option
                        value="active"
                        @selected(request('status') === 'active')
                    >
                        Active
                    </option>

                    <option
                        value="inactive"
                        @selected(request('status') === 'inactive')
                    >
                        Inactive
                    </option>

                </select>



                {{-- CATEGORY FILTER --}}

                <select
                    name="category"
                    class="w-full
                           h-[44px]
                           px-3
                           bg-white
                           border
                           border-slate-200
                           text-[12px]
                           text-slate-600
                           outline-none
                           focus:border-[#073B66]"
                >

                    <option value="">
                        All Categories
                    </option>


                    @foreach([
                        'soil' => 'Soil Testing',
                        'concrete' => 'Concrete Testing',
                        'cement' => 'Cement Testing',
                        'aggregate' => 'Aggregate Testing',
                        'bitumen' => 'Bitumen / Asphalt',
                        'rock' => 'Rock Testing',
                        'material' => 'Material Testing',
                        'survey' => 'Survey Instruments',
                        'laboratory' => 'Laboratory Equipment',
                    ] as $slug => $label)

                        <option
                            value="{{ $slug }}"
                            @selected(
                                request('category') === $slug
                            )
                        >
                            {{ $label }}
                        </option>

                    @endforeach

                </select>



                {{-- FILTER BUTTON --}}

                <button
                    type="submit"
                    class="h-[44px]
                           px-5
                           bg-[#032B55]
                           hover:bg-[#D71920]
                           text-white
                           text-[10px]
                           uppercase
                           tracking-wide
                           font-bold
                           transition"
                >
                    Filter
                </button>



                {{-- RESET --}}

                <a
                    href="{{ route('admin.products.index') }}"
                    class="h-[44px]
                           px-5
                           flex
                           items-center
                           justify-center
                           border
                           border-slate-200
                           text-[10px]
                           uppercase
                           tracking-wide
                           font-bold
                           text-slate-500
                           hover:border-[#D71920]
                           hover:text-[#D71920]
                           transition"
                >
                    Reset
                </a>

            </div>

        </form>



        {{-- =====================================================
             RESULT SUMMARY
        ====================================================== --}}

        <div
            class="mt-4
                   flex
                   flex-col
                   sm:flex-row
                   sm:items-center
                   sm:justify-between
                   gap-2"
        >

            <p
                class="text-[10px]
                       text-slate-400"
            >
                Showing

                <span
                    class="font-bold
                           text-[#073B66]"
                >
                    {{ $products->count() }}
                </span>

                products on this page.
            </p>


            @if(
                request('search') ||
                request('status') ||
                request('category')
            )

                <p
                    class="text-[9px]
                           uppercase
                           tracking-wide
                           font-bold
                           text-[#D71920]"
                >
                    Filtered Results
                </p>

            @endif

        </div>



        {{-- =====================================================
             PRODUCT TABLE
        ====================================================== --}}

        <div
            class="mt-4
                   bg-white
                   border
                   border-slate-200
                   overflow-hidden"
        >

            <div class="overflow-x-auto">

                <table class="w-full min-w-[1100px]">

                    {{-- TABLE HEADER --}}

                    <thead class="bg-[#032B55]">

                        <tr>

                            <th
                                class="px-5
                                       py-4
                                       text-left
                                       text-[9px]
                                       uppercase
                                       tracking-wider
                                       font-bold
                                       text-white/70"
                            >
                                Product
                            </th>


                            <th
                                class="px-5
                                       py-4
                                       text-left
                                       text-[9px]
                                       uppercase
                                       tracking-wider
                                       font-bold
                                       text-white/70"
                            >
                                Code
                            </th>


                            <th
                                class="px-5
                                       py-4
                                       text-left
                                       text-[9px]
                                       uppercase
                                       tracking-wider
                                       font-bold
                                       text-white/70"
                            >
                                Category
                            </th>


                            <th
                                class="px-5
                                       py-4
                                       text-left
                                       text-[9px]
                                       uppercase
                                       tracking-wider
                                       font-bold
                                       text-white/70"
                            >
                                Order
                            </th>


                            <th
                                class="px-5
                                       py-4
                                       text-left
                                       text-[9px]
                                       uppercase
                                       tracking-wider
                                       font-bold
                                       text-white/70"
                            >
                                Status
                            </th>


                            <th
                                class="px-5
                                       py-4
                                       text-right
                                       text-[9px]
                                       uppercase
                                       tracking-wider
                                       font-bold
                                       text-white/70"
                            >
                                Actions
                            </th>

                        </tr>

                    </thead>



                    {{-- TABLE BODY --}}

                    <tbody class="divide-y divide-slate-100">

                        @forelse($products as $product)

                            <tr
                                class="hover:bg-slate-50
                                       transition"
                            >

                                {{-- =================================
                                     PRODUCT
                                ================================== --}}

                                <td class="px-5 py-4">

                                    <div
                                        class="flex
                                               items-center
                                               gap-4"
                                    >

                                        {{-- IMAGE --}}

                                        <div
                                            class="w-[68px]
                                                   h-[68px]
                                                   flex
                                                   items-center
                                                   justify-center
                                                   border
                                                   border-slate-200
                                                   bg-white
                                                   shrink-0"
                                        >

                                            @if($product->image)

                                                <img
                                                    src="{{ asset($product->image) }}"
                                                    alt="{{ $product->name }}"
                                                    class="max-w-full
                                                           max-h-full
                                                           p-2
                                                           object-contain"
                                                >

                                            @else

                                                <div
                                                    class="text-center
                                                           px-2"
                                                >

                                                    <span
                                                        class="text-[8px]
                                                               uppercase
                                                               tracking-wide
                                                               text-slate-300"
                                                    >
                                                        No Image
                                                    </span>

                                                </div>

                                            @endif

                                        </div>



                                        {{-- DETAILS --}}

                                        <div class="min-w-0">

                                            <a
                                                href="{{ route(
                                                    'products.show',
                                                    $product->slug
                                                ) }}"
                                                target="_blank"
                                                class="block
                                                       max-w-[320px]
                                                       truncate
                                                       text-[12px]
                                                       font-bold
                                                       text-[#073B66]
                                                       hover:text-[#D71920]
                                                       transition"
                                            >
                                                {{ $product->name }}
                                            </a>


                                            @if($product->short_description)

                                                <p
                                                    class="mt-1
                                                           max-w-[320px]
                                                           text-[10px]
                                                           leading-4
                                                           text-slate-400"
                                                >
                                                    {{ \Illuminate\Support\Str::limit(
                                                        $product->short_description,
                                                        80
                                                    ) }}
                                                </p>

                                            @endif


                                            <a
                                                href="{{ route(
                                                    'products.show',
                                                    $product->slug
                                                ) }}"
                                                target="_blank"
                                                class="inline-flex
                                                       mt-2
                                                       text-[8px]
                                                       uppercase
                                                       tracking-wide
                                                       font-bold
                                                       text-slate-400
                                                       hover:text-[#D71920]
                                                       transition"
                                            >
                                                View Product ↗
                                            </a>

                                        </div>

                                    </div>

                                </td>



                                {{-- =================================
                                     CODE
                                ================================== --}}

                                <td
                                    class="px-5
                                           py-4"
                                >

                                    @if($product->code)

                                        <span
                                            class="inline-flex
                                                   px-2.5
                                                   py-1
                                                   bg-slate-50
                                                   border
                                                   border-slate-200
                                                   text-[9px]
                                                   font-bold
                                                   tracking-wide
                                                   text-[#073B66]"
                                        >
                                            {{ $product->code }}
                                        </span>

                                    @else

                                        <span
                                            class="text-[10px]
                                                   text-slate-300"
                                        >
                                            —
                                        </span>

                                    @endif

                                </td>



                                {{-- =================================
                                     CATEGORY
                                ================================== --}}

                                <td class="px-5 py-4">

                                    <p
                                        class="text-[10px]
                                               font-bold
                                               text-slate-600"
                                    >
                                        {{ $product->category }}
                                    </p>


                                    <p
                                        class="mt-1
                                               text-[8px]
                                               uppercase
                                               tracking-wide
                                               text-slate-400"
                                    >
                                        {{ $product->category_slug }}
                                    </p>

                                </td>



                                {{-- =================================
                                     SORT ORDER
                                ================================== --}}

                                <td
                                    class="px-5
                                           py-4"
                                >

                                    <span
                                        class="inline-flex
                                               items-center
                                               justify-center
                                               w-[34px]
                                               h-[30px]
                                               bg-slate-50
                                               border
                                               border-slate-200
                                               text-[10px]
                                               font-bold
                                               text-[#073B66]"
                                    >
                                        {{ $product->sort_order }}
                                    </span>

                                </td>



                                {{-- =================================
                                     STATUS
                                ================================== --}}

                                <td class="px-5 py-4">

                                    @if($product->is_active)

                                        <span
                                            class="inline-flex
                                                   items-center
                                                   gap-1.5
                                                   border
                                                   border-green-200
                                                   bg-green-50
                                                   px-2.5
                                                   py-1
                                                   text-[8px]
                                                   font-bold
                                                   uppercase
                                                   tracking-wide
                                                   text-green-700"
                                        >

                                            <span
                                                class="w-1.5
                                                       h-1.5
                                                       rounded-full
                                                       bg-green-500"
                                            ></span>

                                            Active

                                        </span>

                                    @else

                                        <span
                                            class="inline-flex
                                                   items-center
                                                   gap-1.5
                                                   border
                                                   border-slate-200
                                                   bg-slate-50
                                                   px-2.5
                                                   py-1
                                                   text-[8px]
                                                   font-bold
                                                   uppercase
                                                   tracking-wide
                                                   text-slate-500"
                                        >

                                            <span
                                                class="w-1.5
                                                       h-1.5
                                                       rounded-full
                                                       bg-slate-400"
                                            ></span>

                                            Disabled

                                        </span>

                                    @endif

                                </td>



                                {{-- =================================
                                     ACTIONS
                                ================================== --}}

                                <td class="px-5 py-4">

                                    <div
                                        class="flex
                                               justify-end
                                               items-center
                                               gap-2"
                                    >

                                        {{-- EDIT --}}

                                        <a
                                            href="{{ route(
                                                'admin.products.edit',
                                                $product
                                            ) }}"
                                            class="min-h-[34px]
                                                   px-3
                                                   inline-flex
                                                   items-center
                                                   justify-center
                                                   bg-[#032B55]
                                                   hover:bg-[#D71920]
                                                   text-white
                                                   text-[8px]
                                                   tracking-wide
                                                   font-bold
                                                   uppercase
                                                   transition"
                                        >
                                            Edit
                                        </a>



                                        {{-- ENABLE / DISABLE --}}

                                        <form
                                            action="{{ route(
                                                'admin.products.toggle',
                                                $product
                                            ) }}"
                                            method="POST"
                                        >

                                            @csrf
                                            @method('PATCH')


                                            <button
                                                type="submit"
                                                class="min-h-[34px]
                                                       px-3
                                                       border
                                                       border-slate-200
                                                       text-[8px]
                                                       tracking-wide
                                                       font-bold
                                                       uppercase
                                                       text-slate-600
                                                       hover:border-[#073B66]
                                                       hover:text-[#073B66]
                                                       transition"
                                            >
                                                {{ $product->is_active
                                                    ? 'Disable'
                                                    : 'Enable' }}
                                            </button>

                                        </form>



                                        {{-- DELETE --}}

                                        <form
                                            action="{{ route(
                                                'admin.products.destroy',
                                                $product
                                            ) }}"
                                            method="POST"
                                            onsubmit="return confirm(
                                                'Are you sure you want to permanently delete this product?'
                                            )"
                                        >

                                            @csrf
                                            @method('DELETE')


                                            <button
                                                type="submit"
                                                class="min-h-[34px]
                                                       px-3
                                                       border
                                                       border-red-200
                                                       text-red-600
                                                       text-[8px]
                                                       tracking-wide
                                                       font-bold
                                                       uppercase
                                                       hover:bg-red-600
                                                       hover:border-red-600
                                                       hover:text-white
                                                       transition"
                                            >
                                                Delete
                                            </button>

                                        </form>

                                    </div>

                                </td>

                            </tr>


                        @empty

                            {{-- =================================
                                 NO PRODUCTS
                            ================================== --}}

                            <tr>

                                <td
                                    colspan="6"
                                    class="px-6
                                           py-20
                                           text-center"
                                >

                                    <div
                                        class="mx-auto
                                               w-14
                                               h-14
                                               flex
                                               items-center
                                               justify-center
                                               bg-slate-50
                                               border
                                               border-slate-200
                                               text-xl
                                               text-slate-300"
                                    >
                                        □
                                    </div>


                                    <h3
                                        class="mt-4
                                               text-[15px]
                                               font-extrabold
                                               text-[#073B66]"
                                    >
                                        No Products Found
                                    </h3>


                                    <p
                                        class="mt-2
                                               text-[10px]
                                               text-slate-400"
                                    >
                                        Try changing your filters
                                        or add a new product.
                                    </p>


                                    <a
                                        href="{{ route('admin.products.create') }}"
                                        class="inline-flex
                                               mt-5
                                               min-h-[40px]
                                               px-5
                                               items-center
                                               justify-center
                                               bg-[#D71920]
                                               hover:bg-[#032B55]
                                               text-white
                                               text-[9px]
                                               uppercase
                                               tracking-wide
                                               font-bold
                                               transition"
                                    >
                                        + Add Product
                                    </a>

                                </td>

                            </tr>

                        @endforelse

                    </tbody>

                </table>

            </div>



            {{-- =================================================
                 PAGINATION
            ================================================== --}}

            @if($products->hasPages())

                <div
                    class="border-t
                           border-slate-200
                           p-4
                           sm:p-5"
                >
                    {{ $products->links() }}
                </div>

            @endif

        </div>

    </div>

</section>

@endsection

