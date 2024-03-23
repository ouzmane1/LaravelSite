<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order_line extends Model
{
    use HasFactory;

    protected $fillable = [
        'product_id',
        'quantity',
        'price',
        'order_id'
    ];


    // relation avec produit
    public function products(){
        return $this->belongsTo(Product::class);
    }


    // relation avec order
    public function orders(){
        return $this->belongsTo(Order::class);
    }
}
