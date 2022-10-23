@extends("layouts.Dashboard.admin")
@section('content')
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1>Product Table</h1>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="{{route("backpage")}}">Home</a></li>
                            <li class="breadcrumb-item active">Product Table</li>
                        </ol>
                    </div>
                </div>
            </div><!-- /.container-fluid -->
        </section>

        <!-- Main content -->
        <section class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-header">
                                <h3 class="card-title">Table Content</h3>

                                <div class="card-tools">
                                    <div class="input-group input-group-sm" style="width: 150px;">
                                        <input type="text" name="table_search" class="form-control float-right" placeholder="Search">

                                        <div class="input-group-append">
                                            <button type="submit" class="btn btn-default">
                                                <i class="fas fa-search"></i>
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- /.card-header -->
                            <div class="card-body table-responsive p-0" style="height: 400px;">
                                <table class="table table-head-fixed text-nowrap">
                                    <thead>
                                    <tr>
                                        <th>Name</th>
                                        <th>Category</th>
                                        <th>Price_unit</th>
                                        <th>Image</th>
                                        <th>Limited</th>
                                        <th>Active_for_sale</th>
                                        <th>Total_rate</th>
                                        <th>User_rate</th>
                                        <th>Rayon</th>
                                        <th>Modify</th>
                                        <th>Delete</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @foreach($list as $product )
                                    <tr>
                                        <td>{{$product->name}}</td>
                                        <td>{{$product->category}}</td>
                                        <td>{{$product->price_unit}}</td>
                                        <td><img src="{{ asset('images/'.$product->image) }}"
                                                 style="height: 250px; width: 400px;"></td>
                                        <td>{{$product->limited}}</td>
                                        <td>{{$product->active_for_sale}}</td>
                                        <td>{{$product->total_rate}}</td>
                                        <td>{{$product->user_rate}}</td>
                                        <td>{{$product->getrayon($product->rayon_id)}}</td>
                                        <td><form name="F1" method="POST" id="formu1" action="{{route("Modifyprod1")}}">
                                                @csrf
                                                <input id="in1" hidden type="number" value="{{ $product->id}}" name="id" >
                                                <input id="in2" hidden type="text" value="{{ $product->name }}" name="name" >
                                                <input id="in3" hidden type="text" value="{{ $product->category }}" name="cat" >
                                                <input id="in4" hidden type="number" value="{{ $product->price_unit }}" name="pri" >
                                                <input id="in5" hidden type="text" value="{{ $product->image }}" name="ima" >
                                                <input id="in6" hidden type="number" value="{{ $product->limited }}" name="lim" >
                                                <input id="in7" hidden type="number" value="{{ $product->active_for_sale }}" name="act" >
                                                <input id="in8" hidden type="number" value="{{ $product->rayon_id }}" name="ray" >
                                                <button id="in9" type="submit" class="btn btn-dark" >Modify Product</button>
                                            </form></td>
                                        <td><a class="btn btn-danger" onclick="return confirm('Are you sure?')" href="{{route("Deleteprod1",$product->id)}}">Delete Product</a></td>
                                    </tr>
                                    @endforeach
                                    </tbody>
                                </table>
                            </div>
                            <!-- /.card-body -->
                        </div>
                        <button type="button" class="btn btn-dark" href="" data-toggle="modal" data-target="#createmodel" >Add Product</button>
                        <div class="modal fade" id="createmodel" tabindex="-1" role="dialog" aria-labelledby="createModalLabel" aria-hidden="true" data-keyboard="false" data-backdrop="static">
                            <div class="modal-dialog" role="document">
                                <div class="modal-content">
                                    <form name="F2" method="post" action="{{ route('Ajoutprod2')}}" id="formu2" enctype="multipart/form-data">
                                        @csrf
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="createModalLabel"><i class="ti-marker-alt m-r-10"></i>Product</h5>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close" >
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                        @if ($errors->any())
                                            <div class="alert alert-danger">
                                                <ul>
                                                    @foreach ($errors->all() as $error)
                                                        <li>{{ $error }}</li>
                                                    @endforeach
                                                </ul>
                                            </div>
                                        @endif
                                    <div class="modal-body">

                                        <div class="card-body">
                                            <div class="form-group">
                                                <label for="exampleInputName">Name</label>
                                                <input type="text" class="form-control" id="exampleInputName" placeholder="Enter Name" name="name">
                                            </div>
                                            <div class="form-group">
                                                <label for="exampleInputCategory">Category</label>
                                                <input type="text" class="form-control" id="exampleInputCategory" placeholder="Category" name="cat">
                                            </div>
                                            <div class="form-group">
                                                <label for="exampleInputPrice_unit">Price_unit</label>
                                                <input type="number" step="any"  class="form-control" id="exampleInputPrice_unit" placeholder="Price_unit" name="pri">
                                            </div>
                                            <div class="form-group">
                                                <label for="formFile" class="form-label">Image</label>
                                                <input class="form-control" type="file" id="formFile" required name="ima">
                                            </div>
                                            <div class="form-group">
                                                <label for="exampleInputLimited">Limited</label>
                                                <input type="number" min="0" max="1" class="form-control" id="exampleInputLimited" placeholder="Limited" name="lim">
                                            </div>
                                            <div class="form-group">
                                                <label for="exampleInputActive_for_sale">Active_for_sale</label>
                                                <input type="number" min="0" max="1" class="form-control" id="exampleInputActive_for_sale" placeholder="Active_for_sale" name="act">
                                            </div>
                                            <div class="form-group">
                                                <label>Rayon</label>
                                                <select class="form-control" name="ray">
                                                    @foreach($listtwo as $rayon)
                                                            <option value="{{$rayon->id}}">{{$rayon->getone()}}</option>
                                                    @endforeach
                                                </select>
                                            </div>
                                        </div>
                                        <!-- /.card-body -->
                                    </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                            <button type="reset" class="btn btn-success">Reset</button>
                                            <button type="submit" class="btn btn-primary">Save changes</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                        <!-- /.card -->
                    </div>
                </div>
            </div><!-- /.container-fluid -->
        </section>
        <!-- /.content -->
    </div>
@endsection
