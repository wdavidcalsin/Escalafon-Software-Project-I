<?php

namespace App\Http\Controllers;

use App\Mail\SendPasswordbyEmail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class MailsController extends Controller
{
    //

    public function vista()
    {
        return view('mails');
    }

    public function checkEmail(Request $request){
        $val = $request->input("correo");
        $correo = new SendPasswordbyEmail;
        // dd($correo);

        Mail::to($val)->send($correo);
        return 'La contraseña se genero correctamente para '.$val;
    }

}
