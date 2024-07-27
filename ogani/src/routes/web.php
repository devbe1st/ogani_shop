<?php

use App\Http\Controllers\Admin\AdminCategoryController;
use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Admin\AdminEmailController;
use App\Http\Controllers\Admin\AdminImageController;
use App\Http\Controllers\Admin\AdminOrderController;
use App\Http\Controllers\Admin\AdminProductController;
use App\Http\Controllers\Admin\AdminUserController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ShopController;
use App\Http\Controllers\User\CartController;
use App\Http\Controllers\User\CheckoutController;
use App\Http\Controllers\User\FavouriteController;
use App\Http\Controllers\User\ProfileController;
use App\Models\Email;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Route;

/* ---------------------------------- AUTH ---------------------------------- */
Auth::routes(['verify' => true]);
Route::get('password/confirm', 'App\Http\Controllers\Auth\ConfirmPasswordController@showConfirmForm')
    ->middleware('auth')
    ->name('password.confirm');
Route::post('password/confirm', 'App\Http\Controllers\Auth\ConfirmPasswordController@confirm')
    ->middleware('auth');
/* ---------------------------------- AUTH ---------------------------------- */

/* ---------------------------------- HOME ---------------------------------- */
Route::get('/', [HomeController::class, 'index'])->name('home.index');
Route::get('/contact', [HomeController::class, 'contact'])->name('home.contact');
/* ---------------------------------- HOME ---------------------------------- */

/* ---------------------------------- SHOP ---------------------------------- */
Route::get('/shop', [ShopController::class, 'shop'])
    ->name('home.shop');
Route::get('/shop/{id}/details', [ShopController::class, 'shopDetails'])
    ->name('home.shop-details');
/* ---------------------------------- SHOP ---------------------------------- */

/* ---------------------------------- BLOG ---------------------------------- */
Route::get('/blog', [BlogController::class, 'blog'])
    ->name('home.blog');
Route::get('/blog/{id}/details', [BlogController::class, 'blogDetails'])
    ->name('home.blog-details');
/* ---------------------------------- BLOG ---------------------------------- */

/* ---------------------------------- USER ---------------------------------- */
Route::get('/user/profile', [ProfileController::class, 'index'])
    ->name('user.profile')->middleware('auth');
Route::get('/user/favourite', [FavouriteController::class, 'index'])
    ->name('user.favourite');
Route::get('/user/cart', [CartController::class, 'index'])
    ->name('user.cart');
Route::get('/user/checkout', [CheckoutController::class, 'index'])
    ->name('user.checkout')
    ->middleware('auth');
/* ---------------------------------- USER ---------------------------------- */

/* ---------------------------------- ADMIN --------------------------------- */
Route::prefix('admin-panel')->middleware(['auth', 'admin'])
    ->name('admin.')
    ->group(function () {
    // start admin 
    Route::get('/', [AdminController::class, 'index'])
        ->name('index');
    // user
    Route::get('/user', [AdminUserController::class, 'index'])
        ->name('user.index');
    Route::get('/user/{id}/show', [AdminUserController::class, 'show'])
        ->name('user.show');
    Route::get('/user/{id}/update-disable', [AdminUserController::class, 'updateDisable'])
        ->name('user.update-disable');
    Route::get('/user/{id}', [AdminUserController::class, 'destroy'])
        ->name('user.destroy');
    // category
    Route::get('/category', [AdminCategoryController::class, 'index'])
        ->name('category.index');
    Route::get('/category/create', [AdminCategoryController::class, 'create'])
        ->name('category.create');
    Route::post('/category/store', [AdminCategoryController::class, 'store'])
        ->name('category.store');
    Route::get('/category/{id}/edit', [AdminCategoryController::class, 'edit'])
        ->name('category.edit');
    Route::put('/category/{id}/update', [AdminCategoryController::class, 'update'])
        ->name('category.update');
    Route::put('/category/{id}/update-status', [AdminCategoryController::class, 'updateStatus'])
        ->name('category.update-status');
    Route::get('/category/{id}', [AdminCategoryController::class, 'destroy'])
        ->name('category.destroy');
    // product
    Route::get('/product', [AdminProductController::class, 'index'])
        ->name('product.index');
    Route::get('/product/create', [AdminProductController::class, 'create'])
        ->name('product.create');
    Route::post('/product/store', [AdminProductController::class, 'store'])
        ->name('product.store');
    Route::get('/product/{id}/edit', [AdminProductController::class, 'edit'])
        ->name('product.edit');
    Route::put('/product/{id}/update', [AdminProductController::class, 'update'])
        ->name('product.update');
    Route::put('/product/{id}/update-status', [AdminProductController::class, 'updateStatus'])
        ->name('product.update-status');
    Route::get('/product/{id}', [AdminProductController::class, 'destroy'])
        ->name('product.destroy');
    // image product
    Route::get('/product/{id}/image/create', [AdminImageController::class, 'create'])
        ->name('product.image.create');
    Route::post('/product/{id}/image/store', [AdminImageController::class, 'store'])
        ->name('product.image.store');
    Route::delete('/product/{id}/image/destroy', [AdminImageController::class, 'destroy'])
        ->name('product.image.destroy');
    // order
    Route::get('/order', [AdminOrderController::class, 'index'])
        ->name('order.index');
    Route::get('/order/{id}/update-status/{status}', [AdminOrderController::class, 'updateStatus'])
        ->name('order.update-status');
    Route::get('/order/{id}/show', [AdminOrderController::class, 'show'])
        ->name('order.show');
    Route::get('/order/{id}/destroy', [AdminOrderController::class, 'destroy'])
        ->name('order.destroy');
    // email
    Route::get('/email', [AdminEmailController::class, 'index'])
        ->name('email.index');
    Route::get('/email/{id}/show', [AdminEmailController::class, 'show'])
        ->name('email.show');
    Route::get('/email/{id}', [AdminEmailController::class, 'destroy'])
        ->name('email.destroy');
    }); // end amdin
/* ---------------------------------- ADMIN --------------------------------- */



