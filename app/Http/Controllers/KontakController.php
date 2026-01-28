<?php

namespace App\Http\Controllers;

use App\Models\Kontak;
use Illuminate\Http\Request;

class KontakController extends Controller
{
    public function index()
    {
        return view('kontak');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'nama' => 'required|string|max:100',
            'email' => 'required|email|max:100',
            'no_hp' => 'required|string|max:20',
            'layanan' => 'required|string|max:100',
            'pesan' => 'required|string|max:100',
        ]);

        Kontak::create($validated);

        return redirect()->route('kontak')->with('success', 'Pesan berhasil dikirim!');
    }
}
