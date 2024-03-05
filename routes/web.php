<?php

use App\Models\Post;
use App\Models\Pengguna;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\LikeController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\AlbumController;
use App\Http\Controllers\ComentController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});
Route::get('/guides', function () {
    return view('guide');
});
Route::get('/about', function () {
    return view('about');
});


Route::get('/login', [AuthController::class, 'masuk']);
Route::get('/register', [AuthController::class, 'daftar']);
Route::post('/regs', [AuthController::class, 'register']);
Route::post('/logs', [AuthController::class, 'login']);
Route::post('/logout', [AuthController::class, 'logout']);

// admin
Route::group(
    ['middleware' => ['auth:user']],
    function () {
        Route::get('/dashboard', function () {
            return view('dashboard.index');
        });

        Route::get('/dashboard/data-user', function () {
            return view('dashboard.data-user', [
                'penggunas' => Pengguna::all()
            ]);
        });

        Route::get('/dashboard/data-foto', function () {
            return view('dashboard.data', [
                'posts' =>  Post::all()
            ]);
        });
    }
);

// admin

// user
Route::group(
    ['middleware' => ['auth:pengguna']],
    function () {
        // view menampilkan data data postingan data album 
        // Route::get('/user', function () {
        //     return view('dash-user.index');
        // });
        Route::get('/user/upload', function () {
            return view('dash-user.ufoto');
        });

        Route::get('/user/allpost', [PostController::class, 'allpost']);
        Route::get('/user', [PostController::class, 'index']);

        Route::get('/user/upost{id}', [PostController::class, 'edit']);
        Route::get('/user/coment{id}', [ComentController::class, 'allkomen']);
        // view menampilkan data data postingan data album 

        // mesin/alat untuk melakukan system kirim postingan/buat album/komen/like

        Route::post('updatepost{post}', [PostController::class, 'update'])->name('post.update');
        Route::get('filterpost', [PostController::class, 'filter'])->name('post.filter');
        Route::post('deletepost{id}', [PostController::class, 'destroy'])->name('post.delete');
        Route::post('/posting', [PostController::class, 'createpost']);
        Route::post('/buatalbum', [AlbumController::class, 'store']);
        Route::post('/like{id}', [LikeController::class, 'like'])->name('like.post');
        Route::post('/post-coment', [ComentController::class, 'komentar']);
        // mesin/alat untuk melakukan system kirim postingan/buat album/komen/like
    }
);
// user
