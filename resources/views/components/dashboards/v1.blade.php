@extends("layouts.main", ['title' => 'Dashboard V1'])
@section("content")

{{-- Desktop --}}
<section class="content hidden md:flex flex-col space-y-4 gap-6 px-5 pb-10">

    <div class="grid grid-cols-1 md:grid-cols-2 gap-7">
        <div class="">
            <div class="card flex flex-row card-light">
                <div class="flex items-start justify-center w-16 px-3 py-5">
                    <span class="relative flex h-6 w-6">
                        <span class="animate-ping absolute inline-flex h-full w-full rounded-full bg-warning opacity-75"></span>
                        <span class="relative inline-flex items-center justify-center rounded-full h-6 w-6 bg-warning">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 17h5l-1.405-1.405A2.032 2.032 0 0118 14.158V11a6.002 6.002 0 00-4-5.659V5a2 2 0 10-4 0v.341C7.67 6.165 6 8.388 6 11v3.159c0 .538-.214 1.055-.595 1.436L4 17h5m6 0v1a3 3 0 11-6 0v-1m6 0H9" />
                              </svg>
                        </span>
                      </span>
                </div>
                <div class=" w-full">
                    <div class="card-header">
                        <div class="cta-card-head">
                            <h5 class="text-dark">Notifikasi</h5>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="bg-gray-100 p-3 overflow-x-hidden overflow-y-auto max-h-28">
                            @for ($i = 0; $i < 100; $i++)
                            <a href="#" class="flex flex-col space-y-3 px-3 py-2 text-sm bg-gray-100  hover:bg-blue-400 hover:text-white">
                                <h6 class="font-bold">Permintaan Barang</h6>
                                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsa, perspiciatis sed. Sunt blanditiis vitae sapiente adipisci praesentium in ipsum repudiandae.</p>
                            </a>
                            @endfor
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="grid grid-cols-3 gap-6">
            <div class="card card-light">
                <div class="card-header">
                    <div class="title-card-head">
                        <svg xmlns="http://www.w3.org/2000/svg" width="26.285" height="22.051" viewBox="0 0 26.285 22.051">
                            <g id="Icon_feather-truck" data-name="Icon feather-truck" transform="translate(0 -3)">
                                <path id="Path_745" data-name="Path 745" d="M1.5,4.5H17.376V18.259H1.5Z" fill="none"
                                    stroke="#ff9f24" stroke-linecap="round" stroke-linejoin="round" stroke-width="3" />
                                <path id="Path_746" data-name="Path 746" d="M24,12h4.234l3.175,3.175v5.292H24Z"
                                    transform="translate(-6.624 -2.208)" fill="none" stroke="#ff9f24" stroke-linecap="round"
                                    stroke-linejoin="round" stroke-width="3" />
                                <path id="Path_747" data-name="Path 747"
                                    d="M9.792,26.646A2.646,2.646,0,1,1,7.146,24a2.646,2.646,0,0,1,2.646,2.646Z"
                                    transform="translate(-0.883 -5.741)" fill="none" stroke="#ff9f24" stroke-linecap="round"
                                    stroke-linejoin="round" stroke-width="3" />
                                <path id="Path_748" data-name="Path 748"
                                    d="M29.292,26.646A2.646,2.646,0,1,1,26.646,24a2.646,2.646,0,0,1,2.646,2.646Z"
                                    transform="translate(-6.624 -5.741)" fill="none" stroke="#ff9f24" stroke-linecap="round"
                                    stroke-linejoin="round" stroke-width="3" />
                            </g>
                        </svg>
    
                    </div>
                    <div class="cta-card-head">
                        <span class="text-warning text-base">BARANG MASUK</span>
                    </div>
                </div>
                <div class="card-body">
                    <div class="mt-5 mb-2">
                        <h3 class="font-bold">191,344</h3>
                        <span class="text-disabled font-semibold">Jumlah Barang</span>
                    </div>
                </div>
            </div>
            <div class="card card-light">
                <div class="card-header">
                    <div class="title-card-head">
                        <svg xmlns="http://www.w3.org/2000/svg" width="23.912" height="23.912" viewBox="0 0 23.912 23.912">
                            <g id="Icon_feather-log-out" data-name="Icon feather-log-out" transform="translate(-3 -3)">
                                <path id="Path_749" data-name="Path 749"
                                    d="M11.471,25.412H6.824A2.324,2.324,0,0,1,4.5,23.089V6.824A2.324,2.324,0,0,1,6.824,4.5h4.647"
                                    fill="none" stroke="#e8264f" stroke-linecap="round" stroke-linejoin="round"
                                    stroke-width="3" />
                                <path id="Path_750" data-name="Path 750" d="M24,22.118l5.809-5.809L24,10.5"
                                    transform="translate(-4.397 -1.353)" fill="none" stroke="#e8264f" stroke-linecap="round"
                                    stroke-linejoin="round" stroke-width="3" />
                                <path id="Path_751" data-name="Path 751" d="M27.441,18H13.5"
                                    transform="translate(-2.029 -3.044)" fill="none" stroke="#e8264f" stroke-linecap="round"
                                    stroke-linejoin="round" stroke-width="3" />
                            </g>
                        </svg>
    
                    </div>
                    <div class="cta-card-head">
                        <span class="text-danger text-base">BARANG KELUAR</span>
                    </div>
                </div>
                <div class="card-body">
                    <div class="mt-5 mb-2">
                        <h3 class="font-bold">191,344</h3>
                        <span class="text-disabled font-semibold">Jumlah Barang</span>
                    </div>
                </div>
            </div>
            <div class="card card-light">
                <div class="card-header">
                    <div class="title-card-head">
                        <svg xmlns="http://www.w3.org/2000/svg" width="19.307" height="15.445" viewBox="0 0 19.307 15.445">
                            <path id="Icon_material-storage" data-name="Icon material-storage"
                                d="M3,21.445H22.307V17.584H3Zm1.931-2.9H6.861V20.48H4.931ZM3,6V9.861H22.307V6ZM6.861,8.9H4.931V6.965H6.861ZM3,15.653H22.307V11.792H3Zm1.931-2.9H6.861v1.931H4.931Z"
                                transform="translate(-3 -6)" fill="#333" />
                        </svg>
    
                    </div>
                    <div class="cta-card-head">
                        <span class="text-dark text-base">STOK BARANG</span>
                    </div>
                </div>
                <div class="card-body">
                    <div class="mt-5 mb-2">
                        <h3 class="font-bold">191,344</h3>
                        <span class="text-disabled font-semibold">Jumlah Barang</span>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="flex gap-7">

        <div class="w-full md:w-1/2" x-data="{ open: true, show:true }">
            <div class="card card-light" x-show="open">
                <div class="card-header">
                    <div class="title-card-head">Permintaan Per Kelompok</div>
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
                    <div id="chart"></div>
                </div>
                <div class="card-footer" x-show="show"></div>
            </div>
        </div>
        <div class="w-full md:w-1/2" x-data="{ open: true, show:true }">
            <div class="card card-light" x-show="open">
                <div class="card-header">
                    <div class="title-card-head">Jumlah BON Permintaan</div>
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
                    <div id="chart2"></div>
                </div>
                <div class="card-footer" x-show="show"></div>
            </div>
        </div>

    </div>

    <div class="flex gap-7">

        <div class="flex flex-col gap-7 w-full md:w-3/5" x-data="{ open: true, show:true }">
            <div class="card card-light" x-show="open">
                <div class="card-header">
                    <div class="title-card-head">Barang Paling Sering Diminta</div>
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
                    <table class="table-disabled table-auto my-3" data-ordering="true" data-paging="true"
                        data-searching="true">
                        <thead class="">
                            <tr>
                                <th class="text-left">#</th>
                                <th class="text-left">Nama Barang</th>
                                <th class="text-left">Kategori</th>
                                <th class="text-left">Jumlah</th>
                            </tr>
                        </thead>
                        <tbody class="">

                            @for ($i = 1; $i <= 4; $i++)
                                <tr>
                                <td>{{$i}}</td>
                                <td>Laptop</td>
                                <td>Inventaris</td>
                                <td>12{{$i}}</td>
                                </tr>
                            @endfor

                        </tbody>
                    </table>
                </div>
                <div class="card-footer" x-show="show"></div>
            </div>

            <div class="card card-light" x-show="open">
                <div class="card-header">
                    <div class="title-card-head">Permintaan Terbaru</div>
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
                    <table class="table-disabled table-auto my-3" data-ordering="true" data-paging="true"
                        data-searching="true">
                        <thead class="">
                            <tr>
                                <th class="text-left">#</th>
                                <th class="text-left">Nama User</th>
                                <th class="text-left">Bidang / Bagian</th>
                                <th class="text-left">Tanggal</th>
                            </tr>
                        </thead>
                        <tbody class="">

                            @for ($i = 1; $i <= 4; $i++)
                                <tr>
                                <td>{{$i}}</td>
                                <td>Ginanjar {{$i}}</td>
                                <td>Telkompel</td>
                                <td>{{$i}}/10/2021</td>
                                </tr>
                            @endfor

                        </tbody>
                    </table>
                </div>
                <div class="card-footer" x-show="show"></div>
            </div>
        </div>
        <div class="w-full md:w-2/5" x-data="{ open: true, show:true }">
            <div class="card card-light" x-show="open">
                <div class="card-header">
                    <div class="title-card-head text-dark">Status Permintaan Barang</div>
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

                    <div class="tabulator-tracking flex flex-col space-y-4 mb-10">
                        <div class="">
                            <h6 class="text-dark">SK. PENGADAAN 3</h6>
                            <span class="text-disabled text-sm">16/09/2021 14:03</span>
                        </div>

                        <div class="navigation-indicator-tab flex justify-between items-center w-full">
                            <a href="#"
                                class="h-9 w-9 bg-primary flex justify-center items-center p-2 rounded-full overflow-hidden">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-white" fill="none"
                                    viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M5 13l4 4L19 7" />
                                </svg>
                            </a>
                            <span class="bg-primary w-auto h-1 flex-1">&nbsp;</span>
                            <a href="#"
                                class="h-9 w-9 bg-primary flex justify-center items-center p-2 rounded-full overflow-hidden">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-white" fill="none"
                                    viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M5 13l4 4L19 7" />
                                </svg>
                            </a>
                            <span class="bg-primary w-auto h-1 flex-1">&nbsp;</span>
                            <a href="#"
                                class="h-9 w-9 bg-primary flex justify-center items-center p-2 rounded-full overflow-hidden">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-white" fill="none"
                                    viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M5 13l4 4L19 7" />
                                </svg>
                            </a>
                            <span class="bg-disabled w-auto h-1 flex-1">&nbsp;</span>
                            <a href="#"
                                class="h-9 w-9 bg-disabled flex justify-center items-center p-2 rounded-full overflow-hidden">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-white" fill="none"
                                    viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M5 13l4 4L19 7" />
                                </svg>
                            </a>
                            <span class="bg-disabled w-auto h-1 flex-1">&nbsp;</span>
                            <a href="#"
                                class="h-9 w-9 bg-disabled flex justify-center items-center p-2 rounded-full overflow-hidden">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-white" fill="none"
                                    viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M5 13l4 4L19 7" />
                                </svg>
                            </a>
                        </div>

                        <div class="flex flex-col space-y-3">
                            <p>Sedang diproses.</p>
                            <div class="flex space-x-2 items-center">
                                <span>
                                    <svg xmlns="http://www.w3.org/2000/svg" width="13.857" height="16.834"
                                        viewBox="0 0 13.857 16.834">
                                        <g id="Iconly_Light_Location" data-name="Iconly/Light/Location"
                                            transform="translate(0.75 0.75)">
                                            <g id="Location">
                                                <path id="Path_33958"
                                                    d="M0,6.4A6.3,6.3,0,0,1,6.2,0a6.3,6.3,0,0,1,6.157,6.439v.073a9.63,9.63,0,0,1-2.8,6.1,16.389,16.389,0,0,1-2.89,2.471.728.728,0,0,1-.98,0,16.209,16.209,0,0,1-4.065-3.954A8.413,8.413,0,0,1,0,6.418Z"
                                                    transform="translate(0 0)" fill="none" stroke="#999"
                                                    stroke-linecap="round" stroke-linejoin="round"
                                                    stroke-miterlimit="10" stroke-width="1.5" />
                                                <ellipse id="Ellipse_740" cx="1.98" cy="2.057" rx="1.98" ry="2.057"
                                                    transform="translate(4.198 4.462)" fill="none" stroke="#999"
                                                    stroke-linecap="round" stroke-linejoin="round"
                                                    stroke-miterlimit="10" stroke-width="1.5" />
                                            </g>
                                        </g>
                                    </svg>
                                </span>
                                <p class="flex space-x-3">
                                    <span class="text-disabled">POSISI</span>
                                    <span>Kepala Distrik Navigasi </span>
                                </p>
                            </div>
                            <div class="flex space-x-2 items-center">
                                <span>
                                    <svg xmlns="http://www.w3.org/2000/svg" width="15.159" height="15.341"
                                        viewBox="0 0 15.159 15.341">
                                        <g id="Iconly_Light_Edit_Square" data-name="Iconly/Light/Edit Square"
                                            transform="translate(0.75 0.9)">
                                            <g id="Edit_Square" data-name="Edit Square">
                                                <path id="Stroke_1" data-name="Stroke 1"
                                                    d="M6.339,0H3.628A3.519,3.519,0,0,0,0,3.816V9.848a3.515,3.515,0,0,0,3.628,3.816h6.4a3.515,3.515,0,0,0,3.629-3.816V6.925"
                                                    transform="translate(0 0.028)" fill="none" stroke="#999"
                                                    stroke-linecap="round" stroke-linejoin="round"
                                                    stroke-miterlimit="10" stroke-width="1.5" />
                                                <path id="Stroke_3" data-name="Stroke 3"
                                                    d="M.529,5.928,5.948.506a1.729,1.729,0,0,1,2.444,0l.883.883a1.73,1.73,0,0,1,0,2.446L3.83,9.283a1.574,1.574,0,0,1-1.113.461H0L.068,7A1.575,1.575,0,0,1,.529,5.928Z"
                                                    transform="translate(3.878)" fill="none" stroke="#999"
                                                    stroke-linecap="round" stroke-linejoin="round"
                                                    stroke-miterlimit="10" stroke-width="1.5" />
                                                <path id="Stroke_5" data-name="Stroke 5" d="M0,0,3.311,3.313"
                                                    transform="translate(9.003 1.344)" fill="none" stroke="#999"
                                                    stroke-linecap="round" stroke-linejoin="round"
                                                    stroke-miterlimit="10" stroke-width="1.5" />
                                            </g>
                                        </g>
                                    </svg>
                                </span>
                                <p class="flex space-x-3">
                                    <span class="text-disabled">Keperluan</span>
                                    <span>Kebutuhan BBM periode Januari-Maret </span>
                                </p>
                            </div>
                        </div>
                    </div>


                    <div class="tabulator-tracking flex flex-col space-y-4 mb-10">
                        <div class="">
                            <h6 class="text-dark">SK. PENGADAAN 3</h6>
                            <span class="text-disabled text-sm">16/09/2021 14:03</span>
                        </div>

                        <div class="navigation-indicator-tab flex justify-between items-center w-full">
                            <a href="#"
                                class="h-9 w-9 bg-primary flex justify-center items-center p-2 rounded-full overflow-hidden">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-white" fill="none"
                                    viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M5 13l4 4L19 7" />
                                </svg>
                            </a>
                            <span class="bg-primary w-auto h-1 flex-1">&nbsp;</span>
                            <a href="#"
                                class="h-9 w-9 bg-primary flex justify-center items-center p-2 rounded-full overflow-hidden">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-white" fill="none"
                                    viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M5 13l4 4L19 7" />
                                </svg>
                            </a>
                            <span class="bg-primary w-auto h-1 flex-1">&nbsp;</span>
                            <a href="#"
                                class="h-9 w-9 bg-primary flex justify-center items-center p-2 rounded-full overflow-hidden">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-white" fill="none"
                                    viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M5 13l4 4L19 7" />
                                </svg>
                            </a>
                            <span class="bg-disabled w-auto h-1 flex-1">&nbsp;</span>
                            <a href="#"
                                class="h-9 w-9 bg-disabled flex justify-center items-center p-2 rounded-full overflow-hidden">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-white" fill="none"
                                    viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M5 13l4 4L19 7" />
                                </svg>
                            </a>
                            <span class="bg-disabled w-auto h-1 flex-1">&nbsp;</span>
                            <a href="#"
                                class="h-9 w-9 bg-disabled flex justify-center items-center p-2 rounded-full overflow-hidden">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-white" fill="none"
                                    viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M5 13l4 4L19 7" />
                                </svg>
                            </a>
                        </div>

                        <div class="flex flex-col space-y-3">
                            <p>Sedang diproses.</p>
                            <div class="flex space-x-2 items-center">
                                <span>
                                    <svg xmlns="http://www.w3.org/2000/svg" width="13.857" height="16.834"
                                        viewBox="0 0 13.857 16.834">
                                        <g id="Iconly_Light_Location" data-name="Iconly/Light/Location"
                                            transform="translate(0.75 0.75)">
                                            <g id="Location">
                                                <path id="Path_33958"
                                                    d="M0,6.4A6.3,6.3,0,0,1,6.2,0a6.3,6.3,0,0,1,6.157,6.439v.073a9.63,9.63,0,0,1-2.8,6.1,16.389,16.389,0,0,1-2.89,2.471.728.728,0,0,1-.98,0,16.209,16.209,0,0,1-4.065-3.954A8.413,8.413,0,0,1,0,6.418Z"
                                                    transform="translate(0 0)" fill="none" stroke="#999"
                                                    stroke-linecap="round" stroke-linejoin="round"
                                                    stroke-miterlimit="10" stroke-width="1.5" />
                                                <ellipse id="Ellipse_740" cx="1.98" cy="2.057" rx="1.98" ry="2.057"
                                                    transform="translate(4.198 4.462)" fill="none" stroke="#999"
                                                    stroke-linecap="round" stroke-linejoin="round"
                                                    stroke-miterlimit="10" stroke-width="1.5" />
                                            </g>
                                        </g>
                                    </svg>
                                </span>
                                <p class="flex space-x-3">
                                    <span class="text-disabled">POSISI</span>
                                    <span>Kepala Distrik Navigasi </span>
                                </p>
                            </div>
                            <div class="flex space-x-2 items-center">
                                <span>
                                    <svg xmlns="http://www.w3.org/2000/svg" width="15.159" height="15.341"
                                        viewBox="0 0 15.159 15.341">
                                        <g id="Iconly_Light_Edit_Square" data-name="Iconly/Light/Edit Square"
                                            transform="translate(0.75 0.9)">
                                            <g id="Edit_Square" data-name="Edit Square">
                                                <path id="Stroke_1" data-name="Stroke 1"
                                                    d="M6.339,0H3.628A3.519,3.519,0,0,0,0,3.816V9.848a3.515,3.515,0,0,0,3.628,3.816h6.4a3.515,3.515,0,0,0,3.629-3.816V6.925"
                                                    transform="translate(0 0.028)" fill="none" stroke="#999"
                                                    stroke-linecap="round" stroke-linejoin="round"
                                                    stroke-miterlimit="10" stroke-width="1.5" />
                                                <path id="Stroke_3" data-name="Stroke 3"
                                                    d="M.529,5.928,5.948.506a1.729,1.729,0,0,1,2.444,0l.883.883a1.73,1.73,0,0,1,0,2.446L3.83,9.283a1.574,1.574,0,0,1-1.113.461H0L.068,7A1.575,1.575,0,0,1,.529,5.928Z"
                                                    transform="translate(3.878)" fill="none" stroke="#999"
                                                    stroke-linecap="round" stroke-linejoin="round"
                                                    stroke-miterlimit="10" stroke-width="1.5" />
                                                <path id="Stroke_5" data-name="Stroke 5" d="M0,0,3.311,3.313"
                                                    transform="translate(9.003 1.344)" fill="none" stroke="#999"
                                                    stroke-linecap="round" stroke-linejoin="round"
                                                    stroke-miterlimit="10" stroke-width="1.5" />
                                            </g>
                                        </g>
                                    </svg>
                                </span>
                                <p class="flex space-x-3">
                                    <span class="text-disabled">Keperluan</span>
                                    <span>Kebutuhan BBM periode Januari-Maret </span>
                                </p>
                            </div>
                        </div>
                    </div>


                    <div class="tabulator-tracking flex flex-col space-y-4 mb-10">
                        <div class="">
                            <h6 class="text-dark">SK. PENGADAAN 3</h6>
                            <span class="text-disabled text-sm">16/09/2021 14:03</span>
                        </div>

                        <div class="navigation-indicator-tab flex justify-between items-center w-full">
                            <a href="#"
                                class="h-9 w-9 bg-primary flex justify-center items-center p-2 rounded-full overflow-hidden">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-white" fill="none"
                                    viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M5 13l4 4L19 7" />
                                </svg>
                            </a>
                            <span class="bg-primary w-auto h-1 flex-1">&nbsp;</span>
                            <a href="#"
                                class="h-9 w-9 bg-primary flex justify-center items-center p-2 rounded-full overflow-hidden">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-white" fill="none"
                                    viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M5 13l4 4L19 7" />
                                </svg>
                            </a>
                            <span class="bg-primary w-auto h-1 flex-1">&nbsp;</span>
                            <a href="#"
                                class="h-9 w-9 bg-primary flex justify-center items-center p-2 rounded-full overflow-hidden">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-white" fill="none"
                                    viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M5 13l4 4L19 7" />
                                </svg>
                            </a>
                            <span class="bg-disabled w-auto h-1 flex-1">&nbsp;</span>
                            <a href="#"
                                class="h-9 w-9 bg-disabled flex justify-center items-center p-2 rounded-full overflow-hidden">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-white" fill="none"
                                    viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M5 13l4 4L19 7" />
                                </svg>
                            </a>
                            <span class="bg-disabled w-auto h-1 flex-1">&nbsp;</span>
                            <a href="#"
                                class="h-9 w-9 bg-disabled flex justify-center items-center p-2 rounded-full overflow-hidden">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-white" fill="none"
                                    viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M5 13l4 4L19 7" />
                                </svg>
                            </a>
                        </div>

                        <div class="flex flex-col space-y-3">
                            <p>Sedang diproses.</p>
                            <div class="flex space-x-2 items-center">
                                <span>
                                    <svg xmlns="http://www.w3.org/2000/svg" width="13.857" height="16.834"
                                        viewBox="0 0 13.857 16.834">
                                        <g id="Iconly_Light_Location" data-name="Iconly/Light/Location"
                                            transform="translate(0.75 0.75)">
                                            <g id="Location">
                                                <path id="Path_33958"
                                                    d="M0,6.4A6.3,6.3,0,0,1,6.2,0a6.3,6.3,0,0,1,6.157,6.439v.073a9.63,9.63,0,0,1-2.8,6.1,16.389,16.389,0,0,1-2.89,2.471.728.728,0,0,1-.98,0,16.209,16.209,0,0,1-4.065-3.954A8.413,8.413,0,0,1,0,6.418Z"
                                                    transform="translate(0 0)" fill="none" stroke="#999"
                                                    stroke-linecap="round" stroke-linejoin="round"
                                                    stroke-miterlimit="10" stroke-width="1.5" />
                                                <ellipse id="Ellipse_740" cx="1.98" cy="2.057" rx="1.98" ry="2.057"
                                                    transform="translate(4.198 4.462)" fill="none" stroke="#999"
                                                    stroke-linecap="round" stroke-linejoin="round"
                                                    stroke-miterlimit="10" stroke-width="1.5" />
                                            </g>
                                        </g>
                                    </svg>
                                </span>
                                <p class="flex space-x-3">
                                    <span class="text-disabled">POSISI</span>
                                    <span>Kepala Distrik Navigasi </span>
                                </p>
                            </div>
                            <div class="flex space-x-2 items-center">
                                <span>
                                    <svg xmlns="http://www.w3.org/2000/svg" width="15.159" height="15.341"
                                        viewBox="0 0 15.159 15.341">
                                        <g id="Iconly_Light_Edit_Square" data-name="Iconly/Light/Edit Square"
                                            transform="translate(0.75 0.9)">
                                            <g id="Edit_Square" data-name="Edit Square">
                                                <path id="Stroke_1" data-name="Stroke 1"
                                                    d="M6.339,0H3.628A3.519,3.519,0,0,0,0,3.816V9.848a3.515,3.515,0,0,0,3.628,3.816h6.4a3.515,3.515,0,0,0,3.629-3.816V6.925"
                                                    transform="translate(0 0.028)" fill="none" stroke="#999"
                                                    stroke-linecap="round" stroke-linejoin="round"
                                                    stroke-miterlimit="10" stroke-width="1.5" />
                                                <path id="Stroke_3" data-name="Stroke 3"
                                                    d="M.529,5.928,5.948.506a1.729,1.729,0,0,1,2.444,0l.883.883a1.73,1.73,0,0,1,0,2.446L3.83,9.283a1.574,1.574,0,0,1-1.113.461H0L.068,7A1.575,1.575,0,0,1,.529,5.928Z"
                                                    transform="translate(3.878)" fill="none" stroke="#999"
                                                    stroke-linecap="round" stroke-linejoin="round"
                                                    stroke-miterlimit="10" stroke-width="1.5" />
                                                <path id="Stroke_5" data-name="Stroke 5" d="M0,0,3.311,3.313"
                                                    transform="translate(9.003 1.344)" fill="none" stroke="#999"
                                                    stroke-linecap="round" stroke-linejoin="round"
                                                    stroke-miterlimit="10" stroke-width="1.5" />
                                            </g>
                                        </g>
                                    </svg>
                                </span>
                                <p class="flex space-x-3">
                                    <span class="text-disabled">Keperluan</span>
                                    <span>Kebutuhan BBM periode Januari-Maret </span>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>

    <div class="flex gap-7">

        <div class="flex w-full md:w-1/2" x-data="{ open: true, show:true }">
            <div class="card card-light" x-show="open">
                <div class="card-header">
                    <div class="title-card-head">Suplier Teraktif</div>
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
                    <table class="table-primary table-auto my-3" data-ordering="true" data-paging="true"
                        data-searching="true">
                        <thead class="">
                            <tr>
                                <th class="text-left">#</th>
                                <th class="text-left">Nama Supplier</th>
                                <th class="text-left">Kategori</th>
                            </tr>
                        </thead>
                        <tbody class="">

                            @for ($i = 1; $i <= 4; $i++)
                                <tr>
                                <td>{{$i}}</td>
                                <td>Laptop</td>
                                <td>Inventaris</td>
                                </tr>
                            @endfor

                        </tbody>
                    </table>
                </div>
                <div class="card-footer" x-show="show"></div>
            </div>
        </div>
        <div class="flex w-full md:w-1/2" x-data="{ open: true, show:true }">
            <div class="card card-light" x-show="open">
                <div class="card-header">
                    <div class="title-card-head">Barang Kosong</div>
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
                    <table class="table-danger table-auto my-3" data-ordering="true" data-paging="true"
                        data-searching="true">
                        <thead class="">
                            <tr>
                                <th class="text-left">#</th>
                                <th class="text-left">Nama Barang</th>
                                <th class="text-left">Jenis Barang</th>
                            </tr>
                        </thead>
                        <tbody class="">

                            @for ($i = 1; $i <= 4; $i++)
                                <tr>
                                <td>{{$i}}</td>
                                <td>Laptop</td>
                                <td>Inventaris</td>
                                </tr>
                            @endfor

                        </tbody>
                    </table>
                </div>
                <div class="card-footer" x-show="show"></div>
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

{{-- apexchart example --}}
<script>
    var options1 = {
        series: [{
            name: 'Kebutuhan',
            data: [44, 55, 57, 56, 61, 58, 63, 60, 66]
        }, {
            name: 'Realisasi',
            data: [76, 85, 101, 98, 87, 105, 91, 114, 94]
        }, ],
        chart: {
            type: 'bar',
            height: 350
        },
        plotOptions: {
            bar: {
                horizontal: false,
                columnWidth: '55%',
                endingShape: 'rounded'
            },
        },
        dataLabels: {
            enabled: false
        },
        
        stroke: {
            show: true,
            width: 2,
            colors: ['transparent']
        },
        xaxis: {
            categories: ['SBNP', 'KNK', 'BENGKEL', 'TELKOMPEL', 'SIE.PENGADAAN', 'SUBBAG', 'PENGAMAT'],
        },
        yaxis: {
            // title: {
            //     text: '$ (thousands)'
            // }
        },
        fill: {
            opacity: 1
        },
        tooltip: {
            y: {
                formatter: function (val) {
                    return "$ " + val + " thousands"
                }
            }
        }
    };

    var chart = new ApexCharts(document.querySelector("#chart"), options1);
    chart.render();

    var options2 = {
        series: [{
            name: 'Kebutuhan',
            data: [44, 55, 57, 56, 61, 58, 63, 60, 66]
        }, {
            name: 'Realisasi',
            data: [76, 85, 101, 98, 87, 105, 91, 114, 94]
        }, ],
        chart: {
            type: 'bar',
            height: 350
        },
        plotOptions: {
            bar: {
                horizontal: false,
                columnWidth: '55%',
                endingShape: 'rounded'
            },
        },
        dataLabels: {
            enabled: false
        },
        stroke: {
            show: true,
            width: 2,
            colors: ['transparent']
        },
        theme: {
            monochrome: {
                enabled: true,
                color: '#255aee',
                shadeTo: 'light',
                shadeIntensity: 0.65
            }
        },
        xaxis: {
            categories: ['SBNP', 'KNK', 'BENGKEL', 'TELKOMPEL', 'SIE.PENGADAAN', 'SUBBAG', 'PENGAMAT'],
        },
        yaxis: {
            // title: {
            //     text: '$ (thousands)'
            // }
        },
        fill: {
            opacity: 1
        },
        tooltip: {
            y: {
                formatter: function (val) {
                    return "$ " + val + " thousands"
                }
            }
        }
    };

    var chart = new ApexCharts(document.querySelector("#chart2"), options2);
    chart.render();




</script>

@endpush
