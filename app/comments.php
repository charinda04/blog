<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class comments extends Model
{
    //
    public function post(){
    	return $this->belongsTo(Blog::class);
    }


    // $comment -> user -> name
    public function user(){
    	return $this->belongsTo(User::class);
    }
}
