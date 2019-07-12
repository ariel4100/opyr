<?php

namespace App\Http\Controllers;

use App\Download;
use App\DownloadUser;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PrivateZoneController extends Controller
{
    public function index() {
        $idioma    = \App::getLocale();
        $descargas = User::where('id',Auth::user()->id)->with('descargas')->get();
        //$descargas->download;
        $data = json_decode(Auth::user()->seccion);
        //dd($data[0] == 'Informacion general');
        if ($data == null)
        {
            return view('page.privada.index',compact('descargas','idioma'));
        }
        if ($data[0] == 'Informacion general')
        {
            return view('page.privada.general',compact('descargas','idioma'));
        }
        if ($data[0] == 'descargas')
        {
            return view('page.privada.index',compact('descargas','idioma'));
        }
    }

    public function general() {
        $idioma    = \App::getLocale();
        $descargas = User::where('id',Auth::user()->id)->with('descargas')->get();

        $data = json_decode(Auth::user()->seccion);
            //dd($data );
        if ($data == null)
        {
            return view('page.privada.index',compact('descargas','idioma'));
        }
        if (count($data) == 1 && $data[0] == 'Informacion general')
        {
            return view('page.privada.general',compact('descargas','idioma'));
        }
        if (count($data) == 1 && $data[0] == 'descargas')
        {
            return view('page.privada.index',compact('descargas','idioma'));
        }
        if (count($data) == 2)
        {
            return view('page.privada.general',compact('descargas','idioma'));
        }
        //return view('page.privada.general',compact('descargas','idioma'));
    }
}
