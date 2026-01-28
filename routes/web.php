<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Models\Layanan;

Route::get('/', function () {
    return view('welcome',[
        'title'=>'Welcome - Fixify'
    ]);
})->name('welcome');

Route::get('/tentang', function () {
    return view('tentang',[
        'title'=>'Fixify | Tentang Kami'
    ]);
})->name('tentang');

Route::get('/layanan',[\App\Http\Controllers\LayananController::class,'index'])->name('layanan');
Route::post('/layanan',[\App\Http\Controllers\LayananController::class,'store'])->name('layanan');
Route::get('/layanan/{id}/edit',[\App\Http\Controllers\LayananController::class,'edit'])->name('layanan.edit');
Route::patch('/layanan/{id}',[\App\Http\Controllers\LayananController::class,'update'])->name('layanan.update');
Route::delete('/layanan/{id}',[\App\Http\Controllers\LayananController::class,'destroy'])->name('layanan.destroy');

Route::get('/pricelist', function () {
    return view('pricelist');
})->name('pricelist');

Route::get('/kontak', action: function () {
    return view('kontak');
})->name('kontak'); 

Route::get('/dashboard', function () {
    $data = Layanan::all();
    
    // Data Analisis
    $totalPesanan = Layanan::count();
    $pesananHariIni = Layanan::whereDate('created_at', today())->count();
    $pesananBulanIni = Layanan::whereMonth('created_at', now()->month)->count();
    $layananPopuler = Layanan::select('layanan')->selectRaw('count(*) as total')
        ->groupBy('layanan')->orderByDesc('total')->first();
    
    return view('dashboard', compact('data', 'totalPesanan', 'pesananHariIni', 'pesananBulanIni', 'layananPopuler'));
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
