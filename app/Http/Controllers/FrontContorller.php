<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
class FrontContorller extends Controller
{
    public function StoreNewslater(Request $Request)
    {
    	 $validatedData = $Request->validate([
        'email' => 'required|unique:newslaters|max:55',
        ]);

            $data=array();   
            $data['email']=$Request->email;
            DB::table('newslaters')->insert($data);

    	 $notification=array(
                'messege'=>'Thanks for subscribing!',
                'alert-type'=>'success'
                 );
               return Redirect()->back()->with($notification);
    }

    public function productsearch(Request $request)
    {
         $item =$request->search;
           $brands=DB::table('brands')->get();
         $searchproduct=DB::table('products')
         ->join('brands','products.brand_id','brands.id')->select('products.*','brands.brand_name')
         ->where('product_name', 'LIKE', "%{$item}%") 
          ->orWhere('brand_name', 'LIKE', "%{$item}%") 
          ->get();
             return view('pages.search',compact('brands','searchproduct'));
    }
}
