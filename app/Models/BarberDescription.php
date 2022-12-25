<?php

namespace App\Models;

use App\Models\Barber;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class BarberDescription extends Model
{
    use HasFactory;
    protected $guarded = [];

    public function barber(){
        return $this->belongsTo(Barber::class);
    }
}
