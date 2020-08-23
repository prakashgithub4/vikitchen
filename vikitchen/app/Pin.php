<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pin extends Model
{
    public $timestamps = false;
    protected $primaryKey = "id";
    protected $table = 'pincode';
}
