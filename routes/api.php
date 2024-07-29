<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::post('/login', function () {
    return response()->json(['Login ok']);
});

Route::post('/register', function () {
    return response('OK');
});

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');
