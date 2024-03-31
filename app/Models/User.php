<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Illuminate\Support\Facades\Auth;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    protected $fillable = [
        'name',
        'username',
        'email',
        'password',
        'avatar',
        'bio',
    ];

    protected $hidden = [
        'password',
    ];

    protected $casts = [
        'password' => 'hashed',
        'created_at' => 'datetime:Y-m-d, H:i:s',
        'updated_at' => 'datetime:Y-m-d, H:i:s',
    ];

    public function getRouteKeyName()
    {
        return 'username';
    }

    public function posts()
    {
        return $this->hasMany(Post::class)->orderBy('id', 'desc');
    }

    public function followers()
    {
        return $this->hasMany(Follow::class)->where('following_id', Auth::user()->id);
    }
    
    public function followings()
    {
        return $this->hasMany(Follow::class)->where('author_id', Auth::user()->id);
    }
}
