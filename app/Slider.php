<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Slider extends Model
{
    protected $fillable = [
    	'titulo_es', 'descripcion_es',  'titulo_pt', 'descripcion_pt', 'file_image', 'seccion', 'orden'
    ];
}
