<?php

namespace App\Http\Controllers;

use App\Models\Like;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class LikeController extends Controller
{
    public function like(Request $request)
    {
        $pengguna = Auth::guard('pengguna')->user()->id;
        $post = $request->input('post_id');
        $validated = Like::where('pengguna_id', $pengguna)->where('post_id', $post)->first();

        if ($validated) {
            $validated->delete();
            return back()->with('status', 'Post disliked.');
            // return back();
        }
        // dd($request->all());
        $data = $request->validate([
            'pengguna_id' => 'required',
            'post_id' => 'required'
        ]);

        Like::create($data);
        return back()->with('status', 'Post Like.');
    }
}
