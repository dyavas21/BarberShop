<?php

namespace App\Http\Controllers;

use App\Models\Home;
use App\Models\User;
use App\Models\Barber;
use App\Models\Produk;
use App\Models\Customer;
use App\Models\Pemesanan;
use Illuminate\Http\Request;
use App\Models\BarberDescription;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = Barber::all();
        $data2 = BarberDescription::all();
        $data3 = Produk::all();
        return view('index', compact('data', 'data2', 'data3'));
    }

    public function barberdetail($id){
        $dataBarber = Barber::where('barber_id', '=', $id)->first();
        return view('barber-detail', compact('dataBarber'));
    }

    public function barberbook($id){
        $dataBarber = Barber::find($id);

        $id2 = Auth::user()->id_user;
        $dataCustomer = Customer::where('customer_id', '=', $id2)->first();
        $dataUser = User::where('id_user', '=', $id2)->first();
        return view('barber-book', compact('dataCustomer', 'dataBarber', 'dataUser'));
    }

    public function admindelete($id){
        $data = User::find($id);
        $data->delete();
        return redirect()->route('admin');
    }


    public function barberbookinsert(Request $request)
    {   

        $id = Auth::user()->id_user;

        $datafinal = Pemesanan::create([
            'pemesanan_id_cust' => $request->pemesanan_id_cust,
            'pemesanan_id_barber' => $request->pemesanan_id_barber,
            'fname' => $request->fname,
            'lname' => $request->lname,
            'email' => $request->email,
            'address' => $request->address,
            'phone' => $request->phone,
            'invoice' => $request->invoice,
        ]);

        // $datafinal = Description::create($request->all());
        if($request->hasFile('photo')){
            $request->file('photo')->move('photo/', $request->file('photo')->getClientOriginalName());
            $datafinal->photo = $request->file('photo')->getClientOriginalName();
            $datafinal->save();
        }
        return redirect()->route('customer');
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
     * @param  \App\Models\Home  $home
     * @return \Illuminate\Http\Response
     */
    public function show(Home $home)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Home  $home
     * @return \Illuminate\Http\Response
     */
    public function edit(Home $home)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Home  $home
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Home $home)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Home  $home
     * @return \Illuminate\Http\Response
     */
    public function destroy(Home $home)
    {
        //
    }
}
