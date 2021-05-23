<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use DB;
class CouponController extends Controller
{
     public function __construct()
    {
        $this->middleware('auth:admin');
    }

    public function coupon(){
         $coupon=DB::table('coupons')->get();
         return view('admin.coupon.coupon',compact('coupon'));

    }

    public function store_coupon(Request $Request){

    	$data=array();
    	$data['coupon']=$Request->coupon;
    	$data['discount']=$Request->discount;
    	DB::table('coupons')->insert($data);


                $notification=array(
                     'messege'=>'Inserted coupon Successfully',
                     'alert-type'=>'success'
                      );
                return Redirect()->back()->with($notification); 
    }

   

      public function delete_coupon($id)
    {

       DB::table('coupons')->where('id',$id)->delete();
        $notification=array(
                     'messege'=>' Coupon Deleted Successfully',
                     'alert-type'=>'success'
                      );
                return Redirect()->back()->with($notification); 
      
    }

    public function edit_coupon($id){

           $coupon= DB::table('coupons')->where('id',$id)->first();
      return view('admin.coupon.edit_coupon');
    }


    public function NewsLater()
{

    $sub=DB::table('newslaters')->get();
    return view ('admin.coupon.newslaters',compact('sub'));
}

public function seosetting()
{

     $seo=DB::table('seo')->first();

    return view ('admin.coupon.seosetting',compact('seo'));

}

public function seoinsert(Request $request)
{
     $data=array();
        $data['meta_title']=$request->meta_title;
        $data['meta_author']=$request->meta_author;
        $data['meta_tag']=$request->meta_tag;
        $data['meta_description']=$request->meta_description;
        $data['google_analytics']=$request->google_analytics;
        $data['bing_analytics']=$request->bing_analytics;
        $data['id']=$request->id;
   
                
                $seo=DB::table('seo')->update($data);
                    $notification=array(
                     'messege'=>'Successfully seo Inserted ',
                     'alert-type'=>'success'
                    );
                return Redirect()->back()->with($notification); 
}


}
