<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\SeccionContactoRequest;
use Mail;
use App\Producto;
use App\Dato;

class SeccionContactoController extends Controller
{
    public function index(){
        $mensaje    = '';
        $telefono_1 = Dato::where('tipo', 'telefono_1')->first();
        $telefono_2 = Dato::where('tipo', 'telefono_2')->first();
        $telefono_3 = Dato::where('tipo', 'telefono_3')->first();
        $email      = Dato::where('tipo', 'email')->first();
        $direccion  = Dato::where('tipo', 'direccion')->first();
        $idioma     = \App::getLocale();

    	return view('page.contacto.index', compact('telefono_1', 'telefono_2', 'telefono_3', 'email', 'direccion', 'idioma', 'mensaje'));
    }

    public function store(SeccionContactoRequest $request)
    {
        $data = array(['nombre'   => $request->get('nombre'),
                                            'apellido' => $request->get('apellido'),
                                            'email'    => $request->get('email'),
                                            'mensaje'  => $request->get('mensaje')]);
        Mail::send('page.contacto.email.contacto', $data[0], function($message){
                $dato = Dato::where('tipo', 'email')->first();
	    		$message->subject('Te han enviado un mensaje desde la web');
                $message->to($dato->descripcion);
	    	}
	    );

    	return redirect()->back()->with('alert', '¡Gracias por contactarnos!');
    }

    public function show($id)
    {
        $producto       =  Producto::find($id);
        $mensaje        = 'Me intera el producto '.$producto->descripcion.'. Por favor contáctenme.';
        $seccion        = 'Contacto';
        $mensaje_previo = '¡Contáctanos!';
        return view('page.contacto.index', compact('mensaje', 'seccion', 'mensaje_previo'));
    }
}
