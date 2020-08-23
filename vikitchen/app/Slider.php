<?php

namespace App;

use Illuminate\Database\Eloquent\Model;


class Slider extends Model
{
    public $timestamps = false;
    protected $primaryKey = "slider_id";
    protected $table = 'slider';

}

