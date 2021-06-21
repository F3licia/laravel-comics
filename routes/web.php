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
/*home spostata su currentSeries */


Route::get('/', function () {
    $comics = config("comics");
 
    $datiView = [
        "comicsList" => $comics
    ];
     return view("currentSeries", $datiView);
})->name('serie in corso');

    Route::get('/info/{id}', function ($id) {
        $comics = config("comics");
        $selected = $comics[$id];

        return view("info", ["comic" => $selected]);
    })->name('info');


Route::get('/characters', function () {
    return view('characters');
})->name('characters');

Route::get('/comics', function () {
    return "";
})->name('comics');

Route::get('/movies', function () {
    return "";
})->name('movies');

Route::get('/tv', function () {
    return "";
})->name('tv');

Route::get('/games', function () {
    return "";
})->name('games');

Route::get('/collectibles', function () {
    return "";
})->name('collectibles');

Route::get('/video', function () {
    return "";
})->name('video');

Route::get('/fans', function () {
    return "";
})->name('fans');

Route::get('/news', function () {
    return "";
})->name('news');

Route::get('/shop', function () {
    return "";
})->name('shop');


