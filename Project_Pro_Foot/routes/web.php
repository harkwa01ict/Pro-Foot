<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\loginController;
use App\Http\Controllers\PanierController;
use App\Http\Controllers\signupController;
use App\Http\Controllers\ProfootController;
use App\Http\Controllers\JobandActivitiesController;

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

Route::get('/home/page', [ProfootController::class, 'Home_page'])->name('route_homepage');
//the route below returns the sign up view

Route::get('/home/signup', [signupController::class, 'get_route'])->name('route_signup');
Route::post('/home/signup', [signupController::class, 'store']);

Route::get('/home/login', [loginController::class, 'get_route'])->name('route_login');
Route::post('/home/login', [loginController::class, 'login']);
Route::delete('/home/logout', [loginController::class, 'logout'])->name('route_logout');

Route::get('/home/shop', [ProfootController::class, 'Shop_page'])->name('route_toshop');
Route::get('/home/shop/article/{id}', [ProfootController::class, 'shopArticle'])->name('route_toshoparticle');
Route::get('/home/shop/category/{id}', [ProfootController::class, 'shopCategory'])->name('route_toshopCategory');

Route::get('/home/restaurant', [ProfootController::class, 'Restaurant_page'])->name('route_restaurantpage');

Route::post('/home/shop/panier/add/{id}', [PanierController::class, 'add'])->name('route_toshopaddpanier');
Route::get('/home/shop/panier', [PanierController::class, 'get_content'])->name('route_toshoppanier');

Route::get('/home/job', [JobandActivitiesController::class, 'get_jod_view'])->name('route_jobpage');