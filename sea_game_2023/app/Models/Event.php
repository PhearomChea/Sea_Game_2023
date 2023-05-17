<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Event extends Model
{
    use HasFactory;
    protected $fillable = [
        'event_name',
        'date',
        'time_start',
        'number_standA',
        'number_standB',
        'sport_id',
        'hall_id'
    ];
    public function matching(){
        return $this->hasMany(Matching::class);
    }
    public function sport(){
        return $this->hasMany(Sport::class);
    }
    public function hall(){
        return $this->hasMany(Hall::class);
    }
    public function booking(){
        return $this->hasMany(Booking::class);
    }
}
