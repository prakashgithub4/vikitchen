<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Review extends Model
{
    public $timestamps = false;
    protected $primaryKey = "product_star_review_id";
    protected $table = 'product_star_review';
}
