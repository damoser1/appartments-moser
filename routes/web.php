<?php

use Illuminate\Support\Facades\Route;

Route::view('/', 'mainpage.index')->name('home');

Route::prefix('')->group(function () {
    Route::view('/sonnbichl', 'appartments/appartment-sonnbichl/sonnbichl')->name('sonnbichl');
    Route::view('/grundnerguetl', 'appartments/appartment-grundnerguetl/grundnerguetl')->name('grundnerguetl');
});

// sonnbichl
Route::view(
    '/appartment-sonnbichl/impressum-sonn',
    'appartments.appartment-sonnbichl.pages.impressum-sonn'
)->name('impressum-sonnbichl');

Route::view(
    '/appartment-sonnbichl/datenschutz-sonn',
    'appartments.appartment-sonnbichl.pages.datenschutz-sonn'
)->name('datenschutz-sonnbichl');

Route::get('/galerie', function () {
    return view('appartments.appartment-sonnbichl.pages.gallerie-sonn');
})->name('galerie-sonnbichl');

Route::get('/kontakt', function () {
    return view('appartments.appartment-sonnbichl.pages.kontakt-sonn');
})->name('kontakt-sonnbichl');

// grundnerguetl

Route::get('/grundnerguetl/impressum-grund', function () {
    return view('appartments.appartment-grundnerguetl.pages.impressum-grund');
})->name('impressum-grundnerguetl');

Route::get('/grundnerguetl/datenschutz-grund', function () {
    return view('appartments.appartment-grundnerguetl.pages.datenschutz-grund');
})->name('datenschutz-grundnerguetl');

Route::get('/grundnerguetl/galerie', function () {
    return view('appartments.appartment-grundnerguetl.pages.gallerie-grund');
})->name('galerie-grundnerguetl');

Route::get('/grundnerguetl/kontakt-grund', function () {
    return view('appartments.appartment-grundnerguetl.pages.kontakt-grund');
})->name('kontakt-grundnerguetl');
