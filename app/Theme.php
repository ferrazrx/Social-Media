<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\SoftDeletes;
use App\User;

class Theme extends Model
{
    use SoftDeletes;
    use Notifiable;


        /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'url', 'description', 'is_default', 'last_modified_by', 'created_by', 'deleted_by'
    ];

    public function getCreator(){
        $creator = User::findOrFail($this->created_by);
        return $creator;
    }
    public function getLastModifier(){
        $creator = User::findOrFail($this->last_modified_by);
        return $creator;
    }

}