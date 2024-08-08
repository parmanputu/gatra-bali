<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/info', function () {
    return view('info.index');
});

Route::get('/pengusada', function () {
    return view('pengusada.index');
});

Route::get('/bertanya', function () {
    return view('bertanya.index');
});

Route::get('/login', function () {
    return view('login.index');
});
