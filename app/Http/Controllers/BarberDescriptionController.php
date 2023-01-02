<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Barber;
use App\Models\Pemesanan;
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

    
    public function barber()
    {   
        $id = Auth::user()->id_user;
        $dataBarberDesc = BarberDescription::where('barber_desc_id', '=', $id)->first();
        $dataUser = User::where('id_user', '=', $id)->first();
        $dataBarber = Barber::where('barber_id', '=', $id)->get();
        $dataPemesanan = Pemesanan::where('pemesanan_id_barber', '=', $id)->get();

        return view('barber.barber', compact('dataBarberDesc', 'dataUser', 'dataBarber', 'dataPemesanan'));
    }

    public function barberchangestatusproceed($id)
    {   
        $dataPemesanan = Pemesanan::select('status_id')->where('id_pemesanan', $id)->first();
        
        $status_id = 2;

        Pemesanan::where('id_pemesanan', $id)->update([
            'status_id'=> $status_id
        ]);
        return redirect()->route('barber');
    }

    public function barberchangestatusreject($id)
    {   
        $dataPemesanan = Pemesanan::select('status_id')->where('id_pemesanan', $id)->first();
        
        $status_id = 3;

        Pemesanan::where('id_pemesanan', $id)->update([
            'status_id'=> $status_id
        ]);
        return redirect()->route('barber');
    }

    public function barberchangestatuspending($id)
    {   
        $dataPemesanan = Pemesanan::select('status_id')->where('id_pemesanan', $id)->first();
        
        $status_id = 1;

        Pemesanan::where('id_pemesanan', $id)->update([
            'status_id'=> $status_id
        ]);
        return redirect()->route('barber');
    }

    public function barberprofile()
    {
        $id = Auth::user()->id_user;
        $dataBarberDesc = BarberDescription::where('barber_desc_id', '=', $id)->first();
        $dataBarber = Barber::where('barber_id', '=', $id)->first();
        $dataUser = User::where('id_user', '=', $id)->first();
      
        
        return view('barber.profile' ,compact('dataBarberDesc', 'dataBarber', 'dataUser'));
    }

    public function barberprofileinti()
    {
        $id = Auth::user()->id_user;
        $dataBarber = Barber::where('barber_id', '=', $id)->first();
        $dataUser = User::where('id_user', '=', $id)->first();
       
        // Barber::where(function ($data) {
        //     $data->where('barber_id', '=', $id);
        // });
        return view('barber.profile-inti', compact('dataBarber', 'dataUser'));
    }


    public function barberprofileintiview()
    {   
        // $id1 = Auth::user()->id;
        // $data = User::find($id1);
        // $data2 = BarberDescription::find($id1);
        
        $id = Auth::user()->id_user;
        $dataBarberDesc = BarberDescription::where('barber_desc_id', '=', $id)->first();
        $dataBarber = Barber::where('barber_id', '=', $id)->first();
        $dataUser = User::where('id_user', '=', $id)->first();
        // BarberDescription::where(function ($data) {
        //     $data->where('barber_desc_id', '=', $id);
        // });
        // $data2 = User::find($id);

        return view('barber.profile-inti-view', compact('dataBarberDesc', 'dataBarber', 'dataUser'));
    }


    public function barberprofileintiinsert(Request $request)
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

        // $datafinal = Description::create($request->all());
        if($request->hasFile('gambarbarber', 'certificate')){
            $request->file('gambarbarber')->move('gambarbarber/', $request->file('gambarbarber')->getClientOriginalName());
            $request->file('certificate')->move('certificate/', $request->file('certificate')->getClientOriginalName());
            $datafinal->gambarbarber = $request->file('gambarbarber')->getClientOriginalName();
            $datafinal->certificate = $request->file('certificate')->getClientOriginalName();
            $datafinal->save();
        }
        return redirect()->route('barber');
    }

    public function barberprofileintiedit(Request $request)
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

        $dataBarberDesc->update([
            'address' => $request->address,
            'age' => $request->age,
            'gender' => $request->gender,
            'phone' => $request->phone,
            'description' => $request->description,
            'certificate' => $request->certificate,
            'gambarbarber' => $request->gambarbarber,
            'harga' => $request->harga,
        ]);

        if($request->hasFile('gambarbarber', 'certificate')){
            $request->file('gambarbarber')->move('gambarbarber/', $request->file('gambarbarber')->getClientOriginalName());
            $request->file('certificate')->move('certificate/', $request->file('certificate')->getClientOriginalName());
            $dataBarberDesc->gambarbarber = $request->file('gambarbarber')->getClientOriginalName();
            $dataBarberDesc->certificate = $request->file('certificate')->getClientOriginalName();
            $dataBarberDesc->save();
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
