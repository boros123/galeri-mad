<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\Coment;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ComentController extends Controller
{
    public function komentar(Request $request)
    {
        // dd($request->all());
        $data = $request->validate([
            'pengguna_id' => 'required',
            'post_id' => 'required',
            'komentar' => 'required'
        ]);

        Coment::create($data);
        return back();
    }

    public function allkomen($id)
    {
        // $post = Post::where('id')->get();
        $post = Post::find($id);
        $komen = Coment::all();


        return view('dash-user.komen', ['post' => $post, 'komen' => $komen, 'id' => $id]);
    }
}
