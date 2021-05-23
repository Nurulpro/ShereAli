<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Cart;
use DB;
use Response;
use Auth;
use Session;
class CartController extends Controller
{
    public function Addcart($id)
    {
    	$product=DB::table('products')->where('id',$id)->first();
    	  $data=array();
    	  if ($product->discount_price == NULL) {
    	  	            $data['id']=$product->id;
    	                $data['name']=$product->product_name;
    	                $data['qty']=1;
    	                $data['price']= $product->selling_price;          
    	 				$data['weight']=1;
    	                $data['options']['image']=$product->image_one;
                         $data['options']['color']='';
                        $data['options']['size']='';
    	               Cart::add($data);
    	               return response()->json(['success' => 'Successfully Added on your Cart']);
    	   }else{
    	               $data['id']=$product->id;
    	                $data['name']=$product->product_name;
    	                $data['qty']=1;
    	                $data['price']= $product->discount_price;          
    	 				$data['weight']=1;
    	                $data['options']['image']=$product->image_one;  
                         $data['options']['color']='';
                        $data['options']['size']=''; 
                     
    	             
    	                Cart::add($data);  
    	              return response()->json(['success' => 'Successfully Added on your Cart']);   
    	 }
    }

     public function check()
     {

     	$content=cart::content();
     	return response()->json($content);
     }

     public function productcard()
     {

        $cart=cart::content();
        // return response($cart);

        return view('pages/cart',compact('cart'));
     }

     public function removecart($rowId)
     {

        Cart::remove($rowId);
        return redirect()->back();
     }

     public function updatecar(Request $request)

     {

        $productid=$request->productid;
          $qty=$request->qty;

        Cart::update($productid,$qty);
        return redirect()->back();
     }

     public function Checkout()
     {

      if(Auth::check()){
        $cart=cart::content();
       return view('pages/checkout',compact('cart'));
      }else{

        $notification=array(
                        'messege'=>'At First Login Your Account!',
                        'alert-type'=>'error'
                         );
                       return Redirect()->route('login')->with($notification);
        
      }
}

public function wishlist()
{

    $userid=Auth::id();
        $product=DB::table('wishlists')->join('products','wishlists.product_id','products.id')
                          ->select('products.*','wishlists.user_id')
                          ->where('wishlists.user_id',$userid)
                          ->get();
                          // return response()->json($product);
           return view('pages.wishlists',compact('product'));
}

public function applycoupon(Request $Request)
{
        $coupon=$Request->coupon;
        $check=DB::table('coupons')->where('coupon',$coupon)->first();
        if ($check) {
              session::put('coupon',[
                  'name' => $check->coupon,
                  'discount' => $check->discount,
                  'balance' => Cart::Subtotal() - $check->discount
              ]);
              $notification=array(
                              'messege'=>'Successfully Coupon Applied',
                               'alert-type'=>'success'
                         );
            return redirect()->back()->with($notification);
        }else{
            $notification=array(
                              'messege'=>'Invalid Coupon',
                               'alert-type'=>'error'
                         );
            return redirect()->back()->with($notification);
        }

    }
    public function removecoupon()
    {

        session::forget('coupon');
                   
            return redirect()->back();

    }
    public function paymentstep()
    {
      $cart=Cart::content();
      return view('pages/paymentpage',compact('cart'));
    }
}
