<!DOCTYPE html>
<html lang="en" class="h-full bg-gray-900 smooth-scroll">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>{{$title??'Fixify'}}</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="h-full text-white">

<!-- Alert Container (untuk notifikasi otomatis) -->
<div id="alert-container"></div>

<div class="min-h-full">
  <nav class="bg-gray-800/50 border-b border-white/10 sticky top-0 z-50 backdrop-blur-md">
    <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
      <div class="flex h-16 items-center justify-between">
        <div class="flex items-center">
          <div class="shrink-0">
            <img src="{{ asset('fixifylogo1.png') }}" alt="Fixify" class="h-10 w-auto object-contain" />
          </div>
          <div class="hidden md:block">
            <div class="ml-10 flex items-baseline space-x-4">
              <a href="/" class="{{ request()->is(['/'])?'bg-indigo-600':''}} rounded-md px-3 py-2 text-sm font-medium text-white hover:bg-white/5 transition">Home</a>
              <a href="/tentang" class="{{ request()->is(['tentang'])?'bg-indigo-600':''}} rounded-md px-3 py-2 text-sm font-medium text-gray-300 hover:bg-white/5 hover:text-white transition">Tentang</a>
              <a href="/layanan" class="{{ request()->is(['layanan'])?'bg-indigo-600':''}} rounded-md px-3 py-2 text-sm font-medium text-gray-300 hover:bg-white/5 hover:text-white transition">Layanan</a>
              <a href="/pricelist" class="{{ request()->is(['pricelist'])?'bg-indigo-600':''}} rounded-md px-3 py-2 text-sm font-medium text-gray-300 hover:bg-white/5 hover:text-white transition">Pricelist</a>
              <a href="/dashboard" class="{{ request()->is(['dashboard'])?'bg-indigo-600':''}} rounded-md px-3 py-2 text-sm font-medium text-gray-300 hover:bg-white/5 hover:text-white transition">Dashboard</a>
            </div>
          </div>
        </div>
        @auth
        <div class="relative group">
          <button class="flex items-center space-x-2 px-4 py-2 rounded-md text-sm font-medium text-gray-300 hover:bg-white/5 hover:text-white transition">
            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"></path>
            </svg>
            <span>{{ Auth::user()->name }}</span>
            <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 14l-7 7m0 0l-7-7m7 7V3"></path>
            </svg>
          </button>
          <div class="absolute right-0 mt-0 w-48 bg-gray-800 border border-white/10 rounded-lg shadow-lg opacity-0 invisible group-hover:opacity-100 group-hover:visible transition-all duration-200 z-50">
            <a href="{{ route('profile.edit') }}" class="block px-4 py-2 text-sm text-gray-300 hover:bg-indigo-600 hover:text-white first:rounded-t-lg transition">Profil</a>
            <form method="POST" action="{{ route('logout') }}" class="block">
              @csrf
              <button type="submit" class="w-full text-left px-4 py-2 text-sm text-gray-300 hover:bg-red-500/30 hover:text-red-300 last:rounded-b-lg transition">Logout</button>
            </form>
          </div>
        </div>
        @endauth
      </div>
    </div>
  </nav>
  
  @yield('content')

  <footer class="bg-gray-800/30 border-t border-white/10 py-10">
    <div class="mx-auto max-w-7xl px-6 lg:px-8 text-center">
      <p class="text-sm text-gray-500">&copy; 2026 Fixify. Semua hak dilindungi undang-undang.</p>
    </div>
  </footer>
</div>

<!-- Auto-Init Script -->
<script>
document.addEventListener('DOMContentLoaded', function() {
    // Auto-close alerts
    const alerts = document.querySelectorAll('[role="alert"], .alert');
    alerts.forEach(alert => {
        const closeBtn = alert.querySelector('button[onclick*="parentElement.style.display"]') || alert.querySelector('.close');
        if (closeBtn) {
            closeBtn.style.cursor = 'pointer';
        }
        setTimeout(() => {
            if (alert.style.display !== 'none') {
                alert.style.transition = 'opacity 0.3s ease';
                alert.style.opacity = '0';
                setTimeout(() => alert.style.display = 'none', 300);
            }
        }, 5000);
    });

    // Auto close session messages
    @if (session('success'))
        AlertManager.success("{{ session('success') }}");
    @endif
    
    @if (session('error'))
        AlertManager.error("{{ session('error') }}");
    @endif
});
</script>

</body>
</html>