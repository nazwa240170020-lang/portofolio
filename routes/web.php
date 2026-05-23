<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
});

Route::get('/rawat-inap', function () {
    return view('rawat-inap');
});

Route::get('/sia', function () {
    return view('sia');
});

Route::get('/netbeans', function () {
    return view('netbeans');
});