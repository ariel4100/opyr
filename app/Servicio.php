<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Servicio extends Model
{
    protected $fillable = [
    	'descripcion_es', 'descripcion_pt', 'file_image', 'orden','titulo_es','titulo_pt'
    ];
}
