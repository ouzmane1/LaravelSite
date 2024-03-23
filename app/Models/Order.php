<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;

    protected $fillable = [
        'nomber',
        'date',
        'customer_id',
        'statut'

    ];

    // relation avec Custumer
    public function custumers(){
        return $this->belongsTo(Customer::class);
    }

    // relation avec order_line
    public function orders_line(){
        return $this->hasMany(Order_line::class);
    }

    // relation avec payment
    public function payments(){
        return $this->hasMany(Payment::class);
    }
}
