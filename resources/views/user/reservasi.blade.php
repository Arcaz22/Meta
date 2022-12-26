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
    <div name='about' class='w-full h-screen text-gray-300'>
      <div class='flex flex-col justify-center items-center w-full h-full'>
        <div class='max-w-[1000px] w-full grid grid-cols-2 gap-8'>
          <div class='sm:text-left pb-8 pl-4'>
           <x-auth-session-status class="mb-4" :status="session('success')" />
           <p class='text-black text-4xl font-bold inline border-b-4 border-pink-600'>
             Pesan Travel
           </p>
         </div>
         </div>
         <div class='max-w-[1000px] w-full grid sm:grid-cols-2 gap-8 px-4'>
           <div class="aspect-w-3 aspect-h-2 bg-gray-100 rounded-lg overflow-hidden">
             <img src="img/seat.png" alt="">
           </div>
           <div class="xl:mt-16">
            <form action="/reservasi" method="POST" class="grid grid-cols-1 gap-y-6 sm:grid-cols-2 sm:gap-x-8">
              @csrf
              <div>
                <label for="first-name" class="block text-sm font-medium text-gray-700">Jurusan</label>
                <div class="mt-1">
                  <select id="country" name="jurusan_id" class="text-gray-500 focus:ring-indigo-500 focus:border-indigo-500 rounded-md w-full">
                    @foreach ($jurusans as $jurusan)
                        @if (old('jurusan_id') == $jurusan->id)
                        <option value="{{ $jurusan->id }}" selected>{{ $jurusan->id }}</option>
                        @else
                        <option value="{{ $jurusan->id }}">{{ $jurusan->kota_asal }} - {{ $jurusan->kota_tujuan }}</option>
                        @endif
                    @endforeach
                  </select>
                </div>
              </div>
              <div>
                <label for="email" class="block text-sm font-medium text-gray-700">Tanggal Keberangkatan</label>
                <div class="mt-1">
                  <input id="tanggal_reservasi" name="tanggal_reservasi" type="date" autocomplete="tanggal_keberangkatan" class="py-3 px-4 block shadow-sm focus:ring-indigo-500 focus:border-indigo-500 border-gray-300 rounded-md w-full">
                </div>
              </div>
              <div class="sm:col-span-2">
                <button type="submit" class="w-full inline-flex items-center justify-center px-6 py-3 border border-transparent rounded-md shadow-sm text-base font-medium text-white bg-indigo-600 hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">Pesan</button>
              </div>
            </form>
           </div>
         </div>
     </div>
   </div>
  </x-app-layout>
</body>
</html>

