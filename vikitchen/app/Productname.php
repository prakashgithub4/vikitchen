<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Productname extends Model
{
     public $timestamps = false;
    protected $primaryKey = "product_name_id";
    protected $table = 'product_name';
}
