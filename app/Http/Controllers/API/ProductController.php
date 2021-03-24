<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Models\Product;
use App\Models\Category;
use App\Product as AppProduct;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Validation\Rules\Unique;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       // return response(Product::all(),200) ;
       return response(Product::paginate(5),200);
    
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
              
        $product=new Product;
        $product->id=$request->id;
        $product->name=$request->name;
        $product->title=$request->title;
        $product->description=$request->description;
        $product->value=$request->value;
        $product->save();

        return response(['message'=>'Product created','data'=> $product],201);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        
        $product=Product::with('categories')->find(40);
    

        if (Product::find($id)) {
            return response(['message'=>'Success','product'=>$product],200);
        }
        else {
            return response(['message'=>'Product not found!'],404);
        }
       
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Product $product)
    {
        $product->name=$request->name;
        $product->title=$request->title;
        $product->description=$request->description;
        $product->value=$request->value;
        $product->save();
        return response(['message'=>'Product update','data'=> $product],200);
        //return response($product,200);

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function destroy(Product $product)
    {
        $product->delete();
        
        return response(['message'=>'Product deleted'],200);
    }

    
}
