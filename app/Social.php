<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Social extends Model
{
    public $table = 'social';
    
    public $timestamps = false;
    
    protected $fillable = [
        'twitter', 'instagram', 'facebook', 'orden',
    ];
}
