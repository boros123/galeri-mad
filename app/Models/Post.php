<?php

namespace App\Models;

use App\Models\Like;
use App\Models\Album;
use App\Models\Coment;
use App\Models\Pengguna;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Post extends Model
{
    use HasFactory;
    protected $table = 'posts';
    protected $guarded = ['id'];


    public function Pengguna()
    {
        return $this->belongsTo(Pengguna::class);
    }

    public function Album()
    {
        return $this->belongsTo(Album::class);
    }

    public function Like()
    {
        return $this->hasMany(Like::class);
    }

    public function getlike()
    {
        return $this->Like()->count();
    }

    public function Coment()
    {
        return $this->hasOne(Coment::class);
    }
}
