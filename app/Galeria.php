<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Galeria extends Model
{
    protected $fillable = [
        'orden', 'file_image', 'producto_id'
    ];


    public function producto()
    {
        return $this->belongsTo('App\Producto');
    }
}
