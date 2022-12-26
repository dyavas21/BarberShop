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
    protected $guarded = [];


    public function description(){
        return $this->hasOne(BarberDescription::class, 'barber_id', 'id');
    }

    public function user(){
        return $this->belongsTo(User::class);
    }
}
