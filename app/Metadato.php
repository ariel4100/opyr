<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Metadato extends Model
{
    protected $fillable = [
    	'seccion_es', 'keyword_es','descripcion_es'  ,'seccion_pt', 'keyword_pt','descripcion_pt' ,'url'
    ];
}
