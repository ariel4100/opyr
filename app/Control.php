<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Control extends Model
{
    public $table = 'control';
    public $timestamps = false;
    protected $fillable = [
        'texto', 'otro', 'orden'
    ];
}
