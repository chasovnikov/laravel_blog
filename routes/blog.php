<?php

use App\Http\Controllers\Blog\ArticleController;
use App\Http\Controllers\Blog\CommentController;
use App\Http\Controllers\Blog\ContactController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return redirect('adminIndex');
})->middleware(['auth'])->name('dashboard');

require __DIR__ . '/auth.php';

Route::get('contact', [ContactController::class, 'show'])->name('contact');

Route::redirect('/', '/blog');

Route::group(['namespace' => 'App\Http\Controllers\Blog', 'prefix' => 'blog'], function () {
    Route::controller(ArticleController::class)->group(function () {
        Route::get('/', 'index')->name('home');
        Route::get('article.{id}', 'show')->name('articleShow');
        Route::get('category.{id}', 'showByRubric')->name('showByRubric');
        Route::get('tag.{id}', 'showByTag')->name('showByTag');
        Route::get('search', 'search')->name('search');
    });

    Route::controller(CommentController::class)->group(function () {
        Route::post('comment.create', 'store')->name('commentStore');
        Route::post('comment.update', 'update')->name('commentUpdate');
        Route::delete('delete.{comment}', 'delete')->name('commentDelete');
        // Route::get('comment.status.{comment}', 'statusChange')->name('commentStatusChange');
        // Route::get('ajax/ validation', 'ajaxValidation')->name('ajax_validation');
        // Route::post('ajax/validation/store', 'ajaxValidationStore')->name('ajax_validation_store');
    });
});

// Route::controller(SiteController::class)->group(function () {
//     Route::get('/', 'index')->name('home');
//     Route::get('article.{id}', 'show')->name('articleShow');
//     Route::get('category.{id}', 'showByCategory')->name('showByCategory');
//     Route::get('tag.{id}', 'showByTag')->name('showByTag');
//     Route::get('serach', 'search')->name('search');
// });


Route::fallback(function () {
    return view('errors.404');
});