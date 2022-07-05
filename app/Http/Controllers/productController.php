<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\products;
use Illuminate\Support\Facades\DB;

class productController extends Controller
{
    public function product_create(){
        return view('admin.products.index');
    }

    public function store(Request $request){
        $message = $request->validate([
            'cat_name' => 'required|max:30',
            'product_name' => 'required|max:50',
            'price' => 'required',
        ]);

        $data = array();
        $data['cat_name']=$request->cat_name;
        $data['product_name']=$request->product_name;
        $data['price']=$request->price;
        DB::table('products')->insert($data);

        return Redirect()->route('products.table')->with('success','Product created successfully!');
    }

    public function all_products(){
        $products=DB::table('products')->get();
        return view('admin.products.all_products',compact('products'));
    }

    public function delete($id){
        $delete = DB::table('products')->where('id',$id)->delete();
        return back()->with('success','Product deleted successfully!');
    }

}
