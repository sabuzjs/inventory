@extends('admin.master_admin')
@section('content')

    <!-- ============================================================== -->
    <!-- Bread crumb and right sidebar toggle -->
    <!-- ============================================================== -->
    <div class="row page-titles">
        <div class="col-md-5 align-self-center">
            <h4 class="text-themecolor">Inventory Page</h4>
        </div>
        <div class="col-md-7 align-self-center text-end">
            <div class="d-flex justify-content-end align-items-center">
                <ol class="breadcrumb justify-content-end">
                    <li class="breadcrumb-item"><a href="{{route('dashboard')}}">Home</a></li>
                    <li class="breadcrumb-item active">Inventory</li>
                </ol>
            </div>
        </div>
    </div>
    <!-- ============================================================== -->
    <!-- End Bread crumb and right sidebar toggle -->
    <!-- ============================================================== -->
    <!-- ============================================================== -->
    <!-- Start Page Content -->
    <!-- ============================================================== -->
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">Inventory Report</h4>
                    <h6 class="card-subtitle">Product Stock</h6>
                    <div class="table-responsive">
                        <table class="table table-bordered table-hover">
                            <thead class="bg-light">
                                <tr>
                                    <th>Product Name</th>
                                    <th>Unit Price</th>
                                    <th>Purchase Qty</th>
                                    <th>Delivery Order</th>
                                    <th>Stock Qty</th>
                                    <th>Stock Value</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($inv_stock as $stock)
                                <tr>
                                    <td>{{$stock->product_name}}</td>
                                    <td>{{$stock->price}}</td>
                                    <td>{{$stock->purchase}}</td>
                                    <td>{{$stock->Order_Delivery}}</td>
                                    <td>{{$stock->stock}}</td>
                                    <td>{{($stock->stock)*($stock->price)}}</td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- ============================================================== -->
    <!-- End Right sidebar -->
    <!-- ============================================================== -->
        
@endsection