<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB; // Import DB facade
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;

class PelangganSeeder extends Seeder
{
    public function run()
    {
        // Insert test data into the pelanggan table
        DB::table('pelanggan')->insert([
            ['nama' => 'Andi', 'jumlah_harga' => 50000, 'jumlah_pesanan' => 5, 'frekuensi_kunjungan' => 3],
            ['nama' => 'Budi', 'jumlah_harga' => 30000, 'jumlah_pesanan' => 3, 'frekuensi_kunjungan' => 2],
            ['nama' => 'Citra', 'jumlah_harga' => 100000, 'jumlah_pesanan' => 10, 'frekuensi_kunjungan' => 5],
            ['nama' => 'Dewi', 'jumlah_harga' => 20000, 'jumlah_pesanan' => 2, 'frekuensi_kunjungan' => 1],
            ['nama' => 'Eko', 'jumlah_harga' => 75000, 'jumlah_pesanan' => 8, 'frekuensi_kunjungan' => 4],
            ['nama' => 'Fajar', 'jumlah_harga' => 40000, 'jumlah_pesanan' => 4, 'frekuensi_kunjungan' => 2],
            ['nama' => 'Gita', 'jumlah_harga' => 60000, 'jumlah_pesanan' => 6, 'frekuensi_kunjungan' => 3],
            ['nama' => 'Hadi', 'jumlah_harga' => 35000, 'jumlah_pesanan' => 4, 'frekuensi_kunjungan' => 2],
            ['nama' => 'Intan', 'jumlah_harga' => 90000, 'jumlah_pesanan' => 9, 'frekuensi_kunjungan' => 4],
            ['nama' => 'Joko', 'jumlah_harga' => 250000, 'jumlah_pesanan' => 3, 'frekuensi_kunjungan' => 1],
            // Add more sample data as needed
        ]);

        // Insert test data into the bobot_perbandingan table
        DB::table('bobot_perbandingan')->insert([
            ['c1_c1' => 1, 'c1_c2' => 2, 'c1_c3' => 2, 'c2_c1' => 0.5, 'c2_c2' => 1, 'c2_c3' => 3, 'c3_c1' => 0.5, 'c3_c2' => 0.3333, 'c3_c3' => 1],
            // Insert comparison matrix data
        ]);
    }
}
