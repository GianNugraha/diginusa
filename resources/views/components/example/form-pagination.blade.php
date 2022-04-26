@extends("layouts.main", ['title' => 'Form Pagination'])
@section("content")

{{-- Desktop --}}
<section class="content hidden md:flex flex-col space-y-4 px-5 pb-10">

    <div class="flex gap-5">

        <div class="w-full" x-data="{ openTab: 1 }">
            <div class="card card-light" >
                <div class="card-header">
                    <div class="title-card-head text-primary">
                        <h2 class="font-semibold">Form Pagination</h2>
                    </div>
                </div>
                <div class="card-body">
                    <form action="" method="GET">
                        <div class="" x-show="openTab === 1">
                            <div class="min-h-32">
                                <div class="flex flex-wrap space-y-5">
                                    <div class="flex items-center w-full space-x-5">
                                        <div class="form-group">
                                            <label class="label-form-dark">Label</label>
                                            <input type="text" class="form-control-secondary" placeholder="Text">
                                        </div>
                                    </div>
                                    <div class="flex items-center w-full space-x-5">
                                        <div class="form-group">
                                            <label class="label-form-dark">Label</label>
                                            <input type="text" class="form-control-secondary" placeholder="Text">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            {{-- button --}}
                            <div class="bg-white py-5 rounded-lg flex items-center justify-between">
                                <div class="ml-0 lg:ml-3">
                                    <span class="font-bold text-2xl">
                                        <span><</span>
                                        <span class="text-primary">1</span>
                                        <span>/</span>
                                        <span>2</span>
                                        <span>></span>
                                    </span>
                                </div>
                                <div class="flex items-center justify-end space-x-3">
                                    <button type="button" class="btn-primary focus:outline-none" @click="openTab = 2">Lanjutkan</button>
                                </div>
                            </div>
                        </div>
                        <div class="" x-show="openTab === 2">
                            <div class="min-h-32">
                                <div class="flex flex-wrap space-y-5">
                                    <div class="flex items-center w-full space-x-5">
                                        <div class="form-group">
                                            <label class="label-form-dark">Label 2</label>
                                            <input type="text" class="form-control-secondary" placeholder="Text">
                                        </div>
                                    </div>
                                    <div class="flex items-center w-full space-x-5">
                                        <div class="form-group">
                                            <label class="label-form-dark">Label 2</label>
                                            <input type="text" class="form-control-secondary" placeholder="Text">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            {{-- button --}}
                            <div class="bg-white py-5 rounded-lg flex items-center justify-between">
                                <div class="ml-0 lg:ml-3">
                                    <span class="font-bold text-2xl">
                                        <span><</span>
                                        <span class="text-primary">2</span>
                                        <span>/</span>
                                        <span>2</span>
                                        <span>></span>
                                    </span>
                                </div>
                                <div class="flex items-center justify-end space-x-3">
                                    <button type="button" class="btn-primary focus:outline-none" @click="openTab = 1">Sebelumnya</button>
                                    <div x-data="{ open: false }" class="relative">
                                        <button @click="open=true" type="button" id="btnFilterAscDesc" class="btn-primary focus:outline-none">
                                            Simpan
                                        </button>
                                        <div x-show="open" @click.away="open = false"  x-init="setTimeout(() => show = false, 8000)" id="1"
                                            x-transition:enter="transition duration-200 transform ease-out"
                                            x-transition:enter-start="scale-75"
                                            x-transition:leave="transition duration-100 transform ease-in"
                                            x-transition:leave-end="opacity-0 scale-90" class=" overlay-modal fixed flex items-center justify-center z-50 w-screen h-screen flex inset-0" style="background-color: rgba(0,0,0,0.2);">
                                            <div class="modal relative bg-white overflow-hidden rounded-xl w-96 h-auto z-50">
                                                <div class="modal-header flex bg-light text-primary font-semibold items-center justify-between py-4 px-4">
                                                    <div></div>
                                                    <div>
                                                        <a href="#" @click="open=false">
                                                            <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8 text-secondary" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                                                            </svg>
                                                        </a>
                                                    </div>
                                                </div>
                                                <div class="p-7 flex flex-col items-center justify-center modal-body">
                                                    <span class="w-18 h-18 mb-5">
                                                          <img src="{{asset('assets/images/simlog-logo-dark.png')}}" class="h-20 w-20" alt="">
                                                    </span>
                        
                                                    <h2 class="text-3xl text-secondary font-bold mb-4">PERINGATAN!</h2>
                                                    <p class="text-base font-medium text-center text-gray-800"> Yakin ingin menyimpan data ?</p>
                                                    <div class="w-full flex items-center justify-center space-x-2">
                                                        <button @click="open=false" type="button" class="btn-disabled mt-5 focus:outline-none">
                                                            Batal
                                                        </button>
                                                        <button type="submit" class="btn-primary mt-5 focus:outline-none">
                                                            Ya, Simpan
                                                        </button>
                                                    </div>
                                                </div>
                                                
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </form>
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
