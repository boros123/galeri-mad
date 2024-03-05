<?php

namespace App\Http\Controllers;

use App\Models\Pengguna;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    public function masuk()
    {
        return view('login');
    }

    public function daftar()
    {
        return view('register');
    }



    public function login(Request $request)
    {
        $credentials = $request->validate([
            'username' => ['required'],
            'password' => ['required'],
        ]);

        if (Auth::guard('user')->attempt($credentials)) {
            $request->session()->regenerate();
            return redirect()->intended('/dashboard');
        } elseif (Auth::guard('pengguna')->attempt($credentials)) {
            $request->session()->regenerate();
            return redirect()->intended('/user');
        } else {
            return back()->with('loginerror', 'Gagal Masuk Mungkin Password Atau Username Anda Salah');
        }
    }

    public function register(Request $request)
    {
        // dd($request->all());
        $data = $request->validate([
            'nama' => 'required',
            'username' => 'required|unique:penggunas',
            'no_telp' => 'min:12|required',
            'alamat' => 'required',
            'password' => 'min:8|required',
            'remember_token' => Str::random(10),
        ]);
        $data['password'] = Hash::make($data['password']);
        if (Pengguna::create($data)) {
            return redirect('login')->with('succesreg', 'Daftar Berhasil');
        } else {
            return back()->with('error', 'Data belum lengkap');
        }
    }

    public function logout(Request $request)
    {
        if (Auth::guard('user')->check()) {
            Auth::guard('user')->logout();

            $request->session()->invalidate();
            $request->session()->regenerateToken();

            return redirect('login')->with('succeslog', 'Keluar Berhasil');
        } elseif (Auth::guard('pengguna')->check()) {
            Auth::guard('pengguna')->logout();

            $request->session()->invalidate();
            $request->session()->regenerateToken();

            return redirect('login')->with('succeslog', 'Keluar Berhasil');
        }
    }
}
