<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class Orgprofile extends Model
{
    //
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'motto', 'vision', 'details','industry', 'location', 'city', 'state', 'country', 'zipCode', 'webAddress', 'logo',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    
    public function user(){
        return $this->belongsTo(User::class);
    }

    public function attachment(){
        return $this->hasMany(Attachment::class);
    }

    public function Comment(){
        return $this->hasMany(Comment::class);
    }
}