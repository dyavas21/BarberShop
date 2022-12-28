<?php

namespace App\Models;

use App\Models\Barber;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class BarberDescription extends Model
{
    use HasFactory;
    protected $fillable = [
        'id_barber_description','barber_desc_id', 'address', 'age', 'gender', 'harga', 'phone', 'description', 'certificate', 'gambarbarber'
    ];

    protected $primaryKey = 'id_barber_description';

    public function barber(){
        return $this->belongsTo(Barber::class);
    }
}
