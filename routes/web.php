<?php

use Illuminate\Support\Facades\Route;

Route::get('https://149.129.195.54/LAD/public', function () {
    return view('welcome');
});
