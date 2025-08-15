<?php

use Illuminate\Support\Facades\Route;

//php artisan route:list  ##### to see the route list

Route::get('/', function () {
    return view('index', [
        'name' => 'Haque'
    ]);
});

Route::get('/xxx', function () {
    return 'Hello';
})-> name('hello');

Route::get('/hallo', function () {
    return redirect()->route('hello');
});

Route::get('/greet/{name}', function ($name){
    return 'Hello '. $name . '!';
});

Route::fallback(function () {
    return 'Still got somewhere!';
});