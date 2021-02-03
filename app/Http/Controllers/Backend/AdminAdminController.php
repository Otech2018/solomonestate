<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Backend\Customs\CheckAccess;
use App\Http\Controllers\Controller;
use App\Models\User as Admin;
use App\Models\User_group;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;




class AdminAdminController extends Controller
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
        if(CheckAccess::check(36)){
            $Admins = Admin::where('status','!=',0)->where('user_type','!=',0)->paginate(20);
             return view('backend.admin_admin.index',['Admins'=>$Admins]);
 
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
        if(CheckAccess::check(41)){
            $User_groups = User_group::all();
            
            return view('backend.admin_admin.create',['User_groups'=>$User_groups]);

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
    //Store New Admin
    
    if(CheckAccess::check(41)){
        $this->validate($request, [
            'user_type' => 'required|string|max:255',
           'username' => 'required|string|max:955',
           'email' => 'required|email|unique:admins|max:955',
           'phone' => 'required|string|unique:admins|max:955',
           'gender' => 'required|string|max:955',
            ]);

        $Admin =new Admin;


        if($request->hasFile('cover_image')){
            $fileNameWithExt = $request->file('cover_image')->getClientOriginalName();
            //get just filename         
            $filename = pathinfo($fileNameWithExt, PATHINFO_FILENAME);
            //get just ext
            $extension = $request->file('cover_image')->getClientOriginalExtension();

            //fileNametostore
          //  $fileNameToStore = $filename.'_'.time().'.'.$extension;
            $fileNameToStore = time().'.'.$extension;
            //upload Image

            
            $path = $request->file('cover_image')->storeAs('public/profile_img', $fileNameToStore);
            
        }


         $Admin->first_name= $request->input('first_name');
         $Admin->middle_name= $request->input('middle_name');
         $Admin->last_name= $request->input('last_name');
         $Admin->phone= $request->input('phone');
         $Admin->gender= $request->input('gender');
         $Admin->user_type= $request->input('user_type');
         $Admin->username= $request->input('username');
         $Admin->email= $request->input('email');
         $Admin->password= Hash::make('password');

         if($request->hasFile('cover_image')){
            $Admin->pic= $fileNameToStore;
        }
            $Admin->save();
                return redirect()->back()->with('success','Admin Created  Successfully!');
    
    }else{
        return redirect(route('admin.dashboard'))->with('error','Unauthorized Page. Access Denied!!!');
    }


    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //view Admin Details
        if(CheckAccess::check(39)){
            $Admin = Admin::find($id);
            return view('backend.admin_admin.show',['Admin'=>$Admin]);
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
         if(CheckAccess::check(38)){
            $Admin = Admin::find($id);
            $Admin->status =2;
            $Admin->save();
            return redirect()->back()->with('success','Admin Suspended Successfully!');
        
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
        if(CheckAccess::check(37)){
            $Admin = Admin::find($id);
            $Admin->status =1;
            $Admin->save();
            return redirect()->back()->with('success','Admin Activated Successfully!');
        
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
        if(CheckAccess::check(40)){
            $Admin = Admin::find($id);
            $Admin->status =0;
            $Admin->save();
            return redirect()->back()->with('success','Admin Deleted Successfully!');
        
        }else{
            return redirect(route('admin.dashboard'))->with('error','Unauthorized Page. Access Denied!!!');
        }
    }
}
