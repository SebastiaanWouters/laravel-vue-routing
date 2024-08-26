<?php

use App\Helpers\Boosted;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/1', function (Request $request) {
    return Boosted::render($request, '1', ['title' => '1'], 'vue-counter', ['message' => 'Hello From Server (Route 1)']);
});

Route::get('/', function () {
    return view('index', ["title" => "1"]);
});

Route::get('/2', function (Request $request) {
    return Boosted::render($request, '2', ['title' => '2'], 'vue-confetti', ['message' => 'Hello From Server (Route 2)']);
});


