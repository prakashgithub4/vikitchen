<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ShippingAddress extends Model
{
    public $timestamps = false;
    protected $primaryKey = "shipping_address_id";
    protected $table = 'shipping_address';
}
