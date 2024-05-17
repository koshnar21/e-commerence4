<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\Auth\AuthenticatedSessionController;
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


route::get('/',[HomeController::class,'index']);


// Route::middleware([
//     'auth:sanctum', config('jetstream.auth_session'),'verified'
// ])->group(function () {
//     Route::get('/dashboard', function () {
//         return view('dashboard');
//     })->name('dashboard');
// });
Route::middleware(['auth:sanctum','verified'])->get('/dashboard', function () {
            return view('dashboard');
        })->name('dashboard');

route::get('/redirect',[HomeController::class,'redirect']);

route::get('/view_category',[AdminController::class,'view_category']);
route::post('/add_category',[AdminController::class,'add_category']);
route::get('/delete_category/{id}', [AdminController::class, 'delete_category']);

route::get('/view_product',[AdminController::class,'view_product']);
route::post('/add_product',[AdminController::class,'add_product']);
route::get('/show_product',[AdminController::class,'show_product']);

//bo chon bo page update
route::get('/update_product/{id}',[AdminController::class,'update_product']);
//updatey productkat waragret
route::post('/update_product_confirm/{id}',[AdminController::class,'update_product_confirm']);

route::get('/order',[AdminController::class,'order']);
route::get('/delivered/{id}',[AdminController::class,'delivered']);
route::get('/search',[AdminController::class,'searchdata']);
route::get('/product_search',[homeController::class,'product_search']);



route::get('/delete_product/{id}',[AdminController::class,'delete_product']);
route::get('/product_details/{id}',[HomeController::class,'product_details']);

route::get('/add_cart/{id}',[HomeController::class,'add_cart']);
route::get('/show_cart',[HomeController::class,'show_cart']);
Route::delete('/remove_cart/{id}', [HomeController::class, 'remove_cart'])->name('remove_cart');

// route::get('/checkout',[HomeController::class,'checkout']);
 Route::get('/checkout/{totalPrice}', [HomeController::class,'checkout']);
 Route::get('/place-order', [HomeController::class, 'placeOrder'])->name('place_order');

// Route::post('cash_order/{totalPrice}', [HomeController::class,'cash_orderPost'])->name('cash_order.post');

route::get('/stripe/{totalPrice}',[HomeController::class,'stripe']);
Route::post('stripe/{totalPrice}', [HomeController::class,'stripePost'])->name('stripe.post');


route::get('/contact',[HomeController::class,'contact']);
route::get('/wishlist',[HomeController::class,'wishlist']);
Route::get('/logout', [AuthenticatedSessionController::class, 'destroy'])
    ->name('logout');

    route::get('/show_product',[AdminController::class,'show_product']);