<?php

use App\Http\Controllers\UrlShortenerController;
use Illuminate\Support\Facades\Route;

Route::get('/', [UrlShortenerController::class, 'index']);
Route::post('/shorten', [UrlShortenerController::class, 'shorten'])->name('shorten');
Route::get('/{short_code}', [UrlShortenerController::class, 'redirect'])->name('redirect');
