<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Descarga;
use Illuminate\Support\Facades\Storage;

class DescargaController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth:admin');
    }

    public function index(){
        $descargas = Descarga::where('seccion', null)->orderBy('orden')->get();

    	return view('adm.calidad.descargas.index', compact('descargas'));
    }
  

    public function create(){
    	return view('adm.calidad.descargas.create');
    }


    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
	{
		$datos    = $request->all();

        $descarga = new Descarga;

        $descarga->fill($datos);

        $descarga->save();

        if($request->file('file')!=null){
            
			$ruta           = 'descargas';
			$path           = Storage::putFileAs($ruta, $request->file('file'),'calidad'.$descarga->id.'.'.$request->file('file')->getClientOriginalExtension());
			$rutaNombre     = 'calidad'.$descarga->id.'.'.$request->file('file')->getClientOriginalExtension();
			$descarga->file = $rutaNombre;

        }

        if($descarga->save())
            return redirect('adm/calidad/descargas')->with('alert', "Registro actualizado exitósamente" );
        else
            return redirect()->back()->with('errors', "Ocurrió un error al intentar actualizar el registro" );
    }


    public function edit($id){
    	$descarga = Descarga::find($id);

    	return view('adm.calidad.descargas.edit', compact('descarga'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
	{
		$descarga = Descarga::find($id);
		$datos    = $request->all();
        $descarga->fill($datos);

        if($request->file('file')!=null){
            
            $ruta           = 'descargas';
            $path           = Storage::putFileAs($ruta, $request->file('file'),'calidad'.$id.'.'.$request->file('file')->getClientOriginalExtension());
            $rutaNombre     = 'calidad'.$id.'.'.$request->file('file')->getClientOriginalExtension();
            $descarga->file = $rutaNombre;

        }

        if($descarga->save())
            return redirect('adm/calidad/descargas')->with('alert', "Registro actualizado exitósamente" );
        else
            return redirect()->back()->with('errors', "Ocurrió un error al intentar actualizar el registro" );
    }

    public function eliminar($id){
        $descarga = Descarga::find($id);

        if($descarga->delete())
            return redirect()->back()->with('alert', "Registro eliminado exitósamente" );
        else
            return redirect()->back()->with('errors', "Ocurrió un error al intentar eliminar el registro" );
    }


}
