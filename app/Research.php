<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class Research extends Model
{
    //
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'ownerID','topic', 'summary', 'startDate','endDate','organization', 'location', 'city', 'state', 'country','zipCode', 'researchpaper',
    ];

    
    public function user(){
        return $this->belongsTo(User::class);
    }

    public function participation(){
        return $this->hasMany(Participation::class);
    }

    public function attachment(){
        return $this->hasMany(Attachment::class);
    }

    public function comment(){
        return $this->hasMany(Comment::class);
    }
}
