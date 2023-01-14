<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\TipeProduk;
use Illuminate\Http\Request;
use App\Http\Requests\StoreProductRequest;
use App\Http\Requests\UpdateProductRequest;

class ProductController extends Controller
{
    public function adminproduk()
    {
        if(Auth()->user()->role_user == 2) {
            $title = 'Produk';
            $dataproduk = Product::all();
            return view('admin.produk', compact('dataproduk', 'title'));
        }
       return view('error.403');
    }

    public function admintambahproduk()
    {   
        if(Auth()->user()->role_user == 2) {
            $title = 'Tambah Produk';
            $datatipe = TipeProduk::all();
            return view('admin.tambahproduk', compact('datatipe', 'title'));
        }
        return view('error.403');
    }

    public function admininsertproduk(Request $request)
    {
        $data = Product::create([
            'tipe_id' => $request->tipe_id,
            'nama_produk' => $request->nama_produk,
            'harga' => $request->harga,
            'stok' => $request->stok,
            'gambar' => $request->gambar,
        ]);

        if($request->hasFile('gambar')){
            $request->file('gambar')->move('gambarproduk/', $request->file('gambar')->getClientOriginalName());
            $data->gambar = $request->file('gambar')->getClientOriginalName();
            $data->save();
        }
        return redirect()->route('adminproduk')->with('success', 'Produk Berhasil Dibuat');
    }

    public function admindeleteproduk($id)
    {
        $data = Product::find($id);
        $data->delete();
        return redirect()->route('adminproduk')->with('success', 'Produk Berhasil Dihapus');
    }
}
