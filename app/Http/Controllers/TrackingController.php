<?php

namespace App\Http\Controllers;

use App\Order;
use App\Tracking;
use Illuminate\Http\Request;

class TrackingController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.tracking.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        if ($request->btn == "diterima") {
            $tracking = Tracking::create([
                'kode' => $request->kode,
                'keterangan' => "Orderan di konfirmasi"
            ]);
            $order = Order::where('kode', $request->kode)->first();
            $order->status_kirim = 1;
            $order->save();           
        } else {
            $tracking = Tracking::create([
                'kode' => $request->kode,
                'keterangan' => "Orderan dikirim dari ".$request->dikirim_dari.". Kurir a.n ".$request->kurir.", nomor hp ".$request->nomor_hp
            ]);
            $order = Order::where('kode', $request->kode)->first();
            $order->status_kirim = 2;
            $order->save(); 
        }

        $orders = Order::where('kode', $request->kode)->get();

        return response()->json([
            'data' => $orders
        ]);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Request $request, $id)
    {
        $order = Order::where('kode', $request->id)->get();

        return response()->json([
            'success' => 'data berhasil diambil',
            'data' => $order
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
        //
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
}
