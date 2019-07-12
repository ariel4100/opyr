<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SeccionDistribuidoresController extends Controller
{
    public function index() {
        return view('page.distribuidores.index');
    }
}
