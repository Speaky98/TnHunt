@extends("layouts.Client.client")
@section("content_2")
    <section class="new-product-area section-padding30">
        <div class="container">
            <!-- Section tittle -->
            <div class="row">
                <div class="col-xl-12">
                    <div class="section-tittle mb-70">
                        <h2>New Arrivals</h2>
                    </div>
                </div>
            </div>
            @php
                $index=0;
            @endphp
            <div class="row">
                @foreach($list as $product)
                    <div class="col-xl-4 col-lg-4 col-md-6 col-sm-6">
                        <div class="single-new-pro mb-30 text-center">
                            <div class="product-img">
                                @if($product->limited)
                                <div class="badge bg-danger text-white position-absolute mt-1 ms-1">Limited</div>
                                @endif
                                @if(!$product->active_for_sale)
                                        <div class="badge bg-dark text-white position-absolute mt-1" style="margin-left:5rem!important">Not for sale</div>
                                    @endif
                                <img style="height: 250px; width: 400px;"src="{{ asset('images/'.$product->image) }}" alt="">
                            </div>
                            <div class="product-caption">
                                <h3><a href="#">{{ $product->name }}</a></h3>
                                <span>{{  $product->category }} </span>
                                <h3>{{  $product->price_unit }} $</h3>
                            </div>
                            @if($product->user_rate)
                               @php
                               $value=($product->total_rate/$product->user_rate);
                               @endphp
                            @else
                                @php
                                    $value=($product->user_rate);
                                    @endphp
                            @endif
                            <div style="margin-top: 15px" >
                                <form class="rating" id="forum{{$value}}" >
                                    <label id="11{{$value}}" title="Poor" class="fa fa-star disabled" ></label>
                                    <label id="22{{$value}}" title="Average" class="fa fa-star disabled" ></label>
                                    <label id="33{{$value}}" title="Average" class="fa fa-star disabled" ></label>
                                    <label id="44{{$value}}" title="Good" class="fa fa-star disabled" ></label>
                                    <label id="55{{$value}}" title="Awesome" class="fa fa-star disabled" ></label>
                                    @if($product->user_rate)
                                        <p style="margin-left: 12px; color: #0066B4!important">{{number_format(($product->total_rate/$product->user_rate),2)}}  ({{$product->user_rate}})</p>
                                    @else
                                        <p style="margin-left: 12px; color: #0066B4!important">{{number_format($product->total_rate, 2)}}  ({{$product->user_rate}})</p>
                                    @endif
                                </form>
                            </div>
                            <iframe hidden onload="average({{$value}})"></iframe>
                            <div>
                                @if($product->active_for_sale)
                                <button type="button" class="btn btn-dark" href="" data-toggle="modal" data-target="#createmodel{{$index}}" style="margin-top: 12px; margin-right:80% " >Rate</button>
                                @else
                                    <button type="button" disabled class="btn btn-dark" href="" data-toggle="modal" data-target="#createmodel{{$index}}" style="margin-top: 12px; margin-right:80% " >Soon</button>
                                @endif
                                <div class="modal fade" id="createmodel{{$index}}" tabindex="-1" role="dialog" aria-labelledby="createModalLabel" aria-hidden="true" style="padding-top: 100px">
                                    <div class="modal-dialog" role="document" style="max-width: 525px">
                                        <div class="modal-content">
                                            <form class="rating" method="POST" id="form{{$index}}" action="{{route("Modifyrate2")}}" >
                                                @csrf
                                                <div class="modal-header">
                                                    <h5 class="modal-title" id="createModalLabel"><i class="ti-marker-alt m-r-10"></i> Click to rate!</h5>
                                                </div>
                                                <div class="modal-body">
                                                    <input hidden id="id" type="number" value="{{ $product->id }}" name="id_rate">
                                                    <input type="radio" id="rating1{{$index}}" name="rating" value="1" onclick="rate1({{$index}})">
                                                    <label id="1{{$index}}" title="Poor" class="fa fa-star" for="rating1{{$index}}"></label>
                                                    <input type="radio" id="rating2{{$index}}" name="rating" value="2" onclick="rate2({{$index}})">
                                                    <label id="2{{$index}}" title="Average" class="fa fa-star" for="rating2{{$index}}"></label>
                                                    <input type="radio" id="rating3{{$index}}" name="rating" value="3" onclick="rate3({{$index}})">
                                                    <label id="3{{$index}}" title="Average" class="fa fa-star" for="rating3{{$index}}"></label>
                                                    <input type="radio" id="rating4{{$index}}" name="rating" value="4" onclick="rate4({{$index}})">
                                                    <label id="4{{$index}}" title="Good" class="fa fa-star" for="rating4{{$index}}"></label>
                                                    <input type="radio" id="rating5{{$index}}" name="rating" value="5" onclick="rate5({{$index}})">
                                                    <label id="5{{$index}}" title="Awesome" class="fa fa-star" for="rating5{{$index}}"></label>
                                                </div>
                                                <div class="modal-footer">
                                                    <button type="submit" id="submit_rate" onclick="clean({{$index}})" data-dismiss="modal">Close</button>
                                                    <button type="submit" id="submit_rate" form="form{{$index}}" value="Submit">Rate</button>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                    @php
                        $index=$index+1;
                    @endphp
                @endforeach
            </div>
        </div>
    </section>
@endsection
