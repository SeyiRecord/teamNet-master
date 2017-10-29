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

    public function roles() {
        return $this->belongsToMany(Role::class);
    }

     public function isUser()
     {
        return ($this->roles()->count()) ? true : false;
     }

     public function hasRole($role) {
        return $this->roles()->pluck("name")->contains($role);
     }

     private function getIdInArray($array, $term){
        foreach ($array as $key => $value) {
            if ($value == $term){
                return $key;
            }
        }        
        throw new UnexpectedValueException;
     }

     public function makeUser($title) {
        $assignedRoles = array();
        $roles = Role::all()->pluck("name", "id");

        switch ($title){
            case "superAdmin" :
                $assignedRoles[] = $this->getIdInArray($roles, 'create');
            case "admin" :
                $assignedRoles[] = $this->getIdInArray($roles, 'delete');
            case "user" :
                $assignedRoles[] = $this->getIdInArray($roles, 'read');
                $assignedRoles[] = $this->getIdInArray($roles, 'update');
            break;
            default:
                throw new \Exception("The user does not exist");
        }
        $this->roles()->sync($assignedRoles);
     }
}
