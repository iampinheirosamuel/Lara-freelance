<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Cog\Contracts\Love\Likeable\Models\Likeable as LikeableContract;
use Cog\Laravel\Love\Likeable\Models\Traits\Likeable;

use Auth;

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

    public function likes(){
        return $this->hasMany('App\Like');
    }

    public function is_liked_by_auth_user(){
       $id = Auth::id();
       $likers = array();

       foreach($this->likes as $like):
           # code...
           array_push($likers, $like->user_id);
       endforeach;

       if(in_array($id, $likers)){
           return true;
       } else {
           return false;
       }
   }
}
