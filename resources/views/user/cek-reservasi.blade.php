<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Cek Reservasi</title>
    <link rel="stylesheet" href="path/to/font-awesome/css/font-awesome.min.css">
    @vite('resources/css/app.css')
</head>
<body>
    
    <x-app-layout>
    <div id="home" name='home' class='w-full h-screen overflow-y-hidden bg-[#0a192f]'>
      <div class='max-w-[1000px] mx-auto px-8 flex flex-col justify-center h-full'>
        <div>
          <p class='text-4xl text-white font-bold inline border-b-4 border-pink-600 '>Cek Reservasi</p>
      </div>
          <div class="mt-8 flex flex-col">
            <table class="min-w-full divide-y divide-gray-300">
              <thead class="bg-gray-50">
                <tr>
                  <th scope="col" class="px-3 py-3.5 text-left text-sm font-semibold text-gray-900">Keberangkatan</th>
                  <th scope="col" class="px-3 py-3.5 text-left text-sm font-semibold text-gray-900">Tujuan</th>
                  <th scope="col" class="px-3 py-3.5 text-left text-sm font-semibold text-gray-900">Tanggal Keberangkatan</th>
                </tr>
              </thead>
              <tbody class="divide-y divide-gray-200 bg-white">
                @foreach ($reservasis as $rs)
                <tr>
                  <td class="whitespace-nowrap py-4 pl-4 pr-3 text-sm font-medium text-gray-900 sm:pl-6">{{ $rs->jurusan->kota_asal }}</td>
                  <td class="whitespace-nowrap px-3 py-4 text-sm text-gray-500">{{ $rs->jurusan->kota_tujuan }}</td>
                  <td class="whitespace-nowrap px-3 py-4 text-sm text-gray-500">{{ $rs->tanggal_reservasi }}</td>
                </tr>
                @endforeach

                <!-- More people... -->
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>
  </x-app-layout>

</body>
</html>