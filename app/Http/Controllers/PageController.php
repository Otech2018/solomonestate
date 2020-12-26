<?php

namespace App\Http\Controllers;

use App\Models\GigSubCategory;
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
         $properties = GigSubCategory::where('status','=','1')->where('featured','=','1')->get();
        return view('pages.index',['properties'=>$properties]);
        
    }


    public function listing()
    {
        $properties = GigSubCategory::where('status','=','1')->paginate(20);
        return view('pages.listing',['properties'=>$properties]);
    }
 

    public function listing_details($id)
    {
        $properties = GigSubCategory::where('status','=','1')->where('featured','=','1')->get();
         $property = GigSubCategory::find($id);
        return view('pages.listing_details',['property'=>$property,'properties'=>$properties]);
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
    
    public function gallery()
    {
        return view('pages.gallery');
    }
    


    public function project()
    {
        return view('pages.project');
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
