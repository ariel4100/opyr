<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Producto extends Model
{
    protected $fillable = [
    	'nombre_es', 'nombre_pt', 'orden', 'file_image', 'descripcion_es', 'descripcion_pt',   'aplicaciones_es', 'aplicaciones_pt',  'ciclos_es', 'ciclos_pt', 'file_ficha', 'file_plano', 'video'
    ];

    public function familia()
    {
    	return $this->belongsTo('App\Familia');
    }   

    public function subfamilia()
    {
    	return $this->belongsTo('App\Subfamilia');
    }   
    
    public function galerias()
    {
        return $this->hasMany('App\Galeria');
    }

}
