@extends('layouts.admin')

@section('content')
<section class="content-header">
    <h1>
        Tracking
    </h1>
</section>

<!-- Main content -->
<section class="content">
    <div class="row">
        <div class="col-md-12">
            <div class="box">
                <div class="box-header with-border">
                    <div class="alert alert-success">
                        <h4>Success</h4>
                        Data berhasil diperbaharui
                    </div>
                    <h4 class="col-md-12">Masukkan Kode Order</h4>
                    <div class="box-body col-md-4">
                        <div class="input-group input-group-sm">
                            <input type="text" name="kode" id="kode" class="form-control">
                            <span class="input-group-btn">
                                <button type="button" class="btn btn-info btn-flat btn-kode">Submit</button>
                            </span>
                        </div>
                    </div>
                </div>
                <!-- /.box-header -->
                <div class="box-body">
                    <table class="table table-bordered">
                        <tr>
                            <th>Nama</th>
                            <th>Tanggal</th>
                            <th>Status Bayar</th>
                            <th>Tracking</th>
                        </tr>
                        <tr class="datarow">
                            <td colspan="5" class="text-center datarowtd">--kosong--</td>
                        </tr>    
                    </table>
                </div>
                <div class="box-body form-kirim">
                    <div class="form-group">
                        <label for="dikirim_dari">Dikirim dari</label>
                        <input type="text" id="dikirim_dari" class="form-control {{ $errors->first('dikirim_dari') ? "is-invalid" : "" }}" name="dikirim_dari" value="{{ old('dikirim_dari') }}">
                        <div class="invalid-feedback">
                            <p style="color: red;">{{$errors->first('dikirim_dari')}}</p>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="kurir">Kurir</label>
                        <input type="text" id="kurir" class="form-control {{ $errors->first('kurir') ? "is-invalid" : "" }}" name="kurir" value="{{ old('kurir') }}">
                        <div class="invalid-feedback">
                            <p style="color: red;">{{$errors->first('kurir')}}</p>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="nomor_hp">Nomor HP</label>
                        <input type="text" id="nomor_hp" class="form-control {{ $errors->first('nomor_hp') ? "is-invalid" : "" }}" name="nomor_hp" value="{{ old('nomor_hp') }}">
                        <div class="invalid-feedback">
                            <p style="color: red;">{{$errors->first('nomor_hp')}}</p>
                        </div>
                    </div>
                    <div class="form-group">
                        <button class="btn btn-primary btn-dikirim">Submit</button>
                    </div>
                </div>
            </div>
            <!-- /.box -->
        </div>
        <!--/.col (right) -->
    </div>
    <!-- /.row -->
</section>
@endsection

@section('script')
    <script>
        $('document').ready(function(){
            var CSRF_TOKEN = $('meta[name="csrf-token"]').attr('content');
            $('.alert').hide();
            $('.form-kirim').hide();

            $('.btn-kode').on('click', function() {
                var kode = $('#kode').val();
                $.ajax({
                    url: '{{ URL::route('tracking.show', 'kode') }}',
                    type: 'GET',
                    data: {
                        _token: CSRF_TOKEN,
                        id: kode
                    },
                    success: function(response) {
                        $('.datarowtd').remove();

                        $.each(response.data, function(i, value){
                            $('.datarow').empty();

                            if (value.status_bayar == 1) {
                                var status_bayar = "Lunas";
                            } else {
                                var status_bayar = "Belum Lunas";
                            }
                            
                            if (value.status_kirim == 1) {
                                var status_kirim = "<button class=\"btn-diterima-belum-dikirim\">Sudah diterima tapi belum dikirim</button>";
                            } else if (value.status_kirim == 2) {
                                var status_kirim = "<button class=\"btn-sampai\">Sudah Dikirim, Belum Sampai</button>";
                            } else {
                                var status_kirim = "<button class=\"btn-diterima\">Belum diterima</button>";
                            }
                            var dataTr = "" +
                                "<td>" + value.nama + "</td>" +
                                "<td>" + value.tanggal + "</td>" +
                                "<td>" + status_bayar + "</td>" +
                                "<td>" + status_kirim + "</td>";
                            
                            $('.datarow').append(dataTr);
                        });
                    }
                });
            });

            //diterima
            $('table .datarow').on('click', '.btn-diterima', function() {
                var kode = $('#kode').val();
                $.ajax({
                    url: '{{ URL::route('tracking.store') }}',
                    type: 'POST',
                    data: {
                        _token: CSRF_TOKEN,
                        btn: 'diterima',
                        kode: kode
                    },
                    success: function(response) {
                        $('.alert').show();
                        $.each(response.data, function(i, value){
                            $('.datarow').empty();

                            if (value.status_bayar == 1) {
                                var status_bayar = "Lunas";
                            } else {
                                var status_bayar = "Belum Lunas";
                            }
                            
                            if (value.status_kirim == 1) {
                                var status_kirim = "<button class=\"btn-diterima-belum-dikirim\">Sudah diterima tapi belum dikirim</button>";
                            } else if (value.status_kirim == 2) {
                                var status_kirim = "<u>Sudah Dikirim</u>";
                            } else {
                                var status_kirim = "<button class=\"btn-diterima\">Belum diterima</button>";
                            }
                            var dataTr = "" +
                                "<td>" + value.nama + "</td>" +
                                "<td>" + value.tanggal + "</td>" +
                                "<td>" + status_bayar + "</td>" +
                                "<td>" + status_kirim + "</td>";
                            
                            $('.datarow').append(dataTr);
                        });
                    }
                });
            })

            //btn-diterima-belum-dikirim
            $('table .datarow').on('click', '.btn-diterima-belum-dikirim', function() {
                $('.form-kirim').show();
            });

            //dikirim
            $('.btn-dikirim').on('click', function() {
                var kode = $('#kode').val();
                var dikirim_dari = $('#dikirim_dari').val();
                var kurir = $('#kurir').val();
                var nomor_hp = $('#nomor_hp').val();
                $.ajax({
                    url: '{{ URL::route('tracking.store') }}',
                    type: 'POST',
                    data: {
                        _token: CSRF_TOKEN,
                        btn: 'dikirim',
                        kode: kode,
                        dikirim_dari: dikirim_dari,
                        kurir: kurir,
                        nomor_hp: nomor_hp
                    },
                    success: function(response) {
                        $('.alert').show();
                        $.each(response.data, function(i, value){
                            $('.datarow').empty();

                            if (value.status_bayar == 1) {
                                var status_bayar = "Lunas";
                            } else {
                                var status_bayar = "Belum Lunas";
                            }
                            
                            if (value.status_kirim == 1) {
                                var status_kirim = "<button class=\"btn-diterima-belum-dikirim\">Sudah diterima tapi belum dikirim</button>";
                            } else if (value.status_kirim == 2) {
                                var status_kirim = "<button class=\"btn-sampai\">Sudah Dikirim, Belum Sampai</button>";
                            } else {
                                var status_kirim = "<button class=\"btn-diterima\">Belum diterima</button>";
                            }
                            var dataTr = "" +
                                "<td>" + value.nama + "</td>" +
                                "<td>" + value.tanggal + "</td>" +
                                "<td>" + status_bayar + "</td>" +
                                "<td>" + status_kirim + "</td>";
                            
                            $('.datarow').append(dataTr);
                            $('.form-kirim').hide();
                        });
                    }
                });
            });

            // diterima
            $('table .datarow').on('click', '.btn-sampai', function() {
                var kode = $('#kode').val();
                $.ajax({
                    url: '{{ URL::route('tracking.store') }}',
                    type: 'POST',
                    data: {
                        _token: CSRF_TOKEN,
                        btn: 'sampai',
                        kode: kode
                    },
                    success: function(response) {
                        $('.alert').show();
                        $.each(response.data, function(i, value){
                            $('.datarow').empty();

                            if (value.status_bayar == 1) {
                                var status_bayar = "Lunas";
                            } else {
                                var status_bayar = "Belum Lunas";
                            }
                                                        
                            var status_kirim = "<u>Sampai</u>";

                            var dataTr = "" +
                                "<td>" + value.nama + "</td>" +
                                "<td>" + value.tanggal + "</td>" +
                                "<td>" + status_bayar + "</td>" +
                                "<td>" + status_kirim + "</td>";
                            
                            $('.datarow').append(dataTr);
                        });
                    }
                });
            });
        });
    </script>
@endsection
