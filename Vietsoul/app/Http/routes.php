<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', 'VsController@viewProduct');

Route::get('/client_customerService',function(){
	return view('client_customerService');
})->name('client_customerService');

route::post('/client_customerService','VsController@postMessage')->name('postMessage');


Route::get('/admin_product',function(){
	return view('admin_product');
})->name('admin_product');

Route::post('/admin_product','VsController@postProduct')->name('postProduct');




route::get('/admin_message','VsController@viewMessage')->name('admin_message');
?>