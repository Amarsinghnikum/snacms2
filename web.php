<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\MailController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\SalesController;

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
    return view('login');
});


Route::match(['get','post'],'/login',[AdminController::class, 'Login']);
Route::get('/register',[AdminController::class, 'RegisterPage']);
Route::match(['get','post'],'/saveregister',[AdminController::class, 'Register']);
Route::match(['get','post'],'/index',[AdminController::class, 'Index']);

Route::get('/session/remove',[AdminController::class, 'deleteUserProfile'])->name('session.delete');

Route::match(['get','post'],'/currentpayment',[AdminController::class,'CurrentPage']);
Route::match(['get','post'],'/header',[AdminController::class,'header']);
Route::match(['get','post'],'/footer',[AdminController::class,'footer']);
Route::match(['get','post'],'/saveclient',[AdminController::class,'SaveClient']);
Route::match(['get','post'],'/pending',[AdminController::class,'SavePending']);

Route::get('/order', [OrderController::class, 'index']);
Route::get('/myorder', [OrderController::class, 'index2']);
Route::get('/add-order', [OrderController::class, 'add']);
Route::post('/insert-order', [OrderController::class, 'insert']);
Route::get('edit-order/{id}/', [OrderController::class, 'edit']);
Route::put('update-order/{id}/', [OrderController::class, 'update']);
Route::get('/delete-order/{id}',[OrderController::class, 'destroy']);

Route::get('/send-email', [MailController::class, 'sendEmail']);

Route::view('/contact','contactForm')->name('contactForm');
Route::post('/send',[ContactController::class,'send'])->name('send.email');

Route::get("/ordernow",[OrderController::class,'orderNow']);
Route::post("/orderplace",[OrderController::class,'orderPlace']);

Route::get("/ordernoww",[OrderController::class,'orderNow2']);
Route::post("/orderplacee",[OrderController::class,'orderPlace2']);

Route::get('/delete-current/{id}',[OrderController::class, 'deletecurrent']);
Route::get('/delete-pending/{id}',[OrderController::class, 'deletepending']);

Route::get("detail/{id}", [OrderController::class,'detail']);
Route::post("add_to_current",[OrderController::class,'addToCart']);

Route::get("details/{id}", [OrderController::class,'details']);
Route::post("remove_pending",[OrderController::class,'RemovePending']);

Route::get('/session/removeee',[OrderController::class, 'deletePendingItem'])->name('session.delete');

// Sales Area starts here

Route::match(['get','post'],'/sales-login',[SalesController::class, 'Index']);
Route::get('/logout', [SalesController::class, 'logout']);
Route::get('/salesform', [SalesController::class, 'SalesForm']);

Route::match(['get','post'],'/sales-index',[SalesController::class, 'salesIndex']);
Route::get('/add-sales', [SalesController::class, 'add']);
Route::post('/insert-sales', [SalesController::class, 'insert']);
Route::get('edit-sales/{id}/', [SalesController::class, 'edit']);
Route::put('update-sales/{id}/', [SalesController::class, 'update']);
Route::get('/delete-sales/{id}',[SalesController::class, 'destroy']);

Route::get('/session/removee',[SalesController::class, 'deleteSalesProfile'])->name('session.delete');
// Sales Area ends here