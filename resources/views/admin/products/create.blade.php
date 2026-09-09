
@extends('layouts.admin')

@section('title', 'Add Product | ASEW Admin')

@section('page-title', 'Add Product')

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
                    Add New Product
                </h1>


                <p
                    class="mt-2
                           max-w-[650px]
                           text-[11px]
                           sm:text-[12px]
                           leading-5
                           text-slate-400"
                >
                    Add a new scientific, engineering or
                    laboratory product to the ASEW catalogue.
                </p>

            </div>



            <a
                href="{{ route('admin.products.index') }}"
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
                Product Management
            </a>

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

                <div
                    class="flex
                           items-start
                           gap-3"
                >

                    <div
                        class="w-9
                               h-9
                               shrink-0
                               flex
                               items-center
                               justify-center
                               bg-red-100
                               text-red-600
                               text-sm
                               font-bold"
                    >
                        !
                    </div>


                    <div>

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

                                <li>
                                    {{ $error }}
                                </li>

                            @endforeach

                        </ul>

                    </div>

                </div>

            </div>

        @endif



        {{-- =====================================================
             PRODUCT FORM
        ====================================================== --}}

        <div
            class="mt-6
                   bg-white
                   border
                   border-slate-200"
        >

            {{-- FORM HEADER --}}

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
                    Create Product
                </h2>


                <p
                    class="mt-2
                           text-[10px]
                           leading-5
                           text-slate-400"
                >
                    Enter product information carefully.
                    This information will be displayed
                    on the public ASEW website.
                </p>

            </div>



            {{-- FORM CONTENT --}}

            <div class="p-5 sm:p-6">

                <form
                    action="{{ route('admin.products.store') }}"
                    method="POST"
                    enctype="multipart/form-data"
                >

                    @csrf

                    @include('admin.products._form')

                </form>

            </div>

        </div>



        {{-- =====================================================
             HELP SECTION
        ====================================================== --}}

        <div
            class="mt-6
                   border
                   border-slate-200
                   bg-white
                   p-5
                   sm:p-6"
        >

            <p
                class="text-[9px]
                       uppercase
                       tracking-[0.15em]
                       font-bold
                       text-[#D71920]"
            >
                Product Publishing
            </p>


            <div
                class="mt-3
                       grid
                       grid-cols-1
                       md:grid-cols-3
                       gap-5"
            >

                <div>

                    <p
                        class="text-[11px]
                               font-bold
                               text-[#073B66]"
                    >
                        Product Details
                    </p>

                    <p
                        class="mt-1
                               text-[10px]
                               leading-5
                               text-slate-400"
                    >
                        Add a clear product name,
                        code and category.
                    </p>

                </div>


                <div>

                    <p
                        class="text-[11px]
                               font-bold
                               text-[#073B66]"
                    >
                        Product Image
                    </p>

                    <p
                        class="mt-1
                               text-[10px]
                               leading-5
                               text-slate-400"
                    >
                        Upload a clean product image
                        for the catalogue.
                    </p>

                </div>


                <div>

                    <p
                        class="text-[11px]
                               font-bold
                               text-[#073B66]"
                    >
                        Product Status
                    </p>

                    <p
                        class="mt-1
                               text-[10px]
                               leading-5
                               text-slate-400"
                    >
                        Only active products will
                        appear on the public website.
                    </p>

                </div>

            </div>

        </div>

    </div>

</section>

@endsection

