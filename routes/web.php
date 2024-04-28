<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('eman',function() {
    return 'welcom to my frist website';
});
