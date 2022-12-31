<?php

namespace App\Models;

use App\Models\TipeProduk;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Produk extends Model
{
    use HasFactory;
    protected $fillable = [
        'id_produk','tipe_id', 'nama_produk', 'harga', 'stok', 'gambar'
    ];

    protected $primaryKey = 'id_produk';


    public function tipeproduk(){
        return $this->belongsTo(TipeProduk::class, 'tipe_id', 'id_tipe_produk');
    }
}
