<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Role extends Model
{
    //Create relationship Role has many users
    public function users(){
        return $this->hasMany('App\User', 'role_code', 'code');
    }
}