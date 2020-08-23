<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Wishlist extends Model
{   public $timestamps = false;
    protected $primaryKey = "wishlist_id";
    protected $table = 'wishlist';
}
