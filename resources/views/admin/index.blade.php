@extends('layouts.sidebar')
@section('container')

<div class="grid lg:grid-cols-3 sm:grid-cols-2 p-4 gap-10 ">
  <!--Grid starts here-->
  <div class="flex items-center justify-between p-5 bg-white rounded shadow-sm">
    <div>
      <div class="text-sm text-gray-400 ">User</div>
      <div class="flex items-center pt-1">
        <div class="text-3xl font-medium text-gray-600 ">{{ $jumlah_user }}</div>
      </div>
    </div>
    <div class="text-pink-500">
      <svg xmlns="http://www.w3.org/2000/svg" class="h-10 w-10" viewBox="0 0 20 20" fill="currentColor">
        <path fill-rule="evenodd"
          d="M10 18a8 8 0 100-16 8 8 0 000 16zm.707-10.293a1 1 0 00-1.414-1.414l-3 3a1 1 0 000 1.414l3 3a1 1 0 001.414-1.414L9.414 11H13a1 1 0 100-2H9.414l1.293-1.293z"
          clip-rule="evenodd" />
      </svg>
    </div>
  </div>
  <div class="flex items-center justify-between p-5 bg-white rounded shadow-sm">
    <div>
      <div class="text-sm text-gray-400 ">Memesan</div>
      <div class="flex items-center pt-1">
        <div class="text-3xl font-medium text-gray-600 ">{{ $jumlah_memesan }}</div>
      </div>
    </div>
    <div class="text-pink-500">
      <svg xmlns="http://www.w3.org/2000/svg" class="h-10 w-10" viewBox="0 0 20 20" fill="currentColor">
        <path fill-rule="evenodd"
          d="M10 18a8 8 0 100-16 8 8 0 000 16zm.707-10.293a1 1 0 00-1.414-1.414l-3 3a1 1 0 000 1.414l3 3a1 1 0 001.414-1.414L9.414 11H13a1 1 0 100-2H9.414l1.293-1.293z"
          clip-rule="evenodd" />
      </svg>
    </div>
  </div>
  <div class="flex items-center justify-between p-5 bg-white rounded shadow-sm">
    <div>
      <div class="text-sm text-gray-400 ">Jumlah Feedback</div>
      <div class="flex items-center pt-1">
        <div class="text-3xl font-medium text-gray-600 ">34</div>
      </div>
    </div>
    <div class="text-pink-500">
      <svg xmlns="http://www.w3.org/2000/svg" class="h-10 w-10" viewBox="0 0 20 20" fill="currentColor">
        <path fill-rule="evenodd"
          d="M10 18a8 8 0 100-16 8 8 0 000 16zm.707-10.293a1 1 0 00-1.414-1.414l-3 3a1 1 0 000 1.414l3 3a1 1 0 001.414-1.414L9.414 11H13a1 1 0 100-2H9.414l1.293-1.293z"
          clip-rule="evenodd" />
        </svg>
      </div>
    </div>
</div>

<div class="w-full overflow-x-auto shadow ring-1 ring-black ring-opacity-5 rounded-lg mx-auto mb-5">
  <table class="w-full divide-y divide-gray-300">
    <thead class="bg-gray-50">
      <tr>
        <th scope="col" class="px-4 py-2 text-left text- font-semibold text-gray-900">Nama</th>
        <th scope="col" class="px-4 py-2 text-left text- font-semibold text-gray-900">Role</th>
        <th scope="col" class="text-left text- font-semibold text-gray-900">Edit</th>
      </tr>
    </thead>
    <tbody class="divide-y divide-gray-200 bg-white">
      @foreach ($user as $akun => $data)
      <tr>
        <td class="whitespace-nowrap px-4 py-2 text-sm font-medium text-gray-900">{{ $data->name }}</td>
        <td class="whitespace-nowrap px-4 py-2 text-sm font-medium text-gray-900">{{ $data->stauts }}</td>
        <td class="whitespace-nowrap font-medium text-gray-900">
          {{-- <form action="{{ route('admin.destroy') }}" method="post">
            @csrf
            @method('DELETE')
            <button type="submit" class="btn btn-danger">Hapus</button>
          </form> --}}
        </td>
      </tr>
      @endforeach
    </tbody>
  </table>
</div>

{{ $user->links() }}

@endsection