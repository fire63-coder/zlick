<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\CustomerController;
use App\Http\Controllers\ProductController;
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
Route::get('/admin',[AdminController::class,'dashboard'])->name('admin.dashboard');
Route::get('/admin/settings',[AdminController::class,'settings'])->name('admin.settings');
Route::get('/admin/shop/size', [AdminController::class,'size'])->name('admin.size');
Route::get('/admin/shop/add-size', [AdminController::class,'add_size'])->name('admin.add_size');
Route::get('/admin/shop/edit-size', [AdminController::class,'edit_size'])->name('admin.edit_size');

Route::get('/admin/shop/color', [AdminController::class,'color'])->name('admin.color');
Route::get('/admin/shop/add-color', [AdminController::class,'add_color'])->name('admin.addcolor');
Route::get('/admin/shop/edit-color', [AdminController::class,'edit_color'])->name('admin.editcolor');

Route::get('/admin/shop/country', [AdminController::class,'country'])->name('admin.country');
Route::get('/admin/shop/add-country', [AdminController::class,'add_country'])->name('admin.add_country');
Route::get('/admin/shop/edit-country', [AdminController::class,'edit_country'])->name('admin.edit_country');

Route::get('/admin/shop/shipping', [AdminController::class,'shipping'])->name('admin.shipping');

Route::get('/admin/shop/toplevel', [CategoryController::class, 'top_level'])->name('admin.toplevel');
Route::get('/admin/shop/midlevel', [CategoryController::class,'midlevel'])->name('admin.midlevel');
Route::get('/admin/shop/endlevel', [CategoryController::class,'endlevel'])->name('admin.endlevel');
Route::get('/admin/shop/add-toplevel', [CategoryController::class, 'add_top_level'])->name('admin.add_toplevel');
Route::get('/admin/shop/add-midlevel', [CategoryController::class,'add_midlevel'])->name('admin.add_midlevel');
Route::get('/admin/shop/add-endlevel', [CategoryController::class,'add_endlevel'])->name('admin.add_endlevel');
Route::get('/admin/shop/edit-toplevel', [CategoryController::class, 'edit_top_level'])->name('admin.edit_toplevel');
Route::get('/admin/shop/edit-midlevel', [CategoryController::class,'edit_midlevel'])->name('admin.edit_midlevel');
Route::get('/admin/shop/edit-endlevel', [CategoryController::class,'edit_endlevel'])->name('admin.edit_endlevel');

Route::get('/admin/ordermanagement', [AdminController::class,'ordermanagement'])->name('admin.order');
Route::get('/admin/editprofile', [AdminController::class,'edit_profile'])->name('admin.edit_profile');

Route::get('/admin/slider', [AdminController::class,'slider'])->name('admin.slider');
Route::get('/admin/add-slider', [AdminController::class,'add_slider'])->name('admin.add_slider');
Route::get('/admin/edit-slider', [AdminController::class,'edit_slider'])->name('admin.edit_slider');

Route::get('/admin/service', [AdminController::class,'service'])->name('admin.service');
Route::get('/admin/add-service', [AdminController::class,'add_service'])->name('admin.add_service');

Route::get('/admin/faq', [AdminController::class,'faq'])->name('admin.faq');
Route::get('/admin/add-faq', [AdminController::class,'add_faq'])->name('admin.add_faq');
Route::get('/admin/edit-faq', [AdminController::class,'edit'])->name('admin.edit_faq');

Route::get('/admin/customer', [AdminController::class,'customer'])->name('admin.customer');
Route::get('/admin/page', [AdminController::class,'page'])->name('admin.page');
Route::get('/admin/social', [AdminController::class,'social'])->name('admin.social');
Route::get('/admin/subscriber', [AdminController::class,'subscriber'])->name('admin.subscriber');

Route::get('/admin/product', [ProductController::class,'index'])->name('admin.product');
Route::get('/admin/create-product', [ProductController::class,'create'])->name('admin.add_product');
Route::get('/admin/edit-product', [ProductController::class,'edit'])->name('admin.edit_product');
