@extends('layouts.admin')

@section('style')
<!-- DataTables -->
<link rel="stylesheet" href="{{ asset('adminlte/bower_components/datatables.net-bs/css/dataTables.bootstrap.min.css') }}">

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
    #img_produk {
        max-width: 100px;
    }
</style>
@endsection

@section('content')
<!-- Content Header (Page header) -->
<section class="content-header">
    <h1>
        Order
    </h1>
    <ol class="breadcrumb">
        <li><a href="{{ route('home') }}"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Order</li>
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
                    {{-- <a 
                        href="{{ route('produk.create') }}" 
                        class="btn btn-success"
                        style="margin-bottom: 20px;">
                            <i class="fa fa-plus"></i>
                    </a> --}}
                    <div class="box">
                        <div class="box-header">
                            <h3 class="box-title">Data Order</h3>
                        </div>
                        <!-- /.box-header -->
                        <div class="box-body">
                            <table id="example2" class="table table-bordered table-hover">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>Kode</th>
                                        <th>Tanggal</th>
                                        <th>Nama</th>
                                        <th>Total Bayar</th>
                                        <th>Metode Bayar</th>
                                        <th>Status Bayar</th>
                                        <th>#</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    customer
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

@section('script')
<!-- DataTables -->
<script src="{{ asset('adminlte/bower_components/datatables.net/js/jquery.dataTables.min.js') }}"></script>
<script src="{{ asset('adminlte/bower_components/datatables.net-bs/js/dataTables.bootstrap.min.js') }}"></script>

<script>
    $(function () {
        $('#example1').DataTable()
        $('#example2').DataTable({
        'paging'      : true,
        'lengthChange': false,
        'searching'   : true,
        'ordering'    : true,
        'info'        : true,
        'autoWidth'   : false
        })
    })
</script>
@endsection
