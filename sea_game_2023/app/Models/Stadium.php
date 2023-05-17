<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Stadium extends Model
{
    use HasFactory;
    protected $fillable = [
        'stadium_name',
        'stadium_address',
    ];
    public function hall(){
        return $this->hasMany(Hall::class);
    }
}
