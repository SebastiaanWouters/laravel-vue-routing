<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\View;

$title = "ss";

Route::get('/1', function () {
    return view('1', ['title' => '1']);
});

Route::get('/', function () {
    return view('index', ["title" => "1"]);
});

Route::get('/2', function () {
    return view('2');
});


