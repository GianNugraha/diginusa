@extends("layouts.main", ['title' => 'Profile'])
@section("content")

{{-- Desktop --}}
<section class="content hidden md:flex flex-col space-y-4 px-5 pb-10">

    <div class="flex gap-5">

        <div class="w-full" x-data="{ open: true }">
            <div class="card card-light" x-show="open">
                <div class="card-body">
                    
                    <div class="px-10">
                        <div class="grid grid-cols-1 md:grid-cols-5 gap-20 my-8">
                            <div class="ava">
                                <div class="rounded-xl overflow-hidden flex items-center justify-center h-52 w-52">
                                    <img src="https://picsum.photos/200/300?random=1" alt="">
                                </div>
                            </div>
                            <div class="ava-info col-span-4 flex flex-col justify-center gap-5">
                                <h1 class="text-primary font-bold">Faisal Alfian</h1>
                                <div class="w-full flex items-center justify-between">
                                    <h3>Login sebagai User</h3>
                                    <p class="text-dark font-semibold">Gol: -</p>
                                </div>
                            </div>
                        </div>
    
                        <hr>

                        <div class="grid grid-cols-1 md:grid-cols-3 gap-20 mb-16 mt-10">
    
                            <div class="flex flex-col space-y-3">
                                <div class="w-full" x-data="{ open: true, show:true }">
                                    <div class="card card-light border border-blue-2" x-show="open">
                                        <div class="card-header border-b border-gray-400">
                                            <div class="title-card-head text-secondary">Ubah Password</div>
                                            <div class="cta-card-head">
                                                <span class="item-cta-card-head" @click="show = !show">
                                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" viewBox="0 0 20 20" fill="currentColor">
                                                    <path d="M5 12a1 1 0 102 0V6.414l1.293 1.293a1 1 0 001.414-1.414l-3-3a1 1 0 00-1.414 0l-3 3a1 1 0 001.414 1.414L5 6.414V12zM15 8a1 1 0 10-2 0v5.586l-1.293-1.293a1 1 0 00-1.414 1.414l3 3a1 1 0 001.414 0l3-3a1 1 0 00-1.414-1.414L15 13.586V8z" />
                                                    </svg>
                                                </span>
                                                <span class="item-cta-card-head" @click="open = false">
                                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" viewBox="0 0 20 20"
                                                        fill="currentColor">
                                                        <path fill-rule="evenodd"
                                                            d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z"
                                                            clip-rule="evenodd" />
                                                    </svg>
                                                </span>
                                            </div>
                                        </div>
                                        <div class="card-body" x-show="show">
                                            <div class="pb-5 pt-3">
                                                <form action="" class="flex flex-wrap space-y-5">
                                                    <div class="flex flex-col space-y-3">
                                                        <div class="flex flex-col mb-3 mt-3 form-group border border-blue-600 rounded-md">
                                                            <div class="flex justify-center items-center w-full relative input-group">
                                                                <input type="password" name="password" class="w-full py-3 lg:py-3 pr-4 lg:pr-8 pl-14 lg:pl-16 text-sm lg:text-lg font-bold rounded-lg outline-none active form-control show-hide-pw" id="" placeholder="New Password" autocomplete="off">
                                                                <span class="input-append px-3 show-password cursor-pointer absolute flex items-center justify-center inset-y-0 right-0" id="toggle-pw">
                                                                    <svg id="eye-hide" class="hidden" xmlns="http://www.w3.org/2000/svg" width="26.721" height="17.814" viewBox="0 0 26.721 17.814">
                                                                        <path id="Icon_awesome-eye" data-name="Icon awesome-eye" d="M26.56,12.73a14.88,14.88,0,0,0-13.2-8.23,14.882,14.882,0,0,0-13.2,8.23,1.5,1.5,0,0,0,0,1.354,14.88,14.88,0,0,0,13.2,8.23,14.882,14.882,0,0,0,13.2-8.23A1.5,1.5,0,0,0,26.56,12.73Zm-13.2,7.358a6.68,6.68,0,1,1,6.68-6.68A6.68,6.68,0,0,1,13.361,20.088Zm0-11.134a4.422,4.422,0,0,0-1.174.176,2.22,2.22,0,0,1-3.1,3.1,4.443,4.443,0,1,0,4.278-3.279Z" transform="translate(0 -4.5)" fill="#858585"/>
                                                                        </svg>
                                            
                                                                        <svg id="eye-show" class="show" xmlns="http://www.w3.org/2000/svg" width="28.721" height="19.814" viewBox="0 0 45 36">
                                                                        <path id="Icon_awesome-eye-slash" data-name="Icon awesome-eye-slash" d="M22.5,28.125a10.087,10.087,0,0,1-10.048-9.359l-7.376-5.7a23.435,23.435,0,0,0-2.582,3.909,2.275,2.275,0,0,0,0,2.052A22.552,22.552,0,0,0,22.5,31.5a21.84,21.84,0,0,0,5.477-.735l-3.649-2.823a10.134,10.134,0,0,1-1.828.184ZM44.565,32.21,36.792,26.2a23.291,23.291,0,0,0,5.713-7.177,2.275,2.275,0,0,0,0-2.052A22.552,22.552,0,0,0,22.5,4.5,21.667,21.667,0,0,0,12.142,7.151L3.2.237a1.125,1.125,0,0,0-1.579.2L.237,2.211a1.125,1.125,0,0,0,.2,1.579L41.8,35.763a1.125,1.125,0,0,0,1.579-.2l1.381-1.777a1.125,1.125,0,0,0-.2-1.579ZM31.648,22.226,28.884,20.09a6.663,6.663,0,0,0-8.164-8.573,3.35,3.35,0,0,1,.655,1.984,3.279,3.279,0,0,1-.108.7l-5.176-4A10.006,10.006,0,0,1,22.5,7.875,10.119,10.119,0,0,1,32.625,18a9.885,9.885,0,0,1-.977,4.226Z" transform="translate(0 0)" fill="#858585"/>
                                                                        </svg>                          
                                                                </span>
                                                                <span class="absolute flex items-center justify-center h-full py-3 px-5 lg:px-6 inset-y-0 left-0">
                                                                    <img class="w-4 lg:w-5" src="/assets/icons/svg/lock.svg">
                                                                </span>
                                                            </div>
                                                            <span class="hidden mt-3 pl-2 text-red-600 font-base">
                                                                Info here !
                                                            </span>
                                                        </div>
                                                        <div class="flex flex-col mb-3 mt-3 form-group border border-blue-600 rounded-md">
                                                            <div class="flex justify-center items-center w-full relative input-group">
                                                                <input type="password" name="repassword"
                                                                    class="w-full py-3 lg:py-3 pr-4 lg:pr-8 pl-14 lg:pl-16 text-sm lg:text-lg font-bold rounded-lg outline-none active form-control show-hide-pw"
                                                                    id="" placeholder="Retype Password" autocomplete="off">
                                                                <span class="absolute flex items-center justify-center h-full py-3 px-5 lg:px-6 inset-y-0 left-0">
                                                                    <img class="w-4 lg:w-5" src="/assets/icons/svg/lock.svg">
                                                                </span>
                                                            </div>
                                                            <span class="hidden mt-3 pl-2 text-red-600 font-base">
                                                                Info here !
                                                            </span>
                                                        </div>
                                                    </div>
                                                    <div class="flex items-center w-full justify-end">
                                                        <button type="submit" class="btn-primary w-full">Simpan Perubahan</button>
                                                    </div>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
    
                            <div class="col-span-2">
                                <div class="grid grid-cols-1 md:grid-cols-2 gap-5">
                                    <div class="">
                                        <div class="flex flex-col space-y-2">
                                            <span class="font-bold text-dark">NIP</span>
                                            <p class="text-gray-800">99128319231232</p>
                                        </div>
                                    </div>
                                    <div class="">
                                        <div class="flex flex-col space-y-2">
                                            <span class="font-bold text-dark">NIK</span>
                                            <p class="text-gray-800">88318491299348</p>
                                        </div>
                                    </div>
                                    <div class="">
                                        <div class="flex flex-col space-y-2">
                                            <span class="font-bold text-dark">BIDANG</span>
                                            <p class="text-gray-800">Logistik</p>
                                        </div>
                                    </div>
                                    <div class="">
                                        <div class="flex flex-col space-y-2">
                                            <span class="font-bold text-dark">JABATAN</span>
                                            <p class="text-gray-800">ESELON 4</p>
                                        </div>
                                    </div>
                                    <div class="">
                                        <div class="flex flex-col space-y-2">
                                            <span class="font-bold text-dark">EMAIL</span>
                                            <p class="text-gray-800">handoko.dishubla@dishubla.go.id</p>
                                        </div>
                                    </div>
                                    <div class="">
                                        <div class="flex flex-col space-y-2">
                                            <span class="font-bold text-dark">NOMOR TELEPON</span>
                                            <p class="text-gray-800">08128829191238</p>
                                        </div>
                                    </div>
                                    <div class="">
                                        <div class="flex flex-col space-y-2">
                                            <span class="font-bold text-dark">STATUS PEGAWAI</span>
                                            <p class="text-gray-800">PNS</p>
                                        </div>
                                    </div>
                                    <div class="">
                                        <div class="flex flex-col space-y-2">
                                            <span class="font-bold text-dark">ALAMAT</span>
                                            <p class="text-gray-800">Jl. Raya Cilincing Rorotan, Jakarta Utara</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            
                        </div>
                    </div>

                    
                </div>
                <div class="card-footer flex justify-between items-center border-t border-gray-300">
                    <a href="/home" class="text-primary hover:underline hover:font-semibold">< Kembali ke Beranda</a>
                    {{-- modal Warning --}}
                    <div x-data="{ open: false }" class="relative">
                        <button @click="open=true" id="btnFilterAscDesc" class="btn-sm-danger focus:outline-none">
                            Nonaktifkan Akun
                        </button>
                        <div x-show="open" @click.away="open = false"  x-init="setTimeout(() => show = false, 8000)" id="1"
                            x-transition:enter="transition duration-200 transform ease-out"
                            x-transition:enter-start="scale-75"
                            x-transition:leave="transition duration-100 transform ease-in"
                            x-transition:leave-end="opacity-0 scale-90" class=" overlay-modal fixed flex items-center justify-center z-50 w-screen h-screen flex inset-0" style="background-color: rgba(0,0,0,0.2);">
                            <div class="modal relative bg-white overflow-hidden rounded-xl w-96 h-auto z-50">
                                <div class="modal-header flex text-primary font-semibold items-center justify-between py-1 px-4">
                                    <div></div>
                                    <div>
                                        <a href="#" @click="open=false">
                                            <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8 text-disabled" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                                            </svg>
                                        </a>
                                    </div>
                                </div>
                                <div class="p-7 flex flex-col items-center justify-center modal-body">
                                    <span class="w-18 h-18 mb-2 rounded-full overflow-hidden mb-5">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="w-24 h-24" viewBox="0 0 175.978 175.978">
                                            <g id="Group_3454" data-name="Group 3454" transform="translate(3.5 3.5)">
                                            <g id="Group_3451" data-name="Group 3451" transform="translate(-929.75 -338.654)">
                                                <path id="Stroke_1" data-name="Stroke 1" d="M84.489,0A84.489,84.489,0,1,1,0,84.489,84.491,84.491,0,0,1,84.489,0Z" transform="translate(929.75 338.654)" fill="none" stroke="#fdb815" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" stroke-width="7"/>
                                            </g>
                                            <line id="Line_34" data-name="Line 34" y2="72" transform="translate(84.488 31.479)" fill="none" stroke="#fdb815" stroke-linecap="round" stroke-width="10"/>
                                            <circle id="Ellipse_56" data-name="Ellipse 56" cx="5.5" cy="5.5" r="5.5" transform="translate(79.488 117.979)" fill="#fdb815"/>
                                            </g>
                                        </svg>        
                                    </span>

                                    <h2 class="text-3xl text-dark font-bold mb-4">PERINGATAN !</h2>
                                    <p class="text-base font-medium text-center text-gray-800"> Yakin ingin menonaktifkan akun ini ?</p>
                                    <div class="flex items-center justify-center space-x-3 mt-6">
                                        <button @click="open=false" type="button" class="btn-disabled focus:outline-none">
                                            Batal
                                        </button>
                                        <a href="#" class="btn-danger focus:outline-none">Nonaktifkan</a>
                                    </div>
                                </div>
                                
                            </div>
                        </div>
                    </div>
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
