<?php

use Illuminate\Support\Facades\Auth;
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

Auth::routes();


Route::get('/users', 'BillController@show');
Route::get('/', 'HomeController@index');

// Bill
Route::get('admin/bill', 'BillController@index');

// Bank_Receive
Route::get('admin/bank_receive', 'BillreceiveController@index');

// Bill_insert
Route::get('/bills/insert','BillController@add');
Route::post('/bills/insert','BillController@create');

Route::post('users/bills/insert','BillController@insert');

Route::get('users/register','Auth\RegisterController@show');
Route::post('users/register','Auth\RegisterController@register');

Route::post('users/insert','Auth\RegisterController@insert');


Route::get('users/login','Auth\LoginController@show');
Route::post('users/login','Auth\LoginController@auth');





