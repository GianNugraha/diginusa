@extends("layouts.main", ['title' => 'Tables'])
@section("content")

{{-- Desktop --}}
<section class="content hidden md:flex flex-col space-y-4 px-5">


    <div class="flex flex-col bg-white rounded-md p-5">
        <h2 class="mb-3">Simple Table</h2>


        <div class="space-y-3 xl:space-y-0 2xl:space-y-0 flex flex-col-reverse xl:flex-row 2xl:flex-row items-center justify-center xl:justify-between 2xl:justify-between lg:w-full">
            <div class="w-full xl:w-1/2 2xl:w-1/2 search-table flex items-center space-x-4">
                <form action="" class="w-full xl:w-96 2xl:w-96">
                    <div class="form-group">
                        <div class="form-group-append">
                            <input type="text" class="form-control-secondary input-form h-full" placeholder="Cari Data">
                            <span class="append-secondary">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-light" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z" />
                                  </svg>
                            </span>
                        </div>
                    </div>
                </form>
               
                <div x-data="{ open: false }" class="relative">
                    <button @click="open=true" id="btnFilterAscDesc" class="btn-secondary focus:outline-none">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z" />
                          </svg>
                    </button>
                    <div x-show="open" @click.away="open = false"  x-init="setTimeout(() => show = false, 8000)" id="1"
                        x-transition:enter="transition duration-200 transform ease-out"
                        x-transition:enter-start="scale-75"
                        x-transition:leave="transition duration-100 transform ease-in"
                        x-transition:leave-end="opacity-0 scale-90" class=" overlay-modal fixed flex items-center justify-center z-50 w-screen h-screen flex inset-0" style="background-color: rgba(0,0,0,0.5);">
                        <div class="modal relative bg-white overflow-hidden rounded-xl w-96 h-96 z-50">
                            <div class="modal-header flex bg-light text-primary font-semibold items-center justify-between py-4 px-4">
                                <div><span class="text-lg">Pencarian Rentang Tanggal</span></div>
                                <div>
                                    <a href="#" @click="open=false">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                                        </svg>
                                    </a>
                                </div>
                            </div>
                            <div class="modal-body p-5">
                                <form action="" class="flex flex-col items-center space-y-4">
                                    <div class="form-group">
                                        <label class="label-form-dark">Tanggal Awal</label>
                                        <input type="date" class="form-control-secondary" placeholder="date1">
                                    </div>
                                    <div class="form-group">
                                        <label class="label-form-dark">Tanggal Akhir</label>
                                        <input type="date" class="form-control-secondary" placeholder="date1">
                                    </div>
                                    <div class="flex w-full ">
                                        <button type="submit" class="btn-secondary w-full mt-3">Cari Data</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>


            </div>
            <div class="w-full lg:w-1/2 flex items-center justify-end">
                <a href="#" class="btn-cap-secondary">
                    <span class="label-button">Tambah Data</span> 
                    <span class="cap-button">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
                            <path fill-rule="evenodd" d="M10 3a1 1 0 011 1v5h5a1 1 0 110 2h-5v5a1 1 0 11-2 0v-5H4a1 1 0 110-2h5V4a1 1 0 011-1z" clip-rule="evenodd" />
                        </svg>
                    </span> 
                </a>
            </div>
        </div>
        <!-- table -->
        <div class="overflow-x-auto overflow-y-auto">
            <div class="my-6">
                <table class="table-primary table-auto my-3">
                    <thead class="">
                        <tr>
                            <th class="text-left">#</th>
                            <th class="text-left">Head 1</th>
                            <th class="text-left">Head 2</th>
                            <th class="text-left">Head 3</th>
                            <th class="text-center">Action</th>
                        </tr>
                    </thead>
                    <tbody class="">

                        @for ($i = 1; $i <= 4; $i++)
                            <tr>
                                <td>{{$i}}</td>
                                <td>Field</td>
                                <td>Field</td>
                                <td>Field</td>
                                <td class="">
                                    <div class="flex items-center justify-center space-x-2 text-center">
                                        <a href="#" class="btn-sm-dark">
                                            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-light" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-1.414-9.414a2 2 0 112.828 2.828L11.828 15H9v-2.828l8.586-8.586z" />
                                              </svg>
                                        </a>
                                        <div x-data="{ open: false }">
                                            <a href="#" @click="open=true" class="btn-sm-danger" data-target="1">    
                                                  <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-light" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16" />
                                                  </svg>                                      
                                            </a>
                                            <div x-show="open" @click.away="open = false"  x-init="setTimeout(() => show = false, 8000)" id="1"
                                                x-transition:enter="transition duration-200 transform ease-out"
                                                x-transition:enter-start="scale-75"
                                                x-transition:leave="transition duration-100 transform ease-in"
                                                x-transition:leave-end="opacity-0 scale-90" class=" overlay-modal fixed flex items-center justify-center z-50 w-screen h-screen flex inset-0" style="background-color: rgba(0,0,0,0.5);">
                                                <div class="modal relative bg-white overflow-hidden rounded-xl w-96 h-auto z-50">
                                                    <div class="modal-header flex items-center justify-between py-2 px-2">
                                                        <div></div>
                                                        <div>
                                                            <a href="#" @click="open=false">
                                                                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                                                                </svg>
                                                            </a>
                                                        </div>
                                                    </div>
                                                    <div class="p-3 pb-32 flex flex-col items-center justify-center modal-body">
                                                        <span class="w-18 h-18 mb-2 rounded-full overflow-hidden p-3">
                                                            <img class="logo-brand w-14 h-14" src="{{url('assets/images/simlog-logo-dark.png')}}">
                                                        </span>
                        
                                                        <h2 class="text-3xl font-bold mb-4">SIMLOG</h2>
                                                        <p class="text-base font-medium text-center text-gray-800"> Yakin ingin hapus data ?</p>
                        
                                                    </div>
                                                    <div class="modal-footer absolute inset-x-0 bottom-0 bg-gray-100 flex items-center justify-center py-3 space-x-2">
                                                        <button @click="open=false" type="button" class="btn-sm-disabled focus:outline-none">
                                                            Batal
                                                        </button>
                                                        <form action="" method="get">
                                                            @csrf
                                                            <input type="hidden" name="id" value="">
                                                            <button type="submit" class="btn-sm-danger focus:outline-none">
                                                                Hapus
                                                            </button>
                                                        </form>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </td>
                            </tr>
                        @endfor
                        
                    </tbody>
                </table>
            </div>
        </div>

    </div>

    <div class="flex flex-col bg-white rounded-md p-5">
        <h2 class="mb-3">Simple Table</h2>


        <div class="space-y-3 xl:space-y-0 2xl:space-y-0 flex flex-col-reverse xl:flex-row 2xl:flex-row items-center justify-center xl:justify-between 2xl:justify-between lg:w-full">
            <div class="w-full xl:w-1/2 2xl:w-1/2 search-table flex items-center space-x-4">
                <form action="" class="w-full xl:w-96 2xl:w-96">
                    <div class="form-group">
                        <div class="form-group-append">
                            <input type="text" class="form-control-secondary input-form h-full" placeholder="Cari Data">
                            <span class="append-secondary">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-light" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z" />
                                  </svg>
                            </span>
                        </div>
                    </div>
                </form>
               
                <div x-data="{ open: false }" class="relative">
                    <button @click="open=true" id="btnFilterAscDesc" class="btn-secondary focus:outline-none">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z" />
                          </svg>
                    </button>
                    <div x-show="open" @click.away="open = false"  x-init="setTimeout(() => show = false, 8000)" id="1"
                        x-transition:enter="transition duration-200 transform ease-out"
                        x-transition:enter-start="scale-75"
                        x-transition:leave="transition duration-100 transform ease-in"
                        x-transition:leave-end="opacity-0 scale-90" class=" overlay-modal fixed flex items-center justify-center z-50 w-screen h-screen flex inset-0" style="background-color: rgba(0,0,0,0.5);">
                        <div class="modal relative bg-white overflow-hidden rounded-xl w-96 h-96 z-50">
                            <div class="modal-header flex bg-light text-primary font-semibold items-center justify-between py-4 px-4">
                                <div><span class="text-lg">Pencarian Rentang Tanggal</span></div>
                                <div>
                                    <a href="#" @click="open=false">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                                        </svg>
                                    </a>
                                </div>
                            </div>
                            <div class="modal-body p-5">
                                <form action="" class="flex flex-col items-center space-y-4">
                                    <div class="form-group">
                                        <label class="label-form-dark">Tanggal Awal</label>
                                        <input type="date" class="form-control-secondary" placeholder="date1">
                                    </div>
                                    <div class="form-group">
                                        <label class="label-form-dark">Tanggal Akhir</label>
                                        <input type="date" class="form-control-secondary" placeholder="date1">
                                    </div>
                                    <div class="flex w-full ">
                                        <button type="submit" class="btn-secondary w-full mt-3">Cari Data</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>


            </div>
            <div class="w-full lg:w-1/2 flex items-center justify-end">
                <a href="#" class="btn-cap-secondary">
                    <span class="label-button">Tambah Data</span> 
                    <span class="cap-button">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
                            <path fill-rule="evenodd" d="M10 3a1 1 0 011 1v5h5a1 1 0 110 2h-5v5a1 1 0 11-2 0v-5H4a1 1 0 110-2h5V4a1 1 0 011-1z" clip-rule="evenodd" />
                        </svg>
                    </span> 
                </a>
            </div>
        </div>
        <!-- table -->
        <div class="overflow-x-auto overflow-y-auto">
            <div class="my-6">
                <table class="table-danger table-auto my-3" >
                    <thead class="">
                        <tr>
                            <th class="text-left">#</th>
                            <th class="text-left">Head 1</th>
                            <th class="text-left">Head 2</th>
                            <th class="text-left">Head 3</th>
                            <th class="text-center">Action</th>
                        </tr>
                    </thead>
                    <tbody class="">

                        @for ($i = 1; $i <= 4; $i++)
                            <tr>
                                <td>{{$i}}</td>
                                <td>Field</td>
                                <td>Field</td>
                                <td>Field</td>
                                <td class="">
                                    <div class="flex items-center justify-center space-x-2 text-center">
                                        <a href="#" class="btn-sm-dark">
                                            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-light" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-1.414-9.414a2 2 0 112.828 2.828L11.828 15H9v-2.828l8.586-8.586z" />
                                              </svg>
                                        </a>
                                        <div x-data="{ open: false }">
                                            <a href="#" @click="open=true" class="btn-sm-danger" data-target="1">    
                                                  <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-light" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16" />
                                                  </svg>                                      
                                            </a>
                                            <div x-show="open" @click.away="open = false"  x-init="setTimeout(() => show = false, 8000)" id="1"
                                                x-transition:enter="transition duration-200 transform ease-out"
                                                x-transition:enter-start="scale-75"
                                                x-transition:leave="transition duration-100 transform ease-in"
                                                x-transition:leave-end="opacity-0 scale-90" class=" overlay-modal fixed flex items-center justify-center z-50 w-screen h-screen flex inset-0" style="background-color: rgba(0,0,0,0.5);">
                                                <div class="modal relative bg-white overflow-hidden rounded-xl w-96 h-auto z-50">
                                                    <div class="modal-header flex items-center justify-between py-2 px-2">
                                                        <div></div>
                                                        <div>
                                                            <a href="#" @click="open=false">
                                                                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                                                                </svg>
                                                            </a>
                                                        </div>
                                                    </div>
                                                    <div class="p-3 pb-32 flex flex-col items-center justify-center modal-body">
                                                        <span class="w-18 h-18 mb-2 rounded-full overflow-hidden p-3">
                                                            <img class="logo-brand w-14 h-14" src="{{url('assets/images/simlog-logo-dark.png')}}">
                                                        </span>
                        
                                                        <h2 class="text-3xl font-bold mb-4">SIMLOG</h2>
                                                        <p class="text-base font-medium text-center text-gray-800"> Yakin ingin hapus data ?</p>
                        
                                                    </div>
                                                    <div class="modal-footer absolute inset-x-0 bottom-0 bg-gray-100 flex items-center justify-center py-3 space-x-2">
                                                        <button @click="open=false" type="button" class="btn-sm-disabled focus:outline-none">
                                                            Batal
                                                        </button>
                                                        <form action="" method="get">
                                                            @csrf
                                                            <input type="hidden" name="id" value="">
                                                            <button type="submit" class="btn-sm-danger focus:outline-none">
                                                                Hapus
                                                            </button>
                                                        </form>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </td>
                            </tr>
                        @endfor
                        
                    </tbody>
                </table>
            </div>
        </div>

    </div>

    <div class="flex flex-col bg-white rounded-md p-5">
        <h2 class="mb-3">Datatable</h2>


        <div class="space-y-3 xl:space-y-0 2xl:space-y-0 flex flex-col-reverse xl:flex-row 2xl:flex-row items-center justify-center xl:justify-between 2xl:justify-between lg:w-full">
            <div class="w-full xl:w-1/2 2xl:w-1/2 search-table flex items-center space-x-4">
                <form action="" class="w-full xl:w-96 2xl:w-96">
                    <div class="form-group">
                        <div class="form-group-append">
                            <input type="text" id="saerchOutside" class="form-control-secondary input-form h-full" placeholder="Cari Data">
                            <span class="append-secondary">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-light" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z" />
                                  </svg>
                            </span>
                        </div>
                    </div>
                </form>
               
                <div x-data="{ open: false }" class="relative">
                    <button @click="open=true" id="btnFilterAscDesc" class="btn-secondary focus:outline-none">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z" />
                          </svg>
                    </button>
                    <div x-show="open" @click.away="open = false"  x-init="setTimeout(() => show = false, 8000)" id="1"
                        x-transition:enter="transition duration-200 transform ease-out"
                        x-transition:enter-start="scale-75"
                        x-transition:leave="transition duration-100 transform ease-in"
                        x-transition:leave-end="opacity-0 scale-90" class=" overlay-modal fixed flex items-center justify-center z-50 w-screen h-screen flex inset-0" style="background-color: rgba(0,0,0,0.5);">
                        <div class="modal relative bg-white overflow-hidden rounded-xl w-96 h-96 z-50">
                            <div class="modal-header flex bg-light text-primary font-semibold items-center justify-between py-4 px-4">
                                <div><span class="text-lg">Pencarian Rentang Tanggal</span></div>
                                <div>
                                    <a href="#" @click="open=false">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                                        </svg>
                                    </a>
                                </div>
                            </div>
                            <div class="modal-body p-5">
                                <form action="" class="flex flex-col items-center space-y-4">
                                    <div class="form-group">
                                        <label class="label-form-dark">Tanggal Awal</label>
                                        <input type="date" class="form-control-secondary" placeholder="date1">
                                    </div>
                                    <div class="form-group">
                                        <label class="label-form-dark">Tanggal Akhir</label>
                                        <input type="date" class="form-control-secondary" placeholder="date1">
                                    </div>
                                    <div class="flex w-full ">
                                        <button type="submit" class="btn-secondary w-full mt-3">Cari Data</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>


            </div>
            <div class="w-full lg:w-1/2 flex items-center justify-end">
                <a href="#" class="btn-cap-secondary">
                    <span class="label-button">Tambah Data</span> 
                    <span class="cap-button">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
                            <path fill-rule="evenodd" d="M10 3a1 1 0 011 1v5h5a1 1 0 110 2h-5v5a1 1 0 11-2 0v-5H4a1 1 0 110-2h5V4a1 1 0 011-1z" clip-rule="evenodd" />
                        </svg>
                    </span> 
                </a>
            </div>
        </div>
        <!-- table -->
        <div class="overflow-x-auto overflow-y-auto">
            <div class="my-6">
                <table id="table-3" class="table table-auto my-3" data-ordering="true" data-paging="true"  data-searching="true">
                    <thead class="">
                        <tr>
                            <th class="text-left">#</th>
                            <th class="text-left">Head 1</th>
                            <th class="text-left">Head 2</th>
                            <th class="text-left">Head 3</th>
                            <th class="text-center">Action</th>
                        </tr>
                    </thead>
                    <tbody class="">

                        @for ($i = 1; $i <= 4; $i++)
                            <tr>
                                <td>{{$i}}</td>
                                <td>Field</td>
                                <td>Field</td>
                                <td>Field</td>
                                <td class="">
                                    <div class="flex items-center justify-center space-x-2 text-center">
                                        <a href="#" class="btn-sm-dark">
                                            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-light" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-1.414-9.414a2 2 0 112.828 2.828L11.828 15H9v-2.828l8.586-8.586z" />
                                              </svg>
                                        </a>
                                        <div x-data="{ open: false }">
                                            <a href="#" @click="open=true" class="btn-sm-danger" data-target="1">    
                                                  <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-light" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16" />
                                                  </svg>                                      
                                            </a>
                                            <div x-show="open" @click.away="open = false"  x-init="setTimeout(() => show = false, 8000)" id="1"
                                                x-transition:enter="transition duration-200 transform ease-out"
                                                x-transition:enter-start="scale-75"
                                                x-transition:leave="transition duration-100 transform ease-in"
                                                x-transition:leave-end="opacity-0 scale-90" class=" overlay-modal fixed flex items-center justify-center z-50 w-screen h-screen flex inset-0" style="background-color: rgba(0,0,0,0.5);">
                                                <div class="modal relative bg-white overflow-hidden rounded-xl w-96 h-auto z-50">
                                                    <div class="modal-header flex items-center justify-between py-2 px-2">
                                                        <div></div>
                                                        <div>
                                                            <a href="#" @click="open=false">
                                                                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                                                                </svg>
                                                            </a>
                                                        </div>
                                                    </div>
                                                    <div class="p-3 pb-32 flex flex-col items-center justify-center modal-body">
                                                        <span class="w-18 h-18 mb-2 rounded-full overflow-hidden p-3">
                                                            <img class="logo-brand w-14 h-14" src="{{url('assets/images/simlog-logo-dark.png')}}">
                                                        </span>
                        
                                                        <h2 class="text-3xl font-bold mb-4">SIMLOG</h2>
                                                        <p class="text-base font-medium text-center text-gray-800"> Yakin ingin hapus data ?</p>
                        
                                                    </div>
                                                    <div class="modal-footer absolute inset-x-0 bottom-0 bg-gray-100 flex items-center justify-center py-3 space-x-2">
                                                        <button @click="open=false" type="button" class="btn-sm-disabled focus:outline-none">
                                                            Batal
                                                        </button>
                                                        <form action="" method="get">
                                                            @csrf
                                                            <input type="hidden" name="id" value="">
                                                            <button type="submit" class="btn-sm-danger focus:outline-none">
                                                                Hapus
                                                            </button>
                                                        </form>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </td>
                            </tr>
                        @endfor
                        
                    </tbody>
                </table>
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