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
    $comics = config('comics');
    // dd($comics); var dump
    return view('home',['comics' => $comics]);
    // alternativa funzione compact , compact('comics')
})-> name('home');

// rotta dinamica 
Route::get('comicPage/{id}', function ($id) {
    $comics = config('comics');

    if($id >= count($comics)){
        abort('404');
    }

    $comicBook = $comics[$id];
    
    
    return view('comicPage', compact('comicBook'));
})->where('id','[0-9]+')->name('comicPage');