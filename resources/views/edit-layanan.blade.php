@extends('layout')
@section('content')
<!-- Page Header -->
<div class="relative bg-gray-900 py-16 overflow-hidden mb-8">
    <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
        <h1 class="text-4xl font-bold text-white">Edit Permintaan Layanan</h1>
        <p class="mt-4 text-lg text-gray-400">Ubah data permintaan layanan yang ada</p>
    </div>
</div>

<!-- Form Container -->
<div class="mx-auto max-w-2xl px-4 sm:px-6 lg:px-8">
    <a href="/dashboard" class="inline-flex items-center text-gray-400 hover:text-gray-300 mb-6 transition-colors">
        <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7"></path>
        </svg>
        Kembali ke Dashboard
    </a>

    <div class="bg-gray-800/50 border border-white/10 rounded-lg p-8">
        @if ($errors->any())
            <div class="mb-6 p-4 bg-red-500/20 border border-red-500/50 rounded-lg text-red-300">
                <strong class="block mb-2">Terjadi kesalahan!</strong>
                <ul class="list-disc list-inside space-y-1">
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <form action="{{ route('layanan.update', $data->id) }}" method="POST">
            @csrf
            @method('PATCH')

            <!-- Nama Pemilik -->
            <div class="mb-6">
                <label class="block text-sm font-medium text-gray-300 mb-2">Nama Pemilik</label>
                <input type="text" name="nama" value="{{ old('nama', $data->nama) }}" 
                    class="w-full px-4 py-2 bg-gray-700/50 border border-red-500 rounded-lg text-white placeholder-gray-400 focus:outline-none focus:border-indigo-500 @error('nama') border-red-500 @enderror" 
                    placeholder="Masukkan nama pemilik" required>
                @error('nama')
                    <p class="text-red-400 text-sm mt-1">{{ $message }}</p>
                @enderror
            </div>

            <!-- Jenis Layanan -->
            <div class="mb-6">
                <label class="block text-sm font-medium text-gray-300 mb-2">Jenis Layanan</label>
                <select name="layanan" 
                    class="w-full px-4 py-2 bg-gray-700/50 border border-gray-600 rounded-lg text-white focus:outline-none focus:border-indigo-500 @error('layanan') border-red-500 @enderror" required>
                    <option value="">-- Pilih Jenis Layanan --</option>
                    <option value="Perbaikan Hardware" {{ old('layanan', $data->layanan) == 'Perbaikan Hardware' ? 'selected' : '' }}>Perbaikan Hardware</option>
                    <option value="Solusi Software" {{ old('layanan', $data->layanan) == 'Solusi Software' ? 'selected' : '' }}>Solusi Software</option>
                    <option value="Perbaikan Laptop" {{ old('layanan', $data->layanan) == 'Perbaikan Laptop' ? 'selected' : '' }}>Perbaikan Laptop</option>
                    <option value="Perbaikan Motherboard" {{ old('layanan', $data->layanan) == 'Perbaikan Motherboard' ? 'selected' : '' }}>Perbaikan Motherboard</option>
                    <option value="Konsultasi Hardware" {{ old('layanan', $data->layanan) == 'Konsultasi Hardware' ? 'selected' : '' }}>Konsultasi Hardware</option>
                    <option value="Konsultasi Software" {{ old('layanan', $data->layanan) == 'Konsultasi Software' ? 'selected' : '' }}>Konsultasi Software</option>
                </select>
                @error('layanan')
                    <p class="text-red-400 text-sm mt-1">{{ $message }}</p>
                @enderror
            </div>

            <!-- Pesan/Kerusakan -->
            <div class="mb-6">
                <label class="block text-sm font-medium text-gray-300 mb-2">Pesan/Kerusakan</label>
                <textarea name="pesan" rows="4"
                    class="w-full px-4 py-2 bg-gray-700/50 border border-gray-600 rounded-lg text-white placeholder-gray-400 focus:outline-none focus:border-indigo-500 @error('pesan') border-red-500 @enderror" 
                    placeholder="Jelaskan masalah atau kerusakan yang dihadapi">{{ old('pesan', $data->pesan) }}</textarea>
                @error('pesan')
                    <p class="text-red-400 text-sm mt-1">{{ $message }}</p>
                @enderror
            </div>

            <!-- No Telepon -->
            <div class="mb-8">
                <label class="block text-sm font-medium text-gray-300 mb-2">No Telepon</label>
                <input type="tel" name="no_telepon" value="{{ old('no_telepon', $data->no_telepon) }}" 
                    class="w-full px-4 py-2 bg-gray-700/50 border border-gray-600 rounded-lg text-white placeholder-gray-400 focus:outline-none focus:border-indigo-500 @error('no_telepon') border-red-500 @enderror" 
                    placeholder="Masukkan nomor telepon" required>
                @error('no_telepon')
                    <p class="text-red-400 text-sm mt-1">{{ $message }}</p>
                @enderror
            </div>

            <!-- Buttons -->
            <div class="flex gap-4">
                <button type="submit" class="flex-1 bg-indigo-600 hover:bg-indigo-500 text-white font-semibold py-2 rounded-lg transition-colors">
                    Simpan Perubahan
                </button>
                <a href="/dashboard" class="flex-1 bg-gray-600 hover:bg-gray-500 text-white font-semibold py-2 rounded-lg transition-colors text-center">
                    Batal
                </a>
            </div>
        </form>
    </div>
</div>
@endsection
