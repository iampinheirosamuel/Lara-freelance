<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Profile extends Model
{
    //
    protected $fillable = [
      'user_id', 'about', 'service', 'address', 'state', 'phone', 'image', 'name', 'email'
    ];
    public function user(){
        return $this->belongsTo('App\User');

    }
    
    public function post(){
       return $this->hasMany('App\Post');
    }

}
