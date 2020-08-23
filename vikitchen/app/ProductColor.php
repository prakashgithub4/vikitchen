<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ProductColor extends Model
{
    public $timestamps = false;
    protected $primaryKey = "product_colour_id";
    protected $table = 'product_colour';
}
