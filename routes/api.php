<?php

use App\Http\Controllers\Api\AuthController;
use App\Http\Controllers\Api\GameController;
use App\Http\Controllers\Api\TagController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::middleware(['auth:sanctum'])->get('/user', function (Request $request) {
    return $request->user();
});

Route::post('/login', [AuthController::class, 'login']);
Route::post('/register', [AuthController::class, 'register']);

route::middleware('auth:sanctum')->group(function () {
    Route::apiResource('games', GameController::class);
    Route::apiResource('tags', TagController::class);
    Route::post('/games/{game}/tags/{tag}', [GameController::class, 'setTag']);
    Route::post('/logout', [AuthController::class, 'logout']);
});
