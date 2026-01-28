@extends('layout')
@section('content')
<div class="relative isolate overflow-hidden bg-gray-900 py-24 sm:py-32">
    <img src="https://images.unsplash.com/photo-1517694712202-14dd9538aa97?q=80&w=2070&auto=format&fit=crop" alt="" class="absolute inset-0 -z-10 h-full w-full object-cover opacity-20">
    <div class="mx-auto max-w-7xl px-6 lg:px-8">
      <div class="mx-auto max-w-2xl lg:mx-0">
        <h1 class="text-4xl font-bold tracking-tight text-white sm:text-6xl">Fixify</h1>
        <p class="mt-6 text-lg leading-8 text-gray-300">
          Solusi <span class="text-indigo-400 font-semibold">konsultasi komputer</span> terpercaya untuk masalah hardware dan software Anda. Cepat, tepat, dan transparan.
        </p>
        <div class="mt-10 flex items-center gap-x-6">
          <a href="/layanan" class="rounded-md bg-indigo-600 px-3.5 py-2.5 text-sm font-semibold text-white shadow-sm hover:bg-indigo-500 focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">Mulai Konsultasi</a>
          <a href="/tentang" class="text-sm font-semibold leading-6 text-white">Pelajari lebih lanjut <span aria-hidden="true">→</span></a>
        </div>
      </div>
    </div>
  </div>

  <main class="py-16">
    <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
        <div class="text-center mb-16">
            <h2 class="text-3xl font-bold text-white sm:text-4xl">Keunggulan Fixify</h2>
            <p class="mt-4 text-gray-400">Mengapa ribuan pelanggan memilih kami untuk urusan teknologi mereka.</p>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
            <div class="bg-white/5 p-8 rounded-2xl border border-white/10 hover:border-indigo-500/50 transition">
                <h3 class="text-xl font-bold text-indigo-400 mb-3">Solusi Cepat & Tepat</h3>
                <p class="text-gray-400">Analisis sistematis untuk solusi yang efektif dan tidak bertele-tele bagi setiap kendala komputer Anda.</p>
            </div>
            <div class="bg-white/5 p-8 rounded-2xl border border-white/10 hover:border-indigo-500/50 transition">
                <h3 class="text-xl font-bold text-indigo-400 mb-3">Layanan Terpercaya</h3>
                <p class="text-gray-400">Konsultasi online maupun offline yang fleksibel, menyesuaikan dengan kenyamanan dan waktu Anda.</p>
            </div>
            <div class="bg-white/5 p-8 rounded-2xl border border-white/10 hover:border-indigo-500/50 transition">
                <h3 class="text-xl font-bold text-indigo-400 mb-3">Harga Kompetitif</h3>
                <p class="text-gray-400">Daftar harga transparan untuk setiap layanan tanpa ada biaya tambahan yang tersembunyi.</p>
            </div>
        </div>
    </div>
  </main>
@endsection