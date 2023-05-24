<?php


use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ApiController;
use App\Http\Controllers\loginController;
use App\Http\Controllers\deleteController;
use App\Http\Controllers\PanierController;
use App\Http\Controllers\signupController;
use App\Http\Controllers\TbNewsController;
use App\Http\Controllers\AboutusController;
use App\Http\Controllers\ProfootController;
use App\Http\Controllers\TbadminController;
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
//Route::get('/home/news', [TbNewsController::class, 'news_index']);


Route::get('/home/news', [TbNewsController::class, 'news_index'])->name('route_store');
Route::post('/home/news', [TbNewsController::class, 'store']);


//Route::get('/home/news/admin', [TbadminController::class, 'News_index'])->name('route_store');
//Route::post('/home/news/admin', [TbadminController::class, 'store']);

Route::get('/home/news/admin', [TbadminController::class, 'News_index'])->name('route_store1');
Route::post('/home/news/admin', [TbadminController::class, 'store']);




Route::get('/home/news/show/{id}', [TbNewsController::class, 'show_more'])->name('route_store3');




Route::get('/home/news/admin/edit_news/{id}', [TbNewsController::class, 'edit_news'])->name('route_store4');

Route::post('/home/news/admin/edit_news/{id}', [TbNewsController::class, 'update']);

Route::delete('/home/news/admin/edit_news/{id}', [TbNewsController::class, 'destroy'])->name('route_store5');


Route::get('/home/news/about', [AboutusController::class, 'aboutUs'])->name('route_aboutUs');


Route::get('/home/shop', [ProfootController::class, 'Shop_page'])->name('route_toshop');
Route::get('/home/shop/article/{id}', [ProfootController::class, 'shopArticle'])->name('route_toshoparticle');
Route::get('/home/shop/category/{id}', [ProfootController::class, 'shopCategory'])->name('route_toshopCategory');

Route::get('/home/restaurant', [ProfootController::class, 'Restaurant_page'])->name('route_restaurantpage');

Route::post('/home/shop/panier/add/{id}', [PanierController::class, 'add'])->name('route_toshopaddpanier');
Route::get('/home/shop/panier', [PanierController::class, 'get_content'])->name('route_toshoppanier');
Route::get('/home/shop/panier/message', [PanierController::class, 'get_message'])->name('route_toPaniermessage');

Route::get('/home/job', [JobandActivitiesController::class, 'get_job_view'])->name('route_jobpage');
Route::get('/home/jobs/job/{id}', [JobandActivitiesController::class, 'read_more'])->name('route_toreadmore');
Route::get('/home/activities', [JobandActivitiesController::class, 'get_activities_view'])->name('route_activities');
Route::get('/home/aboutus', [JobandActivitiesController::class, 'get_aboutus_view'])->name('route_aboutus');

Route::get('/home/api', [ApiController::class, 'get_api'])->name('route_api');
Route::post('/home/api', [ApiController::class, 'post']);
Route::get('/home/api/success', [ApiController::class, 'get_apisucces'])->name('route_apisucces');
