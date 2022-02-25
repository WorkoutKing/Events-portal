<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EventsController;
use App\Http\Controllers\GuestController;
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
Route::get('/',[EventsController::class, 'index']);
Route::get('/add-event',[EventsController::class, 'addEvent']);
Route::post('/storeEvent',[EventsController::class, 'storeEvent']);
Route::get('/my-events',[EventsController::class, 'showEvent']);
Route::get('/delete/event/{events}',[EventsController::class, 'deleteEvent']);
Route::get('/update/event/{events}',[EventsController::class, 'updateEvent']);
Route::post('/update/{events}',[EventsController::class, 'storeUpdateEvent']);
Route::get('/all-events',[EventsController::class, 'showEvents']);
Route::get('/info-event/{events}',[EventsController::class, 'showEventbyId']);
Route::get('/profile',[EventsController::class, 'profile']);
Route::get('/about',[EventsController::class, 'about']);
Route::get('/contacts',[EventsController::class, 'contacts']);

Route::get('/register-event/{events}',[GuestController::class, 'addReg']);
Route::post('/storeReg',[GuestController::class, 'storeReg']);
Route::get('/approve',[GuestController::class, 'approve']);
Route::get('/deleteGuest/guest/{guest}',[GuestController::class, 'deleteGuest']);
Route::get('/updateGuest/guest/{guest}',[GuestController::class, 'updateGuest']);
Route::post('/updateGuest/{guest}',[GuestController::class, 'storeUpdateGuest']);

Auth::routes();
Route::get('/logout','\App\Http\Controllers\Auth\LoginController@logout');
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
