<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Spatie\Permission\Traits\HasRoles;

class User extends Authenticatable
{
    use Notifiable;
    use HasRoles;


    public function setPasswordAttribute($password)
        {   
            $this->attributes['password'] = bcrypt($password);
        }
        
    public function profile(){
        return $this->hasOne('App\Profile');
    }

    public function task(){
        return $this->hasMany('App\Task');
    }

    
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password', 'title', 'user_id'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    // public function posts(){

    //     return $this->hasMany(Post::class);
    // }
}
