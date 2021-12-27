<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Webinar extends Model
{
    use HasFactory;

    protected $fillable = [
        'register_code',
        'name',
        'instance',
        'email',
        'phone',
        'age',
        'promotion',
        'share'
    ];

    public function getRouteKeyName()
    {
        return 'register_code';
    }
}
