@extends("layouts.Client.client")
@section("content_2")
    <div class="card card-body blur shadow-blur mx-3 mx-md-4 mt-n6">
        <section class="pt-3 pb-4" id="count-stats">
            <div class="container">
                <div class="row">
                    <div class="col-lg-9 mx-auto py-3">
                        <div class="row">
                            <div class="col-md-4 position-relative">
                                <div class="p-3 text-center">
                                    <h1 class="text-gradient text-primary"><span id="state1" countTo="70">0</span>+</h1>
                                    <h5 class="mt-3">Coded Elements</h5>
                                    <p class="text-sm font-weight-normal">From buttons, to inputs, navbars, alerts or cards, you are covered</p>
                                </div>
                                <hr class="vertical dark">
                            </div>
                            <div class="col-md-4 position-relative">
                                <div class="p-3 text-center">
                                    <h1 class="text-gradient text-primary"> <span id="state2" countTo="15">0</span>+</h1>
                                    <h5 class="mt-3">Design Blocks</h5>
                                    <p class="text-sm font-weight-normal">Mix the sections, change the colors and unleash your creativity</p>
                                </div>
                                <hr class="vertical dark">
                            </div>
                            <div class="col-md-4">
                                <div class="p-3 text-center">
                                    <h1 class="text-gradient text-primary" id="state3" countTo="4">0</h1>
                                    <h5 class="mt-3">Pages</h5>
                                    <p class="text-sm font-weight-normal">Save 3-4 weeks of work when you use our pre-made pages for your website</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- -------   START PRE-FOOTER 2 - simple social line w/ title & 3 buttons    -------- -->
        <div class="py-5">
            <div class="container">
                <div class="row">
                    <div class="col-lg-5 ms-auto">
                        <h4 class="mb-1">Thank you for your support!</h4>
                        <p class="lead mb-0">We deliver the best web products</p>
                    </div>
                    <div class="col-lg-5 me-lg-auto my-lg-auto text-lg-end mt-5">
                        <a href="https://twitter.com/intent/tweet?text=Check%20Material%20UI%20Kit%20made%20by%20%40CreativeTim%20%23webdesign%20%23designsystem%20%23bootstrap5&url=https%3A%2F%2Fwww.creative-tim.com%2Fproduct%2Fmaterial-kit" class="btn btn-twitter mb-0 me-2" target="_blank">
                            <i class="fab fa-twitter me-1"></i> Tweet
                        </a>
                        <a href="https://www.facebook.com/sharer/sharer.php?u=https://www.creative-tim.com/product/material-kit" class="btn btn-facebook mb-0 me-2" target="_blank">
                            <i class="fab fa-facebook-square me-1"></i> Share
                        </a>
                        <a href="https://www.pinterest.com/pin/create/button/?url=https://www.creative-tim.com/product/material-kit" class="btn btn-pinterest mb-0 me-2" target="_blank">
                            <i class="fab fa-pinterest me-1"></i> Pin it
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <!-- -------   END PRE-FOOTER 2 - simple social line w/ title & 3 buttons    -------- -->

    </div>
@endsection
