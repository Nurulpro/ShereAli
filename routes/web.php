<?php
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
// GoogleLoginController

 Route::get('/auth/redirect/{provider}', 'GoogleLoginController@redirect');
 Route::get('/callback/{provider}', 'GoogleLoginController@callback');

Route::get('/', function () {return view('pages.index');});
//auth & user
Auth::routes(['verify' => true]);
Route::get('/home', 'HomeController@index')->name('home');
Route::get('/password/change', 'HomeController@changePassword')->name('password.change');
Route::post('/password/update', 'HomeController@updatePassword')->name('password.update');
Route::get('/user/logout', 'HomeController@Logout')->name('user.logout');

//admin=======
Route::get('admin/home', 'AdminController@index');
Route::get('admin', 'Admin\LoginController@showLoginForm')->name('admin.login');
Route::post('admin', 'Admin\LoginController@login');
        // Password Reset Routes...
Route::get('admin/password/reset', 'Admin\ForgotPasswordController@showLinkRequestForm')->name('admin.password.request');
Route::post('admin-password/email', 'Admin\ForgotPasswordController@sendResetLinkEmail')->name('admin.password.email');
Route::get('admin/reset/password/{token}', 'Admin\ResetPasswordController@showResetForm')->name('admin.password.reset');
Route::post('admin/update/reset', 'Admin\ResetPasswordController@reset')->name('admin.reset.update');
Route::get('/admin/Change/Password','AdminController@ChangePassword')->name('admin.password.change');
Route::get('/admin/Change/Mail','AdminController@ChangeMail')->name('admin.mail.change');
Route::post('/admin/password/update','AdminController@Update_pass')->name('admin.password.update');
Route::post('/admin/mail/update','AdminController@Update_mail')->name('admin.mail.update'); 
Route::get('admin/logout','AdminController@logout')->name('admin.logout');

// categories

Route::get('admin/categories', 'Admin\Category\CategoryController@category')->name('categories');
Route::post('admin/store/category', 'Admin\Category\CategoryController@storecategory')->name('store.category');
Route::get('delete/category/{id}','Admin\Category\CategoryController@delete_category');
Route::get('edit/category/{id}','Admin\Category\CategoryController@edit_category');
Route::post('update/category/{id}','Admin\Category\CategoryController@updatecategory');

//brands
Route::get('admin/brands', 'Admin\Category\CategoryController@brands')->name('brands');
Route::post('admin/store/brands', 'Admin\Category\CategoryController@storebrands')->name('store.brands');
Route::get('delete/brands/{id}','Admin\Category\CategoryController@delete_brands');
Route::get('edit/brands/{id}','Admin\Category\CategoryController@edit_brand');
Route::post('update/brand/{id}','Admin\Category\CategoryController@update_brand'); 

Route::get('admin/subcategories', 'Admin\Category\CategoryController@subcategories')->name('subcategories');
Route::post('admin/storesubcategory', 'Admin\Category\CategoryController@storesubcategory')->name('storesubcategory');

Route::get('edit/subcategory/{id}','Admin\Category\CategoryController@editsubcat');
Route::get('delete/subcategory/{id}','Admin\Category\CategoryController@deletesubcat');

Route::get('admin/coupon','Admin\CouponController@coupon')->name('admin.coupon');
Route::post('admin/store/coupon','Admin\CouponController@store_coupon')->name('store.coupon');


Route::get('edit/coupon/{id}','Admin\CouponController@edit_coupon');
Route::get('delete/coupon/{id}','Admin\CouponController@delete_coupon');

Route::get('admin/coupon','Admin\CouponController@coupon')->name('admin.coupon');
// newslater  
Route::get('admin.newsLater','Admin\CouponController@NewsLater')->name('admin.newsLater');
// seosetting
Route::get('admin/seosetting','Admin\CouponController@seosetting')->name('admin.seosetting');
Route::post('seo.setting','Admin\CouponController@seoinsert');
// order trackong
Route::post('order/tracking','OrdertrackingController@ordertracking')->name('order.tracking');

// all product controller heare
Route::get('admin/product/add','Admin\ProductController@addproduct')->name('add.product');
Route::get('admin/product/all','Admin\ProductController@showproductadminpanel')->name('all.product');
Route::post('admin/store/product','Admin\ProductController@StorProduct')->name('store.product');
Route::get('edit/product/{id}','Admin\ProductController@edit_product');
Route::get('delete/product/{id}','Admin\ProductController@delete_product');
Route::get('inactive/product/{id}','Admin\ProductController@Inactive'); 
Route::get('active/product/{id}','Admin\ProductController@Active');
Route::get('view/product/{id}','Admin\ProductController@ViewProduct');
Route::post('update/product/withoutphoto/{id}','Admin\ProductController@UpdateProductWithoutPhoto');
Route::post('update/product/photo/{id}','Admin\ProductController@UpdateProductPhoto');
Route::get('products/{id}','ProductController@ProductsView');

// get subcategory by ajax
Route::get('get/subcategory/{category_id}','Admin\ProductController@GetSubcat');

//wishlist
Route::get('add/wishlist/{id}','WishlistController@AddWishlist');

// cart controller
Route::get('add/to/cart/{id}','CartController@Addcart');
Route::get('check','CartController@check');
Route::get('product/card','CartController@productcard')->name('product/card');
Route::get('remove/cart/{rowId}','CartController@removecart');
Route::post('update/cartitem','CartController@updatecar')->name('update.cartitem');
Route::get('Checkout','CartController@Checkout')->name('user.checkout');
Route::get('Wishlist','CartController@Wishlist')->name('user.Wishlist');
Route::post('apply/coupon','CartController@applycoupon')->name('apply.coupon');
Route::get('remove/coupon','CartController@removecoupon')->name('coupon.remove');
Route::get('payment/step','CartController@paymentstep')->name('payment.step');
// payment
Route::post('payment/process','PaymentprocessController@paymentprocess')->name('payment.process');
Route::post('user/stripe/charge','PaymentprocessController@stripecharge')->name('stripe.charge');


// all frontent routes
Route::post('store/newslater','FrontContorller@StoreNewslater')->name('store.newslater');
Route::get('product/details/{id}/{product_name}','ProductController@productdetails');
Route::post('/cart/product/add/{id}','ProductController@addcart');


// admin order
Route::get('admin/neworder','Admin\OrderController@neworder')->name('admin.neworder');
Route::get('admin/view/order/{id}','Admin\OrderController@vieworder');
Route::get('admin/payment/accept/{id}','Admin\OrderController@paymentaccept');

Route::get('admin.payment.accepted','Admin\OrderController@paymentaccepted')->name('admin.payment.accepted');
Route::get('admin/delevery/progress/{id}','Admin\OrderController@deleverprogress');

Route::get('admin/progress/order','Admin\OrderController@progressing')->name('admin.progress.order');
Route::get('admin/delevery/done/{id}','Admin\OrderController@deleverydone');

Route::get('admin.delevered.order','Admin\OrderController@delevered')->name('admin.delevered.order');
Route::get('admin/handover/done/{id}','Admin\OrderController@handoverdone');

Route::get('admin.handover.order','Admin\OrderController@handover')->name('admin.handover.order');
Route::get('admin/payment/cancel/{id}','Admin\OrderController@paymentcancel');


Route::get('admin.cancle.order','Admin\OrderController@cancledorder')->name('admin.cancle.order');
Route::get('admin/payment/cancel/{id}','Admin\OrderController@paymentcanceled');

 // product search

Route::post('product.search','FrontContorller@productsearch')->name('product.search');


