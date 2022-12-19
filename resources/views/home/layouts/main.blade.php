<!doctype html>
<html>

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="./dist/output.css" rel="stylesheet">
  <link rel="stylesheet" href="path/to/font-awesome/css/font-awesome.min.css">
  @vite('resources/css/app.css')
</head>

<body>
  <!-- navbar -->
  @include('home.layouts.navbar')

  <!-- Content -->
  <div id="home" name='home' class='w-full bg-[#ccd6f6]'>
    <div class='max-w-[1000px] mx-auto px-8 flex flex-col justify-center'>

      @yield('container')

    </div>
  </div>

  {{-- footer --}}
  {{-- @include('home.layouts.footer') --}}
  
  @vite('resources/js/index.js')
</body>



</html>