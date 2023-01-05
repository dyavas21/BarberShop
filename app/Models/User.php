<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use App\Models\Role;
use App\Models\Barber;
use App\Models\Customer;
use App\Models\BarberDescription;
use Laravel\Sanctum\HasApiTokens;
use App\Models\CustomerDescription;
use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'id_user','role_id', 'fname', 'lname', 'email', 'email_verified_at', 'password', 'remember_token'
    ];
    protected $primaryKey = 'id_user';

    // public function roleuser(){
    //     return $this->belongsTo(Role::class, 'id_user', 'id_role');
    // }

    public function roleuser(){
        return $this->belongsTo(Role::class, 'role_id', 'id_role');
    }

    public function Barber(){
        return $this->hasMany(Barber::class, 'id', 'id');
    }


    // public function Customer(){
    //     return $this->hasMany(Customer::class, 'id', 'id');
    // }

    public function Customer(){
        return $this->belongsTo(Customer::class, 'id', 'id');
    }

    public function descb(){
        return $this->hasOne(BarberDescription::class, 'barber_desc_id', 'id_user');
    }

    public function descc(){
        return $this->hasOne(CustomerDescription::class, 'customer_desc_id', 'id_user');
    }



    public function setPasswordAttribute($password)
    {
        $this->attributes['password'] = bcrypt($password);
    }

    // public function descb(){
    //     return $this->hasMany(BarberDescription::class, 'barber_desc_id','id_user');
    // }

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];
}
