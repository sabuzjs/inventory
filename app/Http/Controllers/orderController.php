<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class orderController extends Controller
{
    public function order(){
        $o_customers = DB::table('customers')->get();
        $o_products = DB::table('products')->get();
        $orderData = DB::table('orders')
                    ->join('customers','customers.id','=','orders.customers_id')
                    ->join('products','products.id','=','orders.products_id')
                    ->get();
        $o_sum=DB::table('orders')->sum('order_qty');
        return view('admin.order.index',compact('o_customers','o_products','orderData','o_sum'));
    }

    public function orderDelivery(Request $request){
        $message = $request->validate([
            'o_customers' => 'required',
            'o_products' => 'required',
            'order_qty' => 'required',
            'type' => 'required',
        ]);


        $data = array();
        $data['customers_id'] = $request->o_customers;
        $data['products_id'] = $request->o_products;
        $data['order_qty'] = $request->order_qty;
        $data['type'] = $request->type;
        DB::table('orders')->insert($data);

        return back()->with('success','Product added successfully!');
    }

    public function delete($id){
        $o_delete = DB::table('orders')->where('id',$id)->delete();
        return back()->with('success','Product deleted successfully!');
    }
}
