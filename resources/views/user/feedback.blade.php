<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Reservasi</title>
    <link rel="stylesheet" href="path/to/font-awesome/css/font-awesome.min.css">
    @vite('resources/css/app.css')
</head>
<body>
    
   <x-app-layout>
    <div name='about' class='w-full h-screen bg-[#0a192f] text-gray-300'>
      <div class='flex flex-col justify-center items-center w-full h-full'>
        <div class='max-w-[1000px] w-full grid grid-cols-2 gap-8'>
          </div>
          <div class='max-w-[1000px] w-full grid sm:grid-cols-2 gap-8 px-4'>
            <form action="#" method="POST" class="grid grid-cols-1 gap-y-6 sm:grid-cols-2 sm:gap-x-8">
              <div class="sm:col-span-2">
                <label for="company" class="block text-sm font-medium text-gray-700">Nama</label>
                <div class="mt-1">
                  <input type="text" name="company" id="company" autocomplete="organization" class="py-3 px-4 block w-full shadow-sm focus:ring-indigo-500 focus:border-indigo-500 border-gray-300 rounded-md">
                </div>
              </div>
              <div class="sm:col-span-2">
                <label for="message" class="block text-sm font-medium text-gray-700">Message</label>
                <div class="mt-1">
                  <textarea id="message" name="message" rows="4" class="py-3 px-4 block w-full shadow-sm focus:ring-indigo-500 focus:border-indigo-500 border border-gray-300 rounded-md"></textarea>
                </div>
              </div>
              <div class="sm:col-span-2">
                <button type="submit" class="w-full inline-flex items-center justify-center px-6 py-3 border border-transparent rounded-md shadow-sm text-base font-medium text-white bg-indigo-600 hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">Kirim</button>
              </div>
            </form>
            <div class='sm:text-right text-4xl font-bold'>
              <p>Hi. I'm Sai Kumar, nice to meet you. Please take a look around.</p>
            </div>
          </div>
      </div>
    </div>
  </x-app-layout>
  
</body>
</html>