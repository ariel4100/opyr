<?php

namespace App\Http\Controllers;

use App\Control;
use Illuminate\Http\Request;

class ControlController extends Controller
{
    public function index()
    {
        $control = Control::first();
        return view('adm.sliders.index', compact('control'));
    }

    public function update(Request $request, $id)
    {
        $control   = Control::find($id);
        $datos     = $request->all();

        $control->update($datos);
        return back();
    }
}
