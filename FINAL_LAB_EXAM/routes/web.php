<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\loginController;
use App\Http\Controllers\logoutController;
use App\Http\Controllers\homeController;

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

Route::get('/login', [loginController::class, 'index'])->name('login.index');
Route::post('/login', [loginController::class, 'verify']);
Route::get('/logout', [logoutController::class, 'index'])->name('logout.index');
Route::get('/home', [homeController::class, 'index'])->name('home.index');
Route::get('/userlist',  [homeController::class, 'userlist'])->name('user.userlist');
Route::post('/userlist',  [homeController::class, 'search'])->name('user.search');
Route::get('/user/{id}',  [homeController::class, 'detail'])->name('user.detail');

Route::get('/create',  [homeController::class, 'create'])->name('user.create');
Route::post('/create',  [homeController::class, 'verifyCreate']);

Route::get('/user/edit/{id}',  [homeController::class, 'edit'])->name('user.edit');
Route::post('/user/edit/{id}',  [homeController::class, 'verifyEdit']);

Route::get('/user/delete/{id}',  [homeController::class, 'delete'])->name('user.delete');



Route::get('/joblist',  [homeController::class, 'joblist'])->name('job.joblist');
Route::post('/joblist',  [homeController::class, 'jobsearch'])->name('job.search');
Route::get('/job/{id}',  [homeController::class, 'jobdetail'])->name('job.detail');

