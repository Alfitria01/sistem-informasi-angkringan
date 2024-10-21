<?php

namespace App\Http\Controllers;

use App\Models\Transaction;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class TransactionController extends Controller
{
    // Create a new transaction
    public function createTransaction(Request $request)
    {
        $request->validate([
            'total_amount' => 'required|numeric',
            // Add more validation as needed
        ]);

        $transaction = Transaction::create([
            'user_id' => Auth::id(),
            'total_amount' => $request->total_amount,
            'status' => 'completed', // or any status you want to set
        ]);

        // Optionally clear the cart or perform other actions here

        return redirect()->route('transactions.index')->with('success', 'Transaction completed.');
    }

    // View transaction history
    public function index()
    {
        $transactions = Transaction::where('user_id', Auth::id())->get();
        return view('transactions.index', compact('transactions'));
    }

    // View a specific transaction
    public function show($id)
    {
        $transaction = Transaction::findOrFail($id);
        return view('transactions.show', compact('transaction'));
    }
}
