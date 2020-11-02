<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SubscriptionController;
use App\Http\Controllers\ReminderController;

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
    return view('welcome-1');
});

Route::get('/news', function () {
    return view('news');
});

Route::get('/contact', function () {
    return view('contact');
});

Route::get('/reminder', function () {
    return view('reminder');
});

Route::get('/voip', function () {
    return view('voip');
});

Route::get('/insurance', function () {
    return view('insurance');
});

Route::get('/sip', function () {
    return view('sip');
});

Route::get('/teams', function () {
    return view('teams');
});

Auth::routes();
Route::post('subscribe', [SubscriptionController::class, 'store']);
Route::post('reminder', [ReminderController::class, 'store']);

