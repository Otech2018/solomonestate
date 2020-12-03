<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User_group;
use App\Models\Admin;
use App\Models\Perform_Task;
use App\Models\Task;

class User_groupController extends Controller
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
        if(auth()->user()->user_type ==2){
            $User_groups = User_group::where('status','=','1')->paginate(20);
           return view('backend.user_grp.index',['User_groups'=>$User_groups]);
        }
        return redirect(route('home'))->with('error','Unauthorized Page. Access Denied!!!');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        if(auth()->user()->user_type ==2){
            return view('backend.user_grp.create');
         }
         return redirect(route('home'))->with('error','Unauthorized Page. Access Denied!!!');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        if(auth()->user()->user_type ==2){
            $this->validate($request, [
                'name' => 'required|string|max:255',
                ]);

        $User_group =new User_group;
        $User_group->name= $request->input('name');
        $User_group->desc= $request->input('description');
         $User_group->save();
         $permission = Task::all();

         foreach( $permission as $permission){
            $perform_task =new Perform_task;
             $perform_task->menu_id= $permission->menu_id;
            $perform_task->status= 0;
            $perform_task->user_group_id= $User_group->id;
            $perform_task->task_no= $permission->task_no;
            $perform_task->task_id= $permission->id; 
            $perform_task->save();
        }

       

        return redirect(route('user_group.index'))->with('success','User Group Created Successfully!');
        }
        return redirect(route('home'))->with('error','Unauthorized Page. Access Denied!!!');
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
        if(auth()->user()->user_type ==2){
            $User_group = User_group::find($id);
            return view('backend.user_grp.edit',['User_group'=>$User_group]);
        }
        return redirect(route('home'))->with('error','Unauthorized Page. Access Denied!!!');
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
        if(auth()->user()->user_type ==2){
            $this->validate($request, [
                'name' => 'required|string|max:255',
                ]);

        
        $User_group = User_group::find($id);
        $User_group->name= $request->input('name');
        $User_group->desc= $request->input('description');
         $User_group->save();
        return redirect(route('user_group.index'))->with('success','User Group Edited Successfully!');
        }
        return redirect(route('home'))->with('error','Unauthorized Page. Access Denied!!!');
        
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




    public function addAdiminToUserGrp()
    {
        
         if(auth()->user()->user_type ==2){
            $admins = Admin::where('status','=','1')->paginate(20);
            $User_groups = User_group::where('status','=','1')->get();
           return view('backend.user_grp.addAdiminToUserGrp',['admins'=>$admins, 'User_groups'=>$User_groups]);
        }
        return redirect(route('home'))->with('error','Unauthorized Page. Access Denied!!!');


    }


    public function updateAddAdiminToUserGrp(Request $request, $id)
    {
        if(auth()->user()->user_type ==2){
            $this->validate($request, [
                'user_type' => 'required|string|max:255',
                ]);

        
        $Admin = Admin::find($id);
        $Admin->user_type= $request->input('user_type');
         $Admin->save();
        return redirect()->back()->with('success','Admin User Group Edited Successfully!');
        }
        return redirect(route('home'))->with('error','Unauthorized Page. Access Denied!!!');
        
    }


    public function addAdiminToUserGrp1($id)
    {
        
         if(auth()->user()->user_type ==2){
            $admins = Admin::where('status','=','1')->where('user_type','=',$id)->paginate(20);
            $User_groups = User_group::where('status','=','1')->get();
            $User_group1 = User_group::find($id);
           return view('backend.user_grp.addAdiminToUserGrp1',['admins'=>$admins, 'User_groups'=>$User_groups, 'User_group1'=>$User_group1]);
        }
        return redirect(route('home'))->with('error','Unauthorized Page. Access Denied!!!');


    }


    public function setTask($id)
    {
        
         if(auth()->user()->user_type ==2){
            $Perform_Tasks = Perform_Task::where('user_group_id','=',$id)->paginate(20);
            $User_group1 = User_group::find($id);
           return view('backend.user_grp.setTask',['Perform_Tasks'=>$Perform_Tasks,  'User_group1'=>$User_group1]);
        }
        return redirect(route('home'))->with('error','Unauthorized Page. Access Denied!!!');


    }


}
