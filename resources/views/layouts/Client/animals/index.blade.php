@extends("layouts.Client.client")
@section("content_2")
<header class="bg-gradient-dark">
    <div class="page-header min-vh-75" style="background-image: url('../assets/img/bg9.jpg');">
        <span class="mask bg-gradient-dark opacity-6"></span>
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-8 text-center mx-auto my-auto">
                    <h1 class="text-white">Discover all breeds informations</h1>
                    <p class="lead mb-4 text-white opacity-8">We’re constantly trying to provide you some informations about the word of hunting</p>

                    <h6 class="text-white mb-2 mt-5">Find us on</h6>
                    <div class="d-flex justify-content-center">
                        <a href="javascript:;"><i class="fab fa-facebook text-lg text-white me-4"></i></a>
                        <a href="javascript:;"><i class="fab fa-instagram text-lg text-white me-4"></i></a>
                        <a href="javascript:;"><i class="fab fa-twitter text-lg text-white me-4"></i></a>
                        <a href="javascript:;"><i class="fab fa-google-plus text-lg text-white"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>
<!-- -------- END HEADER 7 w/ text and video ------- -->
<div class="card card-body shadow-xl mx-3 mx-md-4 mt-n6">
    <!-- Section with four info areas left & one card right with image and waves -->

    <!-- END Section with four info areas left & one card right with image and waves -->
    <!-- -------- START Features w/ pattern background & stats & rocket -------- -->
    <section class="pb-5 position-relative bg-gradient-dark mx-n3">
        <div class="container">
            <div class="row">
                <div class="col-md-8 text-start mb-5 mt-5">
                    <h3 class="text-white z-index-1 position-relative">TnHunt</h3>
                    <p class="text-white opacity-8 mb-0">Here's where you find all animals that you are allowed to hunt</p>
                </div>
            </div>
            <div class="row">
                @foreach($animals as $animal)
                <div class="col-lg-6 col-12">
                    <div class="card card-profile mt-4">
                        <div class="row">
                            <div class="col-lg-4 col-md-6 col-12 mt-n5" >
                                </br>
                                <a href="javascript:;" >
                                    <div  class="p-3 pe-md-0"  >
                                        <img class="w-75 border-radius-md shadow-lg" src="{{asset("/storage/images/animals/" .$animal->image)}}" alt="image">
                                        <a href="{{ route('animalsFront.show', $animal->id) }}">
                                            <button type="submit" class="btn btn-outline-warning">Show Details</button>
                                        </a>
                                    </div>
                                </a>
                            </div>
                            <div class="col-lg-8 col-md-6 col-12 my-auto">
                                <div class="card-body ps-lg-0">

                                    <h5 class="mb-0"><span>Name : </span>{{$animal->name}}</h5>
                                    <h6 class="text-info"><span> Species : </span>{{$animal->species}}</h6>
                                    <p class="mb-0"><span>Hunt Period : </span>{{$animal->hunt_period}}</p>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>

                @endforeach
            </div>

        </div>
    </section>
    <!-- -------- END Features w/ pattern background & stats & rocket -------- -->
    <!-- -------- START PRE-FOOTER 1 w/ SUBSCRIBE BUTTON AND IMAGE ------- -->
@endsection
