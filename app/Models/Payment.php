<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Payment extends Model
{
    use HasFactory;

    protected $fillable = [
        'amount',
        'date',
        'payment_method',
        'order_id'
    ];

    public function orders(){
        return $this->belongsTo(Order::class);
    }
}
