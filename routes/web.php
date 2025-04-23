<?php

use Illuminate\Support\Facades\Route;

Route::get('/{username}',[\App\Http\Controllers\HomeController::class,'index']);
Route::post('/store-message',[\App\Http\Controllers\HomeController::class,'storeMessage'])->name('store-message');

// Handle not found routes
Route::fallback(function () {
    return view('not-found');
});
