@props(['label'=>''])

<div class=" bg-white rounded-xl overflow-hidden">
    <header class="bg-gray-600 text-white p-5">
        <h3>{{ $label }}</h3>
    </header>
    <div class="p-5 grid gap-5">
        {{ $slot }}
    </div>
</div>