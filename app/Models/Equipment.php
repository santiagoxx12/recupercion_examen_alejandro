<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Equipment extends Model
{
    
    use HasFactory;

    public function games(){
        return $this->belongsToMany('App\Models\Game');
    
    }

    public function players(){
        return $this->hasMany('App\Models\Player');
    
    }

    public function president(){
        return $this->hasOne('App\Models\President');
    
    }

    
}
