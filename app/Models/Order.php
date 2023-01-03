<?php

namespace App\Models;

use App\Models\Invoice;
use App\Models\Product;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Order extends Model
{
    use HasFactory;

    protected $fillable = [
        'order_id_cust',
        'fname',
        'lname',
        'email'
];

    public function products()
    {
        return $this->belongsToMany(Product::class)->withPivot(['quantity']);
    }

    public function detailinvoice(){
        return $this->hasOne(Invoice::class, 'order_id', 'id');
    }

    public function statusorder(){
        return $this->belongsTo(Status::class, 'status_id', 'id_status');
    }
}
