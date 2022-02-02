<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Event_setting extends Model
{
    use HasFactory;

    protected $fillable = ['event', 'form_open', 'form_closed'];

    public function getRouteKeyName()
    {
        return 'event';
    }
}
