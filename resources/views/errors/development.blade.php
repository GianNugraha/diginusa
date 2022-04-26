<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>{{ $title ?? 'Development Page' }}</title>
  <link rel="shortcut icon" href="{{url('assets/images/favicon.png')}}" type="image/x-icon">

  @stack('before_style')
  <link href="{{ asset('css/app.css') }}" rel="stylesheet">
  <link href="{{ asset('css/main.css') }}" rel="stylesheet">
  <link href="{{ asset('css/index.css') }}" rel="stylesheet">
  @stack('after_style')

</head>

<body class="grid bg-utama" style="height: 100vh">
  <main class="grid p-5 items-center justify-items-center">
      <div class="grid gap-5 justify-items-center text-white text-center">
          <div class="w-full md:w-3/4">
              <img src="{{ asset('assets/images/development.png') }}" alt="Development Image">
          </div>
          <h2>This Page is Under Construction</h2>
          <h4>We are working on it</h4>
          <a href="{{ route('home.index') }}" class="flex whitespace-nowrap text-white items-center justify-center shadow-xl w-full lg:w-auto focus:outline-none bg-dark hover:bg-darkGray px-10 py-3 lg:py-3 xl:px-16 2xl:px-20 rounded-lg font-medium text-sm xl:text-base 2xl:text-lg">BACK TO HOME</a>
      </div>
  </main>

  @stack('before_scripts')
  <!-- Alpine Plugins -->
    <script defer src="https://unpkg.com/@alpinejs/collapse@3.x.x/dist/cdn.min.js"></script>
    
    <!-- Alpine Core -->
    <script defer src="https://unpkg.com/alpinejs@3.x.x/dist/cdn.min.js"></script>
  <script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>

  <script src="{{ asset('js/index.js') }}" type="text/javascript" charset="utf-8"></script>
  
  <link href="https://unpkg.com/tailwindcss@^1.0/dist/tailwind.min.css" rel="stylesheet" />

@stack('after_scripts')

</body>
</html>