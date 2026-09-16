<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TransactionController extends Controller
{
    public function create()
    {
        $waktu = now()->format('H:i:s'); 
        return "Halaman kasir dibuka pukul {$waktu}";
    }
    public function store()
    {
        return view('Trx di simpan (Belum ada logika penyimpanan transaksi)');
    }
    public function index()
    {
        return view('Daftar Transaksi');
    }
    public function show(string $id)
    {
        return "Detail Transaksi #{$id}";
    }
    public function riwayat()
    {
        return "Riwayat kasir";
    }
}
