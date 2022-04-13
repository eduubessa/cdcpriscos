<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Video extends Model
{
    //
    protected $table = "Videos";
    protected $fillAble = array('name', 'content');

    public $timestamps = true;
}
