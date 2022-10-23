@extends("layouts.Client.client")
@section("content_2")
    <!-- -------- START HEADER 8 w/ card over right bg image ------- -->
    <section>
        <div class="page-header min-vh-100">
            <div class="container  mt-6">
                <div class="row">
                    <div class="mt-6 col-6 d-lg-flex d-none h-100 my-auto pe-0 position-absolute top-0 start-0 text-center justify-content-center flex-column">
                        <div class="position-relative h-100 m-3 px-7 border-radius-lg d-flex flex-column justify-content-center" style="background-image: url('../assets/img/illustrations/illustration-signin.jpg'); background-size: cover;" loading="lazy"></div>
                    </div>
                    <div class="col-xl-5 col-lg-6 col-md-7 d-flex flex-column ms-auto me-auto ms-lg-auto me-lg-5">
                        <div class="card d-flex blur justify-content-center shadow-lg my-sm-0 my-sm-6 mt-8 mb-5">
                            <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2 bg-transparent">
                                <div class="bg-gradient-primary shadow-primary border-radius-lg p-3">
                                    <h3 class="text-white text-primary mb-0">Animal Details</h3>
                                </div>
                            </div>
                            <div class="card-body">
                                <p class="pb-3">
                                    <img height="300px" class="w-100  border-radius-md shadow-lg" src="{{asset("/storage/images/animals/" .$animal->image)}}" alt="image">

                                </p>
                                <form id="contact-form" method="post" autocomplete="off">
                                    <div class="card-body p-0 my-3">
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class=" mb-4">
                                                    <label class="text-info">Name</label>
                                                    <h5 >{{$animal->name}}</h5>
                                                </div>
                                            </div>
                                            <div class="col-md-6 ps-md-2">
                                                <div class=" mb-4">
                                                    <label class="text-info">Species</label>
                                                    <h5 >{{$animal->species}}</h5>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group mb-0 mt-md-0 mt-4">
                                            <div class=" mb-4">
                                                <label class="text-info">Description</label>
                                                <h5 >{{$animal->description}}</h5>
                                            </div>
                                        </div>
                                        <div class="form-group mb-0 mt-md-0 mt-4">
                                            <div class=" mb-4">
                                                <label class="text-info">Hunt Period</label>
                                                <h5 >{{$animal->hunt_period}}</h5>
                                            </div>
                                        </div>
                                        <div class="row">

                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- -------- END HEADER 8 w/ card over right bg image ------- -->
@endsection
