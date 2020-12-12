<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Country;
use App\Models\State;
use App\Models\Lga;




class UserFormController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function __construct()
    {
        $this->middleware('auth',['except'=>['edit']]);
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
        //Sale Rent Properties
        $Countries = Country::all();
        $states = State::all();
        $lgas = Lga::all();
        
        return view('pages.sale_rent_properties_form',['countries'=>$Countries,'states'=>$states,'lgas'=>$lgas]);
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
        //Sale  Land
        $Countries = Country::all();
        $states = State::all();
        $lgas = Lga::all();
        
        return view('pages.sale_rent_land_form',['countries'=>$Countries,'states'=>$states,'lgas'=>$lgas]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //build for you
        $Countries = Country::all();
        $states = State::all();
        $lgas = Lga::all();
        
        return view('pages.build_u_form',['countries'=>$Countries,'states'=>$states,'lgas'=>$lgas]);
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
