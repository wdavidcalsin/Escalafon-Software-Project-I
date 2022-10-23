@extends('layouts.layout')

@section('content')

<div class="w-full max-w-4xl">
    <div class="bg px-8 pt-8 pb-8 mb-32 mt-16 ">
        <div class="mb-6">
            <h2 class="text-center font-extrabold leading-tight text-2xl text-black font-raleway">REGISTRO DE DATOS PARA LA CREACION DE UNA CUENTA 
                EN LA PLATAFORMA DE ESCALAFON</h2>
        </div>
        <form method="POST" action="{{url('/Usuario')}} " accept-charset="UTF-8" enctype="multipart/form-data">
          @csrf
          <div class="mb-4 mt-4">
            <div class="space-y-3 mb-4">
              <h2 class="font-bold">Condicion Administrativa</h2>
              <div class="space-y-3">
                <!-- <label for="">Seleccione</label>
                <input class="border font-roboto border-gray-400 appearance-none rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="username" type="text" placeholder="Ingrese tu numero de DNI"> --}} -->
                <label for="">Condicion</label>
                <select name="condicion_id" velue="" id="countries" class="bg-white border border-gray-300 text-gray-900 text-sm rounded focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:focus:border-blue-500">
                  <option value="">Seleccione</option>
                  @foreach ($data as $item)
                    <option value={{$item->condicion_id}}>{{$item->descripcion}}</option>
                  @endforeach
                </select>
              </div>
              <div class="space-y-3">
                <label for="">Cargo</label>
                <select name="cargo_id"id="countries" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                  <option selected>Seleccione</option>
                  @foreach ($data1 as $item)
                    <option value={{$item->cargo_id}}>{{$item->descripcion}}</option>
                  @endforeach
                </select>
              </div>
              <div class="space-x-3 flex justify-between">
                <div class="flex-1 space-y-3">
                  <label for="">Facultad</label>
                  <select name="facultad_id"class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                  <option selected>Seleccione</option>
                  @foreach ($fac as $item)
                    <option value={{$item->facultad_id}}>{{$item->descripcion}}</option>
                  @endforeach
                </select>
              </div>
                <div class="flex-1 space-y-3">
                  <label for="">Escuela</label>
                  <select name="escuela_id" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                    <option selected>Seleccione</option>
                    @foreach ($escu as $item)
                    <option value={{$item->escuela_id}}>{{$item->descripcion}}</option>
                  @endforeach
                  </select>
                </div>
              </div>
            </div>
            <div class="space-y-3 mb-4">
              <h2 class="font-bold">Datos Personales</h2>
              <div class="space-x-3 flex justify-between">
                <div class="flex-1 space-y-3">
                  <label for="">DNI</label>
                  <input type="number" name="dni" id="dni" value={{$dni}} class="bg-gray-50 border outline-none border-gray-300 text-gray-900 text-sm rounded focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 pointer-events-none cursor-not-allowed " placeholder="Ingrese su DNI" readonly >
                </div>
                <div class="flex-1 space-y-3">
                  <label for="">Nombres</label>
                  <input type="text" name="nombres" id="first_name" value='{{$name}}' class="bg-gray-50 border outline-none border-gray-300 text-gray-900 text-sm rounded focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 cursor-not-allowed pointer-events-none" placeholder="Ingrese sus Nombres" readonly >
                </div>
                <div class="flex-1 space-y-3">
                  <label for="">Apellidos</label>
                  <input type="text" name="apellidos" value='{{$lastNameF}} {{$lastNameM}}' id="first_apelli" class="bg-gray-50 border outline-none border-gray-300 text-gray-900 text-sm rounded focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 cursor-not-allowed pointer-events-none" placeholder="Ingrese sus Apellidos" readonly>
                </div>
              </div>
              <div class="space-x-3 flex justify-between">
                <div class="flex-1 space-y-3">
                  <label for="">Genero</label>
                  <select name="genero" id="genero" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 ">
                    <option selected>Seleccione</option>
                    <option name="genero" value="F">F</option>
                    <option name="genero" value="M">M</option>
                  </select>
                </div>
                <div class="flex-1 space-y-3">
                  <label for="">Fecha de Nacimiento</label>
                  <input type="date" name="fechanac" id="fecnac" class="bg-gray-50 border outline-none border-gray-300 text-gray-900 text-sm rounded focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Ingrese la Fecha" >
                </div>
                <div class="flex-1 space-y-3">
                  <label for="">Estado Civil</label>
                  <select name="estado" id="estado" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                    <option selected>Seleccione</option>
                    <option name="estado" value="soltero">soltero</option>
                    <option name="estado" value="casado">casado</option>
                  </select>
                </div>
              </div>
              <div class="space-x-3 flex justify-between">
                <div class="flex-1 space-y-3">
                  <label for="">Departamento de Nacimiento</label>
                  
                  <input type="text" name="departamento" id="departnac" class="bg-gray-50 border outline-none border-gray-300 text-gray-900 text-sm rounded focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Ingrese el Departamento" >
                </div>
                <div class="flex-1 space-y-3">
                  <label for="">Provincia de Nacimiento</label>
                  
                  <input type="text" name="provincia" id="provinac" class="bg-gray-50 border outline-none border-gray-300 text-gray-900 text-sm rounded focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Ingrese la Provincia" >
                </div>
              </div>
              <div class="space-x-3 flex justify-between">
                <div class="flex-1 space-y-3">
                  <label for="">Distrito de Nacimiento</label>
                  
                  <input type="text"  name="distrito" id="distrnac" class="bg-gray-50 border outline-none border-gray-300 text-gray-900 text-sm rounded focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Ingrese el Distrito" >
                </div>
                <div class="flex-1 space-y-3">
                  <label for="">Distrito Actual</label>
                  
                  <input type="text" name="direccionac" id="distrac" class="bg-gray-50 border outline-none border-gray-300 text-gray-900 text-sm rounded focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Ingrese Distrito Actual" >
                </div>
              </div>
              <div class="space-x-3 flex justify-between">
                <div class="flex-1 space-y-3">
                  <label for="">Lugar de Direccion</label>
                  
                  <input type="text" name="lugar" id="lugardirr" class="bg-gray-50 border outline-none border-gray-300 text-gray-900 text-sm rounded focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Ingrese lugar de Direccion" >
                </div>
                <div class="flex-1 space-y-3">
                  <label for="">Vivienda</label>
                  <select name="vivienda" id="vivienda" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                    <option selected>Seleccione</option>
                    <option name="vivienda" value="Alquilado">Alquilado</option>
                    <option name="vivienda" value="Propio">Propio</option>
                  </select>
                </div>
              </div>
              <div class="space-x-3 flex justify-between">
                <div class="flex-1 space-y-3">
                  <label for="">Correo Institucional</label>
                  
                  <input type="text" name="correoinst" id="correoinst" class="bg-gray-50 border outline-none border-gray-300 text-gray-900 text-sm rounded focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Ingrese su Correo Institucional" >
                </div>
                <div class="flex-1 space-y-3">
                  <label for="">Correo Personal</label>
                  
                  <input type="text" name="correoper" id="correopers" class="bg-gray-50 border outline-none border-gray-300 text-gray-900 text-sm rounded focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Ingrese su Correo Personal" >
                </div>
              </div>
              <div class="space-x-3 flex justify-between">
                <div class="flex-1 space-y-3">
                  <label for="">Celular 1</label>
                  
                  <input type="number" name="celular1" id="celular1" class="bg-gray-50 border outline-none border-gray-300 text-gray-900 text-sm rounded focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Ingrese su Numero de celular 1" >
                </div>
                <div class="flex-1 space-y-3">
                  <label for="">Celular 2</label>
                  
                  <input type="number"  name="celular2" id="celular2" class="bg-gray-50 border outline-none border-gray-300 text-gray-900 text-sm rounded focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Ingrese su Numero de celular 2" >
                </div>
              </div>

              <!-- <div class="space-y-3">
                <label for="">Seleccione</label>
                {{-- <input class="border font-roboto border-gray-400 appearance-none rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="username" type="text" placeholder="Ingrese tu numero de DNI"> --}}
                <select id="countries" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                  <option selected>Seleccione</option>
                  <option value="1">Seleccione 1</option>
                  <option value="2">Seleccione 2</option>
                  <option value="3">Seleccione 3</option>
                  <option value="4">Seleccione 4</option>
                </select>
              </div>
              <div class="space-y-3">
                <label for="">Cargo</label>
                
                <select id="countries" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                  <option selected>Seleccione</option>
                  <option value="1">Seleccione 1</option>
                  <option value="2">Seleccione 2</option>
                  <option value="3">Seleccione 3</option>
                  <option value="4">Seleccione 4</option>
                </select>
              </div>
            </div> -->
            <div class="space-y-3 mb-4">
              <h2 class="font-bold">Regimen de Pensiones</h2>
              <div class="space-x-3 flex justify-between">
                <div class="flex-1 space-y-3">
                  <label for="">Decreto Legislativo</label>
                  
                  <input type="number" name="decreto" id="decreto_legislativo" class="bg-gray-50 border outline-none border-gray-300 text-gray-900 text-sm rounded focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Ingrese su DNI" >
                </div>
                <div class="flex-1 space-y-3">
                  <label for="">AFP</label>
                  
                  <input type="text" name="AFP" id="afp" class="bg-gray-50 border outline-none border-gray-300 text-gray-900 text-sm rounded focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Ingrese sus Nombres" >
                </div>
                <div class="flex-1 space-y-3">
                  <label for="">ONP</label>
                  
                  <input type="text" name="ONP" id="first_name" class="bg-gray-50 border outline-none border-gray-300 text-gray-900 text-sm rounded focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Ingrese sus Apellidos" >
                </div>]
              </div>
            </div>
            <div class="space-y-3 mb-4">
              <h2 class="font-bold">Otros Datos</h2>
              <div class="space-x-3 flex justify-between">
                <div class="flex-1 space-y-3">
                  <label for="">Numero de Brevete</label>
                  
                  <input type="number" name="brevete" id="nro_brevete" class="bg-gray-50 border outline-none border-gray-300 text-gray-900 text-sm rounded focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Ingrese su DNI" >
                </div>
                <div class="flex-1 space-y-3">
                  <label for="">Servicio Militar</label>
                  <select name="servicio" id="servicio_id" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 ">
                    <option selected>Seleccione</option>
                    <option name="servicio" value="Si">Si</option>
                    <option name="servicio" value="No">No</option>
                  </select>
                </div>

                <div class="flex-1 space-y-3">
                  <label for="">Tiempo de Servicio</label>
                  <input type="text" name="tiempo" id="tiempo_serv" class="bg-gray-50 border outline-none border-gray-300 text-gray-900 text-sm rounded focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Ingrese sus Apellidos" >
                </div>
              </div>
              <div class="space-y-3 ">
                <div class="space-y-3">
                  <label for="archivo">Adjuntar DNI</label>
                  <input class="form-control
                  block
                  w-full
                  px-3
                  py-1.5
                  text-base
                  font-normal
                  text-gray-700
                  bg-white bg-clip-padding
                  border border-solid border-gray-300
                  rounded
                  transition
                  ease-in-out
                  m-0
                  focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none" type="file" id="formFile" name="archivo">
                </div>
                
              </div>
            </div>
          </div>
          
          <div class="flex items-center justify-between">
            <button class="bg-blue-900 hover:opacity-95 w-full text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline" type="submit" value="guardar">
              Crear cuenta
            </button>
            
          </div>
        </form>
    </div>
    
  </div>

@endsection


