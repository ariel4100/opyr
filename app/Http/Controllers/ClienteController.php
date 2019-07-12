<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class ClienteController extends Controller
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
        $clientes = User::all();
        return view('adm.privada.cliente.index',compact('clientes'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('adm.privada.cliente.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'username' => ['required', 'string', 'max:255','unique:users'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:4'],
            'social' => ['required', 'string', 'max:255'],
            'telefono' => ['required']
        ]);

        $user = new User();
        $user->seccion = json_encode($request->seccion);
        $user->name = $request->name;
        $user->username = $request->username;
        $user->email = $request->email;
        $user->password = Hash::make($request->password);
        $user->social = $request->social;
        $user->telefono = $request->telefono;


        if($user->save())
            return redirect()->route('privada.cliente')->with('alert', "Registro almacenado exitósamente" );
        else
            return redirect()->back()->with('errors', "Ocurrió un error al intentar almacenar el registro" );
    }


    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $cliente = User::find($id);
        return view('adm.privada.cliente.edit', compact('cliente'));
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
        //dd($request->all());
        $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'password' => ['required', 'string', 'min:4'],
            'social' => ['required', 'string', 'max:255'],
            'telefono' => ['required']
        ]);
            $user = User::find($id);
            $user->seccion = json_encode($request->seccion);
            $user->name = $request->name;
            $user->username = $request->username;
            $user->email = $request->email;
            if ($request->password){
                $user->password = Hash::make($request->password);
            }else{
                $user->password = $user->password ;
            }
            $user->social = $request->social;
            $user->telefono = $request->telefono;

            if($user->save())
                return redirect()->route('privada.cliente')->with('alert', "Registro actualizados exitósamente" );
            else
                return redirect()->back()->with('errors', "Ocurrió un error al intentar almacenar el registro" );
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function eliminar($id)
    {
        $user = User::find($id);

        if($user->delete())
            return redirect()->back()->with('alert', "Registro eliminado exitósamente" );
        else
            return redirect()->back()->with('errors', "Ocurrió un error al intentar eliminar el registro" );
    }
}
