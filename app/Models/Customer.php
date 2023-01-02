<?php

namespace App\Models;

use App\Models\User;
use App\Models\Pemesanan;
use App\Models\CustomerDescription;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Customer extends Model
{
    use HasFactory;
    protected $fillable = [
        'id_customer','customer_id', 'fname', 'lname'
    ];
    protected $primaryKey = 'id_customer';
     
    public function descriptionCustomer(){
        return $this->hasOne(CustomerDescription::class, 'customer_desc_id', 'customer_id');
    }


    public function userCustomer(){
        return $this->belongsTo(User::class);
    }

    public function pemesananCustomer(){
        return $this->hasOne(Pemesanan::class, 'pemesanan_id_cust', 'customer_id');
    }

    // public function userCustomer(){
    //     return $this->belongsTo(User::class);
    // }
}
