<?php

namespace App\Controllers;

class Cliente extends BaseController
{
    public function index()
	{
		return view('cliente/home');
	}
    public function searching() {
        return view('cliente/busqueda');
    }
    public function clientWay() {
        return view('cliente/enCamino');
    }
    public function clientFinish() {
        return view('cliente/finalizado');
    }
    public function clientRegister() {
        return view('cliente/registro');
    }
    public function trip() {
        return view('cliente/viajes');
    }
 
  
}