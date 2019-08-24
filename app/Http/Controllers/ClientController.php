<?php

namespace App\Http\Controllers;

use App\Produk;
use App\Slider;
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
        return view('pages.detailProduk');
    }

    public function order($code)
    {
        return view('pages.order');
    }
}
