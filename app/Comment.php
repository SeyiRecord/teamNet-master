<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    //
    public function Post(){
        return $this->belongsTo(Post::class);
    }

    public function Research(){
        return $this->belongsTo(Research::class);
    }

    public function Userprofile(){
        return $this->belongsTo(Userprofile::class);
    }

    public function Orgprofile(){
        return $this->belongsTo(Orgprofile::class);
    }
}
