<?php

Route::get('si', 'SalesInvoiceController@show')->name('modules.si.show');
Route::resource('po', 'PurchaseOrderController');
