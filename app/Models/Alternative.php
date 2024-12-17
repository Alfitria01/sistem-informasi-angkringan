<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Alternative extends Model
{
    use HasFactory;

    // Nama tabel
    protected $table = 'alternatives';

    // Kolom yang dapat diisi
    protected $fillable = ['name', 'description'];

    // Relasi ke Score
    public function scores()
    {
        return $this->hasMany(Score::class);
    }
}
