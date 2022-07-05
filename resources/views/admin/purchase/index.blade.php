@extends('admin.master_admin')
@section('content')

    <!-- ============================================================== -->
    <!-- Bread crumb and right sidebar toggle -->
    <!-- ============================================================== -->
    <div class="row page-titles">
        <div class="col-md-5 align-self-center">
            <h4 class="text-themecolor">Purchase Page</h4>
        </div>
        <div class="col-md-7 align-self-center text-end">
            <div class="d-flex justify-content-end align-items-center">
                <ol class="breadcrumb justify-content-end">
                    <li class="breadcrumb-item"><a href="{{route('dashboard')}}">Home</a></li>
                    <li class="breadcrumb-item active">Purchase</li>
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
                    <h4 class="card-title">Purchase Product</h4>
                    <!-- sample modal content -->
                    <div class="button-box">
                        <button type="button" class="btn btn-info text-white" data-bs-toggle="modal" data-bs-target="#exampleModal" data-whatever="@fat">Add Products</button>
                    </div>
                    <div class="modal" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel1" aria-hidden="true" style="display: none;">
                        <div class="modal-dialog" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h4 class="modal-title" id="exampleModalLabel1">Add Product</h4>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"><span aria-hidden="true"></span></button>
                                </div>
                                <div class="modal-body">
                                    <form method="post" action="{{route('add.purchase')}}">
                                        @csrf
                                        <div class="form-group">
                                            <label for="recipient-name" class="form-label">Supplier:</label>
                                            <select class="form-control form-select" name="suppliers">
                                                <option selected disabled>--Select Supplier--</option>
                                                @foreach ($suppliers as $suppliers)
                                                <option value="{{$suppliers->id}}">{{$suppliers->suppliers_name}}</option>
                                                @endforeach
                                            </select>
                                            @error('suppliers')
                                                <small class="form-text text-danger">{{ $message }}</small>
                                            @enderror
                                        </div>
                                        <div class="form-group">
                                            <label for="recipient-name" class="form-label">Product:</label>
                                            <select class="form-control form-select" name="products">
                                                <option selected disabled>--Select Products--</option>
                                                @foreach ($products as $item)
                                                <option value="{{$item->id}}">{{$item->product_name}}</option>
                                                @endforeach
                                            </select>
                                            @error('products')
                                                <small class="form-text text-danger">{{ $message }}</small>
                                            @enderror
                                        </div>
                                        <div class="form-group">
                                            <label for="recipient-name" class="form-label">Qtny:</label>
                                            <input type="number" class="form-control" name="qty" id="recipient-name1">
                                            @error('qty')
                                                <small class="form-text text-danger">{{ $message }}</small>
                                            @enderror
                                        </div>
                                        <div class="form-group" hidden>
                                            <label for="recipient-name" class="form-label">Type:</label>
                                            <input type="text" name="type" class="form-control" value="Stock In" readonly>
                                            @error('type')
                                                <small class="form-text text-danger">{{ $message }}</small>
                                            @enderror
                                        </div>
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-default" data-bs-dismiss="modal">Close</button>
                                            <button type="submit" class="btn btn-primary text-white">Add</button>
                                        </div>
                                    </form>
                            </div>
                        </div>
                    </div>
                    <!-- /.modal -->
                </div>
                <div class="card-body">
                    @include('admin.alert')
                    <h4 class="card-title">Purchase Stock In </h4>
                    <h6 class="card-subtitle">Purchase product list</h6>
                    <div class="table-responsive">
                        <table class="table table-bordered table-hover">
                            <thead class="bg-light">
                                <tr>
                                    <th>SL#</th>
                                    <th>Supplier Name</th>
                                    <th>Product Name</th>
                                    <th>Unit Price</th>
                                    <th>Qtny</th>
                                    <th>Total</th>
                                    <th>Type</th>
                                    <th>Status</th>
                                </tr>
                            </thead>
                            <tbody>
                                @php($i=1)
                                @foreach ($purchase as $p_item)
                                <tr>
                                    <td>{{$i++}}</td>
                                    <td>{{$p_item->suppliers_name}}</td>
                                    <td>{{$p_item->product_name}}</td>
                                    <td>{{$p_item->price}}</td>
                                    <td>{{$p_item->qty}}</td>
                                    <td>{{($p_item->price)*($p_item->qty)}}</td>
                                    <td>Stock In</td>
                                    <td><a href="{{route('purchase.delete',$p_item->id)}}" class="text-danger"><i class="ti-trash"></i></a></td>
                                </tr>
                                @endforeach
                            </tbody>
                            <tfoot>
                                <tr class="text-danger">
                                    <th></th>
                                    <th></th>
                                    <th></th>
                                    <th>Totals</th>
                                    <th>{{$p_sum}}</th>
                                    <th></th>
                                    <th></th>
                                    <th></th>
                                </tr>
                            </tfoot>
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
