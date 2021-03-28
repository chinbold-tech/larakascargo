<?php

use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CustomerController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\PostController;
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
    return view('index');
});


Route::get('/index', function () {
    return view('index');
});

Route::get('/readpost/{postId}', [ IndexController::class, "show_post" ]);

Route::group([ "middleware" => ['auth:sanctum', 'verified'] ], function() {
    Route::view('/dashboard', "dashboard")->name('dashboard');

    Route::get('/user', [ UserController::class, "index_view" ])->name('user');
    Route::view('/user/new', "pages.user.user-new")->name('user.new');
    Route::view('/user/edit/{userId}', "pages.user.user-edit")->name('user.edit');

    Route::get('/customer', [ CustomerController::class, "index_view" ])->name('customer');
    Route::view('/customer/new', "pages.customer.customer-new")->name('customer.new');
    Route::view('/customer/edit/{customerId}', "pages.customer.customer-edit")->name('customer.edit');

    Route::get('/order', [ OrderController::class, "index_view" ])->name('order');
    Route::view('/order/new', "pages.order.order-new")->name('order.new');
    Route::view('/order/edit/{orderId}', "pages.order.order-edit")->name('order.edit');

    Route::get('/post', [ PostController::class, "index_view" ])->name('post');
    Route::view('/post/new', "pages.post.post-new")->name('post.new');
    Route::view('/post/edit/{postId}', "pages.post.post-edit")->name('post.edit');
});
