@extends('layouts.layout')

@section('content')


  <div class="w-full max-w-lg">
    <form class="  bg-white shadow-md border border-gray-200 rounded-lg px-8 pt-6 pb-4 mb-28 mt-16 dark:bg-gray-800 dark:border-gray-700" action="/register" method="POST">

      <h3 class=" text-center font-bold text-3xl text-gray-900 dark:text-white">Registro de Usuario</h3>
      <h1 class=" text-center  text-base text-gray-500 dark:text-white"> Consulta RENIEC - Administrativos</h1>
      <br>
      <br>
      @csrf   
      <div class=" justify-center flex items-start ">
        
        <input type="number" name="_dni" id="username" class="w-full text-sm bg-white border outline-none border-gray-300 text-gray-900 rounded-lg focus:ring-blue-500 focus:border-blue-500 block  py-3.5  dark:border-gray-600 dark:placeholder-blue-800 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 " placeholder="Ingrese su número de DNI" required>
        @error('_dni')
                <div class="text-red-500 italic py-2 text-xs">{{ $message }}</div>
            @enderror

        <div>
          <button  class=" text-white bg-blue-500 hover:bg-blue-600 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-lg w-full px-4 py-3   dark:bg-blue-600 dark:hover:bg-blue-600 dark:focus:ring-blue-700" type="submit">Buscar</button>
        </div> 
      </div>
      <div class="">
        <div class=" text-center  text-gray-500 dark:text-gray-300">
              ¿Ya se encuentra registrada? <a href="{{ route('login') }}" class="font-bold  text-blue-500 hover:underline dark:text-blue-500">Inicie sesión aquí</a>
          </div>
        </div>
    </form>
    </div>
    
   

@endsection