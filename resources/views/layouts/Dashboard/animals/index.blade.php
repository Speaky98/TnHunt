@extends("layouts.Dashboard.admin")
@section('content')
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1>Animal Management</h1>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                            <li class="breadcrumb-item active">Animal Table</li>
                        </ol>
                    </div>
                </div>
            </div><!-- /.container-fluid -->
        </section>
        <section class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-12">
                        <a href="{{route('animals.create')}}">
                            <button type="submit" class="btn btn-outline-success w-25 ">Add Animal</button>
                        </a>
                        <div class="card ">
                            <div class="card-header">
                                <h3 class="card-title">Animal List</h3>

                                <div class="card-tools">
                                    <div class="input-group input-group-sm" style="width: 150px;">
                                        <input type="text" name="table_search" class="form-control float-right"
                                               placeholder="Search">

                                        <div class="input-group-append">
                                            <button type="submit" class="btn btn-default">
                                                <i class="fas fa-search"></i>
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- /.card-header -->
                            <div class="card-body table-responsive p-0">
                                <table class="table table-hover text-nowrap">
                                    <thead>
                                    <tr>
                                        <th>ID</th>
                                        <th>Name</th>
                                        <th>Species</th>
                                        <th>Rarety</th>
                                        <th>Hunt Period</th>
                                        <th>Image</th>
                                        <th>Description</th>
                                        <th>Edit</th>
                                        <th>Delete</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @foreach($animals as $animal)
                                        <tr>
                                            <td>{{$animal->id }}</td>
                                            <td>{{$animal->name }}</td>
                                            <td>{{$animal->species }}</td>
                                            <td>{{$animal->rarety }}</td>

                                            <td>{{$animal->hunt_period }}</td>
                                            <td><img height="50px"
                                                     src="{{asset("/storage/images/animals/" .$animal->image)}}"/></td>
                                            <td>{{$animal->description }}</td>
                                            <td><a href="{{ route('animals.edit', $animal->id) }}">
                                                    <button type="submit" class="btn btn-outline-warning">Edit</button>
                                                </a></td>
                                            <td>
                                                <form action="{{ route('animals.destroy',$animal->id) }}" method="POST">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="btn btn-outline-danger">Delete</button>
                                                </form>
                                            </td>
                                            <td>
                                                <button type="button" class="btn btn-default" data-toggle="modal"
                                                        data-target="#modal-default">
                                                    Show
                                                </button>
                                                <div class="modal fade" id="modal-default">
                                                    <div class="modal-dialog">
                                                        <div class="modal-content">
                                                            <div class="modal-header">
                                                                <h2 class=" text-red modal-title">{{$animal->name}}</h2>
                                                                <button type="button" class="close" data-dismiss="modal"
                                                                        aria-label="Close">
                                                                    <span aria-hidden="true">&times;</span>
                                                                </button>
                                                            </div>
                                                            <div class="modal-body">
                                                                <img height="200px" width="100%"
                                                                     src="{{asset("/storage/images/animals/" .$animal->image)}}"/></br>
                                                                <label class="text-info">Species</label>
                                                                <h4>{{$animal->species }}</h4>
                                                                <label class="text-info">Rarety</label>

                                                                <h4>{{$animal->rarety }}</h4>
                                                                <label class="text-info">Hunt Period</label>

                                                                <h4>{{$animal->hunt_period }}</h4>
                                                                <label class="text-info">Description</label>

                                                                <h4>{{$animal->description }}</h4>

                                                            </div>
                                                            <div class="modal-footer justify-content-between">
                                                                <button type="button" class="btn btn-default"
                                                                        data-dismiss="modal">Close
                                                                </button>

                                                            </div>
                                                        </div>
                                                        <!-- /.modal-content -->
                                                    </div>
                                                    <!-- /.modal-dialog -->
                                                </div>
                                            </td>
                                        </tr>
                                    @endforeach
                                    </tbody>
                                </table>
                            </div>
                            <!-- /.card-body -->
                        </div>
                        <!-- /.card -->
                    </div>
                </div>

            </div><!-- /.container-fluid -->
        </section>
        <!-- /.content -->
    </div>
    <!-- /.row -->
@endsection
