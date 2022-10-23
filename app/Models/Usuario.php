<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Usuario extends Model
{
    use HasFactory;
    protected $table = "usuarios";
    protected $fillable = [
        'condicion_id', 
        'cargo_id',
        'escuela_id', 
        'facultad_id',
        'dni', 
        'nombres',
        'apellidos', 
        'genero',
        'fechanac', 
        'estado',
        'departamento', 
        'provincia',
        'distrito', 
        'direccionac',
        'lugar', 
        'vivienda',
        'correoinst', 
        'correoper',
        'celular1', 
        'celular2',
        'decreto',
        'afp', 
        'brevete',
        'servicio',
        'tiempo', 
        'archivo',
    ];

    protected $hidden = [
        'contraseña',
    ];
    //relacion uno a muchos inversa 
    public function Condicion(){
        return $this->belongsTo('App/Models/Condicion','condicion_id');
       //return $this->belongsTo(Condicion::class,'condicion_id');
    }
    public function Cargo(){
        return $this->belongsTo('App/Models/Cargo','cargo_id');
    }

    public function Escuela(){
        return $this->belongsTo('App/Models/Escuela','escuela_id');
    }

    public function Facultad(){
        return $this->belongsTo('App/Models/Facultad','facultad_id');
    }

    // static function insert($data){

    //     dd($data);
    // }


}