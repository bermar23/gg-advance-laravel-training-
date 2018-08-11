<?php

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

Route::group(['prefix'=>'modules'], function(){
    Route::get('si', 'SalesInvoiceController@show')->name('modules.si.show');
    Route::resource('po', 'PurchaseOrderController');
});

Route::view('sample', 'sample');
