<nav class="bg-[#0a192f] fixed w-full h-[60px] flex justify-between items-center px-4 shadow-md">
  <a class="text-3xl font-bold leading-none" href="/reservasi">
    <img class="h-35 w-24 ml-20 pt-2 " src="img/logogo.png" alt="">
  </a>
  <div class="lg:hidden">
    <button class="navbar-burger flex items-center text-rose-200 p-3">
      <svg class="block h-4 w-4 fill-current" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
        <title>Navbar Landing Page</title>
        <path d="M0 3h20v2H0V3zm0 6h20v2H0V9zm0 6h20v2H0v-2z"></path>
      </svg>
    </button>
  </div>
  <ul
    class="hidden absolute top-1/2 left-1/2 transform -translate-y-1/2 -translate-x-1/2 lg:mx-auto lg:flex lg:items-center lg:w-auto lg:space-x-6">
    <li>
      <a class=" text-sm text-rose-50 hover:text-rose-200" href="/">HOME</a>
    </li>
    <li class="text-gray-300">
      <svg xmlns="http://www.w3.org/2000/svg" fill="none" stroke="currentColor" class="w-4 h-4 current-fill"
        viewBox="0 0 24 24">
        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
          d="M12 5v0m0 7v0m0 7v0m0-13a1 1 0 110-2 1 1 0 010 2zm0 7a1 1 0 110-2 1 1 0 010 2zm0 7a1 1 0 110-2 1 1 0 010 2z" />
      </svg>
    </li>
    <li><a class="text-sm text-rose-50 hover:text-rose-200" href="/about">ABOUT US</a></li>
    <li class="text-gray-300">
      <svg xmlns="http://www.w3.org/2000/svg" fill="none" stroke="currentColor" class="w-4 h-4 current-fill"
        viewBox="0 0 24 24">
        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
          d="M12 5v0m0 7v0m0 7v0m0-13a1 1 0 110-2 1 1 0 010 2zm0 7a1 1 0 110-2 1 1 0 010 2zm0 7a1 1 0 110-2 1 1 0 010 2z" />
      </svg>
    </li>
    <li><a class="text-sm text-rose-50 hover:text-rose-200" href="/fasilitas">FASILITAS</a></li>
    <li class="text-gray-300">
      <svg xmlns="http://www.w3.org/2000/svg" fill="none" stroke="currentColor" class="w-4 h-4 current-fill"
        viewBox="0 0 24 24">
        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
          d="M12 5v0m0 7v0m0 7v0m0-13a1 1 0 110-2 1 1 0 010 2zm0 7a1 1 0 110-2 1 1 0 010 2zm0 7a1 1 0 110-2 1 1 0 010 2z" />
      </svg>
    </li>
    <li><a class="text-sm text-rose-50 hover:text-rose-200" href="/outlet">OUTLET</a></li>
    <li class="text-gray-300">
      <svg xmlns="http://www.w3.org/2000/svg" fill="none" stroke="currentColor" class="w-4 h-4 current-fill"
        viewBox="0 0 24 24">
        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
          d="M12 5v0m0 7v0m0 7v0m0-13a1 1 0 110-2 1 1 0 010 2zm0 7a1 1 0 110-2 1 1 0 010 2zm0 7a1 1 0 110-2 1 1 0 010 2z" />
      </svg>
    </li>
    <li><a class="text-sm text-rose-50 hover:text-rose-200" href="/testimoni">TESTIMONI</a></li>
  </ul>
  <a class="hidden lg:inline-block py-2 px-6 bg-blue-600 hover:bg-blue-700 text-sm text-white font-bold rounded-xl transition duration-200"
    href=" {{ route('login') }}">Sign In</a>
</nav>

<div class="navbar-menu relative z-50 hidden">
  <div class="navbar-backdrop fixed inset-0 bg-gray-800 opacity-25"></div>
  <nav class="fixed top-0 left-0 bottom-0 flex flex-col w-5/6 max-w-sm py-6 px-6 bg-[#0a192f] border-r overflow-y-auto">
    <div class="flex items-center mb-8">
      <a class="mr-auto text-3xl font-bold leading-none" href="/reservasi">
        <img class="h-40 w-25 " src="img/logogo.png" alt="">
      </a>
      <button class="navbar-close">
        <svg class="h-6 w-6 text-gray-400 cursor-pointer hover:text-gray-500" xmlns="http://www.w3.org/2000/svg"
          fill="none" viewBox="0 0 24 24" stroke="currentColor">
          <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path>
        </svg>
      </button>
    </div>
    <div>
      <ul>
        <li class="mb-1">
          <a class="block p-4 text-sm font-semibold text-gray-400 hover:bg-[#ccd6f6] hover:text-[#0a192f] rounded"
            href="/">HOME</a>
        </li>
        <li class="mb-1">
          <a class="block p-4 text-sm font-semibold text-gray-400 hover:bg-[#ccd6f6] hover:text-[#0a192f] rounded"
            href="/about">ABOUT US</a>
        </li>
        <li class="mb-1">
          <a class="block p-4 text-sm font-semibold text-gray-400 hover:bg-[#ccd6f6] hover:text-[#0a192f] rounded"
            href="/fasilitas">FASILITAS</a>
        </li>
        <li class="mb-1">
          <a class="block p-4 text-sm font-semibold text-gray-400 hover:bg-[#ccd6f6] hover:text-[#0a192f] rounded"
            href="/outlet">OUTLET</a>
        </li>
        <li class="mb-1">
          <a class="block p-4 text-sm font-semibold text-gray-400 hover:bg-[#ccd6f6] hover:text-[#0a192f] rounded"
            href="/testimoni">TESTIMONI</a>
        </li>
      </ul>
    </div>
    <div class="mt-auto">
      <div class="pt-6">
        <a class="block px-4 py-3 mb-2 leading-loose text-xs text-center text-white font-semibold bg-blue-600 hover:bg-blue-700  rounded-xl"
          href="{{ route('login') }}">Sign In</a>
      </div>
    </div>
  </nav>
</div>