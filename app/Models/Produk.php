<?php

namespace App\Models;

use App\Models\TipeProduk;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Produk extends Model
{
    use HasFactory;
    protected $fillable = [
        'id_produk','id_type', 'nama_produk', 'harga', 'stok', 'gambar'
    ];
    protected $primaryKey = 'id_produk';

    public function tipeproduk(){
        return $this->belongsTo(TipeProduk::class, 'id_type', 'id_produk');
    }
}
