@extends('home.layouts.main')
@section('container')

<div id="fasilitas" name='fasilitas' class=' text-gray-600 text-center mt-50'>
  <div class='max-w-[1000px] mx-auto p-4 flex flex-col justify-center pt-50 h-screen'>
    <div>
      <p class='text-4xl font-bold inline border-b-4 border-pink-600 '>FASILITAS</p>
    </div>

    <div class='w-full grid grid-cols-2 sm:grid-cols-4 gap-4 text-center py-8 '>

      {{-- <div class='shadow-md shadow-[#666c74] bg-white  hover:scale-110 duration-500'>
        <img class='w-20 h-20 mt-5 mx-auto' src="img/botol.png" alt="HTML icon" />
        <p class='my-4 text-gray-700'>FREE MINERAL WATER</p>
      </div> --}}

      <div class="shadow-md shadow-[#666c74] bg-white relative overflow-hidden bg-cover max-w-xs">
        <img class='w-20 h-20 mt-5 mx-auto' src="img/24.png" alt="HTML icon" />
        <p class='my-4 text-gray-700'>24 HOURS SERVICE</p>
        <div class="absolute top-0 right-0 bottom-0 left-0 w-full h-full overflow-hidden bg-fixed opacity-0 hover:opacity-95 transition duration-300 ease-in-out bg-pink-600">
          <p class="text-white font-sans pt-8">
            Dapat melayani customer untuk melakukan transaksi online selama 24 jam.
          </p>
        </div>
      </div>

      <div class="shadow-md shadow-[#666c74] bg-white relative overflow-hidden bg-cover max-w-xs">
        <img class='w-20 h-20 mt-5 mx-auto' src="img/botol.png" alt="HTML icon" />
        <p class='my-4 text-gray-700'>FREE MINERAL WATER</p>
        <div class="absolute top-0 right-0 bottom-0 left-0 w-full h-full overflow-hidden bg-fixed opacity-0 hover:opacity-95 transition duration-300 ease-in-out bg-pink-600">
          <p class="text-white font-sans pt-10">
            Setiap customer mendapat air minum setelah melakukan transaksi.
          </p>
        </div>
      </div>

      <div class="shadow-md shadow-[#666c74] bg-white relative overflow-hidden bg-cover max-w-xs">
        <img class='w-20 h-20 mt-5 mx-auto' src="img/cas.png" alt="HTML icon" />
        <p class='my-4 text-gray-700'>FREE CHARGING</p>
        <div class="absolute top-0 right-0 bottom-0 left-0 w-full h-full overflow-hidden bg-fixed opacity-0 hover:opacity-95 transition duration-300 ease-in-out bg-pink-600">
          <p class="text-white font-sans pt-12">
            Tersedia tempat charging pada setiap mobil.
          </p>
        </div>
      </div>

      <div class="shadow-md shadow-[#666c74] bg-white relative overflow-hidden bg-cover max-w-xs">
        <img class='w-20 h-20 mt-5 mx-auto' src="img/ac.png" alt="HTML icon" />
        <p class='my-4 text-gray-700'>AIR CONDITIONER</p>
        <div class="absolute top-0 right-0 bottom-0 left-0 w-full h-full overflow-hidden bg-fixed opacity-0 hover:opacity-95 transition duration-300 ease-in-out bg-pink-600">
          <p class="text-white font-sans pt-12">
            Terdapat air conditioner pada setiap mobil.
          </p>
        </div>
      </div>
     
    </div>
  </div>
</div>


@endsection