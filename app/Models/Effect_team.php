<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Effect_team extends Model
{
    use HasFactory;

    protected $fillable = [
        'effect_id',
        'register_code',
        'name',
        'photo',
        'identity'
    ];

    public function effect()
    {
        return $this->belongsTo(Effect::class);
    }
}
