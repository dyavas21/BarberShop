<?php


use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\BarberController;
use App\Http\Controllers\LogoutController;
use App\Http\Controllers\CustomerController;
use App\Http\Controllers\RegisterController;

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

Route::get('/about', function () {
    return view('about',[
        "title" => "About",
    ]);
});

Route::get('/contact', function () {
    return view('contact', [
        "title" => "Contact",
    ]);
});

Route::get('/visit', function () {
    return view('visit', [
        "title" => "Know More",
    ]);
});

Route::get('/catalog', function () {
    return view('catalog', [
        "title" => "Catalog",
    ]);
});

Route::get('/team', function () {
    return view('team', [
        "title" => "Team",
    ]);
});

Route::get('/admin-customer', function () {
    return view('admin/admin-customer', [
        "title" => "admin-customer",
    ]);
});

Route::get('/admin-barber', function () {
    return view('admin/admin-barber', [
        "title" => "admin-barber",
    ]);
});

// Route::get('/barber', function () {
//     return view('barber/barber', [
//         "title" => "barber",
//     ]);
// });

// Route::get('/barber-profile', function () {
//     return view('barber/barber-profile', [
//         "title" => "barber-profile",
//     ]);
// });

// Route::get('/barber-profile-detail', function () {
//     return view('barber/barber-profile-detail', [
//         "title" => "barber-profile-detail",
//     ]);
// });

Route::get('/customer-profile-detail', function () {
    return view('customer/customer-profile-detail', [
        "title" => "customer-profile-detail",
    ]);
});

Route::get('/customer-profile', function () {
    return view('customer/customer-profile', [
        "title" => "customer-profile",
    ]);
});

Route::get('/customer-book', function () {
    return view('customer/customer-book', [
        "title" => "customer-book",
    ]);
});


//barber
Route::get('/barber', [BarberController::class, 'index'])->name('barber');
Route::get('/barber-profile/{id}', [BarberController::class, 'editBarber'])->name('editBarber');
Route::post('/barber-update', [BarberController::class, 'barber-update'])->name('barber-update');


 
//login

Route::get('/login', [LoginController::class, 'login'])->name('login');
Route::post('/loginproses', [LoginController::class, 'loginproses'])->name('loginproses');
Route::get('/logout', [LogoutController::class, 'logout'])->name('logout');

Route::get('/register', [RegisterController::class, 'register'])->name('register');
Route::post('/registeruser', [RegisterController::class, 'registeruser'])->name('registeruser');