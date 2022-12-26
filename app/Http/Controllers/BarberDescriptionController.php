<?php

namespace App\Http\Controllers;

use App\Models\Barber;
use Illuminate\Http\Request;
use App\Models\BarberDescription;
use Illuminate\Support\Facades\Auth;

class BarberDescriptionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */



      public function barberprofileinti()
    {
        $id1 = Auth::user()->id;
        $data = Barber::find($id1);
        return view('barber.profile-inti', compact('data'));
    }

    public function barberprofileintiview(Request $request)
    {   
        $id1 = Auth::user()->id;
        $datainti = BarberDescription::find($id1);
        return view('barber.profile-inti-view', compact('datainti'));
    }


    public function barberprofileintiinsert(Request $request)
    {   

        $datafinal = BarberDescription::create([
            'barber_id' => $request->barber_id,
            'address' => $request->address,
            'age' => $request->age,
            'gender' => $request->gender,
            'phone' => $request->phone,
            'description' => $request->description,
            'certificate' => $request->certificate,
            'gambarbarber' => $request->gambarbarber,
            'harga' => $request->harga,
        ]);
        // $datafinal = Description::create($request->all());
        if($request->hasFile('gambarbarber', 'certificate')){
            $request->file('gambarbarber')->move('barber1/', $request->file('gambarbarber')->getClientOriginalName());
            $request->file('certificate')->move('barber2/', $request->file('certificate')->getClientOriginalName());
            $datafinal->gambarbarber = $request->file('gambarbarber')->getClientOriginalName();
            $datafinal->certificate = $request->file('certificate')->getClientOriginalName();
            $datafinal->save();
        }
        return redirect()->route('barber');
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
     * @param  \App\Models\BarberDescription  $barberDescription
     * @return \Illuminate\Http\Response
     */
    public function show(BarberDescription $barberDescription)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\BarberDescription  $barberDescription
     * @return \Illuminate\Http\Response
     */
    public function edit(BarberDescription $barberDescription)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\BarberDescription  $barberDescription
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, BarberDescription $barberDescription)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\BarberDescription  $barberDescription
     * @return \Illuminate\Http\Response
     */
    public function destroy(BarberDescription $barberDescription)
    {
        //
    }
}
