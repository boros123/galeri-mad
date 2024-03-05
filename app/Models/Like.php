<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Like extends Model
{
    use HasFactory;
    protected $table = 'likes';
    protected $guarded = ['id'];

    public function Pengguna()
    {
        return $this->belongsTo(Pengguna::class);
    }

    public function Post()
    {
        return $this->belongsTo(Post::class);
    }
}
