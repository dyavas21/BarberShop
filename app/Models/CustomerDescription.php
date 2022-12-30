<?php

namespace App\Models;

use App\Models\User;
use App\Models\Customer;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class CustomerDescription extends Model
{
    use HasFactory;
    protected $fillable = [
        'id_customer_description','customer_desc_id', 'address', 'age', 'gender', 'photo', 'phone'
    ];
    protected $primaryKey = 'id_customer_description';
    
    public function customer(){
        return $this->belongsTo(Customer::class);
    }

}
