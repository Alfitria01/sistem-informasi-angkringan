<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    // Define which attributes can be mass-assigned
    protected $fillable = [
        'name',
        'description',
        'price',
    ];

    // Optionally, you can define default values for attributes
    protected $attributes = [
        'description' => '',
    ];

    // Optionally, define any relationships, like categories or tags
    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    public function tags()
    {
        return $this->belongsToMany(Tag::class);
    }
}
