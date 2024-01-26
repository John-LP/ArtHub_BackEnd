<?php

use App\Http\Controllers\ArtworkController;
use App\Http\Controllers\CommentController;
use App\Http\Controllers\LikeController;
use App\Http\Controllers\MentionController;
use App\Http\Controllers\UserController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::resource('users', UserController::class);
Route::resource('artworks', ArtworkController::class);
Route::resource('comments', CommentController::class);
Route::resource('likes', LikeController::class);
Route::resource('mentions', MentionController::class);
Route::get('/artworks', [ArtworkController::class, 'index']);

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
