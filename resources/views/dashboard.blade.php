
@extends('layout')
@section('content')
<!-- Page Header -->
<div class="relative bg-gray-900 py-16 overflow-hidden mb-8">
    <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8 flex justify-between items-start">
        <div>
            <h1 class="text-4xl font-bold text-white">Daftar Permintaan Layanan</h1>
            <p class="mt-4 text-lg text-gray-400">Kelola semua permintaan layanan dari pelanggan</p>
        </div>
        <form method="POST" action="{{ route('logout') }}" class="flex items-center">
            @csrf
        </form>
    </div>
</div>

<!-- Alert Messages -->
@if ($message = Session::get('success'))
    <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8 mb-6">
        <div class="bg-green-500/20 border border-green-500/50 rounded-lg p-4 text-green-300 flex items-center justify-between">
            <span>{{ $message }}</span>
            <button onclick="this.parentElement.style.display='none'" class="text-green-300 hover:text-green-200">&times;</button>
        </div>
    </div>
@endif

@if ($message = Session::get('error'))
    <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8 mb-6">
        <div class="bg-red-500/20 border border-red-500/50 rounded-lg p-4 text-red-300 flex items-center justify-between">
            <span>{{ $message }}</span>
            <button onclick="this.parentElement.style.display='none'" class="text-red-300 hover:text-red-200">&times;</button>
        </div>
    </div>
@endif

<!-- Analytics Cards -->
<div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8 mb-8">
    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6">
        <!-- Total Pesanan -->
        <div class="bg-gradient-to-br from-indigo-500/20 to-indigo-600/10 border border-indigo-500/30 rounded-lg p-6 hover:border-indigo-500/60 transition">
            <div class="flex items-center justify-between">
                <div>
                    <p class="text-gray-400 text-sm mb-2">Total Pesanan</p>
                    <h3 class="text-3xl font-bold text-indigo-300">{{ $totalPesanan }}</h3>
                </div>
                <div class="bg-indigo-500/20 p-3 rounded-lg">
                    <svg class="w-6 h-6 text-indigo-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2"></path>
                    </svg>
                </div>
            </div>
        </div>

        <!-- Pesanan Hari Ini -->
        <div class="bg-gradient-to-br from-green-500/20 to-green-600/10 border border-green-500/30 rounded-lg p-6 hover:border-green-500/60 transition">
            <div class="flex items-center justify-between">
                <div>
                    <p class="text-gray-400 text-sm mb-2">Hari Ini</p>
                    <h3 class="text-3xl font-bold text-green-300">{{ $pesananHariIni }}</h3>
                </div>
                <div class="bg-green-500/20 p-3 rounded-lg">
                    <svg class="w-6 h-6 text-green-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                    </svg>
                </div>
            </div>
        </div>

        <!-- Pesanan Bulan Ini -->
        <div class="bg-gradient-to-br from-blue-500/20 to-blue-600/10 border border-blue-500/30 rounded-lg p-6 hover:border-blue-500/60 transition">
            <div class="flex items-center justify-between">
                <div>
                    <p class="text-gray-400 text-sm mb-2">Bulan Ini</p>
                    <h3 class="text-3xl font-bold text-blue-300">{{ $pesananBulanIni }}</h3>
                </div>
                <div class="bg-blue-500/20 p-3 rounded-lg">
                    <svg class="w-6 h-6 text-blue-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"></path>
                    </svg>
                </div>
            </div>
        </div>

        <!-- Layanan Populer -->
        <div class="bg-gradient-to-br from-purple-500/20 to-purple-600/10 border border-purple-500/30 rounded-lg p-6 hover:border-purple-500/60 transition">
            <div class="flex items-center justify-between">
                <div>
                    <p class="text-gray-400 text-sm mb-2">Layanan Populer</p>
                    <h3 class="text-lg font-bold text-purple-300">{{ $layananPopuler?->layanan ?? '-' }}</h3>
                    <p class="text-xs text-gray-400 mt-1">{{ $layananPopuler?->total ?? 0 }} pesanan</p>
                </div>
                <div class="bg-purple-500/20 p-3 rounded-lg">
                    <svg class="w-6 h-6 text-purple-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z"></path>
                    </svg>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Main Content -->
<div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
    <h2 class="text-2xl font-bold text-white mb-6">Daftar Permintaan Terbaru</h2>
    <div class="bg-gray-800/50 border border-white/10 rounded-lg overflow-hidden shadow-lg">
        <div class="overflow-x-auto">
            <table class="w-full divide-y divide-gray-700">
                <thead class="bg-gray-800/80 border-b border-white/10">
                    <tr>
                        <th class="px-6 py-4 text-left text-sm font-semibold text-gray-300">No</th>
                        <th class="px-6 py-4 text-left text-sm font-semibold text-gray-300">Nama Pemilik</th>
                        <th class="px-6 py-4 text-left text-sm font-semibold text-gray-300">Jenis Layanan</th>
                        <th class="px-6 py-4 text-left text-sm font-semibold text-gray-300">Pesan/Kerusakan</th>
                        <th class="px-6 py-4 text-left text-sm font-semibold text-gray-300">No Telepon</th>
                        <th class="px-6 py-4 text-left text-sm font-semibold text-gray-300">Waktu Pesanan</th>
                        <th class="px-6 py-4 text-left text-sm font-semibold text-gray-300">Aksi</th>
                    </tr>
                </thead>
                <tbody class="divide-y divide-gray-700">
                    @forelse ($data as $dt)
                    <tr class="hover:bg-gray-700/30 transition-colors">
                        <td class="px-6 py-4 text-sm text-gray-300">{{ $loop->iteration }}</td>
                        <td class="px-6 py-4 text-sm text-gray-300">{{ $dt->nama }}</td>
                        <td class="px-6 py-4 text-sm">
                            <span class="inline-flex items-center px-3 py-1 rounded-full text-sm font-medium bg-indigo-500/20 text-indigo-300">
                                {{ $dt->layanan }}
                            </span>
                        </td>
                        <td class="px-6 py-4 text-sm text-gray-300">{{ Str::limit($dt->pesan, 40) }}</td>
                        <td class="px-6 py-4 text-sm font-semibold text-indigo-400">{{ $dt->no_telepon }}</td>
                        <td class="px-6 py-4 text-sm text-gray-400">
                            <div class="text-xs">{{ $dt->created_at->format('d M Y') }}</div>
                            <div class="text-xs text-gray-500">{{ $dt->created_at->format('H:i') }}</div>
                        </td>
                        <td class="px-6 py-4 text-sm space-x-2 flex">
                            <a href="{{ route('layanan.edit', $dt->id) }}" class="bg-blue-500/20 hover:bg-blue-500/30 text-blue-300 px-3 py-1 rounded transition-colors text-xs font-medium">
                                Edit
                            </a>
                            <form action="{{ route('layanan.destroy', $dt->id) }}" method="POST" class="inline" onsubmit="return confirm('Apakah Anda yakin ingin menghapus data ini?');">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="bg-red-500/20 hover:bg-red-500/30 text-red-300 px-3 py-1 rounded transition-colors text-xs font-medium">
                                    Hapus
                                </button>
                            </form>
                        </td>
                    </tr>
                    @empty
                    <tr>
                        <td colspan="7" class="px-6 py-8 text-center text-gray-400">
                            <p>Tidak ada data permintaan layanan</p>
                        </td>
                    </tr>
                    @endforelse
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection
