@extends('layouts.admin')

@section('content')
<!-- Content Header (Page header) -->
<section class="content-header">
    <h1>
        Ubah Order
    </h1>
    <ol class="breadcrumb">
        <li><a href="{{ route('home') }}"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="{{ route('order.index') }}">Order</a></li>
        <li class="active">Ubah</li>
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
                    <form action="{{ route('order.update', ['id' => $order->id]) }}" method="POST">
                        @method('PUT')
                        @csrf
                        <div class="box">
                            <div class="box-body">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="kode">Kode</label>
                                        <input type="text" class="form-control {{ $errors->first('kode') ? "is-invalid" : "" }}" value="{{ old('kode') ? old('kode') : $order->kode }}" name="kode" disabled>
                                        <div class="invalid-feedback">
                                            <p style="color: red;">{{$errors->first('kode')}}</p>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="tanggal">Tanggal</label>
                                        <input type="text" class="form-control {{ $errors->first('tanggal') ? "is-invalid" : "" }}" value="{{ old('tanggal') ? old('tanggal') : $order->tanggal }}" name="tanggal">
                                        <div class="invalid-feedback">
                                            <p style="color: red;">{{$errors->first('tanggal')}}</p>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="nama">Nama</label>
                                        <input type="text" class="form-control {{ $errors->first('nama') ? "is-invalid" : "" }}" value="{{ old('nama') ? old('nama') : $order->nama }}" name="nama">
                                        <div class="invalid-feedback">
                                            <p style="color: red;">{{$errors->first('nama')}}</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="total_bayar">Total Bayar</label>
                                        <input type="text" class="form-control {{ $errors->first('total_bayar') ? "is-invalid" : "" }}" value="{{ old('total_bayar') ? old('total_bayar') : $order->total_bayar }}" name="total_bayar">
                                        <div class="invalid-feedback">
                                            <p style="color: red;">{{$errors->first('total_bayar')}}</p>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="jenis_bayar">Metode Bayar</label>

                                        @if ($order->jenis_bayar == 1)
                                            {{ $jenis_bayar = "Aplikasi Warung Mitra" }}
                                        @elseif($order->jenis_bayar == 2)
                                            {{ $jenis_bayar = "Aplikasi Koperasi Mitra" }}
                                        @elseif($order->jenis_bayar == 3)
                                            {{ $jenis_bayar = "Transfer Bank" }}
                                        @else
                                            {{ $jenis_bayar = "Cash On Delivery" }}
                                        @endif
                                        
                                        <input type="text" class="form-control {{ $errors->first('jenis_bayar') ? "is-invalid" : "" }}" value="{{ $jenis_bayar }}" name="jenis_bayar">
                                        <div class="invalid-feedback">
                                            <p style="color: red;">{{$errors->first('jenis_bayar')}}</p>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="status_bayar">status_bayar</label>
                                        <select name="status_bayar" id="status_bayar" class="form-control" {{ $order->status_bayar == 1 ? 'disabled' : '' }}>
                                            <option value="0" {{ $order->status_bayar == 0 ? 'selected': '' }}>Belum lunas</option>
                                            <option value="1" {{ $order->status_bayar == 1 ? 'selected': '' }}>Lunas</option>
                                        </select>
                                        <div class="invalid-feedback">
                                            <p style="color: red;">{{$errors->first('status_bayar')}}</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <button type="submit" class="btn btn-success"><i class="fa fa-save"></i></button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- /.content -->
@endsection
