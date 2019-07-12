<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Calidad extends Model
{
    protected $fillable = [
    	'texto_es', 'texto_pt', 'titulo_es' ,'titulo_pt', 'file_image' 
    ];
}
