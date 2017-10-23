<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class Attachment extends Model
{
    //
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name','ownerID','userID', 'orgID','researchID','postID',
    ];

    public function user() {
    	return $this->belongsTo(User::class);
    }

    public function userprofile() {
    	return $this->belongsTo(Userprofile::class);    	
    }

    public function () orgprofile{
    	return $this->belongsTo(Orgprofile::class);    	
    }

    public function () research{
    	return $this->belongsTo(Research::class);    	
    }

    public function () post{
    	return $this->belongsTo(Post::class);    	
    }
}
