<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;

use Firebase\JWT\JWT;

use Illuminate\Http\Request;
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
})->middleware('guest');

Route::post('login', [LoginController::class, 'login'])->name('login');

Route::get('profile', function(){
    return '<h1>Profile</h1>';
})->middleware('auth_jwt')->name('profile');

