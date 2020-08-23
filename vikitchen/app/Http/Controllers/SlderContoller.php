<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Hash;
use App\Slider;
use App\User;
use App\About;
use App\Offer;
use App\Courier;
use App\Category;
use App\Menu;
use App\Productname;
use App\ProductSize;
use AuthenticatesUsers;
use App\ProductColor;
use App\ProductDetails;
use App\ProductImage;
use App\ProductDetailsColor;
use App\ProductDetailsImage;
use App\ProductDetailSize;
use App\ReturnProduct;
use App\Invoice;
use App\ProductCart;
use App\ShippingAddress;
use App\Blog;
use App\Brand;
use App\Pin;
use App\Promocode;
use Mail;
Use Image;
use PDF;
use App\BrandProduct;
//use Session;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\URL;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Crypt;
 use Illuminate\Support\Facades\Input;
class SlderContoller extends Controller
{



    public function block(){
        return view('admin.blocks');
    }
    public function index()
    {
        //return 1;
         $slider=Slider::all();
            //return $slider;

        return view('admin.sliderlist')->with('slider', $slider);


    }
    public function blog_tab(){
           //return 1;
           $blog=Blog::orderBy('blog_id', 'DESC')->get();
          // return $blog;

       return view('admin.bloglist')->with('blog', $blog);

    }
    public function adding_blog(){
        return view('admin.blogadd');
    }

    public function adding_coupon(){
        return view('admin.coupon_add');
    }


    public function storing_coupon(Request $request){

        $validatedData = $request->validate([


            'name' => 'required',


        ]);
        $pcode = new Promocode();

        // return $request;

            $pcode->name=$request->get('name');
            $pcode->amount=$request->get('amount');
            $pcode->max_discount=$request->get('max_discount');
            $pcode->dis_percentage=$request->get('dis_percentage');
            $pcode->dis_percentage=$request->get('dis_percentage');
            $active = $request->get('active');
            if($active==1){
                $active=1;
            }
            else{
                $active=0;
            }
            $pcode->active=$active;


          //$slider->type=$request->get('type');
         // $cover = $request->file('image')->store('slider');
         // $slider->image=$cover;
          //return $cover;
      // $extension = $cover->getClientOriginalExtension();

        //  return  Storage::disk('public')->put($cover->getFilename().'.'.$extension,  File::get($cover));
          //  $picture->image = $cover->getFilename().'.'.$extension;


           $pcode->save();
           session()->flash('message', 'Promocode Added successfully!');
           return redirect('admin/coupon-list');
    }


    public function store_blog(Request $request){

        $validatedData = $request->validate([


            'title' => 'required',


        ]);
        $blog = new Pin;

        // return $request;

            $blog->pin=$request->get('title');


          //$slider->type=$request->get('type');
         // $cover = $request->file('image')->store('slider');
         // $slider->image=$cover;
          //return $cover;
      // $extension = $cover->getClientOriginalExtension();

        //  return  Storage::disk('public')->put($cover->getFilename().'.'.$extension,  File::get($cover));
          //  $picture->image = $cover->getFilename().'.'.$extension;


           $blog->save();
           session()->flash('message', 'Pin Added successfully!');
           return redirect('admin/pincode_list');
    }

public function edit_blog($id){
    $id= decrypt($id);

//return $id;
$blog=Pin::findOrFail($id);
//return $blog;///

//blogedit.blade.php
return view('admin.blogedit')->with('blog',$blog);
}

public function edit_coupon($id){
    $id= decrypt($id);

//return $id;
$pcode=Promocode::findOrFail($id);
//return $blog;///

//blogedit.blade.php
return view('admin.coupon_edit')->with('pcode',$pcode);
}

public function update_blog(Request $request, $id){
    $id= decrypt($id);

    //return $id;
    $blog=Pin::findOrFail($id);






        $blog->pin=$request->get('title');

        $blog->save();
         session()->flash('message', '  Updated successfully!');
         return redirect('admin/pincode_list');

 }



public function update_coupon(Request $request, $id){
    $id= decrypt($id);

    //return $id;
    $pcode=Promocode::findOrFail($id);
    $pcode->name=$request->get('name');
    $pcode->amount=$request->get('amount');
    $pcode->max_discount=$request->get('max_discount');
    $pcode->dis_percentage=$request->get('dis_percentage');
    $pcode->dis_percentage=$request->get('dis_percentage');
    $active = $request->get('active');
    if($active==1){
        $active=1;
    }
    else{
        $active=0;
    }
    $pcode->active=$active;


  //$slider->type=$request->get('type');
 // $cover = $request->file('image')->store('slider');
 // $slider->image=$cover;
  //return $cover;
// $extension = $cover->getClientOriginalExtension();

//  return  Storage::disk('public')->put($cover->getFilename().'.'.$extension,  File::get($cover));
  //  $picture->image = $cover->getFilename().'.'.$extension;


   $pcode->save();
   session()->flash('message', 'Upated Added successfully!');
   return redirect('admin/coupon-list');

 }





public function blog_delete($id){
    $id= decrypt($id);

    //return $id;
    $blog=Pin::findOrFail($id);
    $blog->delete();
    session()->flash('message', '  Deleted Successfully!');
    return redirect('admin/pincode_list');



}

public function coupon_del($id){
    $id= decrypt($id);

    //return $id;
    $blog=Promocode::findOrFail($id);
    $blog->delete();
    session()->flash('message', '  Deleted Successfully!');
    return redirect('admin/coupon-list');



}


public function return_order(){
    $return=ReturnProduct::orderBy('return_product_id', 'DESC')->get();
    //return $return;
    return view('admin.return_products')->with('return', $return);

}
public function edit_return_order($id){
    $return=ReturnProduct::findOrFail($id);
  //return $id;
  return view('admin.refund_edit')->with('return', $return);


}

public function edit_replace_order($id){
    $return=ReturnProduct::findOrFail($id);
    return view('admin.replace_edit')->with('return', $return);

}
public function update_replace_order(Request $request, $id){

    $return=ReturnProduct::findOrFail($id);
    $return->refund_date=date('Y-m-d');
    $return->refund_status=2;
    $return->save();
    $invoice=$return->invoice_no_id;
    $myinvoice=Invoice::where('invoice_no_id',$invoice)->get();
    $generator= $myinvoice[0]->invoice_no;
    $request->session()->flash('message', " Replacement  has been done for:  ".  $generator);
    $request->session()->flash('alert-class', 'alert-success');
  return Redirect('/admin/returnorrefund');
}
public function edit_replace_date($id){
    $return=ReturnProduct::findOrFail($id);
    return view('admin.refund_date')->with('return', $return);


}
public function update_replace_date(Request $request,$id){
     $product_received_date=$request->get('product_received_date');
    $return=ReturnProduct::findOrFail($id);
    $return->product_received_date=$product_received_date;

   $return->save();
    $invoice=$return->invoice_no_id;
    $myinvoice=Invoice::where('invoice_no_id',$invoice)->get();
    $generator= $myinvoice[0]->invoice_no;
    $request->session()->flash('message', "Recieved Date has been updated for:  ".  $generator);
    $request->session()->flash('alert-class', 'alert-success');
  return Redirect('/admin/returnorrefund');


}


public function update_return_order(Request $request,$id){
    $return=ReturnProduct::findOrFail($id);
    $return->refund_date=date('Y-m-d');
    $return->refund_status=2;
    $return->save();
    $invoice=$return->invoice_no_id;
    $myinvoice=Invoice::where('invoice_no_id',$invoice)->get();
    $generator= $myinvoice[0]->invoice_no;
    $request->session()->flash('message', " Refund  has been done for:  ".  $generator);
    $request->session()->flash('alert-class', 'alert-success');
  return Redirect('/admin/returnorrefund');

}
    public function create(){
        $slider=Slider::all();
        return view('admin.slideradd')->with('slider', $slider);

    }

    public function pschange(){
        //$User=User::all();
    return view('admin.passchange');

     }


     public function pending_order(){
        $invoice= Invoice::where('payment_status',0)->orderBy('invoice_no_id', 'DESC')->get();
        return view('admin.pending_orders')->with('invoice', $invoice);

     }


     public function approve_order($id){

        //return $id;
       $invoice= Invoice::findOrFail($id);
       $invoice->payment_status=1;
       $invoice->save();
       session()->flash('message', " Success! :Approved One Order!!");
       session()->flash('alert-class', 'alert-success');
       return Redirect()->back();



     }

     public function all_order_by_stat($id){
        $invoice= Invoice::where('payment_status',1)->where('status',$id)->orderBy('invoice_no_id', 'DESC')->get();
        return view('admin.approved_orders')->with('invoice', $invoice);
     }

     public function all_order(){
        $invoice= Invoice::where('payment_status',1)->orderBy('invoice_no_id', 'DESC')->get();
        return view('admin.approved_orders')->with('invoice', $invoice);
     }

    // public function list( Request $request )
    // {
    //     $id=$request->get('company_id');
    //    //return $id;
    //     $company =Company::all();
    //     //return $product;
    //      $product=Product::where('product_id',$id)->get();

    //      return view('seeproducts')->with('product', $product)->with('company', $company)->with('id', $id);

    // }

    public function change_order_status($id){
        $invoice= Invoice::findOrFail($id);
       // return $invoice;
        return view('admin.order_status')->with('invoice', $invoice);
    }

    public function change_order(Request $request,$id){
        $invoice= Invoice::findOrFail($id);
        $status=$request->get('status');
        $invoice->status= $status;
        $invoice->save();
        return redirect('/admin/approved-orders-by-status/'.$status);


    }

    public function select_courier($id){
        $cart= ProductCart::where('invoice_no_id', $id)->get();
      //  return $cart;
      $invoice= Invoice::where('invoice_no_id', $id)->get();
      $shipping= ShippingAddress::where('invoice_no_id', $id)->get();
     // return $shipping;
      $shipping= ShippingAddress::where('invoice_no_id', $id)->get();
        return view('admin.select_courier')->with('cart', $cart)->with('invoice',$invoice)->with('shipping',$shipping)->with('id',$id);


    }
    public function generatePDF($id)

    {
        $cart= ProductCart::where('invoice_no_id', $id)->get();
       //  return $cart;
        $invoice= Invoice::where('invoice_no_id', $id)->get();
        $shipping= ShippingAddress::where('invoice_no_id', $id)->get();
       // return $shipping;
        $shipping= ShippingAddress::where('invoice_no_id', $id)->get();
         // return view('admin.select_courier')->with('cart', $cart)->with('invoice',$invoice)->with('shipping',$shipping)->with('id',$id);

       $data = ['id' => $id];
        //return $data;
       $pdf = PDF::loadView('admin.courierpdf', $data);


     return $pdf->stream();
    // return PDF::loadView('frontend.myPDF', $data)->setPaper('a4', 'landscape')->setWarnings(false)->save('myfile.pdf');
        //return $pdf->download('hdtuto.pdf');
       // $pdf->setWarnings(false)->save('myfile.pdf');

    }
    public function mail_to_courier(Request $request, $id){
        $request->validate([
            'select' => 'required|not_in:0',
        ]);

        $select_id= $request->get('select');
        $courier= Courier::findOrFail($select_id);

        $email=$courier->email;
        $name=$courier->contact_person_name;
        $invoice= Invoice::findOrFail($id);
        $invoice->courier_services_id=$select_id;
        $invoice->save();


        $newthing = [
        'id'   => $id,
        'name' =>$name
        ];



    Mail::to($email)->send(new \App\Mail\couriermail($newthing));
    $request->session()->flash('message', "Success! :Mail Sent to the Selected Courier!!");
    $request->session()->flash('alert-class', 'alert-success');
  return Redirect('/admin/all-approved-orders');


      }




    public function pschangeadd(Request $request){

        //return $session_id = Session::getId();
       // $session_id = Session::getId();
        //return $session_id;
        $admin_id=$request->get('ses_id');
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
            return redirect('/admin');
          }
          else {
            $request->session()->flash('message', " Oops! : New Password and Confirm Password were not same!!");
            $request->session()->flash('alert-class', 'alert-danger');
            return redirect('/admin/pswchange');
          }
        }
        else {
            $request->session()->flash('message', " Oops! : The Current Password you entered did not match!!");
            $request->session()->flash('alert-class', 'alert-danger');
            return redirect('/admin/pswchange');
        }


        //if($cur_pass==$user->)

        //eturn $newpass;
      //
        // return $user->password;
       // $user->product_id=$request->get('product_id');

       // auth()->logout();
     //  $request->session()->flash('message', 'Task was successful!');
       // return redirect('/admin');

    }
public function store(Request $request){

    $validatedData = $request->validate([
        'image' => 'required',
        'sequence' => 'required|not_in:0',


    ]);
    $slider = new Slider;

    // return $request;

         $slider->sequence=$request->get('sequence');
      //$slider->type=$request->get('type');
     // $cover = $request->file('image')->store('slider');
     // $slider->image=$cover;
      //return $cover;
  // $extension = $cover->getClientOriginalExtension();

    //  return  Storage::disk('public')->put($cover->getFilename().'.'.$extension,  File::get($cover));
      //  $picture->image = $cover->getFilename().'.'.$extension;

      if( $request->hasFile('image')){
        $image = $request->file('image');
        $extension = $image->getClientOriginalExtension();
    $filename =time().'.'.$extension;
    $image->move('uploads/slider',$filename);
    $slider->image=$filename;

    }
    else
    {
        return $request;
        $slider->image='';
    }
       $slider->save();
       session()->flash('message', 'Slider Added successfully!');
       return redirect('admin/slider');



}


public function editsld($id){
  $deid= decrypt($id);
  //$slider= ::find($deid);
  $slider=Slider::where('slider_id',$deid)->get();
  return view('admin.slideredit')->with('slider', $slider);

}

public function sldupdate(Request $request){

$slider_id=$request->get('slider_id');
$slider=  Slider::find($slider_id);


$image = $request->file('image');
if($image==''){
    $slider->sequence=$request->get('sequence');

    $slider->save();
    session()->flash('message', ' One Slider Updated successfully!');
    return redirect('admin/slider');

}
else{
if(File::exists(public_path('uploads/slider/'.$slider->image))){
    File::delete(public_path('uploads/slider/'.$slider->image));

    $image = $request->file('image');
    $extension = $image->getClientOriginalExtension();
$filename =time().'.'.$extension;
$image->move('uploads/slider',$filename);
$slider->image=$filename;
  }else{

    $image = $request->file('image');
    $extension = $image->getClientOriginalExtension();
$filename =time().'.'.$extension;
$image->move('uploads/slider',$filename);
$slider->image=$filename;
  }
}



 $slider->sequence=$request->get('sequence');

 $slider->save();
 session()->flash('message', ' One Slider Updated successfully!');
 return redirect('admin/slider');

}

public function create_pin(){

    return view('admin.pincode');

}

public function store_pin(Request $request){
    $pin=$request->get('pincode');
    $npin= new Pin;
    $npin->pin=$pin;
    $npin->save();
    session()->flash('message', ' Added successfully!');
    return redirect('admin/pincode-list');



}


public function update_pin(Request $request,$id){
    $pin=$request->get('pincode');
    $id= decrypt($id);
    $npin=Pin::findorFail($id);
    $npin->pin=$pin;
    $npin->save();
    session()->flash('message', ' Update successfully!');
    return redirect('admin/pincode-list');



}

 public function about(){
        $id=2;
     $about= About::findOrFail($id);
    // return $about;
     return view('admin.about')->with('about', $about);
 }

 public function about_save(Request $request){
    $id=2;
    $about= About::findOrFail($id);
   // return $about;editor1
    $content = $request->get('editor1');

    //return htmlspecialchars_decode($content);
     $image = $request->file('image');
    // return $image;
    if( $image==''){
        $about->content=$content;
        $about->save();
        session()->flash('message', '  Updated successfully!');
        return redirect('admin/about-us');
    }
    else{

    if(File::exists(public_path('uploads/about_us/'.$about->image))){
        File::delete(public_path('uploads/about_us/'.$about->image));
       // return 1;
       $image = $request->file('image');

       $extension = $image->getClientOriginalExtension();
       $filename =time().'.'.$extension;
       $image->move('uploads/about_us',$filename);
       $about->image=$filename;
       $about->content=$content;
       $about->save();
       session()->flash('message', '  Updated successfully!');
       return redirect('admin/about-us');
    }
    else{
        $image = $request->file('image');
        $extension = $image->getClientOriginalExtension();
        $filename =time().'.'.$extension;
        $image->move('uploads/about_us',$filename);
        $about->image=$filename;
        $about->content=$content;
        $about->save();
        session()->flash('message', '  Updated successfully!');
        return redirect('admin/about-us');
    }
}

 }




    public function slidedlt($id){
       $id= decrypt($id);
       $slider=  Slider::findOrFail($id);

    if(File::exists(public_path('uploads/slider/'.$slider->image))){
        File::delete(public_path('uploads/slider/'.$slider->image));
      }else{
        dd('File does not exists.');
      }
    $slider->delete();
     session()->flash('message', 'Deleted successfully!');
     return redirect('admin/slider');
    }

    public function offer3list(){

        //$offer=Offer::all();
        $offer=Offer::where('cat',3)->get();
        //return $offer;
        return view('admin.offer3list')->with('offer', $offer);

    }
    public function offer2list(){

        //$offer=Offer::all();
        $offer=Offer::where('cat',2)->get();
        //return $offer;
        return view('admin.offer2list')->with('offer', $offer);

    }

    public function offer4list(){

        //$offer=Offer::all();
        $offer=Offer::where('cat',4)->get();
        //return $offer;
        return view('admin.offer4list')->with('offer', $offer);

    }

    public function pin_list(){

        //$offer=Offer::all();
        $pin=Pin::all();
        //return $offer;
        return view('admin.pincode_list')->with('pin', $pin);

    }


public function offeredit($id){
    $id=Crypt::decrypt($id);

    $myoffer=  Offer::findOrFail($id);
   // return $myoffer;
   return view('admin.offer3edit')->with('myoffer', $myoffer);

}

public function offer2edit($id){
    $id=Crypt::decrypt($id);

    $myoffer=  Offer::findOrFail($id);
   // return $myoffer;
   return view('admin.offer2edit')->with('myoffer', $myoffer);

}

public function offer4edit($id){
    $id=Crypt::decrypt($id);

    $myoffer=  Offer::findOrFail($id);
   // return $myoffer;
   return view('admin.offer4edit')->with('myoffer', $myoffer);

}
public function offer3updt(Request $request, $id){
    $id=Crypt::decrypt($id);
    //return $request;
  $offer=  Offer::findOrFail($id);

  $description = $request->get('description');
  $url = $request->get('url');
  //return $content;
   $image = $request->file('image');

  if( $image==''){

      $offer->description=$description;
      $offer->url=$url;
      $offer->save();
      session()->flash('message', '  Updated successfully!');
      return redirect('admin/offer3');
  }
  else{

  if(File::exists(public_path('uploads/offer/'.$offer->image))){
      File::delete(public_path('uploads/offer/'.$offer->image));
     // return 1;
     $image = $request->file('image');

     $extension = $image->getClientOriginalExtension();
     $filename =time().'.'.$extension;
     $image->move('uploads/offer',$filename);
     $offer->image=$filename;

     $offer->description=$description;
     $offer->url=$url;
     $offer->save();
     session()->flash('message', '  Updated successfully!');
     return redirect('admin/offer3');
  }
  else{
      $image = $request->file('image');
      $extension = $image->getClientOriginalExtension();
      $filename =time().'.'.$extension;
      $image->move('uploads/offer',$filename);
      $offer->image=$filename;

      $offer->description=$description;
      $offer->url=$url;
      $offer->save();
      session()->flash('message', '  Updated successfully!');
      return redirect('admin/offer3');
  }
}


}

public function offer2updt(Request $request, $id){
    $id=Crypt::decrypt($id);
    //return $request;
  $offer=  Offer::findOrFail($id);
//return $offer;

  $description = $request->get('description');
  $url = $request->get('url');
  //return $content;
   $image = $request->file('image');

  if( $image==''){

      $offer->description=$description;
      $offer->url=$url;
      $offer->save();
      session()->flash('message', '  Updated successfully!');
      return redirect('admin/offer2');
  }
  else{

  if(File::exists(public_path('uploads/offer/'.$offer->image))){
      File::delete(public_path('uploads/offer/'.$offer->image));
     // return 1;
     $image = $request->file('image');

     $extension = $image->getClientOriginalExtension();
     $filename =time().'.'.$extension;
     $image->move('uploads/offer',$filename);
     $offer->image=$filename;

     $offer->description=$description;
     $offer->url=$url;
     $offer->save();
     session()->flash('message', '  Updated successfully!');
     return redirect('admin/offer2');
  }
  else{
      $image = $request->file('image');
      $extension = $image->getClientOriginalExtension();
      $filename =time().'.'.$extension;
      $image->move('uploads/offer',$filename);
      $offer->image=$filename;

      $offer->description=$description;
      $offer->url=$url;
      $offer->save();
      session()->flash('message', '  Updated successfully!');
      return redirect('admin/offer2');
  }
}


}

public function offer4updt(Request $request, $id){
    $id=Crypt::decrypt($id);
    //return $request;
  $offer=  Offer::findOrFail($id);

  //return $menu_id;


  $url = $request->get('url');
  //return $content;
   $image = $request->file('image');

  if( $image==''){

      $offer->url=$url;
      $offer->save();
      session()->flash('message', '  Updated successfully!');
      return redirect('admin/offer4');
  }
  else{

  if(File::exists(public_path('uploads/offer/'.$offer->image))){
      File::delete(public_path('uploads/offer/'.$offer->image));
     // return 1;
     $image = $request->file('image');

     $extension = $image->getClientOriginalExtension();
     $filename =time().'.'.$extension;
     $image->move('uploads/offer',$filename);
     $offer->image=$filename;


     $offer->url=$url;
     $offer->save();
     session()->flash('message', '  Updated successfully!');
     return redirect('admin/offer4');
  }
  else{
      $image = $request->file('image');
      $extension = $image->getClientOriginalExtension();
      $filename =time().'.'.$extension;
      $image->move('uploads/offer',$filename);
      $offer->image=$filename;


      $offer->url=$url;
      $offer->save();
      session()->flash('message', '  Updated successfully!');
      return redirect('admin/offer4');
  }
}


}
public function courierlist(){
    $courier= Courier::all();
    //return $courier;
    return view('admin.courierlist')->with('courier', $courier);

}

public function company_policy(){
    $id=4;
    $about= About::findOrFail($id);
    return view('admin.company')->with('about', $about);

}

public function addcourier(){
  //  $coureir = new Courier;
  return view('admin.courieradd');

}

public function storecourier( Request $request){
//return $request;
    $coureir = new Courier;

    $courier_services_name = $request->get('courier_services_name');
    $address = $request->get('address');
    $contact_person_name = $request->get('contact_person_name');
    $contact_no = $request->get('contact_no');
    $email = $request->get('email');
    $website = $request->get('website');

    $coureir->courier_services_name=$courier_services_name;
    $coureir->address=$address;
    $coureir->contact_person_name=$contact_person_name;
    $coureir->contact_no=$contact_no;
    $coureir->website=$website;
    $coureir->email=$email;
    $coureir->save();
    session()->flash('message', ' One Courier Service Added Successfully!');
    return redirect('admin/courier');

}

public function couriereditc($id){
    $id=Crypt::decrypt($id);

    $courier=  Courier::findOrFail($id);

   // return $courier;


   return view('admin.courieredit')->with('courier', $courier);
}

public function courierupdt(Request $request, $id){
    $id=Crypt::decrypt($id);
    //return $id;
    $coureir= Courier::findOrFail($id);
    $courier_services_name = $request->get('courier_services_name');
    $address = $request->get('address');
    $contact_person_name = $request->get('contact_person_name');
    $contact_no = $request->get('contact_no');
    $email = $request->get('email');
    $website = $request->get('website');

    $coureir->courier_services_name=$courier_services_name;
    $coureir->address=$address;
    $coureir->contact_person_name=$contact_person_name;
    $coureir->contact_no=$contact_no;
    $coureir->website=$website;
    $coureir->email=$email;
    $coureir->save();
    session()->flash('message', ' Courier  Updated Successfully!');
    return redirect('admin/courier');

}

public function delcourier($id){
      $id=Crypt::decrypt($id);
    //return $id;
    $coureir= Courier::findOrFail($id);
    $coureir->delete();
    session()->flash('message', 'Deleted successfully!');
    return redirect('admin/courier');

}


public function company_policy_update(Request $request){
    $id=4;
    $about= About::findOrFail($id);
    $content = $request->get('editor1');
    $about->content=$content;
    $about->save();
    session()->flash('message', ' Terms Of Use Updated Successfully!');
    return redirect('admin/company-policy');


}


public function product_category_list(){

$category= Category::all();
//return $category;
return view('admin.categorylist')->with('category', $category);

}

public function brand_list(){

    $category= Brand::all();
    //return $category;
    return view('admin.brandlist')->with('category', $category);

    }


public function product_category_add(){
    return view('admin.categoryadd');

}


public function add_your_brand(){
    return view('admin.brandadd');

}

public function product_category_store(Request $request){
//return $request;
$category= New Category;
$product_category = $request->get('product_category');
$menu_id = $request->get('menu_id');
//return $menu_id;
$column_no = 0;
$sequence = 0;
$category->menu_id = $menu_id;
//return $category->menu_id ;
$category->product_category = $product_category;
//$category->column_no = $column_no;
$category->column_no = $column_no;
$category->sequence = $sequence;
$category->save();
session()->flash('message', ' Product Category Added Successfully!');
return redirect('admin/prcatlist');

}

public function brand_store(Request $request){
    //return $request;
    $brand= New Brand;
    $product_category = $request->get('product_category');

    //return $menu_id;

    //return $category->menu_id ;
    $brand->brand_name = $product_category;
    //$category->column_no = $column_no;

    $brand->save();
    session()->flash('message', ' One Brand Added Successfully!');
    return redirect('admin/brand-list');

    }

public function updtcat(Request $request, $id){
    $id=Crypt::decrypt($id);
   // return $request;
     $category= Category::findOrFail($id);
$product_category = $request->get('product_category');
$menu_id = $request->get('menu_id');
//return $menu_id;
$column_no = 0;
$sequence = 0;
$category->menu_id = $menu_id;
//return $category->menu_id ;
$category->product_category = $product_category;
//$category->column_no = $column_no;
$category->column_no = $column_no;
$category->sequence = $sequence;
$category->save();
session()->flash('message', ' Product Category Updated Successfully!');
return redirect('admin/prcatlist');

}

public function update_brand(Request $request, $id){
    $id=Crypt::decrypt($id);
  //  return $request;
     $brand= Brand::findOrFail($id);
$product_category = $request->get('product_category');

//return $category->menu_id ;
$brand->brand_name = $product_category;
//$category->column_no = $column_no;

$brand->save();
session()->flash('message', 'One Brand Updated Successfully!');
return redirect('admin/brand-list');

}

public function editcat($id){
    $id=Crypt::decrypt($id);
   // return $id;
    $category= Category::findOrFail($id);
    $menu= menu::all();
   // return $category;
   return view('admin.categoryedit')->with('category', $category)->with('menu', $menu);
}
public function edit_pin($id){
    //return 1;
    $id=Crypt::decrypt($id);
   //return $id;
    $pin= Pin::findOrFail($id);

   // return $pin;
   return view('admin.pincode_edit')->with('pin', $pin);;

}

public function edit_brand($id){
    $id=Crypt::decrypt($id);
   // return $id;
    $brand= Brand::findOrFail($id);

   //return $category;
   return view('admin.brand_edit')->with('brand', $brand);
}

public function catdel($id){
    $id=Crypt::decrypt($id);
   // return $id;
    $category= Category::findOrFail($id);
  $category->delete();
  session()->flash('message', 'Deleted successfully!');
  return redirect('admin/prcatlist');

}

public function delpin($id){
    $id=Crypt::decrypt($id);
   // return $id;
    $pin= Pin::findOrFail($id);
  $pin->delete();
  session()->flash('message', 'Deleted successfully!');
  return redirect('admin/pincode-list');

}
public function brandel($id){
    $id=Crypt::decrypt($id);
   // return $id;
    $brand= Brand::findOrFail($id);
  $brand->delete();
  session()->flash('message', 'Deleted successfully!');
  return redirect('admin/brand-list');

}

public function product_name_list(){

    $prname= Productname::orderBy('product_name_id', 'DESC')->get();
    //return $category;
    return view('admin.productnamelist')->with('prname', $prname);

    }
public function product_name_add(){
return view('admin.productnameadd');


}
public function product_name_delete($id){
    $id=Crypt::decrypt($id);
   // return $id;
    $Productname= Productname::findOrFail($id);
  $Productname->delete();
  session()->flash('message', 'Deleted successfully!');
  return redirect('admin/prnamelist');

}
public function product_name_store(Request $request){
//return $request;
$Productname= New Productname;
$menu_id = $request->get('menu_id');
$product_name = $request->get('product_name');

$product_category_id = $request->get('product_category_id');
//return $product_name;
$Productname->menu_id = $menu_id;

$Productname->product_category_id = $product_category_id;
$Productname->product_name = $product_name;

if( $request->hasFile('image')){
    $image = $request->file('image');
    $extension = $image->getClientOriginalExtension();
$filename =time().'.'.$extension;
$image->move('uploads/category',$filename);
$Productname->image=$filename;

}
else
{
   // return $request;
    $Productname->image='';
}
$favourite = $request->get('favourite');
if($favourite==1){
    $favourite=1;
}
else{
    $favourite=0;
}

$toys = $request->get('toys');
if($toys==1){
    $toys=1;
}
else{
    $toys=0;
}

$grooming = $request->get('grooming');
if($grooming==1){
    $grooming=1;
}
else{
    $grooming=0;
}


$Productname->save();
session()->flash('message', ' Product Name Updated Successfully!');
return redirect('admin/prnamelist');

}

    public function edit_product_name($id){
        $id=Crypt::decrypt($id);
      // return $id;
       $product= Productname::find($id);
     //$product=ProductName::where('product_name_id',$id)->get();
    //return $product;


      return view('admin.productnamedit')->with('productname', $product);
    }

    public function updtprname(Request $request, $id){
        $id=Crypt::decrypt($id);
      // return $request;
    $Productname= Productname::findOrFail($id);
    $menu_id = $request->get('menu_id');
    $product_name = $request->get('product_name');
    //return $menu_id;
    $product_category_id = $request->get('product_category_id');
    $favourite = $request->get('favourite');
    $toys = $request->get('toys');
    $grooming = $request->get('grooming');
    $image = $request->file('image');
    if($favourite==1){
        $favourite=1;
    }
    else{
        $favourite=0;
    }

    $toys = $request->get('toys');
    if($toys==1){
        $toys=1;
    }
    else{
        $toys=0;
    }

    $grooming = $request->get('grooming');
    if($grooming==1){
        $grooming=1;
    }
    else{
        $grooming=0;
    }
    if( $image==''){

        $Productname->menu_id = $menu_id;
        $Productname->product_category_id = $product_category_id;
        $Productname->product_name = $product_name;
        $Productname->favourite = $favourite;
        $Productname->toys = $toys;
        $Productname->grooming = $grooming;

    $Productname->save();
    session()->flash('message', ' Product Name Updated Successfully!');
    return redirect('admin/prnamelist');
    }
    else{


    if(File::exists(public_path('uploads/category/'.$Productname->image))){
        File::delete(public_path('uploads/category/'.$Productname->image));
       // return 1;
       $image = $request->file('image');

       $extension = $image->getClientOriginalExtension();
       $filename =time().'.'.$extension;
       $image->move('uploads/category',$filename);
       $Productname->image=$filename;



        $Productname->menu_id = $menu_id;
        $Productname->product_category_id = $product_category_id;
        $Productname->product_name = $product_name;
        $Productname->favourite = $favourite;
        $Productname->toys = $toys;
        $Productname->grooming = $grooming;

    $Productname->save();
    session()->flash('message', ' Product Name and Image  Updated Successfully!');
    return redirect('admin/prnamelist');

    }
    else{
        $image = $request->file('image');
        $extension = $image->getClientOriginalExtension();
        $filename =time().'.'.$extension;
        $image->move('uploads/category',$filename);
        $Productname->image=$filename;
        $Productname->menu_id = $menu_id;
        $Productname->product_category_id = $product_category_id;
        $Productname->product_name = $product_name;
        $Productname->favourite = $favourite;
        $Productname->toys = $toys;
        $Productname->grooming = $grooming;
        $Productname->save();
        session()->flash('message', ' Product Name and Image  Updated Successfully!');
        return redirect('admin/prnamelist');
    }
}
}
public function product_size_list(){
//return 1;
   $prsize= ProductSize::all();
    return view('admin.productsizelist')->with('prsize', $prsize);


}
public function product_size_add(){

return view('admin.productsizeadd');
}

public function product_size_store(Request $request){
    $prsize= new ProductSize;

    $size = $request->get('size');
    $prsize->size=$size;
    $prsize->save();
    session()->flash('message', ' Product Size Added Successfully!');
    return redirect('admin/prsize');

}

public function product_size_edit($id){
    $id=Crypt::decrypt($id);
    $prsize= ProductSize::findOrFail($id);
    return view('admin.productsizeedit')->with('prsize', $prsize);
}

public function product_size_update(Request $request,$id){
  $id=Crypt::decrypt($id);
  $prsize= ProductSize::findOrFail($id);

  $size = $request->get('size');
  $prsize->size=$size;
  $prsize->save();
  session()->flash('message', ' Product Size Updated Successfully!');
  return redirect('admin/prsize');

}
public function product_size_delete($id){
    $id=Crypt::decrypt($id);
    $prsize= ProductSize::findOrFail($id);
    $prsize->delete();
    session()->flash('message', ' Product Size Deleted  Successfully!');
    return redirect('admin/prsize');


}

public function product_color_list(){

   //s return 1;
    $productcolor= ProductColor::all();
    return view('admin.productcolorlist')->with('productcolor', $productcolor);

}


public function product_color_add(){

    return view('admin.productcoloradd');
}
public function privacy_policy(){
    $id=6;
    $about= About::findOrFail($id);
    return view('admin.privacy')->with('about', $about);

}

public function product_color_sotre(Request $request){
    $productcolor= new ProductColor;
    $product_colour = $request->get('product_colour');
    $product_colour_code = $request->get('product_colour_code');
    //return $product_colour;
    $productcolor->product_colour=$product_colour;
    $productcolor->product_colour_code=$product_colour_code;
    $productcolor->save();
    session()->flash('message', ' Added Successfully!');
    return redirect('admin/prcolor');
}

public function product_color_edit($id){
    $id=Crypt::decrypt($id);
    $prcolor= ProductColor::findOrFail($id);
    return view('admin.productcoloredit')->with('prcolor', $prcolor);
}

public function product_color_update(Request $request,$id){

    $id=Crypt::decrypt($id);
  //  return $id;
    $productcolor= ProductColor::findOrFail($id);
    $product_colour = $request->get('product_colour');
    $product_colour_code = $request->get('product_colour_code');
    //return $product_colour;
    $productcolor->product_colour=$product_colour;
    $productcolor->product_colour_code=$product_colour_code;
    $productcolor->save();
    session()->flash('message', ' Product Color  Successfully!');
    return redirect('admin/prcolor');

}

public function product_color_delete($id){
    $id=Crypt::decrypt($id);
    $prcolor= ProductColor::findOrFail($id);
    $prcolor->delete();
    session()->flash('message', ' One row effectd: Product Color Deleted  Successfully!');
    return redirect('admin/prcolor');


}


public function product_details_list(){
    $prdetails= ProductDetails::orderBy('product_id', 'DESC')->get();
  //  return $prdetails;
    return view('admin.produdetailslist')->with('prdetails', $prdetails);

}

public function product_details_add(){
    $category= Category::orderBy('product_category_id', 'DESC')->get();
    return view('admin.produdetailsadd')->with('category', $category);

}

public function product_details_edit($id){
    $id=Crypt::decrypt($id);
   // return $id;
    $prdetails= ProductDetails::findOrFail($id);
  //  return $prdetails;
  $category= Category::orderBy('product_category_id', 'DESC')->get();
    return view('admin.produdetailsedit')->with('prdetails', $prdetails)->with('category', $category);

}

public function privacy_policy_update(Request $request){
    $id=6;
    $about= About::findOrFail($id);
    $content = $request->get('editor1');
    $about->content=$content;
    $about->save();
    session()->flash('message', ' Privacy Policy Updated Successfully!');
    return redirect('admin/privacy-policy');


}
public function cencellation_policy(){
    $id=3;
    $about= About::findOrFail($id);
    return view('admin.cancellation')->with('about', $about);

}


public function cencellation_policy_update(Request $request){
    $id=3;
    $about= About::findOrFail($id);
    $content = $request->get('editor1');
    $about->content=$content;
    $about->save();
    session()->flash('message', ' FAQ Updated Successfully!');
    return redirect('admin/faq');


}

public function shippingpolicy(){
    $id=5;
    $about= About::findOrFail($id);
    return view('admin.shippingpolicy')->with('about', $about);

}

public function ajafetch(Request $request){
//return 'hi';
    $cat_id= $request->query('cat_id');
//return $cat_id;
$productname= Productname::where('product_category_id',$cat_id)->get();
//return $productname;
//return Response::json($productname);
// return response()->json($productname);
//echo $productname;
// json_encode(array('changedone'=>$productname));
$np='Select Name';

$nwpt = '<option value=" ">'.$np.'</option>';
echo $nwpt;
foreach($productname as $row)
{
 $output = '<option value="'.$row->product_name_id.'">'.$row->product_name.'</option>';
 echo $output;
}


}
public function menufetch(Request $request){
    //return 'hi';
        $cat_id= $request->query('cat_id');
    //return $cat_id;
    $productname= Category::where('menu_id',$cat_id)->get();
    //return $productname;
    //return Response::json($productname);
    // return response()->json($productname);
    //echo $productname;
    // json_encode(array('changedone'=>$productname));
    $np='Select Category';
    $nwpt = '<option value=" ">'.$np.'</option>';
    echo $nwpt;
    foreach($productname as $row)
    {
     $output = '<option value="'.$row->product_category_id.'">'.$row->product_category.'</option>';

     echo $output;
    }


    }


public function product_details_store(Request $request){
//return $request;

$request->validate([
    'product_category_id' => 'required',
    //'product_name_id' => 'required',
    'product_name' => 'required',
    'description' => 'required',
    'txt_price' => 'required',
    'txt_discount' => 'required',
    'actual_price' => 'required',
    'delivery_charge' => 'required',
    'delivery_charge' => 'required',
    'brand_id' => 'required',
    'image' => 'required',
    'color' => 'required',
    'size' => 'required',
    'image' => 'required',
]);
$product=  new ProductDetails;

$product_category_id = $request->get('product_category_id');
//return $product_category_id;
$menu_id = $request->get('menu_id');
//return $menu_id;
$color = $request->get('color');
$size = $request->get('size');
$product_name_id = 0;
$product_name = $request->get('product_name');
$description = $request->get('description');
$price = $request->get('txt_price');
$brand_id = $request->get('brand_id');

//return $price;food_type
$actual_price = $request->get('actual_price');
$discount = $request->get('txt_discount');
$delivery_charge = $request->get('delivery_charge');
$offers = $request->get('offers');
if($offers==1){
    $offers=1;
}
else{
    $offers=0;
}
$featured = $request->get('featured');
if($featured==1){
    $featured=1;
}
else{
    $featured=0;
}
$bestselling = $request->get('bestselling');
if($bestselling==1){
    $bestselling=1;
}
else{
    $bestselling=0;
}
$home = $request->get('home');
if($home==1){
    $home=1;
}
else{
    $home=0;
}
//return $home;
$product->menu_id=$menu_id;
$product->product_category_id=$product_category_id;
$product->product_name_id=$product_name_id;
$product->product_name=$product_name;
$product->description=$description;
$product->price=$price;
$product->actual_price=$actual_price;
$product->discount=$discount;
$product->delivery_charge=$delivery_charge;
$product->offers=$offers;
$product->feature_products=$featured;
$product->best_selling=$bestselling;
$product->brand_id=$brand_id;
$product->food_type1=0;
$product->home=$home;
//
$product->price_ex_gst='';
$product->price_gst='';
$product->discount_ex_gst='';
$product->discount_gst='';
$product->actual_price_ex_gst='';
$product->actual_price_gst='';
$product->actual_gst='';

$product->save();
$product_id=$product->product_id;
//$menu_id=$product->menu_id;
//return $product_id;
$brandproduct= new BrandProduct;
$brandproduct->brand_id=$brand_id;
$brandproduct->product_category_id=$product_category_id;
$brandproduct->product_name_id=$product_name_id;
$brandproduct->product_id=$product_id;
$brandproduct->save();
$size_id= new ProductDetailSize;
$size_id->price=$price;
$size_id->actual_price=$actual_price;
$size_id->discount=$discount;
$size_id->delivery_charge=$delivery_charge;
$size_id->product_id=$product_id;
$size_id->default_price=1;
$size_id->stock=1;
//$size_id->menu_id=$menu_id;
$size_id->product_size_id=37;
$size_id->product_colour_id=11;
$size_id->product_category_id=$product_category_id;
$size_id->product_name_id=$product_name_id;
$size_id->save();
$product_details_size_id=$size_id->product_details_size_id;

$procolor = new ProductDetailsColor;
$procolor->product_id=$product_id;
$procolor->product_colour_id=11;
$procolor->default_colour=1;
$procolor->product_details_size_id=$product_details_size_id;
$procolor->product_category_id=$product_category_id;
$procolor->product_name_id=$product_name_id;
$procolor->save();
$product_details_colour_id=$procolor->product_details_colour_id;

$prdetailsimg = new ProductDetailsImage;


$prdetailsimg->product_id=$product_id;
$prdetailsimg->product_details_colour_id=$product_details_colour_id;
$prdetailsimg->product_colour_id=11;
$prdetailsimg->default_image=1;

if( $request->hasFile('image')){
$image = $request->file('image');
$extension = $image->getClientOriginalExtension();
$filename =time().'.'.$extension;
//$path = public_path('uploads/products/' . $filename);
    $image->move('uploads/products',$filename);
  //  Image::make($image->getRealPath())->resize(1000, 1000)->save($path);
$prdetailsimg->image=$filename;

}
else
{
return $request;
$prdetailsimg->image='';
}
$prdetailsimg->save();
session()->flash('message', 'Product Added Successfully!');
return redirect('admin/prdetials');


}


public function product_details_update(Request $request,$id){
    $id=Crypt::decrypt($id);

    $product=ProductDetails::findOrFail($id);

    $request->validate([


        'product_name' => 'required',
        'description' => 'required',
        'txt_price' => 'required',
        'txt_discount' => 'required',
        'actual_price' => 'required',
        'delivery_charge' => 'required',
        'delivery_charge' => 'required'
    ]);


    $product_category_id = $request->get('product_cat_id');
    //return  product_category_id;
    $product_name_id = $request->get('product_name_id');
    $product_name = $request->get('product_name');
    $description = $request->get('description');
    $price = $request->get('txt_price');
    $actual_price = $request->get('actual_price');
    $discount = $request->get('txt_discount');
    $delivery_charge = $request->get('delivery_charge');
    $offers = $request->get('offers');
    $menu_id = $request->get('menu_id');
    if($offers==1){
        $offers=1;
    }
    else{
        $offers=0;
    }
    $featured = $request->get('featured');
    if($featured==1){
        $featured=1;
    }
    else{
        $featured=0;
    }
    $bestselling = $request->get('bestselling');
    if($bestselling==1){
        $bestselling=1;
    }
    else{
        $bestselling=0;
    }
    $home = $request->get('home');
    if($home==1){
        $home=1;
    }
    else{
        $home=0;
    }
    //return $home;
    $product->menu_id=$menu_id;
    $product->product_category_id=$product_category_id;
    $product->product_name_id=$product_name_id;
    $product->product_name=$product_name;
    $product->description=$description;
    $product->price=$price;
    $product->actual_price=$actual_price;
    $product->discount=$discount;
    $product->delivery_charge=$delivery_charge;
    $product->offers=$offers;
    $product->feature_products=$featured;
    $product->best_selling=$bestselling;
    $product->home=$home;
    //
    $product->price_ex_gst='';
    $product->price_gst='';
    $product->discount_ex_gst='';
    $product->discount_gst='';
    $product->actual_price_ex_gst='';
    $product->actual_price_gst='';
    $product->actual_gst='';

    $product->save();
    $pro_id= $product->product_id;

    $menu_id= $product->menu_id;

    $size_id= ProductDetailSize::where('product_id',$pro_id)->update(['menu_id'=>$menu_id]);
// $size_id->menu_id=$menu_id;

    session()->flash('message', 'Product Updated Successfully!');
    return redirect('admin/prdetials');
}

public function product_details_color_list($id){

    $product_id=Crypt::decrypt($id);
    //return $id;
   //$product=ProductDetails::findOrFail($id);
    //return $product;
    $prdcolor=ProductDetailsColor::where('product_id', $product_id)->get();
       //  $prdcolor;
        if($prdcolor->isEmpty()){

            $prdcolor=ProductColor::all();
            // return $prdcolor;
            session()->flash('message', ' Please Add atleast one color');
            return view('admin.product_details_add_color')->with('prdcolor', $prdcolor)->with('details_id',$id);
        }
        // else {
        //     return 0;
        // }


    return view('admin.product_details_color_list')->with('prdcolor', $prdcolor)->with('product_id', $product_id);



}

public function product_details_size_list($id){
    $id=Crypt::decrypt($id);
    //return $id;
    $prsize=ProductDetailSize::where('product_id', $id)->get();

    //session()->flash('message', ' Please Add atleast one size');
    if($prsize->isNotEmpty()) {

    return view('admin.product_details_size_tbl')->with('prsize', $prsize)->with('product_id', $id);
    }
    else {
        return view('admin.product_details_empty_table')->with('product_id', $id);

    }

}

public function pin_lists(){
   // $id=Crypt::decrypt($id);
    //return $id;
    $pin= Pin::all();

    //session()->flash('message', ' Please Add atleast one size');

    return view('admin.bloglist')->with('pin', $pin);



}

public function coupon_lists(){
    // $id=Crypt::decrypt($id);
     //return $id;
     $promo= Promocode::all();

     //session()->flash('message', ' Please Add atleast one size');

     return view('admin.coupon_list')->with('promo', $promo);



 }
public function change_demo_size($id){
     $id=Crypt::decrypt($id);

     return view('admin.change_demo');
}
 public function change_demo_updt( Request $request, $crid){
    $id=Crypt::decrypt($crid);
    $product_size= ProductDetailSize::find($id);
   // return $product_size;
    $size = $request->get('product_size');
   // return $size;

    $product_size->product_size_id=$size;
    $product_size->save();
    $product_id= $product_size->product_id;
    $product_id=Crypt::encrypt($product_id);
    session()->flash('message', 'Demo Updated  Successfully!');
    return redirect('admin/prsizelist/'.$product_id);


 }
public function product_details_size_add($id){
    $id=Crypt::decrypt($id);
    $prsize=ProductDetailSize::where('product_id', $id)->get();
    // return $prsize;
    $prd_size=ProductSize::all();



    return view('admin.product_details_add_table')->with('product_id', $id)->with('prd_size', $prd_size);
}

public function product_details_color_add($id){
    $id=Crypt::decrypt($id);
 // return $id;
    $prdcolor=ProductColor::all();
   // return $prdcolor;

   return view('admin.product_details_add_color')->with('prdcolor', $prdcolor)->with('details_id',$id);

}

public function product_details_size_delete($id,$id2){
    $id=Crypt::decrypt($id);
   // $did2=Crypt::decrypt($id2);
    //return $did2;
    $prdsize= ProductDetailSize::findOrFail($id);
  //  return $prdsize;
  $prdsize->delete();
  session()->flash('message', 'Deleted  Successfully!');
   return redirect('admin/prsizelist/'.$id2);


}
public function product_details_color_store(Request $request, $encrypt_id){

    $id=Crypt::decrypt($encrypt_id);
 $product= ProductDetails::where('product_id',$id)->get();

    $services = $request->input('services');
 $count=count($services);
//$prdtcolor= new ProductDetailsColor;
for ($i = 0; $i < count($services); $i++) {
$prdtcolor= new ProductDetailsColor;
 $prdtcolor->product_colour_id=$services[$i];
    $prdtcolor->product_id=$id;
    $prdtcolor->product_category_id=$product[0]->product_category_id;
    $prdtcolor->product_name_id=$product[0]->product_name_id;
    $prdtcolor->default_colour=0;
    $prdtcolor->save();
  // //echo 1;
    }

//return  $prdtcolor->product_colour_id;exit;

    session()->flash('message', ''.$count.' Rows Effected: Color(s) Added  Successfully!');
   return redirect('admin/prcolorlist/'.$encrypt_id);


}
public function product_details_size_store(Request $request, $prod_id){
    $id=Crypt::decrypt($prod_id);
    //return $id;
    $product_colour_id = $request->get('product_colour_id');
    $product_size_id = $request->get('services');

    $stock = $request->get('quantity');


    $product=ProductDetails::where('product_id',$id)->get();
    $nam_id= $product[0]->product_name_id;
    $cat_id= $product[0]->product_category_id;
    $menu_id= $product[0]->menu_id;


    $request->validate([
        'product_colour_id' => 'required',


    ]);
   for ($i = 0; $i < count($product_size_id); $i++) {
    $prdsize= new ProductDetailSize;
        $prdsize->product_size_id=$product_size_id[$i];
        $prdsize->product_colour_id=$product_colour_id;
        $prdsize->product_id=$id;
        $prdsize->menu_id=$menu_id;
        $prdsize->product_category_id=$cat_id;
        $prdsize->product_name_id=$nam_id;
        $prdsize->stock=1;
        $prdsize->default_price=1;

        $prdsize->save();
      // //echo 1;
        }
        session()->flash('message', count($product_size_id).' Rows Affected:  Added Successfully!');
        return redirect('admin/prsizelist/'.$prod_id);


}

public function product_details_image_add($id,$id2,$id3){
   // return 1;
    return view('admin.product_details_singleadd')->with('id',$id)->with('id2',$id2)->with('id3',$id3);
}
public function  product_details_size_stock($product_details_size_id,$product_id,$stock){
   //return $stock;

   //return 1;
    return view('admin.product_stock_in_hand')->with('stock',$stock);
}

public function  product_details_size_stock_rm($product_details_size_id,$product_id,$stock){
    // return $stock;
     return view('admin.product_stock_in_hand_minus')->with('stock',$stock);
 }
public function product_details_size_stock_store(Request $request,$product_details_size_id,$product_id,$current){
   // return $request;
   // return $stock;
   $product_details_size_id=Crypt::decrypt($product_details_size_id);
   $inhand = $request->get('inhand');
  // return $inhand;
  $stock=$inhand+$current;
  $product_details_size= ProductDetailSize::where('product_details_size_id',$product_details_size_id)->get();


  $found_id= $product_details_size[0]->product_details_size_id;
  $save_stock= ProductDetailSize::findOrFail($found_id);
  $save_stock->stock=$stock;
  $save_stock->save();
  session()->flash('message', $inhand.' : Added In Stock Successfully!');
  return redirect('admin/prsizelist/'.$product_id);

}
public function product_details_size_stock_remove(Request $request,$product_details_size_id,$product_id,$current){
    // return $request;
    // return $stock;
    $product_details_size_id=Crypt::decrypt($product_details_size_id);
    $inhand = $request->get('inhand');
   // return $inhand;
   $stock= $current - $inhand;
   $product_details_size= ProductDetailSize::where('product_details_size_id',$product_details_size_id)->get();


   $found_id= $product_details_size[0]->product_details_size_id;
   $save_stock= ProductDetailSize::findOrFail($found_id);
   $save_stock->stock=$stock;
   $save_stock->save();
   session()->flash('message', $inhand.' :stocks  Removed  Successfully!');
   return redirect('admin/prsizelist/'.$product_id);

 }

 public function product_details_set_price($idd,$idd2){
    $size_id=Crypt::decrypt($idd);
    $product_id=Crypt::decrypt($idd2);
    //return $size_id;
    return view('admin.setprice_add')->with('size_id',$size_id)->with('idd',$idd)->with('idd2',$idd2);


 }

 public function product_details_set_price_store(Request $request,$id,$id2){
    $size_id=Crypt::decrypt($id);

    $product_id=Crypt::decrypt($id2);
    $price = $request->get('txt_price');
    $discount = $request->get('txt_discount');
    $actual_price = $request->get('actual_price');
    $delivery_charge = $request->get('delivery_charge');

    $product_details_size= ProductDetailSize::find($size_id);
    $product_details_size->discount=$discount;
    $product_details_size->price=$price;
    $product_details_size->actual_price=$actual_price;
    $product_details_size->delivery_charge=$delivery_charge;
    $product_details_size->save();

    session()->flash('message', ' Updated  Successfully!');
    return redirect()->back();
 }


public function product_details_color_delete($id,$id2){
    $id=Crypt::decrypt($id);
   // return $id;
    $product_id=Crypt::decrypt($id2);
    //return $product_id;
    $primg= ProductDetailsImage::where('product_details_colour_id',$id)->get();

    // $primg->delete();\
    //return count($primg[0]->product_image_details_id);
    for($i=0; $i<count($primg);$i++){
        $delimg= ProductDetailsImage::findOrFail($primg[$i]->product_image_details_id);
        if(File::exists(public_path('uploads/products/'.$delimg->image))){
            File::delete(public_path('uploads/products/'.$delimg->image));
          }else{
              $delimg->delete();
            dd('File does not exists.');
          }
        $delimg->delete();
        //echo $primg[$i]->product_image_details_id;
    }
    //exit;

    $prdelete= ProductDetailsColor::findOrFail($id);
    //return $prdelete;
    $prdelete->delete();
    session()->flash('message', ' Deleted  Successfully!');
    return redirect('admin/prcolorlist/'.$id2);

   }

   public function product_details_delete($id){
    $id=Crypt::decrypt($id);

    $prdcolor= ProductDetailsColor::where('product_id',$id)->get();
   // $product_details_colour_id= $prdcolor[0]->product_details_colour_id;
    $primg= ProductDetailsImage::where('product_id',$id)->get();

    //return 1;
    // $primg->delete();\
    //return count($primg[0]->product_image_details_id);

    /////////////////

    if($primg->isNotEmpty()) {
    for($i=0; $i<count($primg);$i++){
        $delimg= ProductDetailsImage::findOrFail($primg[$i]->product_image_details_id);
        if(File::exists(public_path('uploads/products/'.$delimg->image))){
            File::delete(public_path('uploads/products/'.$delimg->image));
          }else{
            $delimg->delete();
          }
       $delimg->delete();
      // echo $delimg;

    }
   // exit;
}



    if($prdcolor->isNotEmpty()) {
    for($i=0; $i<count($prdcolor);$i++){
        $delcolor= ProductDetailsColor::findOrFail($prdcolor[$i]->product_details_colour_id);

        $delcolor->delete();



        //echo $primg[$i]->product_image_details_id;
    }
  //  exit;
}

// exit;
    $prdsize= ProductDetailSize::where('product_id',$id)->get();
   // return  $prdsize;
   if($prdsize->isNotEmpty()) {
    for($i=0; $i<count($prdsize);$i++){
        $delsize= ProductDetailSize::findOrFail($prdsize[$i]->product_details_size_id);
        $delsize->delete();

    }
    //exit;
}
$product=ProductDetails::findOrFail($id);
//echo $product;
$product->delete();
session()->flash('message', ' One Product Deleted   Successfully!');
return redirect('admin/prdetials');



   }

public function product_details_color_default($id,$id2,$id3){
    $id=Crypt::decrypt($id);
    $product_id=Crypt::decrypt($id2);
    $default= ProductDetailsColor::findOrFail($id);
    $default->default_colour=$id3;
    $default->save();
    session()->flash('message', ' Changed Default   Successfully!');
    return redirect('admin/prcolorlist/'.$id2);

}


public function product_details_image_list($id,$id2,$id3){
    $product_details_colour_id=Crypt::decrypt($id);
   // return  $product_details_colour_id;
    $product_id=Crypt::decrypt($id2);
   // ProductDetailsImage
$prdimg= ProductDetailsImage::where('product_details_colour_id', $product_details_colour_id)->get();
//return $product_id;
if($prdimg->isEmpty()){
    return view('admin.product_details_singleadd')->with('id',$id)->with('id2',$id2)->with('id3',$id3);
}


    return view('admin.product_details_add_images')->with('prdimg', $prdimg)->with('id',$id)->with('id2',$id2)->with('id3',$id3);

}


public function product_details_image_store( Request $request,$id,$id2,$id3){
    $product_details_colour_id=Crypt::decrypt($id);
    $product_id=Crypt::decrypt($id2);

    $validatedData = $request->validate([
        'image' => 'required',



    ]);
    $prdetailsimg = new ProductDetailsImage;


         $prdetailsimg->product_id=$product_id;
         $prdetailsimg->product_details_colour_id=$product_details_colour_id;
         $prdetailsimg->product_colour_id=$id3;

      if( $request->hasFile('image')){
        $image = $request->file('image');
        $extension = $image->getClientOriginalExtension();
    $filename =time().'.'.$extension;
    // //$path = public_path('uploads/products/' . $filename);
    $image->move('uploads/products',$filename);
    //Image::make($image->getRealPath())->resize(1000, 1000)->save($path);

    $prdetailsimg->image=$filename;

    }
    else
    {
        return $request;
        $prdetailsimg->image='';
    }


       $prdetailsimg->save();
       $color_id= $prdetailsimg->product_colour_id;
       $product_detail_image= ProductDetailSize::where('product_id',$product_id)->update(['product_colour_id'=>$color_id]);



       session()->flash('message', ' Added successfully!');
       return redirect('admin/prdetails_gallerylist/'.$id.'/'.$id2.'/'.$id3);

}

public function delete_product_image_details($product_image_details_id,$id2,$id3){

    $product_image_details_id=Crypt::decrypt($product_image_details_id);
 // return $product_image_details_id;
    $product_id=Crypt::decrypt($id3);
    $product_details_colour_id=Crypt::decrypt($id2);
   // return $product_details_colour_id;
    $prdimg=  ProductDetailsImage::findOrFail($product_image_details_id);
  //  return $product_id;
 if(File::exists(public_path('uploads/products/'.$prdimg->image))){
     File::delete(public_path('uploads/products/'.$prdimg->image));
   }else{
     dd('File does not exists.');
   }
 $prdimg->delete();
  session()->flash('message', 'Deleted successfully!');
  return redirect()->back();
  //return redirect('admin/prdetails_gallerylist/'.$id2.'/'.$id3);

}

public function product_image_details_set($id1,$id2,$id3,$id4){
    $product_image_details_id=Crypt::decrypt($id1);
    //return $id4;


    $prdimg=  ProductDetailsImage::findOrFail($product_image_details_id);
    //return $prdimg;
    $prdimg->default_image=$id4;
    $prdimg->save();
    session()->flash('message', 'Default Image Set successfully!');
    return redirect()->back();
    //return redirect('admin/prdetails_gallerylist/'.$id2.'/'.$id3);


}

public function shippingpolicy_update(Request $request){
    $id=5;
    $about= About::findOrFail($id);
    $content = $request->get('editor1');
    $about->content=$content;
    $about->save();
    session()->flash('message', ' Our Portfolio Updated Successfully!');
    return redirect('admin/our-portfolio');


}
    public function logoff(){
        auth()->logout();
        return redirect('/login');
    }

}
