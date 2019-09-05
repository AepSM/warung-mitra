@extends('layouts.client')

@section('content')
<!-- ========================= SECTION CONTENT ========================= -->
<section class="section-content bg padding-y border-top">
    <div class="container">    
        <div class="row">
            <main class="col-sm-12">    
                <div class="card">
                    <table class="table table-hover shopping-cart-wrap">
                        <thead class="text-muted">
                            <tr>
                                <th scope="col">Produk</th>
                                <th scope="col" width="160">Quantity</th>
                                <th scope="col" width="160">Bayar</th>
                                <th scope="col" class="text-right" width="200">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($orders as $order)
                                <tr>
                                    <td>
                                        <figure class="media">
                                            <div class="img-wrap"><img src="{{ asset('img/' . $order->data_produk->gambar1) }}" class="img-thumbnail img-sm"></div>
                                            <figcaption class="media-body">
                                                <h6 class="title text-truncate">{{ $order->data_produk->nama }} </h6>
                                                <dl class="dlist-inline small">
                                                    <dt>Size: </dt>
                                                    <dd>XXL</dd>
                                                </dl>
                                                <dl class="dlist-inline small">
                                                    <dt>Color: </dt>
                                                    <dd>Orange color</dd>
                                                </dl>
                                            </figcaption>
                                        </figure> 
                                    </td>
                                    <td> 
                                        <input type="number" id="quantity" name="quantity" class="form-control input-number" value="{{ $order->qty }}" min="1" max="100">
                                    </td>
                                    <td> 
                                        <div class="price-wrap"> 
                                            <var class="price">Rp. {{ rupiah($order->data_produk->harga) }}</var> 
                                        </div> <!-- price-wrap .// -->
                                    </td>
                                    <td class="text-right"> 
                                        <a href="" class="btn btn-outline-danger"> × Remove</a>
                                    </td>
                                </tr>                                
                            @endforeach
                        </tbody>
                    </table>
                </div> <!-- card.// -->
                <hr>
                <div class="form-group">
                    {{-- <button class="btn btn-success btn-block">Pembayaran</button> --}}
                    <a href="{{ route('pembayaran') }}" class="btn btn-success btn-block">pembayaran</a>
                </div>    
            </main> <!-- col.// -->
        </div>    
    </div> <!-- container .//  -->
</section>
<!-- ========================= SECTION CONTENT END// ========================= -->
@endsection

@section('script')
    <script>
        $('document').ready(function () {
            countCart();
            orderData();

            function countCart() {
                $.ajax({
                    url: '{{ URL::route('count_cart') }}',
                    type: 'GET',
                    success: function (response) {
                        var data = response.data;

                        $('#notifcart').append(data);
                    }
                })
            }

            function rupiah(bilangan) {
                var bilangan = bilangan;
                    
                var	number_string = bilangan.toString(),
                    sisa 	= number_string.length % 3,
                    rupiah 	= number_string.substr(0, sisa),
                    ribuan 	= number_string.substr(sisa).match(/\d{3}/g);
                        
                if (ribuan) {
                    separator = sisa ? '.' : '';
                    rupiah += separator + ribuan.join('.');
                }

                return rupiah;
            }

            // function orderData() {
            //     $.ajax({
            //         url: '{{ URL::route('order_data') }}',
            //         type: 'GET',
            //         success: function (response) {
            //             console.log(response);
            //             $.each(response.data, function (i, value) {
            //                 var disable = "";
            //                 if (value.qty < 2) {
            //                     disable = "disabled";
            //                 }

            //                 var data = " " +
            //                         "<tr>" +
            //                         "   <td>" +
            //                         "      <figure class=\"media\">" +
            //                         "          <div class=\"img-wrap\"><img src=\"img/" + value.data_produk.gambar1 + "\" class=\"img-thumbnail img-sm\"></div>" +
            //                         "          <figcaption class=\"media-body\">" +
            //                         "              <h6 class=\"title text-truncate\">" + value.data_produk.nama + "</h6>" +
            //                         "              <dl class=\"dlist-inline small\">" +
            //                         "                  <dt>Size: </dt>" +
            //                         "                  <dd>XXL</dd>" +
            //                         "              </dl>" +
            //                         "              <dl class=\"dlist-inline small\">" +
            //                         "                  <dt>Color: </dt>" +
            //                         "                  <dd>Orange color</dd>" +
            //                         "              </dl>" +
            //                         "          </figcaption>" +
            //                         "      </figure>" +
            //                         "   </td>" +
            //                         "   <td>" +
            //                         "       <input type=\"number\" id=\"quantity\" data-id=\"" + value.id + "\" name=\"quantity\" class=\"form-control input-number\" value=\"" + value.qty + "\" min=\"1\" max=\"100\">" +
            //                         "   </td>" +
            //                         "   <td>" + 
            //                         "       <div class=\"price-wrap\">" +
            //                         "           <var class=\"price\">Rp. " + rupiah(value.data_produk.harga) + "</var>" + 
            //                         "       </div>" +
            //                         "   </td>" +
            //                         "   <td class=\"text-right\"> " +
            //                         "       <a href=\"\" class=\"btn btn-outline-danger\"> × Remove</a>" +
            //                         "   </td>" +
            //                         "</tr>";
            //                 $('tbody').append(data);
            //             })
            //         }
            //     })
            // }
        })
    </script>
@endsection