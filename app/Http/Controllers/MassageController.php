<?php

namespace App\Http\Controllers;

use App\Models\Massage;
use Illuminate\Http\Request;

class MassageController extends Controller
{
    // Menampilkan semua pesan
    public function index()
    {
        // Mengambil semua pesan dari database
        $messages = Massage::all();
        
        // Mengembalikan view dengan data pesan
        return view('dashboard.massage', compact('messages'));
    }

    // Menyimpan pesan dari form
    public function store(Request $request)
    {
        // Validasi input
        $request->validate([
            'email' => 'required|email',
            'nama' => 'required|string|max:255',
            'massage' => 'required|string',
        ]);

        // Membuat instance model Massage
        $massage = new Massage;
        $massage->email = $request->email;
        $massage->nama = $request->nama;
        $massage->massage = $request->massage;
        
        // Menyimpan data pesan ke database
        $massage->save();

        // Redirect ke halaman index dengan pesan sukses
        return redirect()->route('about')->with('success', 'Pesan berhasil dikirim!');
    }
}
