<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\View;
use Illuminate\View\Compilers\Concerns;
use Illuminate\Support\Facades\App\Http;
use Illuminate\Support\Facades\Auth;
use App\Support\Controllers\Home;

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


Route::get('/','Home@show')->name('auth.show');
Route::post('/','Home@store')->name('auth.post');
//Route::get('/login','Home@showLogin')->name('auth.showlogin');
Route::get('/','Home@sendemailDemo');

