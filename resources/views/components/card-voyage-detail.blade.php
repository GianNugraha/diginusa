@props([
    'header'=>[
        'title'=>'Default Title',
        'PKK Document Number'=>'PKK/VTS.TPK/23/05/21/0001',
        'Date & Time PKK'=>'23/05/2021 14.00'
    ],
    'content'=>[],
    'documents'=>[]
])

<div {{ $attributes->merge(['class'=>"rounded-xl grid gap-10 shadow-md bg-white"]) }}>
    <header class="bg-utama text-white flex justify-between rounded-t-md pb-5 pt-10 p-10">
        <div class="grid gap-5">
            <h1 class="uppercase" style="font-size: 24px !important;">{{ $header['title'] }}</h1>
            <article class="flex">
                <span class="pr-10 border-r-2 border-white">
                    <p>PKK Document Number</p>
                    <p class="font-bold">{{ $header['PKK Document Number'] }}</p>
                </span>
                <span class="pl-10">
                    <p>Date & Time</p>
                    <p class="font-bold">{{ $header['Date & Time PKK'] }}</p>
                </span>
            </article>
        </div>

        <div class="flex gap-5">
            <span>
                <img src="{{ asset('assets/icons/svg/logo-perhubungan.svg') }}" alt="Logo Perhubungan">
            </span>
            <span>
                <img src="{{ asset('assets/icons/svg/logo-kala-jivam.svg') }}" alt="Logo Kala Jivam">
            </span>
        </div>
    </header>

    <section class="text-lightGray">
        @foreach ($content as $item)
            <div>
                <h3 class="text-utama bg-gray-200 py-2 px-10">{{ $item['category'] }}</h3>
                <div class="py-5 px-10 grid grid-cols-2 justify-between">
                    @foreach ($item['information'] as $value)
                        <span class="flex items-start py-2">
                            <p class="font-bold text-utama w-52">{{ $value['title'] }}</p>
                            <p>{{ $value['value'] }}</p>
                        </span>
                    @endforeach
                </div>
            </div>
        @endforeach

        <div>
            <h3 class="text-utama bg-gray-200 py-2 px-10">DOCUMENTS</h3>
            <div class="py-5 px-10 flex gap-5 flex-wrap">
                @foreach ($documents as $item)
                    <div class="grid justify-start text-utama object-cover">
                        <p class="font-bold w-56">{{ $item['title'] }}</p>
                        <span class="grid gap-2 justify-items-center py-5 border-dashed border border-utama">
                            <svg xmlns="http://www.w3.org/2000/svg" width="62.684" height="83.578" viewBox="0 0 62.684 83.578">
                                <path id="Icon_awesome-file-pdf" data-name="Icon awesome-file-pdf" d="M29.693,41.805c-.816-2.612-.8-7.656-.326-7.656C30.738,34.15,30.607,40.173,29.693,41.805Zm-.278,7.7A75.323,75.323,0,0,1,24.78,59.745c2.987-1.143,6.366-2.808,10.268-3.575A21.146,21.146,0,0,1,29.416,49.51ZM14.055,69.882c0,.131,2.155-.881,5.7-6.562C18.658,64.349,15,67.32,14.055,69.882ZM40.483,26.118h22.2V79.66a3.908,3.908,0,0,1-3.918,3.918H3.918A3.908,3.908,0,0,1,0,79.66V3.918A3.908,3.908,0,0,1,3.918,0H36.565V22.2A3.929,3.929,0,0,0,40.483,26.118ZM39.177,54.163a16.384,16.384,0,0,1-6.97-8.782c.735-3.02,1.894-7.607,1.012-10.48-.767-4.8-6.921-4.326-7.8-1.11-.816,2.987-.065,7.2,1.322,12.569a153.286,153.286,0,0,1-6.66,14.006c-.016,0-.016.016-.033.016-4.424,2.269-12.014,7.264-8.9,11.1a5.072,5.072,0,0,0,3.51,1.632c2.922,0,5.828-2.938,9.974-10.088,4.212-1.388,8.831-3.118,12.9-3.787,3.542,1.926,7.689,3.183,10.447,3.183,4.767,0,5.093-5.224,3.216-7.085-2.269-2.22-8.864-1.583-12.014-1.175ZM61.541,17.14l-16-16A3.915,3.915,0,0,0,42.769,0h-.979V20.895H62.684v-1A3.905,3.905,0,0,0,61.541,17.14Zm-12.1,41.675c.669-.441-.408-1.943-6.987-1.469C48.514,59.925,49.445,58.815,49.445,58.815Z" fill="currentColor"/>
                            </svg>

                            @if (!$item['src'])
                            <x-button label="SEE FILE" variant='disabled' href="#" />
                            @else
                            <x-button label="SEE FILE" target="_blank" href="{{ $item['src'] }}" />
                            @endif
                        </span>
                    </div>
                @endforeach
            </div>
        </div>

        <div class="p-10">
            {{ $slot }}
        </div>

    </section>

    <footer class="border-t border-black p-10 flex justify-between">
        <section>
            <p>KEMENTRIAN PERHUBUNGAN<br>DIREKTORAT JENDERAL pERHUBUNGAN LAUT<br>DISTRIK NAVIGASI KELAS I TANJUNG PRIOK</p>
        </section>
        <section>
            <p class="text-right">
                                Jl. Raya Ancol Baru No.3<br>
                                                  Ancol,<br>
                    Kec. Pademangan, Kota Jakarta Utara,<br>
                    Daerah Khusus Ibukota Jakarta 14430<br>
                                  Telp : (021) 43930070<br>
            </p>
        </section>
    </footer>
</div>