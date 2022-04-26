@props(['for'=>'','name'=>'','label'=>'','checked'=>false, 'type'=>'radio', 'value'=>null])

<label for="{{ $type === 'radio' ? $for : $name }}" class="flex gap-2 items-center">
    @if ($type === 'radio')
        <input type="radio" id="{{ $for }}" @if($value) value='{{ $value }}' @endif name="{{ $name }}" {{ $checked ? 'checked' : '' }} {{ $attributes->merge(['class'=>"p-1 border-2 border-utama rounded-full checked:bg-utama"]) }}>
    @else
        <input type="checkbox" id="{{ $name }}" name="{{ $name }}" @if($value) value='{{ $value }}' @endif {{ $checked ? 'checked' : '' }} {{ $attributes->merge(['class'=>"appearance-none outline-primary p-2 border-2 border-white rounded checked:bg-checklist bg-no-repeat bg-center bg-contain focus:outline-primary"]) }}>
    @endif
    {{ $label }}
</label>