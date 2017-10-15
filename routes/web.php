<?php

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
Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});


Route::get('/', function(){
    return view('home');
});

Route::get('/map', function(){
    return view('pages.map');
});


Route::get('/portfolio', function(){
    return view('pages.portfolio');
});


Route::get('/contact', function(){
    return view('pages.contact');
});
// Route::get('blog/{slug}', ['as'=> 'blog.single','uses' =>'BlogController@getSingle'])->where('slug', '[\w\d\-\_]+');

