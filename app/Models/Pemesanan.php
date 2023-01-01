<?php

namespace App\Models;

use App\Models\Barber;
use App\Models\Status;
use App\Models\Customer;
use App\Models\BarberDescription;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Pemesanan extends Model

{
    use HasFactory;
    protected $fillable = [
        'id_pemesanan','pemesanan_id_cust', 'pemesanan_id_barber', 'fname', 'lname', 'email', 'address', 'phone', 'invoice'
    ];

    protected $primaryKey = 'id_pemesanan';

    public function custpem(){
        return $this->belongsTo(Customer::class, 'pemesanan_id_cust', 'customer_id');
    }

    public function barbpem(){
        return $this->belongsTo(Barber::class, 'pemesanan_id_barber', 'barber_id');
    }

    public function barbdescpem(){
        return $this->belongsTo(BarberDescription::class, 'pemesanan_id_barber', 'barber_desc_id');
    }

    public function statuspem(){
        return $this->belongsTo(Status::class, 'status_id', 'id_status');
    }
}
