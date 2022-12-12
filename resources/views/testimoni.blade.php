@extends('layouts.main')
@section('container')

<div id="contact" name='contact' class='w-full h-screen flex justify-center items-center p-6'>
  <div class="text-center pt-0 max-w-3xl mx-auto pb-4">

    <div class="mt-24">
      <p class='text-4xl font-bold inline border-b-4 border-pink-600 '>TESTIMONI</p>
    </div>

    
    <p class="mt-6 pt-2 md:mb-12 text-gray-500">
      Lorem ipsum dolor sit amet, consectetur adipisicing elit. Fugit, error amet numquam
      iure provident voluptate esse quasi, veritatis totam voluptas nostrum quisquam eum
      porro a pariatur veniam.
    </p>

    <div class="grid md:grid-cols-3 gap-12 text-center">
      <div class="mb-6 pt-4 md:mb-0">
        <div class="flex justify-center mb-6">
          <img
            src="https://mdbootstrap.com/img/Photos/Avatars/img%20(22).jpg"
            class="rounded-full shadow-lg w-24"
          />
        </div>
        <p class="text-xl my-4 text-gray-500">
          "Lorem ipsum dolor sit amet eos adipisci, consectetur adipisicing elit sed ut
          perspiciatis unde omnis."
        </p>
        <p class="italic">- Anna Morian</p>
      </div>
      <div class="mb-0 pt-4">
        <div class="flex justify-center mb-6">
          <img
            src="https://mdbootstrap.com/img/Photos/Avatars/img%20(19).jpg"
            class="rounded-full shadow-lg w-24"
          />
        </div>
        <p class="text-xl my-4 text-gray-500">
          "Neque cupiditate assumenda in maiores repudiandae mollitia architecto elit sed
          adipiscing elit."
        </p>
        <p class="italic">- Teresa May</p>
      </div>
      <div class="mb-0 pt-4">
        <div class="flex justify-center mb-6">
          <img
            src="https://mdbootstrap.com/img/Photos/Avatars/img%20(18).jpg"
            class="rounded-full shadow-lg w-24"
          />
        </div>
        <p class="text-xl my-4 text-gray-500">
          "Neque cupiditate assumenda in maiores repudiandae mollitia architecto elit sed
          adipiscing elit."
        </p>
        <p class="italic">- Lisa</p>
      </div>
    </div>

  </div>
</div>

@endsection