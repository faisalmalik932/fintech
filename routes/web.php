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


Route::prefix('/admin')->name('admin.')->group(function(){
    Route::namespace('Auth')->group(function(){
        
      //Login Routes
      Route::get('/login','LoginController@showLoginForm')->name('login');
      Route::post('/login','LoginController@login');
      Route::post('/logout','LoginController@logout')->name('logout');
  
  });
  
  });

Route::get('/admin/dashboard', 'HomeController@index')->name('admin.home');
Route::group(['middleware' => 'auth'], function () {


// Activity

Route::get('/', 'HomeController@index')->name('dashboard');
Route::get('/transactions', 'users\TransactionsController@index')->name('transactions');
Route::get('/payment/request', 'users\PaymentRequestController@index')->name('payment_request');
Route::get('/manage/currencies', 'users\ManageCurrenciesController@index')->name('manage_currencies');
Route::get('/funding/resources', 'users\FundingResourcesController@index')->name('funding_resources');
Route::get('/contacts', 'users\ContactsController@index')->name('contacts');
Route::get('/store/manager', 'users\StoreManagerController@index')->name('store_manager');
Route::get('/refer/friend', 'users\ReferFriendController@index')->name('refer_friend');

// Receive

Route::get('/request/payment', 'users\RequestPaymentController@index')->name('request_payment');
Route::get('/global/payment/service', 'users\GlobalPaymentServiceController@index')->name('global_payment_service');
Route::get('/mass/payout/companies', 'users\MassPayoutCompaniesController@index')->name('mass_payout_companies');

// Pay

Route::get('/make/payment', 'users\MakePaymentController@index')->name('make_payment');
Route::get('/pay/vat', 'users\PayVatController@index')->name('pay_your_vat');

// Withdraw

Route::get('/to/bankaccount', 'users\ToBankAccountController@index')->name('to_bank_account');
});

// User Routes

Route::get('/register', 'users\RegisterController@register')->name('register');
Route::post('save_register', 'users\RegisterController@save_register');


Route::get('/login', 'users\LoginController@login')->name('login');
Route::post('user_login', 'users\LoginController@user_login');
Route::get('/logout', 'HomeController@logout')->name('admin.logout');

// Profile

Route::get('/profile', 'users\ProfileController@profile')->name('profile');
Route::post('save_userdata', 'users\ProfileController@save_userdata');
Route::post('save_picture', 'users\ProfileController@save_picture');