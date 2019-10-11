@extends('layouts.admin')

@section('style')
<style>
    #img_produk {
        max-width: 100%;
    }
</style>
@endsection

@section('content')
<!-- Content Header (Page header) -->
<section class="content-header">
    <h1>
        Detail Order
    </h1>
    <ol class="breadcrumb">
        <li><a href="{{ route('home') }}"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="{{ route('order.index') }}">Order</a></li>
        <li class="active">Detail</li>
    </ol>
</section>

<!-- Main content -->
<section class="content">
    <div class="box box-default">
        <div class="box-body">
            <div class="row">
                <div class="col-xs-12">
                    @if(session('status'))
                        <div class="alert alert-success">
                            {{session('status')}}
                        </div>
                    @endif
                    <a href="{{ route('order.index') }}" class="btn btn-warning" style="margin-bottom: 20px;">
                        <i class="fa fa-arrow-left"></i>
                    </a>
                    <form action="#" method="POST">
                        <div class="box">
                            <div class="box-body">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="kode">Kode</label>
                                        <input type="text" class="form-control" value="{{ $order->kode }}" name="kode">
                                    </div>
                                    <div class="form-group">
                                        <label for="tanggal">Tanggal</label>
                                        <input type="text" class="form-control" value="{{ $order->tanggal }}" name="tanggal">
                                    </div>
                                    <div class="form-group">
                                        <label for="nama">Nama</label>
                                        <input type="text" class="form-control" value="{{ $order->nama }}" name="nama">
                                    </div>
                                    <div class="form-group">
                                        <label for="alamat">Alamat</label>
                                        <textarea class="form-control" name="alamat">{{ $order->alamat ." RT ". $order->rt ." / RW ". $order->rw .", Desa ". $order->desa ." Kec. ". $order->kecamatan ." Kab. ". $order->kabupaten ." Kode Pos ". $order->kode_pos }}</textarea>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="jenis_bayar">Metode Bayar</label>
                                        @if ($order->jenis_bayar == 1)
                                            @php $jenis_bayar = "Transfer aplikasi warung mitra" @endphp
                                        @elseif ($order->jenis_bayar == 2)
                                            @php $jenis_bayar = "Transfer aplikasi koperasi mitra" @endphp
                                        @elseif ($order->jenis_bayar == 3)
                                            @php $jenis_bayar = "Transfer bank" @endphp
                                        @elseif ($order->jenis_bayar == 4)
                                            @php $jenis_bayar = "COD" @endphp
                                        @else
                                            @php $jenis_bayar = "-" @endphp
                                        @endif
                                        <input type="text" class="form-control" value="{{ $jenis_bayar }}" name="jenis_bayar">
                                    </div>
                                    <div class="form-group">
                                        <label for="total_harga">Total Harga</label>
                                        <input type="text" class="form-control" value="{{ rupiah($order->total_harga) }}" name="total_harga">
                                    </div>
                                    <div class="form-group">
                                        <label for="ongkir">Ongkir</label>
                                        <input type="text" class="form-control" value="{{ rupiah($order->ongkir) }}" name="ongkir">
                                    </div>
                                    <div class="form-group">
                                        <label for="total_bayar">Total Bayar</label>
                                        <input type="text" class="form-control" value="{{ rupiah($order->total_bayar) }}" name="total_bayar">
                                    </div>
                                </div>
                            </div>
                            @if ($order->dropshipper != null)
                                <div class="box-body">
                                    <div class="col-md-6">
                                        <h3>Dropshipper</h3>
                                        <hr>
                                        <div class="form-group">
                                            <label for="dropshipper_nama">Nama Pengirim</label>
                                            <input type="text" class="form-control" value="{{ $order->dropshipper_nama }}" name="dropshipper_nama">
                                        </div>
                                        <div class="form-group">
                                            <label for="dropshipper_detail">Info Tambahan</label>
                                            <input type="text" class="form-control" value="{{ $order->dropshipper_detail }}" name="dropshipper_detail">
                                        </div>
                                    </div>
                                </div>                                
                            @endif
                            <div class="box-body">
                                <div class="col-md-12">
                                    <h4>Detail Produk</h4>
                                    @foreach ($order->data_order_detail as $order_detail)
                                        <div class="col-md-2" style="border: 1px solid #e0e0e0;">
                                            <p style="height: 150px;"><img src="{{ asset('img/'.$order_detail->data_produk->gambar1) }}" alt="" id="img_produk"></p>
                                            <p>Jumlah: {{ $order_detail->qty }}</p>
                                            <p>Harga: {{ rupiah($order_detail->harga) }}</p>
                                        </div>
                                    @endforeach
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- /.content -->
@endsection
