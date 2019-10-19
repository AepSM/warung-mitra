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
        Order History
    </h1>
    <ol class="breadcrumb">
        <li><a href="{{ route('home') }}"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Order History</li>
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
                    <div class="box">
                        <div class="box-header">
                            <h3 class="box-title">Data Order History</h3>
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
                                    @foreach ($orders as $key => $order)
                                        <tr>
                                            <td>{{ $key + 1 }}</td>
                                            <td>{{ $order->kode }}</td>
                                            <td>{{ $order->tanggal }}</td>
                                            <td>{{ $order->nama }}</td>
                                            <td>Rp. {{ rupiah($order->total_bayar) }}</td>
                                            <td>
                                                @if ($order->jenis_bayar == 1)
                                                    Aplikasi Warung Mitra
                                                @elseif($order->jenis_bayar == 2)
                                                    Aplikasi Koperasi Mitra
                                                @elseif($order->jenis_bayar == 3)
                                                    Transfer Bank
                                                @elseif($order->jenis_bayar == 3)
                                                    COD
                                                @else
                                                    -
                                                @endif
                                            </td>
                                            <td><button class="btn btn-sm btn-{{ $order->status_bayar == 0 ? 'danger' : 'success' }}">{{ $order->status_bayar == 0 ? 'Belum lunas' : 'Lunas' }}</button></td>
                                            <td>
                                                <div class="btn-group">
                                                    <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown">
                                                        <span><i class="fa fa-gear"></i></span>
                                                        <span class="sr-only">Toggle Dropdown</span>
                                                    </button>
                                                    <ul class="dropdown-menu" role="menu">
                                                        <li><a class="dropdown-item" href="{{ route('order.history.detail', ['id' => $order->id]) }}">Detail</a></li>
                                                        <li><a class="dropdown-item" href="{{ route('order.history.hapus', ['id' => $order->id]) }}" onclick="return confirm('Yakin akan hapus?')">Hapus</a></li>
                                                    </ul>
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
