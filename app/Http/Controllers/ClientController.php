<?php

namespace App\Http\Controllers;

use App\Produk;
use App\Slider;
use App\OrderSementara;
use Illuminate\Http\Request;

class ClientController extends Controller
{
    public function index()
    {
        return view('pages.home');
    }

    public function tampilProduk()
    {
        $produks = Produk::get();

        return response()->json([
            'success' => 'data berhasil disimpan',
            'data' => $produks
        ]);
    }

    public function tampilSlider()
    {
        $sliders = Slider::get();

        return response()->json([
            'success' => 'data berhasil disimpan',
            'data' => $sliders
        ]);
    }

    public function tampilSliderSide()
    {
        $produks = Produk::limit(3)->get();

        return response()->json([
            'success' => 'data berhasil disimpan',
            'data' => $produks
        ]);
    }

    public function detail($id)
    {
        $produk = Produk::find($id);
        return view('pages.detailProduk', ['produk' => $produk]);
    }

    public function insertCart(Request $request)
    {
        $produk = Produk::where('id', $request->produk_id)->first();
        $orderSementara = OrderSementara::create([
            "produk_id" => $produk->id,
            "harga" => $produk->harga
        ]);

        return response()->json([
            'success' => 'data berhasil disimpan',
            'data' => $request->header('User-Agent')
        ]);
    }

    public function order($code)
    {
        return view('pages.order');
    }

    public function login()
    {
        return view('pages.login');
    }

    public function register()
    {
        return view('pages.register');
    }
}
