<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CheckoutController extends Controller
{
    public function index()
    {
        // Retrieve cart items from the session
        $cartItems = session()->get('cart', []);
        $cartTotal = collect($cartItems)->sum(fn($item) => $item['price'] * $item['quantity']);
        
        return view('checkout.index', compact('cartItems', 'cartTotal'));
    }
}
