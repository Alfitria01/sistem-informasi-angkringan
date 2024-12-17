<?php

namespace App\Http\Controllers;

use App\Models\BahanBaku;
use Illuminate\Http\Request;

class BahanBakuController extends Controller
{
    // Display a listing of the Bahan Baku
    public function index()
    {
        $bahan_bakus = BahanBaku::all();
        return view('bahan_baku.index', compact('bahan_bakus'));
    }

    // Show the form for creating a new Bahan Baku
    public function create()
    {
        return view('bahan_baku.create');
    }

    // Store a newly created Bahan Baku in the database
    public function store(Request $request)
    {
        $request->validate([
            'nama' => 'required',
            'jumlah' => 'required|integer',
            'satuan' => 'required',
        ]);

        BahanBaku::create($request->all());
        return redirect()->route('bahan_baku.index')->with('success', 'Bahan Baku berhasil ditambahkan.');
    }

    // Display the specified Bahan Baku
    public function show(BahanBaku $bahan_baku)
    {
        return view('bahan_baku.show', compact('bahan_baku'));
    }

    // Show the form for editing the specified Bahan Baku
    public function edit(BahanBaku $bahan_baku)
    {
        return view('bahan_baku.edit', compact('bahan_baku'));
    }

    // Update the specified Bahan Baku in the database
    public function update(Request $request, BahanBaku $bahan_baku)
    {
        $request->validate([
            'nama' => 'required',
            'jumlah' => 'required|integer',
            'satuan' => 'required',
        ]);

        $bahan_baku->update($request->all());
        return redirect()->route('bahan_baku.index')->with('success', 'Bahan Baku berhasil diupdate.');
    }

    // Remove the specified Bahan Baku from the database
    public function destroy(BahanBaku $bahan_baku)
    {
        $bahan_baku->delete();
        return redirect()->route('bahan_baku.index')->with('success', 'Bahan Baku berhasil dihapus.');
    }
}
