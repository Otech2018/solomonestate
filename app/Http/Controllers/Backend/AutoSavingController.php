<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Backend\Customs\CheckAccess;
use App\Http\Controllers\Controller;
use App\Models\AutoSaving;
use Illuminate\Http\Request;

class AutoSavingController extends Controller
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

            //  //list all auto mobile savings
        if(CheckAccess::check(55)){
             $mysavings = AutoSaving::where('status','!=',0)->paginate(100);
             $title = "All";
            return view('backend.auto_saving.index',['mysavings'=>$mysavings,'title'=>$title]);
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
        
            //  //list paid auto mobile savings
        if(CheckAccess::check(56)){
             $mysavings = AutoSaving::where('status',1)->paginate(100);
             $title = "Paid";
            return view('backend.auto_saving.index',['mysavings'=>$mysavings,'title'=>$title]);
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

    // status 1 => completed , 2 =>saving complete, 3=> saving not complete
    public function store(Request $request)
    {
        //        //store auto saving from users end
  $data = $this->validate($request, [
             
            'fname' => '',
            'mname' => '',
            'lname' => '',
            'email' => '',
            'dob' => '',
            'gender' => '',
            'kindred' => '',
            'village' => '',
            'town' => '',
            'country' => '',
            'state' => '',
            'state1' => '',
            'lga' => '',
            'lga1' => '',
            'office_address' => '',
            'phone1' => '',
            'phone2' => '',
            'acc_num' => '',
            'acc_name' => '',
            'acc_bank_name' => '',
            'next_of_kin_name' => '',
            'next_of_kin_reln' => '',
            'next_of_kin_phone' => '',
            'saving_purpose' => '',
            'saving_purpose1' => '',
            'saving_budget' => '',
            'saving_interval' => '',
            'saving_interval_no' => '',
            'saving_start_date' => '',
            'buy_for_u' => '',
            'type'=>'required|max:1999',
        ]);

if($request->input('type') == 1){
    $extension = $request->file('passport')->getClientOriginalExtension();
                        $fileNameToStorea = time().'a.'.$extension;
                        $pathp = $request->file('passport')->storeAs('public/autosave_images', $fileNameToStorea);
}else{
                        $fileNameToStorea = $request->input('passport');
}


              $saving_interval_amt =   $request->input('saving_budget')  /  $request->input('saving_interval_no');
             $AutoSave = AutoSaving::create(array_merge(
                        $data,
                        ['passport'=>$fileNameToStorea],
                        ['status' => 3],
                        ['saving_interval_amt' => $saving_interval_amt],
                        ['user_id' => auth()->user()->id]
                    ));
                    return redirect()->back()->with('success','Submitted successfully!!,  <a href="'. route('mysavings.index') . '" style="color:red"> <u> <b>Click here</b> </u> </a> to start saving. Thank You!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        // //  //list not paid auto mobile savings
        if(CheckAccess::check(57)){
             $mysavings = AutoSaving::where('status',3)->paginate(100);
             $title = "Not Paid";
            return view('backend.auto_saving.index',['mysavings'=>$mysavings,'title'=>$title]);
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
        //set auto saving as Paid
          $AutoSaving = AutoSaving::find($id);
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
       // ////set auto saving as Delete from user
          $AutoSaving = AutoSaving::find($id);
            $AutoSaving->status =0;
            $AutoSaving->save(); 
            return redirect()->back()->with('success','Savings Deleted Successfully!');
    }
}
