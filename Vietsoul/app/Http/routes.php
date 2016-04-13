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

// -------------------------------------CLIENT---------------------------------
Route::get('/',function(){  
	return view('index'); });


Route::get('/client_allProduct', 'VsController@viewProduct')->name('client_viewProduct');

Route::get('/client_clotProduct', 'VsController@viewclotProduct')->name('client_viewclotProduct');

Route::get('/client_accProduct', 'VsController@viewaccProduct')->name('client_viewaccProduct');

Route::get('/client_toyProduct', 'VsController@viewtoyProduct')->name('client_viewtoyProduct');

Route::get('/client_artProduct', 'VsController@viewartProduct')->name('client_viewartProduct');

Route::get('/client_otherProduct', 'VsController@viewotherProduct')->name('client_viewotherProduct');

Route::post('/client_searchProduct', 'VsController@searchProduct')->name('client_searchProduct');

route::get('/client_customerService','VsController@viewFaq')->name('client_customerService');

route::post('/client_customerService','VsController@postMessage')->name('postMessage');

Route::auth();

Route::get('/client_logout','VsController@logout')->name('client_logout');

Route::get('/client_login' , [ 'middleware' => 'auth',
    'uses' => 'VsController@login']);

Route::get('/client_aboutUs',function(){

	return view('client_aboutUs'); });

Route::get('/client_addcart/{product_code}','VsController@addcart')->name('addcart');

Route::get('/client_delcart/{product_code}','VsController@delcart')->name('delcart');

Route::get('/client_myCart',function(){
	return view('client_myCart'); })->name('client_myCart');

Route::get('/client_order', [ 'middleware' => 'auth',
    'uses' => 'VsController@order'])->name('client_order');




// ------------------------------------ADMIN------------------------------------------------------


Route::group(['middleware' => ['auth', 'admin']], function (){

Route::get('/admin_dashboard', ['middleware' => 'auth',
    'uses' =>'AdminController@viewDashboard'])->name('admin_dashboard');

Route::get('/admin_product',  ['middleware' => 'auth',
    'uses' =>'AdminController@viewProduct_admin'])->name('viewadminProduct');

Route::get('/admin_addproduct',function(){
	return view('admin_addproduct'); })->name('admin_addproduct');

Route::delete('/admin_product/{product_code}', array('uses' => 'AdminController@delProduct', 'as' => 'delProduct'));

Route::get('/admin_editproduct/{product_code}','AdminController@vieweditProduct')->name('vieweditProduct');

Route::post('/admin_editproduct/{product_code}','AdminController@posteditProduct')->name('posteditProduct');

Route::post('/admin_addproduct','AdminController@postProduct')->name('postProduct');

Route::get('/admin_message',  ['middleware' => 'auth',
    'uses' =>'AdminController@viewMessage'])->name('admin_message');

Route::get('/admin_faq', ['middleware' => 'auth',
    'uses' =>'AdminController@viewFaq_admin'])->name('admin_faq');

Route::post('/admin_faq','AdminController@postFaq')->name('postFaq');

Route::delete('/admin_faq/{faq_number}', array('uses' => 'AdminController@delFaq', 'as' => 'delFaq'));


Route::get('/admin_newOrders',  ['middleware' => 'auth',
    'uses' =>'AdminController@viewnewOrders'])->name('admin_newOrders');

Route::get('/admin_procOrders',  ['middleware' => 'auth',
    'uses' =>'AdminController@viewprocOrders'])->name('admin_procOrders');

Route::get('/admin_trashOrders',  ['middleware' => 'auth',
    'uses' =>'AdminController@viewtrashOrders'])->name('admin_trashOrders');

Route::get('/admin_addprocOrders/{order_id}','AdminController@postprocOrders')->name('addprocOrders');

Route::get('/admin_addtrashOrders/{order_id}','AdminController@posttrashOrders')->name('addtrashOrders');

Route::get('/admin_customer', ['middleware' => 'auth',
    'uses' =>'AdminController@viewCustomer'])->name('admin_customer');

Route::get('/admin_cusOrders/{user_id}','AdminController@viewcusOrders')->name('viewcustomerOrders');


});

// Route::post('/admin_login','AdminController@login')->name('login');

// Route::get('/adminst', ['middleware' => ['auth', 'admin'], function() {
//     return "this page requires that you be logged in and an Admin";
// }]);
?>
<!-- Route::auth();

Route::get('/home', 'HomeController@index'); -->
