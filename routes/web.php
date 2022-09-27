<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CustomAuthentication;

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
    return view('welcome');
});
Route::get('/login',[CustomAuthentication::class,'login'])->middleware('alreadyLoggedIn');
Route::post('/sign-in',[CustomAuthentication::class,'signIn'])->name('sign-in');
Route::get('/register',[CustomAuthentication::class,'registration'])->middleware('alreadyLoggedIn');
Route::post('/sign-up',[CustomAuthentication::class,'signUp'])->name('sign-up');
Route::get('/logout',[CustomAuthentication::class,'logout']);
