@extends('layout')
@section('content')
<header class="relative bg-gray-900 py-24 overflow-hidden">
        <img src="https://static.vecteezy.com/system/resources/thumbnails/036/113/041/original/ai-generated-the-matrix-4k-wallpaper-free-video.jpg" 
            class="absolute inset-0 z-0 h-full w-full object-cover opacity-50 " alt="Background">
  
        <div class="relative z-10 mx-auto max-w-7xl px-6 lg:px-8 text-center">
            <h1 class="text-4xl font-bold tracking-tight text-white sm:text-6xl">Layanan Kami</h1>
            <p class="mt-6 text-lg leading-8 text-gray-400">Pilih layanan yang Anda butuhkan dan konsultasikan kerusakannya sekarang.</p>
        </div>
    </header>

  <main class="py-16">
    <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
            
            <div class="bg-white/5 rounded-2xl border border-white/10 overflow-hidden hover:border-indigo-500/50 transition duration-300 group">
                <img src="https://images.unsplash.com/photo-1591799264318-7e6ef8ddb7ea?q=80&w=800" alt="Hardware Repair" class="w-full h-48 object-cover group-hover:scale-105 transition duration-500">
                <div class="p-6">
                    <h3 class="text-xl font-bold text-indigo-400">Perbaikan Hardware</h3>
                    <p class="mt-2 text-gray-400 text-sm leading-relaxed mb-4">Layanan penggantian komponen rusak seperti LCD, baterai, keyboard, hingga perbaikan motherboard.</p>
                    <a href="#form-konsultasi" onclick="isiLayanan('Perbaikan Hardware')" class="block text-center bg-indigo-600/20 border border-indigo-500/50 text-indigo-400 py-2 rounded-lg hover:bg-indigo-600 hover:text-white transition">Pilih Layanan</a>
                </div>
            </div>

            <div class="bg-white/5 rounded-2xl border border-white/10 overflow-hidden hover:border-indigo-500/50 transition duration-300 group">
                <img src="https://farinotech.com/wp-content/uploads/2025/03/Adobe-Farino-Teknologi-Indonesia.jpg" alt="Software Solution" class="w-full h-48 object-cover group-hover:scale-105 transition duration-500">
                <div class="p-6">
                    <h3 class="text-xl font-bold text-indigo-400">Solusi Software</h3>
                    <p class="mt-2 text-gray-400 text-sm leading-relaxed mb-4">Instalasi sistem operasi, pembersihan virus/malware, hingga optimasi performa perangkat lunak Anda.</p>
                    <a href="#form-konsultasi" onclick="isiLayanan('Solusi Software')" class="block text-center bg-indigo-600/20 border border-indigo-500/50 text-indigo-400 py-2 rounded-lg hover:bg-indigo-600 hover:text-white transition">Pilih Layanan</a>
                </div>
            </div>

            <div class="bg-white/5 rounded-2xl border border-white/10 overflow-hidden hover:border-indigo-500/50 transition duration-300 group">
                <img src="https://cdn.antaranews.com/cache/1200x800/2025/01/20/InShot_20250120_202919798.jpg" alt="Consultation" class="w-full h-48 object-cover group-hover:scale-105 transition duration-500">
                <div class="p-6">
                    <h3 class="text-xl font-bold text-indigo-400">Perbaikan Laptop</h3>
                    <p class="mt-2 text-gray-400 text-sm leading-relaxed mb-4">Memperbaiki laptop mulai dari LCD, upgrade RAM/SSD hingga perbaikan kerusakan sistem.</p>
                    <a href="#form-konsultasi" onclick="isiLayanan('Perbaikan Laptop')" class="block text-center bg-indigo-600/20 border border-indigo-500/50 text-indigo-400 py-2 rounded-lg hover:bg-indigo-600 hover:text-white transition">Pilih Layanan</a>
                </div>
            </div>

            <div class="bg-white/5 rounded-2xl border border-white/10 overflow-hidden hover:border-indigo-500/50 transition duration-300 group">
                <img src="https://sodagarkomputer.com/wp-content/uploads/2025/06/VcEPKxr3e3n28Y4AUzoJxk-scaled.jpg" alt="Networking" class="w-full h-48 object-cover group-hover:scale-105 transition duration-500">
                <div class="p-6">
                    <h3 class="text-xl font-bold text-indigo-400">Perbaikan Motherboard</h3>
                    <p class="mt-2 text-gray-400 text-sm leading-relaxed mb-4">Perbaikan pada motherboard komputer berbagai merk dan tipe, termasuk penggantian komponen kritis.</p>
                    <a href="#form-konsultasi" onclick="isiLayanan('Perbaikan Motherboard')" class="block text-center bg-indigo-600/20 border border-indigo-500/50 text-indigo-400 py-2 rounded-lg hover:bg-indigo-600 hover:text-white transition">Pilih Layanan</a>
                </div>
            </div>

            <div class="bg-white/5 rounded-2xl border border-white/10 overflow-hidden hover:border-indigo-500/50 transition duration-300 group">
                <img src="https://itbox.id/wp-content/uploads/2025/02/spek-pc-gaming-rakitan.jpeg" alt="Maintenance" class="w-full h-48 object-cover group-hover:scale-105 transition duration-500">
                <div class="p-6">
                    <h3 class="text-xl font-bold text-indigo-400">Rakit Pc Custom</h3>
                    <p class="mt-2 text-gray-400 text-sm leading-relaxed mb-4">Rakit PC sesuai kebutuhan Anda, mulai dari gaming, desain grafis, hingga penggunaan sehari-hari.</p>
                    <a href="#form-konsultasi" onclick="isiLayanan('Rakit Pc Custom')" class="block text-center bg-indigo-600/20 border border-indigo-500/50 text-indigo-400 py-2 rounded-lg hover:bg-indigo-600 hover:text-white transition">Pilih Layanan</a>
                </div>
            </div>

            <div class="bg-white/5 rounded-2xl border border-white/10 overflow-hidden hover:border-indigo-500/50 transition duration-300 group">
                <img src="https://upload.jaknot.com/2024/04/images/products/540205/original/sandisk-extreme-pro-portable-ssd-2000mbs-usb-type-c-32-sdssde81.jpg" alt="Data Recovery" class="w-full h-48 object-cover group-hover:scale-105 transition duration-500">
                <div class="p-6">
                    <h3 class="text-xl font-bold text-indigo-400">Pemulihan Data</h3>
                    <p class="mt-2 text-gray-400 text-sm leading-relaxed mb-4">Membantu mengembalikan data penting yang terhapus atau hilang akibat kerusakan media penyimpanan.</p>
                    <a href="#form-konsultasi" onclick="isiLayanan('Pemulihan Data')" class="block text-center bg-indigo-600/20 border border-indigo-500/50 text-indigo-400 py-2 rounded-lg hover:bg-indigo-600 hover:text-white transition">Pilih Layanan</a>
                </div>
            </div>
        </div>

        <div id="form-konsultasi" class="mt-24 max-w-2xl mx-auto">
            <div class="bg-gray-800/50 rounded-3xl p-8 border border-indigo-500/30 shadow-2xl backdrop-blur-sm">
                <h2 class="text-3xl font-bold text-white mb-2 text-center">Konsultasi Gratis</h2>
                <p class="text-gray-400 text-center mb-8">Silakan isi detail kerusakan perangkat Anda.</p>
                @if (session('success'))
                    <div class="alert alert-success">
                        {{ session('success') }}
                    </div>
                @endif
                <form action="/layanan" method="POST" class="space-y-6">
                    @csrf
                    <div>
                        <label class="block text-sm font-medium text-gray-300 mb-2">Nama Pemilik</label>
                        <input type="text" name="nama" id="nama" class="w-full bg-gray-900/50 border border-white/10 rounded-xl px-4 py-3 text-white focus:border-indigo-500 outline-none transition" placeholder="Masukkan nama Anda" value="{{ old('nama') }}">
                          @error('nama')
                            <div class="alert alert-danger">{{ $message }}</div>
                          @enderror
                    </div>

                      <div>
                        <label class="block text-sm font-medium text-gray-300 mb-2">No Telepon: </label>
                        <input type="text" name="no_telepon" id="no_telepon" class="w-full bg-gray-900/50 border border-white/10 rounded-xl px-4 py-3 text-white focus:border-indigo-500 outline-none transition" placeholder="Masukkan No Telepon" value="{{ old('no_telepon') }}">
                          @error('no_telepon')
                            <div class="alert alert-danger">{{ $message }}</div>
                          @enderror
                    </div>


                    <div>
                        <label class="block text-sm font-medium text-gray-300 mb-2">Layanan / Kerusakan</label>
                        <select id="select-layanan" name="layanan" class="w-full bg-gray-900/50 border border-white/10 rounded-xl px-4 py-3 text-white focus:border-indigo-500 outline-none transition">
                            <option value="">-- Pilih Layanan --</option>
                            <option value="Perbaikan Hardware">Perbaikan Hardware</option>
                            <option value="Solusi Software">Solusi Software</option>
                            <option value="Perbaikan Laptop">Perbaikan Laptop</option>
                            <option value="Perbaikan Motherboard">Perbaikan Motherboard</option>
                            <option value="Rakit Pc Custom">Rakit Pc Custom</option>
                            <option value="Pemulihan Data">Pemulihan Data</option>
                        </select>
                             @error('layanan')
                                <div classn="alert alert-danger">{{ $message }}</div>
                            @enderror
                    </div>

                    <div>
                        <label class="block text-sm font-medium text-gray-300 mb-2">Deskripsi Kerusakan</label>
                        <textarea name="pesan" rows="4" placeholder="Contoh: Laptop mati total setelah terkena air..." class="w-full bg-gray-900/50 border border-white/10 rounded-xl px-4 py-3 text-white focus:border-indigo-500 outline-none transition"></textarea>
                         @error('pesan')
                             <div classn="alert alert-danger">{{ $message }}</div>
                         @enderror
                    </div>

                    <button type="submit" class="w-full bg-indigo-600 hover:bg-indigo-700 text-white font-bold py-4 rounded-xl shadow-lg shadow-indigo-500/20 transition duration-300" value="{{ old('pesan') }}">
                        Kirim Permintaan Konsultasi
                    </button>
                </form>
            </div>
        </div>
    </div>
  </main>

  <script src="{{ asset('js/layanan.js') }}"></script>
@endsection