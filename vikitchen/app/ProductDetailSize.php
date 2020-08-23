<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ProductDetailSize extends Model
{
    public $timestamps = false;
    protected $primaryKey = "product_details_size_id";
    protected $table = 'product_details_size';
}
