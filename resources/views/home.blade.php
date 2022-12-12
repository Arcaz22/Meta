@extends('layouts.main')
@section('container')

<div id="home" name='home' class='w-full h-screen bg-rose-50'>
  <div class='max-w-[1000px] mx-auto px-8 flex flex-col justify-center h-full'>
    <div>
      <h1 class='text-4xl sm:text-7xl font-bold inline border-b-4 border-pink-600 '>MetaTrans</h1>
    </div>
    <br>

    <h5 class=' text-gray-600 py-4 max-w-[700px]'>
      MetaTrans merupakan jasa transportasi antar kota point to point dengan jam keberangkatan terjadwal sehingga bisa memilih jadwal sesuai kebutuhan dilengkapi dengan custom seat yang nyaman yang dapat dipesan secara online.
    </h5>
    <div>
      <button
        class='text-white group border-2 px-6 py-3 my-2 flex items-center hover:bg-pink-600 hover:border-pink-600'>
        View Work
        <span class='group-hover:rotate-90 duration-300'>
          <HiArrowNarrowRight class='ml-3 ' />
        </span>
      </button>
    </div>
  </div>
</div>


@endsection