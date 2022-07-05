@extends('admin.master_admin')
@section('content')

    <!-- ============================================================== -->
    <!-- Bread crumb and right sidebar toggle -->
    <!-- ============================================================== -->
    <div class="row page-titles">
        <div class="col-md-5 align-self-center">
            <h4 class="text-themecolor">Suppliers Page</h4>
        </div>
        <div class="col-md-7 align-self-center text-end">
            <div class="d-flex justify-content-end align-items-center">
                <ol class="breadcrumb justify-content-end">
                    <li class="breadcrumb-item"><a href="{{route('dashboard')}}">Home</a></li>
                    <li class="breadcrumb-item active">Suppliers</li>
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
                    <h4 class="card-title">Create Suppliers</h4>
                    <h6 class="card-subtitle"> <span class="badge bg-success ms-auto"><a href="{{route('suppliers.table')}}" class="text-white"><i class="ti-layout-accordion-merged"></i> All Suppliers</a> </span> </h6>
                    <form class="mt-4" method="POST" action="{{route('store.suppliers')}}">
                        @csrf
                        <div class="form-group">
                            <label for="exampleInputEmail1" class="form-label">Suppliers Name</label>
                            <input type="text" name="suppliers_name" class="form-control" placeholder="Enter name">
                            @error('suppliers_name')
                                <small class="form-text text-danger">{{ $message }}</small>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1" class="form-label">Phone</label>
                            <input type="number" name="phone" class="form-control" placeholder="Enter phone number">
                            @error('phone')
                                <small class="form-text text-danger">{{ $message }}</small>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1" class="form-label">Address</label>
                            <input type="text" name="address" class="form-control" placeholder="Enter your address">
                            @error('address')
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