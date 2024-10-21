<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MenuController extends Controller
{
    public function index()
    {
        // Menampilkan daftar kategori menu
        return view('menu.index');
    }

    // Method untuk menampilkan detail menu berdasarkan kategori
    public function detail($category)
    {
        // Data menu berdasarkan kategori
        $menus = [
            'jus' => [
                ['title' => 'Jus Buah', 'description' => 'Refreshing fruit juice made from seasonal fruits.', 'price' => 'Rp 15.000'],
            ],
            'teh' => [
                ['title' => 'Teh Es/Panas', 'description' => 'Traditional iced/hot tea with a hint of sweetness.', 'price' => 'Rp 5.000'],
            ],
            'kopi' => [
                ['title' => 'Kopi Es/Panas', 'description' => 'Coffee served hot or iced, brewed to perfection.', 'price' => 'Rp 10.000'],
            ],
            'kacang_hijau' => [
                ['title' => 'Kacang Hijau', 'description' => 'Sweet mung bean porridge with coconut milk.', 'price' => 'Rp 8.000'],
            ],
            'gorengan' => [
                ['title' => 'Gorengan', 'description' => 'Crispy fried snacks, perfect for sharing.', 'price' => 'Rp 2.000'],
            ],
        ];

        // Jika kategori tidak ditemukan, kembalikan halaman 404
        if (!array_key_exists($category, $menus)) {
            abort(404);
        }

        // Kembalikan view dengan data menu untuk kategori yang dipilih
        return view('menu.detail', ['menus' => $menus[$category], 'category' => $category]);
    }
}
