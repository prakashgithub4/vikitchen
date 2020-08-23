<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    public $timestamps = false;
    protected $primaryKey = "product_category_id";
    protected $table = 'product_category';
}
