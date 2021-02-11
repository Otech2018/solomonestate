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
         $myrents = Rent::where('user_id',auth()->user()->id)->get();
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
        //
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
        //
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
