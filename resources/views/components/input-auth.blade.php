<div class="flex justify-center items-center w-full relative input-group">
    <input type="{{ $type ?? 'text' }}" name="{{ $name }}" class="w-full py-3 lg:py-3 pr-4 lg:pr-8 pl-14 lg:pl-16 text-sm lg:text-lg font-bold rounded-lg outline-none active form-control" id="" placeholder="Username" autocomplete="off">
    <span class="absolute flex items-center justify-center h-full py-3 px-5 lg:px-6 inset-y-0 left-0">
        {{ $slot }}
    </span>
    {{ $iconRight ?? null }}
</div>
<span class="hidden mt-3 pl-2 text-red-600 font-base">
    Info here !
</span>