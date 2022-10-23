@extends('layouts.layout')

@section('content')

<div class="w-full max-w-lg">
  <form method="POST" action="{{ route('login') }}" class="  bg-white shadow-none border border-gray-300 rounded-lg p-10 mb-20 mt-16 dark:bg-gray-800 dark:border-gray-700" action="#">
   
    
    <h3 class=" text-center font-bold text-2xl text-gray-900 dark:text-white">Iniciar Sesión - Administrativos</h3>
    <h1 class=" text-center  text-base text-gray-500 dark:text-white"> sesión para administrar su cuenta.</h1>
    <br>
    <br>
    <div class="space-y-6">
    <div>
      <label for="email" class="text-sm font-medium text-gray-800 block mb-2 dark:text-gray-300">Tu correo electrónico</label>
        <input type="email" name="email" id="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }} text-sm bg-white border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-3.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white" placeholder="email@sitio.com" value="{{ (Cookie::get('email') !== null) ? Cookie::get('email') : old('email') }}" required="">
        <div class="invalid-feedback">
            {{ $errors->first('Correo Electronico') }}
        </div>  
        @csrf
        @if ($errors->any())
            <div class="alert alert-danger p-0">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
        
        </div>
          <div>
            <div class="flex items-start">
                <div class="text-sm ">
                  <label for="password" class="text-sm font-medium text-gray-800 block mb-2 dark:text-gray-300">Contraseña</label>
                </div>
                <a href="#" class="font-bold text-sm text-blue-500 hover:underline ml-auto dark:text-blue-500">¿Has olvidado tu contraseña?</a>
            </div>
            <input type="password" name="password" id="password" placeholder="Se requiere más de 8 caracteres" class="form-control{{ $errors->has('password') ? ' is-invalid': '' }} text-sm bg-white border border-gray-300 text-gray-700 sm:text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-3.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white"  value="{{ (Cookie::get('password') !== null) ? Cookie::get('password') : null }}" tabindex="2" required="">
          
            <div class="invalid-feedback">
                {{ $errors->first('Contraseña') }}
            </div>  
            
            <div class="form-group">
                <div class="custom-control custom-checkbox">
                    <input type="checkbox" name="remember" class="custom-control-input" tabindex="3"
                           id="remember"{{ (Cookie::get('remember') !== null) ? 'checked' : '' }}>
                    <label class="custom-control-label" for="remember">Recuérdame</label>
                </div>
            </div>
        </div>
          <button type="submit" class="w-full text-white bg-blue-500 hover:bg-blue-600 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-lg px-5 py-3.5 text-center dark:bg-blue-600 dark:hover:bg-blue-600 dark:focus:ring-blue-700">Iniciar sesión</button>
          <div class="text-sm text-center font-medium text-gray-500 dark:text-gray-300">
            ¿Aún no tienes una cuenta?  <a href="{{ url('register') }}" class="font-bold  text-blue-500 hover:underline dark:text-blue-500">Registrate aquí</a>
        </div>
      </div>
  </form>
  </div>

    
@endsection
