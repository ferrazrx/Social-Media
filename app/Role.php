<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Role extends Model
{
    protected $primaryKey = 'code';
    public $incrementing = false;

    //Create relationship Role has many users
    public function users(){
        return $this->belongsToMany('App\User', 'role_user', 'role_code', 'user_id')->using('App\UserRole')->as('user');
    }
}
