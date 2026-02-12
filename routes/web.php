<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/mi-nombre', function () {
    return 'Carlos Daniel Oliva';
});

Route::get('/´php-basico', function () {
    return 'Carlos Daniel Oliva';
});

