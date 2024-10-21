<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tag extends Model
{
    use HasFactory;

    // Define which attributes can be mass-assigned
    protected $fillable = ['name'];

    // A tag can belong to many products
    public function products()
    {
        return $this->belongsToMany(Product::class);
    }
}
