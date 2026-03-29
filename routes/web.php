
<?php

use App\Http\Controllers\ArticleController;
use App\Http\Controllers\PageController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('about', [PageController::class, 'about'])
    ->name('about');

Route::get('articles', [ArticleController::class, 'index'])
    ->name('articles.index');

Route::get('articles/create', [ArticleController::class, 'create'])
    ->name('articles.create');

Route::get('articles/{id}', [ArticleController::class, 'show'])
    ->name('articles.show');

Route::post('articles', [ArticleController::class, 'store'])
    ->name('articles.store');
