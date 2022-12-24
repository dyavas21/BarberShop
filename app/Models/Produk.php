<?php

namespace App\Models;

use App\Models\TipeProduk;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Produk extends Model
{
    use HasFactory;
    protected $guarded = [];

    public function tipeproduk(){
        return $this->belongsTo(TipeProduk::class, 'id_type', 'id');
    }
}
