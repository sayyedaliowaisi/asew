@php
    $newEnquiryCount = \App\Models\ProductEnquiry::where('status', 'new')->count();
@endphp
<aside
    class="fixed
           inset-y-0
           left-0
           z-[100]
           w-[270px]
           bg-[#032B55]
           text-white
           shadow-xl
           transition-transform
           duration-300

           lg:translate-x-0"

    :class="
        sidebarOpen
            ? 'translate-x-0'
            : '-translate-x-full'
    "
>


    {{-- =========================================================
         BRAND
    ========================================================== --}}

    <div
        class="h-[86px]
               flex
               items-center
               px-5
               border-b
               border-white/10"
    >

        <a
            href="{{ route('admin.dashboard') }}"
            class="flex
                   items-center
                   gap-3
                   min-w-0"
        >

            <div
                class="w-[50px]
                       h-[50px]
                       bg-white
                       flex
                       items-center
                       justify-center
                       overflow-hidden
                       shrink-0"
            >

                <img
                    src="{{ asset('images/asew-logo.jpg') }}"
                    alt="ASEW"
                    class="w-full
                           h-full
                           object-contain
                           p-1"
                >

            </div>


            <div class="min-w-0">

                <p
                    class="text-[17px]
                           font-extrabold
                           leading-none
                           tracking-wide"
                >
                    ASEW
                </p>

                <p
                    class="mt-1
                           text-[9px]
                           uppercase
                           tracking-[0.15em]
                           text-white/45"
                >
                    Administration
                </p>

            </div>

        </a>


        {{-- MOBILE CLOSE --}}

        <button
            type="button"
            @click="sidebarOpen = false"
            class="ml-auto
                   lg:hidden
                   w-9
                   h-9
                   flex
                   items-center
                   justify-center
                   border
                   border-white/10
                   text-white/70"
        >
            ✕
        </button>

    </div>



    {{-- =========================================================
         NAVIGATION
    ========================================================== --}}

    <div
        class="h-[calc(100vh-86px)]
               overflow-y-auto
               px-3
               py-5"
    >

        <p
            class="px-3
                   mb-3
                   text-[8px]
                   uppercase
                   tracking-[0.22em]
                   font-bold
                   text-white/30"
        >
            Main Menu
        </p>



        {{-- DASHBOARD --}}

        <a
            href="{{ route('admin.dashboard') }}"
            class="
                flex
                items-center
                gap-3
                px-4
                min-h-[48px]
                mb-1
                transition

                {{
                    request()->routeIs('admin.dashboard')
                        ? 'bg-[#D71920] text-white'
                        : 'text-white/70 hover:bg-white/10 hover:text-white'
                }}
            "
        >

            <span class="w-5 text-center">
                ◫
            </span>

            <span
                class="text-[11px]
                       uppercase
                       tracking-wide
                       font-bold"
            >
                Dashboard
            </span>

        </a>



        {{-- PRODUCTS --}}

        <a
            href="{{ route('admin.products.index') }}"
            class="
                flex
                items-center
                gap-3
                px-4
                min-h-[48px]
                mb-1
                transition

                {{ request()->routeIs('admin.products.index') ||
   request()->routeIs('admin.products.edit')
        ? 'bg-[#D71920] text-white'
        : 'text-slate-300 hover:bg-white/10 hover:text-white'
}}
            "
        >

            <span class="w-5 text-center">
                □
            </span>

            <span
                class="text-[11px]
                       uppercase
                       tracking-wide
                       font-bold"
            >
                Products
            </span>

        </a>



        {{-- ADD PRODUCT --}}

        <a
            href="{{ route('admin.products.create') }}"
            class="
                flex
                items-center
                gap-3
                px-4
                min-h-[48px]
                mb-1
                transition

                {{
                    request()->routeIs('admin.products.create')
                        ? 'bg-[#D71920] text-white'
                        : 'text-white/70 hover:bg-white/10 hover:text-white'
                }}
            "
        >

            <span class="w-5 text-center">
                +
            </span>

            <span
                class="text-[11px]
                       uppercase
                       tracking-wide
                       font-bold"
            >
                Add Product
            </span>

        </a>



        {{-- ENQUIRIES --}}

        <a
    href="{{ route('admin.enquiries.index') }}"
    class="flex items-center justify-between gap-3
           px-4 py-3
           text-[12px]
           font-semibold
           transition
           {{ request()->routeIs('admin.enquiries.*')
                ? 'bg-[#D71920] text-white'
                : 'text-slate-300 hover:bg-white/10 hover:text-white'
           }}"
>

    <div class="flex items-center gap-3">

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
            <path d="M21 15a4 4 0 0 1-4 4H8l-5 3V7a4 4 0 0 1 4-4h10a4 4 0 0 1 4 4z"/>
        </svg>

        <span>
            Enquiries
        </span>

    </div>


    @if($newEnquiryCount > 0)

        <span
            class="min-w-[24px]
                   h-6
                   px-2
                   flex
                   items-center
                   justify-center
                   rounded-full
                   text-[9px]
                   font-bold
                   {{ request()->routeIs('admin.enquiries.*')
                        ? 'bg-white text-[#D71920]'
                        : 'bg-[#D71920] text-white'
                   }}"
        >
            {{ $newEnquiryCount > 99 ? '99+' : $newEnquiryCount }}
        </span>

    @endif

</a>



<a
    href="{{ route('admin.quotations.index') }}"
    class="flex
           items-center
           gap-3
           px-4
           py-3
           text-[12px]
           font-semibold
           transition
           {{
               request()->routeIs(
                   'admin.quotations.*'
               )
                   ? 'bg-[#D71920] text-white'
                   : 'text-slate-300 hover:bg-white/10 hover:text-white'
           }}"
>

    <svg
        xmlns="http://www.w3.org/2000/svg"
        width="18"
        height="18"
        viewBox="0 0 24 24"
        fill="none"
        stroke="currentColor"
        stroke-width="2"
    >
        <path d="M6 2h9l5 5v15H6z"/>
        <path d="M14 2v6h6"/>
        <path d="M9 13h6"/>
        <path d="M9 17h6"/>
    </svg>

    <span>
        Quotations
    </span>

</a>

<a
    href="{{ route('admin.sales-orders.index') }}"
    class="
        flex items-center gap-3
        rounded-xl
        px-4 py-3
        transition

        {{ request()->routeIs('admin.sales-orders.*')
            ? 'bg-white/10 text-white'
            : 'text-slate-300 hover:bg-white/5 hover:text-white'
        }}
    "
>

    <svg
        class="w-5 h-5"
        fill="none"
        stroke="currentColor"
        viewBox="0 0 24 24"
    >
        <path
            stroke-linecap="round"
            stroke-linejoin="round"
            stroke-width="2"
            d="M9 12h6m-6 4h6M7 3h10a2 2 0 012 2v14a2 2 0 01-2 2H7a2 2 0 01-2-2V5a2 2 0 012-2z"
        />
    </svg>

    <span>
        Sales Orders
    </span>

</a>


        {{-- DIVIDER --}}

        <div
            class="my-5
                   border-t
                   border-white/10"
        ></div>



        <p
            class="px-3
                   mb-3
                   text-[8px]
                   uppercase
                   tracking-[0.22em]
                   font-bold
                   text-white/30"
        >
            Website
        </p>



        {{-- VIEW WEBSITE --}}

        <a
            href="{{ route('home') }}"
            target="_blank"
            class="flex
                   items-center
                   gap-3
                   px-4
                   min-h-[48px]
                   mb-1
                   text-white/70
                   hover:bg-white/10
                   hover:text-white
                   transition"
        >

            <span class="w-5 text-center">
                ↗
            </span>

            <span
                class="text-[11px]
                       uppercase
                       tracking-wide
                       font-bold"
            >
                View Website
            </span>

        </a>



        {{-- QUOTE FORM --}}

        <a
            href="{{ route('quote.create') }}"
            target="_blank"
            class="flex
                   items-center
                   gap-3
                   px-4
                   min-h-[48px]
                   mb-1
                   text-white/70
                   hover:bg-white/10
                   hover:text-white
                   transition"
        >

            <span class="w-5 text-center">
                ↗
            </span>

            <span
                class="text-[11px]
                       uppercase
                       tracking-wide
                       font-bold"
            >
                Quote Form
            </span>

        </a>



        {{-- LOGOUT --}}

        <div
            class="mt-5
                   pt-5
                   border-t
                   border-white/10"
        >

            <form
                action="{{ route('admin.logout') }}"
                method="POST"
            >

                @csrf


                <button
                    type="submit"
                    class="w-full
                           min-h-[46px]
                           flex
                           items-center
                           gap-3
                           px-4
                           bg-white/5
                           hover:bg-[#D71920]
                           text-white/70
                           hover:text-white
                           transition"
                >

                    <span class="w-5 text-center">
                        ↪
                    </span>

                    <span
                        class="text-[11px]
                               uppercase
                               tracking-wide
                               font-bold"
                    >
                        Logout
                    </span>

                </button>

            </form>

        </div>

    </div>

</aside>