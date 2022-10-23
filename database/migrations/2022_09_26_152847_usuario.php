<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('usuarios', function (Blueprint $table) {
            $table->engine="InnoDB";
            $table->bigIncrements('id');
            $table->bigInteger('condicion_id')->unsigned();
            $table->bigInteger('cargo_id')->unsigned();
            $table->bigInteger('escuela_id')->unsigned();
            $table->bigInteger('facultad_id')->unsigned();
            $table->char('dni',8)->unique();
            $table->string('nombres');
            $table->string('apellidos');
            $table->char('genero',1);
            $table->date('fechanac');
            $table->string('estado');
            $table->string('departamento');
            $table->string('provincia');
            $table->string('distrito');
            $table->string('direccionac');
            $table->string('lugar');
            $table->string('vivienda');
            $table->string('correoinst')->unique();
            $table->string('correoper');
            $table->char('celular1',9);
            $table->char('celular2',9);
            $table->char('decreto');
            $table->string('AFP');
            $table->string('ONP');
            $table->char('brevete',10);
            $table->string('servicio');
            $table->string('tiempo');
            $table->binary('archivo');
            $table->string('contraseña')->nullable();
            $table->timestamps();
        });  
        
        Schema::table('usuarios', function (Blueprint $table) {
            $table->foreign('condicion_id')->references('condicion_id')->on('condicion')->onDelete("cascade");
            $table->foreign('cargo_id')->references('cargo_id')->on('cargo')->onDelete("cascade");
            $table->foreign('escuela_id')->references('escuela_id')->on('escuela')->onDelete("cascade");
            $table->foreign('facultad_id')->references('facultad_id')->on('facultad')->onDelete("cascade");
        });
            
        
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        
    }
};
