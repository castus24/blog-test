<?php

use App\Http\Controllers\Main\IndexController;
use App\Http\Controllers\Admin\Main;
use App\Http\Controllers\Admin\Post;
use App\Http\Controllers\Admin\Category;
use App\Http\Controllers\Admin\Tag;
use App\Http\Controllers\Admin\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

//Route::group(['namespace' => 'App\Http\Controllers\Main'], function () {
//    Route::get('/', 'IndexController');
//});
Route::namespace('App\Http\Controllers\Main')
    ->group(function () {
        Route::get('/', [IndexController::class, 'index'])->name('main.index');
    });

Route::namespace('App\Http\Controllers\Admin')
    ->prefix('admin')
    ->middleware(['auth', 'admin', 'verified'])
    ->group(function () {
        Route::namespace('Main')
            ->group(function () {
                Route::get('/', [Main\IndexController::class, 'index'])->name('admin.main.index');
            });
        Route::namespace('Post')
            ->prefix('posts')
            ->group(function () {
                Route::get('/', [Post\IndexController::class, 'index'])->name('admin.post.index');
                Route::get('/create', [Post\CreateController::class, 'index'])->name('admin.post.create');
                Route::post('/', [Post\StoreController::class, 'index'])->name('admin.post.store');
                Route::get('/{post}', [Post\ShowController::class, 'index'])->name('admin.post.show');
                Route::get('/{post}/edit', [Post\EditController::class, 'index'])->name('admin.post.edit');
                Route::patch('/{post}', [Post\UpdateController::class, 'index'])->name('admin.post.update');
                Route::delete('/{post}', [Post\DestroyController::class, 'index'])->name('admin.post.destroy');
            });
        Route::namespace('Category')
            ->prefix('categories')
            ->group(function () {
                Route::get('/', [Category\IndexController::class, 'index'])->name('admin.category.index');
                Route::get('/create', [Category\CreateController::class, 'index'])->name('admin.category.create');
                Route::post('/', [Category\StoreController::class, 'index'])->name('admin.category.store');
                Route::get('/{category}', [Category\ShowController::class, 'index'])->name('admin.category.show');
                Route::get('/{category}/edit', [Category\EditController::class, 'index'])->name('admin.category.edit');
                Route::patch('/{category}', [Category\UpdateController::class, 'index'])->name('admin.category.update');
                Route::delete('/{category}', [Category\DestroyController::class, 'index'])->name('admin.category.destroy');
            });
        Route::namespace('Tag')
            ->prefix('tags')
            ->group(function () {
                Route::get('/', [Tag\IndexController::class, 'index'])->name('admin.tag.index');
                Route::get('/create', [Tag\CreateController::class, 'index'])->name('admin.tag.create');
                Route::post('/', [Tag\StoreController::class, 'index'])->name('admin.tag.store');
                Route::get('/{tag}', [Tag\ShowController::class, 'index'])->name('admin.tag.show');
                Route::get('/{tag}/edit', [Tag\EditController::class, 'index'])->name('admin.tag.edit');
                Route::patch('/{tag}', [Tag\UpdateController::class, 'index'])->name('admin.tag.update');
                Route::delete('/{tag}', [Tag\DestroyController::class, 'index'])->name('admin.tag.destroy');
            });
        Route::namespace('User')
            ->prefix('users')
            ->group(function () {
                Route::get('/', [User\IndexController::class, 'index'])->name('admin.user.index');
                Route::get('/create', [User\CreateController::class, 'index'])->name('admin.user.create');
                Route::post('/', [User\StoreController::class, 'index'])->name('admin.user.store');
                Route::get('/{user}', [User\ShowController::class, 'index'])->name('admin.user.show');
                Route::get('/{user}/edit', [User\EditController::class, 'index'])->name('admin.user.edit');
                Route::patch('/{user}', [User\UpdateController::class, 'index'])->name('admin.user.update');
                Route::delete('/{user}', [User\DestroyController::class, 'index'])->name('admin.user.destroy');
            });
    });

Route::namespace('App\Http\Controllers\Personal')
    ->prefix('personal')
    ->middleware(['auth', 'verified'])
    ->group(function () {
        Route::namespace('Main')
            ->group(function () {
                Route::get('/', 'IndexController')->name('personal.main.index');
            });
        Route::namespace('Liked')
            ->prefix('liked')
            ->group(function () {
                Route::get('/', 'IndexController')->name('personal.liked.index');
//                Route::get('/{liked}', 'ShowController')->name('personal.liked.show');
                Route::delete('/{post}', 'DestroyController')->name('personal.liked.destroy');
            });
        Route::namespace('Comment')
            ->prefix('comments')
            ->group(function () {
                Route::get('/', 'IndexController')->name('personal.comment.index');
                Route::get('/{comment}/edit', 'EditController')->name('personal.comment.edit');
                Route::patch('/{comment}', 'UpdateController')->name('personal.comment.update');
                Route::delete('/{comment}', 'DestroyController')->name('personal.comment.destroy');
            });
    });

Auth::routes(['verify' => true]);

