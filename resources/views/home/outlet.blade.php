@extends('home.layouts.main')
@section('container')

<div id="outlet" name='outlet' class='text-gray-600 text-center'>
  <div class='max-w-[1000px] mx-auto p-4 flex flex-col justify-center'>
    <div class="mt-24">
      <p class='text-4xl font-bold inline border-b-4 border-pink-600 '>OUTLET</p>
    </div>

    <!-- <div class='w-full grid grid-cols-1 sm:grid-cols-3 gap-3 text-center py-8'> -->
      <div class="mt-12 mx-auto max-w-md px-4 grid gap-8 sm:max-w-lg sm:px-6 lg:px-8 lg:grid-cols-3 lg:max-w-7xl mb-12">
        <div class="flex flex-col rounded-lg shadow-lg overflow-hidden ">
          <div class="flex-shrink-0">
            <img class="h-48 w-full bg-white " src="img/bdg.png" alt="">
          </div>
          <div class="flex-1 bg-white p-6 flex flex-col justify-between">
            <div class="flex-1">
              <p class="text-sm text-center font-medium text-cyan-600">
                <a href="#" class="hover:underline"> BANDUNG </a>
              </p>
              <br>
              <div class="flex justify-center">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6 mr-2"> 
                  <path stroke-linecap="round" stroke-linejoin="round" d="M2.25 6.75c0 8.284 6.716 15 15 15h2.25a2.25 2.25 0 002.25-2.25v-1.372c0-.516-.351-.966-.852-1.091l-4.423-1.106c-.44-.11-.902.055-1.173.417l-.97 1.293c-.282.376-.769.542-1.21.38a12.035 12.035 0 01-7.143-7.143c-.162-.441.004-.928.38-1.21l1.293-.97c.363-.271.527-.734.417-1.173L6.963 3.102a1.125 1.125 0 00-1.091-.852H4.5A2.25 2.25 0 002.25 4.5v2.25z" />
                </svg> 
                <p class="text-gray-500">090909090</p>
              </div>
                <p class="text-sm text-gray-400">
                  BANDUNG TRADE CENTRALL MALL
                </p>
            </div>
            <div class="mt-6 flex justify-center">
              <button type="button" class="inline-flex items-center px-2 py-2 border border-transparent shadow-sm text-sm leading-4 font-medium rounded-md text-white bg-pink-600 hover:bg-pink-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
                <p class="text-sm">LIHAT DI MAP</p> 
               </button>
            </div>
          </div>
        </div>

        <div class="flex flex-col rounded-lg shadow-lg overflow-hidden">
          <div class="flex-shrink-0">
            <img class="h-48 w-full bg-white" src="img/krw.png" alt="">
          </div>
          <div class="flex-1 bg-white p-6 flex flex-col justify-between">
            <div class="flex-1">
              <p class="text-sm text-center font-medium text-cyan-600">
                <a href="#" class="hover:underline"> KARAWANG </a>
              </p>
              <br>
              <div class="flex justify-center">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6 mr-2"> 
                  <path stroke-linecap="round" stroke-linejoin="round" d="M2.25 6.75c0 8.284 6.716 15 15 15h2.25a2.25 2.25 0 002.25-2.25v-1.372c0-.516-.351-.966-.852-1.091l-4.423-1.106c-.44-.11-.902.055-1.173.417l-.97 1.293c-.282.376-.769.542-1.21.38a12.035 12.035 0 01-7.143-7.143c-.162-.441.004-.928.38-1.21l1.293-.97c.363-.271.527-.734.417-1.173L6.963 3.102a1.125 1.125 0 00-1.091-.852H4.5A2.25 2.25 0 002.25 4.5v2.25z" />
                </svg> 
                <p class="text-gray-500">090909090</p>
              </div>
                <p class="text-sm text-gray-400">
                MALL KARAWANG CENTRAL PLAZA
                </p>
            </div>
            <div class="mt-6 flex justify-center">
              <button type="button" class="inline-flex items-center px-2 py-2 border border-transparent shadow-sm text-sm leading-4 font-medium rounded-md text-white bg-pink-600 hover:bg-pink-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
                <p class="text-sm">LIHAT DI MAP</p> 
               </button>
            </div>
          </div>
        </div>

        <div class="flex flex-col rounded-lg shadow-lg overflow-hidden">
          <div class="flex-shrink-0">
            <img class="h-48 w-full bg-white" src="img/bekasi.png" alt="">
          </div>
          <div class="flex-1 bg-white p-6 flex flex-col justify-between">
            <div class="flex-1">
              <p class="text-sm text-center font-medium text-cyan-600">
                <a href="#" class="hover:underline"> BEKASI </a>
              </p>
              <br>
              <div class="flex justify-center">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6 mr-2"> 
                  <path stroke-linecap="round" stroke-linejoin="round" d="M2.25 6.75c0 8.284 6.716 15 15 15h2.25a2.25 2.25 0 002.25-2.25v-1.372c0-.516-.351-.966-.852-1.091l-4.423-1.106c-.44-.11-.902.055-1.173.417l-.97 1.293c-.282.376-.769.542-1.21.38a12.035 12.035 0 01-7.143-7.143c-.162-.441.004-.928.38-1.21l1.293-.97c.363-.271.527-.734.417-1.173L6.963 3.102a1.125 1.125 0 00-1.091-.852H4.5A2.25 2.25 0 002.25 4.5v2.25z" />
                </svg> 
                <p class="text-gray-500">090909090</p>
              </div>
                <p class="text-sm text-gray-400">
                 MALL LIPO CIKARANG
                </p>
            </div>
            <div class="mt-6 flex justify-center">
              <button type="button" class="inline-flex items-center px-2 py-2 border border-transparent shadow-sm text-sm leading-4 font-medium rounded-md text-white bg-pink-600 hover:bg-pink-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
                <p class="text-sm">LIHAT DI MAP</p> 
               </button>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

@endsection