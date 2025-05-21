<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Kamar;
use App\Models\User;
use App\Models\Pembayaran;

class AdminController extends Controller
{
    public function index()
    {
        // Menghitung jumlah kamar
        $totalKamar = Kamar::count();
        $kamarKosong = Kamar::where('status', 'kosong')->count();
        $kamarTerisi = Kamar::where('status', 'terisi')->count();

        // Menghitung total penghuni (dengan role penghuni)
        $totalPenghuni = User::where('role', 'penghuni')->count();

        // Menghitung total pembayaran yang lunas
        $totalPembayaran = Pembayaran::where('status', 'lunas')->sum('jumlah');

        // Ambil 5 pembayaran terbaru
        $pembayaranTerbaru = Pembayaran::latest()->take(5)->get();

        return view('admin.dashboard', compact(
            'totalKamar', 
            'kamarKosong', 
            'kamarTerisi', 
            'totalPenghuni', 
            'totalPembayaran', 
            'pembayaranTerbaru'
        ));
    }

    public function beranda()
    {
        return view('admin.beranda'); // Pastikan file ini ada di resources/views/admin/
    }
}
