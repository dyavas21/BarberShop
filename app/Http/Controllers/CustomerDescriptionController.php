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


     
     public function customerprofileinti()
    {
        $id1 = Auth::user()->id;
        $data = User::find($id1);
        $data2 = Customer::find($id1);
        return view('customer.profile-inti', compact('data', 'data2'));
    }

    public function customerprofileintiview(Request $request)
    {   
        $id1 = Auth::user()->id;
        $data = User::find($id1);
        $data2 = CustomerDescription::find($id1);
        return view('customer.profile-inti-view', compact('data', 'data2'));
    }


    public function customerprofileintiinsert(Request $request)
    {   
        $datafinal = CustomerDescription::create([
            'customer_id' => $request->customer_id,
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
        $id = Auth::user()->id;
        $datauser = User::find($id);
        $databarber = Customer::find($id);
        $datadesc = CustomerDescription::find($id);

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
