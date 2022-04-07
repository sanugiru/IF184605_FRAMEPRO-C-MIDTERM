<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\ServiceController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\Admin\Auth\AdminLoginController;

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
    return view('home', [
        "title" => "Home"
    ]);
});

Route::get('/profile', function () {
    return view('profile', [
        "title" => "Profile"
    ]);
});

Route::get('/company', function () {
    return view('company', [
        "title" => "Company"
    ]);
});

Route::get('/collaboration', function () {
    return view('collaboration', [
        "title" => "Collaboration"
    ]);
});

Route::get('/service', function () {
    return view('service', [
        "title" => "Service"
    ]);
});

Route::get('/login', [LoginController::class, 'index'])->name('login')->middleware('guest');
Route::post('/login', [LoginController::class, 'authenticate']);
Route::post('/logout', [LoginController::class, 'logout']);


Route::get('/register', [RegisterController::class, 'create'])->middleware('guest');
Route::post('/register', [RegisterController::class, 'store']);

Route::get('/dashboard', function(){
    return view('dashboard-user.index', [
        'title' => 'Dashboard'
    ]);
})->middleware('auth');

Route::get('/dashboard-user/contacts', function(){
    return view('dashboard-user.contact', [
        'title' => 'contact'
    ]);
})->middleware('auth');
// Route::prefix('admin')->group(function() {
//     Route::get('/', [Admin\Auth\AdminLoginController::class, 'login']);
// });

Route::get('/admin', function (){
    return view('Admin');
});

Route::resource('/dashboard-user/order', OrderController::class)
->middleware('auth');

Route::resource('/dashboard-user/service', ServiceController::class)
->middleware('auth');