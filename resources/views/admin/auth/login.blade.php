<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="UTF-8">

    <meta
        name="viewport"
        content="width=device-width, initial-scale=1.0"
    >

    <meta
        name="robots"
        content="noindex, nofollow"
    >

    <title>Admin Login | ASEW</title>

    @vite([
        'resources/css/app.css',
        'resources/js/app.js'
    ])

</head>

<body class="m-0 bg-[#032B55] antialiased">

<section
    class="relative
           min-h-screen
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
        class="absolute inset-0 opacity-[0.04] pointer-events-none"
        style="
            background-image:
                linear-gradient(rgba(255,255,255,.4) 1px, transparent 1px),
                linear-gradient(90deg, rgba(255,255,255,.4) 1px, transparent 1px);
            background-size: 45px 45px;
        "
    ></div>


    {{-- Decorative Circle --}}
    <div
        class="absolute
               -right-[180px]
               -top-[200px]
               w-[500px]
               h-[500px]
               rounded-full
               border
               border-white/[0.06]
               pointer-events-none"
    ></div>


    {{-- LOGIN --}}
    <div
        class="relative
               z-10
               w-full
               max-w-[440px]"
    >

        <div
            class="overflow-hidden
                   bg-white
                   border
                   border-white/10
                   shadow-[0_30px_80px_rgba(0,0,0,.22)]"
        >

            {{-- HEADER --}}
            <div
                class="px-6
                       sm:px-8
                       pt-8
                       pb-6
                       border-b
                       border-slate-100"
            >

                <div class="flex items-center justify-center">

                    @php
                        $loginLogo = !empty($siteSettings?->logo)
                            ? asset($siteSettings->logo)
                            : asset('images/asew-logo.jpg');
                    @endphp

                    <img
                        src="{{ $loginLogo }}"
                        alt="ASEW"
                        class="max-h-[65px]
                               max-w-[190px]
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
                        Sign in to manage products, enquiries,
                        quotations, orders and website content.
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
                    role="alert"
                >

                    @foreach($errors->all() as $error)

                        <p
                            class="text-[11px]
                                   leading-5
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
                class="px-6 sm:px-8 py-7"
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
                        autocomplete="username"
                        placeholder="admin@example.com"
                        class="w-full
                               h-[48px]
                               border
                               border-slate-200
                               bg-white
                               px-4
                               text-[13px]
                               text-slate-700
                               placeholder:text-slate-300
                               outline-none
                               focus:border-[#073B66]
                               focus:ring-2
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

                    <div class="relative">

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
                                   pl-4
                                   pr-[75px]
                                   text-[13px]
                                   text-slate-700
                                   placeholder:text-slate-300
                                   outline-none
                                   focus:border-[#073B66]
                                   focus:ring-2
                                   focus:ring-[#073B66]/10
                                   transition"
                        >

                        <button
                            type="button"
                            id="toggleAdminPassword"
                            class="absolute
                                   right-3
                                   top-1/2
                                   -translate-y-1/2
                                   px-2
                                   py-1
                                   text-[9px]
                                   font-bold
                                   uppercase
                                   tracking-wide
                                   text-slate-400
                                   hover:text-[#073B66]
                                   transition"
                        >
                            Show
                        </button>

                    </div>

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
                        {{ old('remember') ? 'checked' : '' }}
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
                           transition-all
                           duration-300"
                >

                    Sign In To Admin

                    <span
                        class="text-base
                               transition-transform
                               group-hover:translate-x-1"
                    >
                        →
                    </span>

                </button>


                {{-- BACK TO WEBSITE --}}
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


        <p
            class="mt-5
                   text-center
                   text-[9px]
                   uppercase
                   tracking-[0.14em]
                   text-white/40"
        >
            Authorized Access Only
        </p>

    </div>

</section>


<script>
document.addEventListener('DOMContentLoaded', function () {

    const password =
        document.getElementById('password');

    const toggle =
        document.getElementById('toggleAdminPassword');

    if (!password || !toggle) {
        return;
    }

    toggle.addEventListener('click', function () {

        const isPassword =
            password.type === 'password';

        password.type =
            isPassword
                ? 'text'
                : 'password';

        toggle.textContent =
            isPassword
                ? 'Hide'
                : 'Show';

    });

});
</script>

</body>
</html>