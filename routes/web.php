<?php

use Illuminate\Support\Facades\Route;

Route::view('/', 'mainpage/index')->name('home');

Route::get('/menu', fn () => view('menu'))->name('menu');

Route::get('/appartment/sonnbichl', function () {
    return view('appartments/appartment-sonnbichl/sonnbichl');})->name('sonnbichl');

Route::get('/appartment/grundnerguetl', function () {
    return view('appartments/appartment-grundnerguetl/grundnerguetl');})->name('grundnerguetl');

Route::view('/impressum', 'appartments/appartment-sonnbichl/impressum')->name('impressum-sonnbichl');

Route::view('/datenschutz', 'appartments/appartment-sonnbichl/datenschutz')->name('datenschutz-sonnbichl');
