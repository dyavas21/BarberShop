<?php

namespace App\Http\Controllers;

use App\Models\TipeProduk;
use Illuminate\Http\Request;

class TipeProdukController extends Controller
{
    public function admintipeproduk()
    {
        if(Auth()->user()->role_user == 2) {
            $title = 'Tipe Produk';
            $data = TipeProduk::all();
            return view('admin.tipeproduk', compact('data', 'title'));
        }
        return view('error.403');
    }

    public function admintambahtipe()
    {
        if(Auth()->user()->role_user == 2) {
            $title = 'Tambah Tipe';
            return view('admin.tambahtipe', compact('title'));
        }
        return view('error.403');
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
}
