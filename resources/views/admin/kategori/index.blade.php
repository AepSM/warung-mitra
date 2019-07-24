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
</style>
@endsection

@section('content')
<!-- Content Header (Page header) -->
<section class="content-header">
    <h1>
        Kategori
    </h1>
    <ol class="breadcrumb">
        <li><a href="{{ route('home') }}"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Kategori</li>
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
                        href="{{ route('kategori.create') }}" 
                        class="btn btn-success"
                        style="margin-bottom: 20px;">
                            <i class="fa fa-plus"></i>
                    </a>
                    <div class="box">
                        <div class="box-header">
                            <h3 class="box-title">Data Kategori</h3>
                        </div>
                        <!-- /.box-header -->
                        <div class="box-body">
                            <table id="example2" class="table table-bordered table-hover">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>Nama</th>
                                        <th>#</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($kategoris as $key => $kategori)
                                        <tr>
                                            <td>{{ $key + 1 }}</td>
                                            <td>{{ $kategori->nama }}</td>
                                            <td>
                                                <div class="btn-group">
                                                    <a href="{{ route('kategori.edit', ['id' => $kategori->id]) }}" class="btn btn-primary"><i class="fa fa-edit"></i></a>
                                                    <a href="{{ route('kategori.hapus', ['id' => $kategori->id]) }}" onclick="confirm('Yakin akan hapus?')" class="btn btn-danger"><i class="fa fa-trash"></i></a>
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
