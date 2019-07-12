<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Dato;

class DatoController extends Controller
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
     * 
     *
     * @return \Illuminate\Http\Response
     */
    public function contacto()
    {
        $telefono_fax = Dato::where('tipo', 'telefono_2')->first();
        $telefono_3 = Dato::where('tipo', 'telefono_3')->first();
        $email        = Dato::where('tipo', 'email')->first();
        $email1        = Dato::where('tipo', 'email1')->first();
        $telefono     = Dato::where('tipo', 'telefono_1')->first();
        $whatsapp     = Dato::where('tipo', 'whatsapp')->first();
        $dir     = Dato::where('tipo', 'direccion')->first();
        $dir1     = Dato::where('tipo', 'direccion1')->first();
        return view('adm.datos.contacto.index', compact('email1','dir1','dir','whatsapp', 'email',  'telefono',  'telefono_fax','telefono_3'));
    }

    /**
     * 
     *
     * @return \Illuminate\Http\Response
     */
    public function editContacto($id)
    {
        $datos = Dato::find($id);
        return view('adm.datos.contacto.edit', compact('datos'));
    }


    /**
     * 
     *
     * @return \Illuminate\Http\Response
     */
    public function redes()
    {
        $ig = Dato::where('tipo', 'instagram')->first();
        $fb = Dato::where('tipo', 'facebook')->first();
        return view('adm.datos.redes.index', compact('ig', 'fb'));
    }

    /**
     * 
     *
     * @return \Illuminate\Http\Response
     */
    public function editRedes($id)
    {
        $datos = Dato::find($id);
        return view('adm.datos.redes.edit', compact('datos'));
    }


    public function update(Request $request, $id){
        $datos = Dato::find($id);
        $datos->fill($request->all());

        if($request->action=='contacto')
            $path = 'adm/datos/contacto';
        elseif($request->action=='redes')
            $path = 'adm/datos/redes';

        if($datos->save())
            return redirect($path)->with('alert', "Registro actualizado exitósamente" );
        else
            return redirect()->back()->with('errors', "Ocurrió un error al intentar actualizar el registro" );
    }
}
