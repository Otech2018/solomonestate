<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Controllers\Backend\Customs\CheckAccess;
use App\Models\User;


class AdminUserController extends Controller
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
        if(CheckAccess::check(20)){
            $Users = User::where('status','!=',0)->paginate(20);
            return view('backend.admin_users.index',['Users'=>$Users]);
 
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
        //view User Details
        if(CheckAccess::check(23)){
            $User = User::find($id);
            return view('backend.admin_users.show',['User'=>$User]);
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
         //Suspend User
         if(CheckAccess::check(24)){
            $User = User::find($id);
            $User->status =6;
            $User->save();
            return redirect()->back()->with('success','User Suspended Successfully!');
        
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
        //Activate
        if(CheckAccess::check(22)){
            $User = User::find($id);
            $User->status =1;
            $User->save();
            return redirect()->back()->with('success','User Activated Successfully!');
        
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
        //Delete
        if(CheckAccess::check(21)){
            $User = User::find($id);
            $User->status =0;
            $User->save();
            return redirect()->back()->with('success','User Deleted Successfully!');
        
        }else{
            return redirect(route('admin.dashboard'))->with('error','Unauthorized Page. Access Denied!!!');
        }
    }
}
