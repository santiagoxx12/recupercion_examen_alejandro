<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Collaborator extends Model
{
    use HasFactory;

    public function projects(){

        return $this->belongsToMany('App\Models\Project');
    }
    public function pays(){

        return $this->hasMany('App\Models\Pay');
    }
}
