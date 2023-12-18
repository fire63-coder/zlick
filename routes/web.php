<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\CustomerController;
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

//Route::get('/', function () {
//    return view('welcome');
//});

// CUSTOMER CONTROLLER
Route::get('/',[CustomerController::class,'home'])->name('customer.home');
Route::get('/about',[CustomerController::class,'about'])->name('customer.about');
Route::get('/faq',[CustomerController::class,'faq'])->name('customer.faq');
Route::get('/contact',[CustomerController::class,'contact'])->name('customer.contact');
Route::get('/login',[CustomerController::class,'login'])->name('customer.login');
Route::get('/register',[CustomerController::class,'registration'])->name('customer.registration');
Route::get('/cart',[CustomerController::class,'cart'])->name('customer.cart');
Route::get('/checkout',[CustomerController::class,'checkout'])->name('customer.checkout');
Route::get('/dashboard',[CustomerController::class,'dashboard'])->name('customer.dashboard');
Route::get('/profile',[CustomerController::class,'profile'])->name('customer.profile');
Route::get('/billing',[CustomerController::class,'billinfo'])->name('customer.bill');
Route::get('/updatepassword',[CustomerController::class,'updatepassword'])->name('customer.updatepassword');
Route::get('/order',[CustomerController::class,'order'])->name('customer.order');
Route::get('/logout',[CustomerController::class,'logout'])->name('customer.logout');
Route::get('/productcategory',[CustomerController::class,'productcategory'])->name('customer.category');
Route::get('/productbycategory',[CustomerController::class,'productbycategory'])->name('customer.pcategory');
Route::get('/productdetails',[CustomerController::class,'show'])->name('customer.productdetails');
Route::get('/searchproduct',[CustomerController::class,'searchproduct'])->name('customer.searchproduct');

//Admin controller
Route::get('/administrator',[AdminController::class,'dashboard'])->name('admin.dashboard');
