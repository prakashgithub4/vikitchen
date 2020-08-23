<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class About extends Model
{    public $timestamps = false;
    protected $primaryKey = "about_us_id";
    protected $table = 'about_us';
}
