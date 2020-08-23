<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ProductDetails extends Model
{
    public $timestamps = false;
    protected $primaryKey = "product_id";
    protected $table = 'product';   //
}
