<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
    use HasFactory;

    //Relación n:n
    public function users(){
        return $this->belongsToMany('App\Models\User');
    }

    //Relación 1:n
    public function category(){
        return $this->belongsTo('App\Models\Category'); 
    }
}
