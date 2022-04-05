<?php 
require 'vendor/autoload.php';
use App\Services\Route;
Route::get('/typologies', [App\Controllers\TypologyController::class, 'index']);
Route::get('/typologies/{slug}', [App\Controllers\TypologyController::class, 'details']);
Route::get('/articles/{slug}', [App\Controllers\ArticleController::class, 'index']);
