@extends('layouts.client')

@section('content')
<!-- ========================= SECTION CONTENT ========================= -->
<section class="section-content bg padding-y-sm">
    <div class="container">
        <div class="row">
            <div class="col-xl-10 col-md-9 col-sm-12">
                <main class="card">
                    <div class="row no-gutters">
                        <aside class="col-sm-6 border-right">
                            <article class="gallery-wrap"> 
                                <div class="img-big-wrap">
                                    <div> 
                                        <a href="images/items/1.jpg" data-fancybox=""><img src="{{ asset('img/' . $produk->gambar1) }}"></a>
                                    </div>
                                </div>
                            </article> <!-- gallery-wrap .end// -->
                        </aside>
                        <aside class="col-sm-6">
                            <article class="card-body">
                                <!-- short-info-wrap -->
                                <h3 class="title mb-3">{{ $produk->nama }}</h3>    
                                <div class="mb-3"> 
                                    <var class="price h3 text-warning"> 
                                        <span class="currency">Rp. </span><span class="num">{{ rupiah($produk->harga) }}</span>
                                    </var>
                                </div> <!-- price-detail-wrap .// -->
                                <hr>
                                <div class="row">
                                    <div class="col-sm-5">
                                        <dl class="dlist-inline">
                                        <dt>Stok: </dt>
                                        <dd> 
                                            {{ $produk->stok }}
                                        </dd>
                                        </dl>  <!-- item-property .// -->
                                    </div> <!-- col.// -->
                                </div> <!-- row.// -->
                                <hr>
                                <dl>
                                    <dt>Deskripsi</dt>
                                    <dd>
                                        <textarea class="form-control" name="deksripsi" rows="5">

                                        </textarea>
                                    </dd>
                                </dl>
                                <div class="row">
                                    <div class="col-sm">
                                        <button id="btnCart" class="btn btn-warning btn-block btn-cart" data-id="{{ $produk->id }}"> <i class="fa fa-shopping-cart"></i> Masukkan Keranjang </button>
                                    </div>
                                    <div class="col-sm">
                                        <button class="btn btn-warning btn-block btn-beli"> Beli </button>
                                    </div>
                                </div>
                                <!-- short-info-wrap .// -->
                            </article> <!-- card-body.// -->
                        </aside> <!-- col.// -->
                    </div> <!-- row.// -->
                </main> <!-- card.// -->
    
                <!-- PRODUCT DETAIL -->
                <article class="card mt-3">
                    <div class="card-body">
                        <h4>Detail Produk</h4>
                    <p>	</p>
                    <p>	</p>
                    </div> <!-- card-body.// -->
                </article> <!-- card.// -->
    
                <!-- PRODUCT DETAIL .// -->
    
            </div> <!-- col // -->
            <aside class="col-xl-2 col-md-3 col-sm-12">
                <div class="card">
                    <div class="card-header">
                        You may like
                    </div>
                    <div class="card-body row">
                        <div class="col-md-12 col-sm-3">
                            <figure class="item border-bottom mb-3">
                                    <a href="#" class="img-wrap"> <img src="{{ asset('client/images/items/2.jpg') }}" class="img-md"></a>
                                    <figcaption class="info-wrap">
                                        <a href="#" class="title">The name of product</a>
                                        <div class="price-wrap mb-3">
                                            <span class="price-new">$280</span> <del class="price-old">$280</del>
                                        </div> <!-- price-wrap.// -->
                                    </figcaption>
                            </figure> <!-- card-product // -->
                        </div> <!-- col.// -->
                        <div class="col-md-12 col-sm-3">
                            <figure class="item border-bottom mb-3">
                                    <a class="img-wrap"> <img src="{{ asset('client/images/items/3.jpg') }}" class="img-md"></a>
                                    <figcaption class="info-wrap">
                                        <a href="#" href="#" class="title">The name of product</a>
                                        <div class="price-wrap mb-3">
                                            <span class="price-new">$280</span>
                                        </div> <!-- price-wrap.// -->
                                    </figcaption>
                            </figure> <!-- card-product // -->
                        </div> <!-- col.// -->
                        <div class="col-md-12 col-sm-3">
                            <figure class="item border-bottom mb-3">
                                    <a href="#" class="img-wrap"> <img src="{{ asset('client/images/items/4.jpg') }}" class="img-md"></a>
                                    <figcaption class="info-wrap">
                                        <a href="#" class="title">The name of product</a>
                                        <div class="price-wrap mb-3">
                                            <span class="price-new">$280</span>
                                        </div> <!-- price-wrap.// -->
                                    </figcaption>
                            </figure> <!-- card-product // -->
                        </div> <!-- col.// -->
                    </div> <!-- card-body.// -->
                </div> <!-- card.// -->
            </aside> <!-- col // -->
        </div> <!-- row.// -->
    </div><!-- container // -->
</section>
<!-- ========================= SECTION CONTENT .END// ========================= -->
@endsection

@section('script')
<script>
    $('document').ready(function () {
        var CSRF_TOKEN = $('meta[name="csrf-token"]').attr('content');

        $('#btnCart').on('click', function () {
            var id = $(this).data('id');
            $.ajax({
                    url: '{{ URL::route('simpan_cart') }}',
                    type: 'POST',
                    data: {
                        _token: CSRF_TOKEN,
                        produk_id: id
                    },
                    success: function(response) {
                        console.log(response);
                    }
                });
        });
    });
</script>
@endsection