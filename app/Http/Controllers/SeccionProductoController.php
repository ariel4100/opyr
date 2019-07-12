<?php

namespace App\Http\Controllers;

use App\Slider;
use App\Control;
use App\Familia;
use App\Galeria;
use App\Producto;
use App\Subfamilia;
use Illuminate\Http\Request;

class SeccionProductoController extends Controller
{
    public function index() {
        $familias = Familia::all();
        $lang = \App::getLocale();
        return view('page.productos.index', compact('familias', 'lang'));
    }

    public function show(Familia $familia) {
        $familias = Familia::all();
        $productos = Producto::all();
        $subfamilias = Subfamilia::where('familia_id', $familia->id)->orderBy('orden')->paginate(9);
        $control = Control::first();
        $sliders = Slider::where('seccion','control')->get();
        $lang = \App::getLocale();
        $idioma  = \App::getLocale();
        return view('page.productos.show', compact('familias', 'subfamilias', 'lang', 'familia', 'productos','control','sliders','idioma'));
    }

    public function showsubf(Familia $familia, Subfamilia $subfamilia) {
        $familias = Familia::all();
        $productos = Producto::all();
        $lang = \App::getLocale();
        return view('page.productos.showsubf', compact('familia', 'subfamilia', 'lang', 'familias', 'productos'));
    }

    public function showprod(Producto $producto) {
        $relacionados = Producto::where('subfamilia_id', $producto->subfamilia_id)->inRandomOrder()->limit(3)->get();
        $familias = Familia::all();
        $productos = Producto::all();
        $galery = Galeria::where('producto_id',$producto->id)->get();
        $familia = $producto->subfamilia->familia;
        $subfamilia = $producto->subfamilia;
        $lang = \App::getLocale();
        return view('page.productos.showprod', compact('familias', 'lang', 'producto', 'familia', 'subfamilia', 'productos','galery','relacionados'));
    }
}
