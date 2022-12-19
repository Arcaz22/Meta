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
                  <th scope="col" class="py-3.5 pl-4 pr-3 text-left text-sm font-semibold text-gray-900 sm:pl-6">Name</th>
                  <th scope="col" class="px-3 py-3.5 text-left text-sm font-semibold text-gray-900">Keberangkatan</th>
                  <th scope="col" class="px-3 py-3.5 text-left text-sm font-semibold text-gray-900">Tujuan</th>
                  <th scope="col" class="relative py-3.5 pl-3 pr-4 sm:pr-6">
                    <span class="sr-only">Edit</span>
                  </th>
                </tr>
              </thead>
              <tbody class="divide-y divide-gray-200 bg-white">
                <tr>
                  <td class="whitespace-nowrap py-4 pl-4 pr-3 text-sm font-medium text-gray-900 sm:pl-6">Lindsay Walton</td>
                  <td class="whitespace-nowrap px-3 py-4 text-sm text-gray-500">Front-end Developer</td>
                  <td class="whitespace-nowrap px-3 py-4 text-sm text-gray-500">lindsay.walton@example.com</td>
                  <td class="relative whitespace-nowrap py-4 pl-3 pr-4 text-right text-sm font-medium sm:pr-6">
                    <button class="pr-1"><a href="#" class="text-indigo-600 hover:text-indigo-900">Edit</a></button>
                    <button class="pl-1"><a href="#" class="text-indigo-600 hover:text-indigo-900">Hapus</a></button>
                  </td>
                </tr>

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