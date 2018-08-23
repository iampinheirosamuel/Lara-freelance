<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    //
    
    protected $fillable = [
        'profile_id','title', 'body','featured'     
   ];


    public function profile(){
      return  $this->belongsTo('App\Profile');
    }
}
