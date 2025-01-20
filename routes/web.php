<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('index');
});
Route::get('/welcome', function () {
    return view('welcome');
});
Route::get('/form', function () {
    return view('form');
});
Route::get('/master', function () {
    return view('template.master');
});

Route::get('/index', function () {
    return view('index');
});
