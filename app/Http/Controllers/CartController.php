<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CartController extends Controller
{
    // Menampilkan daftar item di keranjang
    public function index()
    {
        $cartItems = session()->get('cart', []);
        $cartTotal = $this->calculateCartTotal($cartItems);

        return view('cart.index', compact('cartItems', 'cartTotal'));
    }

    // Menambahkan item ke keranjang
    public function add(Request $request)
    {
        $validated = $request->validate([
            'menu_id' => 'required|string',
            'menu_title' => 'required|string',
            'menu_price' => 'required|numeric|min:0',
            'quantity' => 'nullable|integer|min:1',
        ]);

        $cart = session()->get('cart', []);
        $menuId = $validated['menu_id'];

        $item = [
            'menu_id' => $menuId,
            'menu_title' => $validated['menu_title'],
            'menu_price' => (float) $validated['menu_price'], // Cast to float
            'quantity' => (int) ($validated['quantity'] ?? 1), // Default to 1
        ];

        // Cek apakah item sudah ada di keranjang
        if (isset($cart[$menuId])) {
            $cart[$menuId]['quantity'] += $item['quantity'];
        } else {
            $cart[$menuId] = $item;
        }

        session()->put('cart', $cart);

        return redirect()->route('cart.index')->with('success', 'Item added to cart');
    }

    // Memperbarui jumlah item di keranjang
    public function update(Request $request, $id)
    {
        $validated = $request->validate([
            'quantity' => 'required|integer|min:1',
        ]);

        $cart = session()->get('cart', []);

        if (!isset($cart[$id])) {
            return redirect()->route('cart.index')->with('error', 'Item not found');
        }

        $cart[$id]['quantity'] = $validated['quantity'];
        session()->put('cart', $cart);

        return redirect()->route('cart.index')->with('success', 'Cart updated');
    }

    // Menghapus item dari keranjang
    public function destroy($id)
    {
        $cart = session()->get('cart', []);

        if (!isset($cart[$id])) {
            return redirect()->route('cart.index')->with('error', 'Item not found');
        }

        unset($cart[$id]);
        session()->put('cart', $cart);

        return redirect()->route('cart.index')->with('success', 'Item removed from cart');
    }

    // Menghitung total keranjang
    private function calculateCartTotal(array $cartItems): float
    {
        return collect($cartItems)->sum(fn($item) => (float) $item['menu_price'] * (int) $item['quantity']);
    }
}
