<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Barber;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class BarberController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

     public function barber()
     {
         return view('barber.barber');
     }


    public function barberprofile()
    {
        $id1 = Auth::user()->id;
        $data = Barber::find($id1);
        
        return view('barber.barber-profile' ,compact('data'));
        // $fname = Auth::user()->fname;
        // return view('barber.barber-profile' ,compact('fname'));
    }

     public function barberprofiledetail()
     {

        $id1 = Auth::user()->id;
        $data = Barber::find($id1);

        return view('barber.barber-profile-detail' ,compact('data'));
        // return view('barber.barber-profile-detail', compact('data'));
        // $email = Auth::user()->email;
        // $fname = Auth::user()->fname;
        // $lname = Auth::user()->lname;
        // return view('barber.barber-profile-detail' ,compact('email', 'fname', 'lname'));
     }

    public function barberprofiledetailupdate(Request $request){
        
        $id1 = Auth::user()->id;
        $data = Barber::find($id1);

        $data->update($request->all());

        return redirect()->route('barberprofile');
    }

    public function barberinsertfoto(Request $request)
    {
        $data = Barber::create($request->all());
        if($request->hasFile('gambarbarber')){
            $request->file('gambarbarber')->move('gambarbarber/', $request->file('gambarbarber')->getClientOriginalName());
            $data->gambarbarber = $request->file('gambarbarber')->getClientOriginalName();
            $data->save();
        }
        return redirect()->route('barberprofile');

        //barberprofiledetailupdate
    }

    
    public function store(Request $request)
    {
        //  $file_name = $request->image->getClientOriginalName();
        //  $image = $request->image->storeAs('barberfoto', $file_name);

        //  Barber::create([
        //     'certificate' => $image
        //  ]);

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


    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Barber  $barber
     * @return \Illuminate\Http\Response
     */
    public function show(Barber $barber)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Barber  $barber
     * @return \Illuminate\Http\Response
     */
    public function edit(Barber $barber)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Barber  $barber
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Barber $barber)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Barber  $barber
     * @return \Illuminate\Http\Response
     */
    public function destroy(Barber $barber)
    {
        //
    }
}
