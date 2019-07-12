<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Producto;
use App\Familia;
use App\Subfamilia;
use App\Galeria;
use App\Extensions\Helpers;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Storage;

class ProductoController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth:admin');
    }
    
    public function index()
    {
        $productos = Producto::orderBy('familia_id')->orderBy('subfamilia_id')->orderBy('orden')->get();
        return view('adm.productos.index', compact('productos'));
    }

    public function create()
    {
		$familias    = Familia::orderBy('orden')->get();
		$subfamilias = Subfamilia::where('id', '1')->get();
        return view('adm.productos.create', compact('familias', 'subfamilias'));
    }

    public function store(Request $request)
    {
		$datos     = $request->all();
		$producto  = new Producto;
		$file_save = Helpers::saveImage($request->file('file_image'), 'productos');
        $file_save ? $datos['file_image'] = $file_save : false;     

        $file_save = Helpers::saveImage($request->file('file_plano'), 'planos');
        $file_save ? $datos['file_plano'] = $file_save : false;   



             
        $producto->fill($datos);

        $producto->familia_id    = $request->familia_id;
        $producto->subfamilia_id = $request->subfamilia_id;

        $producto->save();

        if($request->file('file_ficha')!=null){
            
            $ruta                 = 'productos';
            $path                 = Storage::putFileAs($ruta, $request->file('file_ficha'),'producto'.$id.'.'.$request->file('file_ficha')->getClientOriginalExtension());
            $rutaNombre           = 'producto'.$id.'.'.$request->file('file_ficha')->getClientOriginalExtension();
            $producto->file_ficha = $rutaNombre;

        }
        if($producto->save())
            return redirect('adm/productos/index')->with('alert', "Registro almacenado exitósamente" );
        else
            return redirect('adm/productos/index')->with('errors', "Ocurrió un error al intentar almacenar el registro" );
    }


    public function edit($id)
    {
		$producto    = Producto::find($id);
		$familias    = Familia::orderBy('orden')->get();
		$subfamilias = Subfamilia::orderBy('orden')->get();
    	return view('adm.productos.edit', compact('familias', 'subfamilias', 'producto'));
    }

    public function update(Request $request, $id)
    {
		$datos     = $request->all();
		$producto  = Producto::find($id);
		$file_save = Helpers::saveImage($request->file('file_image'), 'productos');
        $file_save ? $datos['file_image'] = $file_save : false;       

        $file_save = Helpers::saveImage($request->file('file_plano'), 'planos');
        $file_save ? $datos['file_plano'] = $file_save : false;   


        $producto->fill($datos);

        $producto->familia_id = $request->familia_id;
        $producto->subfamilia_id = $request->subfamilia_id;
        $producto->save();

        if($request->file('file_ficha')!=null){
            
            $ruta                 = 'productos';
            $path                 = Storage::putFileAs($ruta, $request->file('file_ficha'),'producto'.$id.'.'.$request->file('file_ficha')->getClientOriginalExtension());
            $rutaNombre           = 'producto'.$id.'.'.$request->file('file_ficha')->getClientOriginalExtension();
            $producto->file_ficha = $rutaNombre;

        }

        if($producto->save())
            return redirect('adm/productos/index')->with('alert', "Registro actualizado exitósamente" );
        else
            return redirect('adm/productos/index')->with('errors', "Ocurrió un error al intentar actualizar el registro" );
    }

    public function eliminar($id){
        $producto = Producto::find($id);

        if($producto->delete())
            return redirect()->back()->with('alert', "Registro eliminado exitósamente" );
        else
            return redirect()->back()->with('errors', "Ocurrió un error al intentar eliminar el registro" );
    }

    public function subfamilias(){
		$input       = Input::get('option');

		$familias    = Familia::find($input);
		$subfamilias = $familias->subfamilias();
	    return response()->json($subfamilias->get(['id', 'nombre_es']));
    }

    public function galeriaCreate($id)
    {
        $producto = Producto::find($id);
        return view('adm.productos.galeria.create', ['producto' => $producto]);

    }

    public function galeriaStore(Request $request)
    {
        $producto_id = $request->producto_id;
        $datos       = $request->all();
        $status      = 0;

        foreach($request->file('file_image') as $img){
            $file_save = Helpers::saveImage($img, 'galeria_productos');
            $file_save ? $datos['file_image'] = $file_save : false;

            $galeria              = new Galeria;
            $galeria->producto_id = $producto_id;
            $galeria->file_image  = $file_save;
            $galeria->orden       = $request->orden;

            if($galeria->save())
                $status = 1;
            else
                return redirect('adm/productos/index')->with('errors', "Ocurrió un error al intentar almacenar el registro" );
        }

        if($status==1)
            return redirect('adm/productos/index')->with('alert', "Registro almacenado exitósamente" );
        else
            return redirect('adm/productos/index')->with('errors', "Ocurrió un error al intentar almacenar el registro" );
    }

    public function galeriaView($id)
    {
        $producto = Producto::where('id', $id)->with('galerias')->first();
        return view('adm.productos.galeria.show', ['producto' => $producto]);
    }

    public function galeriaEdit($id)
    {
        $galeria = Galeria::find($id);
        $producto = Producto::find($galeria->producto_id);

        return view('adm.productos.galeria.edit', compact('galeria', 'producto'));
    }

    public function galeriaUpdate(Request $request, $id)
    {
        $galeria   = Galeria::find($id);
        
        $datos     = $request->all();
        $file_save = Helpers::saveImage($request->file('file_image'), 'galeria_productos');
        $file_save ? $datos['file_image'] = $file_save : false;  

        $galeria->fill($datos);

        if($galeria->save())
            return  redirect()->back()->with('alert', "Registro actualizado exitósamente" );
        else
            return redirect()->back()->with('errors', "Ocurrió un error al intentar actualizar el registro" );
    }

    public function galeriaDelete($id)
    {
        $galeria  = Galeria::find($id);
        $producto = Producto::find($galeria->producto->id);
        $path     = $galeria->file_image;

        \File::exists(public_path('images/productos_galeria/'.$galeria->file_image));

        if($galeria->delete()){
            \File::delete(public_path('images/productos_galeria/'.$path));
            $galeria = Galeria::where('producto_id', $producto->id)->get();
            return redirect()->back()->with('alert', "Registro eliminado exitósamente" );
        }else{
            return redirect()->back()->with('errors', "Ocurrió un error al intentar eliminar el registro" );
        }
    }

}
