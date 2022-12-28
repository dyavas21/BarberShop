<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TipeProduk extends Model
{
    use HasFactory;
    protected $fillable = [
        'id_tipe_produk','nama'
    ];
    protected $primaryKey = 'id_tipe_produk';
}
