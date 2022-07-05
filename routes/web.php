<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\settingController;
use App\Http\Controllers\customerController;
use App\Http\Controllers\productController;
use App\Http\Controllers\purchaseController;
use App\Http\Controllers\orderController;
use App\Http\Controllers\inventoryController;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('admin.index');
    })->name('dashboard');
});

//custom setting
Route::get('/logout/user', [settingController::class, 'logout'])->name('logout');

//suppliers
Route::get('/supplier/create',[customerController::class, 'suppliers_create'])->name('create.suppliers');
Route::post('/store/supplier', [customerController::class, 'store_suppliers'])->name('store.suppliers');
Route::get('/all/suppliers', [customerController::class, 'all_suppliers'])->name('suppliers.table');
Route::get('/suppliers/delete/{id}',[customerController::class, 'suppliers_delete'])->name('suppliers.delete');

//customers
Route::get('/customer/create', [customerController::class, 'customer_create'])->name('crate.customer');
Route::post('/store/customer', [customerController::class, 'store'])->name('store.customer');
Route::get('/all/customer', [customerController::class, 'all_customers'])->name('customers.table');
Route::get('/customer/delete/{id}',[customerController::class, 'delete'])->name('customer.delete');

//products
Route::get('/product/create',[productController::class,'product_create'])->name('create.product');
Route::post('/product/store',[productController::class,'store'])->name('store.product');
Route::get('/product/store',[productController::class,'all_products'])->name('products.table');
Route::get('/product/delete/{id}',[productController::class, 'delete'])->name('product.delete');

//purchase
Route::get('/purchase/product',[purchaseController::class,'purchase_product'])->name('purchase.product');
Route::post('/add/purchase',[purchaseController::class,'add_purchase'])->name('add.purchase');
Route::get('/delete/purchase/{id}',[purchaseController::class, 'delete'])->name('purchase.delete');

//order
Route::get('/order',[orderController::class,'order'])->name('order.product');
Route::post('/order/delivery',[orderController::class,'orderDelivery'])->name('order.delivery');
Route::get('/delete/order/{id}',[orderController::class, 'delete'])->name('order.delete');

//inventory
Route::get('/inventory',[inventoryController::class,'inventory'])->name('stock.inventory');

