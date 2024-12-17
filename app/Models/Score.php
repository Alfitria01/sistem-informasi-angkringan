<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Score extends Model
{
    use HasFactory;

    // Nama tabel
    protected $table = 'scores';

    // Kolom yang dapat diisi
    protected $fillable = ['alternative_id', 'criteria_id', 'value'];

    // Relasi ke Criteria
    public function criteria()
    {
        return $this->belongsTo(Criteria::class);
    }

    // Relasi ke Alternative
    public function alternative()
    {
        return $this->belongsTo(Alternative::class);
    }
}
