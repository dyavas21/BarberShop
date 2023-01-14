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
    public function adminlogin()
    {
        return view('admin-login');
    }

    public function adminloginproses(Request $request)
    {
        if(Auth::attempt($request->only('username', 'password')))
        {
            return redirect('admin');
        }
        return redirect('adminlogin');
    }

    public function logoutadmin()
    {
        Auth::logout();
        return redirect('indexwithoutlogin');
    }

    public function admin()
    {
        if(Auth()->user()->role_user == 2) 
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
        return view('error.403');
    }

    public function admindelete($id)
    {
        $datadataUser = User::find($id);
        $datadataUser->delete();
        return redirect()->route('admin')->with('success', 'Data Berhasil Dihapus');
    }

    public function produkterjual()
    {
        if(Auth()->user()->role_user == 2) 
        {
            $title = 'Produk Terjual';
            $orders = Order::with('products')->get();
            return view('admin.produkterjual', compact('orders', 'title'));
        }
        return view('error.403');
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
}
