@extends("layouts.Dashboard.admin")
@section('content')
<div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1>Participer à :</h1>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                            <li class="breadcrumb-item active">Participer programme</li>
                        </ol>
                    </div>
                </div>
            </div><!-- /.container-fluid -->
        </section>
        <section class="content">
            <div class="container-fluid">
                <div class="card">
                    <div class="card-header"><h4>{{$ProgChasse->location}}</h4> Le : {{$ProgChasse->date}}</div>
                        <div class="card-body">
                            
                            <form action="{{ url('save/' . $ProgChasse->id) }}" method="post">
                                {!! csrf_field() !!}
                                <label>Nom</label></br>
                                <input type="text" name="nom" id="nom" class="form-control">
                                @error('nom')
                                <div class="alert alert-danger">{{ $message }}</div>
                                @enderror</br>
                                <label>Prenom</label></br>
                                <input type="text" name="prenom" id="prenom" class="form-control">
                                @error('prenom')
                                <div class="alert alert-danger">{{ $message }}</div>
                                @enderror</br>
                                <label>Age</label></br>
                                <input type="number" name="age" id="age" class="form-control"></br>
                                <label>Email</label></br>
                                <input type="email" name="email" id="email" class="form-control"></br>
                                <input type="submit" value="Save" class="btn btn-success"></br>
                            </form>
                        
                        </div>
                </div>
            </div>
        </section>
</div>
@endsection