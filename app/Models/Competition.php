<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Competition extends Model
{
    use HasFactory;

    protected $fillable = [
        'register_code',
        'email',
        'phone',
        'data',
        'twibbon',
        'letter',
        'recommendation',
        'payment'
    ];

    public function getRouteKeyName()
    {
        return 'register_code';
    }
}
