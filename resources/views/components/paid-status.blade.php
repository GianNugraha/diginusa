@props(['status'=>'pay'])

@php
    $bgColor = '';

    switch (strtolower($status)) {
        case 'pay':
            $bgColor = 'bg-lightGray';
            break;
        case 'paid':
            $bgColor = 'bg-smoothGreen';
            break;
        case 'finish':
            $bgColor = 'bg-lightGreen';
            break;
        default:
            $bgColor = 'bg-orangeRed';
            break;
    }
@endphp

<a href="#" class="px-5 py-2 flex gap-2 justify-center items-center rounded-lg {{ $bgColor }} text-white text-center">
    @if (strtolower($status) == 'pay')
        <svg xmlns="http://www.w3.org/2000/svg" width="19.627" height="19.627" viewBox="0 0 19.627 19.627">
            <g id="Icon_feather-upload" data-name="Icon feather-upload" transform="translate(-3 -3)">
            <path id="Path_1069" data-name="Path 1069" d="M21.127,22.5v3.695a1.847,1.847,0,0,1-1.847,1.847H6.347A1.847,1.847,0,0,1,4.5,26.195V22.5" transform="translate(0 -6.915)" fill="none" stroke="#fff" stroke-linecap="round" stroke-linejoin="round" stroke-width="3"/>
            <path id="Path_1070" data-name="Path 1070" d="M19.737,9.119,15.119,4.5,10.5,9.119" transform="translate(-2.305 0)" fill="none" stroke="#fff" stroke-linecap="round" stroke-linejoin="round" stroke-width="3"/>
            <path id="Path_1071" data-name="Path 1071" d="M18,4.5V15.585" transform="translate(-5.187 0)" fill="none" stroke="#fff" stroke-linecap="round" stroke-linejoin="round" stroke-width="3"/>
            </g>
        </svg>
    @elseif(strtolower($status) == 'paid')
        <svg xmlns="http://www.w3.org/2000/svg" width="18.221" height="13.588" viewBox="0 0 18.221 13.588">
            <path id="Icon_awesome-check" data-name="Icon awesome-check" d="M6.189,17.9.267,11.976a.911.911,0,0,1,0-1.288L1.555,9.4a.911.911,0,0,1,1.288,0l3.989,3.989,8.545-8.545a.911.911,0,0,1,1.288,0l1.288,1.288a.911.911,0,0,1,0,1.288L7.477,17.9A.911.911,0,0,1,6.189,17.9Z" transform="translate(0 -4.577)" fill="#fff"/>
        </svg>
    @endif
    <span class="uppercase">
        {{ $status }}
    </span>
</a>