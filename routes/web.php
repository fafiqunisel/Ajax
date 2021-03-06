<?php

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
use App\Http\Controllers\BooksController;



Route::get('/', function () {
    return view('welcome');
});// default route

Route::resource('books', BooksController::class); // route based on resource
// if masuk page lain.. create new controller

