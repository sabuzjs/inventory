@extends('admin.master_admin')
@section('content')
    <!-- ============================================================== -->
    <!-- Bread crumb and right sidebar toggle -->
    <!-- ============================================================== -->
    <div class="row page-titles">
        <div class="col-md-5 align-self-center">
            <h4 class="text-themecolor">Customers Page</h4>
        </div>
        <div class="col-md-7 align-self-center text-end">
            <div class="d-flex justify-content-end align-items-center">
                <ol class="breadcrumb justify-content-end">
                    <li class="breadcrumb-item"><a href="{{route('dashboard')}}">Home</a></li>
                    <li class="breadcrumb-item active">Customers</li>
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
                    @include('admin.alert')
                    <h4 class="card-title">All Customers List</h4>
                    <h6 class="card-subtitle"> <span class="badge bg-success ms-auto"><a href="{{route('crate.customer')}}" class="text-white"><i class="ti-layout-media-right-alt"></i> Create Customers</a> </span> </h6>
                    <div class="table-responsive">
                        <table class="table table-bordered table-hover">
                            <thead class="bg-light">
                                <tr>
                                    <th>#</th>
                                    <th>Customers Name</th>
                                    <th>Phone</th>
                                    <th>Address</th>
                                    <th>Status</th>
                                </tr>
                            </thead>
                            <tbody>
                                @php($i=1)
                                @foreach($get_data as $customers)
                                <tr>
                                    <td>{{$i++}}</td>
                                    <td>{{$customers->Customer_name}}</td>
                                    <td>{{$customers->Phone}}</td>
                                    <td>{{$customers->Address}}</td>
                                    <td><a href="{{ route('customer.delete', $customers->id) }}" class="text-danger"> <i class="ti-trash"></i></a></td>
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
