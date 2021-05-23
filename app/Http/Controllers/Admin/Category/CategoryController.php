<?php

namespace App\Http\Controllers\Admin\Category;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Model\Admin\Category;
use App\Model\Admin\Brand;
use DB;
class CategoryController extends Controller
{
     
    public function __construct()
    {
        $this->middleware('auth:admin');
    }

    public function category()
    {

    	$category=category::all();
    	return view('admin.category.category',compact('category'));

    }

    public function storecategory(Request $Request)

    {
      $validatedData = $Request->validate([
        'category_name' => 'required|unique:categories|max:55',
        
           ]);
               // query builder

            // $data=array();   
            // $data['category_name']=$Request->category_name;
            // DB::table('categories')->insert($data);

              
                // eloquent orm
              $category = new category();
              $category->category_name =$Request->category_name;
              $category->save();
              $notification=array(
                'messege'=>'categories insert successfull!',
                'alert-type'=>'success'
                 );
               return Redirect()->back()->with($notification);
    }

    public function delete_category($id)
    {
    	  DB::table('categories')->where('id',$id)->delete();

         $notification=array(
                'messege'=>'category delete successfull!',
                'alert-type'=>'success'
                 );
               return Redirect()->back()->with($notification);
    }

    public function edit_category($id)
    {

      $category= DB::table('categories')->where('id',$id)->first();
      return view('Admin/category/edit_category',compact('category'));
    }

    public function updatecategory(Request $equest, $id)


    {
        echo "string";
      // $validatedData = $request->validate([
      //   'category_name' => 'required|max:55',
        
      //      ]);

      //        $data=array();   
      //        $data['category_name']=$request->category_name;
      //       $update= DB::table('categories')->where('id',$id)->update($data);

      //        if ($category) {
      //           $notification=array(
      //           'messege'=>'category update successfull!',
      //           'alert-type'=>'success'
      //            );
      //          return Redirect()->route('categories')->with($notification);
      //        }else{
      //             $notification=array(
      //           'messege'=>'Nathing to update',
      //           'alert-type'=>'success'
      //            );
      //          return Redirect()->route('categories')->with($notification);

      //        }

            }

            public function brands() {
                $brands=brand::all();
                return view('admin.brand.brands',compact('brands'));



            }

             public function storebrands(request $request)

    {
      $validatedData = $request->validate([
        'brand_name' => 'required|unique:brands|max:55',

         

    ]);

      $data=array();
        $data['brand_name']=$request->brand_name; 
        $image=$request->file('brand_logo');
        
            if ($image) {
                // $image_name= str_random(5);
                $image_name= date('dmy_H_s_i');

                $ext=strtolower($image->getClientOriginalExtension());
                $image_full_name=$image_name.'.'.$ext;
                $upload_path='public/media/brand/';
                $image_url=$upload_path.$image_full_name;
                $success=$image->move($upload_path,$image_full_name);
              
                $data['brand_logo']=$image_url;
                $brand=DB::table('brands')
                          ->insert($data);
                    $notification=array(
                     'messege'=>'Successfully Brand Inserted ',
                     'alert-type'=>'success'
                    );
                return Redirect()->back()->with($notification);                      
            }else{
              $brand=DB::table('brands')
                          ->insert($data);
                 $notification=array(
                     'messege'=>'Done!',
                     'alert-type'=>'success'
                      );
                return Redirect()->back()->with($notification); 
            }
                   }

                    public function delete_brands($id)
    {
            $data=DB::table('brands')->where('id',$id)->first();
        $image=$data->brand_logo;
        unlink($image);
        $brand=DB::table('brands')->where('id',$id)->delete();
                $notification=array(
                     'messege'=>'Successfully Brand Deleted ',
                     'alert-type'=>'success'
                );
        return Redirect()->back()->with($notification);   
    }

    public function edit_brand($id)
    {

      $brand= DB::table('brands')->where('id',$id)->first();
      return view('admin.brand.edit_brand',compact('brand'));
    }

    public function update_brand(Request $Request, $id)


    {

        $oldlogo=$Request->old_logo;
        $data=array();
        $data['brand_name']=$Request->brand_name; 
        $image=$Request->file('brand_logo');
        
            if ($image) {
               unlink($old_logo);
                $image_name= date('dmy_H_s_i');

                $ext=strtolower($image->getClientOriginalExtension());
                $image_full_name=$image_name.'.'.$ext;
                $upload_path='public/media/brand/';
                $image_url=$upload_path.$image_full_name;
                $success=$image->move($upload_path,$image_full_name);
              
                $data['brand_logo']=$image_url;
                $brand=DB::table('brands')->where('id', $id)->update($data);
                         
                     $notification=array(
                     'messege'=>'Successfully Brand Inserted',
                     'alert-type'=>'success'
                    );
                return Redirect()->route('brands')->with($notification);                      
            }else{
              $brand=DB::table('brands')->where('id',$id)->update($data);
                         
                 $notification=array(
                     'messege'=>'update with image!',
                     'alert-type'=>'success'
                      );
                return Redirect()->route('brands')->with($notification); 

             }

            }

            public function subcategories()
           
            {
                $category=DB::table('categories')->get();
                $subcat=DB::table('subcategories')
                  ->join('categories','subcategories.category_id','categories.id')
                  ->select('subcategories.*','categories.category_name')
                  ->get();
              return view ('admin/category/subcategory',compact('category','subcat'));

            }
            public function storesubcategory(Request $request)
            {
                $validatedData = $request->validate([
                'category_id' => 'required',
                 'subcategory_name' => 'required|',

                  ]);

                $data=array();
               $data['category_id']=$request->category_id;
               $data['subcategory_name']=$request->subcategory_name;
               DB::table('subcategories')->insert($data);

                $notification=array(
                     'messege'=>'Inserted subcategory Successfully',
                     'alert-type'=>'success'
                      );
                return Redirect()->back()->with($notification); 

            }

             public function deletesubcat($id)
    {
             
    DB::table('subcategories')->where('id',$id)->delete();
               $notification=array(
                     'messege'=>'Deleted subcategory Successfully',
                     'alert-type'=>'success'
                      );
        return Redirect()->back()->with($notification);   
    }


public function editsubcat($id){

   $subcat=DB::table('subcategories')->where('id',$id)->first();
      
     return view('admin/category/edit_subcategory',compact('subcat'));         
}




                    }

                
