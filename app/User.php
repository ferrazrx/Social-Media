<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Support\Facades\Auth;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Database\Eloquent\SoftDeletes;

class User extends Authenticatable
{
    use Notifiable;
    use SoftDeletes;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password', 'role_code', 'deleted_by', 'created_by', 'last_modified_by'
    ];

    //Soft delete User models
    protected $dates = ['deleted_at'];

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
        return Auth::user()->role->code === 'ADM';
    }
    public function isThemeManager(){
        return Auth::user()->role->code === 'THM';
    }
    public function isModerator(){
        return Auth::user()->role->code === 'MOD';
    }
    public function isUser(){
        return Auth::user()->role->code ==='USR';
    }
    public function wasCreatedBy(){
        return $this->belongsTo('App\User', 'created_by', 'id');
    }
    public function users_created(){
        return $this->hasMany('App\User', 'created_by', 'id');
    }
    public function wasUpdatedBy(){
        return $this->belongsTo('App\User', 'last_modified_by', 'id');
    }
    public function users_updated(){
        return $this->hasMany('App\User', 'last_modified_by', 'id');
    }
}
