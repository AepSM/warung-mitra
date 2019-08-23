@extends('layouts.admin')

@section('content')
<!-- Content Header (Page header) -->
<section class="content-header">
    <h1>
        Tambah Kontak
    </h1>
    <ol class="breadcrumb">
        <li><a href="{{ route('home') }}"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="{{ route('kontak.index') }}">Kontak</a></li>
        <li class="active">Tambah</li>
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
                    <a href="{{ route('kontak.index') }}" class="btn btn-warning" style="margin-bottom: 20px;">
                        <i class="fa fa-arrow-left"></i>
                    </a>
                    <form action="{{ route('kontak.store') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="box">
                            <div class="box-body">
                                <div class="form-group">
                                    <label for="nama">Nama</label>
                                    <input type="text" class="form-control {{ $errors->first('nama') ? "is-invalid" : "" }}" name="nama" value="{{ old('nama') }}">
                                    <div class="invalid-feedback">
                                        <p style="color: red;">{{$errors->first('nama')}}</p>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="keterangan">Keterangan</label>
                                    <input type="text" class="form-control {{ $errors->first('keterangan') ? "is-invalid" : "" }}" name="keterangan" value="{{ old('keterangan') }}">
                                    <div class="invalid-feedback">
                                        <p style="color: red;">{{$errors->first('keterangan')}}</p>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="link">Link</label>
                                    <input type="text" class="form-control {{ $errors->first('link') ? "is-invalid" : "" }}" name="link" value="{{ old('link') }}">
                                    <div class="invalid-feedback">
                                        <p style="color: red;">{{$errors->first('link')}}</p>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="gambar">Gambar</label>
                                    <input type="file" class="form-control {{ $errors->first('gambar') ? "is-invalid" : "" }}" name="gambar"  value="{{ old('gambar') }}">
                                    <div class="invalid-feedback">
                                        <p style="color: red;">{{$errors->first('gambar')}}</p>
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
