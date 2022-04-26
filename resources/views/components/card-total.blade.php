@props(['title'=>'Default Title', 'total'=>0, 'route'=>'#', 'type'=>''])

<div class="grid rounded-md overflow-hidden shadow-md bg-white text-center">
    <header class="flex justify-between pt-5 px-5 items-center">
        <h3 class="uppercase" style="font-size: 1.5rem !important">{{ $title }}</h3>

        @if ($type === 'bill')
            <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="60.258" height="67.006" viewBox="0 0 79.258 67.006">
                <defs>
                    <filter id="Icon_material-payment" x="0" y="0" width="79.258" height="67.006" filterUnits="userSpaceOnUse">
                    <feOffset dy="3" input="SourceAlpha"/>
                    <feGaussianBlur stdDeviation="3" result="blur"/>
                    <feFlood flood-opacity="0.161"/>
                    <feComposite operator="in" in2="blur"/>
                    <feComposite in="SourceGraphic"/>
                    </filter>
                </defs>
                <g transform="matrix(1, 0, 0, 1, 0, 0)" filter="url(#Icon_material-payment)">
                    <path id="Icon_material-payment-2" data-name="Icon material-payment" d="M58.132,6H9.126a6.079,6.079,0,0,0-6.1,6.126L3,48.88a6.1,6.1,0,0,0,6.126,6.126H58.132a6.1,6.1,0,0,0,6.126-6.126V12.126A6.1,6.1,0,0,0,58.132,6Zm0,42.88H9.126V30.5H58.132Zm0-30.629H9.126V12.126H58.132Z" transform="translate(6)" fill="#fa1f35"/>
                </g>
            </svg>
        @elseif($type === 'debit')
            <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="60.265" height="78.934" viewBox="0 0 73.265 78.934">
                <defs>
                    <filter id="Path_1045" x="0" y="0" width="61.929" height="78.934" filterUnits="userSpaceOnUse">
                    <feOffset dy="3" input="SourceAlpha"/>
                    <feGaussianBlur stdDeviation="3" result="blur"/>
                    <feFlood flood-opacity="0.161"/>
                    <feComposite operator="in" in2="blur"/>
                    <feComposite in="SourceGraphic"/>
                    </filter>
                    <filter id="Path_1047" x="14.171" y="14.171" width="59.095" height="50.592" filterUnits="userSpaceOnUse">
                    <feOffset dy="3" input="SourceAlpha"/>
                    <feGaussianBlur stdDeviation="3" result="blur-2"/>
                    <feFlood flood-opacity="0.161"/>
                    <feComposite operator="in" in2="blur-2"/>
                    <feComposite in="SourceGraphic"/>
                    </filter>
                </defs>
                <g id="payment" transform="translate(7.75 4.75)">
                    <g transform="matrix(1, 0, 0, 1, -7.75, -4.75)" filter="url(#Path_1045)">
                    <path id="Path_1045-2" data-name="Path 1045" d="M37.385,62.184H9.044A7.8,7.8,0,0,1,1.25,54.39V9.044A7.8,7.8,0,0,1,9.044,1.25H37.385a7.8,7.8,0,0,1,7.794,7.794v2.834a2.126,2.126,0,1,1-4.251,0V9.044A3.548,3.548,0,0,0,37.385,5.5H9.044A3.548,3.548,0,0,0,5.5,9.044V54.39a3.548,3.548,0,0,0,3.543,3.543H37.385a3.548,3.548,0,0,0,3.543-3.543V48.722a2.126,2.126,0,1,1,4.251,0V54.39A7.8,7.8,0,0,1,37.385,62.184Z" transform="translate(7.75 4.75)" fill="#fa1f35"/>
                    </g>
                    <path id="Path_1046" data-name="Path 1046" d="M26.049,8.5H20.38a2.126,2.126,0,1,1,0-4.251h5.668a2.126,2.126,0,1,1,0,4.251Zm0,39.678H3.376a2.126,2.126,0,1,1,0-4.251H26.049a2.126,2.126,0,1,1,0,4.251Z" transform="translate(0 5.502)" fill="#fa1f35"/>
                    <g transform="matrix(1, 0, 0, 1, -7.75, -4.75)" filter="url(#Path_1047)">
                    <path id="Path_1047-2" data-name="Path 1047" d="M39.551,38.842H14.044A7.8,7.8,0,0,1,6.25,31.049v-17A7.8,7.8,0,0,1,14.044,6.25H39.551a7.8,7.8,0,0,1,7.794,7.794v17A7.8,7.8,0,0,1,39.551,38.842ZM14.044,10.5A3.548,3.548,0,0,0,10.5,14.044v17a3.548,3.548,0,0,0,3.543,3.543H39.551a3.548,3.548,0,0,0,3.543-3.543v-17A3.548,3.548,0,0,0,39.551,10.5Z" transform="translate(16.92 13.92)" fill="#fa1f35"/>
                    </g>
                    <path id="Path_1048" data-name="Path 1048" d="M45.219,13.5H8.376a2.126,2.126,0,0,1,0-4.251H45.219a2.126,2.126,0,0,1,0,4.251Zm-8.5,11.336H31.049a2.126,2.126,0,0,1,0-4.251h5.668a2.126,2.126,0,0,1,0,4.251Z" transform="translate(9.171 14.673)" fill="#fa1f35"/>
                </g>
            </svg>
        @elseif($type === 'fine')
            <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="60.503" height="68.007" viewBox="0 0 60.503 68.007">
                <defs>
                <filter id="Path_1050" x="0" y="1" width="60.503" height="67.007" filterUnits="userSpaceOnUse">
                    <feOffset dy="4" input="SourceAlpha"/>
                    <feGaussianBlur stdDeviation="3" result="blur"/>
                    <feFlood flood-opacity="0.161"/>
                    <feComposite operator="in" in2="blur"/>
                    <feComposite in="SourceGraphic"/>
                </filter>
                <filter id="Path_1054" x="10.079" y="0" width="39.645" height="51.074" filterUnits="userSpaceOnUse">
                    <feOffset dy="3" input="SourceAlpha"/>
                    <feGaussianBlur stdDeviation="3" result="blur-2"/>
                    <feFlood flood-opacity="0.161"/>
                    <feComposite operator="in" in2="blur-2"/>
                    <feComposite in="SourceGraphic"/>
                </filter>
                </defs>
                <g id="report" transform="translate(7.995 5.003)">
                <g transform="matrix(1, 0, 0, 1, -7.99, -5)" filter="url(#Path_1050)">
                    <path id="Path_1050-2" data-name="Path 1050" d="M4.449,2.056A1.421,1.421,0,0,0,3.031,3.477v42.1A1.421,1.421,0,0,0,4.449,47H40.064a1.421,1.421,0,0,0,1.418-1.421V3.477a1.421,1.421,0,0,0-1.418-1.421ZM40.064,49.032H4.449a3.451,3.451,0,0,1-3.444-3.451V3.477A3.451,3.451,0,0,1,4.449.026H40.064a3.451,3.451,0,0,1,3.444,3.451v42.1a3.451,3.451,0,0,1-3.444,3.451Z" transform="translate(7.99 5.97)" fill="#fa1f35" fill-rule="evenodd"/>
                </g>
                <path id="Path_1052" data-name="Path 1052" d="M55.788,43.868H84.116V3.027H55.788ZM85.129,45.9H54.775a1.014,1.014,0,0,1-1.013-1.015V2.012A1.014,1.014,0,0,1,54.775,1H85.129a1.014,1.014,0,0,1,1.013,1.015V44.883A1.014,1.014,0,0,1,85.129,45.9Z" transform="translate(-47.696 0)" fill="#fa1f35" fill-rule="evenodd"/>
                <g transform="matrix(1, 0, 0, 1, -7.99, -5)" filter="url(#Path_1054)">
                    <path id="Path_1054-2" data-name="Path 1054" d="M109.116,6.407h16.269V3.027H109.116ZM126.4,8.437H108.1a1.014,1.014,0,0,1-1.013-1.015V2.012A1.014,1.014,0,0,1,108.1,1h18.3a1.014,1.014,0,0,1,1.013,1.015v5.41A1.014,1.014,0,0,1,126.4,8.437Zm.312,10.023H114.624a1.015,1.015,0,0,1,0-2.03H126.71a1.015,1.015,0,0,1,0,2.03m-18.054.622a1.009,1.009,0,0,1-.663-.248l-1.565-1.358a1.014,1.014,0,0,1,1.327-1.535l.827.717,1.862-2a1.014,1.014,0,1,1,1.482,1.384L109.4,18.759a1.011,1.011,0,0,1-.741.323m18.054,6.953H114.624a1.015,1.015,0,0,1,0-2.03H126.71a1.015,1.015,0,0,1,0,2.03m-18.054.622a1.011,1.011,0,0,1-.663-.248l-1.565-1.358a1.014,1.014,0,0,1,1.327-1.535l.827.717,1.862-2a1.014,1.014,0,1,1,1.482,1.384L109.4,26.334a1.011,1.011,0,0,1-.741.323m18.054,6.792H114.624a1.015,1.015,0,0,1,0-2.03H126.71a1.015,1.015,0,0,1,0,2.03m-18.054.622a1.011,1.011,0,0,1-.663-.248l-1.565-1.358a1.014,1.014,0,0,1,1.327-1.535l.827.717,1.862-2a1.014,1.014,0,1,1,1.482,1.384L109.4,33.748a1.011,1.011,0,0,1-.741.323" transform="translate(-87 5)" fill="#fa1f35" fill-rule="evenodd"/>
                </g>
                </g>
            </svg>               
        @endif
    </header>

    @if (!$type)
        {{ $slot }}
    @else
        <h2 style="font-size: 5rem !important">{{ $total }}</h2>
    @endif

    <div class="bg-softGray p-5 flex justify-center">
        <a href="{{ $route }}" class="flex gap-2 items-center justify-center border-b border-transparent hover:border-dark">View Detail
            <svg xmlns="http://www.w3.org/2000/svg" width="12.598" height="8.402" viewBox="0 0 12.598 8.402">
                <path id="Icon_ionic-ios-arrow-round-forward" data-name="Icon ionic-ios-arrow-round-forward" d="M15.909,11.413a.572.572,0,0,0,0,.805l2.66,2.665H8.439a.569.569,0,0,0,0,1.138H18.56L15.9,18.685a.576.576,0,0,0,0,.805.567.567,0,0,0,.8,0l3.606-3.632h0a.639.639,0,0,0,.118-.179.543.543,0,0,0,.044-.219.57.57,0,0,0-.162-.4l-3.606-3.632A.557.557,0,0,0,15.909,11.413Z" transform="translate(-7.875 -11.252)"/>
            </svg>                      
        </a>
    </div>
</div>