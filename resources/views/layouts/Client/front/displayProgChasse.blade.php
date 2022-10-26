@extends("layouts.Client.client")
@section("content_2")
    <header class="header-2">
        <div class="page-header min-vh-75 relative" style="background-image: url({{asset("assets/img/bg2.jpg")}})">
            <span class="mask bg-gradient-primary opacity-4"></span>
            <div class="container">
                <div class="row">
                    <div class="col-lg-7 text-center mx-auto">
                        <h1 class="text-white pt-3 mt-n5">Hunt Kingdom</h1>
                        <p class="lead text-white mt-3">Welcome to the hunted <br/> Club </p>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <section class="new-product-area section-padding30">
        <div class="container">
            <!-- Section tittle -->
            <div class="row">
                <div class="col-xl-12">
                    <div class="section-tittle mb-70">
                        <h2>New Hunt Programs</h2>
                    </div>
                </div>
            </div>
            @php
                $index=0;
            @endphp
            <div class="row">
                @foreach($list as $ProgChasse)
                <div class="card" style="width: 18rem;">
  <div class="card-body">
  <div  class="btn btn-primary " style="algin-content:center">Hunt Program</div>

    <h4 class="card-title">Location: {{ $ProgChasse->location }}</h4>
    <h5 class="card-text">Date: {{  $ProgChasse->date }}</h5>
    <h5>People Number: {{  $ProgChasse->numpeople }} </h5>
    <h5>Description: {{  $ProgChasse->description }} </h5>
    <h5>Cost: {{  $ProgChasse->costs }}$ </h5>

  </div>
</div>
                   
                    </div>
                   
                @endforeach
            </div>
        </div>
    </section>
@endsection
