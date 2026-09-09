@php
    $headerNewEnquiryCount =
        \App\Models\ProductEnquiry::where('status', 'new')->count();
@endphp
<header
    class="sticky
           top-0
           z-[80]
           h-[70px]
           bg-white
           border-b
           border-slate-200"
>

    <div
        class="h-full
               px-4
               sm:px-6
               lg:px-8
               flex
               items-center
               justify-between
               gap-4"
    >

        {{-- LEFT --}}

        <div
            class="flex
                   items-center
                   gap-3
                   min-w-0"
        >

            {{-- MOBILE MENU --}}

            <button
                type="button"
                @click="sidebarOpen = true"
                class="lg:hidden
                       w-[42px]
                       h-[42px]
                       flex
                       flex-col
                       items-center
                       justify-center
                       gap-[5px]
                       border
                       border-slate-200
                       bg-white"
            >

                <span
                    class="block
                           w-5
                           h-[2px]
                           bg-[#032B55]"
                ></span>

                <span
                    class="block
                           w-5
                           h-[2px]
                           bg-[#032B55]"
                ></span>

                <span
                    class="block
                           w-5
                           h-[2px]
                           bg-[#032B55]"
                ></span>

            </button>


            <div class="min-w-0">

                <p
                    class="text-[9px]
                           uppercase
                           tracking-[0.16em]
                           font-bold
                           text-slate-400"
                >
                    Administration Panel
                </p>


                <h2
                    class="truncate
                           mt-0.5
                           text-[15px]
                           sm:text-[17px]
                           font-extrabold
                           text-[#073B66]"
                >
                    @yield('page-title', 'Dashboard')
                </h2>

            </div>

        </div>



        {{-- RIGHT --}}

        <div
            class="flex
                   items-center
                   gap-3"
        >

            {{-- WEBSITE --}}

            <a
                href="{{ route('home') }}"
                target="_blank"
                class="hidden
                       md:inline-flex
                       items-center
                       justify-center
                       min-h-[38px]
                       px-4
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
                View Website ↗
            </a>

            <a
    href="{{ route('admin.enquiries.index', ['status' => 'new']) }}"
    class="relative
           w-10
           h-10
           flex
           items-center
           justify-center
           border
           border-slate-200
           bg-white
           text-[#073B66]
           hover:border-[#D71920]
           hover:text-[#D71920]
           transition"
    title="New Enquiries"
>

    <svg
        xmlns="http://www.w3.org/2000/svg"
        width="18"
        height="18"
        viewBox="0 0 24 24"
        fill="none"
        stroke="currentColor"
        stroke-width="2"
        stroke-linecap="round"
        stroke-linejoin="round"
    >
        <path d="M18 8A6 6 0 0 0 6 8c0 7-3 7-3 9h18c0-2-3-2-3-9"/>
        <path d="M13.73 21a2 2 0 0 1-3.46 0"/>
    </svg>


    @if($headerNewEnquiryCount > 0)

        <span
            class="absolute
                   -top-2
                   -right-2
                   min-w-[20px]
                   h-5
                   px-1.5
                   rounded-full
                   flex
                   items-center
                   justify-center
                   bg-[#D71920]
                   text-white
                   text-[8px]
                   font-bold
                   border-2
                   border-white"
        >
            {{ $headerNewEnquiryCount > 99
                ? '99+'
                : $headerNewEnquiryCount }}
        </span>

    @endif

</a>



            {{-- ADMIN PROFILE --}}

            <div
                class="flex
                       items-center
                       gap-3
                       pl-3
                       border-l
                       border-slate-200"
            >

                <div
                    class="w-[38px]
                           h-[38px]
                           rounded-full
                           bg-[#032B55]
                           text-white
                           flex
                           items-center
                           justify-center
                           text-[12px]
                           font-extrabold"
                >
                    {{ strtoupper(
                        substr(
                            auth('admin')->user()->name ?? 'A',
                            0,
                            1
                        )
                    ) }}
                </div>


                <div class="hidden sm:block">

                    <p
                        class="text-[11px]
                               font-bold
                               text-slate-700"
                    >
                        {{ auth('admin')->user()->name ?? 'ASEW Admin' }}
                    </p>

                    <p
                        class="mt-0.5
                               text-[9px]
                               text-slate-400"
                    >
                        Administrator
                    </p>

                </div>

            </div>

        </div>

    </div>

</header>