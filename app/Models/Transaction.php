<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Transaction extends Model
{
    use HasFactory;

    protected $fillable = [
        'order_id',
        'amount',
        'payment_method', // e.g., cash, credit card
        'transaction_date',
        'status', // e.g., completed, pending, failed
    ];

    public function order()
    {
        return $this->belongsTo(Order::class);
    }
}
