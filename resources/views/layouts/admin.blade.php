<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="UTF-8">

    <meta
        name="viewport"
        content="width=device-width, initial-scale=1.0"
    >

    <meta
        name="csrf-token"
        content="{{ csrf_token() }}"
    >

    <title>
        @yield('title', 'ASEW Admin')
    </title>

    @vite([
        'resources/css/app.css',
        'resources/js/app.js'
    ])

</head>


<body
    x-data="{
        sidebarOpen: false
    }"
    class="bg-[#F4F6F8]
           text-slate-700
           antialiased"
>


<div class="min-h-screen">

    {{-- =========================================================
         SIDEBAR
    ========================================================== --}}

    @include('admin.partials.sidebar')



    {{-- =========================================================
         MAIN AREA
    ========================================================== --}}

    <div
        class="min-h-screen
               lg:pl-[270px]
               flex
               flex-col"
    >

        {{-- HEADER --}}

        @include('admin.partials.header')



        {{-- PAGE CONTENT --}}

        <main class="flex-1">

            @yield('content')

        </main>



        {{-- FOOTER --}}

        @include('admin.partials.footer')

    </div>


</div>



{{-- =============================================================
     MOBILE SIDEBAR OVERLAY
============================================================= --}}

<div
    x-show="sidebarOpen"
    x-cloak
    x-transition.opacity
    @click="sidebarOpen = false"
    class="fixed
           inset-0
           z-[90]
           bg-black/50
           lg:hidden"
></div>


</body>

</html>