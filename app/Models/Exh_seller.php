<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Exh_seller extends Model
{
    use HasFactory;

    protected $fillable = [
        'register_code',
        'name',
        'owner',
        'phone',
        'email',
        'product',
        'amount',
        'menu',
        'photo',
        'payment'
    ];

    public function getRouteKeyName()
    {
        return 'register_code';
    }
}
