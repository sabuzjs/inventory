<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\customers;
use Illuminate\Support\Facades\DB;

class customerController extends Controller
{
    //suppliers
    public function suppliers_create(){
        return view('admin.suppliers.index');
    }

    public function store_suppliers(Request $request){
        $message = $request->validate([
            'suppliers_name' => 'required|unique:suppliers|max:30',
            'phone' => 'required|unique:suppliers|max:11',
            'address' => 'required',
        ]);

        $data = array();
        $data['suppliers_name'] = $request->suppliers_name;
        $data['phone'] = $request->phone;
        $data['address'] = $request->address;
        DB::table('suppliers')->insert($data);

        return Redirect()->route('suppliers.table')->with('success','Supplier created successfully!'); 
    
    }
    
    public function all_suppliers(){
        $supplier_tbl = DB::table('suppliers')->get();
        return view('admin.suppliers.all_suppliers',compact('supplier_tbl'));
    }

    public function suppliers_delete($id){
        $delete = DB::table('suppliers')->where('id',$id)->delete();
        return back()->with('success','Supplier delete successfully!');
    }


    //customers
    public function customer_create(){
        return view('admin.customers.index');
    }

    
    public function store(Request $request){
        $message = $request->validate([
            'Customer_name' => 'required|unique:customers|max:30',
            'Phone' => 'required|unique:customers|max:11',
            'Address' => 'required',
        ]);

        $data = array();
        $data['Customer_name'] = $request->Customer_name;
        $data['Phone'] = $request->Phone;
        $data['Address'] = $request->Address;
        DB::table('customers')->insert($data);

        return Redirect()->route('customers.table')->with('success','Customer created successfully!');

    }

    public function all_customers(){
        $get_data = DB::table('customers')->get();
        return view('admin.customers.all_customers',compact('get_data'));
    }

    public function delete($id){

        // $data = DB::table('customers')->where('id', $id)->get();
        // $data = customers::all();
        $delete = DB::table('customers')->where('id',$id)->delete();
        return back()->with('success','Customer delete successfully!');;
    }
    
}
