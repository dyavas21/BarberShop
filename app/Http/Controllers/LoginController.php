<?php

namespace App\Http\Controllers;

use App\Models\Role;
use App\Models\User;
use App\Models\Login;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{     
    public function login()
    {
        return view('login');
    }

    public function loginproses(Request $request)
    {
        if(Auth::attempt($request->only('email', 'password'))){
                    
            $role = Auth::user()->roleuser->id_role;

            $admin = Auth::user()->role_user;

            if($role == 1 && $admin == 1){
                return redirect('customer');
            }

            if($role == 2 && $admin == 1){
                return redirect('barber');
            }

            if($admin == 2){
                return redirect('adminajadeh');
            }
        }
        return redirect('login');
    }

    public function logout()
    {
        Auth::logout();
        return redirect('index');
    }
}
