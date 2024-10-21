<?php

namespace App\Http\Controllers;

use App\Models\Product; // Pastikan Anda menggunakan model Product
use App\Models\Sale;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        $products = Product::all(); // Ambil semua data produk
        $totalProducts = $products->count();
        $totalSales = Sale::sum('amount'); // Misalnya, kamu perlu menghitung total penjualan
        $totalStock = $products->sum('stock');

        // Fetch the latest products
        $products = Product::latest()->take(5)->get(); // Adjust the number as needed
        
        // Mengirim variabel ke view
        return view('dashboard', compact('products', 'totalStock', 'totalSales', 'totalProducts'));
    }
}

