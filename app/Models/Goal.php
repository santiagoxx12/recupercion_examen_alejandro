<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Goal extends Model
{
  
    use HasFactory;
    public function player(){
        return $this->belongsTo('App\Models\Player');
    
    }

    public function game(){
        return $this->belongsTo('App\Models\Game');
    
    }
}
