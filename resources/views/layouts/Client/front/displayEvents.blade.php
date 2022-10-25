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
                        <h2>New Events</h2>
                    </div>
                </div>
            </div>
            @php
                $index=0;
            @endphp
            <div class="row">
                @foreach($list as $event)
                    <div class="col-xl-4 col-lg-4 col-md-6 col-sm-6">
                        <div class="single-new-pro mb-30 text-center">
                            <div class="product-img">
                             
                            </div>
                            <div class="product-caption">
                                <h3><a href="#">{{ $event->name }}</a></h3>
                                <span>{{  $event->address }} </span>
                                <h3>{{  $event->dateS }} </h3>
                                <h3>{{  $event->dateE }} </h3>

                            </div>
                         
                         
                          

                        </div>
                    </div>
                   
                @endforeach
            </div>
        </div>
    </section>
@endsection
