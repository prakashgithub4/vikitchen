<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ProductSize extends Model
{
    public $timestamps = false;
    protected $primaryKey = "product_size_id";
    protected $table = 'product_size';
}
