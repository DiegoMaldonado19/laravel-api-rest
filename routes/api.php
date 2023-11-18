<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

use  App\Http\Controllers\Api\v1\PostController as PostV1;
use  App\Http\Controllers\Api\v2\PostController as PostV2;

/*
Route::apiResource('v1/posts', App\Http\Controllers\Api\v1\PostController::class)
->only('index','show', 'destroy');
*/

//v1 routes
Route::apiResource('v1/posts', PostV1::class)
->only(['index','show', 'destroy'])
->middleware('auth:sanctum');

//v2 routes
Route::apiResource('v2/posts', PostV2::class)
->only(['index','show'])
->middleware('auth:sanctum');

Route::post('login', [
    App\Http\Controllers\Api\LoginController::class,
    'login'
]);
