<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ProjectController extends Controller
{
    //

    function index(){

        $products = DB::table('products')->get();

        return view('index', ['products'=>$products]);
    }

    public function add_product(){

        return view('add_product');
    }

    public function edit_product(Request $request, $id){

        $product_array = DB::table('products')->where('id',$id)->get();

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


        DB::table('products')->where('id',$id)
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

    public function create_product(Request $request){

       $name = $request->input('name');
       $description = $request->input('description');
       $price = $request->input('price');
    //    $sale_price = $request->input('sale_price');
       $quantity = $request->input('quantity');
       $category = $request->input('category');
       $type = $request->input('type');

       $image = $request->file('image');
       $image_name= $image->getClientOriginalName();

       $request->validate([

            'image'=>['mimes:jpeg,jpg,png,webp','max:5000']

       ]);


       //insert new record in database.
       DB::table('products')->insert(
        [
            'name'=>$name,
            'description'=>$description,
            'price'=>$price,
            // 'sale_price'=>$sale_price,
            'quantity'=>$quantity,
            'category'=>$category,
            'type'=>$type,
            'image'=>$image_name


        ]);

        $image->move('images/',$image_name);

        return redirect('/')->with('success_message','You have successfully added a new product to your store.');
    }


    public function delete_product(Request $request, $id){

        
        $product = Product::findOrFail($id);
        $product->delete();
        return back()->with('success_message','You have successfully deleted a product from your store.');
    }



    public function delete(Request $request){

        $id = $request->input('id');
        $affected = DB::table('products')->where('id',$id)->delete();

        if($affected){
            return redirect('/')->with('sucess_message','Product has been deleted successfully');
        }else{
            return redirect('/')->with('failure_message','Could not delete product.');
            }
            

    }






}
