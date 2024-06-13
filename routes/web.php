<?php

use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Admin\AuthController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\SubscriberController;
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

Route::group(['as' => 'admin.', 'prefix' => 'admin'], function () {
    
    Route::controller(AuthController::class)->group(function () {
        Route::get('/login', 'login')->name('login');
        Route::get('/register', 'register')->name('register'); 
        Route::get('/logout', 'logout')->name('logout');
        Route::post('/store', 'store')->name('register.store');
        Route::post('/login', 'authenticate')->name('login.authenticate');
    });

    Route::get('/', function () {
        return redirect()->route('login');
    })->name('login');

    Route::middleware('isAdmin')->group(function () {
        Route::controller(AdminController::class)->group(function () {
            Route::get('/', 'index')->name('home');
        }); 
    });
});

Route::controller(HomeController::class)->group(function () {
    Route::get('/', 'index')->name('home');
    Route::get('/about', 'about')->name('about');
    Route::get('/subscriptions', 'subscriptions')->name('subscriptions');
    Route::get('/why', 'why')->name('why-researchlyne');
    Route::get('/contact', 'contact')->name('contact');
    Route::get('/faq', 'faq')->name('faq');
    Route::get('/privacy', 'privacy')->name('privacy');
    Route::get('/terms', 'terms')->name('terms');
    Route::get('/disclaimer','disclaimer')->name('disclaimer');
    Route::get('/investors-charter', 'investorsCharter')->name('investors-charter');
    Route::get('/investors-complaints', 'investorsComplaints')->name('investors-complaints');
});

Route::group(['as' => 'user.', 'prefix' => 'user'], function () {
    Route::controller(SubscriberController::class)->group(function () {
        Route::post('/login', 'authenticate')->name('authenticate');
    });

    Route::middleware('isUser')->group(function () {
        Route::controller(SubscriberController::class)->group(function () {
            Route::get('/dashboard', 'index')->name('dashboard');
            Route::get('/profile', 'profile')->name('profile');
        });
    });
});


