@props([
    'name',
    'checked' => false,
    'title' => 'Show Section',
])

<div class="flex items-center justify-between gap-4 pb-5 border-b border-slate-200">

    <div>

        <p class="text-sm font-bold text-[#032B55]">
            {{ $title }}
        </p>

        <p class="mt-1 text-[11px] text-slate-500">
            Disable this option to hide the section from the homepage.
        </p>

    </div>

    <label class="inline-flex items-center gap-2 cursor-pointer">

        <input
            type="checkbox"
            name="{{ $name }}"
            value="1"
            @checked($checked)
            class="w-4 h-4 accent-[#D71920]"
        >

        <span class="text-[11px] font-bold uppercase text-slate-600">
            Enabled
        </span>

    </label>

</div>