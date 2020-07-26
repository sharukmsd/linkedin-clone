<?php

namespace App;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use phpDocumentor\Reflection\Types\Boolean;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function feed()
    {

        $ids = $this->follows()->pluck('id');
        $ids->push($this->id);

        return Post::whereIn('user_id', $ids)->latest()->get();
    }

    public function follows()
    {
        return $this->belongsToMany(User::class, 'follows', 'user_id', 'following_user_id');
    }

    public function post()
    {
        return $this->hasMany(Post::class);
    }

    public function follow(User $user)
    {
        return $this->follows()->save($user);
    }

    public function isFollowing($user){
        $ids = $this->follows()->pluck('id');
        $isFriend = false;

        foreach ($ids as $id){
            if($user->id == $id || $this->id == $user->id){
                $isFriend = true;
            }
        }

        return $isFriend;
    }
}
