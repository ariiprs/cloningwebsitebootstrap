<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

//INDEX.BLADE.PHP

Route::get('/', function () {
    return view('index');
});
