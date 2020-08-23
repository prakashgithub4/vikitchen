<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ProductDetailsColor extends Model
{
    public $timestamps = false;
    protected $primaryKey = "product_details_colour_id";
    protected $table = 'product_details_colour';
}
