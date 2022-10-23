<?php

namespace App\Http\Controllers;

use App\Models\Cargo;
use App\Models\Condicion as ModelsCondicion;
use App\Models\Escuela;
use App\Models\Facultad;
use Illuminate\Support\Facades\Http;
use Illuminate\Http\Request;

class DniController extends Controller
{
    //
    public function __invoke()
    {
        return "Bienvenido a la pagina de registro";
    }

    public function consulta()
    {
        // $client = new Client([
        //     'base_uri' => 'https://jsonplaceholder.typicode.com/',
        //     'timeout'  => 2.0,
        // ]);
        // $response = $client->request('GET', 'todos', []);

        // echo $response;
        // dd($response->getBody()->getContents());
        // $val = json_decode($response->getBody()->getContents());
        // return $val;
        // return $val[0];
        // return view('register');
        return view('register', ['dni' => 23687632]);
    }

    public function setData(Request $request)
    {
        $data = ModelsCondicion::get();
        $data1 = Cargo::get();
        $escu = Escuela::get();
        $fac = Facultad::get();

        $request->validate([
            '_dni' => ['required', 'max:8', 'min:8'],
        ]);

        $dniVal = $request->input('_dni');
        $dni = $dniVal;

        // dd($dni);


        $response = Http::withHeaders([
            'Authorization' => 'Bearer apis-token-2804.FPvCidtev1tYKiT9b30AK4paQT0P3WgK',
        ])->get('https://api.apis.net.pe/v1/dni?numero=' . $dni);

        $val = json_decode($response->getBody()->getContents());

        $dni = $val->numeroDocumento;
        $name = $val->nombres;
        $lastaNameF = $val->apellidoPaterno;
        $lastaNameM = $val->apellidoMaterno;

        // dd($name);   

        // return view('register', ['dni' => request('_dni')]);
        return view('registerData', [
            'dni' => $dni,
            'name' => $name,
            'lastNameF' => $lastaNameF,
            'lastNameM' => $lastaNameM, 
            'data' => $data, 
            'data1' => $data1, 
            'escu' => $escu, 
            'fac' => $fac
        ]);
       
        // return view('register', ['dni' => $dniVal]);
    }
}
