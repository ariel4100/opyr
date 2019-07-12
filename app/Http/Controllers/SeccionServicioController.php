<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Servicio;
use App\Texto;

class SeccionServicioController extends Controller
{
    public function index(){
			$servicios = Servicio::orderBy('orden')->get();
			$idioma    = \App::getLocale();
			
			$seccion   = 'Servicios';
			$texto     = Texto::where('ubicacion', 'texto-servicios')->first();
			
			$mensaje   = '';
    	return view('page.servicios.index', compact('servicios', 'idioma', 'seccion', 'texto', 'mensaje'));
    }
}
