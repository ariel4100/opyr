<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Empresa;
use App\Slider;

class SeccionEmpresaController extends Controller
{
    public function index(){
		$idioma  = \App::getLocale();
		$sliders = Slider::where('seccion', 'empresa')->get();
		$empresa = Empresa::first();
    	return view('page.empresa.index', compact('empresa', 'idioma', 'sliders'));
    }
}
