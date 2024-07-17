<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Game extends Model
{
    use HasFactory;
    public function equipments(){
        return $this->belongsToMany('App\Models\Equipment');
    
    }
    public function goals(){
        return $this->hasMany('App\Models\Goal');
    
    }
}
