<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;

    // Define which attributes can be mass-assigned
    protected $fillable = ['name'];

    // A category can have many products
    public function products()
    {
        return $this->hasMany(Product::class);
    }
}
