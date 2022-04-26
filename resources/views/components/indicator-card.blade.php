@props(['icon'=>'', 'title'=>'', 'type'=>'', 'content'=>'-'])

@php
    switch($type){
        case 'angin':
            $icon = 'windy-strong.svg';
        break;
        case 'suhu':
            $icon = 'suhu.svg';
        break;
        case 'arus':
            $icon = 'sea.svg';
        break;
        case 'arah':
            $icon = 'stream.svg';
        break;
        case 'lembab':
            $icon = 'humidity.svg';
        break;
        case 'hujan':
            $icon = 'weather-rain.svg';
        break;
        case 'gelombang':
            $icon = 'gelombang.svg';
        break;
        case 'tekanan':
            $icon = 'barometer.svg';
        break;
        case 'pasang':
            $icon = 'pasang.svg';
        break;
        case 'jarak':
            $icon = 'eye.svg';
        break;
    }
@endphp

<article class="flex gap-5 bg-utama rounded-md overflow-hidden p-5">
    <img src="{{url('assets/icons/svg/'.$icon.'')}}" alt="{{ $title }}" width="50px" style="height: 50px">
    <span>
        <p class="text-white">{{ $title }}</p>
        <p class="font-bold">{{ $content }}</p>
    </span>
</article>