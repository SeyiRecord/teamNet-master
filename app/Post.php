<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class Post extends Model
{
    //fillable fields
    protected $fillable = ['ownerID', 'title', 'content'];
    
    //custom timestamps name
    const CREATED_AT = 'created';
    const UPDATED_AT = 'modified';

    public function comment(){
        return $this->hasMany(Comment::class);
    }
}
