<?php

namespace App\Http\Controllers;

use App\Descarga;
use App\DownloadUser;
use App\User;
use App\Download;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class PrivadaController extends Controller
{
	public function __construct() {
		$this->middleware('auth:admin');
	}

    public function index() {
	    $descargas = Download::all();
        return view('adm.privada.index',compact('descargas') );
    }

    public function create() {
        $clientes = User::all();
        return view('adm.privada.create',compact('clientes'));
    }

    public function store(Request $request) {
	    //dd(json_encode($request->seccion));
        $d =  new Download();
        $d->nombre_pt = $request->nombre_pt;
        $d->nombre_es = $request->nombre_es;
        if($request->file('file')){

            $ruta           = 'descargas';
            $path           = Storage::putFileAs($ruta, $request->file('file'), $request->file('file')->getClientOriginalName());
            $rutaNombre     =  $request->file('file')->getClientOriginalName();
            $d->file = $rutaNombre;

        }else{
            $d->file = $request->file;
        }
        $d->orden = $request->orden;
        $d->seccion = json_encode($request->seccion);
        $d->save();
        $descarga = Download::all();
        $ultimoId = $descarga->last()->id;
        if($request->get('cliente'))
        {
            foreach($request->get('cliente') as $c){
                $downloadUser = new DownloadUser();
                $downloadUser->user_id = $c;
                $downloadUser->download_id = $ultimoId;
                $downloadUser->save();
            }
        }

        return redirect()->route('privada.adm')->with('alert','Registro creado exitosamente');
    }
    
    public function edit($id) {
        $descarga = Download::find($id);
        $userSelected = $descarga->user()->get()->pluck('id')->toArray();
        $clientes = User::all();
        return view('adm.privada.edit', [
            'descarga' => $descarga,
            'clientes' => $clientes,
            'userSelected' => $userSelected,
        ]);
    }


    public function update(Request $request,$id) {
	    //dd($request->all());
        $d = Download::find($id);

        $d->nombre_pt = $request->nombre_pt;
        $d->nombre_es = $request->nombre_es;
        if($request->file('file')){
            $ruta           = 'descargas';
            $path           = Storage::putFileAs($ruta, $request->file('file'), $request->file('file')->getClientOriginalName());
            $rutaNombre     = $request->file('file')->getClientOriginalName();
            //dd($rutaNombre);
            $d->file = $rutaNombre;

        }else{
            $d->file = $d->file;
        }
        $d->orden = $request->orden;
        $d->seccion = json_encode($request->seccion);
        $d->save();

        if($request->get('cliente'))
        {
            DownloadUser::where('download_id',$id)->delete();
            foreach($request->get('cliente') as $c){
                $downloadUser = new DownloadUser();
                $downloadUser->user_id = $c;
                $downloadUser->download_id = $id;
                $downloadUser->save();
            }
        }

        return redirect()->route('privada.adm')->with('alert','Registro actualizado exitósamente');
    }

    public function eliminar($id) {
        $descarga = Download::find($id);

        if($descarga->delete())
            return redirect()->back()->with('alert', "Registro eliminado exitósamente" );
        else
            return redirect()->back()->with('errors', "Ocurrió un error al intentar eliminar el registro" );
    }
}
