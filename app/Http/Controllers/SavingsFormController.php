<?php

namespace App\Http\Controllers;

use App\Models\AutoSaving;
use App\Models\Country;
use App\Models\Lga;
use App\Models\Rent;
use App\Models\State;
use Illuminate\Http\Request;

class SavingsFormController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */


    public function __construct()
    {
       // $this->middleware('auth',['except'=>['edit']]);
        $this->middleware('auth');
    }
    public function index()
    {
        // lets save your house rent form
        $Countries = Country::all();
        $states = State::all();
        $lgas = Lga::all();
         $mysavings = AutoSaving::where('user_id',auth()->user()->id)->get();
         $mysaving1 = AutoSaving::where('user_id',auth()->user()->id)->orderBy('id', 'DESC')->first();
        return view('pages.auto_mobile_saving_form',['mysaving1'=>$mysaving1,'mysavings'=>$mysavings,'countries'=>$Countries,'states'=>$states,'lgas'=>$lgas]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //  // auto mobile saving form
        $Countries = Country::all();
        $states = State::all();
        $lgas = Lga::all();
        $pay_rent = Rent::where('user_id',auth()->user()->id)->get();
        $pay_rent1 = Rent::where('user_id',auth()->user()->id)->orderBy('id', 'DESC')->first();
        return view('pages.lets_pay_ur_rent_form',['pay_rent1'=>$pay_rent1,'pay_rent'=>$pay_rent,'countries'=>$Countries,'states'=>$states,'lgas'=>$lgas]);
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
          $AutoSaving = AutoSaving::find($id);
            return view('pages.lets_pay_ur_rent_form',['mysaving1'=>$mysaving1]);
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
