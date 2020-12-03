<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('pages.index');
    }


    public function listing()
    {
        return view('pages.listing');
    }


    public function listing_details()
    {
        return view('pages.listing_details');
    }

    
    public function contact_us()
    {
        return view('pages.contact_us');
    }


    public function our_team()
    {
        return view('pages.our_team');
    }


    public function agric_consult()
    {
        return view('pages.agric_consult');
    }
    

    public function build_u()
    {
        return view('pages.build_u');
    }
    
    public function sale_rent_property()
    {
        return view('pages.sale_rent_property');
    }


    public function sale_rent_land()
    {
        return view('pages.sale_rent_land');
    }


    public function pay_rent()
    {
        return view('pages.pay_rent');
    }
     


    public function save_build()
    {
        return view('pages.save_build');
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
