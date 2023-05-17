<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Hall extends Model
{
    use HasFactory;
    protected $fillable = [
        'hall_name',
        'stadium_id',
    ];
    public function stadium(){
        return $this->belongTo(Stadium::class);
    }
    public function event(){
        return $this->belongTo(Event::class);
    }
}
