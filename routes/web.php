<?php

use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('index');
});

Route::get('/engineering-services', function () {
    return view('engineering');
})->name('engineering-services');


Route::get('/engineering-services/chemical', function () {
    return view('chemical-engineering');
})->name('chemical-engineering');



Route::get('/engineering-services/management-planning', function () {
    return view('management-planning');
})->name('management-planning');



Route::get('/engineering-services/skilled-labour-supply', function () {
    return view('skilled-labour-supply');
})->name('skilled-labour-supply');



Route::get('/engineering-services/setting-out-levelling', function () {
    return view('setting-out-levelling');
})->name('setting-out-levelling');
