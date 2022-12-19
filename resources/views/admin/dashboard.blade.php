<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Dashboard</title>
    <link rel="stylesheet" href="path/to/font-awesome/css/font-awesome.min.css">
    @vite('resources/css/app.css')
</head>
<body>
    
    <x-app-layout>
    <div id="home" name='home' class='w-full h-screen overflow-y-hidden bg-[#0a192f]'>
      <div class='max-w-[1000px] mx-auto px-8 flex flex-col justify-center h-full'>
        <div class=" mt-8 grid lg:grid-cols-3 sm:grid-cols-2 p-4 gap-10 ">
          <!--Grid starts here-->
          <div class="flex items-center justify-between p-5 bg-white rounded shadow-sm">
            <div>
              <div class="text-sm text-gray-400 ">Mengunjungi</div>
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
          <div class="flex items-center justify-between p-5 bg-white rounded shadow-sm">
            <div>
              <div class="text-sm text-gray-400 ">Memesan</div>
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
          <div class="flex items-center justify-between p-5 bg-white rounded shadow-sm">
            <div>
              <div class="text-sm text-gray-400 ">User</div>
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
        <div class="-mx-4 mt-8 overflow-hidden shadow ring-1 ring-black ring-opacity-5 sm:-mx-6 md:mx-0 md:rounded-lg">
          <table class="min-w-full divide-y divide-gray-300">
            <thead class="bg-gray-50">
              <tr>
                <th scope="col" class="py-3.5 pl-4 pr-3 text-left text-sm font-semibold text-gray-900 sm:pl-6">Nama</th>
                <th scope="col" class="px-3 py-3.5 text-left text-sm font-semibold text-gray-900">Role</th>
                <th scope="col" class="relative py-3.5 pl-3 pr-4 sm:pr-6">
                  <span class="sr-only">Edit</span>
                </th>
              </tr>
            </thead>
            <tbody class="divide-y divide-gray-200 bg-white">
              <tr>
                <td class="whitespace-nowrap py-4 pl-4 pr-3 text-sm font-medium text-gray-900 sm:pl-6">Lindsay Walton</td>
                <td class="whitespace-nowrap px-3 py-4 text-sm text-gray-500">Front-end Developer</td>
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
  </x-app-layout>
  

</body>
</html>