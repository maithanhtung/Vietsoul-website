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

class AdminController extends Controller{

	// public function viewlogin(){
	// 	return view('admin_login');
	// }

	// public function login(Request $request){
	// 	$name = $request->input('name');
	// 	$password = $request->input('password');
	// 	if ($name == 'tung' && $password == 'linh1234') {
	// 		echo 'done';
	// 	}
	// 	else{
	// 		echo 'fail';
	// 	}	 
	// }

	public function postProduct(Request $request){
		$product_code = $request->input('product_code');
		$product_name = $request->input('product_name');
		$product_description = $request->input('product_description');
		$product_price = $request->input('product_price');
		$product_number = $request->input('product_number');
		DB::table('products')->insert(array('product_code' => $product_code,'product_name' => $product_name,'product_price' => $product_price,'product_description' => $product_description,'product_number' => $product_number));
     return redirect()->back()->with('product_name', $product_name);
	}


	public function delProduct($product_code){
		Product::where('product_code',$product_code)->delete();
		return redirect()->route('viewadminProduct');
	}

	public function vieweditProduct($product_code){
		$products = Product::where('product_code',$product_code)->first();

		return view('admin_editproduct',['products' => $products]);
	}

	public function posteditProduct($product_code,Request $request){
		Product::where('product_code',$product_code)->update(['product_code' => $request->input('product_code'),'product_name' => $request->input('product_name'),'product_price' => $request->input('product_price'),'product_description' => $request->input('product_description'),'product_number' => $request->input('product_number'),
			]);
		return redirect()->route('viewadminProduct');
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
		$dashboards['order']    = Order::count();
		$dashboards['message']  = Message::count();
		$dashboards['user']     = User::count();
		$dashboards['products'] = Product::count();
		$product_code = Order::pluck('product_code');
		$sold   = 0;
		$cloth  = 0;
		$access =0;
		$toy    = 0;
		$art    = 0;
		$other  = 0;

		foreach ($product_code as $code ) {
			$product = Product::where('product_code',$code)->first();
			$price = $product['product_price'];
			$sold = $sold + $price;
			if (strpos($code, 'clot') !== false) {
				$cloth = $cloth + 1;
			}
			if (strpos($code, 'acc') !== false) {
				$access = $access + 1;
			}
			if (strpos($code, 'toy') !== false) {
				$toy = $toy + 1;
			}
			if (strpos($code, 'art') !== false) {
				$art = $art + 1;
			}
			if (strpos($code, 'oth') !== false) {
				$other = $other + 1;
			}

		}
		$max = max($cloth, $access, $toy, $art, $other);
		$dashboards['sold']     = $sold;
		$dashboards['profit']   = $sold * 2 /5;
		$dashboards['cost']     = $sold * 3 / 5;
		if ($dashboards['order'] == 0) {
		    $dashboards['bestsold'] = 0;
		}
		else{
		$dashboards['bestsold'] = round($max  / $dashboards['order'] * 100,2);
		}

		if ($cloth == $max ) {
			$dashboards['bestproduct'] = ' Clothing ';
		}
		elseif ($max == $access) {
			$dashboards['bestproduct'] = ' Accessories ';
		}
		elseif ($max == $toy){
			$dashboards['bestproduct'] = ' Toys ';
		}
		elseif ($max == $art) {
			$dashboards['bestproduct'] = ' Artwork ';
		}
		else {
			$dashboards['bestproduct'] = ' Others ';
		}

		$dashboards['numclot'] = Product::where('product_code','like','clot%')->count();
		$dashboards['numacc']  = Product::where('product_code','like','acc%')->count();
		$dashboards['numtoy']  = Product::where('product_code','like','toy%')->count();
		$dashboards['numart']  = Product::where('product_code','like','art%')->count();
		$dashboards['numoth']  = Product::where('product_code','like','oth%')->count();
		$dashboards['total']   = Product::all()->count();

		$dashboards['percentclot'] = round($dashboards['numclot'] / $dashboards['total'] *100,2);
		$dashboards['percentacc']  = round($dashboards['numacc'] / $dashboards['total'] *100,2);
		$dashboards['percenttoy']  = round($dashboards['numtoy'] / $dashboards['total'] *100,2);
		$dashboards['percentart']  = round($dashboards['numart'] / $dashboards['total'] *100,2);
		$dashboards['percentoth']  = round($dashboards['numoth'] / $dashboards['total'] *100,2);

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
     return redirect()->route('admin_faq');
	}

	public function delFaq($faq_number){
		Faq::where('faq_number',$faq_number)->delete();
		return redirect()->route('admin_faq');
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
		return redirect()->route('admin_newOrders');
	}

	public function posttrashOrders($order_id){
		Order::where('order_id',$order_id)->update(['order_process' => 'NO', 'order_trash' => 'YES']);
		return redirect()->route('admin_newOrders');
	}

	public function posttrashProcOrders($order_id){
		Order::where('order_id',$order_id)->update(['order_process' => 'NO', 'order_trash' => 'YES']);
		return redirect()->route('admin_procOrders');
	}
}