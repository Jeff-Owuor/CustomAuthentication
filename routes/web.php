<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CustomAuthentication;
use App\Http\Controllers\ProductController;

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

Route::get('/',[ProductController::class,'index']);
Route::get('detail/{id}',[ProductController::class,'detail']);
Route::post('add_to_cart',[ProductController::class,'addToCart']);
Route::get('/login',[CustomAuthentication::class,'login'])->middleware('alreadyLoggedIn');
Route::post('/sign-in',[CustomAuthentication::class,'signIn'])->name('sign-in');
Route::get('/register',[CustomAuthentication::class,'registration'])->middleware('alreadyLoggedIn');
Route::post('/sign-up',[CustomAuthentication::class,'signUp'])->name('sign-up');
Route::get('/logout',[CustomAuthentication::class,'logout']);
Route::get('/productList',[ProductController::class,'productList']);
Route::get('removecart/{id}',[ProductController::class,'removeCart']);
Route::get('/ordernow',[ProductController::class,'orderNow']);
Route::post('/orderplace',[ProductController::class,'orderPlace']);

