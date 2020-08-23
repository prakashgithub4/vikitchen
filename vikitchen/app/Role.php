<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Role extends Model
{
    public function userr(){
        return $this->hasMany('\App\Users');
    }
}
