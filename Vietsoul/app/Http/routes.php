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

Route::get('/',function(){
	return view('index'); });

Route::get('/client_allProduct', 'VsController@viewProduct');

route::get('/client_customerService','VsController@viewFaq')->name('client_customerService');

route::post('/client_customerService','VsController@postMessage')->name('postMessage');





route::get('/admin_dashboard','VsController@viewDashboard')->name('admin_dashboard');

Route::get('/admin_product','VsController@viewProduct_admin')->name('viewadminProduct');

Route::get('/admin_addproduct',function(){
	return view('admin_addproduct'); })->name('admin_addproduct');

route::delete('/{product_code}', array('uses' => 'VsController@delProduct', 'as' => 'Delproduct'));

Route::get('/admin_editproduct/{product_code}','VsController@vieweditProduct')->name('vieweditProduct');

Route::post('/admin_editproduct/{product_code}','VsController@posteditProduct')->name('posteditProduct');

Route::post('/admin_addproduct','VsController@postProduct')->name('postProduct');

route::get('/admin_message','VsController@viewMessage')->name('admin_message');

route::get('/admin_faq','VsController@viewFaq_admin')->name('admin_faq');

route::post('/admin_faq','VsController@postFaq')->name('postFaq');


?>