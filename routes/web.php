<?php

use Illuminate\Support\Facades\Route;

Route::view('/', 'mainpage.index')->name('home');

Route::prefix('')->group(function () {
    Route::view('/sonnbichl', 'appartments/appartment-sonnbichl/sonnbichl')->name('sonnbichl');
    Route::view('/grundnerguetl', 'appartments/appartment-grundnerguetl/grundnerguetl')->name('grundnerguetl');
});


Route::view('/impressum',  'appartments/appartment-sonnbichl/partials/impressum')->name('impressum-sonnbichl');
Route::view('/datenschutz','appartments/appartment-sonnbichl/partials/datenschutz')->name('datenschutz-sonnbichl');
