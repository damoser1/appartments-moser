<?php

use Illuminate\Support\Facades\Route;

Route::view('/', 'mainpage/index')->name('home');

Route::get('/menu', fn () => view('menu'))->name('menu');


