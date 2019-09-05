@extends('layouts.client')

@section('content')
<!-- ========================= SECTION CONTENT ========================= -->
<section class="section-content bg padding-y border-top">
    <div class="container">    
        <div class="row">
            <main class="col-sm-8">    
                <div class="card">
                    <div class="card-body">
                        <nav>
                            <div class="nav nav-tabs" id="nav-tab" role="tablist">
                                <a class="nav-item nav-link active" id="nav-home-tab" data-toggle="tab" href="#nav-home" role="tab" aria-controls="nav-home" aria-selected="true">Login</a>
                                <a class="nav-item nav-link" id="nav-profile-tab" data-toggle="tab" href="#nav-profile" role="tab" aria-controls="nav-profile" aria-selected="false">Beli Tanpa Login</a>
                            </div>
                        </nav>
                        <div class="tab-content" id="nav-tabContent">
                            <div class="tab-pane fade show active" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab">
                                <p>
                                    <form>
                                        <div class="form-group">
                                            <label for="nama">Username</label>
                                            <input type="text" class="form-control" id="nama">
                                        </div>
                                        <div class="form-group">
                                            <label for="password">Password</label>
                                            <input type="password" class="form-control" id="password">
                                        </div>
                                    </form>
                                </p>
                            </div>
                            <div class="tab-pane fade" id="nav-profile" role="tabpanel" aria-labelledby="nav-profile-tab">
                                <p>
                                    <form>
                                        <div class="form-group">
                                            <label for="nama">Nama</label>
                                            <input type="text" class="form-control" id="nama">
                                        </div>
                                        <div class="form-row">
                                            <div class="form-group col-md-6">
                                                <label for="email">Email</label>
                                                <input type="email" class="form-control" id="email">
                                            </div>
                                            <div class="form-group col-md-6">
                                                <label for="nomor">Nomor HP</label>
                                                <input type="text" class="form-control" id="nomor">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="alamat">Alamat</label>
                                            <textarea class="form-control" id="alamat" rows="3"></textarea>
                                        </div>
                                    </form>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                <br>
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Detail Produk</h5>
                        <hr>
                        <table class="table table-hover shopping-cart-wrap">
                            <thead class="text-muted">
                                <tr>
                                    <th scope="col">Produk</th>
                                    <th scope="col" width="300" class="text-center">Quantity</th>
                                    <th scope="col" width="260">Bayar</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>
                                        <figure class="media">
                                            <div class="img-wrap"><img src="{{ asset('img/produk_1566560921.jpg') }}" class="img-thumbnail img-sm"></div>
                                            <figcaption class="media-body">
                                                <h6 class="title text-truncate">Judul</h6>
                                                <dl class="dlist-inline small">
                                                    <dt>Size: </dt>
                                                    <dd>XXL</dd>
                                                </dl>
                                                <dl class="dlist-inline small">
                                                    <dt>Color: </dt>
                                                    <dd>Orange color</dd>
                                                </dl>
                                            </figcaption>
                                        </figure> 
                                    </td>
                                    <td> 
                                        <p class="text-center">1</p>
                                    </td>
                                    <td> 
                                        <div class="price-wrap"> 
                                            <var class="price">Rp. 100.000</var> 
                                        </div> <!-- price-wrap .// -->
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div> 
            </main> <!-- col.// -->
            <main class="col-sm-4">    
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Total Belanja</h5>
                        <hr>
                        <dl class="dlist-align">
                            <dt>Total Bayar: </dt>
                            <dd class="text-right">Rp. 50.000</dd>
                        </dl>
                        <dl class="dlist-align h4">
                            <dt>Total:</dt>
                            <dd class="text-right"><strong>Rp. 50.000</strong></dd>
                        </dl>
                    </div>
                </div> <!-- card.// -->
                <hr>
                <div class="form-group">
                    <a href="{{ route('metode_pembayaran') }}" class="btn btn-success btn-block">Metode Pembayaran</a>
                </div>    
            </main> <!-- col.// -->
        </div>  
    </div> <!-- container .//  -->
</section>
<!-- ========================= SECTION CONTENT END// ========================= -->
@endsection

@section('script')
    <script>
    
    </script>
@endsection