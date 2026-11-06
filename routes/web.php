<?php

use Illuminate\Support\Facades\Route;

// Ruta para la página principal
Route::get('/', function () {
    return view('frontend.pages.home');
})->name('home');

// Ruta para la página de cultura (URL y nombre únicos)
Route::get('/nuestra-cultura', function () {
    return view('frontend.pages.nuestra-cultura');
})->name('nuestra-cultura');


Route::get('/que-visitar', function () {
    return view('frontend.pages.que-visitar');
})->name('que-visitar');