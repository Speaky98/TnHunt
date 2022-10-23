@extends("layouts.Dashboard.admin")
@section('content')
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1>Modify Form</h1>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="{{route("backpage")}}">Home</a></li>
                            <li class="breadcrumb-item active">Modify Product</li>
                        </ol>
                    </div>
                </div>
            </div><!-- /.container-fluid -->
        </section>

        <!-- Main content -->
        <section class="content" style="background-image: url('/images/hunter-elegant-clothes-holds-shotgun-sits-together-with-his-beagle-dog-while-leaning-against-retro-military-car-forest (1).jpg');background-size: cover;" >
            <div class="container-fluid">
                <div class="row">

    <div class="col-md-6">
    <div class="card card-primary">
        <div class="card-header">
            <h3 class="card-title">Product</h3>
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
        <!-- /.card-header -->
        <!-- form start -->
        <form name="F1" method="POST" action="{{ route('Modifyprod2')}}" id="formu1" enctype="multipart/form-data">
            @csrf
            <div class="card-body">
                <input id="in1" hidden type="number" value="{{ $req->id}}" name="id" >
                <div class="form-group">
                    <label for="exampleInputName">Name</label>
                    <input type="text" class="form-control" id="exampleInputName" placeholder="Enter Name" name="name" value="{{$req->name}}">
                </div>
                <div class="form-group">
                    <label for="exampleInputCategory">Category</label>
                    <input type="text" class="form-control" id="exampleInputCategory" placeholder="Category" name="cat" value="{{$req->category}}">
                </div>
                <div class="form-group">
                    <label for="exampleInputPrice_unit">Price_unit</label>
                    <input type="number" step="any"  class="form-control" id="exampleInputPrice_unit" placeholder="Price_unit" name="pri" value="{{$req->price_unit}}">
                </div>
                <div class="form-group">
                    <label for="formFile" class="form-label">Image</label>
                    <input class="form-control" type="file" id="formFile" name="ima">
                </div>
                <div class="form-group">
                    <label for="exampleInputLimited">Limited</label>
                    <input type="number" min="0" max="1" class="form-control" id="exampleInputLimited" placeholder="Limited" name="lim" value="{{$req->limited}}">
                </div>
                <div class="form-group">
                    <label for="exampleInputActive_for_sale">Active_for_sale</label>
                    <input type="number" min="0" max="1" class="form-control" id="exampleInputActive_for_sale" placeholder="Active_for_sale" name="act" value="{{$req->active_for_sale}}">
                </div>
                <div class="form-group">
                    <label>Rayon</label>
                    <select class="form-control" name="ray">
                        @foreach($list as $rayon)
                            @if($req->ray==$rayon->id)
                                <option value="{{$rayon->id}}" selected>{{$rayon->getone()}}</option>
                            @else
                        <option value="{{$rayon->id}}">{{$rayon->getone()}}</option>
                            @endif
                        @endforeach
                    </select>
                </div>
            </div>
            <!-- /.card-body -->
            <div class="card-footer">
                <button type="submit" class="btn btn-primary">Submit</button>
                <a type="button" href="{{route("productpage")}}" class="btn btn-secondary">Close</a>
            </div>
        </form>
    </div>
    </div>
                </div>
            </div>
        </section>
    </div>
@endsection
