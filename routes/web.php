<?php

use Illuminate\Support\Facades\Route;
use Oxedition\LaravelWelcomeMinimal\Http\Controllers\PageController;

Route::get('/about', [PageController::class, 'show']);
Route::get('/faqs', [PageController::class, 'show']);
Route::get('/support', [PageController::class, 'show']);
Route::get('/terms', [PageController::class, 'show']);
Route::get('/privacy', [PageController::class, 'show']);