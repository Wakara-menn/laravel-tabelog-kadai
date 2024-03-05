<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\WebController;
use App\Http\Controllers\ReviewController;
use App\Models\MajorCategory;
use App\Http\Controllers\ReserveController;

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

Route::get('/',  [WebController::class, 'index'])->name('top');

Route::resource('products', ProductController::class);
Route::get('/products/index', [ProductController::class, 'index'])->name('products.index');
Route::post('/products/index', [ProductController::class, 'index'])->name('products.index');

Route::controller(UserController::class)->group(function () {
    Route::get('users/mypage', 'mypage')->name('mypage');
    Route::get('users/mypage/edit', 'edit')->name('mypage.edit');
    Route::put('users/mypage', 'update')->name('mypage.update');
    Route::get('users/mypage/password/edit', 'edit_password')->name('mypage.edit_password');
    Route::put('users/mypage/password', 'update_password')->name('mypage.update_password');
    Route::get('users/mypage/favorite', 'favorite')->name('mypage.favorite');
    Route::delete('users/mypage/delete', 'destroy')->name('mypage.destroy');
    Route::get('users/mypage/register_card', 'register_card')->name('mypage.register_card');
    Route::post('users/mypage/token', 'token')->name('mypage.token');
    Route::get('users/mypage/reserve_history', 'reserve_history_index')->name('mypage.reserve_history_index');
	route::delete('users/mypage/reserve_canncel', 'reserve_canncel')->name('reserve_canncel');
    Route::get('users/mypage/delete_card', 'delete_card')->name('delete_card');
});

Route::post('reviews', [ReviewController::class, 'store'])->name('reviews.store');

Route::get('products/{product}/favorite', [ProductController::class, 'favorite'])->name('products.favorite');

// Route::resource('products', ProductController::class)->middleware(['auth', 'verified']);
Auth::routes(['verify' => true]);

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::controller(ReserveController::class)->group(function () {
    Route::get('products/{product}/reserve', 'index')->name('reserves.index');
    Route::post('products/{product}/reserve', 'index')->name('reserves.index');
    Route::get('products/{product}/reserve/show', 'show')->name('reserves.show');
    Route::post('products/{product}/reserve/show', 'show')->name('reserves.show');
    Route::get('products/{product}/reserve/complete', 'complete')->name('reserves.complete');
    Route::post('products/{product}/reserve/complete', 'complete')->name('reserves.complete');
});