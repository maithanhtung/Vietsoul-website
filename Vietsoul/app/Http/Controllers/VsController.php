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
		Session::forget('products');
		Session::forget('total');

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

      public function logout()
    {
    	Auth::logout();
        session()->forget('products');
    	session()->forget('total');
        return redirect(property_exists($this, 'redirectAfterLogout') ? $this->redirectAfterLogout : '/');

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
		if (Session::has('products')) {
				$total = session('total');
				$total = $total + $product->product_price;
			}
		else{
				$total = $product->product_price;
			}


		Session::put('total', $total);

		Session::push('products', $product);

		return redirect()->route('client_viewProduct');

		// return view('client_shoppingcart')->withCookie(cookie('product', $product, 45000));
		// $cookie = Cookie('product', $product, 600);

		// echo $cookie;
		// echo "done";
	}

	 public function delcart($product_code){
	 	$products = session('products');
	 	foreach ($products as $product ) {
	 		if($product->product_code == $product_code){
            $key = array_search($product, $products);
			if($key !== FALSE) {
  				unset($products[$key]);
				}
	 		$total = session('total');
			$total = $total - $product->product_price;
			break;
	 		}
	 	}
	 	Session::put('total',$total);
	 	Session::put('products',$products);
	 	return redirect()->route('client_myCart');

	 }
}
