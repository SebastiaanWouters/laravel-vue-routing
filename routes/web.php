<?php

use Illuminate\Foundation\Http\Middleware\VerifyCsrfToken;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\View;
use Illuminate\Http\Request;

$title = "ss";

Route::get('/1', function (Request $request) {
    // Check for 'boosted' header
    if ($request->header('boosted')) {
        return response([
            'name' => 'vue-counter',
            'props' => ['message' => 'Hello From Server (Route 1)'],
        ], 200);
    }

    // Original logic if 'boosted' header is not present
    return view('1', ['title' => '1']);
});

Route::get('/', function () {
    return view('index', ["title" => "1"]);
});

Route::get('/2', function (Request $request) {
    // Check for 'boosted' header
    if ($request->header('boosted')) {
        return response([
            'name' => 'vue-confetti',
            'props' => ['message' => 'Hello From Server (Route 2)'],
        ], 200);
    }

    // Original logic if 'boosted' header is not present
    return view('2');
});


