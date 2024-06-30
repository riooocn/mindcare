<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    $title = 'Home';
    return view('home', ['title' => $title]);
});

Route::get('/article', function () {
    $title = "Article";
    return view('home', ['title' => $title]);
});
