<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    //Create the relationship user belong to one role
    public function role(){
        return $this->belongsTo('App\Role', 'role_code', 'code');
    }
    public function isAdministrator(){

    }
    public function isThemeManager(){
        
    }
    public function isModerator(){
        
    }
    public function isUser(){
        
    }
}
