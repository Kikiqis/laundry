<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pakaian;
use App\Models\User;
use App\Models\Massage;

class DashboardController extends Controller
{
    public function index()
    {
        // Menghitung jumlah data dari masing-masing model
        $pakaianCount = Pakaian::count();
        $userCount = User::count();
        $massageCount = Massage::count();
        
        // Mengirimkan data ke view
        return view('dashboard.dashboard', compact('pakaianCount', 'userCount', 'massageCount'));
    }
}
