<?php

Route::get('/', function () {
    return view('welcome');
});

Route::resource('tags', 'TagController');
Route::resource('posts', 'PostController');
