@props(['title'=>'ini judul default', 'content'=>'ini content default', 'size'=>'medium', 'invert'=>false, 'mode'=>'default'])

@php
    switch($size){
        case 'small':
        $style = '';
        break;
        case 'medium':
        $style = 'gap-2';
        break;
        default:
        $style = '';
        break;
    }
@endphp

<div {{ $attributes->merge(['class'=>'grid '.$style]) }}>
    @if ($mode === 'default')
        @if ($size === 'small')
        <h6 class="{{ $invert ? 'text-black' : '' }} font-bold">{{ $title }}</h6>
        <h5 class="{{ $invert ? 'text-white' : 'text-utama' }}">{{ $content }}</h4>
        @else
        <h5 class="{{ $invert ? 'text-black' : '' }} font-bold">{{ $title }}</h5>
        <h4 class="{{ $invert ? 'text-white' : 'text-utama' }}">{{ $content }}</h4>
        @endif
    @elseif($mode === 'reverse')
        @if ($size === 'small')
        <h6 class="text-utama font-bold">{{ $title }}</h6>
        <p class="text-darkGray">{{ $content }}</p>
        @else
        <h5 class="text-utama font-bold">{{ $title }}</h5>
        <p class="text-darkGray">{{ $content }}</p>
        @endif
    @endif
</div>
