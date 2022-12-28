<?php

namespace App\Models;

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
 


    public function description(){
        return $this->hasOne(BarberDescription::class, 'barber_id', 'id_barber');
    }

    public function userBarber(){
        return $this->belongsTo(User::class);
    }
}
