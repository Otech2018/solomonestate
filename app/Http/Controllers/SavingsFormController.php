<?php

namespace App\Http\Controllers;

use App\Models\Country;
use App\Models\Lga;
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
        
        return view('pages.auto_mobile_saving_form',['countries'=>$Countries,'states'=>$states,'lgas'=>$lgas]);
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
        
        return view('pages.lets_pay_ur_rent_form',['countries'=>$Countries,'states'=>$states,'lgas'=>$lgas]);
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
