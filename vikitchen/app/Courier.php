<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Courier extends Model
{
    public $timestamps = false;
    protected $primaryKey = "courier_services_id";
    protected $table = 'courier_services';
}
