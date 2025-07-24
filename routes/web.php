<?php

use App\Http\Controllers\UserController;

use App\Http\Controllers\EmailController;
use App\Http\Controllers\MastbranchinfoController;
use App\Http\Controllers\NotiRepairController;

use Illuminate\Notifications\Notification;
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
// Route::get('/repair', [UserController::class, 'showrepair'])->middleware('customauth');

// Route::get('/branch', [MastbranchinfoController::class, 'getselectBranch'])->middleware('customauth');
// Route::post('/branch', [MastbranchinfoController::class, 'storeBranch'])->middleware('customauth')->name('store.branch');
Route::get('/send-multiple-gmails', [EmailController::class, 'sendMultipleGmails']);
Route::get('/branch', [MastbranchinfoController::class, 'getselectBranch']);
Route::get('/Zone',[NotiRepairController::class,'getallManegers']);
// Route::get('/showbranch',[MastbranchinfoController::class,'showallBranch']);
// Route::get('/nav', function () {
//     return view('navbar');
// });

//  action="{{ route('select.branch') }}" method="POST"