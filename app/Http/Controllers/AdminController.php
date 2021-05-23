<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use Illuminate\Support\Facades\Hash;
use App\Admin;
class AdminController extends Controller
{
        /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth:admin');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.home');
    }

    public function ChangePassword()
    {
        return view('admin.auth.passwordchange');
    }

    public function Update_pass(Request $request)
    {
      $password=Auth::user()->password;
      $oldpass=$request->oldpass;
      $newpass=$request->password;
      $confirm=$request->password_confirmation;
      if (Hash::check($oldpass,$password)) {
           if ($newpass === $confirm) {
      $user=Admin::find(Auth::id());
      $user->password=Hash::make($request->password);
      $user->save();
      Auth::logout();  
      $notification=array(
        'messege'=>'Password Changed Successfully ! Now Login with Your New Password',
        'alert-type'=>'success'
         );
       return Redirect()->route('admin.login')->with($notification); 
                 }else{
                     $notification=array(
                        'messege'=>'New password and Confirm Password not matched!',
                        'alert-type'=>'error'
                         );
                       return Redirect()->back()->with($notification);
                 }     
      }else{
        $notification=array(
                'messege'=>'Old Password not matched!',
                'alert-type'=>'error'
                 );
               return Redirect()->back()->with($notification);
      }
    }

         
 public function ChangeMail()
    {
        return view('admin.auth.mailchange');
    }
    public function Update_mail(Request $request)
    {
      $mail=Auth::user()->mail;
      $oldmail=$request->oldmail;
      $newmail=$request->mail;
      $confirm=$request->mail_confirmation;
      if (Hash::check($oldmail,$mail)) {
           if ($newmail === $confirm) {
      $user=Admin::find(Auth::id());
      
      $user->save();
      Auth::logout();  
      $notification=array(
        'messege'=>'Email Changed Successfully ! Now Login with Your New Email',
        'alert-type'=>'success'
         );
       return Redirect()->route('admin.login')->with($notification); 
                 }else{
                     $notification=array(
                        'messege'=>'New mail and Confirm Email not matched!',
                        'alert-type'=>'error'
                         );
                       return Redirect()->back()->with($notification);
                 }     
      }else{
        $notification=array(
                'messege'=>'Old Email not matched!',
                'alert-type'=>'error'
                 );
               return Redirect()->back()->with($notification);
      }
    }

    public function logout()
    {
        Auth::logout();
            $notification=array(
                'messege'=>'Successfully Logout',
                'alert-type'=>'success'
                 );
             return Redirect()->route('admin.login')->with($notification);
    }


  

}
