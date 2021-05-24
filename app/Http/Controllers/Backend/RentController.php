<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Backend\Customs\CheckAccess;
use App\Http\Controllers\Controller;
use App\Models\Rent;
use Illuminate\Http\Request;

class RentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    // status 1 => completed , 2 =>saving complete, 3=> saving not complete


    public function __construct()
    {
        $this->middleware('auth');
    } 
    public function index()
    {
        //// //  //list all rent  mobile savings
        if(CheckAccess::check(58)){
             $myrents = Rent::where('status','!=',0)->paginate(100);
             $title = "All";
            return view('backend.user_rent.index',['myrents'=>$myrents,'title'=>$title]);
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
        // //// //  //list paid paid savings
        if(CheckAccess::check(59)){
             $myrents = Rent::where('status',1)->paginate(100);
             $title = "Paid";
            return view('backend.user_rent.index',['myrents'=>$myrents,'title'=>$title]);
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
          //        //store auto saving from users end
  $data = $this->validate($request, [
             
           
         'fname'=> '',
        'mname'=> '',
        'lname'=> '',
       'email'=> '',
       'dob'=> '',
       'gender'=> '',
       'kindred'=> '',
       'village'=> '',
       'town'=> '',
       'country'=> '',
       'state'=> '',
       'state1'=> '',
       'lga'=> '',
       'lga1'=> '',
       'office_address'=> '',
       'phone1'=> '',
       'phone2'=> '',
       'resident_address'=> '',
       'landmark'=> '',

       'landlord_name'=> '',
       'landlord_acc_name'=> '',
       'landlord_acc_num'=> '',
       'landlord_bank'=> '',
       'landlord_phone'=> '',
            
       'start_date'=> '',
       'how_to_pay'=> '',
       'rent_amt'=> '',
       'rent_interval'=> '',
       'type'=>'required|max:1999',
        ]);

if($request->input('type') == 1){
    $extension = $request->file('passport')->getClientOriginalExtension();
    $fileNameToStorea = time().'a.'.$extension;
    $pathp = $request->file('passport')->storeAs('public/rent_images', $fileNameToStorea);
}else{
    $fileNameToStorea = $request->input('passport');
}


              $rent_interval_amt =   $request->input('rent_amt')  /  ( $request->input('rent_interval')  * 12 );
             $Rent = Rent::create(array_merge(
                        $data,
                        ['passport'=>$fileNameToStorea],
                        ['status' => 3],
                        ['rent_interval_amt' => $rent_interval_amt],
                        ['user_id' => auth()->user()->id]
                        
                    ));
                    return redirect()->back()->with('success','Submitted successfully!!,   <a href="'. route('myrents.index') . '" style="color:red"> <u> <b>Click here</b> </u> </a>  to start saving. Thank You!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        // //// //  //list not paid rent  mobile savings
        if(CheckAccess::check(60)){
             $myrents = Rent::where('status',3)->paginate(100);
             $title = "Not Paid";
            return view('backend.user_rent.index',['myrents'=>$myrents,'title'=>$title]);
        }else{
            return redirect(route('admin.dashboard'))->with('error','Unauthorized Page. Access Denied!!!');
        }
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
        ////set auto saving as Paid
          $AutoSaving = Rent::find($id);
            $AutoSaving->status =1;
            $AutoSaving->save(); 
            return redirect()->back()->with('success','Set As Saved Successfully!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //////delete rent from user
          $AutoSaving = Rent::find($id);
            $AutoSaving->status =0;
            $AutoSaving->save(); 
            return redirect()->back()->with('success','Rent Deleted Successfully!');
    }
}
