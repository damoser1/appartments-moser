<?php

use Illuminate\Support\Facades\Route;

Route::view('/', 'mainpage/index')->name('home');

Route::get('/menu', fn () => view('menu'))->name('menu');

Route::view('/appartement/sonnbichl', 'appartments/sonnbichl')->name('appartement.sonnbichl');
Route::view('/appartement/grundnergütl', 'appartments/grundnerguetl')->name('appartement.grundnerguetl');
