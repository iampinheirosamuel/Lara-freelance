<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Cog\Contracts\Love\Likeable\Models\Likeable as LikeableContract;
use Cog\Laravel\Love\Likeable\Models\Traits\Likeable;


class Post extends Model implements LikeableContract
{
    use Likeable;
    //
    
    protected $fillable = [
        'profile_id','title', 'body','featured'     
   ];


    public function profile(){
      return  $this->belongsTo('App\Profile');
    }
}
