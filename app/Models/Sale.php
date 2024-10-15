<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Sale extends Model
{
    use HasFactory;

    // Jika ada kolom tertentu yang diizinkan untuk mass assignment, bisa didefinisikan di sini
    protected $fillable = ['amount', 'product_id', 'quantity']; // Misalnya
}
