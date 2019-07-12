<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Calidad;

use App\Extensions\Helpers;
use Redirect;

class CalidadController extends Controller
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


    
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $calidad = Calidad::first();
        return view('adm.calidad.informacion.index', compact('calidad'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $calidad = Calidad::find($id);
        return view('adm.calidad.informacion.edit', compact('calidad'));
    }
    public function show($id)
    {
        $calidad   = Calidad::find($id);
        $calidad->file_image = null;

        if($calidad->save())
            return redirect('adm/calidad/index')->with('alert', "Imagen Eliminada exitósamente" );
        else
            return redirect()->back()->with('errors', "Ocurrió un error al intentar actualizar el registro" );
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

        $calidad   = Calidad::find($id);
        $datos     = $request->all();
        $file_save = Helpers::saveImage($request->file('file_image'), 'calidad');
        $file_save ? $datos['file_image'] = $file_save : false;      
        $calidad->fill($datos);

        if($calidad->save())
            return redirect('adm/calidad/index')->with('alert', "Registro actualizado exitósamente" );
        else
            return redirect()->back()->with('errors', "Ocurrió un error al intentar actualizar el registro" );
    }

}
