<?php

namespace App\Http\Controllers;

use App\Models\Layanan;
use Illuminate\Http\Request;

class LayananController extends Controller
{
    // menampilkan daftar semua permintaan layanan
    public function index()
    {
        return view('layanan',[
            'title'=>'Layanan - Fixify',
            'data'=>Layanan::all(),
        ]);
    }

    // menampilkan formulir untuk membuat permintaan layanan baru
    public function create()
    {
        //
    }

    // menyimpan permintaan layanan baru
    public function store(Request $request)
    {
        $request->validate([
            'nama' => 'required|string|max:255',
            'layanan' => 'required|string|max:255',
            'pesan' => 'nullable|string',
            'no_telepon' => 'required|string|max:16',      
        ],[
            'nama.required' => 'Nama Pemilik wajib diisi.',
            'layanan.required' => 'Layanan / Kerusakan wajib dipilih.',
            'no_telepon.required'=> 'no_telepon / Mohon Isi No Telepon.',
        ]);
        if(!$request){
            return back()->back()->with('error','Request data is missing.');
        }
        Layanan::create([
            'nama' => $request->nama,
            'layanan' => $request->layanan,
            'pesan' => $request->pesan,
            'no_telepon' => $request->no_telepon,
        ]);
        return redirect()->back()->with('success','Permintaan layanan Anda telah diterima. Tim kami akan menghubungi Anda segera.');
    }

    // menampilkan permintaan layanan tertentu
    public function show(string $id)
    {
        //
    }

    // tampilkan formulir edit untuk permintaan layanan tertentu
    public function edit(string $id)
    {
        $data = Layanan::findOrFail($id);
        return view('edit-layanan', compact('data'));
    }

    // perbarui permintaan layanan
    public function update(Request $request, string $id)
    {
        $request->validate([
            'nama' => 'required|string|max:255',
            'layanan' => 'required|string|max:255',
            'pesan' => 'nullable|string',
            'no_telepon' => 'required|string|max:16',      
        ]);
        
        $data = Layanan::findOrFail($id);
        $data->update([
            'nama' => $request->nama,
            'layanan' => $request->layanan,
            'pesan' => $request->pesan,
            'no_telepon' => $request->no_telepon,
        ]);
        
        return redirect('/dashboard')->with('success', 'Data permintaan layanan berhasil diperbarui.');
    }

    // hapus permintaan layanan
    public function destroy(string $id)
    {
        $data = Layanan::findOrFail($id);
        $data->delete();
        return redirect('/dashboard')->with('success', 'Data permintaan layanan berhasil dihapus.');
    }
}
