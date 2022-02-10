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

    $comics_array = config('comics');

    $data = [
        'comics_array' => $comics_array
    ];

    return view('home', $data);

})->name('home');


// Route::get('/single-comic', function () {

//     return view('single-comic-page');

// })->name('comic-details');


Route::get('/comic/{id}', function($id) {

    $comics_array = config('comics');
    $comic_required = [];

    foreach($comics_array as $comic) {
        if($comic['id'] == $id) {
            $comic_required = $comic;
        }
    }

    if(!$comic_required) {
        abort('404');
    }

    $comic_artists = '';

    foreach($comic_required['artists'] as $artist) {

        if($loop->last) {
            $comic_artists .= $artist ;
        } else {
            $comic_artists .= $artist . ", " ;
        }
        
    }


    $data = [
        'single_comic_details' => $comic_required,
        'artists_list' => $comic_artists
    ];

    return view('single-comic-page', $data);

})->name('single-comic');
