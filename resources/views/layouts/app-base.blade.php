<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>{{ $title ?? 'Test Diginusa' }}</title>
  <link rel="shortcut icon" href="{{url('assets/images/favicon.png')}}" type="image/x-icon">
  @stack('before_style')
  <link href="https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css" rel="stylesheet" />
  {{-- apexcharts --}}
  <link href="{{ asset('lib/apexcharts/dist/apexcharts.css') }}" rel="stylesheet">
  <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
  {{-- datatable --}}
  <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/v/dt/dt-1.10.25/af-2.3.7/b-1.7.1/b-html5-1.7.1/b-print-1.7.1/date-1.1.0/fc-3.3.3/fh-3.1.9/r-2.2.9/rg-1.1.3/rr-1.2.8/sc-2.0.4/sb-1.1.0/sp-1.3.0/sl-1.3.3/datatables.min.css"/>
  <!-- Async script executes immediately and must be after any DOM elements used in callback. -->
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDTADtF1M7v5FmOPyrAwpNn_yzjv0GkTLg&libraries=&v=weekly&channel=2" async ></script>
{{-- Callendar --}}
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/fullcalendar@5.10.1/main.min.css">
<script src="https://cdn.jsdelivr.net/npm/fullcalendar@5.10.1/main.min.js"></script>

{{-- chart apex dan chartjs --}}
<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
{{-- <script src="https://cdn.jsdelivr.net/npm/apexcharts"></script> --}}

{{-- Google Orgs Chart --}}
<script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>

  <link href="{{ asset('css/app.css') }}" rel="stylesheet">
  <link href="{{ asset('css/main.css') }}" rel="stylesheet">
  <link href="{{ asset('css/index.css') }}" rel="stylesheet">
  <style>
    .dataTable thead{
        background-color: #FA1F35 !important;
        color: white !important;
    }
    
    .dataTables_wrapper .dataTables_paginate .paginate_button.current {
        background: #FA1F35 !important;
        border: 1px solid #FA1F35 !important;
        color: white !important;
    }
    
    .dataTables_wrapper .dataTables_paginate .paginate_button:hover {
        background: #FA1F35 !important;
    }

    .dataTables_filter{
        display: none !important;
    }

    .table.dataTable.no-footer{
        border-bottom: none !important;
    }
  </style>
  @stack('after_style')
</head>

<body x-data="{sideOpen : true}" @resize.window="sideOpen = window.innerWidth > 768">
  {{-- SIDEBAR --}}
  <x-sidebar-layout></x-sidebar-layout>
  
  {{-- <main class="content"> --}}
  <main class="relative transition-all w-sideOpen left-72" :class="{'w-sideOpen': sideOpen, 'w-sideClose':!sideOpen, 'left-20' : !sideOpen, 'left-72':sideOpen}">
      {{-- NAVBAR --}}
      <section class="lg:py-4 md:py-4 py-0 md:px-5 px-0 md:grid gap-5 hidden bg-warmGray-50 shadow-sm" >
        @include('layouts.navbar-base')
      </section>
    
      {{-- DYNAMIC CONTENT --}}
        {{-- Desktop --}}
        <section class="hidden md:flex flex-col p-5 gap-10">
            {{ $slot }}
        </section>
  </main>

  {{-- @section('script') --}}
  @stack('before_scripts')
  {{-- <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.x.x/dist/alpine.min.js" defer></script> --}}
  <!-- Alpine Plugins -->
    <script defer src="https://unpkg.com/@alpinejs/collapse@3.x.x/dist/cdn.min.js"></script>
    
    <!-- Alpine Core -->
    <script defer src="https://unpkg.com/alpinejs@3.x.x/dist/cdn.min.js"></script>
  <script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>
  <script src="{{ asset('lib/apexcharts/dist/apexcharts.min.js') }}" type="text/javascript" charset="utf-8"></script>
  <script src="{{ asset('js/index.js') }}" type="text/javascript" charset="utf-8"></script>
  <link href="https://unpkg.com/tailwindcss@^1.0/dist/tailwind.min.css" rel="stylesheet" />
  <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
  {{-- datatable --}}
  <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.36/pdfmake.min.js"></script>
  <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.36/vfs_fonts.js"></script>
  <script type="text/javascript" src="https://cdn.datatables.net/v/dt/dt-1.10.25/af-2.3.7/b-1.7.1/b-html5-1.7.1/b-print-1.7.1/date-1.1.0/fc-3.3.3/fh-3.1.9/r-2.2.9/rg-1.1.3/rr-1.2.8/sc-2.0.4/sb-1.1.0/sp-1.3.0/sl-1.3.3/datatables.min.js"></script>

  <script>
    $(document).ready(function () {
        
        $("#toggle-pw").click(function () {
            if ($(".show-hide-pw").attr("type") == "password")
            {
                //Change type attribute
                $(".show-hide-pw").attr("type", "text");
                $(".eye-show").addClass("hidden");
                $(".eye-hide").removeClass("hidden");
            } 
            else
            {
                //Change type attribute
                $(".show-hide-pw").attr("type", "password");
                $(".eye-show").removeClass("hidden");
                $(".eye-hide").addClass("hidden");
            }
        });
    });
</script>

<script>
    $(document).ready(function() {
        $('.select2').select2();
    });

    let table = $('#table').DataTable({
            'dom': 'Bfrtip',
            "searching": true,
            "lengthChange": false,
            "buttons": [
                'csv', 'excel', 'pdf', 'print'
            ]
    });
    
    let table1 = $('#table-1').DataTable({
        "searching": false,
        "lengthChange": false,
    });

    // $(document).ready( function () {
    let table2 = $('#table-2').DataTable({
        "searching": false,
        "lengthChange": false,
    });
    // } );
    let table3 = $('#table-3').DataTable({
            'dom': 'Bfrtip',
            "searching": true,
            "lengthChange": false,
    });

    let table4 = $('#table-4').DataTable({
        "searching": false,
        "lengthChange": false,
    });

    $('.dt-buttons').css('display', 'none');

    $('#search').keyup(function(){
        table.search($(this).val()).draw() ;
    })

    $('#search1').keyup(function(){
        table1.search($(this).val()).draw() ;
    })

    $('#search2').keyup(function(){
        table2.search($(this).val()).draw() ;
    })

    $('#search3').keyup(function(){
        table3.search($(this).val()).draw() ;
    })

    $('#search4').keyup(function(){
        table4.search($(this).val()).draw() ;
    })

    $('#search_from, #search_to').on('change', function () {
        table.draw();
    });
</script>

<script>
    $(document).ready(function () {
        // $('#table-3_dataTables_length').css('margin-top', '-100px');
        // $('#table-3_filter').css('margin-top', '-100px');
        // $('#table-3_filter').css('margin-bottom', '0px');
        // $('#table-3_filter label').css('visibility', 'hidden');
        // $('#table-2_filter label').css('visibility', 'hidden');
        // $('#table-2_filter').css('display', 'none');
        $('.dataTables_filter').css('display', 'none');
    });
</script>

<script>
    // utils
    // untuk handler file upload get name and size
    function fileUploadHandler(inputElement){
        const {name, size} = inputElement.files[0]
        const parentContainer = inputElement.parentElement
        const svgElement = parentContainer.querySelector('svg')
        const paragrafElement = parentContainer.querySelector('p')

        svgElement.style = 'visibility: hidden'
        paragrafElement.classList.remove('hidden')
        paragrafElement.textContent = `${name} | ${(size / 1024).toFixed(1)}KB`
    }

    // handler sorting hidden column on table
    function sorting(currBtn, tableId){
        const textContent = currBtn.textContent
        const tableContainer = document.getElementById(tableId);
        const column = tableContainer.querySelector('.column-hidden')
        
        if(textContent === 'Newest' && !column.classList.contains('sorting_asc')){
            column.click()
        }else if(textContent === 'Latest' && !column.classList.contains('sorting_desc')){
            column.click()
        }
    }
</script>

@stack('after_scripts')

</body>

</html>