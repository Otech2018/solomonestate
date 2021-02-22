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
         $mysavings = AutoSaving::where('user_id',auth()->user()->id)->where('status','!=', 0)->orderBy('id', 'desc')->paginate(100);
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
        ////edit automobile savings
         $mysaving = AutoSaving::find($id);
            return view('mysavings.edit',['mysaving'=>$mysaving]);
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


             //        //store auto saving from users end
   $this->validate($request, [
             
            'phone1' => '',
            'phone2' => '',
            'acc_num' => '',
            'acc_name' => '',
            'acc_bank_name' => '',
            'next_of_kin_name' => '',
            'next_of_kin_reln' => '',
            'next_of_kin_phone' => '',
            'buy_for_u' => '',
        ]);
        //set auto saving as Paid
          $AutoSaving = AutoSaving::find($id);
            $AutoSaving->phone1 =  $request->input('phone1');
            $AutoSaving->phone2 =  $request->input('phone2');
            $AutoSaving->acc_num =  $request->input('acc_num');
            $AutoSaving->acc_name =  $request->input('acc_name');
            $AutoSaving->acc_bank_name =  $request->input('acc_bank_name');
            $AutoSaving->next_of_kin_name =  $request->input('next_of_kin_name');
            $AutoSaving->next_of_kin_reln =  $request->input('next_of_kin_reln');
            $AutoSaving->next_of_kin_phone =  $request->input('next_of_kin_phone');
            $AutoSaving->buy_for_u =  $request->input('buy_for_u');
            $AutoSaving->save(); 
            return redirect()->back()->with('success','My Savings Updated Successfully!');
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
