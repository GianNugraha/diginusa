@extends("layouts.main", ['title' => 'Card Detail v2'])
@section("content")

{{-- Desktop --}}
<section class="content hidden md:flex flex-col space-y-4 px-5 pb-10">

    <div class="flex gap-5">

        <div class="w-full">
            <div class="card card-light" x-show="open">
                <div class="card-header">
                    <div class="title-card-head text-primary">
                            <a href="#" class="flex space-x-3 items-center font-semibold text-dark hover:underline">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-9 w-9" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 16l-4-4m0 0l4-4m-4 4h18" />
                                  </svg>
                                  <span class="text-2xl">Kembali</span>
                            </a>
                    </div>
                </div>
                <div class="card-body">
                    
                    <div class="grid grid-cols-1 gap-10 mb-16 mt-10">

                        <div class="grid grid-cols-1 md:grid-cols-2 gap-5">
                            <div class="">
                                <div class="flex flex-col space-y-2">
                                    <span class="font-bold text-dark">Nomor Dokumen</span>
                                    <p class="text-gray-800">123312332.123123132.123</p>
                                </div>
                            </div>
                            <div class="">
                                <div class="flex flex-col space-y-2">
                                    <span class="font-bold text-dark">Tangal Permintaan</span>
                                    <p class="text-gray-800">20/12/2021</p>
                                </div>
                            </div>
                            <div class="col-span-2">
                                <div class="flex flex-col space-y-2">
                                    <span class="font-bold text-dark">User Peminta</span>
                                    <p class="text-gray-800">SBNP / Rafly Mustofa</p>
                                </div>
                            </div>
                        </div>

                        <div class="flex flex-col space-y-3" x-data="{ expanded: false }">
                            <div class="w-full">
                                <span class="float-right text-gray-500 hover:text-blue-500 hover:underline cursor-pointer hover:font-semibold" @click="expanded = !expanded">Expand All</span>
                            </div>
                            <div class="grid grid-cols-1">
                                <div class="border border-gray-900 flex flex-col" style="max-height: 60vh;">
                                    <div class="w-full flex items-center justify-between px-4 py-2">
                                        <h4 class="text-primary">52/231.A</h4>
                                        <span class="text-lg text-primary cursor-pointer">
                                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
                                            </svg>
                                        </span>
                                    </div> 
                                    <div class="grid grid-cols-1 md:grid-cols-2 gap-2" x-show="expanded">
                                        {{-- <hr class="col-span-2 bg-gray-100"> --}}
                                        <div class="particular px-4 py-6">
                                            <div class="grid grid-cols-1 md:grid-cols-3 gap-5">
                                                <div class="">
                                                    <div class="flex flex-col space-y-2">
                                                        <span class="font-bold text-dark">Nama Barang</span>
                                                        <p class="text-gray-800">Asus TUF Gamming FX1233</p>
                                                    </div>
                                                </div>
                                                <div class="">
                                                    <div class="flex flex-col space-y-2">
                                                        <span class="font-bold text-dark">Kode Barang</span>
                                                        <p class="text-gray-800">099.12312412.123</p>
                                                    </div>
                                                </div>
                                                <div class="">
                                                    <div class="flex flex-col space-y-2">
                                                        <span class="font-bold text-dark">Kategori</span>
                                                        <p class="text-gray-800">Laptop</p>
                                                    </div>
                                                </div>
                                                <div class="">
                                                    <div class="flex flex-col space-y-2">
                                                        <span class="font-bold text-dark">Jumlah</span>
                                                        <p class="text-gray-800">10</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="information px-4 py-2 gap-7 flex flex-col">
                                            <div class="image-qr grid grid-cols-3 gap-2">
                                                <div class="flex items-center justify-center">
                                                    <img src="{{asset('assets/images/card-qr.png')}}" class="h-20" alt="">
                                                </div>
                                                <div class="flex items-center justify-center">
                                                    <div class="h-16 bg-primary">&nbsp;</div>
                                                </div>
                                                <div class="flex items-center justify-center">
                                                    <img src="{{asset('assets/images/laptop.png')}}" class="h-20" alt="">
                                                </div>
                                            </div>
                                            <div class="info-button grid grid-cols-1 md:grid-cols-3 gap-4">
                                                <div class="flex items-center justify-center">
                                                    <h4 class="text-success">DISETUJUI</h4>
                                                </div>
                                                <div class="flex items-center justify-center">
                                                    <p class="text-dark"> Kepala Distrik Navigasi</p>
                                                </div>
                                                <div class="flex items-center justify-center">
                                                    <a href="#" class="btn-sm-secondary">Distribute</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="border border-gray-900 flex flex-col" style="max-height: 60vh;">
                                    <div class="w-full flex items-center justify-between px-4 py-2">
                                        <h4 class="text-primary">52/231.A</h4>
                                        <span class="text-lg text-primary cursor-pointer">
                                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
                                            </svg>
                                        </span>
                                    </div> 
                                    <div class="grid grid-cols-1 md:grid-cols-2 gap-2" x-show="expanded">
                                        {{-- <hr class="col-span-2 bg-gray-100"> --}}
                                        <div class="particular px-4 py-6">
                                            <div class="grid grid-cols-1 md:grid-cols-3 gap-5">
                                                <div class="">
                                                    <div class="flex flex-col space-y-2">
                                                        <span class="font-bold text-dark">Nama Barang</span>
                                                        <p class="text-gray-800">Asus TUF Gamming FX1233</p>
                                                    </div>
                                                </div>
                                                <div class="">
                                                    <div class="flex flex-col space-y-2">
                                                        <span class="font-bold text-dark">Kode Barang</span>
                                                        <p class="text-gray-800">099.12312412.123</p>
                                                    </div>
                                                </div>
                                                <div class="">
                                                    <div class="flex flex-col space-y-2">
                                                        <span class="font-bold text-dark">Kategori</span>
                                                        <p class="text-gray-800">Laptop</p>
                                                    </div>
                                                </div>
                                                <div class="">
                                                    <div class="flex flex-col space-y-2">
                                                        <span class="font-bold text-dark">Jumlah</span>
                                                        <p class="text-gray-800">10</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="information px-4 py-2 gap-7 flex flex-col">
                                            <div class="image-qr grid grid-cols-3 gap-2">
                                                <div class="flex items-center justify-center">
                                                    <img src="{{asset('assets/images/card-qr.png')}}" class="h-20" alt="">
                                                </div>
                                                <div class="flex items-center justify-center">
                                                    <div class="h-16 bg-primary">&nbsp;</div>
                                                </div>
                                                <div class="flex items-center justify-center">
                                                    <img src="{{asset('assets/images/laptop.png')}}" class="h-20" alt="">
                                                </div>
                                            </div>
                                            <div class="info-button grid grid-cols-1 md:grid-cols-3 gap-4">
                                                <div class="flex items-center justify-center">
                                                    <h4 class="text-success">DISETUJUI</h4>
                                                </div>
                                                <div class="flex items-center justify-center">
                                                    <p class="text-dark"> Kepala Distrik Navigasi</p>
                                                </div>
                                                <div class="flex items-center justify-center">
                                                    <a href="#" class="btn-sm-secondary">Distribute</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="border border-gray-900 flex flex-col" style="max-height: 60vh;">
                                    <div class="w-full flex items-center justify-between px-4 py-2">
                                        <h4 class="text-primary">52/231.A</h4>
                                        <span class="text-lg text-primary cursor-pointer">
                                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
                                            </svg>
                                        </span>
                                    </div> 
                                    <div class="grid grid-cols-1 md:grid-cols-2 gap-2" x-show="expanded">
                                        {{-- <hr class="col-span-2 bg-gray-100"> --}}
                                        <div class="particular px-4 py-6">
                                            <div class="grid grid-cols-1 md:grid-cols-3 gap-5">
                                                <div class="">
                                                    <div class="flex flex-col space-y-2">
                                                        <span class="font-bold text-dark">Nama Barang</span>
                                                        <p class="text-gray-800">Asus TUF Gamming FX1233</p>
                                                    </div>
                                                </div>
                                                <div class="">
                                                    <div class="flex flex-col space-y-2">
                                                        <span class="font-bold text-dark">Kode Barang</span>
                                                        <p class="text-gray-800">099.12312412.123</p>
                                                    </div>
                                                </div>
                                                <div class="">
                                                    <div class="flex flex-col space-y-2">
                                                        <span class="font-bold text-dark">Kategori</span>
                                                        <p class="text-gray-800">Laptop</p>
                                                    </div>
                                                </div>
                                                <div class="">
                                                    <div class="flex flex-col space-y-2">
                                                        <span class="font-bold text-dark">Jumlah</span>
                                                        <p class="text-gray-800">10</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="information px-4 py-2 gap-7 flex flex-col">
                                            <div class="image-qr grid grid-cols-3 gap-2">
                                                <div class="flex items-center justify-center">
                                                    <img src="{{asset('assets/images/card-qr.png')}}" class="h-20" alt="">
                                                </div>
                                                <div class="flex items-center justify-center">
                                                    <div class="h-16 bg-primary">&nbsp;</div>
                                                </div>
                                                <div class="flex items-center justify-center">
                                                    <img src="{{asset('assets/images/laptop.png')}}" class="h-20" alt="">
                                                </div>
                                            </div>
                                            <div class="info-button grid grid-cols-1 md:grid-cols-3 gap-4">
                                                <div class="flex items-center justify-center">
                                                    <h4 class="text-success">DISETUJUI</h4>
                                                </div>
                                                <div class="flex items-center justify-center">
                                                    <p class="text-dark"> Kepala Distrik Navigasi</p>
                                                </div>
                                                <div class="flex items-center justify-center">
                                                    <a href="#" class="btn-sm-secondary">Distribute</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="border border-gray-900 flex flex-col" style="max-height: 60vh;">
                                    <div class="w-full flex items-center justify-between px-4 py-2">
                                        <h4 class="text-primary">52/231.A</h4>
                                        <span class="text-lg text-primary cursor-pointer">
                                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
                                            </svg>
                                        </span>
                                    </div> 
                                    <div class="grid grid-cols-1 md:grid-cols-2 gap-2" x-show="expanded">
                                        {{-- <hr class="col-span-2 bg-gray-100"> --}}
                                        <div class="particular px-4 py-6">
                                            <div class="grid grid-cols-1 md:grid-cols-3 gap-5">
                                                <div class="">
                                                    <div class="flex flex-col space-y-2">
                                                        <span class="font-bold text-dark">Nama Barang</span>
                                                        <p class="text-gray-800">Asus TUF Gamming FX1233</p>
                                                    </div>
                                                </div>
                                                <div class="">
                                                    <div class="flex flex-col space-y-2">
                                                        <span class="font-bold text-dark">Kode Barang</span>
                                                        <p class="text-gray-800">099.12312412.123</p>
                                                    </div>
                                                </div>
                                                <div class="">
                                                    <div class="flex flex-col space-y-2">
                                                        <span class="font-bold text-dark">Kategori</span>
                                                        <p class="text-gray-800">Laptop</p>
                                                    </div>
                                                </div>
                                                <div class="">
                                                    <div class="flex flex-col space-y-2">
                                                        <span class="font-bold text-dark">Jumlah</span>
                                                        <p class="text-gray-800">10</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="information px-4 py-2 gap-7 flex flex-col">
                                            <div class="image-qr grid grid-cols-3 gap-2">
                                                <div class="flex items-center justify-center">
                                                    <img src="{{asset('assets/images/card-qr.png')}}" class="h-20" alt="">
                                                </div>
                                                <div class="flex items-center justify-center">
                                                    <div class="h-16 bg-primary">&nbsp;</div>
                                                </div>
                                                <div class="flex items-center justify-center">
                                                    <img src="{{asset('assets/images/laptop.png')}}" class="h-20" alt="">
                                                </div>
                                            </div>
                                            <div class="info-button grid grid-cols-1 md:grid-cols-3 gap-4">
                                                <div class="flex items-center justify-center">
                                                    <h4 class="text-success">DISETUJUI</h4>
                                                </div>
                                                <div class="flex items-center justify-center">
                                                    <p class="text-dark"> Kepala Distrik Navigasi</p>
                                                </div>
                                                <div class="flex items-center justify-center">
                                                    <a href="#" class="btn-sm-secondary">Distribute</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                    
                </div>
                {{-- <div class="card-footer">
                    <a href="/cards" class="text-primary hover:underline hover:font-semibold">< Kembali</a>
                </div> --}}
            </div>
        </div>

    </div>

</section>

@endsection

@push('bofore_style')
@endpush
@push('after_style')
@endpush
@push('bofore_scripts')
@endpush
@push('after_scripts')
@endpush
