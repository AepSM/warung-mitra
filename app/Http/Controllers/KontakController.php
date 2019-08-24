<?php

namespace App\Http\Controllers;

use App\Kontak;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class KontakController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $kontaks = Kontak::get();

        return view('admin.kontak.index', ['kontaks' => $kontaks]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.kontak.create');
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
            "keterangan" => "required",
            "link" => "required",
            "gambar" => "required"
        ])->validate();

        $image_name = null; 
        if ($request->hasFile('gambar')) {
            $image = $request->file('gambar');
            $image_name = 'kontak_' . time() . '.' . $image->getClientOriginalExtension();
            $path = public_path('/img');
            $image->move($path, $image_name);
        }

        $kontaks = Kontak::create([
            "nama" => $request->nama,
            "keterangan" => $request->keterangan,
            "link" => $request->link,
            "gambar" => $image_name
        ]);

        $request->session()->flash('status', 'Data berhasil disimpan');

        return redirect()->route('kontak.create');
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
        $kontak = Kontak::find($id);

        return view('admin.kontak.edit', ['kontak' => $kontak]);
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
            "nama" => "required",
            "keterangan" => "required",
            "link" => "required"
        ])->validate();

        $kontak = Kontak::find($id);
        $kontak->nama = $request->nama;
        $kontak->keterangan = $request->keterangan;
        $kontak->link = $request->link;

        if ($request->hasFile('gambar')) {
            $destinationPath = public_path('/img');
            File::delete($destinationPath . '/' . $kontak->gambar);

            $image = $request->file('gambar');
            $image_name = 'kontak_' . time() . '.' . $image->getClientOriginalExtension();
            $path = public_path('/img');
            $image->move($path, $image_name);

            $kontak->gambar1 = $image_name;
        }

        $kontak->save();

        $request->session()->flash('status', 'Data berhasil diubah');
        
        return redirect()->route('kontak.edit', ['id' => $id]);
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
        $kontak = Kontak::find($id);
        
        $kontak->delete();

        $destinationPath = public_path('/img');
        File::delete($destinationPath . '/' . $kontak->gambar);

        $request->session()->flash('status', 'Data berhasil dihapus');
        
        return redirect()->route('kontak.index');
    }
}
