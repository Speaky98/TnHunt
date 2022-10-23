@extends("layouts.Dashboard.admin")
@section('content')
<div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1>Ajouter un programme</h1>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                            <li class="breadcrumb-item active">Ajouter un programme</li>
                        </ol>
                    </div>
                </div>
            </div><!-- /.container-fluid -->
        </section>
        <section class="content">
            <div class="container-fluid">
                <div class="card">
                    <div class="card-header">Page du programme</div>
                        <div class="card-body">
                            
                            <form action="{{ url('progchasse') }}" method="post">
                                {!! csrf_field() !!}
                                <label>Location</label></br>
                                <input type="text" name="location" id="location" class="form-control"></br>
                                <label>Date</label></br>
                                <input type="date" name="date" id="date" class="form-control"></br>
                                <label>Nombre de personnes</label></br>
                                <input type="number" name="numpeople" id="numpeople" class="form-control"></br>
                                <label>Description</label></br>
                                <input type="text" name="description" id="description" class="form-control"></br>
                                <label>Prix</label></br>
                                <input type="text" name="costs" id="costs" class="form-control"></br>
                                <input type="submit" value="Save" class="btn btn-success"></br>
                            </form>
                        
                        </div>
                </div>
            </div>
        </section>

</div>
@endsection