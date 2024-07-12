<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    $titolozzo = "Benvenuto in Laravel!";
    return view('home', compact("titolozzo"));
});

Route::get('/aboutUs', function () {
    return view('aboutUs');
});

Route::get('/help', function () {
    return view('help');
});
