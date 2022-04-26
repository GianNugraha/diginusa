@props(['title'=>null])

<div {{ $attributes->merge(['class'=>"bg-white rounded-xl px-7 py-10 grid gap-5 items-start shadow-md"]) }}>
    @if ($title)
        <h4 class="text-utama uppercase {{ str_contains($attributes->only('class')['class'], 'grid-cols-2') ? 'col-span-2' : '' }}">{{ $title }}</h4> 
    @endif
    {{ $slot }}
</div>