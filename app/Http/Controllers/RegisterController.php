<?php

namespace App\Http\Controllers;

use App\Models\Role;
use App\Models\User;
use App\Models\Barber;
use App\Models\Customer;
use App\Models\Register;
use Illuminate\Support\Str;
use Illuminate\Http\Request;

class RegisterController extends Controller
{
    public function register()
    {
        $datarole = Role::all();
        return view('register', compact('datarole'));
    }

    public function registeruser(Request $request)
    {
        $request->validate([
            'role_id' => 'required',
            'fname' => 'required|max:50',
            'lname' =>'required|max:50',
            'email' => 'required|email|unique:users',
            'password' => 'required|min:3'
        ]);
        
        $data = User::create([
            'role_id' => $request->role_id,
            'fname' => $request->fname,
            'lname' => $request->lname,
            'email' => $request->email,
            'password' => $request->password,
            // 'password' => bcrypt($request->passwword),
            'remember_token' => Str::random(60)
        ]);

        $idbaru = $data->id_user;

        if($request->role_id==1)
        {
            Customer::create([
                'fname'=>$request->fname,
                'lname'=>$request->lname,
                'customer_id'=>$idbaru,
            ]);
        }
        
        if($request->role_id==2)
        {
            Barber::create([
                'fname'=>$request->fname,
                'lname'=>$request->lname,
                'barber_id'=>$idbaru,
            ]);
        }
        return redirect('/login');
    }
}
