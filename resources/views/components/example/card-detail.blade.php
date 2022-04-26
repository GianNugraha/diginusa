@extends("layouts.main", ['title' => 'Card Detail'])
@section("content")

{{-- Desktop --}}
<section class="content hidden md:flex flex-col space-y-4 px-5 pb-10">

    <div class="flex gap-5">

        <div class="w-full" x-data="{ open: true }">
            <div class="card card-light" x-show="open">
                <div class="card-header">
                    <div class="title-card-head text-primary">
                        <h2 class="font-semibold">Lorem ipsum dolor sit amet consectetur adipisicing elit.</h2>
                    </div>
                </div>
                <div class="card-body">
                    
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-3 mb-16 mt-10">

                        <div class="grid grid-cols-1 md:grid-cols-2 gap-5">
                            <div class="col-span-2">
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
                                    <span class="font-bold text-dark">Tahun Pengadaan</span>
                                    <p class="text-gray-800">2020</p>
                                </div>
                            </div>
                            <div class="">
                                <div class="flex flex-col space-y-2">
                                    <span class="font-bold text-dark">Nilai Barang</span>
                                    <p class="text-gray-800 flex items-center space-x-2">
                                        <span class="p-1 text-xs rounded-md bg-secondary text-white font-semibold">
                                            Rp
                                        </span>
                                        <span>12.000.000,00</span>
                                    </p>
                                </div>
                            </div>
                            <div class="">
                                <div class="flex flex-col space-y-2">
                                    <span class="font-bold text-dark">Berat Satuan</span>
                                    <p class="text-gray-800">1,22 Kg</p>
                                </div>
                            </div>
                            <div class="">
                                <div class="flex flex-col space-y-2">
                                    <span class="font-bold text-dark">Merek</span>
                                    <p class="text-gray-800">ASUS</p>
                                </div>
                            </div>
                            <div class="">
                                <div class="flex flex-col space-y-2">
                                    <span class="font-bold text-dark">Kondisi Barang</span>
                                    <p class="text-gray-800">Baru</p>
                                </div>
                            </div>
                            <div class="">
                                <div class="flex flex-col space-y-2">
                                    <span class="font-bold text-dark">Usia Simpan</span>
                                    <p class="text-gray-800">10 Tahun</p>
                                </div>
                            </div>
                            <div class="">
                                <div class="flex flex-col space-y-2">
                                    <span class="font-bold text-dark">Stok Minimum</span>
                                    <p class="text-gray-800">2</p>
                                </div>
                            </div>
                            <div class="">
                                <div class="flex flex-col space-y-2">
                                    <span class="font-bold text-dark">Stok</span>
                                    <p class="text-gray-800">2</p>
                                </div>
                            </div>
                        </div>

                        <div class="flex flex-col space-y-3">
                            <h5>Spesifikasi & Keterangan</h5>
                            <div class="overflow-x-hidden overflow-y-auto p-5 border bg-gray-100 border-gray-400" style="max-height: 60vh;"> 
                                <ul>
                                    <li>Lorem ipsum dolor sit amet consectetur adipisicing elit. Modi autem error officiis quidem eum at libero nostrum corporis quisquam.</li>
                                    <li>Lorem ipsum dolor sit amet consectetur adipisicing elit. Modi autem error officiis quidem eum at libero nostrum corporis quisquam.</li>
                                    <li>Lorem ipsum dolor sit amet consectetur adipisicing elit. Modi autem error officiis quidem eum at libero nostrum corporis quisquam.</li>
                                    <li>Lorem ipsum dolor sit amet consectetur adipisicing elit. Modi autem error officiis quidem eum at libero nostrum corporis quisquam.</li>
                                    <li>Lorem ipsum dolor sit amet consectetur adipisicing elit. Modi autem error officiis quidem eum at libero nostrum corporis quisquam.</li>
                                    <li>Lorem ipsum dolor sit amet consectetur adipisicing elit. Modi autem error officiis quidem eum at libero nostrum corporis quisquam.</li>
                                    <li>Lorem ipsum dolor sit amet consectetur adipisicing elit. Modi autem error officiis quidem eum at libero nostrum corporis quisquam.</li>
                                    <li>Lorem ipsum dolor sit amet consectetur adipisicing elit. Modi autem error officiis quidem eum at libero nostrum corporis quisquam.</li>
                                    <li>Lorem ipsum dolor sit amet consectetur adipisicing elit. Modi autem error officiis quidem eum at libero nostrum corporis quisquam.</li>
                                    <li>Lorem ipsum dolor sit amet consectetur adipisicing elit. Modi autem error officiis quidem eum at libero nostrum corporis quisquam.</li>
                                    <li>Lorem ipsum dolor sit amet consectetur adipisicing elit. Modi autem error officiis quidem eum at libero nostrum corporis quisquam.</li>
                                    <li>Lorem ipsum dolor sit amet consectetur adipisicing elit. Modi autem error officiis quidem eum at libero nostrum corporis quisquam.</li>
                                    <li>Lorem ipsum dolor sit amet consectetur adipisicing</li>
                                    <li>Lorem ipsum dolor sit amet consectetur adipisicing</li>
                                    <li>Lorem ipsum dolor sit amet consectetur adipisicing elit. Modi autem error officiis quidem eum at libero nostrum corporis quisquam.</li>
                                    <li>Lorem ipsum dolor sit amet consectetur adipisicing elit. Modi autem error officiis quidem eum at libero nostrum corporis quisquam.</li>
                                    <li>Lorem ipsum dolor sit amet consectetur adipisicing</li>
                                    <li>Lorem ipsum dolor sit amet consectetur adipisicing elit. Modi autem error officiis quidem eum at libero nostrum corporis quisquam.</li>
                                    <li>Lorem ipsum dolor sit amet consectetur adipisicing</li>
                                    <li>Lorem ipsum dolor sit amet consectetur adipisicing elit. Modi autem error officiis quidem eum at libero nostrum corporis quisquam.</li>
                                    <li>Lorem ipsum dolor sit amet consectetur adipisicing</li>
                                    <li>Lorem ipsum dolor sit amet consectetur adipisicing elit. Modi autem error officiis quidem eum at libero nostrum corporis quisquam.</li>
                                    <li>Lorem ipsum dolor sit amet consectetur adipisicing</li>
                                </ul>
                            </div>
                        </div>

                    </div>
                    
                </div>
                <div class="card-footer">
                    <a href="/cards" class="text-primary hover:underline hover:font-semibold">< Kembali</a>
                </div>
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
