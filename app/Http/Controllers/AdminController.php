<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Admin;
use App\Models\Order;
use App\Models\Barber;
use App\Models\Produk;
use App\Models\Product;
use App\Models\Customer;
use Illuminate\Http\Request;
use App\Models\BarberDescription;
use App\Models\CustomerDescription;

class AdminController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function adminlogin(){
        return view('admin-login');
    }

    public function adminloginproses(Request $request){
        if(Auth::attempt($request->only('username', 'password'))){
            return redirect('admin');
        }
        return redirect('adminlogin');
    }

    public function logoutadmin(){
        Auth::logout();
        return redirect('indexwithoutlogin');
    }

    public function admin()
    {
        $title = 'Admin';
        $dataUser = User::all();
        $dataBarber = Barber::all();
        $dataCustomer = Customer::all();
        $dataBarberDesc = BarberDescription::all();
        $dataCustomerDesc = CustomerDescription::all();
        $dataProduk = Product::all();
        $dataOrder = Order::all();
        return view('admin.admin',compact('dataUser', 'dataBarber', 'dataCustomer', 'dataBarberDesc', 'dataCustomerDesc', 'dataProduk', 'dataOrder', 'title'));
    }

    public function admindelete($id)
    {
        $datadataUser = User::find($id);
        $datadataUser->delete();
        return redirect()->route('admin')->with('success', 'Data Berhasil Dihapus');
    }

    public function produkterjual()
    {
        $title = 'Produk Terjual';
        $orders = Order::with('products')->get();
        return view('admin.produkterjual', compact('orders', 'title'));
    }

    public function adminstatusproceed($id)
    {   
        $dataPemesanan = Order::select('status_id')->where('id', $id)->first();
        $status_id = 2;
        Order::where('id', $id)->update([
            'status_id'=> $status_id
        ]);
        return redirect()->route('produkterjual')->with('success', 'Status Berhasil Diupdate');
    }

    public function adminstatusreject($id)
    {   
        $dataPemesanan = Order::select('status_id')->where('id', $id)->first();
        $status_id = 3;
        Order::where('id', $id)->update([
            'status_id'=> $status_id
        ]);
        return redirect()->route('produkterjual')->with('success', 'Status Berhasil Diupdate');
    }

    public function adminstatuspending($id)
    {   
        $dataPemesanan = Order::select('status_id')->where('id', $id)->first();
        $status_id = 1;
        Order::where('id', $id)->update([
            'status_id'=> $status_id
        ]);
        return redirect()->route('produkterjual')->with('success', 'Status Berhasil Diupdate');
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
     * @param  \App\Models\Admin  $admin
     * @return \Illuminate\Http\Response
     */
    public function show(Admin $admin)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Admin  $admin
     * @return \Illuminate\Http\Response
     */
    public function edit(Admin $admin)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Admin  $admin
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Admin $admin)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Admin  $admin
     * @return \Illuminate\Http\Response
     */
    public function destroy(Admin $admin)
    {
        //
    }
}
