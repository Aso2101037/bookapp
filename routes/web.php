<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\usersController;

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

Route::resource('users', usersController::class);

Route::get('rogin', function () {
    return view('/book/rogin');
});

Route::get('sing_up', function () {
    return view('/book/sing_up');
});

Route::get('home', function () {
    return view('/book/home');
});

Route::get('book_detail', function () {
    return view('/book/book_detail');
});

Route::get('add', function () {
    return view('/book/add');
});

Route::get('missed_purchase_details', function () {
    return view('/book/missed_purchase_details');
});

Route::get('added_missed_purchases', function () {
    return view('/book/added_missed_purchases');
});

Route::get('missed_purchase_edit', function () {
    return view('/book/missed_purchase_edit');
});

Route::get('Q&A', function () {
    return view('/book/Q&A');
});