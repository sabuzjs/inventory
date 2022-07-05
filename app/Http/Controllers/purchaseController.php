<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\purchase;
use Illuminate\Support\Facades\DB;

class purchaseController extends Controller
{
    public function purchase_product(){
        $suppliers = DB::table('suppliers')->get();
        $products = DB::table('products')->get();
        $purchase = DB::table('purchases')
                    ->join('suppliers','suppliers.id','=','purchases.suppliers_id')
                    ->join('products','products.id','=','purchases.products_id')
                    ->get();
        $p_sum=DB::table('purchases')->sum('qty');
        return view('admin.purchase.index',compact('suppliers','products','purchase','p_sum'));
    }

    public function add_purchase(Request $request){
        $message = $request->validate([
            'suppliers' => 'required',
            'products' => 'required',
            'qty' => 'required',
            'type' => 'required',
        ]);

        $data = array();
        $data['suppliers_id'] = $request->suppliers;
        $data['products_id'] = $request->products;
        $data['qty'] = $request->qty;
        $data['type'] = $request->type;
        DB::table('purchases')->insert($data);

        return back()->with('success','Product added successfully!');

    }

    public function delete($id){
        $p_delete = DB::table('purchases')->where('id',$id)->delete();
        return back()->with('success','Product deleted successfully!');
    }

}
