<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\Auth\AdminLoginController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\EmailController;
use App\Http\Controllers\LoanController;
use App\Http\Controllers\TransferController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

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

Auth::routes();

Route::view('/', 'auth.login')->name('home');
Route::view('/login', 'auth.login')->name('login');
Route::view('/contact', 'contact')->name('contact');
Route::view('/about', 'about')->name('about');
Route::view('/faq', 'faq')->name('faq');
Route::view('/loan', 'loan')->name('loan');
Route::get('/admins/login', [AdminLoginController::class, 'show'])->name('admins.show-login');
Route::post('/admins/login', [AdminLoginController::class, 'login'])->name('admins.login');
Route::get('/users/create', [UserController::class, 'create'])->name('users.create');
Route::post('/users', [UserController::class, 'store'])->name('users.store'); // Duplicated

// Client Dashboard
Route::group(['middleware' => 'auth'], function () {
    Route::get('/logout', [LoginController::class, 'logout'])->name('logout');
    Route::get('/transfer', [TransferController::class, 'create'])->name('transfer');
    Route::post('/transfer', [TransferController::class, 'store'])->name('transfers.store');
    Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard.index');
    Route::get('/statement', [DashboardController::class, 'statement'])->name('dashboard.statement');
    Route::get('/profile', [UserController::class, 'profile'])->name('users.profile');
    Route::get('/loans/active', [LoanController::class, 'active'])->name('loans.active');
    Route::get('/loans', [LoanController::class, 'index'])->name('loans.index');
    Route::get('/loans/history', [LoanController::class, 'history'])->name('loans.history');
    Route::get('/loans/apply', [LoanController::class, 'create'])->name('loans.create');
    Route::post('/loans', [LoanController::class, 'store'])->name('loans.store');
});

// Admin Dashboard
Route::group(['middleware' => 'admin'], function () {
    Route::get('/admins', [AdminController::class, 'index'])->name('admins.index');
    Route::get('/logout', [AdminLoginController::class, 'logout'])->name('logout');
    Route::get('/users/{user}/edit', [UserController::class, 'edit'])->name('users.edit');
    Route::patch('/users/{user}', [UserController::class, 'update'])->name('users.update');
    Route::get('/users/{user}', [UserController::class, 'destroy'])->name('users.destroy'); // TODO Change to delete
    Route::get('/users', [UserController::class, 'index'])->name('users.index');
});

// Grand Admin
Route::group(['middleware' => 'is_grand'], function () {
    Route::get('/admins/create', [AdminController::class, 'create'])->name('admins.create');
    Route::post('/admins', [AdminController::class, 'store'])->name('admins.store');
    Route::get('/admins/{admin}/edit', [AdminController::class, 'edit'])->name('admins.edit');
    Route::get('/admins/{admin}', [AdminController::class, 'destroy'])->name('admins.destroy');
    Route::patch('/admins/{admin}', [AdminController::class, 'update'])->name('admins.update');
});


// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

/*Route::middleware('auth')->group(function () {
    Route::get('/email', [EmailController::class, 'index'])->name('email');
    Route::post('/sendemail', [EmailController::class, 'sendEmail'])->name('email');
});*/