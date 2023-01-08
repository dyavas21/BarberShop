<?php

use App\Http\Controllers\ApiCrudController;
use App\Http\Controllers\AuthController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::post('/register', [AuthController::class, 'register']);
Route::post('/login', [AuthController::class, 'login']);

// Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
//     return $request->user();
// });

Route::middleware('auth:sanctum')->group(function () {
    Route::post('/logout', [AuthController::class, 'logout']);
    Route::get('/product', [ApiCrudController::class, 'showProduct']);
});


//Customer
Route::middleware('auth:sanctum')->group(function () {
    Route::get('/customer', [ApiCrudController::class, 'getCustomer']);
    Route::post('/customer-profile-inti-insert', [ApiCrudController::class, 'customerInsertDesc']);
    Route::post('/customer-profile-inti-edit', [ApiCrudController::class, 'customerUpdateDesc']);
    Route::get('/customer-product', [ApiCrudController::class, 'showCustomerProduct']);
});

//Barber
Route::middleware('auth:sanctum')->group(function () {
    Route::get('/barber', [ApiCrudController::class, 'getBarber']);
    Route::get('/barber-change-status-proceed/{id}', [ApiCrudController::class, 'barberBookStatusProceed']);
    Route::get('/barber-change-status-pending/{id}', [ApiCrudController::class, 'barberBookStatusPending']);
    Route::get('/barber-change-status-reject/{id}', [ApiCrudController::class, 'barberBookStatusRejected']);
    Route::post('/barber-profile-inti-insert', [ApiCrudController::class, 'barberInsertDesc']);
    Route::post('/barber-profile-inti-edit', [ApiCrudController::class, 'barberUpdateDesc']);
});

//Admin
Route::get('/adminajadeh', [ApiCrudController::class, 'dashboardAdmin']);
Route::get('/adminajadeh/detele/{id}', [ApiCrudController::class, 'adminDelete']);
Route::get('/adminajadeh-produkterjual', [ApiCrudController::class, 'soldProduct']);
Route::get('/adminajadeh-produk-status-accepted/{id}', [ApiCrudController::class, 'orderStatusProceed']);
Route::get('/adminajadeh-produk-status-pending/{id}', [ApiCrudController::class, 'orderStatusPending']);
Route::get('/adminajadeh-produk-status-reject/{id}', [ApiCrudController::class, 'orderStatusRejected']);

//Admin Tipe Produk
Route::get('/adminajadeh-tipeproduk', [ApiCrudController::class, 'listProductType']);
Route::post('/adminajadeh-inserttipeproduk', [ApiCrudController::class, 'adminAddType']);
Route::get('/adminajadeh/detele-tipe/{id}', [ApiCrudController::class, 'adminDeleteType']);

//Admin Produk
Route::get('/adminajadeh-produk', [ApiCrudController::class, 'adminproduk'])->name('listProduct');
Route::post('/adminajadeh-insertproduk', [ApiCrudController::class, 'adminAddProduct']);
Route::get('/adminajadeh/detele-produk/{id}', [ApiCrudController::class, 'adminDeleteProduct']);