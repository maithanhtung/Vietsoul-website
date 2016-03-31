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

Route::get('/service',function(){
	return view('service');
})->name('service');

route::post('/service','VsController@postMessage')->name('postMessage');


Route::get('/product',function(){
	return view('product');
})->name('product');

Route::post('/product','VsController@postProduct')->name('postProduct');




route::get('/message','VsController@viewMessage')->name('viewMessage');
?>