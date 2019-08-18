<!DOCTYPE html>
<!--
	ustora by freshdesignweb.com
	Twitter: https://twitter.com/freshdesignweb
	URL: https://www.freshdesignweb.com/ustora/
-->
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Warung Mitra</title>
        
        <link rel="shortcut icon" type="image/x-icon" href="images/favicon.ico">

        <!-- jQuery -->
        <script src="{{ asset('client/js/jquery-2.0.0.min.js') }}" type="text/javascript"></script>

        <!-- Bootstrap4 files-->
        <script src="{{ asset('client/js/bootstrap.bundle.min.js') }}" type="text/javascript"></script>
        <link href="{{ asset('client/css/bootstrap.css') }}" rel="stylesheet" type="text/css"/>

        <!-- Font awesome 5 -->
        <link href="{{ asset('client/fonts/fontawesome/css/fontawesome-all.min.css') }}" type="text/css" rel="stylesheet">

        <!-- plugin: owl carousel  -->
        <link href="{{ asset('client/plugins/owlcarousel/assets/owl.carousel.min.css') }}" rel="stylesheet">
        <link href="{{ asset('client/plugins/owlcarousel/assets/owl.theme.default.css') }}" rel="stylesheet">
        <script src="{{ asset('client/plugins/owlcarousel/owl.carousel.min.js') }}"></script>

        <!-- custom style -->
        <link href="{{ asset('client/css/ui.css') }}" rel="stylesheet" type="text/css"/>
        <link href="{{ asset('client/css/responsive.css') }}" rel="stylesheet" media="only screen and (max-width: 1200px)" />

        <!-- custom javascript -->
        <script src="{{ asset('client/js/script.js') }}" type="text/javascript"></script>

        <script type="text/javascript">
        /// some script

        // jquery ready start
        $(document).ready(function() {
            // jQuery code

        }); 
        // jquery end
        </script>
    </head>
    <body>
        <header class="section-header">
            <section class="header-main">
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-lg-5-24 col-sm-5 col-4">
                            <div class="brand-wrap">
                                <img class="logo" src="{{ asset('client/images/logo-dark.png') }}">
                                <h2 class="logo-text">LOGO</h2>
                            </div> <!-- brand-wrap.// -->
                        </div>
                        <div class="col-lg-13-24 col-sm-12 order-3 order-lg-2">
                            <form action="#">
                                <div class="input-group w-100">
                                    <select class="custom-select"  name="category_name">
                                            <option value="">All type</option><option value="codex">Special</option>
                                            <option value="comments">Only best</option>
                                            <option value="content">Latest</option>
                                    </select>
                                    <input type="text" class="form-control" style="width:60%;" placeholder="Search">                        
                                    <div class="input-group-append">
                                        <button class="btn btn-primary" type="submit">
                                            <i class="fa fa-search"></i>
                                        </button>
                                    </div>
                                </div>
                            </form> <!-- search-wrap .end// -->
                        </div> <!-- col.// -->
                        <div class="col-lg-6-24 col-sm-7 col-8  order-2  order-lg-3">
                            <div class="d-flex justify-content-end">
                                <div class="widget-header">
                                    <small class="title text-muted">Welcome guest!</small>
                                    <div> 
                                        <a href="#">Sign in</a> <span class="dark-transp"> | </span>
                                        <a href="#"> Register</a>
                                    </div>
                                </div>
                                <a href="#" class="widget-header border-left pl-3 ml-3">
                                    <div class="icontext">
                                        <div class="icon-wrap icon-sm round border"><i class="fa fa-shopping-cart"></i></div>
                                    </div>
                                    <span class="badge badge-pill badge-danger notify">0</span>
                                </a>
                            </div> <!-- widgets-wrap.// -->
                        </div> <!-- col.// -->
                    </div> <!-- row.// -->
                </div> <!-- container.// -->
            </section> <!-- header-main .// -->
            <nav class="navbar navbar-expand-lg navbar-dark bg-secondary">
                <div class="container"> 
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#main_nav" aria-controls="main_nav" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="main_nav">
                        <ul class="navbar-nav">
                            <li class="nav-item"><a class="nav-link pl-0" href="#"> <strong>All category</strong></a></li>
                            <li class="nav-item"><a class="nav-link" href="#">Fashion</a></li>
                            <li class="nav-item"><a class="nav-link" href="#">Supermarket</a></li>
                            <li class="nav-item"><a class="nav-link" href="#">Electronics</a></li>
                            <li class="nav-item"><a class="nav-link" href="#">Baby &amp Toys</a></li>
                            <li class="nav-item"><a class="nav-link" href="#">Fitness sport</a></li>
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="http://example.com" id="dropdown07" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">More</a>
                                <div class="dropdown-menu" aria-labelledby="dropdown07">
                                    <a class="dropdown-item" href="#">Foods and Drink</a>
                                    <a class="dropdown-item" href="#">Home interior</a>
                                    <div class="dropdown-divider"></div>
                                    <a class="dropdown-item" href="#">Category 1</a>
                                    <a class="dropdown-item" href="#">Category 2</a>
                                    <a class="dropdown-item" href="#">Category 3</a>
                                </div>
                            </li>
                        </ul>
                    </div> <!-- collapse .// -->
                </div> <!-- container .// -->
            </nav>
        </header> <!-- section-header.// -->
        <section class="section-main bg padding-top-sm">
            <div class="container">                
                <div class="row-sm">
                    <div class="col-md-8">
                        <!-- ================= main slide ================= -->
                        <div class="owl-init slider-main owl-carousel" data-items="1" data-dots="false" data-nav="true">
                            <div class="item-slide">
                                <img src="{{ asset('client/images/banners/slide1.jpg') }}">
                            </div>
                            <div class="item-slide rounded">
                                <img src="{{ asset('client/images/banners/slide2.jpg') }}">
                            </div>
                            <div class="item-slide rounded">
                                <img src="{{ asset('client/images/banners/slide3.jpg') }}">
                            </div>
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
                                <a href="#" class="title">The name of product</a>
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
                            <div class="img-wrap"> <img src="{{ asset('client/images/items/6.jpg') }}"></div>
                            <figcaption class="info-wrap">
                                <a href="#" class="title">The name of product</a>
                                <div class="price-wrap">
                                    <span class="price-new">$280</span>
                                </div> <!-- price-wrap.// -->
                            </figcaption>
                        </figure> <!-- card // -->
                    </div> <!-- col // -->
                </div> <!-- row.// -->
            </div>
        </section>
        
        @yield('content')
        
        <!-- ========================= FOOTER ========================= -->
        <footer class="section-footer bg2">
            <div class="container">
                <section class="footer-bottom row">
                    <div class="col-sm-6"> 
                        <p> Made with <3 <br>  by Vosidiy M.</p>
                    </div>
                    <div class="col-sm-6">
                        <p class="text-sm-right">
                            Copyright &copy 2018 <br>
                            <a href="http://bootstrap-ecommerce.com">Bootstrap-ecommerce UI kit</a>
                        </p>
                    </div>
                </section> <!-- //footer-top -->
            </div><!-- //container -->
        </footer>
        <!-- ========================= FOOTER END // ========================= -->
    </body>
</html>