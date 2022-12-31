<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pemesanan extends Model

{
    use HasFactory;
    protected $fillable = [
        'id_pemesanan','pemesanan_id_cust', 'pemesanan_id_barber', 'fname', 'lname', 'email', 'address', 'phone', 'invoice'
    ];

    protected $primaryKey = 'id_pemesanan';
}
