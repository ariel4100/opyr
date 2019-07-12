<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'username', 'email', 'password', 'telefono', 'social','seccion'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];


    public function clientes()
    {
        return $this->hasMany('App\User', 'parent_id');
    }

    public function pedidos()
    {
        return $this->hasMany('App\Pedido');
    }

    public function descargas()
    {
        //return $this->belongsToMany('App\Marca', 'product_productos_marcas', 'id_producto', 'id_marca');
        return $this->belongsToMany('App\Download','download_user','user_id','download_id');
    }
}