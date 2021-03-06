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

Route::get('/', 'maincontroller@start');

//Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
#登入
Route::get('login', 'maincontroller@start')->name('login');
Route::post('login', 'Auth\LoginController@login');

#登出
Route::get('logout', 'Auth\LoginController@logout')->name('logout');

Route::get('addc','AddCourseController@n');
Route::post('addc','AddCourseController@add')->name('addc');
#navbar功能
Route::get('main', 'MainController@main');
Route::get('class_search', 'MainController@class_search');
Route::get('department_search', 'MainController@department_search');
Route::get('school_search', 'MainController@school_search');

/*
#註冊
Route::get('register', 'Auth\RegisterController@showRegistrationForm')->name('register');
Route::post('register', 'Auth\RegisterController@register')->name('register.post');


#忘記密碼
Route::get('password/reset', 'Auth\ForgotPasswordController@showLinkRequestForm')->name('password.request');
Route::post('password/email', 'Auth\ForgotPasswordController@sendResetLinkEmail')->name('password.email');
Route::get('password/reset/{token}', 'Auth\ResetPasswordController@showResetForm')->name('password.reset');
Route::post('password/reset', 'Auth\ResetPasswordController@reset');
*/
