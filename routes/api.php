<?php

use App\Http\Controllers\V1\MessageController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:api');

//TODO: Middleware, group versioning, etc
Route::post('v1/slugify', [MessageController::class, 'slugify'])->name('api.v1.message.slugify');
