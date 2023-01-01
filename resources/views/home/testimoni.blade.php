@extends('home.layouts.main')
@section('container')

<div id="contact" name='contact' class='text-gray-600 flex justify-center items-center p-6 h-screen'>
  <div class="text-center pt-0 max-w-3xl mx-auto pb-4">

    <div class="mt-20">
      <p class='text-4xl font-bold inline border-b-4 border-pink-600 '>TESTIMONI</p>
    </div>

    <section class="mb-20 text-gray-700">
      <div class="text-center md:max-w-xl lg:max-w-3xl mx-auto">
        <p class="pt-10  mb-6 pb-2 md:mb-12 md:pb-0">
         
        </p>
      </div>
    
      <div class="grid md:grid-cols-3 gap-6 lg:gap-12 text-center">
        @foreach ($feedback as $fb)
        <div class="mb-0">
          <div class="flex justify-center mb-6">
            <img
              src="https://mdbootstrap.com/img/Photos/Avatars/img%20(9).jpg"
              class="rounded-full shadow-lg w-32"
            />
          </div>
          <h4 class="text-xl font-semibold mb-4">{{ $fb->user->name }}</h4>
          <p class="mb-4">
            <svg
              aria-hidden="true"
              focusable="false"
              data-prefix="fas"
              data-icon="quote-left"
              class="w-6 pr-2 inline-block"
              role="img"
              xmlns="http://www.w3.org/2000/svg"
              viewBox="0 0 512 512"
            >
              <path
                fill="currentColor"
                d="M464 256h-80v-64c0-35.3 28.7-64 64-64h8c13.3 0 24-10.7 24-24V56c0-13.3-10.7-24-24-24h-8c-88.4 0-160 71.6-160 160v240c0 26.5 21.5 48 48 48h128c26.5 0 48-21.5 48-48V304c0-26.5-21.5-48-48-48zm-288 0H96v-64c0-35.3 28.7-64 64-64h8c13.3 0 24-10.7 24-24V56c0-13.3-10.7-24-24-24h-8C71.6 32 0 103.6 0 192v240c0 26.5 21.5 48 48 48h128c26.5 0 48-21.5 48-48V304c0-26.5-21.5-48-48-48z"
              ></path></svg>
              {{ $fb->komen }}
          </p>
        </div>
        @endforeach
      </div>
    </section>

  </div>
</div>

@endsection