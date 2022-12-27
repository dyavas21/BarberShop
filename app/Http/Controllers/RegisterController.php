<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class RegisterController extends Controller
{
    public function register(){
        return view('register');
    }

    public function registeruser(Request $request){
        User::create([
            'role' => $request->role,
            'fname' => $request->fname,
            'lname' => $request->lname,
            'email' => $request->email,
            'password' => $request->password,
            // 'password' => bcrypt($request->passwword),
            'remember_token' => Str::random(60)
        ]);

        return redirect('/login');
    }
}
