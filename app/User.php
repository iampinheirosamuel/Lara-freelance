<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Spatie\Permission\Traits\HasRoles;
use Cog\Contracts\Love\Liker\Models\Liker as LikerContract;
use Cog\Laravel\Love\Liker\Models\Traits\Liker;


class User extends Authenticatable implements LikerContract
{
    use Notifiable;
    use HasRoles;
    use Liker;

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
