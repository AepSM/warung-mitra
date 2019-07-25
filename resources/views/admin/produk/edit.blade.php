@extends('layouts.admin')

@section('content')
<!-- Content Header (Page header) -->
<section class="content-header">
    <h1>
        Ubah Produk
    </h1>
    <ol class="breadcrumb">
        <li><a href="{{ route('home') }}"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="{{ route('produk.index') }}">Produk</a></li>
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
                    <a href="{{ route('produk.index') }}" class="btn btn-warning" style="margin-bottom: 20px;">
                        <i class="fa fa-arrow-left"></i>
                    </a>
                    <form action="{{ route('produk.update', ['id' => $produk->id]) }}" method="POST" enctype="multipart/form-data">
                        @method('PUT')
                        @csrf
                        <div class="box">
                            <div class="box-body">
                                <div class="form-group">
                                    <label for="nama">Nama</label>
                                    <input type="text" class="form-control {{ $errors->first('nama') ? "is-invalid" : "" }}" value="{{ old('nama') ? old('nama') : $produk->nama }}" name="nama">
                                    <div class="invalid-feedback">
                                        <p style="color: red;">{{$errors->first('nama')}}</p>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="nama">Kategori</label>
                                    <select class="form-control" name="kategori" id="kategori">
                                        @foreach ($kategoris as $kategori)
                                            <option value="{{ $kategori->id }}"
                                                @if ($kategori->id == $produk->kategori_id)
                                                    {{ 'selected' }}
                                                @endif
                                                >
                                                {{ $kategori->nama }}
                                            </option>                                            
                                        @endforeach
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="berat">Berat</label>
                                    <input type="text" class="form-control {{ $errors->first('berat') ? "is-invalid" : "" }}" value="{{ old('berat') ? old('berat') : $produk->berat }}" name="berat">
                                    <div class="invalid-feedback">
                                        <p style="color: red;">{{$errors->first('berat')}}</p>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="merek">Merek</label>
                                    <input type="text" class="form-control {{ $errors->first('merek') ? "is-invalid" : "" }}" value="{{ old('merek') ? old('merek') : $produk->merek }}" name="merek">
                                    <div class="invalid-feedback">
                                        <p style="color: red;">{{$errors->first('merek')}}</p>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="deskripsi">Deskripsi</label>
                                    <textarea type="text" class="form-control {{ $errors->first('deskripsi') ? "is-invalid" : "" }}" name="deskripsi">{{ old('deskripsi') ? old('deskripsi') : $produk->deskripsi }}</textarea>
                                    <div class="invalid-feedback">
                                        <p style="color: red;">{{$errors->first('deskripsi')}}</p>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="stok">Stok</label>
                                    <input type="text" class="form-control {{ $errors->first('stok') ? "is-invalid" : "" }}" value="{{ old('stok') ? old('stok') : $produk->stok }}" name="stok">
                                    <div class="invalid-feedback">
                                        <p style="color: red;">{{$errors->first('stok')}}</p>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="harga">Harga</label>
                                    <input type="text" class="form-control {{ $errors->first('harga') ? "is-invalid" : "" }}" value="{{ old('harga') ? old('harga') : $produk->harga }}" name="harga">
                                    <div class="invalid-feedback">
                                        <p style="color: red;">{{$errors->first('harga')}}</p>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="gambar">Gambar</label>
                                    <div class="form-group">
                                        <img src="{{ url('img/' . $produk->gambar1 . '') }}" style="max-width: 250px;">
                                    </div>
                                    <div class="form-group">
                                        <input class="form-control" type="file" id="gambar" name="gambar">
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
