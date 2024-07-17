<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Journey extends Model
{
    use HasFactory;

    public function traveler(){
        return $this->belongsTo('App\Models\Traveler');
    }

    public function origin(){
        return $this->belongsTo('App\Models\Origin');
    }

    public function destination(){
        return $this->belongsTo('App\Models\Destination');
    }
}
