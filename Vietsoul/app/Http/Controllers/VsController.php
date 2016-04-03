<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Faq;
use App\Product;
use App\Message;
use App\Order;
use App\User;
use DB;

class VsController extends Controller{

	public function viewProduct(){
		return view('client_allProduct',['products' => Product::all()]);
	}

	public function viewFaq(){
		return view('client_customerService',['faqs' => Faq::all()]);
	}

	public function postMessage(Request $request){
		$name = $request->input('name');
		$email = $request->input('email');
		$content = $request->input('content');
		DB::table('Messages')->insert(array('message_name' => $name,'message_email' => $email,'message_content' => $content));
     echo "done";
	}

	 // public function __construct()
  //   {
  //       $this->middleware('auth');
  //   }

     public function login()
    {
        return view('client_login');
    }





	public function postProduct(Request $request){
		$product_code = $request->input('product_code');
		$product_name = $request->input('product_name');
		$product_description = $request->input('product_description');
		$product_price = $request->input('product_price'); 
		$product_number = $request->input('product_number');
		DB::table('Products')->insert(array('product_code' => $product_code,'product_name' => $product_name,'product_price' => $product_price,'product_description' => $product_description,'product_number' => $product_number));
     echo "done";
	}


	public function delProduct($product_code){
		DB::table('Products')
				->where('product_code',$product_code)->delete();
				echo "Sucessfully";
	}

	public function vieweditProduct($product_code){
		$products = Product::where('product_code',$product_code)->first();

		return view('admin_editproduct',['products' => $products]);
	}

	public function posteditProduct($product_code,Request $request){
		Product::where('product_code',$product_code)->update(['product_code' => $request->input('product_code'),'product_name' => $request->input('product_name'),'product_price' => $request->input('product_price'),'product_description' => $request->input('product_description'),'product_number' => $request->input('product_number'),
			]);
		echo 'done';
	} 

	public function viewProduct_admin(){
		return view('admin_product',['products' => Product::all()]);
	}


	public function viewMessage(){
		return view('admin_message',['messages' => Message::all()]);
	}


	public function viewDashboard(){
		$dashboards = array();
		$dashboards['order'] = Order::count();
		$dashboards['message'] = Message::count();
		$dashboards['user'] = User::count();
		
		 return view('admin_dashboard', $dashboards);
	}

	

	public function viewFaq_admin(){
		return view('admin_faq',['faqs' => Faq::all()]);
	}

	public function postFaq(Request $request){
		$faq_question = $request->input('faq_question');
		$faq_answer = $request->input('faq_answer');
		$faq_number = $request->input('faq_number');
		DB::table('Faqs')->insert(array('faq_question' => $faq_question,'faq_answer' => $faq_answer,'faq_number' => $faq_number));
     echo "done";
	}

	public function delFaq($faq_number){
		DB::table('Faqs')
				->where('faq_number',$faq_number)->delete();
				echo "Sucessfully";
	}
}
