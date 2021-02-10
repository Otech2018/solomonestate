<?php

namespace App\Http\Controllers\Backend;

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
        //
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
       'rent_amt'=> '',
       'rent_interval'=> '',


            'passport'=>'image|required|max:1999',
        ]);

$extension = $request->file('passport')->getClientOriginalExtension();
                        $fileNameToStorea = time().'a.'.$extension;
                        $pathp = $request->file('passport')->storeAs('public/rent_images', $fileNameToStorea);

              $rent_interval_amt =   $request->input('rent_amt')  /  $request->input('rent_interval');
             $Rent = Rent::create(array_merge(
                        $data,
                        ['passport'=>$fileNameToStorea],
                        ['status' => 3],
                        ['rent_interval_amt' => $rent_interval_amt],
                        ['user_id' => auth()->user()->id]
                        
                    ));
                    return redirect()->back()->with('success','Submitted successfully!!,  on the navigation menu, please click your username and then click on House Rent to start saving. Thank You!');
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