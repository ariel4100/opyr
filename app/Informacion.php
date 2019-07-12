<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Informacion extends Model
{
    protected $fillable = [
    	'titulo_es', 'titulo_pt', 'descripcion_es' ,'descripcion_pt' , 'file_image' 
    ];
}
