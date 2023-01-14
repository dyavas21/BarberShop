<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\BarberController;
use App\Http\Controllers\LogoutController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\CustomerController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\TipeProdukController;
use App\Http\Controllers\DescriptionController;
use App\Http\Controllers\BarberDescriptionController;
use App\Http\Controllers\CustomerDescriptionController;

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

//Home
Route::get('/', [HomeController::class, 'index'])->name('index');
Route::get('/about', [HomeController::class, 'about'])->name('about');
Route::get('/contact', [HomeController::class, 'contact'])->name('contact');
Route::get('/product', [HomeController::class, 'product'])->name('product')->middleware('auth');
Route::get('/product-cart', [HomeController::class, 'productcart'])->name('productcart')->middleware('auth');
Route::post('/product-cart-post', [HomeController::class, 'productcartpost'])->name('productcartpost');
Route::get('/product-cart-total', [HomeController::class, 'productcarttotal'])->name('productcarttotal')->middleware('auth');
Route::post('/product-cart-total-post', [HomeController::class, 'productcarttotalpost'])->name('productcarttotalpost');
Route::get('/barber-detail/{id}', [HomeController::class, 'barberdetail'])->name('barberdetail')->middleware('auth');
Route::get('/barber-book/{id}', [HomeController::class, 'barberbook'])->name('barberbook')->middleware('auth');
Route::post('/barber-bookinsert', [HomeController::class, 'barberbookinsert'])->name('barberbookinsert')->middleware('auth');

//Customer
Route::get('/customer', [CustomerDescriptionController::class, 'customer'])->name('customer')->middleware('auth');
Route::get('/customer-profile-inti', [CustomerDescriptionController::class, 'customerprofileinti'])->name('customerprofileinti')->middleware('auth');
Route::post('/customer-profile-inti-insert', [CustomerDescriptionController::class, 'customerprofileintiinsert'])->name('customerprofileintiinsert')->middleware('auth');
Route::get('/customer-profile-inti-view', [CustomerDescriptionController::class, 'customerprofileintiview'])->name('customerprofileintiview')->middleware('auth');
Route::post('/customer-profile-inti-edit', [CustomerDescriptionController::class, 'customerprofileintiedit'])->name('customerprofileintiedit')->middleware('auth');
Route::get('/customer-product', [CustomerDescriptionController::class, 'customerproduct'])->name('customerproduct')->middleware('auth');

//Barber
Route::get('/barber-profile', [BarberDescriptionController::class, 'barberprofile'])->name('barberprofile')->middleware('auth');
Route::get('/barber', [BarberDescriptionController::class, 'barber'])->name('barber')->middleware('auth');
Route::get('/barber-profile-inti', [BarberDescriptionController::class, 'barberprofileinti'])->name('barberprofileinti')->middleware('auth');
Route::post('/barber-profile-inti-insert', [BarberDescriptionController::class, 'barberprofileintiinsert'])->name('barberprofileintiinsert')->middleware('auth');
Route::get('/barber-profile-inti-view', [BarberDescriptionController::class, 'barberprofileintiview'])->name('barberprofileintiview')->middleware('auth');
Route::post('/barber-profile-inti-edit', [BarberDescriptionController::class, 'barberprofileintiedit'])->name('barberprofileintiedit')->middleware('auth');
Route::get('/barber-change-status-proceed/{id}', [BarberDescriptionController::class, 'barberchangestatusproceed'])->name('barberchangestatusproceed')->middleware('auth');
Route::get('/barber-change-status-pending/{id}', [BarberDescriptionController::class, 'barberchangestatuspending'])->name('barberchangestatuspending')->middleware('auth');
Route::get('/barber-change-status-reject/{id}', [BarberDescriptionController::class, 'barberchangestatusreject'])->name('barberchangestatusreject')->middleware('auth');

//Admin
Route::get('/admin-login', [AdminController::class, 'adminlogin'])->name('adminlogin');
Route::post('/admin-login-proses', [AdminController::class, 'adminloginproses'])->name('adminloginproses');
Route::get('/adminajadeh', [AdminController::class, 'admin'])->name('admin')->middleware('auth');
Route::get('/adminajadeh/detele/{id}', [AdminController::class, 'admindelete'])->name('admindelete')->middleware('auth');
Route::get('/adminajadeh-produkterjual', [AdminController::class, 'produkterjual'])->name('produkterjual')->middleware('auth');
Route::get('/adminajadeh-produk-status-accepted/{id}', [AdminController::class, 'adminstatusproceed'])->name('adminstatusproceed')->middleware('auth');
Route::get('/adminajadeh-produk-status-pending/{id}', [AdminController::class, 'adminstatuspending'])->name('adminstatuspending')->middleware('auth');
Route::get('/adminajadeh-produk-status-reject/{id}', [AdminController::class, 'adminstatusreject'])->name('adminstatusreject')->middleware('auth');

//Admin Tipe Produk
Route::get('/adminajadeh-tipeproduk', [TipeProdukController::class, 'admintipeproduk'])->name('admintipeproduk')->middleware('auth');
Route::get('/adminajadeh-tambahtipe', [TipeProdukController::class, 'admintambahtipe'])->name('admintambahtipe')->middleware('auth');
Route::post('/adminajadeh-inserttipeproduk', [TipeProdukController::class, 'admininserttipeproduk'])->name('admininserttipeproduk');
Route::get('/adminajadeh/detele-tipe/{id}', [TipeProdukController::class, 'admindeletetipe'])->name('admindeletetipe')->middleware('auth');

//Admin Produk
Route::get('/adminajadeh-produk', [ProductController::class, 'adminproduk'])->name('adminproduk')->middleware('auth');
Route::get('/adminajadeh-tambahproduk', [ProductController::class, 'admintambahproduk'])->name('admintambahproduk')->middleware('auth');
Route::post('/adminajadeh-insertproduk', [ProductController::class, 'admininsertproduk'])->name('admininsertproduk');
Route::get('/adminajadeh/detele-produk/{id}', [ProductController::class, 'admindeleteproduk'])->name('admindeleteproduk')->middleware('auth');

//login
Route::get('/login', [LoginController::class, 'login'])->name('login');
Route::post('/loginproses', [LoginController::class, 'loginproses'])->name('loginproses');
Route::get('/logout', [LogoutController::class, 'logout'])->name('logout');
Route::get('/register', [RegisterController::class, 'register'])->name('register');
Route::post('/registeruser', [RegisterController::class, 'registeruser'])->name('registeruser');