@extends('admin.master_admin')
@section('content')

    <!-- ============================================================== -->
    <!-- Bread crumb and right sidebar toggle -->
    <!-- ============================================================== -->
    <div class="row page-titles">
        <div class="col-md-5 align-self-center">
            <h4 class="text-themecolor">Product Page</h4>
        </div>
        <div class="col-md-7 align-self-center text-end">
            <div class="d-flex justify-content-end align-items-center">
                <ol class="breadcrumb justify-content-end">
                    <li class="breadcrumb-item"><a href="{{route('dashboard')}}">Home</a></li>
                    <li class="breadcrumb-item active">Products</li>
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
                    <h4 class="card-title">Create Products</h4>
                    <h6 class="card-subtitle"> <span class="badge bg-success ms-auto"><a href="{{route('products.table')}}" class="text-white"><i class="ti-layout-accordion-merged"></i> All Products</a> </span> </h6>
                    <form class="mt-4" method="POST" action="{{route('store.product')}}">
                        @csrf
                        <div class="form-group">
                            <label for="exampleInputEmail1" class="form-label">Category Name</label>
                            <input type="text" name="cat_name" class="form-control" placeholder="Enter Category name">
                            @error('cat_name')
                                <small class="form-text text-danger">{{ $message }}</small>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1" class="form-label">Product Name</label>
                            <input type="text" name="product_name" class="form-control" placeholder="Enter product name">
                            @error('product_name')
                                <small class="form-text text-danger">{{ $message }}</small>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1" class="form-label">Price</label>
                            <input type="number" name="price" class="form-control" placeholder="Enter price">
                            @error('price')
                                <small class="form-text text-danger">{{ $message }}</small>
                            @enderror
                        </div>
                        <button type="submit" class="btn btn-primary text-white">Submit</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- ============================================================== -->
    <!-- End Right sidebar -->
    <!-- ============================================================== -->
        
@endsection