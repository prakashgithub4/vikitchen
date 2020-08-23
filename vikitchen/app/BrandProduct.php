<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class BrandProduct extends Model
{
    public $timestamps = false;
    protected $primaryKey = "brand_product_name_id";
    protected $table = 'brand_prouct_name_id';
}
