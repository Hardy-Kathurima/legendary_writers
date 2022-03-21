<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\PaymentController;
use App\Http\Controllers\BraintreeController;

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

Auth::routes();

// geuest views

Route::view('/free-samples', 'guest.free-samples')->name('free-samples');
Route::view('/how-we-work', 'guest.how-we-work')->name('how we work');
Route::view('/terms-and-conditions', 'guest.terms')->name('terms');

Route::get('/home', [HomeController::class, 'index'])->name('home');
Route::get('admin/home', [HomeController::class, 'handleAdmin'])->name('admin.route')->middleware('admin');

// orders client routes
Route::view('/home/orders', 'client.inProcess')->name('inProcess')->middleware('auth');
Route::view('/home/orders/create', 'client.create')->name('create.order')->middleware('auth');
Route::view('/home/orders/completed', 'client.completed')->name('order.completed')->middleware('auth');
Route::view('/home/orders/messages', 'client.messages')->name('client.messages')->middleware('auth');
Route::view('/home/orders/my-profile', 'client.profile')->name('client.profile')->middleware('auth');
Route::view('/home/orders/on-going', 'client.onGoing')->name('order.ongoing')->middleware('auth');
Route::get('/home/orders/{id}', [OrderController::class, 'getInProcess'])->name('detailInProcess')->middleware('auth');
Route::get('/home/orders/payment-method/success', [PaymentController::class, 'success']);
Route::get('/home/orders/payment-method/error', [PaymentController::class, 'error']);

Route::get('/home/orders/payment-method/{id}', [OrderController::class, 'handleGet'])->name('client.payment')->middleware('auth');
Route::get('/home/orders/on-going/{id}', [OrderController::class, 'getOngoing'])->name('detailOngoing')->middleware('auth');

Route::post('/home/orders/payment-method', [PaymentController::class, 'charge'])->name('charge')->middleware('auth');




// download file

Route::get('/home/orders/on-going/download/{filename}', [OrderController::class, 'downloadFile'])->name('client.download')->middleware('auth');


// Admin views

Route::view('/admin/home/messages', 'admin.messages')->name('admin.messages')->middleware('admin');
Route::view('/admin/home/users', 'admin.manage-users')->name('admin.users')->middleware('admin');



// Braintree

Route::get('/home/{id}/card', [BraintreeController::class, 'token'])->name('token')->middleware('auth');

Route::post('/home/{id}/card/process', [BraintreeController::class, 'process'])->name('process')->middleware('auth');
