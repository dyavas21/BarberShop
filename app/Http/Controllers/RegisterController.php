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
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function register(){

        $datarole = Role::all();
        return view('register', compact('datarole'));
    }

    public function registeruser(Request $request){

        User::create([
            'id_role' => $request->id_role,
            'fname' => $request->fname,
            'lname' => $request->lname,
            'email' => $request->email,
            'password' => $request->password,
            // 'password' => bcrypt($request->passwword),
            'remember_token' => Str::random(60)
        ]);

        // if($request->id_role==1){
        //     Customer::create([
        //         'fname'=>$request->fname,
        //         'lname'=>$request->lname,
        //         'email'=>$request->email,
        //     ]);
        // }
        
        // if($request->id_role==2){
        //     Barber::create([
        //         'fname'=>$request->fname,
        //         'lname'=>$request->lname,
        //         'email'=>$request->email,
        //     ]);
        // }
        return redirect('/login');
    }



    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Register  $register
     * @return \Illuminate\Http\Response
     */
    public function show(Register $register)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Register  $register
     * @return \Illuminate\Http\Response
     */
    public function edit(Register $register)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Register  $register
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Register $register)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Register  $register
     * @return \Illuminate\Http\Response
     */
    public function destroy(Register $register)
    {
        //
    }
}
