<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Invoice extends Model
{
    use HasFactory;
    protected $fillable = [
        'customer_id','order_id', 'invoice', 'harga_total'
    ];

    protected $primaryKey = 'id_invoice';

}
