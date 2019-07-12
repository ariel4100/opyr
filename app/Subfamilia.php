<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Subfamilia extends Model
{
    protected $fillable = [
    	'nombre_es', 'nombre_pt', 'orden', 'file_image','is_servicio'
    ];

    public function familia()
    {
    	return $this->belongsTo('App\Familia');
    } 

    public function productos()
    {
    	return $this->hasMany('App\Producto');
    } 
}
