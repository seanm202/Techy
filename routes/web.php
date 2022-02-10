<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegistrationController;
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
Route::get('/gologin', function () {
    return view('login');
} )->name('gologin');

Route::get('/goregister', function () {
    return view('registration');
})->name('goregister');


Route::post('/login', [LoginController::class,'authenticate'])->name('login');

Route::post('/register',[RegistrationController::class,'register'])->name('register');
Route::get('logout', function ()
{
    auth()->logout();
    Session()->flush();

    return Redirect::to('/');
})->name('logout');
