@extends('layouts.admin')

@section('content')
<!-- Content Header (Page header) -->
<section class="content-header">
    <h1>
        Ubah Kategori
    </h1>
    <ol class="breadcrumb">
        <li><a href="{{ route('home') }}"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="{{ route('kategori.index') }}">Kategori</a></li>
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
                    <a href="{{ route('kategori.index') }}" class="btn btn-warning" style="margin-bottom: 20px;">
                        <i class="fa fa-arrow-left"></i>
                    </a>
                    <form action="{{ route('kategori.update', ['id' => $kategori->id]) }}" method="POST">
                        @method('PUT')
                        @csrf
                        <div class="box">
                            <div class="box-body">
                                <div class="form-group">
                                    <label for="nama">Nama</label>
                                    <input type="text" class="form-control {{ $errors->first('nama') ? "is-invalid" : "" }}" value="{{ old('nama') ? old('nama') : $kategori->nama }}" name="nama">
                                    <div class="invalid-feedback">
                                        <p style="color: red;">{{$errors->first('nama')}}</p>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="grup">Grup</label>
                                    <input type="text" class="form-control {{ $errors->first('grup') ? "is-invalid" : "" }}" value="{{ old('grup') ? old('grup') : $kategori->grup }}" name="grup">
                                    <div class="invalid-feedback">
                                        <p style="color: red;">{{$errors->first('grup')}}</p>
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
