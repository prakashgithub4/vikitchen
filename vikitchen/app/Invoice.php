<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Invoice extends Model
{
    public $timestamps = false;
    protected $primaryKey = "invoice_no_id";
    protected $table = 'invoice_no';
}
