@extends("layouts.Dashboard.admin")
@section('content')
<!-- <div class="card">
  <div class="card-header">Students Page</div>
  <div class="card-body">
  
        <div class="card-body">
        <h5 class="card-title">Location : {{ $ProgChasse->location }}</h5>
        <p class="card-text">Date : {{ $ProgChasse->date }}</p>
        <p class="card-text">Nombre de personnes : {{ $ProgChasse->numpeople }}</p>
        <h5 class="card-title">Description : {{ $ProgChasse->description }}</h5>
        <p class="card-text">Prix : {{ $ProgChasse->costs }} dt</p>
        </div>
      
    </hr>
  
  </div>
</div> -->
<div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1>détail programme de chasse</h1>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                            <li class="breadcrumb-item active">détail programme de chasse</li>
                        </ol>
                    </div>
                </div>
            </div><!-- /.container-fluid -->
        </section>
        <section class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-header">Détail du programme</div>
                            <div class="card-body">
                            
                                    <div class="card-body">
                                    <h5 class="card-title">Location : {{ $ProgChasse->location }}</h5>
                                    <p class="card-text">Address : {{ $ProgChasse->date  }}</p>
                                    <p class="card-text">Nombre de personne : {{ $ProgChasse->numpeople  }}</p>
                                    <p class="card-text">Address : {{ $ProgChasse->description  }}</p>
                                    <p class="card-text">Prix : {{ $ProgChasse->costs  }}</p>
                                    </div>
                                
                                </hr>
                            
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
</div>
@endsection
