<?php

use Illuminate\Foundation\Http\Middleware\VerifyCsrfToken;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\View;
use Illuminate\Http\Request;

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

Route::post('/visit', function (Request $request) {
    $name = $request->input('path', '1');

    if ($name === '1') {
        return response([
            'name' => 'vue-counter',
             'props' => ['message' => 'Hello From Server (Route 1)'],
        ], 200);
    } else if ($name === '2') {
        return response([
            'name' => 'vue-confetti',
            'props' => ['message' => 'Hello From Server (Route 2)'],
        ], 200);
    }
})->withoutMiddleware([VerifyCsrfToken::class]);


