<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Admin;
use App\Models\Order;
use App\Models\Barber;
use App\Models\Invoice;
use App\Models\Product;
use App\Models\Customer;
use App\Models\Pemesanan;
use App\Models\TipeProduk;
use Illuminate\Http\Request;
use App\Models\BarberDescription;
use App\Models\CustomerDescription;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class ApiCrudController extends Controller
{
    //get customer yang lagi login, pake token
    public function getCustomer()
    {
        if (Auth()->user()->role_id == 1) {
            $id = Auth::user()->id_user;
            $dataCustomerDesc = CustomerDescription::where('customer_desc_id', $id)->first();
            $dataUser = User::where('id_user', $id)->first();
            $dataCustomer = Customer::where('customer_id', $id)->first();
            $dataPemesanan = Pemesanan::where('pemesanan_id_cust', $id)->get();

            return response()->json([
                'status' => 'success',
                'message' => 'get customer success',
                'data_customer' => [
                    'email' => $dataUser->email,
                    'fname' => $dataCustomer->fname,
                    'lname' => $dataCustomer->lname,
                    'address' => $dataCustomerDesc->address,
                    'age' => $dataCustomerDesc->age,
                    'gender' => $dataCustomerDesc->gender,
                    'phone' => $dataCustomerDesc->phone,
                    'photo' => $dataCustomerDesc->photo
                ],
                'data_pemesanan' => $dataPemesanan
            ]);
        }
    }

    //insert profile detail
    public function customerInsertDesc(Request $request)
    {
        if(Auth::user())
        {
            $id = Auth::user()->id_user;
            $datafinal = CustomerDescription::create([
                'customer_desc_id' => $id,
                'address' => $request->address,
                'age' => $request->age,
                'gender' => $request->gender,
                'phone' => $request->phone,
                'photo' => $request->photo,
            ]);
    
            if ($request->hasFile('photo')) {
                $request->file('photo')->move('photo/',
                    $request->file('photo')->getClientOriginalName()
                );
                $datafinal->photo = $request->file('photo')->getClientOriginalName();
                $datafinal->save();
            }
    
            return response()->json([
                'status' => 'success',
                'message' => 'insert profile details success',
                'data' => [
                    'id_user' => $id,
                    'address' => $datafinal->address,
                    'age' => $datafinal->age,
                    'gender' => $datafinal->gender,
                    'phone' => $datafinal->phone,
                    'photo' => $datafinal->photo
                ]
            ]);
        }
        else
        {
            return response()->json([
                'status' => 'failed',
                'message' => 'Unauthorized'
            ]);
        }
    }

    //update profile detail
    public function customerUpdateDesc(Request $request)
    {
        $id = Auth::user()->id_user;
        $datauser = User::where('id_user', '=', $id)->first();
        $databarber = Customer::where('customer_id', '=', $id)->first();
        $datadesc = CustomerDescription::where('customer_desc_id', '=', $id)->first();

        $datauser->update([
            'fname' => $request->fname,
            'lname' => $request->lname,
        ]);

        $databarber->update([
            'fname' => $request->fname,
            'lname' => $request->lname,
        ]);

        if ($request->hasFile('photo')) {
            $request->file('photo')->move('photo/',
                $request->file('photo')->getClientOriginalName()
            );

            $datadesc->update([
                'address' => $request->address,
                'age' => $request->age,
                'gender' => $request->gender,
                'phone' => $request->phone,
                'photo' => $request->photo,
            ]);

            $datadesc->photo = $request->file('photo')->getClientOriginalName();
            $datadesc->save();
        } else {
            $datadesc->update([
                'address' => $request->address,
                'age' => $request->age,
                'gender' => $request->gender,
                'phone' => $request->phone,
            ]);

            $datadesc->save();
        }

        return response()->json([
            'status' => 'success',
            'message' => 'insert profile details success',
            'data' => [
                'id_user' => $id,
                'address' => $datadesc->address,
                'age' => $datadesc->age,
                'gender' => $datadesc->gender,
                'phone' => $datadesc->phone,
                'photo' => $datadesc->photo
            ]
        ]);
    }

    //show customer product
    public function showCustomerProduct()
    {
        if (Auth()->user()->role_id == 1) {
            $id = Auth::user()->id_user;
            // $dataCustomerDesc = CustomerDescription::where('customer_desc_id', '=', $id)->first();
            // $dataUser = User::where('id_user', '=', $id)->first();
            // $dataCustomer = Customer::where('customer_id', '=', $id)->get();
            // $dataPemesanan = Pemesanan::where('pemesanan_id_cust', '=', $id)->get();
            // $invoice = Invoice::where('customer_id', '=', $id)->get();
            $orders = Order::where('order_id_cust', '=', $id)->get();

            return response()->json([
                'status' => 'success',
                'message' => 'get list customer products success',
                'data' => [
                    $orders,

                ]
            ]);
            return view('customer.product', compact('dataCustomerDesc', 'dataUser', 'dataCustomer', 'dataPemesanan', 'invoice', 'orders', 'title'));
        }

        return response()->json([
            'message' => 'Unauthorized'
        ]);
    }



    //get barber pake token, description harus udah di isi dulu
    public function getBarber()
    {
        if (Auth()->user()->role_id == 2) {
            $id = Auth::user()->id_user;
            $dataBarberDesc = BarberDescription::where('barber_desc_id', '=', $id)->first();
            $dataUser = User::where('id_user', '=', $id)->first();
            $dataBarber = Barber::where('barber_id', '=', $id)->first();
            $dataPemesanan = Pemesanan::where('pemesanan_id_barber', '=', $id)->get();
            
            return response()->json([
                'status' => 'success',
                'message' => 'get barber success',
                'data_barber' => [
                    'email' => $dataUser->email,
                    'fname' => $dataBarber->fname,
                    'lname' => $dataBarber->lname,
                    'address' => $dataBarberDesc->address,
                    'age' => $dataBarberDesc->age,
                    'gender' => $dataBarberDesc->gender,
                    'harga' => $dataBarberDesc->harga,
                    'phone' => $dataBarberDesc->phone,
                    'description' => $dataBarberDesc->description,
                    'photo' => $dataBarberDesc->gambarbarber,
                    'certificate' => $dataBarberDesc->certificate
                ],
                'data_pesanan' => $dataPemesanan
            ]);
        }
    }

    //change status
    public function barberBookStatusProceed($id)
    {
        $status_id = 2;
        Pemesanan::where('id_pemesanan', $id)->update([
            'status_id' => $status_id
        ]);
        return response()->json([
            'status' => 'success',
            'message' => 'change status to proceed success'
        ]);
    }

    public function barberBookStatusRejected($id)
    {
        $status_id = 3;
        Pemesanan::where('id_pemesanan', $id)->update([
            'status_id' => $status_id
        ]);
        return response()->json([
            'status' => 'success',
            'message' => 'change status to rejected success'
        ]);
    }

    public function barberBookStatusPending($id)
    {
        $status_id = 1;
        Pemesanan::where('id_pemesanan', $id)->update([
            'status_id' => $status_id
        ]);
        return response()->json([
            'status' => 'success',
            'message' => 'change status to pending success'
        ]);
    }

    //barber insert description
    public function barberInsertDesc(Request $request)
    {
        if(Auth()->user()->role_id == 2)
        {
            $id = Auth::user()->id_user;
            $datafinal = BarberDescription::create([
                'barber_desc_id' => $id,
                'address' => $request->address,
                'age' => $request->age,
                'gender' => $request->gender,
                'phone' => $request->phone,
                'description' => $request->description,
                'certificate' => $request->certificate,
                'gambarbarber' => $request->gambarbarber,
                'harga' => $request->harga,
            ]);

            if ($request->hasFile('gambarbarber', 'certificate')) {
                $request->file('gambarbarber')->move('gambarbarber/', $request->file('gambarbarber')->getClientOriginalName());
                $request->file('certificate')->move('certificate/', $request->file('certificate')->getClientOriginalName());
                $datafinal->gambarbarber = $request->file('gambarbarber')->getClientOriginalName();
                $datafinal->certificate = $request->file('certificate')->getClientOriginalName();
                $datafinal->save();
            }

            return response()->json([
                'status' => 'success',
                'message' => 'insert profile details success',
                'data' => [
                    'id_barber' => $id,
                    'address' => $datafinal->address,
                    'age' => $datafinal->age,
                    'gender' => $datafinal->gender,
                    'phone' => $datafinal->phone,
                    'description' => $datafinal->description,
                    'certificate' => $datafinal->certificate,
                    'gambarbarber' => $datafinal->gambarbarber,
                    'harga' => $datafinal->harga
                ]
            ]);
        }
    }

    //barber update desc
    public function barberUpdateDesc(Request $request)
    {
        if(Auth()->user()->role_id == 2)
        {
            $id = Auth::user()->id_user;
            $dataUser = User::where('id_user', '=', $id)->first();
            $dataBarber = Barber::where('barber_id', '=', $id)->first();
            $dataBarberDesc = BarberDescription::where('barber_desc_id', '=', $id)->first();

            $dataUser->update([
                'fname' => $request->fname,
                'lname' => $request->lname,
            ]);

            $dataBarber->update([
                'fname' => $request->fname,
                'lname' => $request->lname,
            ]);

            if ($request->hasFile('gambarbarber')) {
                $request->file('gambarbarber')->move('gambarbarber/', $request->file('gambarbarber')->getClientOriginalName());
                $dataBarberDesc->update([
                    'address' => $request->address,
                    'age' => $request->age,
                    'gender' => $request->gender,
                    'phone' => $request->phone,
                    'description' => $request->description,
                    'gambarbarber' => $request->gambarbarber,
                    'harga' => $request->harga,
                ]);
                $dataBarberDesc->gambarbarber = $request->file('gambarbarber')->getClientOriginalName();
                $dataBarberDesc->save();
            } else if ($request->hasFile('certificate')) {
                $request->file('certificate')->move('certificate/', $request->file('certificate')->getClientOriginalName());
                $dataBarberDesc->update([
                    'address' => $request->address,
                    'age' => $request->age,
                    'gender' => $request->gender,
                    'phone' => $request->phone,
                    'description' => $request->description,
                    'certificate' => $request->certificate,
                    'harga' => $request->harga,
                ]);
                $dataBarberDesc->certificate = $request->file('certificate')->getClientOriginalName();
                $dataBarberDesc->save();
            } else {
                $dataBarberDesc->update([
                    'address' => $request->address,
                    'age' => $request->age,
                    'gender' => $request->gender,
                    'phone' => $request->phone,
                    'description' => $request->description,
                    'harga' => $request->harga,
                ]);
                $dataBarberDesc->save();
            }

            return response()->json([
                'status' => 'success',
                'message' => 'insert profile details success',
                'data' => [
                    'id_barber' => $id,
                    'address' => $dataBarberDesc->address,
                    'age' => $dataBarberDesc->age,
                    'gender' => $dataBarberDesc->gender,
                    'phone' => $dataBarberDesc->phone,
                    'description' => $dataBarberDesc->description,
                    'certificate' => $dataBarberDesc->certificate,
                    'gambarbarber' => $dataBarberDesc->gambarbarber,
                    'harga' => $dataBarberDesc->harga
                ]
            ]);
        }
    }




    //get product when logged as customer or barber
    public function showProduct()
    {
        if (Auth()->user()->role_id == 1) {
            $id2 = Auth::user()->id_user;
            $product = Product::get();

            return response()->json([
                'status' => 'success',
                'message' => 'products',
                'data' => $product
            ]);
        }

        return response()->json([
            'message' => 'Unauthorized'
        ]);
    }




    //admin liat all user sih, klo mau tambah bisa
    public function dashboardAdmin()
    {
        $dataUser = User::all();
        //kalo butuh tinggal panggil
        // $dataBarber = Barber::all();
        // $dataCustomer = Customer::all();
        // $dataBarberDesc = BarberDescription::all();
        // $dataCustomerDesc = CustomerDescription::all();
        // $dataProduk = Product::all();
        // $dataOrder = Order::all();

        return response()->json([
            'status' => 'success',
            'message' => 'get admin dashboard success',
            'data_user' => $dataUser
        ]);
    }

    //admin delete user (urlnya salah itu co typo jadi detele)
    public function adminDelete($id)
    {
        $datadataUser = User::find($id);
        $datadataUser->delete();
        
        return response()->json([
            'status' => 'success',
            'message' => 'delete user success'
        ]);
    }

    //admin show product yang ada di order
    public function soldProduct()
    {
        $orders = Order::with('products')->get();
        return response()->json([
            'status' => 'success',
            'message' => 'get admin dashboard success',
            'data_order' => $orders
        ]);
    }

    //admin change status order product
    public function orderStatusProceed($id)
    {
        $status_id = 2;
        Order::where('id', $id)->update([
            'status_id' => $status_id
        ]);

        return response()->json([
            'status' => 'success',
            'message' => 'change status to proceed success',
        ]);
    }

    public function orderStatusRejected($id)
    {
        $status_id = 3;
        Order::where('id', $id)->update([
            'status_id' => $status_id
        ]);

        return response()->json([
            'status' => 'success',
            'message' => 'change status to rejected success',
        ]);
    }

    public function orderStatusPending($id)
    {
        $status_id = 1;
        Order::where('id', $id)->update([
            'status_id' => $status_id
        ]);

        return response()->json([
            'status' => 'success',
            'message' => 'change status to pending success',
        ]);
    }

    //admin show list type
    public function listProductType()
    {
        $data = TipeProduk::get();

        return response()->json([
            'status' => 'success',
            'message' => 'success get all product type',
            'data_type' => $data
        ]);
    }

    //admin add product type
    public function adminAddType(Request $request)
    {
        $data = TipeProduk::create($request->all());

        return response()->json([
            'status' => 'success',
            'message' => 'success add product type',
            'data_type' => $data
        ]);
    }

    //admin delete product type
    public function adminDeleteType($id)
    {
        $data = TipeProduk::find($id);
        $data->delete();

        return response()->json([
            'status' => 'success',
            'message' => 'success delete product type',
            'data_type' => $data
        ]);
    }

    //admin show all product
    public function listProduct()
    {
        $dataproduk = Product::all();

        return response()->json([
            'status' => 'success',
            'message' => 'success get all product',
            'data_product' => $dataproduk
        ]);
    }

    public function adminAddProduct(Request $request)
    {
        $data = Product::create([
            'tipe_id' => $request->tipe_id,
            'nama_produk' => $request->nama_produk,
            'harga' => $request->harga,
            'stok' => $request->stok,
            'gambar' => $request->gambar,
        ]);

        if ($request->hasFile('gambar')) {
            $request->file('gambar')->move('gambarproduk/', $request->file('gambar')->getClientOriginalName());
            $data->gambar = $request->file('gambar')->getClientOriginalName();
            $data->save();
        }

        return response()->json([
            'status' => 'success',
            'message' => 'success add product',
            'data_product' => $data
        ]);
    }

    public function adminDeleteProduct($id)
    {
        $data = Product::find($id);
        $data->delete();

        return response()->json([
            'status' => 'success',
            'message' => 'success delete product',
            'data_product' => $data
        ]);
    }
}
