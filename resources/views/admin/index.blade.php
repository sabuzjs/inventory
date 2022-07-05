@extends('admin.master_admin')
@section('content')


    <!-- ============================================================== -->
    <!-- Bread crumb and right sidebar toggle -->
    <!-- ============================================================== -->
    <div class="row page-titles">
        <div class="col-md-5 align-self-center">
            <h4 class="text-themecolor">Dashboard Page</h4>
        </div>
        <div class="col-md-7 align-self-center text-end">
            <div class="d-flex justify-content-end align-items-center">
                <ol class="breadcrumb justify-content-end">
                    <li class="breadcrumb-item"><a href="{{route('dashboard')}}">Home</a></li>
                    <li class="breadcrumb-item active">Dashboard</li>
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
        <div class="col-3">
            @php
                $supplier =DB::table('suppliers')->count('suppliers_name');
            @endphp
            <div class="card">
                <div class="card-body">
                    <div class="d-flex flex-row">
                        <div class="round align-self-center round-info"><i class="ti-user"></i></div>
                        <div class="m-l-10 align-self-center">
                            <h3 class="m-b-0">{{$supplier}}</h3>
                            <h5 class="text-muted m-b-0">Suppliers</h5></div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-3">
            @php
                $customer =DB::table('customers')->count('Customer_name');
            @endphp
            <div class="card">
                <div class="card-body">
                    <div class="d-flex flex-row">
                        <div class="round align-self-center round-danger"><i class="ti-user"></i></div>
                        <div class="m-l-10 align-self-center">
                            <h3 class="m-b-0">{{$customer}}</h3>
                            <h5 class="text-muted m-b-0">Sales Customers</h5></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-3">
            @php
                $purchase = DB::table('purchases')->sum('qty');
            @endphp
            <div class="card">
                <div class="d-flex flex-row">
                    <div class="p-10 bg-info">
                        <h3 class="text-white box m-b-0"><i class="ti-shopping-cart-full"></i></h3>
                    </div>
                    <div class="align-self-center m-l-20">
                        <h3 class="m-b-0 text-info">{{$purchase}}</h3>
                        <h5 class="text-muted m-b-0">Purchase</h5>
                    </div>
                </div>
            </div>
        </div>
    <div class="col-3">
        @php
            $order=DB::table('orders')->sum('order_qty');
        @endphp
        <div class="card">
            <div class="d-flex flex-row">
                <div class="p-10 bg-success">
                    <h3 class="text-white box m-b-0"><i class="ti-write"></i></h3></div>
                <div class="align-self-center m-l-20">
                    <h3 class="m-b-0 text-success">{{$order}}</h3>
                    <h5 class="text-muted m-b-0">Order</h5></div>
            </div>
        </div>
    </div>
    <div class="col-3">
        <div class="card">
            <div class="d-flex flex-row">
                <div class="p-10 bg-primary">
                    <h3 class="text-white box m-b-0"><i class="icon-chart"></i></h3></div>
                <div class="align-self-center m-l-20">
                    <h3 class="m-b-0 text-primary">{{$purchase-$order}}</h3>
                    <h5 class="text-muted m-b-0">Stock</h5></div>
            </div>
        </div>
    </div>
    </div>
    <div>
    </div>
    <!-- ============================================================== -->
    <!-- End Right sidebar -->
    <!-- ============================================================== -->
    <div class="col-12">
        @php
            $user = Auth::user()->get();
        @endphp
        <div class="card">
            <div class="card-body">
                @include('admin.alert')
                <h4 class="card-title">System user </h4>
                <h6 class="card-subtitle"> All authorized system user</h6>
                <div class="table-responsive">
                    <table class="table table-hover">
                        <thead class="bg-light">
                            <tr>
                                <th>SL#</th>
                                <th>User</th>
                                <th>Email</th>
                            </tr>
                        </thead>
                        <tbody>
                            @php($i=1)
                            @foreach ($user as $user)
                            <tr>
                                <td>{{$i++}}</td>
                                <td>{{Auth::user()->name}}</td>
                                <td>{{Auth::user()->email}}</td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>   
@endsection