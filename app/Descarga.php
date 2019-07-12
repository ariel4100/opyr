<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Descarga extends Model
{
    protected $fillable = [
    	'nombre_es', 'nombre_pt', 'orden', 'file' 
    ];
}
