<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;
use App\Http\Controllers\ArticleController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\PostController;



Route::get('/',[PageController::class, 'home']);
Route::get('about-us',[PageController::class, 'about']);
Route::get('blog',[ArticleController::class, 'index']);
Route::get('blog/single-post',[ArticleController::class, 'show']);
Route::get('contact',[ContactController::class, 'contact']);
Route::get('post',[PostController::class, 'post']);

