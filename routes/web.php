<?php

use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('index');
});

Route::get('/engineering-services', function () {
    return view('engineering');
})->name('engineering-services');