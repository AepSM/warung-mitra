@extends('layouts.client')

@section('content')
<!-- ========================= SECTION CONTENT ========================= -->
<section class="section-content bg padding-y border-top">
    <div class="container">    
        <div class="row">
            <main class="col-sm-8">    
                <div class="accordion" id="accordionExample">
                    <div class="card">
                        <div class="card-header" id="headingOne">
                            <h2 class="mb-0">
                                <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                    Transfer Bank
                                </button>
                            </h2>
                        </div>
                    
                        <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordionExample">
                            <div class="card-body">
                                <ol>
                                    <li>BCA</li>
                                    <li>Mandiri</li>
                                    <li>BRI</li>
                                </ol>
                            </div>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-header" id="headingTwo">
                            <h2 class="mb-0">
                                <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                    Aplikasi Koperasi
                                </button>
                            </h2>
                        </div>
                        <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionExample">
                            <div class="card-body">
                                <img src="{{ asset('img/qrcode.png') }}" class="img-thumbnail">
                            </div>
                        </div>
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
                        <dl class="dlist-align">
                            <dt>Biaya Kirim: </dt>
                            <dd class="text-right">Rp. 50.000</dd>
                        </dl>
                        <dl class="dlist-align h4">
                            <dt>Total:</dt>
                            <dd class="text-right"><strong>Rp. 100.000</strong></dd>
                        </dl>
                    </div>
                </div> <!-- card.// -->
                <hr>
                <div class="form-group">
                    <button class="btn btn-success btn-block">Metode Pembayaran</button>
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