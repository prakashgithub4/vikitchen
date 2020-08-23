<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Request;
use App\Slider;
use App\Offer;
use App\ProductDetails;
use App\Mail\mymail;
use App\About;
use App\Category;
use App\ProductCart;
use App\Wishlist;
use App\ShippingAddress;
use App\Invoice;
use App\ProductDetailSize;
use App\Productname;
use App\Reviews;
use App\User;
use App\Blog;
use App\Pin;
use App\BrandProduct;
use App\Promocode;
use App\ReturnProduct;
use App\Review;
use GuzzleHttp\Psr7\Request as Psr7Request;
use Illuminate\Support\Facades\Auth;

use Bhavinjr\Eazypay\Eazypay;

// use App\Mail\mymail;
use Mail;
use PDF;


class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    // public function __construct()
    // {
    //     $this->middleware('auth');
    // }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      //  session_start();
      // $slider= Slider::all();
      // $category= Category::all();
      // $offer3= Offer::where('cat',3)->get();
      // $offer2= Offer::where('cat',2)->get();
      // $product= ProductDetails::all();
       // return $product;

//         //  return $slider;
//         foreach($product as $pr){

//             $size =ProductDetailSize::where('product_id',$pr->product_id)->where('default_price',1)->get();
//             echo   $size;}


// exit;
//        return view('frontend.index')->with('slider', $slider)->with('offer3', $offer3)->with('offer2', $offer2)->with('product', $product)->with('category', $category);
$user = Auth::user();
return view('frontend.index',compact('user'));
    }

    public function del_my_crt(){
        $web_user_id =@auth::user()->id ;
        session_start();
    //    $browser_id= session_id();
    //    return $browser_id;
        //$webcart=\App\ProductCart::where('web_user_id',$web_user_id)->where('invoice_no_id',0)->get();

        if($web_user_id!="")
        {
           $cart=\App\ProductCart::where('web_user_id',$web_user_id)->where('invoice_no_id',0)->get();
           //return $cart;
           foreach($cart as $c){
            $newcart=\App\ProductCart::find($c->product_cart_id);
            $newcart->delete();

        }

        }
        else
        {
           $cart=\App\ProductCart::where('browser_id',session_id())->where('web_user_id',0)->get();
          // return $cart;
            foreach($cart as $c){
                $newcart=\App\ProductCart::find($c->product_cart_id);


            }



        }
        session()->flash('message', 'Your Cart Is Empty Now!');
        session()->flash('alert-class', 'alert-warning');
        return redirect('/cart');


    }
    public function myindex()
    {
        session_start();
       $slider= Slider::all();
       $category= Category::all();
       $offer3= Offer::where('cat',3)->get();
       $offer2= Offer::where('cat',2)->get();
       $product= ProductDetails::all();
       // return $product;


       @$web_user_id =  @auth::user()->id ;

       if($web_user_id!=0){
        @$cart=ProductCart::where('web_user_id',0)->where('browser_id',session_id())->update(['web_user_id'=>$web_user_id]);
        return redirect('/');

    }

}
public function check_pin(Request $request){

    $pin= $request->query('pin');
    //.echo $pin;
    $checkpin= Pin::where('pin',$pin)->get();
    if(count($checkpin)>0){
        echo 1;
    }
    else{
        echo 0;
    }



}
public function coupon(Request $request){

    $coupon= $request->query('pin');
    $tott= $request->query('tott');

  //  $coupon= 'BIGDEALS100';
    //$tott= 600;
    //return $tott;
    //echo $coupon; tott
    $checkcoupon= Promocode::where('name',$coupon)->get();
    //return $checkcoupon[0]->max_discount;
    if(count($checkcoupon)>0){
        $discount=($checkcoupon[0]->max_discount/100)*$tott;
        if($discount>=$checkcoupon[0]->amount){
            $maxdiscount=$tott-$checkcoupon[0]->amount;
            echo $maxdiscount;
           // echo response()->json($maxdiscount);
        }
        else {
            $maxdiscount=$tott-$discount;
           echo $maxdiscount;
           //echo response()->json($maxdiscount);
        }
    }
        else{
return  0;
        }

}
public function update_ajax_cart(Request $request){

    $cat_id= $request->query('cat_id');
 $qty= $request->query('qty');
    // echo $qty;
   $cartupdate=ProductCart::findorFail($cat_id);
   $cartupdate->qty=$qty;
   $cartupdate->save();
    echo 1;

}
    public function my_order_history(){

	session_start();
        return view('frontend.order_history');

    }
    public function detail_blog($id){
        session_start();
        $blog=Blog::findOrFail($id);

        return view('frontend.blogdetails')->with('blog', $blog);
    }
    public function newpost(){
        session_start();
        $blog=Blog::all();
        $mblog= $blog->first();
        return view('frontend.blogdetails_new')->with('blog', $mblog);
        // $mblog= $blog->first();
        // return $mblog;

    }
    public function myreview($id){

        session_start();
        return view('frontend.review')->with('id',$id);

    }
    public function myreview_store(Request $request,$id){

        $update_review= Review::where('product_id',$id)->where('web_user_id',auth::user()->id)->get();
        if(count($update_review)>0){

            $update_review->summury = 'nil';
            $update_review->star = $request->get('star');
            $update_review->review = $request->get('review');
            $update_review->review_by = auth::user()->name;
            $update_review->web_user_id = auth::user()->id;
            $update_review->product_id = $id;
            $update_review->review_date = date('Y-m-d');
            $update_review->save();
            return redirect('/product-details/'.$id);


        }
        else{
        $review= new Review;

       // return $request;
    //  $auth_id= auth::user()->id;

        $review->summury = 'nil';
        $review->star = $request->get('star');
        $review->review = $request->get('review');
        $review->review_by = auth::user()->name;
        $review->web_user_id = auth::user()->id;
        $review->product_id = $id;
        $review->review_date = date('Y-m-d');
        $review->save();
        return redirect('/product-details/'.$id);
        }


    }
    public function return_a_product($return_id){
       $deid= decrypt($return_id);
        //$deid= ($id);
        //return $deid;
        $web_user_id =  @auth::user()->id ;
        $invoice= Invoice::where('invoice_no_id',$deid)->where('web_user_id',$web_user_id)->get();
        $cart= ProductCart::where('invoice_no_id',$deid)->where('web_user_id',$web_user_id)->get();
        //return $product_cart;
        $return = ReturnProduct::where('invoice_no_id', $deid)->get();


        return view('frontend.cancel_this_product')->with('invoice', $invoice)->with('cart',$cart)->with('return', $return)->with('retur_id', $return_id);
    }
    public function searching_product(Request $request){
        session_start();
        $category_id = $request->get('category_id');
        $search = $request->get('search');
       if($category_id==0){
           @$product= ProductDetails::where('product_name', 'like', '%' .$search. '%')->get();
           if(count( $product)>0){
               //return $product;.

        return view('frontend.searched')->with('product', $product);
           }
            else if(count( $product)==''){
            $product_name= Category::where('product_category', 'like', '%' .$search. '%')->get();
            @$product= ProductDetails::where('product_category_id', $product_name[0]->product_category_id)->get();
            return view('frontend.searched')->with('product', $product);
           }


       }
       else {
        @$product= ProductDetails::where('product_name', 'like', '%' .$search. '%')->where('product_category_id',$category_id)->get();
        return view('frontend.searched')->with('product', $product);

       }

    }
    public function generatePDF()

    {

       $data = ['title' => 'Welcome to HDTuto.com'];

       $pdf = PDF::loadView('frontend.myPDF', $data);


     return $pdf->stream();
    // return PDF::loadView('frontend.myPDF', $data)->setPaper('a4', 'landscape')->setWarnings(false)->save('myfile.pdf');
        //return $pdf->download('hdtuto.pdf');
       // $pdf->setWarnings(false)->save('myfile.pdf');

    }

    public function return_my_product($return_id,$id1,$id3){
        //return $id3;
        $deid= decrypt($return_id);

        $web_user_id =  @auth::user()->id ;
      ///  $returnproduct= new ReturnProduct;
       // return $id3;
        $invoice= Invoice::where('invoice_no_id',$deid)->where('web_user_id',$web_user_id)->get();
        $cart= ProductCart::where('invoice_no_id',$deid)->where('web_user_id',$web_user_id)->get();
        //return $product_cart;
        $procart= ProductCart::findOrFail($id1);
       // return $myinvoice;
        $procart->cancel=$id3;
        $procart->save();
        return  Redirect()->back();

        //$return = ReturnProduct::where('invoice_no_id', $deid)->get();


       // return view('frontend.cancel_product')->with('invoice', $invoice)->with('cart',$cart)->with('return', $return)->with('retur_id', $return_id);
    }

    public function return_it_finally(Request $request, $return_id){
       // return $request;
        $deid= decrypt($return_id);
        $web_user_id =  @auth::user()->id ;
        $return_product = new ReturnProduct;
        $refund_mode = $request->get('ddl_refund_mode');

        $web_user_id= $web_user_id;
        $invoice_no_id= $deid;

        $description = $request->get('txt_description');
        $bank_name = $request->get('txt_bank_name');
        $branch_name = $request->get('txt_branch_name');
        $amount = $request->get('total_amount');
        $ifsc_code = $request->get('txt_ifsc_code');
        $acc_holder_name = $request->get('txt_acc_name');
        $acc_no = $request->get('txt_acc_no');

        $invoice= Invoice::findOrFail($invoice_no_id);
            //return $invoice;
        $invoice->cancel=1;
        $invoice->save();

        if($refund_mode==1){
        $return_product->refund_mode=1;
        $return_product->web_user_id=$web_user_id;
        $return_product->invoice_no_id=$invoice_no_id;
        $return_product->description=$description;
        $return_product->bank_name=$bank_name;
        $return_product->branch_name=$branch_name;
        $return_product->amount=$amount;
        $return_product->ifsc_code=$ifsc_code;
        $return_product->acc_holder_name=$acc_holder_name;
        $return_product->acc_no=$acc_no;
        $return_product->return_date=date('Y-m-d');
        $return_product->save();

        }
        else if($refund_mode==2){

        $return_product->refund_mode=2;
        $return_product->web_user_id=$web_user_id;
        $return_product->invoice_no_id=$invoice_no_id;
        $return_product->amount=$amount;
        $return_product->description=$description;
        $return_product->return_date=date('Y-m-d');
        $return_product->save();




        }




        return redirect('/order-history');


    }
    public function allproduct(){
        $category= Category::all();
        $product= ProductDetails::all();
        return view('frontend.products')->with('product', $product)->with('category', $category);
    }
    public function aboutus(){
        //return 1;
        session_start();
        $about= About::where('about_us_id',2)->get();
    //return $about;
        return view('frontend.about')->with('about',$about);
    }
    public function sendMail(){
        $data['title'] = "Test it from HDTutu.com";

        mymail::send('admin.email', $data, function($message) {

            $message->to('kayalsarafat344@gmail.com', 'Receiver Name')

                    ->subject('HDTuto.com Mail');

        });

        dd("Mail Sent successfully");
    }

public function sign_in(){

    session_start();
    return view('frontend.login');
}

public function logoff(){
    auth()->logout();
    return redirect('/');
}

public function new2(){
    session_start();
    return view('frontend.new2');
}

public function offernew($id){
   session_start();

    $product= ProductDetails::where('product_name_id',$id)->paginate(10);
    //eturn $product;
    $name= Productname::where('product_name_id',$id)->get();
    $cat_id= $name[0]->product_category_id;
    // if( sizeof($product) > 0){
    //     return 1;
    // }else {
    //     return 2;
    // }
    $catm= Category::where('product_category_id',$cat_id)->get();
    $menu_id= $catm[0]->menu_id;
    return view('frontend.productlist')->with('product',$product)->with('cat_id',$cat_id)->with('name_id',$id)->with('menu_id',$menu_id);
}
public function food_based($id,$id2){
    session_start();
    $product= ProductDetails::where('food_type1',$id)->get();
   // return $product;
    return view('frontend.product-list')->with('product',$product)->with('cat_id',$id2);


}
public function searched_based(Request $request, $id,$id2){
//return 1;
 $inprice = $request->get('inprice');
 $fiprice = $request->get('fiprice');
   $color = $request->get('color');
$size = $request->get('size');
$menu_id = $request->get('menu_id');
//return $size;

//$product= ProductDetailSize::where('product_colour_id',$color)->get();
//return $color;
if($inprice!='' && $fiprice!='' && $color=='' && $size==''  ){
$product= ProductDetailSize::whereBetween('actual_price', [$inprice, $fiprice])->where('menu_id',$menu_id)->where('product_name_id',$id)->where('product_category_id',$id2)->paginate(10);
//return $product;
//return 1;
if(count($product)>0){
return view('frontend.searched')->with('product',$product)->with('cat_id',$id2)->with('name_id',$id)->with('inprice',$inprice)->with('fiprice',$fiprice)->with('colorp',$color)->with('sizep',$size)->with('menu_id',$menu_id);
}
else{
    return view('frontend.searched')->with('product',$product)->with('cat_id',$id2)->with('name_id',$id)->with('inprice',$inprice)->with('fiprice',$fiprice)->with('colorp',$color)->with('sizep',$size)->with('menu_id',$menu_id);
    }
}
else if($inprice!='' && $fiprice!='' && $color!='' && $size!=''){
    $product= ProductDetailSize::whereBetween('actual_price', [$inprice, $fiprice])->where('menu_id',$menu_id)->where('product_name_id',$id)->where('product_category_id',$id2)->where('product_size_id',$size)->where('product_colour_id',$color)->paginate(10);
    //return 2;
  //  return $product;
    if(count($product)>0){
    return view('frontend.searched')->with('product',$product)->with('cat_id',$id2)->with('name_id',$id)->with('inprice',$inprice)->with('fiprice',$fiprice)->with('colorp',$color)->with('sizep',$size)->with('menu_id',$menu_id);
    }
    else{
        return view('frontend.searched')->with('product',$product)->with('cat_id',$id2)->with('name_id',$id)->with('inprice',$inprice)->with('fiprice',$fiprice)->with('colorp',$color)->with('sizep',$size)->with('menu_id',$menu_id);
        }
}
else if($inprice=='' && $fiprice=='' && $color!='' && $size==''){
    $product= ProductDetailSize::where('menu_id',$menu_id)->where('product_name_id',$id)->where('product_category_id',$id2)->where('product_colour_id',$color)->paginate(10);
  //return $product;
    if(count($product)>0){
        return view('frontend.searched')->with('product',$product)->with('cat_id',$id2)->with('name_id',$id)->with('inprice',$inprice)->with('fiprice',$fiprice)->with('colorp',$color)->with('sizep',$size)->with('menu_id',$menu_id);
        }
        else{
            return view('frontend.searched')->with('product',$product)->with('cat_id',$id2)->with('name_id',$id)->with('inprice',$inprice)->with('fiprice',$fiprice)->with('colorp',$color)->with('sizep',$size)->with('menu_id',$menu_id);
            }
}
else if($inprice=='' && $fiprice=='' && $color=='' && $size!=''){
    $product= ProductDetailSize::where('menu_id',$menu_id)->where('product_name_id',$id)->where('product_category_id',$id2)->where('product_size_id',$size)->paginate(10);
   // return $product;
    if(count($product)>0){
        return view('frontend.searched')->with('product',$product)->with('cat_id',$id2)->with('name_id',$id)->with('inprice',$inprice)->with('fiprice',$fiprice)->with('colorp',$color)->with('sizep',$size)->with('menu_id',$menu_id);
        }
        else{
            return view('frontend.searched')->with('product',$product)->with('cat_id',$id2)->with('name_id',$id)->with('inprice',$inprice)->with('fiprice',$fiprice)->with('colorp',$color)->with('sizep',$size)->with('menu_id',$menu_id);
            }
}
else if($inprice!='' && $fiprice!='' && $color!='' && $size==''){
    $product= ProductDetailSize::whereBetween('actual_price', [$inprice, $fiprice])->where('menu_id',$menu_id)->where('product_name_id',$id)->where('product_category_id',$id2)->where('product_colour_id',$color)->paginate(10);
    //return $product;
    if(count($product)>0){
        return view('frontend.searched')->with('product',$product)->with('cat_id',$id2)->with('name_id',$id)->with('inprice',$inprice)->with('fiprice',$fiprice)->with('colorp',$color)->with('sizep',$size)->with('menu_id',$menu_id);
        }
        else{
            return view('frontend.searched')->with('product',$product)->with('cat_id',$id2)->with('name_id',$id)->with('inprice',$inprice)->with('fiprice',$fiprice)->with('colorp',$color)->with('sizep',$size)->with('menu_id',$menu_id);
            }
}
else if($inprice!='' && $fiprice!='' && $color=='' && $size!=''){
    $product= ProductDetailSize::whereBetween('actual_price', [$inprice, $fiprice])->where('menu_id',$menu_id)->where('product_name_id',$id)->where('product_category_id',$id2)->where('product_size_id',$size)->paginate(10);
    //return 7;
    if(count($product)>0){
        return view('frontend.searched')->with('product',$product)->with('cat_id',$id2)->with('name_id',$id)->with('inprice',$inprice)->with('fiprice',$fiprice)->with('colorp',$color)->with('sizep',$size)->with('menu_id',$menu_id);
        }
        else{
            return view('frontend.searched')->with('product',$product)->with('cat_id',$id2)->with('name_id',$id)->with('inprice',$inprice)->with('fiprice',$fiprice)->with('colorp',$color)->with('sizep',$size)->with('menu_id',$menu_id);
            }
}

else if($inprice=='' && $fiprice=='' && $color!='' && $size!=''){
    $product= ProductDetailSize::where('menu_id',$menu_id)->where('product_name_id',$id)->where('product_category_id',$id2)->where('product_colour_id',$color)->where('product_size_id',$size)->paginate(10);
    //return 7;
    if(count($product)>0){
        return view('frontend.searched')->with('product',$product)->with('cat_id',$id2)->with('name_id',$id)->with('inprice',$inprice)->with('fiprice',$fiprice)->with('colorp',$color)->with('sizep',$size)->with('menu_id',$menu_id);
        }
        else{
            return view('frontend.searched')->with('product',$product)->with('cat_id',$id2)->with('name_id',$id)->with('inprice',$inprice)->with('fiprice',$fiprice)->with('colorp',$color)->with('sizep',$size)->with('menu_id',$menu_id);
            }
}

else if($inprice=='' && $fiprice=='' && $color=='' && $size==''){
    // $product= ProductDetailSize::where('menu_id',$menu_id)->where('product_name_id',$id)->where('product_category_id',$id2)->where('product_size_id',$size)->get();
    // //return $product;
    // if(count($product)>0){
    //     return view('frontend.searched')->with('product',$product)->with('cat_id',$id2)->with('name_id',$id)->with('inprice',$inprice)->with('fiprice',$fiprice)->with('colorp',$color)->with('sizep',$size)->with('menu_id',$menu_id);
    //     }
    return redirect()->back();
}

// else if( $inprice!='' && $fiprice!='' && $color!='' ||$size=='' ){
//     $product= ProductDetailSize::whereBetween('actual_price', [$inprice, $fiprice])->where('menu_id',$menu_id)->where('product_category_id',$id )->where('product_colour_id',$color)->get();

//     return view('frontend.searched')->with('product',$product)->with('cat_id',$id2)->with('name_id',$id)->with('inprice',$inprice)->with('fiprice',$fiprice)->with('colorp',$color)->with('sizep',$size)->with('menu_id',$menu_id);
// }





}
public function searched__category_based(Request $request, $id){
   //return 1;
    $inprice = $request->get('inprice');
    $fiprice = $request->get('fiprice');
    $color = $request->get('color');
    $size = $request->get('size');
    $menu_id = $request->get('menu_id');
    //return $size;
  //  $product= ProductDetailSize::whereBetween('actual_price', [$inprice, $fiprice])->where('menu_id',$menu_id)->where('product_category_id',$id )->orwhere('product_size_id',$size)->orwhere('product_colour_id',$color)->paginate(10);

  // return $product;
    //return view('frontend.searched2')->with('product',$product)->with('cat_id',$id)->with('inprice',$inprice)->with('fiprice',$fiprice)->with('colorp',$color)->with('sizep',$size);
    // if($inprice!='' && $fiprice!='' && $color=='' && $size==''  ){
    //     $product= ProductDetailSize::whereBetween('actual_price', [$inprice, $fiprice])->where('menu_id',$menu_id)->where('product_category_id',$id)->get();
    //    // return $product;
    //     if(count($product)>0){
    //     return view('frontend.searched2')->with('product',$product)->with('cat_id',$id)->with('inprice',$inprice)->with('fiprice',$fiprice)->with('colorp',$color)->with('sizep',$size)->with('menu_id',$menu_id);
    //     }
    //     }
    //     else if($inprice!='' && $fiprice!='' && $color!='' && $size!=''){
    //         $product= ProductDetailSize::whereBetween('actual_price', [$inprice, $fiprice])->where('menu_id',$menu_id)->where('product_category_id',$id)->where('product_size_id',$size)->where('product_colour_id',$color)->get();
    //         //return 2;
    //       //  return $product;
    //         if(count($product)>0){
    //         return view('frontend.searched2')->with('product',$product)->with('cat_id',$id)->with('inprice',$inprice)->with('fiprice',$fiprice)->with('colorp',$color)->with('sizep',$size)->with('menu_id',$menu_id);
    //         }


    // }
    if($inprice!='' && $fiprice!='' && $color=='' && $size==''  ){
        $product= ProductDetailSize::whereBetween('actual_price', [$inprice, $fiprice])->where('menu_id',$menu_id)->where('product_category_id',$id)->paginate(10);
        //return $product;
        //return 1;
        if(count($product)>0){
        return view('frontend.searched2')->with('product',$product)->with('cat_id',$id)->with('inprice',$inprice)->with('fiprice',$fiprice)->with('colorp',$color)->with('sizep',$size)->with('menu_id',$menu_id);
        }
        else{
            return view('frontend.searched2')->with('product',$product)->with('cat_id',$id)->with('inprice',$inprice)->with('fiprice',$fiprice)->with('colorp',$color)->with('sizep',$size)->with('menu_id',$menu_id);
            }
        }
        else if($inprice!='' && $fiprice!='' && $color!='' && $size!=''){
            $product= ProductDetailSize::whereBetween('actual_price', [$inprice, $fiprice])->where('menu_id',$menu_id)->where('product_category_id',$id)->where('product_size_id',$size)->where('product_colour_id',$color)->paginate(10);
            //return 2;
          //  return $product;
            if(count($product)>0){
            return view('frontend.searched2')->with('product',$product)->with('cat_id',$id)->with('inprice',$inprice)->with('fiprice',$fiprice)->with('colorp',$color)->with('sizep',$size)->with('menu_id',$menu_id);
            }
            else{
                return view('frontend.searched2')->with('product',$product)->with('cat_id',$id)->with('inprice',$inprice)->with('fiprice',$fiprice)->with('colorp',$color)->with('sizep',$size)->with('menu_id',$menu_id);
                }
        }
        else if($inprice=='' && $fiprice=='' && $color!='' && $size==''){
            $product= ProductDetailSize::where('menu_id',$menu_id)->where('product_category_id',$id)->where('product_colour_id',$color)->paginate(10);
          //  return 3;
            if(count($product)>0){
                return view('frontend.searched2')->with('product',$product)->with('cat_id',$id)->with('inprice',$inprice)->with('fiprice',$fiprice)->with('colorp',$color)->with('sizep',$size)->with('menu_id',$menu_id);
                }
                else{
                    return view('frontend.searched2')->with('product',$product)->with('cat_id',$id)->with('inprice',$inprice)->with('fiprice',$fiprice)->with('colorp',$color)->with('sizep',$size)->with('menu_id',$menu_id);
                    }
        }
        else if($inprice=='' && $fiprice=='' && $color=='' && $size!=''){
            $product= ProductDetailSize::where('menu_id',$menu_id)->where('product_category_id',$id)->where('product_size_id',$size)->paginate(10);
           // return 5;
            if(count($product)>0){
                return view('frontend.searched2')->with('product',$product)->with('cat_id',$id)->with('inprice',$inprice)->with('fiprice',$fiprice)->with('colorp',$color)->with('sizep',$size)->with('menu_id',$menu_id);
                }
                else{
                    return view('frontend.searched2')->with('product',$product)->with('cat_id',$id)->with('inprice',$inprice)->with('fiprice',$fiprice)->with('colorp',$color)->with('sizep',$size)->with('menu_id',$menu_id);
                    }
        }
        else if($inprice!='' && $fiprice!='' && $color!='' && $size==''){
            $product= ProductDetailSize::whereBetween('actual_price', [$inprice, $fiprice])->where('menu_id',$menu_id)->where('product_category_id',$id)->where('product_colour_id',$color)->paginate(10);
            //return $product;
            if(count($product)>0){
                return view('frontend.searched2')->with('product',$product)->with('cat_id',$id)->with('inprice',$inprice)->with('fiprice',$fiprice)->with('colorp',$color)->with('sizep',$size)->with('menu_id',$menu_id);
                }
                else{
                    return view('frontend.searched2')->with('product',$product)->with('cat_id',$id)->with('inprice',$inprice)->with('fiprice',$fiprice)->with('colorp',$color)->with('sizep',$size)->with('menu_id',$menu_id);
                    }
        }
        else if($inprice!='' && $fiprice!='' && $color=='' && $size!=''){
            $product= ProductDetailSize::whereBetween('actual_price', [$inprice, $fiprice])->where('menu_id',$menu_id)->where('product_category_id',$id)->where('product_size_id',$size)->paginate(10);
            //return 7;
            if(count($product)>0){
                return view('frontend.searched2')->with('product',$product)->with('cat_id',$id)->with('inprice',$inprice)->with('fiprice',$fiprice)->with('colorp',$color)->with('sizep',$size)->with('menu_id',$menu_id);
                }
                else{
                    return view('frontend.searched2')->with('product',$product)->with('cat_id',$id)->with('inprice',$inprice)->with('fiprice',$fiprice)->with('colorp',$color)->with('sizep',$size)->with('menu_id',$menu_id);
                    }
        }
        else if($inprice=='' && $fiprice=='' && $color!='' && $size!=''){
            $product= ProductDetailSize::where('menu_id',$menu_id)->where('product_category_id',$id)->where('product_size_id',$size)->where('product_colour_id',$color)->paginate(10);
            //return 7;
            if(count($product)>0){
                return view('frontend.searched2')->with('product',$product)->with('cat_id',$id)->with('inprice',$inprice)->with('fiprice',$fiprice)->with('colorp',$color)->with('sizep',$size)->with('menu_id',$menu_id);
                }
                else{
                    return view('frontend.searched2')->with('product',$product)->with('cat_id',$id)->with('inprice',$inprice)->with('fiprice',$fiprice)->with('colorp',$color)->with('sizep',$size)->with('menu_id',$menu_id);
                    }
        }

        else if($inprice=='' && $fiprice=='' && $color=='' && $size==''){
            // $product= ProductDetailSize::where('menu_id',$menu_id)->where('product_name_id',$id)->where('product_category_id',$id2)->where('product_size_id',$size)->get();
            // //return $product;
            // if(count($product)>0){
            //     return view('frontend.searched')->with('product',$product)->with('cat_id',$id2)->with('name_id',$id)->with('inprice',$inprice)->with('fiprice',$fiprice)->with('colorp',$color)->with('sizep',$size)->with('menu_id',$menu_id);
            //     }
            return redirect()->back();
        }
}
public function searched__refresh(Request $request, $id,$id2){
//return 1;
 $inprice = $request->get('inprice');
 $fiprice = $request->get('fiprice');
   $color = $request->get('color');
$size = $request->get('size');
$menu_id = $request->get('menu_id');
//return $size;

//$product= ProductDetailSize::where('product_colour_id',$color)->get();
//return $color;
if($inprice!='' && $fiprice!='' && $color=='' && $size==''  ){
$product= ProductDetailSize::whereBetween('actual_price', [$inprice, $fiprice])->where('menu_id',$menu_id)->where('product_name_id',$id)->where('product_category_id',$id2)->paginate(10);
//return $product;
//return 1;
if(count($product)>0){
return view('frontend.searched')->with('product',$product)->with('cat_id',$id2)->with('name_id',$id)->with('inprice',$inprice)->with('fiprice',$fiprice)->with('colorp',$color)->with('sizep',$size)->with('menu_id',$menu_id);
}
else{
    return view('frontend.searched')->with('product',$product)->with('cat_id',$id2)->with('name_id',$id)->with('inprice',$inprice)->with('fiprice',$fiprice)->with('colorp',$color)->with('sizep',$size)->with('menu_id',$menu_id);
    }
}
else if($inprice!='' && $fiprice!='' && $color!='' && $size!=''){
    $product= ProductDetailSize::whereBetween('actual_price', [$inprice, $fiprice])->where('menu_id',$menu_id)->where('product_name_id',$id)->where('product_category_id',$id2)->where('product_size_id',$size)->where('product_colour_id',$color)->paginate(10);
    //return 2;
  //  return $product;
    if(count($product)>0){
    return view('frontend.searched')->with('product',$product)->with('cat_id',$id2)->with('name_id',$id)->with('inprice',$inprice)->with('fiprice',$fiprice)->with('colorp',$color)->with('sizep',$size)->with('menu_id',$menu_id);
    }
    else{
        return view('frontend.searched')->with('product',$product)->with('cat_id',$id2)->with('name_id',$id)->with('inprice',$inprice)->with('fiprice',$fiprice)->with('colorp',$color)->with('sizep',$size)->with('menu_id',$menu_id);
        }
}
else if($inprice=='' && $fiprice=='' && $color!='' && $size==''){
    $product= ProductDetailSize::where('menu_id',$menu_id)->where('product_name_id',$id)->where('product_category_id',$id2)->where('product_colour_id',$color)->paginate(10);
  //return $product;
    if(count($product)>0){
        return view('frontend.searched')->with('product',$product)->with('cat_id',$id2)->with('name_id',$id)->with('inprice',$inprice)->with('fiprice',$fiprice)->with('colorp',$color)->with('sizep',$size)->with('menu_id',$menu_id);
        }
        else{
            return view('frontend.searched')->with('product',$product)->with('cat_id',$id2)->with('name_id',$id)->with('inprice',$inprice)->with('fiprice',$fiprice)->with('colorp',$color)->with('sizep',$size)->with('menu_id',$menu_id);
            }
}
else if($inprice=='' && $fiprice=='' && $color=='' && $size!=''){
    $product= ProductDetailSize::where('menu_id',$menu_id)->where('product_name_id',$id)->where('product_category_id',$id2)->where('product_size_id',$size)->paginate(10);
   // return $product;
    if(count($product)>0){
        return view('frontend.searched')->with('product',$product)->with('cat_id',$id2)->with('name_id',$id)->with('inprice',$inprice)->with('fiprice',$fiprice)->with('colorp',$color)->with('sizep',$size)->with('menu_id',$menu_id);
        }
        else{
            return view('frontend.searched')->with('product',$product)->with('cat_id',$id2)->with('name_id',$id)->with('inprice',$inprice)->with('fiprice',$fiprice)->with('colorp',$color)->with('sizep',$size)->with('menu_id',$menu_id);
            }
}
else if($inprice!='' && $fiprice!='' && $color!='' && $size==''){
    $product= ProductDetailSize::whereBetween('actual_price', [$inprice, $fiprice])->where('menu_id',$menu_id)->where('product_name_id',$id)->where('product_category_id',$id2)->where('product_colour_id',$color)->paginate(10);
    //return $product;
    if(count($product)>0){
        return view('frontend.searched')->with('product',$product)->with('cat_id',$id2)->with('name_id',$id)->with('inprice',$inprice)->with('fiprice',$fiprice)->with('colorp',$color)->with('sizep',$size)->with('menu_id',$menu_id);
        }
        else{
            return view('frontend.searched')->with('product',$product)->with('cat_id',$id2)->with('name_id',$id)->with('inprice',$inprice)->with('fiprice',$fiprice)->with('colorp',$color)->with('sizep',$size)->with('menu_id',$menu_id);
            }
}
else if($inprice!='' && $fiprice!='' && $color=='' && $size!=''){
    $product= ProductDetailSize::whereBetween('actual_price', [$inprice, $fiprice])->where('menu_id',$menu_id)->where('product_name_id',$id)->where('product_category_id',$id2)->where('product_size_id',$size)->paginate(10);
    //return 7;
    if(count($product)>0){
        return view('frontend.searched')->with('product',$product)->with('cat_id',$id2)->with('name_id',$id)->with('inprice',$inprice)->with('fiprice',$fiprice)->with('colorp',$color)->with('sizep',$size)->with('menu_id',$menu_id);
        }
        else{
            return view('frontend.searched')->with('product',$product)->with('cat_id',$id2)->with('name_id',$id)->with('inprice',$inprice)->with('fiprice',$fiprice)->with('colorp',$color)->with('sizep',$size)->with('menu_id',$menu_id);
            }
}

else if($inprice=='' && $fiprice=='' && $color!='' && $size!=''){
    $product= ProductDetailSize::where('menu_id',$menu_id)->where('product_name_id',$id)->where('product_category_id',$id2)->where('product_colour_id',$color)->where('product_size_id',$size)->paginate(10);
    //return 7;
    if(count($product)>0){
        return view('frontend.searched')->with('product',$product)->with('cat_id',$id2)->with('name_id',$id)->with('inprice',$inprice)->with('fiprice',$fiprice)->with('colorp',$color)->with('sizep',$size)->with('menu_id',$menu_id);
        }
        else{
            return view('frontend.searched')->with('product',$product)->with('cat_id',$id2)->with('name_id',$id)->with('inprice',$inprice)->with('fiprice',$fiprice)->with('colorp',$color)->with('sizep',$size)->with('menu_id',$menu_id);
            }
}

else if($inprice=='' && $fiprice=='' && $color=='' && $size==''){
    // $product= ProductDetailSize::where('menu_id',$menu_id)->where('product_name_id',$id)->where('product_category_id',$id2)->where('product_size_id',$size)->get();
    // //return $product;
    // if(count($product)>0){
    //     return view('frontend.searched')->with('product',$product)->with('cat_id',$id2)->with('name_id',$id)->with('inprice',$inprice)->with('fiprice',$fiprice)->with('colorp',$color)->with('sizep',$size)->with('menu_id',$menu_id);
    //     }
    return redirect()->back();
}

// else if( $inprice!='' && $fiprice!='' && $color!='' ||$size=='' ){
//     $product= ProductDetailSize::whereBetween('actual_price', [$inprice, $fiprice])->where('menu_id',$menu_id)->where('product_category_id',$id )->where('product_colour_id',$color)->get();

//     return view('frontend.searched')->with('product',$product)->with('cat_id',$id2)->with('name_id',$id)->with('inprice',$inprice)->with('fiprice',$fiprice)->with('colorp',$color)->with('sizep',$size)->with('menu_id',$menu_id);
// }





}
public function brand_based($id,$id2){
    session_start();
    $product= ProductDetails::where('brand_id',$id)->get();
   //return $product;
    return view('frontend.productlist')->with('product',$product)->with('cat_id',$id2);


}
public function category_based($id){
    session_start();
    $product= ProductDetails::where('product_category_id',$id)->paginate(10);
    //return $product;
    $catm= Category::where('product_category_id',$id)->get();
    $menu_id= $catm[0]->menu_id;
      return view('frontend.productlist2')->with('product',$product)->with('cat_id',$id)->with('menu_id',$menu_id);

}
public function category_product($id){
    session_start();
    $product= ProductDetails::where('product_category_id',$id)->get();
    return view('frontend.cateogry')->with('product',$product);
}
public function category_name($cat,$name){
    session_start();
    $product= ProductDetails::where('product_category_id',$cat)->where('product_name_id',$name)->get();
    if(count($product)>0){
    return view('frontend.category_name')->with('product',$product);
    }
    else{
        $product_cat= ProductDetails::where('product_category_id',$cat)->get();
        return view('frontend.cateogry')->with('product',$product_cat);
    }

}
public function success_payment(){
$res=$_REQUEST;

  $responsecode = $res['Response_Code'];
//echo $responsecode;
$uniquerefnumber = $res['Unique_Ref_Number'];

$servicetaxamount = $res['Service_Tax_Amount'];

$processingfee = $res['Processing_Fee_Amount'];

$totalamount = $res['Total_Amount'];

$transactionamount = $res['Transaction_Amount'];

$transactiondate =$res['Transaction_Date'];

$interchangevalue = $res['Interchange_Value'];
$tdr = $res['TDR'];
$paymode = $res['Payment_Mode']; $submerchantid = $res['SubMerchantId']; $referenceno = $res['ReferenceNo']; $id = $res['ID']; $tps = $res['TPS']; $hrs = $res['RS'];
  // return $referenceno;

  if($responsecode=='E000'){
 session_start();
$browser_id= session_id();

 $invoice= Invoice::findOrFail($referenceno);
  $invoice_number=$invoice->invoice_no;
 $invoice->transaction_id=$uniquerefnumber;
 $invoice->save();
 $cart= ProductCart::where('web_user_id',$submerchantid)->where('invoice_no_id',0)->orwhere('browser_id',$browser_id)->get();
//return $cart;
for ($i=0; $i <count($cart) ; $i++) {

    $newcart= ProductCart::findorFail($cart[$i]->product_cart_id);
    $newcart->web_user_id=$submerchantid;
    $newcart->invoice_no_id=$referenceno;
    $newcart->browser_id=0;
    $newcart->save();
    $size= ProductDetailSize::where('product_id',$cart[$i]->product_id)->get();
   // echo $size[0]->product_details_size_id;
    $stock=ProductDetailSize::findOrFail($size[0]->product_details_size_id);
    //echo $stock;
    $mystock=$stock->stock;
    $stocknow=$mystock-$cart[$i]->qty;
    $stock->stock=$stocknow;
    $stock->save();


}
    $shipping= ShippingAddress::where('invoice_no_id',$referenceno)->get();
  	$name=$shipping[0]->name;
  	$address=$shipping[0]->address;
  	$state=$shipping[0]->state;
  	$pin_no=$shipping[0]->pin_no;
  	$email=$shipping[0]->email;
  	$city=$shipping[0]->city;
$newthing = [
    'name'   => $name,
    'web_user_id' => $submerchantid,
    'address'=>$address,
    'city'=>$city,
    'state'=>$state,
    'pincode'=>$pin_no,
    'invoice_id'=>$referenceno,
    'invoice_number'=>$invoice_number,
  	'tran_id'=>$uniquerefnumber,

    'email'    => $email
];
	Mail::to($email)->send(new \App\Mail\bank_mail($newthing));
    Mail::to('kayal.sufian.abu@gmail.com')->send(new \App\Mail\adminmail($newthing));

    return view('frontend.mypayment');
  }else {
  	session_start();
    $shipping= ShippingAddress::where('invoice_no_id',$referenceno)->get();
   // return $shipping;
    $newshipping= ShippingAddress::findOrFail($shipping[0]->shipping_address_id);
    $newshipping->delete();
    $invoice= Invoice::findOrFail($referenceno);
    $invoice->delete();


     session()->flash('message', 'OOPPS! : Sorry, Your transaction has failed. Please go back and try again.');
   session()->flash('alert-class', 'alert-warning');
   return redirect('/cart');
  }

    //
}
public function mycheckout(){
    session_start();

    $auth_id=@auth::user()->id ;
    if(@$auth_id!=0){
    return view('frontend.checkout');
    }

    else{
        session()->flash('message', "Please Login or Regiter in order to checkout");
        session()->flash('alert-class', 'alert-warning');
  return redirect('/sign-in');

    }
}

public function buy_product(Request $request){

session_start();
$browser_id= session_id();
//return $browser_id;
@$web_user_id =    @auth::user()->id ;
$user= \App\User::find($web_user_id);

$shipping = new ShippingAddress;


$name= $request->get('txt_name');
$last_name= $request->get('txt_last_name');
$appartment= $request->get('txt_appartment');
  //return $ddl_payment_mode;
$contact_no= $request->get('txt_contact_no');
$email=$user->email;
$address= $request->get('txt_address');
$state= $request->get('state');
$city= $request->get('city');
$pin_no= $request->get('postcode');
$total_amt= $request->get('final_price');
//invoice

//$inv='Ab3323432345';
//if($ddl_payment_mode==1){
  //return 1;
if($web_user_id!=0){
$invoice= new Invoice;
$invoice->total_amt=$total_amt;
$invoice->status_date=date("Y-m-d");
$invoice->web_user_id=$web_user_id;
$invoice->invoice_date=date("Y-m-d");
$invoice->payment_mode=1;
$invoice->payment_status=1;
$invoice->save();
$invoice_id= $invoice->invoice_no_id;
$myinvoice= Invoice::findOrFail($invoice_id);
$myinvoice->invoice_no='TAW000000'.$invoice_id;
$myinvoice->save();
//return 'saved';
//shipping
$shipping->invoice_no_id=$invoice_id;
$shipping->name=$name;
$shipping->last_name=$last_name;
$shipping->appartment=$appartment;
$shipping->contact_no=$contact_no;
//$shipping->email=$email;
$shipping->state=$state;
$shipping->city=$city;
$shipping->pin_no=$pin_no;
$shipping->address=$address;
$shipping->save();

//updating
$cart= ProductCart::where('web_user_id',$web_user_id)->where('invoice_no_id',0)->orwhere('browser_id',$browser_id)->get();
//return $cart;
for ($i=0; $i <count($cart) ; $i++) {

    $newcart= ProductCart::findorFail($cart[$i]->product_cart_id);
    $newcart->web_user_id=$web_user_id;
    $newcart->invoice_no_id=$invoice_id;
    $newcart->browser_id=0;
    $newcart->save();
    $size= ProductDetailSize::where('product_id',$cart[$i]->product_id)->get();
   // echo $size[0]->product_details_size_id;
    $stock=ProductDetailSize::findOrFail($size[0]->product_details_size_id);
    //echo $stock;
    $mystock=$stock->stock;
    $stocknow=$mystock-$cart[$i]->qty;
    $stock->stock=$stocknow;
    $stock->save();

}



$newthing = [
    'name'   => $name,
    'web_user_id' => $web_user_id,
    'address'=>$address,
    'city'=>$city,
    'state'=>$state,
    'pincode'=>$pin_no,
    'invoice_id'=>$invoice_id,



    'email'    => $email
];

//return $newthing;


    Mail::to($email)->send(new \App\Mail\buy_mail($newthing));
    Mail::to('kayal.sufian.abu@gmail.com')->send(new \App\Mail\adminmail($newthing));

   session()->flash('message', "Thank You for Shopping with us ! : Your Order Has Been  Placed Succesfully!");
   session()->flash('alert-class', 'alert-success');
   return redirect()->back();
   //return 'success';
}
else {
    session()->flash('message', "Please Login or Regiter in order to checkout");
    session()->flash('alert-class', 'alert-warning');
    return redirect('/sign-in');
}

// if($ddl_payment_mode==2){
//   //return 1;
//   $invoice= new Invoice;
// $invoice->total_amt=$total_amt;
// $invoice->status_date=date("Y-m-d");
// $invoice->web_user_id=$web_user_id;
// $invoice->invoice_date=date("Y-m-d");
// $invoice->payment_mode=2;
// $invoice->payment_status=0;
// $invoice->save();
// $invoice_id= $invoice->invoice_no_id;
// $myinvoice= Invoice::findOrFail($invoice_id);
// $myinvoice->invoice_no='AB000000'.$invoice_id;
// $myinvoice->save();
// //return 'saved';
// //shipping
// $shipping->invoice_no_id=$invoice_id;
// $shipping->name=$name;
// $shipping->contact_no=$contact_no;
// $shipping->email=$email;
// $shipping->state=$state;
// $shipping->city=$city;
// $shipping->pin_no=$pin_no;
// $shipping->address=$address;
// $shipping->save();

//  // return $invoice_id;
//  // $total_amt=1;
//  // return $total_amt;
//  $invd=$invoice_id;
//     return view('frontend.payment1')->with('sub_merchent_id',$web_user_id)->with('amt',$total_amt)->with('invd',$invd);
// }

}

public function payment(Request $request)
{

  //$amount= $request->get('amount');
  //return $amount;
 // $web_user_id = Auth::user()->id ;

  // $amount 	=   10;
    //$refrenceNo 	=  'Ab2000003'; //stands for order id or any other related to database table

   // $optionalField 	= null;  //must be pass in pipe delimeter based on icici eazypay payment integration kit

    //$eazypay 	=   new Eazypay();
   //$paymentUrl 	=   $eazypay->getPaymentUrl($amount,$refrenceNo);
  // return redirect()->to($paymentUrl); //it will redirect to your payment gateway site
  return view('frontend.payment1');
}



public function test_mail(){
    return view('admin.test_mail');

}

public function mywish(){
    session_start();
    return view('frontend.wishlist');

}

public function remove_wish($id){
    //return $id;
    $wish= Wishlist::findOrFail($id);
    $wish->delete();
    return redirect()->back();
}


public function adding_to_cart(Request $request){

    @$user_id=Auth::user()->id;
    //return $user_id;
    $product_id=$request->get('product_id');
    $qty=$request->get('qty');
   // $add_to_cart=$request->get('add_to_cart');

    $cart= new ProductCart;
    $wish= new Wishlist;


       session_start();
       $browser_id= session_id();
       $product_size_id=$request->get('txt_size_id');

       $product_colour_id=$request->get('category_id');;
       $price=$request->get('price');
       $delivery_charge=$request->get('delivery_charge');

       if (@$_POST['add_to_cart']){

       $cart->product_size_id=$product_size_id;
       $cart->product_id=$product_id;
       $cart->product_colour_id=$product_colour_id;
       $cart->price=$price;
       $cart->delivery_charge=$delivery_charge;

       if (Auth::guest()){

        $cart->browser_id=$browser_id;
        $cart->web_user_id=0;

       }
       else {    //$web_user_id = Auth::user()->id ;
        // $web_uer_id;

          $cart->web_user_id=$user_id;
          $cart->browser_id=0;
            }
       $cart->qty=$qty;
       $cart->invoice_no_id=0;
       $cart->cancel_browser_id=0;
       $cart->save();
    return  redirect()->back();
           }
           else {
               if(@$_POST['buy_now'])
               $auth_id=@auth::user()->id ;
               if(@$auth_id!=0)
{
       $cart->product_size_id=$product_size_id;
       $cart->product_id=$product_id;
       $cart->product_colour_id=$product_colour_id;
       $cart->price=$price;
       $cart->delivery_charge=$delivery_charge;

       if (Auth::guest()){

        $cart->browser_id=$browser_id;
        $cart->web_user_id=0;

       }
       else {    //$web_user_id = Auth::user()->id ;
        // $web_uer_id;

          $cart->web_user_id=$user_id;
          $cart->browser_id=0;
            }
       $cart->qty=$qty;
       $cart->invoice_no_id=0;
       $cart->cancel_browser_id=0;
       $cart->save();
    return redirect('/checkout');
        }
        else{
            session()->flash('message', "Please Login or Regiter in order to checkout");
            session()->flash('alert-class', 'alert-warning');
            return redirect('/sign-in');
        }
           }






}
public function mail_to_courier($id){
    return $id;
    $product_size_id=$request->get('txt_size_id');
}
public function remove_my_cart($id){

    session_start();
    $cart= ProductCart::findOrFail($id);
   $cart->delete();
 return redirect()->back();

}

public function edit_my_cart($id){
    session_start();
    $mycart= ProductCart::findOrFail($id);
    return view('frontend.editcart')->with('mycart',$mycart);

}
public function update_the_cart(Request $request,$id){

   // return $id;

    session_start();
    $mycart= ProductCart::findOrFail($id);

    $qty=$request->get('qty');
    $mycart->qty=$qty;
    $mycart->save();
    return redirect('/cart');
}
public function sign_me_up(){
    session_start();
    return view('frontend.register');




}
public function privacy(){
    session_start();
    $about= About::where('about_us_id',6)->get();
    //return $about;
        return view('frontend.privacy')->with('about',$about);

}
public function product_details_home($id, $size_id,$os_id){
  //  return $id;
  session_start();
   $product= ProductDetails::where('product_id',$id)->get();
   //return $size_id;

    return view('frontend.productdetails')->with('product', $product)->with('size_id',$size_id)->with('os_id',$os_id);

}
public function update_profile(){
    session_start();
    $web_user_id =@auth::user()->id ;
   //return $web_user_id;
    $profile= User::findOrFail($web_user_id);
   // return $profile;
    return view('frontend.editprofile')->with('profile',$profile);
}
public function my_profile(){
    session_start();
    $web_user_id =@auth::user()->id ;
   //return $web_user_id;
    $profile= User::findOrFail($web_user_id);
   // return $profile;
    return view('frontend.account')->with('profile',$profile);
}

public function update_my_profile(Request $request){
   // return $request;
    $web_user_id =@auth::user()->id ;

    $profile= User::findOrFail($web_user_id);


    $name=$request->get('name');
    $contact_no=$request->get('contact_no');
    $address=$request->get('address');
    $state=$request->get('state');
    $city=$request->get('city');
    $pincode=$request->get('pincode');
    $country=$request->get('country');

    $profile->name=$name;
    $profile->contact_no=$contact_no;
    $profile->address=$address;
    $profile->state=$state;
    $profile->city=$city;
    $profile->pincode=$pincode;
    $profile->wallet_amt=$country;
    $profile->save();
    $request->session()->flash('message', "Profile Updated Successfully!");
    return redirect()->back();



}

public function change_my_password(){
    session_start();
    return view('frontend.password_change');

}

public function update_my_password(Request $request){
    //return $request ;
    $admin_id=@auth::user()->id;
    //  return $admin_id;
      $request->validate([
          'cur_pass' => 'required',
          'new_pass' => ['required','min:6'],
          'cnf_pass' => ['required','min:6']
      ]);

      $user=User::find($admin_id);
      //return $user;
         // return decrypt($user->password);
      $cur_pass=$request->get('cur_pass');
      $pass=$request->get('new_pass');
      $newpass=$request->get('cnf_pass');
      if (Hash::check($cur_pass, $user->password)) {
       // return 'matched';
        if($pass==$newpass){
          $user->password=Hash::make($newpass);
          $user->save();
          $request->session()->flash('message', " Success! : Password Changed Successfully!!");
          $request->session()->flash('alert-class', 'alert-success');
          return redirect()->back();

        }
        else {
          $request->session()->flash('message', " Oops! : New Password and Confirm Password were not same!!");
          $request->session()->flash('alert-class', 'alert-danger');
          return redirect()->back();

        }
      }
      else {
          $request->session()->flash('message', " Oops! : The Current Password you entered did not match!!");
          $request->session()->flash('alert-class', 'alert-danger');
          return redirect()->back();

      }

}

public function mycart(){
    session_start();
   // return 1;
    return view('frontend.cart');
}
public function product_details_home_size($id,$detail_size_id,$size_id){
    //session_start();

    $product= ProductDetails::where('product_id',$id)->get();
    //return $product;

    //return $cart;

       // return view('frontend.productdetails')->with('product', $product)->with('size_id',$size_id);
       return view('frontend.productdetails')->with('product', $product)->with('size_id',$size_id);
}
public function return_policy(){
    session_start();
    $about= About::where('about_us_id',3)->get();
    //return $about;
        return view('frontend.returnpolicy')->with('about',$about);
}
public function terms(){
    session_start();
    $about= About::where('about_us_id',4)->get();
    //return $about;
        return view('frontend.terms')->with('about',$about);
}
public function shipping_policy(){
    session_start();
    $about= About::where('about_us_id',5)->get();
  //  return $about;
        return view('frontend.potfolio')->with('about',$about);

}

public function myfaq(){
    session_start();
    $about= About::where('about_us_id',3)->get();
  //  return $about;
        return view('frontend.faq')->with('about',$about);

}
public function contact_us(){
    session_start();
    return view('frontend.contact');

}
public function active_pay(){
    echo '<a href="https://eazypay.icicibank.com/EazyPG?merchantid=227564&mandatory fields=PBgpX2vSHqpWlJS16nrzlg==&optional fields=&returnurl=KPhmhZN4IpxxRT5w94vOEpoJ7dV4CWNYDIf8jJJ/4YZGz7M47URuk5PF7gEaQ/98&Reference No=P2gqOvB5+rliWpAgOWW5tw==&submerchantid=el1QcdQouH3d+FNGhDNiMA==&transaction amount=a5skE9ltz9xo6Vhis+XZBA==&paymode=RVOuZpludgXclBuIZcTz9A==" target="_blank">Pay</a>';
}
public function contact_us_post(Request $request){
    $name=$request->get('uname');
    $email=$request->get('emailid');
    $mobileno=$request->get('mobileno');
    $message=$request->get('message');
    $token = [
        'name'   => $name,
        'mobile' => $mobileno,
        'message'    => $message,
        'email'    => $email
    ];
    Mail::send('admin.email', $data, function($message) use ($data)
{
$message->from($data['email']);
$message->to('kayal.sufian.abu@gmail.com','Abusufian');
$message->subject($data['name']);
});
Mail::to('kayal.sufian.abu@gmail.com')->send(new \App\Mail\yourmail($token));
session()->flash('message', 'Your email has been recieved, we will keep in touch as soon as possible! Thank you.');
return redirect('contact-us');


}

public function enquiry_post(Request $request){
    session_start();
    $name=$request->get('uname');
    $email=$request->get('emailid');
    $mobileno=$request->get('mobileno');
    //return $mobileno;
    $token = [
        'name'   => $name,
        'mobile' => $mobileno,

        'email'    => $email
    ];
//     Mail::send('admin.email', $data, function($message) use ($data)
// {
// $message->from($data['email']);
// $message->to('kayal.sufian.abu@gmail.com','Abusufian');
// $message->subject($data['name']);
// });
Mail::to('kayal.sufian.abu@gmail.com')->send(new \App\Mail\mymail($token));
session()->flash('newmessage', 'Your email has been sent, we will keep in touch as soon as possible! Thank you.');
return redirect()->back();


}

}
