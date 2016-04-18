<?php

Route::get('/', function () {
    return view('intro');
});

Route::get('/about', function () {
    return view('about');
});


Route::get('/problematic', function () {
    return view('problems');
});
