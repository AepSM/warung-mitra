@extends('layouts.client')

@section('content')
<section class="section-main bg padding-top-sm">
    <div class="container">                
        <div class="row-sm">
            <div class="col-md-8">
                <!-- ================= main slide ================= -->
                <div class="row">
                    <aside class="col-md-12">
                        <!-- ================== 1-carousel bootstrap  ==================  -->
                        <div id="carousel1_indicator" class="carousel slide" data-ride="carousel">                    
                            <div class="carousel-inner">
                                <div class="carousel-item active">
                                    <img class="d-block w-100" src="{{ asset('client/images/banners/slide1.jpg') }}" alt="First slide"> 
                                </div>
                                <div class="carousel-item">
                                    <img class="d-block w-100" src="{{ asset('client/images/banners/slide2.jpg') }}" alt="Second slide">
                                </div>
                                <div class="carousel-item">
                                    <img class="d-block w-100" src="{{ asset('client/images/banners/slide3.jpg') }}" alt="Third slide">
                                </div>
                            </div>
                            <a class="carousel-control-prev" href="#carousel1_indicator" role="button" data-slide="prev">
                                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                <span class="sr-only">Previous</span>
                            </a>
                            <a class="carousel-control-next" href="#carousel1_indicator" role="button" data-slide="next">
                                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                <span class="sr-only">Next</span>
                            </a>
                        </div> 
                        <!-- ==================  1-carousel bootstrap ==================  .// -->		
                    </aside> <!-- col.// -->
                </div>
                <!-- ============== main slidesow .end // ============= -->        
            </div> <!-- col.// -->
            <aside class="col-md-4">                
                <div class="card mb-3">
                    <figure class="itemside">
                        <div class="aside"><div class="img-wrap p-2 border-right"><img class="img-sm" src="{{ asset('client/images/items/1.jpg') }}"></div></div>
                        <figcaption class="text-wrap align-self-center">
                            <h6 class="title">Group of products is here </h6>
                            <a href="#">More items</a>
                        </figcaption>
                    </figure>
                </div> <!-- card.// -->                
                <div class="card mb-3">
                    <figure class="itemside">
                        <div class="aside"><div class="img-wrap p-2 border-right"><img class="img-sm" src="{{ asset('client/images/items/2.jpg') }}"></div></div>
                        <figcaption class="text-wrap align-self-center">
                            <h6 class="title">Group of products  is here </h6>
                            <a href="#">More items</a>
                        </figcaption>
                    </figure>
                </div> <!-- card.// -->                
                <div class="card">
                    <figure class="itemside">
                        <div class="aside"><div class="img-wrap p-2 border-right"><img class="img-sm" src="{{ asset('client/images/items/3.jpg') }}"></div></div>
                        <figcaption class="text-wrap align-self-center">
                            <h6 class="title">Group of products is here </h6>
                            <a href="#">More items</a>
                        </figcaption>
                    </figure>
                </div> <!-- card.// -->                
            </aside>
        </div>
    </div> <!-- container .//  -->
</section>
<!-- ========================= SECTION MAIN END// ========================= -->
<!-- ========================= SECTION CONTENT ========================= -->
<section class="section-content bg padding-y-sm">
    <div class="container">
        <div class="row-sm">
            <div class="col-md-2 col-sm-6">
                <figure class="card card-product">
                    <div class="img-wrap"> <img src="{{ asset('client/images/items/1.jpg') }}"></div>
                    <figcaption class="info-wrap">
                        <a href="#" class="title">Good item name</a>
                        <div class="price-wrap">
                            <span class="price-new">$1280</span>
                            <del class="price-old">$1980</del>
                        </div> <!-- price-wrap.// -->
                    </figcaption>
                </figure> <!-- card // -->
            </div> <!-- col // -->
            <div class="col-md-2 col-sm-6">
                <figure class="card card-product">
                    <div class="img-wrap"> <img src="{{ asset('client/images/items/2.jpg') }}"></div>
                    <figcaption class="info-wrap">
                        <a href="#" class="title">The name of product</a>
                        <div class="price-wrap">
                            <span class="price-new">$280</span>
                        </div> <!-- price-wrap.// -->
                    </figcaption>
                </figure> <!-- card // -->
            </div> <!-- col // -->
            <div class="col-md-2 col-sm-6">
                <figure class="card card-product">
                    <div class="img-wrap"> <img src="{{ asset('client/images/items/3.jpg') }}"></div>
                    <figcaption class="info-wrap">
                        <a href="#" class="title">Good item name</a>
                        <div class="price-wrap">
                            <span class="price-new">$280</span>
                        </div> <!-- price-wrap.// -->
                    </figcaption>
                </figure> <!-- card // -->
            </div> <!-- col // -->
            <div class="col-md-2 col-sm-6">
                <figure class="card card-product">
                    <div class="img-wrap"> <img src="{{ asset('client/images/items/4.jpg') }}"></div>
                    <figcaption class="info-wrap">
                        <a href="#" class="title">Good item name</a>
                        <div class="price-wrap">
                            <span class="price-new">$280</span>
                        </div> <!-- price-wrap.// -->
                    </figcaption>
                </figure> <!-- card // -->
            </div> <!-- col // -->
            <div class="col-md-2 col-sm-6">
                <figure class="card card-product">
                    <div class="img-wrap"> <img src="{{ asset('client/images/items/5.jpg') }}"></div>
                    <figcaption class="info-wrap">
                        <a href="#" class="title">Good item name</a>
                        <div class="price-wrap">
                            <span class="price-new">$1280</span>
                            <del class="price-old">$1980</del>
                        </div> <!-- price-wrap.// -->
                    </figcaption>
                </figure> <!-- card // -->
            </div> <!-- col // -->
            <div class="col-md-2 col-sm-6">
                <figure class="card card-product">
                    <div class="img-wrap"> <img src="{{ asset('client/images/items/6.jpg') }}"></div>
                    <figcaption class="info-wrap">
                        <a href="#" class="title">The name of product product product</a>
                        <div class="price-wrap">
                            <span class="price-new">$280</span>
                        </div> <!-- price-wrap.// -->
                    </figcaption>
                </figure> <!-- card // -->
            </div> <!-- col // -->
            <div class="col-md-2 col-sm-6">
                <figure class="card card-product">
                    <div class="img-wrap"> <img src="{{ asset('client/images/items/7.jpg') }}"></div>
                    <figcaption class="info-wrap">
                        <a href="#" class="title">The name of product</a>
                        <div class="price-wrap">
                            <span class="price-new">$280</span>
                        </div> <!-- price-wrap.// -->
                    </figcaption>
                </figure> <!-- card // -->
            </div> <!-- col // -->
            <div class="col-md-2 col-sm-6">
                <figure class="card card-product">
                    <div class="img-wrap"> <img src="{{ asset('client/images/items/1.jpg') }}"></div>
                    <figcaption class="info-wrap">
                        <a href="#" class="title">The name of product</a>
                        <div class="price-wrap">
                            <span class="price-new">$280</span>
                        </div> <!-- price-wrap.// -->
                    </figcaption>
                </figure> <!-- card // -->
            </div> <!-- col // -->
            <div class="col-md-2 col-sm-6">
                <figure class="card card-product">
                    <div class="img-wrap"> <img src="{{ asset('client/images/items/2.jpg') }}"></div>
                    <figcaption class="info-wrap">
                        <a href="#" class="title">The name of product</a>
                        <div class="price-wrap">
                            <span class="price-new">$1280</span>
                            <del class="price-old">$1980</del>
                        </div> <!-- price-wrap.// -->
                    </figcaption>
                </figure> <!-- card // -->
            </div> <!-- col // -->
            <div class="col-md-2 col-sm-6">
                <figure class="card card-product">
                    <div class="img-wrap"> <img src="{{ asset('client/images/items/3.jpg') }}"></div>
                    <figcaption class="info-wrap">
                        <a href="#" class="title">The name of product</a>
                        <div class="price-wrap">
                            <span class="price-new">$280</span>
                        </div> <!-- price-wrap.// -->
                    </figcaption>
                </figure> <!-- card // -->
            </div> <!-- col // -->
            <div class="col-md-2 col-sm-6">
                <figure class="card card-product">
                    <div class="img-wrap"> <img src="{{ asset('client/images/items/4.jpg') }}"></div>
                    <figcaption class="info-wrap" style="height: 100px;">
                        <div style="height: 50px;" >
                            <a href="#" class="title">The name of product</a>
                        </div>
                        <div class="price-wrap">
                            <span class="price-new">$280</span>
                        </div> <!-- price-wrap.// -->
                    </figcaption>
                </figure> <!-- card // -->
            </div> <!-- col // -->
            <a href="#">
                <div class="col-md-2 col-sm-6">
                    <figure class="card card-product">
                        <div class="img-wrap"> <img src="{{ asset('client/images/items/6.jpg') }}"></div>
                        <figcaption class="info-wrap" style="height: 100px;">
                            <div style="height: 50px;" >
                                <a href="#" class="title text-sm">The name of product product product</a>
                            </div>
                            <div class="price-wrap">
                                <div class="float-left">
                                    <span class="price-new">$280</span>
                                </div>
                            </div> <!-- price-wrap.// -->
                        </figcaption>
                    </figure> <!-- card // -->
                </div> <!-- col // -->
            </a>
        </div> <!-- row.// -->
    </div>
</section>
@endsection