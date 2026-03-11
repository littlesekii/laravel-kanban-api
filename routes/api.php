<?php

use App\Http\Controllers\v1\FieldController;
use App\Http\Controllers\v1\MainController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;


Route::get('/', [MainController::class, 'index']);

Route::get('/fields', [FieldController::class, 'index']);

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');
