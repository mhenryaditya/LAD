<?php

use Illuminate\Support\Facades\Route;

Route::get('/LAD/public', function () {
    return view('welcome');
});
