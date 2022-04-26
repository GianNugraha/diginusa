@extends("layouts.main", ['title' => 'Tabulators'])
@section("content")

{{-- Desktop --}}
<section class="content hidden md:flex flex-col space-y-4 px-5 pb-10">

    <div class="flex grid grid-cols-3 gap-5">

        <div class="" x-data="{ open: true }">
            <div class="card card-light" x-show="open">
                <div class="card-header">
                    <div class="title-card-head text-dark">Tabulators Tracking</div>
                    <div class="cta-card-head">
                        <span class="item-cta-card-head">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20"
                                fill="currentColor">
                                <path fill-rule="evenodd"
                                    d="M10 5a1 1 0 011 1v3h3a1 1 0 110 2h-3v3a1 1 0 11-2 0v-3H6a1 1 0 110-2h3V6a1 1 0 011-1z"
                                    clip-rule="evenodd" />
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
                <div class="card-body">

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

        <div class="col-span-2" x-data="{ open: true }">
            <div class="flex flex-col space-y-4">
                <div class="card card-light" x-show="open">
                    <div class="card-header">
                        <div class="title-card-head text-dark">Clickable Tabulator</div>
                        <div class="cta-card-head">
                            <span class="item-cta-card-head">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20"
                                    fill="currentColor">
                                    <path fill-rule="evenodd"
                                        d="M10 5a1 1 0 011 1v3h3a1 1 0 110 2h-3v3a1 1 0 11-2 0v-3H6a1 1 0 110-2h3V6a1 1 0 011-1z"
                                        clip-rule="evenodd" />
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
                    <div class="card-body flex-col">
                        <div class="tabulator-tracking flex flex-col space-y-4 mb-10" x-data="{ openTab: 1 }">
    
    
                            <div class="navigation-indicator-tab flex justify-between items-center w-full">
                                <a href="#" @click="openTab = 1"
                                    class="h-9 w-9 bg-danger text-white flex justify-center items-center p-2 rounded-full overflow-hidden">
                                    1
                                </a>
                                <span class="bg-danger text-white w-auto h-1 flex-1">&nbsp;</span>
                                <a href="#" @click="openTab = 2"
                                    class="h-9 w-9 bg-danger text-white flex justify-center items-center p-2 rounded-full overflow-hidden">
                                    2
                                </a>
                                <span class="bg-danger text-white w-auto h-1 flex-1">&nbsp;</span>
                                <a href="#" @click="openTab = 3"
                                    class="h-9 w-9 bg-danger text-white flex justify-center items-center p-2 rounded-full overflow-hidden">
                                    3
                                </a>
                                <span class="bg-danger text-white w-auto h-1 flex-1">&nbsp;</span>
                                <a href="#" @click="openTab = 4"
                                    class="h-9 w-9 bg-danger text-white flex justify-center items-center p-2 rounded-full overflow-hidden">
                                    4
                                </a>
                                <span class="bg-danger text-white w-auto h-1 flex-1">&nbsp;</span>
                                <a href="#" @click="openTab = 5"
                                    class="h-9 w-9 bg-danger text-white flex justify-center items-center p-2 rounded-full overflow-hidden">
                                    5
                                </a>
                            </div>
    
                            <div class="flex shadow rounded-md p-3 bg-gray-100" x-show="openTab === 1">
                                <p>1. Lorem, ipsum dolor sit amet consectetur adipisicing elit. Nulla, animi. Ipsa impedit perferendis, dolor porro eaque nam libero veniam totam.</p>
                            </div>
                            <div class="flex shadow rounded-md p-3 bg-gray-100" x-show="openTab === 2">
                                <p>2. Lorem ipsum dolor sit amet consectetur adipisicing elit. Atque pariatur facilis repudiandae ut aperiam, delectus enim. Molestias dolore beatae nemo quaerat, optio ratione? Id corrupti accusantium magnam nam tenetur nostrum!</p>
                            </div>
                            <div class="flex shadow rounded-md p-3 bg-gray-100" x-show="openTab === 3">
                                <p>3. Lorem ipsum dolor, sit amet consectetur adipisicing elit. Vero, quia laborum? Doloremque aperiam deserunt possimus molestiae ipsam deleniti id quibusdam sequi in inventore ab, mollitia dolorem iste aliquid quod. Quos delectus id, recusandae minima quae sit, est obcaecati autem, praesentium esse temporibus asperiores blanditiis cumque? Error, modi aut obcaecati commodi eum magnam omnis. Labore laborum excepturi consectetur mollitia minus illo magni, rerum iure? Eos nihil deleniti nulla, vero, ipsa amet culpa quas optio beatae explicabo sed rem, porro labore. Mollitia.</p>
                            </div>
                            <div class="flex shadow rounded-md p-3 bg-gray-100" x-show="openTab === 4">
                                <p>4. Lorem ipsum dolor sit amet consectetur adipisicing elit. Corrupti veniam maxime sit possimus molestiae optio, perspiciatis ratione sunt, repellat hic nulla nobis dolore esse quisquam temporibus voluptate. Inventore, maxime?</p>
                            </div>
                            <div class="flex shadow rounded-md p-3 bg-gray-100" x-show="openTab === 5">
                                <p>5. Lorem, ipsum dolor sit amet consectetur adipisicing elit. Illo iure eius quasi, dolorum reiciendis amet quaerat, eveniet omnis magni qui illum quo sapiente repellat tenetur. Voluptates sed, voluptatum velit fugiat ea vel, quasi quas inventore consequuntur consequatur earum quos nesciunt ut quia repellat ad commodi culpa magni quam tenetur quod. Fuga sed tempora deserunt doloremque aliquam modi quaerat consequatur repellat qui! Perferendis voluptate illo earum incidunt sed ullam nisi porro iste culpa exercitationem voluptas sequi asperiores, placeat consectetur eligendi ex nostrum perspiciatis! Obcaecati, cum illum facere repellendus voluptatibus quas vero omnis dicta iste laborum eveniet facilis at nisi consequatur voluptas quae ut explicabo porro tempora veniam? Optio eum atque saepe ad quam delectus maxime perspiciatis. Doloribus tempore repudiandae consequuntur molestias.</p>
                            </div>
    
    
                        </div>
                    </div>
                </div>

                <div class="card card-light" x-show="open">
                    <div class="card-header">
                        <div class="title-card-head text-dark">Clickable Tabulator</div>
                        <div class="cta-card-head">
                            <span class="item-cta-card-head">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20"
                                    fill="currentColor">
                                    <path fill-rule="evenodd"
                                        d="M10 5a1 1 0 011 1v3h3a1 1 0 110 2h-3v3a1 1 0 11-2 0v-3H6a1 1 0 110-2h3V6a1 1 0 011-1z"
                                        clip-rule="evenodd" />
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
                    <div class="card-body flex-col">
                        <div class="tabulator-tracking flex flex-col space-y-4 mb-10" x-data="{ openTab: 1 }">
    
    
                            <div class="navigation-indicator-tab flex justify-between items-center w-full">
                                <a href="#" @click="openTab = 1"
                                    class="h-9 w-9 bg-secondary text-white flex justify-center items-center p-2 rounded-full overflow-hidden">
                                    1
                                </a>
                                <span class="bg-secondary text-white w-auto h-1 flex-1">&nbsp;</span>
                                <a href="#" @click="openTab = 2"
                                    class="h-9 w-9 bg-secondary text-white flex justify-center items-center p-2 rounded-full overflow-hidden">
                                    2
                                </a>
                                <span class="bg-secondary text-white w-auto h-1 flex-1">&nbsp;</span>
                                <a href="#" @click="openTab = 3"
                                    class="h-9 w-9 bg-secondary text-white flex justify-center items-center p-2 rounded-full overflow-hidden">
                                    3
                                </a>
                                <span class="bg-secondary text-white w-auto h-1 flex-1">&nbsp;</span>
                                <a href="#" @click="openTab = 4"
                                    class="h-9 w-9 bg-secondary text-white flex justify-center items-center p-2 rounded-full overflow-hidden">
                                    4
                                </a>
                                <span class="bg-secondary text-white w-auto h-1 flex-1">&nbsp;</span>
                                <a href="#" @click="openTab = 5"
                                    class="h-9 w-9 bg-secondary text-white flex justify-center items-center p-2 rounded-full overflow-hidden">
                                    5
                                </a>
                            </div>
    
                            <div class="flex shadow rounded-md p-3 bg-gray-100" x-show="openTab === 1">
                                <p>1. Lorem, ipsum dolor sit amet consectetur adipisicing elit. Nulla, animi. Ipsa impedit perferendis, dolor porro eaque nam libero veniam totam.</p>
                            </div>
                            <div class="flex shadow rounded-md p-3 bg-gray-100" x-show="openTab === 2">
                                <p>2. Lorem ipsum dolor sit amet consectetur adipisicing elit. Atque pariatur facilis repudiandae ut aperiam, delectus enim. Molestias dolore beatae nemo quaerat, optio ratione? Id corrupti accusantium magnam nam tenetur nostrum!</p>
                            </div>
                            <div class="flex shadow rounded-md p-3 bg-gray-100" x-show="openTab === 3">
                                <p>3. Lorem ipsum dolor, sit amet consectetur adipisicing elit. Vero, quia laborum? Doloremque aperiam deserunt possimus molestiae ipsam deleniti id quibusdam sequi in inventore ab, mollitia dolorem iste aliquid quod. Quos delectus id, recusandae minima quae sit, est obcaecati autem, praesentium esse temporibus asperiores blanditiis cumque? Error, modi aut obcaecati commodi eum magnam omnis. Labore laborum excepturi consectetur mollitia minus illo magni, rerum iure? Eos nihil deleniti nulla, vero, ipsa amet culpa quas optio beatae explicabo sed rem, porro labore. Mollitia.</p>
                            </div>
                            <div class="flex shadow rounded-md p-3 bg-gray-100" x-show="openTab === 4">
                                <p>4. Lorem ipsum dolor sit amet consectetur adipisicing elit. Corrupti veniam maxime sit possimus molestiae optio, perspiciatis ratione sunt, repellat hic nulla nobis dolore esse quisquam temporibus voluptate. Inventore, maxime?</p>
                            </div>
                            <div class="flex shadow rounded-md p-3 bg-gray-100" x-show="openTab === 5">
                                <p>5. Lorem, ipsum dolor sit amet consectetur adipisicing elit. Illo iure eius quasi, dolorum reiciendis amet quaerat, eveniet omnis magni qui illum quo sapiente repellat tenetur. Voluptates sed, voluptatum velit fugiat ea vel, quasi quas inventore consequuntur consequatur earum quos nesciunt ut quia repellat ad commodi culpa magni quam tenetur quod. Fuga sed tempora deserunt doloremque aliquam modi quaerat consequatur repellat qui! Perferendis voluptate illo earum incidunt sed ullam nisi porro iste culpa exercitationem voluptas sequi asperiores, placeat consectetur eligendi ex nostrum perspiciatis! Obcaecati, cum illum facere repellendus voluptatibus quas vero omnis dicta iste laborum eveniet facilis at nisi consequatur voluptas quae ut explicabo porro tempora veniam? Optio eum atque saepe ad quam delectus maxime perspiciatis. Doloribus tempore repudiandae consequuntur molestias.</p>
                            </div>
    
    
                        </div>
                    </div>
                </div>

                <div class="card card-light" x-show="open">
                    <div class="card-header">
                        <div class="title-card-head text-dark">Clickable Tabulator</div>
                        <div class="cta-card-head">
                            <span class="item-cta-card-head">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20"
                                    fill="currentColor">
                                    <path fill-rule="evenodd"
                                        d="M10 5a1 1 0 011 1v3h3a1 1 0 110 2h-3v3a1 1 0 11-2 0v-3H6a1 1 0 110-2h3V6a1 1 0 011-1z"
                                        clip-rule="evenodd" />
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
                    <div class="card-body flex-col">
                        <div class="tabulator-tracking flex flex-col space-y-4 mb-10" x-data="{ openTab: 1 }">
    
    
                            <div class="navigation-indicator-tab flex justify-between items-center w-full">
                                <a href="#" @click="openTab = 1"
                                    class="h-9 w-9 bg-success text-white flex justify-center items-center p-2 rounded-full overflow-hidden">
                                    1
                                </a>
                                <span class="bg-success text-white w-auto h-1 flex-1">&nbsp;</span>
                                <a href="#" @click="openTab = 2"
                                    class="h-9 w-9 bg-success text-white flex justify-center items-center p-2 rounded-full overflow-hidden">
                                    2
                                </a>
                                <span class="bg-success text-white w-auto h-1 flex-1">&nbsp;</span>
                                <a href="#" @click="openTab = 3"
                                    class="h-9 w-9 bg-success text-white flex justify-center items-center p-2 rounded-full overflow-hidden">
                                    3
                                </a>
                                <span class="bg-success text-white w-auto h-1 flex-1">&nbsp;</span>
                                <a href="#" @click="openTab = 4"
                                    class="h-9 w-9 bg-success text-white flex justify-center items-center p-2 rounded-full overflow-hidden">
                                    4
                                </a>
                                <span class="bg-success text-white w-auto h-1 flex-1">&nbsp;</span>
                                <a href="#" @click="openTab = 5"
                                    class="h-9 w-9 bg-success text-white flex justify-center items-center p-2 rounded-full overflow-hidden">
                                    5
                                </a>
                            </div>
    
                            <div class="flex shadow rounded-md p-3 bg-gray-100" x-show="openTab === 1">
                                <p>1. Lorem, ipsum dolor sit amet consectetur adipisicing elit. Nulla, animi. Ipsa impedit perferendis, dolor porro eaque nam libero veniam totam.</p>
                            </div>
                            <div class="flex shadow rounded-md p-3 bg-gray-100" x-show="openTab === 2">
                                <p>2. Lorem ipsum dolor sit amet consectetur adipisicing elit. Atque pariatur facilis repudiandae ut aperiam, delectus enim. Molestias dolore beatae nemo quaerat, optio ratione? Id corrupti accusantium magnam nam tenetur nostrum!</p>
                            </div>
                            <div class="flex shadow rounded-md p-3 bg-gray-100" x-show="openTab === 3">
                                <p>3. Lorem ipsum dolor, sit amet consectetur adipisicing elit. Vero, quia laborum? Doloremque aperiam deserunt possimus molestiae ipsam deleniti id quibusdam sequi in inventore ab, mollitia dolorem iste aliquid quod. Quos delectus id, recusandae minima quae sit, est obcaecati autem, praesentium esse temporibus asperiores blanditiis cumque? Error, modi aut obcaecati commodi eum magnam omnis. Labore laborum excepturi consectetur mollitia minus illo magni, rerum iure? Eos nihil deleniti nulla, vero, ipsa amet culpa quas optio beatae explicabo sed rem, porro labore. Mollitia.</p>
                            </div>
                            <div class="flex shadow rounded-md p-3 bg-gray-100" x-show="openTab === 4">
                                <p>4. Lorem ipsum dolor sit amet consectetur adipisicing elit. Corrupti veniam maxime sit possimus molestiae optio, perspiciatis ratione sunt, repellat hic nulla nobis dolore esse quisquam temporibus voluptate. Inventore, maxime?</p>
                            </div>
                            <div class="flex shadow rounded-md p-3 bg-gray-100" x-show="openTab === 5">
                                <p>5. Lorem, ipsum dolor sit amet consectetur adipisicing elit. Illo iure eius quasi, dolorum reiciendis amet quaerat, eveniet omnis magni qui illum quo sapiente repellat tenetur. Voluptates sed, voluptatum velit fugiat ea vel, quasi quas inventore consequuntur consequatur earum quos nesciunt ut quia repellat ad commodi culpa magni quam tenetur quod. Fuga sed tempora deserunt doloremque aliquam modi quaerat consequatur repellat qui! Perferendis voluptate illo earum incidunt sed ullam nisi porro iste culpa exercitationem voluptas sequi asperiores, placeat consectetur eligendi ex nostrum perspiciatis! Obcaecati, cum illum facere repellendus voluptatibus quas vero omnis dicta iste laborum eveniet facilis at nisi consequatur voluptas quae ut explicabo porro tempora veniam? Optio eum atque saepe ad quam delectus maxime perspiciatis. Doloribus tempore repudiandae consequuntur molestias.</p>
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
