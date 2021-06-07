<?php

namespace App\Controllers;

class Inicio extends BaseController
{
    public function index()
    {
        return view('inicio/inicio');
    }
    public function forgotPassword(){
        return view('comun/olvidarContra');
    }
    public function recoverPassword(){
        return view('comun/recuperarContra');
    }
}
