@extends('layouts.sidebar')
@section('container')

  <div class='max-w-[1000px] mx-auto px-8 flex flex-col justify-center h-full'>
    <div>
      <p class='text-4xl text-black font-bold inline border-b-4 border-pink-600'>Cek Reservasi</p>
  </div>
      <div class="mt-8 flex flex-col">
        <table class="min-w-full divide-y divide-gray-300 my-5">
          <thead class="bg-gray-50">
            <tr>
              <th scope="col" class="py-3.5 pl-4 pr-3 text-left text-sm font-semibold text-gray-900 sm:pl-6">Nama</th>
              <th scope="col" class="px-3 py-3.5 text-left text-sm font-semibold text-gray-900">Keberangkatan</th>
              <th scope="col" class="px-3 py-3.5 text-left text-sm font-semibold text-gray-900">Tujuan</th>
              <th scope="col" class="px-3 py-3.5 text-left text-sm font-semibold text-gray-900">Tanggal</th>
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
              <td class="relative whitespace-nowrap py-4 pl-3 pr-4 text-right text-sm font-medium sm:pr-6">
                <a href="cek-reservasi/{{ $rs->id }}/edit" class="pr-1 text-indigo-600 hover:text-indigo-900">Edit</a>
                {{-- <button class="pl-1"><a href="#" class="text-indigo-600 hover:text-indigo-900">Hapus</a></button> --}}
                <form action="{{ route('admin.cek-delete', $rs->id) }}" method="post" class="d-inline">
                  @method("DELETE")
                  @csrf
                  <button class="btn btn-danger" type="submit" onclick="return confirm('Are you sure?')"><span data-feather="x-circle"></span>Hapus</button>
                </form>
              </td>
            </tr>
            @endforeach 

            <!-- More people... -->
          </tbody>
        </table>
        {{ $reservasis->links() }}
      </div>
    </div>
  </div>

@endsection