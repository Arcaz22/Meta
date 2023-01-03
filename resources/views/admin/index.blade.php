@extends('admin.layouts.sidebar')
@section('container')

<x-auth-session-status class="mb-4" :status="session('berhasil')" />
<div class="grid lg:grid-cols-3 sm:grid-cols-2 p-4 gap-10">
  <!--Grid starts here-->
  <div class="flex items-center justify-between p-5 bg-white rounded shadow-sm">
    <div>
      <div class="text-sm text-black font-bold">Jumlah User</div>
      <div class="flex items-center pt-1">
        <div class="text-3xl font-medium text-gray-600 ">{{ $jumlah_user }}</div>
      </div>
    </div>
    <div class="text-pink-500">
      <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"></path></svg>
    </div>
  </div>
  <div class="flex items-center justify-between p-5 bg-white rounded shadow-sm">
    <div>
      <div class="text-sm text-black font-bold">Jumlah Pesanan</div>
      <div class="flex items-center pt-1">
        <div class="text-3xl font-medium text-gray-600 ">{{ $jumlah_memesan }}</div>
      </div>
    </div>
    <div class="text-pink-500">
      <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2m-6 9l2 2 4-4"></path></svg>
    </div>
  </div>
  <div class="flex items-center justify-between p-5 bg-white rounded shadow-sm">
    <div>
      <div class="text-sm text-black font-bold">Jumlah Feedback</div>
      <div class="flex items-center pt-1">
        <div class="text-3xl font-medium text-gray-600 ">{{ $jumlah_feedback }}</div>
      </div>
    </div>
    <div class="text-pink-500">
      <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 8h10M7 12h4m1 8l-4-4H5a2 2 0 01-2-2V6a2 2 0 012-2h14a2 2 0 012 2v8a2 2 0 01-2 2h-3l-4 4z"></path></svg>
      </div>
    </div>
</div>

<div class=" mt-5 grid lg:grid-cols-3 md:grid-cols-3 p-4 gap-3">

  <div class="col-span-2 flex flex-col p-8 bg-white rounded shadow-sm">
    <b class="text-2xl flex flex-row text-black mx-auto">Feedback<svg class="w-6 h-6 text-pink-500" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 8h10M7 12h4m1 8l-4-4H5a2 2 0 01-2-2V6a2 2 0 012-2h14a2 2 0 012 2v8a2 2 0 01-2 2h-3l-4 4z"></path></svg></b>
    <table class="w-full divide-y divide-gray-300">
      <thead class="bg-gray-50">
        <tr>
          <th scope="col" class="px-4 py-2 text-left text- font-semibold text-gray-900">Nama</th>
          <th scope="col" class="px-4 py-2 text-left text- font-semibold text-gray-900">Feedback</th>
        </tr>
      </thead>
      <tbody class="divide-y divide-gray-200 bg-white">
        @foreach ($feedback as $akun => $data)
        <tr>
          <td class="whitespace-nowrap px-4 py-2 text-sm font-medium text-gray-900">{{ $data->user->name  }}</td>
          <td class="whitespace-nowrap px-4 py-2 text-sm font-medium text-gray-900">{{ $data->komen }}</td>
        </tr>
        @endforeach
      </tbody>
    </table>
  </div>

  <div class=" flex flex-col   p-5 bg-white rounded shadow-sm">
    <b class="text-2xl flex flex-row text-black mx-auto">User<svg class="w-6 h-6 text-pink-500" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"></path></svg></b>
    <table class="w-full divide-y divide-gray-300">
      <thead class="bg-gray-50">
        <tr>
          <th scope="col" class="px-4 py-2 text-left text- font-semibold text-gray-900">Nama</th>
          <th scope="col" class="px-4 py-2 text-left text- font-semibold text-gray-900">Role</th>
        </tr>
      </thead>
      <tbody class="divide-y divide-gray-200 bg-white">
        @foreach ($user as $akun => $data)
        <tr>
          <td class="whitespace-nowrap px-4 py-2 text-sm font-medium text-gray-900">{{ $data->name }}</td>
          <td class="whitespace-nowrap px-4 py-2 text-sm font-medium text-gray-900">{{ $data->role }}</td>
        </tr>
        @endforeach
      </tbody>
    </table>
  </div>
</div>


{{ $feedback->links() }}
{{-- <div class="w-1/2 overflow-x-auto shadow ring-1 ring-black ring-opacity-5 rounded-lg mx-auto mb-5">
  <table class="w-full divide-y divide-gray-300">
    <thead class="bg-gray-50">
      <tr>
        <th scope="col" class="px-4 py-2 text-left text- font-semibold text-gray-900">Nama</th>
        <th scope="col" class="px-4 py-2 text-left text- font-semibold text-gray-900">Role</th>
      </tr>
    </thead>
    <tbody class="divide-y divide-gray-200 bg-white">
      @foreach ($user as $akun => $data)
      <tr>
        <td class="whitespace-nowrap px-4 py-2 text-sm font-medium text-gray-900">{{ $data->name }}</td>
        <td class="whitespace-nowrap px-4 py-2 text-sm font-medium text-gray-900">{{ $data->role }}</td>
      </tr>
      @endforeach
    </tbody>
  </table>
</div> --}}

{{-- {{ $user->links() }} --}}

@endsection