<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DASHBOARD SIMLOG - DSITRIK NAVIGASI KELAS 1 TG PRIOk</title>
    <link rel="shortcut icon" href="{{url('assets/images/simlog-favico-light.png')}}" type="image/x-icon">
    <link href="https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css" rel="stylesheet" />
    {{-- apexcharts --}}
    <link href="{{ asset('lib/apexcharts/dist/apexcharts.css') }}" rel="stylesheet">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/main.css') }}" rel="stylesheet">
    <link href="{{ asset('css/index.css') }}" rel="stylesheet">
</head>

<body class="bg-gray-50 " onload="startTime()">

    <div class="nav-info relative bg-secondary md:bg-gray-300 flex w-full h-20">
        <div class="hidden md:flex items-center justify-between space-x-2 px-5 w-1/6 h-full border-r-2 border-gray-100">
            <button type="button" class="focus:outline-none full-screen"  onclick="toggleFullScreen()">
                <svg id="iconshow" xmlns="http://www.w3.org/2000/svg" class="block h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 8V4m0 0h4M4 4l5 5m11-1V4m0 0h-4m4 0l-5 5M4 16v4m0 0h4m-4 0l5-5m11 5l-5-5m5 5v-4m0 4h-4" />
                </svg>
            </button>
            <h6 class="font-bold text-primary"><div id="clock"></div></h6>
        </div>
        <div class="hidden md:flex items-center justify-center w-5/6 h-full">
            <marquee behavior="" direction="left" loop="true">
                <h3 class="font-bold text-primary"> Selamat Datang di Aplikasi Sistem Logistik Distrik Navigasi Kelas 1
                    Tanjung Priok</h3>
            </marquee>
        </div>
        <div class="absolute top-0 right-0 w-full md:w-1/4 bg-secondary flex items-center justify-center space-x-5 h-full pl-5 pr-5 md:pl-5 md:pr-2"
            style="border-bottom-left-radius: 90px;">
            <h3 class="font-bold text-white"> SYSTEM LOGISTIC </h3>
            <img src="{{url('assets/images/simlog-logo-light.png')}}" class="w-10" alt="">
        </div>
    </div>
    <div class="cards-infographic flex flex-col gap-4 px-3 md:px-6 py-3">

        <div class="sec-2 flex flex-col md:flex-row items-center gap-5">
            <div class="w-full md:w-1/5 flex flex-col gap-3">
                <div class="card flex items-center h-48 ring-1 ring-inset ring-indigo-500">
                    <div class="w-1/4 bg-secondary flex items-center justify-center h-full">
                        <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-7" viewBox="0 0 37.583 40.426">
                            <g id="Icon_feather-box" data-name="Icon feather-box" transform="translate(2.94 2.564)">
                              <path id="Path_742" data-name="Path 742" d="M36.2,27.657V13.567a3.523,3.523,0,0,0-1.761-3.047L22.113,3.475a3.523,3.523,0,0,0-3.523,0L6.261,10.52A3.523,3.523,0,0,0,4.5,13.567v14.09A3.523,3.523,0,0,0,6.261,30.7L18.59,37.749a3.523,3.523,0,0,0,3.523,0L34.442,30.7A3.523,3.523,0,0,0,36.2,27.657Z" transform="translate(-4.5 -3.003)" fill="none" stroke="#fff" stroke-linecap="round" stroke-linejoin="round" stroke-width="5"/>
                              <path id="Path_743" data-name="Path 743" d="M4.9,10.44l15.376,8.894L35.657,10.44" transform="translate(-4.429 -1.708)" fill="none" stroke="#fff" stroke-linecap="round" stroke-linejoin="round" stroke-width="5"/>
                              <path id="Path_744" data-name="Path 744" d="M18,35.754V18" transform="translate(-2.149 -0.391)" fill="none" stroke="#fff" stroke-linecap="round" stroke-linejoin="round" stroke-width="5"/>
                            </g>
                          </svg>                          
                    </div>
                    <div class="w-3/4 flex flex-col gap-3 py-3 items-center justify-center">
                        <h1 class="font-bold text-secondary">1003</h1>
                        <small>Total Barang</small>
                    </div>
                </div>
                <div class="card flex items-center h-48 ring-1 ring-inset ring-indigo-500">
                    <div class="w-1/4 bg-secondary flex items-center justify-center h-full">
                        <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-7" viewBox="0 0 37.583 40.426">
                            <g id="Icon_feather-box" data-name="Icon feather-box" transform="translate(2.94 2.564)">
                              <path id="Path_742" data-name="Path 742" d="M36.2,27.657V13.567a3.523,3.523,0,0,0-1.761-3.047L22.113,3.475a3.523,3.523,0,0,0-3.523,0L6.261,10.52A3.523,3.523,0,0,0,4.5,13.567v14.09A3.523,3.523,0,0,0,6.261,30.7L18.59,37.749a3.523,3.523,0,0,0,3.523,0L34.442,30.7A3.523,3.523,0,0,0,36.2,27.657Z" transform="translate(-4.5 -3.003)" fill="none" stroke="#fff" stroke-linecap="round" stroke-linejoin="round" stroke-width="5"/>
                              <path id="Path_743" data-name="Path 743" d="M4.9,10.44l15.376,8.894L35.657,10.44" transform="translate(-4.429 -1.708)" fill="none" stroke="#fff" stroke-linecap="round" stroke-linejoin="round" stroke-width="5"/>
                              <path id="Path_744" data-name="Path 744" d="M18,35.754V18" transform="translate(-2.149 -0.391)" fill="none" stroke="#fff" stroke-linecap="round" stroke-linejoin="round" stroke-width="5"/>
                            </g>
                          </svg>                          
                    </div>
                    <div class="w-3/4 flex flex-col gap-3 py-3 items-center justify-center">
                        <h1 class="font-bold text-secondary">1003</h1>
                        <small>Total Barang</small>
                    </div>
                </div>
            </div>
            <div class="w-full md:w-4/5 grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-4">
                <div class="w-full" x-data="{ open: true, show:true }">
                    <div class="card card-light ring-1 ring-inset ring-indigo-500" x-show="open">
                        <div class="flex items-center h-12">
                            <div class="w-3/4 flex items-center justify-center h-full bg-secondary">
                                <h4 class=" uppercase text-white font-semibold">barang masuk</h4>
                            </div>
                            <div class="w-1/4 flex items-center justify-center h-full bg-primary">
                               <h4 class="text-light font-semibold">100</h4>
                            </div>
                        </div>
                        <div class="card-body" x-show="show">
                            <div class="overflow-x-hidden overflow-y-hidden h-full">
                                <marquee class="divide-y divide-blue-400" behavior="" scrollamount="2" direction="up" loop="true" style="height: 20vh;">
                                @for ($i = 0; $i < 100; $i++)
                                <a href="#" target="_blank" class="flex items-center justify-between space-x-3 px-3 py-2 text-sm hover:bg-blue-400 hover:text-white">
                                    <div class="flex items-center justify-between space-x-4">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="w-10 h-10" viewBox="0 0 45 45">
                                            <g id="Group_3105" data-name="Group 3105" transform="translate(-1096 22093)">
                                              <circle id="Ellipse_13" data-name="Ellipse 13" cx="22.5" cy="22.5" r="22.5" transform="translate(1096 -22093)" fill="#989ffe"/>
                                              <g id="Group_3105-2" data-name="Group 3105" transform="translate(1107.368 -22080.982)">
                                                <path id="Path_755" data-name="Path 755" d="M23.8,4H21.2a1.3,1.3,0,1,0,0,2.6h1.3V22.2H21.2a1.3,1.3,0,1,0,0,2.6h2.6a1.3,1.3,0,0,0,1.3-1.3V5.3A1.3,1.3,0,0,0,23.8,4ZM14.443,8.421a1.3,1.3,0,1,0-2.08,1.56L14.7,13.1H4.3a1.3,1.3,0,1,0,0,2.6H14.82l-2.237,3.173a1.3,1.3,0,0,0,2.12,1.508l3.667-5.2a1.3,1.3,0,0,0,0-1.534Z" transform="translate(-3 -4)" fill="#fff"/>
                                                <path id="Path_756" data-name="Path 756" d="M23.8,4H21.2a1.3,1.3,0,1,0,0,2.6h1.3V22.2H21.2a1.3,1.3,0,1,0,0,2.6h2.6a1.3,1.3,0,0,0,1.3-1.3V5.3A1.3,1.3,0,0,0,23.8,4ZM14.443,8.421a1.3,1.3,0,1,0-2.08,1.56L14.7,13.1H4.3a1.3,1.3,0,1,0,0,2.6H14.82l-2.237,3.173a1.3,1.3,0,0,0,2.12,1.508l3.667-5.2a1.3,1.3,0,0,0,0-1.534Z" transform="translate(-3 -4)" fill="#fff"/>
                                              </g>
                                            </g>
                                          </svg>
                                                                                 
                                          <div class="flex flex-col gap-1">
                                              <small class="font-semibold text-disabled">28 Mar 2021</small>
                                              <p class="text-primary">Meja Ruang Logistik</p>
                                          </div>
                                    </div>
                                    <div>
                                        <h3 class="text-primary font-bold">53</h3>
                                    </div>
                                </a>
                                @endfor
                                </marquee>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="w-full" x-data="{ open: true, show:true }">
                    <div class="card card-light ring-1 ring-inset ring-indigo-500" x-show="open">
                        <div class="flex items-center h-12">
                            <div class="w-3/4 flex items-center justify-center h-full bg-secondary">
                                <h4 class=" uppercase text-white font-semibold">barang keluar</h4>
                            </div>
                            <div class="w-1/4 flex items-center justify-center h-full bg-primary">
                               <h4 class="text-light font-semibold">100</h4>
                            </div>
                        </div>
                        <div class="card-body" x-show="show">
                            <div class="overflow-x-hidden overflow-y-hidden h-full">
                                <marquee class="divide-y divide-blue-400" behavior="" scrollamount="2" direction="up" loop="true" style="height: 20vh;">
                                @for ($i = 0; $i < 100; $i++)
                                <a href="#" target="_blank" class="flex items-center justify-between space-x-3 px-3 py-2 text-sm hover:bg-blue-400 hover:text-white">
                                    <div class="flex items-center justify-between space-x-4">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="h-10 w-10" viewBox="0 0 45 45">
                                            <g id="Group_3202" data-name="Group 3202" transform="translate(-1096 22093)">
                                              <circle id="Ellipse_14" data-name="Ellipse 14" cx="22.5" cy="22.5" r="22.5" transform="translate(1096 -22093)" fill="#989ffe"/>
                                              <g id="Group_3201" data-name="Group 3201" transform="translate(1107.368 -22080.982)">
                                                <path id="Path_765" data-name="Path 765" d="M4.3,4H6.9a1.3,1.3,0,1,1,0,2.6H5.6V22.2H6.9a1.3,1.3,0,1,1,0,2.6H4.3A1.3,1.3,0,0,1,3,23.5V5.3A1.3,1.3,0,0,1,4.3,4Zm9.362,4.421a1.3,1.3,0,0,1,2.08,1.56L13.4,13.1H23.8a1.3,1.3,0,1,1,0,2.6H13.285l2.237,3.173a1.3,1.3,0,0,1-2.12,1.508l-3.667-5.2a1.3,1.3,0,0,1,0-1.534Z" transform="translate(-3 -4)" fill="#fff"/>
                                                <path id="Path_766" data-name="Path 766" d="M4.3,4H6.9a1.3,1.3,0,1,1,0,2.6H5.6V22.2H6.9a1.3,1.3,0,1,1,0,2.6H4.3A1.3,1.3,0,0,1,3,23.5V5.3A1.3,1.3,0,0,1,4.3,4Zm9.362,4.421a1.3,1.3,0,0,1,2.08,1.56L13.4,13.1H23.8a1.3,1.3,0,1,1,0,2.6H13.285l2.237,3.173a1.3,1.3,0,0,1-2.12,1.508l-3.667-5.2a1.3,1.3,0,0,1,0-1.534Z" transform="translate(-3 -4)" fill="#fff"/>
                                              </g>
                                            </g>
                                          </svg>                                       
                                          <div class="flex flex-col gap-1">
                                              <small class="font-semibold text-disabled">28 Mar 2021</small>
                                              <p class="text-primary">Meja Ruang Logistik</p>
                                          </div>
                                    </div>
                                    <div>
                                        <h3 class="text-primary font-bold">53</h3>
                                    </div>
                                </a>
                                @endfor
                                </marquee>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="w-full" x-data="{ open: true, show:true }">
                    <div class="card card-light ring-1 ring-inset ring-indigo-500" x-show="open">
                        <div class="flex items-center h-12">
                            <div class="w-3/4 flex items-center justify-center h-full bg-secondary">
                                <h4 class=" uppercase text-white font-semibold">status permintaan</h4>
                            </div>
                            <div class="w-1/4 flex items-center justify-center h-full bg-primary">
                               <h4 class="text-light font-semibold">100</h4>
                            </div>
                        </div>
                        <div class="card-body" x-show="show">
                            <div class="overflow-x-hidden overflow-y-hidden h-full">
                                <marquee class="divide-y divide-blue-400" behavior="" scrollamount="2" direction="up" loop="true" style="height: 20vh;">
                                @for ($i = 0; $i < 100; $i++)
                                <a href="#" target="_blank" class="flex items-center justify-between space-x-3 px-3 py-2 text-sm hover:bg-blue-400 hover:text-white">
                                    <div class="flex items-center">                                 
                                          <div class="flex flex-col gap-1">
                                              <p class="text-primary">SK. PENGADAAN 3 &nbsp;|&nbsp; Keperluan BBM Kapal</p>
                                              <small class="font-semibold text-disabled">28 Mar 2021 &nbsp; | Selesai</small>
                                          </div>
                                    </div>
                                    <div class="">
                                       <span class="w-8 h-8 p-1 bg-green-500 flex items-center justify-center rounded-md">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-white" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                                          </svg>
                                       </span>
                                    </div>
                                </a>
                                @endfor
                                </marquee>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="sec-2 grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-5">
            <div class="w-full" x-data="{ open: true, show:true }">
                <div class="card card-light ring-1 ring-inset ring-indigo-500" x-show="open">
                    <div class="flex items-center h-12">
                        <div class="w-3/4 flex items-center justify-center h-full bg-secondary">
                            <h4 class=" uppercase text-white font-semibold">Notifikasi</h4>
                        </div>
                        <div class="w-1/4 flex items-center justify-center h-full bg-primary">
                           <h4 class="text-light font-semibold">100</h4>
                        </div>
                    </div>
                    <div class="card-body" x-show="show">
                        <div class="overflow-x-hidden overflow-y-hidden h-full">
                            <marquee class="divide-y divide-blue-400" behavior="" scrollamount="2" direction="up" loop="true" style="height: 20vh;">
                            @for ($i = 0; $i < 100; $i++)
                            <a href="#" target="_blank" class="flex flex-col space-y-3 px-3 py-2 text-sm hover:bg-blue-400 hover:text-white">
                                <h6 class="font-bold">Permintaan Barang</h6>
                                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsae.</p>
                            </a>
                            @endfor
                            </marquee>
                        </div>
                    </div>
                </div>
            </div>
            <div class="w-full" x-data="{ open: true, show:true }">
                <div class="card card-light ring-1 ring-inset ring-indigo-500" x-show="open">
                    <div class="flex items-center h-12">
                        <div class="w-3/4 flex items-center justify-center h-full bg-secondary">
                            <h4 class=" uppercase text-white font-semibold">permintaan barang</h4>
                        </div>
                        <div class="w-1/4 flex items-center justify-center h-full bg-primary">
                           <h4 class="text-light font-semibold">100</h4>
                        </div>
                    </div>
                    <div class="card-body" x-show="show">
                        <div class="overflow-x-hidden overflow-y-hidden h-full">
                            <marquee class="divide-y divide-blue-400" behavior="" scrollamount="2" direction="up" loop="true" style="height: 20vh;">
                            @for ($i = 0; $i < 100; $i++)
                            <a href="#" target="_blank" class="flex flex-col space-y-3 px-3 py-2 text-sm hover:bg-blue-400 hover:text-white">
                                <h6 class="font-bold">Permintaan Barang</h6>
                                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsae.</p>
                            </a>
                            @endfor
                            </marquee>
                        </div>
                    </div>
                </div>
            </div>
            <div class="w-full" x-data="{ open: true, show:true }">
                <div class="card card-light ring-1 ring-inset ring-indigo-500" x-show="open">
                    <div class="flex items-center h-12">
                        <div class="w-3/4 flex items-center justify-center h-full bg-secondary">
                            <h4 class=" uppercase text-white font-semibold">Pengadaan barang</h4>
                        </div>
                        <div class="w-1/4 flex items-center justify-center h-full bg-primary">
                           <h4 class="text-light font-semibold">100</h4>
                        </div>
                    </div>
                    <div class="card-body" x-show="show">
                        <div class="overflow-x-hidden overflow-y-hidden h-full">
                            <marquee class="divide-y divide-blue-400" behavior="" scrollamount="2" direction="up" loop="true" style="height: 20vh;">
                            @for ($i = 0; $i < 100; $i++)
                            <a href="#" target="_blank" class="flex flex-col space-y-3 px-3 py-2 text-sm hover:bg-blue-400 hover:text-white">
                                <h6 class="font-bold">Permintaan Barang</h6>
                                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsae.</p>
                            </a>
                            @endfor
                            </marquee>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="sec-2 grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-5">
            <div class="w-full" x-data="{ open: true, show:true }">
                <div class="card card-light ring-1 ring-inset ring-indigo-500" x-show="open">
                    <div class="flex items-center h-12">
                        <div class="w-3/4 flex items-center justify-center h-full bg-secondary">
                            <h4 class=" uppercase text-white font-semibold">permintaan</h4>
                        </div>
                        <div class="w-1/4 flex items-center justify-center h-full bg-primary">
                           <h4 class="text-light font-semibold">100</h4>
                        </div>
                    </div>
                    <div class="card-body" x-show="show">
                        <div class="flex items-center justify-center h-full">
                            <div id="chartpie"></div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="w-full" x-data="{ open: true, show:true }">
                <div class="card card-light ring-1 ring-inset ring-indigo-500" x-show="open">
                    <div class="flex items-center h-12">
                        <div class="w-3/4 flex items-center justify-center h-full bg-secondary">
                            <h4 class=" uppercase text-white font-semibold">permintaan kelompok</h4>
                        </div>
                        <div class="w-1/4 flex items-center justify-center h-full bg-primary">
                           <h4 class="text-light font-semibold">100</h4>
                        </div>
                    </div>
                    <div class="card-body" x-show="show">
                        <div class="flex items-center justify-center h-full">
                            <div id="chart2"></div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="w-full" x-data="{ open: true, show:true }">
                <div class="card card-light ring-1 ring-inset ring-indigo-500" x-show="open">
                    <div class="flex items-center h-12">
                        <div class="w-3/4 flex items-center justify-center h-full bg-secondary">
                            <h4 class=" uppercase text-white font-semibold">Jumlah Bon</h4>
                        </div>
                        <div class="w-1/4 flex items-center justify-center h-full bg-primary">
                           <h4 class="text-light font-semibold">100</h4>
                        </div>
                    </div>
                    <div class="card-body" x-show="show">
                        <div class="flex items-center justify-center h-full">
                            <div id="chart3"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>


        <!-- Alpine Plugins -->
        <script defer src="https://unpkg.com/@alpinejs/collapse@3.x.x/dist/cdn.min.js"></script>

        <!-- Alpine Core -->
        <script defer src="https://unpkg.com/alpinejs@3.x.x/dist/cdn.min.js"></script>
        <script src="https://code.jquery.com/jquery-3.6.0.js"
            integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>
        <script src="{{ asset('lib/apexcharts/dist/apexcharts.min.js') }}" type="text/javascript" charset="utf-8">
        </script>
        <script src="{{ asset('js/index.js') }}" type="text/javascript" charset="utf-8"></script>
        <link href="https://unpkg.com/tailwindcss@^1.0/dist/tailwind.min.css" rel="stylesheet" />

        {{-- dattime  --}}
<script>
    function startTime() {
    const monthNames = ["Jan", "Feb", "Mar", "Apr", "May", "Jun",
    "Jul", "Aug", "Sep", "Oct", "Nov", "Dec"
    ];
      var today = new Date();
      var h = today.getHours();
      var m = today.getMinutes();
      var s = today.getSeconds();
      m = checkTime(m);
      s = checkTime(s);
    //   document.getElementById('clock').innerHTML =
    //   h + ":" + m + ":" + s;
    //   document.getElementById('clock').innerHTML = today.getDate() + " " + monthNames[today.getMonth()] + " " + today.getFullYear() + "&nbsp;&nbsp;&nbsp;|&nbsp;&nbsp;&nbsp;" + h + ":" + m + ":" + s;
      document.getElementById('clock').innerHTML = today.getDate() + " " + monthNames[today.getMonth()] + " " + today.getFullYear() + "&nbsp;&nbsp;&nbsp;|&nbsp;&nbsp;&nbsp;" + h + ":" + m;
      document.getElementById('clock2').innerHTML = today.getDate() + " " + monthNames[today.getMonth()] + " " + today.getFullYear() + "&nbsp;&nbsp;&nbsp;|&nbsp;&nbsp;&nbsp;" + h + ":" + m;
      var t = setTimeout(startTime, 1000);
    }
    function checkTime(i) {
      if (i < 10) {i = "0" + i};  // add zero in front of numbers < 10
      return i;
    }
</script>

{{-- fullscreen toggle --}}
<script>
    function toggleFullScreen() {
        
        if ((document.fullScreenElement && document.fullScreenElement !== null) || (!document.mozFullScreen && !document.webkitIsFullScreen)) {
            if (document.documentElement.requestFullScreen) {
                document.documentElement.requestFullScreen();
            } else if (document.documentElement.mozRequestFullScreen) {
                document.documentElement.mozRequestFullScreen();
            } else if (document.documentElement.webkitRequestFullScreen) {
                document.documentElement.webkitRequestFullScreen(Element.ALLOW_KEYBOARD_INPUT);
            }
        } else {
            if (document.cancelFullScreen) {
                document.cancelFullScreen();
            } else if (document.mozCancelFullScreen) {
                document.mozCancelFullScreen();
            } else if (document.webkitCancelFullScreen) {
                document.webkitCancelFullScreen();
            }
        }
    }
    $(document).load(function() {
        $('.full-screen').click();
    })
</script>


        <script>
            var options = {
          series: [44, 55, 13, 33],
          chart: {
          width: 360,
          type: 'donut',
        },
        dataLabels: {
          enabled: false
        },
        responsive: [{
          breakpoint: 480,
          options: {
            chart: {
              width: 200
            },
            legend: {
              show: false
            }
          }
        }],
        legend: {
          position: 'right',
          offsetY: 0,
          height: 230,
        }
        };

        var chart = new ApexCharts(document.querySelector("#chartpie"), options);
        chart.render();
        
        var options2 = {
        series: [{
            name: 'Kebutuhan',
            data: [31, 40, 28, 51, 42, 109, 100, 41, 23, 2]
        }, {
            name: 'Realisasi',
            data: [11, 32, 45, 32, 34, 52, 41, 23, 2,55]
        }],
        chart: {
            width: 340,
            // height: 200,
            type: 'area'
        },
        dataLabels: {
            enabled: false
        },
        stroke: {
            curve: 'smooth'
        },
        xaxis: {
            type: 'category',
      categories: [],
      tickAmount: undefined,
      tickPlacement: 'between',
      min: undefined,
      max: undefined,
      range: undefined,
      floating: false,
      decimalsInFloat: undefined,
      overwriteCategories: undefined,
      position: 'bottom',
        },
        tooltip: {
            x: {
                // format: 'dd/MM/yy HH:mm'
            },
        },
    };

    var chart = new ApexCharts(document.querySelector("#chart2"), options2);
    chart.render();

        var options3 = {
        series: [{
            name: 'Kebutuhan',
            data: [31, 40, 28, 51, 42, 109, 100, 41, 23, 2]
        }, {
            name: 'Realisasi',
            data: [11, 32, 45, 32, 34, 52, 41, 23, 2,55]
        }],
        chart: {
            width: 340,
            // height: 200,
            type: 'area'
        },
        dataLabels: {
            enabled: false
        },
        stroke: {
            curve: 'smooth'
        },
        xaxis: {
            type: 'category',
      categories: [],
      tickAmount: undefined,
      tickPlacement: 'between',
      min: undefined,
      max: undefined,
      range: undefined,
      floating: false,
      decimalsInFloat: undefined,
      overwriteCategories: undefined,
      position: 'bottom',
        },
        tooltip: {
            x: {
                // format: 'dd/MM/yy HH:mm'
            },
        },
    };

    var chart = new ApexCharts(document.querySelector("#chart3"), options3);
    chart.render();
      
      
        </script>
        @stack('after_scripts')

</body>

</html>
