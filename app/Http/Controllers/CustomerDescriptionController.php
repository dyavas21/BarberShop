<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Barber;
use App\Models\Customer;
use Illuminate\Http\Request;
use App\Models\CustomerDescription;
use Illuminate\Support\Facades\Auth;

class CustomerDescriptionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    
    public function customer()
    {   $id = Auth::user()->id_user;
        $data = CustomerDescription::where('customer_desc_id', '=', $id)->first();


        // $data2 = Customer::find($id);
        // $data3 = $data2->customer_id;

        return view('customer.customer', compact('data'));
    }

    public function customerprofileinti()
    {
        $id = Auth::user()->id_user;
        $data = Customer::where('customer_id', '=', $id)->first();
        return view('customer.profile-inti', compact('data'));
    }
        
    public function customerprofile()
    {   $id = Auth::user()->id_user;
        $data = CustomerDescription::where('customer_desc_id', '=', $id)->first();
        return view('customer.profile', compact('data'));
    }

    public function customerprofileintiview(Request $request)
    {   
        $id = Auth::user()->id_user;
        $data2 = CustomerDescription::where('customer_desc_id', '=', $id)->first();
        $data = Customer::where('customer_id', '=', $id)->first();
        return view('customer.profile-inti-view', compact('data', 'data2'));
    }

    public function customerprofileintiinsert(Request $request)
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

        // $datafinal = Description::create($request->all());
        if($request->hasFile('photo')){
            $request->file('photo')->move('photo/', $request->file('photo')->getClientOriginalName());
            $datafinal->photo = $request->file('photo')->getClientOriginalName();
            $datafinal->save();
        }
        return redirect()->route('customer');
    }

    public function customerprofileintiedit(Request $request)
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

        $datadesc->update([
            'address' => $request->address,
            'age' => $request->age,
            'gender' => $request->gender,
            'phone' => $request->phone,
            'photo' => $request->photo,
        ]);

        if($request->hasFile('photo')){
            $request->file('photo')->move('photo/', $request->file('photo')->getClientOriginalName());
            $datadesc->photo = $request->file('photo')->getClientOriginalName();
            $datadesc->save();
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
     * @param  \App\Models\CustomerDescription  $customerDescription
     * @return \Illuminate\Http\Response
     */
    public function show(CustomerDescription $customerDescription)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\CustomerDescription  $customerDescription
     * @return \Illuminate\Http\Response
     */
    public function edit(CustomerDescription $customerDescription)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\CustomerDescription  $customerDescription
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, CustomerDescription $customerDescription)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\CustomerDescription  $customerDescription
     * @return \Illuminate\Http\Response
     */
    public function destroy(CustomerDescription $customerDescription)
    {
        //
    }
}
