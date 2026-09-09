
@extends('layouts.admin')

@section('title', 'Edit Product | ASEW Admin')

@section('page-title', 'Edit Product')

@section('content')

<section class="p-4 sm:p-6 lg:p-8">

    <div class="max-w-[1200px] mx-auto">

        {{-- =====================================================
             PAGE HEADER
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

                <a
                    href="{{ route('admin.products.index') }}"
                    class="inline-flex
                           items-center
                           gap-2
                           text-[9px]
                           uppercase
                           tracking-[0.15em]
                           font-bold
                           text-slate-400
                           hover:text-[#D71920]
                           transition"
                >
                    ← Back to Products
                </a>


                <p
                    class="mt-5
                           text-[9px]
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
                    Edit Product
                </h1>


                <p
                    class="mt-2
                           max-w-[650px]
                           text-[11px]
                           sm:text-[12px]
                           leading-5
                           text-slate-400"
                >
                    Update product information, image,
                    features and catalogue visibility.
                </p>

            </div>



            <div class="flex flex-wrap gap-3">

                <a
                    href="{{ route(
                        'products.show',
                        $product->slug
                    ) }}"
                    target="_blank"
                    class="inline-flex
                           items-center
                           justify-center
                           min-h-[42px]
                           px-5
                           border
                           border-slate-200
                           text-[9px]
                           uppercase
                           tracking-wide
                           font-bold
                           text-[#073B66]
                           hover:border-[#D71920]
                           hover:text-[#D71920]
                           transition"
                >
                    View Product ↗
                </a>


                <a
                    href="{{ route('admin.products.index') }}"
                    class="inline-flex
                           items-center
                           justify-center
                           min-h-[42px]
                           px-5
                           bg-[#032B55]
                           hover:bg-[#D71920]
                           text-white
                           text-[9px]
                           uppercase
                           tracking-wide
                           font-bold
                           transition"
                >
                    Product Management
                </a>

            </div>

        </div>



        {{-- =====================================================
             PRODUCT SUMMARY
        ====================================================== --}}

        <div
            class="mt-6
                   bg-white
                   border
                   border-slate-200
                   p-5
                   sm:p-6"
        >

            <div
                class="flex
                       flex-col
                       sm:flex-row
                       sm:items-center
                       gap-5"
            >

                <div
                    class="w-[90px]
                           h-[90px]
                           shrink-0
                           flex
                           items-center
                           justify-center
                           border
                           border-slate-200
                           bg-white"
                >

                    @if($product->image)

                        <img
                            src="{{ asset($product->image) }}"
                            alt="{{ $product->name }}"
                            class="max-w-full
                                   max-h-full
                                   object-contain
                                   p-3"
                        >

                    @else

                        <span
                            class="text-[8px]
                                   uppercase
                                   tracking-wide
                                   text-slate-300"
                        >
                            No Image
                        </span>

                    @endif

                </div>



                <div class="min-w-0 flex-1">

                    <p
                        class="text-[9px]
                               uppercase
                               tracking-[0.15em]
                               font-bold
                               text-[#D71920]"
                    >
                        Current Product
                    </p>


                    <h2
                        class="mt-2
                               text-lg
                               sm:text-xl
                               font-extrabold
                               text-[#073B66]"
                    >
                        {{ $product->name }}
                    </h2>


                    <div
                        class="mt-2
                               flex
                               flex-wrap
                               items-center
                               gap-3"
                    >

                        @if($product->code)

                            <span
                                class="text-[9px]
                                       font-bold
                                       text-slate-500"
                            >
                                {{ $product->code }}
                            </span>

                        @endif


                        <span
                            class="text-[9px]
                                   text-slate-400"
                        >
                            {{ $product->category }}
                        </span>


                        @if($product->is_active)

                            <span
                                class="inline-flex
                                       px-2.5
                                       py-1
                                       border
                                       border-green-200
                                       bg-green-50
                                       text-[8px]
                                       uppercase
                                       tracking-wide
                                       font-bold
                                       text-green-700"
                            >
                                Active
                            </span>

                        @else

                            <span
                                class="inline-flex
                                       px-2.5
                                       py-1
                                       border
                                       border-slate-200
                                       bg-slate-50
                                       text-[8px]
                                       uppercase
                                       tracking-wide
                                       font-bold
                                       text-slate-500"
                            >
                                Disabled
                            </span>

                        @endif

                    </div>

                </div>

            </div>

        </div>



        {{-- =====================================================
             VALIDATION ERRORS
        ====================================================== --}}

        @if($errors->any())

            <div
                class="mt-6
                       border
                       border-red-200
                       bg-red-50
                       p-5"
            >

                <p
                    class="text-[11px]
                           sm:text-[12px]
                           font-bold
                           text-red-700"
                >
                    Please correct the following errors:
                </p>


                <ul
                    class="mt-2
                           pl-5
                           list-disc
                           text-[10px]
                           sm:text-[11px]
                           leading-6
                           text-red-600"
                >

                    @foreach($errors->all() as $error)

                        <li>{{ $error }}</li>

                    @endforeach

                </ul>

            </div>

        @endif



        {{-- =====================================================
             EDIT FORM
        ====================================================== --}}

        <div
            class="mt-6
                   bg-white
                   border
                   border-slate-200"
        >

            <div
                class="px-5
                       sm:px-6
                       py-5
                       border-b
                       border-slate-200"
            >

                <p
                    class="text-[9px]
                           uppercase
                           tracking-[0.15em]
                           font-bold
                           text-[#D71920]"
                >
                    Product Information
                </p>


                <h2
                    class="mt-1
                           text-lg
                           font-extrabold
                           text-[#073B66]"
                >
                    Update Product
                </h2>


                <p
                    class="mt-2
                           text-[10px]
                           leading-5
                           text-slate-400"
                >
                    Update the fields below and save your changes.
                </p>

            </div>



            <div class="p-5 sm:p-6">

                <form
                    action="{{ route(
                        'admin.products.update',
                        $product
                    ) }}"
                    method="POST"
                    enctype="multipart/form-data"
                >

                    @csrf
                    @method('PUT')

                    @include('admin.products._form', [
                        'product' => $product
                    ])

                </form>

            </div>

        </div>

    </div>

</section>

@endsection

