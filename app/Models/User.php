<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'username',
        'email',
        'password',
        'avatar_url',
        'bio',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
        'password' => 'hashed',
    ];

     public function artworks()
     {
         return $this->hasMany(Artwork::class);
     }
 
     public function comments()
     {
         return $this->hasMany(Comment::class);
     }
 
     public function likes()
     {
         return $this->hasMany(Like::class);
     }
 
     public function mentionsSource()
     {
         return $this->hasMany(Mention::class, 'user_id_source');
     }
 
     public function mentionsTarget()
     {
         return $this->hasMany(Mention::class, 'user_id_target');
     }
}
