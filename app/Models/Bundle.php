<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Bundle extends Model
{
    use HasFactory;

    protected $fillable = [
        'register_code',
        'name',
        'email',
        'ticket',
        'phone',
        'payment',
        'bundle'
    ];

    public function getRouteKeyName()
    {
        return 'register_code';
    }
}
