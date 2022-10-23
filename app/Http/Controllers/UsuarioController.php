<?php

namespace App\Http\Controllers;
// use App\Photo;

use App\Mail\SendPasswordbyEmail;
use Illuminate\Http\Request;
use App\Models\Usuario;
use App\Models\Condicion;
use App\Models\Cargo;
use App\Models\Escuela;
use App\Models\Facultad;
use GuzzleHttp\Psr7\Response;
use Illuminate\Support\Facades\Mail;
use PDF;


class UsuarioController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('Usuario.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $data = Condicion::get();
        $data1 = Cargo::get();
        $escu = Escuela::get();
        $fac = Facultad::get();

        return view('Usuario.create', ['data' => $data, 'data1' => $data1, 'escu' => $escu, 'fac' => $fac]);
        //return view('Usuario.create', ['data1' => $data1]);
    }

    public function store(Request $request)
    {
        //
        //$input =$request->all();
        $input = $request->except('_token');
        // dd($input);
        if ($request->hasFile('archivo')) {
            $input['archivo'] = $request->file('archivo')->store('uploads', 'public');
        }
        $correo = $request->input("correoinst");
        $contra = $this->emailPass($correo);
       

        $input['contraseña'] =  $contra->viewData['password'];

        Usuario::insert($input);
        return response()->json($input);
    }

    function emailPass($correoVal){
        $correo = new SendPasswordbyEmail;

        Mail::to($correoVal)->send($correo);
        return $correo;
    }

    

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
}
