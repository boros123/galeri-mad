<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Album extends Model
{
    use HasFactory;
    protected $table = 'albums';
    protected $guarded = ['id'];

    public function Pengguna()
    {
        return $this->belongsTo(Pengguna::class);
    }
    public function Post()
    {
        return $this->hasMany(Post::class);
    }
}
