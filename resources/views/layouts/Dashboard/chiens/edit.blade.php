@extends("layouts.Dashboard.admin")
@section('content')
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1>Edit Dog</h1>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                            <li class="breadcrumb-item active">Edit Dog</li>
                        </ol>
                    </div>
                    <div class="container mt-2">
                        @if($errors->any())
                            @foreach($errors->all() as $error)
                                <div class="alert alert-danger" role="alert">
                                    {{$error}}
                                </div>
                            @endforeach
                        @endif
                    </div>
                </div>
            </div><!-- /.container-fluid -->
        </section>
        <section class="content">
            <div class="container-fluid">
                <section class="content">
                    <div class="container-fluid">
                        <div class="row">
                            <!-- left column -->
                            <div class="col-md-12">
                                <!-- general form elements -->
                                <div class="card card-success">
                                    <div class="card-header">
                                        <h3 class="card-title">Edit</h3>
                                    </div>
                                    <!-- /.card-header -->
                                    <!-- form start -->
                                    <form method="post" action="{{ route('chiens.update',$chien->id) }}" enctype="multipart/form-data">
                                        @csrf
                                        @method('PATCH')
                                        <div class="card-body">
                                            <div class="form-group">
                                                <label for="name">Name</label>
                                                <input type="text" name="name" value="{{$chien->name }}" class="form-control" id="name" placeholder="Enter Name">
                                            </div>
                                            <div class="form-group">
                                                <label for="breed">Dog Breed</label>
                                                <input type="text" name="breed" value="{{ $chien->breed}}" class="form-control" id="breed" placeholder="Enter Species">
                                            </div>

                                            <div class="form-group">
                                                <label for="description">Description</label>
                                                <input type="text" name="description"  value="{{ $chien->description }}" class="form-control" id="description" placeholder="Enter Description">
                                            </div>
                                            <div class="form-group">
                                                <label >Prey</label>

                                                <select class="custom-select" name="animal_id">
                                                    @foreach($animals as $animal)
                                                        <option value="{{ $animal->id }}">{{ $animal->name }}</option>
                                                    @endforeach
                                                </select>
                                            </div>
                                            <div class="form-group">
                                                <label for="exampleInputFile">Upload Dog Image</label>
                                                <div class="input-group">
                                                    <div class="custom-file">
                                                        <input type="file" name="image" value="{{ $chien->image }}" class="custom-file-input" id="exampleInputFile">
                                                        <label class="custom-file-label" for="exampleInputFile">Choose image</label>
                                                    </div>
                                                    <div class="input-group-append">
                                                        <button type="submit" class="input-group-text btn-warning">Edit</button>
                                                    </div>
                                                </div>
                                            </div>


                                        </div></form>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
            </div></section></div></section>
@endsection
