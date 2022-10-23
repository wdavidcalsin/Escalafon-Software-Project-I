<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Condicion extends Model
{
    use HasFactory;
    protected $table = "condicion";

// relacion unos a muchos 
    public function Usuario(){

        return $this->hasMany('App/Models/Usuario');
    }

    
}
