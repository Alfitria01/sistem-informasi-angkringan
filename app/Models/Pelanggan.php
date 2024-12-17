<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pelanggan extends Model
{
    use HasFactory;

    protected $table = 'pelanggan';  // If the table name is not 'pelanggan'
    protected $fillable = ['nama', 'jumlah_harga', 'jumlah_pesanan', 'frekuensi_kunjungan'];
}
