<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Home\HomeController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\LogoutController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\User\ProfileController;
use App\Http\Controllers\UserController;

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
# PAGE 
Route::get('/login', [LoginController::class, 'loginPage'])->name('login.page');
Route::get('/register', [RegisterController::class, 'registerPage'])->name('register.page');
Route::get('/account', [UserController::class, 'setupPage'])->name('setup.page');
Route::get('', [HomeController::class, 'homePage'])->name('home.page');
Route::get('/@{username}', [ProfileController::class, 'profilePage'])->name('profile.page');

# ACTION
Route::post('/login', [LoginController::class, 'login'])->name('login.post');
Route::post('/register', [RegisterController::class, 'register'])->name('register.post');

# WITH MIDDLEWARE
Route::get('/logout', [LogoutController::class, 'logout'])->name('logout.post');