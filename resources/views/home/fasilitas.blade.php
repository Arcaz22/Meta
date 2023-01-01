@extends('home.layouts.main')
@section('container')

<div id="fasilitas" name='fasilitas' class=' text-gray-600 text-center '>
  <div class='max-w-[1000px] mx-auto p-4 flex flex-col justify-center  h-screen'>
    <div class="mt-30">
      <p class='text-4xl font-bold inline border-b-4 border-pink-600 '>FASILITAS</p>
    </div>

    <div class='w-full grid grid-cols-2 sm:grid-cols-4 gap-4 text-center py-8 pt-20'>

       {{-- <div class='shadow-md shadow-[#666c74] hover:scale-110 duration-500'>
        <img class='w-20 h-20 mt-5 mx-auto' src="img/24.png" alt="HTML icon" />
        <p class='my-4 text-gray-700'>24 HOURS SERVICE</p>
      </div> --}}


      <div class="shadow-md shadow-[#666c74] relative overflow-hidden bg-white max-w-xs rounded-md">
        <img src="img/24.png" class="w-20 h-20 mt-5 mx-auto" alt="Louvre" />
        <p class='my-4 text-gray-700 '>24 HOURS SERVICE</p>
        <div class="absolute top-0 right-0 bottom-0 left-0 w-full h-full overflow-hidden bg-fixed opacity-0 hover:opacity-95 transition duration-300 ease-in-out bg-pink-700">
          <p class="text-gray-100 pt-12  text-sm"> Dapat melayani customer untuk melakukan transaksi pemesanan online selama 24 jam.</p>
        </div>
      </div>

      <div class='shadow-md shadow-[#666c74] relative overflow-hidden bg-white max-w-xs rounded-md'>
        <img src="img/botol.png" class="w-20 h-20 mt-5 mx-auto" alt="Louvre" />
        <p class='my-4 text-gray-700 '>FREE MINERAL WATER</p>
        <div class="absolute top-0 right-0 bottom-0 left-0 w-full h-full overflow-hidden bg-fixed opacity-0 hover:opacity-95 transition duration-300 ease-in-out bg-pink-700">
          <p class="text-gray-100 pt-12  text-sm"> Setiap customer yang telah melakukan transaksi akan mendapatkan air minum.</p>
        </div>
      </div>

      <div class='shadow-md shadow-[#666c74] relative overflow-hidden bg-white max-w-xs rounded-md'>
        <img src="img/cas.png" class="w-20 h-20 mt-5 mx-auto" alt="Louvre" />
        <p class='my-4 text-gray-700 '>FREE CHARGING</p>
        <div class="absolute top-0 right-0 bottom-0 left-0 w-full h-full overflow-hidden bg-fixed opacity-0 hover:opacity-95 transition duration-300 ease-in-out bg-pink-700">
          <p class="text-gray-100 pt-12  text-sm"> Tersedia tempat charging pada setiap mobil.</p>
        </div>
      </div>

      <div class='shadow-md shadow-[#666c74] relative overflow-hidden bg-white max-w-xs rounded-md'>
        <img src="img/ac.png" class="w-20 h-20 mt-5 mx-auto" alt="Louvre" />
        <p class='my-4 text-gray-700 '>AIR CONDITIONER</p>
        <div class="absolute top-0 right-0 bottom-0 left-0 w-full h-full overflow-hidden bg-fixed opacity-0 hover:opacity-95 transition duration-300 ease-in-out bg-pink-700">
          <p class="text-gray-100 pt-12  text-sm"> Terdapat air conditioner pada setiap mobil.</p>
        </div>
      </div>
      
    </div>
  </div>
</div>


@endsection