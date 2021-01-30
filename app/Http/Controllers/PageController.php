<?php

namespace App\Http\Controllers;

use App\Models\Accessment;
use App\Models\Agric;
use App\Models\Gallery;
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
         $Accessments = Accessment::where('status','=','1')->get();
        return view('pages.index',['properties'=>$properties,'Accessments'=>$Accessments]);
        
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
         $Accessments = Accessment::where('status','=','1')->get();
        return view('pages.our_team',['Accessments'=>$Accessments]);

    }


    public function agric_consult()
    {
        return view('pages.agric_consult');
    }


// status =>2 pending, stautus=>1 settled  status=>0 delete
    public function agric_consult_submit(Request $request)
    {
         $data = $this->validate($request, [
                'name' => 'required|string|max:255',
                'email' => 'required',
                'phone' => 'required',
                'budget' => 'required',
                'site_location' => 'required',
                'why_u_need_us' => 'required',
        ]);


             $agric = Agric::create(array_merge(
                        $data,
                        ['status' => 2]
                    ));
                    return redirect()->back()->with('success','Form Submmited Successfully!! we will get back to you as soon as possible. Thank You!');
    }
    
    public function gallery()
    {
        $Galleries = Gallery::orwhere('image_type','=','1')
        ->orwhere('image_type','=','3')->where('status','=','1')->get();
        return view('pages.gallery',['Galleries'=>$Galleries]);
    }
    


    public function project()
    {
         $Projects = Gallery::where('status','=','1')->where('image_type','>=','2')->get();
        return view('pages.project',['Projects'=>$Projects]);
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
     

      public function tos()
    {
        return view('pages.tos');
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
