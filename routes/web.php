<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return "alo alo";
});

Route::get('/welcom', function () {
    return "welcom";
});


Route::get('/hello', function () {
    return "hello";
});
