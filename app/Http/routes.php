<?php

Route::get('/', function () {
    return view('home');
});

Route::get('/about', function () {
    return view('about');
});

Route::get('/model', function () {
    return view('model');
});

Route::get('/soproblematic', function () {
    return view('problems');
});
