@extends('layouts.app')

@section('title', 'Admin Login | ASEW')

@section('content')

<section
    class="relative
           min-h-[calc(100vh-80px)]
           flex
           items-center
           justify-center
           overflow-hidden
           bg-[#032B55]
           px-4
           py-12"
>

    {{-- Background Grid --}}
    <div
        class="absolute
               inset-0
               opacity-[0.04]"
        style="
            background-image:
                linear-gradient(rgba(255,255,255,.4) 1px, transparent 1px),
                linear-gradient(90deg, rgba(255,255,255,.4) 1px, transparent 1px);
            background-size: 45px 45px;
        "
    ></div>


    <div
        class="absolute
               -right-[180px]
               -top-[200px]
               w-[500px]
               h-[500px]
               rounded-full
               border
               border-white/[0.06]"
    ></div>


    <div
        class="relative
               z-10
               w-full
               max-w-[440px]"
    >

        <div
            class="bg-white
                   border
                   border-white/10
                   shadow-[0_30px_80px_rgba(0,0,0,.22)]"
        >

            {{-- TOP --}}
            <div
                class="px-6
                       sm:px-8
                       pt-8
                       pb-6
                       border-b
                       border-slate-100"
            >

                <div
                    class="flex
                           items-center
                           justify-center"
                >

                    <img
                        src="{{ asset('images/asew-logo.jpg') }}"
                        alt="ASEW"
                        class="max-h-[65px]
                               max-w-[180px]
                               object-contain"
                    >

                </div>


                <div class="mt-6 text-center">

                    <p
                        class="text-[9px]
                               uppercase
                               tracking-[0.2em]
                               font-bold
                               text-[#D71920]"
                    >
                        Secure Administration
                    </p>


                    <h1
                        class="mt-2
                               text-[25px]
                               sm:text-[28px]
                               font-extrabold
                               text-[#073B66]"
                    >
                        Admin Login
                    </h1>


                    <p
                        class="mt-2
                               text-[11px]
                               sm:text-[12px]
                               leading-5
                               text-slate-400"
                    >
                        Sign in to manage product enquiries
                        and website administration.
                    </p>

                </div>

            </div>



            {{-- ERRORS --}}
            @if($errors->any())

                <div
                    class="mx-6
                           sm:mx-8
                           mt-6
                           border
                           border-red-200
                           bg-red-50
                           px-4
                           py-3"
                >

                    @foreach($errors->all() as $error)

                        <p
                            class="text-[11px]
                                   font-semibold
                                   text-red-600"
                        >
                            {{ $error }}
                        </p>

                    @endforeach

                </div>

            @endif



            {{-- FORM --}}
            <form
                action="{{ route('admin.login.submit') }}"
                method="POST"
                class="px-6
                       sm:px-8
                       py-7"
            >

                @csrf


                {{-- EMAIL --}}
                <div>

                    <label
                        for="email"
                        class="block
                               mb-2
                               text-[10px]
                               uppercase
                               tracking-wide
                               font-bold
                               text-[#073B66]"
                    >
                        Email Address
                    </label>


                    <input
                        id="email"
                        type="email"
                        name="email"
                        value="{{ old('email') }}"
                        required
                        autofocus
                        autocomplete="email"
                        placeholder="admin@example.com"
                        class="w-full
                               h-[48px]
                               border
                               border-slate-200
                               bg-white
                               px-4
                               text-[13px]
                               text-slate-700
                               outline-none
                               focus:border-[#073B66]
                               focus:ring-1
                               focus:ring-[#073B66]/10
                               transition"
                    >

                </div>



                {{-- PASSWORD --}}
                <div class="mt-5">

                    <label
                        for="password"
                        class="block
                               mb-2
                               text-[10px]
                               uppercase
                               tracking-wide
                               font-bold
                               text-[#073B66]"
                    >
                        Password
                    </label>


                    <input
                        id="password"
                        type="password"
                        name="password"
                        required
                        autocomplete="current-password"
                        placeholder="Enter password"
                        class="w-full
                               h-[48px]
                               border
                               border-slate-200
                               bg-white
                               px-4
                               text-[13px]
                               text-slate-700
                               outline-none
                               focus:border-[#073B66]
                               focus:ring-1
                               focus:ring-[#073B66]/10
                               transition"
                    >

                </div>



                {{-- REMEMBER --}}
                <label
                    class="mt-4
                           inline-flex
                           items-center
                           gap-2
                           cursor-pointer"
                >

                    <input
                        type="checkbox"
                        name="remember"
                        value="1"
                        class="rounded
                               border-slate-300
                               text-[#032B55]
                               focus:ring-[#032B55]"
                    >


                    <span
                        class="text-[11px]
                               font-medium
                               text-slate-500"
                    >
                        Remember me
                    </span>

                </label>



                {{-- LOGIN --}}
                <button
                    type="submit"
                    class="group
                           mt-6
                           w-full
                           min-h-[48px]
                           flex
                           items-center
                           justify-center
                           gap-3
                           bg-[#032B55]
                           hover:bg-[#D71920]
                           text-white
                           text-[10px]
                           font-bold
                           uppercase
                           tracking-[0.12em]
                           transition"
                >
                    Sign In To Admin

                    <span
                        class="transition-transform
                               group-hover:translate-x-1"
                    >
                        →
                    </span>
                </button>


                <div
                    class="mt-6
                           pt-5
                           border-t
                           border-slate-100
                           text-center"
                >

                    <a
                        href="{{ route('home') }}"
                        class="text-[10px]
                               uppercase
                               tracking-wide
                               font-bold
                               text-slate-400
                               hover:text-[#D71920]
                               transition"
                    >
                        ← Return To Website
                    </a>

                </div>

            </form>

        </div>

    </div>

</section>

@endsection