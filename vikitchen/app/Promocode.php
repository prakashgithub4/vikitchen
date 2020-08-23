<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Promocode extends Model
{
    public $timestamps = false;
    protected $primaryKey = "promocode_id";
    protected $table = 'promocode';
}
