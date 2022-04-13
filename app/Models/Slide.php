<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Slide extends Model
{
    //
    protected $table = "slider";
    protected $fillAble = array('name', 'content');

    public $timestamps = true;
}
