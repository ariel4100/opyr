<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Servicio;
use App\Http\Controllers\Controller;
use App\Extensions\Helpers;
use Redirect;

class ServicioController extends Controller
{

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
        $servicios = Servicio::orderBy('orden')->get();

        return view('adm.servicios.index', compact('servicios'));
    }

    public function create()
    {
        return view('adm.servicios.create', compact('marca'));
    }

    public function store(Request $request)
    {
        $servicio    = new Servicio;
        $datos     = $request->all();

        $file_save = Helpers::saveImage($request->file('file_image'), 'servicios');
        $file_save ? $datos['file_image'] = $file_save : false;       
        
        $servicio->fill($datos);

        if($servicio->save())
            return redirect()->back()->with('alert', "Registro almacenado exitósamente" );
        else
            return redirect()->back()->with('errors', "Ocurrió un error al intentar almacenado el registro" );
    }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $servicio =  Servicio::find($id);

        return view('adm.servicios.edit', compact('servicio'));
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
        $servicio      = Servicio::find($id);
        $datos     = $request->all();
        $file_save = Helpers::saveImage($request->file('file_image'), 'servicios');
        $file_save ? $datos['file_image'] = $file_save : false;       
        $servicio->fill($datos);

        if($servicio->save())
            return redirect('adm/servicios/servicio')->with('alert', "Registro actualizado exitósamente" );
        else
            return redirect()->back()->with('errors', "Ocurrió un error al intentar actualizar el registro" );
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function eliminar($id)
    {
        $servicio = Servicio::find($id);

        if($servicio->delete())
            return redirect()->back()->with('alert', "Registro eliminado exitósamente" );
        else
            return redirect()->back()->with('errors', "Ocurrió un error al intentar eliminar el registro" );
    }

}
