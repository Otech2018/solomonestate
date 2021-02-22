<?php

namespace App\Http\Controllers;

use App\Models\Payment_r;
use App\Models\Rent;
use Illuminate\Http\Request;

class MyRentsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

        public function __construct()
    {
        $this->middleware('auth');
    }


    public function index()
    {
        // //List of all rents savings
         $myrents = Rent::where('user_id',auth()->user()->id)->where('status','!=', 0)->orderBy('id', 'desc') ->paginate(100);
            return view('myrents.index',['myrents'=>$myrents]);
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
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        // //user edit rents savings
         $myrent = Rent::find($id);
            return view('myrents.edit',['myrent'=>$myrent]);
    }



      public function myrent_payments(Request $request)
    {
        //Submmkited payments


             $data =    $this->validate($request, [
                'amount'=>'',
                'currency'=>'',
                'cus_name'=>'',
                'cus_email'=>'',
                'cus_phone_number'=>'',
                'flw_ref'=>'',
                'status'=>'',
                'tx_ref'=>'',
                'transaction_id'=>'',
            ]);


                Payment_r::create( array_merge(
                    $data
                   
                ));
                return redirect()->route('myrents.index')->with('success','Payment was Successfully!');
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {

        $this->validate($request, [
       'phone1'=> '',
       'phone2'=> '',
       'resident_address'=> '',
       'landmark'=> '',

       'landlord_name'=> '',
       'landlord_acc_name'=> '',
       'landlord_acc_num'=> '',
       'landlord_bank'=> '',
       'landlord_phone'=> '',
        ]);
        // /user edit rent savings
          $AutoSaving = Rent::find($id);
            $AutoSaving->phone1 =$request->input('phone1');
            $AutoSaving->phone2 =$request->input('phone2');
            $AutoSaving->resident_address =$request->input('resident_address');
            $AutoSaving->landmark =$request->input('landmark');
            $AutoSaving->landlord_name =$request->input('landlord_name');
            $AutoSaving->landlord_acc_name =$request->input('landlord_acc_name');
            $AutoSaving->landlord_acc_num =$request->input('landlord_acc_num');
            $AutoSaving->landlord_bank =$request->input('landlord_bank');
            $AutoSaving->landlord_phone =$request->input('landlord_phone');
            $AutoSaving->save(); 
            return redirect()->back()->with('success','Edited Successfully!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
