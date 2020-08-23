<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Offer extends Model
{
    public $timestamps = false;
    protected $primaryKey = "offer_id";
    protected $table = 'offer';
}
