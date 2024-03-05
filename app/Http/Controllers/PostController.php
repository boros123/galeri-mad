<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\Album;
use App\Models\Coment;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Egulias\EmailValidator\Warning\Comment;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

class PostController extends Controller
{


    public function index()
    {




        $pengguna = Auth::guard('pengguna')->user()->id;
        return view('dash-user.index', [
            'albums' => Album::all()->where('pengguna_id', $pengguna),
            'posts' => Post::where('pengguna_id', $pengguna)->paginate(10),

        ]);
    }

    public function filter(Request $request)
    {
        $pengguna = Auth::guard('pengguna')->user()->id;
        $albums = Album::all()->where('pengguna_id', $pengguna);
        // dd($request->all());
        $request->validate([
            'album_id' => 'required'
        ]);

        $posts = Post::where('album_id', $request->input('album_id'))->paginate(10);
        return view('dash-user.index', ['posts' => $posts, 'albums' => $albums]);
    }

    public function allpost()
    {


        return view('dash-user.foto', [
            'posts' => Post::withCount('Like')->paginate(10)
        ]);
    }

    public function createpost(Request $request)
    {
        // dd($request->all());

        $data = $request->validate([
            'pengguna_id' => 'required',
            'album_id' => 'required',
            'judul' => 'required',
            'tgl_upload' => 'required',
            'desc' => 'required',
            'foto' =>  'image|file|mimes:jpeg,png,jpg|max:20000',

        ]);
        if ($request->file('foto')) {
            $data['foto'] = $request->file('foto')->store('foto-postingan');
        }

        Post::create($data);
        return back()->with('successfoto', 'Berhasil upload foto');
    }


    public function edit($id)
    {
        $pengguna = Auth::guard('pengguna')->user()->id;
        $data = Post::findorfail($id);
        return view('dash-user.ufoto', [
            'albums' => Album::all()->where('pengguna_id', $pengguna),
        ], compact('data'));
    }

    public function update(Request $request, Post $post)
    {
        // dd($request->all());
        $rules = [
            'album_id' => 'required',
            'judul' => 'required',
            'tgl_upload' => 'required',
            'desc' => 'required',
            'foto' =>  'image|file|mimes:jpeg,png,jpg|max:20000',
        ];

        $validatedData = $request->validate($rules);

        if ($request->file('foto')) {
            if ($request->oldimg) {
                Storage::delete($request->oldimg);
            }
            $validatedData['foto'] = $request->file('foto')->store('foto-postingan');
        }

        Post::where('id', $post->id)->update($validatedData);

        if ($validatedData) {
            return redirect('/user')->with(['successupdate' => 'Data Berhasil Diubah!']);
        } else {
            return redirect('/user')->with(['errorupdate' => 'Data Gagal Diubah!']);
        }
    }

    public function destroy($id)
    {
        $post = Post::find($id);
        // ambil dan cari data berdasarkan id
        Storage::delete(['public/foto-postingan', $post->foto]);
        $post->Coment()->delete();

        $post->Like()->delete();

        $post->delete();

        return back()->with('done', 'Berhasil menghapus data');
        // kembalikan
    }
}
