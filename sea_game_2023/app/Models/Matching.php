<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Matching extends Model
{
    use HasFactory;
    protected $fillable = [
        'home_country',
        'away_country',
        'time_start'
    ];
    public function event(){
        return $this->belongTo(Event::class);
    }
}
