@extends('layouts.admin')

@section('content')
<!-- Content Header (Page header) -->
<section class="content-header">
    <h1>
        Ubah Customer
    </h1>
    <ol class="breadcrumb">
        <li><a href="{{ route('home') }}"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="{{ route('customer.index') }}">Customer</a></li>
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
                    <a href="{{ route('customer.index') }}" class="btn btn-warning" style="margin-bottom: 20px;">
                        <i class="fa fa-arrow-left"></i>
                    </a>
                    <form action="{{ route('customer.update', ['id' => $customer->id]) }}" method="POST">
                        @method('PUT')
                        @csrf
                        <div class="box">
                            <div class="box-body">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="nama">Nama</label>
                                        <input type="text" class="form-control {{ $errors->first('nama') ? "is-invalid" : "" }}" value="{{ old('nama') ? old('nama') : $customer->nama }}" name="nama">
                                        <div class="invalid-feedback">
                                            <p style="color: red;">{{$errors->first('nama')}}</p>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="email">Email</label>
                                        <input type="text" class="form-control {{ $errors->first('email') ? "is-invalid" : "" }}" value="{{ old('email') ? old('email') : $customer->email }}" name="email">
                                        <div class="invalid-feedback">
                                            <p style="color: red;">{{$errors->first('email')}}</p>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="jenkel">Jenis Kelamin</label>
                                        <input type="text" class="form-control {{ $errors->first('jenkel') ? "is-invalid" : "" }}" value="{{ old('jenkel') ? old('jenkel') : $customer->jenkel }}" name="jenkel">
                                        <div class="invalid-feedback">
                                            <p style="color: red;">{{$errors->first('jenkel')}}</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="nomor_hp">Nomor HP</label>
                                        <input type="text" class="form-control {{ $errors->first('nomor_hp') ? "is-invalid" : "" }}" value="{{ old('nomor_hp') ? old('nomor_hp') : $customer->nomor_hp }}" name="nomor_hp">
                                        <div class="invalid-feedback">
                                            <p style="color: red;">{{$errors->first('nomor_hp')}}</p>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="alamat">Alamat</label>
                                        <input type="text" class="form-control {{ $errors->first('alamat') ? "is-invalid" : "" }}" value="{{ old('alamat') ? old('alamat') : $customer->alamat }}" name="alamat">
                                        <div class="invalid-feedback">
                                            <p style="color: red;">{{$errors->first('alamat')}}</p>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="poin">Poin</label>
                                        <input type="text" class="form-control {{ $errors->first('poin') ? "is-invalid" : "" }}" value="{{ old('poin') ? old('poin') : rupiah($customer->poin) }}" name="poin">
                                        <div class="invalid-feedback">
                                            <p style="color: red;">{{$errors->first('poin')}}</p>
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
