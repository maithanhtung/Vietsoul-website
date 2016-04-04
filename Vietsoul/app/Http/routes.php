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
use Illuminate\Http\Response;

Route::get('/',function(){
	echo $user = Auth::user();
	return view('index'); });


Route::get('/client_allProduct', 'VsController@viewProduct')->name('client_viewProduct');

route::get('/client_customerService','VsController@viewFaq')->name('client_customerService');

route::post('/client_customerService','VsController@postMessage')->name('postMessage');

Route::auth();

Route::get('/client_login' , [ 'middleware' => 'auth',
    'uses' => 'VsController@login']);

Route::get('/client_aboutUs',function(){

	return view('client_aboutUs'); });

Route::get('/client_addcart/{product_code}','VsController@addcart')->name('addcart');

Route::get('/client_delcart/{product}','VsController@delcart')->name('delcart');

Route::get('/client_myCart',function(){
	echo $user = Auth::user();
	return view('client_myCart'); });


// ------------------------------------------------------------------------------------------

route::get('/admin_dashboard', ['middleware' => 'auth',
    'uses' =>'VsController@viewDashboard'])->name('admin_dashboard');

Route::get('/admin_product',  ['middleware' => 'auth',
    'uses' =>'VsController@viewProduct_admin'])->name('viewadminProduct');

Route::get('/admin_addproduct',function(){
	return view('admin_addproduct'); })->name('admin_addproduct');

route::delete('/admin_product/{product_code}', array('uses' => 'VsController@delProduct', 'as' => 'delProduct'));

Route::get('/admin_editproduct/{product_code}','VsController@vieweditProduct')->name('vieweditProduct');

Route::post('/admin_editproduct/{product_code}','VsController@posteditProduct')->name('posteditProduct');

Route::post('/admin_addproduct','VsController@postProduct')->name('postProduct');

route::get('/admin_message',  ['middleware' => 'auth',
    'uses' =>'VsController@viewMessage'])->name('admin_message');

route::get('/admin_faq', ['middleware' => 'auth',
    'uses' =>'VsController@viewFaq_admin'])->name('admin_faq');

route::post('/admin_faq','VsController@postFaq')->name('postFaq');

route::delete('/admin_faq/{faq_number}', array('uses' => 'VsController@delFaq', 'as' => 'delFaq'));
?>
<!-- Route::auth();

Route::get('/home', 'HomeController@index'); -->
