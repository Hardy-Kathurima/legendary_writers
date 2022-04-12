<?php

use App\Http\Controllers\AdminController;
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
    return view('index');
});

Auth::routes();

// geuest views
Route::view('/about-us', 'guest.about')->name('about');
Route::view('/price', 'guest.price')->name('price');
Route::view('/free-samples', 'guest.free-samples')->name('free-samples');
Route::view('/contact-us', 'guest.contact-us')->name('contact-us');
Route::view('/how-we-work', 'guest.how-we-work')->name('how we work');
Route::view('/terms-and-conditions', 'guest.terms')->name('terms');
Route::view('/cookie-policy', 'guest.cookie-policy')->name('cookie-policy');
Route::view('/privacy-policy', 'guest.privacy-policy')->name('privacy-policy');

Route::get('/home', [HomeController::class, 'index'])->name('home');
Route::get('admin/home', [HomeController::class, 'handleAdmin'])->name('admin.route')->middleware('admin');

// orders client routes
Route::view('/home/orders', 'client.inProcess')->name('inProcess')->middleware('auth');
Route::view('/home/orders/create', 'client.create')->name('create.order')->middleware('auth');
Route::view('/home/orders/completed', 'client.completed')->name('order.completed')->middleware('auth');
Route::view('/home/orders/messages', 'client.messages')->name('client.messages')->middleware('auth');
Route::view('/home/orders/my-profile', 'client.profile')->name('client.profile')->middleware('auth');
Route::view('/home/orders/contact-us', 'client.contact-us')->name('client.contact')->middleware('auth');
Route::view('/home/orders/on-going', 'client.onGoing')->name('order.ongoing')->middleware('auth');
Route::get('/home/orders/{id}', [OrderController::class, 'getInProcess'])->name('detailInProcess')->middleware('auth');
Route::get('/home/orders/payment-method/success', [PaymentController::class, 'success']);
Route::get('/home/orders/payment-method/error', [PaymentController::class, 'error']);

Route::get('/home/orders/payment-method/{id}', [OrderController::class, 'handleGet'])->name('client.payment')->middleware('auth');
Route::get('/home/orders/on-going/{id}', [OrderController::class, 'getOngoing'])->name('detailOngoing')->middleware('auth');

Route::post('/home/orders/payment-method', [PaymentController::class, 'charge'])->name('charge')->middleware('auth');




// download file

Route::get('/home/orders/on-going/download/{filename}', [OrderController::class, 'downloadFile'])->name('client.download')->middleware('auth');
Route::get('/home/orders/on-going/progress/{filename}', [OrderController::class, 'downloadProgress'])->name('download.progress')->middleware('auth');


// Admin views

Route::view('/admin/home/messages', 'admin.messages')->name('admin.messages')->middleware('admin');
Route::view('/admin/home/users', 'admin.manage-users')->name('admin.users')->middleware('admin');
Route::view('/admin/home/billing', 'admin.billing')->name('admin.billing')->middleware('admin');
Route::view('/admin/home/completed', 'admin.completed')->name('admin.completed')->middleware('admin');
Route::view('/admin/home/in-process', 'admin.InProcess')->name('admin.process')->middleware('admin');
Route::view('/admin/home/on-going', 'admin.onGoing')->name('admin.ongoing')->middleware('admin');
Route::view('/admin/home/profile', 'admin.profile')->name('admin.profile')->middleware('admin');

// admin controller routes
Route::get('/admin/home/in-process/{id}', [AdminController::class, 'getInProcess'])->name('detail.process')->middleware('admin');
Route::get('/admin/home/on-going/{id}', [AdminController::class, 'getOngoing'])->name('detail.ongoing')->middleware('admin');
Route::get('/admin/home/completed/{id}', [AdminController::class, 'getCompleted'])->name('detail.completed')->middleware('admin');
Route::get('admin/home/on-going/download/{filename}', [AdminController::class, 'downloadFile'])->name('admin.download')->middleware('auth');
Route::get('admin/home/on-going/client/{filename}', [AdminController::class, 'downloadClient'])->name('client.upload')->middleware('auth');



// Braintree

Route::get('/home/{id}/card', [BraintreeController::class, 'token'])->name('token')->middleware('auth');

Route::post('/home/{id}/card/process', [BraintreeController::class, 'process'])->name('process')->middleware('auth');
