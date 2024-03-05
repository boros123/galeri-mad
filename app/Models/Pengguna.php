<?php

namespace App\Models;

use App\Models\Like;
use App\Models\Post;
use App\Models\Album;
use App\Models\Coment;
use Laravel\Sanctum\HasApiTokens;
use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;

class Pengguna extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $table = "penggunas";
    protected $guarded = ['id'];


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
    ];

    public function Post()
    {
        return $this->hasMany(Post::class);
    }
    public function Album()
    {
        return $this->hasMany(Album::class);
    }

    public function Like()
    {
        return $this->hasOne(Like::class);
    }
    public function Coment()
    {
        return $this->hasOne(Coment::class);
    }
}
