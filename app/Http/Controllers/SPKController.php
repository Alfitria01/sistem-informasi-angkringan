<?php

namespace App\Http\Controllers;

use App\Models\Pelanggan; // Import Pelanggan model
use Illuminate\Http\Request;

class SPKController extends Controller
{
    // Function to normalize data (Normalisasi SAW)
    public function normalisasiSAW($pelanggan)
    {
        // Get the max values for each criterion (C1, C2, C3)
        $criteriaMax = [
            'c1' => $pelanggan->max('jumlah_harga'),
            'c2' => $pelanggan->max('jumlah_pesanan'),
            'c3' => $pelanggan->max('frekuensi_kunjungan')
        ];

        $normalizedData = [];
        foreach ($pelanggan as $p) {
            $normalizedData[] = [
                'nama' => $p->nama, // Correctly access model attributes using $p->nama
                'normalisasi_c1' => $p->jumlah_harga / $criteriaMax['c1'],
                'normalisasi_c2' => $p->jumlah_pesanan / $criteriaMax['c2'],
                'normalisasi_c3' => $p->frekuensi_kunjungan / $criteriaMax['c3'],
            ];
        }

        return $normalizedData;
    }

    // Function to calculate the final score using weights (Perhitungan Bobot)
    public function hitungSkorAkhir($normalizedData)
    {
        // Define the weights for each criterion (C1, C2, C3)
        $weights = [
            'c1' => 0.4778,
            'c2' => 0.35,
            'c3' => 0.1722
        ];

        $scores = [];
        foreach ($normalizedData as $data) {
            $scores[] = [
                'nama' => $data['nama'], // Make sure you pass the name through as well
                'skor_akhir' => ($data['normalisasi_c1'] * $weights['c1']) +
                               ($data['normalisasi_c2'] * $weights['c2']) +
                               ($data['normalisasi_c3'] * $weights['c3']),
            ];
        }

        return $scores;
    }

    // Function to sort the scores (Pengurutan Skor Akhir)
    public function urutkanSkor($scores)
    {
        usort($scores, function ($a, $b) {
            return $b['skor_akhir'] <=> $a['skor_akhir']; // Sort in descending order
        });

        return $scores;
    }

    // Function to display the final scores (Output Skor Akhir)
    public function index()
    {
        // Get all pelanggan (customers)
        $pelanggan = Pelanggan::all(); // Fetch all records from the 'pelanggan' table

        // Perform Normalisasi SAW
        $normalizedData = $this->normalisasiSAW($pelanggan);

        // Calculate the final scores
        $scores = $this->hitungSkorAkhir($normalizedData);

        // Sort the scores in descending order
        $sortedScores = $this->urutkanSkor($scores);

        // Pass the sorted scores to the view
        return view('spk.index', compact('sortedScores'));
    }
}
