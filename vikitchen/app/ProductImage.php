<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ProductImage extends Model
{
    public $timestamps = false;
    protected $primaryKey = "product_image_details_id";
    protected $table = 'product_image_details';
}
