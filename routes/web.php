<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\Backend\AdminController;
use App\Http\Controllers\Frontend\HomeController;
use App\Http\Controllers\Backend\FoodContoller;

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
//Admin
// Route::get('/', [AdminController::class, 'master'])->name('master');
Route::get('/adminhome', [AdminController::class, 'home'])->name('home');
Route::get('/dashboard', [AdminController::class, 'dashboard'])->name('dashboard');
Route::get('/adminprofile', [AdminController::class, 'admin_profile'])->name('admin_profile');
Route::get('/customerlist', [AdminController::class, 'customerlist'])->name('customerlist');
Route::get('/invoice/{id}', [AdminController::class, 'invoice'])->name('invoice');
Route::get('/customer_invoice/{id}', [HomeController::class, 'customer_invoice'])->name('customer_invoice');
Route::get('/orderlist', [AdminController::class, 'orderlist'])->name('orderlist');
Route::get('/suborderlist', [AdminController::class, 'suborderlist'])->name('suborderlist');
Route::get('/delete_order/{id}', [AdminController::class, 'delete_order'])->name('delete_order');



Route::get('/profitcalculation/{id}', [AdminController::class, 'profit_calculation'])->name('profit_calculation');
Route::post('/add_profitcalculation', [AdminController::class, 'add_profitcalculation'])->name('add_profitcalculation');
Route::get('/category', [AdminController::class, 'category'])->name('category');
Route::post('/create/category', [AdminController::class, 'postcategory'])->name('postcategory');




Route::get('/master', [HomeController::class, 'master'])->name('masters');
Route::get('/', [HomeController::class, 'index'])->name('index');
Route::get('/foodmenu', [HomeController::class, 'foodmenu'])->name('foodmenu');
// Route::get('/search', [HomeController::class, 'search_categorywise'])->name('search_categorywise');

Route::get('/orderform', [HomeController::class, 'orderform'])->name('orderform');




//Customer login & registration
Route::get('/userregistration', [HomeController::class, 'user_registration'])->name('user_registration');
Route::post('/reg/post', [HomeController::class, 'registration'])->name('registration');
Route::get('/userlogin', [HomeController::class, 'user_login'])->name('user_login');
Route::post('/login/post', [HomeController::class, 'login'])->name('login');
Route::get('/logout', [HomeController::class, 'logout'])->name('logout');

Route::get('/userdashboard', [HomeController::class, 'user_dashboard'])->name('user_dashboard');
Route::put('/editdashboard/{id}', [HomeController::class, 'edit_dashboard'])->name('edit_dashboard');
Route::get('/updateuser/{id}', [HomeController::class, 'update_user'])->name('update_user');
Route::get('/cancel_order/{id}', [HomeController::class, 'cancel_order'])->name('cancel_order');
// Route::get('/cancel_order/{id}', [HomeController::class, 'cancel_order'])->name('cancel_order');
// Route::get('/userorderlist', [HomeController::class, 'user_orderlist'])->name('user_orderlist');



//Waste Fooditems
Route::get('/wastedfooditems', [AdminController::class, 'wasted_fooditems'])->name('wasted_fooditems');

Route::get('/addwastedfooditems', [AdminController::class, 'add_wastedfooditems'])->name('add_wastedfooditems');
Route::post('/create/wastedfooditems', [AdminController::class, 'store_wastedfoods'])->name('store_wastedfoods');
Route::get('/editwastedfooditems/{id}', [AdminController::class, 'edit_wastedfooditems'])->name('edit_wastedfooditems');
Route::put('/updatewastedfoods', [AdminController::class, 'update_wastedfooditems'])->name('update_wastedfooditems');
Route::get('/deletewastedfoods/{id}', [AdminController::class, 'delete_wastedfooditems'])->name('delete_wastedfooditems');









//fooditems
//Route::get('/foodlist/{food_id}', [AdminController::class, 'foodlist'])->name('foodlist');
Route::get('/foodlist', [AdminController::class, 'foodlist'])->name('foodlist');
Route::get('/editfoodlist/{food_id}', [AdminController::class, 'edit_foodlist'])->name('edit_foodlist');
Route::post('/storefoodlist', [AdminController::class, 'store_foodlist'])->name('store_foodlist');
Route::put('/updatefoodlist', [AdminController::class, 'update_foodlist'])->name('update_foodlist');
Route::get('/deletefoodlist/{food_id}', [AdminController::class, 'delete_foodlist'])->name('delete_foodlist');

//cart
Route::get('/cart', [HomeController::class, 'cart'])->name('cart');
Route::get('/addtocart/{id}', [HomeController::class, 'addtocart'])->name('addtocart');
Route::post('/cart/order', [HomeController::class, 'order'])->name('cart_order');
Route::get('/deletecartitem/{id}', [HomeController::class, 'delete_cartitem'])->name('delete_cartitem');
Route::get('/platteritems/{id}', [HomeController::class, 'platteritems'])->name('platteritems');
Route::get('/restorecart/{id}', [HomeController::class, 'restorecart'])->name('restorecart');
Route::post('/cartincrement', [HomeController::class, 'cart_increment'])->name('cart_increment');
Route::post('/updatequantity', [HomeController::class, 'updatequantity'])->name('updatequantity');












// Route::resource('/food', FoodContoller::class);

// Route::get('/userdashboard', [HomeController::class, 'user_dashboard'])->name('user_dashboard');
// Route::put('/editeuser/{id}', [HomeController::class, 'edit_dashboard'])->name('edit_dashboard');
// Route::get('/updateuser/{id}', [HomeController::class, 'update_user'])->name('update_user');