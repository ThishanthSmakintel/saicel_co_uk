<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;

// Home Page
Route::get('/', function () {
    return view('index');
})->name('home-page');

// Engineering Services Routes
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

// Procedures and Templates
Route::get('/procedures-and-templates/procedures-and-templates', function () {
    return view('procedures-and-templates.procedures-and-templates');
})->name('procedures-and-templates');

// Property Investments
Route::get('/property-investments/property-investments', function () {
    return view('property-investments.property-investments');
})->name('property-investments');

// Cleaning and Sealing Service Routes
Route::get('/cleaning-and-sealing-service/cleaning-service', function () {
    return view('cleaning-and-sealing-service.cleaning-service');
})->name('cleaning-services');

Route::get('/cleaning-and-sealing-service/sealing-services', function () {
    return view('cleaning-and-sealing-service.sealing-services');
})->name('sealing-services');

// Contact Us
Route::get('/contact-us', function () {
    return view('contact-us.contact-us');
})->name('contact-us');

// Products
Route::get('/products', [ProductController::class, 'showAllProducts'])->name('products');
