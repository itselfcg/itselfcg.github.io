<?php

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
    return view('work');
});
Route::view('/about', 'about');
Route::view('/work/penguin', 'penguin');
Route::view('/work/the-poetry-club', 'poetry-club');
Route::view('/work/cinematik', 'cinematik');

Route::any('{query}',
    function() { return redirect('/'); })
    ->where('query', '.*');
