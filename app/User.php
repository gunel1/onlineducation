<?php

namespace App;

use Illuminate\Notifications\Notifiable;
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
        'name', 'email', 'surname','password','contact','role_id'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];


    public function role(){
        return $this->belongsTo('App\Role');
    }
    public function isTeacher(){
        if($this->role->name=='teacher'){
            return true;
        }
        return false;
    }
    public function isAdmin(){
        if($this->role->name=='admin'){
            return true;
        }
        return false;
    }
    public function isParent(){
        if($this->role->name=='parent'){
            return true;
        }
        return false;
    }
    public function isPupil(){
        if($this->role->name=='parent'){
            return true;
        }
        return false;
    }

}
