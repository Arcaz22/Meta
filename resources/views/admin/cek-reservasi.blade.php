@extends('admin.layouts.sidebar')
@section('container')

  <div class='max-w-[1000px] mx-auto px-8 flex flex-col justify-center h-full'>
    <div>
      <p class='text-4xl text-black font-bold inline border-b-4 border-pink-600'>Cek Reservasi</p>
  </div>
      <div class="mt-8 flex flex-col">
        <x-auth-session-status class="mb-4" :status="session('success')" />
        <x-auth-session-status class="mb-4" :status="session('hapus')" />
        <table class="min-w-full divide-y divide-gray-300 my-5">
          <thead class="bg-gray-50">
            <tr>
              <th scope="col" class="py-3.5 pl-4 pr-3 text-left text-sm font-semibold text-gray-900 sm:pl-6">Nama</th>
              <th scope="col" class="px-3 py-3.5 text-left text-sm font-semibold text-gray-900">Keberangkatan</th>
              <th scope="col" class="px-3 py-3.5 text-left text-sm font-semibold text-gray-900">Tujuan</th>
              <th scope="col" class="px-3 py-3.5 text-left text-sm font-semibold text-gray-900">Tanggal</th>
              <th scope="col" class="px-3 py-3.5 text-left text-sm font-semibold text-gray-900">Waktu</th>
              <th scope="col" class="px-3 py-3.5 text-left text-sm font-semibold text-gray-900">Aksi</th>
            </tr>
          </thead>
          <tbody class="divide-y divide-gray-200 bg-white">
            @foreach ($reservasis as $rs)
            <tr>
              <td class="whitespace-nowrap py-4 pl-4 pr-3 text-sm font-medium text-gray-900 sm:pl-6">{{ $rs->user->name  }}</td>
              <td class="whitespace-nowrap px-3 py-4 text-sm text-gray-500">{{ $rs->jurusan->kota_asal }}</td>
              <td class="whitespace-nowrap px-3 py-4 text-sm text-gray-500">{{ $rs->jurusan->kota_tujuan }}</td>
              <td class="whitespace-nowrap px-3 py-4 text-sm text-gray-500">{{ $rs->tanggal_reservasi }}</td>
              <td class="whitespace-nowrap px-3 py-4 text-sm text-gray-500">{{ $rs->waktu }}</td>
              <td class="flex whitespace-nowrap py-4 pl-3 pr-4 text-sm font-medium sm:pr-6">
                <a href="cek-reservasi/{{ $rs->id }}/edit" class="pr-1 text-indigo-900 hover:text-indigo-600"><svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15.232 5.232l3.536 3.536m-2.036-5.036a2.5 2.5 0 113.536 3.536L6.5 21.036H3v-3.572L16.732 3.732z"></path></svg></a>
                {{-- <button class="pl-1"><a href="#" class="text-indigo-600 hover:text-indigo-900">Hapus</a></button> --}}
                <form action="{{ route('admin.cek-delete', $rs->id) }}" method="post" class="d-inline">
                  @method("DELETE")
                  @csrf
                  <button class="text-red-900 hover:text-red-600" type="submit" onclick="return confirm('Are you sure?')"><span data-feather="x-circle"></span><svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16"></path></svg></button>
                </form>
              </td>
            </tr>
            @endforeach 

            <!-- More people... -->
          </tbody>
        </table>
        {{ $reservasis->links(  ) }}
      </div>
    </div>
  </div>

@endsection
