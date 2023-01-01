<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link href="./dist/output.css" rel="stylesheet">
  <link rel="stylesheet" href="path/to/font-awesome/css/font-awesome.min.css">
  @vite('resources/css/app.css')
  <title>Document</title>
</head>
<body>
  
  <section class="h-screen">

    <!-- component -->
<div class="flex h-screen w-full items-center justify-center bg-cover bg-no-repeat bg-[#0a192f]">
  <div class="rounded-xl bg-[#ccd6f6] bg-opacity-70 px-16 py-10 shadow-lg backdrop-blur-md max-sm:px-8">
    <div class="text-white">
      <div class="mb-8 flex flex-col items-center">
        <a href="/">
          <img src="/img/meta.png" class="h-40 w-40 rounded-sm"alt="Sample image"/>
        </a>
        {{-- <h3 class="mb-2 text-lg font-sans font-bold pt-2">Welcome back, Admin</h3> --}}
        <p class="text-slate-600 pt-5">Please login to your account</p>
      </div>
        <x-auth-session-status class="mb-4" :status="session('error')" />
            <form action="{{ route('admin.login') }}" class="d-block" method="post">
              @csrf
        <div class="mb-4 text-lg">
          <input class="rounded-3xl border-none bg-yellow-500 bg-opacity-50 px-6 py-2 text-center text-inherit placeholder-slate-100 shadow-lg outline-none backdrop-blur-md" type="email" name="email" placeholder="username" />
        </div>

        <div class="mb-4 text-lg">
          <input class="rounded-3xl border-none bg-yellow-500 bg-opacity-50 px-6 py-2 text-center text-inherit placeholder-slate-100 shadow-lg outline-none backdrop-blur-md" type="password" name="password" placeholder="password" />
        </div>
        <div class="mt-8 flex justify-center text-lg text-black">
          <button type="submit" class="rounded-3xl bg-pink-700  px-10 py-2 text-white shadow-xl backdrop-blur-md transition-colors duration-300 hover:bg-pink-900">Login</button>
        </div>
      </form>
    </div>
  </div>
</div>
  </section>

</body>
</html>