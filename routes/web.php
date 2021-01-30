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

Route::get('/', function () {
    return view('main', [
        'reasons' => DB::table('reasons')->paginate(3)
    ]);
})->name('main');

Route::get('razoes', function () {
    return view('razoes', [
        'reasons' => DB::table('reasons')->paginate(3)
    ]);
})->name('razoes');
