<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PelangganController extends Controller
{
    // Method to show the filter form
    public function index()
    {
        return view('pelanggan.index'); // Loads the standalone Blade view for the form
    }

    // Method to process the filter logic
    public function filter(Request $request)
    {
        $bulan = $request->input('bulan'); // Input bulan dalam format '2024-11'
    
        if (!$bulan) {
            return redirect()->back()->with('error', 'Silakan pilih bulan terlebih dahulu.');
        }
    
        $dataPelanggan = DB::table('transactions')
            ->select(
                DB::raw('DATE(transactions.transaction_date) as tanggal'),
                'customers.name as nama_pelanggan',
                DB::raw('SUM(transactions.amount) as total_harga')
            )
            ->join('customers', 'transactions.order_id', '=', 'customers.id') // Menggunakan order_id sebagai foreign key
            ->whereMonth('transactions.transaction_date', '=', date('m', strtotime($bulan))) // Filter bulan
            ->whereYear('transactions.transaction_date', '=', date('Y', strtotime($bulan))) // Filter tahun
            ->groupBy(DB::raw('DATE(transactions.transaction_date)'), 'customers.name')
            ->orderBy('total_harga', 'desc') // Urutkan dari total harga tertinggi
            ->get();
    
        return view('pelanggan.index', [
            'dataPelanggan' => $dataPelanggan,
            'bulan' => $bulan
        ]);
    }    
}
