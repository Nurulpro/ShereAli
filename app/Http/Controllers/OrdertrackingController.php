<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class OrdertrackingController extends Controller
{
    public function ordertracking(Request $request)
{
     $code=$request->code;

      $track=DB::table('order')->where('status',$code)->first();
       if ($track) {
       	  return view('pages.ordertracking',compact('track'));
       }else{
       	$notification=array(
                     'messege'=>'your status is invalid ',
                     'alert-type'=>'error'
                    );
                return Redirect()->back()->with($notification); 
       } 
      }
    
     }
    

