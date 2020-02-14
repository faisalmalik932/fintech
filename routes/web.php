<?php

use RealRashid\SweetAlert\Facades\Alert;

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


Route::get('welcome', function () {
    Alert::success('Success Title', 'Success Message');
    return view('welcome');
});




Route::get('/', 'HomeController@index')->name('dashboard');


Route::get('/register', 'users\RegisterController@register')->name('register');
Route::post('save_register', 'users\RegisterController@save_register');


Route::get('/login', 'users\LoginController@login')->name('login');
Route::post('user_login', 'users\LoginController@user_login');
Route::get('/logout', 'HomeController@logout')->name('admin.logout');

// Profile

Route::get('/profile', 'users\ProfileController@profile')->name('profile');
Route::post('save_userdata', 'users\ProfileController@save_userdata');
Route::post('save_picture', 'users\ProfileController@save_picture');