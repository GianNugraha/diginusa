@props(['href'=>null, 'icon'=>null, 'label'=>'', 'variant'=>'primary', 'color'=>'text-white', 'iconEnd'=>false, 'type'=>'submit', 'disabled'=>false])

@php

switch ($variant) {
    case 'iconOnlyPrimary':
        $bgColor = 'bg-utama hover:bg-utamaHover p-3';
        $color = 'text-white';
        break;
    case 'iconOnlyDisabled':
        $bgColor = 'bg-lightGray p-3';
        $color = 'text-white';
        break;
    case 'primary':
        $bgColor = 'bg-utama px-6 py-3 hover:bg-utamaHover';
        $color = 'text-white font-bold';
        break;
    case 'secondary':
        $bgColor = 'bg-kedua px-6 py-3 hover:bg-keduaHover';
        break;
    case 'tertiary':
        $bgColor = 'bg-lightBlue px-6 py-3 hover:bg-softBlue';
        break;
    case 'quaternary':
        $bgColor = 'bg-lightRed px-6 py-3 hover:bg-softRed';
        break;
    case 'gray':
        $bgColor = 'bg-lightGray px-6 py-3';
        break;
    case 'disabled':
        $bgColor = 'bg-lightGray px-6 py-3';
        break;
    case 'dark':
        $bgColor = 'bg-dark px-6 py-3';
        break;
    case 'outline':
        $bgColor = 'relative ring-2 ring-utama ring-inset border-1 border-utama overflow-hidden';
        if ($iconEnd) {
            $bgColor = $bgColor . ' pl-6 pr-14 py-2';
        }else{
            $bgColor = $bgColor . ' p-3';
        }
        break;
    case 'outlineInvert':
        $bgColor = 'relative bg-utama ring-2 ring-utama ring-inset border-1 border-utama overflow-hidden';
        $color = 'text-white font-bold';
        if ($iconEnd) {
            $bgColor = $bgColor . ' pl-6 pr-14 py-2';
        }else{
            $bgColor = $bgColor . ' p-3';
        }
        break;
    default:
    $bgColor = 'px-6 py-3';
        break;
}

$baseClass = 'focus:outline-none rounded-md flex justify-center items-center gap-2 ' . $color;

$finalClass = $baseClass . " " . $bgColor;
@endphp

@if ($href)
    <a href="{{ $href }}" {{ $attributes->merge(['class'=>$finalClass]) }}>
        {{ $icon }}                        
        {{ $label }}

        @if ($iconEnd)
            <span class="absolute top-0 right-0 bottom-0 p-2 {{ $variant === 'outlineInvert' ? 'bg-darkGray' : 'bg-utama' }} flex items-center justify-center">
                {{ $iconEnd }}
            </span>
        @endif
    </a>
@else
    <button type="{{ $type }}" {{ $attributes->merge(['class'=>$finalClass]) }} {{ $variant === 'disabled' ? 'disabled' : '' }}>
        {{ $icon }}
        {{ $label }}
        {{ $iconEnd }}
    </button>
@endif