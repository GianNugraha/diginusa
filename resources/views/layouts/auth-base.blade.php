<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{$title??'Login - sistem laporan keuangan'}}</title>
    {{-- tailwind css --}}
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    {{-- custom insaf css --}}
    {{-- <link href="{{ asset('css/main.css') }}" rel="stylesheet"> --}}
    <link rel="shortcut icon" href="{{url('assets/images/favicon.png')}}" type="image/x-icon">

</head>

<body>
    {{-- container --}}
    {{-- <div class="block lg:flex wrapper"> --}}
    <div class="flex  flex-col-reverse xl:flex-row 2xl:flex-row">
        {{-- image side hero --}}
        {{-- <div class="hidden lg:flex items-start justify-end w-full lg:w-2/4 p-10 h-screen hero-login" --}}
        <div class="lg:flex hidden items-start justify-end w-full xl:w-2/4 2xl:w-2/4 p-10 h-screen hero-login bg-no-repeat bg-cover bg-top"
        style="background-image: url({{ url('assets/images/login-digi.jpg') }})">
        <img src="{{ url('assets/images/.jpg') }}" alt="">
        </div>
    
        {{-- form login --}}
        <div class="flex bg-utama w-full xl:w-2/4 h-screen items-center justify-center py-5 lg:py-10 px-2 lg:px-20 forms">
            {{ $slot }}
        </div>
    </div>

    @stack('before_scripts')
    {{-- Jquery --}}
    <script src="https://code.jquery.com/jquery-3.6.0.js"
    integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script> 
    <script src="//unpkg.com/alpinejs" defer></script>
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
    @stack('after_scripts')

</body>

</html>
