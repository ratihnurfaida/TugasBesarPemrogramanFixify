@extends('layout')
@section('content')
<div class="relative isolate overflow-hidden bg-gray-900 py-24 sm:py-32">
    <img src="https://images.pexels.com/photos/5935787/pexels-photo-5935787.jpeg" alt="" class="absolute inset-0 -z-10 h-full w-full object-cover object-right md:object-center opacity-40">
    <div class="mx-auto max-w-7xl px-6 lg:px-8">
      <div class="mx-auto max-w-2xl lg:mx-0">
        <h2 class="text-5xl font-semibold tracking-tight text-white sm:text-7xl">Tentang Fixify</h2>
        <p class="mt-8 text-pretty text-lg font-medium text-gray-400 sm:text-xl/8">Kami adalah solusi terpercaya untuk perbaikan perangkat digital Anda. Dengan teknisi ahli dan layanan cepat, kami memastikan teknologi Anda kembali bekerja maksimal.</p>
      </div>
    </div>
  </div>

  <main class="py-16">
    <div class="mx-auto max-w-7xl px-6 lg:px-8">
      <div class="grid grid-cols-1 gap-12 lg:grid-cols-2">
        <div class="bg-white/5 p-8 rounded-2xl border border-white/10">
          <h3 class="text-2xl font-bold text-indigo-400">Visi Kami</h3>
          <p class="mt-4 text-gray-300 leading-relaxed">Menjadi pusat perbaikan teknologi nomor satu yang mengedepankan kualitas, kejujuran, dan kepuasan pelanggan di seluruh Indonesia.</p>
        </div>
        <div class="bg-white/5 p-8 rounded-2xl border border-white/10">
          <h3 class="text-2xl font-bold text-indigo-400">Misi Kami</h3>
          <ul class="mt-4 space-y-3 text-gray-300 list-disc list-inside">
            <li>Memberikan layanan perbaikan dengan standar profesional tinggi.</li>
            <li>Menggunakan suku cadang berkualitas dan bergaransi.</li>
            <li>Terus berinovasi mengikuti perkembangan teknologi terbaru.</li>
          </ul>
        </div>
      </div>
    </div>
  </main>

    <section class="py-20 bg-[#0f172a]">
    <div class="container mx-auto px-6">
        <h2 class="text-3xl font-bold text-center text-white mb-12">Mengapa Memilih Kami?</h2>
        <div class="grid md:grid-cols-3 gap-8">
            <div class="p-8 bg-gray-800/50 rounded-2xl border border-gray-700 hover:border-indigo-500 transition">
                <div class="w-12 h-12 bg-indigo-600 rounded-lg flex items-center justify-center mb-6">
                    <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"></path></svg>
                </div>
                <h3 class="text-xl font-bold text-white mb-3">Keamanan Terjamin</h3>
                <p class="text-gray-400">Data pribadi dalam perangkat Anda kami jaga kerahasiaannya dengan protokol keamanan ketat.</p>
            </div>

            <div class="p-8 bg-gray-800/50 rounded-2xl border border-gray-700 hover:border-indigo-500 transition">
                <div class="w-12 h-12 bg-indigo-600 rounded-lg flex items-center justify-center mb-6">
                    <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path d="M13 10V3L4 14h7v7l9-11h-7z"></path></svg>
                </div>
                <h3 class="text-xl font-bold text-white mb-3">Pengerjaan Cepat</h3>
                <p class="text-gray-400">Kami memahami betapa pentingnya teknologi bagi Anda. Perbaikan dilakukan seefisien mungkin.</p>
            </div>

            <div class="p-8 bg-gray-800/50 rounded-2xl border border-gray-700 hover:border-indigo-500 transition">
                <div class="w-12 h-12 bg-indigo-600 rounded-lg flex items-center justify-center mb-6">
                    <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path d="M12 8c-1.657 0-3 .895-3 2s1.343 2 3 2 3 .895 3 2-1.343 2-3 2m0-8c1.11 0 2.08.402 2.599 1M12 8V7m0 1v8m0 0v1m0-1c-1.11 0-2.08-.402-2.599-1M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg>
                </div>
                <h3 class="text-xl font-bold text-white mb-3">Harga Transparan</h3>
                <p class="text-gray-400">Tidak ada biaya tersembunyi. Semua estimasi biaya akan dikomunikasikan di awal.</p>
            </div>
        </div>
    </div>
    </section>

    <section class="py-20 bg-[#0f172a]">
    <div class="container mx-auto px-6">
        <div class="flex flex-col md:flex-row gap-12 items-center">
            
            <div class="md:w-1/3 text-white">
                <h2 class="text-3xl font-bold mb-6">Lokasi Kami</h2>
                <div class="space-y-4">
                    <div class="flex items-start gap-4">
                        <div class="mt-1 text-indigo-500">
                            <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"></path><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"></path></svg>
                        </div>
                        <p class="text-gray-400">
                            <strong>Alamat :</strong><br>
                            Jl. Sariasih No.54, Sarijadi, Kec. Sukasari, <br> 
                            Kota Bandung, Jawa Barat 40151
                        </p>
                    </div>
                    <div class="flex items-start gap-4">
                        <div class="mt-1 text-indigo-500">
                            <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"></path></svg>
                        </div>
                        <p class="text-gray-400">0822-9052-1945</p>
                    </div>
                </div>
                <a href="https://www.google.com/maps/search/?api=1&query=Jl.+Sariasih+No.54,+Sarijadi,+Bandung&query_place_id=ChIJdbiLttHnaC4R5NY75Kn1_Ng" 
                  target="_blank" class="inline-block mt-8 px-6 py-3 bg-indigo-600 hover:bg-indigo-700 text-white font-medium rounded-lg transition">
                  Petunjuk Arah
                </a>
            </div>

            <div class="md:w-2/3 w-full h-100 rounded-2xl overflow-hidden border border-gray-700 shadow-2xl">
                <iframe 
                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3017.2699454041317!2d107.57312487356465!3d-6.8745446672610555!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e68e7d1b68bb875%3A0xd8fcf5a9e43bd6e4!2sUniversitas%20Logistik%20dan%20Bisnis%20Internasional%20(ULBI)!5e1!3m2!1sid!2sid!4v1768317507478!5m2!1sid!2sid" 
                    class="w-full h-full border-0 grayscale invert contrast-75 opacity-80 hover:grayscale-0 hover:invert-0 transition duration-500" 
                    allowfullscreen="" 
                    loading="lazy">
                </iframe>
            </div>

        </div>
    </div>
  </section>
@endsection