<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\ArticleController;
use App\Http\Controllers\CommentController;
Route::get('/', function () {
    return view('welcome');
});


Route::get('/blog',[BlogController::class,'index'])->name('blog');

Route::get('/search',[BlogController::class,'search'])->name('search');

Route::get('/tag/{tagName}', [BlogController::class, 'getPostsByTag'])->name('tag.posts');

Route::get('/article/{article}',[BlogController::class,'show'])->name('blog.show');

Route::post('/comments',[CommentController::class,'store'])->name('comments.store');
