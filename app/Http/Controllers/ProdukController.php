<?php

namespace App\Http\Controllers;

use App\Produk;
use App\Kategori;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class ProdukController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $produks = Produk::with('data_kategori')->get();

        return view('admin.produk.index', ['produks' => $produks]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $kategoris = Kategori::get();
        return view('admin.produk.create', ['kategoris' => $kategoris]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        \Validator::make($request->all(), [
            "nama" => "required|max:50",
            "berat" => "required|numeric",
            "merek" => "required",
            "deskripsi" => "required",
            "stok" => "required|numeric",
            "harga" => "required|numeric",
            "gambar" => "required"
        ])->validate();

        $image_name = null; 
        if ($request->hasFile('gambar')) {
            $image = $request->file('gambar');
            $image_name = 'produk_' . time() . '.' . $image->getClientOriginalExtension();
            $path = public_path('/img');
            $image->move($path, $image_name);
        }

        $kategoris = Kategori::get();

        $produks = Produk::create([
            "nama" => $request->nama,
            "kategori_id" => $request->kategori,
            "berat" => $request->berat,
            "merek" => $request->merek,
            "deskripsi" => $request->deskripsi,
            "stok" => $request->stok,
            "harga" => $request->harga,
            "gambar1" => $image_name
        ]);

        $request->session()->flash('status', 'Data berhasil disimpan');

        return redirect()->route('produk.create', ['kategoris' => $kategoris]);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $kategoris = Kategori::get();
        $produk = Produk::find($id);

        return view('admin.produk.edit', ['produk' => $produk, 'kategoris' => $kategoris]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        \Validator::make($request->all(), [
            "nama" => "required|max:50",
            "berat" => "required|numeric",
            "merek" => "required",
            "deskripsi" => "required",
            "stok" => "required|numeric",
            "harga" => "required|numeric",
            "gambar" => "required"
        ])->validate();

        $produk = Produk::find($id);
        $produk->nama = $request->nama;
        $produk->kategori_id = $request->kategori;
        $produk->berat = $request->berat;
        $produk->merek = $request->merek;
        $produk->deskripsi = $request->deskripsi;
        $produk->stok = $request->stok;
        $produk->harga = $request->harga;

        if ($request->hasFile('gambar')) {
            $destinationPath = public_path('/img');
            File::delete($destinationPath . '/' . $produk->gambar1);

            $image = $request->file('gambar');
            $image_name = 'produk_' . time() . '.' . $image->getClientOriginalExtension();
            $path = public_path('/img');
            $image->move($path, $image_name);

            $produk->gambar1 = $image_name;
        }

        $produk->save();

        $request->session()->flash('status', 'Data berhasil diubah');
        
        return redirect()->route('produk.edit', ['id' => $id]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    public function hapus(Request $request, $id)
    {
        $produk = Produk::find($id);
        
        $produk->delete();

        $request->session()->flash('status', 'Data berhasil dihapus');
        
        return redirect()->route('produk.index');
    }
}
