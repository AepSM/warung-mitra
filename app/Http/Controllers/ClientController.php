<?php

namespace App\Http\Controllers;

use App\Produk;
use App\Slider;
use App\OrderSementara;
use Illuminate\Support\Str;
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

    public function detail(Request $request, $id)
    {
        if($request->session()->has('kode')){
			$kode = $request->session()->get('kode');
		}else{
			$str = Str::random(10);
            $request->session()->put('kode', $str); 
        }

        $produk = Produk::find($id);
        return view('pages.detailProduk', ['produk' => $produk]);
    }

    public function countCart(Request $request)
    {
        $kode = $request->session()->get('kode');

        $countCart = OrderSementara::where('kode', $kode)->count();

        return response()->json([
            'success' => 'data berhasil disimpan',
            'data' => $countCart
        ]);
    }

    public function insertCart(Request $request)
    {
        $produk = Produk::where('id', $request->produk_id)->first();

        if($request->session()->has('kode')){
			$kode = $request->session()->get('kode');
		}else{
			$kode = 'kode kosong';
        }
        
        $orderSementara = OrderSementara::create([
            "produk_id" => $produk->id,
            "qty" => 1,
            "harga" => $produk->harga,
            "kode" => $kode
        ]);

        return response()->json([
            'success' => 'data berhasil disimpan',
            'data' => $kode
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
