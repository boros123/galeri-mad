<?php

namespace App\Http\Controllers;

use App\Models\Album;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class AlbumController extends Controller
{

    public function store(Request $request)
    {
        // dd($request->all());
        $data = $request->validate([
            'pengguna_id' => 'required',
            'nama_album' => 'required',
            'tgl_album' => 'required',
            'desc_album' => 'required',

        ]);
        Album::create($data);
        return back()->with('successalbum', 'Berhasil membuat album');
    }
}
