<?php

use Illuminate\Support\Facades\Route;

Route::view('/', 'mainpage.index')->name('home');

Route::prefix('')->group(function () {
    Route::view('/sonnbichl', 'appartments/appartment-sonnbichl/sonnbichl')->name('sonnbichl');
    Route::view('/grundnerguetl', 'appartments/appartment-grundnerguetl/grundnerguetl')->name('grundnerguetl');
});

// sonnbichl
Route::view(
    '/sonnbichl/impressum',
    'appartments.appartment-sonnbichl.pages.impressum-sonn'
)->name('impressum-sonnbichl');

Route::view(
    '/sonnbichl/datenschutz',
    'appartments.appartment-sonnbichl.pages.datenschutz-sonn'
)->name('datenschutz-sonnbichl');

Route::get('/sonnbichl/gallerie', function () {
    return view('appartments.appartment-sonnbichl.pages.gallerie-sonn');
})->name('gallerie-sonnbichl');

Route::get('/sonnbichl/kontakt', function () {
    return view('appartments.appartment-sonnbichl.pages.kontakt-sonn');
})->name('kontakt-sonnbichl');

// grundnerguetl
Route::get('/grundnerguetl/impressum', function () {
    return view('appartments.appartment-grundnerguetl.pages.impressum-grund');
})->name('impressum-grundnerguetl');

Route::get('/grundnerguetl/datenschutz', function () {
    return view('appartments.appartment-grundnerguetl.pages.datenschutz-grund');
})->name('datenschutz-grundnerguetl');

Route::get('/grundnerguetl/galerie', function () {
    return view('appartments.appartment-grundnerguetl.pages.gallerie-grund');
})->name('gallerie-grundnerguetl');

Route::get('/grundnerguetl/kontakt', function () {
    return view('appartments.appartment-grundnerguetl.pages.kontakt-grund');
})->name('kontakt-grundnerguetl');
