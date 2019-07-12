<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Texto extends Model
{
    protected $fillable = [
    	'ubicacion',  'texto1_es', 'texto1_pt' ,  'texto2_es', 'texto2_pt' 
    ];
}
