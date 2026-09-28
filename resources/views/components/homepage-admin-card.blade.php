@props([
    'title' => null,
    'description' => null,
])

<div
    {{ $attributes->merge([
        'class' => 'rounded-2xl border border-slate-200 bg-white shadow-sm'
    ]) }}
>

    {{-- ===============================================
         OPTIONAL HEADER
    ================================================ --}}
    @if($title || $description)

        <div class="border-b border-slate-200 px-5 py-5 sm:px-6">

            @if($title)

                <h2 class="text-lg font-bold text-slate-900">
                    {{ $title }}
                </h2>

            @endif


            @if($description)

                <p class="mt-1 text-sm leading-6 text-slate-500">
                    {{ $description }}
                </p>

            @endif

        </div>

    @endif


    {{-- ===============================================
         CARD CONTENT
    ================================================ --}}
    <div class="p-5 sm:p-6">

        {{ $slot }}

    </div>

</div>