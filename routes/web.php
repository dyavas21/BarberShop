<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\BarberController;
use App\Http\Controllers\LogoutController;
use App\Http\Controllers\ProdukController;
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

// Route::get('/', function () {
//     return view('index');
// });



//Customer
Route::get('/customer-profile', [CustomerDescriptionController::class, 'customerprofile'])->name('customerprofile')->middleware('auth');


Route::get('/customer', [CustomerDescriptionController::class, 'customer'])->name('customer')->middleware('auth');
Route::get('/customer-profile-inti', [CustomerDescriptionController::class, 'customerprofileinti'])->name('customerprofileinti')->middleware('auth');
Route::post('/customer-profile-inti-insert', [CustomerDescriptionController::class, 'customerprofileintiinsert'])->name('customerprofileintiinsert')->middleware('auth');
Route::get('/customer-profile-inti-view', [CustomerDescriptionController::class, 'customerprofileintiview'])->name('customerprofileintiview')->middleware('auth');
Route::post('/customer-profile-inti-edit', [CustomerDescriptionController::class, 'customerprofileintiedit'])->name('customerprofileintiedit')->middleware('auth');

//Barber
Route::get('/barber-profile', [BarberController::class, 'barberprofile'])->name('barberprofile')->middleware('auth');
Route::get('/barber-profile-detail', [BarberController::class, 'barberprofiledetail'])->name('barberprofiledetail')->middleware('auth');


Route::get('/barber', [BarberDescriptionController::class, 'barber'])->name('barber')->middleware('auth');
Route::get('/barber-profile-inti', [BarberDescriptionController::class, 'barberprofileinti'])->name('barberprofileinti')->middleware('auth');
Route::post('/barber-profile-inti-insert', [BarberDescriptionController::class, 'barberprofileintiinsert'])->name('barberprofileintiinsert')->middleware('auth');
Route::get('/barber-profile-inti-view', [BarberDescriptionController::class, 'barberprofileintiview'])->name('barberprofileintiview')->middleware('auth');
Route::post('/barber-profile-inti-edit', [BarberDescriptionController::class, 'barberprofileintiedit'])->name('barberprofileintiedit')->middleware('auth');

//Admin
Route::get('/admin', [AdminController::class, 'admin'])->name('admin');
Route::get('/admin/detele/{id}', [AdminController::class, 'admindelete'])->name('admindelete');


// Tipe Produk
Route::get('/admin-tipeproduk', [TipeProdukController::class, 'admintipeproduk'])->name('admintipeproduk');
Route::get('/admin-tambahtipe', [TipeProdukController::class, 'admintambahtipe'])->name('admintambahtipe');
Route::post('/admin-inserttipeproduk', [TipeProdukController::class, 'admininserttipeproduk'])->name('admininserttipeproduk');
Route::get('/admin/detele-tipe/{id}', [TipeProdukController::class, 'admindeletetipe'])->name('admindeletetipe');

// Produk
Route::get('/admin-produk', [ProdukController::class, 'adminproduk'])->name('adminproduk');
Route::get('/admin-tambahproduk', [ProdukController::class, 'admintambahproduk'])->name('admintambahproduk');
Route::post('/admin-insertproduk', [ProdukController::class, 'admininsertproduk'])->name('admininsertproduk');
Route::get('/admin/detele-produk/{id}', [ProdukController::class, 'admindeleteproduk'])->name('admindeleteproduk');






// Route::post('/barber-profile-detail-update', [BarberController::class, 'barberprofiledetailupdate'])->name('barberprofiledetailupdate')->middleware('auth');
// Route::get('/barber-profile-detail-foto', [BarberController::class, 'barberprofiledetailfoto'])->name('barberprofiledetailfoto')->middleware('auth');
// Route::post('/barber-profile-detail-foto-update', [BarberController::class, 'barberinsertfoto'])->name('barberinsertfoto')->middleware('auth');
// Route::get('/barber-profile-detail-certificate', [BarberController::class, 'barberprofiledetailcertificate'])->name('barberprofiledetailcertificate')->middleware('auth');
// Route::post('/barber-profile-detail-certificate-update', [BarberController::class, 'barberinsertcertificate'])->name('barberinsertcertificate')->middleware('auth');




//login

Route::get('/login', [LoginController::class, 'login'])->name('login');
Route::post('/loginproses', [LoginController::class, 'loginproses'])->name('loginproses');
Route::get('/logout', [LogoutController::class, 'logout'])->name('logout');

Route::get('/register', [RegisterController::class, 'register'])->name('register');
Route::post('/registeruser', [RegisterController::class, 'registeruser'])->name('registeruser');