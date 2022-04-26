@props([
    'title'=>'Default Title',
    'type'=>'approval',
    'status'=>'waiting',
    'content'=>[
        [
            'title'=>'Content Title',
            'content'=>null
        ]
    ],
    'href'=>false,
])

@php
    if ($type === 'approval') {
        switch ($status) {
            case 'waiting':
                $styleHeader = 'bg-utama text-white';
                break;
            default:
                $styleHeader = 'bg-yellow-400 text-black';
                break;
        }
    } elseif($type === 'pnbp'){
        $styleHeader = 'bg-red-600 text-white';
    } else {
        $styleHeader = 'bg-yellow-400 text-black text-center italic';
    }
    
@endphp

<section class="relative rounded-md text-black shadow drop-shadow-md">
    <header class="{{ $styleHeader }} px-5 py-3 rounded-md">
        <h6>{{ $title }}</h6>
    </header>
    <div class="p-5 grid gap-2">
        @foreach ($content as $item)
        @php
            switch (strtolower($item['content'])) {
                case 'waiting':
                    $color = 'text-yellow-800 font-bold';
                    break;
                case 'approved':
                case 'available':
                    $color = 'text-utama font-bold';
                    break;
                default:
                    $color = 'text-black';
                    break;
            }
        @endphp
            <article class="flex">
                <p class="w-44 text-utama font-semibold">{{ $item['title'] }}</p>
                <p class="{{ $color }} flex-1">
                @if ($type === 'pnbp' && $loop->index === 0)
                    @if ($status === 'paid')
                        <span class="flex gap-2 text-utama items-center">
                            {{ $item['content'] ?? '-' }}
                            <svg xmlns="http://www.w3.org/2000/svg" width="19.036" height="19.036" viewBox="0 0 19.036 19.036">
                                <path id="Icon_awesome-check-circle" data-name="Icon awesome-check-circle" d="M19.6,10.081A9.518,9.518,0,1,1,10.081.563,9.518,9.518,0,0,1,19.6,10.081ZM8.98,15.12l7.062-7.062a.614.614,0,0,0,0-.868l-.868-.868a.614.614,0,0,0-.868,0L8.545,12.081,5.857,9.392a.614.614,0,0,0-.868,0l-.868.868a.614.614,0,0,0,0,.868L8.111,15.12a.614.614,0,0,0,.868,0Z" transform="translate(-0.563 -0.563)" fill="#0fb99e"/>
                            </svg>
                        </span>
                    @else
                        <span class="flex gap-2 text-red-600 items-center">
                            {{ $item['content'] ?? '-' }}
                            <svg xmlns="http://www.w3.org/2000/svg" width="18" height="19" viewBox="0 0 18 19">
                                <g id="Group_5300" data-name="Group 5300" transform="translate(-1600 -769.168)">
                                  <circle id="Ellipse_8" data-name="Ellipse 8" cx="9" cy="9" r="9" transform="translate(1600 770.168)" fill="#e8264f"/>
                                  <text id="x" transform="translate(1606 783.168)" fill="#fff" font-size="13" font-family="Poppins-Regular, Poppins"><tspan x="0" y="0">x</tspan></text>
                                </g>
                            </svg>
                        </span>
                    @endif
                @else
                    {{ $item['content'] ?? '-' }}
                @endif
                </p>
            </article>
        @endforeach
    </div>
    @if ($href)
        <footer class="absolute bottom-2 right-2">
            <a href="#table_wrapper" class="text-lightGray border-b border-transparent hover:border-lightGray">View History Manouvre</a>
        </footer>
    @endif
</section> 