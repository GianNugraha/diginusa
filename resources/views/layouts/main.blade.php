<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>{{ $title ?? 'SIMLOG' }}</title>
  <link rel="shortcut icon" href="{{url('assets/images/simlog-favico-light.png')}}" type="image/x-icon">
  @stack('before_style')
  <link href="https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css" rel="stylesheet" />
  {{-- apexcharts --}}
  <link href="{{ asset('lib/apexcharts/dist/apexcharts.css') }}" rel="stylesheet">
  <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
  {{-- datatable --}}
  <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/v/dt/dt-1.10.25/af-2.3.7/b-1.7.1/b-html5-1.7.1/b-print-1.7.1/date-1.1.0/fc-3.3.3/fh-3.1.9/r-2.2.9/rg-1.1.3/rr-1.2.8/sc-2.0.4/sb-1.1.0/sp-1.3.0/sl-1.3.3/datatables.min.css"/>
  <link href="{{ asset('css/app.css') }}" rel="stylesheet">
  <link href="{{ asset('css/main.css') }}" rel="stylesheet">
  <link href="{{ asset('css/index.css') }}" rel="stylesheet">
  @stack('after_style')
</head>

<body>
  {{-- SIDEBAR --}}
  @include('layouts.sidebar')
  
  {{-- NAVBAR --}}
  <section class="content lg:py-4 md:py-4 py-0 md:px-5 px-0 md:block hidden" >
    @include('layouts.navbar')
  </section>

  {{-- DYNAMIC CONTENT --}}
  @yield("content")

  @section('script')
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
                $("#eye-show").addClass("hidden");
                $("#eye-hide").removeClass("hidden");
            } 
            else
            {
                //Change type attribute
                $(".show-hide-pw").attr("type", "password");
                $("#eye-show").removeClass("hidden");
                $("#eye-hide").addClass("hidden");
            }
        });
    });
</script>
  <script>
       $(document).ready(function() {
          $('.select2').select2();
        });
    $(document).ready( function () {
        $('#table-1').DataTable();
    } );
    
    $(document).ready( function () {
        $('#table-2').DataTable({
            "searching": false,
            "lengthChange": false,
        });
    } );
    oTable = $('#table-3').DataTable({
            "searching": true,
            "lengthChange": false,
    }); 
    $('#saerchOutside').keyup(function(){
        oTable.search($(this).val()).draw() ;
    })
  </script>
  <script>
      $(document).ready(function () {
          $('#table-3_dataTables_length').css('margin-top', '-100px');
          $('#table-3_filter').css('margin-top', '-100px');
          $('#table-3_filter').css('margin-bottom', '0px');
          $('#table-3_filter label').css('visibility', 'hidden');
      });
  </script>
  {{-- <script>
      var dtt1 = document.getElementById('dt1')
      var dtt2 = document.getElementById('dt2')
      dt1.onfocus = function (event) {
          this.type = 'date';
          this.focus();
      }
      dt2.onfocus = function (event) {
          this.type = 'date';
          this.focus();
      }
  </script> --}}
  <script>
    jQuery(function() {
        // Multiple images preview in browser
        var imagesPreview = function(input, placeToInsertImagePreview) {
            if (input.files) {
                var filesAmount = input.files.length;
                for (i = 0; i < filesAmount; i++) {
                    var reader = new FileReader();
                    $('#imgPrev').empty();
                    reader.onload = function(event) {
                        $($.parseHTML('<img class="h-52">')).attr('src', event.target.result).appendTo(placeToInsertImagePreview);
                    }
                    reader.readAsDataURL(input.files[i]);
                }
            }
        };
        jQuery(document).on('change','.updoc',function() {
            imagesPreview(this, 'div#imgPrev');
        });
    });
</script>
  @stack('after_scripts')
  
</body>

</html>