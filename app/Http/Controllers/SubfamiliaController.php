<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Subfamilia;
use App\Familia;
use App\Extensions\Helpers;

class SubfamiliaController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth:admin');
    }
    
    public function index()
    {
        $subfamilias = Subfamilia::where('id', '<>', '1')->orderBy('orden')->get();
        return view('adm.productos.subfamilias.index', compact('subfamilias'));
    }

    public function create()
    {
        $familias = Familia::orderBy('orden')->get();
        return view('adm.productos.subfamilias.create', compact('familias'));
    }

    public function store(Request $request)
    {
		$datos      = $request->all();
		if(isset($datos['is_servicio']))
		{
		    $datos['is_servicio'] = 1;
		}
		$subfamilia = new Subfamilia;
        $file_save  = Helpers::saveImage($request->file('file_image'), 'subfamilias');
        $file_save ? $datos['file_image'] = $file_save : false;       
        $subfamilia->fill($datos);

        $subfamilia->familia_id = $request->familia_id;

        if($subfamilia->save())
            return redirect('adm/productos/subfamilias')->with('alert', "Registro almacenado exitósamente" );
        else
            return redirect('adm/productos/subfamilias')->with('errors', "Ocurrió un error al intentar almacenar el registro" );
    }


    public function edit($id)
    {
        $subfamilia = Subfamilia::find($id);
        $familias   = Familia::orderBy('orden')->get();
    	return view('adm.productos.subfamilias.edit', compact('subfamilia', 'familias'));
    }

    public function update(Request $request, $id)
    {
		$datos      = $request->all();
		if(isset($datos['is_servicio']))
		{
		    $datos['is_servicio'] = 1;
		}
		$subfamilia = Subfamilia::find($id);
		$file_save  = Helpers::saveImage($request->file('file_image'), 'subfamilias');
        $file_save ? $datos['file_image'] = $file_save : false;       
        $subfamilia->fill($datos);

        $subfamilia->familia_id = $request->familia_id;

        if($subfamilia->save())
            return redirect('adm/productos/subfamilias')->with('alert', "Registro actualizado exitósamente" );
        else
            return redirect('adm/productos/subfamilias')->with('errors', "Ocurrió un error al intentar actualizar el registro" );
    }

    public function eliminar($id){
        $subfamilia = Subfamilia::find($id);

        if($subfamilia->delete())
            return redirect()->back()->with('alert', "Registro eliminado exitósamente" );
        else
            return redirect()->back()->with('errors', "Ocurrió un error al intentar eliminar el registro" );
    }


}
