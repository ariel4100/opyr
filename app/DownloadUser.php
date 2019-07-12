<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class DownloadUser extends Model
{
    public $table = 'download_user';


    protected $fillable = [
        'user_id','download_id'
    ];
}
