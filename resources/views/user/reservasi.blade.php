<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Reservasi</title>
    <link rel="shortcut icon" href="/img/favicon.png" type="image/x-icon">
    <link rel="stylesheet" href="{{ asset('css/seat.css') }}">
    @vite('resources/css/app.css')
</head>
<body>
    
  <x-app-layout>
    <div name='reservasi' class='w-full xl:h-screen text-gray-300 bg-[#ccd6f6]'>
      <div class='flex flex-col justify-center items-center w-full h-full'>
        <div class='max-w-[1000px] w-full grid grid-cols-2 gap-8'>
          <div class='sm:text-left pb-8 pl-4'>
           <p class='text-black text-4xl font-bold inline border-b-4 border-pink-600'>
             Pesan Travel
           </p>
         </div>
         </div>
         <div class='max-w-[1000px] w-full grid sm:grid-cols-2 gap-8 px-4 items-center'>
           <div class="aspect-w-3 aspect-h-2 bg-slate-50 rounded-lg overflow-hidden">
              <div class="grid grid-cols-3 gap-4 items-center ml-12" name="seat">
                  <div class="col-span-1 driver bg-red-500">
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                      <path d="M9 17a2 2 0 11-4 0 2 2 0 014 0zM19 17a2 2 0 11-4 0 2 2 0 014 0z"></path><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 16V6a1 1 0 00-1-1H4a1 1 0 00-1 1v10a1 1 0 001 1h1m8-1a1 1 0 01-1 1H9m4-1V8a1 1 0 011-1h2.586a1 1 0 01.707.293l3.414 3.414a1 1 0 01.293.707V16a1 1 0 01-1 1h-1m-6-1a1 1 0 001 1h1M5 17a2 2 0 104 0m-4 0a2 2 0 114 0m6 0a2 2 0 104 0m-4 0a2 2 0 114 0"></path>
                    </svg>
                  </div>
                  <div class="font-bold col-span-1 seat">
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                      <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5.121 17.804A13.937 13.937 0 0112 16c2.5 0 4.847.655 6.879 1.804M15 10a3 3 0 11-6 0 3 3 0 016 0zm6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                    </svg>1
                  </div>
                  <div class="font-bold col-span-1 seat">
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                      <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5.121 17.804A13.937 13.937 0 0112 16c2.5 0 4.847.655 6.879 1.804M15 10a3 3 0 11-6 0 3 3 0 016 0zm6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                    </svg>2
                  </div>
                  <div class="font-bold col-span-1 opacity-0">
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                      <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5.121 17.804A13.937 13.937 0 0112 16c2.5 0 4.847.655 6.879 1.804M15 10a3 3 0 11-6 0 3 3 0 016 0zm6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                    </svg>3
                  </div>
                  <div class="font-bold col-span-1 opacity-0">
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                      <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5.121 17.804A13.937 13.937 0 0112 16c2.5 0 4.847.655 6.879 1.804M15 10a3 3 0 11-6 0 3 3 0 016 0zm6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                    </svg>4
                  </div>
                  <div class="font-bold col-span-1 seat">
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                      <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5.121 17.804A13.937 13.937 0 0112 16c2.5 0 4.847.655 6.879 1.804M15 10a3 3 0 11-6 0 3 3 0 016 0zm6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                    </svg>3
                  </div>
                  <div class="font-bold col-span-1 seat">
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                      <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5.121 17.804A13.937 13.937 0 0112 16c2.5 0 4.847.655 6.879 1.804M15 10a3 3 0 11-6 0 3 3 0 016 0zm6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                    </svg>6
                  </div>
                  <div class="font-bold col-span-1 seat">
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                      <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5.121 17.804A13.937 13.937 0 0112 16c2.5 0 4.847.655 6.879 1.804M15 10a3 3 0 11-6 0 3 3 0 016 0zm6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                    </svg>5
                  </div>
                  <div class="font-bold col-span-1 seat">
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                      <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5.121 17.804A13.937 13.937 0 0112 16c2.5 0 4.847.655 6.879 1.804M15 10a3 3 0 11-6 0 3 3 0 016 0zm6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                    </svg>4
                  </div>
              </div>
           </div>
           <div>
            <form action="/reservasi" method="POST" class="grid grid-cols-1 gap-y-6 sm:grid-cols-2 sm:gap-x-8">
              @csrf
              <div class="sm:col-span-2">
                <label for="jurusan" class="block text-sm font-medium text-gray-700">
                  <b>Jurusan</b>
                </label>
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
                <label for="tanggal_keberangkatan" class="block text-sm font-medium text-gray-700">
                  <b>Tanggal Keberangkatan</b>
                </label>
                <div class="mt-1">
                  <input id="tanggal_reservasi" name="tanggal_reservasi" type="date" autocomplete="tanggal_keberangkatan" class="py-3 px-4 block shadow-sm focus:ring-indigo-500 focus:border-indigo-500 border-gray-300 rounded-md w-full" value="{{ old('tanggal_reservasi') }}">
                </div>
              </div>
              <div>
                <label for="waktu" class="block text-sm font-medium text-gray-700">
                  <b>Waktu</b>
                </label>
                <div class="mt-1">
                  <input id="waktu" name="waktu" type="time" autocomplete="waktu" class="py-3 px-4 block shadow-sm focus:ring-indigo-500 focus:border-indigo-500 border-gray-300 rounded-md w-full" value="{{ old('waktu') }}">
                </div>
              </div>
              <div class="opacity-0">
                <label for="seat-number" class="block text-sm font-medium text-gray-700">Seat</label>
                <div class="mt-1">
                  <input type="text" id="seat-number" value="" name="seat" type="text" autocomplete="seat" class="py-3 px-4 block shadow-sm focus:ring-indigo-500 focus:border-indigo-500 border-gray-300 rounded-md w-full" value="{{ old('seat') }}">
                </div>
              </div>
              <div>
                <button type="submit" class="w-full inline-flex items-center justify-center px-6 py-3 border border-transparent rounded-md shadow-sm text-base font-medium text-white bg-indigo-600 hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500" >Pesan</button>
              </div>
            </form>
           </div>
         </div>
     </div>
   </div>
  </x-app-layout>

  <script src="{{ asset('js/seat.js') }}"></script>
</body>
</html>

