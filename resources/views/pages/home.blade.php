@extends('layouts.client')

@section('style')
    <style>
        .price-new {
            color: red;
        }
        .slide {
            height: 320px;
        }
    </style>
@endsection

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
                            <div id="slider" class="carousel-inner">
                                
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
            <aside id="sliderSide" class="col-md-4">                
                
            </aside>
        </div>
    </div> <!-- container .//  -->
</section>
<!-- ========================= SECTION MAIN END// ========================= -->
<!-- ========================= SECTION CONTENT ========================= -->
<section class="section-content bg padding-y-sm">
    <div class="container">
        <div id="produk" class="row-sm">
            {{-- content js --}}
        </div> <!-- row.// -->
    </div>
</section>
@endsection

@section('script')
    <script>
        $('document').ready(function () {

            // function rupiah
            function rupiah(bilangan){
                var	number_string = bilangan.toString(),
                    sisa 	= number_string.length % 3,
                    rupiah 	= number_string.substr(0, sisa),
                    ribuan 	= number_string.substr(sisa).match(/\d{3}/g);
                        
                if (ribuan) {
                    separator = sisa ? '.' : '';
                    rupiah += separator + ribuan.join('.');
                }

                return rupiah;
            }

            tampilSlider();
            tampilSliderSide();
            tampilProduk();
            countCart();

            function tampilSlider() {
                $.ajax({
                    url: 'tampilSlider',
                    type: 'GET',
                    success: function (response) {
                        $.each(response.data, function (i, value) {
                            var data = " " +
                                "<div class=\"carousel-item " + value.link + "\">" +
                                "   <img class=\"d-block w-100\" src=\"img/" + value.gambar + "\" alt=\"First slide\">" +
                                "</div>";
                                
                                $('#slider').append(data);
                        });
                    }
                });
            }

            function tampilSliderSide() {
                $.ajax({
                    url: 'tampilSliderSide',
                    type: 'GET',
                    success: function (response) {
                        $.each(response.data, function (i, value) {
                            var data = " " +
                                "<div class=\"card mb-3\">" +
                                "   <figure class=\"itemside\">" +
                                "       <div class=\"aside\"><div class=\"img-wrap p-2 border-right\"><img class=\"img-sm\" src=\"img/" + value.gambar1 + "\"></div></div>" +
                                "       <figcaption class=\"text-wrap align-self-center\">" +
                                "          <h6 class=\"title\">" + value.nama + "</h6>" +
                                "               <a href=\"#\">More items</a>" +
                                "           </figcaption>" +
                                "       </figure>" +
                                "</div>";
                                
                                $('#sliderSide').append(data);
                        })
                    }
                })
            }

            function tampilProduk() {
                $.ajax({
                    url: 'tampilProduk',
                    type: 'GET',
                    success: function (response) {
                        $.each(response.data, function (i, value) {
                            var url = '{{ URL::route("detail", ":id") }}';
                            url = url.replace(':id', value.id);
                            
                            var data = " " +
                                "<a href=\"" + url + "\">" +
                                "   <div class=\"col-md-2 col-sm-6\">" +
                                "       <figure class=\"card card-product\">" +
                                "           <div class=\"img-wrap\"> <img src=\"img/" + value.gambar1 + "\"></div>" +
                                "           <figcaption class=\"info-wrap\" style=\"height: 100px;\">" +
                                "               <div style=\"height: 50px;\">" +
                                "                   <a href=\"#\" class=\"title text-sm\"><small>" + value.nama + "</small></a>" +
                                "               </div>" +
                                "               <div class=\"price-wrap\">" +
                                "                   <div class=\"float-left\">" +
                                "                       <span class=\"price-new\"><b>Rp. " + rupiah(value.harga) + "</b></span>" +
                                "                   </div>" +
                                "               </div>" +
                                "           </figcaption>" +
                                "       </figure>" +
                                "   </div>" +
                                "</a>";
                                
                                $('#produk').append(data);
                        });
                    }
                });
            }

            function countCart() {
                $.ajax({
                    url: '{{ URL::route('count_cart') }}',
                    type: 'GET',
                    success: function (response) {
                        var data = response.data;

                        $('#notifcart').append(data);
                    }
                })
            }
        })
    </script>
@endsection