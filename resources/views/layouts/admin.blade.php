<!DOCTYPE html>
<html lang="en" class="h-full bg-gray-900">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>{{$title??'Fixify'}} - Dashboard</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="h-full text-white bg-gray-900">

<div class="min-h-full">
  <!-- Navigation -->
  <nav class="bg-gray-800/50 border-b border-white/10 sticky top-0 z-50 backdrop-blur-md">
    <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
      <div class="flex h-16 items-center justify-between">
        <div class="flex items-center">
          <div class="shrink-0">
            <img src="{{ asset('img/logo.png') }}" alt="Fixify" class="h-8 w-auto" />
          </div>
          <div class="hidden md:block">
            <div class="ml-10 flex items-baseline space-x-4">
              <a href="/" class="{{ request()->is(['/'])?'bg-indigo-600':''}} rounded-md px-3 py-2 text-sm font-medium text-white hover:bg-white/5">Home</a>
              <a href="/tentang" class="{{ request()->is(['tentang'])?'bg-indigo-600':''}} rounded-md px-3 py-2 text-sm font-medium text-gray-300 hover:bg-white/5 hover:text-white">Tentang</a>
              <a href="/layanan" class="{{ request()->is(['layanan'])?'bg-indigo-600':''}} rounded-md px-3 py-2 text-sm font-medium text-gray-300 hover:bg-white/5 hover:text-white">Layanan</a>
              <a href="/pricelist" class="{{ request()->is(['pricelist'])?'bg-indigo-600':''}} rounded-md px-3 py-2 text-sm font-medium text-gray-300 hover:bg-white/5 hover:text-white">Pricelist</a>
              <a href="/dashboard" class="{{ request()->is(['dashboard'])?'bg-indigo-600':''}} rounded-md px-3 py-2 text-sm font-medium text-white hover:bg-white/5">Dashboard</a>
            </div>
          </div>
        </div>
        <div class="flex items-center gap-4">
          @auth
            <span class="text-sm text-gray-300">{{ Auth::user()->name }}</span>
            <div class="relative group">
              <button class="bg-indigo-600/20 hover:bg-indigo-600/40 text-indigo-300 px-3 py-2 rounded-lg text-sm transition-colors">
                <svg class="w-4 h-4 inline mr-1" fill="currentColor" viewBox="0 0 20 20">
                  <path fill-rule="evenodd" d="M10 9a3 3 0 100-6 3 3 0 000 6zm-7 9a7 7 0 1114 0H3z" clip-rule="evenodd"></path>
                </svg>
                Menu
              </button>
              <div class="absolute right-0 mt-0 w-48 bg-gray-700 rounded-lg shadow-lg opacity-0 invisible group-hover:opacity-100 group-hover:visible transition-all">
                <a href="{{ route('profile.edit') }}" class="block px-4 py-2 text-sm text-gray-300 hover:bg-gray-600 rounded-t-lg">
                  Edit Profile
                </a>
                <form method="POST" action="{{ route('logout') }}" class="block">
                  @csrf
                  <button type="submit" class="w-full text-left px-4 py-2 text-sm text-red-300 hover:bg-gray-600 rounded-b-lg">
                    Logout
                  </button>
                </form>
              </div>
            </div>
          @endauth
        </div>

  <!-- Main Content -->
  <main class="py-8">
    <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
      @yield('content')
    </div>
  </main>

  <!-- Footer -->
  <footer class="bg-gray-800/30 border-t border-white/10 py-10 mt-16">
    <div class="mx-auto max-w-7xl px-6 lg:px-8 text-center">
      <p class="text-sm text-gray-500">&copy; 2026 Fixify. Semua hak dilindungi undang-undang.</p>
    </div>
  </footer>
</div>

</body>
</html>
