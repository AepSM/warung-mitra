@extends('layouts.admin')

@section('content')
<!-- Content Header (Page header) -->
<section class="content-header">
    <h1>
        Tambah Produk
    </h1>
    <ol class="breadcrumb">
        <li><a href="{{ route('home') }}"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="{{ route('produk.index') }}">Produk</a></li>
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
                    <a href="{{ route('produk.index') }}" class="btn btn-warning" style="margin-bottom: 20px;">
                        <i class="fa fa-arrow-left"></i>
                    </a>
                    <form action="{{ route('produk.store') }}" method="POST" enctype="multipart/form-data">
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
                                    <label for="kategori">Kategori</label>
                                    <select class="form-control {{ $errors->first('kategori') ? "is-invalid" : "" }}" name="kategori" id="kategori">
                                        <option value="">--Pilih Kategori--</option>
                                        @foreach ($kategoris as $kategori)
                                            <option value="{{ $kategori->id }}">{{ $kategori->nama }}</option>                                            
                                        @endforeach
                                    </select>
                                    <div class="invalid-feedback">
                                        <p style="color: red;">{{$errors->first('kategori')}}</p>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="deskripsi">Deskripsi</label>
                                    <textarea type="text" id="deskripsi" class="form-control {{ $errors->first('deskripsi') ? "is-invalid" : "" }}" name="deskripsi">
                                        {{ old('deskripsi') }}
                                    </textarea>
                                    <div class="invalid-feedback">
                                        <p style="color: red;">{{$errors->first('deskripsi')}}</p>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="stok">Stok</label>
                                    <input type="text" class="form-control {{ $errors->first('stok') ? "is-invalid" : "" }}" name="stok" value="{{ old('stok') }}">
                                    <div class="invalid-feedback">
                                        <p style="color: red;">{{$errors->first('stok')}}</p>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="harga">Harga</label>
                                    <input type="text" class="form-control {{ $errors->first('harga') ? "is-invalid" : "" }}" name="harga" value="{{ old('harga') }}">
                                    <div class="invalid-feedback">
                                        <p style="color: red;">{{$errors->first('harga')}}</p>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="gambar">Gambar</label>
                                    <input type="file" class="form-control {{ $errors->first('gambar') ? "is-invalid" : "" }}" name="gambar" value="{{ old('gambar') }}">
                                    <div class="invalid-feedback">
                                        <p style="color: red;">{{$errors->first('gambar')}}</p>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="video_id">Video_id</label>
                                    <input type="text" class="form-control {{ $errors->first('video_id') ? "is-invalid" : "" }}" name="video_id" value="{{ old('video_id') }}">
                                    <div class="invalid-feedback">
                                        <p style="color: red;">{{$errors->first('video_id')}}</p>
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

@section('script')
<!-- CK Editor -->
<script src="{{ asset('adminlte/bower_components/ckeditor/ckeditor.js') }}"></script>

<script>
    $(function () {
        // Replace the <textarea id="editor1"> with a CKEditor
        // instance, using default configuration.
        CKEDITOR.replace('deskripsi')
    })
</script>
@endsection
