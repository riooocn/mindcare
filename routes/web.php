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

Route::get('/psychologist', function () {
    $title = "Psychologist";
    return view('home', ['title' => $title]);
});

Route::get('/mental', function () {
    $title = "Mental";
    return view('home', ['title' => $title]);
});
