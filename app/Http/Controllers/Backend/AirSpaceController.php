<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Backend\Customs\CheckAccess;
use App\Models\AirSpace;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AirSpaceController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function __construct()
    {
        $this->middleware('auth',['except'=>['store']]);
    } 


    public function index()
    {
        //
          //  //list all land sale and rent request
          if(CheckAccess::check(61)){
            $LandSales = AirSpace::where('status','!=',0)->paginate(150);
             $type= "All";
            return view('backend.air_space.index',['LandSales'=>$LandSales, 'type'=>$type]);
 
        }else{
            return redirect(route('admin.dashboard'))->with('error','Unauthorized Page. Access Denied!!!');
        }
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
      // //list all pending Air space request
      if(CheckAccess::check(62)){
        $LandSales = AirSpace::where('status',2)->paginate(150);
        $type= "Pending";
        return view('backend.air_space.index',['LandSales'=>$LandSales, 'type'=>$type]);

    }else{
        return redirect(route('admin.dashboard'))->with('error','Unauthorized Page. Access Denied!!!');
    }
}
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
             //store airpsace codes

    $data =    $this->validate($request, [
        'fname'=>'',
        'mname'=>'',
        'lname'=>'',
       'email'=>'',
       'dob'=>'',
       'gender'=>'',
       'kindred'=>'',
       'village'=>'',
       'town'=>'',
       'country'=>'',
       'state'=>'',
       'state1'=>'',
       'lga'=>'',
       'lga1'=>'',
       'office_address'=>'',
       'phone1'=>'', 
       'phone2'=>'',
       'land_acquired_by'=>'',
       'land_acquired_by_2'=>'',
       'land_surveyed'=>'',
       'land_location'=>'',
       'plan_number'=>'',
       'beacon_number'=>'',
       'surveyor'=>'',
       'surveyor_address'=>'',
       'no_of_plots'=>'',
       'size_in_sq_meters'=>'',
       'land_Shape'=>'',
       'land_doc_avaliable'=>'',
       'property_mode'=>'',
       'sell_price'=>'',
       'rent_price'=>'',
       'landmark'=>'',
       'id_card'=>'',
       'id_card_no'=>'',
       'id_card_issued_date'=>'',
       'id_card_exp_date'=>'',
       'passport'=>'image|required|max:1999',
       'cover_image'=>'image|required|max:1999',
       'image1'=>'image|required|max:1999',
       'image2'=>'image|required|max:1999',
       'image3'=>'image|required|max:1999',
       'image4'=>'image|required|max:1999',
       'image5'=>'image|required|max:1999',
       'image6'=>'image|required|max:1999',
       
]);

         
           $extension = $request->file('passport')->getClientOriginalExtension();
           $fileNameToStorea = time().'a.'.$extension;
           $pathp = $request->file('passport')->storeAs('public/land_space', $fileNameToStorea);


           $extension = $request->file('cover_image')->getClientOriginalExtension();
           $fileNameToStore = time().'.'.$extension;
           $path = $request->file('cover_image')->storeAs('public/land_space', $fileNameToStore);

            $extension1 = $request->file('image1')->getClientOriginalExtension();
           $fileNameToStore1 = time().'1.'.$extension1;
           $path1 = $request->file('image1')->storeAs('public/land_space', $fileNameToStore1);


           $extension2 = $request->file('image2')->getClientOriginalExtension();
           $fileNameToStore2 = time().'2.'.$extension2;
           $path2 = $request->file('image2')->storeAs('public/land_space', $fileNameToStore2);

           $extension3 = $request->file('image3')->getClientOriginalExtension();
           $fileNameToStore3 = time().'3.'.$extension3;
           $path3 = $request->file('image3')->storeAs('public/land_space', $fileNameToStore3);

           $extension4 = $request->file('image4')->getClientOriginalExtension();
           $fileNameToStore4 = time().'4.'.$extension4;
           $path4 = $request->file('image4')->storeAs('public/land_space', $fileNameToStore4);

           $extension5 = $request->file('image5')->getClientOriginalExtension();
           $fileNameToStore5 = time().'5.'.$extension5;
           $path5 = $request->file('image5')->storeAs('public/land_space', $fileNameToStore5);


           $extension6 = $request->file('image6')->getClientOriginalExtension();
           $fileNameToStore6 = time().'6.'.$extension6;
           $path6 = $request->file('image6')->storeAs('public/land_space', $fileNameToStore6);


           AirSpace::create( array_merge(
       $data,
        ['passport'=>$fileNameToStorea],
        ['cover_image'=>$fileNameToStore],
       ['image1'=>$fileNameToStore1],
       ['image2'=>$fileNameToStore2],
       ['image3'=>$fileNameToStore3],
       ['image4'=>$fileNameToStore4],
       ['image5'=>$fileNameToStore5],
       ['image6'=>$fileNameToStore6],    
       ['status'=>2]   
   ));
   return redirect()->back()->with('success','Submitted Successfully!, We will contact you as soon as possible');
}


    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        // // //View Details of Air Space request
         $LandSales = AirSpace::find($id);
         return view('backend.air_space.show',['LandSales'=>$LandSales]);
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
         ///set land sale request as solved
         $LandSale = AirSpace::find($id);
         $LandSale->status =1;
         $LandSale->save(); 
         return redirect()->back()->with('success','Solved Successfully!');
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
