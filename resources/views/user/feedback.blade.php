<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Reservasi</title>
    @vite('resources/css/app.css')
</head>
<body>
    
  <x-app-layout>
    <div name='feedback' class='w-full h-screen bg-[#ccd6f6]'>
      <div class='max-w-[1000px] mx-auto px-8 flex flex-col justify-center h-full'>
        <div class='sm:text-left pb-8 pl-4'>
          <x-auth-session-status class="mb-4" :status="session('komen')" />
          <p class='text-black text-4xl font-bold inline border-b-4 border-pink-600'>
            Feedback
          </p>
        </div>
        <div class="flex items-start space-x-4">
          <div class="flex-shrink-0">
            <img class="inline-block h-10 w-10 rounded-full" src="img/default.png" alt="">
          </div>
          <div class="min-w-0 flex-1">
            <form action="/feedback" class="relative" method="post">
              @csrf
              <div class="border border-gray-300 rounded-lg shadow-sm overflow-hidden focus-within:border-indigo-500 focus-within:ring-1 focus-within:ring-indigo-500">
                <label for="comment" class="sr-only">Add your comment</label>
                <textarea rows="3" name="komen" id="comment" class="block w-full py-3 border-0 resize-none focus:ring-0 sm:text-sm" placeholder="Add your comment..."></textarea>
              </div>
        
              <div class="absolute bottom-0 inset-x-0 pl-3 pr-2 py-2 flex justify-between">
                <div class="flex items-center space-x-5">
                  <div class="flex items-center">
                    <button type="button" class="-m-2.5 w-10 h-10 rounded-full flex items-center justify-center text-gray-400 hover:text-gray-500">
                    </button>
                  </div>
                </div>
                <div class="flex-shrink-0">
                  <button type="submit" class="inline-flex items-center px-4 py-2 border border-transparent text-sm font-medium rounded-md shadow-sm text-white bg-indigo-600 hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">Post</button>
                </div>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </x-app-layout>
  
</body>
</html>