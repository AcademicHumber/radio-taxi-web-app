<?php

namespace App\Controllers;

class Conductor extends BaseController
{
    public function index()
    {
        return view('conductor/conductor');
    }
    public function onTheWay(){
        return view('conductor/enCamino');
    }
    public function finish(){
        return view('conductor/finalizado');
    }
}
