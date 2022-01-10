<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Effect extends Model
{
    use HasFactory;

    protected $fillable = [
        'register_code',
        'email',
        'phone',
        'team',
        'collage',
        'proposal',
        'payment',
    ];

    public function effect_team()
    {
        return $this->hasMany(Effect_team::class);
    }

    public function getRouteKeyName()
    {
        return 'register_code';
    }
}
