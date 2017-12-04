<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class Connection extends Model
{
    //
    public function user(){
        return $this->belongsToMany(User::class);
    }

}
