<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ProjectController extends Controller
{
    //

    function index(){

        $products = DB::table('product')->get();

        return view('index', ['products'=>$products]);
    }

    public function add_product(){

        return view('add_product');
    }

    public function edit_product(Request $request, $id){

        $product_array = DB::table('product')->where('id',$id)->get();

        return view('edit_product', ['product_array'=>$product_array]);
    }

    public function edit_product_image(){

        return view('edit_product_image');
    }


    public function update_product(Request $request){

        $id = $request->input('id');
        $name = $request->input('name');
        $description = $request->input('description');
        $price = $request->input('price');
        $sale_price = $request->input('sale_price');
        $quantity = $request->input('quantity');
        $category = $request->input('category');
        $type = $request->input('type');


        DB::table('product')->where('id',$id)
            ->update([
                'name'=>$name,
                'description'=>$description,
                'price'=>$price,
                'sale_price'=>$sale_price,
                'quantity'=>$quantity,
                'category'=>$category,
                'type'=>$type
            ]);
        
        return redirect('/')->with('success_message','Product has been updated successfully.');


        // return view('edit_product_image');
    }
}
