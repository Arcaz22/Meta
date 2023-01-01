@extends('home.layouts.main')
@section('container')

<div id="outlet" name='bekasi' class='text-gray-600 text-center'>
  <div class='max-w-[1000px] mx-auto p-4 flex flex-col justify-center'>
    <div class="mt-24">
      <p class='text-4xl font-bold inline border-b-4 border-pink-600 '>OUTLET</p>
    </div>

    <div class='mt-12 mx-auto max-w-md px-4 grid gap-8 sm:max-w-lg sm:px-6 lg:px-8 lg:grid-cols-2 lg:max-w-7xl mb-12'>
      <div class="max-w-xs rounded-md">
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3965.460240677088!2d107.13478101476964!3d-6.334375295415894!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e699b514cb3c523%3A0x1a8baf6a913d636b!2sJACO%20TV%20SHOPPING%20Mall%20Lippo%20Cikarang!5e0!3m2!1sid!2sid!4v1672551200796!5m2!1sid!2sid" width="450" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
      </div>
      <div class="pl-10">
        <h3 class="sm:text-2xl font-bold text-left text-gray-700">
          MetaTrans Bekasi
        </h3>
        <h3 class="sm:text-2xl font-bold text-left text-gray-700">
         Mall Lippo Cikarang
        </h3>
        <h4 class="sm:text-lg font-sans text-gray-600 text-left pt-5">
          Jl. MH. Thamrin, Cibatu, Cikarang Sel, Kabupaten Bekasi.
        </h4>
        <button class="mt-20 mr-80 transition bg-pink-500 hover:bg-pink-700 text-white font-medium h-10 w-80 rounded-full">
          Bekasi-Bandung : Rp60.000
        </button>
        <button class="mt-5 mr-80 transition bg-pink-500 hover:bg-pink-700 text-white font-medium h-10 w-80 rounded-full">
          Bekasi-Karawang : Rp40.000
        </button>
      </div>
    </div>
    
  </div>

</div>

@endsection