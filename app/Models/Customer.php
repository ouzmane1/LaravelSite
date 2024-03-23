<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    use HasFactory;
    protected $fillable = [
        'fistname',
        'lastname',
        'tel',
        'email',
        'password',
        'adresse'
    ];

    // relation avec order
    public function orders(){
        return $this->hasMany(Order::class);
    }
}
