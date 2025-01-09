<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pakaian;

class PakaianController extends Controller
{
    public function index()
    {
        $item = Pakaian::all();
        return view('dashboard.pakaian' , compact('item'));
    }
    public function create()
    {
        return view('dashboard.create');
    }
    public function store(Request $request)
    {
        // Validasi data yang diterima
        $request->validate([
            'nama_pakaian' => 'required|string|max:255',
            'kategori' => 'required|string|max:255',
            'harga' => 'required|numeric|min:0',
        ]);
    
        // Simpan data menggunakan Eloquent
        Pakaian::create([
            'nama_pakaian' => $request->nama_pakaian,
            'kategori' => $request->kategori,
            'harga' => $request->harga,
        ]);
    
        // Redirect dengan pesan sukses
        return redirect()->route('pakaian')->with('success', 'Pakaian berhasil ditambahkan!');
    }
    public function edit(Pakaian $pakaian)
    {
        $pakaian = Pakaian::findOrFail($pakaian->id);
        return view('dashboard.edit', compact('pakaian'));
    }
    public function update(Request $request, Pakaian $pakaian)
    {
        $pakaian->update($request->all());
        return redirect()->route('pakaian')->with('success', 'Pakaian berhasil diperbarui!');
    }
    
    public function destroy(Pakaian $pakaian)
    {
        $pakaian->delete();
        return redirect()->route('pakaian')->with('success', 'Pakaian berhasil dihapus!');
    }

    public function price()
    {
        // Fetch items grouped by category
        $laundrySatuan = Pakaian::where('kategori', 'Laundry Satuan')->get();
        $laundryKiloan = Pakaian::where('kategori', 'Laundry Kiloan')->get();
        $sepatu = Pakaian::where('kategori', 'Sepatu')->get();
        $furniture = Pakaian::where('kategori', 'Furniture')->get();
        $karpet = Pakaian::where('kategori', 'Karpet')->get();
    
        return view('price', compact('laundrySatuan', 'laundryKiloan', 'sepatu', 'furniture', 'karpet'));
    }
    
}
