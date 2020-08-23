<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ReturnProduct extends Model
{
    public $timestamps = false;
    protected $primaryKey = "return_product_id";
    protected $table = 'return_product';
}
