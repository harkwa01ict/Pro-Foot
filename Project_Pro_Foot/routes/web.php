<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\loginController;
use App\Http\Controllers\deleteController;
use App\Http\Controllers\signupController;
use App\Http\Controllers\TbNewsController;
use App\Http\Controllers\ProfootController;
use App\Http\Controllers\TbadminController;

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
//Route::get('/home/news', [TbNewsController::class, 'news_index']);


Route::get('/home/news', [TbNewsController::class, 'news_index'])->name('route_store');
Route::post('/home/news', [TbNewsController::class, 'store']);


//Route::get('/home/news/admin', [TbadminController::class, 'News_index'])->name('route_store');
//Route::post('/home/news/admin', [TbadminController::class, 'store']);

Route::get('/home/news/admin', [TbadminController::class, 'News_index'])->name('route_store1');
Route::post('/home/news/admin', [TbadminController::class, 'store']);



Route::get('/home/news/admin', [TbadminController::class, 'News_index'])->name('route_store1');


//********************************* */

Route::get('home/news/admin/delete_adm_news/{id}', [deleteController::class,'destroy'])->name('news.destroy');

Route::delete('home/news/admin/delete_adm_news/{id}', [deleteController::class,'destroy'])->name('news.destroy');


//*************************************** */
