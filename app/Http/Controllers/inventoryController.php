<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class inventoryController extends Controller
{
    public function inventory(){

        $qry = "SELECT i.id, i.product_name, i.price, IFNULL(p.p_total, 0) as purchase, IFNULL(o.o_total, 0) as Order_Delivery, IFNULL(p.p_total, 0) - IFNULL(o.o_total, 0) AS stock FROM ( SELECT id, product_name, price FROM products ) i LEFT JOIN( SELECT products_id, SUM(qty) AS p_total FROM purchases GROUP BY products_id ) p ON i.id = p.products_id LEFT JOIN( SELECT products_id, SUM(order_qty) AS o_total FROM orders GROUP BY products_id ) o ON i.id = o.products_id";
        $inv_stock =DB::select(DB::raw($qry));

        return view('admin.inventory.index',compact('inv_stock'));
    }
}
