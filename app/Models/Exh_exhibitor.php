<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Exh_exhibitor extends Model
{
    use HasFactory;

    protected $fillable = [
        'register_code',
        'name',
        'email',
        'person1',
        'person2',
        'vehicle',
        'phone',
        'address',
        'photo',
        'payment'
    ];

    public function getRouteKeyName()
    {
        return 'register_code';
    }
}
