<?php
Route::get('/', function () {
    return view('welcome');
});
Route::auth();
Route::get('/home', 'HomeController@index');
Route::get('add', 'manage@AddArticle');
Route::post('add', 'manage@AddArticle');
