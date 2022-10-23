<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Facultad extends Model
{
    use HasFactory;
    protected $table = "facultad";

    public function Usuario(){
        return $this->hasMany('App/Models/Usuario');
    }
}
