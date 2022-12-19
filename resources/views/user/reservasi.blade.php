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
          <div class='sm:text-left pb-8 pl-4'>
            <p class='text-4xl font-bold inline border-b-4 border-pink-600'>
              Pesan Travel
            </p>
          </div>
          </div>
          <div class='max-w-[1000px] w-full grid sm:grid-cols-2 gap-8 px-4'>
            <div class='sm:text-right text-4xl font-bold'>
              {{-- <div class="container ">
                <img src="img/travel.png" class="h-4/6" alt="Seat">
              </div> --}}
              <div class="container h-full w-5/6 bg-white">
                <img src="" alt="">
              </div>
            </div>
            <form action="#" method="POST" class="grid grid-cols-1 gap-y-6 sm:grid-cols-2 sm:gap-x-8">
              <div>
                <label for="first-name" class="block text-sm font-medium text-gray-700">Keberangkatan</label>
                <div class="mt-1">
                  <select id="country" name="country" class="text-gray-500 focus:ring-indigo-500 focus:border-indigo-500 rounded-md w-full">
                    <option>Bandung</option>
                    <option>Karawang</option>
                    <option>Bekasi</option>
                  </select>
                </div>
              </div>
              <div>
                <label for="last-name" class="block text-sm font-medium text-gray-700">Tujuan</label>
                <div class="mt-1">
                  <select id="country" name="country" class="text-gray-500 focus:ring-indigo-500 focus:border-indigo-500 rounded-md w-full">
                    <option>Bandung</option>
                    <option>Karawang</option>
                    <option>Bekasi</option>
                  </select>
                </div>
              </div>
              <div>
                <label for="email" class="block text-sm font-medium text-gray-700">Tanggal Keberangkatan</label>
                <div class="mt-1">
                  <input id="tanggal_keberangkatan" name="tanggal_keberangkatan" type="date" autocomplete="tanggal_keberangkatan" class="py-3 px-4 block shadow-sm focus:ring-indigo-500 focus:border-indigo-500 border-gray-300 rounded-md w-full">
                </div>
              </div>
              <div>
                <label for="email" class="block text-sm font-medium text-gray-700">Nomer Kursi</label>
                <div class="mt-1">
                  <select id="country" name="country" class="text-gray-500 focus:ring-indigo-500 focus:border-indigo-500 rounded-md w-full">
                    <option>1</option>
                    <option>2</option>
                    <option>3</option>
                    <option>4</option>
                    <option>5</option>
                    <option>6</option>
                    <option>7</option>
                    <option>8</option>
                    <option>9</option>
                    <option>10</option>
                  </select>
                </div>
              </div>
              <div class="sm:col-span-2">
                <button type="submit" class="w-full inline-flex items-center justify-center px-6 py-3 border border-transparent rounded-md shadow-sm text-base font-medium text-white bg-indigo-600 hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">Pesan</button>
              </div>
            </form>
          </div>
      </div>
    </div>
  </x-app-layout>
  

</body>
</html>