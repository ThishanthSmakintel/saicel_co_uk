<?php

use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('index');
})->name('home-page');;

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



Route::get('/engineering-services/smart-sealing-solutions', function () {
    return view('smart-sealing-solutions');
})->name('smart-sealing-solutions');


Route::get('/engineering-services/driveways', function () {
    return view('driveways');
})->name('driveways');


Route::get('/engineering-services/patios', function () {
    return view('patios');
})->name('patios');


Route::get('/engineering-services/concrete', function () {
    return view('concrete');
})->name('concrete');


Route::get('/engineering-services/cavity-wall-loft-insulation', function () {
    return view('cavity-wall-loft-insulation');
})->name('cavity-wall-loft-insulation');

Route::get('/engineering-services/cctc-security-alarms', function () {
    return view('cctc-security-alarms');
})->name('cctc-security-alarms');


Route::get('/engineering-services/protection-screens-Fitting-services', function () {
    return view('protection-screens-Fitting-services');
})->name('protection-screens-Fitting-services');