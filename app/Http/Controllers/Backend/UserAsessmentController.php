<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Controllers\Backend\Customs\CheckAccess;
use App\Models\Accessment;
use App\Models\UserAssessment;
use App\Models\User;


class UserAsessmentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

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
        
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
         //Show user work on accessment
         if(CheckAccess::check(30)){
            $UserAssessment = UserAssessment::where('status',3)->where('accessment_id',$id)->first();
            $assessment = Accessment::findOrFail($id);
            return view('backend.accessment.show',['UserAssessment'=>$UserAssessment,
            'assessment'=>$assessment ]);

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
         //Approve Content
         if(CheckAccess::check(30)){
            
            $UserAssessment = UserAssessment::where('status',3)->where('accessment_id',$id)->first();
            
            $User = User::find($UserAssessment->user_id);
            $User->verification_status =1;
            $User->save();

            
            $UserAssessment->status =1;
            $UserAssessment->save();
           
           
            $assessment = Accessment::find($id);
            $assessment->status =4;
            $assessment->save();
           
            return redirect(route('accessment.show',12))->with('success','Content Approved!!!');
        
        }else{
            return redirect(route('admin.dashboard'))->with('error','Unauthorized Page. Access Denied!!!');
        }
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
        

        if(CheckAccess::check(30)){
            $this->validate($request, [
                'note' => 'required|string|max:255',
                ]);

               $UserAssessment = UserAssessment::where('status',3)->where('accessment_id',$id)->first();
               $UserAssessment->notes= $request->input('note');
               $UserAssessment->status =2;
               $UserAssessment->save();
           
           
            $assessment = Accessment::find($id);
            $assessment->status =2;
            $assessment->save();
           
            return redirect(route('accessment.show',12))->with('success','Content Approved!!!');
        
        }else{
            return redirect(route('admin.dashboard'))->with('error','Unauthorized Page. Access Denied!!!');
        }
    }
    

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
         //Reject Content
         if(CheckAccess::check(30)){
            
            $UserAssessment = UserAssessment::where('status',3)->where('accessment_id',$id)->first();
            $UserAssessment->status =0;
            $UserAssessment->save();

            $assessment = Accessment::find($id);
            $assessment->status =1;
            $assessment->save();
           
            return redirect(route('accessment.show',12))->with('success','Content Rejected!!!');
        
        }else{
            return redirect(route('admin.dashboard'))->with('error','Unauthorized Page. Access Denied!!!');
        }
    }
}
