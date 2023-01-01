@extends('home.layouts.main')
@section('container')

<div id="home" name='home' class='w-full h-screen bg-[#ccd6f6]'>
  <div class='max-w-[1000px] mx-auto px-8 flex flex-col justify-center h-full'>
    <div>
      <h1 class='text-6xl sm:text-8xl font-bold font-serif inline border-b-4 border-pink-600 '>MetaTrans</h1>
    </div>
    <br>

    <h4 class=' font-sans text-gray-600 py-4 max-w-[700px]'>
      MetaTrans merupakan jasa transportasi antar kota point to point dengan tanggal keberangkatan terjadwal sehingga bisa memilih jadwal sesuai kebutuhan dilengkapi dengan custom seat yang nyaman yang dapat dipesan secara online.
    </h4>
    <div>
      <a class="leading-none" href="/login">
        <button 
          class='text-slate-700 group border-2 px-6 py-3 my-2 flex items-center hover:bg-pink-600 hover:border-pink-600 hover:text-white'>
        Booking!
          <span class='group-hover:rotate-90 duration-300'>
            <HiArrowNarrowRight class='ml-3 ' />
          </span>
        </button>
    </a>
    </div>
  </div>
</div>

@endsection