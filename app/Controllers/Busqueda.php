<?php

namespace App\Controllers;

class Busqueda extends BaseController
{
    public function index()
    {
        return view('cliente/busqueda');
    }
}