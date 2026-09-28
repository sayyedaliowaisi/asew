<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="UTF-8">

    <meta
        name="csrf-token"
        content="{{ csrf_token() }}"
    >

    <meta
        name="viewport"
        content="width=device-width, initial-scale=1.0"
    >

    <title>
        @yield('title', 'Associated Scientific & Engineering')
    </title>

    <meta
        name="description"
        content="Associated Scientific & Engineering - Testing and measurement equipment."
    >


    {{-- =====================================================
        VITE / TAILWIND / JAVASCRIPT
    ====================================================== --}}
    @vite([
        'resources/css/app.css',
        'resources/js/app.js'
    ])


    {{-- =====================================================
        PAGE / COMPONENT STYLES
    ====================================================== --}}
    @stack('styles')

</head>


<body class="bg-white text-gray-900 antialiased">


    {{-- =====================================================
        NAVBAR
    ====================================================== --}}
    @include('components.navbar')


    {{-- =====================================================
        PAGE CONTENT
    ====================================================== --}}
    <main>

        @yield('content')

    </main>


    {{-- =====================================================
        FOOTER
    ====================================================== --}}
    @include('components.footer')


    {{-- =====================================================
        ASEW AI ASSISTANT
    ====================================================== --}}
    <x-ai-assistant />


    {{-- =====================================================
        PAGE / COMPONENT SCRIPTS
    ====================================================== --}}
    @stack('scripts')


</body>

</html>