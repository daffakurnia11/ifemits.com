<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Exh_guest extends Model
{
    use HasFactory;

    protected $fillable = [
        'register_code',
        'name',
        'email',
        'ticket',
        'phone',
        'payment',
    ];

    public function getRouteKeyName()
    {
        return 'register_code';
    }
}
