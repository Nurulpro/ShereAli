<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use DB;

class OrderController extends Controller
{
     public function __construct()
    {
        $this->middleware('auth:admin');
    }

    public function neworder()
    {

    	$order=DB::table('order')->where('status_code',0)->get();

    	return view ('admin.order.neworder',compact('order'));
    }

    public function vieworder($id)
    {
    	$order=DB::table('order')->join('users','order.user_id','users.id')->select('users.name','users.phone','order.*')->where('order.id',$id)->first();

    	$shipping=DB::table('shipping_details')->where('order_id',$id)->first();

    	$details=DB::table('order_details')->join('products','order_details.product_id','products.id')->select('products.product_code','products.image_one','order_details.*')->where('order_details.order_id',$id)->get();

    	

    		// dd($shippingdetails);

    	return view('admin.order.vieworder',compact('order','details','shipping'));
    }

    public function paymentaccept($id)
    {
    	DB::table('order')->where('id',$id)->update(['status_code'=>1]);
    	  $notification=array(
                              'messege'=>'Successfully updated Status',
                             'alert-type'=>'success'
                         );
                       return Redirect()->route('admin.neworder')->with($notification);

    }

     public function paymentaccepted()
    {
    	$order=DB::table('order')->where('status_code',1)->get();

    	return view ('admin.order.neworder',compact('order'));
    }



   public function cancledorder()
    {
    	$order=DB::table('order')->where('status_code',2)->get();

    	return view ('admin.order.neworder',compact('order'));

        

    }



    public function paymentcanceled($id)
    {


    	 DB::table('order')->where('id',$id)->update(['status_code'=>2]);
    	  $notification=array(
                              'messege'=>'Successfully cancleorder order',
                             'alert-type'=>'success'
                         );
                     return Redirect()->back('/')->with($notification);

                  }




     public function deleverprogress($id)
    {
    	DB::table('order')->where('id',$id)->update(['status_code'=>3]);
    	  $notification=array(
                              'messege'=>'Successfully deleverprogress this order',
                             'alert-type'=>'success'
                         );
                       return Redirect()->route('admin.neworder')->with($notification);




       }


    public function progressing()
    {
    	$order=DB::table('order')->where('status_code',3)->get();

    	return view ('admin.order.neworder',compact('order'));



       }

    public function deleverydone($id)
    {
    	DB::table('order')->where('id',$id)->update(['status_code'=>4]);
    	  $notification=array(
                              'messege'=>'Successfully delevery this order',
                             'alert-type'=>'success'
                         );
                        return Redirect()->route('admin.neworder')->with($notification);

   

         }

    

    public function delevered()
    {
    	$order=DB::table('order')->where('status_code',4)->get();

    	return view ('admin.order.neworder',compact('order'));
    }

      public function handover()
    {
    	$order=DB::table('order')->where('status_code',5)->get();

    	return view ('admin.order.neworder',compact('order'));
    }

     public function handoverdone($id)
    {
    	DB::table('order')->where('id',$id)->update(['status_code'=>5]);
    	  $notification=array(
                              'messege'=>'Successfully handoverdoner done',
                             'alert-type'=>'success'
                         );
                          return Redirect()->route('admin.neworder')->with($notification);

    }
}


