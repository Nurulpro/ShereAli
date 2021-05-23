<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Cart;
use Auth;
use Session;
use json;
class PaymentprocessController extends Controller
{
   public function __construct()
    {
        $this->middleware('auth');
    }

    public function paymentprocess(Request $Request)
    {
    	$data=array();
    	$data['name']=$Request->name;
    	$data['phone']=$Request->phone;
    	$data['email']=$Request->email;
    	$data['address']=$Request->address;
    	$data['city']=$Request->city;
    	$data['payment']=$Request->payment;


    	if ($Request->payment == 'stripe') 
         {
    		return view('pages.payment.stripe',compact('data'));

    	}elseif ($Request->payment== 'paypal') {
    		
    	}elseif ($Request->payment== 'ideal') {
    		
    	}else{
    		echo "handcash";
    	}
    	
    }

    public function stripecharge(Request $Request)
    {
    	$total=$Request->total;
    	// Set your secret key. Remember to switch to your live secret key in production.
// See your keys here: https://dashboard.stripe.com/account/apikeys
\Stripe\Stripe::setApiKey('sk_test_51IU5xPBZdkLUA1X2yHdvEEiQZaKjbFb75ToZxjgZCauwJFlW4wBbgspzwanNveuDtPyidljHHaFkTFnFIUc0z7O100IbCcXURK');

// Token is created using Checkout or Elements!
// Get the payment token ID submitted by the form:
$token = $_POST['stripeToken'];

$charge = \Stripe\Charge::create([
  'amount' => $total*100,
  'currency' => 'usd',
  'description' => 'Example charge',
  'source' => $token,
  'metadata' => ['order_id' => uniqid()],
]);
 $data=array();
			$data['user_id']=Auth::id();
			$data['payment_id']=$charge->payment_method;
			$data['paying_amount']=$charge->amount/100;
			$data['blnc_transection']=$charge->balance_transaction;
			$data['stripe_order_id']=$charge->metadata->order_id;
			$data['shipping']=$Request->shipping;
			$data['vat']=$Request->vat;
			$data['total']=$Request->total;
            $data['payment_type']=$Request->payment_type;
			 if (Session::has('coupon')) {
			 	 $data['subtotal']=Session::get('coupon')['balance'];
    	     }else{
    	  	     
                     $data['subtotal']=Cart::Subtotal();
 
    }
                   $data['status_code']=0;
    	    $data['date']=date('d-m-y');
    	    $data['month']=date('F');
    	    $data['year']=date('Y');
            $data['status_code']=mt_rand(100000,999999); 
    	    $order_id=DB::table('order')->insertGetId($data);

    	    // insert shipping details table

    	    	$shipping=array();
    	    	$shipping['order_id']=$order_id;
    	    	$shipping['ship_name']=$Request->ship_name;
    	    	$shipping['ship_email']=$Request->ship_email;
    	    	$shipping['ship_phone']=$Request->ship_phone;
    	    	$shipping['ship_address']=$Request->ship_address;
    	    	$shipping['ship_city']=$Request->ship_city;
    	    	DB::table('shipping_details')->insert($shipping);

    	    	//insert data into orderdeatils
    	    	$content=Cart::content();
    	    	$details=array();
    	    	foreach ($content as $row) {
    	    		$details['order_id']= $order_id;
    	    		$details['product_id']=$row->id;
    	    		$details['product_name']=$row->name;
    	    		$details['color']=$row->options->color;
    	    		$details['size']=$row->options->size;
    	    		$details['quantity']=$row->qty;
    	    		$details['singleprice']=$row->price;
    	    		$details['totalprice']=$row->qty * $row->price;
    	    		DB::table('order_details')->insert($details);
    	    	}

    	    	Cart::destroy();
    	    	 if (Session::has('coupon')) {
			 	 Session::forget('coupon');
    	     }

    	       $notification=array(
                              'messege'=>'Successfully Done',
                               'alert-type'=>'success'
                         );
                 return Redirect()->to('/')->with($notification);
			
    }

    public function SuccessList()
    {
         $order=DB::table('orders')->where('user_id',Auth::id())->where('status',3)->orderBy('id','DESC')->limit(10)->get();
         return view('pages.returnorder',compact('order'));
    }

    public function RequestReturn($id)
    {
        DB::table('orders')->where('id',$id)->update(['return_order'=>1]);
         $notification=array(
                              'messege'=>'Order Return request done please wait for our confirmation email',
                               'alert-type'=>'success'
                         );
                 return Redirect()->back()->with($notification);
    }


}
