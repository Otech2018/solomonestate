<?php

namespace App\Http\Controllers;

use App\Models\AutoSaving;
use App\Models\Payments;
use Illuminate\Http\Request;

class MysavingsController extends Controller
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
        // //List of all automobile savings
         $mysavings = AutoSaving::where('user_id',auth()->user()->id)->orderBy('id', 'desc') ->get();
            return view('mysavings.index',['mysavings'=>$mysavings]);
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




      public function mysaving_payments(Request $request)
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


                Payments::create( array_merge(
                    $data    
                   
                ));
                return redirect()->route('mysavings.index')->with('success','Payment was Successfully!');
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


      public function payment_transaction(Request $request, $id)
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
