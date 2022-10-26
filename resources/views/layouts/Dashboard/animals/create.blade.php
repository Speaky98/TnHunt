@extends("layouts.Dashboard.admin")
@section('content')
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1>Create Animal</h1>
                    </div>

                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                            <li class="breadcrumb-item active">Create Animal</li>
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
                                        <h3 class="card-title">Create</h3>
                                    </div>
                                    <!-- /.card-header -->
                                    <!-- form start -->
                                    <form method="post" action="{{ route('animals.store') }}"
                                          enctype="multipart/form-data">
                                        @csrf
                                        <div class="card-body">
                                            <div class="form-group">
                                                <label for="name">Name</label>
                                                <input type="text" name="name" class="form-control" id="name"
                                                       placeholder="Enter Name">
                                            </div>
                                            <div class="form-group">
                                                <label for="species">Animal Species</label>
                                                <input type="text" name="species" class="form-control" id="species"
                                                       placeholder="Enter Species">
                                            </div>
                                            <div class="form-group">
                                                <label for="huntperiod">Hunt Period</label>
                                                <input type="text" name="hunt_period" class="form-control"
                                                       id="huntperiod" placeholder="Enter Hunt Period">
                                            </div>
                                            <div class="form-group">
                                                <label for="rarety">Rarety</label>
                                                <input type="text" name="rarety" class="form-control" id="rarety"
                                                       placeholder="Enter Rarety">
                                            </div>
                                            <div class="form-group">
                                                <label for="description">Description</label>
                                                <input type="text" name="description" class="form-control"
                                                       id="description" placeholder="Enter Description">
                                            </div>

                                            <div class="form-group">
                                                <label for="exampleInputFile">Upload Animal Image</label>
                                                <div class="input-group">
                                                    <div class="custom-file">
                                                        <input type="file" name="image" class="custom-file-input"
                                                               id="exampleInputFile">
                                                        <label class="custom-file-label" for="exampleInputFile">Choose
                                                            image</label>
                                                    </div>
                                                    <div class="input-group-append">
                                                        <button type="submit" class="input-group-text btn-success">Submit</button>
                                                    </div>
                                                </div>
                                            </div>


                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
            </div>
        </section>
    </div></section>


    <!-- jQuery -->
    <script src="{{asset("plugins/jquery/jquery.min.js")}}"></script>
    <!-- Bootstrap 4 -->
    <script src="{{asset("plugins/bootstrap/js/bootstrap.bundle.min.js")}}"></script>
    <!-- SweetAlert2 -->
    <script src="{{asset("plugins/sweetalert2/sweetalert2.min.js")}}"></script>
    <!-- Toastr -->
    <script src="{{asset("plugins/toastr/toastr.min.js")}}"></script>
    <!-- AdminLTE App -->
    <script src="{{asset("dist/js/adminlte.min.js")}}"></script>
    <!-- AdminLTE for demo purposes -->
    <script src="{{asset("dist/js/demo.js")}}"></script>
    <!-- Page specific script -->
    <script>
        $(function () {
            var Toast = Swal.mixin({
                toast: true,
                position: 'top-end',
                showConfirmButton: false,
                timer: 3000
            });

            $('.toastrDefaultError').click(function () {
                Toast.fire({
                    icon: 'error',
                    title: 'AAAAAAAAAAAA.'
                })
            });
    </script>
@endsection

