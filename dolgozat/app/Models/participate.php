<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class participate extends Model
{
    use HasFactory;

    protected $fillable = [
        'present',
        'event_id',
        'user_id'
    ];
}
