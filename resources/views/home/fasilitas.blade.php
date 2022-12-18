@extends('home.layouts.main')
@section('container')

<div id="fasilitas" name='fasilitas' class=' text-gray-600 text-center'>
  <div class='max-w-[1000px] mx-auto p-4 flex flex-col justify-center w-full h-full'>
    <div>
      <p class='text-4xl font-bold inline border-b-4 border-pink-600 '>FASILITAS</p>
    </div>

    <div class='w-full grid grid-cols-2 sm:grid-cols-4 gap-4 text-center py-8'>
      <div class='shadow-md shadow-[#666c74] hover:scale-110 duration-500'>
        <img class='w-20 h-20 mt-5 mx-auto' src="img/24.png" alt="HTML icon" />
        <p class='my-4 text-gray-700'>24 HOURS SERVICE</p>
      </div>
      <div class='shadow-md shadow-[#666c74] hover:scale-110 duration-500'>
        <img class='w-20 h-20 mt-5 mx-auto' src="img/botol.png" alt="HTML icon" />
        <p class='my-4 text-gray-700'>FREE MINERAL WATER</p>
      </div>
      <div class='shadow-md shadow-[#666c74] hover:scale-110 duration-500'>
        <img class='w-20 h-20 mt-5 mx-auto' src="img/cas.png" alt="HTML icon" />
        <p class='my-4 text-gray-700'>FREE CHARGING</p>
      </div>
      <div class='shadow-md shadow-[#666c74] hover:scale-110 duration-500'>
        <img class='w-20 h-20 mt-5 mx-auto' src="img/ac.png" alt="HTML icon" />
        <p class='my-4 text-gray-700'>AIR CONDITIONER</p>
      </div>
    </div>
  </div>
</div>


@endsection