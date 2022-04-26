@props(['type'=>'delete', 'route'=>'#', 'download'=>'', 'link'=>false])

@if ($type==="edit")
    @if ($route === '#')
        <button type="button" {{ $attributes->merge(['class'=>'bg-lightBlue p-2 rounded-md focus:outline-none']) }} aria-label="button edit">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-light" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-1.414-9.414a2 2 0 112.828 2.828L11.828 15H9v-2.828l8.586-8.586z" />
            </svg>
        </button>
    @else
        <a href="{{ $route }}" {{ $attributes->merge(['class'=>'bg-lightBlue p-2 rounded-md']) }} aria-label="button edit">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-light" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-1.414-9.414a2 2 0 112.828 2.828L11.828 15H9v-2.828l8.586-8.586z" />
            </svg>
        </a>
    @endif
@elseif ($type==='delete')
    <button type="button" {{ $attributes->merge(['class'=>'bg-red-600 rounded-md p-2 focus:outline-none']) }} aria-label="button delete">
        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-light" fill="none" viewBox="0 0 24 24" stroke="currentColor">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16" />
        </svg>
    </button>
@elseif ($type==='view')
    @if ($route === '#')
        <button type="button" {{ $attributes->merge(['class'=>'bg-blue-600 rounded-md p-2 focus:outline-none']) }} aria-label="button view">
            <svg xmlns="http://www.w3.org/2000/svg" width="18.169" height="23.62" viewBox="0 0 18.169 23.62">
                <path id="Icon_ionic-md-document" data-name="Icon ionic-md-document" d="M17.652,3.375H9.021A2.271,2.271,0,0,0,6.75,5.646V24.724A2.271,2.271,0,0,0,9.021,27H22.648a2.271,2.271,0,0,0,2.271-2.271V10.643Zm-.908,8.176V5.192L23.1,11.551Z" transform="translate(-6.75 -3.375)" fill="#fff"/>
            </svg>
        </button>
    @else
        <a href="{{ $route }}" type="button" {{ $attributes->merge(['class'=>'bg-blue-600 rounded-md p-2']) }} aria-label="button view">
            <svg xmlns="http://www.w3.org/2000/svg" width="18.169" height="23.62" viewBox="0 0 18.169 23.62">
                <path id="Icon_ionic-md-document" data-name="Icon ionic-md-document" d="M17.652,3.375H9.021A2.271,2.271,0,0,0,6.75,5.646V24.724A2.271,2.271,0,0,0,9.021,27H22.648a2.271,2.271,0,0,0,2.271-2.271V10.643Zm-.908,8.176V5.192L23.1,11.551Z" transform="translate(-6.75 -3.375)" fill="#fff"/>
            </svg>
        </a>
    @endif
@elseif ($type==='upload')
    <a href="{{ $route }}" {{ $attributes->merge(['class'=>'bg-blue-600 rounded-md p-2']) }} aria-label="button upload">
        <svg xmlns="http://www.w3.org/2000/svg" width="20.299" height="20.299" viewBox="0 0 20.299 20.299">
            <g id="Icon_feather-upload" data-name="Icon feather-upload" transform="translate(-3 -3)">
              <path id="Path_941" data-name="Path 941" d="M21.8,22.5v3.844a1.922,1.922,0,0,1-1.922,1.922H6.422A1.922,1.922,0,0,1,4.5,26.344V22.5" transform="translate(0 -6.467)" fill="none" stroke="#fff" stroke-linecap="round" stroke-linejoin="round" stroke-width="3"/>
              <path id="Path_942" data-name="Path 942" d="M20.11,9.305,15.305,4.5,10.5,9.305" transform="translate(-2.156)" fill="none" stroke="#fff" stroke-linecap="round" stroke-linejoin="round" stroke-width="3"/>
              <path id="Path_943" data-name="Path 943" d="M18,4.5V16.033" transform="translate(-4.851)" fill="none" stroke="#fff" stroke-linecap="round" stroke-linejoin="round" stroke-width="3"/>
            </g>
        </svg>
    </a>
@elseif ($type==='download')
    <a href="{{ $route }}" {{ $attributes }} {{ $download ? 'download='.$download : '' }} class="{{ $route === '#' || !$route ? 'text-lighGray' : 'text-utama' }}" aria-label="button download">
        <svg id="Group_5339" data-name="Group 5339" xmlns="http://www.w3.org/2000/svg" width="39" height="39" viewBox="0 0 52 51">
            <rect id="Rectangle_22" data-name="Rectangle 22" width="52" height="51" rx="12" fill="currentColor"/>
            <g id="Icon_feather-upload" data-name="Icon feather-upload" transform="translate(14.741 14.294)">
              <path id="Path_53" data-name="Path 53" d="M26.834,28.917V24.639A2.33,2.33,0,0,0,24.353,22.5H6.982A2.33,2.33,0,0,0,4.5,24.639v4.278" transform="translate(-4.5 -22.5)" fill="none" stroke="#fff" stroke-linecap="round" stroke-linejoin="round" stroke-width="4"/>
              <path id="Path_54" data-name="Path 54" d="M24.278,4.5,17.389,9.848,10.5,4.5" transform="translate(-6.222 12.486)" fill="none" stroke="#fff" stroke-linecap="round" stroke-linejoin="round" stroke-width="4"/>
              <path id="Path_55" data-name="Path 55" d="M18,17.335V4.5" transform="translate(-6.833 4.999)" fill="none" stroke="#fff" stroke-linecap="round" stroke-linejoin="round" stroke-width="4"/>
            </g>
        </svg>
    </a>
@elseif ($type==='print')
    <button href="{{ $route }}" {{ $attributes }} class="focus:outline-none {{ $route === '#' || !$route ? 'text-lighGray' : 'text-lightBlue' }}" aria-label="Action Button">
        <svg xmlns="http://www.w3.org/2000/svg" width="39" height="39" viewBox="0 0 52 51">
            <g id="Group_5340" data-name="Group 5340" transform="translate(-0.262)">
              <rect id="Rectangle_22" data-name="Rectangle 22" width="52" height="51" rx="12" transform="translate(0.262)" fill="currentColor"/>
              <g id="Icon_feather-printer" data-name="Icon feather-printer" transform="translate(14.453 14.199)">
                <path id="Path_847" data-name="Path 847" d="M9,11.04V3H22.782v8.04" transform="translate(-4.406 -3)" fill="none" stroke="#fff" stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5"/>
                <path id="Path_848" data-name="Path 848" d="M7.594,23.837H5.3A2.3,2.3,0,0,1,3,21.54V15.8a2.3,2.3,0,0,1,2.3-2.3H23.673a2.3,2.3,0,0,1,2.3,2.3V21.54a2.3,2.3,0,0,1-2.3,2.3h-2.3" transform="translate(-3 -5.46)" fill="none" stroke="#fff" stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5"/>
                <path id="Path_849" data-name="Path 849" d="M9,21H22.782v9.188H9Z" transform="translate(-4.406 -7.218)" fill="none" stroke="#fff" stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5"/>
              </g>
            </g>
        </svg>
    </button>
@elseif ($type==='see')
    @if ($link)
        <a href="{{ $route }}" {{ $attributes }} class="focus:outline-none p-2 rounded-xl {{ $route === '#' || !$route ? 'bg-lightGray' : 'bg-lightBlue' }}" aria-label="button see">
            <svg xmlns="http://www.w3.org/2000/svg" width="18.798" height="14.217" viewBox="0 0 18.798 14.217">
                <g id="Icon_feather-eye" data-name="Icon feather-eye" transform="translate(1 1)">
                    <path id="Path_1073" data-name="Path 1073" d="M1.5,12.108S4.554,6,9.9,6s8.4,6.108,8.4,6.108-3.054,6.108-8.4,6.108S1.5,12.108,1.5,12.108Z" transform="translate(-1.5 -6)" fill="none" stroke="#fff" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"/>
                    <path id="Path_1074" data-name="Path 1074" d="M18.081,15.791A2.291,2.291,0,1,1,15.791,13.5,2.291,2.291,0,0,1,18.081,15.791Z" transform="translate(-7.392 -9.682)" fill="none" stroke="#fff" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"/>
                </g>
            </svg>
        </a>
    @else
        <button href="{{ $route }}" {{ $attributes }} class="focus:outline-none p-2 rounded-xl {{ $route === '#' || !$route ? 'bg-lightGray' : 'bg-lightBlue' }}" aria-label="button see">
            <svg xmlns="http://www.w3.org/2000/svg" width="18.798" height="14.217" viewBox="0 0 18.798 14.217">
                <g id="Icon_feather-eye" data-name="Icon feather-eye" transform="translate(1 1)">
                    <path id="Path_1073" data-name="Path 1073" d="M1.5,12.108S4.554,6,9.9,6s8.4,6.108,8.4,6.108-3.054,6.108-8.4,6.108S1.5,12.108,1.5,12.108Z" transform="translate(-1.5 -6)" fill="none" stroke="#fff" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"/>
                    <path id="Path_1074" data-name="Path 1074" d="M18.081,15.791A2.291,2.291,0,1,1,15.791,13.5,2.291,2.291,0,0,1,18.081,15.791Z" transform="translate(-7.392 -9.682)" fill="none" stroke="#fff" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"/>
                </g>
            </svg>
        </button>
    @endif
@endif