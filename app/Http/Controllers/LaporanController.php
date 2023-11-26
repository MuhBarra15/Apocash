<?php

namespace App\Http\Controllers;

use App\Models\Penjualan;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class LaporanController extends Controller
{
    public function index(Request $request)
    {
        return view('laporan.index');
    }

    public function bulanan()
    {
        // Ambil rentang tanggal bulan ini
        $startDate = Carbon::now()->startOfMonth();
        $endDate = Carbon::now()->endOfMonth();

        // Query data dari database
        $penjualan = DB::table('penjualan')
            ->whereBetween('created_at', [$startDate, $endDate])
            ->get();

        // Kirim data ke tampilan laporan bulanan
        return view('laporan.pdf', compact('penjualan'));
    }

    public function harian()
    {
        // Ambil tanggal hari ini
        $today = Carbon::now()->format('Y-m-d');

        // Query data dari database
        $penjualan = DB::table('penjualan')
            ->whereDate('created_at', $today)
            ->get();

        // Kirim data ke tampilan laporan harian
        return view('laporan.pdf', compact('penjualan'));
    }
}
