<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Download extends Model
{


    protected $fillable = [
        'nombre_es', 'nombre_pt', 'orden', 'file','seccion'
    ];


    public function user()
    {
        //return $this->belongsToMany('App\Producto', 'product_productos_marcas', 'id_marca', 'id_producto');
        return $this->belongsToMany('App\User','download_user','download_id','user_id');
    }
}
