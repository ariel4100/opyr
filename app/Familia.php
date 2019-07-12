<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Familia extends Model
{    
    protected $fillable = [
    	'nombre_es','nombre_pt', 'orden', 'file_image','control'
    ];

    public function productos()
    {
    	return $this->hasMany('App\Producto');
    }

    public function subfamilias()
    {
    	return $this->hasMany('App\Subfamilia');
    }
}
