<?php

namespace App\Http\Controllers;

use App\Models\Home;
use App\Models\User;
use App\Models\Order;
use App\Models\Barber;
use App\Models\Produk;
use App\Models\Invoice;
use App\Models\Product;
use App\Models\Customer;
use App\Models\Pemesanan;
use Illuminate\Http\Request;
use App\Models\BarberDescription;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    public function about()
    {
        $title = 'About';
        return view('sub-content.about', compact('title'));
    }


    public function contact()
    {
        $title = 'Contact';
        return view('sub-content.contact', compact('title'));
    }

    public function index()
    {
        $title = 'Home';
        $dataBarber= Barber::paginate(4, ['*'], 'dataBarber');
        $dataBarberDesc = BarberDescription::all();
        $dataProduk = Product::paginate(4, ['*'], 'dataProduk');
        return view('index', compact('dataBarber', 'dataBarberDesc', 'dataProduk', 'title'));
    }

    public function barberdetail($id)
    {
        if(Auth()->user()->role_id == 1)
        {
            $title = 'Barber Detail';
            $id2 = Auth::user()->id_user;
            $dataBarber = Barber::where('barber_id', '=', $id)->first();
            $dataUser = User::find($id2);
            return view('barber-detail', compact('dataBarber', 'dataUser', 'title'));
        }
        return view('error.403');
    }

    public function barberbook($id)
    {
        if(Auth()->user()->role_id == 1)
        {
            $title = 'Barber Book';
            $dataBarber = Barber::where('barber_id', '=', $id)->first();
            $id2 = Auth::user()->id_user;
            $dataCustomer = Customer::where('customer_id', '=', $id2)->first();
            $dataUser = User::where('id_user', '=', $id2)->first();
            return view('barber-book', compact('dataCustomer', 'dataBarber', 'dataUser', 'title'));   
        }
        return view('error.403');
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
            'date_order' => $request->date_order,
            'time_order' => $request->time_order,
            'address' => $request->address,
            'phone' => $request->phone,
            'invoice' => $request->invoice,
        ]);

        // $datafinal = Description::create($request->all());
        if($request->hasFile('invoice'))
        {
            $request->file('invoice')->move('invoice/', $request->file('invoice')->getClientOriginalName());
            $datafinal->invoice = $request->file('invoice')->getClientOriginalName();
            $datafinal->save();
        }
        return redirect()->route('customer')->with('success', 'Barber Berhasil Dibook');
    }

    public function product()
    {
        if(Auth()->user()->role_id == 1)
        {
            $title = 'Product';
            $id2 = Auth::user()->id_user;
            $dataUser = User::find($id2);
            $product = Product::all();
            return view('sub-content.product', compact('product', 'dataUser', 'title')); 
        }
        return view('error.403');
    }

    public function productcart()
    {
        if(Auth()->user()->role_id == 1)
        {
            $title = 'Product Cart';
            $id2 = Auth::user()->id_user;
            $dataUser = User::find($id2);
            $dataCustomer = Customer::where('customer_id', '=', $id2)->first();
            $products = Product::all();
            return view('sub-content.product-cart', compact('products', 'dataUser', 'dataCustomer', 'title'));            
        }
        return view('error.403');
    }

    public function productcartpost(Request $request)
    {

        $produk = Product::all();
        // $stok = $produk->quantity;

        $order = Order::create([
            'order_id_cust' => $request->order_id_cust,
            'fname' => $request->fname,
            'lname' => $request->lname,
            'email' => $request->email,
        ]);

        $products = $request->input('products', []);
        $quantities = $request->input('quantities', []);
        for ($product=0; $product < count($products); $product++)
        {
            if ($products[$product] != '')
            {
                $order->products()->attach($products[$product], ['quantity' => $quantities[$product]]);
            }
        }
        return redirect()->route('productcarttotal')->with('success', 'Silahkan Lanjutkan Pembayaran');
    }

    public function productcarttotal()
    {
        if(Auth()->user()->role_id == 1)
        {
            $title = 'Product Cart Total';
            $id2 = Auth::user()->id_user;
            $dataUser = User::find($id2);
            $dataCustomer = Customer::where('customer_id', '=', $id2)->first();
    
            $orders = Order::with('products')->where('order_id_cust', '=', $id2)->where('status_id', '!=', 2)->where('order_id_cust', '=', $id2)->where('status_id', '!=', 3)->get();
    
            $ordersnew = Order::with('products')->where('order_id_cust', '=', $id2)->where('status_id', '=', 1)->first();
    
            return view('sub-content.product-cart-total', compact('orders', 'dataUser', 'dataCustomer', 'ordersnew', 'title'));            
        }
        return view('error.403');
    }


    public function productcarttotalpost(Request $request)
    {
        $orderpost = Invoice::create([
            'customer_id' => $request->customer_id,
            'order_id' => $request->order_id,
            'invoice' => $request->invoice,
            'harga_total' => $request->harga_total,
        ]);

        if($request->hasFile('invoice'))
        {
            $request->file('invoice')->move('invoiceproduct/', $request->file('invoice')->getClientOriginalName());
            $orderpost->invoice = $request->file('invoice')->getClientOriginalName();
            $orderpost->save();
        }
        return redirect()->route('customer')->with('success', 'Product Berhasil Dibeli');
    }
}
