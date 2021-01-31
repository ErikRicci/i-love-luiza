<?php

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Route;

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

Route::get('404', function () {
    abort(404);
})->name('404');

Route::get('/', function () {
    return view('main', [
        'posts' => DB::table('posts')->paginate(5)
    ]);
})->name('main');

Route::get('post/{id}', function ($id) {

    $post = DB::table('posts')->find($id);
    $post->category = DB::table('categories')->find($post->category_id)->name;
    unset($post->category_id);

    return view('post', [
        'post' => $post
    ]);
})->name('post/{id}');

Route::get('razoes', function () {
    return view('razoes', [
        'reasons' => DB::table('reasons')->paginate(3)
    ]);
})->name('razoes');

Route::get('quatromeses', function () {
    return view('jogos.quatromeses');
})->name('quatromeses');

Route::get('foto-aleatoria', function () {
    return view('photo', [
        'photo' => DB::table('photos')->inRandomOrder()->first()
    ]);
})->name('foto-aleatoria');
