<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Agencies extends Model
{
    use HasFactory;
    protected  $primaryKey = 'agency_id';

    protected $fillable = [
        'name',
        'country',
        'type',
    ];

    public function events()
    {
        return $this->hasMany(Event::class, 'agency_id');
    }

    public function participates()
    {
        return $this->hasManyThrough(participate::class, Event::class, 'agency_id', 'event_id');
    }

}
