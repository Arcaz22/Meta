<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="shortcut icon" href="/img/favicon.png" type="image/x-icon">
    <title>Cek Reservasi</title>
    @vite('resources/css/app.css')
</head>
<body>
    
    <x-app-layout>
    <div id="home" name='home' class='w-full h-screen overflow-y-hidden bg-[#ccd6f6]'>
      <div class='max-w-[1000px] mx-auto px-8 flex flex-col justify-center h-full'>
        <x-auth-session-status class="mb-4" :status="session('success')" />
        <div>
          <p class='text-black text-4xl font-bold inline border-b-4 border-pink-600'>Cek Reservasis</p>

        
      </div>
          <div class="mt-8 flex flex-col">

            <table class="min-w-full divide-y divide-gray-300 my-5">
              <thead class="bg-gray-50">
                <tr>
                  <th scope="col" class="px-3 py-3.5 text-left text-sm font-bold text-gray-900">Keberangkatan</th>
                  <th scope="col" class="px-3 py-3.5 text-left text-sm font-bold text-gray-900">Tujuan</th>
                  <th scope="col" class="px-3 py-3.5 text-left text-sm font-bold text-gray-900">Tanggal Keberangkatan</th>
                  <th scope="col" class="px-3 py-3.5 text-left text-sm font-bold text-gray-900">Waktu</th>
                  <th scope="col" class="px-3 py-3.5 text-left text-sm font-bold text-gray-900">Nomer Kursi</th>
                </tr>
              </thead>
              <tbody class="divide-y divide-gray-200 bg-white">
                @foreach ($reservasis as $rs)
                  @if (Auth::id() == $rs->user->id)
                  <tr>
                    <td class="whitespace-nowrap py-4 pl-4 pr-3 text-sm font-medium text-gray-900 sm:pl-6">{{ $rs->jurusan->kota_asal }}</td>
                    <td class="whitespace-nowrap px-3 py-4 text-sm text-gray-500">{{ $rs->jurusan->kota_tujuan }}</td>
                    <td class="whitespace-nowrap px-3 py-4 text-sm text-gray-500">{{ $rs->tanggal_reservasi }}</td>
                    <td class="whitespace-nowrap px-3 py-4 text-sm text-gray-500">{{ $rs->waktu }}</td>
                    <td class="whitespace-nowrap px-3 py-4 text-sm text-gray-500">{{ $rs->seat }}</td>
                  </tr>
                  @endif
                @endforeach

                <!-- More people... -->
              </tbody>
            </table>
            
            {{ $reservasis->links() }}
          </div>
        </div>
      </div>
    </div>
  </x-app-layout>

</body>
</html>