<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Artisan;

Route::get('/', function () {
    return view('index');
})->name('home-page');;

Route::get('/engineering-services', function () {
    return view('engineering-services.engineering');
})->name('engineering-services');


Route::get('/engineering-services/chemical', function () {
    return view('engineering-services.chemical-engineering');
})->name('chemical-engineering');



Route::get('/engineering-services/management-planning', function () {
    return view('engineering-services.management-planning');
})->name('management-planning');



Route::get('/engineering-services/skilled-labour-supply', function () {
    return view('engineering-services.skilled-labour-supply');
})->name('skilled-labour-supply');



Route::get('/engineering-services/setting-out-levelling', function () {
    return view('engineering-services.setting-out-levelling');
})->name('setting-out-levelling');



Route::get('/engineering-services/smart-sealing-solutions', function () {
    return view('engineering-services.smart-sealing-solutions');
})->name('smart-sealing-solutions');


Route::get('/engineering-services/driveways', function () {
    return view('engineering-services.driveways');
})->name('driveways');


Route::get('/engineering-services/patios', function () {
    return view('engineering-services.patios');
})->name('patios');


Route::get('/engineering-services/concrete', function () {
    return view('engineering-services.concrete');
})->name('concrete');


Route::get('/engineering-services/cavity-wall-loft-insulation', function () {
    return view('engineering-services.cavity-wall-loft-insulation');
})->name('cavity-wall-loft-insulation');

Route::get('/engineering-services/cctc-security-alarms', function () {
    return view('engineering-services.cctc-security-alarms');
})->name('cctc-security-alarms');


Route::get('/engineering-services/protection-screens-Fitting-services', function () {
    return view('engineering-services.protection-screens-Fitting-services');
})->name('protection-screens-Fitting-services');



Route::get('/procedures-and-templates/procedures-and-templates', function () {
    return view('procedures-and-templates.procedures-and-templates');
})->name('procedures-and-templates');



Route::get('/property-investments/property-investments', function () {
    return view('property-investments.property-investments');
})->name('property-investments');


Route::get('/cleaning-and-sealing-service/cleaning-service', function () {
    return view('/cleaning-and-sealing-service.cleaning-service');
})->name('cleaning-service');


// Route::get('/cleaning-and-sealing-service/sealing-services', function () {
//     return view('/cleaning-and-sealing-service.sealing-services');
// })->name('sealing-services');

Route::get('/contact-us', function () {
    return view('contact-us.contact-us');
})->name('contact-us');




Route::get('/clear-cache', function () {
    Artisan::call('cache:clear');
    Artisan::call('route:clear');
    Artisan::call('view:clear');

    $redirectionTime = 2;
    header("refresh:{$redirectionTime};url=/");
    return "<div style='background-color: #dff0d8; color: #3c763d; padding: 10px; border: 1px solid #d6e9c6;'>Cache cleared successfully. You will be redirected to the home page in {$redirectionTime} seconds.</div>";
});