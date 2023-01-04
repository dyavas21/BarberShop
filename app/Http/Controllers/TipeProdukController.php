<?php

namespace App\Http\Controllers;

use App\Models\TipeProduk;
use Illuminate\Http\Request;

class TipeProdukController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function admintipeproduk()
    {
        $title = 'Tipe Produk';
        $data = TipeProduk::all();
        return view('admin.tipeproduk', compact('data', 'title'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function admintambahtipe()
    {
        $title = 'Tambah Tipe';
        return view('admin.tambahtipe', compact('title'));
    }

    public function admininserttipeproduk(Request $request)
    {
        $data = TipeProduk::create($request->all());
        return redirect()->route('admintipeproduk')->with('success', 'Tipe Berhasil Ditambahkan');
    }


    public function admindeletetipe($id)
    {
        $data = TipeProduk::find($id);
        $data->delete();
        return redirect()->route('admintipeproduk')->with('success', 'Tipe Berhasil Dihapus');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\TipeProduk  $tipeProduk
     * @return \Illuminate\Http\Response
     */
    public function show(TipeProduk $tipeProduk)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\TipeProduk  $tipeProduk
     * @return \Illuminate\Http\Response
     */
    public function edit(TipeProduk $tipeProduk)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\TipeProduk  $tipeProduk
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, TipeProduk $tipeProduk)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\TipeProduk  $tipeProduk
     * @return \Illuminate\Http\Response
     */
    public function destroy(TipeProduk $tipeProduk)
    {
        //
    }
}
