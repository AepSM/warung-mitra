<?php

namespace App\Http\Controllers;

use App\Slider;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class SliderController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $sliders = Slider::get();
        return view('admin.slider.index', ['sliders' => $sliders]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.slider.create');
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
            "link" => "required",
            "gambar" => "required"
        ])->validate();

        $image_name = null; 
        if ($request->hasFile('gambar')) {
            $image = $request->file('gambar');
            $image_name = 'slider_' . time() . '.' . $image->getClientOriginalExtension();
            $path = public_path('/img');
            $image->move($path, $image_name);
        }

        $sliders = Slider::create([
            "nama" => $request->nama,
            "link" => $request->link,
            "gambar" => $image_name
        ]);

        $request->session()->flash('status', 'Data berhasil disimpan');

        return redirect()->route('slider.create');
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
        $slider = Slider::find($id);

        return view('admin.slider.edit', ['slider' => $slider]);
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
            "link" => "required"
        ])->validate();

        $slider = Slider::find($id);
        $slider->nama = $request->nama;
        $slider->link = $request->link;

        if ($request->hasFile('gambar')) {
            $destinationPath = public_path('/img');
            File::delete($destinationPath . '/' . $slider->gambar);

            $image = $request->file('gambar');
            $image_name = 'slider_' . time() . '.' . $image->getClientOriginalExtension();
            $path = public_path('/img');
            $image->move($path, $image_name);

            $slider->gambar = $image_name;
        }

        $slider->save();

        $request->session()->flash('status', 'Data berhasil diubah');
        
        return redirect()->route('slider.edit', ['id' => $id]);
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
        $slider = Slider::find($id);
        
        $slider->delete();
        
        $destinationPath = public_path('/img');
        File::delete($destinationPath . '/' . $slider->gambar);

        $request->session()->flash('status', 'Data berhasil dihapus');
        
        return redirect()->route('slider.index');
    }
}
