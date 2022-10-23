<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cargo extends Model
{
    use HasFactory;
    protected $table = "cargo";

    public function Usuario(){
        return $this->hasMany('App/Models/Usuario');
    }
}