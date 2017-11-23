<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class Userprofile extends Model 
{
    //
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'fName', 'lName', 'profileSummary', 'city', 'state', 'country',
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
    
    public function attachment(){
        return $this->hasMany(Attachment::class);
    }
    
    public function Comment(){
        return $this->hasMany(Comment::class);
    }
}