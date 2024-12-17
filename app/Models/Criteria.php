<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Criteria extends Model
{
    use HasFactory;

    // Nama tabel
    protected $table = 'criteria';

    // Kolom yang dapat diisi
    protected $fillable = ['name', 'weight', 'type'];

    // Relasi ke Score
    public function scores()
    {
        return $this->hasMany(Score::class);
    }
}
