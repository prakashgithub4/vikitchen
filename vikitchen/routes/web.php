<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

use App\ProductDetails;
use App\ProductImage;
use App\Productname;




Route::get('auth/google', 'Auth\LoginController@redirectToGoogle');
Route::get('auth/google/callback', 'Auth\LoginController@handleGoogleCallback');

Route::get('auth/facebook', 'Auth\LoginController@redirectToFacebook');
Route::get('auth/facebook/callback', 'Auth\LoginController@handleFacebookCallback');


Route::get('/your-order', function () {
    return 'Your Order Has been placed successfully';
});
Route::get('/email', function () {
  return view('admin.email');
});

Route::post('/payment', function () {
  return 'Your Order Has been placed successfully';
});
Route::get('/clear-cache', function() {
    Artisan::call('config:cache');
    return "Cache is cleared";
});

Route::get('/', 'HomeController@index');
Route::get('/myhome', 'HomeController@myindex');
Route::get('/new', 'HomeController@new2');
Route::get('/product-list/{id}', 'HomeController@offernew');
Route::get('/product-list2/{id}', 'HomeController@category_based');
Route::get('/filter/{id}/{id2}', 'HomeController@searched__refresh');
//Route::post('/filter/{id}/{id2}', 'HomeController@searched_based');
//Route::post('/filter/{id}', 'HomeController@searched__category_based');
Route::get('/filter/{id}', 'HomeController@searched__category_based');
Route::get('/checkpin', 'HomeController@check_pin');
Route::get('/checkcoupon', 'HomeController@coupon');

Route::get('/food-type/{id}/{id2}', 'HomeController@food_based');

Route::get('/brand-type/{id}/{id2}', 'HomeController@brand_based');

Route::get('/payment-status', 'HomeController@success_payment');
Route::get('/signingup', 'HomeController@sign_me_up');
Route::get('/sign-in', 'HomeController@sign_in');
Route::get('/category/{id}', 'HomeController@category_product');
Route::get('/category-name/{id}/{i3}', 'HomeController@category_name');
Route::get('/about-us', 'HomeController@aboutus');
Route::get('/activation', 'HomeController@active_pay');
Route::get('/privacy-policy', 'HomeController@privacy');
Route::get('/return-policy', 'HomeController@return_policy');
Route::get('/terms-of-use', 'HomeController@terms');
Route::get('/our-portfolio', 'HomeController@shipping_policy');
Route::get('/faq', 'HomeController@myfaq');
Route::get('/contact-us', 'HomeController@contact_us');
Route::get('/product-details/{id}/{id2}/{id3}', 'HomeController@product_details_home');
Route::get('/product-details-size/{id}/{id2}/{id3}', 'HomeController@product_details_home_size');
Route::post('/contact-us', 'HomeController@contact_us_post');
Route::get('/cart', 'HomeController@mycart');
Route::get('/update_cart', 'HomeController@update_ajax_cart');
Route::get('/blog-deatils/{id}', 'HomeController@detail_blog');
Route::get('/latest-post', 'HomeController@newpost');
Route::post('/update-cart/{id}', 'HomeController@update_the_cart');
Route::get('/wishlist', 'HomeController@mywish');
Route::get('/remove-wish/{id}', 'HomeController@remove_wish');
Route::post('/checkout', 'HomeController@buy_product');
Route::get('/mail_test', 'HomeController@test_mail');
Route::get('/review/{id}', 'HomeController@myreview');
Route::post('/review/{id}', 'HomeController@myreview_store');

Route::get('/delete-all-cart', 'HomeController@del_my_crt');
Route::get('/checkout', 'HomeController@mycheckout');

Route::get('/my-profile',['middleware' => 'auth', 'uses' => 'HomeController@my_profile']);
Route::get('/profile-update',['middleware' => 'auth', 'uses' => 'HomeController@update_profile']);
Route::post('/profile-update',['middleware' => 'auth', 'uses' => 'HomeController@update_my_profile']);
Route::get('/change-my-password',['middleware' => 'auth', 'uses' => 'HomeController@change_my_password']);
Route::post('/change-my-password',['middleware' => 'auth', 'uses' => 'HomeController@update_my_password']);

Route::get('/order-history',['middleware' => 'auth', 'uses' => 'HomeController@my_order_history']);
Route::get('/return-or-refund/{id}',['middleware' => 'auth', 'uses' => 'HomeController@return_a_product']);
Route::post('/return-or-refund/{id}',['middleware' => 'auth', 'uses' => 'HomeController@return_it_finally']);
Route::get('/return-or-refund/{id}/{id2}/{id3}',['middleware' => 'auth', 'uses' => 'HomeController@return_my_product']);

Route::get('/remove-cart/{id}', 'HomeController@remove_my_cart');
Route::get('/edit-cart/{id}', 'HomeController@edit_my_cart');

Route::post('/searched-products', 'HomeController@searching_product');
Route::post('/adding-cart', 'HomeController@adding_to_cart');
Route::post('/enquiry', 'HomeController@enquiry_post');
//Route::post('/product', 'CompaniesController@create');
Route::get('/productlist', 'CompaniesController@show');
Route::post('/seeproducts', 'CompaniesController@list');
//Route::get('admin/slider', 'SlderContoller@index');

Route::get('/mypayment', ['middleware' => 'auth', 'uses' => 'HomeController@payment']);
Route::get('generate-pdf','HomeController@generatePDF');
Auth::routes();
//Route::get('/product', 'CompaniesController@index');
// Route::get('sendmail', function () {

// 	$user = \App\User::find(1);

//     Mail::to($user->email)->send(new \App\Mail\mymail($user));



//     dd("Email is Send.");

// });

//Route::get('sendtest', 'HomeController@sendMail');
Route::get('sendtest', function () {

    $user = \App\User::find(1);
  //  return $user;
  //$token="hello";\
  $token = [
    'email' =>'kayal.sufian.abu@gmail.com',
    'subject' => 'whatever',
    'body'    => 'mybody'
];

    $thisemail='abu.exprolab@gmail.com';

    Mail::to($thisemail)->send(new \App\Mail\yourmail($token));



    dd("Email is Send.");

});
Route::group(['middleware' => ['auth','admin']], function() {
    // uses ['auth','admin'] middleware plus all middleware from $middlewareGroups['web']


    Route::get('/admin',  ['middleware' => ['auth','admin'], 'uses' => 'SlderContoller@block']);


});

Route::get('/payment','PaytmController@pay');
Route::post('/payment/status', 'PaytmController@paymentCallback');
//order details
  Route::get('admin/returnorrefund', ['middleware' => ['auth','admin'], 'uses' => 'SlderContoller@return_order'] );
  Route::get('admin/edit_refund/{id}', ['middleware' => ['auth','admin'], 'uses' => 'SlderContoller@returnorrefund'] );
  Route::post('admin/edit_refund/{id}', ['middleware' => ['auth','admin'], 'uses' => 'SlderContoller@update_return_order'] );

  Route::get('admin/edit_replace/{id}', ['middleware' => ['auth','admin'], 'uses' => 'SlderContoller@edit_replace_order'] );
  Route::post('admin/edit_replace/{id}', ['middleware' => ['auth','admin'], 'uses' => 'SlderContoller@update_replace_order'] );
  Route::get('admin/edit_replace_date/{id}', ['middleware' => ['auth','admin'], 'uses' => 'SlderContoller@edit_replace_date'] );
  Route::post('admin/edit_replace_date/{id}', ['middleware' => ['auth','admin'], 'uses' => 'SlderContoller@update_replace_date'] );

  Route::get('admin/pending-orders', ['middleware' => ['auth','admin'], 'uses' => 'SlderContoller@pending_order'] );
  Route::get('admin/approve-orders/{id}', ['middleware' => ['auth','admin'], 'uses' => 'SlderContoller@approve_order'] );
  Route::get('admin/all-approved-orders', ['middleware' => ['auth','admin'], 'uses' => 'SlderContoller@all_order'] );
  Route::get('admin/approved-orders-by-status/{id}', ['middleware' => ['auth','admin'], 'uses' => 'SlderContoller@all_order_by_stat'] );
  Route::get('admin/change-order-status/{id}', ['middleware' => ['auth','admin'], 'uses' => 'SlderContoller@change_order_status'] );
  Route::post('admin/change-order-status/{id}', ['middleware' => ['auth','admin'], 'uses' => 'SlderContoller@change_order'] );
  Route::get('admin/send-to-courier/{id}', ['middleware' => ['auth','admin'], 'uses' => 'SlderContoller@select_courier'] );
  Route::post('admin/send-to-courier/{id}', ['middleware' => ['auth','admin'], 'uses' => 'SlderContoller@mail_to_courier'] );
  Route::get('admin/generate-invoice/{id}', ['middleware' => ['auth','admin'], 'uses' => 'SlderContoller@generatePDF'] );
//Route::get('/home',  ['middleware' => ['auth','admin'], 'uses' => 'CompaniesController@index']);
Auth::routes();
Route::get('/product', ['middleware' => ['auth','admin'], 'uses' => 'CompaniesController@create']);
Route::get('admin/pincode', ['middleware' => ['auth','admin'], 'uses' => 'SlderContoller@create_pin']);
Route::post('admin/pincode', ['middleware' => ['auth','admin'], 'uses' => 'SlderContoller@store_pin']);
Route::get('admin/pincode-list', ['middleware' => ['auth','admin'], 'uses' => 'SlderContoller@pin_list']);

Route::get('admin/slider', ['middleware' => ['auth','admin'], 'uses' => 'SlderContoller@index'] );
Route::get('admin/sledt/{id}', ['middleware' => ['auth','admin'], 'uses' => 'SlderContoller@editsld'] );
Route::post('admin/slupdt', ['middleware' =>['auth','admin'], 'uses' => 'SlderContoller@sldupdate'] );
Route::get('admin/addslide', ['middleware' => ['auth','admin'], 'uses' => 'SlderContoller@create'] );

Route::get('admin/blog-list', ['middleware' => ['auth','admin'], 'uses' => 'SlderContoller@blog_tab'] );
Route::get('admin/add-pin', ['middleware' => ['auth','admin'], 'uses' => 'SlderContoller@adding_blog'] );
Route::post('admin/add-pin', ['middleware' => ['auth','admin'], 'uses' => 'SlderContoller@store_blog'] );

Route::get('admin/add-coupon', ['middleware' => ['auth','admin'], 'uses' => 'SlderContoller@adding_coupon'] );
Route::post('admin/add-coupon', ['middleware' => ['auth','admin'], 'uses' => 'SlderContoller@storing_coupon'] );
Route::get('admin/coupon-delete/{id}', ['middleware' => ['auth','admin'], 'uses' => 'SlderContoller@coupon_del'] );
Route::get('admin/coupon-edit/{id}', ['middleware' => ['auth','admin'], 'uses' => 'SlderContoller@edit_coupon'] );
Route::post('admin/coupon-edit/{id}', ['middleware' => ['auth','admin'], 'uses' => 'SlderContoller@update_coupon'] );

Route::get('admin/pin-edit/{id}', ['middleware' => ['auth','admin'], 'uses' => 'SlderContoller@edit_blog'] );
Route::post('admin/pin-edit/{id}', ['middleware' => ['auth','admin'], 'uses' => 'SlderContoller@update_blog'] );
Route::get('admin/pin-delete/{id}', ['middleware' => ['auth','admin'], 'uses' => 'SlderContoller@blog_delete'] );


Route::post('admin/addslide', ['middleware' => ['auth','admin'], 'uses' => 'SlderContoller@store'] );
Route::get('admin/pswchange', ['middleware' => ['auth','admin'], 'uses' => 'SlderContoller@pschange'] );
Route::post('admin/pswchange', ['middleware' => ['auth','admin'], 'uses' => 'SlderContoller@pschangeadd'] );
Route::get('admin/sldlt/{id}', ['middleware' => ['auth','admin'], 'uses' => 'SlderContoller@slidedlt'] );
Route::get('admin/about-us', ['middleware' =>['auth','admin'], 'uses' => 'SlderContoller@about'] );
Route::post('admin/about-us', ['middleware' => ['auth','admin'], 'uses' => 'SlderContoller@about_save'] );
//offer3
Route::get('admin/offer3', ['middleware' =>['auth','admin'], 'uses' => 'SlderContoller@offer3list'] );
Route::get('admin/off3edit/{id}', ['middleware' => ['auth','admin'], 'uses' => 'SlderContoller@offeredit'] );
//Route::post('admin/off3edit/{id}', ['middleware' => ['auth','admin'], 'uses' => 'SlderContoller@offer3updt'] );
Route::post('admin/off3edit/{id}', ['middleware' => ['auth','admin'], 'uses' => 'SlderContoller@offer3updt'] );
//offer 2
Route::get('admin/offer2', ['middleware' => ['auth','admin'], 'uses' => 'SlderContoller@offer2list'] );
Route::get('admin/off2edit/{id}', ['middleware' =>['auth','admin'], 'uses' => 'SlderContoller@offer2edit'] );
//Route::post('admin/off2edit/{id}', ['middleware' => ['auth','admin'], 'uses' => 'SlderContoller@offer2updt'] );
Route::post('admin/off2edit/{id}', ['middleware' => ['auth','admin'], 'uses' => 'SlderContoller@offer2updt'] );
//offer 4
Route::get('admin/offer4', ['middleware' => ['auth','admin'], 'uses' => 'SlderContoller@offer4list'] );
Route::get('admin/off4edit/{id}', ['middleware' =>['auth','admin'], 'uses' => 'SlderContoller@offer4edit'] );
//Route::post('admin/off4edit/{id}', ['middleware' => ['auth','admin'], 'uses' => 'SlderContoller@offer4updt'] );
Route::post('admin/off4edit/{id}', ['middleware' =>['auth','admin'], 'uses' => 'SlderContoller@offer4updt'] );
//courier
Route::get('admin/courier', ['middleware' =>['auth','admin'], 'uses' => 'SlderContoller@courierlist'] );
Route::get('admin/addcourier', ['middleware' =>['auth','admin'], 'uses' => 'SlderContoller@addcourier'] );
Route::post('admin/addcourier', ['middleware' =>['auth','admin'], 'uses' => 'SlderContoller@storecourier'] );
Route::get('admin/courieredit/{id}', ['middleware' =>['auth','admin'], 'uses' => 'SlderContoller@couriereditc'] );
Route::post('admin/courieredit/{id}', ['middleware' => ['auth','admin'], 'uses' => 'SlderContoller@courierupdt'] );
Route::get('admin/deletecourier/{id}', ['middleware' =>['auth','admin'], 'uses' => 'SlderContoller@delcourier'] );

//products-category
Route::get('admin/prcatlist', ['middleware' => ['auth','admin'], 'uses' => 'SlderContoller@product_category_list'] );
Route::get('admin/catadd', ['middleware' => ['auth','admin'], 'uses' => 'SlderContoller@product_category_add'] );
Route::post('admin/catadd', ['middleware' => ['auth','admin'], 'uses' => 'SlderContoller@product_category_store'] );
Route::get('admin/deletecat/{id}', ['middleware' =>['auth','admin'], 'uses' => 'SlderContoller@catdel'] );
Route::get('admin/catedit/{id}', ['middleware' =>['auth','admin'], 'uses' => 'SlderContoller@editcat'] );
Route::post('admin/catedit/{id}', ['middleware' =>['auth','admin'], 'uses' => 'SlderContoller@updtcat'] );


Route::get('admin/pinedit/{id}', ['middleware' =>['auth','admin'], 'uses' => 'SlderContoller@edit_pin'] );
Route::post('admin/pinedit/{id}', ['middleware' =>['auth','admin'], 'uses' => 'SlderContoller@update_pin'] );
Route::get('admin/deletepin/{id}', ['middleware' =>['auth','admin'], 'uses' => 'SlderContoller@delpin'] );

//Brands

Route::get('admin/brand-list', ['middleware' => ['auth','admin'], 'uses' => 'SlderContoller@brand_list'] );
Route::get('admin/brand_add', ['middleware' => ['auth','admin'], 'uses' => 'SlderContoller@add_your_brand'] );
Route::post('admin/brand_add', ['middleware' => ['auth','admin'], 'uses' => 'SlderContoller@brand_store'] );
Route::get('admin/brand_updt/{id}', ['middleware' =>['auth','admin'], 'uses' => 'SlderContoller@edit_brand'] );
Route::post('admin/brand_updt/{id}', ['middleware' =>['auth','admin'], 'uses' => 'SlderContoller@update_brand'] );
Route::get('admin/delete_brand/{id}', ['middleware' =>['auth','admin'], 'uses' => 'SlderContoller@brandel'] );
//product name list
Route::get('admin/prnamelist', ['middleware' =>['auth','admin'], 'uses' => 'SlderContoller@product_name_list'] );
Route::get('admin/pronameadd', ['middleware' => ['auth','admin'], 'uses' => 'SlderContoller@product_name_add'] );
Route::post('admin/pronameadd', ['middleware' =>['auth','admin'], 'uses' => 'SlderContoller@product_name_store'] );
Route::get('admin/deleteprname/{id}', ['middleware' =>['auth','admin'], 'uses' => 'SlderContoller@product_name_delete'] );
Route::get('admin/prnamedit/{id}', ['middleware' =>['auth','admin'], 'uses' => 'SlderContoller@edit_product_name'] );
Route::post('admin/prnamedit/{id}', ['middleware' => ['auth','admin'], 'uses' => 'SlderContoller@updtprname'] );
//Product Size list
Route::get('admin/prsize', ['middleware' => ['auth','admin'], 'uses' => 'SlderContoller@product_size_list'] );
Route::get('admin/prsizeadd', ['middleware' =>  ['auth','admin'], 'uses' => 'SlderContoller@product_size_add'] );
Route::post('admin/prsizeadd', ['middleware' =>  ['auth','admin'], 'uses' => 'SlderContoller@product_size_store'] );
Route::get('admin/prsizedit/{id}', ['middleware' =>['auth','admin'], 'uses' => 'SlderContoller@product_size_edit'] );
Route::post('admin/prsizedit/{id}', ['middleware' =>['auth','admin'], 'uses' => 'SlderContoller@product_size_update'] );
Route::get('admin/deleteprsize/{id}', ['middleware' =>['auth','admin'], 'uses' => 'SlderContoller@product_size_delete'] );
//Product Color
Route::get('admin/prcolor', ['middleware' =>['auth','admin'], 'uses' => 'SlderContoller@product_color_list'] );
Route::get('admin/prcoloradd', ['middleware' => ['auth','admin'], 'uses' => 'SlderContoller@product_color_add'] );
Route::post('admin/prcoloradd', ['middleware' => ['auth','admin'], 'uses' => 'SlderContoller@product_color_sotre'] );
Route::get('admin/prcolordit/{id}', ['middleware' => ['auth','admin'], 'uses' => 'SlderContoller@product_color_edit'] );
Route::post('admin/prcolordit/{id}', ['middleware' => ['auth','admin'], 'uses' => 'SlderContoller@product_color_update'] );
Route::get('admin/deleteprcolor/{id}', ['middleware' => ['auth','admin'], 'uses' => 'SlderContoller@product_product_details_deletecolor_delete'] );
//Product Details
Route::get('admin/prdetials', ['middleware' =>['auth','admin'], 'uses' => 'SlderContoller@product_details_list'] );
Route::get('admin/addprodetails', ['middleware' => ['auth','admin'], 'uses' => 'SlderContoller@product_details_add'] );
Route::post('admin/addprodetails', ['middleware' => ['auth','admin'], 'uses' => 'SlderContoller@product_details_store'] );
Route::get('admin/predit/{id}', ['middleware' => ['auth','admin'], 'uses' => 'SlderContoller@product_details_edit'] );
Route::post('admin/predit/{id}', ['middleware' => ['auth','admin'], 'uses' => 'SlderContoller@product_details_update'] );
Route::get('admin/prdelete/{id}', ['middleware' => ['auth','admin'], 'uses' => 'SlderContoller@product_details_delete'] );
// Product details color list
Route::get('admin/prcolorlist/{id}', ['middleware' => ['auth','admin'], 'uses' => 'SlderContoller@product_details_color_list'] );
Route::get('admin/prd_coloradd/{id}', ['middleware' => ['auth','admin'], 'uses' => 'SlderContoller@product_details_color_add'] );
Route::get('admin/prcolorlist/{id}', ['middleware' => ['auth','admin'], 'uses' => 'SlderContoller@product_details_color_list'] );
Route::post('admin/prd_coloradd/{id}', ['middleware' => ['auth','admin'], 'uses' => 'SlderContoller@product_details_color_store'] );
Route::post('admin/prcolorlist/{id}', ['middleware' => ['auth','admin'], 'uses' => 'SlderContoller@product_details_color_store'] );
Route::get('admin/prdetails_delete/{id}/{id2}', ['middleware' => ['auth','admin'], 'uses' => 'SlderContoller@product_details_color_delete'] );
Route::get('admin/set_default_color/{id}/{id2}/{id3}', ['middleware' => ['auth','admin'], 'uses' => 'SlderContoller@product_details_color_default'] );
Route::get('admin/prdetails_gallerylist/{id}/{id2}/{id3}', ['middleware' => ['auth','admin'], 'uses' => 'SlderContoller@product_details_image_list'] );
Route::get('admin/prdetails_gallery_add/{id}/{id2}/{id3}', ['middleware' => ['auth','admin'], 'uses' => 'SlderContoller@product_details_image_add'] );
//Route::post('admin/prdetails_gallery_add/{id}/{id2}', ['middleware' => ['auth','admin'], 'uses' => 'SlderContoller@product_details_image_store'] );
//prsize
Route::get('admin/prsizelist/{id}', ['middleware' => ['auth','admin'], 'uses' => 'SlderContoller@product_details_size_list'] );
Route::get('admin/prsize_delete/{id}/{id2}', ['middleware' => ['auth','admin'], 'uses' => 'SlderContoller@product_details_size_delete'] );
Route::get('admin/prd_size_add/{id}', ['middleware' => ['auth','admin'], 'uses' => 'SlderContoller@product_details_size_add'] );
Route::post('admin/prd_size_add/{id}', ['middleware' => ['auth','admin'], 'uses' => 'SlderContoller@product_details_size_store'] );
Route::get('admin/prdetails_stock_add/{id}/{id2}/{id3}', ['middleware' => ['auth','admin'], 'uses' => 'SlderContoller@product_details_size_stock'] );
Route::post('admin/prdetails_stock_add/{id}/{id2}/{id3}', ['middleware' => ['auth','admin'], 'uses' => 'SlderContoller@product_details_size_stock_store'] );
Route::get('admin/prdetails_stock_sub/{id}/{id2}/{id3}', ['middleware' => ['auth','admin'], 'uses' => 'SlderContoller@product_details_size_stock_rm'] );
Route::post('admin/prdetails_stock_sub/{id}/{id2}/{id3}', ['middleware' => ['auth','admin'], 'uses' => 'SlderContoller@product_details_size_stock_remove'] );
Route::get('admin/prsetprice/{id}/{id2}', ['middleware' => ['auth','admin'], 'uses' => 'SlderContoller@product_details_set_price'] );
Route::post('admin/prsetprice/{id}/{id2}', ['middleware' => ['auth','admin'], 'uses' => 'SlderContoller@product_details_set_price_store'] );
//
Route::post('admin/prdetails_gallerylist/{id}/{id2}/{id3}', ['middleware' => ['auth','admin'], 'uses' => 'SlderContoller@product_details_image_store'] );
Route::get('admin/prdetails_img_delete/{id}/{id2}/{id3}', ['middleware' => ['auth','admin'], 'uses' => 'SlderContoller@delete_product_image_details'] );
Route::get('admin/set_default_product_image/{id}/{id2}/{id3}/{id4}', ['middleware' => ['auth','admin'], 'uses' => 'SlderContoller@product_image_details_set'] );


Route::get('admin/pincode_list/', ['middleware' => ['auth','admin'], 'uses' => 'SlderContoller@pin_lists'] );
Route::get('admin/coupon-list/', ['middleware' => ['auth','admin'], 'uses' => 'SlderContoller@coupon_lists'] );

Route::get('admin/change_demo/{id}', ['middleware' => ['auth','admin'], 'uses' => 'SlderContoller@change_demo_size'] );
Route::post('admin/change_demo/{id}', ['middleware' => ['auth','admin'], 'uses' => 'SlderContoller@change_demo_updt'] );



//ajax
Route::get('/test', function(){
    $product=ProductDetails::all();
    //return $product;
    foreach($product as  $pr){



    $productname= ProductImage::where('product_id',  1456)->get();


if($productname) {
     echo 'The array is not empty';
}
else {
     echo 'The array is empty';
}


    }


});

Route::get('admin/ajaxdata', ['middleware' => ['auth','admin'], 'uses' => 'SlderContoller@ajafetch'] );

Route::get('admin/menudata', ['middleware' => ['auth','admin'], 'uses' => 'SlderContoller@menufetch'] );



//
Route::get('admin/company-policy', ['middleware' => ['auth','admin'], 'uses' => 'SlderContoller@company_policy'] );
Route::post('admin/company-policy', ['middleware' => ['auth','admin'], 'uses' => 'SlderContoller@company_policy_update'] );
Route::get('admin/privacy-policy', ['middleware' => ['auth','admin'], 'uses' => 'SlderContoller@privacy_policy'] );
Route::post('admin/privacy-policy', ['middleware' => ['auth','admin'], 'uses' => 'SlderContoller@privacy_policy_update'] );
Route::get('admin/faq', ['middleware' => ['auth','admin'], 'uses' => 'SlderContoller@cencellation_policy'] );
Route::post('admin/faq', ['middleware' => ['auth','admin'], 'uses' => 'SlderContoller@cencellation_policy_update'] );

Route::get('admin/our-portfolio', ['middleware' => ['auth','admin'], 'uses' => 'SlderContoller@shippingpolicy'] );
Route::post('admin/our-portfolio', ['middleware' => ['auth','admin'], 'uses' => 'SlderContoller@shippingpolicy_update'] );


Route::get('/signout', 'SlderContoller@logoff');
Route::get('/logmeout', 'HomeController@logoff');

//Route::post('/reset', 'ResetPasswordController@passreset');
//Route::post('password/reset', 'ResetPasswordController@reset');
Auth::routes();

Route::get('/home', 'HomeController@myindex')->name('home');

Auth::routes();
