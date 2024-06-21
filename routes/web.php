<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use App\Http\Controllers\CommitController;

Route::get('/', function () {
    return view('welcome');
});


Route::get('post', [PostController::class, 'index'])->name('post.index');
Route::get('commit', [CommitController::class, 'index'])->name('commit.index');