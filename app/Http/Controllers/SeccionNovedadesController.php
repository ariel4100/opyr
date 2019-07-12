<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Novedad;
use App\Metadato;
use App\Categoria;

class SeccionNovedadesController extends Controller
{
	public function index()
	{	
		$novedades        = Novedad::orderBy('categoria_id')->orderBy('orden')->get();
		$categorias       = Categoria::orderBy('orden')->get();
		$idioma = \App::getLocale();

	    return view('page.novedades.index', compact('novedades', 'categorias', 'idioma'));
	}

	public function filter($id)
	{
		$novedades        = Novedad::where('categoria_id', $id)->orderBy('categoria_id')->orderBy('orden')->get();
		$categorias       = Categoria::orderBy('orden')->get();
		$categoria_activa = Categoria::find($id);
		$idioma = \App::getLocale();

	    return view('page.novedades.filter', compact('novedades', 'categorias', 'categoria_activa', 'idioma'));
	}

	public function ver($id)
	{
		$novedad    = Novedad::find($id);
		$categorias = Categoria::orderBy('orden')->get();
		$idioma = \App::getLocale();

	    return view('page.novedades.show', compact('novedad', 'categorias', 'idioma'));

	}
}
