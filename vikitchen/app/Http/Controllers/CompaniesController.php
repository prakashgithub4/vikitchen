<?php

namespace App\Http\Controllers;

use App\Company;
use App\Slider;
use App\Product;
use Illuminate\Http\Request;

class CompaniesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //return 1;
         $company=Company::all();
            //return $slider;

        return view('addpro')->with('company', $company);


    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)

    {
     $product= New Product;
     $product->name=$request->get('name');
     $product->product_id=$request->get('product_id');
     $product->save();
     return redirect('/product');





    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Company  $company
     * @return \Illuminate\Http\Response
     */
    public function show()
    {
        $company = Company::all();
        return view('showproduct')->with('company', $company);

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Company  $company
     * @return \Illuminate\Http\Response
     */
    public function list( Request $request )
    {
        $id=$request->get('company_id');
       //return $id;
        $company =Company::all();
        //return $product;
         $product=Product::where('product_id',$id)->get();

         return view('seeproducts')->with('product', $product)->with('company', $company)->with('id', $id);

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Company  $company
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Company $company)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Company  $company
     * @return \Illuminate\Http\Response
     */
    public function destroy(Company $company)
    {
        //
    }
}
