<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Empresa extends Model
{
    protected $fillable = [
    	'file_image', 'mision_es', 'slogan_es', 'descripcion_es', 'mision_pt', 'slogan_pt', 'descripcion_pt',
    ];
}
