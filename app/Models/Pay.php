<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pay extends Model
{
    use HasFactory;
    public function collaborator(){

        return $this->belongsTo('App\Models\Collaborator');
    }
    public function type__pay(){

        return $this->belongsTo('App\Models\Type_Pay');
    }
}
