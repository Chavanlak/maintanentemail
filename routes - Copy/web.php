<?php

use App\Http\Controllers\UserController;
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

Route::get('/', function () {
    return view('welcome');
});
Route::get('/logintest',function(){
    return view('login');
});

Route::get('/login',[UserController::class, 'login'])->name('login');
Route::post('/loginpost',[UserController::class,'loginPost']);

Route::get('logineror',[UserController::class,'logineror']);
// Route::get('/showrepair',[UserController::class,'showrepair']);

Route::get('/logout',[UserController::class,'logout'])->name('logout');
Route::get('/repair', [UserController::class, 'showrepair'])->middleware('customauth');