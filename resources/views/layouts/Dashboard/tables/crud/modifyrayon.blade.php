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
                            <li class="breadcrumb-item active">Modify Rayon</li>
                        </ol>
                    </div>
                </div>
            </div><!-- /.container-fluid -->
        </section>

        <!-- Main content -->
        <section class="content" style="background-image: url('/images/retro-hunting-ammunition-rifle-binoculars-delicious-sausage-brown-bread-wooden-table.jpg');background-size: cover;" >
            <div class="container-fluid">
                <div class="row">

                    <div class="col-md-6">
                        <div class="card card-primary">
                            <div class="card-header">
                                <h3 class="card-title">Rayon</h3>
                            </div>
                            <!-- /.card-header -->
                            <!-- form start -->
                            <form name="F1" method="POST" action="{{ route('Modifyray2')}}" id="formu1">
                                @csrf
                                <div class="card-body">
                                    <input id="in1" hidden type="number" value="{{ $req->id}}" name="id" >
                                    <div class="form-group">
                                        <label for="exampleInputCode">Code</label>
                                        <input type="text" class="form-control" id="exampleInputCode" placeholder="Code" name="code" required value="{{$req->code}}">
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputLibelle">Libelle</label>
                                        <input type="text" class="form-control" id="exampleInputLibelle" placeholder="Libelle" name="lib" required value="{{$req->lib}}">
                                    </div>
                                </div>
                                <!-- /.card-body -->
                                <div class="card-footer">
                                    <button type="submit" class="btn btn-primary">Submit</button>
                                    <a type="button" href="{{route("rayonpage")}}" class="btn btn-secondary">Close</a>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
@endsection
