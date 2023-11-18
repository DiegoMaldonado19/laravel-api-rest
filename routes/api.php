<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::apiResource('v1/posts', App\Http\Controllers\Api\v1\PostController::class)
->only('index','show', 'destroy');
