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
    <div class="px-6 h-full text-gray-800">
      <div class="flex xl:justify-center lg:justify-between justify-center items-center flex-wrap h-full g-6">
        <div class="grow-0 shrink-1 md:shrink-0 basis-auto xl:w-6/12 lg:w-6/12 md:w-9/12 mb-12 md:mb-0">
          <a href="/">
            <img
            src="/img/meta.png"
            class="w-full"
            alt="Sample image"
          />
          </a>
        </div>
        <div class="xl:ml-20 xl:w-5/12 lg:w-5/12 md:w-8/12 mb-12 md:mb-0">
          <x-auth-session-status class="mb-4" :status="session('error')" />
  
          <form action="{{ route('admin.login') }}" class="d-block" method="post">
            @csrf
  
            <!-- Email input -->
            <div class="mb-6">
              <input
                name="email"
                type="text"
                class="form-control block w-full px-4 py-2 text-xl font-normal text-gray-700 bg-white bg-clip-padding border border-solid border-gray-300 rounded transition ease-in-out m-0 focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none"
                placeholder="Email address"
              />
            </div>
  
            <!-- Password input -->
            <div class="mb-6">
              <input
                name="password"
                type="password"
                class="form-control block w-full px-4 py-2 text-xl font-normal text-gray-700 bg-white bg-clip-padding border border-solid border-gray-300 rounded transition ease-in-out m-0 focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none"
                placeholder="Password"
              />
            </div>
  
            <div class="text-center lg:text-left">
              <button
                type="submit"
                class="inline-block px-7 py-3 bg-blue-600 text-white font-medium text-sm leading-snug uppercase rounded shadow-md hover:bg-blue-700 hover:shadow-lg focus:bg-blue-700 focus:shadow-lg focus:outline-none focus:ring-0 active:bg-blue-800 active:shadow-lg transition duration-150 ease-in-out"
                "
              >
                Login
              </button>
            </div>
          </form>
        </div>
      </div>
    </div>
  </section>

</body>
</html>