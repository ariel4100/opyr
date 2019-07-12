<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Calidad;
use App\Descarga;

class SeccionCalidadController extends Controller
{
    public function index(){
		$idioma    = \App::getLocale();
		$calidad   = Calidad::first();
		$descargas = Descarga::orderBy('orden')->where('seccion', null)->get();
    	return view('page.calidad.index', compact('calidad', 'idioma', 'descargas'));
    }
}
