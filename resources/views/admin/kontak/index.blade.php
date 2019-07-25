@extends('layouts.admin')

@section('style')
<style>
    thead {
        background-color: #00a65a;
    }
    thead tr th {
        text-align: center;
        color: #fff;
    }
    table tr td {
        text-align: center;
    }
    #img_kontak {
        max-width: 100px;
    }
</style>
@endsection

@section('content')
<!-- Content Header (Page header) -->
<section class="content-header">
    <h1>
        Kontak
    </h1>
    <ol class="breadcrumb">
        <li><a href="{{ route('home') }}"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Kontak</li>
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
                    <a 
                        href="{{ route('kontak.create') }}" 
                        class="btn btn-success"
                        style="margin-bottom: 20px;">
                            <i class="fa fa-plus"></i>
                    </a>
                    <div class="box">
                        <div class="box-header">
                            <h3 class="box-title">Data Kontak</h3>
                        </div>
                        <!-- /.box-header -->
                        <div class="box-body">
                            <table id="example2" class="table table-bordered table-hover">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>Nama</th>
                                        <th>Keterangan</th>
                                        <th>Link</th>
                                        <th>Gambar</th>
                                        <th>#</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($kontaks as $key => $kontak)
                                        <tr>
                                            <td>{{ $key + 1 }}</td>
                                            <td>{{ $kontak->nama }}</td>
                                            <td>{{ $kontak->keterangan }}</td>
                                            <td>{{ $kontak->link }}</td>
                                            <td><img src="{{ asset('img/' . $kontak->gambar) }}" id="img_kontak"></td>
                                            <td>
                                                <div class="btn-group">
                                                    <a href="{{ route('kontak.edit', ['id' => $kontak->id]) }}" class="btn btn-primary"><i class="fa fa-edit"></i></a>
                                                    <a href="{{ route('kontak.hapus', ['id' => $kontak->id]) }}" onclick="confirm('Yakin akan hapus?')" class="btn btn-danger"><i class="fa fa-trash"></i></a>
                                                </div>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- /.content -->
@endsection
