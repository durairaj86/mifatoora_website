<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('website.welcome', ['page' => 'home']);
});
Route::get('/features', function () {
    return view('website.features', ['page' => 'features']);
});
Route::get('/pricing', function () {
    return view('website.pricing', ['page' => 'pricing']);
});
Route::get('/contact', function () {
    return view('website.contact', ['page' => 'contact']);
});
Route::get('documentation/{module?}', [\App\Http\Controllers\DocumentationController::class, 'index'])->name('documentation');

