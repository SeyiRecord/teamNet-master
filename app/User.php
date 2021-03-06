<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;
use App\Role;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    /*protected $fillable = [
        'name', 'email', 'password',
    ];*/
    
    /*Removed name field*/
    protected $fillable = [
        'userName', 'email', 'password', 'userType',
    ];

    // To Change primary key to userName
    // Must be changed in vendor\laravel\framework\src\Illuminate\Foundation\Auth : function username()
    // Must be changed in vendor\laravel\framework\src\Illuminate\Foundation\Auth\AuthenticatesUser : function username()
    protected $primaryKey = 'userName';
    public $incrementing = false;

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    public function userProfile() {
        return $this->hasOne(Userprofile::class);
    }

    public function orgProfile() {
        return $this->hasOne(Orgprofile::class);
    }

    public function research() {
        return $this->hasMany(Research::class);
    }

    public function participation(){
        return $this->hasMany(Participation::class);
    }

    public function attachment(){
        return $this->hasMany(Attachment::class);
    }

    
    public function myConnections(){
        return $this->belongsToMany(User::class);
    }

    public function connectionsof(){
        return $this->belongsToMany(User::class);
    }

    public function connections(){
        return $this->myConnections()->wherePivot('accepted', true)->get()->merge($this->connectionsof()->wherePivot('accepted', true)->get());
    }
}
