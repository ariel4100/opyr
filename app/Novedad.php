<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Novedad extends Model
{
    protected $fillable = [
        'titulo_es', 'titulo_pt', 'texto_es', 'texto_pt', 'file_image', 'orden'
    ];

    public function categoria()
    {
    	return $this->belongsTo('App\Categoria');
    }   
    
    public function imagenes()
    {
        return $this->hasMany('App\Imagen');
    }
}   

