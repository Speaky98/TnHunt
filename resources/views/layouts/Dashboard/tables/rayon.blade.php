@extends("layouts.Dashboard.admin")
@section('content')
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1>Rayon Table</h1>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="{{route("backpage")}}">Home</a></li>
                            <li class="breadcrumb-item active">Rayon Table</li>
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
                            <div class="card-body table-responsive p-0" style="height: 300px;">
                                <table class="table table-head-fixed text-nowrap">
                                    <thead>
                                    <tr>
                                        <th>Code</th>
                                        <th>Libelle</th>
                                        <th>Modify</th>
                                        <th>Delete</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @foreach($list as $rayon )
                                        <tr>
                                            <td>{{$rayon->code}}</td>
                                            <td>{{$rayon->libelle}}</td>
                                            <td><a class="btn btn-dark" href="{{route("Modifyray1",$rayon->id)}}">Modify Rayon</a></td>
                                            @if(!$rayon->checkrayon($rayon->id))
                                            <td><a class="btn btn-danger" onclick="return confirm('Are you sure?')" href="{{route("Deleteray1",$rayon->id)}}">Delete Rayon</a></td>
                                            @else
                                                <td>It's used, it can't be deleted</td>
                                            @endif
                                        </tr>
                                    @endforeach
                                    </tbody>
                                </table>
                            </div>
                            <!-- /.card-body -->
                        </div>
                        <button type="button" class="btn btn-dark" href="" data-toggle="modal" data-target="#createmodel" >Add Rayon</button>
                        <div class="modal fade" id="createmodel" tabindex="-1" role="dialog" aria-labelledby="createModalLabel" aria-hidden="true" data-keyboard="false" data-backdrop="static">
                            <div class="modal-dialog" role="document">
                                <div class="modal-content">
                                    <form name="F2" method="post" action="{{ route('Ajoutray2')}}" id="formu2" enctype="multipart/form-data">
                                        @csrf
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="createModalLabel"><i class="ti-marker-alt m-r-10"></i>Rayon</h5>
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
                                                    <label for="exampleInputCode">Code</label>
                                                    <input type="text" class="form-control" id="exampleInputCode" placeholder="Code" name="code">
                                                </div>
                                                <div class="form-group">
                                                    <label for="exampleInputLibelle">Libelle</label>
                                                    <input type="text" class="form-control" id="exampleInputLibelle" placeholder="Libelle" name="lib">
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
