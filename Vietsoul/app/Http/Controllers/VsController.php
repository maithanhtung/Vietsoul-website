<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Cookie;
use App\Http\Requests;
use Illuminate\Http\Response;
use App\Http\Controllers\Controller;
use App\Faq;
use App\Product;
use App\Message;
use App\Order;
use App\User;
use DB;
use Session;

class VsController extends Controller{

	


	public function viewProduct(){
		return view('client_allProduct',['products' => Product::all()]);	
		}

	public function viewclotProduct(){
		$products = Product::where('product_code','like','clot%')->get();
			return view('client_clotProduct',['products' => $products]);	
		}

	public function viewaccProduct(){
		$products = Product::where('product_code','like','acc%')->get();
			return view('client_accProduct',['products' => $products]);	
		}
		
	public function viewtoyProduct(){
		$products = Product::where('product_code','like','toy%')->get();
			return view('client_toyProduct',['products' => $products]);	
		}
		
	public function viewartProduct(){
		$products = Product::where('product_code','like','art%')->get();
			return view('client_artProduct',['products' => $products]);	
		}
		
	public function viewotherProduct(){
		$products = Product::where('product_code','like','oth%')->get();
			return view('client_otherProduct',['products' => $products]);	
		}
		
	public function searchProduct(Request $request){
		$product_name = $request->input('product_name');
		$products = Product::where('product_name','like','%'.$product_name.'%')->get();
		return view('client_searchProduct',['products' => $products]);	
		}				
		
	public function order(){
		$products = $products = session('products');
		$user_id = Auth::user()->id;

		foreach ($products as $product) {
			$product_code = $product->product_code;
			DB::table('orders')->insert(array('product_code' => $product_code,'user_id' => $user_id,'order_process' => 'NO','order_trash' => 'NO'));
		}
		return view('client_order');
	}

	public function viewFaq(){
		return view('client_customerService',['faqs' => Faq::all()]);
	}

	public function postMessage(Request $request){
		$name = $request->input('name');
		$email = $request->input('email');
		$content = $request->input('content');
		DB::table('messages')->insert(array('message_name' => $name,'message_email' => $email,'message_content' => $content));
     echo "Your messages has been sent!";
	}

	 // public function __construct()
  //   {
  //       $this->middleware('auth');
  //   }

     public function login()
    {
        return view('client_login');
    }


    public function addcart($product_code){
		$product = Product::where('product_code',$product_code)->first();
		// $cookie = Cookie('product', $product, 86400 );
		// // echo Cookie('product_code');
		// echo $product->product_code;
		// echo '<br>';
		// echo $cookie->product_code;
		// $response = new \Illuminate\Http\Response($product);
		// $response->withCookie('product', $product, 60);
		
		// return $response;
		Session::push('products', $product);
		echo "done";

		// return view('client_shoppingcart')->withCookie(cookie('product', $product, 45000));
		// $cookie = Cookie('product', $product, 600);
		
		// echo $cookie;
		// echo "done";
	}

	 public function delcart($product){
	 	$products = session('products');
	 	foreach ($products as $value ) {
	 		if($value == $product){
	 			array_forget($products, $value); 
	 		}
	 		else{
	 			echo "dm";
	 		}
	 	}
	 }


// ----------------------------------------------------------------------------------------


	public function postProduct(Request $request){
		$product_code = $request->input('product_code');
		$product_name = $request->input('product_name');
		$product_description = $request->input('product_description');
		$product_price = $request->input('product_price');
		$product_number = $request->input('product_number');
		DB::table('products')->insert(array('product_code' => $product_code,'product_name' => $product_name,'product_price' => $product_price,'product_description' => $product_description,'product_number' => $product_number));
     echo "done";
	}


	public function delProduct($product_code){
		Product::where('product_code',$product_code)->delete();
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

	public function viewCustomer(){
		$users = User::all();
   
      
		return view('admin_customer',['users' => $users]);
	}

	public function viewMessage(){
		return view('admin_message',['messages' => Message::all()]);
	}


	public function viewDashboard(){
		$dashboards = array();
		$dashboards['order'] = Order::count();
		$dashboards['message'] = Message::count();
		$dashboards['user'] = User::count();
		$product_code = Order::pluck('product_code');
		$sold = 0;
		foreach ($product_code as $code ) {
			$product = Product::where('product_code',$code)->first();
			$price = $product->product_price;
			$sold = $sold + $price;
		}
		$dashboards['sold'] = $sold;
		$dashboards['profit'] = $sold * 2 /5;

		 return view('admin_dashboard', $dashboards);
	}



	public function viewFaq_admin(){
		return view('admin_faq',['faqs' => Faq::all()]);
	}

	public function postFaq(Request $request){
		$faq_question = $request->input('faq_question');
		$faq_answer = $request->input('faq_answer');
		$faq_number = $request->input('faq_number');
		DB::table('faqs')->insert(array('faq_question' => $faq_question,'faq_answer' => $faq_answer,'faq_number' => $faq_number));
     echo "done";
	}

	public function delFaq($faq_number){
		Faq::where('faq_number',$faq_number)->delete();
				echo "Sucessfully";
	}

	public function viewnewOrders(){
		$orders = Order::where('order_process','=','NO')->where('order_trash','=','NO')->get();
		return view('admin_newOrders',['orders' => $orders]);
	}

	public function viewprocOrders(){
		$orders = Order::where('order_process','=','YES')->where('order_trash','=','NO')->get();
		return view('admin_procOrders',['orders' => $orders]);
	}

	public function viewtrashOrders(){
		$orders = Order::where('order_process','=','NO')->where('order_trash','=','YES')->get();
		return view('admin_trashOrders',['orders' => $orders]);
	}

	public function viewcusOrders($id){
		$orders = Order::where('user_id',$id)->get();
		return view('admin_cusOrders',['orders' => $orders]);
	}

	public function postprocOrders($order_id){
		Order::where('order_id',$order_id)->update(['order_process' => 'YES']);
		echo 'done';
	}

	public function posttrashOrders($order_id){
		Order::where('order_id',$order_id)->update(['order_process' => 'NO', 'order_trash' => 'YES']);
		echo 'done';
	}

}
