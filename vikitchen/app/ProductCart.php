<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ProductCart extends Model
{

    public $timestamps = false;
    protected $primaryKey = "product_cart_id";
    protected $table = 'product_cart';
}
