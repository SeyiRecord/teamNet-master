<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class Userprofile extends Model // Y0u should always name the class name with first letter capital for each consequtive words. This should be renamed to UserProfile
{
    //
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'fName', 'lName', 'profileSummary', 'city', 'state', 'country', 'profileImg',
    ];


    protected $table = 'userprofiles';

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    
    public function user(){
        return $this->belongsTo(User::class);
    }
    // $profile->user->userName;
}