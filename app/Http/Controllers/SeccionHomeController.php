<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Slider;
use App\Producto;
use App\Informacion;
use App\Familia;

class SeccionHomeController extends Controller
{
    public function index()
    {
        $sliders     = Slider::where('seccion', 'home')->get();
        $informacion = Informacion::first();
        $idioma      = \App::getLocale();
        $nombre = 'nombre_'.\App::getLocale();
        $familias = Familia::orderBy('orden')->limit(4)->get();
    	return view('page.home.index', compact('sliders', 'informacion', 'idioma', 'familias', 'nombre'));
    }

    public function buscador(Request $request)
    {

        $busqueda  = $request->nombre;
        $resultado = Producto::where('nombre_es', 'like', '%'.$busqueda.'%')
            ->orWhere('nombre_pt', 'like', '%'.$busqueda.'%')
            ->orWhere('descripcion_pt', 'like', '%'.$busqueda.'%')
            ->orWhere('descripcion_pt', 'like', '%'.$busqueda.'%')
            ->get();

        return view('page.home.busqueda', ['resultado' => $resultado]);
    }



}
