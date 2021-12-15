<?php

use App\Http\Controllers\SessionsController;
use App\Http\Controllers\StaticPagesController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\UsersController;
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

Route::get('/',[StaticPagesController::class,'home'])->name('home');
Route::get('/help',[StaticPagesController::class,'help'])->name('help');
Route::get('/about',[StaticPagesController::class,'about'])->name('about');

Route::get('/signup',[UsersController::class,'create'])->name('signup');

Route::resource('users','UsersController');
// 资源路由相当于以下路由
/*
Route::get('/users', 'UsersController@index')->name('users.index');
Route::get('/users/create', 'UsersController@create')->name('users.create');
Route::get('/users/{user}', 'UsersController@show')->name('users.show');
Route::post('/users', 'UsersController@store')->name('users.store');
Route::get('/users/{user}/edit', 'UsersController@edit')->name('users.edit');
Route::patch('/users/{user}', 'UsersController@update')->name('users.update');
Route::delete('/users/{user}', 'UsersController@destroy')->name('users.destroy');
*/

// 显示登录页面
Route::get('/login',[SessionsController::class,'create'])->name('login');
Route::post('/login',[SessionsController::class,'store'])->name('login');
Route::delete('/logout',[SessionsController::class,'destroy'])->name('logout');

Route::get('signup/confirm/{token}', 'UsersController@confirmEmail')->name('confirm_email');

Route::get('password/reset',  'PasswordController@showLinkRequestForm')->name('password.request');
Route::post('password/email',  'PasswordController@sendResetLinkEmail')->name('password.email');

Route::get('password/reset/{token}',  'PasswordController@showResetForm')->name('password.reset');
Route::post('password/reset',  'PasswordController@reset')->name('password.update');

Route::resource('statuses',StatusesController::class,['only'=>['store','destroy']]);
