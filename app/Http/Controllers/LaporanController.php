<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pakaian;
use Mpdf\Mpdf;

class LaporanController extends Controller
{
    public function index()
    {
        // Menampilkan halaman laporan
        return view('dashboard.laporan');
    }

    public function generate(Request $request)
    {
        // Validasi input tanggal
        $request->validate([
            'tanggal_awal' => 'required|date',
            'tanggal_akhir' => 'required|date|after_or_equal:tanggal_awal',
        ]);

        // Ambil data pakaian berdasarkan rentang tanggal
        // Asumsi kolom 'created_at' digunakan untuk penyimpanan tanggal
        $pakaian = Pakaian::whereBetween('created_at', [$request->tanggal_awal, $request->tanggal_akhir])->get();

        // Jika tidak ada data
        if ($pakaian->isEmpty()) {
            return redirect()->back()->withErrors('Tidak ada data pakaian untuk rentang tanggal yang dipilih.');
        }

        // Siapkan konten HTML untuk laporan
        $html = view('dashboard.laporan_pdf', compact('pakaian', 'request'))->render();

        // Buat instance mPDF
        $mpdf = new Mpdf();

        // Tulis HTML ke PDF
        $mpdf->WriteHTML($html);

        // Unduh file PDF
        return $mpdf->Output('laporan-pakaian.pdf', \Mpdf\Output\Destination::INLINE);
    }
}
