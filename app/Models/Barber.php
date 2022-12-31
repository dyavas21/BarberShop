<?php

namespace App\Models;

use App\Models\Pemesanan;
use App\Models\BarberDescription;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Barber extends Model
{
    use HasFactory;
    // protected $fillable = [
    //     'fname',
    //     'lname',
    //     'email',
    // ];
    protected $primaryKey = 'id_barber';
    protected $fillable = [
        'id_barber','barber_id', 'fname', 'lname'
    ];
 
    public function descriptionBarber(){
        return $this->hasOne(BarberDescription::class, 'barber_desc_id', 'barber_id');
    }

    public function userBarber(){
        return $this->belongsTo(User::class);
    }

    public function pemesananBarber(){
        return $this->hasOne(Pemesanan::class, 'pemesanan_id_barber', 'barber_id');
    }
}
