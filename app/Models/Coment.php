<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Coment extends Model
{
    use HasFactory;
    protected $table = 'komens';
    protected $guarded = ['id'];

    public function Post()
    {
        return $this->belongsTo(Post::class);
    }
    public function Pengguna()
    {
        return $this->belongsTo(Pengguna::class);
    }
}
